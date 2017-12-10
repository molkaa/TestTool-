<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1c5be1be5504d6f71161886f6ec8873871393ef6f44a8b3fd4c55359a9bbd1d9 extends Twig_Template
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
        $__internal_e128fda44b4c6954f76923d64b2b4231ca8b8874dac56d7b4cb8499120adb6ec = $this->env->getExtension("native_profiler");
        $__internal_e128fda44b4c6954f76923d64b2b4231ca8b8874dac56d7b4cb8499120adb6ec->enter($__internal_e128fda44b4c6954f76923d64b2b4231ca8b8874dac56d7b4cb8499120adb6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e128fda44b4c6954f76923d64b2b4231ca8b8874dac56d7b4cb8499120adb6ec->leave($__internal_e128fda44b4c6954f76923d64b2b4231ca8b8874dac56d7b4cb8499120adb6ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
