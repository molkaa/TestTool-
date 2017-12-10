<?php

/* @TSAdmin/Tests/ModalCustomizeTest.html.twig */
class __TwigTemplate_2bfb62e79e02548bd587155bda175c5496602af9f65e63ffc100278a144d9191 extends Twig_Template
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
        $__internal_37edbb951971ff7711768917ef22d332d03f10bb02a30c051274980b79fd5638 = $this->env->getExtension("native_profiler");
        $__internal_37edbb951971ff7711768917ef22d332d03f10bb02a30c051274980b79fd5638->enter($__internal_37edbb951971ff7711768917ef22d332d03f10bb02a30c051274980b79fd5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalCustomizeTest.html.twig"));

        // line 1
        echo "<div  id=\"Customize";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectCustomizeEditTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_37edbb951971ff7711768917ef22d332d03f10bb02a30c051274980b79fd5638->leave($__internal_37edbb951971ff7711768917ef22d332d03f10bb02a30c051274980b79fd5638_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalCustomizeTest.html.twig";
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
/* <div  id="Customize{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             {{ render(controller('TSAdminBundle:Tests:selectCustomizeEditTest',  {'id':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
