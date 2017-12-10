<?php

/* TSAdminBundle:Candidate:numericTest.html.twig */
class __TwigTemplate_3f904f505b6952b124f65f5a0cdbc87071a5e8a78e13f76cdfda727664c0406d extends Twig_Template
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
        $__internal_1a2e79aac6a72eb2539988bb4aadcb82be11a8cd282bbaf874a8ae108f1e1115 = $this->env->getExtension("native_profiler");
        $__internal_1a2e79aac6a72eb2539988bb4aadcb82be11a8cd282bbaf874a8ae108f1e1115->enter($__internal_1a2e79aac6a72eb2539988bb4aadcb82be11a8cd282bbaf874a8ae108f1e1115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:numericTest.html.twig"));

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
<br><br>
<div class=\"form-row\">
    <div class=\"col-md-8\">
        <table>
          
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 32
            echo "            <tr>
                 <td>
            <div class=\"form-label col-md-4\">
                
                <label class=\"font-blue\" for=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "
                </label>
                
            </div>
                
            <div class=\"form-input col-md-8\">
               
                <input id=\"numeric";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" placeholder=\"\" class=\"col-md-12\" type=\"text\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "+";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo "\" onchange=\"ticknumeric(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array())), "html", null, true);
            echo ");\">
               
            </div>
                 </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                
            
        </table>
    </div>
         <div style=\"margin-left: 600px\" class=\"form-checkbox-radio col-md-9\">
             <input type=\"checkbox\" name=\"\"  id=\"checkbox";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"  onclick=\"tick2(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array())), "html", null, true);
        echo ");\">
                            <label class=\"font-gray-dark\" for=\"\">Tick to review later</label>
</div>
</div>

<div class=\"divider\" ></div>
<script src=\"/TestTool/web/js/tick.js\"></script>";
        
        $__internal_1a2e79aac6a72eb2539988bb4aadcb82be11a8cd282bbaf874a8ae108f1e1115->leave($__internal_1a2e79aac6a72eb2539988bb4aadcb82be11a8cd282bbaf874a8ae108f1e1115_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:numericTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 55,  136 => 50,  113 => 44,  103 => 37,  99 => 36,  93 => 32,  89 => 31,  80 => 24,  71 => 21,  69 => 20,  61 => 17,  55 => 16,  49 => 13,  46 => 12,  39 => 9,  37 => 8,  27 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/menuTest.html.twig #}*/
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
/* <br><br>*/
/* <div class="form-row">*/
/*     <div class="col-md-8">*/
/*         <table>*/
/*           */
/*         {% for response in question.responses %}*/
/*             <tr>*/
/*                  <td>*/
/*             <div class="form-label col-md-4">*/
/*                 */
/*                 <label class="font-blue" for="{{question.id}}">*/
/*                     {{response.response}}*/
/*                 </label>*/
/*                 */
/*             </div>*/
/*                 */
/*             <div class="form-input col-md-8">*/
/*                */
/*                 <input id="numeric{{response.id}}{{question.id}}" placeholder="" class="col-md-12" type="text" name="{{question.id}}+{{response.id}}" onchange="ticknumeric({{response.id}},{{question.id}},{{question.responses|length}});">*/
/*                */
/*             </div>*/
/*                  </td>*/
/*                 </tr>*/
/*         {%endfor %}*/
/*                 */
/*             */
/*         </table>*/
/*     </div>*/
/*          <div style="margin-left: 600px" class="form-checkbox-radio col-md-9">*/
/*              <input type="checkbox" name=""  id="checkbox{{question.id}}"  onclick="tick2({{question.id}},{{question.responses|length}});">*/
/*                             <label class="font-gray-dark" for="">Tick to review later</label>*/
/* </div>*/
/* </div>*/
/* */
/* <div class="divider" ></div>*/
/* <script src="/TestTool/web/js/tick.js"></script>*/
