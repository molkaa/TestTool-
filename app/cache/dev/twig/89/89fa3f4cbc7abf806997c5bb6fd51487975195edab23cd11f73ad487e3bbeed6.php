<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7dcb330516ba46f880fc27c0a65fa5e3ebf6d62fd7ab8f2540789d61252abe06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_117eebbc036742f3b1356bb51c32fd52f328e98895b80d9bcb5004bc375e5d34 = $this->env->getExtension("native_profiler");
        $__internal_117eebbc036742f3b1356bb51c32fd52f328e98895b80d9bcb5004bc375e5d34->enter($__internal_117eebbc036742f3b1356bb51c32fd52f328e98895b80d9bcb5004bc375e5d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117eebbc036742f3b1356bb51c32fd52f328e98895b80d9bcb5004bc375e5d34->leave($__internal_117eebbc036742f3b1356bb51c32fd52f328e98895b80d9bcb5004bc375e5d34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa6a5d97d41d6799e179bc641ce7150556ff388728dc4860d66cd434757c5d5c = $this->env->getExtension("native_profiler");
        $__internal_fa6a5d97d41d6799e179bc641ce7150556ff388728dc4860d66cd434757c5d5c->enter($__internal_fa6a5d97d41d6799e179bc641ce7150556ff388728dc4860d66cd434757c5d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fa6a5d97d41d6799e179bc641ce7150556ff388728dc4860d66cd434757c5d5c->leave($__internal_fa6a5d97d41d6799e179bc641ce7150556ff388728dc4860d66cd434757c5d5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
