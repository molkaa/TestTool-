<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_d6758e3ee9332011dd26d054880914421299c733f6609444684e56f18310686e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_b327c30b22df4d4b0d819c7cbe7e2ad363b83922d98ef9e1314162be150cbf50 = $this->env->getExtension("native_profiler");
        $__internal_b327c30b22df4d4b0d819c7cbe7e2ad363b83922d98ef9e1314162be150cbf50->enter($__internal_b327c30b22df4d4b0d819c7cbe7e2ad363b83922d98ef9e1314162be150cbf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b327c30b22df4d4b0d819c7cbe7e2ad363b83922d98ef9e1314162be150cbf50->leave($__internal_b327c30b22df4d4b0d819c7cbe7e2ad363b83922d98ef9e1314162be150cbf50_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb80c49ac7d1bb742ae0b69f99ceebf5e658c12043651463f8c51f994f69a2df = $this->env->getExtension("native_profiler");
        $__internal_fb80c49ac7d1bb742ae0b69f99ceebf5e658c12043651463f8c51f994f69a2df->enter($__internal_fb80c49ac7d1bb742ae0b69f99ceebf5e658c12043651463f8c51f994f69a2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_fb80c49ac7d1bb742ae0b69f99ceebf5e658c12043651463f8c51f994f69a2df->leave($__internal_fb80c49ac7d1bb742ae0b69f99ceebf5e658c12043651463f8c51f994f69a2df_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
