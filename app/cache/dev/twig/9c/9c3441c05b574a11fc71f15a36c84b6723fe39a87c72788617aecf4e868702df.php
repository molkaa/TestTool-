<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_90bdc40e0ce70be23e559fa3d1217983461e9f7d06068216927676ab04645d31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_d31782f6fa87a86345682e190ec5b6892a824b7b20f6d54ea89a965b630d43a5 = $this->env->getExtension("native_profiler");
        $__internal_d31782f6fa87a86345682e190ec5b6892a824b7b20f6d54ea89a965b630d43a5->enter($__internal_d31782f6fa87a86345682e190ec5b6892a824b7b20f6d54ea89a965b630d43a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d31782f6fa87a86345682e190ec5b6892a824b7b20f6d54ea89a965b630d43a5->leave($__internal_d31782f6fa87a86345682e190ec5b6892a824b7b20f6d54ea89a965b630d43a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26baf813e361c26a80c255049f65ca989e77d3911a5612534d52fab3272f7b92 = $this->env->getExtension("native_profiler");
        $__internal_26baf813e361c26a80c255049f65ca989e77d3911a5612534d52fab3272f7b92->enter($__internal_26baf813e361c26a80c255049f65ca989e77d3911a5612534d52fab3272f7b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_26baf813e361c26a80c255049f65ca989e77d3911a5612534d52fab3272f7b92->leave($__internal_26baf813e361c26a80c255049f65ca989e77d3911a5612534d52fab3272f7b92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
