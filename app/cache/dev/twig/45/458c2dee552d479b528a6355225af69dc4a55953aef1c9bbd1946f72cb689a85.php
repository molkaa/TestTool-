<?php

/* @TSAdmin/Tests/ModalRemoveQuestion.html.twig */
class __TwigTemplate_1b25d97f93e789ffc8f0229aa4f90fb34cb6d573ae5b787fafc673a1ff12f76c extends Twig_Template
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
        $__internal_9d90b7cdc1b6d6ea0f6755e491f9d5da6252d13be7fef638603d91dcfdc61379 = $this->env->getExtension("native_profiler");
        $__internal_9d90b7cdc1b6d6ea0f6755e491f9d5da6252d13be7fef638603d91dcfdc61379->enter($__internal_9d90b7cdc1b6d6ea0f6755e491f9d5da6252d13be7fef638603d91dcfdc61379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalRemoveQuestion.html.twig"));

        // line 1
        echo "<div  id=\"Remove";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectRemoveQuestion", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "idtest" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_9d90b7cdc1b6d6ea0f6755e491f9d5da6252d13be7fef638603d91dcfdc61379->leave($__internal_9d90b7cdc1b6d6ea0f6755e491f9d5da6252d13be7fef638603d91dcfdc61379_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalRemoveQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* <div  id="Remove{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*        {{ render(controller('TSAdminBundle:Tests:selectRemoveQuestion',  {'id':question.id,'idtest':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
