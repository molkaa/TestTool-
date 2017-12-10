<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6799c0d4074fe7ab16fb2716ab761a8b878118aa5928de664e0e4545adbaf269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_6b4bc36d267558a054e5d58b415197608a21f8cb64f99cf64a9adbc9432dc197 = $this->env->getExtension("native_profiler");
        $__internal_6b4bc36d267558a054e5d58b415197608a21f8cb64f99cf64a9adbc9432dc197->enter($__internal_6b4bc36d267558a054e5d58b415197608a21f8cb64f99cf64a9adbc9432dc197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4bc36d267558a054e5d58b415197608a21f8cb64f99cf64a9adbc9432dc197->leave($__internal_6b4bc36d267558a054e5d58b415197608a21f8cb64f99cf64a9adbc9432dc197_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9956c34482cbb247ddc16e9bab77e52e1717bdd789452809966081eac1057282 = $this->env->getExtension("native_profiler");
        $__internal_9956c34482cbb247ddc16e9bab77e52e1717bdd789452809966081eac1057282->enter($__internal_9956c34482cbb247ddc16e9bab77e52e1717bdd789452809966081eac1057282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9956c34482cbb247ddc16e9bab77e52e1717bdd789452809966081eac1057282->leave($__internal_9956c34482cbb247ddc16e9bab77e52e1717bdd789452809966081eac1057282_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
