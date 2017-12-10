<?php

/* TSAdminBundle:Tests:testsSeconde.html.twig */
class __TwigTemplate_93cccfacc95f4e3fa9582104e50d37a2cbc12c0c6975861ab4b3a69d88140f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:testsSeconde.html.twig", 2);
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
        $__internal_ddd022980242d6f08fbad05de04d69eac0eec6dfaf83be311a66dbd480261b82 = $this->env->getExtension("native_profiler");
        $__internal_ddd022980242d6f08fbad05de04d69eac0eec6dfaf83be311a66dbd480261b82->enter($__internal_ddd022980242d6f08fbad05de04d69eac0eec6dfaf83be311a66dbd480261b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:testsSeconde.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd022980242d6f08fbad05de04d69eac0eec6dfaf83be311a66dbd480261b82->leave($__internal_ddd022980242d6f08fbad05de04d69eac0eec6dfaf83be311a66dbd480261b82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2543d6aeb7c60f9f3ee0f1267faeb8b4ac68dd36f0e893a8e767b22ecd8d45b6 = $this->env->getExtension("native_profiler");
        $__internal_2543d6aeb7c60f9f3ee0f1267faeb8b4ac68dd36f0e893a8e767b22ecd8d45b6->enter($__internal_2543d6aeb7c60f9f3ee0f1267faeb8b4ac68dd36f0e893a8e767b22ecd8d45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|tests
";
        
        $__internal_2543d6aeb7c60f9f3ee0f1267faeb8b4ac68dd36f0e893a8e767b22ecd8d45b6->leave($__internal_2543d6aeb7c60f9f3ee0f1267faeb8b4ac68dd36f0e893a8e767b22ecd8d45b6_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_591bca4b6a374724f4dc36d29b81ecd8dc0ae3507d819c688a858be9747801f8 = $this->env->getExtension("native_profiler");
        $__internal_591bca4b6a374724f4dc36d29b81ecd8dc0ae3507d819c688a858be9747801f8->enter($__internal_591bca4b6a374724f4dc36d29b81ecd8dc0ae3507d819c688a858be9747801f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_591bca4b6a374724f4dc36d29b81ecd8dc0ae3507d819c688a858be9747801f8->leave($__internal_591bca4b6a374724f4dc36d29b81ecd8dc0ae3507d819c688a858be9747801f8_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_182a5f7ae7b23301daacb51a1834bd141f62a7e09a0153bb4cc932270459d26a = $this->env->getExtension("native_profiler");
        $__internal_182a5f7ae7b23301daacb51a1834bd141f62a7e09a0153bb4cc932270459d26a->enter($__internal_182a5f7ae7b23301daacb51a1834bd141f62a7e09a0153bb4cc932270459d26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_182a5f7ae7b23301daacb51a1834bd141f62a7e09a0153bb4cc932270459d26a->leave($__internal_182a5f7ae7b23301daacb51a1834bd141f62a7e09a0153bb4cc932270459d26a_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d0fd4ac76d3bc5406ac63d909e69de5cce719de2021f4c0c9eceedef892137e = $this->env->getExtension("native_profiler");
        $__internal_8d0fd4ac76d3bc5406ac63d909e69de5cce719de2021f4c0c9eceedef892137e->enter($__internal_8d0fd4ac76d3bc5406ac63d909e69de5cce719de2021f4c0c9eceedef892137e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery.ba-resize.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/config.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/contents.css"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/styles.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 29
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_8d0fd4ac76d3bc5406ac63d909e69de5cce719de2021f4c0c9eceedef892137e->leave($__internal_8d0fd4ac76d3bc5406ac63d909e69de5cce719de2021f4c0c9eceedef892137e_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_0cac9701b59271149699c2b179ace32f123984f6034917ae4607b4aaa092d431 = $this->env->getExtension("native_profiler");
        $__internal_0cac9701b59271149699c2b179ace32f123984f6034917ae4607b4aaa092d431->enter($__internal_0cac9701b59271149699c2b179ace32f123984f6034917ae4607b4aaa092d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_0cac9701b59271149699c2b179ace32f123984f6034917ae4607b4aaa092d431->leave($__internal_0cac9701b59271149699c2b179ace32f123984f6034917ae4607b4aaa092d431_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_952bab2e7b20c9c109a0223a3524677dd6e3ae0ce4d7ceb3432dff8769e29e00 = $this->env->getExtension("native_profiler");
        $__internal_952bab2e7b20c9c109a0223a3524677dd6e3ae0ce4d7ceb3432dff8769e29e00->enter($__internal_952bab2e7b20c9c109a0223a3524677dd6e3ae0ce4d7ceb3432dff8769e29e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_952bab2e7b20c9c109a0223a3524677dd6e3ae0ce4d7ceb3432dff8769e29e00->leave($__internal_952bab2e7b20c9c109a0223a3524677dd6e3ae0ce4d7ceb3432dff8769e29e00_prof);

    }

    // line 40
    public function block_right($context, array $blocks = array())
    {
        $__internal_073dae1007912318403d6ed48766dc9eaf2d0800de19459a0e8e7a2058d29e2e = $this->env->getExtension("native_profiler");
        $__internal_073dae1007912318403d6ed48766dc9eaf2d0800de19459a0e8e7a2058d29e2e->enter($__internal_073dae1007912318403d6ed48766dc9eaf2d0800de19459a0e8e7a2058d29e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 41
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_073dae1007912318403d6ed48766dc9eaf2d0800de19459a0e8e7a2058d29e2e->leave($__internal_073dae1007912318403d6ed48766dc9eaf2d0800de19459a0e8e7a2058d29e2e_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9a1ad364e8d3d3b7c13f12f65bf63bc725d5948cffddfe380710a276de0db13 = $this->env->getExtension("native_profiler");
        $__internal_a9a1ad364e8d3d3b7c13f12f65bf63bc725d5948cffddfe380710a276de0db13->enter($__internal_a9a1ad364e8d3d3b7c13f12f65bf63bc725d5948cffddfe380710a276de0db13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    <div class=\"row\">
        ";
        // line 47
        $this->loadTemplate("TSAdminBundle:Tests:researchTests.html.twig", "TSAdminBundle:Tests:testsSeconde.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
    ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 50
            echo "        <div class=\"row\">
            ";
            // line 51
            $this->loadTemplate("TSAdminBundle:Tests:addTest.html.twig", "TSAdminBundle:Tests:testsSeconde.html.twig", 51)->display($context);
            // line 52
            echo "        </div>
    ";
        }
        // line 54
        echo "    <div class=\"row\" id=\"container\">
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) ? $context["tests"] : $this->getContext($context, "tests")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 56
            echo "            ";
            $this->loadTemplate("TSAdminBundle:Tests:test.html.twig", "TSAdminBundle:Tests:testsSeconde.html.twig", 56)->display($context);
            // line 57
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 61
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
                no tests
            ";
        } else {
            // line 64
            echo "                <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
                    <i class=\"glyph-icon icon-arrow-left\"></i>
                </a>
                <div class=\"button-group float-left\">
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 69
                echo "                        <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                            class=\"btn disabled large primary-bg\"
                            ";
                }
                // line 71
                echo " 
                                class=\"btn large primary-bg\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_tests", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                                ";
                // line 73
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                            </div>
                            <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                            ";
        }
        // line 81
        echo "                            </div>
                        </div>
                        ";
        // line 83
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                        ";
        
        $__internal_a9a1ad364e8d3d3b7c13f12f65bf63bc725d5948cffddfe380710a276de0db13->leave($__internal_a9a1ad364e8d3d3b7c13f12f65bf63bc725d5948cffddfe380710a276de0db13_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:testsSeconde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 83,  319 => 81,  312 => 76,  303 => 73,  299 => 72,  296 => 71,  289 => 69,  285 => 68,  279 => 64,  273 => 61,  268 => 58,  254 => 57,  251 => 56,  234 => 55,  231 => 54,  227 => 52,  225 => 51,  222 => 50,  220 => 49,  217 => 48,  215 => 47,  211 => 45,  205 => 44,  195 => 41,  189 => 40,  179 => 37,  173 => 36,  163 => 33,  157 => 32,  148 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/Tests.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|admin|tests*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/config.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/contents.css') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/styles.js') }}"></script>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content%}*/
/* */
/*     <div class="row">*/
/*         {% include "TSAdminBundle:Tests:researchTests.html.twig" %}*/
/*     </div>*/
/*     {% if  app.session.get('role') is same as ('RH') %}*/
/*         <div class="row">*/
/*             {% include "TSAdminBundle:Tests:addTest.html.twig"  %}*/
/*         </div>*/
/*     {% endif%}*/
/*     <div class="row" id="container">*/
/*         {% for test in tests %}*/
/*             {% include "TSAdminBundle:Tests:test.html.twig"  %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             {%if nombrePages == 0 %} */
/*                 no tests*/
/*             {%else %}*/
/*                 <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*                     <i class="glyph-icon icon-arrow-left"></i>*/
/*                 </a>*/
/*                 <div class="button-group float-left">*/
/*                     {% for p in range(1, nombrePages) %}*/
/*                         <a {% if p == pages %} */
/*                             class="btn disabled large primary-bg"*/
/*                             {% endif %} */
/*                                 class="btn large primary-bg" href="{{ path('ts_admin_tests', {'pages': p}) }}">*/
/*                                 {{p}}*/
/*                             </a>*/
/*                             {% endfor %}*/
/*                             </div>*/
/*                             <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*                                 <i class="glyph-icon icon-arrow-right"></i>*/
/*                             </a>*/
/*                             {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ parent() }}*/
/*                         {% endblock %}*/
/* */
