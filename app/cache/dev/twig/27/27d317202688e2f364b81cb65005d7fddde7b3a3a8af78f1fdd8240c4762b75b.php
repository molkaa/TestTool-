<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7d8592f5dbc17f76b98e14e72f1163bbaec99ae6d4e0489a4fa2ea255d6f80dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_49be6aeb4e0b2c8b740ec48bd166117b403717a84c4a0ed2bf5ea3a76095f43b = $this->env->getExtension("native_profiler");
        $__internal_49be6aeb4e0b2c8b740ec48bd166117b403717a84c4a0ed2bf5ea3a76095f43b->enter($__internal_49be6aeb4e0b2c8b740ec48bd166117b403717a84c4a0ed2bf5ea3a76095f43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49be6aeb4e0b2c8b740ec48bd166117b403717a84c4a0ed2bf5ea3a76095f43b->leave($__internal_49be6aeb4e0b2c8b740ec48bd166117b403717a84c4a0ed2bf5ea3a76095f43b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85e7bc00324222088078dfb157657c88671be80517d51df7eceb98a8fe4a064b = $this->env->getExtension("native_profiler");
        $__internal_85e7bc00324222088078dfb157657c88671be80517d51df7eceb98a8fe4a064b->enter($__internal_85e7bc00324222088078dfb157657c88671be80517d51df7eceb98a8fe4a064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85e7bc00324222088078dfb157657c88671be80517d51df7eceb98a8fe4a064b->leave($__internal_85e7bc00324222088078dfb157657c88671be80517d51df7eceb98a8fe4a064b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_27d71040174cd095f18923f54421bb8a4588e9e07f4574bbb049c9a4c5c4e631 = $this->env->getExtension("native_profiler");
        $__internal_27d71040174cd095f18923f54421bb8a4588e9e07f4574bbb049c9a4c5c4e631->enter($__internal_27d71040174cd095f18923f54421bb8a4588e9e07f4574bbb049c9a4c5c4e631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_27d71040174cd095f18923f54421bb8a4588e9e07f4574bbb049c9a4c5c4e631->leave($__internal_27d71040174cd095f18923f54421bb8a4588e9e07f4574bbb049c9a4c5c4e631_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f710d72d729c8b2df2a9568d68dca90f17635206f78e2cff163d23af7540bdde = $this->env->getExtension("native_profiler");
        $__internal_f710d72d729c8b2df2a9568d68dca90f17635206f78e2cff163d23af7540bdde->enter($__internal_f710d72d729c8b2df2a9568d68dca90f17635206f78e2cff163d23af7540bdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f710d72d729c8b2df2a9568d68dca90f17635206f78e2cff163d23af7540bdde->leave($__internal_f710d72d729c8b2df2a9568d68dca90f17635206f78e2cff163d23af7540bdde_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
