<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fc92a44d51cf1ac1493e56ee5b0218f7c82096900bebdf6db95f7bfe33137a7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e30504f0fc0d50ef099e55895bf410b8b8d7af6c46507b0214d5200357aa7ad7 = $this->env->getExtension("native_profiler");
        $__internal_e30504f0fc0d50ef099e55895bf410b8b8d7af6c46507b0214d5200357aa7ad7->enter($__internal_e30504f0fc0d50ef099e55895bf410b8b8d7af6c46507b0214d5200357aa7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e30504f0fc0d50ef099e55895bf410b8b8d7af6c46507b0214d5200357aa7ad7->leave($__internal_e30504f0fc0d50ef099e55895bf410b8b8d7af6c46507b0214d5200357aa7ad7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48fc3944f6d664cea461a5a2306760080d68b3776be5c4ed6c94477ddc8355b6 = $this->env->getExtension("native_profiler");
        $__internal_48fc3944f6d664cea461a5a2306760080d68b3776be5c4ed6c94477ddc8355b6->enter($__internal_48fc3944f6d664cea461a5a2306760080d68b3776be5c4ed6c94477ddc8355b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_48fc3944f6d664cea461a5a2306760080d68b3776be5c4ed6c94477ddc8355b6->leave($__internal_48fc3944f6d664cea461a5a2306760080d68b3776be5c4ed6c94477ddc8355b6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
