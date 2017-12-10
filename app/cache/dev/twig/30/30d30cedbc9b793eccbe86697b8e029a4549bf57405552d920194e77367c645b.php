<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_67e9ee097420d587160f23ed2d128f718257ef016e7c90d9753a5c6fa6aff46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9c4e0b1530e10cc28a30a446cab33ecd126d47731f248e9f050f4c6ab35db89a = $this->env->getExtension("native_profiler");
        $__internal_9c4e0b1530e10cc28a30a446cab33ecd126d47731f248e9f050f4c6ab35db89a->enter($__internal_9c4e0b1530e10cc28a30a446cab33ecd126d47731f248e9f050f4c6ab35db89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4e0b1530e10cc28a30a446cab33ecd126d47731f248e9f050f4c6ab35db89a->leave($__internal_9c4e0b1530e10cc28a30a446cab33ecd126d47731f248e9f050f4c6ab35db89a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a38e44520ef33914003c35dbb6c499310fc12b1f501eed0ee659d6c4609bc76a = $this->env->getExtension("native_profiler");
        $__internal_a38e44520ef33914003c35dbb6c499310fc12b1f501eed0ee659d6c4609bc76a->enter($__internal_a38e44520ef33914003c35dbb6c499310fc12b1f501eed0ee659d6c4609bc76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a38e44520ef33914003c35dbb6c499310fc12b1f501eed0ee659d6c4609bc76a->leave($__internal_a38e44520ef33914003c35dbb6c499310fc12b1f501eed0ee659d6c4609bc76a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
