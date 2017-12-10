<?php

/* TSAdminBundle:Notification:errorInvitation.html.twig */
class __TwigTemplate_c1417dc04f9fa7933272cbd0e64b30e34d2dcfeeafe57035f77d72c6de54c77c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2779cf6ad6c01a0eaf0624e2069a75a0f967e34ecae0eccc52352e1d52849e78 = $this->env->getExtension("native_profiler");
        $__internal_2779cf6ad6c01a0eaf0624e2069a75a0f967e34ecae0eccc52352e1d52849e78->enter($__internal_2779cf6ad6c01a0eaf0624e2069a75a0f967e34ecae0eccc52352e1d52849e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Notification:errorInvitation.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"shortcut icon\" href=\"/TestTool/web/images/SungardLogo.png\" type=\"image/vnd.microsoft.icon\">
        <title>
            Sungard
        </title>
        <!--[if lt IE 9]>
          <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- CSS Files -->
        <!-- Fides Admin CSS Core -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/aui-production.min.css"), "html", null, true);
        echo "\">
        <!-- Theme UI -->
        <link id=\"layout-theme\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/color-schemes/dark-blue.min.css"), "html", null, true);
        echo "\">
        <!-- Fides Admin Responsive -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/common.min.css"), "html", null, true);
        echo "\">
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../_assets/themes/fides/common.css\"> -->
        <link id=\"theme-animations\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/animations.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/responsive.min.css"), "html", null, true);
        echo "\">

        <!-- JS Files-->
      
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/aui-production.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/widgets/charts-justgage.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"row\" style=\"margin: 10px;\">
            <div class=\"content-box border-top border-red mrg25B col-md-6 col-md-offset-3\">
                <h3 class=\"content-header clearfix\">
                    &nbsp&nbsp sorry this candidate is already affected to another offer(";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["ref"]) ? $context["ref"] : $this->getContext($context, "ref")), "html", null, true);
        echo ")
                    <div class=\"button-group float-left\" data-toggle=\"buttons\">
                        <a href=\"javascript:;\" class=\"btn small bg-red\">
                            <input type=\"radio\" name=\"test-toggle-radio\">
                            <i class=\"glyph-icon icon-clock-os\"></i>
                        </a>
                    </div>
                </h3>
                <div class=\"content-box-wrapper\">
                    <div class=\"divider\"></div>
                    <p>
                        <a href=\"#\" onclick=\"self.parent.location.href='";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ts_admin_cvs");
        echo "';self.parent.tb_remove();\" style='color: red;'>
                            >> all notification
                        </a>
                       
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_2779cf6ad6c01a0eaf0624e2069a75a0f967e34ecae0eccc52352e1d52849e78->leave($__internal_2779cf6ad6c01a0eaf0624e2069a75a0f967e34ecae0eccc52352e1d52849e78_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Notification:errorInvitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 49,  90 => 38,  81 => 32,  77 => 31,  73 => 30,  66 => 26,  62 => 25,  57 => 23,  52 => 21,  47 => 19,  40 => 15,  36 => 14,  22 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\notifications\errorInvitation.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="shortcut icon" href="/TestTool/web/images/SungardLogo.png" type="image/vnd.microsoft.icon">*/
/*         <title>*/
/*             Sungard*/
/*         </title>*/
/*         <!--[if lt IE 9]>*/
/*           <script src="{{ asset('assets/js/minified/core/html5shiv.min.js')}}"></script>*/
/*           <script src="{{ asset('assets/js/minified/core/respond.min.js')}}"></script>*/
/*         <![endif]-->*/
/*         <!-- CSS Files -->*/
/*         <!-- Fides Admin CSS Core -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/minified/aui-production.min.css')}}">*/
/*         <!-- Theme UI -->*/
/*         <link id="layout-theme" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/color-schemes/dark-blue.min.css')}}">*/
/*         <!-- Fides Admin Responsive -->*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/common.min.css')}}">*/
/*         <!-- <link rel="stylesheet" type="text/css" href="../_assets/themes/fides/common.css"> -->*/
/*         <link id="theme-animations" rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/animations.min.css')}}">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/minified/fides/responsive.min.css')}}">*/
/* */
/*         <!-- JS Files-->*/
/*       */
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/aui-production.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/core/raphael.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/widgets/charts-justgage.min.js')}}"></script>*/
/*     </head>*/
/*     <body>*/
/*         <div class="row" style="margin: 10px;">*/
/*             <div class="content-box border-top border-red mrg25B col-md-6 col-md-offset-3">*/
/*                 <h3 class="content-header clearfix">*/
/*                     &nbsp&nbsp sorry this candidate is already affected to another offer({{ref}})*/
/*                     <div class="button-group float-left" data-toggle="buttons">*/
/*                         <a href="javascript:;" class="btn small bg-red">*/
/*                             <input type="radio" name="test-toggle-radio">*/
/*                             <i class="glyph-icon icon-clock-os"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </h3>*/
/*                 <div class="content-box-wrapper">*/
/*                     <div class="divider"></div>*/
/*                     <p>*/
/*                         <a href="#" onclick="self.parent.location.href='{{ path('ts_admin_cvs')}}';self.parent.tb_remove();" style='color: red;'>*/
/*                             >> all notification*/
/*                         </a>*/
/*                        */
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
