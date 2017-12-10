<?php

/* @TSAdmin/Admin/LineCharts.html.twig */
class __TwigTemplate_b2225196c53a12070b840c6d7c8b53124d79aeeed01ecd76957076828d5ef3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/LineCharts.html.twig", 2);
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
        $__internal_f3019d0a803f6d9b9dc0b2a56b8fe100eafa1dfce056921e655300146ebdede0 = $this->env->getExtension("native_profiler");
        $__internal_f3019d0a803f6d9b9dc0b2a56b8fe100eafa1dfce056921e655300146ebdede0->enter($__internal_f3019d0a803f6d9b9dc0b2a56b8fe100eafa1dfce056921e655300146ebdede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/LineCharts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3019d0a803f6d9b9dc0b2a56b8fe100eafa1dfce056921e655300146ebdede0->leave($__internal_f3019d0a803f6d9b9dc0b2a56b8fe100eafa1dfce056921e655300146ebdede0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7300fd51706781589188372d17518e2dd5e55d3569e0eb037765cf17e015c5e9 = $this->env->getExtension("native_profiler");
        $__internal_7300fd51706781589188372d17518e2dd5e55d3569e0eb037765cf17e015c5e9->enter($__internal_7300fd51706781589188372d17518e2dd5e55d3569e0eb037765cf17e015c5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|CandidateStatics
";
        
        $__internal_7300fd51706781589188372d17518e2dd5e55d3569e0eb037765cf17e015c5e9->leave($__internal_7300fd51706781589188372d17518e2dd5e55d3569e0eb037765cf17e015c5e9_prof);

    }

    // line 9
    public function block_icons($context, array $blocks = array())
    {
        $__internal_c16424aa14beed823bfc55f79e9df8313fa2885d9621399b3efcf65841127e20 = $this->env->getExtension("native_profiler");
        $__internal_c16424aa14beed823bfc55f79e9df8313fa2885d9621399b3efcf65841127e20->enter($__internal_c16424aa14beed823bfc55f79e9df8313fa2885d9621399b3efcf65841127e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 10
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_c16424aa14beed823bfc55f79e9df8313fa2885d9621399b3efcf65841127e20->leave($__internal_c16424aa14beed823bfc55f79e9df8313fa2885d9621399b3efcf65841127e20_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c83fbe1b16016f4944ac08bbd88bf87bb616e9c15723f99aa35388f0c4b45c5a = $this->env->getExtension("native_profiler");
        $__internal_c83fbe1b16016f4944ac08bbd88bf87bb616e9c15723f99aa35388f0c4b45c5a->enter($__internal_c83fbe1b16016f4944ac08bbd88bf87bb616e9c15723f99aa35388f0c4b45c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_c83fbe1b16016f4944ac08bbd88bf87bb616e9c15723f99aa35388f0c4b45c5a->leave($__internal_c83fbe1b16016f4944ac08bbd88bf87bb616e9c15723f99aa35388f0c4b45c5a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ccfe9f22bed87bc866cfa39ab832a353c93c20748d349f18f04dd8692b9e6e6 = $this->env->getExtension("native_profiler");
        $__internal_3ccfe9f22bed87bc866cfa39ab832a353c93c20748d349f18f04dd8692b9e6e6->enter($__internal_3ccfe9f22bed87bc866cfa39ab832a353c93c20748d349f18f04dd8692b9e6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3ccfe9f22bed87bc866cfa39ab832a353c93c20748d349f18f04dd8692b9e6e6->leave($__internal_3ccfe9f22bed87bc866cfa39ab832a353c93c20748d349f18f04dd8692b9e6e6_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_7c3730ff65826a13613aa2e30eb23f45db1d96c450be757caec146afa39497f4 = $this->env->getExtension("native_profiler");
        $__internal_7c3730ff65826a13613aa2e30eb23f45db1d96c450be757caec146afa39497f4->enter($__internal_7c3730ff65826a13613aa2e30eb23f45db1d96c450be757caec146afa39497f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_7c3730ff65826a13613aa2e30eb23f45db1d96c450be757caec146afa39497f4->leave($__internal_7c3730ff65826a13613aa2e30eb23f45db1d96c450be757caec146afa39497f4_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_45f93b467fb019e884fed86e6ca2b9c8140f3ea658e737abd1565c129e1f9e98 = $this->env->getExtension("native_profiler");
        $__internal_45f93b467fb019e884fed86e6ca2b9c8140f3ea658e737abd1565c129e1f9e98->enter($__internal_45f93b467fb019e884fed86e6ca2b9c8140f3ea658e737abd1565c129e1f9e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_45f93b467fb019e884fed86e6ca2b9c8140f3ea658e737abd1565c129e1f9e98->leave($__internal_45f93b467fb019e884fed86e6ca2b9c8140f3ea658e737abd1565c129e1f9e98_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_6726d361c4ecd133bf64584162af06f0a12e3177ddd6ad4a0008562d25f04a20 = $this->env->getExtension("native_profiler");
        $__internal_6726d361c4ecd133bf64584162af06f0a12e3177ddd6ad4a0008562d25f04a20->enter($__internal_6726d361c4ecd133bf64584162af06f0a12e3177ddd6ad4a0008562d25f04a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_6726d361c4ecd133bf64584162af06f0a12e3177ddd6ad4a0008562d25f04a20->leave($__internal_6726d361c4ecd133bf64584162af06f0a12e3177ddd6ad4a0008562d25f04a20_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_f545e6584b60480c1868be3bb24dc6a8ce8943dcbc7cd5e8041f13331807c79f = $this->env->getExtension("native_profiler");
        $__internal_f545e6584b60480c1868be3bb24dc6a8ce8943dcbc7cd5e8041f13331807c79f->enter($__internal_f545e6584b60480c1868be3bb24dc6a8ce8943dcbc7cd5e8041f13331807c79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f545e6584b60480c1868be3bb24dc6a8ce8943dcbc7cd5e8041f13331807c79f->leave($__internal_f545e6584b60480c1868be3bb24dc6a8ce8943dcbc7cd5e8041f13331807c79f_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/LineCharts.html.twig";
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
/* {# src\TS\AdminBundle\Resources\views\Admin\LineCharts.html.twig #}*/
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
