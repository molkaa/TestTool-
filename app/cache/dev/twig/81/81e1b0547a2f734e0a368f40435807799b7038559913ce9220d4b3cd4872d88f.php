<?php

/* @TSAdmin/Tests/freeTest.html.twig */
class __TwigTemplate_9261313e0bb4228333c9f1e97402b3adfd347954f2c1ddb825b76c0ecbbd7415 extends Twig_Template
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
        $__internal_9185dafc7935c3361aa52c4fd169de269c5d57966340d866428eac71d22da932 = $this->env->getExtension("native_profiler");
        $__internal_9185dafc7935c3361aa52c4fd169de269c5d57966340d866428eac71d22da932->enter($__internal_9185dafc7935c3361aa52c4fd169de269c5d57966340d866428eac71d22da932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/freeTest.html.twig"));

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
        
        $__internal_9185dafc7935c3361aa52c4fd169de269c5d57966340d866428eac71d22da932->leave($__internal_9185dafc7935c3361aa52c4fd169de269c5d57966340d866428eac71d22da932_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/freeTest.html.twig";
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
