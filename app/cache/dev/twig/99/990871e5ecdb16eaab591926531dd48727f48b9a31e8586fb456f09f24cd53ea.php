<?php

/* @TSAdmin/Tests/ModalEditTest.html.twig */
class __TwigTemplate_ebad9e8d7c53ecda72398d78bafb676485db8ab1f46a59fd14a56ff052a4a9e9 extends Twig_Template
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
        $__internal_2bbc58af754bdbf7e6457e6ed76c6e818c403dfdce6ae025c02311c68f1c64cf = $this->env->getExtension("native_profiler");
        $__internal_2bbc58af754bdbf7e6457e6ed76c6e818c403dfdce6ae025c02311c68f1c64cf->enter($__internal_2bbc58af754bdbf7e6457e6ed76c6e818c403dfdce6ae025c02311c68f1c64cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalEditTest.html.twig"));

        // line 1
        echo "<div  id=\"Edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_2bbc58af754bdbf7e6457e6ed76c6e818c403dfdce6ae025c02311c68f1c64cf->leave($__internal_2bbc58af754bdbf7e6457e6ed76c6e818c403dfdce6ae025c02311c68f1c64cf_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalEditTest.html.twig";
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
/* <div  id="Edit{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             {{ render(controller('TSAdminBundle:Tests:selectEditTest',  {'id':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
