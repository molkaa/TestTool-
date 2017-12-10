<?php

/* TSCandidatBundle:Candidat:htapply.html.twig */
class __TwigTemplate_054baf015aaea8a261ed72226173b97883a0fd13666ffecf744c4c1fa84c9e81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:htapply.html.twig", 2);
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
        $__internal_494edceea940ac8f48c1242c1b536e57047a2bf9b5e388a2f7e792f1372361d0 = $this->env->getExtension("native_profiler");
        $__internal_494edceea940ac8f48c1242c1b536e57047a2bf9b5e388a2f7e792f1372361d0->enter($__internal_494edceea940ac8f48c1242c1b536e57047a2bf9b5e388a2f7e792f1372361d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:htapply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494edceea940ac8f48c1242c1b536e57047a2bf9b5e388a2f7e792f1372361d0->leave($__internal_494edceea940ac8f48c1242c1b536e57047a2bf9b5e388a2f7e792f1372361d0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4ef4a76a588048825ab960e81b3b737598e427e2faf27bfb4a2cb23a8d8fab7 = $this->env->getExtension("native_profiler");
        $__internal_d4ef4a76a588048825ab960e81b3b737598e427e2faf27bfb4a2cb23a8d8fab7->enter($__internal_d4ef4a76a588048825ab960e81b3b737598e427e2faf27bfb4a2cb23a8d8fab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_d4ef4a76a588048825ab960e81b3b737598e427e2faf27bfb4a2cb23a8d8fab7->leave($__internal_d4ef4a76a588048825ab960e81b3b737598e427e2faf27bfb4a2cb23a8d8fab7_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d91d5b14d82cddace30712a9554e616054143d1473d8d90cff64a21acb5814bc = $this->env->getExtension("native_profiler");
        $__internal_d91d5b14d82cddace30712a9554e616054143d1473d8d90cff64a21acb5814bc->enter($__internal_d91d5b14d82cddace30712a9554e616054143d1473d8d90cff64a21acb5814bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d91d5b14d82cddace30712a9554e616054143d1473d8d90cff64a21acb5814bc->leave($__internal_d91d5b14d82cddace30712a9554e616054143d1473d8d90cff64a21acb5814bc_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b44bd15eb18d5ef27d227be2638476c11a2f2a0e84386f5583695a6ee985ab2 = $this->env->getExtension("native_profiler");
        $__internal_6b44bd15eb18d5ef27d227be2638476c11a2f2a0e84386f5583695a6ee985ab2->enter($__internal_6b44bd15eb18d5ef27d227be2638476c11a2f2a0e84386f5583695a6ee985ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 13
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|How to apply
";
        
        $__internal_6b44bd15eb18d5ef27d227be2638476c11a2f2a0e84386f5583695a6ee985ab2->leave($__internal_6b44bd15eb18d5ef27d227be2638476c11a2f2a0e84386f5583695a6ee985ab2_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_9c708fa53427e0e5bce3b3d91bf662850798579c71269dd0dc26d107a5f4e71a = $this->env->getExtension("native_profiler");
        $__internal_9c708fa53427e0e5bce3b3d91bf662850798579c71269dd0dc26d107a5f4e71a->enter($__internal_9c708fa53427e0e5bce3b3d91bf662850798579c71269dd0dc26d107a5f4e71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9c708fa53427e0e5bce3b3d91bf662850798579c71269dd0dc26d107a5f4e71a->leave($__internal_9c708fa53427e0e5bce3b3d91bf662850798579c71269dd0dc26d107a5f4e71a_prof);

    }

    // line 19
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_e74a88499db16a78b213fd4e05906df2c345433f75661b7d33d0138d0a8688c8 = $this->env->getExtension("native_profiler");
        $__internal_e74a88499db16a78b213fd4e05906df2c345433f75661b7d33d0138d0a8688c8->enter($__internal_e74a88499db16a78b213fd4e05906df2c345433f75661b7d33d0138d0a8688c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_e74a88499db16a78b213fd4e05906df2c345433f75661b7d33d0138d0a8688c8->leave($__internal_e74a88499db16a78b213fd4e05906df2c345433f75661b7d33d0138d0a8688c8_prof);

    }

    // line 28
    public function block_slider($context, array $blocks = array())
    {
        $__internal_5027f352abd43e8f1c24acf9ef788347f07008d41c2abbd01dea15164d4330c5 = $this->env->getExtension("native_profiler");
        $__internal_5027f352abd43e8f1c24acf9ef788347f07008d41c2abbd01dea15164d4330c5->enter($__internal_5027f352abd43e8f1c24acf9ef788347f07008d41c2abbd01dea15164d4330c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 29
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_5027f352abd43e8f1c24acf9ef788347f07008d41c2abbd01dea15164d4330c5->leave($__internal_5027f352abd43e8f1c24acf9ef788347f07008d41c2abbd01dea15164d4330c5_prof);

    }

    // line 31
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_fdac4c94c196a61791bfac7170669ea9a085880041aa62d82dcc2efad9a83aa0 = $this->env->getExtension("native_profiler");
        $__internal_fdac4c94c196a61791bfac7170669ea9a085880041aa62d82dcc2efad9a83aa0->enter($__internal_fdac4c94c196a61791bfac7170669ea9a085880041aa62d82dcc2efad9a83aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
        
        $__internal_fdac4c94c196a61791bfac7170669ea9a085880041aa62d82dcc2efad9a83aa0->leave($__internal_fdac4c94c196a61791bfac7170669ea9a085880041aa62d82dcc2efad9a83aa0_prof);

    }

    // line 37
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_4e4f5f3b4623d7617c351ff182f8c197bd9ce76adfad912a481b457909451611 = $this->env->getExtension("native_profiler");
        $__internal_4e4f5f3b4623d7617c351ff182f8c197bd9ce76adfad912a481b457909451611->enter($__internal_4e4f5f3b4623d7617c351ff182f8c197bd9ce76adfad912a481b457909451611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

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
        $this->loadTemplate("TSCandidatBundle:Candidat:formulaire.html.twig", "TSCandidatBundle:Candidat:htapply.html.twig", 88)->display($context);
        // line 89
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 90
        echo "    ";
        
        $__internal_4e4f5f3b4623d7617c351ff182f8c197bd9ce76adfad912a481b457909451611->leave($__internal_4e4f5f3b4623d7617c351ff182f8c197bd9ce76adfad912a481b457909451611_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c66c451e0c2fc8dfdd27f0e240320738a6f5813dcec0ec5a850349e2532e4a3f = $this->env->getExtension("native_profiler");
        $__internal_c66c451e0c2fc8dfdd27f0e240320738a6f5813dcec0ec5a850349e2532e4a3f->enter($__internal_c66c451e0c2fc8dfdd27f0e240320738a6f5813dcec0ec5a850349e2532e4a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_c66c451e0c2fc8dfdd27f0e240320738a6f5813dcec0ec5a850349e2532e4a3f->leave($__internal_c66c451e0c2fc8dfdd27f0e240320738a6f5813dcec0ec5a850349e2532e4a3f_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:htapply.html.twig";
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
