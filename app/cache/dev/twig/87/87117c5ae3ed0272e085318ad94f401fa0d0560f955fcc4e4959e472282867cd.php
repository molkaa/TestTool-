<?php

/* TSAdminBundle:Admin:test.html.twig */
class __TwigTemplate_0a4142e7ed6a2277d2b0a34fc3b7e728f5f2b2a6fa9709c75f52968067b175a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:test.html.twig", 3);
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
        $__internal_343a5954a291c847f0101fc8d80a0a2be74cc126e87834c3cf39852031e22454 = $this->env->getExtension("native_profiler");
        $__internal_343a5954a291c847f0101fc8d80a0a2be74cc126e87834c3cf39852031e22454->enter($__internal_343a5954a291c847f0101fc8d80a0a2be74cc126e87834c3cf39852031e22454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_343a5954a291c847f0101fc8d80a0a2be74cc126e87834c3cf39852031e22454->leave($__internal_343a5954a291c847f0101fc8d80a0a2be74cc126e87834c3cf39852031e22454_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca1c0252969be2137acd9dcf5cd4421110f03d307dc26a97ed5a79a074195054 = $this->env->getExtension("native_profiler");
        $__internal_ca1c0252969be2137acd9dcf5cd4421110f03d307dc26a97ed5a79a074195054->enter($__internal_ca1c0252969be2137acd9dcf5cd4421110f03d307dc26a97ed5a79a074195054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "        ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|TestsResults
    ";
        
        $__internal_ca1c0252969be2137acd9dcf5cd4421110f03d307dc26a97ed5a79a074195054->leave($__internal_ca1c0252969be2137acd9dcf5cd4421110f03d307dc26a97ed5a79a074195054_prof);

    }

    // line 8
    public function block_icons($context, array $blocks = array())
    {
        $__internal_beb10efac63b5e2fdd9c74e18768ebc353b3f607ddce813697011bb6cfc51584 = $this->env->getExtension("native_profiler");
        $__internal_beb10efac63b5e2fdd9c74e18768ebc353b3f607ddce813697011bb6cfc51584->enter($__internal_beb10efac63b5e2fdd9c74e18768ebc353b3f607ddce813697011bb6cfc51584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 9
        echo "        ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
    ";
        
        $__internal_beb10efac63b5e2fdd9c74e18768ebc353b3f607ddce813697011bb6cfc51584->leave($__internal_beb10efac63b5e2fdd9c74e18768ebc353b3f607ddce813697011bb6cfc51584_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12a32525da1bb4a0e2239381d179800c8f1301706bf84e3402dbe3da14390277 = $this->env->getExtension("native_profiler");
        $__internal_12a32525da1bb4a0e2239381d179800c8f1301706bf84e3402dbe3da14390277->enter($__internal_12a32525da1bb4a0e2239381d179800c8f1301706bf84e3402dbe3da14390277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_12a32525da1bb4a0e2239381d179800c8f1301706bf84e3402dbe3da14390277->leave($__internal_12a32525da1bb4a0e2239381d179800c8f1301706bf84e3402dbe3da14390277_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_439fbf491404c080889d4f3474224e0d9d6dfb049e2e08b5b9500c6d4057406a = $this->env->getExtension("native_profiler");
        $__internal_439fbf491404c080889d4f3474224e0d9d6dfb049e2e08b5b9500c6d4057406a->enter($__internal_439fbf491404c080889d4f3474224e0d9d6dfb049e2e08b5b9500c6d4057406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "       
        ";
        // line 27
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_439fbf491404c080889d4f3474224e0d9d6dfb049e2e08b5b9500c6d4057406a->leave($__internal_439fbf491404c080889d4f3474224e0d9d6dfb049e2e08b5b9500c6d4057406a_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_94d39c5540543710c0297201eb5533d0073e336f486d7fc0174c9a01caba34c3 = $this->env->getExtension("native_profiler");
        $__internal_94d39c5540543710c0297201eb5533d0073e336f486d7fc0174c9a01caba34c3->enter($__internal_94d39c5540543710c0297201eb5533d0073e336f486d7fc0174c9a01caba34c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_94d39c5540543710c0297201eb5533d0073e336f486d7fc0174c9a01caba34c3->leave($__internal_94d39c5540543710c0297201eb5533d0073e336f486d7fc0174c9a01caba34c3_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7f90917c120c206b36b7ec7b3bb36415593f890001398310f87f69b716d5c07 = $this->env->getExtension("native_profiler");
        $__internal_e7f90917c120c206b36b7ec7b3bb36415593f890001398310f87f69b716d5c07->enter($__internal_e7f90917c120c206b36b7ec7b3bb36415593f890001398310f87f69b716d5c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_e7f90917c120c206b36b7ec7b3bb36415593f890001398310f87f69b716d5c07->leave($__internal_e7f90917c120c206b36b7ec7b3bb36415593f890001398310f87f69b716d5c07_prof);

    }

    // line 38
    public function block_right($context, array $blocks = array())
    {
        $__internal_e12c0c26109432fc8d1c1bbb5a62a7711a9f5db72ba0c984085c74c9273a1a6f = $this->env->getExtension("native_profiler");
        $__internal_e12c0c26109432fc8d1c1bbb5a62a7711a9f5db72ba0c984085c74c9273a1a6f->enter($__internal_e12c0c26109432fc8d1c1bbb5a62a7711a9f5db72ba0c984085c74c9273a1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 39
        echo "        ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
    ";
        
        $__internal_e12c0c26109432fc8d1c1bbb5a62a7711a9f5db72ba0c984085c74c9273a1a6f->leave($__internal_e12c0c26109432fc8d1c1bbb5a62a7711a9f5db72ba0c984085c74c9273a1a6f_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_50de9962961f506615aede61065227df44bcee0b80f9136a79ba78fe0b831cec = $this->env->getExtension("native_profiler");
        $__internal_50de9962961f506615aede61065227df44bcee0b80f9136a79ba78fe0b831cec->enter($__internal_50de9962961f506615aede61065227df44bcee0b80f9136a79ba78fe0b831cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "        <div id=\"page-title\"></div>
        ";
        // line 44
        $this->loadTemplate("TSAdminBundle:Candidate:researchTest.html.twig", "TSAdminBundle:Admin:test.html.twig", 44)->display($context);
        // line 45
        echo "        <div class=\"row\">

           
            
      ";
        // line 49
        $this->loadTemplate("TSAdminBundle:Admin:testDetails.html.twig", "TSAdminBundle:Admin:test.html.twig", 49)->display($context);
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
            // line 58
            echo "        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 63
                echo "            <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 65
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_allTests", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 67
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
        ";
        }
        // line 75
        echo "    </div>
</div>
        ";
        // line 77
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        ";
        // line 79
        echo "    ";
        
        $__internal_50de9962961f506615aede61065227df44bcee0b80f9136a79ba78fe0b831cec->leave($__internal_50de9962961f506615aede61065227df44bcee0b80f9136a79ba78fe0b831cec_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 79,  236 => 77,  232 => 75,  225 => 70,  216 => 67,  212 => 66,  209 => 65,  202 => 63,  198 => 62,  192 => 58,  186 => 55,  179 => 50,  177 => 49,  171 => 45,  169 => 44,  166 => 43,  160 => 42,  150 => 39,  144 => 38,  134 => 35,  128 => 34,  118 => 31,  112 => 30,  102 => 27,  99 => 18,  93 => 17,  84 => 14,  79 => 13,  73 => 12,  63 => 9,  57 => 8,  47 => 5,  41 => 4,  11 => 3,);
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
/*     {% block sidebar%}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block right%}*/
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
/*       {% include "TSAdminBundle:Admin:testDetails.html.twig" %}*/
/*         </div>*/
/*                 */
/*                 */
/*         <div class="row">*/
/*     <div class="col-md-4">*/
/*         {% if nombrePages == 0 %} */
/*             */
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
/*         {{ parent() }}*/
/*         {#////*********************************** Change element Script  ********************************#}*/
/*     {% endblock %}*/
