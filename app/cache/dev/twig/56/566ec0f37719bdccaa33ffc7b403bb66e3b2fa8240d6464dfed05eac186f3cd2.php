<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5ca6bc7c33f7011e2a4e75bbf762b16657c67876ac3ea36c3e1c1bc7d0e165e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d33c9fa2069431391014552e9767f774b15aa492228719d0a71496a76f2f8ba3 = $this->env->getExtension("native_profiler");
        $__internal_d33c9fa2069431391014552e9767f774b15aa492228719d0a71496a76f2f8ba3->enter($__internal_d33c9fa2069431391014552e9767f774b15aa492228719d0a71496a76f2f8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d33c9fa2069431391014552e9767f774b15aa492228719d0a71496a76f2f8ba3->leave($__internal_d33c9fa2069431391014552e9767f774b15aa492228719d0a71496a76f2f8ba3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8440b9934c54eacf7255b4b3c5c9e90becd7d937677240155ec5c9a44e8ca18d = $this->env->getExtension("native_profiler");
        $__internal_8440b9934c54eacf7255b4b3c5c9e90becd7d937677240155ec5c9a44e8ca18d->enter($__internal_8440b9934c54eacf7255b4b3c5c9e90becd7d937677240155ec5c9a44e8ca18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8440b9934c54eacf7255b4b3c5c9e90becd7d937677240155ec5c9a44e8ca18d->leave($__internal_8440b9934c54eacf7255b4b3c5c9e90becd7d937677240155ec5c9a44e8ca18d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca94b31b010b7af05ff8bb2f3736fa70cf75b52189683e9ccc80ca059d59384a = $this->env->getExtension("native_profiler");
        $__internal_ca94b31b010b7af05ff8bb2f3736fa70cf75b52189683e9ccc80ca059d59384a->enter($__internal_ca94b31b010b7af05ff8bb2f3736fa70cf75b52189683e9ccc80ca059d59384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca94b31b010b7af05ff8bb2f3736fa70cf75b52189683e9ccc80ca059d59384a->leave($__internal_ca94b31b010b7af05ff8bb2f3736fa70cf75b52189683e9ccc80ca059d59384a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0927c3e0b7baef59c76be46dba0f92f4781965e2ab9d887fc6b8b64a247a3f8 = $this->env->getExtension("native_profiler");
        $__internal_c0927c3e0b7baef59c76be46dba0f92f4781965e2ab9d887fc6b8b64a247a3f8->enter($__internal_c0927c3e0b7baef59c76be46dba0f92f4781965e2ab9d887fc6b8b64a247a3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c0927c3e0b7baef59c76be46dba0f92f4781965e2ab9d887fc6b8b64a247a3f8->leave($__internal_c0927c3e0b7baef59c76be46dba0f92f4781965e2ab9d887fc6b8b64a247a3f8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
