<?php

/* TSAdminBundle:Tests:customizeTest.html.twig */
class __TwigTemplate_ee86488228da446f4014ff1371b1268c5da80ab19be2171a737e4648bd94e99e extends Twig_Template
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
        $__internal_888cb5d9cd35f4e55ea59707900c8906531a0b9a7e60b801d432702139a8ffaa = $this->env->getExtension("native_profiler");
        $__internal_888cb5d9cd35f4e55ea59707900c8906531a0b9a7e60b801d432702139a8ffaa->enter($__internal_888cb5d9cd35f4e55ea59707900c8906531a0b9a7e60b801d432702139a8ffaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:customizeTest.html.twig"));

        // line 2
        echo "<form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_customizeTest");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"  id=\"customizetest";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" method=\"post\">
   
    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">Customize Test  :  </h3>
    </div>
    <div class=\"modal-body\">

        <div class=\"example-box\">
            <div class=\"example-code\">

                <div class=\"row clearfix\">
                    <div class=\"col-md-3\">
                        <div class=\"chart easyPieChart\" data-percent=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nbr_questions"]) ? $context["nbr_questions"] : $this->getContext($context, "nbr_questions")), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\">
                            <span></span>
                            <canvas width=\"100\" height=\"100\"></canvas></div>
                        <div class=\"text-center pad10T font-size-15 font-gray text-transform-upr\">Number of all questions</div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"chart easyPieChart\" data-percent=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["easy"]) ? $context["easy"] : $this->getContext($context, "easy")), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\">
                            <span></span>%
                            <canvas width=\"100\" height=\"100\"></canvas></div>
                        <div class=\"text-center pad10T font-size-15 font-gray text-transform-upr\">Percentage of all esasy questions</div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"chart easyPieChart\" data-percent=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\">
                            <span></span>%
                            <canvas width=\"100\" height=\"100\"></canvas></div>
                        <div class=\"text-center pad10T font-size-15 font-gray text-transform-upr\">Percentage of all medium questions</div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"chart easyPieChart\" data-percent=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["hard"]) ? $context["hard"] : $this->getContext($context, "hard")), "html", null, true);
        echo "\" style=\"width: 100px; height: 100px; line-height: 100px;\">
                            <span></span>%
                            <canvas width=\"100\" height=\"100\"></canvas></div>
                        <div class=\"text-center pad10T font-size-15 font-gray text-transform-upr\">Percentage of all hard questions</div>
                    </div>
                            
                </div>

            </div>

        </div>


        <div class=\"row\" >
            <div class=\"col-md-12\">
                <div class=\"form-row\" id=\"error_nbr_questions";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" style=\"display: none\">
                <div class=\"infobox error-bg mrg0A\">
                    <p>number of question is greater than <b>";
        // line 53
        echo twig_escape_filter($this->env, ((isset($context["nbr_questions"]) ? $context["nbr_questions"] : $this->getContext($context, "nbr_questions")) - 1), "html", null, true);
        echo " questions or less than 0</b> </p>
                 </div>
                </div>
                 
                <div class=\"form-row\" id=\"error_percentage";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\" >
                <div class=\"infobox error-bg mrg0A \">
                    <p>Percentage of all questions is not equal to <b>100%</b> </p>
                   
                </div>
                </div>
                
                <div class=\"form-row\" id=\"error_comma";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\">
                <div class=\"infobox error-bg mrg0A \"  >
                    <p>Percentage can't be a float </p>
                    
                </div>
                </div>
               
                <div class=\"form-row\" id=\"msg_note";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\" >
                <div class=\"infobox error-bg mrg0A \" >
                    <p>Test Mark must be greater than 0 </p>
                    
                </div>
                </div>
                
                <div class=\"form-row\" id=\"msg_nbr_qst";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\" >
                <div class=\"infobox error-bg mrg0A \" >
                    <p>Number of questions must be greater than 0 </p>
                    
                </div>
                </div>
                
                <div class=\"form-row\" id=\"msg_elim_mark";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\" >
                 <div class=\"infobox error-bg mrg0A \" >
                    <p>Eliminatory mark must be greater than 0  </p>
                   
                </div>
                </div>
                 
                <div class=\"form-row\" id=\"msg_perc_supp";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\"  style=\"display: none\" >
                 <div class=\"infobox error-bg mrg0A \" >
                    <p>Percentage can't be greater than global percentage  </p>
                   
                </div>
                </div>
            </div>

            <div  id=\"checkbox";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "#\" class=\"content-box box-toggle content-box-closed\">
                <h3 class=\"content-box-header ui-state-default\">
                    <span class=\"float-left\">Update default statistics </span>
                    <a class=\"float-right icon-separator btn toggle-button\">
                        <i id=\"checkbox";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" onclick=\"VerifStateEdit(this, 'nbr_questions";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'easy";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'medium";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'hard";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "');\" class=\"glyph-icon icon-toggle icon-chevron-down\"></i>
                    </a>
                </h3>
                <div  class=\"content-box-wrapper\">









                    <div  id=\"big-box#\" class=\"content-box box-toggle\">


                        ";
        // line 120
        if (($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()) == null)) {
            // line 121
            echo "                            
                           <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                       Test Mark 
                                    </label>

                                     <span class=\"required\" style=\"color:red\">*</span>

                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input  type=\"number\" name=\"test_mark\" id=\"test_mark";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" required=\"true\" >
                                </div>

                            </div>
                            
                            <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                       Eliminatory Mark 
                                    </label>

                               <span class=\"required\" style=\"color:red\">*</span>         

                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input  type=\"number\" name=\"elim_mark\" id=\"elim_mark";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" required=\"true\" >
                                </div>

                            </div>
                                
                            <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        Number of questions 
                                    </label>

                                 <span class=\"required\" style=\"color:red\">*</span>

                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"0\" type=\"number\" name=\"nbr_questions\" id=\"nbr_questions";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\"  >
                                </div>

                            </div>


                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2 \">
                                    <label for=\"\">
                                        Percentage of esasy questions (%) :
                                    </label>


                                </div>
                                <div class=\"form-input col-md-6 \">
                                    <input value=\"0\" type=\"number\" name=\"easy\" id=\"easy";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        Percentage of medium questions (%) :
                                    </label>


                                </div>
                                <div class=\"form-input col-md-6\">
                                    <input value=\"0\" type=\"number\" name=\"medium\" id=\"medium";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        percentage of hard questions (%) :

                                    </label>
                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"0\" type=\"number\" name=\"hard\" id=\"hard";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>
                            </div>  
                                   
                        ";
        } else {
            // line 205
            echo "                             <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                       Eliminatory Mark
                                    </label>
                                 <span class=\"required\" style=\"color:red\">*</span>


                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "eliminatoryNote", array()), "html", null, true);
            echo "\" type=\"number\" name=\"elim_mark\" id=\"elim_mark";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\">
                                </div>

                            </div>
                                
                             <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        Test Mark
                                    </label>
                                    <span class=\"required\" style=\"color:red\">*</span>


                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "note", array()), "html", null, true);
            echo "\"  type=\"number\" name=\"test_mark\" id=\"test_mark";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\">
                                </div>

                            </div>

                            <div class=\"form-row\" >
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        Number of questions
                                    </label>
                                    <span class=\"required\" style=\"color:red\">*</span>
                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "numberQuestions", array()), "html", null, true);
            echo "\" type=\"number\" name=\"nbr_questions\" id=\"nbr_questions";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>

                            </div>
                                
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2 \">
                                    <label for=\"\">
                                        Percentage of esasy questions (%) 
                                    </label>


                                </div>
                                <div class=\"form-input col-md-6 \">
                                    <input value=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "percenteasy", array()), "html", null, true);
            echo "\" type=\"number\" name=\"easy\" id=\"easy";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\">
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        Percentage of medium questions (%) 
                                    </label>


                                </div>
                                <div class=\"form-input col-md-6\">
                                    <input value=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "percentMedium", array()), "html", null, true);
            echo "\" type=\"number\" name=\"medium\" id=\"medium";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>
                            </div>
                            <div class=\"form-row\">
                                <div class=\"form-input col-md-2\">
                                    <label for=\"\">
                                        percentage of hard questions (%) 

                                    </label>
                                </div>
                                <div class=\"form-input col-md-6\" >
                                    <input value=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "percentHard", array()), "html", null, true);
            echo "\" type=\"number\" name=\"hard\" id=\"hard";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" >
                                </div>
                            </div>  
                             

                        ";
        }
        // line 286
        echo "


                    </div>




                </div>
            </div>
        </div>

    </div>





    <div class=\"modal-footer\">
        <div class=\"col-md-1 float-right\">
            <input type=\"button\" value=\"Edit\" onclick=\"verifQuestions(";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["nbr_questions"]) ? $context["nbr_questions"] : $this->getContext($context, "nbr_questions")), "html", null, true);
        echo ", 'nbr_questions";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'easy";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'medium";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'hard";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','test_mark";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','elim_mark";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','checkbox";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'error_nbr_questions";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'error_percentage";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','msg_perc_supp";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "', 'error_comma";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','msg_note";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','msg_nbr_qst";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','msg_elim_mark";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','customizetest";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["easy"]) ? $context["easy"] : $this->getContext($context, "easy")), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["hard"]) ? $context["hard"] : $this->getContext($context, "hard")), "html", null, true);
        echo "','";
        echo twig_escape_filter($this->env, (isset($context["medium"]) ? $context["medium"] : $this->getContext($context, "medium")), "html", null, true);
        echo "');\" class=\"btn medium primary-bg\" />

        </div>
        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>








    </div>



