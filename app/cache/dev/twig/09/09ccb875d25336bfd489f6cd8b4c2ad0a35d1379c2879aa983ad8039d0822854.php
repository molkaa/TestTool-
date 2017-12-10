<?php

/* @TSAdmin/Tables/removeValue.html.twig */
class __TwigTemplate_b3eaa10641a430ffe141a3d6c44c1142dd48a5f9a19f37e533c5bc232e31aa6f extends Twig_Template
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
        $__internal_544bbd87aac924f9948f7df261c95ef6b736213ba0e538b054ade12ad4777822 = $this->env->getExtension("native_profiler");
        $__internal_544bbd87aac924f9948f7df261c95ef6b736213ba0e538b054ade12ad4777822->enter($__internal_544bbd87aac924f9948f7df261c95ef6b736213ba0e538b054ade12ad4777822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tables/removeValue.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-11 center-margin\" style=\"margin-right: 0;\">
        <div class=\"content-box box-toggle\">
            <h3 style=\"height: 20px;\" class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Remove this value</span>
                <i id=\"remove-value";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" onclick=\"changeRemoveValue(this);\" class=\"glyph-icon icon-clock-os float-right\" style=\"margin-right: 10px;color:#d60000;\"></i>
            </h3>
            <div  class=\"content-box-wrapper\">

                <form class=\"col-md-10 center-margin\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ts_admin_removeValue");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&entity=";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">                
";
        // line 14
        echo "                    <p>
                        Are you sure you want to remove this value ?
                    </p>
";
        // line 18
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <div class=\"form-row\">
                        <div class=\"divider\" ></div>
                        <div class=\"col-md-2 col-md-offset-5\">
                            <input type=\"submit\" value=\"Remove\" style=\"background: #d60000\"class=\"btn medium primary-bg radius-all-4\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function changeRemoveValue(_this)
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
        
        $__internal_544bbd87aac924f9948f7df261c95ef6b736213ba0e538b054ade12ad4777822->leave($__internal_544bbd87aac924f9948f7df261c95ef6b736213ba0e538b054ade12ad4777822_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tables/removeValue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  47 => 14,  37 => 12,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tables/editValue.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-11 center-margin" style="margin-right: 0;">*/
/*         <div class="content-box box-toggle">*/
/*             <h3 style="height: 20px;" class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Remove this value</span>*/
/*                 <i id="remove-value{{id}}" onclick="changeRemoveValue(this);" class="glyph-icon icon-clock-os float-right" style="margin-right: 10px;color:#d60000;"></i>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/* */
/*                 <form class="col-md-10 center-margin" action="{{path('ts_admin_removeValue')}}?id={{id}}&entity={{entity}}"  method="post"{{ form_enctype(form) }}>                */
/* {#                    //*********************************************#}*/
/*                     <p>*/
/*                         Are you sure you want to remove this value ?*/
/*                     </p>*/
/* {#                    //*********************************************#}*/
/*                     {{ form_rest(form) }}*/
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <div class="col-md-2 col-md-offset-5">*/
/*                             <input type="submit" value="Remove" style="background: #d60000"class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeRemoveValue(_this)*/
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
