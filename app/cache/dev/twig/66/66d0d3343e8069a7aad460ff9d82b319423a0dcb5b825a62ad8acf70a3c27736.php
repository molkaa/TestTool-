<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_32ba32d5c6a9d0810886fb4d648609e4d9f3d6c93614f645f1bb7af36f24b483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_60afac3e61920e6e6bcb9452bf19772f8529bd62e4a6cb11760638cd7486c211 = $this->env->getExtension("native_profiler");
        $__internal_60afac3e61920e6e6bcb9452bf19772f8529bd62e4a6cb11760638cd7486c211->enter($__internal_60afac3e61920e6e6bcb9452bf19772f8529bd62e4a6cb11760638cd7486c211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60afac3e61920e6e6bcb9452bf19772f8529bd62e4a6cb11760638cd7486c211->leave($__internal_60afac3e61920e6e6bcb9452bf19772f8529bd62e4a6cb11760638cd7486c211_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94a92a26e30c6878164f85f4c5605890993aea4de3cf74fc74721e0399b22912 = $this->env->getExtension("native_profiler");
        $__internal_94a92a26e30c6878164f85f4c5605890993aea4de3cf74fc74721e0399b22912->enter($__internal_94a92a26e30c6878164f85f4c5605890993aea4de3cf74fc74721e0399b22912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_94a92a26e30c6878164f85f4c5605890993aea4de3cf74fc74721e0399b22912->leave($__internal_94a92a26e30c6878164f85f4c5605890993aea4de3cf74fc74721e0399b22912_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
