<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_113be297e2604d792ce265e5434f4898df84e5eeee36f8aa9b0791ba43e86aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_7e89f78419595224e0a17ae4017a334ab8780f2abd9818d42f6a96c754063538 = $this->env->getExtension("native_profiler");
        $__internal_7e89f78419595224e0a17ae4017a334ab8780f2abd9818d42f6a96c754063538->enter($__internal_7e89f78419595224e0a17ae4017a334ab8780f2abd9818d42f6a96c754063538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e89f78419595224e0a17ae4017a334ab8780f2abd9818d42f6a96c754063538->leave($__internal_7e89f78419595224e0a17ae4017a334ab8780f2abd9818d42f6a96c754063538_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c224eb47bed8389fca10a4654cb642465a5ffab1c1851f8695d3555896ef176 = $this->env->getExtension("native_profiler");
        $__internal_2c224eb47bed8389fca10a4654cb642465a5ffab1c1851f8695d3555896ef176->enter($__internal_2c224eb47bed8389fca10a4654cb642465a5ffab1c1851f8695d3555896ef176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2c224eb47bed8389fca10a4654cb642465a5ffab1c1851f8695d3555896ef176->leave($__internal_2c224eb47bed8389fca10a4654cb642465a5ffab1c1851f8695d3555896ef176_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
