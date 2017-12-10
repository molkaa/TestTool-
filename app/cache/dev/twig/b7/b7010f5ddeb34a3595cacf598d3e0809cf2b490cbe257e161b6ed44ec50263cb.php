<?php

/* TSAdminBundle:Candidate:manyViewTest.html.twig */
class __TwigTemplate_f8199813e32026c26601641b621f32135f3842e387f4a6a9296cb2b9a4663eb5 extends Twig_Template
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
        $__internal_bbac9e42dfce20bf1fb48ae45cffcef92f0c4e0dec46ef882167a7d9633a777b = $this->env->getExtension("native_profiler");
        $__internal_bbac9e42dfce20bf1fb48ae45cffcef92f0c4e0dec46ef882167a7d9633a777b->enter($__internal_bbac9e42dfce20bf1fb48ae45cffcef92f0c4e0dec46ef882167a7d9633a777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:manyViewTest.html.twig"));

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
        echo "
</div>
<br>
<div class=\"form-row pad0B\">

    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio\">
            ";
        // line 26
        $context["i"] = 0;
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 28
            echo "                <input  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\" type=\"checkbox\" 
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["candidateResponse"]) {
                // line 30
                echo "                            ";
                if ((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) && ($this->getAttribute($context["candidateResponse"], "response", array()) === $this->getAttribute($context["response"], "response", array())))) {
                    // line 31
                    echo "                                checked
                            ";
                }
                // line 33
                echo "                            ";
                if (((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) && ($this->getAttribute($context["candidateResponse"], "response", array()) === $this->getAttribute($context["response"], "response", array()))) && ($this->getAttribute($context["response"], "CorrectAnswer", array()) === "yes"))) {
                    // line 34
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    echo "    
                            ";
                }
                // line 36
                echo "                            ";
                if (((($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array())) && ($this->getAttribute($context["candidateResponse"], "response", array()) === $this->getAttribute($context["response"], "response", array()))) && ($this->getAttribute($context["response"], "CorrectAnswer", array()) === "no"))) {
                    // line 37
                    echo "                                ";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) - 1);
                    echo "    
                            ";
                }
                // line 39
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidateResponse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "[]\">
                ";
            // line 41
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) > 0)) {
                // line 42
                echo "                    <label class=\"font-green\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label>


                ";
            } elseif ((            // line 45
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 0)) {
                // line 46
                echo "                    <label class=\"font-red\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label>

                ";
            } elseif (((            // line 48
(isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0) && ($this->getAttribute($context["response"], "CorrectAnswer", array()) === "yes"))) {
                // line 49
                echo "                    <label class=\"font-green\" for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label>
                ";
            } else {
                // line 51
                echo "                    <label  for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label>

                ";
            }
            // line 54
            echo "                ";
            $context["i"] = 0;
            // line 55
            echo "                <br/>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </div>
    </div>
</div>


<div class=\"divider\" ></div>
</div>
";
        
        $__internal_bbac9e42dfce20bf1fb48ae45cffcef92f0c4e0dec46ef882167a7d9633a777b->leave($__internal_bbac9e42dfce20bf1fb48ae45cffcef92f0c4e0dec46ef882167a7d9633a777b_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:manyViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  168 => 55,  165 => 54,  156 => 51,  148 => 49,  146 => 48,  138 => 46,  136 => 45,  127 => 42,  125 => 41,  120 => 40,  114 => 39,  108 => 37,  105 => 36,  99 => 34,  96 => 33,  92 => 31,  89 => 30,  85 => 29,  80 => 28,  75 => 27,  73 => 26,  64 => 19,  55 => 16,  53 => 15,  46 => 13,  43 => 12,  34 => 9,  32 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/manyTest.html.twig #}*/
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
/* */
/* </div>*/
/* <br>*/
/* <div class="form-row pad0B">*/
/* */
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio">*/
/*             {% set i = 0 %}*/
/*             {% for response in question.responses %}*/
/*                 <input  value="{{response.response}}" type="checkbox" */
/*                         {% for candidateResponse in test.responses %}*/
/*                             {% if ((candidateResponse.questionId is same as (question.id))and (candidateResponse.response is same as (response.response))) %}*/
/*                                 checked*/
/*                             {% endif %}*/
/*                             {% if ((candidateResponse.questionId is same as (question.id))and (candidateResponse.response is same as (response.response)) and (response.CorrectAnswer is sameas("yes") )) %}*/
/*                                 {% set i = i+1%}    */
/*                             {% endif %}*/
/*                             {% if ((candidateResponse.questionId is same as (question.id))and (candidateResponse.response is same as (response.response)) and (response.CorrectAnswer is sameas("no") )) %}*/
/*                                 {% set i= i-1%}    */
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         name="{{question.id}}[]">*/
/*                 {% if i>0 %}*/
/*                     <label class="font-green" for="{{question.id}}">{{response.response}}</label>*/
/* */
/* */
/*                 {% elseif i<0 %}*/
/*                     <label class="font-red" for="{{question.id}}">{{response.response}}</label>*/
/* */
/*                 {% elseif i==0 and response.CorrectAnswer is  same as("yes") %}*/
/*                     <label class="font-green" for="{{question.id}}">{{response.response}}</label>*/
/*                 {% else %}*/
/*                     <label  for="{{question.id}}">{{response.response}}</label>*/
/* */
/*                 {% endif %}*/
/*                 {% set i = 0 %}*/
/*                 <br/>*/
/* */
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="divider" ></div>*/
/* </div>*/
/* */
