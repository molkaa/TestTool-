<?php

/* @TSAdmin/Admin/test.html.twig */
class __TwigTemplate_c2906433ced3a8edb9a72c4730265f567adef77069aeae5465c239f2732a7258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/test.html.twig", 3);
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
        $__internal_e117e722e2976940ac5a843db65d0deab822313d113012fe46779566f750276e = $this->env->getExtension("native_profiler");
        $__internal_e117e722e2976940ac5a843db65d0deab822313d113012fe46779566f750276e->enter($__internal_e117e722e2976940ac5a843db65d0deab822313d113012fe46779566f750276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e117e722e2976940ac5a843db65d0deab822313d113012fe46779566f750276e->leave($__internal_e117e722e2976940ac5a843db65d0deab822313d113012fe46779566f750276e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b40aac345e8d59ea478e8d77d1f1e06107e99b3d6c5f059595ec97c57035257a = $this->env->getExtension("native_profiler");
        $__internal_b40aac345e8d59ea478e8d77d1f1e06107e99b3d6c5f059595ec97c57035257a->enter($__internal_b40aac345e8d59ea478e8d77d1f1e06107e99b3d6c5f059595ec97c57035257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "        ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|TestsResults
    ";
        
        $__internal_b40aac345e8d59ea478e8d77d1f1e06107e99b3d6c5f059595ec97c57035257a->leave($__internal_b40aac345e8d59ea478e8d77d1f1e06107e99b3d6c5f059595ec97c57035257a_prof);

    }

    // line 8
    public function block_icons($context, array $blocks = array())
    {
        $__internal_468b61ca5a9f07af4d5847eff48cb50fbfd4ab6cd7383606c11b8c16c850dba0 = $this->env->getExtension("native_profiler");
        $__internal_468b61ca5a9f07af4d5847eff48cb50fbfd4ab6cd7383606c11b8c16c850dba0->enter($__internal_468b61ca5a9f07af4d5847eff48cb50fbfd4ab6cd7383606c11b8c16c850dba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 9
        echo "        ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
    ";
        
        $__internal_468b61ca5a9f07af4d5847eff48cb50fbfd4ab6cd7383606c11b8c16c850dba0->leave($__internal_468b61ca5a9f07af4d5847eff48cb50fbfd4ab6cd7383606c11b8c16c850dba0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b78c004037c2ec540138ba11f999a9018ac6d1d16e34ab8224a29bb5e584e7a = $this->env->getExtension("native_profiler");
        $__internal_3b78c004037c2ec540138ba11f999a9018ac6d1d16e34ab8224a29bb5e584e7a->enter($__internal_3b78c004037c2ec540138ba11f999a9018ac6d1d16e34ab8224a29bb5e584e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_3b78c004037c2ec540138ba11f999a9018ac6d1d16e34ab8224a29bb5e584e7a->leave($__internal_3b78c004037c2ec540138ba11f999a9018ac6d1d16e34ab8224a29bb5e584e7a_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_946c541576535dfe83c7e4a67e70a5a218382fb89d78b3fbd1108a5186e13df3 = $this->env->getExtension("native_profiler");
        $__internal_946c541576535dfe83c7e4a67e70a5a218382fb89d78b3fbd1108a5186e13df3->enter($__internal_946c541576535dfe83c7e4a67e70a5a218382fb89d78b3fbd1108a5186e13df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "       
        ";
        // line 27
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_946c541576535dfe83c7e4a67e70a5a218382fb89d78b3fbd1108a5186e13df3->leave($__internal_946c541576535dfe83c7e4a67e70a5a218382fb89d78b3fbd1108a5186e13df3_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_184b14e80b15c8e8a52a08837b7e602bd21df54b769efe515e74b7a83407f14f = $this->env->getExtension("native_profiler");
        $__internal_184b14e80b15c8e8a52a08837b7e602bd21df54b769efe515e74b7a83407f14f->enter($__internal_184b14e80b15c8e8a52a08837b7e602bd21df54b769efe515e74b7a83407f14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_184b14e80b15c8e8a52a08837b7e602bd21df54b769efe515e74b7a83407f14f->leave($__internal_184b14e80b15c8e8a52a08837b7e602bd21df54b769efe515e74b7a83407f14f_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e567bc5b1e5b226a129d21523aa69938f4cd6fd7c3337d39fe3721b5127fc458 = $this->env->getExtension("native_profiler");
        $__internal_e567bc5b1e5b226a129d21523aa69938f4cd6fd7c3337d39fe3721b5127fc458->enter($__internal_e567bc5b1e5b226a129d21523aa69938f4cd6fd7c3337d39fe3721b5127fc458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_e567bc5b1e5b226a129d21523aa69938f4cd6fd7c3337d39fe3721b5127fc458->leave($__internal_e567bc5b1e5b226a129d21523aa69938f4cd6fd7c3337d39fe3721b5127fc458_prof);

    }

    // line 38
    public function block_right($context, array $blocks = array())
    {
        $__internal_81eceb3bfd2b783ad357bd27dceab5f735b4895364922bc90cf8a930b337c9d8 = $this->env->getExtension("native_profiler");
        $__internal_81eceb3bfd2b783ad357bd27dceab5f735b4895364922bc90cf8a930b337c9d8->enter($__internal_81eceb3bfd2b783ad357bd27dceab5f735b4895364922bc90cf8a930b337c9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 39
        echo "        ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
    ";
        
        $__internal_81eceb3bfd2b783ad357bd27dceab5f735b4895364922bc90cf8a930b337c9d8->leave($__internal_81eceb3bfd2b783ad357bd27dceab5f735b4895364922bc90cf8a930b337c9d8_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_65ed03a491d2a026fceef6b05def44a6283f8e6c58cf85a41fbadfff6b94c952 = $this->env->getExtension("native_profiler");
        $__internal_65ed03a491d2a026fceef6b05def44a6283f8e6c58cf85a41fbadfff6b94c952->enter($__internal_65ed03a491d2a026fceef6b05def44a6283f8e6c58cf85a41fbadfff6b94c952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "        <div id=\"page-title\"></div>
        ";
        // line 44
        $this->loadTemplate("TSAdminBundle:Candidate:researchTest.html.twig", "@TSAdmin/Admin/test.html.twig", 44)->display($context);
        // line 45
        echo "        <div class=\"row\">

           
            
      ";
        // line 49
        $this->loadTemplate("TSAdminBundle:Admin:testDetails.html.twig", "@TSAdmin/Admin/test.html.twig", 49)->display($context);
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
        
        $__internal_65ed03a491d2a026fceef6b05def44a6283f8e6c58cf85a41fbadfff6b94c952->leave($__internal_65ed03a491d2a026fceef6b05def44a6283f8e6c58cf85a41fbadfff6b94c952_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/test.html.twig";
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
