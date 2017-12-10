<?php

/* TSAdminBundle:Candidate:menuViewTest.html.twig */
class __TwigTemplate_f23c6715189efe1731d6a5e1b3f538d50de7cb3735d9c100865f1111faa74a8e extends Twig_Template
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
        $__internal_4d2d8d276b3d1db8f65bd358b0473df7971786508b0b16a9e7fe514b98232f01 = $this->env->getExtension("native_profiler");
        $__internal_4d2d8d276b3d1db8f65bd358b0473df7971786508b0b16a9e7fe514b98232f01->enter($__internal_4d2d8d276b3d1db8f65bd358b0473df7971786508b0b16a9e7fe514b98232f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:menuViewTest.html.twig"));

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




<h5>Candidat Answer</h5>
<div class=\"form-row pad0B\">
    <div class=\"form-input col-md-10\">
        
        <select  id=\"select";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  multiple  class=\"chosen-select\"   >
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidateResponse"]) {
            echo "  

                ";
            // line 34
            if (($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))) {
                // line 35
                echo "                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                    // line 36
                    echo "                          ";
                    if ((($this->getAttribute($context["candidateResponse"], "response", array()) === $this->getAttribute($context["response"], "response", array())) && ($this->getAttribute($context["response"], "CorrectAnswer", array()) === "yes"))) {
                        // line 37
                        echo "                              <option style=\"color: blue;\"  

                            selected

                            >";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "response", array()), "html", null, true);
                        echo "</option>
                              ";
                    }
                    // line 43
                    echo "                        ";
                    if ((($this->getAttribute($context["candidateResponse"], "response", array()) === $this->getAttribute($context["response"], "response", array())) && ($this->getAttribute($context["response"], "CorrectAnswer", array()) === "no"))) {
                        // line 44
                        echo "                            <option style=\"color: red;\" value=\"\" 

                            selected

                            >";
                        // line 48
                        echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "response", array()), "html", null, true);
                        echo "</option>
                       ";
                    }
                    // line 50
                    echo "                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
                ";
            }
            // line 52
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidateResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </select>
    </div>

</div>


<h5>Correct Answer</h5>
<div class=\"form-row pad0B\">
    <div class=\"form-input col-md-10\">
        <select  id=\"select";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  multiple name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "[]\" class=\"chosen-select\"   onchange=\"tickselect(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ");\">
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 64
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\"
                        ";
            // line 65
            if (($this->getAttribute($context["response"], "CorrectAnswer", array()) === "yes")) {
                // line 66
                echo "                            selected
                        ";
            }
            // line 68
            echo "                        >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </select>
    </div>

</div>            
<br/>
<div class=\"divider\" ></div>
</div>

        
        
        
        
        
        
        
        ";
        
        $__internal_4d2d8d276b3d1db8f65bd358b0473df7971786508b0b16a9e7fe514b98232f01->leave($__internal_4d2d8d276b3d1db8f65bd358b0473df7971786508b0b16a9e7fe514b98232f01_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:menuViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 70,  173 => 68,  169 => 66,  167 => 65,  162 => 64,  158 => 63,  150 => 62,  133 => 52,  124 => 50,  119 => 48,  113 => 44,  110 => 43,  105 => 41,  99 => 37,  96 => 36,  91 => 35,  89 => 34,  82 => 32,  78 => 31,  64 => 19,  55 => 16,  53 => 15,  46 => 13,  43 => 12,  34 => 9,  32 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/menuTest.html.twig #}*/
/* <div id="questionone{{question.id}}">*/
/*     <u><b>Question :</b></u>*/
/*     <br>*/
/*     <br>*/
/*     <div class="col-md-12">  */
/*          */
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
/* */
/* <br>*/
/* */
/* */
/* */
/* */
/* <h5>Candidat Answer</h5>*/
/* <div class="form-row pad0B">*/
/*     <div class="form-input col-md-10">*/
/*         */
/*         <select  id="select{{question.id}}"  multiple  class="chosen-select"   >*/
/*             {% for candidateResponse in test.responses %}  */
/* */
/*                 {% if candidateResponse.questionId is same as (question.id) %}*/
/*                      {% for response in question.responses %}*/
/*                           {% if (candidateResponse.response is same as (response.response)) and (response.CorrectAnswer is same as ("yes"))  %}*/
/*                               <option style="color: blue;"  */
/* */
/*                             selected*/
/* */
/*                             >{{candidateResponse.response}}</option>*/
/*                               {% endif %}*/
/*                         {% if (candidateResponse.response is same as (response.response)) and (response.CorrectAnswer is same as ("no"))  %}*/
/*                             <option style="color: red;" value="" */
/* */
/*                             selected*/
/* */
/*                             >{{candidateResponse.response}}</option>*/
/*                        {%endif %}*/
/*                    {% endfor %} */
/*                 {% endif %}*/
/*             {% endfor %} */
/*         </select>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* <h5>Correct Answer</h5>*/
/* <div class="form-row pad0B">*/
/*     <div class="form-input col-md-10">*/
/*         <select  id="select{{question.id}}"  multiple name="{{question.id}}[]" class="chosen-select"   onchange="tickselect({{question.id}});">*/
/*             {%for response in question.responses%}*/
/*                 <option value="{{response.response}}"*/
/*                         {% if (response.CorrectAnswer is sameas("yes")) %}*/
/*                             selected*/
/*                         {% endif %}*/
/*                         >{{response.response}}</option>*/
/*             {%endfor %}*/
/*         </select>*/
/*     </div>*/
/* */
/* </div>            */
/* <br/>*/
/* <div class="divider" ></div>*/
/* </div>*/
/* */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         {#*/
/*         <h5>Candidat Answer</h5>*/
/* <div class="form-row pad0B">*/
/*     <div class="form-input col-md-10">*/
/*         {% set i = 0 %}*/
/*         <select  id="select{{question.id}}"  multiple  class="chosen-select"   >*/
/*             {% for candidateResponse in test.responses %}  */
/* */
/*                 {% if candidateResponse.questionId is same as (question.id) %}*/
/*                     <option value=""*/
/* */
/*                             selected*/
/* */
/*                             >{{candidateResponse.response}}</option>*/
/*                     */
/*                 {%endif%}*/
/*             {%endfor%} */
/*         </select>*/
/*     </div>*/
/* */
/* </div>*/
/*         #}*/
