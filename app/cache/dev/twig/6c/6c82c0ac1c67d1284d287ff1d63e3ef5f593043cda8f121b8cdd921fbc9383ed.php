<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b4e560cabcc911798ab58d4fd500f3a3f335d31577dd8ce185b87ae6e09ba6d1 extends Twig_Template
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
        $__internal_09f33718fd4b5ce0955c9a19f0e7da8c3832a2bb3bbaa5066c0ec52eabb3e08c = $this->env->getExtension("native_profiler");
        $__internal_09f33718fd4b5ce0955c9a19f0e7da8c3832a2bb3bbaa5066c0ec52eabb3e08c->enter($__internal_09f33718fd4b5ce0955c9a19f0e7da8c3832a2bb3bbaa5066c0ec52eabb3e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_09f33718fd4b5ce0955c9a19f0e7da8c3832a2bb3bbaa5066c0ec52eabb3e08c->leave($__internal_09f33718fd4b5ce0955c9a19f0e7da8c3832a2bb3bbaa5066c0ec52eabb3e08c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
