<?php

/* @TSAdmin/Tables/addValues.html.twig */
class __TwigTemplate_bb10235fe1e3817028d2d0f4c2a4f998e464bcac6994c50f12cc073ec0aa4e4d extends Twig_Template
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
        $__internal_5566f6e1b0881f0cc3b458c66483cef7e438abb7e12dc27f39fa57d99f79fad5 = $this->env->getExtension("native_profiler");
        $__internal_5566f6e1b0881f0cc3b458c66483cef7e438abb7e12dc27f39fa57d99f79fad5->enter($__internal_5566f6e1b0881f0cc3b458c66483cef7e438abb7e12dc27f39fa57d99f79fad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tables/addValues.html.twig"));

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
        
        $__internal_5566f6e1b0881f0cc3b458c66483cef7e438abb7e12dc27f39fa57d99f79fad5->leave($__internal_5566f6e1b0881f0cc3b458c66483cef7e438abb7e12dc27f39fa57d99f79fad5_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tables/addValues.html.twig";
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
