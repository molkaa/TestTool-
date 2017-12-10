<?php

/* @TSAdmin/Tests/ModalRemoveTest.html.twig */
class __TwigTemplate_45c7bbdd73469ed38a7e78b44675492f44e28d49f71caeaa8cbaedf609b480e4 extends Twig_Template
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
        $__internal_99967dc507f60293133915decc6a5b2ceb2c2ab08c373f284f9ede20bdeae898 = $this->env->getExtension("native_profiler");
        $__internal_99967dc507f60293133915decc6a5b2ceb2c2ab08c373f284f9ede20bdeae898->enter($__internal_99967dc507f60293133915decc6a5b2ceb2c2ab08c373f284f9ede20bdeae898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalRemoveTest.html.twig"));

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
        
        $__internal_99967dc507f60293133915decc6a5b2ceb2c2ab08c373f284f9ede20bdeae898->leave($__internal_99967dc507f60293133915decc6a5b2ceb2c2ab08c373f284f9ede20bdeae898_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalRemoveTest.html.twig";
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
