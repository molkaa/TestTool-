<?php

/* @TSAdmin/Tests/ModalAddQuestion.html.twig */
class __TwigTemplate_1471de4148220752534031f70c12c0f504f5d588509635b5c3f542f4712e38ab extends Twig_Template
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
        $__internal_d05fc039088539343df644bb064a3410cd736a2417e57b82e9b26ddccf8f3861 = $this->env->getExtension("native_profiler");
        $__internal_d05fc039088539343df644bb064a3410cd736a2417e57b82e9b26ddccf8f3861->enter($__internal_d05fc039088539343df644bb064a3410cd736a2417e57b82e9b26ddccf8f3861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalAddQuestion.html.twig"));

        // line 1
        echo "
<div  id=\"ModalAddQuestion\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        
        
        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Add Question </h3>
        </div>
        <div class=\"modal-footer\">


        <div class=\"col-md-1 float-right\">

                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input  type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\" btn medium primary-bg\" />
            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\"class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>
            


        </div>
        <div class=\"modal-body\">
            <input type=\"radio\" class=\"hidden\" id=\"typeQ\"  name=\"type\" value=\"\" checked=\"true\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"big-box#\" class=\"content-box box-toggle content-box-wrapper\">
                        <div  class=\"content-box-wrapper\">


                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'label');
        echo "
                                    </label>
                                </div>
                                <div class=\"form-input col-md-10 clearfix\" cols=\"80\" id=\"editor1\" name=\"editor1\" rows=\"10\">
                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label');
        echo "
                                        <span class=\"required\" style=\"color:red\">*</span>
                                    </label>
                                </div>
                                <div class=\"form-input col-md-10 clearfix\" cols=\"80\" rows=\"10\">
                                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </div>
                                <div class=\"form-input col-md-2\">
                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array("class" => "spinner-input")));
        echo "
                                </div>
                                <div class=\"form-input col-md-1\">
                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), 'label');
        echo "
                                </div>
                                <div class=\"form-input col-md-3\">
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), "file", array()), 'widget', array("attr" => array("accept" => ".png,.jpeg,.jpg")));
        echo "
                                </div>
                                <div class=\"form-input col-md-1\">
                                    tests
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </div>
                                <div class=\"form-input col-md-3\" >
                                    <select id=\"testsSelect\" name=\"test\" class=\"chosen-select\">
                                      
                                        
                                            <option  value=";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "  >
                                                ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "
                                            </option>

                                      
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                      <div class=\"form-input col-md-2\">

                                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'label');
        echo "
                                            <span class=\"required\" style=\"color:red\">*</span>

                                        </div>
                                    <div class=\"form-input col-md-10\" >
                                        ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'widget');
        echo "
                                    </div>   
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'label');
        echo "
                                        <span class=\"required\" style=\"color:red\" >*</span>
                                    </label>
                                </div>
                                <div class=\"form-input col-md-10\">
                                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'widget');
        echo "
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 119
        $this->loadTemplate("TSAdminBundle:Tests:formulaire.html.twig", "@TSAdmin/Tests/ModalAddQuestion.html.twig", 119)->display($context);
        // line 120
        echo "    </form>
</div>
    
            
           
                
           ";
        
        $__internal_d05fc039088539343df644bb064a3410cd736a2417e57b82e9b26ddccf8f3861->leave($__internal_d05fc039088539343df644bb064a3410cd736a2417e57b82e9b26ddccf8f3861_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalAddQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 120,  190 => 119,  186 => 118,  170 => 105,  162 => 100,  153 => 94,  145 => 89,  132 => 79,  128 => 78,  115 => 68,  109 => 65,  103 => 62,  96 => 58,  88 => 53,  80 => 48,  71 => 42,  64 => 38,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div  id="ModalAddQuestion" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/*         */
/*         */
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Add Question </h3>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/* */
/* */
/*         <div class="col-md-1 float-right">*/
/* */
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input  type="submit" value="ADD" name="submitAction" class=" btn medium primary-bg" />*/
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%"class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/*             */
/* */
/* */
/*         </div>*/
/*         <div class="modal-body">*/
/*             <input type="radio" class="hidden" id="typeQ"  name="type" value="" checked="true">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div id="big-box#" class="content-box box-toggle content-box-wrapper">*/
/*                         <div  class="content-box-wrapper">*/
/* */
/* */
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         {{ form_label(form.introduction) }}*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-10 clearfix" cols="80" id="editor1" name="editor1" rows="10">*/
/*                                     {{ form_widget(form.introduction, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         {{ form_label(form.text) }}*/
/*                                         <span class="required" style="color:red">*</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-10 clearfix" cols="80" rows="10">*/
/*                                     {{ form_widget(form.text, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     {{ form_label(form.note) }}*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-2">*/
/*                                     {{ form_widget(form.note,{ 'attr': {'class': 'spinner-input'} })  }}*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-1">*/
/*                                     {{ form_label(form.questionPicture) }}*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-3">*/
/*                                     {{ form_widget(form.questionPicture.file,{'attr':{'accept':'.png,.jpeg,.jpg'}}) }}*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-1">*/
/*                                     tests*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-3" >*/
/*                                     <select id="testsSelect" name="test" class="chosen-select">*/
/*                                       */
/*                                         */
/*                                             <option  value={{test.type}}  >*/
/*                                                 {{test.type}}*/
/*                                             </option>*/
/* */
/*                                       */
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                       <div class="form-input col-md-2">*/
/* */
/*                                             {{ form_label(form.questionLevel) }}*/
/*                                             <span class="required" style="color:red">*</span>*/
/* */
/*                                         </div>*/
/*                                     <div class="form-input col-md-10" >*/
/*                                         {{ form_widget(form.questionLevel) }}*/
/*                                     </div>   */
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         {{ form_label(form.responses) }}*/
/*                                         <span class="required" style="color:red" >*</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-10">*/
/*                                     {{ form_widget(form.responses) }}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         */
/*         {{ form_rest(form) }}*/
/*         {% include "TSAdminBundle:Tests:formulaire.html.twig"  %}*/
/*     </form>*/
/* </div>*/
/*     */
/*             */
/*            */
/*                 */
/*            */
