<?php

/* TSAdminBundle:Tests:question.html.twig */
class __TwigTemplate_e9c69bbccfdea1dbf8c550c1f1c9688ba19620bb7453f3e5973b7ca8498e05ba extends Twig_Template
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
        $__internal_3f543d59b135072d5a71b4036351b16bc84f2956eb576695061107e490afafea = $this->env->getExtension("native_profiler");
        $__internal_3f543d59b135072d5a71b4036351b16bc84f2956eb576695061107e490afafea->enter($__internal_3f543d59b135072d5a71b4036351b16bc84f2956eb576695061107e490afafea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:question.html.twig"));

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
        <td><div style=\"font-size: 2,5em; color: blueyellow\" class=\" glyph-icon icon-dot-circle-o\"><p class=\"hidden\">Multiple Choice</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "many")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-check-square-o mrg5R\"><p class=\"hidden\">Checkboxes</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 12
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "menu")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\"glyph-icon icon-caret-square-o-down mrg5R\"><p class=\"hidden\">Drop Down</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "free")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-pencil-square-o mrg5R\"><p class=\"hidden\">Essay</p></div></td>
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "numeric")) {
            echo "   
        <td><div style=\"font-size: 2,5em;color: blueyellow\" class=\" glyph-icon icon-arrows-alt mrg5R\"><p class=\"hidden\">Numeric</p></div></td>
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
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"view test\">
            <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-eye\"></i>
        </a>

    </td>

    
        <td>
            <a href=\"#Edit";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"edit test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-edit\"></i>
            </a>

        </td>
        <td>
            <a href=\"#Remove";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"remove test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-remove\"></i>
            </a>

        </td>
    
</tr>       



";
        // line 53
        $this->loadTemplate("TSAdminBundle:Tests:ModalEditQuestion.html.twig", "TSAdminBundle:Tests:question.html.twig", 53)->display($context);
        $this->loadTemplate("TSAdminBundle:Tests:ModalRemoveQuestion.html.twig", "TSAdminBundle:Tests:question.html.twig", 53)->display($context);
        echo "  ";
        $this->loadTemplate("TSAdminBundle:Tests:ModalViewQuestion.html.twig", "TSAdminBundle:Tests:question.html.twig", 53)->display($context);
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
        
        $__internal_3f543d59b135072d5a71b4036351b16bc84f2956eb576695061107e490afafea->leave($__internal_3f543d59b135072d5a71b4036351b16bc84f2956eb576695061107e490afafea_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 61,  119 => 56,  110 => 53,  97 => 43,  88 => 37,  77 => 29,  67 => 22,  63 => 21,  59 => 19,  53 => 16,  48 => 14,  43 => 12,  38 => 10,  33 => 8,  27 => 5,  22 => 2,);
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
/*         <td><div style="font-size: 2,5em; color: blueyellow" class=" glyph-icon icon-dot-circle-o"><p class="hidden">Multiple Choice</p></div></td>*/
/*     {% elseif question.type is same as ('many') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-check-square-o mrg5R"><p class="hidden">Checkboxes</p></div></td>*/
/*     {% elseif question.type is same as ('menu') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class="glyph-icon icon-caret-square-o-down mrg5R"><p class="hidden">Drop Down</p></div></td>*/
/*     {% elseif question.type is same as ('free') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-pencil-square-o mrg5R"><p class="hidden">Essay</p></div></td>*/
/*     {% elseif question.type is same as ('numeric') %}   */
/*         <td><div style="font-size: 2,5em;color: blueyellow" class=" glyph-icon icon-arrows-alt mrg5R"><p class="hidden">Numeric</p></div></td>*/
/*     {% endif %}*/
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
/*         <a href="#View{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="view test">*/
/*             <i style="font-size: 2,5em;" class="glyph-icon icon-eye"></i>*/
/*         </a>*/
/* */
/*     </td>*/
/* */
/*     */
/*         <td>*/
/*             <a href="#Edit{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="edit test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-edit"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*         <td>*/
/*             <a href="#Remove{{question.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="remove test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*     */
/* </tr>       */
/* */
/* */
/* */
/* {% include "TSAdminBundle:Tests:ModalEditQuestion.html.twig"  %}{% include "TSAdminBundle:Tests:ModalRemoveQuestion.html.twig"  %}  {% include "TSAdminBundle:Tests:ModalViewQuestion.html.twig"  %}    */
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
