<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_2a01c1ebfe24347df04de0f8b424fc79c0ec004569b557065311b822c5fd6fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d158c1456c2217b9873b391b5a313061bc6aaaaaef0bca82cef2e1547b256e4d = $this->env->getExtension("native_profiler");
        $__internal_d158c1456c2217b9873b391b5a313061bc6aaaaaef0bca82cef2e1547b256e4d->enter($__internal_d158c1456c2217b9873b391b5a313061bc6aaaaaef0bca82cef2e1547b256e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d158c1456c2217b9873b391b5a313061bc6aaaaaef0bca82cef2e1547b256e4d->leave($__internal_d158c1456c2217b9873b391b5a313061bc6aaaaaef0bca82cef2e1547b256e4d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6e58bccf416ba9a7162be07685ce5e458b35606325a10e79dd31947bc4c0531 = $this->env->getExtension("native_profiler");
        $__internal_b6e58bccf416ba9a7162be07685ce5e458b35606325a10e79dd31947bc4c0531->enter($__internal_b6e58bccf416ba9a7162be07685ce5e458b35606325a10e79dd31947bc4c0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b6e58bccf416ba9a7162be07685ce5e458b35606325a10e79dd31947bc4c0531->leave($__internal_b6e58bccf416ba9a7162be07685ce5e458b35606325a10e79dd31947bc4c0531_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_adab81848b7072a17b8124cfc2a6996f4ae88effe198406839c61092076c164b = $this->env->getExtension("native_profiler");
        $__internal_adab81848b7072a17b8124cfc2a6996f4ae88effe198406839c61092076c164b->enter($__internal_adab81848b7072a17b8124cfc2a6996f4ae88effe198406839c61092076c164b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_adab81848b7072a17b8124cfc2a6996f4ae88effe198406839c61092076c164b->leave($__internal_adab81848b7072a17b8124cfc2a6996f4ae88effe198406839c61092076c164b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d70a7a7c216e4c7f0ac07d38356bec8b2826171a21d9e077c1ef3a307f6a9a0 = $this->env->getExtension("native_profiler");
        $__internal_4d70a7a7c216e4c7f0ac07d38356bec8b2826171a21d9e077c1ef3a307f6a9a0->enter($__internal_4d70a7a7c216e4c7f0ac07d38356bec8b2826171a21d9e077c1ef3a307f6a9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4d70a7a7c216e4c7f0ac07d38356bec8b2826171a21d9e077c1ef3a307f6a9a0->leave($__internal_4d70a7a7c216e4c7f0ac07d38356bec8b2826171a21d9e077c1ef3a307f6a9a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
