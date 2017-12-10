<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0ed0f70da28882add5c71307a44e882bf10ea9cf113a094777858d1f1d19754d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ecec9272fdb6f0decbe952adeca1c82147d7e44bc659404ede3c12ab85de3ede = $this->env->getExtension("native_profiler");
        $__internal_ecec9272fdb6f0decbe952adeca1c82147d7e44bc659404ede3c12ab85de3ede->enter($__internal_ecec9272fdb6f0decbe952adeca1c82147d7e44bc659404ede3c12ab85de3ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecec9272fdb6f0decbe952adeca1c82147d7e44bc659404ede3c12ab85de3ede->leave($__internal_ecec9272fdb6f0decbe952adeca1c82147d7e44bc659404ede3c12ab85de3ede_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cae3512cb2cd762548bcaf19f49777db8e9fcc32405d836563c31c1f14309c1 = $this->env->getExtension("native_profiler");
        $__internal_7cae3512cb2cd762548bcaf19f49777db8e9fcc32405d836563c31c1f14309c1->enter($__internal_7cae3512cb2cd762548bcaf19f49777db8e9fcc32405d836563c31c1f14309c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7cae3512cb2cd762548bcaf19f49777db8e9fcc32405d836563c31c1f14309c1->leave($__internal_7cae3512cb2cd762548bcaf19f49777db8e9fcc32405d836563c31c1f14309c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
