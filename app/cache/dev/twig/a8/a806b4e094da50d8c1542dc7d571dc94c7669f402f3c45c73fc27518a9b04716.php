<?php

/* @TSAdmin/Tests/ModalEditQuestionLibrary.html.twig */
class __TwigTemplate_71caa95081d1b018d8216dd5e9939bb5944a59a30d3ddbccae8a3b75400584f0 extends Twig_Template
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
        $__internal_b3faf0d6685363d1a28933021fb0e89baa650211406aafe368bef407004eb455 = $this->env->getExtension("native_profiler");
        $__internal_b3faf0d6685363d1a28933021fb0e89baa650211406aafe368bef407004eb455->enter($__internal_b3faf0d6685363d1a28933021fb0e89baa650211406aafe368bef407004eb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalEditQuestionLibrary.html.twig"));

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
        
        $__internal_b3faf0d6685363d1a28933021fb0e89baa650211406aafe368bef407004eb455->leave($__internal_b3faf0d6685363d1a28933021fb0e89baa650211406aafe368bef407004eb455_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalEditQuestionLibrary.html.twig";
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
