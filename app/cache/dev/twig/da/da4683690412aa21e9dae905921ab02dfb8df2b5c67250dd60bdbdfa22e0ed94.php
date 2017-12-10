<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9b4ad6b919ac32bfb60e60294f440a9a3edf3f59b6a675bf4acec7e340d7db26 extends Twig_Template
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
        $__internal_17877a26cd2663415922cb61c55e449f1fc033090abd00a1c43ae5ce78e60ed1 = $this->env->getExtension("native_profiler");
        $__internal_17877a26cd2663415922cb61c55e449f1fc033090abd00a1c43ae5ce78e60ed1->enter($__internal_17877a26cd2663415922cb61c55e449f1fc033090abd00a1c43ae5ce78e60ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_17877a26cd2663415922cb61c55e449f1fc033090abd00a1c43ae5ce78e60ed1->leave($__internal_17877a26cd2663415922cb61c55e449f1fc033090abd00a1c43ae5ce78e60ed1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
