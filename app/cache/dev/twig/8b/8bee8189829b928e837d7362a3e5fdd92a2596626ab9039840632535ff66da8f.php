<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6cb87bfcd28c933d9194fc18d6436d350769a4bd510e320325db946c87ab2c10 extends Twig_Template
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
        $__internal_036d288feb19d983924190ce152f4aa8ddb3a158e29d6edf459dc081502ebc52 = $this->env->getExtension("native_profiler");
        $__internal_036d288feb19d983924190ce152f4aa8ddb3a158e29d6edf459dc081502ebc52->enter($__internal_036d288feb19d983924190ce152f4aa8ddb3a158e29d6edf459dc081502ebc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_036d288feb19d983924190ce152f4aa8ddb3a158e29d6edf459dc081502ebc52->leave($__internal_036d288feb19d983924190ce152f4aa8ddb3a158e29d6edf459dc081502ebc52_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_532cbfc382e45016143151b6c9ea55111cdb8c028bb81a5473c8d56f249572c5 = $this->env->getExtension("native_profiler");
        $__internal_532cbfc382e45016143151b6c9ea55111cdb8c028bb81a5473c8d56f249572c5->enter($__internal_532cbfc382e45016143151b6c9ea55111cdb8c028bb81a5473c8d56f249572c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_532cbfc382e45016143151b6c9ea55111cdb8c028bb81a5473c8d56f249572c5->leave($__internal_532cbfc382e45016143151b6c9ea55111cdb8c028bb81a5473c8d56f249572c5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4a5ce1d66280ac73b179caf83cb963f64e43d52848df20dc574e67c1b45adae6 = $this->env->getExtension("native_profiler");
        $__internal_4a5ce1d66280ac73b179caf83cb963f64e43d52848df20dc574e67c1b45adae6->enter($__internal_4a5ce1d66280ac73b179caf83cb963f64e43d52848df20dc574e67c1b45adae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4a5ce1d66280ac73b179caf83cb963f64e43d52848df20dc574e67c1b45adae6->leave($__internal_4a5ce1d66280ac73b179caf83cb963f64e43d52848df20dc574e67c1b45adae6_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b0589887b6874edea51861915903f0f47ee2e7e61428daaad395a3896fa53664 = $this->env->getExtension("native_profiler");
        $__internal_b0589887b6874edea51861915903f0f47ee2e7e61428daaad395a3896fa53664->enter($__internal_b0589887b6874edea51861915903f0f47ee2e7e61428daaad395a3896fa53664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b0589887b6874edea51861915903f0f47ee2e7e61428daaad395a3896fa53664->leave($__internal_b0589887b6874edea51861915903f0f47ee2e7e61428daaad395a3896fa53664_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
