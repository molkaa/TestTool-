<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_88ee39efd8a125871acb02fe9e72a0405cac0522e7f32f040c51f9eb539edfe3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_008d7799a72c2aa1ace4934e3695bb1aa97d91a4bf4bcf8571c5edd9bc32bf74 = $this->env->getExtension("native_profiler");
        $__internal_008d7799a72c2aa1ace4934e3695bb1aa97d91a4bf4bcf8571c5edd9bc32bf74->enter($__internal_008d7799a72c2aa1ace4934e3695bb1aa97d91a4bf4bcf8571c5edd9bc32bf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008d7799a72c2aa1ace4934e3695bb1aa97d91a4bf4bcf8571c5edd9bc32bf74->leave($__internal_008d7799a72c2aa1ace4934e3695bb1aa97d91a4bf4bcf8571c5edd9bc32bf74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ba102cb83a5b7db2019be482939e0861aa1b915166ed0cfa29a2ad3206f1a95 = $this->env->getExtension("native_profiler");
        $__internal_7ba102cb83a5b7db2019be482939e0861aa1b915166ed0cfa29a2ad3206f1a95->enter($__internal_7ba102cb83a5b7db2019be482939e0861aa1b915166ed0cfa29a2ad3206f1a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7ba102cb83a5b7db2019be482939e0861aa1b915166ed0cfa29a2ad3206f1a95->leave($__internal_7ba102cb83a5b7db2019be482939e0861aa1b915166ed0cfa29a2ad3206f1a95_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
