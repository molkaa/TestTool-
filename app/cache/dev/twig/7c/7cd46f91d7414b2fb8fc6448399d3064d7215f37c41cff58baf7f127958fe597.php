<?php

/* @TSAdmin/Candidate/numericViewTest.html.twig */
class __TwigTemplate_b22a76790176a8e644c4d03c8b9944300e2df40de04625695bffcfe20665a543 extends Twig_Template
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
        $__internal_6a1b2da57193bb85ab988fb67322537cf069d219c4da6ac1ce73ed5c879f6760 = $this->env->getExtension("native_profiler");
        $__internal_6a1b2da57193bb85ab988fb67322537cf069d219c4da6ac1ce73ed5c879f6760->enter($__internal_6a1b2da57193bb85ab988fb67322537cf069d219c4da6ac1ce73ed5c879f6760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/numericViewTest.html.twig"));

        // line 2
        echo "<div id=\"questionone";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
    <u><b>Question :</b></u>
    <br>
    <br>
    <div class=\"col-md-12\">  
        
        ";
        // line 8
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
            // line 9
            echo "            <b id=\"introduction";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
            echo "</b> 
            <br/>
        ";
        }
        // line 12
        echo "
        <p style=\"font-weight: bold\" id=\"text";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
        echo "</p>
        <br>
        ";
        // line 15
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
            // line 16
            echo "            <img height=\"400\" width=\"600\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
            echo "\">
            <br><br>
        ";
        }
        // line 19
        echo "</div>
<br><br>
<h5>Candidat Answer</h5>
<div class=\"form-row\">
    <div class=\"col-md-8\">
        ";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidateResponse"]) {
            echo "  
            ";
            // line 26
            if ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "value", array()) === $this->getAttribute($context["candidateResponse"], "response", array())))) {
                // line 27
                echo "                <div class=\"form-label col-md-4\">
                    <label class=\"font-blue\">
                        ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "response", array()), "html", null, true);
                echo "
                    </label>
                </div>

                <div class=\"form-input col-md-8\">
                    <input value=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "response", array()), "html", null, true);
                echo "\" placeholder=\"\"  style=\"color:green ;\" class=\"col-md-12\" type=\"text\" >
                </div>
                ";
                // line 36
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 37
                echo "            ";
            } elseif ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) &&  !($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "value", array()) === $this->getAttribute($context["candidateResponse"], "response", array())))) {
                // line 38
                echo "                <div class=\"form-label col-md-4\">
                    <label class=\"font-blue\">
                        ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "response", array()), "html", null, true);
                echo "
                    </label>
                </div>

                <div class=\"form-input col-md-8\">
                    <input value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "response", array()), "html", null, true);
                echo "\" placeholder=\"\" style=\"color: red;\"class=\"col-md-12\" type=\"text\" >
                </div>
                ";
                // line 47
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 48
                echo "            ";
            }
            // line 49
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidateResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>        
</div>
<h5>Correct Answer</h5>
<div class=\"form-row\">
    <div class=\"col-md-8\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 56
            echo "            <div class=\"form-label col-md-4\">
                <label class=\"font-blue\" for=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "
                </label>
            </div>
            <div class=\"form-input col-md-8\">
                <input value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "value", array()), "html", null, true);
            echo "\" id=\"numeric";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" placeholder=\"\" class=\"col-md-12\" type=\"text\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo "\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
</div>
<br>
<div class=\"divider\" ></div>
</div>
";
        
        $__internal_6a1b2da57193bb85ab988fb67322537cf069d219c4da6ac1ce73ed5c879f6760->leave($__internal_6a1b2da57193bb85ab988fb67322537cf069d219c4da6ac1ce73ed5c879f6760_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/numericViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 65,  157 => 62,  150 => 58,  146 => 57,  143 => 56,  139 => 55,  126 => 49,  123 => 48,  121 => 47,  116 => 45,  108 => 40,  104 => 38,  101 => 37,  99 => 36,  94 => 34,  86 => 29,  82 => 27,  80 => 26,  73 => 25,  71 => 24,  64 => 19,  55 => 16,  53 => 15,  46 => 13,  43 => 12,  34 => 9,  32 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/numericEditTest.html.twig #}*/
/* <div id="questionone{{question.id}}">*/
/*     <u><b>Question :</b></u>*/
/*     <br>*/
/*     <br>*/
/*     <div class="col-md-12">  */
/*         */
/*         {% if question.introduction is not null %}*/
/*             <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*             <br/>*/
/*         {% endif %}*/
/* */
/*         <p style="font-weight: bold" id="text{{question.id}}">{{ question.text|raw}}</p>*/
/*         <br>*/
/*         {% if question.questionPicture is not null %}*/
/*             <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*             <br><br>*/
/*         {% endif %}*/
/* </div>*/
/* <br><br>*/
/* <h5>Candidat Answer</h5>*/
/* <div class="form-row">*/
/*     <div class="col-md-8">*/
/*         {% set i = 0 %}*/
/*         {% for candidateResponse in test.responses %}  */
/*             {% if (candidateResponse.questionId is same as (question.id)) and (question.responses[i].value is sameas (candidateResponse.response)) %}*/
/*                 <div class="form-label col-md-4">*/
/*                     <label class="font-blue">*/
/*                         {{question.responses[i].response}}*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="form-input col-md-8">*/
/*                     <input value="{{candidateResponse.response}}" placeholder=""  style="color:green ;" class="col-md-12" type="text" >*/
/*                 </div>*/
/*                 {% set i=i+1 %}*/
/*             {% elseif (candidateResponse.questionId is same as (question.id)) and (question.responses[i].value is not  sameas (candidateResponse.response)) %}*/
/*                 <div class="form-label col-md-4">*/
/*                     <label class="font-blue">*/
/*                         {{question.responses[i].response}}*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 <div class="form-input col-md-8">*/
/*                     <input value="{{candidateResponse.response}}" placeholder="" style="color: red;"class="col-md-12" type="text" >*/
/*                 </div>*/
/*                 {% set i=i+1 %}*/
/*             {% endif %}*/
/*         {% endfor %} */
/*     </div>        */
/* </div>*/
/* <h5>Correct Answer</h5>*/
/* <div class="form-row">*/
/*     <div class="col-md-8">*/
/*         {% for response in question.responses %}*/
/*             <div class="form-label col-md-4">*/
/*                 <label class="font-blue" for="{{question.id}}">*/
/*                     {{response.response}}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-input col-md-8">*/
/*                 <input value="{{response.value}}" id="numeric{{response.id}}{{question.id}}" placeholder="" class="col-md-12" type="text" name="{{question.id}}+{{response.id}}">*/
/*             </div>*/
/*         {%endfor %}*/
/*     </div>*/
/* </div>*/
/* <br>*/
/* <div class="divider" ></div>*/
/* </div>*/
/* */
