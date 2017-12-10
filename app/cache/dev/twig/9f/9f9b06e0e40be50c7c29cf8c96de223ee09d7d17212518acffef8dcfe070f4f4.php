<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_735a92fc87a8e8cf02acd77eb79d9759b307ce94c14eb6a925504e12d8dd0e59 extends Twig_Template
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
        $__internal_942b60b650e12acb1ff31de6293eb598a09176dec98ff1d5e0b09e5faa5c07e4 = $this->env->getExtension("native_profiler");
        $__internal_942b60b650e12acb1ff31de6293eb598a09176dec98ff1d5e0b09e5faa5c07e4->enter($__internal_942b60b650e12acb1ff31de6293eb598a09176dec98ff1d5e0b09e5faa5c07e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_942b60b650e12acb1ff31de6293eb598a09176dec98ff1d5e0b09e5faa5c07e4->leave($__internal_942b60b650e12acb1ff31de6293eb598a09176dec98ff1d5e0b09e5faa5c07e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
