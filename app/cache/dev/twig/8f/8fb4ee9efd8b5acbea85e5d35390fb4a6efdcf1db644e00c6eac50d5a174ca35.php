<?php

/* @TSAdmin/Candidate/descriptionTest.html.twig */
class __TwigTemplate_8151dc5176ea103ee010cbdd40097de3aa9ffccd40e59245a5a32e4c79068557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "@TSAdmin/Candidate/descriptionTest.html.twig", 2);
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
        $__internal_ef84fa993e1c6f92928a4a2d175974adde3c4c883d6cfc58e7bdd116c0843dbe = $this->env->getExtension("native_profiler");
        $__internal_ef84fa993e1c6f92928a4a2d175974adde3c4c883d6cfc58e7bdd116c0843dbe->enter($__internal_ef84fa993e1c6f92928a4a2d175974adde3c4c883d6cfc58e7bdd116c0843dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/descriptionTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef84fa993e1c6f92928a4a2d175974adde3c4c883d6cfc58e7bdd116c0843dbe->leave($__internal_ef84fa993e1c6f92928a4a2d175974adde3c4c883d6cfc58e7bdd116c0843dbe_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_52f43709f74b4657e0bd70f04714977e81ec8c42fae1f68130df9265e16c0c61 = $this->env->getExtension("native_profiler");
        $__internal_52f43709f74b4657e0bd70f04714977e81ec8c42fae1f68130df9265e16c0c61->enter($__internal_52f43709f74b4657e0bd70f04714977e81ec8c42fae1f68130df9265e16c0c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_52f43709f74b4657e0bd70f04714977e81ec8c42fae1f68130df9265e16c0c61->leave($__internal_52f43709f74b4657e0bd70f04714977e81ec8c42fae1f68130df9265e16c0c61_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/descriptionTest.html.twig";
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
