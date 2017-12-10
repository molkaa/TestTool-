<?php

/* @TSAdmin/Tests/manyTest.html.twig */
class __TwigTemplate_7f8def57ef76ebf844a8408be1f47fec6f1fa112d6963e0335e8270e99d596cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c54c3cc7350b9c370ef8aafc6ad846edd4812260393a7c5492b720000b7c8370 = $this->env->getExtension("native_profiler");
        $__internal_c54c3cc7350b9c370ef8aafc6ad846edd4812260393a7c5492b720000b7c8370->enter($__internal_c54c3cc7350b9c370ef8aafc6ad846edd4812260393a7c5492b720000b7c8370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/manyTest.html.twig"));

        // line 2
        echo "

<div class=\"form-row pad0B\">

    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio disabled\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 9
            echo "                <input value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "[]\">
                <label for=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</label>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</div>

";
        
        $__internal_c54c3cc7350b9c370ef8aafc6ad846edd4812260393a7c5492b720000b7c8370->leave($__internal_c54c3cc7350b9c370ef8aafc6ad846edd4812260393a7c5492b720000b7c8370_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/manyTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  41 => 10,  34 => 9,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/manyTest.html.twig #}*/
/* */
/* */
/* <div class="form-row pad0B">*/
/* */
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio disabled">*/
/*             {% for response in question.responses %}*/
/*                 <input value="{{response.response}}" type="checkbox" name="{{question.id}}[]">*/
/*                 <label for="{{question.id}}">{{response.response}}</label>*/
/*                 <br/>*/
/*             {%endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
