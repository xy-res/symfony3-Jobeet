<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class JobControllerTest extends WebTestCase
{
    /*
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        // Create a new entry in the database
        $crawler = $client->request('GET', '/job/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /job/");
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'appbundle_job[field_name]'  => 'Test',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Update')->form(array(
            'appbundle_job[field_name]'  => 'Foo',
            // ... other fields to fill
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    */


    public function testIndex()
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        $this->assertEquals('AppBundle\Controller\JobController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue($crawler->filter('.jobs td.position:contains("Expired")')->count() == 0);
        $kernel = static::createKernel();
        $kernel->boot();
        $max_jobs_on_homepage = $kernel->getContainer()->getParameter('max_jobs_on_homepage');
        $this->assertTrue($crawler->filter('.category_programming tr')->count() <= $max_jobs_on_homepage);
    }

    public function testJobForm()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/job/new');
        $this->assertEquals('AppBundle\Controller\JobController::newAction', $client->getRequest()->attributes->get('_controller'));

        $form = $crawler->selectButton('Preview your job')->form(array(
            'job[company]'      => 'Sensio Labs',
            'job[url]'          => 'http://www.sensio.com/',
            'job[file]'         => __DIR__.'/../../../../../web/bundles/app/images/sensio-labs.gif',
            'job[position]'     => 'Developer',
            'job[location]'     => 'Atlanta, USA',
            'job[description]'  => 'You will work with symfony to develop websites for our customers.',
            'job[howToApply]' => 'Send me an email',
            'job[email]'        => 'for.a.job@example.com',
            'job[isPublic]'    => false,
        ));

        $client->submit($form);
        $this->assertEquals('AppBundle\Controller\JobController::newAction', $client->getRequest()->attributes->get('_controller'));
    }

    public function createJob($values = array(), $publish = false)
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/job/new');
        $form = $crawler->selectButton('Preview your job')->form(array_merge(array(
            'job[company]'      => 'Sensio Labs',
            'job[url]'          => 'http://www.sensio.com/',
            'job[position]'     => 'Developer',
            'job[location]'     => 'Atlanta, USA',
            'job[description]'  => 'You will work with symfony to develop websites for our customers.',
            'job[howToApply]'   => 'Send me an email',
            'job[email]'        => 'for.a.job@example.com',
            'job[isPublic]'     => false,
        ), $values));

        $client->submit($form);
        $client->followRedirect();

        if($publish) {
            $crawler = $client->getCrawler();
            $form = $crawler->selectButton('Publish')->form();
            $client->submit($form);
            $client->followRedirect();
        }

        return $client;
    }

    public function getJobByPosition($position)
    {
        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        $query = $em->createQuery('SELECT j from AppBundle:Job j WHERE j.position = :position');
        $query->setParameter('position', $position);
        $query->setMaxResults(1);

        return $query->getSingleResult();
    }

    public function testPublishJob()
    {
        $client = $this->createJob(array('job[position]' => 'FOO1'));
        $crawler = $client->getCrawler();
        $form = $crawler->selectButton('Publish')->form();
        $client->submit($form);

        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        $query = $em->createQuery('SELECT count(j.id) from AppBundle:Job j WHERE j.position = :position AND j.isActivated = 1');
        $query->setParameter('position', 'FOO1');
        $this->assertTrue(0 < $query->getSingleScalarResult());
    }
    public function testDeleteJob()
    {
        $client = $this->createJob(array('job[position]' => 'FOO2'));
        $crawler = $client->getCrawler();
        $form = $crawler->selectButton('Delete')->form();
        $client->submit($form);

        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        $query = $em->createQuery('SELECT count(j.id) from AppBundle:Job j WHERE j.position = :position');
        $query->setParameter('position', 'FOO2');
        $this->assertTrue(0 == $query->getSingleScalarResult());
    }

    public function testEditJob()
    {
        $client = $this->createJob(array('job[position]' => 'FOO3'), true);
        $crawler = $client->getCrawler();
        $crawler = $client->request('GET', sprintf('/job/%s/edit', $this->getJobByPosition('FOO3')->getToken()));
        $this->assertTrue(404 === $client->getResponse()->getStatusCode());
    }

    public function testExtendJob()
    {
        // A job validity cannot be extended before the job expires soon
        $client = $this->createJob(array('job[position]' => 'FOO4'), true);
        $crawler = $client->getCrawler();
        $this->assertTrue($crawler->filter('input[type=submit]:contains("Extend")')->count() == 0);

        // A job validity can be extended when the job expires soon

        // Create a new FOO5 job
        $client = $this->createJob(array('job[position]' => 'FOO5'), true);
        // Get the job and change the expire date to today
        $kernel = static::createKernel();
        $kernel->boot();
        $em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
        $job = $em->getRepository('AppBundle:Job')->findOneByPosition('FOO5');
        $job->setExpiresAt(new \DateTime());
        $em->flush();
        // Go to the preview page and extend the job
        $crawler = $client->request('GET', sprintf('/job/%s/%s/%s/%s', $job->getCompanySlug(), $job->getLocationSlug(), $job->getToken(), $job->getPositionSlug()));
        $crawler = $client->getCrawler();
        $form = $crawler->selectButton('Extend')->form();
        $client->submit($form);
        // Reload the job from db
        $job = $this->getJobByPosition('FOO5');
        // Check the expiration date
        $this->assertTrue($job->getExpiresAt()->format('y/m/d') == date('y/m/d', time() + 86400 * 30));
    }
}
