<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_897b8f81d7fac5d804b209303b7a2679d4b25351062f7e160105eea8c12ffca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_bdf28448199338e826157b7709c5dc65683faf50f09d5305aa605b5002dff302 = $this->env->getExtension("native_profiler");
        $__internal_bdf28448199338e826157b7709c5dc65683faf50f09d5305aa605b5002dff302->enter($__internal_bdf28448199338e826157b7709c5dc65683faf50f09d5305aa605b5002dff302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf28448199338e826157b7709c5dc65683faf50f09d5305aa605b5002dff302->leave($__internal_bdf28448199338e826157b7709c5dc65683faf50f09d5305aa605b5002dff302_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4569372b2529ced1c8e07e2ef0b45a8e8525b21b2da737cd769b695a74d0433c = $this->env->getExtension("native_profiler");
        $__internal_4569372b2529ced1c8e07e2ef0b45a8e8525b21b2da737cd769b695a74d0433c->enter($__internal_4569372b2529ced1c8e07e2ef0b45a8e8525b21b2da737cd769b695a74d0433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_4569372b2529ced1c8e07e2ef0b45a8e8525b21b2da737cd769b695a74d0433c->leave($__internal_4569372b2529ced1c8e07e2ef0b45a8e8525b21b2da737cd769b695a74d0433c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
