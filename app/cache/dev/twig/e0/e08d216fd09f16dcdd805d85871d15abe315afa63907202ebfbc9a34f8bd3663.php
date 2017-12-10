<?php

/* @TSCandidat/Candidat/about.html.twig */
class __TwigTemplate_d8879961a434e3d793767c2a97d13b96ff19bd1972d38bf93f0970819a6280ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/about.html.twig", 3);
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
        $__internal_1e8f9618de87e1a495fd5bf8d0b1d71ed0b8cf344fc112555afcb58d1c07beec = $this->env->getExtension("native_profiler");
        $__internal_1e8f9618de87e1a495fd5bf8d0b1d71ed0b8cf344fc112555afcb58d1c07beec->enter($__internal_1e8f9618de87e1a495fd5bf8d0b1d71ed0b8cf344fc112555afcb58d1c07beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8f9618de87e1a495fd5bf8d0b1d71ed0b8cf344fc112555afcb58d1c07beec->leave($__internal_1e8f9618de87e1a495fd5bf8d0b1d71ed0b8cf344fc112555afcb58d1c07beec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0132ccda8cf5f2e406a788d9d0aec22deac2106189993d19efd33e4e93a67ce = $this->env->getExtension("native_profiler");
        $__internal_f0132ccda8cf5f2e406a788d9d0aec22deac2106189993d19efd33e4e93a67ce->enter($__internal_f0132ccda8cf5f2e406a788d9d0aec22deac2106189993d19efd33e4e93a67ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|about us
";
        
        $__internal_f0132ccda8cf5f2e406a788d9d0aec22deac2106189993d19efd33e4e93a67ce->leave($__internal_f0132ccda8cf5f2e406a788d9d0aec22deac2106189993d19efd33e4e93a67ce_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_3ba855ab3c3b12f16be6a497fc603a3addb40ffd50e39ffc96b03a92117ca2cf = $this->env->getExtension("native_profiler");
        $__internal_3ba855ab3c3b12f16be6a497fc603a3addb40ffd50e39ffc96b03a92117ca2cf->enter($__internal_3ba855ab3c3b12f16be6a497fc603a3addb40ffd50e39ffc96b03a92117ca2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_3ba855ab3c3b12f16be6a497fc603a3addb40ffd50e39ffc96b03a92117ca2cf->leave($__internal_3ba855ab3c3b12f16be6a497fc603a3addb40ffd50e39ffc96b03a92117ca2cf_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_42f60796386802343c659eea2efbb7aab27048a41699baca12b83bc2ea880518 = $this->env->getExtension("native_profiler");
        $__internal_42f60796386802343c659eea2efbb7aab27048a41699baca12b83bc2ea880518->enter($__internal_42f60796386802343c659eea2efbb7aab27048a41699baca12b83bc2ea880518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 12
        echo "    <script>
        \$(document).ready(function() {
            var li = document.getElementById('2');
            \$(li).addClass('selected');
        });
    </script>
    ";
        // line 18
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_42f60796386802343c659eea2efbb7aab27048a41699baca12b83bc2ea880518->leave($__internal_42f60796386802343c659eea2efbb7aab27048a41699baca12b83bc2ea880518_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_18b3714c5eeb6e80619475787fd50b73419f749119136af30c4fcac3b0d04df4 = $this->env->getExtension("native_profiler");
        $__internal_18b3714c5eeb6e80619475787fd50b73419f749119136af30c4fcac3b0d04df4->enter($__internal_18b3714c5eeb6e80619475787fd50b73419f749119136af30c4fcac3b0d04df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_18b3714c5eeb6e80619475787fd50b73419f749119136af30c4fcac3b0d04df4->leave($__internal_18b3714c5eeb6e80619475787fd50b73419f749119136af30c4fcac3b0d04df4_prof);

    }

    // line 23
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_d98df4764e9d0dd0edde1ad5eacb12251a509ba4b1f6ffcc87575d47705500dc = $this->env->getExtension("native_profiler");
        $__internal_d98df4764e9d0dd0edde1ad5eacb12251a509ba4b1f6ffcc87575d47705500dc->enter($__internal_d98df4764e9d0dd0edde1ad5eacb12251a509ba4b1f6ffcc87575d47705500dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 24
        echo "    <div class=\"article\">
        <p>    <img src=\"/TestTool/web/images/website_under_construction.png\" alt=\"\" /> </p>

    </div>
    ";
        // line 28
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_d98df4764e9d0dd0edde1ad5eacb12251a509ba4b1f6ffcc87575d47705500dc->leave($__internal_d98df4764e9d0dd0edde1ad5eacb12251a509ba4b1f6ffcc87575d47705500dc_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_426fac967adef0907a0f564d264ba5ae37ad66be33e9056c4052ad5bde9b79d8 = $this->env->getExtension("native_profiler");
        $__internal_426fac967adef0907a0f564d264ba5ae37ad66be33e9056c4052ad5bde9b79d8->enter($__internal_426fac967adef0907a0f564d264ba5ae37ad66be33e9056c4052ad5bde9b79d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 31
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_426fac967adef0907a0f564d264ba5ae37ad66be33e9056c4052ad5bde9b79d8->leave($__internal_426fac967adef0907a0f564d264ba5ae37ad66be33e9056c4052ad5bde9b79d8_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  131 => 30,  122 => 28,  116 => 24,  110 => 23,  100 => 21,  94 => 20,  85 => 18,  77 => 12,  71 => 11,  61 => 9,  55 => 8,  45 => 6,  39 => 5,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/about.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}|about us*/
/* {% endblock %}*/
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             var li = document.getElementById('2');*/
/*             $(li).addClass('selected');*/
/*         });*/
/*     </script>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/*     <div class="article">*/
/*         <p>    <img src="/TestTool/web/images/website_under_construction.png" alt="" /> </p>*/
/* */
/*     </div>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
