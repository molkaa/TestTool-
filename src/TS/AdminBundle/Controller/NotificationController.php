<?php

namespace TS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TS\CandidatBundle\Entity\CandidatTests;
use TS\AdminBundle\Entity\Recomandation;
use TS\AdminBundle\Form\RecomandationType;
use TS\AdminBundle\Entity\FeedBack;
use TS\AdminBundle\Form\FeedBackType;
use TS\AdminBundle\Entity\Evaluator;
use TS\AdminBundle\Entity\Invitation;
use TS\AdminBundle\Entity\Status;
use TS\AdminBundle\Entity\Trace;
use TS\AdminBundle\Entity\Offers;

class NotificationController extends Controller {

    public function persistOtherInvitationAction(Request $request, $id) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {



            $repositoryCandidate = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSLDAPBundle:Candidate');
            $candidate = $repositoryCandidate->findOneBy(array('id' => $id));

            $repositoryTest = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests');

            $allTests = $repositoryTest->getTests();



          


            $invitation = new Invitation;

            if ($request->getMethod() == 'POST') {

// save invitation with different parameters
                $object = 'Test';
                $date = $request->get('date');
                $hour = $request->get('hour');
                $idtests = $request->get('tests');

                if ($idtests == "") {
                    $this->get('session')->getFlashBag()->add(
                            'warnning', 'Please select Test(s)!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_cvs'));
                }
                $invitation->setTests($idtests);
                $invitation->setObject($object);
                $invitation->setDate($date);
                $invitation->setHour($hour);
                $invitation->addCandidate($candidate);
                
                 $em = $this->getDoctrine()->getManager();
                $em->persist($invitation);
                $em->flush();

                $response = $this->forward('TSAdminBundle:Notification:persist', array(
                    'invitation' => $invitation,
                    'object' => $object,
                    'candidate' => $candidate,
                ));
                return $response;
            }
//**********************************************************************
            return $this->render('TSAdminBundle:Notification:otherInvitation.html.twig', array(
                        'allTests' => $allTests,
                        'candidate' => $candidate
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
                'notice', 'Test(s) was affected successfully!'
        );
        return $this->redirect($this->generateUrl('ts_admin_cvs'));
    }

//    ***********************Persist CandidateTests details  *************************

    public function persistCandidateTestsAction($test, $candidate) {

        $em = $this->getDoctrine()->getManager();

        $candidateTest = new CandidatTests;
        $candidateTest->setName($test);
        $candidateTest->setState('no');
        $candidate->addCandidatTest($candidateTest);

        $em->persist($candidateTest);
        $em->flush();

        $em->persist($candidate);
        $em->flush();
    }

}
