<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
/**
 * Job controller.
 *
 * @Route("job")
 */
class JobController extends Controller
{
    /**
     * Lists all job entities.
     *
     * @Route("/", name="job_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Category')->getWithJobs();

        foreach ($categories as $category) {
            $category->setActiveJobs($em->getRepository('AppBundle:Job')->getActiveJobs($category->getId(),$this->container->getParameter('max_jobs_on_homepage')));
            $category->setMoreJobs($em->getRepository('AppBundle:Job')->countActiveJobs($category->getId()) - $this->container->getParameter('max_jobs_on_homepage'));
        }
        return $this->render('job/index.html.twig', array(
            'categories' => $categories
        ));


    }

    /**
     * Creates a new job entity.
     *
     * @Route("/job/new", name="job_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $job->setType('full-time');
        $form = $this->createForm('AppBundle\Form\JobType', $job);
        $form->handleRequest($request);
       // dump($form->isValid());exit();
        if ($form->isSubmitted() && $form->isValid()) {

            $job->setUpdateAt(new  \DateTime('now'));

            $file = $job->getLogo();

            if($file instanceof UploadedFile) {
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('jobs_directory'),
                    $fileName
                );
                $job->setLogo($fileName);
                $job->setUpdateAt(new \DateTime('now'));
            }
            $em = $this->getDoctrine()->getManager();

            //dump($job);exit();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('job_preview', array(
                'token' => $job->getToken(),
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'position' => $job->getPositionSlug()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a job entity.
     *
     * @Route("/job/{company}/{location}/{id}/{position}", name="job_show", requirements={"id" = "\d+"})
     * @ParamConverter("job", options={"repository_method" = "getActiveJob"})
     * @Method("GET")
     */
    public function showAction(Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing job entity.
     *
     * @Route("/job/{token}/edit", name="job_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Job $job)
    {
        if ($job->getIsActivated()) {
            throw $this->createNotFoundException('Job is activated and cannot be edited.');
        }
        $deleteForm = $this->createDeleteForm($job);
        $publishForm = $this->createPublishForm($job);
        $editForm = $this->createForm('AppBundle\Form\JobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            //return $this->redirectToRoute('job_edit', array('id' => $job->getId()));
            return $this->redirectToRoute('job_preview', array(
                'token' => $job->getToken(),
                'company' => $job->getCompanySlug(),
                'location' => $job->getLocationSlug(),
                'position' => $job->getPositionSlug()));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'publish_form'=>$publishForm->createView(),
        ));
    }

    /**
     * Deletes a job entity.
     *
     * @Route("/job/{token}/delete", name="job_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Job $job)
    {
        $form = $this->createDeleteForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($job);
            $em->flush();
        }

        return $this->redirectToRoute('job_index');
    }

    /**
     * Creates a form to delete a job entity.
     *
     * @param Job $job The job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Job $job)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('job_delete', array('token' => $job->getToken())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Finds and displays the preview page for a job entity.
     *
     * @Route("/job/{company}/{location}/{token}/{position}", name="job_preview", requirements={"id" = "\w+"})
     * @ParamConverter("job", options={"exclude": {"company", "location", "position"}})
     * @Method("GET")
     */
    public function previewAction(Job $job)
    {

        $deleteForm = $this->createDeleteForm($job);

        $publishForm = $this->createPublishForm($job);
        $extendForm = $this->createExtendForm($job);

        return $this->render('job/show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
            'publish_form' => $publishForm->createView(),
            'extend_form' => $extendForm->createView(),
        ));
    }

    /**
     * Publishes a job entity.
     *
     * @Route("/job/{token}/publish", name="job_publish")
     * @Method("POST")
     */
    public function publishAction(Request $request, Job $job)
    {
        $form = $this->createPublishForm($job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $job->publish();
            $em->persist($job);
            $em->flush();

            $this->addFlash('notice', 'Your job is now online for 30 days.');
        }

        return $this->redirectToRoute('job_preview', array(
            'token' => $job->getToken(),
            'company' => $job->getCompanySlug(),
            'location' => $job->getLocationSlug(),
            'position' => $job->getPositionSlug()));
    }

    /**
     * Creates a form to publish a job entity.
     *
     * @param Job $job The job entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createPublishForm(Job $job)
    {

        return $this->createFormBuilder(array('token' => $job->getToken()))
            ->add('token', HiddenType::class)
            ->setMethod('POST')
            ->getForm()
            ;
    }


    /**
     * Extends a job entity.
     *
     * @Route("/job/{token}/extend", name="job_extend")
     * @Method("POST")
     */
    public function extendAction(Request $request, Job $job)
    {
        $form = $this->createExtendForm($job);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            if (!$job->extend()) {
                throw $this->createNotFoundException('Unable to extend the Job.');
            }

            $em->persist($job);
            $em->flush();

            $this->addFlash('notice', sprintf('Your job validity has been extended until %s.', $job->getExpiresAt()->format('m/d/Y')));
        }

        return $this->redirectToRoute('job_preview', array(
            'token' => $job->getToken(),
            'company' => $job->getCompanySlug(),
            'location' => $job->getLocationSlug(),
            'position' => $job->getPositionSlug()));
    }

    private function createExtendForm(Job $job)
    {
        return $this->createFormBuilder(array('token' => $job->getToken()))
            ->add('token', HiddenType::class)
            ->setMethod('POST')
            ->getForm()
            ;
    }
}
