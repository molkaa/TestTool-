<?php

/* TSAdminBundle:Tests:specificQuestions.html.twig */
class __TwigTemplate_6b157ef0a428f2b75dafb0cba5be162059be3c24981d8c12f7e35b7db086ea2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:specificQuestions.html.twig", 2);
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
        $__internal_f8a69bc575f7379c37e27a8fb4351b4c29705114feed51cc3b3047a01d3fb1b8 = $this->env->getExtension("native_profiler");
        $__internal_f8a69bc575f7379c37e27a8fb4351b4c29705114feed51cc3b3047a01d3fb1b8->enter($__internal_f8a69bc575f7379c37e27a8fb4351b4c29705114feed51cc3b3047a01d3fb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:specificQuestions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a69bc575f7379c37e27a8fb4351b4c29705114feed51cc3b3047a01d3fb1b8->leave($__internal_f8a69bc575f7379c37e27a8fb4351b4c29705114feed51cc3b3047a01d3fb1b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9175039869a4285f13b24ee9186bb4ab9c36293a5d4d7709d6aa9b13b0734c37 = $this->env->getExtension("native_profiler");
        $__internal_9175039869a4285f13b24ee9186bb4ab9c36293a5d4d7709d6aa9b13b0734c37->enter($__internal_9175039869a4285f13b24ee9186bb4ab9c36293a5d4d7709d6aa9b13b0734c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|questions
";
        
        $__internal_9175039869a4285f13b24ee9186bb4ab9c36293a5d4d7709d6aa9b13b0734c37->leave($__internal_9175039869a4285f13b24ee9186bb4ab9c36293a5d4d7709d6aa9b13b0734c37_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_9c1c9573e7ee57705029c51a80e2b58dd4ad397d09af5cb62be10cc7d3cb254e = $this->env->getExtension("native_profiler");
        $__internal_9c1c9573e7ee57705029c51a80e2b58dd4ad397d09af5cb62be10cc7d3cb254e->enter($__internal_9c1c9573e7ee57705029c51a80e2b58dd4ad397d09af5cb62be10cc7d3cb254e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_9c1c9573e7ee57705029c51a80e2b58dd4ad397d09af5cb62be10cc7d3cb254e->leave($__internal_9c1c9573e7ee57705029c51a80e2b58dd4ad397d09af5cb62be10cc7d3cb254e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9afeec5a32dd53d172d892d7cdaeefefb036e41e90b3a42972705aa80d372d0 = $this->env->getExtension("native_profiler");
        $__internal_b9afeec5a32dd53d172d892d7cdaeefefb036e41e90b3a42972705aa80d372d0->enter($__internal_b9afeec5a32dd53d172d892d7cdaeefefb036e41e90b3a42972705aa80d372d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_b9afeec5a32dd53d172d892d7cdaeefefb036e41e90b3a42972705aa80d372d0->leave($__internal_b9afeec5a32dd53d172d892d7cdaeefefb036e41e90b3a42972705aa80d372d0_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fefdb17b6cadfb71b7de3089837c506c4dba7723c173fea2e1cae9ddf6d49cf7 = $this->env->getExtension("native_profiler");
        $__internal_fefdb17b6cadfb71b7de3089837c506c4dba7723c173fea2e1cae9ddf6d49cf7->enter($__internal_fefdb17b6cadfb71b7de3089837c506c4dba7723c173fea2e1cae9ddf6d49cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "<script type=\"text/javascript\" src=\"";
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
        
        $__internal_fefdb17b6cadfb71b7de3089837c506c4dba7723c173fea2e1cae9ddf6d49cf7->leave($__internal_fefdb17b6cadfb71b7de3089837c506c4dba7723c173fea2e1cae9ddf6d49cf7_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_6273954d63e5cf30cec70d7516b33da9265cc129ff197b301bea423c6b0eb7d4 = $this->env->getExtension("native_profiler");
        $__internal_6273954d63e5cf30cec70d7516b33da9265cc129ff197b301bea423c6b0eb7d4->enter($__internal_6273954d63e5cf30cec70d7516b33da9265cc129ff197b301bea423c6b0eb7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6273954d63e5cf30cec70d7516b33da9265cc129ff197b301bea423c6b0eb7d4->leave($__internal_6273954d63e5cf30cec70d7516b33da9265cc129ff197b301bea423c6b0eb7d4_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_22dc4de9938f191deb7d0650be212e3e232ca42d472a011a50acc70b00cc106b = $this->env->getExtension("native_profiler");
        $__internal_22dc4de9938f191deb7d0650be212e3e232ca42d472a011a50acc70b00cc106b->enter($__internal_22dc4de9938f191deb7d0650be212e3e232ca42d472a011a50acc70b00cc106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_22dc4de9938f191deb7d0650be212e3e232ca42d472a011a50acc70b00cc106b->leave($__internal_22dc4de9938f191deb7d0650be212e3e232ca42d472a011a50acc70b00cc106b_prof);

    }

    // line 40
    public function block_right($context, array $blocks = array())
    {
        $__internal_09c2fc6d1c68082d1fef7cd7bee5080d8787f0f35c631466edd3b8fcd6c9dad6 = $this->env->getExtension("native_profiler");
        $__internal_09c2fc6d1c68082d1fef7cd7bee5080d8787f0f35c631466edd3b8fcd6c9dad6->enter($__internal_09c2fc6d1c68082d1fef7cd7bee5080d8787f0f35c631466edd3b8fcd6c9dad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 41
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_09c2fc6d1c68082d1fef7cd7bee5080d8787f0f35c631466edd3b8fcd6c9dad6->leave($__internal_09c2fc6d1c68082d1fef7cd7bee5080d8787f0f35c631466edd3b8fcd6c9dad6_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_f899b6efcbdb6eb1221315b9680bd68b33cf10b4f6300387faf7b6c8e2ab2c11 = $this->env->getExtension("native_profiler");
        $__internal_f899b6efcbdb6eb1221315b9680bd68b33cf10b4f6300387faf7b6c8e2ab2c11->enter($__internal_f899b6efcbdb6eb1221315b9680bd68b33cf10b4f6300387faf7b6c8e2ab2c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
<div class=\"row\">
        ";
        // line 47
        $this->loadTemplate("TSAdminBundle:Tests:researchQuestions.html.twig", "TSAdminBundle:Tests:specificQuestions.html.twig", 47)->display($context);
        // line 48
        echo "</div>
<div class=\"row\">
        ";
        // line 50
        $this->loadTemplate("TSAdminBundle:Tests:addQuestion.html.twig", "TSAdminBundle:Tests:specificQuestions.html.twig", 50)->display($context);
        // line 51
        echo "</div>
<div class=\"row\" id=\"container\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 54
            echo "            ";
            $this->loadTemplate("TSAdminBundle:Tests:question.html.twig", "TSAdminBundle:Tests:specificQuestions.html.twig", 54)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
<div class=\"row\">
    <div class=\"col-md-4\">

        <div class=\"button-group float-left\">
                ";
        // line 61
        if (((isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")) == 0)) {
            echo " 
            No questions
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
                echo "            <a ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
                            ";
                }
                // line 70
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_question", array("page" => $context["p"])), "html", null, true);
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
            echo "            <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
                <i class=\"glyph-icon icon-arrow-right\"></i>
            </a>
                                ";
        }
        // line 79
        echo "        </div>

    </div>
</div>
";
        // line 83
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_f899b6efcbdb6eb1221315b9680bd68b33cf10b4f6300387faf7b6c8e2ab2c11->leave($__internal_f899b6efcbdb6eb1221315b9680bd68b33cf10b4f6300387faf7b6c8e2ab2c11_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:specificQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 83,  313 => 79,  307 => 75,  298 => 72,  294 => 71,  291 => 70,  284 => 68,  280 => 67,  274 => 63,  268 => 61,  261 => 56,  247 => 55,  244 => 54,  227 => 53,  223 => 51,  221 => 50,  217 => 48,  215 => 47,  211 => 45,  205 => 44,  195 => 41,  189 => 40,  179 => 37,  173 => 36,  163 => 33,  157 => 32,  148 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/specificQuestions.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|admin|questions*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('assets/ckeditor/config.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('assets/ckeditor/contents.css') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('assets/ckeditor/styles.js') }}"></script>*/
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
/* <div class="row">*/
/*         {% include "TSAdminBundle:Tests:researchQuestions.html.twig" %}*/
/* </div>*/
/* <div class="row">*/
/*         {% include "TSAdminBundle:Tests:addQuestion.html.twig"  %}*/
/* </div>*/
/* <div class="row" id="container">*/
/*         {% for question in questions %}*/
/*             {% include "TSAdminBundle:Tests:question.html.twig"  %}*/
/*         {% endfor %}*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/* */
/*         <div class="button-group float-left">*/
/*                 {% if nombrePage == 0 %} */
/*             No questions*/
/*                 {% else %} */
/*             <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*                 <i class="glyph-icon icon-arrow-left"></i>*/
/*             </a>*/
/*                     {% for p in range(1, nombrePage) %}*/
/*             <a {% if p == page %} */
/*                 class="btn disabled large primary-bg"*/
/*                             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_question', {'page': p}) }}">*/
/*                                 {{p}}*/
/*             </a>*/
/*                             {% endfor %}*/
/*             <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*                 <i class="glyph-icon icon-arrow-right"></i>*/
/*             </a>*/
/*                                 {% endif %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {{ parent() }}*/
/* {% endblock %}                       */
/* */
