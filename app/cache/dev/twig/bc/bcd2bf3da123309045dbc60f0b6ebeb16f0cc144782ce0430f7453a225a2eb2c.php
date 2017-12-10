<?php

/* TSAdminBundle:Admin:editResultFreeTest.html.twig */
class __TwigTemplate_c5c31e3b3e9b76535652e797d6665bdea306df057219113f2a1f67a4f87d9c8b extends Twig_Template
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
        $__internal_666437b74617e47837a549412ada7d2e35d290661322643c8b13009c8ca928be = $this->env->getExtension("native_profiler");
        $__internal_666437b74617e47837a549412ada7d2e35d290661322643c8b13009c8ca928be->enter($__internal_666437b74617e47837a549412ada7d2e35d290661322643c8b13009c8ca928be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:editResultFreeTest.html.twig"));

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
        
        $__internal_666437b74617e47837a549412ada7d2e35d290661322643c8b13009c8ca928be->leave($__internal_666437b74617e47837a549412ada7d2e35d290661322643c8b13009c8ca928be_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:editResultFreeTest.html.twig";
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
