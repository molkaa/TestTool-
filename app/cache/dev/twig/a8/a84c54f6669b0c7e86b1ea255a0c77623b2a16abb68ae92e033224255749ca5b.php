<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_c589ca3d562e6d45332fb8e7e5b5922a06faf982fc93134bae879ef2a92ec3f5 extends Twig_Template
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
        $__internal_83b2a8b23ad795c74660faf32baa1d89d1a8b53f5864102e7e4eb66d2bdbe48c = $this->env->getExtension("native_profiler");
        $__internal_83b2a8b23ad795c74660faf32baa1d89d1a8b53f5864102e7e4eb66d2bdbe48c->enter($__internal_83b2a8b23ad795c74660faf32baa1d89d1a8b53f5864102e7e4eb66d2bdbe48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_83b2a8b23ad795c74660faf32baa1d89d1a8b53f5864102e7e4eb66d2bdbe48c->leave($__internal_83b2a8b23ad795c74660faf32baa1d89d1a8b53f5864102e7e4eb66d2bdbe48c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
