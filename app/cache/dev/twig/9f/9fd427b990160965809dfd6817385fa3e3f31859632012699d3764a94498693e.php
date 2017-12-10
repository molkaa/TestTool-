<?php

/* TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig */
class __TwigTemplate_99d6796025bbd629fe0b4d0790a4103938c326fff4a2fa0b9d080bfa644c784a extends Twig_Template
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
        $__internal_edeb35b31bfffde2131957dc2b632594ffdc0aede61e31b2526ab520c3c22303 = $this->env->getExtension("native_profiler");
        $__internal_edeb35b31bfffde2131957dc2b632594ffdc0aede61e31b2526ab520c3c22303->enter($__internal_edeb35b31bfffde2131957dc2b632594ffdc0aede61e31b2526ab520c3c22303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig"));

        // line 1
        echo "
<div  id=\"ViewTest";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">



    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo " </h3>
    </div>
    <div class=\"modal-body\">


        <div id=\"blockTest\" class=\"row \">

            <div class=\"col-md-12\" style=\"margin-top:0px\" >
                <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
                   
                    <div class=\"content-box-wrapper\">
                        <form class=\"col-md-10 center-margin\" method=\"post\" id='myform' >
                            ";
        // line 23
        $context["Checkquestions"] = array();
        // line 24
        echo "
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "responses", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["candidateResponse"]) {
            // line 26
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 27
                echo "
                                    ";
                // line 28
                if (($this->getAttribute($context["question"], "type", array()) == "one")) {
                    // line 29
                    echo "                                        ";
                    if (($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array()))) {
                        // line 30
                        echo "                                            ";
                        $this->loadTemplate("TSAdminBundle:Candidate:oneViewTest.html.twig", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", 30)->display($context);
                        // line 31
                        echo "                                        ";
                    }
                    // line 32
                    echo "

                                    ";
                } elseif (($this->getAttribute(                // line 34
$context["question"], "type", array()) == "many")) {
                    // line 35
                    echo "                                        ";
                    if ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array())) && !twig_in_filter($this->getAttribute($context["question"], "id", array()), (isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions"))))) {
                        // line 36
                        echo "                                            ";
                        $context["Checkquestions"] = twig_array_merge((isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions")), array(0 => $this->getAttribute($context["question"], "id", array())));
                        // line 37
                        echo "                                            ";
                        $this->loadTemplate("TSAdminBundle:Candidate:manyViewTest.html.twig", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", 37)->display($context);
                        // line 38
                        echo "                                        ";
                    }
                    // line 39
                    echo "

                                    ";
                } elseif (($this->getAttribute(                // line 41
$context["question"], "type", array()) == "menu")) {
                    // line 42
                    echo "                                        ";
                    if ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array())) && !twig_in_filter($this->getAttribute($context["question"], "id", array()), (isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions"))))) {
                        // line 43
                        echo "                                            ";
                        $context["Checkquestions"] = twig_array_merge((isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions")), array(0 => $this->getAttribute($context["question"], "id", array())));
                        // line 44
                        echo "                                            ";
                        $this->loadTemplate("TSAdminBundle:Candidate:menuViewTest.html.twig", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", 44)->display($context);
                        // line 45
                        echo "                                        ";
                    }
                    // line 46
                    echo "

                                    ";
                } elseif (($this->getAttribute(                // line 48
$context["question"], "type", array()) == "numeric")) {
                    // line 49
                    echo "                                        ";
                    if ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array())) && !twig_in_filter($this->getAttribute($context["question"], "id", array()), (isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions"))))) {
                        // line 50
                        echo "                                            ";
                        $context["Checkquestions"] = twig_array_merge((isset($context["Checkquestions"]) ? $context["Checkquestions"] : $this->getContext($context, "Checkquestions")), array(0 => $this->getAttribute($context["question"], "id", array())));
                        // line 51
                        echo "                                            ";
                        $this->loadTemplate("TSAdminBundle:Candidate:numericViewTest.html.twig", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", 51)->display($context);
                        // line 52
                        echo "                                        ";
                    }
                    // line 53
                    echo "

                                    ";
                } elseif (($this->getAttribute(                // line 55
$context["question"], "type", array()) == "free")) {
                    // line 56
                    echo "                                        ";
                    if (($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array()))) {
                        // line 57
                        echo "                                        ";
                        $this->loadTemplate("TSAdminBundle:Candidate:freeViewTest.html.twig", "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", 57)->display($context);
                        // line 58
                        echo "                                        ";
                    }
                    // line 59
                    echo "                                    ";
                }
                // line 60
                echo "
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidateResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
    <div class=\"modal-footer\">



        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



    </div>


</div>

";
        
        $__internal_edeb35b31bfffde2131957dc2b632594ffdc0aede61e31b2526ab520c3c22303->leave($__internal_edeb35b31bfffde2131957dc2b632594ffdc0aede61e31b2526ab520c3c22303_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 63,  193 => 62,  178 => 60,  175 => 59,  172 => 58,  169 => 57,  166 => 56,  164 => 55,  160 => 53,  157 => 52,  154 => 51,  151 => 50,  148 => 49,  146 => 48,  142 => 46,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  128 => 41,  124 => 39,  121 => 38,  118 => 37,  115 => 36,  112 => 35,  110 => 34,  106 => 32,  103 => 31,  100 => 30,  97 => 29,  95 => 28,  92 => 27,  74 => 26,  57 => 25,  54 => 24,  52 => 23,  37 => 11,  25 => 2,  22 => 1,);
    }
}
/* */
/* <div  id="ViewTest{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* */
/* */
/* */
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">{{test.name}} </h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/* */
/* */
/*         <div id="blockTest" class="row ">*/
/* */
/*             <div class="col-md-12" style="margin-top:0px" >*/
/*                 <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*                    */
/*                     <div class="content-box-wrapper">*/
/*                         <form class="col-md-10 center-margin" method="post" id='myform' >*/
/*                             {% set Checkquestions = [] %}*/
/* */
/*                             {% for candidateResponse in test.responses %}*/
/*                                 {% for question in questions %}*/
/* */
/*                                     {% if question.type == ('one') %}*/
/*                                         {% if candidateResponse.questionId is same as (question.id) %}*/
/*                                             {% include "TSAdminBundle:Candidate:oneViewTest.html.twig" %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     {% elseif question.type == ('many') %}*/
/*                                         {% if (candidateResponse.questionId is same as (question.id)) and (question.id not in Checkquestions) %}*/
/*                                             {% set Checkquestions = Checkquestions|merge([question.id]) %}*/
/*                                             {% include "TSAdminBundle:Candidate:manyViewTest.html.twig" %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     {% elseif question.type == ('menu') %}*/
/*                                         {% if (candidateResponse.questionId is same as (question.id)) and (question.id not in Checkquestions) %}*/
/*                                             {% set Checkquestions = Checkquestions|merge([question.id]) %}*/
/*                                             {% include "TSAdminBundle:Candidate:menuViewTest.html.twig" %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     {% elseif question.type == ('numeric') %}*/
/*                                         {% if (candidateResponse.questionId is same as (question.id)) and (question.id not in Checkquestions) %}*/
/*                                             {% set Checkquestions = Checkquestions|merge([question.id]) %}*/
/*                                             {% include "TSAdminBundle:Candidate:numericViewTest.html.twig" %}*/
/*                                         {% endif %}*/
/* */
/* */
/*                                     {% elseif question.type == ('free') %}*/
/*                                         {% if candidateResponse.questionId is same as (question.id) %}*/
/*                                         {% include "TSAdminBundle:Candidate:freeViewTest.html.twig" %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/* */
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/* */
/* */
/*                         </form>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/*     <div class="modal-footer">*/
/* */
/* */
/* */
/*         <button type="button" data-dismiss="modal" aria-hidden="true" class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/* */
