<?php

/* @TSAdmin/Candidate/checkQuestions.html.twig */
class __TwigTemplate_921e7a8e722c9dcbc0adc1e11c11fe7c2236308134475a2c2b90493333063dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "@TSAdmin/Candidate/checkQuestions.html.twig", 2);
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
        $__internal_4ba69b102affba4e1251d2fab75b66fd31359090c2206eb366743f400e49e9ae = $this->env->getExtension("native_profiler");
        $__internal_4ba69b102affba4e1251d2fab75b66fd31359090c2206eb366743f400e49e9ae->enter($__internal_4ba69b102affba4e1251d2fab75b66fd31359090c2206eb366743f400e49e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/checkQuestions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba69b102affba4e1251d2fab75b66fd31359090c2206eb366743f400e49e9ae->leave($__internal_4ba69b102affba4e1251d2fab75b66fd31359090c2206eb366743f400e49e9ae_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a784d58cc7dc8c6dd56b0e2477541cf667d9c0c2401c4b955374be49237c239 = $this->env->getExtension("native_profiler");
        $__internal_6a784d58cc7dc8c6dd56b0e2477541cf667d9c0c2401c4b955374be49237c239->enter($__internal_6a784d58cc7dc8c6dd56b0e2477541cf667d9c0c2401c4b955374be49237c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " 
    <form class=\"col-md-10 center-margin\" method=\"post\" >
        <div class=\"form-row pad0B\">
            <div class=\"form-checkbox-radio col-md-12\">
                <div class=\"checkbox-radio\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["numbers"]) ? $context["numbers"] : $this->getContext($context, "numbers")));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 10
            echo "                        ";
            echo twig_escape_filter($this->env, $context["number"], "html", null, true);
            echo " 
                        <br/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-4 col-md-offset-4\">
            <input href=\"\"  type=\"submit\" value=\"Edit\" name=\"submitAction\" class=\"btn medium primary-bg primary-bg radius-all-4\" />
        </div>
        <br/>        
        <br/>
        <br/>
    </form>
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ts_admin_persistCandidateTests");
        echo "\" class=\"btn medium primary-bg col-md-4 col-md-offset-4\" title=\"\">
        <span class=\"button-content\">submit</span>
    </a>
";
        
        $__internal_6a784d58cc7dc8c6dd56b0e2477541cf667d9c0c2401c4b955374be49237c239->leave($__internal_6a784d58cc7dc8c6dd56b0e2477541cf667d9c0c2401c4b955374be49237c239_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/checkQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  61 => 13,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Candidate/checkQuestions.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/* {% block content %}*/
/*  */
/*     <form class="col-md-10 center-margin" method="post" >*/
/*         <div class="form-row pad0B">*/
/*             <div class="form-checkbox-radio col-md-12">*/
/*                 <div class="checkbox-radio">*/
/*                     {% for number in numbers %}*/
/*                         {{number}} */
/*                         <br/>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4 col-md-offset-4">*/
/*             <input href=""  type="submit" value="Edit" name="submitAction" class="btn medium primary-bg primary-bg radius-all-4" />*/
/*         </div>*/
/*         <br/>        */
/*         <br/>*/
/*         <br/>*/
/*     </form>*/
/*     <a href="{{ path('ts_admin_persistCandidateTests')}}" class="btn medium primary-bg col-md-4 col-md-offset-4" title="">*/
/*         <span class="button-content">submit</span>*/
/*     </a>*/
/* {% endblock %}*/
