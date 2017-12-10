<?php

/* TSAdminBundle:Tables:editTests.html.twig */
class __TwigTemplate_32ea2965c092cbec633651219a1b0487673a61b8eead500915a2ebab1c55f164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tables:editTests.html.twig", 3);
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
        $__internal_e860675eb46bc41548f19f93c5daef8a982317edca3a268d7c89e64c5d2fabf5 = $this->env->getExtension("native_profiler");
        $__internal_e860675eb46bc41548f19f93c5daef8a982317edca3a268d7c89e64c5d2fabf5->enter($__internal_e860675eb46bc41548f19f93c5daef8a982317edca3a268d7c89e64c5d2fabf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tables:editTests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e860675eb46bc41548f19f93c5daef8a982317edca3a268d7c89e64c5d2fabf5->leave($__internal_e860675eb46bc41548f19f93c5daef8a982317edca3a268d7c89e64c5d2fabf5_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a89f710f7e2e1a8c4856314c0837754b2e07c6782f3428f77f18804e36fdfbb = $this->env->getExtension("native_profiler");
        $__internal_4a89f710f7e2e1a8c4856314c0837754b2e07c6782f3428f77f18804e36fdfbb->enter($__internal_4a89f710f7e2e1a8c4856314c0837754b2e07c6782f3428f77f18804e36fdfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|testsType
";
        
        $__internal_4a89f710f7e2e1a8c4856314c0837754b2e07c6782f3428f77f18804e36fdfbb->leave($__internal_4a89f710f7e2e1a8c4856314c0837754b2e07c6782f3428f77f18804e36fdfbb_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_4d420434139608ab11572f5382f914118b0e4f177250b0638d7fa777715ad966 = $this->env->getExtension("native_profiler");
        $__internal_4d420434139608ab11572f5382f914118b0e4f177250b0638d7fa777715ad966->enter($__internal_4d420434139608ab11572f5382f914118b0e4f177250b0638d7fa777715ad966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_4d420434139608ab11572f5382f914118b0e4f177250b0638d7fa777715ad966->leave($__internal_4d420434139608ab11572f5382f914118b0e4f177250b0638d7fa777715ad966_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebd356898dcc4f1d11b40cf6df8b1e2af0bbe60bc20d0cc3f47dd280ecbdf808 = $this->env->getExtension("native_profiler");
        $__internal_ebd356898dcc4f1d11b40cf6df8b1e2af0bbe60bc20d0cc3f47dd280ecbdf808->enter($__internal_ebd356898dcc4f1d11b40cf6df8b1e2af0bbe60bc20d0cc3f47dd280ecbdf808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ebd356898dcc4f1d11b40cf6df8b1e2af0bbe60bc20d0cc3f47dd280ecbdf808->leave($__internal_ebd356898dcc4f1d11b40cf6df8b1e2af0bbe60bc20d0cc3f47dd280ecbdf808_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9881273be0a4338f35cb103072b8e85e5887a5f394b1ae456864a9f069bd8359 = $this->env->getExtension("native_profiler");
        $__internal_9881273be0a4338f35cb103072b8e85e5887a5f394b1ae456864a9f069bd8359->enter($__internal_9881273be0a4338f35cb103072b8e85e5887a5f394b1ae456864a9f069bd8359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9881273be0a4338f35cb103072b8e85e5887a5f394b1ae456864a9f069bd8359->leave($__internal_9881273be0a4338f35cb103072b8e85e5887a5f394b1ae456864a9f069bd8359_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_e8e476c7579e2dc5f569ef7a157c84508e5d234c5e00ccbcde2de9aa7ab5abb7 = $this->env->getExtension("native_profiler");
        $__internal_e8e476c7579e2dc5f569ef7a157c84508e5d234c5e00ccbcde2de9aa7ab5abb7->enter($__internal_e8e476c7579e2dc5f569ef7a157c84508e5d234c5e00ccbcde2de9aa7ab5abb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e8e476c7579e2dc5f569ef7a157c84508e5d234c5e00ccbcde2de9aa7ab5abb7->leave($__internal_e8e476c7579e2dc5f569ef7a157c84508e5d234c5e00ccbcde2de9aa7ab5abb7_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_92be8969fac6d91fc25c451af8b98d9bbe77d799ceaa549e2bf8264e0746d1ab = $this->env->getExtension("native_profiler");
        $__internal_92be8969fac6d91fc25c451af8b98d9bbe77d799ceaa549e2bf8264e0746d1ab->enter($__internal_92be8969fac6d91fc25c451af8b98d9bbe77d799ceaa549e2bf8264e0746d1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_92be8969fac6d91fc25c451af8b98d9bbe77d799ceaa549e2bf8264e0746d1ab->leave($__internal_92be8969fac6d91fc25c451af8b98d9bbe77d799ceaa549e2bf8264e0746d1ab_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_a188eb52efc69cefdae6bbb58a84e07d63786b7f5c013cc2278d8cfb0d82569d = $this->env->getExtension("native_profiler");
        $__internal_a188eb52efc69cefdae6bbb58a84e07d63786b7f5c013cc2278d8cfb0d82569d->enter($__internal_a188eb52efc69cefdae6bbb58a84e07d63786b7f5c013cc2278d8cfb0d82569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_a188eb52efc69cefdae6bbb58a84e07d63786b7f5c013cc2278d8cfb0d82569d->leave($__internal_a188eb52efc69cefdae6bbb58a84e07d63786b7f5c013cc2278d8cfb0d82569d_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_5f6f2d4e8ff203ef30bf59785ebc65be7df08081c165a302d7cc753978ec633e = $this->env->getExtension("native_profiler");
        $__internal_5f6f2d4e8ff203ef30bf59785ebc65be7df08081c165a302d7cc753978ec633e->enter($__internal_5f6f2d4e8ff203ef30bf59785ebc65be7df08081c165a302d7cc753978ec633e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo " <div id=\"page-title\"></div>
<div class=\"row\">
    <div class=\"col-md-12\">      

           
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddTestType\"  title=\"Add Test Type\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-plus-square\"></i>
                    </span>
                    <span class=\"button-content\">
                        Add Test Type
                    </span>
                </a>
           


        </div>
        <br><br>


<div class=\"col-md-12\">
    <div class=\"profile-box profile-box-alt content-box\">
        <div class=\"content-box-header clearfix primary-bg\">
            <div class=\"user-details\">

            </div>
        </div>
        <table class=\"table\">
            <tbody>
";
        // line 65
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 66
            echo "                    ";
            $this->loadTemplate("TSAdminBundle:Tables:showValues.html.twig", "TSAdminBundle:Tables:editTests.html.twig", 66)->display($context);
            // line 67
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
            </tbody>
        </table>
    </div>
</div>
</div>
";
        // line 75
        $this->loadTemplate("TSAdminBundle:Tables:ModalAddTestType.html.twig", "TSAdminBundle:Tables:editTests.html.twig", 75)->display($context);
        // line 76
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "TSAdminBundle:Tables:editTests.html.twig", 76)->display($context);
        // line 77
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_5f6f2d4e8ff203ef30bf59785ebc65be7df08081c165a302d7cc753978ec633e->leave($__internal_5f6f2d4e8ff203ef30bf59785ebc65be7df08081c165a302d7cc753978ec633e_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tables:editTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 77,  233 => 76,  231 => 75,  223 => 69,  209 => 67,  206 => 66,  188 => 65,  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\tables\editTests.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin|testsType*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/*  {% block sidebar%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content%}*/
/*  <div id="page-title"></div>*/
/* <div class="row">*/
/*     <div class="col-md-12">      */
/* */
/*            */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddTestType"  title="Add Test Type" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-plus-square"></i>*/
/*                     </span>*/
/*                     <span class="button-content">*/
/*                         Add Test Type*/
/*                     </span>*/
/*                 </a>*/
/*            */
/* */
/* */
/*         </div>*/
/*         <br><br>*/
/* */
/* */
/* <div class="col-md-12">*/
/*     <div class="profile-box profile-box-alt content-box">*/
/*         <div class="content-box-header clearfix primary-bg">*/
/*             <div class="user-details">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <table class="table">*/
/*             <tbody>*/
/* {#                <tr>#}*/
/*                 {% for value in values %}*/
/*                     {% include "TSAdminBundle:Tables:showValues.html.twig" %}*/
/*                 {% endfor %}*/
/* {#                </tr>#}*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% include "TSAdminBundle:Tables:ModalAddTestType.html.twig" %}*/
/* {% include "TSAdminBundle:Notification:GrowlNotif.html.twig" %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
