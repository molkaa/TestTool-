<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_28643f556ccf41a910c0622d04409e79ed29cb665f12bdc40565ad6de580d232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f51e99c797d3eb2dd86ef9a3314a84da839c810585c616fdf112a94212330b12 = $this->env->getExtension("native_profiler");
        $__internal_f51e99c797d3eb2dd86ef9a3314a84da839c810585c616fdf112a94212330b12->enter($__internal_f51e99c797d3eb2dd86ef9a3314a84da839c810585c616fdf112a94212330b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f51e99c797d3eb2dd86ef9a3314a84da839c810585c616fdf112a94212330b12->leave($__internal_f51e99c797d3eb2dd86ef9a3314a84da839c810585c616fdf112a94212330b12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0bfc514e083b6687380a7335b7a65096ba2ed4fcc797db0ccb024df28ceaa64 = $this->env->getExtension("native_profiler");
        $__internal_a0bfc514e083b6687380a7335b7a65096ba2ed4fcc797db0ccb024df28ceaa64->enter($__internal_a0bfc514e083b6687380a7335b7a65096ba2ed4fcc797db0ccb024df28ceaa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a0bfc514e083b6687380a7335b7a65096ba2ed4fcc797db0ccb024df28ceaa64->leave($__internal_a0bfc514e083b6687380a7335b7a65096ba2ed4fcc797db0ccb024df28ceaa64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
