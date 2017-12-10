<?php

/* TSAdminBundle:Candidate:descriptionTest.html.twig */
class __TwigTemplate_a1699af2e2f3b9ab3511581c8390195dd68bc5a1ddd0e461e9c63e276752ddfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "TSAdminBundle:Candidate:descriptionTest.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle:Candidate:candidatTests.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2c9e735124236830fd9e7e71914bd3a733904adda53bda377c801c6b9296e97 = $this->env->getExtension("native_profiler");
        $__internal_e2c9e735124236830fd9e7e71914bd3a733904adda53bda377c801c6b9296e97->enter($__internal_e2c9e735124236830fd9e7e71914bd3a733904adda53bda377c801c6b9296e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:descriptionTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2c9e735124236830fd9e7e71914bd3a733904adda53bda377c801c6b9296e97->leave($__internal_e2c9e735124236830fd9e7e71914bd3a733904adda53bda377c801c6b9296e97_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c3497d8d0201043dc04db8068028fc8825ee3afa7a5d7f07bc53e7d8744eca26 = $this->env->getExtension("native_profiler");
        $__internal_c3497d8d0201043dc04db8068028fc8825ee3afa7a5d7f07bc53e7d8744eca26->enter($__internal_c3497d8d0201043dc04db8068028fc8825ee3afa7a5d7f07bc53e7d8744eca26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "   
 
        
    <form class=\"col-md-10 center-margin\" method=\"post\" id='myform' >
        ";
        // line 10
        echo "


        <div class=\"content-box mrg25B\" style=\"margin-top: 100px;\" >
            <h3 class=\"content-box-header primary-bg\">
                <span>Sungard's Quiz</span>
            </h3>

            <div class=\"content-box-wrapper\">
               
                <div class=\"float-right\">
                    
                            <span><b>Note:</b></span>
                       
                        <div class=\"content-box-wrapper\">
                            <i class=\"glyph-icon icon-caret-right\"></i> Test will be submitted automatically if the time expired.<br><br>
                            <i class=\"glyph-icon icon-caret-right\"></i> Don't refresh the page.

                        
                    </div>
                            
                </div>
                <span class=\"font-blue\" title=\"Horia Simon\">Instruction :</span><br><br>
                <i class=\"glyph-icon icon-angle-right\"></i> Total number of questions :";
        // line 33
        if (($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "Customized", array()) === "no")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "questions", array())), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "numberQuestions", array()), "html", null, true);
            echo " ";
        }
        // line 34
        echo "                <br><br>
                <i class=\"glyph-icon icon-angle-right\"></i> Time alloted : <span class=\"time\"><i class=\"fa fa-clock-o\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "time", array()), "html", null, true);
        echo " minutes.</span>                   
                <li>
                    <br>

                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_candidateTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))), "html", null, true);
        echo "\" title=\"\" >
                        <i class=\"glyph-icon icon-chevron-right\"></i>
                        Start Quiz
                    </a>
                </li>

            </div>


        </div>





    </form>
                
     
    
";
        
        $__internal_c3497d8d0201043dc04db8068028fc8825ee3afa7a5d7f07bc53e7d8744eca26->leave($__internal_c3497d8d0201043dc04db8068028fc8825ee3afa7a5d7f07bc53e7d8744eca26_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:descriptionTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 39,  84 => 35,  81 => 34,  71 => 33,  46 => 10,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/CandidateTest.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/*            */
/* {% block content %}*/
/*    */
/*  */
/*         */
/*     <form class="col-md-10 center-margin" method="post" id='myform' >*/
/*         {#                //************************************************#}*/
/* */
/* */
/* */
/*         <div class="content-box mrg25B" style="margin-top: 100px;" >*/
/*             <h3 class="content-box-header primary-bg">*/
/*                 <span>Sungard's Quiz</span>*/
/*             </h3>*/
/* */
/*             <div class="content-box-wrapper">*/
/*                */
/*                 <div class="float-right">*/
/*                     */
/*                             <span><b>Note:</b></span>*/
/*                        */
/*                         <div class="content-box-wrapper">*/
/*                             <i class="glyph-icon icon-caret-right"></i> Test will be submitted automatically if the time expired.<br><br>*/
/*                             <i class="glyph-icon icon-caret-right"></i> Don't refresh the page.*/
/* */
/*                         */
/*                     </div>*/
/*                             */
/*                 </div>*/
/*                 <span class="font-blue" title="Horia Simon">Instruction :</span><br><br>*/
/*                 <i class="glyph-icon icon-angle-right"></i> Total number of questions :{%if(test.Customized) is sameas("no")%} {{test.questions | length }} {%else%} {{test.TestStatestics.numberQuestions}} {%endif%}*/
/*                 <br><br>*/
/*                 <i class="glyph-icon icon-angle-right"></i> Time alloted : <span class="time"><i class="fa fa-clock-o"></i> {{ test.time }} minutes.</span>                   */
/*                 <li>*/
/*                     <br>*/
/* */
/*                     <a href="{{path('ts_admin_candidateTest', {'id':test.id})}}" title="" >*/
/*                         <i class="glyph-icon icon-chevron-right"></i>*/
/*                         Start Quiz*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/*     </form>*/
/*                 */
/*      */
/*     */
/* {% endblock %}*/
/* */
