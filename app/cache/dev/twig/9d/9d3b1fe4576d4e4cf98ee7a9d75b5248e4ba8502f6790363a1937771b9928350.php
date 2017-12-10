<?php

/* TSSRecBundle::layout.html.twig */
class __TwigTemplate_d3463c45f668ac0cffc7015e0633d9785f5c1f6adb176d89d289fe627d2b8631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "TSSRecBundle::layout.html.twig", 3);
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
        $__internal_0838656ea04963a0a46eb97e2f857b47b8f6b4b0135e8df2384ae760ae883748 = $this->env->getExtension("native_profiler");
        $__internal_0838656ea04963a0a46eb97e2f857b47b8f6b4b0135e8df2384ae760ae883748->enter($__internal_0838656ea04963a0a46eb97e2f857b47b8f6b4b0135e8df2384ae760ae883748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0838656ea04963a0a46eb97e2f857b47b8f6b4b0135e8df2384ae760ae883748->leave($__internal_0838656ea04963a0a46eb97e2f857b47b8f6b4b0135e8df2384ae760ae883748_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fa2a0510265a30b9c708e791448fc0e9f076309074f47cfa6b1556a49bad38f = $this->env->getExtension("native_profiler");
        $__internal_3fa2a0510265a30b9c708e791448fc0e9f076309074f47cfa6b1556a49bad38f->enter($__internal_3fa2a0510265a30b9c708e791448fc0e9f076309074f47cfa6b1556a49bad38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3fa2a0510265a30b9c708e791448fc0e9f076309074f47cfa6b1556a49bad38f->leave($__internal_3fa2a0510265a30b9c708e791448fc0e9f076309074f47cfa6b1556a49bad38f_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_6997ae5adbf0d40e79427a8fb17b069c11a23422019549c146b8bd82f219ef3b = $this->env->getExtension("native_profiler");
        $__internal_6997ae5adbf0d40e79427a8fb17b069c11a23422019549c146b8bd82f219ef3b->enter($__internal_6997ae5adbf0d40e79427a8fb17b069c11a23422019549c146b8bd82f219ef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|SRec
";
        
        $__internal_6997ae5adbf0d40e79427a8fb17b069c11a23422019549c146b8bd82f219ef3b->leave($__internal_6997ae5adbf0d40e79427a8fb17b069c11a23422019549c146b8bd82f219ef3b_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_17d3cbaa7a52b6b25eabe4c96a9512758df23c2cd1d488c6ecedb9138328c7e2 = $this->env->getExtension("native_profiler");
        $__internal_17d3cbaa7a52b6b25eabe4c96a9512758df23c2cd1d488c6ecedb9138328c7e2->enter($__internal_17d3cbaa7a52b6b25eabe4c96a9512758df23c2cd1d488c6ecedb9138328c7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_17d3cbaa7a52b6b25eabe4c96a9512758df23c2cd1d488c6ecedb9138328c7e2->leave($__internal_17d3cbaa7a52b6b25eabe4c96a9512758df23c2cd1d488c6ecedb9138328c7e2_prof);

    }

    // line 17
    public function block_slider($context, array $blocks = array())
    {
        $__internal_86cc63b821467975d66873ee0b10ff1fee24dd62e07669bf9c765445043a1fd0 = $this->env->getExtension("native_profiler");
        $__internal_86cc63b821467975d66873ee0b10ff1fee24dd62e07669bf9c765445043a1fd0->enter($__internal_86cc63b821467975d66873ee0b10ff1fee24dd62e07669bf9c765445043a1fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 18
        echo "  ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_86cc63b821467975d66873ee0b10ff1fee24dd62e07669bf9c765445043a1fd0->leave($__internal_86cc63b821467975d66873ee0b10ff1fee24dd62e07669bf9c765445043a1fd0_prof);

    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b8cef9c799277ab3c4f65448b48d687d20a20c0c25f92203cd9e2d8a5a2ea7b9 = $this->env->getExtension("native_profiler");
        $__internal_b8cef9c799277ab3c4f65448b48d687d20a20c0c25f92203cd9e2d8a5a2ea7b9->enter($__internal_b8cef9c799277ab3c4f65448b48d687d20a20c0c25f92203cd9e2d8a5a2ea7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 21
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_b8cef9c799277ab3c4f65448b48d687d20a20c0c25f92203cd9e2d8a5a2ea7b9->leave($__internal_b8cef9c799277ab3c4f65448b48d687d20a20c0c25f92203cd9e2d8a5a2ea7b9_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle::layout.html.twig";
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
