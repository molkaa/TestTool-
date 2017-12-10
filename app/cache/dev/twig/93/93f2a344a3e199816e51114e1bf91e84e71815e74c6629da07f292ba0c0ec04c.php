<?php

/* @TSAdmin/Candidate/checkEditQuestions.html.twig */
class __TwigTemplate_3cda733b7d8395e7757216505b88c56ba5c43cb9f7da852ecb30c80eb6d296aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "@TSAdmin/Candidate/checkEditQuestions.html.twig", 2);
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
        $__internal_b77bf30c1baf55ed050f12387c22322c777f57d9824753a4d9c95f4a5912af27 = $this->env->getExtension("native_profiler");
        $__internal_b77bf30c1baf55ed050f12387c22322c777f57d9824753a4d9c95f4a5912af27->enter($__internal_b77bf30c1baf55ed050f12387c22322c777f57d9824753a4d9c95f4a5912af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/checkEditQuestions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b77bf30c1baf55ed050f12387c22322c777f57d9824753a4d9c95f4a5912af27->leave($__internal_b77bf30c1baf55ed050f12387c22322c777f57d9824753a4d9c95f4a5912af27_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_11c310461446bc21d47daeff872ed522096e7b907caba1d9a10dd82325dc229f = $this->env->getExtension("native_profiler");
        $__internal_11c310461446bc21d47daeff872ed522096e7b907caba1d9a10dd82325dc229f->enter($__internal_11c310461446bc21d47daeff872ed522096e7b907caba1d9a10dd82325dc229f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_11c310461446bc21d47daeff872ed522096e7b907caba1d9a10dd82325dc229f->leave($__internal_11c310461446bc21d47daeff872ed522096e7b907caba1d9a10dd82325dc229f_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/checkEditQuestions.html.twig";
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
