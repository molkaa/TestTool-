<?php

/* @TSSRec/layout.html.twig */
class __TwigTemplate_b7cbc29f0f5eeb273bc334f3e747edaeebdfa73defcff04c25b89b9f4ac251b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@TSSRec/layout.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5051a6a3ef26c48b1a35b77532832c1de2ea17ad7deb48b53586f38c7add4892 = $this->env->getExtension("native_profiler");
        $__internal_5051a6a3ef26c48b1a35b77532832c1de2ea17ad7deb48b53586f38c7add4892->enter($__internal_5051a6a3ef26c48b1a35b77532832c1de2ea17ad7deb48b53586f38c7add4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5051a6a3ef26c48b1a35b77532832c1de2ea17ad7deb48b53586f38c7add4892->leave($__internal_5051a6a3ef26c48b1a35b77532832c1de2ea17ad7deb48b53586f38c7add4892_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27b5ab78b3532721a5812de81d30ca299f6c3308b991aa0e6fae65b26fa4b2ca = $this->env->getExtension("native_profiler");
        $__internal_27b5ab78b3532721a5812de81d30ca299f6c3308b991aa0e6fae65b26fa4b2ca->enter($__internal_27b5ab78b3532721a5812de81d30ca299f6c3308b991aa0e6fae65b26fa4b2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/accordion.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/accordion.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/menu.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_27b5ab78b3532721a5812de81d30ca299f6c3308b991aa0e6fae65b26fa4b2ca->leave($__internal_27b5ab78b3532721a5812de81d30ca299f6c3308b991aa0e6fae65b26fa4b2ca_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ccf304b12478e75c90190904e9b1733a9dfa2a82fa34645a61f0b12de6ecca7 = $this->env->getExtension("native_profiler");
        $__internal_6ccf304b12478e75c90190904e9b1733a9dfa2a82fa34645a61f0b12de6ecca7->enter($__internal_6ccf304b12478e75c90190904e9b1733a9dfa2a82fa34645a61f0b12de6ecca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|SRec
";
        
        $__internal_6ccf304b12478e75c90190904e9b1733a9dfa2a82fa34645a61f0b12de6ecca7->leave($__internal_6ccf304b12478e75c90190904e9b1733a9dfa2a82fa34645a61f0b12de6ecca7_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_233af65e72968018e486cae571bc34bd28ba3f888c5e0e2830b8e86af1f3e0d1 = $this->env->getExtension("native_profiler");
        $__internal_233af65e72968018e486cae571bc34bd28ba3f888c5e0e2830b8e86af1f3e0d1->enter($__internal_233af65e72968018e486cae571bc34bd28ba3f888c5e0e2830b8e86af1f3e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_233af65e72968018e486cae571bc34bd28ba3f888c5e0e2830b8e86af1f3e0d1->leave($__internal_233af65e72968018e486cae571bc34bd28ba3f888c5e0e2830b8e86af1f3e0d1_prof);

    }

    // line 17
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7d7d5493bfe5e493fabbff6c002dab72c15b429d0d68537f2aed8ce9a7d7c60c = $this->env->getExtension("native_profiler");
        $__internal_7d7d5493bfe5e493fabbff6c002dab72c15b429d0d68537f2aed8ce9a7d7c60c->enter($__internal_7d7d5493bfe5e493fabbff6c002dab72c15b429d0d68537f2aed8ce9a7d7c60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 18
        echo "  ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_7d7d5493bfe5e493fabbff6c002dab72c15b429d0d68537f2aed8ce9a7d7c60c->leave($__internal_7d7d5493bfe5e493fabbff6c002dab72c15b429d0d68537f2aed8ce9a7d7c60c_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2eaa7058f4f5ff3936edd25469a60322fbb26b4154bbb168abafeb145c366851 = $this->env->getExtension("native_profiler");
        $__internal_2eaa7058f4f5ff3936edd25469a60322fbb26b4154bbb168abafeb145c366851->enter($__internal_2eaa7058f4f5ff3936edd25469a60322fbb26b4154bbb168abafeb145c366851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_2eaa7058f4f5ff3936edd25469a60322fbb26b4154bbb168abafeb145c366851->leave($__internal_2eaa7058f4f5ff3936edd25469a60322fbb26b4154bbb168abafeb145c366851_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 21,  117 => 20,  107 => 18,  101 => 17,  91 => 15,  85 => 14,  75 => 12,  69 => 11,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  38 => 4,  11 => 3,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/accordion.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/accordion.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/style.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/menu.css')}}" />*/
/* {% endblock %}*/
/* {% block title %}*/
/*   {{ parent() }}|SRec*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
