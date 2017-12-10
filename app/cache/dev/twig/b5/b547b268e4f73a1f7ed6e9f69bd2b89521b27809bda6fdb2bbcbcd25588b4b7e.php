<?php

/* TSAdminBundle:Tests:ModalRemoveQuestionLibrary.html.twig */
class __TwigTemplate_670166c529e4c11246950801828f886e5736dd61c9beba918c4d165915264135 extends Twig_Template
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
        $__internal_2ec8019d2ded8ccdead18d5dda110b2e08a529e7da161050aa33e900595ab209 = $this->env->getExtension("native_profiler");
        $__internal_2ec8019d2ded8ccdead18d5dda110b2e08a529e7da161050aa33e900595ab209->enter($__internal_2ec8019d2ded8ccdead18d5dda110b2e08a529e7da161050aa33e900595ab209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalRemoveQuestionLibrary.html.twig"));

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
        
        $__internal_2ec8019d2ded8ccdead18d5dda110b2e08a529e7da161050aa33e900595ab209->leave($__internal_2ec8019d2ded8ccdead18d5dda110b2e08a529e7da161050aa33e900595ab209_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalRemoveQuestionLibrary.html.twig";
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
