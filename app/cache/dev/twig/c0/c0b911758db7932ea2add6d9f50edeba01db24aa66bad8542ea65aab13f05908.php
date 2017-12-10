<?php

/* TSAdminBundle:Tests:ModalRemoveQuestion.html.twig */
class __TwigTemplate_aa89f02788bb380bf74d8107a6285133fda3815e8bf7d661f721e49f8c36127c extends Twig_Template
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
        $__internal_10f8b5a80a2320938e35e5dc47b187ba2b7e828c401eb570a62e21e513558fd2 = $this->env->getExtension("native_profiler");
        $__internal_10f8b5a80a2320938e35e5dc47b187ba2b7e828c401eb570a62e21e513558fd2->enter($__internal_10f8b5a80a2320938e35e5dc47b187ba2b7e828c401eb570a62e21e513558fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalRemoveQuestion.html.twig"));

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
        
        $__internal_10f8b5a80a2320938e35e5dc47b187ba2b7e828c401eb570a62e21e513558fd2->leave($__internal_10f8b5a80a2320938e35e5dc47b187ba2b7e828c401eb570a62e21e513558fd2_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalRemoveQuestion.html.twig";
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
