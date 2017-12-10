<?php

/* @TSLDAP/LDAP/quizLogin.html.twig */
class __TwigTemplate_6696f1e56a39b1beb8378a0d3684bf82f472dab5201ccec34af1c723ddd8175e extends Twig_Template
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
        $__internal_edc7635798566b9efd88a4b43e022d750aab1d50d69f1d89262c0d98d0181c77 = $this->env->getExtension("native_profiler");
        $__internal_edc7635798566b9efd88a4b43e022d750aab1d50d69f1d89262c0d98d0181c77->enter($__internal_edc7635798566b9efd88a4b43e022d750aab1d50d69f1d89262c0d98d0181c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSLDAP/LDAP/quizLogin.html.twig"));

        // line 1
        echo "<!-- AUI Framework -->
<!DOCTYPE html>
<html>
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>Employee Login</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
";
        // line 12
        echo "
        <!-- Favicons -->
        <!--[if lt IE 9]>
          <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
          <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->
        <!-- CSS Files -->
        <!-- Fides Admin CSS Core -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/minified/aui-production.min.css"), "html", null, true);
        echo "\">
        <!-- Theme UI -->
        <link id=\"layout-theme\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/color-schemes/dark-blue.min.css"), "html", null, true);
        echo "\">
        <!-- Fides Admin Responsive -->
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/common.min.css"), "html", null, true);
        echo "\">
        <!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"../_assets/themes/fides/common.css\"> -->
        <link id=\"theme-animations\" rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/animations.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/themes/minified/fides/responsive.min.css"), "html", null, true);
        echo "\">

    </head>
    <body>
        <div class=\"row\">
";
        // line 33
        echo "            <form action=\"\" class=\"col-md-4 center-margin\" method=\"post\">

                <div id=\"login-form\" class=\"content-box form-vertical\">
                    <h3 class=\"content-box-header ui-state-default\">
                        <div class=\"glyph-icon icon-separator center\">
                            <img src=\"/TestTool/web/images/SungardLogo.png\" style=\"padding: 10px;\">
                        </div>
                        <span> Login page </span>
                    </h3>
                    <div class=\"content-box-wrapper pad20A pad0B\">
                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"username\">
                                    Username:
                                </label>
                            </div>
                            <div class=\"form-input col-md-10\">
                                <div class=\"form-input-icon\">
                                    <i class=\"glyph-icon icon-user ui-state-default\"></i>
                                    <input placeholder=\"Sungard Username\" type=\"text\" id=\"username\" name=\"login\" data-required=\"true\" />
                                </div>
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"password\">
                                    Password:
                                </label>
                            </div>
                            <div class=\"form-input col-md-10\">
                                <div class=\"form-input-icon\">
                                    <i class=\"glyph-icon icon-unlock-alt ui-state-default\"></i>
                                    <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"password\" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"button-pane text-center\">
                        <button type=\"submit\" class=\"btn large primary-bg text-transform-upr font-size-11\" id=\"demo-form-valid\" title=\"Validate!\">
                            <span class=\"button-content\">
                                Login
                            </span>
                        </button>
                    </div>
                </div>
            </form>

        </div>


    </body>
</html>
";
        
        $__internal_edc7635798566b9efd88a4b43e022d750aab1d50d69f1d89262c0d98d0181c77->leave($__internal_edc7635798566b9efd88a4b43e022d750aab1d50d69f1d89262c0d98d0181c77_prof);

    }

    public function getTemplateName()
    {
        return "@TSLDAP/LDAP/quizLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  69 => 27,  65 => 26,  60 => 24,  55 => 22,  50 => 20,  43 => 16,  39 => 15,  34 => 12,  22 => 1,);
    }
}
/* <!-- AUI Framework -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*         <title>Employee Login</title>*/
/*         <meta name="description" content="">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* {#        <link rel="shortcut icon" href="/TunisiaSite/web/images/SungardLogo.png" type="image/vnd.microsoft.icon">#}*/
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
/*         <div class="row">*/
/* {#            <img src="/TunisiaSite/web/images/admin/sungard.jpg" style="width: 100% ; height: 100%;">#}*/
/*             <form action="" class="col-md-4 center-margin" method="post">*/
/* */
/*                 <div id="login-form" class="content-box form-vertical">*/
/*                     <h3 class="content-box-header ui-state-default">*/
/*                         <div class="glyph-icon icon-separator center">*/
/*                             <img src="/TestTool/web/images/SungardLogo.png" style="padding: 10px;">*/
/*                         </div>*/
/*                         <span> Login page </span>*/
/*                     </h3>*/
/*                     <div class="content-box-wrapper pad20A pad0B">*/
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="username">*/
/*                                     Username:*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10">*/
/*                                 <div class="form-input-icon">*/
/*                                     <i class="glyph-icon icon-user ui-state-default"></i>*/
/*                                     <input placeholder="Sungard Username" type="text" id="username" name="login" data-required="true" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="password">*/
/*                                     Password:*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10">*/
/*                                 <div class="form-input-icon">*/
/*                                     <i class="glyph-icon icon-unlock-alt ui-state-default"></i>*/
/*                                     <input placeholder="Password" type="password" id="password" name="password" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="button-pane text-center">*/
/*                         <button type="submit" class="btn large primary-bg text-transform-upr font-size-11" id="demo-form-valid" title="Validate!">*/
/*                             <span class="button-content">*/
/*                                 Login*/
/*                             </span>*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
