<?php

/* TSAdminBundle:Tests:freeTest.html.twig */
class __TwigTemplate_3d0c53bfa4f7bd1a4ff88ccb4a29a5440e7598d16285560c06cdfa63b79c3e8c extends Twig_Template
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
        $__internal_312d161937541ed7faa52a31e33b0ddc03538c5f98f3e22ce03b3c46477420e9 = $this->env->getExtension("native_profiler");
        $__internal_312d161937541ed7faa52a31e33b0ddc03538c5f98f3e22ce03b3c46477420e9->enter($__internal_312d161937541ed7faa52a31e33b0ddc03538c5f98f3e22ce03b3c46477420e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:freeTest.html.twig"));

        // line 2
        echo "

<div class=\"form-row\">
    <div class=\"form-input col-md-12 disabled\">
        <textarea  name=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" >
        </textarea>
    </div>
</div>
";
        
        $__internal_312d161937541ed7faa52a31e33b0ddc03538c5f98f3e22ce03b3c46477420e9->leave($__internal_312d161937541ed7faa52a31e33b0ddc03538c5f98f3e22ce03b3c46477420e9_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:freeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/menuTest.html.twig #}*/
/* */
/* */
/* <div class="form-row">*/
/*     <div class="form-input col-md-12 disabled">*/
/*         <textarea  name="{{question.id}}" >*/
/*         </textarea>*/
/*     </div>*/
/* </div>*/
/* */
