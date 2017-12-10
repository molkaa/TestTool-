<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_980ae6558972df2f5d1f99f14a85b656a3a1c81df137c8f042c872305dda3fc2 extends Twig_Template
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
        $__internal_1f95ddb5ca96862f88ab18d10a5f32447aa64f414bd3a99898a76e5a5d7d5368 = $this->env->getExtension("native_profiler");
        $__internal_1f95ddb5ca96862f88ab18d10a5f32447aa64f414bd3a99898a76e5a5d7d5368->enter($__internal_1f95ddb5ca96862f88ab18d10a5f32447aa64f414bd3a99898a76e5a5d7d5368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1f95ddb5ca96862f88ab18d10a5f32447aa64f414bd3a99898a76e5a5d7d5368->leave($__internal_1f95ddb5ca96862f88ab18d10a5f32447aa64f414bd3a99898a76e5a5d7d5368_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
