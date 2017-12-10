<?php

/* TSAdminBundle:Tests:oneTest.html.twig */
class __TwigTemplate_6aabc0a24b658e44c5a671ca3f2e8303450410f97b3c34776a1d339145340224 extends Twig_Template
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
        $__internal_0d71181f02c41119f66791c40a02c46489f7b26b2f4fa0bdd02cdeaac9406703 = $this->env->getExtension("native_profiler");
        $__internal_0d71181f02c41119f66791c40a02c46489f7b26b2f4fa0bdd02cdeaac9406703->enter($__internal_0d71181f02c41119f66791c40a02c46489f7b26b2f4fa0bdd02cdeaac9406703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:oneTest.html.twig"));

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
        
        $__internal_0d71181f02c41119f66791c40a02c46489f7b26b2f4fa0bdd02cdeaac9406703->leave($__internal_0d71181f02c41119f66791c40a02c46489f7b26b2f4fa0bdd02cdeaac9406703_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:oneTest.html.twig";
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
