<?php

/* @TSAdmin/Notification/checkInvitation.html.twig */
class __TwigTemplate_21a80d064f395dcaa52e3d802d8b198168590c88e78fd4acf845defff21860ef extends Twig_Template
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
        $__internal_4ab2bcfea99cdd255d79cf37427ba12a3041e8c9222d4bab93a323117dd45514 = $this->env->getExtension("native_profiler");
        $__internal_4ab2bcfea99cdd255d79cf37427ba12a3041e8c9222d4bab93a323117dd45514->enter($__internal_4ab2bcfea99cdd255d79cf37427ba12a3041e8c9222d4bab93a323117dd45514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Notification/checkInvitation.html.twig"));

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
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/aui-production.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/core/raphael.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/minified/widgets/charts-justgage.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"row\" style=\"margin: 10px;\">
            <div class=\"content-box border-top border-red mrg25B col-md-6 col-md-offset-3\">
                <h3 class=\"content-header clearfix\">
                    &nbsp&nbsp Are you sure you want to change the position ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo " of the candidate
                    <div class=\"button-group float-left\" data-toggle=\"buttons\">
                        <a href=\"javascript:;\" class=\"btn small bg-red\">
                            <input type=\"radio\" name=\"test-toggle-radio\">
                            <i class=\"glyph-icon icon-clock-os\"></i>
                        </a>
                    </div>
                </h3>
                <div class=\"content-box-wrapper\">
                    <div class=\"divider\"></div>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ts_admin_allNotications");
        echo "\" class=\"col-md-3 btn medium bg-red\" title=\"no\">
                        <span class=\"button-content\">no</span>
                    </a>

                    <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ts_admin_confirmInvitation");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"float-right col-md-3 btn medium bg-red\" title=\"yes\">
                        <span class=\"button-content\">yes</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_4ab2bcfea99cdd255d79cf37427ba12a3041e8c9222d4bab93a323117dd45514->leave($__internal_4ab2bcfea99cdd255d79cf37427ba12a3041e8c9222d4bab93a323117dd45514_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Notification/checkInvitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  102 => 47,  89 => 37,  80 => 31,  76 => 30,  72 => 29,  66 => 26,  62 => 25,  57 => 23,  52 => 21,  47 => 19,  40 => 15,  36 => 14,  22 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\notifications\checkInvitation.html.twig #}*/
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
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/aui-production.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/core/raphael.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('assets/js/minified/widgets/charts-justgage.min.js')}}"></script>*/
/*     </head>*/
/*     <body>*/
/*         <div class="row" style="margin: 10px;">*/
/*             <div class="content-box border-top border-red mrg25B col-md-6 col-md-offset-3">*/
/*                 <h3 class="content-header clearfix">*/
/*                     &nbsp&nbsp Are you sure you want to change the position {{position}} of the candidate*/
/*                     <div class="button-group float-left" data-toggle="buttons">*/
/*                         <a href="javascript:;" class="btn small bg-red">*/
/*                             <input type="radio" name="test-toggle-radio">*/
/*                             <i class="glyph-icon icon-clock-os"></i>*/
/*                         </a>*/
/*                     </div>*/
/*                 </h3>*/
/*                 <div class="content-box-wrapper">*/
/*                     <div class="divider"></div>*/
/*                     <a href="{{path('ts_admin_allNotications')}}" class="col-md-3 btn medium bg-red" title="no">*/
/*                         <span class="button-content">no</span>*/
/*                     </a>*/
/* */
/*                     <a href="{{path('ts_admin_confirmInvitation')}}?id={{id}}" class="float-right col-md-3 btn medium bg-red" title="yes">*/
/*                         <span class="button-content">yes</span>*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
