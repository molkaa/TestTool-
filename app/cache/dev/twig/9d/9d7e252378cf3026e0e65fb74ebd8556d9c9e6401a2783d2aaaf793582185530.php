<?php

/* TSAdminBundle:Admin:researchByState.html.twig */
class __TwigTemplate_39d89d0eca2cf8ce245181c657f37d1e9dbd9cb0c269d9921e5838f5521ac879 extends Twig_Template
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
        $__internal_e6b7ac026648db6d6e15bd498bc58e2cd33c03f151635e5608820403679739c1 = $this->env->getExtension("native_profiler");
        $__internal_e6b7ac026648db6d6e15bd498bc58e2cd33c03f151635e5608820403679739c1->enter($__internal_e6b7ac026648db6d6e15bd498bc58e2cd33c03f151635e5608820403679739c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:researchByState.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"dropdown col-md-12 closed\">
        <a href=\"javascript:;\" class=\"btn medium bg-white \" style=\"float:right\" title=\"\" data-toggle=\"dropdown\">

            <span class=\"button-content\">
                <i class=\"glyph-icon icon-cog float-left\"> 
                    research 
                </i>

                <i class=\"glyph-icon icon-caret-down float-right\"></i>
            </span>
        </a>
        <div class=\"dropdown-menu pad0A float-right col-md-12\">
            <div class=\"xx-large-box\">
                <div class=\"bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A\">Research Form</div>
                <div class=\"pad10A\">
                    <form id=\"demo-form\" action=\"\" class=\"col-md-12\" method=\"post\">
                        <div class=\"form-row\">

                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                    Username:
                                </label>
                            </div>

                            <div class=\"form-row\">

                                <div class=\"form-input col-md-6\">
                                    <input type=\"text\"  name=\"username\">
                                </div>

                            </div>

                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                    State:
                                </label>
                            </div>

                            <div class=\"form-row\">

                                <div class=\"form-input col-md-6\">
                                    <select id=\"\" name=\"state\">
                                        <option value=\"\"></option>
                                        <option value=\"enable\">enable</option>
                                        <option value=\"disable\">disable</option>

                                    </select>
                                </div>

                            </div>


                            <div class=\"divider\"></div>
                            <div class=\"form-row\">
                                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                                <div class=\"col-md-4 col-md-offset-4\">
                                    <input type=\"submit\" value=\"submit\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />
                                </div>

                            </div>

                    </form>

                </div>


            </div>
        </div>
    </div>
</div>";
        
        $__internal_e6b7ac026648db6d6e15bd498bc58e2cd33c03f151635e5608820403679739c1->leave($__internal_e6b7ac026648db6d6e15bd498bc58e2cd33c03f151635e5608820403679739c1_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:researchByState.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Admin/research.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="dropdown col-md-12 closed">*/
/*         <a href="javascript:;" class="btn medium bg-white " style="float:right" title="" data-toggle="dropdown">*/
/* */
/*             <span class="button-content">*/
/*                 <i class="glyph-icon icon-cog float-left"> */
/*                     research */
/*                 </i>*/
/* */
/*                 <i class="glyph-icon icon-caret-down float-right"></i>*/
/*             </span>*/
/*         </a>*/
/*         <div class="dropdown-menu pad0A float-right col-md-12">*/
/*             <div class="xx-large-box">*/
/*                 <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Research Form</div>*/
/*                 <div class="pad10A">*/
/*                     <form id="demo-form" action="" class="col-md-12" method="post">*/
/*                         <div class="form-row">*/
/* */
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                     Username:*/
/*                                 </label>*/
/*                             </div>*/
/* */
/*                             <div class="form-row">*/
/* */
/*                                 <div class="form-input col-md-6">*/
/*                                     <input type="text"  name="username">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                     State:*/
/*                                 </label>*/
/*                             </div>*/
/* */
/*                             <div class="form-row">*/
/* */
/*                                 <div class="form-input col-md-6">*/
/*                                     <select id="" name="state">*/
/*                                         <option value=""></option>*/
/*                                         <option value="enable">enable</option>*/
/*                                         <option value="disable">disable</option>*/
/* */
/*                                     </select>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/* */
/*                             <div class="divider"></div>*/
/*                             <div class="form-row">*/
/*                                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                                 <div class="col-md-4 col-md-offset-4">*/
/*                                     <input type="submit" value="submit" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                     </form>*/
/* */
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
