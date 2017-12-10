<?php

/* @TSSRec/SRec/tests.html.twig */
class __TwigTemplate_dad3f19c73e4eb1ab5fffb723718afed98e3644decfed37014cc2dca1d1799dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "@TSSRec/SRec/tests.html.twig", 3);
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
        $__internal_4396342c209e6d60d05ab28b732f6ff2f918588f266014aa497858581d5623fc = $this->env->getExtension("native_profiler");
        $__internal_4396342c209e6d60d05ab28b732f6ff2f918588f266014aa497858581d5623fc->enter($__internal_4396342c209e6d60d05ab28b732f6ff2f918588f266014aa497858581d5623fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/SRec/tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4396342c209e6d60d05ab28b732f6ff2f918588f266014aa497858581d5623fc->leave($__internal_4396342c209e6d60d05ab28b732f6ff2f918588f266014aa497858581d5623fc_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15e06485941a28fc51118f7a48882a234435039e86a4032f508d9dfac16d93af = $this->env->getExtension("native_profiler");
        $__internal_15e06485941a28fc51118f7a48882a234435039e86a4032f508d9dfac16d93af->enter($__internal_15e06485941a28fc51118f7a48882a234435039e86a4032f508d9dfac16d93af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_15e06485941a28fc51118f7a48882a234435039e86a4032f508d9dfac16d93af->leave($__internal_15e06485941a28fc51118f7a48882a234435039e86a4032f508d9dfac16d93af_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2eb6d129d5432473029c0f4a3919c65cfbacdc0eb6e8491468ef5edd10a83fc = $this->env->getExtension("native_profiler");
        $__internal_a2eb6d129d5432473029c0f4a3919c65cfbacdc0eb6e8491468ef5edd10a83fc->enter($__internal_a2eb6d129d5432473029c0f4a3919c65cfbacdc0eb6e8491468ef5edd10a83fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a2eb6d129d5432473029c0f4a3919c65cfbacdc0eb6e8491468ef5edd10a83fc->leave($__internal_a2eb6d129d5432473029c0f4a3919c65cfbacdc0eb6e8491468ef5edd10a83fc_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0111429ec9e248ed0d88e2a9622010242c3a531b54948d017b2685dfaef9f895 = $this->env->getExtension("native_profiler");
        $__internal_0111429ec9e248ed0d88e2a9622010242c3a531b54948d017b2685dfaef9f895->enter($__internal_0111429ec9e248ed0d88e2a9622010242c3a531b54948d017b2685dfaef9f895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|tests
";
        
        $__internal_0111429ec9e248ed0d88e2a9622010242c3a531b54948d017b2685dfaef9f895->leave($__internal_0111429ec9e248ed0d88e2a9622010242c3a531b54948d017b2685dfaef9f895_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_f0ab6e7414ef1a01b2944041c882633f289b29b2677ad8091383630b4fd304fa = $this->env->getExtension("native_profiler");
        $__internal_f0ab6e7414ef1a01b2944041c882633f289b29b2677ad8091383630b4fd304fa->enter($__internal_f0ab6e7414ef1a01b2944041c882633f289b29b2677ad8091383630b4fd304fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_f0ab6e7414ef1a01b2944041c882633f289b29b2677ad8091383630b4fd304fa->leave($__internal_f0ab6e7414ef1a01b2944041c882633f289b29b2677ad8091383630b4fd304fa_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_4b903500e054dd7a1197097a7174be2c7c7f8eb365bd43fa11fd7047cd34818f = $this->env->getExtension("native_profiler");
        $__internal_4b903500e054dd7a1197097a7174be2c7c7f8eb365bd43fa11fd7047cd34818f->enter($__internal_4b903500e054dd7a1197097a7174be2c7c7f8eb365bd43fa11fd7047cd34818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_4b903500e054dd7a1197097a7174be2c7c7f8eb365bd43fa11fd7047cd34818f->leave($__internal_4b903500e054dd7a1197097a7174be2c7c7f8eb365bd43fa11fd7047cd34818f_prof);

    }

    // line 35
    public function block_slider($context, array $blocks = array())
    {
        $__internal_0b013bebd1d5d1ed43f811ae4bf6069b4ff6fefda2de37a6fc6888b68371689b = $this->env->getExtension("native_profiler");
        $__internal_0b013bebd1d5d1ed43f811ae4bf6069b4ff6fefda2de37a6fc6888b68371689b->enter($__internal_0b013bebd1d5d1ed43f811ae4bf6069b4ff6fefda2de37a6fc6888b68371689b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_0b013bebd1d5d1ed43f811ae4bf6069b4ff6fefda2de37a6fc6888b68371689b->leave($__internal_0b013bebd1d5d1ed43f811ae4bf6069b4ff6fefda2de37a6fc6888b68371689b_prof);

    }

    // line 37
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_b7f525da3d34c47d04ca3a28661d23f5e4b1f04beffe978b7a0cbc0902191f89 = $this->env->getExtension("native_profiler");
        $__internal_b7f525da3d34c47d04ca3a28661d23f5e4b1f04beffe978b7a0cbc0902191f89->enter($__internal_b7f525da3d34c47d04ca3a28661d23f5e4b1f04beffe978b7a0cbc0902191f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 38
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_b7f525da3d34c47d04ca3a28661d23f5e4b1f04beffe978b7a0cbc0902191f89->leave($__internal_b7f525da3d34c47d04ca3a28661d23f5e4b1f04beffe978b7a0cbc0902191f89_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f7b8a6f26ad275365ec71a0244908ae6fb00d5dbf253a7aea2a4192111627c37 = $this->env->getExtension("native_profiler");
        $__internal_f7b8a6f26ad275365ec71a0244908ae6fb00d5dbf253a7aea2a4192111627c37->enter($__internal_f7b8a6f26ad275365ec71a0244908ae6fb00d5dbf253a7aea2a4192111627c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_f7b8a6f26ad275365ec71a0244908ae6fb00d5dbf253a7aea2a4192111627c37->leave($__internal_f7b8a6f26ad275365ec71a0244908ae6fb00d5dbf253a7aea2a4192111627c37_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/SRec/tests.html.twig";
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
