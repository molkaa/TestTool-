<?php

/* @TSAdmin/Candidate/oneViewTest.html.twig */
class __TwigTemplate_ba68548b8d9d406cd5264518aebf0454131a3da5f370514aef458d269854cc55 extends Twig_Template
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
        $__internal_fe9bd599228bf3c364c49248dbddd66c308e0d7583bf8139bfc69064a83a9993 = $this->env->getExtension("native_profiler");
        $__internal_fe9bd599228bf3c364c49248dbddd66c308e0d7583bf8139bfc69064a83a9993->enter($__internal_fe9bd599228bf3c364c49248dbddd66c308e0d7583bf8139bfc69064a83a9993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/oneViewTest.html.twig"));

        // line 2
        echo " 
<div id=\"questionone";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
    <u><b>Question :</b></u>
    <br>
    <br>
    <div class=\"col-md-12\">  

        
        ";
        // line 10
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
            // line 11
            echo "            <b id=\"introduction";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
            echo "</b> 
            <br/>
        ";
        }
        // line 14
        echo "
        <p style=\"font-weight: bold\" id=\"text";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
        echo "</p>
        <br>
        ";
        // line 17
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
            // line 18
            echo "            <img height=\"400\" width=\"600\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
            echo "\">
            <br><br>
        ";
        }
        // line 21
        echo "   

</div>
<div class=\"form-row pad0B\">
    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 28
            echo "                ";
            echo " 
                ";
            // line 29
            if ((($this->getAttribute($context["response"], "CorrectAnswer", array()) === "yes") &&  !($this->getAttribute((isset($context["candidateResponse"]) ? $context["candidateResponse"] : $this->getContext($context, "candidateResponse")), "response", array()) === $this->getAttribute($context["response"], "response", array())))) {
                // line 30
                echo "                    <input id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                    <i> <label class=\"font-green\" for=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label></i>
                    <br/>
                    ";
                // line 33
                echo " 
                ";
            } elseif ((($this->getAttribute(            // line 34
$context["response"], "CorrectAnswer", array()) === "no") &&  !($this->getAttribute((isset($context["candidateResponse"]) ? $context["candidateResponse"] : $this->getContext($context, "candidateResponse")), "response", array()) === $this->getAttribute($context["response"], "response", array())))) {
                // line 35
                echo "                    <input id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                    <i> <label  for=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label></i>
                    <br/>
                    ";
                // line 38
                echo " 
                ";
            } elseif ((($this->getAttribute(            // line 39
$context["response"], "CorrectAnswer", array()) === "yes") && ($this->getAttribute((isset($context["candidateResponse"]) ? $context["candidateResponse"] : $this->getContext($context, "candidateResponse")), "response", array()) === $this->getAttribute($context["response"], "response", array())))) {
                // line 40
                echo "                    <input checked=\"true\" id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                    <i> <label class=\"font-green\" for=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label></i>
                    <br/>
                    ";
                // line 43
                echo " 
                ";
            } elseif ((($this->getAttribute(            // line 44
$context["response"], "CorrectAnswer", array()) === "no") && ($this->getAttribute((isset($context["candidateResponse"]) ? $context["candidateResponse"] : $this->getContext($context, "candidateResponse")), "response", array()) === $this->getAttribute($context["response"], "response", array())))) {
                // line 45
                echo "                    <input checked=\"true\" id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                    <i> <label class=\"font-red\" for=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label></i>
                    <br/>
                ";
            }
            // line 49
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>
    </div>
</div>
<br>
<div class=\"divider\" ></div>
</div>
";
        
        $__internal_fe9bd599228bf3c364c49248dbddd66c308e0d7583bf8139bfc69064a83a9993->leave($__internal_fe9bd599228bf3c364c49248dbddd66c308e0d7583bf8139bfc69064a83a9993_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/oneViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 50,  185 => 49,  177 => 46,  163 => 45,  161 => 44,  158 => 43,  151 => 41,  137 => 40,  135 => 39,  132 => 38,  125 => 36,  111 => 35,  109 => 34,  106 => 33,  99 => 31,  85 => 30,  83 => 29,  79 => 28,  75 => 27,  67 => 21,  58 => 18,  56 => 17,  49 => 15,  46 => 14,  37 => 11,  35 => 10,  25 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/oneTest.html.twig #}*/
/*  */
/* <div id="questionone{{question.id}}">*/
/*     <u><b>Question :</b></u>*/
/*     <br>*/
/*     <br>*/
/*     <div class="col-md-12">  */
/* */
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
/*    */
/* */
/* </div>*/
/* <div class="form-row pad0B">*/
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio">*/
/*             {% for response in question.responses %}*/
/*                 {#reponse correct de question#} */
/*                 {%if (response.CorrectAnswer is same as ("yes")) and (candidateResponse.response is not same as (response.response)) %}*/
/*                     <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                     <i> <label class="font-green" for="{{question.id}}">{{response.response}}</label></i>*/
/*                     <br/>*/
/*                     {#reponse incorrect de question#} */
/*                 {%elseif (response.CorrectAnswer is same as ("no")) and (candidateResponse.response is not same as (response.response)) %}*/
/*                     <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                     <i> <label  for="{{question.id}}">{{response.response}}</label></i>*/
/*                     <br/>*/
/*                     {#reponse correct du candidat#} */
/*                 {%elseif (response.CorrectAnswer is same as ("yes")) and (candidateResponse.response is same as (response.response))  %}*/
/*                     <input checked="true" id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                     <i> <label class="font-green" for="{{question.id}}">{{response.response}}</label></i>*/
/*                     <br/>*/
/*                     {#reponse incorrect du candidat#} */
/*                 {%elseif (response.CorrectAnswer is same as ("no")) and (candidateResponse.response is same as (response.response))  %}*/
/*                     <input checked="true" id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                     <i> <label class="font-red" for="{{question.id}}">{{response.response}}</label></i>*/
/*                     <br/>*/
/*                 {% endif %}*/
/*             {%endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <br>*/
/* <div class="divider" ></div>*/
/* </div>*/
/* */
