<?php

/* TSCandidatBundle:Candidat:editForm.html.twig */
class __TwigTemplate_29ee43fa7895a9f7e310fb5494080f4a321b5ec5eab965905a00f9601ce41f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:editForm.html.twig", 3);
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
        $__internal_3d0b1f095c6e45732a1760f96400ad20a6b9c974245a18279b435a1a78342741 = $this->env->getExtension("native_profiler");
        $__internal_3d0b1f095c6e45732a1760f96400ad20a6b9c974245a18279b435a1a78342741->enter($__internal_3d0b1f095c6e45732a1760f96400ad20a6b9c974245a18279b435a1a78342741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:editForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0b1f095c6e45732a1760f96400ad20a6b9c974245a18279b435a1a78342741->leave($__internal_3d0b1f095c6e45732a1760f96400ad20a6b9c974245a18279b435a1a78342741_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4c1b16e46a0d78ffe69cce6d0b956a5d5068299bcb5b457f2d66f3f0618e027 = $this->env->getExtension("native_profiler");
        $__internal_e4c1b16e46a0d78ffe69cce6d0b956a5d5068299bcb5b457f2d66f3f0618e027->enter($__internal_e4c1b16e46a0d78ffe69cce6d0b956a5d5068299bcb5b457f2d66f3f0618e027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e4c1b16e46a0d78ffe69cce6d0b956a5d5068299bcb5b457f2d66f3f0618e027->leave($__internal_e4c1b16e46a0d78ffe69cce6d0b956a5d5068299bcb5b457f2d66f3f0618e027_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3031d16811eb1212f2b58ac1c2c501fe8022ca93238d51b0ae484fc62b9265b7 = $this->env->getExtension("native_profiler");
        $__internal_3031d16811eb1212f2b58ac1c2c501fe8022ca93238d51b0ae484fc62b9265b7->enter($__internal_3031d16811eb1212f2b58ac1c2c501fe8022ca93238d51b0ae484fc62b9265b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3031d16811eb1212f2b58ac1c2c501fe8022ca93238d51b0ae484fc62b9265b7->leave($__internal_3031d16811eb1212f2b58ac1c2c501fe8022ca93238d51b0ae484fc62b9265b7_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d6c4dee9b6ddf69a1b90f897ee9f53b9f8eed7e4522c7144508f6d031eaa743 = $this->env->getExtension("native_profiler");
        $__internal_6d6c4dee9b6ddf69a1b90f897ee9f53b9f8eed7e4522c7144508f6d031eaa743->enter($__internal_6d6c4dee9b6ddf69a1b90f897ee9f53b9f8eed7e4522c7144508f6d031eaa743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|edit
";
        
        $__internal_6d6c4dee9b6ddf69a1b90f897ee9f53b9f8eed7e4522c7144508f6d031eaa743->leave($__internal_6d6c4dee9b6ddf69a1b90f897ee9f53b9f8eed7e4522c7144508f6d031eaa743_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_bfa067af7c96ad70f24ef321ed1b676322863e99b79ad8960322c60e7de5257a = $this->env->getExtension("native_profiler");
        $__internal_bfa067af7c96ad70f24ef321ed1b676322863e99b79ad8960322c60e7de5257a->enter($__internal_bfa067af7c96ad70f24ef321ed1b676322863e99b79ad8960322c60e7de5257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_bfa067af7c96ad70f24ef321ed1b676322863e99b79ad8960322c60e7de5257a->leave($__internal_bfa067af7c96ad70f24ef321ed1b676322863e99b79ad8960322c60e7de5257a_prof);

    }

    // line 19
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_a297fff628c2cff90f99cbd881604759d9c959f8d831c056ff51e8262de84922 = $this->env->getExtension("native_profiler");
        $__internal_a297fff628c2cff90f99cbd881604759d9c959f8d831c056ff51e8262de84922->enter($__internal_a297fff628c2cff90f99cbd881604759d9c959f8d831c056ff51e8262de84922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 20
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_a297fff628c2cff90f99cbd881604759d9c959f8d831c056ff51e8262de84922->leave($__internal_a297fff628c2cff90f99cbd881604759d9c959f8d831c056ff51e8262de84922_prof);

    }

    // line 22
    public function block_slider($context, array $blocks = array())
    {
        $__internal_37f70cae9f4aae79e7c9d0cb8930da0baf43916ea73993921fd757160944288c = $this->env->getExtension("native_profiler");
        $__internal_37f70cae9f4aae79e7c9d0cb8930da0baf43916ea73993921fd757160944288c->enter($__internal_37f70cae9f4aae79e7c9d0cb8930da0baf43916ea73993921fd757160944288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 23
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_37f70cae9f4aae79e7c9d0cb8930da0baf43916ea73993921fd757160944288c->leave($__internal_37f70cae9f4aae79e7c9d0cb8930da0baf43916ea73993921fd757160944288c_prof);

    }

    // line 25
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_dc6ea570f8058f93ab4b095a4243b2a85097a8768d5c9868c194bf774f408b03 = $this->env->getExtension("native_profiler");
        $__internal_dc6ea570f8058f93ab4b095a4243b2a85097a8768d5c9868c194bf774f408b03->enter($__internal_dc6ea570f8058f93ab4b095a4243b2a85097a8768d5c9868c194bf774f408b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
        
        $__internal_dc6ea570f8058f93ab4b095a4243b2a85097a8768d5c9868c194bf774f408b03->leave($__internal_dc6ea570f8058f93ab4b095a4243b2a85097a8768d5c9868c194bf774f408b03_prof);

    }

    // line 30
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_840fff39982f3d271b28bd18e8df742a911625e945bb3e8955072d0c1b9e223f = $this->env->getExtension("native_profiler");
        $__internal_840fff39982f3d271b28bd18e8df742a911625e945bb3e8955072d0c1b9e223f->enter($__internal_840fff39982f3d271b28bd18e8df742a911625e945bb3e8955072d0c1b9e223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

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
        $this->loadTemplate("TSCandidatBundle:Candidat:formulaire.html.twig", "TSCandidatBundle:Candidat:editForm.html.twig", 86)->display($context);
        // line 87
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 88
        echo "    ";
        
        $__internal_840fff39982f3d271b28bd18e8df742a911625e945bb3e8955072d0c1b9e223f->leave($__internal_840fff39982f3d271b28bd18e8df742a911625e945bb3e8955072d0c1b9e223f_prof);

    }

    // line 94
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1e4479e78e4df853a08e7039b45a5bef11c56f5d12f5f14f1e1f7b5580a5e213 = $this->env->getExtension("native_profiler");
        $__internal_1e4479e78e4df853a08e7039b45a5bef11c56f5d12f5f14f1e1f7b5580a5e213->enter($__internal_1e4479e78e4df853a08e7039b45a5bef11c56f5d12f5f14f1e1f7b5580a5e213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 95
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_1e4479e78e4df853a08e7039b45a5bef11c56f5d12f5f14f1e1f7b5580a5e213->leave($__internal_1e4479e78e4df853a08e7039b45a5bef11c56f5d12f5f14f1e1f7b5580a5e213_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:editForm.html.twig";
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
