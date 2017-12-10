<?php

/* @TSSRec/SRec/edit.html.twig */
class __TwigTemplate_821dce2db629159c94a22470ba91074e01c84cc3079b37109d435a70cca121d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "@TSSRec/SRec/edit.html.twig", 3);
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
        $__internal_be076c63b1c268da863e4fd662acb51f156d88ef4950a508daffb2e951976f6b = $this->env->getExtension("native_profiler");
        $__internal_be076c63b1c268da863e4fd662acb51f156d88ef4950a508daffb2e951976f6b->enter($__internal_be076c63b1c268da863e4fd662acb51f156d88ef4950a508daffb2e951976f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/SRec/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be076c63b1c268da863e4fd662acb51f156d88ef4950a508daffb2e951976f6b->leave($__internal_be076c63b1c268da863e4fd662acb51f156d88ef4950a508daffb2e951976f6b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d5d143239bddb19ba9fede81e3ba19d06b9d88f12c596b0e87b803adbebb5be = $this->env->getExtension("native_profiler");
        $__internal_3d5d143239bddb19ba9fede81e3ba19d06b9d88f12c596b0e87b803adbebb5be->enter($__internal_3d5d143239bddb19ba9fede81e3ba19d06b9d88f12c596b0e87b803adbebb5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3d5d143239bddb19ba9fede81e3ba19d06b9d88f12c596b0e87b803adbebb5be->leave($__internal_3d5d143239bddb19ba9fede81e3ba19d06b9d88f12c596b0e87b803adbebb5be_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96502975848dca3ad13a469b6d62f58e0eee2bdac35e731b1ac0266afc12e7aa = $this->env->getExtension("native_profiler");
        $__internal_96502975848dca3ad13a469b6d62f58e0eee2bdac35e731b1ac0266afc12e7aa->enter($__internal_96502975848dca3ad13a469b6d62f58e0eee2bdac35e731b1ac0266afc12e7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_96502975848dca3ad13a469b6d62f58e0eee2bdac35e731b1ac0266afc12e7aa->leave($__internal_96502975848dca3ad13a469b6d62f58e0eee2bdac35e731b1ac0266afc12e7aa_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_f468d6d883703463bfbd2854df0717e5d0a17f12e19884e8504a4ba022e18c35 = $this->env->getExtension("native_profiler");
        $__internal_f468d6d883703463bfbd2854df0717e5d0a17f12e19884e8504a4ba022e18c35->enter($__internal_f468d6d883703463bfbd2854df0717e5d0a17f12e19884e8504a4ba022e18c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|edit
";
        
        $__internal_f468d6d883703463bfbd2854df0717e5d0a17f12e19884e8504a4ba022e18c35->leave($__internal_f468d6d883703463bfbd2854df0717e5d0a17f12e19884e8504a4ba022e18c35_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_4322c86782a681499e809351da974b246b8a2fd82687f5359d1db16a92dccc0b = $this->env->getExtension("native_profiler");
        $__internal_4322c86782a681499e809351da974b246b8a2fd82687f5359d1db16a92dccc0b->enter($__internal_4322c86782a681499e809351da974b246b8a2fd82687f5359d1db16a92dccc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_4322c86782a681499e809351da974b246b8a2fd82687f5359d1db16a92dccc0b->leave($__internal_4322c86782a681499e809351da974b246b8a2fd82687f5359d1db16a92dccc0b_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_3d70531049e37e05d691d1f9028f07a77e7a35900b4f90a1bf077abce289471b = $this->env->getExtension("native_profiler");
        $__internal_3d70531049e37e05d691d1f9028f07a77e7a35900b4f90a1bf077abce289471b->enter($__internal_3d70531049e37e05d691d1f9028f07a77e7a35900b4f90a1bf077abce289471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 18
        echo "<ul>   
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tss_rec_cvs");
        echo "\"><span>CV</span></a></li>
    <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("tss_rec_offers");
        echo "\"><span>Offers</span></a></li>
    <li class=\"menu_list active\">
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
    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("tss_rec_tests");
        echo "\"><span>tests</span></a></li>
</ul>
";
        
        $__internal_3d70531049e37e05d691d1f9028f07a77e7a35900b4f90a1bf077abce289471b->leave($__internal_3d70531049e37e05d691d1f9028f07a77e7a35900b4f90a1bf077abce289471b_prof);

    }

    // line 33
    public function block_slider($context, array $blocks = array())
    {
        $__internal_122b739ed12fbab7ab272424a387324d186499df914457106a0f884607a622ce = $this->env->getExtension("native_profiler");
        $__internal_122b739ed12fbab7ab272424a387324d186499df914457106a0f884607a622ce->enter($__internal_122b739ed12fbab7ab272424a387324d186499df914457106a0f884607a622ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_122b739ed12fbab7ab272424a387324d186499df914457106a0f884607a622ce->leave($__internal_122b739ed12fbab7ab272424a387324d186499df914457106a0f884607a622ce_prof);

    }

    // line 35
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_7f32e05ded3c8b32e4bd153be54b0dfe11335cbc02c0b9ac4956b991a15f1b3c = $this->env->getExtension("native_profiler");
        $__internal_7f32e05ded3c8b32e4bd153be54b0dfe11335cbc02c0b9ac4956b991a15f1b3c->enter($__internal_7f32e05ded3c8b32e4bd153be54b0dfe11335cbc02c0b9ac4956b991a15f1b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 36
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_7f32e05ded3c8b32e4bd153be54b0dfe11335cbc02c0b9ac4956b991a15f1b3c->leave($__internal_7f32e05ded3c8b32e4bd153be54b0dfe11335cbc02c0b9ac4956b991a15f1b3c_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a2705844a2d6516bcaf83816542f107f3d75847489f776bfd092cb0b17a6c0e2 = $this->env->getExtension("native_profiler");
        $__internal_a2705844a2d6516bcaf83816542f107f3d75847489f776bfd092cb0b17a6c0e2->enter($__internal_a2705844a2d6516bcaf83816542f107f3d75847489f776bfd092cb0b17a6c0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_a2705844a2d6516bcaf83816542f107f3d75847489f776bfd092cb0b17a6c0e2->leave($__internal_a2705844a2d6516bcaf83816542f107f3d75847489f776bfd092cb0b17a6c0e2_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/SRec/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 39,  168 => 38,  159 => 36,  153 => 35,  142 => 33,  132 => 30,  121 => 22,  116 => 20,  112 => 19,  109 => 18,  103 => 17,  93 => 15,  87 => 14,  77 => 12,  71 => 11,  62 => 9,  56 => 8,  47 => 6,  41 => 5,  11 => 3,);
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
/*  {{ parent() }}|edit*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <ul>   */
/*     <li><a href="{{ path('tss_rec_cvs') }}"><span>CV</span></a></li>*/
/*     <li><a href="{{ path('tss_rec_offers') }}"><span>Offers</span></a></li>*/
/*     <li class="menu_list active">*/
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
