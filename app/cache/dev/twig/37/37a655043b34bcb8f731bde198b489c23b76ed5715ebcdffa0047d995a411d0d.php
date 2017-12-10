<?php

/* @TSSRec/SRec/offers.html.twig */
class __TwigTemplate_f28d47bb3a2e2f38d173d985577e7d43834ad16543ee94023eed60ca051912d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "@TSSRec/SRec/offers.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        return "TSSRecBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5149bb6f47a55926d10d9e4ed4ea9cd8fa2065d43ca054369978841690b113a5 = $this->env->getExtension("native_profiler");
        $__internal_5149bb6f47a55926d10d9e4ed4ea9cd8fa2065d43ca054369978841690b113a5->enter($__internal_5149bb6f47a55926d10d9e4ed4ea9cd8fa2065d43ca054369978841690b113a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/SRec/offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5149bb6f47a55926d10d9e4ed4ea9cd8fa2065d43ca054369978841690b113a5->leave($__internal_5149bb6f47a55926d10d9e4ed4ea9cd8fa2065d43ca054369978841690b113a5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a6388ac2f5b1abf1e9673f05ca57984822e305976efe1653b0638fc2fb79a429 = $this->env->getExtension("native_profiler");
        $__internal_a6388ac2f5b1abf1e9673f05ca57984822e305976efe1653b0638fc2fb79a429->enter($__internal_a6388ac2f5b1abf1e9673f05ca57984822e305976efe1653b0638fc2fb79a429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a6388ac2f5b1abf1e9673f05ca57984822e305976efe1653b0638fc2fb79a429->leave($__internal_a6388ac2f5b1abf1e9673f05ca57984822e305976efe1653b0638fc2fb79a429_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c276d3d211617f4004308abebf2a8af27da382823cc3a0b974f7cfbec722fdb3 = $this->env->getExtension("native_profiler");
        $__internal_c276d3d211617f4004308abebf2a8af27da382823cc3a0b974f7cfbec722fdb3->enter($__internal_c276d3d211617f4004308abebf2a8af27da382823cc3a0b974f7cfbec722fdb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c276d3d211617f4004308abebf2a8af27da382823cc3a0b974f7cfbec722fdb3->leave($__internal_c276d3d211617f4004308abebf2a8af27da382823cc3a0b974f7cfbec722fdb3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_47db60e403dcfb11c8179a0d264ea3803b9a34c7e8219b273c8cbf87c5297949 = $this->env->getExtension("native_profiler");
        $__internal_47db60e403dcfb11c8179a0d264ea3803b9a34c7e8219b273c8cbf87c5297949->enter($__internal_47db60e403dcfb11c8179a0d264ea3803b9a34c7e8219b273c8cbf87c5297949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|offers
";
        
        $__internal_47db60e403dcfb11c8179a0d264ea3803b9a34c7e8219b273c8cbf87c5297949->leave($__internal_47db60e403dcfb11c8179a0d264ea3803b9a34c7e8219b273c8cbf87c5297949_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_c164e424170b29121207a1410d7e4125cfcf8e6032b4290d3dcdb3211494f13f = $this->env->getExtension("native_profiler");
        $__internal_c164e424170b29121207a1410d7e4125cfcf8e6032b4290d3dcdb3211494f13f->enter($__internal_c164e424170b29121207a1410d7e4125cfcf8e6032b4290d3dcdb3211494f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c164e424170b29121207a1410d7e4125cfcf8e6032b4290d3dcdb3211494f13f->leave($__internal_c164e424170b29121207a1410d7e4125cfcf8e6032b4290d3dcdb3211494f13f_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_b92c35ae5729b50653c645ea6782d2cc5d3f3ee85d1355cff7e5246198c0031c = $this->env->getExtension("native_profiler");
        $__internal_b92c35ae5729b50653c645ea6782d2cc5d3f3ee85d1355cff7e5246198c0031c->enter($__internal_b92c35ae5729b50653c645ea6782d2cc5d3f3ee85d1355cff7e5246198c0031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 18
        echo "<ul>   
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tss_rec_cvs");
        echo "\"><span>CV</span></a></li>
    <li  class=\"active\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tss_rec_offers");
        echo "\"><span>Offers</span></a>
    </li>
    <li class=\"menu_list\">
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("tss_rec_edit");
        echo "\"><span>Edit</span></a>
        <ul>
            <li class=\"n1\"><a href=\"ts_evaluator_feed\">Home</a></li>
            <li class=\"n2\"><a href=\"ts_evaluator_feed\">About US </a></li>
            <li class=\"n3\"><a href=\"ts_evaluator_feed\">Contact US </a></li>
            <li class=\"n4\"><a href=\"ts_evaluator_feed\">Services</a></li>
        </ul>
    </li>
    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("tss_rec_tests");
        echo "\"><span>tests</span></a></li>
</ul>
";
        
        $__internal_b92c35ae5729b50653c645ea6782d2cc5d3f3ee85d1355cff7e5246198c0031c->leave($__internal_b92c35ae5729b50653c645ea6782d2cc5d3f3ee85d1355cff7e5246198c0031c_prof);

    }

    // line 35
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7f30f937cb56f4b6f89ecdd9020aea9f0726dd84184dafceed951e3ba4ec5eaa = $this->env->getExtension("native_profiler");
        $__internal_7f30f937cb56f4b6f89ecdd9020aea9f0726dd84184dafceed951e3ba4ec5eaa->enter($__internal_7f30f937cb56f4b6f89ecdd9020aea9f0726dd84184dafceed951e3ba4ec5eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_7f30f937cb56f4b6f89ecdd9020aea9f0726dd84184dafceed951e3ba4ec5eaa->leave($__internal_7f30f937cb56f4b6f89ecdd9020aea9f0726dd84184dafceed951e3ba4ec5eaa_prof);

    }

    // line 37
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_12c487771590a79af7b84012866b697dc7f017a5be7e4fcc0c5e837a5253cb35 = $this->env->getExtension("native_profiler");
        $__internal_12c487771590a79af7b84012866b697dc7f017a5be7e4fcc0c5e837a5253cb35->enter($__internal_12c487771590a79af7b84012866b697dc7f017a5be7e4fcc0c5e837a5253cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 38
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_12c487771590a79af7b84012866b697dc7f017a5be7e4fcc0c5e837a5253cb35->leave($__internal_12c487771590a79af7b84012866b697dc7f017a5be7e4fcc0c5e837a5253cb35_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f969ddcbb9073feea94767620a960af83011162475f9745ab9a3d1dc54d54f7f = $this->env->getExtension("native_profiler");
        $__internal_f969ddcbb9073feea94767620a960af83011162475f9745ab9a3d1dc54d54f7f->enter($__internal_f969ddcbb9073feea94767620a960af83011162475f9745ab9a3d1dc54d54f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_f969ddcbb9073feea94767620a960af83011162475f9745ab9a3d1dc54d54f7f->leave($__internal_f969ddcbb9073feea94767620a960af83011162475f9745ab9a3d1dc54d54f7f_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/SRec/offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  170 => 40,  161 => 38,  155 => 37,  144 => 35,  134 => 32,  123 => 24,  117 => 21,  112 => 19,  109 => 18,  103 => 17,  93 => 15,  87 => 14,  77 => 12,  71 => 11,  62 => 9,  56 => 8,  47 => 6,  41 => 5,  11 => 3,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/SRec/edit.html.twig #}*/
/* */
/* {% extends "TSSRecBundle::layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block title %}*/
/*  {{ parent() }}|offers*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <ul>   */
/*     <li><a href="{{ path('tss_rec_cvs') }}"><span>CV</span></a></li>*/
/*     <li  class="active">*/
/*         <a href="{{ path('tss_rec_offers') }}"><span>Offers</span></a>*/
/*     </li>*/
/*     <li class="menu_list">*/
/*         <a href="{{ path('tss_rec_edit') }}"><span>Edit</span></a>*/
/*         <ul>*/
/*             <li class="n1"><a href="ts_evaluator_feed">Home</a></li>*/
/*             <li class="n2"><a href="ts_evaluator_feed">About US </a></li>*/
/*             <li class="n3"><a href="ts_evaluator_feed">Contact US </a></li>*/
/*             <li class="n4"><a href="ts_evaluator_feed">Services</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     <li><a href="{{ path('tss_rec_tests') }}"><span>tests</span></a></li>*/
/* </ul>*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
