<?php

/* TSAdminBundle:Tests:ModalRemoveTest.html.twig */
class __TwigTemplate_5488204c1ee6805549166d8b0d219b269348dc551e5a6e773f1e8f0ad1b256a5 extends Twig_Template
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
        $__internal_223dea25d9a461109e7263c3bbe0a588170fd61ce0b2bc43bd473986f9aebebf = $this->env->getExtension("native_profiler");
        $__internal_223dea25d9a461109e7263c3bbe0a588170fd61ce0b2bc43bd473986f9aebebf->enter($__internal_223dea25d9a461109e7263c3bbe0a588170fd61ce0b2bc43bd473986f9aebebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalRemoveTest.html.twig"));

        // line 1
        echo "<div  id=\"Remove";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
         ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectRemoveTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_223dea25d9a461109e7263c3bbe0a588170fd61ce0b2bc43bd473986f9aebebf->leave($__internal_223dea25d9a461109e7263c3bbe0a588170fd61ce0b2bc43bd473986f9aebebf_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalRemoveTest.html.twig";
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
/* <div  id="Remove{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*          {{ render(controller('TSAdminBundle:Tests:selectRemoveTest',  {'id':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
