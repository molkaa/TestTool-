<?php

/* TSCandidatBundle:Candidat:services.html.twig */
class __TwigTemplate_f2ba9b1d66988ac701bde56ae412cba40aa7d200848ad8575f443ffbb70781d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:services.html.twig", 3);
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
        $__internal_ce5e31e5c4e48d87e83aa0f7c8dc4fce599235b0bbd64411144723e79d0e20c1 = $this->env->getExtension("native_profiler");
        $__internal_ce5e31e5c4e48d87e83aa0f7c8dc4fce599235b0bbd64411144723e79d0e20c1->enter($__internal_ce5e31e5c4e48d87e83aa0f7c8dc4fce599235b0bbd64411144723e79d0e20c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:services.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce5e31e5c4e48d87e83aa0f7c8dc4fce599235b0bbd64411144723e79d0e20c1->leave($__internal_ce5e31e5c4e48d87e83aa0f7c8dc4fce599235b0bbd64411144723e79d0e20c1_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7b1ed8e94bd3bcfa277569f60a405c2621c35241a004aee129368e4c4f1618f = $this->env->getExtension("native_profiler");
        $__internal_c7b1ed8e94bd3bcfa277569f60a405c2621c35241a004aee129368e4c4f1618f->enter($__internal_c7b1ed8e94bd3bcfa277569f60a405c2621c35241a004aee129368e4c4f1618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|contact
";
        
        $__internal_c7b1ed8e94bd3bcfa277569f60a405c2621c35241a004aee129368e4c4f1618f->leave($__internal_c7b1ed8e94bd3bcfa277569f60a405c2621c35241a004aee129368e4c4f1618f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_c2a3197c557c35e0113b0ff4a831ff57470db31af4714e3cc126b0229f22f473 = $this->env->getExtension("native_profiler");
        $__internal_c2a3197c557c35e0113b0ff4a831ff57470db31af4714e3cc126b0229f22f473->enter($__internal_c2a3197c557c35e0113b0ff4a831ff57470db31af4714e3cc126b0229f22f473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c2a3197c557c35e0113b0ff4a831ff57470db31af4714e3cc126b0229f22f473->leave($__internal_c2a3197c557c35e0113b0ff4a831ff57470db31af4714e3cc126b0229f22f473_prof);

    }

    // line 10
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_855652b64dd7c51c3fc674e8fe9309ee564edaeec91bffbb835534be14694389 = $this->env->getExtension("native_profiler");
        $__internal_855652b64dd7c51c3fc674e8fe9309ee564edaeec91bffbb835534be14694389->enter($__internal_855652b64dd7c51c3fc674e8fe9309ee564edaeec91bffbb835534be14694389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_855652b64dd7c51c3fc674e8fe9309ee564edaeec91bffbb835534be14694389->leave($__internal_855652b64dd7c51c3fc674e8fe9309ee564edaeec91bffbb835534be14694389_prof);

    }

    // line 19
    public function block_slider($context, array $blocks = array())
    {
        $__internal_d372927a3fd973c268dfd05f6ad96c9310591e9575a23a84529c704a56a96a49 = $this->env->getExtension("native_profiler");
        $__internal_d372927a3fd973c268dfd05f6ad96c9310591e9575a23a84529c704a56a96a49->enter($__internal_d372927a3fd973c268dfd05f6ad96c9310591e9575a23a84529c704a56a96a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 20
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_d372927a3fd973c268dfd05f6ad96c9310591e9575a23a84529c704a56a96a49->leave($__internal_d372927a3fd973c268dfd05f6ad96c9310591e9575a23a84529c704a56a96a49_prof);

    }

    // line 22
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_0db11f919cfc5bb32d588c3be9cdc9add9b6ab036376c59bb65dc323694775c5 = $this->env->getExtension("native_profiler");
        $__internal_0db11f919cfc5bb32d588c3be9cdc9add9b6ab036376c59bb65dc323694775c5->enter($__internal_0db11f919cfc5bb32d588c3be9cdc9add9b6ab036376c59bb65dc323694775c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 23
        echo "<div class=\"article\">
  <p>    <img src=\"/TestTool/web/images/website_under_construction.png\" alt=\"\" /> </p>
</div>
";
        // line 26
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_0db11f919cfc5bb32d588c3be9cdc9add9b6ab036376c59bb65dc323694775c5->leave($__internal_0db11f919cfc5bb32d588c3be9cdc9add9b6ab036376c59bb65dc323694775c5_prof);

    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        $__internal_65a465c236799ced7ffc8f9205f27621dc04d5bcb5202e101bcc8e3a9fb99140 = $this->env->getExtension("native_profiler");
        $__internal_65a465c236799ced7ffc8f9205f27621dc04d5bcb5202e101bcc8e3a9fb99140->enter($__internal_65a465c236799ced7ffc8f9205f27621dc04d5bcb5202e101bcc8e3a9fb99140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 29
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_65a465c236799ced7ffc8f9205f27621dc04d5bcb5202e101bcc8e3a9fb99140->leave($__internal_65a465c236799ced7ffc8f9205f27621dc04d5bcb5202e101bcc8e3a9fb99140_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:services.html.twig";
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
