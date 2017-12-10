<?php

namespace TS\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TS\AdminBundle\Form\OffersType;
use TS\AdminBundle\Form\OffersEditType;
use TS\AdminBundle\Entity\Offers;

class AdminController extends Controller {

    public function adminAction() {

        return $this->render('TSAdminBundle:Admin:admin.html.twig');
    }

    public $exp = array('00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10');
    public $establishment = array('INSAT', 'ESPRIT', 'ENSI', 'ISET\'COM', 'SUP\'COM', 'ISET', 'ISG', 'IHEC', 'FST', 'ENIT', 'Ruby', 'ENIG', 'ENIS', 'ISI', 'Other');
    public $diploma = array('Technician', 'License', 'BA', 'MA', 'Engineering', 'MBA', 'PhD');
    public $technologies = array('Java', 'JAVA/JEE', 'C', 'C++', 'ASP', 'C#', 'VB', 'PHP', 'PHP5', 'MATLAB', 'Ruby', 'HTML', 'Python', 'CSS', 'JavaScript', 'Jquery', 'Other');

   

   
    public function testAction() {
        return $this->render('TSAdminBundle:Admin:Test:test.html.twig');
    }

    
    public function testTraceAction($id, $dateId) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {

            $trace = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Trace')
                    ->findOneBy(array('id' => $dateId));
            $date = $trace->getDate();
            $test = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSCandidatBundle:CandidatTests')
                    ->testTrace($id, $date);

            return $this->render('TSAdminBundle:Admin:traceTest.html.twig', array(
                        'test' => $test[0],
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    //******************************** show all candidates with their tests **************************
    public function testsAction($pages, Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
             $request = $this->get('request');

            if ($request->getMethod() == 'POST') {

              
               
                $username = $request->get('username');
                $testName = $request->get('testName');
                $from = $request->get('from');
                $to = $request->get('to');
                $remark = $request->get('remark');
                
                if(!empty($from))
                {
                $from2 = date('Y-d-m H:i:s', strtotime(str_replace('/', '-', $from)));
                $from3 = new \DateTime($from2);
                }
                else
                {
                    $from3='';
                }
                
               
                 if(!empty($to))
                {
                $to2 = date('Y-d-m H:i:s', strtotime(str_replace('/', '-', $to)));
                $to3 = new \DateTime($to2);
                }
                 else
                {
                    $to3='';
                }
                
                $repository = $this->getDoctrine()
                ->getManager();
                $allTests = $repository->getRepository('TSAdminBundle:Tests');
                
                $liste_candidats = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('TSLDAPBundle:Candidate')
                        ->getSpecificPassedTests(4, 1, $username, $testName, $from3, $to3, $remark);
            return $this->render('TSAdminBundle:Admin:test.html.twig', array(
                        'listeCandidats' => $liste_candidats,
                        'allTests' => $allTests,
                        'pages' => $pages,
                        'nombrePages' => ceil(count($liste_candidats) / 4)
            ));
            }
            
            $repository = $this->getDoctrine()
                    ->getManager();
            $liste_candidats = $repository->getRepository('TSLDAPBundle:Candidate')
                    ->getPassedTests(2, $pages);
            $allTests = $repository->getRepository('TSAdminBundle:Tests');
            return $this->render('TSAdminBundle:Admin:tests.html.twig', array(
                        'listeCandidats' => $liste_candidats,
                        'allTests' => $allTests,
                        'pages' => $pages,
                        'nombrePages' => ceil(count($liste_candidats) / 2)
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }
    
     public function ResultTestsAction(Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
             $request = $this->get('request');

  
            
            $repository = $this->getDoctrine()
                    ->getManager();
            $liste_candidats = $repository->getRepository('TSLDAPBundle:Candidate')
                    ->getAllPassedTests();
            $allTests = $repository->getRepository('TSAdminBundle:Tests');
            return $this->render('TSAdminBundle:Admin:ResultTests.html.twig', array(
                        'listeCandidats' => $liste_candidats,
                       
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }
    
    
    
    public function selectFreeTestAction($id, Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $repository = $this->getDoctrine()
                    ->getManager();

            $repositoryCandidatTests = $repository->getRepository('TSCandidatBundle:CandidatTests');
            $test = $repositoryCandidatTests->findOneBy(array('id' => $id));
            
            $idTest = $test->getTestId();

            $repositoryTests = $repository->getRepository('TSAdminBundle:Tests');
            $thisTest = $repositoryTests->findOneBy(array('id' => $idTest));

            $questions = $thisTest->getQuestions();

        
            return $this->render('TSAdminBundle:Admin:editFreeTest.html.twig', array(
                        'test' => $test,
                        'testP' =>$thisTest,
                        'questions' => $questions,
                        'id' => $id,
            ));
        } else {
            return $this->redirect($this->generateUrl('ts_admin_candidateTests'));
        }
    }
    
    
     public function selectResultFreeTestAction($id, Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $repository = $this->getDoctrine()
                    ->getManager();

            $repositoryCandidatTests = $repository->getRepository('TSCandidatBundle:CandidatTests');
            $test = $repositoryCandidatTests->findOneBy(array('id' => $id));
            
            $idTest = $test->getTestId();

            $repositoryTests = $repository->getRepository('TSAdminBundle:Tests');
            $thisTest = $repositoryTests->findOneBy(array('id' => $idTest));

            $questions = $thisTest->getQuestions();

        
            return $this->render('TSAdminBundle:Admin:editResultFreeTest.html.twig', array(
                        'test' => $test,
                        'testP' =>$thisTest,
                        'questions' => $questions,
                        'id' => $id,
            ));
        } else {
            return $this->redirect($this->generateUrl('ts_admin_candidateTests'));
        }
    }

    public function editFreeTestAction(Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {

            $request = $this->get('request');
            $id = $request->query->get('id');
            $repository = $this->getDoctrine()
                    ->getManager();

            $repositoryCandidatTests = $repository->getRepository('TSCandidatBundle:CandidatTests');
            $test = $repositoryCandidatTests->findOneBy(array('id' => $id));
            $responses = $test->getResponses();
            $name = $test->getName();

            $repositoryTests = $repository->getRepository('TSAdminBundle:Tests');
            $thisTest = $repositoryTests->findOneBy(array('name' => $name));

            $questions = $thisTest->getQuestions();
            if ($request->getMethod() == 'POST') {
                $em = $this->getDoctrine()->getManager();
                foreach ($responses as $response) {
                    if ($response->getNote() == "need correction") {
                        $testMark = $test->getMark();
                        if (is_null($testMark)) {
                            $test->setMark(0);
                        }
                        echo ("$testMark = ");
                        echo $testMark;

                        $mark = $request->get($response->getId());
                        echo ("responseid ");
                        echo $response->getId();
                        echo ("$mark = ");
                        echo $mark;

                        $newTestMark = $testMark + $mark;
                        echo ("$newTestMark = ");
                        echo $newTestMark;

                        $response->setMark($mark);
                        $response->setNote("corrected");

                        $test->setMark($newTestMark);

                        $em->persist($response);
                    }
                }
                $test->setNote("corrected");
                $em->persist($test);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                                'notice', 'Test was corrected successfully!'
                );
            }
            return $this->redirect($this->generateUrl('ts_admin_allTests'));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }
    
    
     public function cvsAction($pages, Request $request) {

        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            $request = $this->get('request');

            if ($request->getMethod() == 'POST') {

                $mail = $request->get('email');
              
                $session->set('mail', $mail);
              

                $liste_candidats = $this->getDoctrine()
                        ->getManager()
                        ->getRepository('TSLDAPBundle:Candidate')
                        ->getSpecificCandidates(8, 1, $mail);

                return $this->render('TSAdminBundle:Admin:cv.html.twig'
                                , array('listeCandidat' => $liste_candidats,
                            'page' => 1,
                            'nombrePage' => ceil(count($liste_candidats) / 8)));
            }
            $liste_candidats = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSLDAPBundle:Candidate')
                    ->getCandidats(8, $pages);

            return $this->render('TSAdminBundle:Admin:cvs.html.twig'
                            , array('listeCandidat' => $liste_candidats,
                        'pages' => $pages,
                        'exp' => $this->exp,
                        'establishment' => $this->establishment,
                        'diploma' => $this->diploma,
                        'technologies' => $this->technologies,
                        'nombrePages' => ceil(count($liste_candidats) / 8)));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

}
