<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c71442b3786c373922d3727e15290cd418a3337829fc05e5080ab97f4cf1ea69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_09a92fcaed9b61eb19e5be521da01fe65e00cbc14eff7e8da57da7b08954e60b = $this->env->getExtension("native_profiler");
        $__internal_09a92fcaed9b61eb19e5be521da01fe65e00cbc14eff7e8da57da7b08954e60b->enter($__internal_09a92fcaed9b61eb19e5be521da01fe65e00cbc14eff7e8da57da7b08954e60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a92fcaed9b61eb19e5be521da01fe65e00cbc14eff7e8da57da7b08954e60b->leave($__internal_09a92fcaed9b61eb19e5be521da01fe65e00cbc14eff7e8da57da7b08954e60b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_823467bceba2f9f26177d8e958cbbd9b794b7780b26e1fe762203b0fe285ede6 = $this->env->getExtension("native_profiler");
        $__internal_823467bceba2f9f26177d8e958cbbd9b794b7780b26e1fe762203b0fe285ede6->enter($__internal_823467bceba2f9f26177d8e958cbbd9b794b7780b26e1fe762203b0fe285ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_823467bceba2f9f26177d8e958cbbd9b794b7780b26e1fe762203b0fe285ede6->leave($__internal_823467bceba2f9f26177d8e958cbbd9b794b7780b26e1fe762203b0fe285ede6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
