<?php

/* @TSCandidat/Candidat/services.html.twig */
class __TwigTemplate_51f0d76e3ef2b722f849c7c7fbcb16e419bcef31d87ad70efcf22a24b8b2bf00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/services.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82b8fa463069ebac0f16c2ddbd1641e171c6a5da6a8a7606e30975937de2b04 = $this->env->getExtension("native_profiler");
        $__internal_a82b8fa463069ebac0f16c2ddbd1641e171c6a5da6a8a7606e30975937de2b04->enter($__internal_a82b8fa463069ebac0f16c2ddbd1641e171c6a5da6a8a7606e30975937de2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82b8fa463069ebac0f16c2ddbd1641e171c6a5da6a8a7606e30975937de2b04->leave($__internal_a82b8fa463069ebac0f16c2ddbd1641e171c6a5da6a8a7606e30975937de2b04_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3d96f2a8daabd073cecf7826cd1c33f990d737caf6babb6b45e4680b9d4d79f = $this->env->getExtension("native_profiler");
        $__internal_c3d96f2a8daabd073cecf7826cd1c33f990d737caf6babb6b45e4680b9d4d79f->enter($__internal_c3d96f2a8daabd073cecf7826cd1c33f990d737caf6babb6b45e4680b9d4d79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|contact
";
        
        $__internal_c3d96f2a8daabd073cecf7826cd1c33f990d737caf6babb6b45e4680b9d4d79f->leave($__internal_c3d96f2a8daabd073cecf7826cd1c33f990d737caf6babb6b45e4680b9d4d79f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_c77b572751165747a61fb710c053f09d1ca47f19c44df57cfca0896a2f0e1ce4 = $this->env->getExtension("native_profiler");
        $__internal_c77b572751165747a61fb710c053f09d1ca47f19c44df57cfca0896a2f0e1ce4->enter($__internal_c77b572751165747a61fb710c053f09d1ca47f19c44df57cfca0896a2f0e1ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c77b572751165747a61fb710c053f09d1ca47f19c44df57cfca0896a2f0e1ce4->leave($__internal_c77b572751165747a61fb710c053f09d1ca47f19c44df57cfca0896a2f0e1ce4_prof);

    }

    // line 10
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_d7f01730d3e01cd60e2d28f9be2bdde45a93fd3e09a261dc2eb8ab523b033886 = $this->env->getExtension("native_profiler");
        $__internal_d7f01730d3e01cd60e2d28f9be2bdde45a93fd3e09a261dc2eb8ab523b033886->enter($__internal_d7f01730d3e01cd60e2d28f9be2bdde45a93fd3e09a261dc2eb8ab523b033886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 11
        echo "  <script>
    \$(document).ready(function() {
         var li = document.getElementById('6');
        \$(li).addClass('selected');
    });
</script>
";
        // line 17
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_d7f01730d3e01cd60e2d28f9be2bdde45a93fd3e09a261dc2eb8ab523b033886->leave($__internal_d7f01730d3e01cd60e2d28f9be2bdde45a93fd3e09a261dc2eb8ab523b033886_prof);

    }

    // line 19
    public function block_slider($context, array $blocks = array())
    {
        $__internal_3d8e391815a17797101c02ebe6481937d9c8d865f91dd00d77d33a2e02cc88b4 = $this->env->getExtension("native_profiler");
        $__internal_3d8e391815a17797101c02ebe6481937d9c8d865f91dd00d77d33a2e02cc88b4->enter($__internal_3d8e391815a17797101c02ebe6481937d9c8d865f91dd00d77d33a2e02cc88b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 20
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_3d8e391815a17797101c02ebe6481937d9c8d865f91dd00d77d33a2e02cc88b4->leave($__internal_3d8e391815a17797101c02ebe6481937d9c8d865f91dd00d77d33a2e02cc88b4_prof);

    }

    // line 22
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_bbf5d0a02674fc20d6e4f34ad91d6f0d775f62c085449daf4d24bc349ed4edb0 = $this->env->getExtension("native_profiler");
        $__internal_bbf5d0a02674fc20d6e4f34ad91d6f0d775f62c085449daf4d24bc349ed4edb0->enter($__internal_bbf5d0a02674fc20d6e4f34ad91d6f0d775f62c085449daf4d24bc349ed4edb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 23
        echo "<div class=\"article\">
  <p>    <img src=\"/TestTool/web/images/website_under_construction.png\" alt=\"\" /> </p>
</div>
";
        // line 26
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_bbf5d0a02674fc20d6e4f34ad91d6f0d775f62c085449daf4d24bc349ed4edb0->leave($__internal_bbf5d0a02674fc20d6e4f34ad91d6f0d775f62c085449daf4d24bc349ed4edb0_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0dd3a48deb520b5fbb385e05a84cd86292f1c1fb47f734d0c91a7f293ace6705 = $this->env->getExtension("native_profiler");
        $__internal_0dd3a48deb520b5fbb385e05a84cd86292f1c1fb47f734d0c91a7f293ace6705->enter($__internal_0dd3a48deb520b5fbb385e05a84cd86292f1c1fb47f734d0c91a7f293ace6705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_0dd3a48deb520b5fbb385e05a84cd86292f1c1fb47f734d0c91a7f293ace6705->leave($__internal_0dd3a48deb520b5fbb385e05a84cd86292f1c1fb47f734d0c91a7f293ace6705_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  129 => 28,  120 => 26,  115 => 23,  109 => 22,  100 => 20,  94 => 19,  85 => 17,  77 => 11,  71 => 10,  61 => 8,  55 => 7,  45 => 5,  39 => 4,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/contact.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*  {{ parent() }}|contact*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/*   <script>*/
/*     $(document).ready(function() {*/
/*          var li = document.getElementById('6');*/
/*         $(li).addClass('selected');*/
/*     });*/
/* </script>*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* <div class="article">*/
/*   <p>    <img src="/TestTool/web/images/website_under_construction.png" alt="" /> </p>*/
/* </div>*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
