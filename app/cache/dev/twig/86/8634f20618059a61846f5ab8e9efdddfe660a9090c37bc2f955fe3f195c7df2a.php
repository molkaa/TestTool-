<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_5f2adb8989676024f19cac0d5c2a39c2e82ed6cd9c018334bb58cf66aad92ef7 extends Twig_Template
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
        $__internal_52a11b5580eac4a427ad6fa97f00010f82d21e5b5a2b3c1b11f2c6bd75196160 = $this->env->getExtension("native_profiler");
        $__internal_52a11b5580eac4a427ad6fa97f00010f82d21e5b5a2b3c1b11f2c6bd75196160->enter($__internal_52a11b5580eac4a427ad6fa97f00010f82d21e5b5a2b3c1b11f2c6bd75196160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_52a11b5580eac4a427ad6fa97f00010f82d21e5b5a2b3c1b11f2c6bd75196160->leave($__internal_52a11b5580eac4a427ad6fa97f00010f82d21e5b5a2b3c1b11f2c6bd75196160_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
