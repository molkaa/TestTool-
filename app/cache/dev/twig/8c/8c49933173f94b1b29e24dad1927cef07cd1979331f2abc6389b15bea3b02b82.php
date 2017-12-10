<?php

/* TSAdminBundle:Candidate:CandidateEditTest.html.twig */
class __TwigTemplate_d183bc2fe81d340cde859ad7e2177a3f6608093fd9bc7067d891fa8a8054cff6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 2);
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
        $__internal_3262188c110c3332fd87bd1d1cb5cc9b3ffae5de6f74debf3eb038155116a672 = $this->env->getExtension("native_profiler");
        $__internal_3262188c110c3332fd87bd1d1cb5cc9b3ffae5de6f74debf3eb038155116a672->enter($__internal_3262188c110c3332fd87bd1d1cb5cc9b3ffae5de6f74debf3eb038155116a672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Candidate:CandidateEditTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3262188c110c3332fd87bd1d1cb5cc9b3ffae5de6f74debf3eb038155116a672->leave($__internal_3262188c110c3332fd87bd1d1cb5cc9b3ffae5de6f74debf3eb038155116a672_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3be23e4f637cd2535fe5416317bd28eaa2e7f7d7e12dd80927a83be86257908d = $this->env->getExtension("native_profiler");
        $__internal_3be23e4f637cd2535fe5416317bd28eaa2e7f7d7e12dd80927a83be86257908d->enter($__internal_3be23e4f637cd2535fe5416317bd28eaa2e7f7d7e12dd80927a83be86257908d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row \">

        <div class=\"col-md-12\" style=\"margin-top:20px\">
            <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
                <h3 class=\"content-header\">
                    <span> <b> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " Edit </b></span>
                </h3>
                <div class=\"content-box-wrapper\">
                    <form class=\"col-md-10 center-margin\" method=\"post\" >
                        ";
        // line 15
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ques"]) ? $context["ques"] : $this->getContext($context, "ques")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 16
            echo "                            ";
            echo twig_escape_filter($this->env, $context["question"], "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 19
            echo "                            ";
            if (($this->getAttribute($context["question"], "type", array()) == "one")) {
                // line 20
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:oneEditTest.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 20)->display($context);
                // line 21
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "many")) {
                // line 22
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:manyEditTest.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 22)->display($context);
                // line 23
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "menu")) {
                // line 24
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:menuEditTest.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 24)->display($context);
                // line 25
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "numeric")) {
                // line 26
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:numericEditTest.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 26)->display($context);
                // line 27
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "free")) {
                // line 28
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:freeEditTest.html.twig", "TSAdminBundle:Candidate:CandidateEditTest.html.twig", 28)->display($context);
                // line 29
                echo "                            ";
            }
            // line 30
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        ";
        // line 34
        echo "                        <div class=\"form-row\">
                            <div class=\"divider\" ></div>
                            <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                            <div class=\"col-md-4 col-md-offset-4\">
                                <input type=\"submit\" value=\"Submit\" name=\"submitEdit\" class=\"btn medium primary-bg radius-all-4\" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_3be23e4f637cd2535fe5416317bd28eaa2e7f7d7e12dd80927a83be86257908d->leave($__internal_3be23e4f637cd2535fe5416317bd28eaa2e7f7d7e12dd80927a83be86257908d_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Candidate:CandidateEditTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  134 => 31,  120 => 30,  117 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  69 => 18,  60 => 16,  55 => 15,  48 => 10,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/CandidateEditTest.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/* {% block content %}*/
/* */
/*     <div class="row ">*/
/* */
/*         <div class="col-md-12" style="margin-top:20px">*/
/*             <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*                 <h3 class="content-header">*/
/*                     <span> <b> {{name}} Edit </b></span>*/
/*                 </h3>*/
/*                 <div class="content-box-wrapper">*/
/*                     <form class="col-md-10 center-margin" method="post" >*/
/*                         {#                //************************************************#}*/
/*                         {% for question in ques %}*/
/*                             {{question}}*/
/*                         {% endfor %}*/
/*                         {% for question in questions %}*/
/*                             {% if question.type == ('one') %}*/
/*                                 {% include "TSAdminBundle:Candidate:oneEditTest.html.twig" %}*/
/*                             {% elseif question.type == ('many') %}*/
/*                                 {% include "TSAdminBundle:Candidate:manyEditTest.html.twig" %}*/
/*                             {% elseif question.type == ('menu') %}*/
/*                                 {% include "TSAdminBundle:Candidate:menuEditTest.html.twig" %}*/
/*                             {% elseif question.type == ('numeric') %}*/
/*                                 {% include "TSAdminBundle:Candidate:numericEditTest.html.twig" %}*/
/*                             {% elseif question.type == ('free') %}*/
/*                                 {% include "TSAdminBundle:Candidate:freeEditTest.html.twig" %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         {#                //******************/
/*                         */
/*                         *******************************#}*/
/*                         <div class="form-row">*/
/*                             <div class="divider" ></div>*/
/*                             <input type="hidden" name="superhidden" id="superhidden">*/
/*                             <div class="col-md-4 col-md-offset-4">*/
/*                                 <input type="submit" value="Submit" name="submitEdit" class="btn medium primary-bg radius-all-4" />*/
/*                             </div>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
