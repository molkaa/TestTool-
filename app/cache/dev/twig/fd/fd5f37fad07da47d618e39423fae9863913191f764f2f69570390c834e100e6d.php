<?php

/* TSAdminBundle:Tests:editTest.html.twig */
class __TwigTemplate_735a4effcd23cc05c3c47058b63cda1104566696a2b90ff290e03b27f631e4cc extends Twig_Template
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
        $__internal_11d55871d829353f61b14143aa558dfc2c579ed42fe0a80c7dee0d99a6ac6d5b = $this->env->getExtension("native_profiler");
        $__internal_11d55871d829353f61b14143aa558dfc2c579ed42fe0a80c7dee0d99a6ac6d5b->enter($__internal_11d55871d829353f61b14143aa558dfc2c579ed42fe0a80c7dee0d99a6ac6d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:editTest.html.twig"));

        // line 2
        echo "<form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_editTest");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">Edit Test  : </h3>
    </div>
    <div class=\"modal-body\">



        <div class=\"row\">
            <div class=\"col-md-12\">
                <div  id=\"big-box#\" class=\"content-box box-toggle\">

                    <div  class=\"content-box-wrapper\">

                        <div class=\"form-row\">
                            <div class=\"form-input col-md-2 hidden\">
                                <label for=\"\">
                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </label>
                            </div>
                            <div class=\"form-input col-md-10 hidden\" >
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                            </div>
                        </div>

                        <div class=\"form-row\">
                            <div class=\"form-input col-md-2 \">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                            </div>
                            <div class=\"form-input col-md-4 \">
                                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-input col-md-2\">
                                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                            </div>
                            <div class=\"form-input col-md-4\">
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-input col-md-2\">
                                <label for=\"\">
                                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label');
        echo "(in minutes)
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </label>
                            </div>
                            <div class=\"form-input col-md-10\" >
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                            </div>
                        </div>  
                        
                            <div class=\"form-row\">
                                  <div class=\"form-input col-md-2\">
                                      
                                        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculationMethod", array()), 'label');
        echo "
                                        <span class=\"required\" style=\"color:red\">*</span>
                                     
                                    </div>
                                    <div class=\"form-input col-md-10\" >
                                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calculationMethod", array()), 'widget');
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
        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>









    </div>
    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 101
        $this->loadTemplate("TSAdminBundle:Tests:formulaire.html.twig", "TSAdminBundle:Tests:editTest.html.twig", 101)->display($context);
        // line 102
        echo "
</form>

";
        
        $__internal_11d55871d829353f61b14143aa558dfc2c579ed42fe0a80c7dee0d99a6ac6d5b->leave($__internal_11d55871d829353f61b14143aa558dfc2c579ed42fe0a80c7dee0d99a6ac6d5b_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:editTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 102,  162 => 101,  158 => 100,  124 => 69,  116 => 64,  106 => 57,  98 => 52,  89 => 46,  82 => 42,  76 => 39,  69 => 35,  60 => 29,  52 => 24,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/editQuestion.html.twig #}*/
/* <form class="left-side" action="{{ path('ts_admin_editTest')}}?id={{id}}"  method="post"{{ form_enctype(form) }}>*/
/* */
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">Edit Test  : </h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div  id="big-box#" class="content-box box-toggle">*/
/* */
/*                     <div  class="content-box-wrapper">*/
/* */
/*                         <div class="form-row">*/
/*                             <div class="form-input col-md-2 hidden">*/
/*                                 <label for="">*/
/*                                     {{ form_label(form.name) }}*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10 hidden" >*/
/*                                 {{ form_widget(form.name) }}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-row">*/
/*                             <div class="form-input col-md-2 ">*/
/*                                 {{ form_label(form.note) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </div>*/
/*                             <div class="form-input col-md-4 ">*/
/*                                 {{ form_widget(form.note) }}*/
/*                             </div>*/
/*                             <div class="form-input col-md-2">*/
/*                                 {{ form_label(form.eliminatoryNote) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </div>*/
/*                             <div class="form-input col-md-4">*/
/*                                 {{ form_widget(form.eliminatoryNote) }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <div class="form-input col-md-2">*/
/*                                 <label for="">*/
/*                                     {{ form_label(form.time) }}(in minutes)*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-input col-md-10" >*/
/*                                 {{ form_widget(form.time) }}*/
/*                             </div>*/
/*                         </div>  */
/*                         */
/*                             <div class="form-row">*/
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
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
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
/*         <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
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
/*     {% include "TSAdminBundle:Tests:formulaire.html.twig"  %}*/
/* */
/* </form>*/
/* */
/* */
