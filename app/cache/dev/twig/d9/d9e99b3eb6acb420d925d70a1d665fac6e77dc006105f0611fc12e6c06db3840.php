<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_86d66e6c9da8822e3557ce888bb167be6c60515e59523e2223f1c1ecdb149c03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_dff1d223ed48e28d4f7d2aefc2175c17efb1abdcb9be668a888f8a4b9c0eff12 = $this->env->getExtension("native_profiler");
        $__internal_dff1d223ed48e28d4f7d2aefc2175c17efb1abdcb9be668a888f8a4b9c0eff12->enter($__internal_dff1d223ed48e28d4f7d2aefc2175c17efb1abdcb9be668a888f8a4b9c0eff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff1d223ed48e28d4f7d2aefc2175c17efb1abdcb9be668a888f8a4b9c0eff12->leave($__internal_dff1d223ed48e28d4f7d2aefc2175c17efb1abdcb9be668a888f8a4b9c0eff12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e1ef9a69b226ff579f09cc47750e9fc18e54c580a74870410dfb16ccbb4c72ea = $this->env->getExtension("native_profiler");
        $__internal_e1ef9a69b226ff579f09cc47750e9fc18e54c580a74870410dfb16ccbb4c72ea->enter($__internal_e1ef9a69b226ff579f09cc47750e9fc18e54c580a74870410dfb16ccbb4c72ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e1ef9a69b226ff579f09cc47750e9fc18e54c580a74870410dfb16ccbb4c72ea->leave($__internal_e1ef9a69b226ff579f09cc47750e9fc18e54c580a74870410dfb16ccbb4c72ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
