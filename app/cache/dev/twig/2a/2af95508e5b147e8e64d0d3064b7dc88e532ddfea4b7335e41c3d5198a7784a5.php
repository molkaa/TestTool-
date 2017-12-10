<?php

/* @TSAdmin/Tests/editQuestion.html.twig */
class __TwigTemplate_1fca6eeb87787570bec342ff9fdea4bdd15ab5a2cac2be3483c705467df2f798 extends Twig_Template
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
        $__internal_c790e0615ac919c478953af5aa54b2b6a0a1d94973b78c9e7ec1c26b37a14a6b = $this->env->getExtension("native_profiler");
        $__internal_c790e0615ac919c478953af5aa54b2b6a0a1d94973b78c9e7ec1c26b37a14a6b->enter($__internal_c790e0615ac919c478953af5aa54b2b6a0a1d94973b78c9e7ec1c26b37a14a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/editQuestion.html.twig"));

        // line 2
        echo "<form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_editQuestion");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&idtest=";
        echo twig_escape_filter($this->env, (isset($context["idtest"]) ? $context["idtest"] : $this->getContext($context, "idtest")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">Edit Question  : </h3>
    </div>
    <div class=\"modal-body\">



        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"big-box#\" class=\"content-box box-toggle content-box-wrapper\">

                    <div  class=\"content-box-wrapper\">


                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"\">
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'label');
        echo "
                                </label>
                            </div>
                            <div class=\"form-input col-md-10 clearfix\" cols=\"80\" id=\"editor1\" name=\"editor1\" rows=\"10\">
                                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"\">
                                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label');
        echo "
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </label>
                            </div>
                            <div class=\"form-input col-md-10 clearfix\" cols=\"80\" rows=\"10\">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"\">
                                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                </label>
                            </div>
                            <div class=\"form-input col-md-2\">
                                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-label col-md-1\">
                                <label for=\"\" style=\"color:#d60000\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), 'label');
        echo "
                                </label>
                            </div>
                            <div class=\"form-input col-md-3\">
                               ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), "file", array()), 'widget', array("attr" => array("accept" => ".png,.jpeg,.jpg")));
        echo "
                            </div>
                            <div class=\"form-label col-md-1\">
                                <label for=\"\" style=\"color:#d60000\">
                                    tests
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </label>

                            </div>
                            <div class=\"form-input col-md-3\" >
                                <select id=\"testsSelect\" name=\"test\" class=\"chosen-select\">
                                    <option></option>
                                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) ? $context["tests"] : $this->getContext($context, "tests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 70
            echo "                                        ";
            if (($this->getAttribute($context["test"], "name", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()))) {
                // line 71
                echo "                                            <option selected value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
                echo "  >
                                            ";
            } else {
                // line 73
                echo "                                            <option  value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
                echo "  >
                                            ";
            }
            // line 75
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "
                                        </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                </select>
                            </div>
                        </div>
                               
                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                 <label for=\"\">
                                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                                 </label>
                            </div>
                            <div class=\"form-input col-md-10\" >
                                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'widget');
        echo "
                            </div>   
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-label col-md-2\">
                                <label for=\"\" style=\"color:#d60000\" >
                                    ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'label');
        echo "*
                                </label>
                            </div>
                            <div class=\"form-input col-md-10\" id=\"response";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
                                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'widget');
        echo "
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>








    </div>
    <div class=\"modal-footer\">
        <div class=\"col-md-1 float-right\">
            <input type=\"submit\" value=\"Edit\" name=\"submitAction\" class=\"btn medium primary-bg\" />

        </div>
        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\"  class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>









    </div>
    ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


</form>

";
        
        $__internal_c790e0615ac919c478953af5aa54b2b6a0a1d94973b78c9e7ec1c26b37a14a6b->leave($__internal_c790e0615ac919c478953af5aa54b2b6a0a1d94973b78c9e7ec1c26b37a14a6b_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/editQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 135,  188 => 100,  184 => 99,  178 => 96,  169 => 90,  161 => 85,  152 => 78,  142 => 75,  136 => 73,  130 => 71,  127 => 70,  123 => 69,  108 => 57,  101 => 53,  94 => 49,  87 => 45,  78 => 39,  70 => 34,  61 => 28,  54 => 24,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/editQuestion.html.twig #}*/
/* <form class="left-side" action="{{ path('ts_admin_editQuestion')}}?id={{id}}&idtest={{idtest}}"  method="post"{{ form_enctype(form) }}>*/
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">Edit Question  : </h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div id="big-box#" class="content-box box-toggle content-box-wrapper">*/
/* */
/*                     <div  class="content-box-wrapper">*/
/* */
/* */
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="">*/
/*                                     {{ form_label(form.introduction) }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10 clearfix" cols="80" id="editor1" name="editor1" rows="10">*/
/*                                 {{ form_widget(form.introduction, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="">*/
/*                                     {{ form_label(form.text) }}*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10 clearfix" cols="80" rows="10">*/
/*                                 {{ form_widget(form.text, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="">*/
/*                                     {{ form_label(form.note)  }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-2">*/
/*                                 {{ form_widget(form.note) }}*/
/*                             </div>*/
/*                             <div class="form-label col-md-1">*/
/*                                 <label for="" style="color:#d60000">*/
/*                                     {{ form_label(form.questionPicture) }}*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-3">*/
/*                                {{ form_widget(form.questionPicture.file,{'attr':{'accept':'.png,.jpeg,.jpg'}}) }}*/
/*                             </div>*/
/*                             <div class="form-label col-md-1">*/
/*                                 <label for="" style="color:#d60000">*/
/*                                     tests*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </label>*/
/* */
/*                             </div>*/
/*                             <div class="form-input col-md-3" >*/
/*                                 <select id="testsSelect" name="test" class="chosen-select">*/
/*                                     <option></option>*/
/*                                     {% for test in tests%}*/
/*                                         {% if test.name is same as (question.tests) %}*/
/*                                             <option selected value={{test.name}}  >*/
/*                                             {% else %}*/
/*                                             <option  value={{test.name}}  >*/
/*                                             {% endif %}*/
/*                                             {{test.name}}*/
/*                                         </option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                                */
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                  <label for="">*/
/*                                 {{ form_label(form.questionLevel) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                                  </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10" >*/
/*                                 {{ form_widget(form.questionLevel) }}*/
/*                             </div>   */
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <div class="form-label col-md-2">*/
/*                                 <label for="" style="color:#d60000" >*/
/*                                     {{ form_label(form.responses) }}**/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10" id="response{{question.id}}">*/
/*                                 {{ form_widget(form.responses) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <div class="col-md-1 float-right">*/
/*             <input type="submit" value="Edit" name="submitAction" class="btn medium primary-bg" />*/
/* */
/*         </div>*/
/*         <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%"  class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/*     {{ form_rest(form) }}*/
/* */
/* */
/* </form>*/
/* */
/* */
