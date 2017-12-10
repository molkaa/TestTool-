<?php

/* TSSRecBundle:SRec:tests.html.twig */
class __TwigTemplate_668490aeddabf3e62ded85e418f2e2538fc8a0420287697d389ef92ed6857cee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "TSSRecBundle:SRec:tests.html.twig", 3);
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
        $__internal_c29cd6c5365d6b8cf82b54036b54083f3b5325ded30b850bf716b6147ab0d55c = $this->env->getExtension("native_profiler");
        $__internal_c29cd6c5365d6b8cf82b54036b54083f3b5325ded30b850bf716b6147ab0d55c->enter($__internal_c29cd6c5365d6b8cf82b54036b54083f3b5325ded30b850bf716b6147ab0d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle:SRec:tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c29cd6c5365d6b8cf82b54036b54083f3b5325ded30b850bf716b6147ab0d55c->leave($__internal_c29cd6c5365d6b8cf82b54036b54083f3b5325ded30b850bf716b6147ab0d55c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c74f61f34dee63d939892c6896fb18174a8aebcd53a17313c65a2e0f3eea3fe = $this->env->getExtension("native_profiler");
        $__internal_5c74f61f34dee63d939892c6896fb18174a8aebcd53a17313c65a2e0f3eea3fe->enter($__internal_5c74f61f34dee63d939892c6896fb18174a8aebcd53a17313c65a2e0f3eea3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_5c74f61f34dee63d939892c6896fb18174a8aebcd53a17313c65a2e0f3eea3fe->leave($__internal_5c74f61f34dee63d939892c6896fb18174a8aebcd53a17313c65a2e0f3eea3fe_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_253685a4afaa3330eb30435e9f29b8aea9a76bef2e5c248a2114fa0f2a0dd8e8 = $this->env->getExtension("native_profiler");
        $__internal_253685a4afaa3330eb30435e9f29b8aea9a76bef2e5c248a2114fa0f2a0dd8e8->enter($__internal_253685a4afaa3330eb30435e9f29b8aea9a76bef2e5c248a2114fa0f2a0dd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_253685a4afaa3330eb30435e9f29b8aea9a76bef2e5c248a2114fa0f2a0dd8e8->leave($__internal_253685a4afaa3330eb30435e9f29b8aea9a76bef2e5c248a2114fa0f2a0dd8e8_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_97a53e9f7b109e767e5e2533217c8cd6d605edf49654b330f8aee7e29c29e794 = $this->env->getExtension("native_profiler");
        $__internal_97a53e9f7b109e767e5e2533217c8cd6d605edf49654b330f8aee7e29c29e794->enter($__internal_97a53e9f7b109e767e5e2533217c8cd6d605edf49654b330f8aee7e29c29e794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|tests
";
        
        $__internal_97a53e9f7b109e767e5e2533217c8cd6d605edf49654b330f8aee7e29c29e794->leave($__internal_97a53e9f7b109e767e5e2533217c8cd6d605edf49654b330f8aee7e29c29e794_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_e91fcb0e363c6dc56025506511331872c5791c34be7e0e1386b44e747d611534 = $this->env->getExtension("native_profiler");
        $__internal_e91fcb0e363c6dc56025506511331872c5791c34be7e0e1386b44e747d611534->enter($__internal_e91fcb0e363c6dc56025506511331872c5791c34be7e0e1386b44e747d611534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e91fcb0e363c6dc56025506511331872c5791c34be7e0e1386b44e747d611534->leave($__internal_e91fcb0e363c6dc56025506511331872c5791c34be7e0e1386b44e747d611534_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_5510300f6d79a102b4ec5fb5bddc9c792932e69dae86bd81927b3ddee6fa2120 = $this->env->getExtension("native_profiler");
        $__internal_5510300f6d79a102b4ec5fb5bddc9c792932e69dae86bd81927b3ddee6fa2120->enter($__internal_5510300f6d79a102b4ec5fb5bddc9c792932e69dae86bd81927b3ddee6fa2120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 18
        echo "<ul>   
    <li> <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tss_rec_cvs");
        echo "\"><span>CV</span></a> </li>
    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tss_rec_offers");
        echo "\"><span>Offers</span></a></li>
    <li class=\"menu_list\">
        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("tss_rec_edit");
        echo "\"><span>Edit</span></a>
        <ul>
            <li class=\"n1\"><a href=\"ts_evaluator_feed\">Home</a></li>
            <li class=\"n2\"><a href=\"ts_evaluator_feed\">About US </a></li>
            <li class=\"n3\"><a href=\"ts_evaluator_feed\">Contact US </a></li>
            <li class=\"n4\"><a href=\"ts_evaluator_feed\">Services</a></li>
        </ul>
    </li>
    <li class=\"active\">
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("tss_rec_tests");
        echo "\"><span>tests</span></a>
    </li>
</ul>
";
        
        $__internal_5510300f6d79a102b4ec5fb5bddc9c792932e69dae86bd81927b3ddee6fa2120->leave($__internal_5510300f6d79a102b4ec5fb5bddc9c792932e69dae86bd81927b3ddee6fa2120_prof);

    }

    // line 35
    public function block_slider($context, array $blocks = array())
    {
        $__internal_b4e4981ea9b662e2b2bfee446e0ec2fd6157b12b81a3d78852ac092d917f393d = $this->env->getExtension("native_profiler");
        $__internal_b4e4981ea9b662e2b2bfee446e0ec2fd6157b12b81a3d78852ac092d917f393d->enter($__internal_b4e4981ea9b662e2b2bfee446e0ec2fd6157b12b81a3d78852ac092d917f393d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_b4e4981ea9b662e2b2bfee446e0ec2fd6157b12b81a3d78852ac092d917f393d->leave($__internal_b4e4981ea9b662e2b2bfee446e0ec2fd6157b12b81a3d78852ac092d917f393d_prof);

    }

    // line 37
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_2a07d0862ae4af8275ae95defae37693c79da1295d31840a04f9f7aca2ac7ccd = $this->env->getExtension("native_profiler");
        $__internal_2a07d0862ae4af8275ae95defae37693c79da1295d31840a04f9f7aca2ac7ccd->enter($__internal_2a07d0862ae4af8275ae95defae37693c79da1295d31840a04f9f7aca2ac7ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 38
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_2a07d0862ae4af8275ae95defae37693c79da1295d31840a04f9f7aca2ac7ccd->leave($__internal_2a07d0862ae4af8275ae95defae37693c79da1295d31840a04f9f7aca2ac7ccd_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_be454eaaf014ede4143389e0b4b7a326466dc984fd9f1780befc55f1c60ca7d7 = $this->env->getExtension("native_profiler");
        $__internal_be454eaaf014ede4143389e0b4b7a326466dc984fd9f1780befc55f1c60ca7d7->enter($__internal_be454eaaf014ede4143389e0b4b7a326466dc984fd9f1780befc55f1c60ca7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_be454eaaf014ede4143389e0b4b7a326466dc984fd9f1780befc55f1c60ca7d7->leave($__internal_be454eaaf014ede4143389e0b4b7a326466dc984fd9f1780befc55f1c60ca7d7_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle:SRec:tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  170 => 40,  161 => 38,  155 => 37,  144 => 35,  133 => 31,  121 => 22,  116 => 20,  112 => 19,  109 => 18,  103 => 17,  93 => 15,  87 => 14,  77 => 12,  71 => 11,  62 => 9,  56 => 8,  47 => 6,  41 => 5,  11 => 3,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/SRec/tests.html.twig #}*/
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
/*  {{ parent() }}|tests*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <ul>   */
/*     <li> <a href="{{ path('tss_rec_cvs') }}"><span>CV</span></a> </li>*/
/*     <li><a href="{{ path('tss_rec_offers') }}"><span>Offers</span></a></li>*/
/*     <li class="menu_list">*/
/*         <a href="{{ path('tss_rec_edit') }}"><span>Edit</span></a>*/
/*         <ul>*/
/*             <li class="n1"><a href="ts_evaluator_feed">Home</a></li>*/
/*             <li class="n2"><a href="ts_evaluator_feed">About US </a></li>*/
/*             <li class="n3"><a href="ts_evaluator_feed">Contact US </a></li>*/
/*             <li class="n4"><a href="ts_evaluator_feed">Services</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     <li class="active">*/
/*         <a href="{{ path('tss_rec_tests') }}"><span>tests</span></a>*/
/*     </li>*/
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
