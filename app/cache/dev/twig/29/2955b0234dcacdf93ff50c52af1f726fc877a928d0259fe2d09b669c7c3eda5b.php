<?php

/* @TSAdmin/Tests/ModalRemoveQuestionLibrary.html.twig */
class __TwigTemplate_81f5301484203ffce905fe2adef2df94ca8a513b84eb50d8bce688fc52fbc34d extends Twig_Template
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
        $__internal_24fe8aaad58f393771742c04879f4f6684d258e6b69f4db8b76daee630296c24 = $this->env->getExtension("native_profiler");
        $__internal_24fe8aaad58f393771742c04879f4f6684d258e6b69f4db8b76daee630296c24->enter($__internal_24fe8aaad58f393771742c04879f4f6684d258e6b69f4db8b76daee630296c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalRemoveQuestionLibrary.html.twig"));

        // line 1
        echo "<div  id=\"Remove";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectRemoveQuestionLibrary", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_24fe8aaad58f393771742c04879f4f6684d258e6b69f4db8b76daee630296c24->leave($__internal_24fe8aaad58f393771742c04879f4f6684d258e6b69f4db8b76daee630296c24_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalRemoveQuestionLibrary.html.twig";
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
/*        {{ render(controller('TSAdminBundle:Tests:selectRemoveQuestionLibrary',  {'id':question.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
