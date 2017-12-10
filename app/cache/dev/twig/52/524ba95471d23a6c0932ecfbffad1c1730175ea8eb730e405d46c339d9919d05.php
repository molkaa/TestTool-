<?php

/* TSAdminBundle:Candidate:checkEditQuestions.html.twig */
class __TwigTemplate_ab158c57da19a794189ad78b8300c8ae7ee801b23f0ee5f3ec379298dfa5c5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "TSAdminBundle:Candidate:checkEditQuestions.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle:Candidate:candidatTests.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b51a589b00840b54cbca13d83fdccc0d01374152ec5f6519d215dfe3c3211030 = $this->env->getExtension("native_profiler");
        $__internal_b51a589b00840b54cbca13d83fdccc0d01374152ec5f6519d215dfe3c3211030->enter($__internal_b51a589b00840b54cbca13d83fdccc0d01374152ec5f6519d215dfe3c3211030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:checkEditQuestions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51a589b00840b54cbca13d83fdccc0d01374152ec5f6519d215dfe3c3211030->leave($__internal_b51a589b00840b54cbca13d83fdccc0d01374152ec5f6519d215dfe3c3211030_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e89de3321e29a186a230e4042612214a4b4638c920e10e55928757df1b7416f7 = $this->env->getExtension("native_profiler");
        $__internal_e89de3321e29a186a230e4042612214a4b4638c920e10e55928757df1b7416f7->enter($__internal_e89de3321e29a186a230e4042612214a4b4638c920e10e55928757df1b7416f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "

    <div class=\"form-row pad0B\">
        <div class=\"form-checkbox-radio col-md-12\">
            <div class=\"checkbox-radio\">
              ";
        // line 13
        echo "            </div>
        </div>
    </div>
    <div class=\"col-md-4 col-md-offset-4\">
        <input href=\"\"  type=\"submit\" value=\"Edit\" name=\"submitAction\" class=\"btn medium primary-bg primary-bg radius-all-4\" />
    </div>

";
        
        $__internal_e89de3321e29a186a230e4042612214a4b4638c920e10e55928757df1b7416f7->leave($__internal_e89de3321e29a186a230e4042612214a4b4638c920e10e55928757df1b7416f7_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:checkEditQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/checkQuestions.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/* {% block content %}*/
/* */
/* */
/*     <div class="form-row pad0B">*/
/*         <div class="form-checkbox-radio col-md-12">*/
/*             <div class="checkbox-radio">*/
/*               {#  {% for number in numbers %}*/
/*                     {{number}} */
/*                     <br/>*/
/*                 {% endfor %}#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-4 col-md-offset-4">*/
/*         <input href=""  type="submit" value="Edit" name="submitAction" class="btn medium primary-bg primary-bg radius-all-4" />*/
/*     </div>*/
/* */
/* {% endblock %}*/
