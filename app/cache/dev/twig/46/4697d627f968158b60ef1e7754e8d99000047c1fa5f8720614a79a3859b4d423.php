<?php

/* TSAdminBundle:Admin:editFreeTest.html.twig */
class __TwigTemplate_d00cf61474ff32312318b591177a68efe0d8f43ab60eb8d45846283f3726eb2f extends Twig_Template
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
        $__internal_4f6818997f5a566d1f15882a0b49c627407035563dab210a14cde87d61e0ec0c = $this->env->getExtension("native_profiler");
        $__internal_4f6818997f5a566d1f15882a0b49c627407035563dab210a14cde87d61e0ec0c->enter($__internal_4f6818997f5a566d1f15882a0b49c627407035563dab210a14cde87d61e0ec0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:editFreeTest.html.twig"));

        // line 2
        echo " 
<tr> 
    <td>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 8
        if ( !twig_test_empty($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateSubmit", array()))) {
            echo " 
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateSubmit", array()), "format", array(0 => " jS  F Y h:i:s A"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 11
        echo "    </td>
      <td>
         ";
        // line 13
        if ((($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "Customized", array()) === "yes") &&  !(null === $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array())))) {
            // line 14
            echo "         ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array()), "eliminatoryNote", array()), "html", null, true);
            echo "
          ";
        } else {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "eliminatoryNote", array()), "html", null, true);
            echo "
        ";
        }
        // line 18
        echo "        
    </td>
    <td>
        
        ";
        // line 22
        if (((null === $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "mark", array())) || ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "mark", array()) < 0))) {
            // line 23
            echo "            0/
             ";
            // line 24
            if ((($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "Customized", array()) === "yes") &&  !(null === $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array())))) {
                // line 25
                echo "                 ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array()), "note", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 27
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "note", array()), "html", null, true);
                echo "
            ";
            }
            // line 29
            echo "            
        ";
        } else {
            // line 31
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "mark", array()), "html", null, true);
            echo "/
             ";
            // line 32
            if ((($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "Customized", array()) === "yes") &&  !(null === $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array())))) {
                // line 33
                echo "                 ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array()), "note", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 35
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "note", array()), "html", null, true);
                echo "
            ";
            }
            // line 37
            echo "        ";
        }
        // line 38
        echo "    </td>
    <td>
        ";
        // line 40
        if ( !(null === $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()))) {
            // line 41
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "    </td>
    <td> 
        <a href=\"#ViewTest";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"View Test\">
            <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-eye\"></i>
        </a>
   
    </td>
   
    <td> 
        ";
        // line 52
        if (($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()) === "need correction")) {
            // line 53
            echo "            <a href=\"#CheckAnswer";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"Correcting Answer\">
            <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-pencil-square-o\"></i>
        </a>
          
        ";
        }
        // line 58
        echo "    </td>
</tr>
";
        // line 60
        $this->loadTemplate("TSAdminBundle:Admin:ModalCorrectingFreeQuestions.html.twig", "TSAdminBundle:Admin:editFreeTest.html.twig", 60)->display($context);
        echo " 
";
        // line 61
        $this->loadTemplate("TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig", "TSAdminBundle:Admin:editFreeTest.html.twig", 61)->display($context);
        
        $__internal_4f6818997f5a566d1f15882a0b49c627407035563dab210a14cde87d61e0ec0c->leave($__internal_4f6818997f5a566d1f15882a0b49c627407035563dab210a14cde87d61e0ec0c_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:editFreeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 61,  152 => 60,  148 => 58,  139 => 53,  137 => 52,  127 => 45,  123 => 43,  117 => 41,  115 => 40,  111 => 38,  108 => 37,  102 => 35,  96 => 33,  94 => 32,  89 => 31,  85 => 29,  79 => 27,  73 => 25,  71 => 24,  68 => 23,  66 => 22,  60 => 18,  54 => 16,  48 => 14,  46 => 13,  42 => 11,  37 => 9,  33 => 8,  27 => 5,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Admin/editFreeTest.html.twig #}*/
/*  */
/* <tr> */
/*     <td>*/
/*         {{test.name}}*/
/*     </td>*/
/*     <td>*/
/*         {% if test.dateSubmit is not empty  %} */
/*         {{test.dateSubmit.format(' jS  F Y h:i:s A')}}*/
/*         {% endif %}*/
/*     </td>*/
/*       <td>*/
/*          {% if testP.Customized is sameas("yes") and testP.TestStatestics is not null  %}*/
/*          {{ testP.TestStatestics.eliminatoryNote }}*/
/*           {% else%}*/
/*         {{testP.eliminatoryNote}}*/
/*         {% endif %}*/
/*         */
/*     </td>*/
/*     <td>*/
/*         */
/*         {% if (test.mark  is null ) or (test.mark < 0 ) %}*/
/*             0/*/
/*              {% if testP.Customized is sameas("yes") and testP.TestStatestics is not null  %}*/
/*                  {{testP.TestStatestics.note}}*/
/*             {% else %}*/
/*                 {{testP.note}}*/
/*             {% endif %}*/
/*             */
/*         {% else %}*/
/*         {{test.mark}}/*/
/*              {% if testP.Customized is sameas("yes") and testP.TestStatestics is not null  %}*/
/*                  {{testP.TestStatestics.note}}*/
/*             {%else%}*/
/*                 {{testP.note}}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         {% if test.note is not null %}*/
/*             {{test.note}}*/
/*         {% endif %}*/
/*     </td>*/
/*     <td> */
/*         <a href="#ViewTest{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="View Test">*/
/*             <i style="font-size: 2,5em;" class="glyph-icon icon-eye"></i>*/
/*         </a>*/
/*    */
/*     </td>*/
/*    */
/*     <td> */
/*         {% if test.note is same as ('need correction') %}*/
/*             <a href="#CheckAnswer{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="Correcting Answer">*/
/*             <i style="font-size: 2,5em;" class="glyph-icon icon-pencil-square-o"></i>*/
/*         </a>*/
/*           */
/*         {% endif %}*/
/*     </td>*/
/* </tr>*/
/* {% include "TSAdminBundle:Admin:ModalCorrectingFreeQuestions.html.twig"  %} */
/* {% include "TSAdminBundle:Candidate:ModalViewTestCandidate.html.twig"  %}*/
/* */
