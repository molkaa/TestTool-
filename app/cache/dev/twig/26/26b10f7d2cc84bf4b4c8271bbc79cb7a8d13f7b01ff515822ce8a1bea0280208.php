<?php

/* TSAdminBundle:Tests:ModalEditQuestionLibrary.html.twig */
class __TwigTemplate_c4e1a3547f51a5c29a9cf96927793f47908dd3184b01f26db9c43aabd19603c9 extends Twig_Template
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
        $__internal_f00fcae25737718ae098c9c356b20d499dc8642877f6b6c686d307ff5ae95c39 = $this->env->getExtension("native_profiler");
        $__internal_f00fcae25737718ae098c9c356b20d499dc8642877f6b6c686d307ff5ae95c39->enter($__internal_f00fcae25737718ae098c9c356b20d499dc8642877f6b6c686d307ff5ae95c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalEditQuestionLibrary.html.twig"));

        // line 1
        echo "<div  id=\"Edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditQuestionLibrary", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_f00fcae25737718ae098c9c356b20d499dc8642877f6b6c686d307ff5ae95c39->leave($__internal_f00fcae25737718ae098c9c356b20d499dc8642877f6b6c686d307ff5ae95c39_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalEditQuestionLibrary.html.twig";
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
/*        {{ render(controller('TSAdminBundle:Tests:selectEditQuestionLibrary', {'id':question.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
