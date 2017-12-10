<?php

/* TSAdminBundle:Candidate:candidatTests.html.twig */
class __TwigTemplate_2c094a452da441c01940e08d3efa96bcea269fd77ca5eab551727d358e25aed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icons' => array($this, 'block_icons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c24820e142edede5f9aedb75a798875223f89171f06d3c803a5bb448a8e1421 = $this->env->getExtension("native_profiler");
        $__internal_5c24820e142edede5f9aedb75a798875223f89171f06d3c803a5bb448a8e1421->enter($__internal_5c24820e142edede5f9aedb75a798875223f89171f06d3c803a5bb448a8e1421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:candidatTests.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"shortcut icon\" href=\"/TestTool/web/images/SungardLogo.png\" type=\"image/vnd.microsoft.icon\">
        <title>
            ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "        </title>
        <!-- Favicons -->
        ";
        // line 15
        $this->displayBlock('icons', $context, $blocks);
        // line 18
        echo "        <!--[if lt IE 9]>
          <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- CSS Files -->
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "


        <!-- JS Files-->
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "    </head>
    <body class=\"skin-blue\">
        <!-- # loading page --->
        <div id=\"loading\" class=\"ui-front loader ui-widget-overlay bg-white opacity-100\">
            <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/loader-dark.gif"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <!-- #page-wrapper -->
        <div id=\"page-wrapper\" class=\"demo-example\">
            <!-- #page-header -->

            <!-- #page-header -->
            <div id=\"page-header\" class=\"clearfix\">
                <!-- #logo -->
                <div id=\"header-logo\">
                    <a href=\"javascript:;\" class=\"tooltip-button\" data-placement=\"bottom\" title=\"Close sidebar\" id=\"close-sidebar\">
                        <i class=\"glyph-icon icon-caret-left\"></i>
                    </a>
                    <a href=\"javascript:;\" class=\"tooltip-button hidden\" data-placement=\"bottom\" title=\"Open sidebar\" id=\"rm-close-sidebar\">
                        <i class=\"glyph-icon icon-caret-right\"></i>
                    </a>
                    <a href=\"javascript:;\" class=\"tooltip-button hidden\" title=\"Navigation Menu\" id=\"responsive-open-menu\">
                        <i class=\"glyph-icon icon-align-justify\"></i>
                    </a>
                    <img style=\"padding:20px \"src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                    <i class=\"opacity-80\"></i>
                </div>

                <!-- #user-profile-->
                <div class=\"user-profile dropdown\">
                    <a href=\"javascript:;\" title=\"\" class=\"user-ico clearfix\" data-toggle=\"dropdown\">
                        ";
        // line 101
        $this->displayBlock('header', $context, $blocks);
        // line 105
        echo "                        <i class=\"glyph-icon icon-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu float-right\">
                        <li>
                            <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("tsldap_Employeelogout");
        echo "\" title=\"\">
                                <i class=\"glyph-icon icon-signout font-size-13 mrg5R\"></i>
                                <span class=\"font-bold\">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- #dash-menu -->
                <div class=\"dropdown dash-menu\">
                   
                    <div class=\"dropdown-menu float-right\">
                        <div class=\"small-box\">
                            <div class=\"pad10A dashboard-buttons clearfix\">
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-blue-alt\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icons/uk.png"), "html", null, true);
        echo "\"/>
                                    </span>
                                </a>
                                <a href=\"javascript:;\" class=\"btn vertical-button hover-red\" title=\"\">
                                    <span class=\"glyph-icon icon-separator-vertical pad0A medium\">
                                        <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/icons/fr.gif"), "html", null, true);
        echo "\"/>
                                    </span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #icons -->
            </div>

            <!-- #page-sidebar -->
            <div id=\"page-sidebar\" class=\"scrollable-content\">
                <div id=\"sidebar-menu\">
                    ";
        // line 143
        $this->displayBlock('sidebar', $context, $blocks);
        // line 173
        echo "                </div>
            </div>
            <!--#menu-right-->
            ";
        // line 177
        echo "            <script type=\"text/javascript\"></script>
            <!-- #page-main -->
            <div id=\"page-content-wrapper\">
                <!-- #page-title -->
                <!-- #page-content -->
                <div id=\"page-content\">
                    <div class=\"row\">
                       
                       
                        ";
        // line 186
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    
   \$(function () {  
   ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warnning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo " 
    \$.notify({
\ttitle: '";
            // line 240
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "',
\tmessage: 'sorry, test was submitted automatically, you will have zero on each unanswered question'
},{
\ttype: 'pastel-info',
\tdelay: 0,
\ttemplate: '<div data-notify=\"container\" class=\"col-xs-11 col-sm-3 alert alert-{0}\" role=\"alert\">' +
\t\t'<span data-notify=\"title\">{1}</span>' +
\t\t'<span data-notify=\"message\">{2}</span>' +
\t'</div>'
});
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo " });
                           


                        </script>";
        
        $__internal_5c24820e142edede5f9aedb75a798875223f89171f06d3c803a5bb448a8e1421->leave($__internal_5c24820e142edede5f9aedb75a798875223f89171f06d3c803a5bb448a8e1421_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_625dcc974f8ee3dcea48b8854fe06e961ffadf70093a566a46ab0c5c918666a2 = $this->env->getExtension("native_profiler");
        $__internal_625dcc974f8ee3dcea48b8854fe06e961ffadf70093a566a46ab0c5c918666a2->enter($__internal_625dcc974f8ee3dcea48b8854fe06e961ffadf70093a566a46ab0c5c918666a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "                Sungard
            ";
        
        $__internal_625dcc974f8ee3dcea48b8854fe06e961ffadf70093a566a46ab0c5c918666a2->leave($__internal_625dcc974f8ee3dcea48b8854fe06e961ffadf70093a566a46ab0c5c918666a2_prof);

    }

    // line 15
    public function block_icons($context, array $blocks = array())
    {
        $__internal_139ef4c21d3b1c9d348ae92e5a22a38595d1da04ab26a78a1d4471181697fab5 = $this->env->getExtension("native_profiler");
        $__internal_139ef4c21d3b1c9d348ae92e5a22a38595d1da04ab26a78a1d4471181697fab5->enter($__internal_139ef4c21d3b1c9d348ae92e5a22a38595d1da04ab26a78a1d4471181697fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 16
        echo "
        ";
        
        $__internal_139ef4c21d3b1c9d348ae92e5a22a38595d1da04ab26a78a1d4471181697fab5->leave($__internal_139ef4c21d3b1c9d348ae92e5a22a38595d1da04ab26a78a1d4471181697fab5_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c39de0eb205059949a30fd5bb16fbaa8c3384da44b5b6161ae069f1a451dfd9 = $this->env->getExtension("native_profiler");
        $__internal_4c39de0eb205059949a30fd5bb16fbaa8c3384da44b5b6161ae069f1a451dfd9->enter($__internal_4c39de0eb205059949a30fd5bb16fbaa8c3384da44b5b6161ae069f1a451dfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "            
            <!-- Fides Admin CSS Core -->
             <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/TestTool/web/css/LTE/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- font Awesome -->
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/TestTool/web/css/LTE/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
             <!-- Ionicons -->
             <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/TestTool/web/css/LTE/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Theme style -->
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/TestTool/web/css/LTE/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/aui-production.min.css"), "html", null, true);
        echo "\">
            <!-- Theme UI -->
            <link id=\"layout-theme\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/color-schemes/dark-blue.min.css"), "html", null, true);
        echo "\">
            <!-- Fides Admin Responsive -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/common.min.css"), "html", null, true);
        echo "\">
            <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../_assets/themes/fides/common.css\"> -->
            <link id=\"theme-animations\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/animations.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/responsive.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/animate.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" type=\"text/css\" title=\"Mon design 1\" href=\"/TestTool/web/css/bootstrap/bootstrap.min.css\"> 
        ";
        
        $__internal_4c39de0eb205059949a30fd5bb16fbaa8c3384da44b5b6161ae069f1a451dfd9->leave($__internal_4c39de0eb205059949a30fd5bb16fbaa8c3384da44b5b6161ae069f1a451dfd9_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b9e09acec3429c391ce2c7500ebcf629e78212fa3fd46a9102a39184f7523eb = $this->env->getExtension("native_profiler");
        $__internal_3b9e09acec3429c391ce2c7500ebcf629e78212fa3fd46a9102a39184f7523eb->enter($__internal_3b9e09acec3429c391ce2c7500ebcf629e78212fa3fd46a9102a39184f7523eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "             <!-- jQuery 2.0.2 -->
              
        <script src=\"/TestTool/web/js/LTE/bootstrap.min.js\" type=\"text/javascript\"></script>
        <!-- AdminLTE App -->
        <script src=\"/TestTool/web/js/LTE/AdminLTE/app.js\" type=\"text/javascript\"></script>

            <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery.ba-resize.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/aui-production.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/raphael.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/widgets/charts-justgage.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"/TestTool/web/js/jquery.bootstrap-growl.js\"></script>
        ";
        
        $__internal_3b9e09acec3429c391ce2c7500ebcf629e78212fa3fd46a9102a39184f7523eb->leave($__internal_3b9e09acec3429c391ce2c7500ebcf629e78212fa3fd46a9102a39184f7523eb_prof);

    }

    // line 101
    public function block_header($context, array $blocks = array())
    {
        $__internal_9388ae0b3407d7a28899d51db59fd0968c88b92e26b116d8eb09912d3e251dc8 = $this->env->getExtension("native_profiler");
        $__internal_9388ae0b3407d7a28899d51db59fd0968c88b92e26b116d8eb09912d3e251dc8->enter($__internal_9388ae0b3407d7a28899d51db59fd0968c88b92e26b116d8eb09912d3e251dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 102
        echo "                            <img width=\"36\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/profile.png"), "html", null, true);
        echo "\" alt=\"\">
                            <span>  ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "username", array()), "html", null, true);
        echo " </span>
                        ";
        
        $__internal_9388ae0b3407d7a28899d51db59fd0968c88b92e26b116d8eb09912d3e251dc8->leave($__internal_9388ae0b3407d7a28899d51db59fd0968c88b92e26b116d8eb09912d3e251dc8_prof);

    }

    // line 143
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8557711c290c668aab1e6ea44c5fcabc1578977af8c5c84c1a9c20de781798f6 = $this->env->getExtension("native_profiler");
        $__internal_8557711c290c668aab1e6ea44c5fcabc1578977af8c5c84c1a9c20de781798f6->enter($__internal_8557711c290c668aab1e6ea44c5fcabc1578977af8c5c84c1a9c20de781798f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 144
        echo "                        <!-- #menu-list -->
                        <ul>
                            <!-- #Tests -->
                          <!--  <li> -->
                                <a href=\"javascript:;\" title=\"Genearal\">
                                    <i class=\"glyph-icon icon-bars\"></i>
                                    Tests
                                    <i class=\"glyph-icon icon-angle-down\" style=\"float:right\"></i>
                                </a>
                        </ul>
                                <ul>
                                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatTests"]) ? $context["candidatTests"] : $this->getContext($context, "candidatTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidatTest"]) {
            // line 156
            echo "                                        ";
            if (($this->getAttribute($context["candidatTest"], "state", array()) == "no")) {
                // line 157
                echo "                                           
                                        <li>
                                            
                                            <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_candidateDescriptionTest", array("id" => $this->getAttribute($context["candidatTest"], "testId", array()))), "html", null, true);
                echo "\" title=\"\" style=\"font-size: 10px;\">
                                                <i class=\"glyph-icon icon-chevron-right\"></i>
                                                ";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidatTest"], "name", array()), "html", null, true);
                echo "
                                            </a>
                                        
                                        </li>
                                        
                                    ";
            }
            // line 168
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidatTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                                </ul>
                          <!--   </li>-->
                      
                    ";
        
        $__internal_8557711c290c668aab1e6ea44c5fcabc1578977af8c5c84c1a9c20de781798f6->leave($__internal_8557711c290c668aab1e6ea44c5fcabc1578977af8c5c84c1a9c20de781798f6_prof);

    }

    // line 186
    public function block_content($context, array $blocks = array())
    {
        $__internal_efbcdf68c8cfea4c7a680d96005e6430b45407d0b1057b8b8bf021df22f73b46 = $this->env->getExtension("native_profiler");
        $__internal_efbcdf68c8cfea4c7a680d96005e6430b45407d0b1057b8b8bf021df22f73b46->enter($__internal_efbcdf68c8cfea4c7a680d96005e6430b45407d0b1057b8b8bf021df22f73b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 187
        echo "                            ";
        $context["nbr_tests"] = 0;
        // line 188
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidatTests"]) ? $context["candidatTests"] : $this->getContext($context, "candidatTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["candidatTest"]) {
            // line 189
            echo "                                ";
            if (($this->getAttribute($context["candidatTest"], "state", array()) == "no")) {
                // line 190
                echo "                                    ";
                $context["nbr_tests"] = ((isset($context["nbr_tests"]) ? $context["nbr_tests"] : $this->getContext($context, "nbr_tests")) + 1);
                // line 191
                echo "                                ";
            }
            // line 192
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidatTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                            
                          <div id=\"warningendtime\"style=\"display: none\"class=\"infobox warning-bg\">
                             <p><i class=\"glyph-icon icon-exclamation mrg10R\"></i>To view the available options &amp; configurations you can visit the <a href=\"overlays.html\" target=\"_blank\" title=\"Fides Admin Overlays documentation\">Fides Admin Overlays documentation</a> page.</p>
                        </div>
                            ";
        // line 197
        if (((isset($context["nbr_tests"]) ? $context["nbr_tests"] : $this->getContext($context, "nbr_tests")) > 1)) {
            // line 198
            echo "                                <h3 class=\"heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix\">
                                    <i class=\"radius-all-100 glyph-icon fa fa-hand-o-left heading-icon\"></i>
                                        <div class=\"heading-content\">
                                        Welcome to Sungard's Quiz
                                          <small>   
                                          You have to pass ";
            // line 203
            echo twig_escape_filter($this->env, (isset($context["nbr_tests"]) ? $context["nbr_tests"] : $this->getContext($context, "nbr_tests")), "html", null, true);
            echo " tests,  Please choose one
                                          </small>
                                        </div>
                                 </h3>
                              ";
        } elseif ((        // line 207
(isset($context["nbr_tests"]) ? $context["nbr_tests"] : $this->getContext($context, "nbr_tests")) == 1)) {
            // line 208
            echo "                                <h3 class=\"heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix\">
                                    <i class=\"radius-all-100 glyph-icon fa fa-hand-o-left heading-icon\"></i>
                                        <div class=\"heading-content\">
                                        Welcome to Sungard's Quiz
                                          <small>   
                                          You have to pass only one test
                                          </small>
                                        </div>
                                 </h3>
               
                            ";
        } elseif ((        // line 218
(isset($context["nbr_tests"]) ? $context["nbr_tests"] : $this->getContext($context, "nbr_tests")) == 0)) {
            // line 219
            echo "                                <h3 class=\"heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix\">
                                    <div class=\"heading-content\">
                                         Thank you you have done all your tests
                                         
                                    </div>
                                 </h3
                                  
                            ";
        }
        // line 227
        echo "                                    
                        ";
        
        $__internal_efbcdf68c8cfea4c7a680d96005e6430b45407d0b1057b8b8bf021df22f73b46->leave($__internal_efbcdf68c8cfea4c7a680d96005e6430b45407d0b1057b8b8bf021df22f73b46_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:candidatTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 227,  537 => 219,  535 => 218,  523 => 208,  521 => 207,  514 => 203,  507 => 198,  505 => 197,  499 => 193,  493 => 192,  490 => 191,  487 => 190,  484 => 189,  479 => 188,  476 => 187,  470 => 186,  460 => 169,  454 => 168,  445 => 162,  440 => 160,  435 => 157,  432 => 156,  428 => 155,  415 => 144,  409 => 143,  400 => 103,  395 => 102,  389 => 101,  379 => 68,  375 => 67,  371 => 66,  367 => 65,  363 => 64,  359 => 63,  355 => 62,  351 => 61,  347 => 60,  343 => 59,  339 => 58,  335 => 57,  327 => 51,  321 => 50,  311 => 43,  307 => 42,  303 => 41,  299 => 40,  294 => 38,  289 => 36,  284 => 34,  279 => 32,  274 => 30,  269 => 28,  264 => 26,  260 => 24,  254 => 23,  246 => 16,  240 => 15,  232 => 11,  226 => 10,  215 => 251,  198 => 240,  191 => 238,  180 => 229,  178 => 186,  167 => 177,  162 => 173,  160 => 143,  143 => 129,  135 => 124,  117 => 109,  111 => 105,  109 => 101,  99 => 94,  77 => 75,  71 => 71,  69 => 50,  63 => 46,  61 => 23,  55 => 20,  51 => 19,  48 => 18,  46 => 15,  42 => 13,  40 => 10,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="shortcut icon" href="/TestTool/web/images/SungardLogo.png" type="image/vnd.microsoft.icon">*/
/*         <title>*/
/*             {% block title %}*/
/*                 Sungard*/
/*             {% endblock %}*/
/*         </title>*/
/*         <!-- Favicons -->*/
/*         {% block icons %}*/
/* */
/*         {% endblock %}*/
/*         <!--[if lt IE 9]>*/
/*           <script src="{{ asset('assets/js/minified/core/html5shiv.min.js')}}"></script>*/
/*           <script src="{{ asset('assets/js/minified/core/respond.min.js')}}"></script>*/
/*         <![endif]-->*/
/*         <!-- CSS Files -->*/
/*         {% block stylesheets %}*/
/*             */
/*             <!-- Fides Admin CSS Core -->*/
/*              <link href="{{ asset('/TestTool/web/css/LTE/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*             <!-- font Awesome -->*/
/*             <link href="{{ asset('/TestTool/web/css/LTE/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*              <!-- Ionicons -->*/
/*              <link href="{{ asset('/TestTool/web/css/LTE/ionicons.min.css')}}" rel="stylesheet" type="text/css" />*/
/*             <!-- Theme style -->*/
/*             <link href="{{ asset('/TestTool/web/css/LTE/AdminLTE.css')}}" rel="stylesheet" type="text/css" />*/
/*             */
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/minified/aui-production.min.css')}}">*/
/*             <!-- Theme UI -->*/
/*             <link id="layout-theme" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/color-schemes/dark-blue.min.css')}}">*/
/*             <!-- Fides Admin Responsive -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/common.min.css')}}">*/
/*             <!-- <link rel="stylesheet" type="text/css" href="../_assets/themes/fides/common.css"> -->*/
/*             <link id="theme-animations" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/animations.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/responsive.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/minified/animate.css')}}">*/
/*             <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/*             <link rel="stylesheet" type="text/css" title="Mon design 1" href="/TestTool/web/css/bootstrap/bootstrap.min.css"> */
/*         {% endblock %}*/
/* */
/* */
/* */
/*         <!-- JS Files-->*/
/*         {% block javascripts %}*/
/*              <!-- jQuery 2.0.2 -->*/
/*               */
/*         <script src="/TestTool/web/js/LTE/bootstrap.min.js" type="text/javascript"></script>*/
/*         <!-- AdminLTE App -->*/
/*         <script src="/TestTool/web/js/LTE/AdminLTE/app.js" type="text/javascript"></script>*/
/* */
/*             <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/aui-production.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/core/raphael.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/widgets/charts-justgage.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/bootstrap-notify.js')}}"></script>*/
/*             <script type="text/javascript" src="/TestTool/web/js/jquery.bootstrap-growl.js"></script>*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="skin-blue">*/
/*         <!-- # loading page --->*/
/*         <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">*/
/*             <img src="{{ asset('assets/images/loader-dark.gif')}}" alt="">*/
/*         </div>*/
/*         <!-- #page-wrapper -->*/
/*         <div id="page-wrapper" class="demo-example">*/
/*             <!-- #page-header -->*/
/* */
/*             <!-- #page-header -->*/
/*             <div id="page-header" class="clearfix">*/
/*                 <!-- #logo -->*/
/*                 <div id="header-logo">*/
/*                     <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">*/
/*                         <i class="glyph-icon icon-caret-left"></i>*/
/*                     </a>*/
/*                     <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">*/
/*                         <i class="glyph-icon icon-caret-right"></i>*/
/*                     </a>*/
/*                     <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">*/
/*                         <i class="glyph-icon icon-align-justify"></i>*/
/*                     </a>*/
/*                     <img style="padding:20px "src="{{ asset('assets/images/logo.png')}}" alt="">*/
/*                     <i class="opacity-80"></i>*/
/*                 </div>*/
/* */
/*                 <!-- #user-profile-->*/
/*                 <div class="user-profile dropdown">*/
/*                     <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">*/
/*                         {% block header %}*/
/*                             <img width="36" src="{{ asset('images/profile.png')}}" alt="">*/
/*                             <span>  {{ candidat.username }} </span>*/
/*                         {% endblock %}*/
/*                         <i class="glyph-icon icon-chevron-down"></i>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu float-right">*/
/*                         <li>*/
/*                             <a href="{{path('tsldap_Employeelogout')}}" title="">*/
/*                                 <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>*/
/*                                 <span class="font-bold">Logout</span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- #dash-menu -->*/
/*                 <div class="dropdown dash-menu">*/
/*                    */
/*                     <div class="dropdown-menu float-right">*/
/*                         <div class="small-box">*/
/*                             <div class="pad10A dashboard-buttons clearfix">*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-blue-alt" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <img src="{{ asset('images/icons/uk.png')}}"/>*/
/*                                     </span>*/
/*                                 </a>*/
/*                                 <a href="javascript:;" class="btn vertical-button hover-red" title="">*/
/*                                     <span class="glyph-icon icon-separator-vertical pad0A medium">*/
/*                                         <img src="{{ asset('images/icons/fr.gif')}}"/>*/
/*                                     </span>*/
/*                                 </a>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- #icons -->*/
/*             </div>*/
/* */
/*             <!-- #page-sidebar -->*/
/*             <div id="page-sidebar" class="scrollable-content">*/
/*                 <div id="sidebar-menu">*/
/*                     {% block sidebar %}*/
/*                         <!-- #menu-list -->*/
/*                         <ul>*/
/*                             <!-- #Tests -->*/
/*                           <!--  <li> -->*/
/*                                 <a href="javascript:;" title="Genearal">*/
/*                                     <i class="glyph-icon icon-bars"></i>*/
/*                                     Tests*/
/*                                     <i class="glyph-icon icon-angle-down" style="float:right"></i>*/
/*                                 </a>*/
/*                         </ul>*/
/*                                 <ul>*/
/*                                     {% for candidatTest in candidatTests %}*/
/*                                         {%if candidatTest.state=='no'%}*/
/*                                            */
/*                                         <li>*/
/*                                             */
/*                                             <a href="{{path('ts_admin_candidateDescriptionTest', {'id':candidatTest.testId})}}" title="" style="font-size: 10px;">*/
/*                                                 <i class="glyph-icon icon-chevron-right"></i>*/
/*                                                 {{candidatTest.name}}*/
/*                                             </a>*/
/*                                         */
/*                                         </li>*/
/*                                         */
/*                                     {%endif%}*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                           <!--   </li>-->*/
/*                       */
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*             <!--#menu-right-->*/
/*             {#            {% include "TSAdminBundle::right.html.twig" %}#}*/
/*             <script type="text/javascript"></script>*/
/*             <!-- #page-main -->*/
/*             <div id="page-content-wrapper">*/
/*                 <!-- #page-title -->*/
/*                 <!-- #page-content -->*/
/*                 <div id="page-content">*/
/*                     <div class="row">*/
/*                        */
/*                        */
/*                         {% block content %}*/
/*                             {% set nbr_tests = 0 %}*/
/*                             {% for candidatTest in candidatTests %}*/
/*                                 {% if candidatTest.state == 'no' %}*/
/*                                     {% set nbr_tests = nbr_tests + 1 %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             */
/*                           <div id="warningendtime"style="display: none"class="infobox warning-bg">*/
/*                              <p><i class="glyph-icon icon-exclamation mrg10R"></i>To view the available options &amp; configurations you can visit the <a href="overlays.html" target="_blank" title="Fides Admin Overlays documentation">Fides Admin Overlays documentation</a> page.</p>*/
/*                         </div>*/
/*                             {% if nbr_tests >  1 %}*/
/*                                 <h3 class="heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix">*/
/*                                     <i class="radius-all-100 glyph-icon fa fa-hand-o-left heading-icon"></i>*/
/*                                         <div class="heading-content">*/
/*                                         Welcome to Sungard's Quiz*/
/*                                           <small>   */
/*                                           You have to pass {{ nbr_tests }} tests,  Please choose one*/
/*                                           </small>*/
/*                                         </div>*/
/*                                  </h3>*/
/*                               {% elseif nbr_tests ==  1 %}*/
/*                                 <h3 class="heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix">*/
/*                                     <i class="radius-all-100 glyph-icon fa fa-hand-o-left heading-icon"></i>*/
/*                                         <div class="heading-content">*/
/*                                         Welcome to Sungard's Quiz*/
/*                                           <small>   */
/*                                           You have to pass only one test*/
/*                                           </small>*/
/*                                         </div>*/
/*                                  </h3>*/
/*                */
/*                             {%elseif nbr_tests ==  0 %}*/
/*                                 <h3 class="heading-1 bg-white radius-all-4  text-left display-block pad10A clearfix">*/
/*                                     <div class="heading-content">*/
/*                                          Thank you you have done all your tests*/
/*                                          */
/*                                     </div>*/
/*                                  </h3*/
/*                                   */
/*                             {% endif %}*/
/*                                     */
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* <script>*/
/*     */
/*    $(function () {  */
/*    {% for flashMessage in app.session.flashbag.get('warnning') %} */
/*     $.notify({*/
/* 	title: '{{ flashMessage }}',*/
/* 	message: 'sorry, test was submitted automatically, you will have zero on each unanswered question'*/
/* },{*/
/* 	type: 'pastel-info',*/
/* 	delay: 0,*/
/* 	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +*/
/* 		'<span data-notify="title">{1}</span>' +*/
/* 		'<span data-notify="message">{2}</span>' +*/
/* 	'</div>'*/
/* });*/
/*        {% endfor %}*/
/*  });*/
/*                            */
/* */
/* */
/*                         </script>*/
