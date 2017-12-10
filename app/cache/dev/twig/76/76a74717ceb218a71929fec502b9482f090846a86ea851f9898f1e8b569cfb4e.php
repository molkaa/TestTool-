<?php

/* @TSAdmin/Tables/editValue.html.twig */
class __TwigTemplate_aab733f7f11c318bd3674b2d8bf9e4ce8a272b3fcb8a303b6000e84e3d2db36f extends Twig_Template
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
        $__internal_e9f19cf61c0110523bbe4334a31779331c0debcc3369c446858aeb554b0ecc74 = $this->env->getExtension("native_profiler");
        $__internal_e9f19cf61c0110523bbe4334a31779331c0debcc3369c446858aeb554b0ecc74->enter($__internal_e9f19cf61c0110523bbe4334a31779331c0debcc3369c446858aeb554b0ecc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tables/editValue.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-11 center-margin\" style=\"margin-right: 0;\">
        <div  style=\"margin: 20px\" class=\"content-box box-toggle\">
                <h3 style=\"height: 20px;\" class=\"content-box-header ui-state-default\">
                    <span class=\"float-left\">Edit this value</span>
                    <i id=\"edit-value";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" onclick=\"changeEditValue(this);\" class=\"glyph-icon icon-clock-os float-right\" style=\"margin-right: 10px;color:#d60000;\"></i>
                </h3>
                <div  class=\"content-box-wrapper\">
                    <form class=\"col-md-10 center-margin\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ts_admin_editValue");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&entity=";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo "&entityType=";
        echo twig_escape_filter($this->env, (isset($context["entityType"]) ? $context["entityType"] : $this->getContext($context, "entityType")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">                
";
        // line 13
        echo "                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"\">
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                                </label>
                            </div>
                            <div class=\"form-input col-md-10\">
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                            </div>
                        </div>
";
        // line 24
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                        <div class=\"form-row\">
                            <div class=\"divider\" ></div>
                            <div class=\"col-md-2 col-md-offset-5\">
                                <input type=\"submit\" value=\"Submit\" style=\"background: #d60000\"class=\"btn medium primary-bg radius-all-4\" />
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</div>
<script>
    function changeEditValue(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }
</script>
";
        
        $__internal_e9f19cf61c0110523bbe4334a31779331c0debcc3369c446858aeb554b0ecc74->leave($__internal_e9f19cf61c0110523bbe4334a31779331c0debcc3369c446858aeb554b0ecc74_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tables/editValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 24,  60 => 20,  53 => 16,  48 => 13,  36 => 11,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tables/editValue.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-11 center-margin" style="margin-right: 0;">*/
/*         <div  style="margin: 20px" class="content-box box-toggle">*/
/*                 <h3 style="height: 20px;" class="content-box-header ui-state-default">*/
/*                     <span class="float-left">Edit this value</span>*/
/*                     <i id="edit-value{{id}}" onclick="changeEditValue(this);" class="glyph-icon icon-clock-os float-right" style="margin-right: 10px;color:#d60000;"></i>*/
/*                 </h3>*/
/*                 <div  class="content-box-wrapper">*/
/*                     <form class="col-md-10 center-margin" action="{{path('ts_admin_editValue')}}?id={{id}}&entity={{entity}}&entityType={{entityType}}"  method="post"{{ form_enctype(form) }}>                */
/* {#                    //*********************************************#}*/
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="">*/
/*                                 {{ form_label(form.name) }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10">*/
/*                                 {{ form_widget(form.name) }}*/
/*                             </div>*/
/*                         </div>*/
/* {#                    //*********************************************#}*/
/*                     {{ form_rest(form) }}*/
/*                         <div class="form-row">*/
/*                             <div class="divider" ></div>*/
/*                             <div class="col-md-2 col-md-offset-5">*/
/*                                 <input type="submit" value="Submit" style="background: #d60000"class="btn medium primary-bg radius-all-4" />*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeEditValue(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/* </script>*/
/* */
