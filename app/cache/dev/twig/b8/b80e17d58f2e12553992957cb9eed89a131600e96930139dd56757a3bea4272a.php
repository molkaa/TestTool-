<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_64376a87ed6908679135d93fef78a6b001c83b6de879a68eb8b346a85b2abbab extends Twig_Template
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
        $__internal_66c2460e16896e445c3fe8a74f519056f97ed0e975be6b2c9224d9242dd7f86e = $this->env->getExtension("native_profiler");
        $__internal_66c2460e16896e445c3fe8a74f519056f97ed0e975be6b2c9224d9242dd7f86e->enter($__internal_66c2460e16896e445c3fe8a74f519056f97ed0e975be6b2c9224d9242dd7f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_66c2460e16896e445c3fe8a74f519056f97ed0e975be6b2c9224d9242dd7f86e->leave($__internal_66c2460e16896e445c3fe8a74f519056f97ed0e975be6b2c9224d9242dd7f86e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
