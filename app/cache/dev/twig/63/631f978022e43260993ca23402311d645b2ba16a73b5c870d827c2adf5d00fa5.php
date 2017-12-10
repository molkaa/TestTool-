<?php

/* @TSCandidat/Candidat/offers.html.twig */
class __TwigTemplate_f369966f0bfd8ecfea1538ef43b44c4ae0385f18703659e87432c335ed86811c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/offers.html.twig", 3);
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
        $__internal_8d4232eb6a1b9f401d6358ffe0db21274c2a2f234a24f7f365d24601515f63c3 = $this->env->getExtension("native_profiler");
        $__internal_8d4232eb6a1b9f401d6358ffe0db21274c2a2f234a24f7f365d24601515f63c3->enter($__internal_8d4232eb6a1b9f401d6358ffe0db21274c2a2f234a24f7f365d24601515f63c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d4232eb6a1b9f401d6358ffe0db21274c2a2f234a24f7f365d24601515f63c3->leave($__internal_8d4232eb6a1b9f401d6358ffe0db21274c2a2f234a24f7f365d24601515f63c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf66ebfe934686899978907575a8e6c1f9c4336a427c0b0303e6498719cb57a6 = $this->env->getExtension("native_profiler");
        $__internal_cf66ebfe934686899978907575a8e6c1f9c4336a427c0b0303e6498719cb57a6->enter($__internal_cf66ebfe934686899978907575a8e6c1f9c4336a427c0b0303e6498719cb57a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|offers
";
        
        $__internal_cf66ebfe934686899978907575a8e6c1f9c4336a427c0b0303e6498719cb57a6->leave($__internal_cf66ebfe934686899978907575a8e6c1f9c4336a427c0b0303e6498719cb57a6_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_51e9c7ef7e14fb04e1616bc6c31d5b50caf8f7e9a1ec435d1f14bc31d4bdb918 = $this->env->getExtension("native_profiler");
        $__internal_51e9c7ef7e14fb04e1616bc6c31d5b50caf8f7e9a1ec435d1f14bc31d4bdb918->enter($__internal_51e9c7ef7e14fb04e1616bc6c31d5b50caf8f7e9a1ec435d1f14bc31d4bdb918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_51e9c7ef7e14fb04e1616bc6c31d5b50caf8f7e9a1ec435d1f14bc31d4bdb918->leave($__internal_51e9c7ef7e14fb04e1616bc6c31d5b50caf8f7e9a1ec435d1f14bc31d4bdb918_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_97d62c2bfdafd291b5894201ca5bd891c7c50b52964ed58fe5237055cefbd4db = $this->env->getExtension("native_profiler");
        $__internal_97d62c2bfdafd291b5894201ca5bd891c7c50b52964ed58fe5237055cefbd4db->enter($__internal_97d62c2bfdafd291b5894201ca5bd891c7c50b52964ed58fe5237055cefbd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_97d62c2bfdafd291b5894201ca5bd891c7c50b52964ed58fe5237055cefbd4db->leave($__internal_97d62c2bfdafd291b5894201ca5bd891c7c50b52964ed58fe5237055cefbd4db_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_ae6bf3c8a71525820f536905ffeb087c770547693fba1943e0179d2ce29dd101 = $this->env->getExtension("native_profiler");
        $__internal_ae6bf3c8a71525820f536905ffeb087c770547693fba1943e0179d2ce29dd101->enter($__internal_ae6bf3c8a71525820f536905ffeb087c770547693fba1943e0179d2ce29dd101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_ae6bf3c8a71525820f536905ffeb087c770547693fba1943e0179d2ce29dd101->leave($__internal_ae6bf3c8a71525820f536905ffeb087c770547693fba1943e0179d2ce29dd101_prof);

    }

    // line 24
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_8f81b9accbd30294965c15aff659e0fde3e665a0a69c02ca03c374eca3bcc00a = $this->env->getExtension("native_profiler");
        $__internal_8f81b9accbd30294965c15aff659e0fde3e665a0a69c02ca03c374eca3bcc00a->enter($__internal_8f81b9accbd30294965c15aff659e0fde3e665a0a69c02ca03c374eca3bcc00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
            $this->loadTemplate("TSCandidatBundle:Candidat:offer.html.twig", "@TSCandidat/Candidat/offers.html.twig", 26)->display($context);
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
        
        $__internal_8f81b9accbd30294965c15aff659e0fde3e665a0a69c02ca03c374eca3bcc00a->leave($__internal_8f81b9accbd30294965c15aff659e0fde3e665a0a69c02ca03c374eca3bcc00a_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0624e7a1c4fdab2602761ab5ea9f5cb3cc648c3e2b9ce703d387ca6253e95f65 = $this->env->getExtension("native_profiler");
        $__internal_0624e7a1c4fdab2602761ab5ea9f5cb3cc648c3e2b9ce703d387ca6253e95f65->enter($__internal_0624e7a1c4fdab2602761ab5ea9f5cb3cc648c3e2b9ce703d387ca6253e95f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_0624e7a1c4fdab2602761ab5ea9f5cb3cc648c3e2b9ce703d387ca6253e95f65->leave($__internal_0624e7a1c4fdab2602761ab5ea9f5cb3cc648c3e2b9ce703d387ca6253e95f65_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/offers.html.twig";
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
