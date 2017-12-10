<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // tsldap_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tsldap_homepage')), array (  '_controller' => 'TSLDAPBundle:Default:index',));
        }

        // tsldap_logout
        if ($pathinfo === '/admin/logout') {
            return array (  '_controller' => 'TS\\LDAPBundle\\Controller\\LDAPController::logoutAction',  '_route' => 'tsldap_logout',);
        }

        // tsldap_Employeelogout
        if ($pathinfo === '/employee/quiz/Logout') {
            return array (  '_controller' => 'TS\\LDAPBundle\\Controller\\LDAPController::EmployeelogoutAction',  '_route' => 'tsldap_Employeelogout',);
        }

        // ts_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_homepage')), array (  '_controller' => 'TSAdminBundle:Default:index',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // ts_admin_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::adminAction',  '_route' => 'ts_admin_admin',);
            }

            // ts_admin_allTests
            if (0 === strpos($pathinfo, '/admin/allTests') && preg_match('#^/admin/allTests(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_allTests')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::testsAction',  'pages' => 1,));
            }

            // ts_admin_allResultTests
            if ($pathinfo === '/admin/ResultTests') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::ResultTestsAction',  '_route' => 'ts_admin_allResultTests',);
            }

            // ts_admin_editAllTests
            if ($pathinfo === '/admin/editFreeTests') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::editFreeTestAction',  '_route' => 'ts_admin_editAllTests',);
            }

        }

        if (0 === strpos($pathinfo, '/emplyee/quiz')) {
            // ts_quiz_home
            if ($pathinfo === '/emplyee/quiz/home') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::quizAction',  '_route' => 'ts_quiz_home',);
            }

            if (0 === strpos($pathinfo, '/emplyee/quiz/c')) {
                if (0 === strpos($pathinfo, '/emplyee/quiz/candidate')) {
                    if (0 === strpos($pathinfo, '/emplyee/quiz/candidateTest')) {
                        if (0 === strpos($pathinfo, '/emplyee/quiz/candidateTests')) {
                            // ts_admin_candidateTests
                            if ($pathinfo === '/emplyee/quiz/candidateTests') {
                                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::candidateTestsAction',  '_route' => 'ts_admin_candidateTests',);
                            }

                            // ts_admin_persistCandidateTests
                            if ($pathinfo === '/emplyee/quiz/candidateTests') {
                                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::persistFinalSubmitAction',  '_route' => 'ts_admin_persistCandidateTests',);
                            }

                        }

                        // ts_admin_candidateTest
                        if (preg_match('#^/emplyee/quiz/candidateTest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_candidateTest')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::checkTestAction',));
                        }

                    }

                    // ts_admin_candidateDescriptionTest
                    if (0 === strpos($pathinfo, '/emplyee/quiz/candidatedescriptionTest') && preg_match('#^/emplyee/quiz/candidatedescriptionTest/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_candidateDescriptionTest')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::descriptionTestAction',));
                    }

                }

                // ts_admin_checkQuestions
                if ($pathinfo === '/emplyee/quiz/checkQuestions') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\CandidateTestsController::checkQuestionsAction',  '_route' => 'ts_admin_checkQuestions',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/cv')) {
                // ts_admin_cvs
                if (0 === strpos($pathinfo, '/admin/cvs') && preg_match('#^/admin/cvs(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_cvs')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::cvsAction',  'pages' => 1,));
                }

                // ts_admin_cv
                if (preg_match('#^/admin/cv(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_cv')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\AdminController::cvAction',  'page' => 1,));
                }

            }

            // ts_admin_editQuestionn
            if ($pathinfo === '/admin/listExcel') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::listExcelAction',  '_route' => 'ts_admin_editQuestionn',);
            }

            if (0 === strpos($pathinfo, '/admin/question')) {
                // ts_admin_questions
                if (0 === strpos($pathinfo, '/admin/questions') && preg_match('#^/admin/questions(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_questions')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::createQuestionAction',  'pages' => 1,));
                }

                // ts_admin_question
                if (preg_match('#^/admin/question(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_question')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::questionAction',  'page' => 1,));
                }

            }

            if (0 === strpos($pathinfo, '/admin/editQuestion')) {
                // ts_admin_editQuestionLibrary
                if ($pathinfo === '/admin/editQuestionLibrary') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::editQuestionLibraryAction',  '_route' => 'ts_admin_editQuestionLibrary',);
                }

                // ts_admin_editQuestion
                if ($pathinfo === '/admin/editQuestion') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::editQuestionAction',  '_route' => 'ts_admin_editQuestion',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/removeQuestion')) {
                // ts_admin_removeQuestion
                if ($pathinfo === '/admin/removeQuestion') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::removeQuestionAction',  '_route' => 'ts_admin_removeQuestion',);
                }

                // ts_admin_removeQuestionLibrary
                if ($pathinfo === '/admin/removeQuestionLibrary') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::removeQuestionLibraryAction',  '_route' => 'ts_admin_removeQuestionLibrary',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/test')) {
                // ts_admin_tests
                if ($pathinfo === '/admin/tests') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::testsAction',  '_route' => 'ts_admin_tests',);
                }

                // ts_admin_test
                if (preg_match('#^/admin/test(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_test')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::testAction',  'page' => 1,));
                }

            }

            // ts_admin_editTest
            if ($pathinfo === '/admin/editTest') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::editTestAction',  '_route' => 'ts_admin_editTest',);
            }

            // ts_admin_customizeTest
            if ($pathinfo === '/admin/ CustomizeEditTest') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::CustomizeEditTestAction',  '_route' => 'ts_admin_customizeTest',);
            }

            // ts_admin_removeTest
            if ($pathinfo === '/admin/removeTest') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::removeTestAction',  '_route' => 'ts_admin_removeTest',);
            }

            // ts_admin_settingTest
            if (0 === strpos($pathinfo, '/admin/settingTest') && preg_match('#^/admin/settingTest/(?P<pages>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_settingTest')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::settingTestAction',  'pages' => 1,));
            }

            // ts_admin_duplicateTest
            if ($pathinfo === '/admin/duplicateTest') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::duplicateTestAction',  '_route' => 'ts_admin_duplicateTest',);
            }

            // ts_admin_uploadQuestion
            if ($pathinfo === '/admin/uploadQuestions') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TestsController::uploadQuestionsAction',  '_route' => 'ts_admin_uploadQuestion',);
            }

            if (0 === strpos($pathinfo, '/admin/add')) {
                // ts_admin_addCandidate
                if (0 === strpos($pathinfo, '/admin/addCandidate') && preg_match('#^/admin/addCandidate(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_addCandidate')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::addCandidateAction',  'pages' => 1,));
                }

                // ts_admin_addRH
                if ($pathinfo === '/admin/addRH') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::addRHAction',  '_route' => 'ts_admin_addRH',);
                }

                // ts_admin_addAdmin
                if ($pathinfo === '/admin/addAdmin') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::addAdminAction',  '_route' => 'ts_admin_addAdmin',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/edit')) {
                // ts_admin_editUser
                if ($pathinfo === '/admin/editUser') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::editUserAction',  '_route' => 'ts_admin_editUser',);
                }

                // ts_admin_editUserSA
                if ($pathinfo === '/admin/editSaUser') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::editSAUserAction',  '_route' => 'ts_admin_editUserSA',);
                }

                // ts_admin_editCandidate
                if ($pathinfo === '/admin/editCandidate') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::editCandidateAction',  '_route' => 'ts_admin_editCandidate',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/remove')) {
                // ts_admin_removeUser
                if ($pathinfo === '/admin/removeUser') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::removeUserAction',  '_route' => 'ts_admin_removeUser',);
                }

                // ts_admin_removeCandidat
                if ($pathinfo === '/admin/removeCandidate') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\UsersController::removeCandidateAction',  '_route' => 'ts_admin_removeCandidat',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/edit')) {
                // ts_admin_editTests
                if ($pathinfo === '/admin/editTests') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TablesController::editTestsAction',  '_route' => 'ts_admin_editTests',);
                }

                // ts_admin_editValue
                if ($pathinfo === '/admin/editValue') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TablesController::editValueAction',  '_route' => 'ts_admin_editValue',);
                }

            }

            // ts_admin_removeValue
            if ($pathinfo === '/admin/removeValue') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\TablesController::removeValueAction',  '_route' => 'ts_admin_removeValue',);
            }

            // ts_admin_invitation
            if ($pathinfo === '/admin/invitation') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\NotificationController::invitationAction',  '_route' => 'ts_admin_invitation',);
            }

            // ts_admin_otherInvitation
            if (0 === strpos($pathinfo, '/admin/TestsInvitation') && preg_match('#^/admin/TestsInvitation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ts_admin_otherInvitation')), array (  '_controller' => 'TS\\AdminBundle\\Controller\\NotificationController::persistOtherInvitationAction',));
            }

            if (0 === strpos($pathinfo, '/admin/confirm')) {
                // ts_admin_confirmInvitation
                if ($pathinfo === '/admin/confirmInvitation') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\NotificationController::confirmInvitationAction',  '_route' => 'ts_admin_confirmInvitation',);
                }

                // ts_admin_confirmOtherInvitation
                if ($pathinfo === '/admin/confirmOtherInvitation') {
                    return array (  '_controller' => 'TS\\AdminBundle\\Controller\\NotificationController::confirmOtherInvitationAction',  '_route' => 'ts_admin_confirmOtherInvitation',);
                }

            }

            // ts_admin_removeOtherInvitation
            if ($pathinfo === '/admin/removeOtherInvitation') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\NotificationController::removeOtherInvitationAction',  '_route' => 'ts_admin_removeOtherInvitation',);
            }

        }

        if (0 === strpos($pathinfo, '/chart')) {
            // ts_grapheChartLine
            if ($pathinfo === '/chartLine') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\StatisticsController::statAction',  '_route' => 'ts_grapheChartLine',);
            }

            // ts_grapheChartPie
            if ($pathinfo === '/chartPie') {
                return array (  '_controller' => 'TS\\AdminBundle\\Controller\\StatisticsController::chartPieAction',  '_route' => 'ts_grapheChartPie',);
            }

        }

        if (0 === strpos($pathinfo, '/SRec')) {
            // tss_rec_offers
            if ($pathinfo === '/SRec/offers') {
                return array (  '_controller' => 'TS\\SRecBundle\\Controller\\SRecController::offersAction',  '_route' => 'tss_rec_offers',);
            }

            if (0 === strpos($pathinfo, '/SRec/cv')) {
                // tss_rec_cvs
                if (0 === strpos($pathinfo, '/SRec/cvs') && preg_match('#^/SRec/cvs(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tss_rec_cvs')), array (  '_controller' => 'TS\\SRecBundle\\Controller\\SRecController::cvsAction',  'pages' => 1,));
                }

                // tss_rec_cv
                if (preg_match('#^/SRec/cv(?:/(?P<pages>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tss_rec_cv')), array (  '_controller' => 'TS\\SRecBundle\\Controller\\SRecController::cvAction',  'pages' => 1,));
                }

            }

            // tss_rec_edit
            if ($pathinfo === '/SRec/edit') {
                return array (  '_controller' => 'TS\\SRecBundle\\Controller\\SRecController::editAction',  '_route' => 'tss_rec_edit',);
            }

            // tss_rec_tests
            if ($pathinfo === '/SRec/tests') {
                return array (  '_controller' => 'TS\\SRecBundle\\Controller\\SRecController::testsAction',  '_route' => 'tss_rec_tests',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/candidat')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/candidat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/candidat/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/candidat/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/empl')) {
            if (0 === strpos($pathinfo, '/employee')) {
                // employeeLogin
                if ($pathinfo === '/employeeLogin') {
                    return array (  '_controller' => 'TS\\LDAPBundle\\Controller\\LDAPController::loginEmployeeAction',  '_route' => 'employeeLogin',);
                }

                // emplyeeCheck
                if ($pathinfo === '/employee/employeeCheck') {
                    return array('_route' => 'emplyeeCheck');
                }

            }

            // employeeLogout
            if ($pathinfo === '/emplyee/employeeLogout') {
                return array('_route' => 'employeeLogout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // adminLogin
            if ($pathinfo === '/adminLogin') {
                return array (  '_controller' => 'TS\\LDAPBundle\\Controller\\LDAPController::loginAction',  '_route' => 'adminLogin',);
            }

            if (0 === strpos($pathinfo, '/admin/admin')) {
                // adminCheck
                if ($pathinfo === '/admin/adminCheck') {
                    return array('_route' => 'adminCheck');
                }

                // adminLogout
                if ($pathinfo === '/admin/adminLogout') {
                    return array('_route' => 'adminLogout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
