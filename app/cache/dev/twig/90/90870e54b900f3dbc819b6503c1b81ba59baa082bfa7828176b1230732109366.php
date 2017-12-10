<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4198878ea5d6094c4d00a619ac8ff12acaf3493f3fd55d4787d8a18bf369fd9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e58ed007e981fbda8cb92ca76d88f424583e69b99b4d68eb847bcbb4c53f1fe8 = $this->env->getExtension("native_profiler");
        $__internal_e58ed007e981fbda8cb92ca76d88f424583e69b99b4d68eb847bcbb4c53f1fe8->enter($__internal_e58ed007e981fbda8cb92ca76d88f424583e69b99b4d68eb847bcbb4c53f1fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58ed007e981fbda8cb92ca76d88f424583e69b99b4d68eb847bcbb4c53f1fe8->leave($__internal_e58ed007e981fbda8cb92ca76d88f424583e69b99b4d68eb847bcbb4c53f1fe8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e83cbf5d755ceeab7452cfb5ce7ce675dccaad9b305c9d72a37bc7096cb0720 = $this->env->getExtension("native_profiler");
        $__internal_5e83cbf5d755ceeab7452cfb5ce7ce675dccaad9b305c9d72a37bc7096cb0720->enter($__internal_5e83cbf5d755ceeab7452cfb5ce7ce675dccaad9b305c9d72a37bc7096cb0720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5e83cbf5d755ceeab7452cfb5ce7ce675dccaad9b305c9d72a37bc7096cb0720->leave($__internal_5e83cbf5d755ceeab7452cfb5ce7ce675dccaad9b305c9d72a37bc7096cb0720_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06790ff091cfe7a30ea33cf545ed81ccfc7d0e473143d090a1a5191916a1a555 = $this->env->getExtension("native_profiler");
        $__internal_06790ff091cfe7a30ea33cf545ed81ccfc7d0e473143d090a1a5191916a1a555->enter($__internal_06790ff091cfe7a30ea33cf545ed81ccfc7d0e473143d090a1a5191916a1a555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06790ff091cfe7a30ea33cf545ed81ccfc7d0e473143d090a1a5191916a1a555->leave($__internal_06790ff091cfe7a30ea33cf545ed81ccfc7d0e473143d090a1a5191916a1a555_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ee9f6cc7b06e26b0bf6d9b43529e9df709ec192f7e4d6892f238a5794f648b7 = $this->env->getExtension("native_profiler");
        $__internal_6ee9f6cc7b06e26b0bf6d9b43529e9df709ec192f7e4d6892f238a5794f648b7->enter($__internal_6ee9f6cc7b06e26b0bf6d9b43529e9df709ec192f7e4d6892f238a5794f648b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ee9f6cc7b06e26b0bf6d9b43529e9df709ec192f7e4d6892f238a5794f648b7->leave($__internal_6ee9f6cc7b06e26b0bf6d9b43529e9df709ec192f7e4d6892f238a5794f648b7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
