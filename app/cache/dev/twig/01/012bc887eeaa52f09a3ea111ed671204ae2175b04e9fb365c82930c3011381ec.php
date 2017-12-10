<?php

/* TSAdminBundle:Tests:specificTests.html.twig */
class __TwigTemplate_b0ae8097d6ccd255364ba483cd8b657c9a3f65efe799c8a63730effb864af80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:specificTests.html.twig", 2);
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
        $__internal_193ae7995c6503a9d57dfbad3742378946a69f94053588fa686c94bfcb712064 = $this->env->getExtension("native_profiler");
        $__internal_193ae7995c6503a9d57dfbad3742378946a69f94053588fa686c94bfcb712064->enter($__internal_193ae7995c6503a9d57dfbad3742378946a69f94053588fa686c94bfcb712064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:specificTests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193ae7995c6503a9d57dfbad3742378946a69f94053588fa686c94bfcb712064->leave($__internal_193ae7995c6503a9d57dfbad3742378946a69f94053588fa686c94bfcb712064_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5def9f5b051ad142b1ecd234159046d7da1ff3553af1a65c9dc6d537ab57f4c6 = $this->env->getExtension("native_profiler");
        $__internal_5def9f5b051ad142b1ecd234159046d7da1ff3553af1a65c9dc6d537ab57f4c6->enter($__internal_5def9f5b051ad142b1ecd234159046d7da1ff3553af1a65c9dc6d537ab57f4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|tests
";
        
        $__internal_5def9f5b051ad142b1ecd234159046d7da1ff3553af1a65c9dc6d537ab57f4c6->leave($__internal_5def9f5b051ad142b1ecd234159046d7da1ff3553af1a65c9dc6d537ab57f4c6_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_df871158705ed368f2819bb29a29b6f9361b583732666d2757bb288cbf5a0e3c = $this->env->getExtension("native_profiler");
        $__internal_df871158705ed368f2819bb29a29b6f9361b583732666d2757bb288cbf5a0e3c->enter($__internal_df871158705ed368f2819bb29a29b6f9361b583732666d2757bb288cbf5a0e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_df871158705ed368f2819bb29a29b6f9361b583732666d2757bb288cbf5a0e3c->leave($__internal_df871158705ed368f2819bb29a29b6f9361b583732666d2757bb288cbf5a0e3c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97d51a793431759b068a623873f6ee5e6c218caa4a1291c74972c9b6a6f68b2c = $this->env->getExtension("native_profiler");
        $__internal_97d51a793431759b068a623873f6ee5e6c218caa4a1291c74972c9b6a6f68b2c->enter($__internal_97d51a793431759b068a623873f6ee5e6c218caa4a1291c74972c9b6a6f68b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_97d51a793431759b068a623873f6ee5e6c218caa4a1291c74972c9b6a6f68b2c->leave($__internal_97d51a793431759b068a623873f6ee5e6c218caa4a1291c74972c9b6a6f68b2c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1be572072e3325ecfaa1237efc4714a69b13c0115740b873ba80b453816b9db6 = $this->env->getExtension("native_profiler");
        $__internal_1be572072e3325ecfaa1237efc4714a69b13c0115740b873ba80b453816b9db6->enter($__internal_1be572072e3325ecfaa1237efc4714a69b13c0115740b873ba80b453816b9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1be572072e3325ecfaa1237efc4714a69b13c0115740b873ba80b453816b9db6->leave($__internal_1be572072e3325ecfaa1237efc4714a69b13c0115740b873ba80b453816b9db6_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_e14c4be690bdb64254c5ac0eceaecaf7a486ef47c426d564a2072d10c893cda2 = $this->env->getExtension("native_profiler");
        $__internal_e14c4be690bdb64254c5ac0eceaecaf7a486ef47c426d564a2072d10c893cda2->enter($__internal_e14c4be690bdb64254c5ac0eceaecaf7a486ef47c426d564a2072d10c893cda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e14c4be690bdb64254c5ac0eceaecaf7a486ef47c426d564a2072d10c893cda2->leave($__internal_e14c4be690bdb64254c5ac0eceaecaf7a486ef47c426d564a2072d10c893cda2_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a2298a61913acf64524848604f0265f41a3be42899cb4a9b473cab669b436537 = $this->env->getExtension("native_profiler");
        $__internal_a2298a61913acf64524848604f0265f41a3be42899cb4a9b473cab669b436537->enter($__internal_a2298a61913acf64524848604f0265f41a3be42899cb4a9b473cab669b436537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_a2298a61913acf64524848604f0265f41a3be42899cb4a9b473cab669b436537->leave($__internal_a2298a61913acf64524848604f0265f41a3be42899cb4a9b473cab669b436537_prof);

    }

    // line 40
    public function block_right($context, array $blocks = array())
    {
        $__internal_308ab9d5640ce13063720a18a58673a7f2d3e26c0175227db8224ad7c8d0fb30 = $this->env->getExtension("native_profiler");
        $__internal_308ab9d5640ce13063720a18a58673a7f2d3e26c0175227db8224ad7c8d0fb30->enter($__internal_308ab9d5640ce13063720a18a58673a7f2d3e26c0175227db8224ad7c8d0fb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 41
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_308ab9d5640ce13063720a18a58673a7f2d3e26c0175227db8224ad7c8d0fb30->leave($__internal_308ab9d5640ce13063720a18a58673a7f2d3e26c0175227db8224ad7c8d0fb30_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_015e81706543f82fc98db844cfbbe82fa550cdd702e842747b5b26cadc478075 = $this->env->getExtension("native_profiler");
        $__internal_015e81706543f82fc98db844cfbbe82fa550cdd702e842747b5b26cadc478075->enter($__internal_015e81706543f82fc98db844cfbbe82fa550cdd702e842747b5b26cadc478075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    <div class=\"row\">
        ";
        // line 47
        $this->loadTemplate("TSAdminBundle:Tests:researchTests.html.twig", "TSAdminBundle:Tests:specificTests.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
    <div class=\"row\">
        ";
        // line 50
        $this->loadTemplate("TSAdminBundle:Tests:addTest.html.twig", "TSAdminBundle:Tests:specificTests.html.twig", 50)->display($context);
        // line 51
        echo "    </div>
    <div class=\"row\" id=\"container\">
        ";
        // line 53
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
            // line 54
            echo "            ";
            $this->loadTemplate("TSAdminBundle:Tests:test.html.twig", "TSAdminBundle:Tests:specificTests.html.twig", 54)->display($context);
            // line 55
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
        // line 56
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-4\">

            <div class=\"button-group float-left\">
                ";
        // line 61
        if (((isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")) == 0)) {
            echo " 
                    No tests
                ";
        } else {
            // line 63
            echo " 
                    <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
                        <i class=\"glyph-icon icon-arrow-left\"></i>
                    </a>
                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 68
                echo "                        <a ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " 
                            class=\"btn disabled large primary-bg\"
                            ";
                }
                // line 70
                echo " 
                                class=\"btn large primary-bg\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_test", array("page" => $context["p"])), "html", null, true);
                echo "\">
                                ";
                // line 72
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
                                    <i class=\"glyph-icon icon-arrow-right\"></i>
                                </a>
                                ";
        }
        // line 79
        echo "                                </div>
                            </div>
                        </div>
                        ";
        // line 82
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                        ";
        
        $__internal_015e81706543f82fc98db844cfbbe82fa550cdd702e842747b5b26cadc478075->leave($__internal_015e81706543f82fc98db844cfbbe82fa550cdd702e842747b5b26cadc478075_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:specificTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 82,  313 => 79,  307 => 75,  298 => 72,  294 => 71,  291 => 70,  284 => 68,  280 => 67,  274 => 63,  268 => 61,  261 => 56,  247 => 55,  244 => 54,  227 => 53,  223 => 51,  221 => 50,  217 => 48,  215 => 47,  211 => 45,  205 => 44,  195 => 41,  189 => 40,  179 => 37,  173 => 36,  163 => 33,  157 => 32,  148 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/specificTests.html.twig #}*/
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
/*     <div class="row">*/
/*         {% include "TSAdminBundle:Tests:addTest.html.twig"  %}*/
/*     </div>*/
/*     <div class="row" id="container">*/
/*         {% for test in tests %}*/
/*             {% include "TSAdminBundle:Tests:test.html.twig"  %}*/
/*         {% endfor %}*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/* */
/*             <div class="button-group float-left">*/
/*                 {% if nombrePage == 0 %} */
/*                     No tests*/
/*                 {% else %} */
/*                     <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*                         <i class="glyph-icon icon-arrow-left"></i>*/
/*                     </a>*/
/*                     {% for p in range(1, nombrePage) %}*/
/*                         <a {% if p == page %} */
/*                             class="btn disabled large primary-bg"*/
/*                             {% endif %} */
/*                                 class="btn large primary-bg" href="{{ path('ts_admin_test', {'page': p}) }}">*/
/*                                 {{p}}*/
/*                             </a>*/
/*                             {% endfor %}*/
/*                                 <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*                                     <i class="glyph-icon icon-arrow-right"></i>*/
/*                                 </a>*/
/*                                 {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ parent() }}*/
/*                         {% endblock %}*/
/* */
