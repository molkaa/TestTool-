<?php

/* TSAdminBundle:Admin:tests.html.twig */
class __TwigTemplate_69d47da16e7acfe0480d5c693184063f9aaae7daf4909ec6ea4818c8fd8d2ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:tests.html.twig", 3);
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
        $__internal_03a041db0e8d9d807286b9533293039184aa9ff6cd98432b67b79f151f324957 = $this->env->getExtension("native_profiler");
        $__internal_03a041db0e8d9d807286b9533293039184aa9ff6cd98432b67b79f151f324957->enter($__internal_03a041db0e8d9d807286b9533293039184aa9ff6cd98432b67b79f151f324957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a041db0e8d9d807286b9533293039184aa9ff6cd98432b67b79f151f324957->leave($__internal_03a041db0e8d9d807286b9533293039184aa9ff6cd98432b67b79f151f324957_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8e27190672b6c12b3c46f52f63c85a84f9d756c1fece03569685fd494b5c406 = $this->env->getExtension("native_profiler");
        $__internal_d8e27190672b6c12b3c46f52f63c85a84f9d756c1fece03569685fd494b5c406->enter($__internal_d8e27190672b6c12b3c46f52f63c85a84f9d756c1fece03569685fd494b5c406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "        ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|TestsResults
    ";
        
        $__internal_d8e27190672b6c12b3c46f52f63c85a84f9d756c1fece03569685fd494b5c406->leave($__internal_d8e27190672b6c12b3c46f52f63c85a84f9d756c1fece03569685fd494b5c406_prof);

    }

    // line 8
    public function block_icons($context, array $blocks = array())
    {
        $__internal_dcf37404713c05364dd9b6a0f293ada5ac139f074d140acf4f27a74da4b4e825 = $this->env->getExtension("native_profiler");
        $__internal_dcf37404713c05364dd9b6a0f293ada5ac139f074d140acf4f27a74da4b4e825->enter($__internal_dcf37404713c05364dd9b6a0f293ada5ac139f074d140acf4f27a74da4b4e825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 9
        echo "        ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
    ";
        
        $__internal_dcf37404713c05364dd9b6a0f293ada5ac139f074d140acf4f27a74da4b4e825->leave($__internal_dcf37404713c05364dd9b6a0f293ada5ac139f074d140acf4f27a74da4b4e825_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_521345df9bf0610e620a9eb81d803ae251f547617d30b497f26aba3561255bc5 = $this->env->getExtension("native_profiler");
        $__internal_521345df9bf0610e620a9eb81d803ae251f547617d30b497f26aba3561255bc5->enter($__internal_521345df9bf0610e620a9eb81d803ae251f547617d30b497f26aba3561255bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        
        $__internal_521345df9bf0610e620a9eb81d803ae251f547617d30b497f26aba3561255bc5->leave($__internal_521345df9bf0610e620a9eb81d803ae251f547617d30b497f26aba3561255bc5_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19e68f792b0a79d63ba1bbf4f71e40d810726df4b1ad2e3d1219c713cddf69b2 = $this->env->getExtension("native_profiler");
        $__internal_19e68f792b0a79d63ba1bbf4f71e40d810726df4b1ad2e3d1219c713cddf69b2->enter($__internal_19e68f792b0a79d63ba1bbf4f71e40d810726df4b1ad2e3d1219c713cddf69b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "       
        ";
        // line 27
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_19e68f792b0a79d63ba1bbf4f71e40d810726df4b1ad2e3d1219c713cddf69b2->leave($__internal_19e68f792b0a79d63ba1bbf4f71e40d810726df4b1ad2e3d1219c713cddf69b2_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_fe9b3dc5acaa04dde58b41e5496df251ef2296653cd8843fe16ce2c7bbfcf479 = $this->env->getExtension("native_profiler");
        $__internal_fe9b3dc5acaa04dde58b41e5496df251ef2296653cd8843fe16ce2c7bbfcf479->enter($__internal_fe9b3dc5acaa04dde58b41e5496df251ef2296653cd8843fe16ce2c7bbfcf479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "        ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
    ";
        
        $__internal_fe9b3dc5acaa04dde58b41e5496df251ef2296653cd8843fe16ce2c7bbfcf479->leave($__internal_fe9b3dc5acaa04dde58b41e5496df251ef2296653cd8843fe16ce2c7bbfcf479_prof);

    }

    // line 34
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_acc3b48edbb3974e9281b76f7df3a4469ea3055bf52b3f0c9253fa3b459e164c = $this->env->getExtension("native_profiler");
        $__internal_acc3b48edbb3974e9281b76f7df3a4469ea3055bf52b3f0c9253fa3b459e164c->enter($__internal_acc3b48edbb3974e9281b76f7df3a4469ea3055bf52b3f0c9253fa3b459e164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 35
        echo "        ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
    ";
        
        $__internal_acc3b48edbb3974e9281b76f7df3a4469ea3055bf52b3f0c9253fa3b459e164c->leave($__internal_acc3b48edbb3974e9281b76f7df3a4469ea3055bf52b3f0c9253fa3b459e164c_prof);

    }

    // line 38
    public function block_right($context, array $blocks = array())
    {
        $__internal_4132c21979819bb916ee3b77b503aaf2613737f9d34570937c0985bd2967d3fe = $this->env->getExtension("native_profiler");
        $__internal_4132c21979819bb916ee3b77b503aaf2613737f9d34570937c0985bd2967d3fe->enter($__internal_4132c21979819bb916ee3b77b503aaf2613737f9d34570937c0985bd2967d3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 39
        echo "        ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
    ";
        
        $__internal_4132c21979819bb916ee3b77b503aaf2613737f9d34570937c0985bd2967d3fe->leave($__internal_4132c21979819bb916ee3b77b503aaf2613737f9d34570937c0985bd2967d3fe_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_32bca76e490ff37c31e387b7e8739d0d88083ab6d27d567c35099dd3e4db1226 = $this->env->getExtension("native_profiler");
        $__internal_32bca76e490ff37c31e387b7e8739d0d88083ab6d27d567c35099dd3e4db1226->enter($__internal_32bca76e490ff37c31e387b7e8739d0d88083ab6d27d567c35099dd3e4db1226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 43
        echo "        <div id=\"page-title\"></div>
        ";
        // line 44
        $this->loadTemplate("TSAdminBundle:Candidate:researchTest.html.twig", "TSAdminBundle:Admin:tests.html.twig", 44)->display($context);
        // line 45
        echo "        <div class=\"row\">

           
            
      ";
        // line 49
        $this->loadTemplate("TSAdminBundle:Admin:testsDetails.html.twig", "TSAdminBundle:Admin:tests.html.twig", 49)->display($context);
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
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "TSAdminBundle:Admin:tests.html.twig", 76)->display($context);
        echo "      
        ";
        // line 77
        $this->displayParentBlock("content", $context, $blocks);
        echo "
        ";
        // line 79
        echo "    ";
        
        $__internal_32bca76e490ff37c31e387b7e8739d0d88083ab6d27d567c35099dd3e4db1226->leave($__internal_32bca76e490ff37c31e387b7e8739d0d88083ab6d27d567c35099dd3e4db1226_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:tests.html.twig";
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
