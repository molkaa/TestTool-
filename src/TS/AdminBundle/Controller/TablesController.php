<?php

namespace TS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TS\AdminBundle\Form\EditEstablishmentType;
use TS\AdminBundle\Entity\EditEstablishment;
use TS\AdminBundle\Form\EditDiplomaType;
use TS\AdminBundle\Entity\EditDiploma;
use TS\AdminBundle\Form\EditTechnologiesType;
use TS\AdminBundle\Entity\EditTechnologies;
use TS\AdminBundle\Form\EditLanguagesType;
use TS\AdminBundle\Entity\EditLanguages;
use TS\AdminBundle\Form\EditTestsType;
use TS\AdminBundle\Entity\EditTests;
use TS\AdminBundle\Entity\EditTeams;
use TS\AdminBundle\Form\EditTeamsType;
use TS\AdminBundle\Entity\Position;
use TS\AdminBundle\Form\EditPositionType;
use TS\AdminBundle\Entity\LevelQuestion;
use TS\AdminBundle\Form\EditLevelQuestionType;

class TablesController extends Controller {

    public function testAction() {
        return $this->render('TSAdminBundle:Tables:test.html.twig');
    }

    public function editLevelQuestionAction(Request $request) {

        $entity = 'TSAdminBundle:LevelQuestion';
        $entityType = 'TS\AdminBundle\Form\LevelQuestionEditType';

        $levelquestion = new LevelQuestion();

        $form = $this->createForm(new EditLevelQuestionType(), $levelquestion);
        $request = $this->get('request');
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            $values = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:LevelQuestion')
                    ->getLevelsQuestion();

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($levelquestion);
                    $em->flush();
                    return $this->redirect($this->generateUrl('ts_admin_editLevelQuestion'));
                }
            }
            return $this->render('TSAdminBundle:Tables:editLevelQuestion.html.twig', array('form' => $form->createView(),
                        'values' => $values,
                        'entity' => $entity,
                        'entityType' => $entityType,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editTestsAction(Request $request) {

        $entity = 'TSAdminBundle:EditTests';
        $entityType = 'TS\AdminBundle\Form\TestsEditEditType';

        $test = new EditTests;

        $form = $this->createForm(new EditTestsType, $test);
        $request = $this->get('request');
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            $values = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($test);
                    $em->flush();
                     $this->get('session')->getFlashBag()->add(
                        'notice', 'Test Type was created successfully!'
                );
                    return $this->redirect($this->generateUrl('ts_admin_editTests'));
                }
            }
            return $this->render('TSAdminBundle:Tables:editTests.html.twig', array('form' => $form->createView(),
                        'values' => $values,
                        'entity' => $entity,
                        'entityType' => $entityType,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectEditValueAction($id, $entity, $entityType, Request $request) {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository($entity);

        $value = $repository->findOneBy(array('id' => $id));

        $form = $this->createForm(new

                $entityType(), $value);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($value);
                    $em->flush();
// On définit un message flash
                    $this->get('session')->getFlashBag()->add('info', 'offer edit');
                    return $this->redirect($this->generateUrl('ts_admin_offers'));
                }
            }

            return $this->render('TSAdminBundle:Tables:editValue.html.twig', array('form' => $form->createView(),
                        'value' => $value,
                        'id' => $id,
                        'entity' => $entity,
                        'entityType' => $entityType,
            ));
///***************************************************
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editValueAction(Request $request) {

        $id = $request->query->get('id');
        $entity = $request->query->get('entity');
        $entityType = $request->query->get('entityType');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository($entity);

        $value = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new $entityType(), $value);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($value);
                    $em->flush();

                     $this->get('session')->getFlashBag()->add(
                        'notice', 'Test Type was updated successfully!'
                );
                    switch ($entity) {
                        case

                        'TSAdminBundle:EditTests': return $this->redirect($this->generateUrl('ts_admin_editTests'));
                            break;
                    }
                }
            }

            return $this->render('TSAdminBundle:Tables:editValue.html.twig', array(
                        'form' => $form->createView(),
                        'value' => $value,
            ));
///***************************************************
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectRemoveValueAction($id, $entity, Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository($entity);

        $value = $repository->findOneBy(array('id' => $id));
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);

                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($value);
                    $em->flush();
                    return $this->redirect($this->generateUrl('ts_admin_offers'));
                }
            }

            return $this->render('TSAdminBundle:Tables:removeValue.html.twig', array(
                        'form' => $form->createView(),
                        'value' => $value,
                        'id' => $id,
                        'entity' => $entity,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeValueAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');
        $entity = $request->query->get('entity');

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository($entity);

        $value = $repository->findOneBy(array('id' => $id));

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($value);
                    $em->flush();
                     $this->get('session')->getFlashBag()->add(
                        'notice', 'Test Type was deleted successfully!'
                );
                    switch ($entity) {
                        case

                        'TSAdminBundle:EditTests': return $this->redirect($this->generateUrl('ts_admin_editTests'));
                            break;
                    }
                }
            }
            return $this->render('TSAdminBundle:Tables:removeValue.html.twig', array(
                        'form' => $form->createView(),
                        'value' => $value,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

}
