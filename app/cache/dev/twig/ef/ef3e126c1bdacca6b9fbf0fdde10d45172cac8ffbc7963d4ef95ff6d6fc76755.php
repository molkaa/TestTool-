<?php

/* @TSAdmin/Tests/specificQuestions.html.twig */
class __TwigTemplate_9cb98e6caab7746c0cb4e5c7609714065bce3df7ae620eba8dd7111ef148f477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Tests/specificQuestions.html.twig", 2);
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
        $__internal_89d89332536e01e42aeea9bc1b869f68d41fa9b6bd3dc617c1ddd30a82a3226a = $this->env->getExtension("native_profiler");
        $__internal_89d89332536e01e42aeea9bc1b869f68d41fa9b6bd3dc617c1ddd30a82a3226a->enter($__internal_89d89332536e01e42aeea9bc1b869f68d41fa9b6bd3dc617c1ddd30a82a3226a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/specificQuestions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d89332536e01e42aeea9bc1b869f68d41fa9b6bd3dc617c1ddd30a82a3226a->leave($__internal_89d89332536e01e42aeea9bc1b869f68d41fa9b6bd3dc617c1ddd30a82a3226a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e0e06329490935643d2223981b77e2114775c85b804375e6e3153c833c00094 = $this->env->getExtension("native_profiler");
        $__internal_9e0e06329490935643d2223981b77e2114775c85b804375e6e3153c833c00094->enter($__internal_9e0e06329490935643d2223981b77e2114775c85b804375e6e3153c833c00094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|questions
";
        
        $__internal_9e0e06329490935643d2223981b77e2114775c85b804375e6e3153c833c00094->leave($__internal_9e0e06329490935643d2223981b77e2114775c85b804375e6e3153c833c00094_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_60f9736b6b7a8eb48202e3a737a23eed7c7f657ffe01286f41f8052e4c89f099 = $this->env->getExtension("native_profiler");
        $__internal_60f9736b6b7a8eb48202e3a737a23eed7c7f657ffe01286f41f8052e4c89f099->enter($__internal_60f9736b6b7a8eb48202e3a737a23eed7c7f657ffe01286f41f8052e4c89f099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_60f9736b6b7a8eb48202e3a737a23eed7c7f657ffe01286f41f8052e4c89f099->leave($__internal_60f9736b6b7a8eb48202e3a737a23eed7c7f657ffe01286f41f8052e4c89f099_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_67dd91b28f2ff9416b16ee46e4ea45276f9bafca93691b4f3c41aea4b32d76bc = $this->env->getExtension("native_profiler");
        $__internal_67dd91b28f2ff9416b16ee46e4ea45276f9bafca93691b4f3c41aea4b32d76bc->enter($__internal_67dd91b28f2ff9416b16ee46e4ea45276f9bafca93691b4f3c41aea4b32d76bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_67dd91b28f2ff9416b16ee46e4ea45276f9bafca93691b4f3c41aea4b32d76bc->leave($__internal_67dd91b28f2ff9416b16ee46e4ea45276f9bafca93691b4f3c41aea4b32d76bc_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53bd58d1851aa83b5a10d26d9ab30ebac89ae47804db08879fa26a2aee7d823a = $this->env->getExtension("native_profiler");
        $__internal_53bd58d1851aa83b5a10d26d9ab30ebac89ae47804db08879fa26a2aee7d823a->enter($__internal_53bd58d1851aa83b5a10d26d9ab30ebac89ae47804db08879fa26a2aee7d823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_53bd58d1851aa83b5a10d26d9ab30ebac89ae47804db08879fa26a2aee7d823a->leave($__internal_53bd58d1851aa83b5a10d26d9ab30ebac89ae47804db08879fa26a2aee7d823a_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_216ac8ce9129602d12a05ab4952f81e73079d029f51f88e9dd55d8f1340b7ef2 = $this->env->getExtension("native_profiler");
        $__internal_216ac8ce9129602d12a05ab4952f81e73079d029f51f88e9dd55d8f1340b7ef2->enter($__internal_216ac8ce9129602d12a05ab4952f81e73079d029f51f88e9dd55d8f1340b7ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_216ac8ce9129602d12a05ab4952f81e73079d029f51f88e9dd55d8f1340b7ef2->leave($__internal_216ac8ce9129602d12a05ab4952f81e73079d029f51f88e9dd55d8f1340b7ef2_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6f7608ce494b38ecc6c996d12d5334a8b5782cec2e9b887f38908aa60195ce2b = $this->env->getExtension("native_profiler");
        $__internal_6f7608ce494b38ecc6c996d12d5334a8b5782cec2e9b887f38908aa60195ce2b->enter($__internal_6f7608ce494b38ecc6c996d12d5334a8b5782cec2e9b887f38908aa60195ce2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_6f7608ce494b38ecc6c996d12d5334a8b5782cec2e9b887f38908aa60195ce2b->leave($__internal_6f7608ce494b38ecc6c996d12d5334a8b5782cec2e9b887f38908aa60195ce2b_prof);

    }

    // line 40
    public function block_right($context, array $blocks = array())
    {
        $__internal_7990fe5bf176ed7763b9351e21b94f895287ac248e2a45f225c5474842628621 = $this->env->getExtension("native_profiler");
        $__internal_7990fe5bf176ed7763b9351e21b94f895287ac248e2a45f225c5474842628621->enter($__internal_7990fe5bf176ed7763b9351e21b94f895287ac248e2a45f225c5474842628621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 41
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_7990fe5bf176ed7763b9351e21b94f895287ac248e2a45f225c5474842628621->leave($__internal_7990fe5bf176ed7763b9351e21b94f895287ac248e2a45f225c5474842628621_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_32c938a30f45c2589d2c227c66bb955276c5075eab6e5f2db85c5e364e981eda = $this->env->getExtension("native_profiler");
        $__internal_32c938a30f45c2589d2c227c66bb955276c5075eab6e5f2db85c5e364e981eda->enter($__internal_32c938a30f45c2589d2c227c66bb955276c5075eab6e5f2db85c5e364e981eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
<div class=\"row\">
        ";
        // line 47
        $this->loadTemplate("TSAdminBundle:Tests:researchQuestions.html.twig", "@TSAdmin/Tests/specificQuestions.html.twig", 47)->display($context);
        // line 48
        echo "</div>
<div class=\"row\">
        ";
        // line 50
        $this->loadTemplate("TSAdminBundle:Tests:addQuestion.html.twig", "@TSAdmin/Tests/specificQuestions.html.twig", 50)->display($context);
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
            $this->loadTemplate("TSAdminBundle:Tests:question.html.twig", "@TSAdmin/Tests/specificQuestions.html.twig", 54)->display($context);
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
        
        $__internal_32c938a30f45c2589d2c227c66bb955276c5075eab6e5f2db85c5e364e981eda->leave($__internal_32c938a30f45c2589d2c227c66bb955276c5075eab6e5f2db85c5e364e981eda_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/specificQuestions.html.twig";
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
