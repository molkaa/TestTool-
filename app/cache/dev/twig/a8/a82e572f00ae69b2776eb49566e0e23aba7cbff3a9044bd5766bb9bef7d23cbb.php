<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e048cfa52216ddbb6243e67cbda700a6fa9fd5e0ccd50a6a7d3c250aaab6d73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_3835b9631d57b9692dee74c5ae06f2c2f83a6671a7cde1fc2a06a3ddc73f9e99 = $this->env->getExtension("native_profiler");
        $__internal_3835b9631d57b9692dee74c5ae06f2c2f83a6671a7cde1fc2a06a3ddc73f9e99->enter($__internal_3835b9631d57b9692dee74c5ae06f2c2f83a6671a7cde1fc2a06a3ddc73f9e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3835b9631d57b9692dee74c5ae06f2c2f83a6671a7cde1fc2a06a3ddc73f9e99->leave($__internal_3835b9631d57b9692dee74c5ae06f2c2f83a6671a7cde1fc2a06a3ddc73f9e99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f979096da6b6b2d2958791e6c9deac2d8fa62b02a3092437c650c9dee5aca610 = $this->env->getExtension("native_profiler");
        $__internal_f979096da6b6b2d2958791e6c9deac2d8fa62b02a3092437c650c9dee5aca610->enter($__internal_f979096da6b6b2d2958791e6c9deac2d8fa62b02a3092437c650c9dee5aca610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f979096da6b6b2d2958791e6c9deac2d8fa62b02a3092437c650c9dee5aca610->leave($__internal_f979096da6b6b2d2958791e6c9deac2d8fa62b02a3092437c650c9dee5aca610_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78df84629279d28f7a964477643c47685008b58ddb6c132c2e16809eea0084df = $this->env->getExtension("native_profiler");
        $__internal_78df84629279d28f7a964477643c47685008b58ddb6c132c2e16809eea0084df->enter($__internal_78df84629279d28f7a964477643c47685008b58ddb6c132c2e16809eea0084df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78df84629279d28f7a964477643c47685008b58ddb6c132c2e16809eea0084df->leave($__internal_78df84629279d28f7a964477643c47685008b58ddb6c132c2e16809eea0084df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e28602a7f351f6a60fa7d043798ecf62dc388e08ff68e34b2deadc700800c1a8 = $this->env->getExtension("native_profiler");
        $__internal_e28602a7f351f6a60fa7d043798ecf62dc388e08ff68e34b2deadc700800c1a8->enter($__internal_e28602a7f351f6a60fa7d043798ecf62dc388e08ff68e34b2deadc700800c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e28602a7f351f6a60fa7d043798ecf62dc388e08ff68e34b2deadc700800c1a8->leave($__internal_e28602a7f351f6a60fa7d043798ecf62dc388e08ff68e34b2deadc700800c1a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
