<?php

/* @TSAdmin/Tests/oneTest.html.twig */
class __TwigTemplate_4bae9dc5d79332ca96e893f42e749f2319e746bd2b31e70d86fe8a1716487385 extends Twig_Template
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
        $__internal_a99ce9a9da9ecc4490ce347cb377764a9347e68ba248931e061ffa5f45418334 = $this->env->getExtension("native_profiler");
        $__internal_a99ce9a9da9ecc4490ce347cb377764a9347e68ba248931e061ffa5f45418334->enter($__internal_a99ce9a9da9ecc4490ce347cb377764a9347e68ba248931e061ffa5f45418334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/oneTest.html.twig"));

        // line 2
        echo "

<div class=\"form-row pad0B\">
    <div class=\"form-checkbox-radio col-md-12\">
        <div class=\"checkbox-radio disabled\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 8
            echo "                <input value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\" type=\"radio\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                <label for=\"";
            // line 9
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
        // line 12
        echo "        </div>
    </div>
</div>

";
        
        $__internal_a99ce9a9da9ecc4490ce347cb377764a9347e68ba248931e061ffa5f45418334->leave($__internal_a99ce9a9da9ecc4490ce347cb377764a9347e68ba248931e061ffa5f45418334_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/oneTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  40 => 9,  33 => 8,  29 => 7,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/oneTest.html.twig #}*/
/* */
/* */
/* <div class="form-row pad0B">*/
/*     <div class="form-checkbox-radio col-md-12">*/
/*         <div class="checkbox-radio disabled">*/
/*             {% for response in question.responses %}*/
/*                 <input value="{{response.response}}" type="radio" name="{{question.id}}">*/
/*                 <label for="{{question.id}}">{{response.response}}</label>*/
/*                 <br/>*/
/*             {%endfor %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
