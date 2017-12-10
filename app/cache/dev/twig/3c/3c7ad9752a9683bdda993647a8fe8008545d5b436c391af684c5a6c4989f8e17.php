<?php

/* @TSAdmin/Admin/Pie.html.twig */
class __TwigTemplate_6dc902fe82d36da773483715659b48f837bc22d9f07cf0cbc2f35f6b3a1c9c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/Pie.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icons' => array($this, 'block_icons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'right' => array($this, 'block_right'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf9c0116bb9be72f8ab3c55afb6cc33692140f461fdf263e26a2421cf98faa98 = $this->env->getExtension("native_profiler");
        $__internal_bf9c0116bb9be72f8ab3c55afb6cc33692140f461fdf263e26a2421cf98faa98->enter($__internal_bf9c0116bb9be72f8ab3c55afb6cc33692140f461fdf263e26a2421cf98faa98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/Pie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9c0116bb9be72f8ab3c55afb6cc33692140f461fdf263e26a2421cf98faa98->leave($__internal_bf9c0116bb9be72f8ab3c55afb6cc33692140f461fdf263e26a2421cf98faa98_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dadcc47faaf921aa735c4e6444d4e27cb0852ba308d163143aab4f99c7f6557a = $this->env->getExtension("native_profiler");
        $__internal_dadcc47faaf921aa735c4e6444d4e27cb0852ba308d163143aab4f99c7f6557a->enter($__internal_dadcc47faaf921aa735c4e6444d4e27cb0852ba308d163143aab4f99c7f6557a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|CandidateStatics
";
        
        $__internal_dadcc47faaf921aa735c4e6444d4e27cb0852ba308d163143aab4f99c7f6557a->leave($__internal_dadcc47faaf921aa735c4e6444d4e27cb0852ba308d163143aab4f99c7f6557a_prof);

    }

    // line 9
    public function block_icons($context, array $blocks = array())
    {
        $__internal_0029ecae74869fd022679573f3166c0d4fc9dbeb476ce6607ee9c03db9880d95 = $this->env->getExtension("native_profiler");
        $__internal_0029ecae74869fd022679573f3166c0d4fc9dbeb476ce6607ee9c03db9880d95->enter($__internal_0029ecae74869fd022679573f3166c0d4fc9dbeb476ce6607ee9c03db9880d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 10
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_0029ecae74869fd022679573f3166c0d4fc9dbeb476ce6607ee9c03db9880d95->leave($__internal_0029ecae74869fd022679573f3166c0d4fc9dbeb476ce6607ee9c03db9880d95_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_174bdce09b32a5be44d111be7396d01592b4ea2eb89a8230e4cf6f84be43fe77 = $this->env->getExtension("native_profiler");
        $__internal_174bdce09b32a5be44d111be7396d01592b4ea2eb89a8230e4cf6f84be43fe77->enter($__internal_174bdce09b32a5be44d111be7396d01592b4ea2eb89a8230e4cf6f84be43fe77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_174bdce09b32a5be44d111be7396d01592b4ea2eb89a8230e4cf6f84be43fe77->leave($__internal_174bdce09b32a5be44d111be7396d01592b4ea2eb89a8230e4cf6f84be43fe77_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0f5c1ac571697bfcf5ac1a68e41d5cff278138c4b6492e8c4ab993ea896799e = $this->env->getExtension("native_profiler");
        $__internal_a0f5c1ac571697bfcf5ac1a68e41d5cff278138c4b6492e8c4ab993ea896799e->enter($__internal_a0f5c1ac571697bfcf5ac1a68e41d5cff278138c4b6492e8c4ab993ea896799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a0f5c1ac571697bfcf5ac1a68e41d5cff278138c4b6492e8c4ab993ea896799e->leave($__internal_a0f5c1ac571697bfcf5ac1a68e41d5cff278138c4b6492e8c4ab993ea896799e_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_1ace13677887726340cb0ef7da56288cd398533974b0441645a5f7267b03cdcf = $this->env->getExtension("native_profiler");
        $__internal_1ace13677887726340cb0ef7da56288cd398533974b0441645a5f7267b03cdcf->enter($__internal_1ace13677887726340cb0ef7da56288cd398533974b0441645a5f7267b03cdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_1ace13677887726340cb0ef7da56288cd398533974b0441645a5f7267b03cdcf->leave($__internal_1ace13677887726340cb0ef7da56288cd398533974b0441645a5f7267b03cdcf_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6aeaaf4ab2acf9fb938478d8ea560e564c213757a2bca23e92d29ab64cd0f0ab = $this->env->getExtension("native_profiler");
        $__internal_6aeaaf4ab2acf9fb938478d8ea560e564c213757a2bca23e92d29ab64cd0f0ab->enter($__internal_6aeaaf4ab2acf9fb938478d8ea560e564c213757a2bca23e92d29ab64cd0f0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_6aeaaf4ab2acf9fb938478d8ea560e564c213757a2bca23e92d29ab64cd0f0ab->leave($__internal_6aeaaf4ab2acf9fb938478d8ea560e564c213757a2bca23e92d29ab64cd0f0ab_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_edba3bd7533b3e240277054e70d163667d196e8249286ba3ed98d19a65439bbd = $this->env->getExtension("native_profiler");
        $__internal_edba3bd7533b3e240277054e70d163667d196e8249286ba3ed98d19a65439bbd->enter($__internal_edba3bd7533b3e240277054e70d163667d196e8249286ba3ed98d19a65439bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_edba3bd7533b3e240277054e70d163667d196e8249286ba3ed98d19a65439bbd->leave($__internal_edba3bd7533b3e240277054e70d163667d196e8249286ba3ed98d19a65439bbd_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5007e3fd339057af45cb3d7d93f6c19c0ec4410696a67aed1def90f50a8398b = $this->env->getExtension("native_profiler");
        $__internal_a5007e3fd339057af45cb3d7d93f6c19c0ec4410696a67aed1def90f50a8398b->enter($__internal_a5007e3fd339057af45cb3d7d93f6c19c0ec4410696a67aed1def90f50a8398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
    <script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>
    <script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>
    <script type=\"text/javascript\">
        ";
        // line 37
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

    </script>
   
    <div id=\"container\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
        // line 42
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_a5007e3fd339057af45cb3d7d93f6c19c0ec4410696a67aed1def90f50a8398b->leave($__internal_a5007e3fd339057af45cb3d7d93f6c19c0ec4410696a67aed1def90f50a8398b_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/Pie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  166 => 37,  160 => 33,  154 => 32,  145 => 28,  139 => 27,  130 => 24,  124 => 23,  114 => 21,  108 => 20,  99 => 18,  93 => 17,  84 => 15,  79 => 14,  73 => 13,  63 => 10,  57 => 9,  47 => 6,  41 => 5,  11 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\Admin\Pie.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*     {{ parent() }}|admin|CandidateStatics*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/*  {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content%}*/
/*     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/*     <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/*     <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/*     <script type="text/javascript">*/
/*         {{ chart(chart) }}*/
/* */
/*     </script>*/
/*    */
/*     <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>{# empty Twig template #}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
