<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_279185731d7b7443ad36a5bf103ccce33d63607c3e51725e610f75ad2fd29053 extends Twig_Template
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
        $__internal_06159d5d79f52ac1dc4f7941a972692847e5536e5f18bbcd2ceb9d8566bedd8a = $this->env->getExtension("native_profiler");
        $__internal_06159d5d79f52ac1dc4f7941a972692847e5536e5f18bbcd2ceb9d8566bedd8a->enter($__internal_06159d5d79f52ac1dc4f7941a972692847e5536e5f18bbcd2ceb9d8566bedd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_06159d5d79f52ac1dc4f7941a972692847e5536e5f18bbcd2ceb9d8566bedd8a->leave($__internal_06159d5d79f52ac1dc4f7941a972692847e5536e5f18bbcd2ceb9d8566bedd8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
