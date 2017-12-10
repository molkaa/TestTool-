<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a21da9517d044d6288adaa004c37cbb9c7017ea3ac569c64340abc57533daa6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_28f9d4fd9d9123fd51885d5a01d3cf24def0516c50b9d2089178ec72f7c1f6ad = $this->env->getExtension("native_profiler");
        $__internal_28f9d4fd9d9123fd51885d5a01d3cf24def0516c50b9d2089178ec72f7c1f6ad->enter($__internal_28f9d4fd9d9123fd51885d5a01d3cf24def0516c50b9d2089178ec72f7c1f6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f9d4fd9d9123fd51885d5a01d3cf24def0516c50b9d2089178ec72f7c1f6ad->leave($__internal_28f9d4fd9d9123fd51885d5a01d3cf24def0516c50b9d2089178ec72f7c1f6ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_012fdc408264bca27d0beec754c750047e0297c7d8b70ebe0ef356f51b998e5a = $this->env->getExtension("native_profiler");
        $__internal_012fdc408264bca27d0beec754c750047e0297c7d8b70ebe0ef356f51b998e5a->enter($__internal_012fdc408264bca27d0beec754c750047e0297c7d8b70ebe0ef356f51b998e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_012fdc408264bca27d0beec754c750047e0297c7d8b70ebe0ef356f51b998e5a->leave($__internal_012fdc408264bca27d0beec754c750047e0297c7d8b70ebe0ef356f51b998e5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
