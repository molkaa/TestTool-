<?php

/* TSAdminBundle:Tests:ModalCustomizeTest.html.twig */
class __TwigTemplate_79479d67909bc830c89c0b8369028f2df10bed442446e85818137ffef427e820 extends Twig_Template
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
        $__internal_ec4dfb2cf5bdeb1c750f2d3f2a89334e463e5c85578b55bd47188f999a232119 = $this->env->getExtension("native_profiler");
        $__internal_ec4dfb2cf5bdeb1c750f2d3f2a89334e463e5c85578b55bd47188f999a232119->enter($__internal_ec4dfb2cf5bdeb1c750f2d3f2a89334e463e5c85578b55bd47188f999a232119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalCustomizeTest.html.twig"));

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
        
        $__internal_ec4dfb2cf5bdeb1c750f2d3f2a89334e463e5c85578b55bd47188f999a232119->leave($__internal_ec4dfb2cf5bdeb1c750f2d3f2a89334e463e5c85578b55bd47188f999a232119_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalCustomizeTest.html.twig";
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
