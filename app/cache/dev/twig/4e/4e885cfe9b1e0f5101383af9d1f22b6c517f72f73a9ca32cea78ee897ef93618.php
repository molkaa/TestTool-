<?php

/* TSAdminBundle:Tests:numericTest.html.twig */
class __TwigTemplate_f04c735b283937e0546ca825d89f1523f6965a22e17caacd1c2a69f22b75bbf9 extends Twig_Template
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
        $__internal_bbe80c989386641bd4bf99f4dccf89f74a26331c179d6afc45c23ecea7d64023 = $this->env->getExtension("native_profiler");
        $__internal_bbe80c989386641bd4bf99f4dccf89f74a26331c179d6afc45c23ecea7d64023->enter($__internal_bbe80c989386641bd4bf99f4dccf89f74a26331c179d6afc45c23ecea7d64023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:numericTest.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["separator"] = "+";
        // line 4
        echo "    
<div class=\"form-row\">
    <div class=\"col-md-6\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 8
            echo "            <div class=\"form-label col-md-4\">
                <label for=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "
                </label>
            </div>
            <div class=\"form-input col-md-8\">
                <input disabled placeholder=\"\" class=\"col-md-6\" type=\"text\" name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
            echo "\" id=\"\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</div>";
        
        $__internal_bbe80c989386641bd4bf99f4dccf89f74a26331c179d6afc45c23ecea7d64023->leave($__internal_bbe80c989386641bd4bf99f4dccf89f74a26331c179d6afc45c23ecea7d64023_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:numericTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  50 => 14,  43 => 10,  39 => 9,  36 => 8,  32 => 7,  27 => 4,  25 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/menuTest.html.twig #}*/
/* */
/* {% set separator= "+" %}*/
/*     */
/* <div class="form-row">*/
/*     <div class="col-md-6">*/
/*         {% for response in question.responses %}*/
/*             <div class="form-label col-md-4">*/
/*                 <label for="{{question.id}}">*/
/*                     {{response.response}}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-input col-md-8">*/
/*                 <input disabled placeholder="" class="col-md-6" type="text" name="{{question.id}}{{separator}}{{response.id}}" id="">*/
/*             </div>*/
/*         {%endfor %}*/
/*     </div>*/
/* </div>*/
