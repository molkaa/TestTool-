<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_f8aad1c60b95e0a90445627f7d526363aa10dd0245cc4bfd35e5de6af7be24d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_659f2f55505dff421a0990a3fab81764e4127716f3baa24082f93fd73af82307 = $this->env->getExtension("native_profiler");
        $__internal_659f2f55505dff421a0990a3fab81764e4127716f3baa24082f93fd73af82307->enter($__internal_659f2f55505dff421a0990a3fab81764e4127716f3baa24082f93fd73af82307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659f2f55505dff421a0990a3fab81764e4127716f3baa24082f93fd73af82307->leave($__internal_659f2f55505dff421a0990a3fab81764e4127716f3baa24082f93fd73af82307_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_006b74eb38b964ca1f5f6cfa2ddaf744fd773b551770244d727999f169f02532 = $this->env->getExtension("native_profiler");
        $__internal_006b74eb38b964ca1f5f6cfa2ddaf744fd773b551770244d727999f169f02532->enter($__internal_006b74eb38b964ca1f5f6cfa2ddaf744fd773b551770244d727999f169f02532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_006b74eb38b964ca1f5f6cfa2ddaf744fd773b551770244d727999f169f02532->leave($__internal_006b74eb38b964ca1f5f6cfa2ddaf744fd773b551770244d727999f169f02532_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
