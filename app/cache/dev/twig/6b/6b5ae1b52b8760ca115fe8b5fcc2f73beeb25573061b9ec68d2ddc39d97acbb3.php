<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_748a25585e56c46cbbec7bb590bdbb5e51c0ba937521ed2211fec8eabcc3f2ea extends Twig_Template
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
        $__internal_c2d67da6d5bdc4dfb8a9e93526eaf350162a0ea3abc7088db5b070897c7e6998 = $this->env->getExtension("native_profiler");
        $__internal_c2d67da6d5bdc4dfb8a9e93526eaf350162a0ea3abc7088db5b070897c7e6998->enter($__internal_c2d67da6d5bdc4dfb8a9e93526eaf350162a0ea3abc7088db5b070897c7e6998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c2d67da6d5bdc4dfb8a9e93526eaf350162a0ea3abc7088db5b070897c7e6998->leave($__internal_c2d67da6d5bdc4dfb8a9e93526eaf350162a0ea3abc7088db5b070897c7e6998_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b89b93aa978514e81c5ab287b492675c84e3cc4f15498b65d75b16aed8bc1576 = $this->env->getExtension("native_profiler");
        $__internal_b89b93aa978514e81c5ab287b492675c84e3cc4f15498b65d75b16aed8bc1576->enter($__internal_b89b93aa978514e81c5ab287b492675c84e3cc4f15498b65d75b16aed8bc1576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b89b93aa978514e81c5ab287b492675c84e3cc4f15498b65d75b16aed8bc1576->leave($__internal_b89b93aa978514e81c5ab287b492675c84e3cc4f15498b65d75b16aed8bc1576_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7950a19f6ee2df542f59b883cfe4ddd9700c6f8fb94e95761fa3240952bdbc79 = $this->env->getExtension("native_profiler");
        $__internal_7950a19f6ee2df542f59b883cfe4ddd9700c6f8fb94e95761fa3240952bdbc79->enter($__internal_7950a19f6ee2df542f59b883cfe4ddd9700c6f8fb94e95761fa3240952bdbc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7950a19f6ee2df542f59b883cfe4ddd9700c6f8fb94e95761fa3240952bdbc79->leave($__internal_7950a19f6ee2df542f59b883cfe4ddd9700c6f8fb94e95761fa3240952bdbc79_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1731dee8d76802aae34e35e1d883ea39908c214531bf29b067b2eb147930c307 = $this->env->getExtension("native_profiler");
        $__internal_1731dee8d76802aae34e35e1d883ea39908c214531bf29b067b2eb147930c307->enter($__internal_1731dee8d76802aae34e35e1d883ea39908c214531bf29b067b2eb147930c307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1731dee8d76802aae34e35e1d883ea39908c214531bf29b067b2eb147930c307->leave($__internal_1731dee8d76802aae34e35e1d883ea39908c214531bf29b067b2eb147930c307_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
