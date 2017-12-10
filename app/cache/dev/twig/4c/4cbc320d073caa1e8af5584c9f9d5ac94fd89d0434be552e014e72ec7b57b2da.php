<?php

/* @TSSRec/SRec/cv.html.twig */
class __TwigTemplate_eddffa08a6da4c2c8e65694a6e4cfac2920b6da619ca30f56e6f7794ed2c344f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSEvaluatorBundle::layout.html.twig", "@TSSRec/SRec/cv.html.twig", 3);
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
        $__internal_f8310831e6b2f2ecc103dd13b1678c7bb45e656351bf2418b91d19863dd15604 = $this->env->getExtension("native_profiler");
        $__internal_f8310831e6b2f2ecc103dd13b1678c7bb45e656351bf2418b91d19863dd15604->enter($__internal_f8310831e6b2f2ecc103dd13b1678c7bb45e656351bf2418b91d19863dd15604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSSRec/SRec/cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8310831e6b2f2ecc103dd13b1678c7bb45e656351bf2418b91d19863dd15604->leave($__internal_f8310831e6b2f2ecc103dd13b1678c7bb45e656351bf2418b91d19863dd15604_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2cfa7d528d05a698d5db2ae216d90881de846bfe459c6b00625b5f7a9583deb2 = $this->env->getExtension("native_profiler");
        $__internal_2cfa7d528d05a698d5db2ae216d90881de846bfe459c6b00625b5f7a9583deb2->enter($__internal_2cfa7d528d05a698d5db2ae216d90881de846bfe459c6b00625b5f7a9583deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2cfa7d528d05a698d5db2ae216d90881de846bfe459c6b00625b5f7a9583deb2->leave($__internal_2cfa7d528d05a698d5db2ae216d90881de846bfe459c6b00625b5f7a9583deb2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ec99c844561ff9eb76ac16ad6a57f78aa579c384033881f81603ac571f2eb6f = $this->env->getExtension("native_profiler");
        $__internal_2ec99c844561ff9eb76ac16ad6a57f78aa579c384033881f81603ac571f2eb6f->enter($__internal_2ec99c844561ff9eb76ac16ad6a57f78aa579c384033881f81603ac571f2eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2ec99c844561ff9eb76ac16ad6a57f78aa579c384033881f81603ac571f2eb6f->leave($__internal_2ec99c844561ff9eb76ac16ad6a57f78aa579c384033881f81603ac571f2eb6f_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_baebcd6d8ca27a04efdcbce05db7e5e900aaa71a49dc95e925adf4dedf84c6ef = $this->env->getExtension("native_profiler");
        $__internal_baebcd6d8ca27a04efdcbce05db7e5e900aaa71a49dc95e925adf4dedf84c6ef->enter($__internal_baebcd6d8ca27a04efdcbce05db7e5e900aaa71a49dc95e925adf4dedf84c6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|cv
";
        
        $__internal_baebcd6d8ca27a04efdcbce05db7e5e900aaa71a49dc95e925adf4dedf84c6ef->leave($__internal_baebcd6d8ca27a04efdcbce05db7e5e900aaa71a49dc95e925adf4dedf84c6ef_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_3933a929f38eac03f6bdc19acf198ea07721f31aaa2922443aa03d6c54305e9e = $this->env->getExtension("native_profiler");
        $__internal_3933a929f38eac03f6bdc19acf198ea07721f31aaa2922443aa03d6c54305e9e->enter($__internal_3933a929f38eac03f6bdc19acf198ea07721f31aaa2922443aa03d6c54305e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_3933a929f38eac03f6bdc19acf198ea07721f31aaa2922443aa03d6c54305e9e->leave($__internal_3933a929f38eac03f6bdc19acf198ea07721f31aaa2922443aa03d6c54305e9e_prof);

    }

    // line 30
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_697b790c052a11ab74be9a1ad80b2786fd58f87916021e95855a1d56398bfc09 = $this->env->getExtension("native_profiler");
        $__internal_697b790c052a11ab74be9a1ad80b2786fd58f87916021e95855a1d56398bfc09->enter($__internal_697b790c052a11ab74be9a1ad80b2786fd58f87916021e95855a1d56398bfc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_697b790c052a11ab74be9a1ad80b2786fd58f87916021e95855a1d56398bfc09->leave($__internal_697b790c052a11ab74be9a1ad80b2786fd58f87916021e95855a1d56398bfc09_prof);

    }

    // line 48
    public function block_slider($context, array $blocks = array())
    {
        $__internal_93a61847122f660417ae5d4e5c3e4fd8897968fff6d842cb9ce133f3e6c5ee13 = $this->env->getExtension("native_profiler");
        $__internal_93a61847122f660417ae5d4e5c3e4fd8897968fff6d842cb9ce133f3e6c5ee13->enter($__internal_93a61847122f660417ae5d4e5c3e4fd8897968fff6d842cb9ce133f3e6c5ee13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_93a61847122f660417ae5d4e5c3e4fd8897968fff6d842cb9ce133f3e6c5ee13->leave($__internal_93a61847122f660417ae5d4e5c3e4fd8897968fff6d842cb9ce133f3e6c5ee13_prof);

    }

    // line 50
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_7096dd3c892e28854394c8097aba028b1302e3a4321c0fa7e8f8c2d5508f234f = $this->env->getExtension("native_profiler");
        $__internal_7096dd3c892e28854394c8097aba028b1302e3a4321c0fa7e8f8c2d5508f234f->enter($__internal_7096dd3c892e28854394c8097aba028b1302e3a4321c0fa7e8f8c2d5508f234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 51
        $this->loadTemplate("TSSRecBundle:SRec:research.html.twig", "@TSSRec/SRec/cv.html.twig", 51)->display($context);
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
            $this->loadTemplate("TSEvaluatorBundle:Evaluator:candidate.html.twig", "@TSSRec/SRec/cv.html.twig", 53)->display(array_merge($context, array("accueil" => true)));
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
        
        $__internal_7096dd3c892e28854394c8097aba028b1302e3a4321c0fa7e8f8c2d5508f234f->leave($__internal_7096dd3c892e28854394c8097aba028b1302e3a4321c0fa7e8f8c2d5508f234f_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8c0878597fcd9d8352c660822d57acb3bedbb028f829e03b4ac2562d7fe5c176 = $this->env->getExtension("native_profiler");
        $__internal_8c0878597fcd9d8352c660822d57acb3bedbb028f829e03b4ac2562d7fe5c176->enter($__internal_8c0878597fcd9d8352c660822d57acb3bedbb028f829e03b4ac2562d7fe5c176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_8c0878597fcd9d8352c660822d57acb3bedbb028f829e03b4ac2562d7fe5c176->leave($__internal_8c0878597fcd9d8352c660822d57acb3bedbb028f829e03b4ac2562d7fe5c176_prof);

    }

    public function getTemplateName()
    {
        return "@TSSRec/SRec/cv.html.twig";
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
