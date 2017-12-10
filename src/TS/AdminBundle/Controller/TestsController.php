<?php

namespace TS\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TS\AdminBundle\Entity\Questions;
use TS\AdminBundle\Form\QuestionsEditType;
use TS\AdminBundle\Form\QuestionsType;
use TS\AdminBundle\Entity\Tests;
use TS\AdminBundle\Form\TestsEditType;
use TS\AdminBundle\Form\TestsType;
use TS\AdminBundle\Entity\QuestionLibrary;
use \TS\AdminBundle\Form\QuestionsLibraryType;
use \TS\AdminBundle\Form\QuestionLibraryEditType;
use TS\AdminBundle\Entity\ResponseLibrary;
use TS\AdminBundle\Entity\Response;
use TS\AdminBundle\Form\CustomizeTestType;
use TS\AdminBundle\Form\CustomizeTestEditType;
use TS\AdminBundle\Entity\TestStatestics;
use TS\AdminBundle\Entity\QuestionPicture;
use TS\AdminBundle\Entity\ExcelQuestion;
use TS\AdminBundle\Form\ExcelQuestionType;
use PHPExcel_IOFactory;

class TestsController extends Controller {

//************************Tests Library*****************************


    public function testsAction(Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {

            // récupérer les types des tests
            $allTests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();

            $test = new Tests;

            $form = $this->createForm(new TestsType(), $test);
            $formCustomize = $this->createForm(new CustomizeTestType(), $test);

//
//
//
            // récupérer les tests
            $tests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests')
                    ->getTests();


            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                if ($this->getRequest()->request->get('submitAction') == 'ADD') {
                    $form->bind($request);
                    if ($form->isValid()) {

                        $auto = 0;
                        $type = $request->get('type');
                        $test->setType($type);
                        $test->setCustomized("no");


                        $test->setAutomatic(0);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($test);
                        $em->flush();
                        $this->get('session')->getFlashBag()->add(
                                'notice', 'Test was created successfully!'
                        );

                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $test->getId())));
                    }
                }
            }
            return $this->render('TSAdminBundle:Tests:tests.html.twig', array(
                        'form' => $form->createView(),
                        'formCustomize' => $formCustomize->createView(),
                        'tests' => $tests,
                        'allTests' => $allTests
//                       
            ));
            
            
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function settingTestAction($pages,$id, Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            //            


            $tests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests');

            $QuestionsRepos = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:QuestionLibrary');


            $questionsRepository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Questions');
            
            $excelquestionsRepository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:ExcelQuestion');


            $AllQuestions = $questionsRepository->getQuestionsByTest(8, $pages,$id);



          
            $test = $tests->findOneBy(array('id' => $id));
            $em = $this->getDoctrine()->getManager();
            $this->CalculStatisticsAction($em,$test);
             $em->flush();

            $question = new Questions;
            $questionLibrary = new QuestionLibrary;
            $form = $this->createForm(new QuestionsType(), $question);
///////////
            ///////////////
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                if ($this->getRequest()->request->get('submitAction') == 'ADD') {
                    $form->bind($request);
                    if ($form->isValid()) {
                        
                        $typetest = $request->get('test');
                        $question->setTests($typetest);
                        
                        
                    
                        $type = $request->get('type');

                        if ($type === NULL) {
                            $type = 'one';
                        }

                        $question->setType($type);

                        if ($type == 'free') {
                            $question->setAutomatic('no');
                            
                        } else {
                            $question->setAutomatic('yes');
                        }


                        $questionLibrary->setAutomatic($question->getAutomatic());
                        $questionLibrary->setIntroduction($question->getIntroduction());
                        $questionLibrary->setNote($question->getNote());
                        $questionLibrary->setQuestionPicture($question->getQuestionPicture());
                        $questionLibrary->setTests($question->getTests());
                        $questionLibrary->setText($question->getText());
                        $questionLibrary->setType($question->getType());
                        $questionLibrary->setQuestionLevel($question->getQuestionLevel());




                        $responses = $question->getResponses();

                        foreach ($responses as $response) {
                            $responseLib = new ResponseLibrary();
                            $responseLib->setNote($response->getNote());
                            $responseLib->setResponse($response->getResponse());
                            $responseLib->setValue($response->getValue());


                            $questionLibrary->addResponse($responseLib);
                        }


                        $test->addQuestion($question);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($question);
                        $em->persist($questionLibrary);


                        $em->flush();
                        $this->CalculStatisticsAction($em,$test);
                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $id)));
                    }
                 } elseif ($this->getRequest()->request->get('submitAction') == 'Import') {

                    $em = $this->getDoctrine()->getManager();

                    $id = $request->get('IdTest');

                    $test = $tests->findOneBy(array('id' => $id));


                    $ids = $request->get('ids');
                
                 
                    if ($ids == null) {
                        $this->get('session')->getFlashBag()->add(
                                'warnning', ' No questions was selected!'
                        );
                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $id)));
                    } else {

                        foreach ($ids as $idquestion) {

                            $questionsAuto = $questionsRepository->getStringIdQuestions($idquestion);

                            foreach ($questionsAuto as $questionAuto) {

                                $question = new Questions;
                                $question->setIntroduction($questionAuto->getIntroduction());
                                $question->setNote($questionAuto->getNote());
                                $question->setTests($questionAuto->getTests());
                                $question->setText($questionAuto->getText());
                                $question->setType($questionAuto->getType());
                                $question->setAutomatic($questionAuto->getAutomatic());
                                $question->setQuestionlevel($questionAuto->getQuestionlevel());
                                $question->setQuestionPicture($questionAuto->getQuestionPicture());
                                $responses = $questionAuto->getResponses();

                                foreach ($responses as $respons) {
                                    $response = new Response();
                                    $response->setNote($respons->getNote());
                                    $response->setResponse($respons->getResponse());
                                    $response->setValue($respons->getValue());
                                    $response->setCorrectAnswer($respons->getCorrectAnswer());
                                    $question->addResponse($response);
                                }
                             $test->addQuestion($question);
                              $em->persist($test);  
                                $this->CalculStatisticsAction($em, $test);
                                $em->flush();
                            }
                        }
                        $this->get('session')->getFlashBag()->add(
                                'notice', 'Question(s) was imported successfully!'
                        );
                    }


                    return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $id)));
                }  
            elseif ($this->getRequest()->request->get('submitAction') == 'Import Excel') {

                    $em = $this->getDoctrine()->getManager();

                    $id = $request->get('IdTest');

                    $test = $tests->findOneBy(array('id' => $id));


                    $ids = $request->get('ids');
                    if ($ids == null) {
                        $this->get('session')->getFlashBag()->add(
                                'warnning', ' No questions was selected!'
                        );
                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $id)));
                    } else {
                       // foreach ($ids as $idexcelquestion) {

                            $questionsAuto = $excelquestionsRepository->getExcelQuestionsById($ids);

                           /*foreach ($questionsAuto as $questionAuto) {

                                $excelquestion = new ExcelQuestion();
                                $excelquestion->setUrl($questionAuto->getUrl());
                                $excelquestion->setName($questionAuto->getName());
                                /*$excelquestion->setFile($questionAuto->getFile());
                                $excelquestion->setTempFilename($questionAuto->getTempFilename());*/
                                        
                                        
                               

                               
                             $test->addExcelQuestion($questionsAuto);
                              $em->persist($test);  
                             
                                $em->flush();
                            //}
                        //}
                        $this->get('session')->getFlashBag()->add(
                                'notice', 'Question(s) was imported successfully!'
                        );
                    }


                    return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $id)));
            }
            }
  
           $em = $this->getDoctrine()->getManager();

        $q = $em->getRepository('TSAdminBundle:ExcelQuestion')->findAll();
       return $this->render('TSAdminBundle:Tests:SettingTest.html.twig', array('pages' => $pages,
                        'test' => $test,
                        'form' => $form->createView(),
                        'questions' => $AllQuestions,
                         'excelQuestion' => $q,
                        'nombrePages' => ceil(count($AllQuestions) / 8)
            ));
        return $this->render("TSAdminBundle:Tests:excelQuestions.html.twig", array('excelQuestion' => $q ,'form' => $form->createView()));
            
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function testAction(Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $allTests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();
            $questionsRepository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Questions');
            $questions = $questionsRepository->getQuestions();
            $test = new Tests;
            $form = $this->createForm(new TestsType(), $test);


            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                if ($this->getRequest()->request->get('submitAction') == 'Research') {
                    $type = $request->get('type');

                    $session->set('type', $type);

                    $tests = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('TSAdminBundle:Tests')
                            ->getSpecificTests(4, 1, $type);

                    return $this->render('TSAdminBundle:Tests:specificTests.html.twig', array(
                                'form' => $form->createView(),
                                'tests' => $tests,
                                'questions' => $questions,
                                'allTests' => $allTests,
                                'page' => 1,
                                'nombrePage' => ceil(count($tests) / 4)));
                } elseif ($this->getRequest()->request->get('submitAction') == 'ADD') {
                    $form->bind($request);
                    if ($form->isValid()) {
                        $auto = 0;
                        $type = $request->get('type');
                        $test->setType($type);
                        $ids[] = $request->get('ids');

                        $questionsAuto = $questionsRepository->getIdQuestions($ids);

                      foreach ($questionsAuto as $questionAuto) {
                            $test->addQuestion($questionAuto);
                            echo($questionAuto->getText());
                            if (($questionAuto->getAutomatic()) == 'no') {
                              $auto ++;
                            }
                     }

                        $test->setAutomatic($auto);

                        $em = $this->getDoctrine()->getManager();
                        $em->persist($test);
                        $em->flush();
                        return $this->redirect($this->generateUrl('ts_admin_questions'));
                    }
                }
            }
            $type = $session->get('type');
            $tests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests')
                    ->getTests();
            return $this->render('TSAdminBundle:Tests:tests.html.twig', array(
                        'form' => $form->createView(),
                        'tests' => $tests,
                        'allTests' => $allTests,
                        'questions' => $questions,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function duplicateTestAction(Request $request) {
        $idtest = $idtest = $request->query->get('idtest');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');
        $questionRepository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Questions');

        $test = $repository->findOneBy(array('id' => $idtest));

        $em = $this->getDoctrine()->getManager();

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {
                $test->setStatus("disable");

                $em->persist($test);

                $test2 = new Tests();

                $test2->setStatus("enable");
                $test2->setName($test->getName());
                $test2->setType($test->getType());
                $test2->setNote($test->getNote());
                $test2->setEliminatoryNote($test->getEliminatoryNote());
                $test2->setAutomatic($test->getAutomatic());
                $test2->setTime($test->getTime());
                $test2->setCalculationMethod($test->getCalculationMethod());
                $test2->setNumberQuestions($test->getNumberQuestions());
                $test2->setPercentageEasy($test->getPercentageEasy());
                $test2->setPercentageMedium($test->getPercentageMedium());
                $test2->setPercentageHard($test->getPercentageHard());
                $test2->setCustomized($test->getCustomized());
                


                $statistics = $test->getTestStatestics();
                if (!empty($statistics)) {
                    $TestStatistics = new TestStatestics();
                    $TestStatistics->setNumberQuestions($statistics->getNumberQuestions());
                    $TestStatistics->setPercentHard($statistics->getPercentHard());
                    $TestStatistics->setPercentMedium($statistics->getPercentMedium());
                    $TestStatistics->setPercenteasy($statistics->getPercenteasy());
                    $test2->setTestStatestics($TestStatistics);
                }

                $questions = $questionRepository->getQuestionsByTest($idtest);
                foreach ($questions as $qst) {
                    $newQuestion = new Questions();
                    $newQuestion->setIntroduction($qst->getIntroduction());
                    $newQuestion->setNote($qst->getNote());
                    $newQuestion->setText($qst->getText());
                    $newQuestion->setQuestionLevel($qst->getQuestionLevel());
                    $newQuestion->setQuestionPicture($qst->getQuestionPicture());
                    $newQuestion->setTests($qst->getTests());
                    $newQuestion->setType($qst->getType());
                    $newQuestion->setAutomatic($qst->getAutomatic());
      

                    $test2->addQuestion($newQuestion);


                    $responses = $qst->getResponses();
                    foreach ($responses as $res) {
                        $response = new Response();
                        $response->setCorrectAnswer($res->getCorrectAnswer());
                        $response->setNote($res->getNote());
                        $response->setResponse($res->getResponse());
                        $response->setValue($res->getValue());
                        $newQuestion->addResponse($response);
                    }
                }
                $em->persist($test2);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                        'notice', 'Test was duplicated successfully!'
                );
                return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $test2->getId())));
            }
        }
    }

    public function selectEditTestAction($id, Request $request) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');
        $test = $repository->findOneBy(array('id' => $id));
        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();
        $form = $this->createForm(new TestsEditType(), $test);
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {

            return $this->render('TSAdminBundle:Tests:editTest.html.twig', array(
                        'form' => $form->createView(),
                        'test' => $test,
                        'id' => $id,
                        'allTests' => $allTests,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectCustomizeEditTestAction($id, Request $request) {

        $session = $request->getSession();


        if ($session->get('logged_in') === true) {
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests');
            $test = $repository->findOneBy(array('id' => $id));
            $allTests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();
            $percenteasy = $test->getPercentageEasy();
            $percentmedium = $test->getPercentageMedium();
            $percenthard = $test->getPercentageHard();
            $nbr_question = $test->getNumberQuestions();
            return $this->render('TSAdminBundle:Tests:customizeTest.html.twig', array(
                        //'form' => $form->createView(),
                        'test' => $test,
                        'id' => $id,
                        'allTests' => $allTests,
                        'nbr_questions' => $nbr_question + 1,
                        'easy' => $percenteasy + 1,
                        'medium' => $percentmedium + 1,
                        'hard' => $percenthard + 1
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function CustomizeEditTestAction(Request $request) {

        $session = $request->getSession();
        $id = $request->query->get('id');

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');
        $test = $repository->findOneBy(array('id' => $id));
        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();

        $percenteasy = $test->getPercentageEasy();
        $percentmedium = $test->getPercentageMedium();
        $percenthard = $test->getPercentageHard();
        $nbr_question = $test->getNumberQuestions();

        if ($session->get('logged_in') === true) {

            if ($request->getMethod() == 'POST') {

                $nbr_questionToDo = $request->get('nbr_questions');
                $percenteasyToDo = $request->get('easy');
                $percentmediumToDo = $request->get('medium');
                $percenthardToDo = $request->get('hard');
                $testMartToDo = $request->get('test_mark');
                $elimMartToDo = $request->get('elim_mark');
                
                $testStatistics = new TestStatestics();
                $testStatistics->setNumberQuestions($nbr_questionToDo);
                $testStatistics->setPercenteasy($percenteasyToDo);
                $testStatistics->setPercentMedium($percentmediumToDo);
                $testStatistics->setPercentHard($percenthardToDo);
                $testStatistics->setNote($testMartToDo);
                $testStatistics->setEliminatoryNote($elimMartToDo);

                $test->setTestStatestics($testStatistics);
                $test->setCustomized("yes");

                $em = $this->getDoctrine()->getManager();
                $em->persist($test);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                        'notice', 'Test was customized successfully!'
                );
                return $this->redirect($this->generateUrl('ts_admin_tests'));
            }
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editTestAction(Request $request) {
        $id = $request->query->get('id');
        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');


        $test = new Tests;
        $test = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new TestsEditType(), $test);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($test);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Test was Updated successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_tests'));
                }
            }

            return $this->render('TSAdminBundle:Tests:editTest.html.twig', array(
                        'form' => $form->createView(),
                        'test' => $test,
                        'id' => $id,
                        'tests' => $allTests,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectRemoveTestAction($id, Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $repository = $this->getDoctrine()
                ->getManager();
        $repositoryTest = $repository->getRepository('TSAdminBundle:Tests');
        $repositoryCandidateTest = $repository->getRepository('TSCandidatBundle:CandidatTests');

        $test = $repositoryTest->findOneBy(array('id' => $id));
        $candidatTest = $repositoryCandidateTest->getDecision($test->getName());
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if (empty($candidatTest)) {
                if ($request->getMethod() == 'POST') {
                    $form->bind($request);
                    if ($form->isValid()) {
                        $em = $this->getDoctrine()->getManager();
                        $em->remove($test);
                        $em->flush();
                        return $this->redirect($this->generateUrl('ts_admin_tests'));
                    }
                }
                return $this->render('TSAdminBundle:Tests:removeTest.html.twig', array(
                            'form' => $form->createView(),
                            'test' => $test,
                            'id' => $id,
                ));
            } else {
                return $this->render('TSAdminBundle:Tests:removeNoTest.html.twig', array(
                            'test' => $test,
                ));
            }
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeTestAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');

        $test = $repository->findOneBy(array('id' => $id));

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($test);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Test was deleted successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_tests'));
                }
            }
            return $this->render('TSAdminBundle:Tests:removeTest.html.twig', array(
                        'form' => $form->createView(),
                        'test' => $test,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

//************************Questions Library*****************************
       public function createQuestionAction($pages,Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $allTests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();
            $question = new QuestionLibrary;
            $ExcelQuestion = new ExcelQuestion();
            $form = $this->createForm(new QuestionsLibraryType(), $question);
            $form2 = $this->createForm(new ExcelQuestionType(), $ExcelQuestion);
            $questions = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:QuestionLibrary')
                    ->getQuestions(15, $pages);
          

            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                if ($this->getRequest()->request->get('submitAction') == 'ADD') {
                    $form->bind($request);
                    if ($form->isValid()) {
                        $test = $request->get('test');
                        $question->setTests($test);
                       
                        
                        $type = $request->get('type');

                        if ($type === NULL) {
                            $type = 'one';
                        }

                        $question->setType($type);
                        if ($type == 'free') {
                            $question->setAutomatic('no');
                        } else {
                            $question->setAutomatic('yes');
                        }
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($question);
                        $em->flush();
                        return $this->redirect($this->generateUrl('ts_admin_questions'));
                    }
                }
            }
            return $this->render('TSAdminBundle:Tests:questionsLibrary.html.twig', array(
                        'form' => $form->createView(),
                        'form2' => $form2->createView(),
                        'questions' => $questions,
                        'tests' => $allTests,
                        'pages' => $pages,
                        'nombrePages' => ceil(count($questions) / 15)
                
                        
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

//********************Question's Test************************//
    public function questionAction($page, Request $request) {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $allTests = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:EditTests')
                    ->getTests();
            $question = new Questions;
            $form = $this->createForm(new QuestionsType(), $question);
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                if ($this->getRequest()->request->get('submitAction') == 'ADD') {
                    $form->bind($request);
                    if ($form->isValid()) {
                        $test = $request->get('test');
                        $question->setTests($test);
                        $type = $request->get('type');
                        var_dump($question->getText());
                        if ($question->getText() == null || $test == null) {
                            $this->get('session')->getFlashBag()->add(
                                    'warnning', 'Question was not created! invalid data'
                            );
                            return $this->redirect($this->generateUrl('ts_admin_questions'));
                        } else {
                            if ($type === NULL) {
                                $type = 'one';
                            }

                            $question->setType($type);
                            if ($type == 'free') {
                                $question->setAutomatic('no');
                            } else {
                                $question->setAutomatic('yes');
                            }
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($question);
                            $em->flush();
                            $this->get('session')->getFlashBag()->add(
                                    'notice', 'Question was created successfully!'
                            );
                            return $this->redirect($this->generateUrl('ts_admin_questions'));
                        }
                    }
                }
            }
            $key = $session->get('key');
            $type = $session->get('type');

            $questions = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Questions')
                    ->getSpecificQuestions(4, 1, $key, $type);

            return $this->render('TSAdminBundle:Tests:specificQuestions.html.twig', array(
                        'form' => $form->createView(),
                        'questions' => $questions,
                        'tests' => $allTests,
                        'page' => 1,
                        'nombrePage' => ceil(count($questions) / 4)));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectEditQuestionLibraryAction($id, Request $request) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:QuestionLibrary');

        $question = $repository->findOneBy(array('id' => $id));
        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();
        $form = $this->createForm(new QuestionLibraryEditType(), $question);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {


            return $this->render('TSAdminBundle:Tests:editQuestionLibrary.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
                        'id' => $id,
                        'tests' => $allTests,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectEditQuestionAction($id, $idtest, Request $request) {
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Questions');

        $question = $repository->findOneBy(array('id' => $id));

        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();
        $form = $this->createForm(new QuestionsEditType(), $question);


        $repositoryCandidaTest = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSCandidatBundle:CandidatTests');

        $candidatTest = $repositoryCandidaTest->getCandidatTests($idtest);


        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {


            if (!empty($candidatTest)) {
                return $this->render('TSAdminBundle:Tests:duplicateTest.html.twig', array(
                            'id' => $id,
                            'idtest' => $idtest,
                            'tests' => $allTests,
                ));
            } else {
                return $this->render('TSAdminBundle:Tests:editQuestion.html.twig', array(
                            'form' => $form->createView(),
                            'question' => $question,
                            'id' => $id,
                            'idtest' => $idtest,
                            'tests' => $allTests,
                ));
            }
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editQuestionLibraryAction(Request $request) {
        $id = $request->query->get('id');
        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:QuestionLibrary');

        $question = $repository->findOneBy(array('id' => $id));
        $form = $this->createForm(new QuestionLibraryEditType(), $question);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $test = $request->get('test');
                    $question->setTests($test);

                   
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($question);
                        $em->flush();
                        $this->get('session')->getFlashBag()->add(
                                'notice', 'Question was updated successfully!'
                        );

                        return $this->redirect($this->generateUrl('ts_admin_questions'));
                    
                }
            }

            return $this->render('TSAdminBundle:Tests:editQuestionLibrary.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
                        'id' => $id,
                        'tests' => $allTests,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function editQuestionAction(Request $request) {
        $id = $request->query->get('id');
        $idtest = $request->query->get('idtest');

        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Questions');

        $repositoryTest = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Tests');


        $question = $repository->findOneBy(array('id' => $id));

        $test = $repositoryTest->findOneBy(array('id' => $idtest));

        $form = $this->createForm(new QuestionsEditType(), $question);

        $em = $this->getDoctrine()->getManager();

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {


                $form->bind($request);
                if ($form->isValid()) {
                    $test = $request->get('test');
                    $question->setTests($test);

                    if ($question->getText() == null || $test == null) {
                        $this->get('session')->getFlashBag()->add(
                                'warnning', 'Question was not updated! invalid data'
                        );
                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $idtest)));
                    } else {
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($question);
                        $em->flush();
                        $this->get('session')->getFlashBag()->add(
                                'notice', 'Question was updated successfully!'
                        );
                        return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $idtest)));
                    }
                }
            }
            return $this->render('TSAdminBundle:Tests:editQuestion.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
                        'id' => $id,
                        'idtest' => $idtest,
                        'tests' => $allTests,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectRemoveQuestionAction($id, $idtest, Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Questions');

        $question = $repository->findOneBy(array('id' => $id));


        $allTests = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:EditTests')
                ->getTests();


        $repositoryCandidaTest = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSCandidatBundle:CandidatTests');

        $candidatTest = $repositoryCandidaTest->getCandidatTests($idtest);

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if (!empty($candidatTest)) {
                return $this->render('TSAdminBundle:Tests:duplicateTest.html.twig', array(
                            'id' => $id,
                            'idtest' => $idtest,
                            'tests' => $allTests,
                ));
            } else {
                return $this->render('TSAdminBundle:Tests:removeQuestion.html.twig', array(
                            'form' => $form->createView(),
                            'question' => $question,
                            'idtest' => $idtest,
                            'id' => $id,
                ));
            }
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function selectRemoveQuestionLibraryAction($id, Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:QuestionLibrary');

        $question = $repository->findOneBy(array('id' => $id));
        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {


            return $this->render('TSAdminBundle:Tests:removeQuestionLibrary.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
                        'id' => $id,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeQuestionLibraryAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');

        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:QuestionLibrary');

        $question = $repository->findOneBy(array('id' => $id));

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($question);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Question was deleted successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_questions'));
                }
            }
            return $this->render('TSAdminBundle:Tests:removeQuestionLibrary.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function removeQuestionAction(Request $request) {

        $form = $this->createFormBuilder()->getForm();
        $id = $request->query->get('id');
        $idtest = $request->query->get('idtest');
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('TSAdminBundle:Questions');

        $question = $repository->findOneBy(array('id' => $id));

        $request = $this->getRequest();
        $session = $request->getSession();
        if ($session->get('logged_in') === true) {
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->remove($question);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Question was deleted successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_settingTest', array('id' => $idtest)));
                }
            }
            return $this->render('TSAdminBundle:Tests:removeQuestion.html.twig', array(
                        'form' => $form->createView(),
                        'question' => $question,
                        'idtest' => $idtest
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    //************************Candidate Tests*****************************
    public function generateTestAction(Request $request) {

        $name = "JAVA/JEE niveau3";
        $requestSession = $this->getRequest();
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
            $repository = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('TSAdminBundle:Tests');
            $test = $repository->findOneBy(array('name' => $name));
            $questions = $test->getQuestions();

            return $this->render('TSAdminBundle:Candidate:CandidateTest.html.twig', array(
                        'name' => $name,
                        'questions' => $questions,
            ));
        } else {
            return $this->redirect($this->generateUrl('adminLogin'));
        }
    }

    public function CalculStatisticsAction($em, $test) {

        $questionsAuto = $test->getQuestions();
        $auto = 0;
        $nbr_question = 0;
        $nbr_easy = 0;
        $nbr_medium = 0;
        $nbr_hard = 0;
        $markTest = 0;
        foreach ($questionsAuto as $questionAuto) {
            $markTest = $markTest + $questionAuto->getNote();
            $nbr_question++;
            if (($questionAuto->getAutomatic()) === 'no') {
                $auto ++;
            }

            if (($questionAuto->getQuestionLevel() === "easy")) {
                $nbr_easy++;
            } else if (($questionAuto->getQuestionLevel() === "Medium")) {
                $nbr_medium++;
            } else {
                $nbr_hard++;
            }
        }
        if ($nbr_question > 0) {
            $percenteasy = ($nbr_easy / $nbr_question) * 100;
            $percentmedium = ($nbr_medium / $nbr_question) * 100;
            $percenthard = ($nbr_hard / $nbr_question) * 100;
            $test->setAutomatic($auto);
            $test->setNote($markTest);
            $test->setNumberQuestions($nbr_question);
            $test->setPercentageEasy($percenteasy);
            $test->setPercentageMedium($percentmedium);
            $test->setPercentageHard($percenthard);
            $em->persist($test);
        }
    }
    
    
    public function uploadQuestionsAction(Request $request )
    {
        $requestSession = $this->get('request');
        $session = $requestSession->getSession();
        if ($session->get('logged_in') === true) {
             $ExcelQuestion = new ExcelQuestion();
             $form = $this->createForm(new ExcelQuestionType(), $ExcelQuestion);
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bind($request);
               
                if ($form->isValid()) {
                    
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($ExcelQuestion);
                        $em->flush();
                        
                     
                    $objPHPExcel = PHPExcel_IOFactory::load($ExcelQuestion->getWebPath());
                    // $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                    $sheet = $objPHPExcel->getSheet(0);
                    $NumLigne = 0;
                    foreach ($sheet->getRowIterator() as $row) {
                        $NumLigne = $NumLigne + 1;


                        // On boucle sur les cellule de la ligne
                        if ($NumLigne > 3) {
                            
                            $Ligne[$NumLigne] = array(); # on créé un tableau pour chaque ligne
                            foreach ($row->getCellIterator() as $cell) {
                                array_push($Ligne[$NumLigne], $cell->getValue()); //#on insère la valeur de la cellule dans le tableau de la ligne
                             }
                             
                             if($Ligne[$NumLigne][0] != null)
                             {
                             $question = new QuestionLibrary();
                             $question->setType($Ligne[$NumLigne][0]);
                            if ($Ligne[$NumLigne][1] != null) {
                                $question->setIntroduction($Ligne[$NumLigne][1]);
                            }
                            
//                            if($Ligne[$NumLigne][0]=='Multiple Choice')
//                            $question->setType('one');
//                            if($Ligne[$NumLigne][0]=='Checkboxes')
//                            $question->setType('many');
//                            if($Ligne[$NumLigne][0]=='Essay')
//                            $question->setType('free');
//                            if($Ligne[$NumLigne][0]=='Numeric')
//                            $question->setType('numeric');
//                            if($Ligne[$NumLigne][0]=='Drop Down')
//                            $question->setType('menu');
                            
                            if($Ligne[$NumLigne][0]=='one')
                            $question->setType('one');
                            if($Ligne[$NumLigne][0]=='many')
                            $question->setType('many');
                            if($Ligne[$NumLigne][0]=='free')
                            $question->setType('free');
                            if($Ligne[$NumLigne][0]=='numeric')
                            $question->setType('numeric');
                            if($Ligne[$NumLigne][0]=='menu')
                            $question->setType('menu');
                                
                            $question->setText($Ligne[$NumLigne][2]);
                            $question->setNote($Ligne[$NumLigne][3]);
                            $question->setTests($Ligne[$NumLigne][4]);
                            $question->setQuestionLevel($Ligne[$NumLigne][5]);
                            if ($Ligne[$NumLigne][0] == "free") {
                                $question->setAutomatic("yes");
                            } else {
                                $question->setAutomatic("no");
                            }
                                   $i = 6;
                                while ($Ligne[$NumLigne][$i] != null) {
                                    $response = new ResponseLibrary();
                                    $response->setResponse($Ligne[$NumLigne][$i]);
                                    if($Ligne[$NumLigne][$i + 12]=="")
                                    {
                                        $response->setNote(0);
                                    }
                                    else
                                        
                                    $response->setNote($Ligne[$NumLigne][$i + 12]);
                                    if ($Ligne[$NumLigne][$i + 12] > 0) {
                                        $response->setCorrectAnswer("yes");
                                    }
                                    else
                                    {
                                        $response->setCorrectAnswer("no"); 
                                    }
                                    
                                    if($question->getType()=="numeric")
                                    {
                                         $response->setValue($Ligne[$NumLigne][$i + 6]) ;
                                    }
                                    
                                    
                                    $question->addResponse($response);
                                    $i++;
                                }
                            $em = $this->getDoctrine()->getManager();
                            $em->persist($question);
                            $em->flush();
                             }
                          
                           


                        }
                        
                    }



                 
                    $this->get('session')->getFlashBag()->add(
                            'notice', 'Question was uploaded successfully!'
                    );
                    return $this->redirect($this->generateUrl('ts_admin_questions'));
                }
                $this->get('session')->getFlashBag()->add(
                        'warnning', 'Question was not uploaded!'
                );
                return $this->redirect($this->generateUrl('ts_admin_questions'));
            }
        }
    }

    
    
     public function listExcelAction(Request $request) {
         $test = new Tests;
    $form = $this->createForm(new TestsType(), $test);
           $em = $this->getDoctrine()->getManager();

        $q = $em->getRepository('TSAdminBundle:ExcelQuestion')->findAll();
       

        

        return $this->render("TSAdminBundle:Tests:excelQuestions.html.twig", array('excelQuestion' => $q ,'form' => $form->createView()));}
}
