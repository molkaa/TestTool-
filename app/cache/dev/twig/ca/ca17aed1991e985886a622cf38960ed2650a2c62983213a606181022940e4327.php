<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b271095231694cc0a5e94bcb7fafed98d332e9a7471e84a156493e4180f2a957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_b8dd185ad4305cfd864b0c3aef5957c7c18a59c33f2515ec48e004258b3791fe = $this->env->getExtension("native_profiler");
        $__internal_b8dd185ad4305cfd864b0c3aef5957c7c18a59c33f2515ec48e004258b3791fe->enter($__internal_b8dd185ad4305cfd864b0c3aef5957c7c18a59c33f2515ec48e004258b3791fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8dd185ad4305cfd864b0c3aef5957c7c18a59c33f2515ec48e004258b3791fe->leave($__internal_b8dd185ad4305cfd864b0c3aef5957c7c18a59c33f2515ec48e004258b3791fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b0f51ed895c6cdf8e6ff581e9ac47ab2158c7a5c902edda1afd713fe24fde77 = $this->env->getExtension("native_profiler");
        $__internal_0b0f51ed895c6cdf8e6ff581e9ac47ab2158c7a5c902edda1afd713fe24fde77->enter($__internal_0b0f51ed895c6cdf8e6ff581e9ac47ab2158c7a5c902edda1afd713fe24fde77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_0b0f51ed895c6cdf8e6ff581e9ac47ab2158c7a5c902edda1afd713fe24fde77->leave($__internal_0b0f51ed895c6cdf8e6ff581e9ac47ab2158c7a5c902edda1afd713fe24fde77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a7283fd2a530e5dad0829427d7191863ce5cda28f1044b0aac9acbe2656fdce = $this->env->getExtension("native_profiler");
        $__internal_6a7283fd2a530e5dad0829427d7191863ce5cda28f1044b0aac9acbe2656fdce->enter($__internal_6a7283fd2a530e5dad0829427d7191863ce5cda28f1044b0aac9acbe2656fdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6a7283fd2a530e5dad0829427d7191863ce5cda28f1044b0aac9acbe2656fdce->leave($__internal_6a7283fd2a530e5dad0829427d7191863ce5cda28f1044b0aac9acbe2656fdce_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0206a2fddbe684d03c8d04a5704be2420fa0c23781ea2bb6ca0b3670efadc7f = $this->env->getExtension("native_profiler");
        $__internal_e0206a2fddbe684d03c8d04a5704be2420fa0c23781ea2bb6ca0b3670efadc7f->enter($__internal_e0206a2fddbe684d03c8d04a5704be2420fa0c23781ea2bb6ca0b3670efadc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e0206a2fddbe684d03c8d04a5704be2420fa0c23781ea2bb6ca0b3670efadc7f->leave($__internal_e0206a2fddbe684d03c8d04a5704be2420fa0c23781ea2bb6ca0b3670efadc7f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5257a63ca1e0aec584fb9ca79dfd62e6fed6035573be5faa4e60de44b0d9623 = $this->env->getExtension("native_profiler");
        $__internal_a5257a63ca1e0aec584fb9ca79dfd62e6fed6035573be5faa4e60de44b0d9623->enter($__internal_a5257a63ca1e0aec584fb9ca79dfd62e6fed6035573be5faa4e60de44b0d9623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a5257a63ca1e0aec584fb9ca79dfd62e6fed6035573be5faa4e60de44b0d9623->leave($__internal_a5257a63ca1e0aec584fb9ca79dfd62e6fed6035573be5faa4e60de44b0d9623_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
