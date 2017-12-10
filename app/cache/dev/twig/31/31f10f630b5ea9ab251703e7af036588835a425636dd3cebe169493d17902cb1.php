<?php

/* TSCandidatBundle:Candidat:jeu.html.twig */
class __TwigTemplate_20eafe53c55566f9a1f6d92d8e0e0b01147b4346720754e9ba568176875ac17d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5490a0cdb6197459717a7d3c449eb60565cfda50d5db1a7a1a1041dbadfe44de = $this->env->getExtension("native_profiler");
        $__internal_5490a0cdb6197459717a7d3c449eb60565cfda50d5db1a7a1a1041dbadfe44de->enter($__internal_5490a0cdb6197459717a7d3c449eb60565cfda50d5db1a7a1a1041dbadfe44de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:jeu.html.twig"));

        // line 2
        echo "


    <form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        ";
        // line 6
        $this->displayBlock('field_label', $context, $blocks);
        // line 60
        echo "    </form>
";
        
        $__internal_5490a0cdb6197459717a7d3c449eb60565cfda50d5db1a7a1a1041dbadfe44de->leave($__internal_5490a0cdb6197459717a7d3c449eb60565cfda50d5db1a7a1a1041dbadfe44de_prof);

    }

    // line 6
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_da42469df9fe1a3cab078b2401b1469ea8a283792a7f5c3c12b8c37d30e70594 = $this->env->getExtension("native_profiler");
        $__internal_da42469df9fe1a3cab078b2401b1469ea8a283792a7f5c3c12b8c37d30e70594->enter($__internal_da42469df9fe1a3cab078b2401b1469ea8a283792a7f5c3c12b8c37d30e70594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
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
        // line 19
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "                            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
";
            // line 23
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </div>
            </article>  
        </div>
        <div>
            <input id=\"ac-2\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-2\">Academic Details*</label>
            <article class=\"well academic\" >
";
        // line 32
        echo "            </article>
        </div>
        <div>
            <input id=\"ac-3\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-3\">Professional Eperience</label>
            <article class=\"well academic\" >
";
        // line 39
        echo "            </article>
        </div>
        <div>
            <input id=\"ac-4\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-4\">Technologies*</label>
            <article class=\"ac-large\">
                <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
            </article>
        </div>
        <div>
            <input id=\"ac-5\" name=\"accordion-1\" type=\"radio\" />
            <label class=\"newLabel\" for=\"ac-5\">Languages*</label>
            <article class=\"ac-large\">
                <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
            </article>
        </div>
        <input type=\"submit\"class=\"btn btn-primary\" />
        ";
        // line 56
        $this->loadTemplate("TSCandidatBundle:Candidat:test.html.twig", "TSCandidatBundle:Candidat:jeu.html.twig", 56)->display($context);
        // line 57
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "
    ";
        
        $__internal_da42469df9fe1a3cab078b2401b1469ea8a283792a7f5c3c12b8c37d30e70594->leave($__internal_da42469df9fe1a3cab078b2401b1469ea8a283792a7f5c3c12b8c37d30e70594_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:jeu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  116 => 57,  114 => 56,  95 => 39,  87 => 32,  78 => 24,  72 => 23,  67 => 21,  62 => 19,  51 => 8,  48 => 7,  42 => 6,  34 => 60,  32 => 6,  28 => 5,  23 => 2,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/htapply.html.twig #}*/
/* */
/* */
/* */
/*     <form method="post" {{ form_enctype(form) }}>*/
/*         {% block field_label %}*/
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
/* {#                    and child!=form.professionalExperiences#}*/
/* {#                    child!=form.academicDetails and#}*/
/*                     {% for child in form %}*/
/* {#                        {% if ( child!=form.academicDetails  and child!=form.professionalExperiences )%}#}*/
/*                             {{ form_row(child) }}*/
/* {#                        {% endif %}#}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </article>  */
/*         </div>*/
/*         <div>*/
/*             <input id="ac-2" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-2">Academic Details*</label>*/
/*             <article class="well academic" >*/
/* {#                 {{ form_row (form.academicDetails) }}#}*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-3" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-3">Professional Eperience</label>*/
/*             <article class="well academic" >*/
/* {#                 {{ form_row(form.professionalExperiences) }}#}*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-4" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-4">Technologies*</label>*/
/*             <article class="ac-large">*/
/*                 <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>*/
/*             </article>*/
/*         </div>*/
/*         <div>*/
/*             <input id="ac-5" name="accordion-1" type="radio" />*/
/*             <label class="newLabel" for="ac-5">Languages*</label>*/
/*             <article class="ac-large">*/
/*                 <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>*/
/*             </article>*/
/*         </div>*/
/*         <input type="submit"class="btn btn-primary" />*/
/*         {% include "TSCandidatBundle:Candidat:test.html.twig"  %}*/
/*         {% endspaceless %}*/
/* */
/*     {% endblock field_label %}*/
/*     </form>*/
/* */
