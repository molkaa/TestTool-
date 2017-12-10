<?php

/* @TSAdmin/layout.html.twig */
class __TwigTemplate_512b785404a9812ecf9f7a0486be3f9b154c7f82537546aff19da1234c94080e extends Twig_Template
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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e5cd74b527e278a7ed11e4bf5213e498d7918b9000c42ecb3509a1c52661579 = $this->env->getExtension("native_profiler");
        $__internal_1e5cd74b527e278a7ed11e4bf5213e498d7918b9000c42ecb3509a1c52661579->enter($__internal_1e5cd74b527e278a7ed11e4bf5213e498d7918b9000c42ecb3509a1c52661579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/layout.html.twig"));

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
        // line 17
        echo "        <!--[if lt IE 9]>
          <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- CSS Files -->
        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
        <!-- JS Files-->
        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "    </head>
    <body>
        <!-- # loading page --->
        <div id=\"loading\" class=\"ui-front loader ui-widget-overlay bg-white opacity-100\">
            <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/loader-dark.gif"), "html", null, true);
        echo "\" alt=\"\">
        </div>
        <!-- #page-wrapper -->
        <div id=\"page-wrapper\" class=\"demo-example\">
            <!-- #page-header -->
            ";
        // line 74
        $this->loadTemplate("TSAdminBundle::header.html.twig", "@TSAdmin/layout.html.twig", 74)->display($context);
        // line 75
        echo "            <!-- #page-sidebar -->
            ";
        // line 76
        $this->loadTemplate("TSAdminBundle::sidebar.html.twig", "@TSAdmin/layout.html.twig", 76)->display($context);
        // line 77
        echo "            <!--#menu-right-->
            ";
        // line 79
        echo "          
            <!-- #page-main -->
            <div id=\"page-content-wrapper\">
                <!-- #page-TITLE -->

                <!-- #page-content -->
                <div id=\"page-content\">
                    <div class=\"row\">
                        ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "                    </div>
                </div>

            </div>
        </div>
    </body>
</html>





";
        
        $__internal_1e5cd74b527e278a7ed11e4bf5213e498d7918b9000c42ecb3509a1c52661579->leave($__internal_1e5cd74b527e278a7ed11e4bf5213e498d7918b9000c42ecb3509a1c52661579_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_be5188b2017104a4ec1c267a11c973d95ae867c5383809db43816f9d68c439ed = $this->env->getExtension("native_profiler");
        $__internal_be5188b2017104a4ec1c267a11c973d95ae867c5383809db43816f9d68c439ed->enter($__internal_be5188b2017104a4ec1c267a11c973d95ae867c5383809db43816f9d68c439ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "                Sungard
            ";
        
        $__internal_be5188b2017104a4ec1c267a11c973d95ae867c5383809db43816f9d68c439ed->leave($__internal_be5188b2017104a4ec1c267a11c973d95ae867c5383809db43816f9d68c439ed_prof);

    }

    // line 15
    public function block_icons($context, array $blocks = array())
    {
        $__internal_5c1fe37a866118c831ce5d8513f2c2281b881e350ed19b784361cbe3588ce025 = $this->env->getExtension("native_profiler");
        $__internal_5c1fe37a866118c831ce5d8513f2c2281b881e350ed19b784361cbe3588ce025->enter($__internal_5c1fe37a866118c831ce5d8513f2c2281b881e350ed19b784361cbe3588ce025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        echo " 
        ";
        
        $__internal_5c1fe37a866118c831ce5d8513f2c2281b881e350ed19b784361cbe3588ce025->leave($__internal_5c1fe37a866118c831ce5d8513f2c2281b881e350ed19b784361cbe3588ce025_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40ffddbf17def0b9e74db44f133144d5c0ded6bddddb5cc42ea15448b557119e = $this->env->getExtension("native_profiler");
        $__internal_40ffddbf17def0b9e74db44f133144d5c0ded6bddddb5cc42ea15448b557119e->enter($__internal_40ffddbf17def0b9e74db44f133144d5c0ded6bddddb5cc42ea15448b557119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "
            <!-- bootstrap -->


            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/aui-production.min.css"), "html", null, true);
        echo "\">
            <!-- Theme UI -->
            <link id=\"layout-theme\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/color-schemes/dark-blue.min.css"), "html", null, true);
        echo "\">
            <!-- Fides Admin Responsive -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/common.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/responsive.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/animate.css"), "html", null, true);
        echo "\">
            <link id=\"theme-animations\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/animations.min.css"), "html", null, true);
        echo "\">
            <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../_assets/themes/fides/common.css\"> -->
            <link rel=\"stylesheet\" type=\"text/css\" title=\"Mon design 1\" href=\"/TestTool/web/css/bootstrap/bootstrap.min.css\"> 
 
           

        ";
        
        $__internal_40ffddbf17def0b9e74db44f133144d5c0ded6bddddb5cc42ea15448b557119e->leave($__internal_40ffddbf17def0b9e74db44f133144d5c0ded6bddddb5cc42ea15448b557119e_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4bcf2b4fcfdc549a0190d02366896a201b40124e0b0712c18fbc0b62b916f8d5 = $this->env->getExtension("native_profiler");
        $__internal_4bcf2b4fcfdc549a0190d02366896a201b40124e0b0712c18fbc0b62b916f8d5->enter($__internal_4bcf2b4fcfdc549a0190d02366896a201b40124e0b0712c18fbc0b62b916f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "   

            
\t\t
                                             
                                          

          
        
           
             <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/aui-production.min.js"), "html", null, true);
        echo "\"></script>
             <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/widgets/charts-justgage.min.js"), "html", null, true);
        echo "\"></script>
             <script type=\"text/javascript\" src=\"/TestTool/web/js/bootstrap/bootstrap.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/raphael.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"/TestTool/web/js/jquery.bootstrap-growl.js\"></script>
            <script type=\"text/javascript\" src=\"/TestTool/web/js/jquery.table2excel.js\"></script>
           
           

        ";
        
        $__internal_4bcf2b4fcfdc549a0190d02366896a201b40124e0b0712c18fbc0b62b916f8d5->leave($__internal_4bcf2b4fcfdc549a0190d02366896a201b40124e0b0712c18fbc0b62b916f8d5_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_c32b51b34169ec3fafc6f4bd3f481bf05ae1e3242ae9b52c98a4040cf2e20daa = $this->env->getExtension("native_profiler");
        $__internal_c32b51b34169ec3fafc6f4bd3f481bf05ae1e3242ae9b52c98a4040cf2e20daa->enter($__internal_c32b51b34169ec3fafc6f4bd3f481bf05ae1e3242ae9b52c98a4040cf2e20daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "                        ";
        
        $__internal_c32b51b34169ec3fafc6f4bd3f481bf05ae1e3242ae9b52c98a4040cf2e20daa->leave($__internal_c32b51b34169ec3fafc6f4bd3f481bf05ae1e3242ae9b52c98a4040cf2e20daa_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 88,  242 => 87,  228 => 58,  224 => 57,  219 => 55,  215 => 54,  203 => 44,  197 => 43,  183 => 34,  179 => 33,  175 => 32,  171 => 31,  166 => 29,  161 => 27,  155 => 23,  149 => 22,  136 => 15,  128 => 11,  122 => 10,  103 => 89,  101 => 87,  91 => 79,  88 => 77,  86 => 76,  83 => 75,  81 => 74,  73 => 69,  67 => 65,  65 => 43,  61 => 41,  59 => 22,  53 => 19,  49 => 18,  46 => 17,  44 => 15,  40 => 13,  38 => 10,  27 => 1,);
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
/*         {% block icons %} */
/*         {% endblock %}*/
/*         <!--[if lt IE 9]>*/
/*           <script src="{{ asset('assets/js/minified/core/html5shiv.min.js')}}"></script>*/
/*           <script src="{{ asset('assets/js/minified/core/respond.min.js')}}"></script>*/
/*         <![endif]-->*/
/*         <!-- CSS Files -->*/
/*         {% block stylesheets %}*/
/* */
/*             <!-- bootstrap -->*/
/* */
/* */
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/minified/aui-production.min.css')}}">*/
/*             <!-- Theme UI -->*/
/*             <link id="layout-theme" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/color-schemes/dark-blue.min.css')}}">*/
/*             <!-- Fides Admin Responsive -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/common.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/responsive.min.css')}}">*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/minified/animate.css')}}">*/
/*             <link id="theme-animations" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/animations.min.css')}}">*/
/*             <!-- <link rel="stylesheet" type="text/css" href="../_assets/themes/fides/common.css"> -->*/
/*             <link rel="stylesheet" type="text/css" title="Mon design 1" href="/TestTool/web/css/bootstrap/bootstrap.min.css"> */
/*  */
/*            */
/* */
/*         {% endblock %}*/
/* */
/*         <!-- JS Files-->*/
/*         {% block javascripts %}*/
/*    */
/* */
/*             */
/* 		*/
/*                                              */
/*                                           */
/* */
/*           */
/*         */
/*            */
/*              <script type="text/javascript" src="{{ asset('assets/js/minified/aui-production.min.js')}}"></script>*/
/*              <script type="text/javascript" src="{{ asset('assets/js/minified/widgets/charts-justgage.min.js')}}"></script>*/
/*              <script type="text/javascript" src="/TestTool/web/js/bootstrap/bootstrap.min.js"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/core/raphael.min.js')}}"></script>*/
/*             <script type="text/javascript" src="{{ asset('assets/js/minified/bootstrap-notify.js')}}"></script>*/
/*             <script type="text/javascript" src="/TestTool/web/js/jquery.bootstrap-growl.js"></script>*/
/*             <script type="text/javascript" src="/TestTool/web/js/jquery.table2excel.js"></script>*/
/*            */
/*            */
/* */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <!-- # loading page --->*/
/*         <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">*/
/*             <img src="{{ asset('assets/images/loader-dark.gif')}}" alt="">*/
/*         </div>*/
/*         <!-- #page-wrapper -->*/
/*         <div id="page-wrapper" class="demo-example">*/
/*             <!-- #page-header -->*/
/*             {% include "TSAdminBundle::header.html.twig" %}*/
/*             <!-- #page-sidebar -->*/
/*             {% include "TSAdminBundle::sidebar.html.twig" %}*/
/*             <!--#menu-right-->*/
/*             {#            {% include "TSAdminBundle::right.html.twig" %}#}*/
/*           */
/*             <!-- #page-main -->*/
/*             <div id="page-content-wrapper">*/
/*                 <!-- #page-TITLE -->*/
/* */
/*                 <!-- #page-content -->*/
/*                 <div id="page-content">*/
/*                     <div class="row">*/
/*                         {% block content %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
