<?php

/* TSSRecBundle:SRec:edit.html.twig */
class __TwigTemplate_d60c67d3120d938978be4c4d563dad65549e21c8f96908f3a1094d8ee37e91b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "TSSRecBundle:SRec:edit.html.twig", 3);
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
        $__internal_7fa95d5a44f26618df17cf1fc63239b3a83fc497db5b10e2428617aa03865f58 = $this->env->getExtension("native_profiler");
        $__internal_7fa95d5a44f26618df17cf1fc63239b3a83fc497db5b10e2428617aa03865f58->enter($__internal_7fa95d5a44f26618df17cf1fc63239b3a83fc497db5b10e2428617aa03865f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle:SRec:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fa95d5a44f26618df17cf1fc63239b3a83fc497db5b10e2428617aa03865f58->leave($__internal_7fa95d5a44f26618df17cf1fc63239b3a83fc497db5b10e2428617aa03865f58_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be7acd0660c91d6218868142e2829c7664b3b0b1ea88091a1eeb6dc077c33a0e = $this->env->getExtension("native_profiler");
        $__internal_be7acd0660c91d6218868142e2829c7664b3b0b1ea88091a1eeb6dc077c33a0e->enter($__internal_be7acd0660c91d6218868142e2829c7664b3b0b1ea88091a1eeb6dc077c33a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_be7acd0660c91d6218868142e2829c7664b3b0b1ea88091a1eeb6dc077c33a0e->leave($__internal_be7acd0660c91d6218868142e2829c7664b3b0b1ea88091a1eeb6dc077c33a0e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66ffef9b3b82dcc35e6d4e33140f749ba908dae4bf485cc8d5bc9d23fe92fc87 = $this->env->getExtension("native_profiler");
        $__internal_66ffef9b3b82dcc35e6d4e33140f749ba908dae4bf485cc8d5bc9d23fe92fc87->enter($__internal_66ffef9b3b82dcc35e6d4e33140f749ba908dae4bf485cc8d5bc9d23fe92fc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_66ffef9b3b82dcc35e6d4e33140f749ba908dae4bf485cc8d5bc9d23fe92fc87->leave($__internal_66ffef9b3b82dcc35e6d4e33140f749ba908dae4bf485cc8d5bc9d23fe92fc87_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8fc87add6153096037a47fe58bde9d68796a398e846ad57e87ba2c7a97ad47a = $this->env->getExtension("native_profiler");
        $__internal_d8fc87add6153096037a47fe58bde9d68796a398e846ad57e87ba2c7a97ad47a->enter($__internal_d8fc87add6153096037a47fe58bde9d68796a398e846ad57e87ba2c7a97ad47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|edit
";
        
        $__internal_d8fc87add6153096037a47fe58bde9d68796a398e846ad57e87ba2c7a97ad47a->leave($__internal_d8fc87add6153096037a47fe58bde9d68796a398e846ad57e87ba2c7a97ad47a_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_1ecc7fd9ddf954e8f8b4d3a756520437599ab4db1f9199d7ce60765a98813fdf = $this->env->getExtension("native_profiler");
        $__internal_1ecc7fd9ddf954e8f8b4d3a756520437599ab4db1f9199d7ce60765a98813fdf->enter($__internal_1ecc7fd9ddf954e8f8b4d3a756520437599ab4db1f9199d7ce60765a98813fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_1ecc7fd9ddf954e8f8b4d3a756520437599ab4db1f9199d7ce60765a98813fdf->leave($__internal_1ecc7fd9ddf954e8f8b4d3a756520437599ab4db1f9199d7ce60765a98813fdf_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_d1efd81e84a48e6f5864d954472df4b4fef0a72ad8304d3fcbe02c74c34bca7c = $this->env->getExtension("native_profiler");
        $__internal_d1efd81e84a48e6f5864d954472df4b4fef0a72ad8304d3fcbe02c74c34bca7c->enter($__internal_d1efd81e84a48e6f5864d954472df4b4fef0a72ad8304d3fcbe02c74c34bca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_d1efd81e84a48e6f5864d954472df4b4fef0a72ad8304d3fcbe02c74c34bca7c->leave($__internal_d1efd81e84a48e6f5864d954472df4b4fef0a72ad8304d3fcbe02c74c34bca7c_prof);

    }

    // line 33
    public function block_slider($context, array $blocks = array())
    {
        $__internal_0f6f829b06f681ca5e1d28904ca8a29ca4023c9800ee9933b799da941630b215 = $this->env->getExtension("native_profiler");
        $__internal_0f6f829b06f681ca5e1d28904ca8a29ca4023c9800ee9933b799da941630b215->enter($__internal_0f6f829b06f681ca5e1d28904ca8a29ca4023c9800ee9933b799da941630b215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_0f6f829b06f681ca5e1d28904ca8a29ca4023c9800ee9933b799da941630b215->leave($__internal_0f6f829b06f681ca5e1d28904ca8a29ca4023c9800ee9933b799da941630b215_prof);

    }

    // line 35
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_6bcb4140f7125be269aadd3addd6351ff5c19071023b7a55c146692a0073aaec = $this->env->getExtension("native_profiler");
        $__internal_6bcb4140f7125be269aadd3addd6351ff5c19071023b7a55c146692a0073aaec->enter($__internal_6bcb4140f7125be269aadd3addd6351ff5c19071023b7a55c146692a0073aaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 36
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_6bcb4140f7125be269aadd3addd6351ff5c19071023b7a55c146692a0073aaec->leave($__internal_6bcb4140f7125be269aadd3addd6351ff5c19071023b7a55c146692a0073aaec_prof);

    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6ef3f10b19f957125549f8ec0fe536844614d0fd5500771514cc0e6685e4d791 = $this->env->getExtension("native_profiler");
        $__internal_6ef3f10b19f957125549f8ec0fe536844614d0fd5500771514cc0e6685e4d791->enter($__internal_6ef3f10b19f957125549f8ec0fe536844614d0fd5500771514cc0e6685e4d791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 39
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_6ef3f10b19f957125549f8ec0fe536844614d0fd5500771514cc0e6685e4d791->leave($__internal_6ef3f10b19f957125549f8ec0fe536844614d0fd5500771514cc0e6685e4d791_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle:SRec:edit.html.twig";
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
