<?php

/* @TSCandidat/Candidat/editForm.html.twig */
class __TwigTemplate_a48b9608ec81d91c23ec0fe7a60efe1ee4cac62eb791a877b4e8f23d8449193c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/editForm.html.twig", 3);
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
        $__internal_5f54a2aecab0da412f0be5cb9bdb7a03138aab3c747dc34e057014a1ec9b5e8d = $this->env->getExtension("native_profiler");
        $__internal_5f54a2aecab0da412f0be5cb9bdb7a03138aab3c747dc34e057014a1ec9b5e8d->enter($__internal_5f54a2aecab0da412f0be5cb9bdb7a03138aab3c747dc34e057014a1ec9b5e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/editForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f54a2aecab0da412f0be5cb9bdb7a03138aab3c747dc34e057014a1ec9b5e8d->leave($__internal_5f54a2aecab0da412f0be5cb9bdb7a03138aab3c747dc34e057014a1ec9b5e8d_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47965627a679fb32bc9a8f95520c97db61fe651cd956060ef7b447cab5439d2b = $this->env->getExtension("native_profiler");
        $__internal_47965627a679fb32bc9a8f95520c97db61fe651cd956060ef7b447cab5439d2b->enter($__internal_47965627a679fb32bc9a8f95520c97db61fe651cd956060ef7b447cab5439d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/accordion.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_47965627a679fb32bc9a8f95520c97db61fe651cd956060ef7b447cab5439d2b->leave($__internal_47965627a679fb32bc9a8f95520c97db61fe651cd956060ef7b447cab5439d2b_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cfbb98c1fd2b5d0bd83430c39ed1dfb0428ab85123a4ac6e23145b2e6d61b8bb = $this->env->getExtension("native_profiler");
        $__internal_cfbb98c1fd2b5d0bd83430c39ed1dfb0428ab85123a4ac6e23145b2e6d61b8bb->enter($__internal_cfbb98c1fd2b5d0bd83430c39ed1dfb0428ab85123a4ac6e23145b2e6d61b8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cfbb98c1fd2b5d0bd83430c39ed1dfb0428ab85123a4ac6e23145b2e6d61b8bb->leave($__internal_cfbb98c1fd2b5d0bd83430c39ed1dfb0428ab85123a4ac6e23145b2e6d61b8bb_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_926034010b2babb39b22efa04e4bd339ad092ab3cb45bf03aa66ed09da5d500d = $this->env->getExtension("native_profiler");
        $__internal_926034010b2babb39b22efa04e4bd339ad092ab3cb45bf03aa66ed09da5d500d->enter($__internal_926034010b2babb39b22efa04e4bd339ad092ab3cb45bf03aa66ed09da5d500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|edit
";
        
        $__internal_926034010b2babb39b22efa04e4bd339ad092ab3cb45bf03aa66ed09da5d500d->leave($__internal_926034010b2babb39b22efa04e4bd339ad092ab3cb45bf03aa66ed09da5d500d_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_894ee6c62e4756dda3d4916928f79bbea1775246d67dad8b68a07f4bb62adf20 = $this->env->getExtension("native_profiler");
        $__internal_894ee6c62e4756dda3d4916928f79bbea1775246d67dad8b68a07f4bb62adf20->enter($__internal_894ee6c62e4756dda3d4916928f79bbea1775246d67dad8b68a07f4bb62adf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_894ee6c62e4756dda3d4916928f79bbea1775246d67dad8b68a07f4bb62adf20->leave($__internal_894ee6c62e4756dda3d4916928f79bbea1775246d67dad8b68a07f4bb62adf20_prof);

    }

    // line 19
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_073e0835c3015f668691613ac61038e00ac8fdc8eb603889e0a806e934387985 = $this->env->getExtension("native_profiler");
        $__internal_073e0835c3015f668691613ac61038e00ac8fdc8eb603889e0a806e934387985->enter($__internal_073e0835c3015f668691613ac61038e00ac8fdc8eb603889e0a806e934387985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 20
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_073e0835c3015f668691613ac61038e00ac8fdc8eb603889e0a806e934387985->leave($__internal_073e0835c3015f668691613ac61038e00ac8fdc8eb603889e0a806e934387985_prof);

    }

    // line 22
    public function block_slider($context, array $blocks = array())
    {
        $__internal_94f3c96b4fd6060311b8474f5be2b70770cac9bc4a900b420f6f58cb2d9d67ec = $this->env->getExtension("native_profiler");
        $__internal_94f3c96b4fd6060311b8474f5be2b70770cac9bc4a900b420f6f58cb2d9d67ec->enter($__internal_94f3c96b4fd6060311b8474f5be2b70770cac9bc4a900b420f6f58cb2d9d67ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 23
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_94f3c96b4fd6060311b8474f5be2b70770cac9bc4a900b420f6f58cb2d9d67ec->leave($__internal_94f3c96b4fd6060311b8474f5be2b70770cac9bc4a900b420f6f58cb2d9d67ec_prof);

    }

    // line 25
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_9435e9a44cebb1da7e02061c8c47d794a4e112319308e48537f9d77407c1f610 = $this->env->getExtension("native_profiler");
        $__internal_9435e9a44cebb1da7e02061c8c47d794a4e112319308e48537f9d77407c1f610->enter($__internal_9435e9a44cebb1da7e02061c8c47d794a4e112319308e48537f9d77407c1f610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 26
        echo "
<section class=\"ac-container\">

    <form method=\"post\" ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate=\"novalidate\">
    ";
        // line 30
        $this->displayBlock('field_label', $context, $blocks);
        // line 89
        echo "    </form>
</section>
";
        // line 91
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "

";
        
        $__internal_9435e9a44cebb1da7e02061c8c47d794a4e112319308e48537f9d77407c1f610->leave($__internal_9435e9a44cebb1da7e02061c8c47d794a4e112319308e48537f9d77407c1f610_prof);

    }

    // line 30
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_1e17b6bbcab72781cbf9a7640a5daa10bb9205c7db4a12e970b20bece51357c0 = $this->env->getExtension("native_profiler");
        $__internal_1e17b6bbcab72781cbf9a7640a5daa10bb9205c7db4a12e970b20bece51357c0->enter($__internal_1e17b6bbcab72781cbf9a7640a5daa10bb9205c7db4a12e970b20bece51357c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 31
        echo "    ";
        ob_start();
        // line 32
        echo "        <div>
            <input id=\"ac-0\" name=\"accordion-1\" type=\"radio\" checked />
            <label class=\"newLabel\" >Edit</label>
        </div>
        <div>
            <input id=\"ac-1\" name=\"accordion-1\" type=\"radio\" checked />
            <label class=\"newLabel\" for=\"ac-1\">Personal Details*</label>
            <article class=\"well personal\" >
                <div id=\"personalDetails\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "                        ";
            if (((( !($context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "academicDetails", array())) &&  !(            // line 43
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "professionalExperiences", array()))) &&  !(            // line 44
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()))) &&  !(            // line 45
$context["child"] === $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array())))) {
                // line 46
                echo "                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
                        ";
            }
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                 ";
        // line 54
        echo "                </div>
            </article>  
        </div>
        <div>
            <input id=\"ac-2\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-2\">Academic Details*</label>
            <article class=\"well academic\" >
                 ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "academicDetails", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-3\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-3\">Professional Eperience</label>
            <article class=\"well professional\" >
                 ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "professionalExperiences", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-4\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-4\">Technologies*</label>
            <article class=\"well technologies\" >
                 ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "technologies", array()), 'widget');
        echo "
            </article>
        </div>
        <div>
            <input id=\"ac-5\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-5\">Languages*</label>
            <article class=\"well languages\" >
                 ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget');
        echo "
            </article>
        </div>
        <input type=\"submit\" class=\"btn btn-primary\" />
        ";
        // line 86
        $this->loadTemplate("TSCandidatBundle:Candidat:formulaire.html.twig", "@TSCandidat/Candidat/editForm.html.twig", 86)->display($context);
        // line 87
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 88
        echo "    ";
        
        $__internal_1e17b6bbcab72781cbf9a7640a5daa10bb9205c7db4a12e970b20bece51357c0->leave($__internal_1e17b6bbcab72781cbf9a7640a5daa10bb9205c7db4a12e970b20bece51357c0_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5f80817c78d9ebfd14183f7c95289892c61c10149eab4b9b2567da1eea6c99d5 = $this->env->getExtension("native_profiler");
        $__internal_5f80817c78d9ebfd14183f7c95289892c61c10149eab4b9b2567da1eea6c99d5->enter($__internal_5f80817c78d9ebfd14183f7c95289892c61c10149eab4b9b2567da1eea6c99d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 95
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_5f80817c78d9ebfd14183f7c95289892c61c10149eab4b9b2567da1eea6c99d5->leave($__internal_5f80817c78d9ebfd14183f7c95289892c61c10149eab4b9b2567da1eea6c99d5_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/editForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 95,  279 => 94,  272 => 88,  269 => 87,  267 => 86,  260 => 82,  250 => 75,  240 => 68,  230 => 61,  221 => 54,  219 => 49,  213 => 48,  207 => 46,  205 => 45,  204 => 44,  203 => 43,  201 => 42,  197 => 41,  186 => 32,  183 => 31,  177 => 30,  167 => 91,  163 => 89,  161 => 30,  157 => 29,  152 => 26,  146 => 25,  137 => 23,  131 => 22,  122 => 20,  116 => 19,  106 => 17,  100 => 16,  90 => 14,  84 => 13,  75 => 11,  71 => 10,  65 => 9,  56 => 7,  52 => 6,  48 => 5,  42 => 4,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/htapply.html.twig #}*/
/* */
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
/*  {{ parent() }}|edit*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* {{parent () }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* */
/* <section class="ac-container">*/
/* */
/*     <form method="post" {{ form_enctype(form) }} novalidate="novalidate">*/
/*     {% block field_label %}*/
/*     {% spaceless %}*/
/*         <div>*/
/*             <input id="ac-0" name="accordion-1" type="radio" checked />*/
/*             <label class="newLabel" >Edit</label>*/
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
/*                  {#    {% if candidat.picture is null%}*/
/*                     <img width="36" src="{{ asset(candidat.picture.webPath) }}" alt="{{ candidat.picture.name }}">*/
/*                   {% else %}*/
/*                     <img width="36" src="/TunisiaSite/web/images/profile.png"  >*/
/*                   {% endif%}#}*/
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
/* */
/* */
/* */
