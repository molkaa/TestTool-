<?php

/* @TSAdmin/Tests/testsSeconde.html.twig */
class __TwigTemplate_cb9a21ce8259257ad7591ad6a53e5cf3eb07385ff2a0b62dfc384dbc776e301c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Tests/testsSeconde.html.twig", 2);
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
        $__internal_e34a207320dddc0395a7e9b4f3b7f61f313c884efd8628ff3089c6b52f006611 = $this->env->getExtension("native_profiler");
        $__internal_e34a207320dddc0395a7e9b4f3b7f61f313c884efd8628ff3089c6b52f006611->enter($__internal_e34a207320dddc0395a7e9b4f3b7f61f313c884efd8628ff3089c6b52f006611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/testsSeconde.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34a207320dddc0395a7e9b4f3b7f61f313c884efd8628ff3089c6b52f006611->leave($__internal_e34a207320dddc0395a7e9b4f3b7f61f313c884efd8628ff3089c6b52f006611_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e72c115b31d9cba312d9a647b70aba0021965442b7249e7792cf0a631f9b5714 = $this->env->getExtension("native_profiler");
        $__internal_e72c115b31d9cba312d9a647b70aba0021965442b7249e7792cf0a631f9b5714->enter($__internal_e72c115b31d9cba312d9a647b70aba0021965442b7249e7792cf0a631f9b5714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|tests
";
        
        $__internal_e72c115b31d9cba312d9a647b70aba0021965442b7249e7792cf0a631f9b5714->leave($__internal_e72c115b31d9cba312d9a647b70aba0021965442b7249e7792cf0a631f9b5714_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_90b0b0ca4740dc89bed589a718a36c943c01b4b8a8d608d318777746d2493f01 = $this->env->getExtension("native_profiler");
        $__internal_90b0b0ca4740dc89bed589a718a36c943c01b4b8a8d608d318777746d2493f01->enter($__internal_90b0b0ca4740dc89bed589a718a36c943c01b4b8a8d608d318777746d2493f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_90b0b0ca4740dc89bed589a718a36c943c01b4b8a8d608d318777746d2493f01->leave($__internal_90b0b0ca4740dc89bed589a718a36c943c01b4b8a8d608d318777746d2493f01_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_630e06c1795068598d0a4167682ce8ad18643f1f8912c04edbc040a7fcf3b8db = $this->env->getExtension("native_profiler");
        $__internal_630e06c1795068598d0a4167682ce8ad18643f1f8912c04edbc040a7fcf3b8db->enter($__internal_630e06c1795068598d0a4167682ce8ad18643f1f8912c04edbc040a7fcf3b8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_630e06c1795068598d0a4167682ce8ad18643f1f8912c04edbc040a7fcf3b8db->leave($__internal_630e06c1795068598d0a4167682ce8ad18643f1f8912c04edbc040a7fcf3b8db_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42e74a9bcf2ceebf22577dbb2004703116e6cf04f401905a8f12fe72bcf375d9 = $this->env->getExtension("native_profiler");
        $__internal_42e74a9bcf2ceebf22577dbb2004703116e6cf04f401905a8f12fe72bcf375d9->enter($__internal_42e74a9bcf2ceebf22577dbb2004703116e6cf04f401905a8f12fe72bcf375d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_42e74a9bcf2ceebf22577dbb2004703116e6cf04f401905a8f12fe72bcf375d9->leave($__internal_42e74a9bcf2ceebf22577dbb2004703116e6cf04f401905a8f12fe72bcf375d9_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_8f47cbaa322d9238a582f49465ae2cc1c049837f963fa5edba07f97ddacfcf65 = $this->env->getExtension("native_profiler");
        $__internal_8f47cbaa322d9238a582f49465ae2cc1c049837f963fa5edba07f97ddacfcf65->enter($__internal_8f47cbaa322d9238a582f49465ae2cc1c049837f963fa5edba07f97ddacfcf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_8f47cbaa322d9238a582f49465ae2cc1c049837f963fa5edba07f97ddacfcf65->leave($__internal_8f47cbaa322d9238a582f49465ae2cc1c049837f963fa5edba07f97ddacfcf65_prof);

    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bd9b6dea40f4e0156eebbfd3a899ed9fe090410d5d8c405b28863c2a1e1f6b9d = $this->env->getExtension("native_profiler");
        $__internal_bd9b6dea40f4e0156eebbfd3a899ed9fe090410d5d8c405b28863c2a1e1f6b9d->enter($__internal_bd9b6dea40f4e0156eebbfd3a899ed9fe090410d5d8c405b28863c2a1e1f6b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 37
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_bd9b6dea40f4e0156eebbfd3a899ed9fe090410d5d8c405b28863c2a1e1f6b9d->leave($__internal_bd9b6dea40f4e0156eebbfd3a899ed9fe090410d5d8c405b28863c2a1e1f6b9d_prof);

    }

    // line 40
    public function block_right($context, array $blocks = array())
    {
        $__internal_313e69400bd49a96555abddd1c6aaa9413f3412ab06767d04e7f993ea3751829 = $this->env->getExtension("native_profiler");
        $__internal_313e69400bd49a96555abddd1c6aaa9413f3412ab06767d04e7f993ea3751829->enter($__internal_313e69400bd49a96555abddd1c6aaa9413f3412ab06767d04e7f993ea3751829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 41
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_313e69400bd49a96555abddd1c6aaa9413f3412ab06767d04e7f993ea3751829->leave($__internal_313e69400bd49a96555abddd1c6aaa9413f3412ab06767d04e7f993ea3751829_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_81d1aa02119306a0e87bdd05fe545fd982761546c586935a3ae99160ebee8d67 = $this->env->getExtension("native_profiler");
        $__internal_81d1aa02119306a0e87bdd05fe545fd982761546c586935a3ae99160ebee8d67->enter($__internal_81d1aa02119306a0e87bdd05fe545fd982761546c586935a3ae99160ebee8d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "
    <div class=\"row\">
        ";
        // line 47
        $this->loadTemplate("TSAdminBundle:Tests:researchTests.html.twig", "@TSAdmin/Tests/testsSeconde.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
    ";
        // line 49
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 50
            echo "        <div class=\"row\">
            ";
            // line 51
            $this->loadTemplate("TSAdminBundle:Tests:addTest.html.twig", "@TSAdmin/Tests/testsSeconde.html.twig", 51)->display($context);
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
            $this->loadTemplate("TSAdminBundle:Tests:test.html.twig", "@TSAdmin/Tests/testsSeconde.html.twig", 56)->display($context);
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
        
        $__internal_81d1aa02119306a0e87bdd05fe545fd982761546c586935a3ae99160ebee8d67->leave($__internal_81d1aa02119306a0e87bdd05fe545fd982761546c586935a3ae99160ebee8d67_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/testsSeconde.html.twig";
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
