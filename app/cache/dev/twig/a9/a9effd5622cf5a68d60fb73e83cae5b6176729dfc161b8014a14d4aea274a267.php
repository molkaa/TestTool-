<?php

/* TSAdminBundle:Candidate:manyTest.html.twig */
class __TwigTemplate_fabea30d82d3e370e240056bbb9f0e6a49b6dd7dbb0c496055b4964b573f2f39 extends Twig_Template
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
        $__internal_5e33f2814d36c267f1313990f50b1fada19cbf28a1878c46a6ed8883a7046b17 = $this->env->getExtension("native_profiler");
        $__internal_5e33f2814d36c267f1313990f50b1fada19cbf28a1878c46a6ed8883a7046b17->enter($__internal_5e33f2814d36c267f1313990f50b1fada19cbf28a1878c46a6ed8883a7046b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:manyTest.html.twig"));

        // line 2
        echo " <div id=\"questionone";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
<u><b>Question ";
        // line 3
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
            <br><br><br><br>
    ";
        }
        // line 24
        echo "    
</div>

    
<div class=\"form-row pad0B\">

    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio\">
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 33
            echo "                <input id=\"response";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "[]\" onclick=\"tickrep(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo ");\">
                <label  class=\"font-blue\" for=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</label>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
    </div>
      
        <div style=\"margin-left: 600px\" class=\"form-checkbox-radio col-md-9\">
    <input type=\"checkbox\" name=\"\"  id=\"checkbox";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  onclick=\"tick(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ");\">
                            <label class=\"font-gray-dark\" for=\"\">Tick to review later</label>
</div>
        
</div>
        
       
        
        
<div class=\"divider\" ></div>

<script src=\"/TestTool/web/js/tick.js\"></script>  ";
        
        $__internal_5e33f2814d36c267f1313990f50b1fada19cbf28a1878c46a6ed8883a7046b17->leave($__internal_5e33f2814d36c267f1313990f50b1fada19cbf28a1878c46a6ed8883a7046b17_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:manyTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 41,  119 => 37,  108 => 34,  94 => 33,  90 => 32,  80 => 24,  71 => 21,  69 => 20,  61 => 17,  55 => 16,  49 => 13,  46 => 12,  39 => 9,  37 => 8,  27 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/manyTest.html.twig #}*/
/*  <div id="questionone{{question.id}}">*/
/* <u><b>Question {{loop.index}}/{{questions|length}} :</b></u>*/
/* <br>*/
/* <br>*/
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
/*             <br><br><br><br>*/
/*     {% endif %}*/
/*     */
/* </div>*/
/* */
/*     */
/* <div class="form-row pad0B">*/
/* */
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio">*/
/*             {% for response in question.responses %}*/
/*                 <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="checkbox" name="{{question.id}}[]" onclick="tickrep({{response.id}},{{question.id}});">*/
/*                 <label  class="font-blue" for="{{question.id}}">{{response.response}}</label>*/
/*                 <br/>*/
/*             {%endfor %}*/
/*         </div>*/
/*     </div>*/
/*       */
/*         <div style="margin-left: 600px" class="form-checkbox-radio col-md-9">*/
/*     <input type="checkbox" name=""  id="checkbox{{question.id}}"  onclick="tick({{question.id}});">*/
/*                             <label class="font-gray-dark" for="">Tick to review later</label>*/
/* </div>*/
/*         */
/* </div>*/
/*         */
/*        */
/*         */
/*         */
/* <div class="divider" ></div>*/
/* */
/* <script src="/TestTool/web/js/tick.js"></script>  */
