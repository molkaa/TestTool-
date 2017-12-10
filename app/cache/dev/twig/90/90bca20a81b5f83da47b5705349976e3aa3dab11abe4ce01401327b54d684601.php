<?php

/* TSAdminBundle:Admin:Pie.html.twig */
class __TwigTemplate_0193442cc4cd3f17679dbd22f0a71edd025f2eb6b414ee640fc907050058a23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:Pie.html.twig", 2);
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
        $__internal_affc411eccaf6541502cb1d3b85b3ec608414558146b2e73fcc5e50d2c478715 = $this->env->getExtension("native_profiler");
        $__internal_affc411eccaf6541502cb1d3b85b3ec608414558146b2e73fcc5e50d2c478715->enter($__internal_affc411eccaf6541502cb1d3b85b3ec608414558146b2e73fcc5e50d2c478715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:Pie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_affc411eccaf6541502cb1d3b85b3ec608414558146b2e73fcc5e50d2c478715->leave($__internal_affc411eccaf6541502cb1d3b85b3ec608414558146b2e73fcc5e50d2c478715_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5d665e4abc23b99116e9122fe22c0b76044b003747726c26f28bada2dd68a7f = $this->env->getExtension("native_profiler");
        $__internal_a5d665e4abc23b99116e9122fe22c0b76044b003747726c26f28bada2dd68a7f->enter($__internal_a5d665e4abc23b99116e9122fe22c0b76044b003747726c26f28bada2dd68a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|CandidateStatics
";
        
        $__internal_a5d665e4abc23b99116e9122fe22c0b76044b003747726c26f28bada2dd68a7f->leave($__internal_a5d665e4abc23b99116e9122fe22c0b76044b003747726c26f28bada2dd68a7f_prof);

    }

    // line 9
    public function block_icons($context, array $blocks = array())
    {
        $__internal_418d3d8e107e298655e48175571f41e0b0a3a2a2608f3d9115d4cd55ea47cf08 = $this->env->getExtension("native_profiler");
        $__internal_418d3d8e107e298655e48175571f41e0b0a3a2a2608f3d9115d4cd55ea47cf08->enter($__internal_418d3d8e107e298655e48175571f41e0b0a3a2a2608f3d9115d4cd55ea47cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 10
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_418d3d8e107e298655e48175571f41e0b0a3a2a2608f3d9115d4cd55ea47cf08->leave($__internal_418d3d8e107e298655e48175571f41e0b0a3a2a2608f3d9115d4cd55ea47cf08_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f5e3f620985285c98f77f6baac095b3b9e0d0e5843446b45d027db58794ec78 = $this->env->getExtension("native_profiler");
        $__internal_7f5e3f620985285c98f77f6baac095b3b9e0d0e5843446b45d027db58794ec78->enter($__internal_7f5e3f620985285c98f77f6baac095b3b9e0d0e5843446b45d027db58794ec78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7f5e3f620985285c98f77f6baac095b3b9e0d0e5843446b45d027db58794ec78->leave($__internal_7f5e3f620985285c98f77f6baac095b3b9e0d0e5843446b45d027db58794ec78_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c676cbec9bfa50e307a8b25842e5ea4adeba2af082356a8fee98dea1663ad93 = $this->env->getExtension("native_profiler");
        $__internal_6c676cbec9bfa50e307a8b25842e5ea4adeba2af082356a8fee98dea1663ad93->enter($__internal_6c676cbec9bfa50e307a8b25842e5ea4adeba2af082356a8fee98dea1663ad93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6c676cbec9bfa50e307a8b25842e5ea4adeba2af082356a8fee98dea1663ad93->leave($__internal_6c676cbec9bfa50e307a8b25842e5ea4adeba2af082356a8fee98dea1663ad93_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_8eec31108405ddcdd7e908b5d7b5a1f148fa82f49eeee52ed4d98ebcf563ebaf = $this->env->getExtension("native_profiler");
        $__internal_8eec31108405ddcdd7e908b5d7b5a1f148fa82f49eeee52ed4d98ebcf563ebaf->enter($__internal_8eec31108405ddcdd7e908b5d7b5a1f148fa82f49eeee52ed4d98ebcf563ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_8eec31108405ddcdd7e908b5d7b5a1f148fa82f49eeee52ed4d98ebcf563ebaf->leave($__internal_8eec31108405ddcdd7e908b5d7b5a1f148fa82f49eeee52ed4d98ebcf563ebaf_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_955ef02471d2cab63bcd6b4a42adb4d67cad34babd42f0e1db45292141303b1f = $this->env->getExtension("native_profiler");
        $__internal_955ef02471d2cab63bcd6b4a42adb4d67cad34babd42f0e1db45292141303b1f->enter($__internal_955ef02471d2cab63bcd6b4a42adb4d67cad34babd42f0e1db45292141303b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_955ef02471d2cab63bcd6b4a42adb4d67cad34babd42f0e1db45292141303b1f->leave($__internal_955ef02471d2cab63bcd6b4a42adb4d67cad34babd42f0e1db45292141303b1f_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_8d8c5329de2b785eb9d89107c1d46f155e2b87244358e045acfbd30271232713 = $this->env->getExtension("native_profiler");
        $__internal_8d8c5329de2b785eb9d89107c1d46f155e2b87244358e045acfbd30271232713->enter($__internal_8d8c5329de2b785eb9d89107c1d46f155e2b87244358e045acfbd30271232713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_8d8c5329de2b785eb9d89107c1d46f155e2b87244358e045acfbd30271232713->leave($__internal_8d8c5329de2b785eb9d89107c1d46f155e2b87244358e045acfbd30271232713_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d68df29351889d0cf1876489e8a27da01e2194d4b2ac530cb33a039635dcbe3 = $this->env->getExtension("native_profiler");
        $__internal_9d68df29351889d0cf1876489e8a27da01e2194d4b2ac530cb33a039635dcbe3->enter($__internal_9d68df29351889d0cf1876489e8a27da01e2194d4b2ac530cb33a039635dcbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9d68df29351889d0cf1876489e8a27da01e2194d4b2ac530cb33a039635dcbe3->leave($__internal_9d68df29351889d0cf1876489e8a27da01e2194d4b2ac530cb33a039635dcbe3_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:Pie.html.twig";
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
/* {# src\TS\AdminBundle\Resources\views\Admin\Pie.html.twig #}*/
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
