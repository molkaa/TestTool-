<?php

/* TSCandidatBundle:Candidat:about.html.twig */
class __TwigTemplate_ff13a4a8f7d8ed2d2bf525667b57b0536dbe2b4a374d541613a3a7da28f8e7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:about.html.twig", 3);
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
        $__internal_27dd0ee3f78906a02ce316d6449dee904feb8856eed738b56f7c0e9b23d1993f = $this->env->getExtension("native_profiler");
        $__internal_27dd0ee3f78906a02ce316d6449dee904feb8856eed738b56f7c0e9b23d1993f->enter($__internal_27dd0ee3f78906a02ce316d6449dee904feb8856eed738b56f7c0e9b23d1993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27dd0ee3f78906a02ce316d6449dee904feb8856eed738b56f7c0e9b23d1993f->leave($__internal_27dd0ee3f78906a02ce316d6449dee904feb8856eed738b56f7c0e9b23d1993f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b56d8a6ae86041736a968911a5cc1753a6ecf0036008e8251f81085ac737999 = $this->env->getExtension("native_profiler");
        $__internal_2b56d8a6ae86041736a968911a5cc1753a6ecf0036008e8251f81085ac737999->enter($__internal_2b56d8a6ae86041736a968911a5cc1753a6ecf0036008e8251f81085ac737999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|about us
";
        
        $__internal_2b56d8a6ae86041736a968911a5cc1753a6ecf0036008e8251f81085ac737999->leave($__internal_2b56d8a6ae86041736a968911a5cc1753a6ecf0036008e8251f81085ac737999_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_783d7c4249abc588432aa41a615ac23508ff2e26f959c707bb3a270f075670ae = $this->env->getExtension("native_profiler");
        $__internal_783d7c4249abc588432aa41a615ac23508ff2e26f959c707bb3a270f075670ae->enter($__internal_783d7c4249abc588432aa41a615ac23508ff2e26f959c707bb3a270f075670ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_783d7c4249abc588432aa41a615ac23508ff2e26f959c707bb3a270f075670ae->leave($__internal_783d7c4249abc588432aa41a615ac23508ff2e26f959c707bb3a270f075670ae_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_def7c9d7a8847f717e6ca9475a1ea10268fa1f72cb6e71786bde00d18aa6c302 = $this->env->getExtension("native_profiler");
        $__internal_def7c9d7a8847f717e6ca9475a1ea10268fa1f72cb6e71786bde00d18aa6c302->enter($__internal_def7c9d7a8847f717e6ca9475a1ea10268fa1f72cb6e71786bde00d18aa6c302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_def7c9d7a8847f717e6ca9475a1ea10268fa1f72cb6e71786bde00d18aa6c302->leave($__internal_def7c9d7a8847f717e6ca9475a1ea10268fa1f72cb6e71786bde00d18aa6c302_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_934f8e5086c11dcf8b7a03450779ee8d3952a0585c9396595c90abe802b778a5 = $this->env->getExtension("native_profiler");
        $__internal_934f8e5086c11dcf8b7a03450779ee8d3952a0585c9396595c90abe802b778a5->enter($__internal_934f8e5086c11dcf8b7a03450779ee8d3952a0585c9396595c90abe802b778a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_934f8e5086c11dcf8b7a03450779ee8d3952a0585c9396595c90abe802b778a5->leave($__internal_934f8e5086c11dcf8b7a03450779ee8d3952a0585c9396595c90abe802b778a5_prof);

    }

    // line 23
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_cb8db3d7bfa0e04b6c31d2100006ea0abf724bf668ca6cbf459d9586c5a59798 = $this->env->getExtension("native_profiler");
        $__internal_cb8db3d7bfa0e04b6c31d2100006ea0abf724bf668ca6cbf459d9586c5a59798->enter($__internal_cb8db3d7bfa0e04b6c31d2100006ea0abf724bf668ca6cbf459d9586c5a59798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 24
        echo "    <div class=\"article\">
        <p>    <img src=\"/TestTool/web/images/website_under_construction.png\" alt=\"\" /> </p>

    </div>
    ";
        // line 28
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_cb8db3d7bfa0e04b6c31d2100006ea0abf724bf668ca6cbf459d9586c5a59798->leave($__internal_cb8db3d7bfa0e04b6c31d2100006ea0abf724bf668ca6cbf459d9586c5a59798_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d3cdb47fd2a3169ddbbfe5d4f10fcec58682d4ded69a56fd070dd69cca334e06 = $this->env->getExtension("native_profiler");
        $__internal_d3cdb47fd2a3169ddbbfe5d4f10fcec58682d4ded69a56fd070dd69cca334e06->enter($__internal_d3cdb47fd2a3169ddbbfe5d4f10fcec58682d4ded69a56fd070dd69cca334e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 31
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_d3cdb47fd2a3169ddbbfe5d4f10fcec58682d4ded69a56fd070dd69cca334e06->leave($__internal_d3cdb47fd2a3169ddbbfe5d4f10fcec58682d4ded69a56fd070dd69cca334e06_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:about.html.twig";
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
