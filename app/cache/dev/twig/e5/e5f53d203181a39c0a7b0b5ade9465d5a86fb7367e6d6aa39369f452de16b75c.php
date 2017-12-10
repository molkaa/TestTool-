<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_06c3c0307b83d1cba2f6f514843ef4eed5336de5e40d2723a5a55da226f5a5ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_87b149b8fb18a86321193c965822b5232abf9d0b58392ad8e342516f2f7cab9c = $this->env->getExtension("native_profiler");
        $__internal_87b149b8fb18a86321193c965822b5232abf9d0b58392ad8e342516f2f7cab9c->enter($__internal_87b149b8fb18a86321193c965822b5232abf9d0b58392ad8e342516f2f7cab9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b149b8fb18a86321193c965822b5232abf9d0b58392ad8e342516f2f7cab9c->leave($__internal_87b149b8fb18a86321193c965822b5232abf9d0b58392ad8e342516f2f7cab9c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d5b21d741fedfe08e53a46e937b6680554c902169a07b9920bd56d409b32042 = $this->env->getExtension("native_profiler");
        $__internal_7d5b21d741fedfe08e53a46e937b6680554c902169a07b9920bd56d409b32042->enter($__internal_7d5b21d741fedfe08e53a46e937b6680554c902169a07b9920bd56d409b32042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7d5b21d741fedfe08e53a46e937b6680554c902169a07b9920bd56d409b32042->leave($__internal_7d5b21d741fedfe08e53a46e937b6680554c902169a07b9920bd56d409b32042_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
