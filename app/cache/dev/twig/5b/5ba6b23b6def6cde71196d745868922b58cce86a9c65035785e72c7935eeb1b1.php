<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4b284239d162a46e34a2ce7e63de34562b3c50ad712d81391135080f9f40bc35 extends Twig_Template
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
        $__internal_14c1db885768caa9faa05197ebdc1a68afcc2eeac1e3351cb89d5944f20412ae = $this->env->getExtension("native_profiler");
        $__internal_14c1db885768caa9faa05197ebdc1a68afcc2eeac1e3351cb89d5944f20412ae->enter($__internal_14c1db885768caa9faa05197ebdc1a68afcc2eeac1e3351cb89d5944f20412ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_14c1db885768caa9faa05197ebdc1a68afcc2eeac1e3351cb89d5944f20412ae->leave($__internal_14c1db885768caa9faa05197ebdc1a68afcc2eeac1e3351cb89d5944f20412ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
