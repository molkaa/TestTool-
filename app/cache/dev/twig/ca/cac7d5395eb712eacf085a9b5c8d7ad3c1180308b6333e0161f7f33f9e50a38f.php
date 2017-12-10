<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dc5fdc4ce1693dffdfdaf0785ce1b1b227729ee37a2a2465b1e5275002904977 extends Twig_Template
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
        $__internal_5c0aa40775c34e8d7078398e922bfe555f9e180f291a4bef82b5c61a731d3796 = $this->env->getExtension("native_profiler");
        $__internal_5c0aa40775c34e8d7078398e922bfe555f9e180f291a4bef82b5c61a731d3796->enter($__internal_5c0aa40775c34e8d7078398e922bfe555f9e180f291a4bef82b5c61a731d3796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5c0aa40775c34e8d7078398e922bfe555f9e180f291a4bef82b5c61a731d3796->leave($__internal_5c0aa40775c34e8d7078398e922bfe555f9e180f291a4bef82b5c61a731d3796_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
