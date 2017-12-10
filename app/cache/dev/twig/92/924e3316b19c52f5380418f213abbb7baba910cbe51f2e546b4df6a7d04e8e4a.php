<?php

/* @TSAdmin/Candidate/researchTest.html.twig */
class __TwigTemplate_3f616e373939b1d30079dc46ce3140ac28b7d5bd957c3a83227c353fb684d66a extends Twig_Template
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
        $__internal_5f2e1c38a3dd01b30f86bc253b41f348b78743ad997e3e2d53aeaf525283aea5 = $this->env->getExtension("native_profiler");
        $__internal_5f2e1c38a3dd01b30f86bc253b41f348b78743ad997e3e2d53aeaf525283aea5->enter($__internal_5f2e1c38a3dd01b30f86bc253b41f348b78743ad997e3e2d53aeaf525283aea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/researchTest.html.twig"));

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
                <div class=\"bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A\">Research</div>
                <div class=\"pad10A\">
                    <form id=\"demo-form\" action=\"\" class=\"col-md-12\" method=\"post\">
                        <div class=\"form-row\">
                            
                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                   Username:
                                </label>
                            </div>
                           
                           
                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                    Test Name:
                                </label>
                            </div>
                            
                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                    Test Date From:
                                </label>
                            </div>
                            <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                  To:
                                </label>
                            </div>
                            
                        </div>
                        <div class=\"form-row\">
                            
                            <div class=\"form-input col-md-3\">
                                <input  type=\"text\"  name=\"username\">
                            </div>
                            
                            <div class=\"form-input col-md-3\">
                                <input type=\"text\"  name=\"testName\">
                            </div>
                            
                             <div class=\"form-input col-md-3\">
                                 <input type=\"text\" size=\"10\" class=\"fromDate\" name=\"from\">
                            </div>
                            <div class=\"form-input col-md-3\">
                               <input type=\"text\" size=\"10\" class=\"toDate\" name=\"to\">
                            </div>
                            
                        </div>
                       
                        <div class=\"form-row\">
                            
                              <div class=\"form-label col-md-3\">
                                <label for=\"\">
                                 Remark:
                                </label>
                            </div>
                        </div>
                        
                       <div class=\"form-row\">
                           
                           
                           <div class=\"form-input col-md-3\">
                               <select id=\"\" data-placeholder=\"Choose remark...\" class=\"chosen-select\" name=\"remark\">
                                   <option value=\"\"></option> 
                                   <option value=\"corrected\">corrected</option>
                                   <option value=\"need correction\">need correction</option>
                               </select>
                           </div>

                        </div>

                        <div class=\"divider\"></div>
                        <div class=\"form-row\">
                            <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                            <div class=\"col-md-4 col-md-offset-4\">
                                <input type=\"submit\" value=\"submit\" class=\"btn medium primary-bg radius-all-4\" />
                            </div>

                        </div>

                    </form>

                </div>


            </div>
        </div>
    </div>
</div>";
        
        $__internal_5f2e1c38a3dd01b30f86bc253b41f348b78743ad997e3e2d53aeaf525283aea5->leave($__internal_5f2e1c38a3dd01b30f86bc253b41f348b78743ad997e3e2d53aeaf525283aea5_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/researchTest.html.twig";
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
/*                 <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Research</div>*/
/*                 <div class="pad10A">*/
/*                     <form id="demo-form" action="" class="col-md-12" method="post">*/
/*                         <div class="form-row">*/
/*                             */
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                    Username:*/
/*                                 </label>*/
/*                             </div>*/
/*                            */
/*                            */
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                     Test Name:*/
/*                                 </label>*/
/*                             </div>*/
/*                             */
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                     Test Date From:*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                   To:*/
/*                                 </label>*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             */
/*                             <div class="form-input col-md-3">*/
/*                                 <input  type="text"  name="username">*/
/*                             </div>*/
/*                             */
/*                             <div class="form-input col-md-3">*/
/*                                 <input type="text"  name="testName">*/
/*                             </div>*/
/*                             */
/*                              <div class="form-input col-md-3">*/
/*                                  <input type="text" size="10" class="fromDate" name="from">*/
/*                             </div>*/
/*                             <div class="form-input col-md-3">*/
/*                                <input type="text" size="10" class="toDate" name="to">*/
/*                             </div>*/
/*                             */
/*                         </div>*/
/*                        */
/*                         <div class="form-row">*/
/*                             */
/*                               <div class="form-label col-md-3">*/
/*                                 <label for="">*/
/*                                  Remark:*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                        <div class="form-row">*/
/*                            */
/*                            */
/*                            <div class="form-input col-md-3">*/
/*                                <select id="" data-placeholder="Choose remark..." class="chosen-select" name="remark">*/
/*                                    <option value=""></option> */
/*                                    <option value="corrected">corrected</option>*/
/*                                    <option value="need correction">need correction</option>*/
/*                                </select>*/
/*                            </div>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="divider"></div>*/
/*                         <div class="form-row">*/
/*                             <input type="hidden" name="superhidden" id="superhidden">*/
/*                             <div class="col-md-4 col-md-offset-4">*/
/*                                 <input type="submit" value="submit" class="btn medium primary-bg radius-all-4" />*/
/*                             </div>*/
/* */
/*                         </div>*/
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
