<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_07d5a5352445a6967ba1bf4dca0cdb60ef971be5867f541ebed2b17517c74098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_00fae757169210140662ebd158398685e40dbaa1bee3f84949b2b37d5bd51f0f = $this->env->getExtension("native_profiler");
        $__internal_00fae757169210140662ebd158398685e40dbaa1bee3f84949b2b37d5bd51f0f->enter($__internal_00fae757169210140662ebd158398685e40dbaa1bee3f84949b2b37d5bd51f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fae757169210140662ebd158398685e40dbaa1bee3f84949b2b37d5bd51f0f->leave($__internal_00fae757169210140662ebd158398685e40dbaa1bee3f84949b2b37d5bd51f0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_746d388a343ee55e1b997ba70178a04daeac5e551f8589e960c9b3bc8a0d861e = $this->env->getExtension("native_profiler");
        $__internal_746d388a343ee55e1b997ba70178a04daeac5e551f8589e960c9b3bc8a0d861e->enter($__internal_746d388a343ee55e1b997ba70178a04daeac5e551f8589e960c9b3bc8a0d861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_746d388a343ee55e1b997ba70178a04daeac5e551f8589e960c9b3bc8a0d861e->leave($__internal_746d388a343ee55e1b997ba70178a04daeac5e551f8589e960c9b3bc8a0d861e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
