<?php

namespace TS\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TS\LDAPBundle\Entity\TSadmin;
use TS\LDAPBundle\Entity\Candidate;
use TS\LDAPBundle\Form\CandidateEditType;
use TS\LDAPBundle\Form\TSadminType;
use TS\LDAPBundle\Form\TSadminEditType;
use TS\LDAPBundle\Form\TSadminSAEditType;
use TS\LDAPBundle\Form\CandidateType;
use TS\AdminBundle\Entity\Invitation;

//use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller {

    public function testAction() {
        return $this->render('TSAdminBundle:Tables:test.html.twig');
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

// ******************* add different users 
    public function addCandidateAction($pages, Request $request) {

        $candidate = new Candidate();
        $form = $this->createForm(new CandidateType(), $candidate);
        $request = $this->get('request');
        $session = $request->getSession();

        if ($session->get('logged_in') === true) {
            
            if ($request->getMethod() == 'POST') {
                //****************search**************/
                if ($this->getRequest()->request->get('submitAction') == 'submit') {
                    $username = $request->get('username');
                    $state = $request->get('state');

                    $users = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('TSLDAPBundle:Candidate')
                            ->getSpecificCandidate(8, 1, $username, $state);

                    return $this->render('TSAdminBundle:Users:addCandidat.html.twig', array
                                (
                                'form' => $form->createView(),
                                'users' => $users,
                                'pages' => $pages,
                                'nombrePages' => ceil(count($users) / 8)
                    ));
                }
                //*******end search***************/
                else {
                    $form->bind($request);
                    if ($form->isValid()) {

                        $candidate->setEmail($candidate->getUsername() . "@sungard.com");
                        $candidate->setRole("candidate");
                        $candidate->setState("enable");

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($candidate);
                        $em->flush();
                        
                        $idtests = $request->get('tests');
                        $date = $request->get('date');
                        $hour = $request->get('hour');
                        
                        $invitation = new Invitation;
                        
                        $invitation->setTests($idtests);
                        $invitation->setObject('test');
                        $invitation->setDate($date);
                        $invitation->setHour($hour);
                        $invitation->addCandidate($candidate);
                
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($invitation);
                        $em->flush();
                        
                        $response = $this->forward('TSAdminBundle:Notification:persist', array(
                        'invitation' => $invitation,
                       
                        'candidate' => $candidate,
                        ));

                    } else {
                        $this->get('session')->getFlashBag()->add(
                                'warnning', 'This username is already in use!'
                        );
                    }
                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                }
            } 
            
            $repositoryTest = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests');

            $allTests = $repositoryTest->getTests();
            $users = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSLDAPBundle:Candidate')
                    ->getSpecificCandidats(8, $pages);

            return $this->render('TSAdminBundle:Users:addCandidate.html.twig', array
                        (
                        'form' => $form->createView(),
                        'users' => $users,
                        'pages' => $pages,
                        'allTests' => $allTests,
                        'nombrePages' => ceil(count($users) / 8)
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }
    
    
    
     public function persistAction($invitation, $candidate) {

// save a new trace and status for the specific candidate



        $repositoryTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');
        $candidateTests = $candidate->getCandidatTests();

//        $idTest = array();
//        foreach ($candidateTests as $candidateTest) {
//            array_push($idTest, $candidateTest->getTestId());
//        }
// save tests in candidateTests

        $tests = $invitation->getTests();
        foreach ($tests as $test) {
//                if (!(in_array($test, $idTest))) {
            $tst = $repositoryTests->findOneBy(array('id' => $test));
            $candidateTest = new CandidatTests;
            $candidateTest->setTestId($test);
            $candidateTest->setName($tst->getName());
            $candidateTest->setState('no');

            $candidate->addCandidatTest($candidateTest);
//                }
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($candidate);
        $em->flush();
                                
        $this->get('session')->getFlashBag()->add(
                'notice', 'User was added successfully!'
        );
        return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
    }

    public function addRHAction() {
        $RH = new TSadmin;
        $form = $this->createForm(new TSadminType, $RH);
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            $users = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSLDAPBundle:TSadmin')
                    ->getRHs();

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $RH->setEmail($RH->getUsername() . "@sungard.com");
                    $RH->setRole("RH");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($RH);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'RH User was added successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addRH'));
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'This username is already in use!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addRH'));
                }
            }
            return $this->render('TSAdminBundle:Users:addRH.html.twig', array
                        (
                        'form' => $form->createView(),
                        'users' => $users,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function addAdminAction() {
        $admin = new TSadmin;
        $form = $this->createForm(new TSadminType, $admin);
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            $users = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSLDAPBundle:TSadmin')
                    ->getAdmins();

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $admin->setEmail($admin->getUsername() . "@sungard.com");
                    $admin->setRole("admin");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($admin);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Super Admin was added successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addAdmin'));
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'This username is already in use!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addAdmin'));
                }
            }
            return $this->render('TSAdminBundle:Users:addSARH.html.twig', array
                        (
                        'form' => $form->createView(),
                        'users' => $users,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

// ******************* edit different users 
    public function selectEditUserAction($id, $role, Request $request) {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');

        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new TSadminEditType(), $user);
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                }
            }

            return $this->render('TSAdminBundle:Users:editUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
                        'id' => $id,
                        'role' => $role,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectEditSAUserAction($id, $role, Request $request) {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');

        $user = $repository->findOneBy(array('id' => $id));

        $form = $this->createForm(new TSadminSAEditType(), $user);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            return $this->render('TSAdminBundle:Users:editSAUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
                        'id' => $id,
                        'role' => $role,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectEditCandidateAction($id, $role, Request $request) {

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:Candidate');

        $user = $repository->findOneBy(array('id' => $id));

        $form = $this->createForm(new CandidateEditType(), $user);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            return $this->render('TSAdminBundle:Users:editCandidate.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
                        'id' => $id,
                        'role' => $role,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editCandidateAction(Request $request) {

        $id = $request->query->get('id');
        $role = $request->query->get('role');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:Candidate');

        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new CandidateEditType(), $user);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {

                    $user->setEmail($user->getUsername() . "@sungard.com");
                    $user->setState($user->getState());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                            'notice', 'User was updated successfully!'
                    );

                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'User was not updated successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                }
            }
            return $this->render('TSAdminBundle:Users:editCandidate.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editUserAction(Request $request) {

        $id = $request->query->get('id');
        $role = $request->query->get('role');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');

        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new TSadminEditType(), $user);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $user->setEmail($user->getUsername() . "@sungard.com");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'User was updated successfully!'
                    );
                    switch ($role) {
                        case'candidate': return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                            break;
                        case 'RH': return $this->redirect($this->generateUrl('ts_admin_addRH'));
                            break;
                        case 'admin': return $this->redirect($this->generateUrl('ts_admin_addAdmin'));
                            break;
                    }
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'User was not updated! invalid data'
                    );

                    switch ($role) {
                        case'candidate': return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                            break;
                        case 'RH': return $this->redirect($this->generateUrl('ts_admin_addRH'));
                            break;
                        case 'admin': return $this->redirect($this->generateUrl('ts_admin_addAdmin'));
                            break;
                    }
                }
            }
            return $this->render('TSAdminBundle:Users:editUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editSAUserAction(Request $request) {

        $id = $request->query->get('id');
        $role = $request->query->get('role');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');

        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new TSadminSAEditType(), $user);
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $user->setEmail($user->getUsername() . "@sungard.com");
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'User was updated successfully!'
                    );

                    return $this->redirect($this->generateUrl('ts_admin_addRH'));
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'User was not updated! invalid data'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addRH'));
                }
            }
            return $this->render('TSAdminBundle:Users:editUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

// ******************* edit different users 
    public function selectRemoveUserAction($id, $role, Request $request) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');
        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createFormBuilder()->getForm();


        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            return $this->render('TSAdminBundle:Users:removeUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
                        'id' => $id,
                        'role' => $role,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectRemoveCandidateAction($id, $role, Request $request) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:Candidate');
        $user = $repository->findOneBy(array('id' => $id));
        $form = $this->createFormBuilder()->getForm();
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);

                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($user);
                    $em->flush();
                    return $this->redirect($this->generateUrl('ts_admin_offers'));
                }
            }

            return $this->render('TSAdminBundle:Users:removeCandidat.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
                        'id' => $id,
                        'role' => $role,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeUserAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');
        echo $id;
        $role = $request->query->get('role');
        echo ($role);
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:TSadmin');

        $user = $repository->findOneBy(array('id' => $id));
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($user);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'User was deleted successfully!'
                    );
                    switch ($role) {
                        case'candidate': return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                            break;
                        case 'RH': return $this->redirect($this->generateUrl('ts_admin_addRH'));
                            break;
                        case 'admin': return $this->redirect($this->generateUrl('ts_admin_addAdmin'));
                            break;
                    }
                }
            }
            return $this->render('TSAdminBundle:Users:removeUser.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeCandidateAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');
        echo $id;
        $role = $request->query->get('role');
        echo ($role);
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSLDAPBundle:Candidate');

        $user = $repository->findOneBy(array('id' => $id));
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($user);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Candidate was deleted successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                } else {
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Candidate was not deleted successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_addCandidate'));
                }
            }
            return $this->render('TSAdminBundle:Users:removeCandidat.html.twig', array(
                        'form' => $form->createView(),
                        'user' => $user,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

}
