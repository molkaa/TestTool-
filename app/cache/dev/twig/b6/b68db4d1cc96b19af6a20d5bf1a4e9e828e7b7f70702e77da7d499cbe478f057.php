<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_cc812ed49031735f9843c43b863aaeadf89328b5a5892823e5e8e6d6144387a1 extends Twig_Template
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
        $__internal_4b2ab58e73d2c26a57bf55c789645b1c4175caddcbae9e6e26b70c47016fd4e1 = $this->env->getExtension("native_profiler");
        $__internal_4b2ab58e73d2c26a57bf55c789645b1c4175caddcbae9e6e26b70c47016fd4e1->enter($__internal_4b2ab58e73d2c26a57bf55c789645b1c4175caddcbae9e6e26b70c47016fd4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b2ab58e73d2c26a57bf55c789645b1c4175caddcbae9e6e26b70c47016fd4e1->leave($__internal_4b2ab58e73d2c26a57bf55c789645b1c4175caddcbae9e6e26b70c47016fd4e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
