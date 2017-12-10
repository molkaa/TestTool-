<?php

/* @TSSRec/SRec/cvs.html.twig */
class __TwigTemplate_ca1fe4c411e1c29de01e83f78c256ac9806f90adb385e9947f7d57b37954875b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "@TSSRec/SRec/cvs.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        return "TSSRecBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eee4bb6ef2aba9a0c1639bc40831dfee6e195fb9d65b867eebb1b96efea2ea54 = $this->env->getExtension("native_profiler");
        $__internal_eee4bb6ef2aba9a0c1639bc40831dfee6e195fb9d65b867eebb1b96efea2ea54->enter($__internal_eee4bb6ef2aba9a0c1639bc40831dfee6e195fb9d65b867eebb1b96efea2ea54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/SRec/cvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee4bb6ef2aba9a0c1639bc40831dfee6e195fb9d65b867eebb1b96efea2ea54->leave($__internal_eee4bb6ef2aba9a0c1639bc40831dfee6e195fb9d65b867eebb1b96efea2ea54_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6d75ca3386325fcfaebe526344d4f3972058dafeff066180030f700f9a22f9f = $this->env->getExtension("native_profiler");
        $__internal_e6d75ca3386325fcfaebe526344d4f3972058dafeff066180030f700f9a22f9f->enter($__internal_e6d75ca3386325fcfaebe526344d4f3972058dafeff066180030f700f9a22f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cv.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/cv.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pagination.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/pagination.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e6d75ca3386325fcfaebe526344d4f3972058dafeff066180030f700f9a22f9f->leave($__internal_e6d75ca3386325fcfaebe526344d4f3972058dafeff066180030f700f9a22f9f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81856ef27febcca06de40ca15f2cb6b4676caa7a0a0d9c44698be6f13d742d95 = $this->env->getExtension("native_profiler");
        $__internal_81856ef27febcca06de40ca15f2cb6b4676caa7a0a0d9c44698be6f13d742d95->enter($__internal_81856ef27febcca06de40ca15f2cb6b4676caa7a0a0d9c44698be6f13d742d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery.ba-resize.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
";
        // line 22
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_81856ef27febcca06de40ca15f2cb6b4676caa7a0a0d9c44698be6f13d742d95->leave($__internal_81856ef27febcca06de40ca15f2cb6b4676caa7a0a0d9c44698be6f13d742d95_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_927329905dba6a2b849ca9363883f14b45725988bfb263a74a3406d7f570a459 = $this->env->getExtension("native_profiler");
        $__internal_927329905dba6a2b849ca9363883f14b45725988bfb263a74a3406d7f570a459->enter($__internal_927329905dba6a2b849ca9363883f14b45725988bfb263a74a3406d7f570a459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|cv
";
        
        $__internal_927329905dba6a2b849ca9363883f14b45725988bfb263a74a3406d7f570a459->leave($__internal_927329905dba6a2b849ca9363883f14b45725988bfb263a74a3406d7f570a459_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_0c8a982a1a6c31cb6e151c349e6b627d9a1ffa21c9210950a941b2479f4bfe79 = $this->env->getExtension("native_profiler");
        $__internal_0c8a982a1a6c31cb6e151c349e6b627d9a1ffa21c9210950a941b2479f4bfe79->enter($__internal_0c8a982a1a6c31cb6e151c349e6b627d9a1ffa21c9210950a941b2479f4bfe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_0c8a982a1a6c31cb6e151c349e6b627d9a1ffa21c9210950a941b2479f4bfe79->leave($__internal_0c8a982a1a6c31cb6e151c349e6b627d9a1ffa21c9210950a941b2479f4bfe79_prof);

    }

    // line 30
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_5c3f7a1869adcba146ab26565e1dfd4800b536ed4f2b0ea4b254c67b1f6f91b4 = $this->env->getExtension("native_profiler");
        $__internal_5c3f7a1869adcba146ab26565e1dfd4800b536ed4f2b0ea4b254c67b1f6f91b4->enter($__internal_5c3f7a1869adcba146ab26565e1dfd4800b536ed4f2b0ea4b254c67b1f6f91b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 31
        echo "<ul>   
    <li class=\"active\">
        <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("tss_rec_cvs");
        echo "\"><span>CV</span></a>
    </li>
    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("tss_rec_offers");
        echo "\"><span>Offers</span></a></li>
    <li class=\"menu_list\">
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("tss_rec_edit");
        echo "\"><span>Edit</span></a>
        <ul>
            <li class=\"n1\"><a href=\"ts_evaluator_feed\">Home</a></li>
            <li class=\"n2\"><a href=\"ts_evaluator_feed\">About US </a></li>
            <li class=\"n3\"><a href=\"ts_evaluator_feed\">Contact US </a></li>
            <li class=\"n4\"><a href=\"ts_evaluator_feed\">Services</a></li>
        </ul>
    </li>
    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("tss_rec_tests");
        echo "\"><span>tests</span></a></li>

</ul>
";
        
        $__internal_5c3f7a1869adcba146ab26565e1dfd4800b536ed4f2b0ea4b254c67b1f6f91b4->leave($__internal_5c3f7a1869adcba146ab26565e1dfd4800b536ed4f2b0ea4b254c67b1f6f91b4_prof);

    }

    // line 49
    public function block_slider($context, array $blocks = array())
    {
        $__internal_8fa37f1a42a5345e3dffb832d520d79d4375f7bb37231e239876f13cf29e5e4e = $this->env->getExtension("native_profiler");
        $__internal_8fa37f1a42a5345e3dffb832d520d79d4375f7bb37231e239876f13cf29e5e4e->enter($__internal_8fa37f1a42a5345e3dffb832d520d79d4375f7bb37231e239876f13cf29e5e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_8fa37f1a42a5345e3dffb832d520d79d4375f7bb37231e239876f13cf29e5e4e->leave($__internal_8fa37f1a42a5345e3dffb832d520d79d4375f7bb37231e239876f13cf29e5e4e_prof);

    }

    // line 51
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_c3bbf53a34eda31a5d2082c291142dddc6e980319c75c5f2ae9fd9613219cb92 = $this->env->getExtension("native_profiler");
        $__internal_c3bbf53a34eda31a5d2082c291142dddc6e980319c75c5f2ae9fd9613219cb92->enter($__internal_c3bbf53a34eda31a5d2082c291142dddc6e980319c75c5f2ae9fd9613219cb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 52
        $this->loadTemplate("TSSRecBundle:SRec:research.html.twig", "@TSSRec/SRec/cvs.html.twig", 52)->display($context);
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCandidat"]) ? $context["listeCandidat"] : $this->getContext($context, "listeCandidat")));
        $context['_iterated'] = false;
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
            // line 54
            echo "    ";
            $this->loadTemplate("TSEvaluatorBundle:Evaluator:candidate.html.twig", "@TSSRec/SRec/cvs.html.twig", 54)->display(array_merge($context, array("accueil" => true)));
            // line 55
            echo " ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 56
            echo "<p>Pas (encore !) de candidats </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
<div class=\"pagination\">
    <ul>
      ";
        // line 62
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 63
            echo "        <li";
            if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tss_rec_cvs", array("pages" => $context["p"])), "html", null, true);
            echo "\">
                <span>";
            // line 65
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</span>
            </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </ul>
</div>
";
        // line 71
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_c3bbf53a34eda31a5d2082c291142dddc6e980319c75c5f2ae9fd9613219cb92->leave($__internal_c3bbf53a34eda31a5d2082c291142dddc6e980319c75c5f2ae9fd9613219cb92_prof);

    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        $__internal_74c4c5b88c3608b9dfb6eed4283a8f3ef10098296443067c71910dfcf0735008 = $this->env->getExtension("native_profiler");
        $__internal_74c4c5b88c3608b9dfb6eed4283a8f3ef10098296443067c71910dfcf0735008->enter($__internal_74c4c5b88c3608b9dfb6eed4283a8f3ef10098296443067c71910dfcf0735008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 74
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_74c4c5b88c3608b9dfb6eed4283a8f3ef10098296443067c71910dfcf0735008->leave($__internal_74c4c5b88c3608b9dfb6eed4283a8f3ef10098296443067c71910dfcf0735008_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/SRec/cvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 74,  302 => 73,  293 => 71,  289 => 69,  279 => 65,  275 => 64,  268 => 63,  263 => 62,  258 => 58,  251 => 56,  238 => 55,  235 => 54,  217 => 53,  215 => 52,  209 => 51,  198 => 49,  187 => 45,  176 => 37,  171 => 35,  166 => 33,  162 => 31,  156 => 30,  146 => 28,  140 => 27,  130 => 25,  124 => 24,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  82 => 14,  76 => 13,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 5,  11 => 3,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/Candidat/cv.html.twig #}*/
/* */
/* {% extends "TSSRecBundle::layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/cv.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/cv.css')}}" />*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/pagination.css')}}" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block title %}*/
/*  {{ parent() }}|cv*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <ul>   */
/*     <li class="active">*/
/*         <a href="{{ path('tss_rec_cvs') }}"><span>CV</span></a>*/
/*     </li>*/
/*     <li><a href="{{ path('tss_rec_offers') }}"><span>Offers</span></a></li>*/
/*     <li class="menu_list">*/
/*         <a href="{{ path('tss_rec_edit') }}"><span>Edit</span></a>*/
/*         <ul>*/
/*             <li class="n1"><a href="ts_evaluator_feed">Home</a></li>*/
/*             <li class="n2"><a href="ts_evaluator_feed">About US </a></li>*/
/*             <li class="n3"><a href="ts_evaluator_feed">Contact US </a></li>*/
/*             <li class="n4"><a href="ts_evaluator_feed">Services</a></li>*/
/*         </ul>*/
/*     </li>*/
/*     <li><a href="{{ path('tss_rec_tests') }}"><span>tests</span></a></li>*/
/* */
/* </ul>*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* {% include "TSSRecBundle:SRec:research.html.twig" %}*/
/* {% for candidat in listeCandidat %}*/
/*     {% include "TSEvaluatorBundle:Evaluator:candidate.html.twig" with {'accueil': true} %}*/
/*  {% else %}*/
/* <p>Pas (encore !) de candidats </p>*/
/* {% endfor %}*/
/* */
/* <div class="pagination">*/
/*     <ul>*/
/*       {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*       {% for p in range(1, nombrePages) %}*/
/*         <li{% if p == pages %} class="active"{% endif %}>*/
/*             <a href="{{ path('tss_rec_cvs', {'pages': p}) }}">*/
/*                 <span>{{p}}</span>*/
/*             </a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */