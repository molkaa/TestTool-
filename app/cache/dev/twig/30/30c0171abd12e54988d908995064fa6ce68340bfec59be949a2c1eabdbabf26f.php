<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0b0b56858dac815cab3f6c4b53bb009c0034ef52fa6708541db75e50d8db3e6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_052717527c3e10882a1bff4126f1fd7bdd3fb7ebdab0686daf7274bd76ec51ce = $this->env->getExtension("native_profiler");
        $__internal_052717527c3e10882a1bff4126f1fd7bdd3fb7ebdab0686daf7274bd76ec51ce->enter($__internal_052717527c3e10882a1bff4126f1fd7bdd3fb7ebdab0686daf7274bd76ec51ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_052717527c3e10882a1bff4126f1fd7bdd3fb7ebdab0686daf7274bd76ec51ce->leave($__internal_052717527c3e10882a1bff4126f1fd7bdd3fb7ebdab0686daf7274bd76ec51ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26aced5042c186aea9ea0fda95128b798dfd815b2cf9e38bdaf5ce17babbc2ad = $this->env->getExtension("native_profiler");
        $__internal_26aced5042c186aea9ea0fda95128b798dfd815b2cf9e38bdaf5ce17babbc2ad->enter($__internal_26aced5042c186aea9ea0fda95128b798dfd815b2cf9e38bdaf5ce17babbc2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_26aced5042c186aea9ea0fda95128b798dfd815b2cf9e38bdaf5ce17babbc2ad->leave($__internal_26aced5042c186aea9ea0fda95128b798dfd815b2cf9e38bdaf5ce17babbc2ad_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
