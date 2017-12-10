<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a71fc674136e34ae22ae7221e156d131db44f082f78ba8139913c9b6414cc607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_82bd34847e63d9416d6514422d843e437ba115528e302acf23aba74a175cd53c = $this->env->getExtension("native_profiler");
        $__internal_82bd34847e63d9416d6514422d843e437ba115528e302acf23aba74a175cd53c->enter($__internal_82bd34847e63d9416d6514422d843e437ba115528e302acf23aba74a175cd53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bd34847e63d9416d6514422d843e437ba115528e302acf23aba74a175cd53c->leave($__internal_82bd34847e63d9416d6514422d843e437ba115528e302acf23aba74a175cd53c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_969a9c97db5836321a4ed90e27fa6907ef488f8078462eea00943b81fb8d3f39 = $this->env->getExtension("native_profiler");
        $__internal_969a9c97db5836321a4ed90e27fa6907ef488f8078462eea00943b81fb8d3f39->enter($__internal_969a9c97db5836321a4ed90e27fa6907ef488f8078462eea00943b81fb8d3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_969a9c97db5836321a4ed90e27fa6907ef488f8078462eea00943b81fb8d3f39->leave($__internal_969a9c97db5836321a4ed90e27fa6907ef488f8078462eea00943b81fb8d3f39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
