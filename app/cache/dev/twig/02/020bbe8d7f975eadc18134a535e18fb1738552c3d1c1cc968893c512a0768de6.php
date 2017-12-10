<?php

/* TSCandidatBundle:Candidat:offers.html.twig */
class __TwigTemplate_3eb30e8b5f54edb4187f33ba3e8afae859dabe0198a6551eef563e4622687bdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:offers.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6b781832218fde8fbc2b82e953c1784a52d3cbcacf75ac8182d76bacb525f31 = $this->env->getExtension("native_profiler");
        $__internal_b6b781832218fde8fbc2b82e953c1784a52d3cbcacf75ac8182d76bacb525f31->enter($__internal_b6b781832218fde8fbc2b82e953c1784a52d3cbcacf75ac8182d76bacb525f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6b781832218fde8fbc2b82e953c1784a52d3cbcacf75ac8182d76bacb525f31->leave($__internal_b6b781832218fde8fbc2b82e953c1784a52d3cbcacf75ac8182d76bacb525f31_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd06a82fd74732a7e3b56211b2acac4b1dfc594c51bc8f06d5fb09be9e43102a = $this->env->getExtension("native_profiler");
        $__internal_dd06a82fd74732a7e3b56211b2acac4b1dfc594c51bc8f06d5fb09be9e43102a->enter($__internal_dd06a82fd74732a7e3b56211b2acac4b1dfc594c51bc8f06d5fb09be9e43102a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|offers
";
        
        $__internal_dd06a82fd74732a7e3b56211b2acac4b1dfc594c51bc8f06d5fb09be9e43102a->leave($__internal_dd06a82fd74732a7e3b56211b2acac4b1dfc594c51bc8f06d5fb09be9e43102a_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_74180cf8a1d971fb5f96fbaa34adab394dfc051075fd0f87e2f33465f6eb2072 = $this->env->getExtension("native_profiler");
        $__internal_74180cf8a1d971fb5f96fbaa34adab394dfc051075fd0f87e2f33465f6eb2072->enter($__internal_74180cf8a1d971fb5f96fbaa34adab394dfc051075fd0f87e2f33465f6eb2072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_74180cf8a1d971fb5f96fbaa34adab394dfc051075fd0f87e2f33465f6eb2072->leave($__internal_74180cf8a1d971fb5f96fbaa34adab394dfc051075fd0f87e2f33465f6eb2072_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_bec9471ceaa1003681c42c9cb13d3ff30d35eb570a5253f69c7cc0ca66e10284 = $this->env->getExtension("native_profiler");
        $__internal_bec9471ceaa1003681c42c9cb13d3ff30d35eb570a5253f69c7cc0ca66e10284->enter($__internal_bec9471ceaa1003681c42c9cb13d3ff30d35eb570a5253f69c7cc0ca66e10284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 12
        echo " <script>
    \$(document).ready(function() {
         var li = document.getElementById('3');
        \$(li).addClass('selected');
    });
</script>
 ";
        // line 18
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_bec9471ceaa1003681c42c9cb13d3ff30d35eb570a5253f69c7cc0ca66e10284->leave($__internal_bec9471ceaa1003681c42c9cb13d3ff30d35eb570a5253f69c7cc0ca66e10284_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_48fa7c9fa32656ca62794c818274356430ff4f031e927aff32a169431fcb3e23 = $this->env->getExtension("native_profiler");
        $__internal_48fa7c9fa32656ca62794c818274356430ff4f031e927aff32a169431fcb3e23->enter($__internal_48fa7c9fa32656ca62794c818274356430ff4f031e927aff32a169431fcb3e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_48fa7c9fa32656ca62794c818274356430ff4f031e927aff32a169431fcb3e23->leave($__internal_48fa7c9fa32656ca62794c818274356430ff4f031e927aff32a169431fcb3e23_prof);

    }

    // line 24
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_9a5d3430f9d073d09d92fc1dfec1801912448bafebbba2c80373b04d5a571a94 = $this->env->getExtension("native_profiler");
        $__internal_9a5d3430f9d073d09d92fc1dfec1801912448bafebbba2c80373b04d5a571a94->enter($__internal_9a5d3430f9d073d09d92fc1dfec1801912448bafebbba2c80373b04d5a571a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offers"]) ? $context["offers"] : $this->getContext($context, "offers")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 26
            echo "    ";
            $this->loadTemplate("TSCandidatBundle:Candidat:offer.html.twig", "TSCandidatBundle:Candidat:offers.html.twig", 26)->display($context);
            // line 27
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
<p class=\"pages\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 31
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_candidat_offers", array("pages" => $context["p"])), "html", null, true);
            echo "\">
        ";
            // line 32
            if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                echo " 
        <span>";
                // line 33
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</span> 
        ";
            } else {
                // line 35
                echo "        ";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
        ";
            }
            // line 36
            echo " 
    </a>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</p>

";
        // line 41
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_9a5d3430f9d073d09d92fc1dfec1801912448bafebbba2c80373b04d5a571a94->leave($__internal_9a5d3430f9d073d09d92fc1dfec1801912448bafebbba2c80373b04d5a571a94_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8287b4513be44ec0805895b7eff50cf93c033656fe7f0bee2dab4fb847fd6a3b = $this->env->getExtension("native_profiler");
        $__internal_8287b4513be44ec0805895b7eff50cf93c033656fe7f0bee2dab4fb847fd6a3b->enter($__internal_8287b4513be44ec0805895b7eff50cf93c033656fe7f0bee2dab4fb847fd6a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_8287b4513be44ec0805895b7eff50cf93c033656fe7f0bee2dab4fb847fd6a3b->leave($__internal_8287b4513be44ec0805895b7eff50cf93c033656fe7f0bee2dab4fb847fd6a3b_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 44,  199 => 43,  190 => 41,  186 => 39,  178 => 36,  172 => 35,  167 => 33,  163 => 32,  158 => 31,  154 => 30,  150 => 28,  136 => 27,  133 => 26,  115 => 25,  109 => 24,  100 => 21,  94 => 20,  85 => 18,  77 => 12,  71 => 11,  61 => 9,  55 => 8,  45 => 6,  39 => 5,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/offers.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*  {{ parent() }}|offers*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/*  <script>*/
/*     $(document).ready(function() {*/
/*          var li = document.getElementById('3');*/
/*         $(li).addClass('selected');*/
/*     });*/
/* </script>*/
/*  {{parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block mainbar%}*/
/*   {% for offer in offers %}*/
/*     {% include "TSCandidatBundle:Candidat:offer.html.twig" %}*/
/*   {% endfor %}*/
/* */
/* <p class="pages">*/
/*     {% for p in range(1, nombrePages) %}*/
/*     <a href="{{ path('ts_candidat_offers', {'pages': p}) }}">*/
/*         {% if p == pages %} */
/*         <span>{{p}}</span> */
/*         {%else%}*/
/*         {{p}}*/
/*         {% endif %} */
/*     </a>*/
/*      {% endfor %}*/
/* </p>*/
/* */
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
