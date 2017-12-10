<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_da74779f9daea05a4824f142286259739d979377947f3e2478ce0aa1dcc64532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5c76c20124543362dce55e7b34ab1cd6118bcff9e8529a06022314837c0bc3d3 = $this->env->getExtension("native_profiler");
        $__internal_5c76c20124543362dce55e7b34ab1cd6118bcff9e8529a06022314837c0bc3d3->enter($__internal_5c76c20124543362dce55e7b34ab1cd6118bcff9e8529a06022314837c0bc3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c76c20124543362dce55e7b34ab1cd6118bcff9e8529a06022314837c0bc3d3->leave($__internal_5c76c20124543362dce55e7b34ab1cd6118bcff9e8529a06022314837c0bc3d3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_249c831edc312c0dc1500a43f234090723ede6cdda05e67d561b100a1dd18e1e = $this->env->getExtension("native_profiler");
        $__internal_249c831edc312c0dc1500a43f234090723ede6cdda05e67d561b100a1dd18e1e->enter($__internal_249c831edc312c0dc1500a43f234090723ede6cdda05e67d561b100a1dd18e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_249c831edc312c0dc1500a43f234090723ede6cdda05e67d561b100a1dd18e1e->leave($__internal_249c831edc312c0dc1500a43f234090723ede6cdda05e67d561b100a1dd18e1e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
