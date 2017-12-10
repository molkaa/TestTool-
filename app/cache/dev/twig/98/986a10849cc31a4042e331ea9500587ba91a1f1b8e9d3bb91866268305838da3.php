<?php

/* @TSAdmin/Notification/invitation.html.twig */
class __TwigTemplate_72a62b0d5fe6d8e016fbf58da3529744ce9e7b10b35578eb69042d7b40fdacfe extends Twig_Template
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
        $__internal_ff9548066de203d61e5646c2ed48818a12d4ca86ad29aeca607193731aca4cc1 = $this->env->getExtension("native_profiler");
        $__internal_ff9548066de203d61e5646c2ed48818a12d4ca86ad29aeca607193731aca4cc1->enter($__internal_ff9548066de203d61e5646c2ed48818a12d4ca86ad29aeca607193731aca4cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Notification/invitation.html.twig"));

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
    <body >
        <div class=\"row\" style=\"margin: 10px;\">
            <form onsubmit=\"self.parent.tb_remove();\" class=\"col-md-10 center-margin\" method=\"post\" href=\"#\"  >

                <div class=\"form-row mrg5T form-vertical\">
                    <div class=\"form-input col-md-2\">
                        <label >
                            date test
                        </label>
                    </div>
                    <div class=\"form-input col-md-10\">
                        <input required=\"required\" type=\"text\" id=\"datepicker2\" name=\"date\" />
                    </div>
                </div>

                <div class=\"form-row mrg5T form-vertical\">
                    <div class=\"form-input col-md-2\">
                        <label >
                            hour
                        </label>
                    </div>
                    <div class=\"form-input bootstrap-timepicker dropdown col-md-10\">
                        <input required=\"required\" style=\"width: 485%;\" class=\"timepicker input\" id=\"timepicker_24\" name=\"hour\" type=\"text\">
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-input col-md-2\">
                        <label for=\"\">
                            object
                        </label>
                    </div>
                    <div  class=\"form-input col-md-10\">
                        <select required=\"required\" id=\"choice\" name=\"object\" onchange=\"showSelect(this.value);\">
                            <option > </option>
                            <option value=\"test\" >test</option>
                            <option value=\"Interview1\" >Interview1</option>
                            <option value=\"Interview2\" >Interview2</option>
                            <option value=\"Interview3\" >Interview3</option>
                            <option value=\"Other\" >Other</option>
                            <option value=\"OFF\" >OFF</option>
                            <option value=\"Recruit\" >Recruit</option>
                        </select>
                    </div>
                </div>
                <div id =\"tests\" class=\"form-row\" style=\"display:none\">
                    <div class=\"form-input col-md-2\">
                        <label for=\"\">
                            tests
                        </label>
                    </div>
                    <div  class=\"form-input col-md-10\" >
                        <select id=\"testsSelect\" name=\"tests[]\" multiple class=\"chosen-select\">
                            <option></option>
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTests"]) ? $context["allTests"] : $this->getContext($context, "allTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 88
            echo "                            ";
            if ( !twig_test_empty((isset($context["testsOffer"]) ? $context["testsOffer"] : $this->getContext($context, "testsOffer")))) {
                // line 89
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["testsOffer"]) ? $context["testsOffer"] : $this->getContext($context, "testsOffer")));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 90
                    echo "                                    ";
                    if (($this->getAttribute($context["test"], "name", array()) === $this->getAttribute($context["element"], "name", array()))) {
                        // line 91
                        echo "                            <option selected value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                        echo "  >
                                    ";
                    } else {
                        // line 93
                        echo "                            <option  value=";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                        echo "  >
                                    ";
                    }
                    // line 95
                    echo "                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                                ";
            } else {
                // line 97
                echo "                            <option  value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
                echo "  >
                            ";
            }
            // line 99
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "
                            </option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </select>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"divider\" ></div>
                    <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                    <div class=\"col-md-4 col-md-offset-4\">
                        <input type=\"submit\" value=\"SEND\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />
                    </div>
                </div>
            </form>
        </div>

        <script>
            function showSelect(_this) {
                var div = document.getElementById(\"tests\");
                var select = document.getElementById(\"testsSelect\");
                if ((_this) === \"test\") {
                    div.style.display = \"block\";
                    select.required = TRUE;
                }
                else {
                    div.style.display = \"none\";
                    select.required = FALSE;
                }
            }
        </script>
    </body>
</html>";
        
        $__internal_ff9548066de203d61e5646c2ed48818a12d4ca86ad29aeca607193731aca4cc1->leave($__internal_ff9548066de203d61e5646c2ed48818a12d4ca86ad29aeca607193731aca4cc1_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Notification/invitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 103,  181 => 99,  175 => 97,  172 => 96,  166 => 95,  160 => 93,  154 => 91,  151 => 90,  146 => 89,  143 => 88,  139 => 87,  80 => 31,  76 => 30,  72 => 29,  66 => 26,  62 => 25,  57 => 23,  52 => 21,  47 => 19,  40 => 15,  36 => 14,  22 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\notifications\invitation.html.twig #}*/
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
/*     <body >*/
/*         <div class="row" style="margin: 10px;">*/
/*             <form onsubmit="self.parent.tb_remove();" class="col-md-10 center-margin" method="post" href="#"  >*/
/* */
/*                 <div class="form-row mrg5T form-vertical">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label >*/
/*                             date test*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="form-input col-md-10">*/
/*                         <input required="required" type="text" id="datepicker2" name="date" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-row mrg5T form-vertical">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label >*/
/*                             hour*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="form-input bootstrap-timepicker dropdown col-md-10">*/
/*                         <input required="required" style="width: 485%;" class="timepicker input" id="timepicker_24" name="hour" type="text">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-row">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label for="">*/
/*                             object*/
/*                         </label>*/
/*                     </div>*/
/*                     <div  class="form-input col-md-10">*/
/*                         <select required="required" id="choice" name="object" onchange="showSelect(this.value);">*/
/*                             <option > </option>*/
/*                             <option value="test" >test</option>*/
/*                             <option value="Interview1" >Interview1</option>*/
/*                             <option value="Interview2" >Interview2</option>*/
/*                             <option value="Interview3" >Interview3</option>*/
/*                             <option value="Other" >Other</option>*/
/*                             <option value="OFF" >OFF</option>*/
/*                             <option value="Recruit" >Recruit</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id ="tests" class="form-row" style="display:none">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label for="">*/
/*                             tests*/
/*                         </label>*/
/*                     </div>*/
/*                     <div  class="form-input col-md-10" >*/
/*                         <select id="testsSelect" name="tests[]" multiple class="chosen-select">*/
/*                             <option></option>*/
/*                             {% for test in allTests%}*/
/*                             {% if testsOffer is not empty %}*/
/*                             {% for element in testsOffer %}*/
/*                                     {% if test.name is same as (element.name) %}*/
/*                             <option selected value={{test.id}}  >*/
/*                                     {% else %}*/
/*                             <option  value={{test.id}}  >*/
/*                                     {% endif %}*/
/*                              {% endfor %}*/
/*                                 {% else %}*/
/*                             <option  value={{test.id}}  >*/
/*                             {% endif %}*/
/*                                         {{test.name}}*/
/*                             </option>*/
/* */
/*                                 {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-row">*/
/*                     <div class="divider" ></div>*/
/*                     <input type="hidden" name="superhidden" id="superhidden">*/
/*                     <div class="col-md-4 col-md-offset-4">*/
/*                         <input type="submit" value="SEND" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <script>*/
/*             function showSelect(_this) {*/
/*                 var div = document.getElementById("tests");*/
/*                 var select = document.getElementById("testsSelect");*/
/*                 if ((_this) === "test") {*/
/*                     div.style.display = "block";*/
/*                     select.required = TRUE;*/
/*                 }*/
/*                 else {*/
/*                     div.style.display = "none";*/
/*                     select.required = FALSE;*/
/*                 }*/
/*             }*/
/*         </script>*/
/*     </body>*/
/* </html>*/
