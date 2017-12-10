<?php

/* @TSAdmin/Admin/editResultFreeTest.html.twig */
class __TwigTemplate_15c59728529b7b5b3a456e89c5758cb74671e5739bf40f1c5943bc076794066e extends Twig_Template
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
        $__internal_3d31ac8c8c47abfc1bb6479a14b96f3fbf9dd928ed03c9adcb15cd972d4e4bd6 = $this->env->getExtension("native_profiler");
        $__internal_3d31ac8c8c47abfc1bb6479a14b96f3fbf9dd928ed03c9adcb15cd972d4e4bd6->enter($__internal_3d31ac8c8c47abfc1bb6479a14b96f3fbf9dd928ed03c9adcb15cd972d4e4bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/editResultFreeTest.html.twig"));

        // line 2
        echo "<tr > 
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo "
    </td>
    <td>
        ";
        // line 7
        if ( !twig_test_empty($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateSubmit", array()))) {
            echo " 
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "dateSubmit", array()), "format", array(0 => " jS  F Y h:i:s A"), "method"), "html", null, true);
            echo "
        ";
        }
        // line 10
        echo "    </td>
     <td>
      
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "eliminatoryNote", array()), "html", null, true);
        echo "
        
    </td>
    <td>
         ";
        // line 17
        if ( !twig_test_empty($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array()))) {
            echo " 
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "mark", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "TestStatestics", array()), "numberQuestions", array()), "html", null, true);
            echo "
      
        ";
        } else {
            // line 21
            echo "         ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "mark", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testP"]) ? $context["testP"] : $this->getContext($context, "testP")), "note", array()), "html", null, true);
            echo "
        ";
        }
        // line 23
        echo "    </td>
    <td>
        ";
        // line 25
        if ( !(null === $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()))) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()), "html", null, true);
            echo "
        ";
        }
        // line 28
        echo "    </td>
  
   
</tr>
";
        
        $__internal_3d31ac8c8c47abfc1bb6479a14b96f3fbf9dd928ed03c9adcb15cd972d4e4bd6->leave($__internal_3d31ac8c8c47abfc1bb6479a14b96f3fbf9dd928ed03c9adcb15cd972d4e4bd6_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/editResultFreeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  79 => 26,  77 => 25,  73 => 23,  65 => 21,  57 => 18,  53 => 17,  46 => 13,  41 => 10,  36 => 8,  32 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Admin/editFreeTest.html.twig #}*/
/* <tr > */
/*     <td>*/
/*         {{test.name}}*/
/*     </td>*/
/*     <td>*/
/*         {% if test.dateSubmit is not empty  %} */
/*         {{test.dateSubmit.format(' jS  F Y h:i:s A')}}*/
/*         {% endif %}*/
/*     </td>*/
/*      <td>*/
/*       */
/*         {{testP.eliminatoryNote}}*/
/*         */
/*     </td>*/
/*     <td>*/
/*          {% if  testP.TestStatestics is not empty %} */
/*         {{test.mark}}/{{testP.TestStatestics.numberQuestions}}*/
/*       */
/*         {% else %}*/
/*          {{test.mark}}/{{testP.note}}*/
/*         {% endif %}*/
/*     </td>*/
/*     <td>*/
/*         {% if test.note is not null %}*/
/*             {{test.note}}*/
/*         {% endif %}*/
/*     </td>*/
/*   */
/*    */
/* </tr>*/
/* */