</form>


 ";
        // line 325
        $this->loadTemplate("TSAdminBundle:Tests:customizeTestValidation.html.twig", "TSAdminBundle:Tests:customizeTest.html.twig", 325)->display($context);
        echo " 

";
        
        $__internal_888cb5d9cd35f4e55ea59707900c8906531a0b9a7e60b801d432702139a8ffaa->leave($__internal_888cb5d9cd35f4e55ea59707900c8906531a0b9a7e60b801d432702139a8ffaa_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:customizeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 325,  439 => 306,  417 => 286,  406 => 280,  390 => 269,  373 => 257,  354 => 243,  336 => 230,  316 => 215,  304 => 205,  296 => 200,  282 => 189,  267 => 177,  249 => 162,  231 => 147,  213 => 132,  200 => 121,  198 => 120,  171 => 104,  164 => 100,  153 => 92,  143 => 85,  133 => 78,  123 => 71,  113 => 64,  103 => 57,  96 => 53,  91 => 51,  73 => 36,  64 => 30,  55 => 24,  46 => 18,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/editQuestion.html.twig #}*/
/* <form class="left-side" action="{{ path('ts_admin_customizeTest')}}?id={{id}}"  id="customizetest{{test.id}}" method="post">*/
/*    */
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">Customize Test  :  </h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/*         <div class="example-box">*/
/*             <div class="example-code">*/
/* */
/*                 <div class="row clearfix">*/
/*                     <div class="col-md-3">*/
/*                         <div class="chart easyPieChart" data-percent="{{nbr_questions}}" style="width: 100px; height: 100px; line-height: 100px;">*/
/*                             <span></span>*/
/*                             <canvas width="100" height="100"></canvas></div>*/
/*                         <div class="text-center pad10T font-size-15 font-gray text-transform-upr">Number of all questions</div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="chart easyPieChart" data-percent="{{easy}}" style="width: 100px; height: 100px; line-height: 100px;">*/
/*                             <span></span>%*/
/*                             <canvas width="100" height="100"></canvas></div>*/
/*                         <div class="text-center pad10T font-size-15 font-gray text-transform-upr">Percentage of all esasy questions</div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="chart easyPieChart" data-percent="{{medium}}" style="width: 100px; height: 100px; line-height: 100px;">*/
/*                             <span></span>%*/
/*                             <canvas width="100" height="100"></canvas></div>*/
/*                         <div class="text-center pad10T font-size-15 font-gray text-transform-upr">Percentage of all medium questions</div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="chart easyPieChart" data-percent="{{hard}}" style="width: 100px; height: 100px; line-height: 100px;">*/
/*                             <span></span>%*/
/*                             <canvas width="100" height="100"></canvas></div>*/
/*                         <div class="text-center pad10T font-size-15 font-gray text-transform-upr">Percentage of all hard questions</div>*/
/*                     </div>*/
/*                             */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*         <div class="row" >*/
/*             <div class="col-md-12">*/
/*                 <div class="form-row" id="error_nbr_questions{{test.id}}" style="display: none">*/
/*                 <div class="infobox error-bg mrg0A">*/
/*                     <p>number of question is greater than <b>{{nbr_questions - 1}} questions or less than 0</b> </p>*/
/*                  </div>*/
/*                 </div>*/
/*                  */
/*                 <div class="form-row" id="error_percentage{{test.id}}"  style="display: none" >*/
/*                 <div class="infobox error-bg mrg0A ">*/
/*                     <p>Percentage of all questions is not equal to <b>100%</b> </p>*/
/*                    */
/*                 </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="form-row" id="error_comma{{test.id}}"  style="display: none">*/
/*                 <div class="infobox error-bg mrg0A "  >*/
/*                     <p>Percentage can't be a float </p>*/
/*                     */
/*                 </div>*/
/*                 </div>*/
/*                */
/*                 <div class="form-row" id="msg_note{{test.id}}"  style="display: none" >*/
/*                 <div class="infobox error-bg mrg0A " >*/
/*                     <p>Test Mark must be greater than 0 </p>*/
/*                     */
/*                 </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="form-row" id="msg_nbr_qst{{test.id}}"  style="display: none" >*/
/*                 <div class="infobox error-bg mrg0A " >*/
/*                     <p>Number of questions must be greater than 0 </p>*/
/*                     */
/*                 </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="form-row" id="msg_elim_mark{{test.id}}"  style="display: none" >*/
/*                  <div class="infobox error-bg mrg0A " >*/
/*                     <p>Eliminatory mark must be greater than 0  </p>*/
/*                    */
/*                 </div>*/
/*                 </div>*/
/*                  */
/*                 <div class="form-row" id="msg_perc_supp{{test.id}}"  style="display: none" >*/
/*                  <div class="infobox error-bg mrg0A " >*/
/*                     <p>Percentage can't be greater than global percentage  </p>*/
/*                    */
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div  id="checkbox{{test.id}}#" class="content-box box-toggle content-box-closed">*/
/*                 <h3 class="content-box-header ui-state-default">*/
/*                     <span class="float-left">Update default statistics </span>*/
/*                     <a class="float-right icon-separator btn toggle-button">*/
/*                         <i id="checkbox{{test.id}}" onclick="VerifStateEdit(this, 'nbr_questions{{test.id}}', 'easy{{test.id}}', 'medium{{test.id}}', 'hard{{test.id}}');" class="glyph-icon icon-toggle icon-chevron-down"></i>*/
/*                     </a>*/
/*                 </h3>*/
/*                 <div  class="content-box-wrapper">*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                     <div  id="big-box#" class="content-box box-toggle">*/
/* */
/* */
/*                         {% if test.TestStatestics == NULL %}*/
/*                             */
/*                            <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                        Test Mark */
/*                                     </label>*/
/* */
/*                                      <span class="required" style="color:red">*</span>*/
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input  type="number" name="test_mark" id="test_mark{{test.id}}" required="true" >*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             */
/*                             <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                        Eliminatory Mark */
/*                                     </label>*/
/* */
/*                                <span class="required" style="color:red">*</span>         */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input  type="number" name="elim_mark" id="elim_mark{{test.id}}" required="true" >*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                                 */
/*                             <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         Number of questions */
/*                                     </label>*/
/* */
/*                                  <span class="required" style="color:red">*</span>*/
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="0" type="number" name="nbr_questions" id="nbr_questions{{test.id}}"  >*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/* */
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2 ">*/
/*                                     <label for="">*/
/*                                         Percentage of esasy questions (%) :*/
/*                                     </label>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6 ">*/
/*                                     <input value="0" type="number" name="easy" id="easy{{test.id}}" >*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         Percentage of medium questions (%) :*/
/*                                     </label>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6">*/
/*                                     <input value="0" type="number" name="medium" id="medium{{test.id}}" >*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         percentage of hard questions (%) :*/
/* */
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="0" type="number" name="hard" id="hard{{test.id}}" >*/
/*                                 </div>*/
/*                             </div>  */
/*                                    */
/*                         {%else%}*/
/*                              <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                        Eliminatory Mark*/
/*                                     </label>*/
/*                                  <span class="required" style="color:red">*</span>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="{{test.TestStatestics.eliminatoryNote}}" type="number" name="elim_mark" id="elim_mark{{test.id}}">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                                 */
/*                              <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         Test Mark*/
/*                                     </label>*/
/*                                     <span class="required" style="color:red">*</span>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="{{test.TestStatestics.note}}"  type="number" name="test_mark" id="test_mark{{test.id}}">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/*                             <div class="form-row" >*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         Number of questions*/
/*                                     </label>*/
/*                                     <span class="required" style="color:red">*</span>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="{{test.TestStatestics.numberQuestions}}" type="number" name="nbr_questions" id="nbr_questions{{test.id}}" >*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                                 */
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2 ">*/
/*                                     <label for="">*/
/*                                         Percentage of esasy questions (%) */
/*                                     </label>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6 ">*/
/*                                     <input value="{{test.TestStatestics.percenteasy}}" type="number" name="easy" id="easy{{test.id}}">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         Percentage of medium questions (%) */
/*                                     </label>*/
/* */
/* */
/*                                 </div>*/
/*                                 <div class="form-input col-md-6">*/
/*                                     <input value="{{test.TestStatestics.percentMedium}}" type="number" name="medium" id="medium{{test.id}}" >*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-row">*/
/*                                 <div class="form-input col-md-2">*/
/*                                     <label for="">*/
/*                                         percentage of hard questions (%) */
/* */
/*                                     </label>*/
/*                                 </div>*/
/*                                 <div class="form-input col-md-6" >*/
/*                                     <input value="{{test.TestStatestics.percentHard}}" type="number" name="hard" id="hard{{test.id}}" >*/
/*                                 </div>*/
/*                             </div>  */
/*                              */
/* */
/*                         {%endif%}*/
/* */
/* */
/* */
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/*     <div class="modal-footer">*/
/*         <div class="col-md-1 float-right">*/
/*             <input type="button" value="Edit" onclick="verifQuestions({{nbr_questions}}, 'nbr_questions{{test.id}}', 'easy{{test.id}}', 'medium{{test.id}}', 'hard{{test.id}}','test_mark{{test.id}}','elim_mark{{test.id}}','checkbox{{test.id}}', 'error_nbr_questions{{test.id}}', 'error_percentage{{test.id}}','msg_perc_supp{{test.id}}', 'error_comma{{test.id}}','msg_note{{test.id}}','msg_nbr_qst{{test.id}}','msg_elim_mark{{test.id}}','customizetest{{test.id}}','{{easy}}','{{hard}}','{{medium}}');" class="btn medium primary-bg" />*/
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
/*     </div>*/
/* */
/* */
/* */
/* </form>*/
/* */
/* */
/*  {% include "TSAdminBundle:Tests:customizeTestValidation.html.twig"  %} */
/* */
/* */
