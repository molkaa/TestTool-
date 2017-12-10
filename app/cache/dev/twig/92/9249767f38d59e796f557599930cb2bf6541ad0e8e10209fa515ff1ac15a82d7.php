<?php

/* TSAdminBundle:Admin:LineCharts.html.twig */
class __TwigTemplate_5de4f1be0eea6a8369401e42525c8c7c9ac3aa6443d0d4b0663b81bc286bd876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:LineCharts.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icons' => array($this, 'block_icons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'right' => array($this, 'block_right'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f265f78abd879cb1a4c51f292cee1411a1b770f0f0c76df08f9e703416535c3 = $this->env->getExtension("native_profiler");
        $__internal_0f265f78abd879cb1a4c51f292cee1411a1b770f0f0c76df08f9e703416535c3->enter($__internal_0f265f78abd879cb1a4c51f292cee1411a1b770f0f0c76df08f9e703416535c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:LineCharts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f265f78abd879cb1a4c51f292cee1411a1b770f0f0c76df08f9e703416535c3->leave($__internal_0f265f78abd879cb1a4c51f292cee1411a1b770f0f0c76df08f9e703416535c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe7431f1d8b40a5ba43f202c2dee83741b23f1c9f5a70a9899e9e9fd129348c0 = $this->env->getExtension("native_profiler");
        $__internal_fe7431f1d8b40a5ba43f202c2dee83741b23f1c9f5a70a9899e9e9fd129348c0->enter($__internal_fe7431f1d8b40a5ba43f202c2dee83741b23f1c9f5a70a9899e9e9fd129348c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|CandidateStatics
";
        
        $__internal_fe7431f1d8b40a5ba43f202c2dee83741b23f1c9f5a70a9899e9e9fd129348c0->leave($__internal_fe7431f1d8b40a5ba43f202c2dee83741b23f1c9f5a70a9899e9e9fd129348c0_prof);

    }

    // line 9
    public function block_icons($context, array $blocks = array())
    {
        $__internal_31eaae8a4ecd35c688fd8a4db5b7f6e3179281d4995383d96abacf630ace7214 = $this->env->getExtension("native_profiler");
        $__internal_31eaae8a4ecd35c688fd8a4db5b7f6e3179281d4995383d96abacf630ace7214->enter($__internal_31eaae8a4ecd35c688fd8a4db5b7f6e3179281d4995383d96abacf630ace7214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 10
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_31eaae8a4ecd35c688fd8a4db5b7f6e3179281d4995383d96abacf630ace7214->leave($__internal_31eaae8a4ecd35c688fd8a4db5b7f6e3179281d4995383d96abacf630ace7214_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e74d7813c6830a25aee2e93b2b350a36330cca627d56f94ee35b10a8e06e33a = $this->env->getExtension("native_profiler");
        $__internal_0e74d7813c6830a25aee2e93b2b350a36330cca627d56f94ee35b10a8e06e33a->enter($__internal_0e74d7813c6830a25aee2e93b2b350a36330cca627d56f94ee35b10a8e06e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_0e74d7813c6830a25aee2e93b2b350a36330cca627d56f94ee35b10a8e06e33a->leave($__internal_0e74d7813c6830a25aee2e93b2b350a36330cca627d56f94ee35b10a8e06e33a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_382716bc73ccb4069a1b8cdc29ab3b28c89f966b9b2d692b23dd76055aa56ab4 = $this->env->getExtension("native_profiler");
        $__internal_382716bc73ccb4069a1b8cdc29ab3b28c89f966b9b2d692b23dd76055aa56ab4->enter($__internal_382716bc73ccb4069a1b8cdc29ab3b28c89f966b9b2d692b23dd76055aa56ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_382716bc73ccb4069a1b8cdc29ab3b28c89f966b9b2d692b23dd76055aa56ab4->leave($__internal_382716bc73ccb4069a1b8cdc29ab3b28c89f966b9b2d692b23dd76055aa56ab4_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_4e531153381b08be44801660b59c73bbd311b449d791b6b533fe5d9e5afaaa1c = $this->env->getExtension("native_profiler");
        $__internal_4e531153381b08be44801660b59c73bbd311b449d791b6b533fe5d9e5afaaa1c->enter($__internal_4e531153381b08be44801660b59c73bbd311b449d791b6b533fe5d9e5afaaa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_4e531153381b08be44801660b59c73bbd311b449d791b6b533fe5d9e5afaaa1c->leave($__internal_4e531153381b08be44801660b59c73bbd311b449d791b6b533fe5d9e5afaaa1c_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_086fa4f439d3a7101a31fc3a8ef855859bcf97a8ad98aac82be9086c19e808ec = $this->env->getExtension("native_profiler");
        $__internal_086fa4f439d3a7101a31fc3a8ef855859bcf97a8ad98aac82be9086c19e808ec->enter($__internal_086fa4f439d3a7101a31fc3a8ef855859bcf97a8ad98aac82be9086c19e808ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_086fa4f439d3a7101a31fc3a8ef855859bcf97a8ad98aac82be9086c19e808ec->leave($__internal_086fa4f439d3a7101a31fc3a8ef855859bcf97a8ad98aac82be9086c19e808ec_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_eff5dff99f5c07782d6e4b7d12872e16a7727f928be7cfcbd553e6d59da8984d = $this->env->getExtension("native_profiler");
        $__internal_eff5dff99f5c07782d6e4b7d12872e16a7727f928be7cfcbd553e6d59da8984d->enter($__internal_eff5dff99f5c07782d6e4b7d12872e16a7727f928be7cfcbd553e6d59da8984d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_eff5dff99f5c07782d6e4b7d12872e16a7727f928be7cfcbd553e6d59da8984d->leave($__internal_eff5dff99f5c07782d6e4b7d12872e16a7727f928be7cfcbd553e6d59da8984d_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_50278637a2eff670c428a4c8408573c11e06aa15ab5b71ffe1b081d9881e4e10 = $this->env->getExtension("native_profiler");
        $__internal_50278637a2eff670c428a4c8408573c11e06aa15ab5b71ffe1b081d9881e4e10->enter($__internal_50278637a2eff670c428a4c8408573c11e06aa15ab5b71ffe1b081d9881e4e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 37
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

    </script>
   
    <div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 42
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_50278637a2eff670c428a4c8408573c11e06aa15ab5b71ffe1b081d9881e4e10->leave($__internal_50278637a2eff670c428a4c8408573c11e06aa15ab5b71ffe1b081d9881e4e10_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:LineCharts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  166 => 37,  160 => 33,  154 => 32,  145 => 28,  139 => 27,  130 => 24,  124 => 23,  114 => 21,  108 => 20,  99 => 18,  93 => 17,  84 => 15,  79 => 14,  73 => 13,  63 => 10,  57 => 9,  47 => 6,  41 => 5,  11 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\Admin\LineCharts.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*     {{ parent() }}|admin|CandidateStatics*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/*  {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content%}*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*     <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/* */
/*     </script>*/
/*    */
/*     <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>{# empty Twig template #}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
