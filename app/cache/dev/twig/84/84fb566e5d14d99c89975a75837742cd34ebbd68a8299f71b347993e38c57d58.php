<?php

/* TSAdminBundle:Notification:otherInvitation.html.twig */
class __TwigTemplate_abf0ccd512e3fd949283cf2f01d93ca91d34da9e50a88b9986d9cdf987ccee2a extends Twig_Template
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
        $__internal_ccec10ddc3119d372fcb04c534fe8353a8601d35d1da7e6feb66ad3cb1139277 = $this->env->getExtension("native_profiler");
        $__internal_ccec10ddc3119d372fcb04c534fe8353a8601d35d1da7e6feb66ad3cb1139277->enter($__internal_ccec10ddc3119d372fcb04c534fe8353a8601d35d1da7e6feb66ad3cb1139277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Notification:otherInvitation.html.twig"));

        // line 1
        echo "<form class=\"left-side\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_otherInvitation", array("id" => $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidate"]) ? $context["candidate"] : $this->getContext($context, "candidate")), "username", array()), "html", null, true);
        echo " </h3>
    </div>
    <div class=\"modal-body\">


                    
      
             <div class=\"form-row\">
                    <div class=\"form-input col-md-2\">
                        <label >
                            date <span class=\"required\" style=\"color:red\" >*</span>
                        </label>
                    </div>
                    <div class=\"form-input col-md-8\">
                        <input required=\"required\" type=\"text\" id=\"datepicker2\" name=\"date\" />
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-input col-md-2\">
                        <label >
                            hour <span class=\"required\" style=\"color:red\" >*</span>
                        </label>
                    </div>
                    <div class=\"form-input bootstrap-timepicker dropdown col-md-8 required\" >
                        <input required=\"required\" class=\"timepicker input\" id=\"timepicker_24\" name=\"hour\" type=\"text\">
                    </div>
                </div>

                


                <div id =\"tests\" class=\"form-row\">
                    <div class=\"form-input col-md-2\">
                        <label for=\"\">
                            tests <span class=\"required\" style=\"color:red\" >*</span>
                        </label>
                    </div>
                    <div  class=\"form-input col-md-8\" >
                        <select id=\"testsSelect\" name=\"tests[]\"  multiple class=\"chosen-select\" required=\"required\">
                            <option></option>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTests"]) ? $context["allTests"] : $this->getContext($context, "allTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 50
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
        // line 52
        echo "                        </select>
                    </div>
                </div>

    </div>
    <div class=\"modal-footer\">



  <div class=\"col-md-1 float-right\">
            <input type=\"submit\" value=\"Validate\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />

        </div>
        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"btn medium primary-bg radius-all-4\" data-toggle=\"button\">Close</button>


    </div>

 </form>";
        
        $__internal_ccec10ddc3119d372fcb04c534fe8353a8601d35d1da7e6feb66ad3cb1139277->leave($__internal_ccec10ddc3119d372fcb04c534fe8353a8601d35d1da7e6feb66ad3cb1139277_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Notification:otherInvitation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 52,  81 => 50,  77 => 49,  33 => 8,  22 => 1,);
    }
}
/* <form class="left-side" action="{{ path('ts_admin_otherInvitation', {'id': candidate.id})}}" method="post">*/
/* */
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">{{candidate.username}} </h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/* */
/*                     */
/*       */
/*              <div class="form-row">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label >*/
/*                             date <span class="required" style="color:red" >*</span>*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="form-input col-md-8">*/
/*                         <input required="required" type="text" id="datepicker2" name="date" />*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-row">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label >*/
/*                             hour <span class="required" style="color:red" >*</span>*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="form-input bootstrap-timepicker dropdown col-md-8 required" >*/
/*                         <input required="required" class="timepicker input" id="timepicker_24" name="hour" type="text">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 */
/* */
/* */
/*                 <div id ="tests" class="form-row">*/
/*                     <div class="form-input col-md-2">*/
/*                         <label for="">*/
/*                             tests <span class="required" style="color:red" >*</span>*/
/*                         </label>*/
/*                     </div>*/
/*                     <div  class="form-input col-md-8" >*/
/*                         <select id="testsSelect" name="tests[]"  multiple class="chosen-select" required="required">*/
/*                             <option></option>*/
/*                                 {% for test in allTests%}*/
/*                             <option  value={{test.id}}>{{test.name}}</option>*/
/*                                 {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*     </div>*/
/*     <div class="modal-footer">*/
/* */
/* */
/* */
/*   <div class="col-md-1 float-right">*/
/*             <input type="submit" value="Validate" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/* */
/*         </div>*/
/*         <button type="button" data-dismiss="modal" aria-hidden="true" class="btn medium primary-bg radius-all-4" data-toggle="button">Close</button>*/
/* */
/* */
/*     </div>*/
/* */
/*  </form>*/
