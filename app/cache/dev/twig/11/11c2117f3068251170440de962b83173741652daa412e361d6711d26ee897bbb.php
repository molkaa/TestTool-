<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_94ad18e1dc17546b71e3297f0d2c0ec6d116540b3049d180afc1fa626084bb39 extends Twig_Template
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
        $__internal_1bd13590a9a8525a606a031cfd6a073ffd0b910d3d9ab285f18d1a7598023614 = $this->env->getExtension("native_profiler");
        $__internal_1bd13590a9a8525a606a031cfd6a073ffd0b910d3d9ab285f18d1a7598023614->enter($__internal_1bd13590a9a8525a606a031cfd6a073ffd0b910d3d9ab285f18d1a7598023614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_1bd13590a9a8525a606a031cfd6a073ffd0b910d3d9ab285f18d1a7598023614->leave($__internal_1bd13590a9a8525a606a031cfd6a073ffd0b910d3d9ab285f18d1a7598023614_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
