<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e1786b6117c5a69fa44fbde9697dc0cab1ac2498c4f654034c3793b739476063 extends Twig_Template
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
        $__internal_6d74d9c17b224ddc01cfc17c345ea9a165f8956b440d3610a866fe83f0ca3980 = $this->env->getExtension("native_profiler");
        $__internal_6d74d9c17b224ddc01cfc17c345ea9a165f8956b440d3610a866fe83f0ca3980->enter($__internal_6d74d9c17b224ddc01cfc17c345ea9a165f8956b440d3610a866fe83f0ca3980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6d74d9c17b224ddc01cfc17c345ea9a165f8956b440d3610a866fe83f0ca3980->leave($__internal_6d74d9c17b224ddc01cfc17c345ea9a165f8956b440d3610a866fe83f0ca3980_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
