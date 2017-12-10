<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_44e4b584841d3ef8415c880c291a57bb6b6ea59b72cde8d66b50f60e18a6927a extends Twig_Template
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
        $__internal_4fcd1fa85b0b10683337c8bb3ca5dd73234938df407ceb7ac7eab4fcfcf8136b = $this->env->getExtension("native_profiler");
        $__internal_4fcd1fa85b0b10683337c8bb3ca5dd73234938df407ceb7ac7eab4fcfcf8136b->enter($__internal_4fcd1fa85b0b10683337c8bb3ca5dd73234938df407ceb7ac7eab4fcfcf8136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4fcd1fa85b0b10683337c8bb3ca5dd73234938df407ceb7ac7eab4fcfcf8136b->leave($__internal_4fcd1fa85b0b10683337c8bb3ca5dd73234938df407ceb7ac7eab4fcfcf8136b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
