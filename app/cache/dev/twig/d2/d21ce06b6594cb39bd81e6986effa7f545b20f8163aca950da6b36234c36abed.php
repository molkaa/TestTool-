<?php

/* TSAdminBundle:Candidate:oneTest.html.twig */
class __TwigTemplate_8a4fef6bd22733cad1f4a9963eb12fc91201462eb1b07c41800b926a263d6889 extends Twig_Template
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
        $__internal_8c3f2b90e90fa624a741a2c32cff58a711d164b4a06f39a987afeb51672ec802 = $this->env->getExtension("native_profiler");
        $__internal_8c3f2b90e90fa624a741a2c32cff58a711d164b4a06f39a987afeb51672ec802->enter($__internal_8c3f2b90e90fa624a741a2c32cff58a711d164b4a06f39a987afeb51672ec802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:oneTest.html.twig"));

        // line 1
        echo " <div id=\"questionone";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
<u><b>Question ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions"))), "html", null, true);
        echo " :</b></u>
<br>
<br>
 
<div class=\"col-md-12\">  
   
    ";
        // line 8
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
            // line 9
            echo "        <b id=\"introduction";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"></b> 
        <br/>
    ";
        }
        // line 12
        echo "
<p style=\"font-weight: bold\" id=\"text";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"> </p>
<br>
    <script type = \"text/javascript\">
        \$('b#introduction";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()));
        echo ");
        \$('p#text";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array()));
        echo ");
    </script>
     
   ";
        // line 20
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
            // line 21
            echo "            <img height=\"400\" width=\"600\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
            echo "\">
            <br> <br><br><br>
    ";
        }
        // line 24
        echo "   
</div>


<div class=\"form-row pad0B\">
    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 32
            echo "                <input id=\"response";
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
            echo ");\">
                <i> <label class=\"font-blue\" for=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</label></i>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
<div style=\"margin-left: 600px\" class=\"form-checkbox-radio col-md-9\">
    <input type=\"checkbox\" name=\"\"  id=\"checkbox";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  onclick=\"tick(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ");\">
                            <label class=\"font-gray-dark\" for=\"\">Tick to review later</label>
</div>
        
</div>

<div class=\"divider\" ></div>

<script src=\"/TestTool/web/js/tick.js\"></script>    
</div>";
        
        $__internal_8c3f2b90e90fa624a741a2c32cff58a711d164b4a06f39a987afeb51672ec802->leave($__internal_8c3f2b90e90fa624a741a2c32cff58a711d164b4a06f39a987afeb51672ec802_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:oneTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  119 => 36,  108 => 33,  94 => 32,  90 => 31,  81 => 24,  72 => 21,  70 => 20,  62 => 17,  56 => 16,  50 => 13,  47 => 12,  40 => 9,  38 => 8,  27 => 2,  22 => 1,);
    }
}
/*  <div id="questionone{{question.id}}">*/
/* <u><b>Question {{loop.index}}/{{questions|length}} :</b></u>*/
/* <br>*/
/* <br>*/
/*  */
/* <div class="col-md-12">  */
/*    */
/*     {% if question.introduction is not null %}*/
/*         <b id="introduction{{question.id}}"></b> */
/*         <br/>*/
/*     {% endif %}*/
/* */
/* <p style="font-weight: bold" id="text{{question.id}}"> </p>*/
/* <br>*/
/*     <script type = "text/javascript">*/
/*         $('b#introduction{{question.id}}').append({{ question.introduction|json_encode|raw}});*/
/*         $('p#text{{question.id}}').append({{ question.text|json_encode|raw}});*/
/*     </script>*/
/*      */
/*    {% if question.questionPicture is not null %}*/
/*             <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*             <br> <br><br><br>*/
/*     {% endif %}*/
/*    */
/* </div>*/
/* */
/* */
/* <div class="form-row pad0B">*/
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio">*/
/*             {% for response in question.responses %}*/
/*                 <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}});">*/
/*                 <i> <label class="font-blue" for="{{question.id}}">{{response.response}}</label></i>*/
/*                 <br/>*/
/*             {%endfor %}*/
/*         </div>*/
/*     </div>*/
/* <div style="margin-left: 600px" class="form-checkbox-radio col-md-9">*/
/*     <input type="checkbox" name=""  id="checkbox{{question.id}}"  onclick="tick({{question.id}});">*/
/*                             <label class="font-gray-dark" for="">Tick to review later</label>*/
/* </div>*/
/*         */
/* </div>*/
/* */
/* <div class="divider" ></div>*/
/* */
/* <script src="/TestTool/web/js/tick.js"></script>    */
/* </div>*/
