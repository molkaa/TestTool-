<?php

/* @TSAdmin/Tests/menuTest.html.twig */
class __TwigTemplate_917e644dcb89e758a55779f06ea36b58c9d07e5c47cd2859a3e0ba9d07b9798d extends Twig_Template
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
        $__internal_01222e12d465e5bfeb0b82d213890f4c6cdb66e06b90ba37ff3698ad9c676b8c = $this->env->getExtension("native_profiler");
        $__internal_01222e12d465e5bfeb0b82d213890f4c6cdb66e06b90ba37ff3698ad9c676b8c->enter($__internal_01222e12d465e5bfeb0b82d213890f4c6cdb66e06b90ba37ff3698ad9c676b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/menuTest.html.twig"));

        // line 2
        echo "


<div class=\"form-row pad0B\">
    <div class=\"form-input col-md-6\">
        <select  multiple name=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "[]\" class=\"chosen-select disabled\">
            <option> </option>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 10
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </select>
    </div>
</div>
<br/>
";
        
        $__internal_01222e12d465e5bfeb0b82d213890f4c6cdb66e06b90ba37ff3698ad9c676b8c->leave($__internal_01222e12d465e5bfeb0b82d213890f4c6cdb66e06b90ba37ff3698ad9c676b8c_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/menuTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  38 => 10,  34 => 9,  29 => 7,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/menuTest.html.twig #}*/
/* */
/* */
/* */
/* <div class="form-row pad0B">*/
/*     <div class="form-input col-md-6">*/
/*         <select  multiple name="{{question.id}}[]" class="chosen-select disabled">*/
/*             <option> </option>*/
/*             {%for response in question.responses%}*/
/*                 <option value="{{response.response}}">{{response.response}}</option>*/
/*             {%endfor %}*/
/*         </select>*/
/*     </div>*/
/* </div>*/
/* <br/>*/
/* */