<?php

namespace TS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TS\CandidatBundle\Entity\candidatResponse;
use TS\CandidatBundle\Entity\CandidatQuestionsStatistics;

class CandidateTestsController extends Controller {

    public function candidateTestsAction() {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {


            $username = $session->get('username');

            $repository = $this->getDoctrine()
                    ->getManager();

            $candidatRepository = $repository->getRepository('TSLDAPBundle:Candidate');

            $testsRepository = $repository->getRepository('TSAdminBundle:Tests');

            $candidat = $candidatRepository->findOneBy(array('username' => $username));

            $candidatTests = $candidat->getCandidatTests();

            $tests = array();
            foreach ($candidatTests as $ct) {
                $test = $testsRepository->findOneBy(array('id' => $ct->getTestId()));
                array_push($tests, $test);
            }


            return $this->render('TSAdminBundle:Candidate:candidatTests.html.twig', array(
                        'candidatTests' => $candidatTests,
                        'tests' => $tests,
                        'candidat' => $candidat
            ));
        } else {
            return $this->redirect($this->generateUrl('employeeLogin'));
        }
    }

    public function descriptionTestAction($id, Request $request) {

        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $username = $session->get('username');
            $repository = $this->getDoctrine()
                    ->getManager();
            $candidatRepository = $repository->getRepository('TSLDAPBundle:Candidate');
            $candidat = $candidatRepository->findOneBy(array('username' => $username));
            $candidatTests = $candidat->getCandidatTests();
            $testRepository = $repository->getRepository('TSAdminBundle:Tests');
            $tests = array();
            foreach ($candidatTests as $ct) {
                $test = $testRepository->findOneBy(array('id' => $ct->getTestId()));
                array_push($tests, $test);
            }
            $test = $testRepository->findOneBy(array('id' => $id));
            $questions = $test->getQuestions();
            return $this->render('TSAdminBundle:Candidate:descriptionTest.html.twig', array(
                        'candidatTests' => $candidatTests,
                        'test' => $test,
                        'questions' => $questions,
                        'tests' => $tests,
                        'candidat' => $candidat
            ));
        } else {
            return $this->redirect($this->generateUrl('employeeLogin'));
        }
    }

    public function checkTestAction($id, Request $request) {
        //*************************find candidateTest**************************
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $username = $session->get('username');
            $repository = $this->getDoctrine()->getManager();
            $candidatRepository = $repository->getRepository('TSLDAPBundle:Candidate');
            $questionRepository = $repository->getRepository('TSAdminBundle:Questions');

            $candidat = $candidatRepository->findOneBy(array('username' => $username));
            $candidatTests = $candidat->getCandidatTests();

            $testRepository = $repository->getRepository('TSAdminBundle:Tests');
            $test = $testRepository->findOneBy(array('id' => $id));


            foreach ($candidatTests as $candidateTest) {
                if ($candidateTest->getTestId() == $id) {
                    $candidatTest = $candidateTest;
                    $candidatTest->setCalculationMethod($test->getCalculationMethod());
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($candidatTest);
                    $em->flush();
                }
            }
            $candidateResponses = $candidatTest->getResponses();


            //**********************find candidateTest's state*******************************
            $state = $candidatTest->getState();
            if ($state == 'no') {
                $questions = array();

                if ($test->getCustomized() == 'no') {
                    $randomQuestions = $test->getQuestions();
                    foreach ($randomQuestions as $randomQuestion) {
                        array_push($questions, $randomQuestion);
                    }
                    $candidatTest->setCustomized('no');
                } else {
                    $testStat = $test->getTestStatestics();
                    $nbr = $testStat->getNumberQuestions();
                    $easynbr = ($nbr * $testStat->getPercenteasy()) / 100;
                    $mednbr = ($nbr * $testStat->getPercentMedium()) / 100;
                    $hardnbr = ($nbr * $testStat->getPercentHard()) / 100;



                    $easyques = $questionRepository->getLevelQuestions($id, 'easy', $easynbr);
                    $medques = $questionRepository->getLevelQuestions($id, 'Medium', $mednbr);
                    $hardques = $questionRepository->getLevelQuestions($id, 'hard', $hardnbr);

                    foreach ($easyques as $ques) {

                        array_push($questions, $ques);
                    }


                    foreach ($medques as $ques) {

                        array_push($questions, $ques);
                    }

                    foreach ($hardques as $ques) {

                        array_push($questions, $ques);
                    }

                    /* sauvegarder les questions triés dans la table candidatQuestionsStatestics */
                    foreach ($questions as $question) {
                        $candidatQuestionsStatestic = new CandidatQuestionsStatistics();
                        $candidatQuestionsStatestic->setQuestionId($question->getId());
                        $candidatTest->addCandidatQuestionsStatistic($candidatQuestionsStatestic);
                    }
                    $candidatTest->setCustomized('yes');
                }

                shuffle($questions);

                $response = $this->forward('TSAdminBundle:CandidateTests:generateTest', array(
                    'candidat' => $candidat,
                    'questions' => $questions,
                    'candidateResponses' => $candidateResponses,
                    'candidatTests' => $candidatTests,
                    'candidatTest' => $candidatTest,
                    'test' => $test,
                    'id' => $id,
                ));
            }

            return $response;
        } else {
            return $this->redirect($this->generateUrl('employeeLogin'));
        }
    }

    //******************************** generate a new test **************************

    public function generateTestAction($candidat, $questions, $candidatTests, $candidatTest, $id, $candidateResponses, $test, Request $request) {

        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $tempquiz = $request->get('tempquiz');
                
                $em = $this->getDoctrine()->getManager();
                $candidatTest->setState("yes");
                $em->persist($candidatTest);
                $em->flush();
                
                $this->persistQuestionsAction($em, $request, $questions, $candidatTest);
                if($tempquiz==1)
                {
                $this->get('session')->getFlashBag()->add(
                                'warnning', 'Time is up!'
                        );
                }
                return $this->redirect($this->generateUrl('ts_admin_candidateTests'));
            }
            return $this->render('TSAdminBundle:Candidate:CandidateTest.html.twig', array(
                        'id' => $id,
                        'candidatTests' => $candidatTests,
                        'questions' => $questions,
                        'test' => $test,
                        'candidat' => $candidat
            ));
        } else {
            return $this->redirect($this->generateUrl('employeeLogin'));
        }
    }

    public function persistQuestionsAction($em, $request, $questions, $candidatTest) {

        foreach ($questions as $question) {

            $type = $question->getType();
            $questionId = $question->getId();

            if (($type == 'many') or ( $type == 'menu')) {
                $this->persistResponsesAction($em, $request, $questionId, $question, $candidatTest);
            } elseif ($type == 'numeric') {
                $this->persistNumericResponseAction($em, $request, $questionId, $question, $candidatTest);
            } elseif ($type == 'free') {
                $this->persistFreeResponseAction($em, $request, $questionId, $candidatTest);
            } else {
                $response = $request->get($questionId);
                if (!empty($response)) {
                    $this->persistOneResponseAction($em, $response, $questionId, $question, $candidatTest);
                }
                //si n'a pas repondu sur  la question
                else {
                    $candidatResponse = new candidatResponse();
                    $candidatResponse->setQuestionId($questionId);
                    $candidatResponse->setMark(0);
                    $candidatResponse->setResponse("NULL");
                    $candidatResponse->setNote(NULL);
                    $candidatResponse->setCorrectAnswer(NULL);


                    $candidatTest->addResponse($candidatResponse);
                    $candidatTest->setdateSubmit(new \DateTime());
                    $em->persist($candidatTest);
                }
            }
        }
        
        $em->flush();
    }

    public function persistFreeResponseAction($em, $request, $questionId, $candidatTest) {
        $response = $request->get($questionId);
        if (!empty($response)) {
            $candidatResponse = new candidatResponse();
            $candidatResponse->setQuestionId($questionId);
            $candidatResponse->setResponse($response);
            $candidatResponse->setNote("need correction");

            $candidatTest->setNote("need correction");
            $candidatTest->addResponse($candidatResponse);
            $candidatTest->setdateSubmit(new \DateTime());
            $em->persist($candidatTest);
        } else {


            $candidatResponse = new candidatResponse();
            $candidatResponse->setQuestionId($questionId);
            $candidatResponse->setMark(0);
            $candidatResponse->setResponse("NULL");
            $candidatResponse->setNote(NULL);
            $candidatResponse->setCorrectAnswer(NULL);


            $candidatTest->addResponse($candidatResponse);
            $candidatTest->setdateSubmit(new \DateTime());
            $em->persist($candidatTest);
        }
    }

    public function persistNumericResponseAction($em, $request, $questionId, $question, $candidatTest) {
        $nbr_correct_answer = 0;
        $nbr_correct_answer_candidat = 0;

        $testMark = $candidatTest->getMark();
        $testMark2 = $candidatTest->getMark();
        $questionmark = $question->getNote();

        $questionResponses = $question->getResponses();

        foreach ($questionResponses as $questionResponse) {

            if ($questionResponse->getCorrectAnswer() == "yes") {
                //calculer le nombre des reponses correct du question
                $nbr_correct_answer = $nbr_correct_answer + 1;
            }
            $id = $questionId;
            $id = $id . "+";
            $id = $id . $questionResponse->getId();
            $response = $request->get($id);

            $candidatResponse = new candidatResponse();
            $candidatResponse->setQuestionId($questionId);
            $candidatResponse->setResponse($response);

            if ($response == $questionResponse->getValue()) {

                if ($questionResponse->getCorrectAnswer() == "yes") {
                    $nbr_correct_answer_candidat = $nbr_correct_answer_candidat + 1;
                }
                $mark2 = $questionResponse->getNote();
                $testMark2 = $testMark2 + $mark2;

                $candidatResponse->setMark($mark2);
                $candidatTest->addResponse($candidatResponse);
                $candidatTest->setdateSubmit(new \DateTime());
                if ($candidatTest->getCalculationMethod() == "compensation") {

                    $candidatTest->setMark($testMark2);
                }
                $em->persist($candidatTest);
            } elseif ($response != $questionResponse->getValue()) {
                $candidatResponse->setMark(0);
                $candidatTest->addResponse($candidatResponse);
                $candidatTest->setdateSubmit(new \DateTime());
                $em->persist($candidatTest);
            } elseif (empty($response)) {
                $candidatResponse = new candidatResponse();
                $candidatResponse->setQuestionId($questionId);
                $candidatResponse->setMark(0);
                $candidatResponse->setResponse("NULL");
                $candidatResponse->setNote(NULL);
                $candidatResponse->setCorrectAnswer(NULL);

                $candidatTest->addResponse($candidatResponse);
                $candidatTest->setdateSubmit(new \DateTime());
                $em->persist($candidatTest);
            }
        }

        switch ($candidatTest->getCalculationMethod()) {
            case "binary":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {
                    $candidatTest->setMark($testMark + $questionmark);
                }
                break;
            case "aggressive":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {

                    $candidatTest->setMark($testMark + $questionmark);
                } else {
                    $candidatTest->setMark($testMark - 1);
                }
                break;
        }
        $candidatTest->setdateSubmit(new \DateTime());
        $em->persist($candidatTest);
    }

    public function persistOneResponseAction($em, $response, $questionId, $question, $candidatTest) {
        $nbr_correct_answer = 0;
        $nbr_correct_answer_candidat = 0;

        $questionResponses = $question->getResponses();
        $candidatResponse = new candidatResponse();
        $candidatResponse->setQuestionId($questionId);
        $candidatResponse->setResponse($response);
        $testMark = $candidatTest->getMark();
        $testMark2 = $candidatTest->getMark();
        $questionmark = $question->getNote();

        foreach ($questionResponses as $questionResponse) {
            if ($questionResponse->getCorrectAnswer() == "yes") {
                //calculer le nombre des reponses correct du question
                $nbr_correct_answer = $nbr_correct_answer + 1;
            }
            //compensation
            if ($response == $questionResponse->getResponse()) {
                if ($questionResponse->getCorrectAnswer() == "yes") {
                    $nbr_correct_answer_candidat = $nbr_correct_answer_candidat + 1;
                }
                $mark2 = $questionResponse->getNote();
                $testMark2 = $testMark2 + $mark2;

                $candidatResponse->setMark($mark2);
                $candidatTest->addResponse($candidatResponse);
                $candidatTest->setdateSubmit(new \DateTime());
                if ($candidatTest->getCalculationMethod() == "compensation") {
                    $candidatTest->setMark($testMark2);
                }
                $em->persist($candidatTest);
            }
            else
            {     $mark2 = $questionResponse->getNote();
                 $candidatResponse->setMark($mark2); 
            }
        }
        switch ($candidatTest->getCalculationMethod()) {
            case "binary":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {
                    $candidatTest->setMark($testMark + $questionmark);
                }
                break;
            case "aggressive":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {
                    $candidatTest->setMark($testMark + $questionmark);
                } else {
                    $candidatTest->setMark($testMark - 1);
                }
                break;
        }

        $candidatTest->setdateSubmit(new \DateTime());
        $em->persist($candidatTest);
    }

    public function persistResponsesAction($em, $request, $questionId, $question, $candidatTest) {
        $nbr_correct_answer = 0;
        $nbr_correct_answer_candidat = 0;
        $testMark = $candidatTest->getMark();
        $testMark2 = $candidatTest->getMark();
        $questionmark = $question->getNote();
        $responses = $request->get($questionId);
        $questionResponses = $question->getResponses();
        foreach ($questionResponses as $questionResponse) {
            if ($questionResponse->getCorrectAnswer() == "yes") {
                //calculer le nombre des reponses correct du question
                $nbr_correct_answer = $nbr_correct_answer + 1;
            }

            if (!empty($responses)) {
                foreach ($responses as $response) {
                    $candidatResponse = new candidatResponse();
                    $candidatResponse->setQuestionId($questionId);
                    if ($response == $questionResponse->getResponse()) {
                        if ($questionResponse->getCorrectAnswer() == "yes") {
                            $nbr_correct_answer_candidat = $nbr_correct_answer_candidat + 1;
                        }
                        $mark2 = $questionResponse->getNote();
                        $testMark2 = $testMark2 + $mark2;

                        $candidatResponse->setResponse($response);
                        $candidatResponse->setMark($mark2);
                        $candidatTest->addResponse($candidatResponse);
                        $candidatTest->setdateSubmit(new \DateTime());
                        if ($candidatTest->getCalculationMethod() == "compensation") {
                            $candidatTest->setMark($testMark2);
                        }
                        $em->persist($candidatTest);
                    }
                }
            } else {

                $candidatResponse = new candidatResponse();
                $candidatResponse->setQuestionId($questionId);
                $candidatResponse->setMark(0);
                $candidatResponse->setResponse("NULL");
                $candidatResponse->setNote(NULL);
                $candidatResponse->setCorrectAnswer(NULL);

                $candidatTest->addResponse($candidatResponse);
                $candidatTest->setdateSubmit(new \DateTime());
                $em->persist($candidatTest);
            }
        }
        switch ($candidatTest->getCalculationMethod()) {
            case "binary":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {
                    $candidatTest->setMark($testMark + $questionmark);
                }
                break;
            case "aggressive":
                if ($nbr_correct_answer == $nbr_correct_answer_candidat) {
                    $candidatTest->setMark($testMark + $questionmark);
                } else {
                    $candidatTest->setMark($testMark - 1);
                }
                break;
        }
        $candidatTest->setdateSubmit(new \DateTime());
        $em->persist($candidatTest);
    }

   
}




