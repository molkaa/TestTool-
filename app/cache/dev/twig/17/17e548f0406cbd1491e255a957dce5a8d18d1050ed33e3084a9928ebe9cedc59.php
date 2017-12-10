<?php

/* @TSAdmin/Tests/ModalAddTest.html.twig */
class __TwigTemplate_89d8d8c1594fe6ae98f26b8047820b6cd1cd1b0f97974181492dbbe0f4fe3d7e extends Twig_Template
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
        $__internal_f5211542673f75de0dc6aba0f543e3124eccb4f2c0f5aa511aebc292969ee0ac = $this->env->getExtension("native_profiler");
        $__internal_f5211542673f75de0dc6aba0f543e3124eccb4f2c0f5aa511aebc292969ee0ac->enter($__internal_f5211542673f75de0dc6aba0f543e3124eccb4f2c0f5aa511aebc292969ee0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalAddTest.html.twig"));

        // line 1
        echo "
<div  id=\"ModalAdd\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Add Test </h3>
        </div>
        <div class=\"modal-body\">


            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div  id=\"big-box#\" class=\"content-box box-toggle\">

                        <div  class=\"content-box-wrapper\">
                            <div id=\"errormsg\"class=\"col-md-6\" style=\"display: none\">

                                <div class=\"infobox error-bg mrg0A\">
                                    <p>Error message box using the <b>.error-bg</b> color scheme. <a href=\"#\" title=\"Link example\">Link example</a></p>
                                </div>

                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                                        <span class=\"required\" style=\"color:red\">*</span>
                                    </label>
                                </div>
                                <div class=\"form-input col-md-10\" >
                                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        type
                                        <span class=\"required\" style=\"color:red\">*</span>
                                    </label>
                                </div>
                                <div  class=\"form-input col-md-10\">
                                    <select required=\"required\" id=\"choice\" name=\"type\" class=\"chosen-select\">
                                        <option > </option>
                                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTests"]) ? $context["allTests"] : $this->getContext($context, "allTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["thisTest"]) {
            // line 50
            echo "                                            <option  value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thisTest"], "name", array()), "html", null, true);
            echo " >
                                                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["thisTest"], "name", array()), "html", null, true);
            echo "
                                            </option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2 hidden\">
                                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </div>
                                <div class=\"form-input col-md-4 hidden\">
                                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("value" => "0"));
        echo "
                                </div>
                                <div class=\"form-input col-md-2\">
                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'label');
        echo "
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </div>
                                <div class=\"form-input col-md-4\">
                                    ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'widget');
        echo "
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label');
        echo "(in minutes)
                                        <span class=\"required\" style=\"color:red\">*</span>
                                    </label>
                                </div>
                                <div class=\"form-input col-md-10\" >
                                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                                </div>
                            </div>  
                             <div class=\"form-row\">
                                  <div class=\"form-input col-md-2\">
                                      
                                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculationMethod", array()), 'label');
        echo "
                                        <span class=\"required\" style=\"color:red\">*</span>
                                     
                                    </div>
                                    <div class=\"form-input col-md-10\" >
                                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculationMethod", array()), 'widget');
        echo "
                                    </div>   
                            </div>


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

        </div>
        <div class=\"modal-footer\">


            <div class=\"col-md-1 float-right\" >

                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\"btn medium primary-bg\" />

            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 135
        $this->loadTemplate("TSAdminBundle:Tests:formulaire.html.twig", "@TSAdmin/Tests/ModalAddTest.html.twig", 135)->display($context);
        // line 136
        echo "
    </form>
</div>

";
        
        $__internal_f5211542673f75de0dc6aba0f543e3124eccb4f2c0f5aa511aebc292969ee0ac->leave($__internal_f5211542673f75de0dc6aba0f543e3124eccb4f2c0f5aa511aebc292969ee0ac_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalAddTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 136,  209 => 135,  205 => 134,  160 => 92,  152 => 87,  143 => 81,  135 => 76,  126 => 70,  119 => 66,  113 => 63,  106 => 59,  99 => 54,  90 => 51,  85 => 50,  81 => 49,  65 => 36,  57 => 31,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div  id="ModalAdd" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/* */
/* */
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Add Test </h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div  id="big-box#" class="content-box box-toggle">*/
/* */
/*                         <div  class="content-box-wrapper">*/
/*                             <div id="errormsg"class="col-md-6" style="display: none">*/
/* */
/*                                 <div class="infobox error-bg mrg0A">*/
/*                                     <p>Error message box using the <b>.error-bg</b> color scheme. <a href="#" title="Link example">Link example</a></p>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         {{ form_label(form.name) }}*/
/*                                         <span class="required" style="color:red">*</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-10" >*/
/*                                     {{ form_widget(form.name) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         type*/
/*                                         <span class="required" style="color:red">*</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div  class="form-input col-md-10">*/
/*                                     <select required="required" id="choice" name="type" class="chosen-select">*/
/*                                         <option > </option>*/
/*                                         {% for thisTest in allTests %}*/
/*                                             <option  value={{thisTest.name}} >*/
/*                                                 {{thisTest.name}}*/
/*                                             </option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2 hidden">*/
/*                                     {{ form_label(form.note) }}*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-4 hidden">*/
/*                                     {{ form_widget(form.note,{value:'0'}) }}*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-2">*/
/*                                     {{ form_label(form.eliminatoryNote) }}*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-4">*/
/*                                     {{ form_widget(form.eliminatoryNote) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         {{ form_label(form.time) }}(in minutes)*/
/*                                         <span class="required" style="color:red">*</span>*/
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-10" >*/
/*                                     {{ form_widget(form.time) }}*/
/*                                 </div>*/
/*                             </div>  */
/*                              <div class="form-row">*/
/*                                   <div class="form-input col-md-2">*/
/*                                       */
/*                                         {{ form_label(form.calculationMethod) }}*/
/*                                         <span class="required" style="color:red">*</span>*/
/*                                      */
/*                                     </div>*/
/*                                     <div class="form-input col-md-10" >*/
/*                                         {{ form_widget(form.calculationMethod) }}*/
/*                                     </div>   */
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <script>*/
/* */
/*                 function changeElement(_this)*/
/*                 {*/
/*                     var div = document.getElementById(_this.id + '#');*/
/*                     var div2 = document.getElementById(_this.id);*/
/*                     if (div.className === "content-box box-toggle content-box-closed") {*/
/*                         div2.className = "glyph-icon icon-toggle icon-chevron-up";*/
/*                         div.className = "content-box box-toggle";*/
/*                     }*/
/*                     else {*/
/*                         div2.className = "glyph-icon icon-toggle icon-chevron-down";*/
/*                         div.className = "content-box box-toggle content-box-closed";*/
/*                     }*/
/*                 }*/
/*             </script>*/
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/* */
/* */
/*             <div class="col-md-1 float-right" >*/
/* */
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input type="submit" value="ADD" name="submitAction" class="btn medium primary-bg" />*/
/* */
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*         {{ form_rest(form) }}*/
/*         {% include "TSAdminBundle:Tests:formulaire.html.twig"  %}*/
/* */
/*     </form>*/
/* </div>*/
/* */
/* */
