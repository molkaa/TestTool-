<?php

/* @TSCandidat/Candidat/htapply.html.twig */
class __TwigTemplate_74bc65a198bd065f176236d5e67d7f1b004c4b37aacce9ec4f215fede0036e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/htapply.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'field_label' => array($this, 'block_field_label'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d3ca9092f877614ba9bc880818758fd7a20733a3b8249c1f5b700bec079f2dd = $this->env->getExtension("native_profiler");
        $__internal_3d3ca9092f877614ba9bc880818758fd7a20733a3b8249c1f5b700bec079f2dd->enter($__internal_3d3ca9092f877614ba9bc880818758fd7a20733a3b8249c1f5b700bec079f2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/htapply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3ca9092f877614ba9bc880818758fd7a20733a3b8249c1f5b700bec079f2dd->leave($__internal_3d3ca9092f877614ba9bc880818758fd7a20733a3b8249c1f5b700bec079f2dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf474f1d9e6950df651af06bdcb91f99573e3cce43ab9baf6221c7ada4257730 = $this->env->getExtension("native_profiler");
        $__internal_cf474f1d9e6950df651af06bdcb91f99573e3cce43ab9baf6221c7ada4257730->enter($__internal_cf474f1d9e6950df651af06bdcb91f99573e3cce43ab9baf6221c7ada4257730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/accordion.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_cf474f1d9e6950df651af06bdcb91f99573e3cce43ab9baf6221c7ada4257730->leave($__internal_cf474f1d9e6950df651af06bdcb91f99573e3cce43ab9baf6221c7ada4257730_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb1a16a5d5a124ffa1de5103cb58bc3da031a0d498eb9b444a10d8f1713fcf9c = $this->env->getExtension("native_profiler");
        $__internal_eb1a16a5d5a124ffa1de5103cb58bc3da031a0d498eb9b444a10d8f1713fcf9c->enter($__internal_eb1a16a5d5a124ffa1de5103cb58bc3da031a0d498eb9b444a10d8f1713fcf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_eb1a16a5d5a124ffa1de5103cb58bc3da031a0d498eb9b444a10d8f1713fcf9c->leave($__internal_eb1a16a5d5a124ffa1de5103cb58bc3da031a0d498eb9b444a10d8f1713fcf9c_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a72b0dfa61a83ba5712602880e934e6cb75f7b06699a5885c916f6c72b79c1c = $this->env->getExtension("native_profiler");
        $__internal_3a72b0dfa61a83ba5712602880e934e6cb75f7b06699a5885c916f6c72b79c1c->enter($__internal_3a72b0dfa61a83ba5712602880e934e6cb75f7b06699a5885c916f6c72b79c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|How to apply
";
        
        $__internal_3a72b0dfa61a83ba5712602880e934e6cb75f7b06699a5885c916f6c72b79c1c->leave($__internal_3a72b0dfa61a83ba5712602880e934e6cb75f7b06699a5885c916f6c72b79c1c_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_e7deade24f009898159075b048aa314b55ad1db302f26c782f5683efaa687c29 = $this->env->getExtension("native_profiler");
        $__internal_e7deade24f009898159075b048aa314b55ad1db302f26c782f5683efaa687c29->enter($__internal_e7deade24f009898159075b048aa314b55ad1db302f26c782f5683efaa687c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e7deade24f009898159075b048aa314b55ad1db302f26c782f5683efaa687c29->leave($__internal_e7deade24f009898159075b048aa314b55ad1db302f26c782f5683efaa687c29_prof);

    }

    // line 19
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_ecabc0c9b2522a8b26e35a2d27d5235443b8b3f42761259c053667c8fedb4286 = $this->env->getExtension("native_profiler");
        $__internal_ecabc0c9b2522a8b26e35a2d27d5235443b8b3f42761259c053667c8fedb4286->enter($__internal_ecabc0c9b2522a8b26e35a2d27d5235443b8b3f42761259c053667c8fedb4286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 20
        echo "<script>
    \$(document).ready(function() {
        var li = document.getElementById('4');
        \$(li).addClass('selected');
    });
</script>
";
        // line 26
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_ecabc0c9b2522a8b26e35a2d27d5235443b8b3f42761259c053667c8fedb4286->leave($__internal_ecabc0c9b2522a8b26e35a2d27d5235443b8b3f42761259c053667c8fedb4286_prof);

    }

    // line 28
    public function block_slider($context, array $blocks = array())
    {
        $__internal_5fac40a5815d5844701ced64b6ec8ccddcd637ed2a087e9b083f9283e999ff2f = $this->env->getExtension("native_profiler");
        $__internal_5fac40a5815d5844701ced64b6ec8ccddcd637ed2a087e9b083f9283e999ff2f->enter($__internal_5fac40a5815d5844701ced64b6ec8ccddcd637ed2a087e9b083f9283e999ff2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 29
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_5fac40a5815d5844701ced64b6ec8ccddcd637ed2a087e9b083f9283e999ff2f->leave($__internal_5fac40a5815d5844701ced64b6ec8ccddcd637ed2a087e9b083f9283e999ff2f_prof);

    }

    // line 31
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_7596c5b2664a1d76375b8cc1030336e220cd68df78f49e682da76d95c30c80f3 = $this->env->getExtension("native_profiler");
        $__internal_7596c5b2664a1d76375b8cc1030336e220cd68df78f49e682da76d95c30c80f3->enter($__internal_7596c5b2664a1d76375b8cc1030336e220cd68df78f49e682da76d95c30c80f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 32
        echo "
";
        // line 34
        echo "<section class=\"ac-container\">

    <form method=\"post\" ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate=\"novalidate\">
    ";
        // line 37
        $this->displayBlock('field_label', $context, $blocks);
        // line 91
        echo "    </form>
</section>
";
        // line 93
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "

";
        
        $__internal_7596c5b2664a1d76375b8cc1030336e220cd68df78f49e682da76d95c30c80f3->leave($__internal_7596c5b2664a1d76375b8cc1030336e220cd68df78f49e682da76d95c30c80f3_prof);

    }

    // line 37
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_2c6bd51b88371b88fb053082c2712c55c5ef70b3772f232f913c61ebdd9065d4 = $this->env->getExtension("native_profiler");
        $__internal_2c6bd51b88371b88fb053082c2712c55c5ef70b3772f232f913c61ebdd9065d4->enter($__internal_2c6bd51b88371b88fb053082c2712c55c5ef70b3772f232f913c61ebdd9065d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        <div>
            <input id=\"ac-0\" name=\"accordion-1\" type=\"radio\" checked />
            <label class=\"newLabel\" >How to apply</label>
        </div>
        <div>
            <input id=\"ac-1\" name=\"accordion-1\" type=\"radio\" checked />
            <label class=\"newLabel\" for=\"ac-1\">Personal Details*</label>
            <article class=\"well personal\" >
                <div id=\"personalDetails\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 49
            echo "                        ";
            if (((( !($context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "academicDetails", array())) &&  !(            // line 50
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "professionalExperiences", array()))) &&  !(            // line 51
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()))) &&  !(            // line 52
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array())))) {
                // line 53
                echo "                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
                        ";
            }
            // line 55
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
            </article>  
        </div>
        <div>
            <input id=\"ac-2\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-2\">Academic Details*</label>
            <article class=\"well academic\" >
                 ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "academicDetails", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-3\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-3\">Professional Eperience</label>
            <article class=\"well professional\" >
                 ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "professionalExperiences", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-4\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-4\">Technologies*</label>
            <article class=\"well technologies\" >
                 ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-5\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-5\">Languages*</label>
            <article class=\"well languages\" >
                 ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget');
        echo "
            </article>
        </div>
        <input type=\"submit\" class=\"btn btn-primary\" />
        ";
        // line 88
        $this->loadTemplate("TSCandidatBundle:Candidat:formulaire.html.twig", "@TSCandidat/Candidat/htapply.html.twig", 88)->display($context);
        // line 89
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 90
        echo "    ";
        
        $__internal_2c6bd51b88371b88fb053082c2712c55c5ef70b3772f232f913c61ebdd9065d4->leave($__internal_2c6bd51b88371b88fb053082c2712c55c5ef70b3772f232f913c61ebdd9065d4_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8e737d786341da7085b6dad81aaae9e09293e8a81c4e7264734036294737be01 = $this->env->getExtension("native_profiler");
        $__internal_8e737d786341da7085b6dad81aaae9e09293e8a81c4e7264734036294737be01->enter($__internal_8e737d786341da7085b6dad81aaae9e09293e8a81c4e7264734036294737be01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_8e737d786341da7085b6dad81aaae9e09293e8a81c4e7264734036294737be01->leave($__internal_8e737d786341da7085b6dad81aaae9e09293e8a81c4e7264734036294737be01_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/htapply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 97,  287 => 96,  280 => 90,  277 => 89,  275 => 88,  268 => 84,  258 => 77,  248 => 70,  238 => 63,  229 => 56,  223 => 55,  217 => 53,  215 => 52,  214 => 51,  213 => 50,  211 => 49,  207 => 48,  196 => 39,  193 => 38,  187 => 37,  177 => 93,  173 => 91,  171 => 37,  167 => 36,  163 => 34,  160 => 32,  154 => 31,  145 => 29,  139 => 28,  130 => 26,  122 => 20,  116 => 19,  106 => 17,  100 => 16,  90 => 13,  84 => 12,  75 => 10,  71 => 9,  65 => 8,  56 => 6,  52 => 5,  48 => 4,  42 => 3,  11 => 2,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/htapply.html.twig #}*/
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/accordion.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/boutons.css')}}" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script type="text/javascript" src="{{ asset('js/accordion/accordion.js')}}"></script>*/
/* {% endblock %}*/
/* {% block title %}*/
/*  {{ parent() }}|How to apply*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <script>*/
/*     $(document).ready(function() {*/
/*         var li = document.getElementById('4');*/
/*         $(li).addClass('selected');*/
/*     });*/
/* </script>*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* */
/* {#<h2 style="padding-left: 20px"> How to apply </h2>#}*/
/* <section class="ac-container">*/
/* */
/*     <form method="post" {{ form_enctype(form) }} novalidate="novalidate">*/
/*     {% block field_label %}*/
/*     {% spaceless %}*/
/*         <div>*/
/*             <input id="ac-0" name="accordion-1" type="radio" checked />*/
/*             <label class="newLabel" >How to apply</label>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-1" name="accordion-1" type="radio" checked />*/
/*             <label class="newLabel" for="ac-1">Personal Details*</label>*/
/*             <article class="well personal" >*/
/*                 <div id="personalDetails">*/
/*                     {% for child in form %}*/
/*                         {% if child is not same as (form.academicDetails) */
/*                           and child is not same as (form.professionalExperiences)*/
/*                           and child is not same as (form.languages) */
/*                           and child is not same as (form.technologies) %}*/
/*                             {{ form_row(child) }}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </article>  */
/*         </div>*/
/*         <div>*/
/*             <input id="ac-2" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-2">Academic Details*</label>*/
/*             <article class="well academic" >*/
/*                  {{ form_widget (form.academicDetails) }}*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-3" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-3">Professional Eperience</label>*/
/*             <article class="well professional" >*/
/*                  {{ form_widget(form.professionalExperiences) }}*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-4" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-4">Technologies*</label>*/
/*             <article class="well technologies" >*/
/*                  {{ form_widget(form.technologies) }}*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-5" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-5">Languages*</label>*/
/*             <article class="well languages" >*/
/*                  {{ form_widget(form.languages) }}*/
/*             </article>*/
/*         </div>*/
/*         <input type="submit" class="btn btn-primary" />*/
/*         {% include "TSCandidatBundle:Candidat:formulaire.html.twig"  %}*/
/*         {% endspaceless %}*/
/*     {% endblock field_label %}*/
/*     </form>*/
/* </section>*/
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
