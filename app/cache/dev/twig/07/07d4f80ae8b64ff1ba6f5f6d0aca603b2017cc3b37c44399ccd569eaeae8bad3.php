<?php

/* TSAdminBundle:Tests:addQuestion.html.twig */
class __TwigTemplate_8e8a4ad5421bfa30caa4870d0bd4cb95e3cea6811142dcf5a941bd0ffc43c665 extends Twig_Template
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
        $__internal_b759510a3bc3b4f16d97b94edc22716f1efe5871a683acf70bca9e00f79d26bd = $this->env->getExtension("native_profiler");
        $__internal_b759510a3bc3b4f16d97b94edc22716f1efe5871a683acf70bca9e00f79d26bd->enter($__internal_b759510a3bc3b4f16d97b94edc22716f1efe5871a683acf70bca9e00f79d26bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:addQuestion.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div style=\"margin: 20px\" id=\"big-box#\" class=\"content-box box-toggle content-box-closed\">
            <h3 class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Add a new question</span>
                <a class=\"float-right icon-separator btn toggle-button\">
                    <i id=\"big-box\" onclick=\"changeElement(this);\" class=\"glyph-icon icon-toggle icon-chevron-down\"></i>
                </a>
            </h3>
            <div  class=\"content-box-wrapper\">
                <form class=\"col-md-10 center-margin\" method=\"post\"";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-row\">
                        <div class=\"col-md-12 center-margin button-group float-left\" data-toggle=\"buttons\">
                            <a href=\"javascript:;\" class=\"btn medium bg-gray col-md-2 active\" >
                                <span class=\"button-content\">
                                    <input type=\"radio\" name=\"type\" value=\"one\" onclick=\"showInput(this.value)\">
                                    Select One
                                </span>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium bg-gray col-md-2\">
                                <span class=\"button-content\">
                                    <input type=\"radio\" name=\"type\" value=\"many\" onclick=\"showInput(this.value)\">
                                    Select Many                                    
                                </span>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium bg-gray col-md-3\">
                                <span class=\"button-content\">
                                    <input type=\"radio\" name=\"type\" value=\"menu\" onclick=\"showInput(this.value)\">
                                    Drop down menu
                                </span>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium bg-gray col-md-3\">
                                <span class=\"button-content\">
                                    <input type=\"radio\" name=\"type\" value=\"numeric\" onclick=\"showInput(this.value)\">
                                    Numeric input
                                </span>
                            </a>
                            <a href=\"javascript:;\" class=\"btn medium bg-gray col-md-2\">
                                <span class=\"button-content\">
                                    <input type=\"radio\" name=\"type\" value=\"free\" onclick=\"showInput(this.value)\">
                                    Free text
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'label');
        echo "
                            </label>
                        </div>
                        <div class=\"form-input col-md-10 clearfix\" cols=\"80\" id=\"editor1\" name=\"editor1\" rows=\"10\">
                                   ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                            </label>
                        </div>
                        <div class=\"form-input col-md-10 clearfix\" cols=\"80\" rows=\"10\">
                                   ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                        </div>
                        <div class=\"form-input col-md-2\">
                                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-input col-md-1\">
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), 'label');
        echo "
                        </div>
                        <div class=\"form-input col-md-3\">
                                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), "file", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-input col-md-1\">
                            tests
                            <span class=\"required\" style=\"color:red\">*</span>
                        </div>
                        <div class=\"form-input col-md-3\" >
                           <select id=\"testsSelect\" name=\"test\" class=\"chosen-select\">
                            <option></option>
                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) ? $context["tests"] : $this->getContext($context, "tests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 91
            echo "                            <option  value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "  >
                                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "
                            </option>

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </select>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\" >*</span>
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\">
                                   ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'widget');
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
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                     ";
        // line 119
        $this->loadTemplate("TSAdminBundle:Tests:formulaire.html.twig", "TSAdminBundle:Tests:addQuestion.html.twig", 119)->display($context);
        // line 120
        echo "                </form>
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
</script>";
        
        $__internal_b759510a3bc3b4f16d97b94edc22716f1efe5871a683acf70bca9e00f79d26bd->leave($__internal_b759510a3bc3b4f16d97b94edc22716f1efe5871a683acf70bca9e00f79d26bd_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:addQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 120,  192 => 119,  188 => 118,  174 => 107,  166 => 102,  158 => 96,  148 => 92,  143 => 91,  139 => 90,  127 => 81,  121 => 78,  115 => 75,  108 => 71,  100 => 66,  92 => 61,  83 => 55,  76 => 51,  34 => 12,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/addQuestion.html.twig #}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div style="margin: 20px" id="big-box#" class="content-box box-toggle content-box-closed">*/
/*             <h3 class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Add a new question</span>*/
/*                 <a class="float-right icon-separator btn toggle-button">*/
/*                     <i id="big-box" onclick="changeElement(this);" class="glyph-icon icon-toggle icon-chevron-down"></i>*/
/*                 </a>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/*                 <form class="col-md-10 center-margin" method="post"{{ form_enctype(form) }}>*/
/*                     <div class="form-row">*/
/*                         <div class="col-md-12 center-margin button-group float-left" data-toggle="buttons">*/
/*                             <a href="javascript:;" class="btn medium bg-gray col-md-2 active" >*/
/*                                 <span class="button-content">*/
/*                                     <input type="radio" name="type" value="one" onclick="showInput(this.value)">*/
/*                                     Select One*/
/*                                 </span>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium bg-gray col-md-2">*/
/*                                 <span class="button-content">*/
/*                                     <input type="radio" name="type" value="many" onclick="showInput(this.value)">*/
/*                                     Select Many                                    */
/*                                 </span>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium bg-gray col-md-3">*/
/*                                 <span class="button-content">*/
/*                                     <input type="radio" name="type" value="menu" onclick="showInput(this.value)">*/
/*                                     Drop down menu*/
/*                                 </span>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium bg-gray col-md-3">*/
/*                                 <span class="button-content">*/
/*                                     <input type="radio" name="type" value="numeric" onclick="showInput(this.value)">*/
/*                                     Numeric input*/
/*                                 </span>*/
/*                             </a>*/
/*                             <a href="javascript:;" class="btn medium bg-gray col-md-2">*/
/*                                 <span class="button-content">*/
/*                                     <input type="radio" name="type" value="free" onclick="showInput(this.value)">*/
/*                                     Free text*/
/*                                 </span>*/
/*                             </a>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                     {{ form_label(form.introduction) }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10 clearfix" cols="80" id="editor1" name="editor1" rows="10">*/
/*                                    {{ form_widget(form.introduction, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                     {{ form_label(form.text) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10 clearfix" cols="80" rows="10">*/
/*                                    {{ form_widget(form.text, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                                 {{ form_label(form.note) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                         </div>*/
/*                         <div class="form-input col-md-2">*/
/*                                 {{ form_widget(form.note) }}*/
/*                         </div>*/
/*                         <div class="form-input col-md-1">*/
/*                                 {{ form_label(form.questionPicture) }}*/
/*                         </div>*/
/*                         <div class="form-input col-md-3">*/
/*                                 {{ form_widget(form.questionPicture.file) }}*/
/*                         </div>*/
/*                         <div class="form-input col-md-1">*/
/*                             tests*/
/*                             <span class="required" style="color:red">*</span>*/
/*                         </div>*/
/*                         <div class="form-input col-md-3" >*/
/*                            <select id="testsSelect" name="test" class="chosen-select">*/
/*                             <option></option>*/
/*                             {% for test in tests%}*/
/*                             <option  value={{test.name}}  >*/
/*                                         {{test.name}}*/
/*                             </option>*/
/* */
/*                                 {% endfor %}*/
/*                         </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                     {{ form_label(form.responses) }}*/
/*                                 <span class="required" style="color:red" >*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10">*/
/*                                    {{ form_widget(form.responses) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <input type="hidden" name="superhidden" id="superhidden">*/
/*                         <div class="col-md-4 col-md-offset-4">*/
/*                             <input type="submit" value="ADD" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                      {{ form_rest(form) }}*/
/*                      {% include "TSAdminBundle:Tests:formulaire.html.twig"  %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeElement(_this)*/
/*     {*/
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
/*     }*/
/* </script>*/
