<?php

/* @TSAdmin/Admin/tests.html.twig */
class __TwigTemplate_a88b825b125c9a787d240eb0d8b713461ad2e465b2115d15d0aaa748596c7894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/tests.html.twig", 3);
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
        $__internal_731342576138f2b14e8f805d114d1246809dc24f493a1e6e018103a22d6f2f3e = $this->env->getExtension("native_profiler");
        $__internal_731342576138f2b14e8f805d114d1246809dc24f493a1e6e018103a22d6f2f3e->enter($__internal_731342576138f2b14e8f805d114d1246809dc24f493a1e6e018103a22d6f2f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_731342576138f2b14e8f805d114d1246809dc24f493a1e6e018103a22d6f2f3e->leave($__internal_731342576138f2b14e8f805d114d1246809dc24f493a1e6e018103a22d6f2f3e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f34411de402a1cfeb776adbc12f92ea34407be8baf5e41ae02c9bafccef8b9 = $this->env->getExtension("native_profiler");
        $__internal_13f34411de402a1cfeb776adbc12f92ea34407be8baf5e41ae02c9bafccef8b9->enter($__internal_13f34411de402a1cfeb776adbc12f92ea34407be8baf5e41ae02c9bafccef8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "        ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|TestsResults
    ";
        
        $__internal_13f34411de402a1cfeb776adbc12f92ea34407be8baf5e41ae02c9bafccef8b9->leave($__internal_13f34411de402a1cfeb776adbc12f92ea34407be8baf5e41ae02c9bafccef8b9_prof);

    }

    // line 8
    public function block_icons($context, array $blocks = array())
    {
        $__internal_83a3607b6cd58623c909f94c9242eb22437c194d483d9d604968b62513b43b7b = $this->env->getExtension("native_profiler");
        $__internal_83a3607b6cd58623c909f94c9242eb22437c194d483d9d604968b62513b43b7b->enter($__internal_83a3607b6cd58623c909f94c9242eb22437c194d483d9d604968b62513b43b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 9
        echo "        ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
    ";
        
        $__internal_83a3607b6cd58623c909f94c9242eb22437c194d483d9d604968b62513b43b7b->leave($__internal_83a3607b6cd58623c909f94c9242eb22437c194d483d9d604968b62513b43b7b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3d52d3987a17aa69b5d361699eccfd98bba68a9302835fdbe457b488ea9091f = $this->env->getExtension("native_profiler");
        $__internal_b3d52d3987a17aa69b5d361699eccfd98bba68a9302835fdbe457b488ea9091f->enter($__internal_b3d52d3987a17aa69b5d361699eccfd98bba68a9302835fdbe457b488ea9091f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_b3d52d3987a17aa69b5d361699eccfd98bba68a9302835fdbe457b488ea9091f->leave($__internal_b3d52d3987a17aa69b5d361699eccfd98bba68a9302835fdbe457b488ea9091f_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b2a7335750260ed084376c3e7d7a33f6a277c62317dcf2695947b3e1876eeaf2 = $this->env->getExtension("native_profiler");
        $__internal_b2a7335750260ed084376c3e7d7a33f6a277c62317dcf2695947b3e1876eeaf2->enter($__internal_b2a7335750260ed084376c3e7d7a33f6a277c62317dcf2695947b3e1876eeaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "       
        ";
        // line 27
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_b2a7335750260ed084376c3e7d7a33f6a277c62317dcf2695947b3e1876eeaf2->leave($__internal_b2a7335750260ed084376c3e7d7a33f6a277c62317dcf2695947b3e1876eeaf2_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_3bc23b85f37e5d44d5b073da1b5acdc30f32ff999b7bbf37fb4cdf77474aeec7 = $this->env->getExtension("native_profiler");
        $__internal_3bc23b85f37e5d44d5b073da1b5acdc30f32ff999b7bbf37fb4cdf77474aeec7->enter($__internal_3bc23b85f37e5d44d5b073da1b5acdc30f32ff999b7bbf37fb4cdf77474aeec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_3bc23b85f37e5d44d5b073da1b5acdc30f32ff999b7bbf37fb4cdf77474aeec7->leave($__internal_3bc23b85f37e5d44d5b073da1b5acdc30f32ff999b7bbf37fb4cdf77474aeec7_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_705ffe1d660f560de0fdd741b484c106f291ec9cf2db16b51d0c82ddba55c20c = $this->env->getExtension("native_profiler");
        $__internal_705ffe1d660f560de0fdd741b484c106f291ec9cf2db16b51d0c82ddba55c20c->enter($__internal_705ffe1d660f560de0fdd741b484c106f291ec9cf2db16b51d0c82ddba55c20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_705ffe1d660f560de0fdd741b484c106f291ec9cf2db16b51d0c82ddba55c20c->leave($__internal_705ffe1d660f560de0fdd741b484c106f291ec9cf2db16b51d0c82ddba55c20c_prof);

    }

    // line 38
    public function block_right($context, array $blocks = array())
    {
        $__internal_6c060522ec09e86898ea5b7cdc511830fc34b255778a360b90493fba04fd590a = $this->env->getExtension("native_profiler");
        $__internal_6c060522ec09e86898ea5b7cdc511830fc34b255778a360b90493fba04fd590a->enter($__internal_6c060522ec09e86898ea5b7cdc511830fc34b255778a360b90493fba04fd590a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 39
        echo "        ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
    ";
        
        $__internal_6c060522ec09e86898ea5b7cdc511830fc34b255778a360b90493fba04fd590a->leave($__internal_6c060522ec09e86898ea5b7cdc511830fc34b255778a360b90493fba04fd590a_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_893d2f71829105a5e0a6912a4efd0051e825d9acefbeb6a7d057787689973d69 = $this->env->getExtension("native_profiler");
        $__internal_893d2f71829105a5e0a6912a4efd0051e825d9acefbeb6a7d057787689973d69->enter($__internal_893d2f71829105a5e0a6912a4efd0051e825d9acefbeb6a7d057787689973d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "        <div id=\"page-title\"></div>
        ";
        // line 44
        $this->loadTemplate("TSAdminBundle:Candidate:researchTest.html.twig", "@TSAdmin/Admin/tests.html.twig", 44)->display($context);
        // line 45
        echo "        <div class=\"row\">

           
            
      ";
        // line 49
        $this->loadTemplate("TSAdminBundle:Admin:testsDetails.html.twig", "@TSAdmin/Admin/tests.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
                
      
        <div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 55
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
           ";
        } else {
            // line 57
            echo "        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 62
                echo "            <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 64
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_allTests", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 66
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
        ";
        }
        // line 74
        echo "    </div>
</div>
 ";
        // line 76
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "@TSAdmin/Admin/tests.html.twig", 76)->display($context);
        echo "      
        ";
        // line 77
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        ";
        // line 79
        echo "    ";
        
        $__internal_893d2f71829105a5e0a6912a4efd0051e825d9acefbeb6a7d057787689973d69->leave($__internal_893d2f71829105a5e0a6912a4efd0051e825d9acefbeb6a7d057787689973d69_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 79,  239 => 77,  235 => 76,  231 => 74,  224 => 69,  215 => 66,  211 => 65,  208 => 64,  201 => 62,  197 => 61,  191 => 57,  186 => 55,  179 => 50,  177 => 49,  171 => 45,  169 => 44,  166 => 43,  160 => 42,  150 => 39,  144 => 38,  134 => 35,  128 => 34,  118 => 31,  112 => 30,  102 => 27,  99 => 18,  93 => 17,  84 => 14,  79 => 13,  73 => 12,  63 => 9,  57 => 8,  47 => 5,  41 => 4,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\candidate\tests.html.twig #}*/
/* */
/*     {% extends "TSAdminBundle::layout.html.twig" %}*/
/*     {% block title %}*/
/*         {{ parent() }}|admin|TestsResults*/
/*     {% endblock %}*/
/* */
/*     {% block icons %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block stylesheets %}*/
/*         {{ parent() }}*/
/*         <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*        */
/*         {#  <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/*           <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>#}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block header %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block sidebar %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block right %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block content%}*/
/*         <div id="page-title"></div>*/
/*         {% include "TSAdminBundle:Candidate:researchTest.html.twig" %}*/
/*         <div class="row">*/
/* */
/*            */
/*             */
/*       {% include "TSAdminBundle:Admin:testsDetails.html.twig" %}*/
/*         </div>*/
/*                 */
/*       */
/*         <div class="row">*/
/*     <div class="col-md-4">*/
/*         {% if nombrePages == 0 %} */
/*            {% else %}*/
/*         <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-left"></i>*/
/*         </a>*/
/*         <div class="button-group float-left">*/
/*         {% for p in range(1, nombrePages) %}*/
/*             <a {% if p == pages %} */
/*                 class="btn disabled large primary-bg"*/
/*             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_allTests', {'pages': p}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/*  {% include "TSAdminBundle:Notification:GrowlNotif.html.twig"  %}      */
/*         {{ parent() }}*/
/*         {#////*********************************** Change element Script  ********************************#}*/
/*     {% endblock %}*/
/*        */
/* */
/* */
