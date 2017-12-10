<?php

/* TSAdminBundle:Candidate:freeViewTest.html.twig */
class __TwigTemplate_7ea7d87edf7b9d7b01ec75ec99cbc995434745479023990c171b356cde1a5b30 extends Twig_Template
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
        $__internal_9ae2334ca40a689653489b070b56cde9706c89c50ff542c613d34ed5ce430033 = $this->env->getExtension("native_profiler");
        $__internal_9ae2334ca40a689653489b070b56cde9706c89c50ff542c613d34ed5ce430033->enter($__internal_9ae2334ca40a689653489b070b56cde9706c89c50ff542c613d34ed5ce430033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:freeViewTest.html.twig"));

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
<h5>Candidat answer</h5>
<div class=\"form-row\">
    <div class=\"form-input col-md-10\">
        <textarea class=\"large-textarea\"   id=\"free";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidateResponse"]) ? $context["candidateResponse"] : $this->getContext($context, "candidateResponse")), "response", array()), "html", null, true);
        echo "</textarea>
    </div>


</div>
<h5>Correct Answer</h5>
<div class=\"form-row\">
    <div class=\"form-input col-md-10\">
        <textarea class=\"large-textarea\"   id=\"free";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" > ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["resp"]) {
            // line 33
            echo "                                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["resp"], "CorrectAnswer", array()), "html", null, true);
            echo "
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</textarea>
    </div>   
</div>

<br>
<div class=\"divider\" ></div>
</div>
";
        
        $__internal_9ae2334ca40a689653489b070b56cde9706c89c50ff542c613d34ed5ce430033->leave($__internal_9ae2334ca40a689653489b070b56cde9706c89c50ff542c613d34ed5ce430033_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:freeViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  94 => 33,  86 => 32,  71 => 24,  64 => 19,  55 => 16,  53 => 15,  46 => 13,  43 => 12,  34 => 9,  32 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/menuTest.html.twig #}*/
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
/* <h5>Candidat answer</h5>*/
/* <div class="form-row">*/
/*     <div class="form-input col-md-10">*/
/*         <textarea class="large-textarea"   id="free{{question.id}}" name="{{question.id}}" >{{candidateResponse.response}}</textarea>*/
/*     </div>*/
/* */
/* */
/* </div>*/
/* <h5>Correct Answer</h5>*/
/* <div class="form-row">*/
/*     <div class="form-input col-md-10">*/
/*         <textarea class="large-textarea"   id="free{{question.id}}" name="{{question.id}}" > {% for resp in question.responses %}*/
/*                                                 {{resp.CorrectAnswer}}*/
/*                                                 {% endfor %}</textarea>*/
/*     </div>   */
/* </div>*/
/* */
/* <br>*/
/* <div class="divider" ></div>*/
/* </div>*/
/* */
