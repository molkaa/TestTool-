<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_16ba77ca53fb8096241439eda6c9c2192a817989cfd3eece5f6a7cadac7d1ba3 extends Twig_Template
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
        $__internal_1fddd2377e24e3f6ea5ddb37978688229decf92e3204673c9db491d5b3101df2 = $this->env->getExtension("native_profiler");
        $__internal_1fddd2377e24e3f6ea5ddb37978688229decf92e3204673c9db491d5b3101df2->enter($__internal_1fddd2377e24e3f6ea5ddb37978688229decf92e3204673c9db491d5b3101df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1fddd2377e24e3f6ea5ddb37978688229decf92e3204673c9db491d5b3101df2->leave($__internal_1fddd2377e24e3f6ea5ddb37978688229decf92e3204673c9db491d5b3101df2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
