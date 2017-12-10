<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_bc99555e9b0bf5b28d8463f8628f05d70b98acca1d2fe466fce6c973fc8e3119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b2c790ba38389d554ee564df5bcf0934116bb5ecb7587baadede6aba5133d478 = $this->env->getExtension("native_profiler");
        $__internal_b2c790ba38389d554ee564df5bcf0934116bb5ecb7587baadede6aba5133d478->enter($__internal_b2c790ba38389d554ee564df5bcf0934116bb5ecb7587baadede6aba5133d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c790ba38389d554ee564df5bcf0934116bb5ecb7587baadede6aba5133d478->leave($__internal_b2c790ba38389d554ee564df5bcf0934116bb5ecb7587baadede6aba5133d478_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_476e0192504f23c1344b5ebe856a246c94e8335ef4fee42ae4d6f1eedb05543c = $this->env->getExtension("native_profiler");
        $__internal_476e0192504f23c1344b5ebe856a246c94e8335ef4fee42ae4d6f1eedb05543c->enter($__internal_476e0192504f23c1344b5ebe856a246c94e8335ef4fee42ae4d6f1eedb05543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_476e0192504f23c1344b5ebe856a246c94e8335ef4fee42ae4d6f1eedb05543c->leave($__internal_476e0192504f23c1344b5ebe856a246c94e8335ef4fee42ae4d6f1eedb05543c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
