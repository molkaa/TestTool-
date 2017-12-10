<?php

/* @TSAdmin/Users/editCandidate.html.twig */
class __TwigTemplate_065440d4cd7d73c8ac34e1b072958ee36aa58d307a54aad456902ecbe8c63319 extends Twig_Template
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
        $__internal_f250090ed889021fc503456eb3cddc4c88e1352ad933d4d85b2a77a3ccb4a2ed = $this->env->getExtension("native_profiler");
        $__internal_f250090ed889021fc503456eb3cddc4c88e1352ad933d4d85b2a77a3ccb4a2ed->enter($__internal_f250090ed889021fc503456eb3cddc4c88e1352ad933d4d85b2a77a3ccb4a2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/editCandidate.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-11 center-margin\" style=\"margin-right: 0;\">
        <div class=\"content-box box-toggle\">
            <h3 style=\"height: 20px;\" class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Edit this Candidate</span>
                <i id=\"edit-user";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" onclick=\"changeEditUser(this);\" class=\"glyph-icon icon-clock-os float-right\" style=\"margin-right: 10px;color:#d60000;\"></i>
            </h3>
            <div  class=\"content-box-wrapper\">
                <form class=\"col-md-10 center-margin\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ts_admin_editCandidate");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&role=";
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">                
";
        // line 13
        echo "                    <div class=\"form-row\">
                        <div class=\"form-label col-md-2\">
                            <label for=\"\">
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\">
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        </div>
                    </div>
                        <div class=\"form-row\">
                        <div class=\"form-label col-md-2\">
                            <label for=\"\">
                                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'label');
        echo "
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\">
                                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'widget');
        echo "
                        </div>
                    </div>
";
        // line 34
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
    function changeEditUser(_this)
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
        
        $__internal_f250090ed889021fc503456eb3cddc4c88e1352ad933d4d85b2a77a3ccb4a2ed->leave($__internal_f250090ed889021fc503456eb3cddc4c88e1352ad933d4d85b2a77a3ccb4a2ed_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/editCandidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 34,  74 => 30,  67 => 26,  58 => 20,  51 => 16,  46 => 13,  36 => 11,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Users/editUser.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-11 center-margin" style="margin-right: 0;">*/
/*         <div class="content-box box-toggle">*/
/*             <h3 style="height: 20px;" class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Edit this Candidate</span>*/
/*                 <i id="edit-user{{id}}" onclick="changeEditUser(this);" class="glyph-icon icon-clock-os float-right" style="margin-right: 10px;color:#d60000;"></i>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/*                 <form class="col-md-10 center-margin" action="{{path('ts_admin_editCandidate')}}?id={{id}}&role={{role}}"  method="post"{{ form_enctype(form) }}>                */
/* {#                    //*********************************************#}*/
/*                     <div class="form-row">*/
/*                         <div class="form-label col-md-2">*/
/*                             <label for="">*/
/*                                 {{ form_label(form.username) }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10">*/
/*                                 {{ form_widget(form.username) }}*/
/*                         </div>*/
/*                     </div>*/
/*                         <div class="form-row">*/
/*                         <div class="form-label col-md-2">*/
/*                             <label for="">*/
/*                                 {{ form_label(form.state) }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10">*/
/*                                 {{ form_widget(form.state) }}*/
/*                         </div>*/
/*                     </div>*/
/* {#                    //*********************************************#}*/
/*                     {{ form_rest(form) }}*/
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <div class="col-md-2 col-md-offset-5">*/
/*                             <input type="submit" value="Submit" style="background: #d60000"class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeEditUser(_this)*/
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
