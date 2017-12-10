<?php

/* TSSRecBundle:SRec:cv.html.twig */
class __TwigTemplate_dd3770b9e324b8f386827f92b4ef6ebd2c44b449062b8888ba4f738329c29e3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSEvaluatorBundle::layout.html.twig", "TSSRecBundle:SRec:cv.html.twig", 3);
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
        return "TSEvaluatorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1efcae9916e9143b8200dd7b16c821a5166b13048f09f9918edd77a646d2ffe = $this->env->getExtension("native_profiler");
        $__internal_d1efcae9916e9143b8200dd7b16c821a5166b13048f09f9918edd77a646d2ffe->enter($__internal_d1efcae9916e9143b8200dd7b16c821a5166b13048f09f9918edd77a646d2ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle:SRec:cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1efcae9916e9143b8200dd7b16c821a5166b13048f09f9918edd77a646d2ffe->leave($__internal_d1efcae9916e9143b8200dd7b16c821a5166b13048f09f9918edd77a646d2ffe_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14c7bb3bb6b96541ec7afad8d780c8b18e0114e8e69367337b083e0f7df7dfc3 = $this->env->getExtension("native_profiler");
        $__internal_14c7bb3bb6b96541ec7afad8d780c8b18e0114e8e69367337b083e0f7df7dfc3->enter($__internal_14c7bb3bb6b96541ec7afad8d780c8b18e0114e8e69367337b083e0f7df7dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/cv.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/cv.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/pagination.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/pagination.css"), "html", null, true);
        echo "\" />
";
        // line 11
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_14c7bb3bb6b96541ec7afad8d780c8b18e0114e8e69367337b083e0f7df7dfc3->leave($__internal_14c7bb3bb6b96541ec7afad8d780c8b18e0114e8e69367337b083e0f7df7dfc3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa6ba692848f7640779c617283eb49e8e97b24d86f59efe5e91b7b0dd7d67990 = $this->env->getExtension("native_profiler");
        $__internal_aa6ba692848f7640779c617283eb49e8e97b24d86f59efe5e91b7b0dd7d67990->enter($__internal_aa6ba692848f7640779c617283eb49e8e97b24d86f59efe5e91b7b0dd7d67990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_aa6ba692848f7640779c617283eb49e8e97b24d86f59efe5e91b7b0dd7d67990->leave($__internal_aa6ba692848f7640779c617283eb49e8e97b24d86f59efe5e91b7b0dd7d67990_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fe37260b6caea9b3184ef5f8fc7a70cfabbe1df072a921c3f273ee2eb4a0219 = $this->env->getExtension("native_profiler");
        $__internal_9fe37260b6caea9b3184ef5f8fc7a70cfabbe1df072a921c3f273ee2eb4a0219->enter($__internal_9fe37260b6caea9b3184ef5f8fc7a70cfabbe1df072a921c3f273ee2eb4a0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|cv
";
        
        $__internal_9fe37260b6caea9b3184ef5f8fc7a70cfabbe1df072a921c3f273ee2eb4a0219->leave($__internal_9fe37260b6caea9b3184ef5f8fc7a70cfabbe1df072a921c3f273ee2eb4a0219_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_37ea354d7d06e8c65b6933f2dcb0fa31db1be206aceb74183dca2336e4865fd0 = $this->env->getExtension("native_profiler");
        $__internal_37ea354d7d06e8c65b6933f2dcb0fa31db1be206aceb74183dca2336e4865fd0->enter($__internal_37ea354d7d06e8c65b6933f2dcb0fa31db1be206aceb74183dca2336e4865fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_37ea354d7d06e8c65b6933f2dcb0fa31db1be206aceb74183dca2336e4865fd0->leave($__internal_37ea354d7d06e8c65b6933f2dcb0fa31db1be206aceb74183dca2336e4865fd0_prof);

    }

    // line 30
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_719094f93d4e8469fc67b2b3c56ffd0f8dc791ab156edc6c4a01bac3a8f18f9d = $this->env->getExtension("native_profiler");
        $__internal_719094f93d4e8469fc67b2b3c56ffd0f8dc791ab156edc6c4a01bac3a8f18f9d->enter($__internal_719094f93d4e8469fc67b2b3c56ffd0f8dc791ab156edc6c4a01bac3a8f18f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_719094f93d4e8469fc67b2b3c56ffd0f8dc791ab156edc6c4a01bac3a8f18f9d->leave($__internal_719094f93d4e8469fc67b2b3c56ffd0f8dc791ab156edc6c4a01bac3a8f18f9d_prof);

    }

    // line 48
    public function block_slider($context, array $blocks = array())
    {
        $__internal_9264b74c7bb8f1faac0161ba5ceca23e749ddde0d34378db98fe5d5d9b60cdc1 = $this->env->getExtension("native_profiler");
        $__internal_9264b74c7bb8f1faac0161ba5ceca23e749ddde0d34378db98fe5d5d9b60cdc1->enter($__internal_9264b74c7bb8f1faac0161ba5ceca23e749ddde0d34378db98fe5d5d9b60cdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_9264b74c7bb8f1faac0161ba5ceca23e749ddde0d34378db98fe5d5d9b60cdc1->leave($__internal_9264b74c7bb8f1faac0161ba5ceca23e749ddde0d34378db98fe5d5d9b60cdc1_prof);

    }

    // line 50
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_e76ec49ff1d36050112f94ef5daedf18a3a1f936d0ca7f552861414908039ff0 = $this->env->getExtension("native_profiler");
        $__internal_e76ec49ff1d36050112f94ef5daedf18a3a1f936d0ca7f552861414908039ff0->enter($__internal_e76ec49ff1d36050112f94ef5daedf18a3a1f936d0ca7f552861414908039ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 51
        $this->loadTemplate("TSSRecBundle:SRec:research.html.twig", "TSSRecBundle:SRec:cv.html.twig", 51)->display($context);
        // line 52
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
            // line 53
            echo "    ";
            $this->loadTemplate("TSEvaluatorBundle:Evaluator:candidate.html.twig", "TSSRecBundle:SRec:cv.html.twig", 53)->display(array_merge($context, array("accueil" => true)));
            // line 54
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
            // line 55
            echo "<p>Pas (encore !) de candidats </p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
<div class=\"pagination\">
    <ul>
      ";
        // line 61
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 62
            echo "        <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tss_rec_cv", array("page" => $context["p"])), "html", null, true);
            echo "\">
                <span>";
            // line 64
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</span>
            </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </ul>
</div>
";
        // line 70
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_e76ec49ff1d36050112f94ef5daedf18a3a1f936d0ca7f552861414908039ff0->leave($__internal_e76ec49ff1d36050112f94ef5daedf18a3a1f936d0ca7f552861414908039ff0_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b1482c8a44ba77c92cd2ca36647a9cc70d202be565a78b40f81039f37e396e87 = $this->env->getExtension("native_profiler");
        $__internal_b1482c8a44ba77c92cd2ca36647a9cc70d202be565a78b40f81039f37e396e87->enter($__internal_b1482c8a44ba77c92cd2ca36647a9cc70d202be565a78b40f81039f37e396e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_b1482c8a44ba77c92cd2ca36647a9cc70d202be565a78b40f81039f37e396e87->leave($__internal_b1482c8a44ba77c92cd2ca36647a9cc70d202be565a78b40f81039f37e396e87_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle:SRec:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 73,  302 => 72,  293 => 70,  289 => 68,  279 => 64,  275 => 63,  268 => 62,  263 => 61,  258 => 57,  251 => 55,  238 => 54,  235 => 53,  217 => 52,  215 => 51,  209 => 50,  198 => 48,  188 => 45,  177 => 37,  172 => 35,  167 => 33,  163 => 31,  157 => 30,  147 => 28,  141 => 27,  131 => 25,  125 => 24,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  83 => 14,  77 => 13,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  47 => 6,  41 => 5,  11 => 3,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/cv.html.twig #}*/
/* */
/* {% extends "TSEvaluatorBundle::layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/cv.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/cv.css')}}" />*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/pagination.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/pagination.css')}}" />*/
/* {{ parent() }}*/
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
/*       {% for p in range(1, nombrePage) %}*/
/*         <li{% if p == page %} class="active"{% endif %}>*/
/*             <a href="{{ path('tss_rec_cv', {'page': p}) }}">*/
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
