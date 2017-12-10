<?php

/* @TSAdmin/Tests/ModalEditQuestion.html.twig */
class __TwigTemplate_5e3f08144e79c3ea95bdc893a89fbac2ee20a4db3a4855cc5a090d5fc2b230cc extends Twig_Template
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
        $__internal_90dd169140ee330ed72f2f8b0e8b22f0ede0e93ff48b1a74ee9d167c048e9dd7 = $this->env->getExtension("native_profiler");
        $__internal_90dd169140ee330ed72f2f8b0e8b22f0ede0e93ff48b1a74ee9d167c048e9dd7->enter($__internal_90dd169140ee330ed72f2f8b0e8b22f0ede0e93ff48b1a74ee9d167c048e9dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalEditQuestion.html.twig"));

        // line 1
        echo "<div  id=\"Edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditQuestion", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "idtest" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_90dd169140ee330ed72f2f8b0e8b22f0ede0e93ff48b1a74ee9d167c048e9dd7->leave($__internal_90dd169140ee330ed72f2f8b0e8b22f0ede0e93ff48b1a74ee9d167c048e9dd7_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalEditQuestion.html.twig";
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
/* <div  id="Edit{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*        {{ render(controller('TSAdminBundle:Tests:selectEditQuestion', {'id':question.id,'idtest':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
