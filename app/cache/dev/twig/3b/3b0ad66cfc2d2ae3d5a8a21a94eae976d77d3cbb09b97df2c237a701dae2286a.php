<?php

/* @TSAdmin/Admin/cv.html.twig */
class __TwigTemplate_36cd56df002ef82cb3f58e3748f548ca11d80879fec2bb0c452f3c30aa2e402c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/cv.html.twig", 2);
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
        $__internal_07fc855a6d235211177fdd0c2e0860b0df1350e6663ece310a560c6583e7f49c = $this->env->getExtension("native_profiler");
        $__internal_07fc855a6d235211177fdd0c2e0860b0df1350e6663ece310a560c6583e7f49c->enter($__internal_07fc855a6d235211177fdd0c2e0860b0df1350e6663ece310a560c6583e7f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fc855a6d235211177fdd0c2e0860b0df1350e6663ece310a560c6583e7f49c->leave($__internal_07fc855a6d235211177fdd0c2e0860b0df1350e6663ece310a560c6583e7f49c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c511c320131415e1679590841061eb20bd431b6c4c675bd65c7f9e19150bb9e = $this->env->getExtension("native_profiler");
        $__internal_4c511c320131415e1679590841061eb20bd431b6c4c675bd65c7f9e19150bb9e->enter($__internal_4c511c320131415e1679590841061eb20bd431b6c4c675bd65c7f9e19150bb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|InviteCandidate
";
        
        $__internal_4c511c320131415e1679590841061eb20bd431b6c4c675bd65c7f9e19150bb9e->leave($__internal_4c511c320131415e1679590841061eb20bd431b6c4c675bd65c7f9e19150bb9e_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_4a2c81bb3af85c209fb6594217f236eb43cc0021ca77117d9bd78f7fa447bc46 = $this->env->getExtension("native_profiler");
        $__internal_4a2c81bb3af85c209fb6594217f236eb43cc0021ca77117d9bd78f7fa447bc46->enter($__internal_4a2c81bb3af85c209fb6594217f236eb43cc0021ca77117d9bd78f7fa447bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_4a2c81bb3af85c209fb6594217f236eb43cc0021ca77117d9bd78f7fa447bc46->leave($__internal_4a2c81bb3af85c209fb6594217f236eb43cc0021ca77117d9bd78f7fa447bc46_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c8b59d164a17e318a096880a0f11e032248dfec44f49f3c677e600b1b247105 = $this->env->getExtension("native_profiler");
        $__internal_4c8b59d164a17e318a096880a0f11e032248dfec44f49f3c677e600b1b247105->enter($__internal_4c8b59d164a17e318a096880a0f11e032248dfec44f49f3c677e600b1b247105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_4c8b59d164a17e318a096880a0f11e032248dfec44f49f3c677e600b1b247105->leave($__internal_4c8b59d164a17e318a096880a0f11e032248dfec44f49f3c677e600b1b247105_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6699158c86fcec4d78c64cbf8cbd23dcd58c4847f30737e630d3cc8afd453563 = $this->env->getExtension("native_profiler");
        $__internal_6699158c86fcec4d78c64cbf8cbd23dcd58c4847f30737e630d3cc8afd453563->enter($__internal_6699158c86fcec4d78c64cbf8cbd23dcd58c4847f30737e630d3cc8afd453563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6699158c86fcec4d78c64cbf8cbd23dcd58c4847f30737e630d3cc8afd453563->leave($__internal_6699158c86fcec4d78c64cbf8cbd23dcd58c4847f30737e630d3cc8afd453563_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_86714823964595802d5c9c65a4f5d5d9b19aa59fe19a106b8932ec53774d826e = $this->env->getExtension("native_profiler");
        $__internal_86714823964595802d5c9c65a4f5d5d9b19aa59fe19a106b8932ec53774d826e->enter($__internal_86714823964595802d5c9c65a4f5d5d9b19aa59fe19a106b8932ec53774d826e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_86714823964595802d5c9c65a4f5d5d9b19aa59fe19a106b8932ec53774d826e->leave($__internal_86714823964595802d5c9c65a4f5d5d9b19aa59fe19a106b8932ec53774d826e_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a4cfa6199bc86e95d5ad547a283dcd2498039293e0e4b6628a9e095f7722b48f = $this->env->getExtension("native_profiler");
        $__internal_a4cfa6199bc86e95d5ad547a283dcd2498039293e0e4b6628a9e095f7722b48f->enter($__internal_a4cfa6199bc86e95d5ad547a283dcd2498039293e0e4b6628a9e095f7722b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 25
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_a4cfa6199bc86e95d5ad547a283dcd2498039293e0e4b6628a9e095f7722b48f->leave($__internal_a4cfa6199bc86e95d5ad547a283dcd2498039293e0e4b6628a9e095f7722b48f_prof);

    }

    // line 28
    public function block_right($context, array $blocks = array())
    {
        $__internal_7f170c9b1088ebb65fd33ffa6e50bd7aedebe2b4c8060c2cc46c828534dd2cda = $this->env->getExtension("native_profiler");
        $__internal_7f170c9b1088ebb65fd33ffa6e50bd7aedebe2b4c8060c2cc46c828534dd2cda->enter($__internal_7f170c9b1088ebb65fd33ffa6e50bd7aedebe2b4c8060c2cc46c828534dd2cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 29
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_7f170c9b1088ebb65fd33ffa6e50bd7aedebe2b4c8060c2cc46c828534dd2cda->leave($__internal_7f170c9b1088ebb65fd33ffa6e50bd7aedebe2b4c8060c2cc46c828534dd2cda_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f69d1aaafb0f3eab84ab6ba49788c789da0961535abd16b326d8ec60dc1e18c = $this->env->getExtension("native_profiler");
        $__internal_7f69d1aaafb0f3eab84ab6ba49788c789da0961535abd16b326d8ec60dc1e18c->enter($__internal_7f69d1aaafb0f3eab84ab6ba49788c789da0961535abd16b326d8ec60dc1e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "<div id=\"page-title\"></div>
";
        // line 34
        $this->loadTemplate("TSAdminBundle:Admin:research.html.twig", "@TSAdmin/Admin/cv.html.twig", 34)->display($context);
        // line 35
        echo "<div class=\"row\">
    ";
        // line 36
        if (twig_test_empty((isset($context["listeCandidat"]) ? $context["listeCandidat"] : $this->getContext($context, "listeCandidat")))) {
            // line 37
            echo "        <div class=\"col-md-6\"> No Candidates</div>
     ";
        } else {
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCandidat"]) ? $context["listeCandidat"] : $this->getContext($context, "listeCandidat")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                // line 40
                echo "    ";
                $this->loadTemplate("TSAdminBundle:Admin:candidate.html.twig", "@TSAdmin/Admin/cv.html.twig", 40)->display(array_merge($context, array("accueil" => true)));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        echo "
</div>
  <h5  class=\"text-right\"> <a  style=\"text-decoration: underline\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ts_admin_cvs");
        echo "\">View all Candidates </a></h5> 
<div class=\"row\">
    <div class=\"col-md-4\">
         ";
        // line 48
        if (((isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")) == 0)) {
            echo " 
       
           ";
        } else {
            // line 50
            echo " 
      
        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 57
                echo "            <a ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 59
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_cv", array("page" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 61
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
                ";
        }
        // line 69
        echo "    </div>
</div>
";
        // line 71
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_7f69d1aaafb0f3eab84ab6ba49788c789da0961535abd16b326d8ec60dc1e18c->leave($__internal_7f69d1aaafb0f3eab84ab6ba49788c789da0961535abd16b326d8ec60dc1e18c_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 71,  265 => 69,  258 => 64,  249 => 61,  245 => 60,  242 => 59,  235 => 57,  231 => 56,  223 => 50,  217 => 48,  211 => 45,  207 => 43,  191 => 40,  174 => 39,  170 => 37,  168 => 36,  165 => 35,  163 => 34,  160 => 33,  154 => 32,  145 => 29,  139 => 28,  130 => 25,  124 => 24,  114 => 21,  108 => 20,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\admin\cvs.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*  {{ parent() }}|admin|InviteCandidate*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
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
/* <div id="page-title"></div>*/
/* {% include "TSAdminBundle:Admin:research.html.twig" %}*/
/* <div class="row">*/
/*     {% if listeCandidat is empty%}*/
/*         <div class="col-md-6"> No Candidates</div>*/
/*      {%else%}*/
/* {% for candidat in listeCandidat %}*/
/*     {% include "TSAdminBundle:Admin:candidate.html.twig" with {'accueil': true} %}*/
/* {% endfor %}*/
/* {%endif%}*/
/* */
/* </div>*/
/*   <h5  class="text-right"> <a  style="text-decoration: underline" href="{{ path('ts_admin_cvs') }}">View all Candidates </a></h5> */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*          {% if nombrePage == 0 %} */
/*        */
/*            {% else %} */
/*       */
/*         <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-left"></i>*/
/*         </a>*/
/*         <div class="button-group float-left">*/
/*         {% for p in range(1, nombrePage) %}*/
/*             <a {% if p == page %} */
/*                 class="btn disabled large primary-bg"*/
/*             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_cv', {'page': p}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*                 {% endif %}*/
/*     </div>*/
/* </div>*/
/* {{ parent() }}*/
/* {% endblock %}*/
