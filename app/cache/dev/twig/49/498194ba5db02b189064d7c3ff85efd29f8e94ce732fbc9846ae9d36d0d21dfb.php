<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_8bea13dc38e49764e8c38d32a5125b69a51ff6b8eb65ee460c97e45d5c59ae2d extends Twig_Template
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
        $__internal_d69d7cd5850ed6518fb31bb4babd218d3c9a7e38b368a3132be209b19f2b89be = $this->env->getExtension("native_profiler");
        $__internal_d69d7cd5850ed6518fb31bb4babd218d3c9a7e38b368a3132be209b19f2b89be->enter($__internal_d69d7cd5850ed6518fb31bb4babd218d3c9a7e38b368a3132be209b19f2b89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d69d7cd5850ed6518fb31bb4babd218d3c9a7e38b368a3132be209b19f2b89be->leave($__internal_d69d7cd5850ed6518fb31bb4babd218d3c9a7e38b368a3132be209b19f2b89be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
