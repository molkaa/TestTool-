<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_ec998bce3247ddd131317122054fb5c5ae69d9f0694b085bdfd86dc233c256c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ede30792f20c385c1c373bed89430a966d6283e15118fcc167266d9d7b2e9c28 = $this->env->getExtension("native_profiler");
        $__internal_ede30792f20c385c1c373bed89430a966d6283e15118fcc167266d9d7b2e9c28->enter($__internal_ede30792f20c385c1c373bed89430a966d6283e15118fcc167266d9d7b2e9c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede30792f20c385c1c373bed89430a966d6283e15118fcc167266d9d7b2e9c28->leave($__internal_ede30792f20c385c1c373bed89430a966d6283e15118fcc167266d9d7b2e9c28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7aa89289de34d45289f3e7d8d198f2e5f3ec7653720da9afbb8f290f85dc6fd8 = $this->env->getExtension("native_profiler");
        $__internal_7aa89289de34d45289f3e7d8d198f2e5f3ec7653720da9afbb8f290f85dc6fd8->enter($__internal_7aa89289de34d45289f3e7d8d198f2e5f3ec7653720da9afbb8f290f85dc6fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7aa89289de34d45289f3e7d8d198f2e5f3ec7653720da9afbb8f290f85dc6fd8->leave($__internal_7aa89289de34d45289f3e7d8d198f2e5f3ec7653720da9afbb8f290f85dc6fd8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
