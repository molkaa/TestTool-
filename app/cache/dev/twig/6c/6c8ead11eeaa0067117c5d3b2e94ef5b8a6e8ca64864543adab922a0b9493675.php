<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_96735704e1b61376e6b49d6519e62ea3e6110217707e15c60219846e83aa0800 extends Twig_Template
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
        $__internal_b44a682d3e01f7b20697f69dc6801889832c4319bc6318316863062b9b72c7b0 = $this->env->getExtension("native_profiler");
        $__internal_b44a682d3e01f7b20697f69dc6801889832c4319bc6318316863062b9b72c7b0->enter($__internal_b44a682d3e01f7b20697f69dc6801889832c4319bc6318316863062b9b72c7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b44a682d3e01f7b20697f69dc6801889832c4319bc6318316863062b9b72c7b0->leave($__internal_b44a682d3e01f7b20697f69dc6801889832c4319bc6318316863062b9b72c7b0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0f0953fcfe9e54dea28c8ea532b9df23fbe17934a08546993885e01db99013f7 = $this->env->getExtension("native_profiler");
        $__internal_0f0953fcfe9e54dea28c8ea532b9df23fbe17934a08546993885e01db99013f7->enter($__internal_0f0953fcfe9e54dea28c8ea532b9df23fbe17934a08546993885e01db99013f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0f0953fcfe9e54dea28c8ea532b9df23fbe17934a08546993885e01db99013f7->leave($__internal_0f0953fcfe9e54dea28c8ea532b9df23fbe17934a08546993885e01db99013f7_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8acd1229043f6b5db5de0677b06743c586ce9f836e200f35fb2a4eb3a40f3684 = $this->env->getExtension("native_profiler");
        $__internal_8acd1229043f6b5db5de0677b06743c586ce9f836e200f35fb2a4eb3a40f3684->enter($__internal_8acd1229043f6b5db5de0677b06743c586ce9f836e200f35fb2a4eb3a40f3684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8acd1229043f6b5db5de0677b06743c586ce9f836e200f35fb2a4eb3a40f3684->leave($__internal_8acd1229043f6b5db5de0677b06743c586ce9f836e200f35fb2a4eb3a40f3684_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f4a7558cbbb57f47879cc2977d8f5f0bc159a6cea54925650e19b245d3dd2c78 = $this->env->getExtension("native_profiler");
        $__internal_f4a7558cbbb57f47879cc2977d8f5f0bc159a6cea54925650e19b245d3dd2c78->enter($__internal_f4a7558cbbb57f47879cc2977d8f5f0bc159a6cea54925650e19b245d3dd2c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f4a7558cbbb57f47879cc2977d8f5f0bc159a6cea54925650e19b245d3dd2c78->leave($__internal_f4a7558cbbb57f47879cc2977d8f5f0bc159a6cea54925650e19b245d3dd2c78_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
