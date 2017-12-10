<?php

/* @TSAdmin/Users/ModalAddCandidate.html.twig */
class __TwigTemplate_652d50c585c9bcb78ae0763a7b06cd4a0cc3673a7d3fb84b039e33bd277a004a extends Twig_Template
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
        $__internal_374326713886f3113578f066f0d299f300af16d32b728d5076a1c6045884df6b = $this->env->getExtension("native_profiler");
        $__internal_374326713886f3113578f066f0d299f300af16d32b728d5076a1c6045884df6b->enter($__internal_374326713886f3113578f066f0d299f300af16d32b728d5076a1c6045884df6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/ModalAddCandidate.html.twig"));

        // line 1
        echo "<div  id=\"ModalAddCandidate\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Add Candidate </h3>
        </div>
        <div class=\"modal-body\">
            ";
        // line 14
        echo "
            <div class=\"form-row\">

                <div class=\"form-input col-md-2\">
                    <label for=\"\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo " <span class=\"required\" style=\"color:red\" >*</span>
                    </label>
                </div>

                <div class=\"form-input col-md-5\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo " 
                </div>

                <span style=\"color: red\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>

            </div>
                <div class=\"divider mrg0T mrg5B\"></div><br>
                
            <div class=\"form-row\">
                <div class=\"form-input col-md-2\">
                    <label >
                        date <span class=\"required\" style=\"color:red\" >*</span>
                    </label>
                </div>
                <div class=\"form-input col-md-5\">
                    <input required=\"required\" type=\"text\" id=\"datepicker2\" name=\"date\" />
                </div>
            </div>

            <div class=\"form-row\">
                <div class=\"form-input col-md-2\">
                    <label >
                        hour <span class=\"required\" style=\"color:red\" >*</span>
                    </label>
                </div>
                <div class=\"form-input bootstrap-timepicker dropdown col-md-5 required\" >
                    <input required=\"required\" class=\"timepicker input\" id=\"timepicker_24\" name=\"hour\" type=\"text\">
                </div>
            </div>

            <div id =\"tests\" class=\"form-row\">
                <div class=\"form-input col-md-2\">
                    <label for=\"\">
                        tests <span class=\"required\" style=\"color:red\" >*</span>
                    </label>
                </div> 
                <div  class=\"form-input col-md-5\" >
                    <select id=\"testsSelect\" data-placeholder=\"Choose a test(s)\" name=\"tests[]\"  multiple class=\"chosen-select\" required=\"required\">
                        <option  value=\"\"></option>
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTests"]) ? $context["allTests"] : $this->getContext($context, "allTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 64
            echo "                            <option  value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "id", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </select>
                </div>
            </div>

            <div class=\"form-row hidden\">
                <div class=\"form-input col-md-2\">
                    <label for=\"\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'label');
        echo "
                    </label>
                </div>
                <div class=\"form-input col-md-5\">
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state", array()), 'widget');
        echo "
                </div>
            </div>





        </div>



        <div class=\"modal-footer\">


            <div class=\"col-md-1 float-right\">

                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input  type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\" btn medium primary-bg\" />
            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\"class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </form>
</div>




";
        
        $__internal_374326713886f3113578f066f0d299f300af16d32b728d5076a1c6045884df6b->leave($__internal_374326713886f3113578f066f0d299f300af16d32b728d5076a1c6045884df6b_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/ModalAddCandidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 103,  130 => 77,  123 => 73,  114 => 66,  103 => 64,  99 => 63,  60 => 27,  54 => 24,  46 => 19,  39 => 14,  25 => 2,  22 => 1,);
    }
}
/* <div  id="ModalAddCandidate" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/* */
/* */
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Add Candidate </h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             {# src/TS/AdminBundle/Resources/views/Users/addUsers.html.twig #}*/
/* */
/*             <div class="form-row">*/
/* */
/*                 <div class="form-input col-md-2">*/
/*                     <label for="">*/
/*                         {{ form_label(form.username) }} <span class="required" style="color:red" >*</span>*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="form-input col-md-5">*/
/*                     {{ form_widget(form.username) }} */
/*                 </div>*/
/* */
/*                 <span style="color: red">{{ form_errors(form.username) }}</span>*/
/* */
/*             </div>*/
/*                 <div class="divider mrg0T mrg5B"></div><br>*/
/*                 */
/*             <div class="form-row">*/
/*                 <div class="form-input col-md-2">*/
/*                     <label >*/
/*                         date <span class="required" style="color:red" >*</span>*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="form-input col-md-5">*/
/*                     <input required="required" type="text" id="datepicker2" name="date" />*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-row">*/
/*                 <div class="form-input col-md-2">*/
/*                     <label >*/
/*                         hour <span class="required" style="color:red" >*</span>*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="form-input bootstrap-timepicker dropdown col-md-5 required" >*/
/*                     <input required="required" class="timepicker input" id="timepicker_24" name="hour" type="text">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div id ="tests" class="form-row">*/
/*                 <div class="form-input col-md-2">*/
/*                     <label for="">*/
/*                         tests <span class="required" style="color:red" >*</span>*/
/*                     </label>*/
/*                 </div> */
/*                 <div  class="form-input col-md-5" >*/
/*                     <select id="testsSelect" data-placeholder="Choose a test(s)" name="tests[]"  multiple class="chosen-select" required="required">*/
/*                         <option  value=""></option>*/
/*                         {% for test in allTests%}*/
/*                             <option  value={{test.id}}>{{test.name}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-row hidden">*/
/*                 <div class="form-input col-md-2">*/
/*                     <label for="">*/
/*                         {{ form_label(form.state) }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="form-input col-md-5">*/
/*                     {{ form_widget(form.state) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/*         <div class="modal-footer">*/
/* */
/* */
/*             <div class="col-md-1 float-right">*/
/* */
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input  type="submit" value="ADD" name="submitAction" class=" btn medium primary-bg" />*/
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%"class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*         {{ form_rest(form) }}*/
/* */
/*     </form>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
