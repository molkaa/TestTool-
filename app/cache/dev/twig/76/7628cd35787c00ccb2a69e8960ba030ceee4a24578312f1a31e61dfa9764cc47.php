<?php

/* TSAdminBundle::layout.html.twig */
class __TwigTemplate_dae91d19fc607016fbc9053a3d52e3e079e27dd23231024f400973ba48400f87 extends Twig_Template
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
        $__internal_147eb0c51fa649470f6b0b189a5a26e4fedea9f352d09aa63767d90a1c3411f4 = $this->env->getExtension("native_profiler");
        $__internal_147eb0c51fa649470f6b0b189a5a26e4fedea9f352d09aa63767d90a1c3411f4->enter($__internal_147eb0c51fa649470f6b0b189a5a26e4fedea9f352d09aa63767d90a1c3411f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle::layout.html.twig"));

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
        $this->loadTemplate("TSAdminBundle::header.html.twig", "TSAdminBundle::layout.html.twig", 74)->display($context);
        // line 75
        echo "            <!-- #page-sidebar -->
            ";
        // line 76
        $this->loadTemplate("TSAdminBundle::sidebar.html.twig", "TSAdminBundle::layout.html.twig", 76)->display($context);
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
        
        $__internal_147eb0c51fa649470f6b0b189a5a26e4fedea9f352d09aa63767d90a1c3411f4->leave($__internal_147eb0c51fa649470f6b0b189a5a26e4fedea9f352d09aa63767d90a1c3411f4_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_59634997ed5cc85426d4919c3f5f17ca0d9a021ba60b89a08889e3aebd0bf245 = $this->env->getExtension("native_profiler");
        $__internal_59634997ed5cc85426d4919c3f5f17ca0d9a021ba60b89a08889e3aebd0bf245->enter($__internal_59634997ed5cc85426d4919c3f5f17ca0d9a021ba60b89a08889e3aebd0bf245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "                Sungard
            ";
        
        $__internal_59634997ed5cc85426d4919c3f5f17ca0d9a021ba60b89a08889e3aebd0bf245->leave($__internal_59634997ed5cc85426d4919c3f5f17ca0d9a021ba60b89a08889e3aebd0bf245_prof);

    }

    // line 15
    public function block_icons($context, array $blocks = array())
    {
        $__internal_4aadaa15be985d37d639ff1ba24b4d872b1b0defe14755ca16c3bf29eb560248 = $this->env->getExtension("native_profiler");
        $__internal_4aadaa15be985d37d639ff1ba24b4d872b1b0defe14755ca16c3bf29eb560248->enter($__internal_4aadaa15be985d37d639ff1ba24b4d872b1b0defe14755ca16c3bf29eb560248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        echo " 
        ";
        
        $__internal_4aadaa15be985d37d639ff1ba24b4d872b1b0defe14755ca16c3bf29eb560248->leave($__internal_4aadaa15be985d37d639ff1ba24b4d872b1b0defe14755ca16c3bf29eb560248_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce04deb4335983212fb02d7153b2a3d300db904e09c1ff70a9663a1399e5c0d3 = $this->env->getExtension("native_profiler");
        $__internal_ce04deb4335983212fb02d7153b2a3d300db904e09c1ff70a9663a1399e5c0d3->enter($__internal_ce04deb4335983212fb02d7153b2a3d300db904e09c1ff70a9663a1399e5c0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ce04deb4335983212fb02d7153b2a3d300db904e09c1ff70a9663a1399e5c0d3->leave($__internal_ce04deb4335983212fb02d7153b2a3d300db904e09c1ff70a9663a1399e5c0d3_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3ae9f86a4500a934bfd2de4448db8eec266d2300acca1d707c9117d1c0c3f51 = $this->env->getExtension("native_profiler");
        $__internal_e3ae9f86a4500a934bfd2de4448db8eec266d2300acca1d707c9117d1c0c3f51->enter($__internal_e3ae9f86a4500a934bfd2de4448db8eec266d2300acca1d707c9117d1c0c3f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e3ae9f86a4500a934bfd2de4448db8eec266d2300acca1d707c9117d1c0c3f51->leave($__internal_e3ae9f86a4500a934bfd2de4448db8eec266d2300acca1d707c9117d1c0c3f51_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2c193fe526532dfa6f65109563b7ab29cf1574de3cf86f1286cd76c1c2922c1 = $this->env->getExtension("native_profiler");
        $__internal_a2c193fe526532dfa6f65109563b7ab29cf1574de3cf86f1286cd76c1c2922c1->enter($__internal_a2c193fe526532dfa6f65109563b7ab29cf1574de3cf86f1286cd76c1c2922c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 88
        echo "                        ";
        
        $__internal_a2c193fe526532dfa6f65109563b7ab29cf1574de3cf86f1286cd76c1c2922c1->leave($__internal_a2c193fe526532dfa6f65109563b7ab29cf1574de3cf86f1286cd76c1c2922c1_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle::layout.html.twig";
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
