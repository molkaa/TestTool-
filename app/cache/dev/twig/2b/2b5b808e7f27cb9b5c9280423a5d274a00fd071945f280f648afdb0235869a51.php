<?php

/* TSAdminBundle:Candidate:freeTest.html.twig */
class __TwigTemplate_306a56dea93fdb66d29861b56ee555b436dc7b3d27a8d60f1d470afa75ab78dd extends Twig_Template
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
        $__internal_71bbf87e4ccfd08c66410cc5b364479fa8b9207c0e4e51c45f0bc4ff0058f80d = $this->env->getExtension("native_profiler");
        $__internal_71bbf87e4ccfd08c66410cc5b364479fa8b9207c0e4e51c45f0bc4ff0058f80d->enter($__internal_71bbf87e4ccfd08c66410cc5b364479fa8b9207c0e4e51c45f0bc4ff0058f80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:freeTest.html.twig"));

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
        // line 10
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
            // line 11
            echo "        <b id=\"introduction";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"></b> 
        <br/>
    ";
        }
        // line 14
        echo "
<p style=\"font-weight: bold\" id=\"text";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"> </p>
<br>
    <script type = \"text/javascript\">
        \$('b#introduction";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()));
        echo ");
        \$('p#text";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array()));
        echo ");
    </script>
     
   ";
        // line 22
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
            // line 23
            echo "            <img height=\"400\" width=\"600\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
            echo "\">
            <br><br><br><br>
    ";
        }
        // line 26
        echo "    
</div>

<div class=\"form-row\">
    <div class=\"form-input col-md-10\">
        <textarea class=\"large-textarea box-shadow-blue font-blue\"   id=\"free";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  onblur=\"tickfree(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ");\" ></textarea>
    </div>
        
      <div style=\"margin-left: 600px\" class=\"form-checkbox-radio col-md-9\">
             <input type=\"checkbox\" name=\"\"  id=\"checkbox";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  onclick=\"tick(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ");\">
             <label class=\"font-gray-dark\" for=\"\">Tick to review later</label>
      </div>
</div>

<div class=\"divider\" ></div>

<script src=\"/TestTool/web/js/tick.js\"></script>    ";
        
        $__internal_71bbf87e4ccfd08c66410cc5b364479fa8b9207c0e4e51c45f0bc4ff0058f80d->leave($__internal_71bbf87e4ccfd08c66410cc5b364479fa8b9207c0e4e51c45f0bc4ff0058f80d_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:freeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  89 => 31,  82 => 26,  73 => 23,  71 => 22,  63 => 19,  57 => 18,  51 => 15,  48 => 14,  41 => 11,  39 => 10,  27 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/menuTest.html.twig #}*/
/*  <div id="questionone{{question.id}}">*/
/* <u><b>Question {{loop.index}}/{{questions|length}} :</b></u>*/
/* */
/* <br>*/
/* <br>*/
/* */
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
/* <div class="form-row">*/
/*     <div class="form-input col-md-10">*/
/*         <textarea class="large-textarea box-shadow-blue font-blue"   id="free{{question.id}}" name="{{question.id}}"  onblur="tickfree({{question.id}});" ></textarea>*/
/*     </div>*/
/*         */
/*       <div style="margin-left: 600px" class="form-checkbox-radio col-md-9">*/
/*              <input type="checkbox" name=""  id="checkbox{{question.id}}"  onclick="tick({{question.id}});">*/
/*              <label class="font-gray-dark" for="">Tick to review later</label>*/
/*       </div>*/
/* </div>*/
/* */
/* <div class="divider" ></div>*/
/* */
/* <script src="/TestTool/web/js/tick.js"></script>    */
