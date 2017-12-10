<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_f80291b02dbddf8688011edb5405e0cc37d81dc96ffae421c5d0cf40617cabed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ffbd4ddc39d0d21ec11fc76ead70d627162d173fb2387528219035c9b8be638 = $this->env->getExtension("native_profiler");
        $__internal_0ffbd4ddc39d0d21ec11fc76ead70d627162d173fb2387528219035c9b8be638->enter($__internal_0ffbd4ddc39d0d21ec11fc76ead70d627162d173fb2387528219035c9b8be638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ffbd4ddc39d0d21ec11fc76ead70d627162d173fb2387528219035c9b8be638->leave($__internal_0ffbd4ddc39d0d21ec11fc76ead70d627162d173fb2387528219035c9b8be638_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48cdafb8cdc84cfb397788d717b9012b53513390509ae4d88df52578bcfcc5cd = $this->env->getExtension("native_profiler");
        $__internal_48cdafb8cdc84cfb397788d717b9012b53513390509ae4d88df52578bcfcc5cd->enter($__internal_48cdafb8cdc84cfb397788d717b9012b53513390509ae4d88df52578bcfcc5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_48cdafb8cdc84cfb397788d717b9012b53513390509ae4d88df52578bcfcc5cd->leave($__internal_48cdafb8cdc84cfb397788d717b9012b53513390509ae4d88df52578bcfcc5cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_052fb103cfcadca264d106ba496d64d042f3e7a31272c586df95738c0705ba60 = $this->env->getExtension("native_profiler");
        $__internal_052fb103cfcadca264d106ba496d64d042f3e7a31272c586df95738c0705ba60->enter($__internal_052fb103cfcadca264d106ba496d64d042f3e7a31272c586df95738c0705ba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_052fb103cfcadca264d106ba496d64d042f3e7a31272c586df95738c0705ba60->leave($__internal_052fb103cfcadca264d106ba496d64d042f3e7a31272c586df95738c0705ba60_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d2621c8165c7aaea0eda8b5c66c7a3e87b5bf07b00bd99014f2ab0ce7ca882b = $this->env->getExtension("native_profiler");
        $__internal_5d2621c8165c7aaea0eda8b5c66c7a3e87b5bf07b00bd99014f2ab0ce7ca882b->enter($__internal_5d2621c8165c7aaea0eda8b5c66c7a3e87b5bf07b00bd99014f2ab0ce7ca882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_5d2621c8165c7aaea0eda8b5c66c7a3e87b5bf07b00bd99014f2ab0ce7ca882b->leave($__internal_5d2621c8165c7aaea0eda8b5c66c7a3e87b5bf07b00bd99014f2ab0ce7ca882b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_97da0bce42e9a4d92eeb608f05161fe01470024cd691d362b4a5d8d8f6120910 = $this->env->getExtension("native_profiler");
        $__internal_97da0bce42e9a4d92eeb608f05161fe01470024cd691d362b4a5d8d8f6120910->enter($__internal_97da0bce42e9a4d92eeb608f05161fe01470024cd691d362b4a5d8d8f6120910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_97da0bce42e9a4d92eeb608f05161fe01470024cd691d362b4a5d8d8f6120910->leave($__internal_97da0bce42e9a4d92eeb608f05161fe01470024cd691d362b4a5d8d8f6120910_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
