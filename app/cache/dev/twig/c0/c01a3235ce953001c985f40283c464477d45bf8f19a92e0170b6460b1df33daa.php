<?php

/* TSAdminBundle:Tables:addValues.html.twig */
class __TwigTemplate_d8f60c1d5156960afc7c9678113307f67c01e4569e6b1bb6cb0fa5c260cdeff8 extends Twig_Template
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
        $__internal_fc1f713e1878c9c86e1a2c54ed12dafe58a96727e8e8292f608bdd18c6fcdb82 = $this->env->getExtension("native_profiler");
        $__internal_fc1f713e1878c9c86e1a2c54ed12dafe58a96727e8e8292f608bdd18c6fcdb82->enter($__internal_fc1f713e1878c9c86e1a2c54ed12dafe58a96727e8e8292f608bdd18c6fcdb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tables:addValues.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <div style=\"margin: 20px\" id=\"big-box#\" class=\"content-box box-toggle content-box-closed\">
            <h3 class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Add a new value</span>
                <a class=\"float-right icon-separator btn toggle-button\">
                    <i id=\"big-box\" onclick=\"changeElement(this);\" class=\"glyph-icon icon-toggle icon-chevron-down\"></i>
                </a>
            </h3>
            <div  class=\"content-box-wrapper\">
                <form class=\"col-md-10 center-margin\" method=\"post\"";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\">
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"divider\" ></div>
                        <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                        <div class=\"col-md-4 col-md-offset-4\">
                            <input type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />
                        </div>
                    </div>
                     ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function changeElement(_this)
    {


        var div = document.getElementById(_this.id + '#');
        var div2 = document.getElementById(_this.id);

        if (div.className === \"content-box box-toggle content-box-closed\") {
            div2.className = \"glyph-icon icon-toggle icon-chevron-up\";
            div.className = \"content-box box-toggle\";
        }
        else {
            div2.className = \"glyph-icon icon-toggle icon-chevron-down\";
            div.className = \"content-box box-toggle content-box-closed\";
        }


    }
</script>
";
        
        $__internal_fc1f713e1878c9c86e1a2c54ed12dafe58a96727e8e8292f608bdd18c6fcdb82->leave($__internal_fc1f713e1878c9c86e1a2c54ed12dafe58a96727e8e8292f608bdd18c6fcdb82_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tables:addValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 31,  49 => 21,  42 => 17,  35 => 13,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tables/addValues.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div style="margin: 20px" id="big-box#" class="content-box box-toggle content-box-closed">*/
/*             <h3 class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Add a new value</span>*/
/*                 <a class="float-right icon-separator btn toggle-button">*/
/*                     <i id="big-box" onclick="changeElement(this);" class="glyph-icon icon-toggle icon-chevron-down"></i>*/
/*                 </a>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/*                 <form class="col-md-10 center-margin" method="post"{{ form_enctype(form) }}>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                         {{ form_label(form.name) }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10">*/
/*                         {{ form_widget(form.name) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <input type="hidden" name="superhidden" id="superhidden">*/
/*                         <div class="col-md-4 col-md-offset-4">*/
/*                             <input type="submit" value="ADD" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                      {{ form_rest(form) }}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeElement(_this)*/
/*     {*/
/* */
/* */
/*         var div = document.getElementById(_this.id + '#');*/
/*         var div2 = document.getElementById(_this.id);*/
/* */
/*         if (div.className === "content-box box-toggle content-box-closed") {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-up";*/
/*             div.className = "content-box box-toggle";*/
/*         }*/
/*         else {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-down";*/
/*             div.className = "content-box box-toggle content-box-closed";*/
/*         }*/
/* */
/* */
/*     }*/
/* </script>*/
/* */
