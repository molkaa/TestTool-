<?php

/* TSLDAPBundle:LDAP:LDAPerror.html.twig */
class __TwigTemplate_efbdcf606efbbb597698a741d6a773b2f3ecb10ca3dc68340283515054246e60 extends Twig_Template
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
        $__internal_41e0eb5d3472d8528ca8bb126bba0a9872b423db298f8e53a2e6b92306574249 = $this->env->getExtension("native_profiler");
        $__internal_41e0eb5d3472d8528ca8bb126bba0a9872b423db298f8e53a2e6b92306574249->enter($__internal_41e0eb5d3472d8528ca8bb126bba0a9872b423db298f8e53a2e6b92306574249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSLDAPBundle:LDAP:LDAPerror.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Admin Login</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"shortcut icon\" href=\"/TestTool/web/images/SungardLogo.png\" type=\"image/vnd.microsoft.icon\">

        <!-- Favicons -->
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

    </head>
    <body>
        <div class=\"row\" style='margin-top: 10%'>
            <div class=\"content-box border-top border-red mrg25B col-md-6 col-md-offset-3\">
                <h3 class=\"content-header clearfix\">
                    &nbsp&nbsp Username or password incorrect
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
                        You must enter a valid username and password to access the system. 
                        Please go to the login page and re-enter your account information (be sure to check that you have used the correct spelling of your username and password).
                    </p>
                    <br/>
                    <p>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("adminLogin");
        echo "\" style='color: red;'>
                            >> login page
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_41e0eb5d3472d8528ca8bb126bba0a9872b423db298f8e53a2e6b92306574249->leave($__internal_41e0eb5d3472d8528ca8bb126bba0a9872b423db298f8e53a2e6b92306574249_prof);

    }

    public function getTemplateName()
    {
        return "TSLDAPBundle:LDAP:LDAPerror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 50,  67 => 26,  63 => 25,  58 => 23,  53 => 21,  48 => 19,  41 => 15,  37 => 14,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>Admin Login</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*         <link rel="shortcut icon" href="/TestTool/web/images/SungardLogo.png" type="image/vnd.microsoft.icon">*/
/* */
/*         <!-- Favicons -->*/
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
/*     </head>*/
/*     <body>*/
/*         <div class="row" style='margin-top: 10%'>*/
/*             <div class="content-box border-top border-red mrg25B col-md-6 col-md-offset-3">*/
/*                 <h3 class="content-header clearfix">*/
/*                     &nbsp&nbsp Username or password incorrect*/
/*                     <div class="button-group float-left" data-toggle="buttons">*/
/*                         <a href="javascript:;" class="btn small bg-red">*/
/*                             <input type="radio" name="test-toggle-radio">*/
/*                             <i class="glyph-icon icon-clock-os"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </h3>*/
/* */
/*                 <div class="content-box-wrapper">*/
/*                     <div class="divider"></div>*/
/*                     <p>*/
/*                         You must enter a valid username and password to access the system. */
/*                         Please go to the login page and re-enter your account information (be sure to check that you have used the correct spelling of your username and password).*/
/*                     </p>*/
/*                     <br/>*/
/*                     <p>*/
/*                         <a href="{{path('adminLogin')}}" style='color: red;'>*/
/*                             >> login page*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
