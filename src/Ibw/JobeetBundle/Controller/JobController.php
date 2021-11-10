<?php

namespace Ibw\JobeetBundle\Controller;

use Ibw\JobeetBundle\Entity\Job;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{
    /**
     * Lists all job entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
 
        $entities = $em->getRepository('IbwJobeetBundle:Job')->findAll();
 
        return $this->render('IbwJobeetBundle:Job:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Creates a new job entity.
     *
     */
    public function newAction(Request $request)
    {
        $job = new Job();
        $form = $this->createForm('Ibw\JobeetBundle\Form\JobType', $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($job);
            $em->flush();

            return $this->redirectToRoute('ibw_job_show', array('id' => $job->getId()));
        }

        return $this->render('job/new.html.twig', array(
            'job' => $job,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a job entity.
     *
     */
    public function showAction(Job $job)
    {
        $em = $this->getDoctrine()->getManager();
       
        $job = $em->getRepository('IbwJobeetBundle:Job')->find($job->getId());
        if (!$job) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }
        $deleteForm = $this->createDeleteForm($job);
        return $this->render('IbwJobeetBundle:Job:show.html.twig', array(
            'job' => $job,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing job entity.
     *
     */
    public function editAction(Request $request, Job $job)
    {
        $deleteForm = $this->createDeleteForm($job);
        $editForm = $this->createForm('Ibw\JobeetBundle\Form\JobType', $job);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ibw_job_edit', array('id' => $job->getId()));
        }

        return $this->render('job/edit.html.twig', array(
            'job' => $job,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a job entity.
     *
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

        return $this->redirectToRoute('ibw_job_index');
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
            ->setAction($this->generateUrl('ibw_job_delete', array('id' => $job->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
