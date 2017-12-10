<?php

/* TSSRecBundle:SRec:offers.html.twig */
class __TwigTemplate_875f265863a0d11b6841568fdda634cd7951d6d4b168227017abe013cbc4eb4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSSRecBundle::layout.html.twig", "TSSRecBundle:SRec:offers.html.twig", 3);
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
        $__internal_6bd5e62de8b71e59f7b3b14f0cac6d4bf12ef6461737ec83558ebd112d5b9891 = $this->env->getExtension("native_profiler");
        $__internal_6bd5e62de8b71e59f7b3b14f0cac6d4bf12ef6461737ec83558ebd112d5b9891->enter($__internal_6bd5e62de8b71e59f7b3b14f0cac6d4bf12ef6461737ec83558ebd112d5b9891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle:SRec:offers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bd5e62de8b71e59f7b3b14f0cac6d4bf12ef6461737ec83558ebd112d5b9891->leave($__internal_6bd5e62de8b71e59f7b3b14f0cac6d4bf12ef6461737ec83558ebd112d5b9891_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22ecb7f0f1325abcdf686f135cc43bf7e45d917f58244f5224af3e99f9499815 = $this->env->getExtension("native_profiler");
        $__internal_22ecb7f0f1325abcdf686f135cc43bf7e45d917f58244f5224af3e99f9499815->enter($__internal_22ecb7f0f1325abcdf686f135cc43bf7e45d917f58244f5224af3e99f9499815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_22ecb7f0f1325abcdf686f135cc43bf7e45d917f58244f5224af3e99f9499815->leave($__internal_22ecb7f0f1325abcdf686f135cc43bf7e45d917f58244f5224af3e99f9499815_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_332621ff048cd493e00cb93df42b7e4a747b7c441ffd328c29a64dbdc87c46f6 = $this->env->getExtension("native_profiler");
        $__internal_332621ff048cd493e00cb93df42b7e4a747b7c441ffd328c29a64dbdc87c46f6->enter($__internal_332621ff048cd493e00cb93df42b7e4a747b7c441ffd328c29a64dbdc87c46f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_332621ff048cd493e00cb93df42b7e4a747b7c441ffd328c29a64dbdc87c46f6->leave($__internal_332621ff048cd493e00cb93df42b7e4a747b7c441ffd328c29a64dbdc87c46f6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_854fdffc19ad316734749ab2dc1ae4e5c548dc35d9c4a7a34df9fb67adba6c1d = $this->env->getExtension("native_profiler");
        $__internal_854fdffc19ad316734749ab2dc1ae4e5c548dc35d9c4a7a34df9fb67adba6c1d->enter($__internal_854fdffc19ad316734749ab2dc1ae4e5c548dc35d9c4a7a34df9fb67adba6c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|offers
";
        
        $__internal_854fdffc19ad316734749ab2dc1ae4e5c548dc35d9c4a7a34df9fb67adba6c1d->leave($__internal_854fdffc19ad316734749ab2dc1ae4e5c548dc35d9c4a7a34df9fb67adba6c1d_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_c87b29c5b69eef6f472bbe80bd2d8027474d1a00beff386bc8c3fb0b1240c34e = $this->env->getExtension("native_profiler");
        $__internal_c87b29c5b69eef6f472bbe80bd2d8027474d1a00beff386bc8c3fb0b1240c34e->enter($__internal_c87b29c5b69eef6f472bbe80bd2d8027474d1a00beff386bc8c3fb0b1240c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_c87b29c5b69eef6f472bbe80bd2d8027474d1a00beff386bc8c3fb0b1240c34e->leave($__internal_c87b29c5b69eef6f472bbe80bd2d8027474d1a00beff386bc8c3fb0b1240c34e_prof);

    }

    // line 17
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_4f8b261bb36785a017d9814acf730976565ec14663fa8c4f493ff10bfef05c5d = $this->env->getExtension("native_profiler");
        $__internal_4f8b261bb36785a017d9814acf730976565ec14663fa8c4f493ff10bfef05c5d->enter($__internal_4f8b261bb36785a017d9814acf730976565ec14663fa8c4f493ff10bfef05c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 18
        echo "<ul>   
    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tss_rec_cvs");
        echo "\"><span>CV</span></a></li>
    <li  class=\"active\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tss_rec_offers");
        echo "\"><span>Offers</span></a>
    </li>
    <li class=\"menu_list\">
        <a href=\"";
        // line 24
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
        // line 32
        echo $this->env->getExtension('routing')->getPath("tss_rec_tests");
        echo "\"><span>tests</span></a></li>
</ul>
";
        
        $__internal_4f8b261bb36785a017d9814acf730976565ec14663fa8c4f493ff10bfef05c5d->leave($__internal_4f8b261bb36785a017d9814acf730976565ec14663fa8c4f493ff10bfef05c5d_prof);

    }

    // line 35
    public function block_slider($context, array $blocks = array())
    {
        $__internal_608c3117ffa91191381099a7bc6e00bbcfddefc1e0337ac7696462cb1068e4dc = $this->env->getExtension("native_profiler");
        $__internal_608c3117ffa91191381099a7bc6e00bbcfddefc1e0337ac7696462cb1068e4dc->enter($__internal_608c3117ffa91191381099a7bc6e00bbcfddefc1e0337ac7696462cb1068e4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_608c3117ffa91191381099a7bc6e00bbcfddefc1e0337ac7696462cb1068e4dc->leave($__internal_608c3117ffa91191381099a7bc6e00bbcfddefc1e0337ac7696462cb1068e4dc_prof);

    }

    // line 37
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_bd99315050c6f0af57d75003d5fda1403423e38cbd1774ddec3bca03176ff01b = $this->env->getExtension("native_profiler");
        $__internal_bd99315050c6f0af57d75003d5fda1403423e38cbd1774ddec3bca03176ff01b->enter($__internal_bd99315050c6f0af57d75003d5fda1403423e38cbd1774ddec3bca03176ff01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 38
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_bd99315050c6f0af57d75003d5fda1403423e38cbd1774ddec3bca03176ff01b->leave($__internal_bd99315050c6f0af57d75003d5fda1403423e38cbd1774ddec3bca03176ff01b_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        $__internal_99573722fc031eed5c2303720ad01ffe4361dc9945871e4f7c768893b5e1413b = $this->env->getExtension("native_profiler");
        $__internal_99573722fc031eed5c2303720ad01ffe4361dc9945871e4f7c768893b5e1413b->enter($__internal_99573722fc031eed5c2303720ad01ffe4361dc9945871e4f7c768893b5e1413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_99573722fc031eed5c2303720ad01ffe4361dc9945871e4f7c768893b5e1413b->leave($__internal_99573722fc031eed5c2303720ad01ffe4361dc9945871e4f7c768893b5e1413b_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle:SRec:offers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  170 => 40,  161 => 38,  155 => 37,  144 => 35,  134 => 32,  123 => 24,  117 => 21,  112 => 19,  109 => 18,  103 => 17,  93 => 15,  87 => 14,  77 => 12,  71 => 11,  62 => 9,  56 => 8,  47 => 6,  41 => 5,  11 => 3,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/SRec/edit.html.twig #}*/
/* */
/* {% extends "TSSRecBundle::layout.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block title %}*/
/*  {{ parent() }}|offers*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <ul>   */
/*     <li><a href="{{ path('tss_rec_cvs') }}"><span>CV</span></a></li>*/
/*     <li  class="active">*/
/*         <a href="{{ path('tss_rec_offers') }}"><span>Offers</span></a>*/
/*     </li>*/
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
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
