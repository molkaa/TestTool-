<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_712352a95d3ca942835eb7eaf0d337605246777167252652d55fd37598887aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3b637c4860377fa29c28760fad716f12fd689ddb5a6751d943bb334d90ce9be9 = $this->env->getExtension("native_profiler");
        $__internal_3b637c4860377fa29c28760fad716f12fd689ddb5a6751d943bb334d90ce9be9->enter($__internal_3b637c4860377fa29c28760fad716f12fd689ddb5a6751d943bb334d90ce9be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b637c4860377fa29c28760fad716f12fd689ddb5a6751d943bb334d90ce9be9->leave($__internal_3b637c4860377fa29c28760fad716f12fd689ddb5a6751d943bb334d90ce9be9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af5d7d9fae24e0584d26d544a6956d7384ebec37f129b45e2fc700456b853d18 = $this->env->getExtension("native_profiler");
        $__internal_af5d7d9fae24e0584d26d544a6956d7384ebec37f129b45e2fc700456b853d18->enter($__internal_af5d7d9fae24e0584d26d544a6956d7384ebec37f129b45e2fc700456b853d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_af5d7d9fae24e0584d26d544a6956d7384ebec37f129b45e2fc700456b853d18->leave($__internal_af5d7d9fae24e0584d26d544a6956d7384ebec37f129b45e2fc700456b853d18_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
