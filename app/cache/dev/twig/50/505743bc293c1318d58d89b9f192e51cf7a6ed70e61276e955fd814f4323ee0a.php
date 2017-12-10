<?php

/* @TSAdmin/Tests/questionLibrary.html.twig */
class __TwigTemplate_c77e8fa59b6a9f72aa9ec5b9888742129d955d911ffa4b712b25814ff9772e2e extends Twig_Template
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
        $__internal_040ce3bfad8273e7b03771bc5c74292e92c9f3f44607bca031275467ee86ae81 = $this->env->getExtension("native_profiler");
        $__internal_040ce3bfad8273e7b03771bc5c74292e92c9f3f44607bca031275467ee86ae81->enter($__internal_040ce3bfad8273e7b03771bc5c74292e92c9f3f44607bca031275467ee86ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/questionLibrary.html.twig"));

        // line 2
        echo "
<tr>

    <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo " </td>


    ";
        // line 8
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "one")) {
            echo " 
        <td><div style=\"font-size: 2,5em; color: blueyellow\" class=\" glyph-icon icon-dot-circle-o\"><p class=\"hidden\">Multiple Choice ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()), "html", null, true);
            echo "</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "many")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-check-square-o mrg5R\"><p class=\"hidden\">Checkboxes ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()), "html", null, true);
            echo "</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "menu")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\"glyph-icon icon-caret-square-o-down mrg5R\"><p class=\"hidden\">Drop Down ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()), "html", null, true);
            echo "</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "free")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-pencil-square-o mrg5R\"><p class=\"hidden\">Essay ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()), "html", null, true);
            echo "</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "numeric")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-arrows-alt mrg5R\"><p class=\"hidden\">Numeric ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "tests", array()), "html", null, true);
            echo "</p></div></td>
    ";
        }
        // line 19
        echo "

    <td id=\"text";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
        <p id=\"text";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">

        </p>

    </td>

    <td>
        <a href=\"#View";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"view question\">
            <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-eye\"></i>
        </a>

    </td>

   
        <td>
            <a href=\"#Edit";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"edit question\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-edit\"></i>
            </a>

        </td>
        <td>
            <a href=\"#Remove";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"remove question\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-remove\"></i>
            </a>

        </td>
    
</tr>       



";
        // line 53
        $this->loadTemplate("TSAdminBundle:Tests:ModalEditQuestionLibrary.html.twig", "@TSAdmin/Tests/questionLibrary.html.twig", 53)->display($context);
        $this->loadTemplate("TSAdminBundle:Tests:ModalRemoveQuestionLibrary.html.twig", "@TSAdmin/Tests/questionLibrary.html.twig", 53)->display($context);
        echo "  ";
        $this->loadTemplate("TSAdminBundle:Tests:ModalViewQuestion.html.twig", "@TSAdmin/Tests/questionLibrary.html.twig", 53)->display($context);
        echo "    
<script type = \"text/javascript\">
     var textq
     = ";
        // line 56
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array()));
        echo ";
             var textsansespace = textq.replace(/<br\\s*[\\/]?>/gi, \" \")
     var textlimit = textsansespace.substring(0, 100);
     var points = '...'
     //var textclear= textsansespace.replace(/(&nbsp;)/g,' ');
     \$('p#text";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(textlimit + points);


</script>   

";
        
        $__internal_040ce3bfad8273e7b03771bc5c74292e92c9f3f44607bca031275467ee86ae81->leave($__internal_040ce3bfad8273e7b03771bc5c74292e92c9f3f44607bca031275467ee86ae81_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/questionLibrary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 61,  134 => 56,  125 => 53,  112 => 43,  103 => 37,  92 => 29,  82 => 22,  78 => 21,  74 => 19,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  27 => 5,  22 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Tests/question.html.twig #}*/
/* */
/* <tr>*/
/* */
/*     <td>{{question.id}} </td>*/
/* */
/* */
/*     {% if question.type is same as ('one') %} */
/*         <td><div style="font-size: 2,5em; color: blueyellow" class=" glyph-icon icon-dot-circle-o"><p class="hidden">Multiple Choice {{question.tests}}</p></div></td>*/
/*     {% elseif question.type is same as ('many') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-check-square-o mrg5R"><p class="hidden">Checkboxes {{question.tests}}</p></div></td>*/
/*     {% elseif question.type is same as ('menu') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class="glyph-icon icon-caret-square-o-down mrg5R"><p class="hidden">Drop Down {{question.tests}}</p></div></td>*/
/*     {% elseif question.type is same as ('free') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-pencil-square-o mrg5R"><p class="hidden">Essay {{question.tests}}</p></div></td>*/
/*     {% elseif question.type is same as ('numeric') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-arrows-alt mrg5R"><p class="hidden">Numeric {{question.tests}}</p></div></td>*/
/*     {%endif%}*/
/* */
/* */
/*     <td id="text{{question.id}}">*/
/*         <p id="text{{question.id}}">*/
/* */
/*         </p>*/
/* */
/*     </td>*/
/* */
/*     <td>*/
/*         <a href="#View{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="view question">*/
/*             <i style="font-size: 2,5em;" class="glyph-icon icon-eye"></i>*/
/*         </a>*/
/* */
/*     </td>*/
/* */
/*    */
/*         <td>*/
/*             <a href="#Edit{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="edit question">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-edit"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*         <td>*/
/*             <a href="#Remove{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="remove question">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*     */
/* </tr>       */
/* */
/* */
/* */
/* {% include "TSAdminBundle:Tests:ModalEditQuestionLibrary.html.twig"  %}{% include "TSAdminBundle:Tests:ModalRemoveQuestionLibrary.html.twig"  %}  {% include "TSAdminBundle:Tests:ModalViewQuestion.html.twig"  %}    */
/* <script type = "text/javascript">*/
/*      var textq*/
/*      = {{ question.text|json_encode|raw}};*/
/*              var textsansespace = textq.replace(/<br\s*[\/]?>/gi, " ")*/
/*      var textlimit = textsansespace.substring(0, 100);*/
/*      var points = '...'*/
/*      //var textclear= textsansespace.replace(/(&nbsp;)/g,' ');*/
/*      $('p#text{{question.id}}').append(textlimit + points);*/
/* */
/* */
/* </script>   */
/* */
/* */
