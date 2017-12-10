<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_7da76928b339971cb21f071c7cd5ede0b14e77fa6f9f3a12ea17093fb5d913c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_2e09b278e3f42a6a6b85904452e69f142942d8e575aee9704d883b26a9e42d66 = $this->env->getExtension("native_profiler");
        $__internal_2e09b278e3f42a6a6b85904452e69f142942d8e575aee9704d883b26a9e42d66->enter($__internal_2e09b278e3f42a6a6b85904452e69f142942d8e575aee9704d883b26a9e42d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e09b278e3f42a6a6b85904452e69f142942d8e575aee9704d883b26a9e42d66->leave($__internal_2e09b278e3f42a6a6b85904452e69f142942d8e575aee9704d883b26a9e42d66_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29b1b5078927738df9224bd78acc882b737cebf84d20ac45a6fa13a4f1ba3e7c = $this->env->getExtension("native_profiler");
        $__internal_29b1b5078927738df9224bd78acc882b737cebf84d20ac45a6fa13a4f1ba3e7c->enter($__internal_29b1b5078927738df9224bd78acc882b737cebf84d20ac45a6fa13a4f1ba3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_29b1b5078927738df9224bd78acc882b737cebf84d20ac45a6fa13a4f1ba3e7c->leave($__internal_29b1b5078927738df9224bd78acc882b737cebf84d20ac45a6fa13a4f1ba3e7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
