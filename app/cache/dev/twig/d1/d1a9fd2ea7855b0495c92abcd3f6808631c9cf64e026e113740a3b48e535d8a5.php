<?php

/* @TSCandidat/Candidat/home.html.twig */
class __TwigTemplate_2b5177bf24b01de96aa1352801a8e6eaa535b75b83ebb36b28ea90a207626d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/home.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e35f4cc6ac389debfcdd45151faeb2b28d51715e27a8389d6648f880fa390ae = $this->env->getExtension("native_profiler");
        $__internal_9e35f4cc6ac389debfcdd45151faeb2b28d51715e27a8389d6648f880fa390ae->enter($__internal_9e35f4cc6ac389debfcdd45151faeb2b28d51715e27a8389d6648f880fa390ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e35f4cc6ac389debfcdd45151faeb2b28d51715e27a8389d6648f880fa390ae->leave($__internal_9e35f4cc6ac389debfcdd45151faeb2b28d51715e27a8389d6648f880fa390ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ebe8c63e389bc944773952f6e4f1f6a19d2c196fbef48906478af62e6391e36 = $this->env->getExtension("native_profiler");
        $__internal_3ebe8c63e389bc944773952f6e4f1f6a19d2c196fbef48906478af62e6391e36->enter($__internal_3ebe8c63e389bc944773952f6e4f1f6a19d2c196fbef48906478af62e6391e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|home
";
        
        $__internal_3ebe8c63e389bc944773952f6e4f1f6a19d2c196fbef48906478af62e6391e36->leave($__internal_3ebe8c63e389bc944773952f6e4f1f6a19d2c196fbef48906478af62e6391e36_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_9226d0f5f4ad8429845932eb5bc80767f2a55e9b074c6af897a15e5b3ea5d70d = $this->env->getExtension("native_profiler");
        $__internal_9226d0f5f4ad8429845932eb5bc80767f2a55e9b074c6af897a15e5b3ea5d70d->enter($__internal_9226d0f5f4ad8429845932eb5bc80767f2a55e9b074c6af897a15e5b3ea5d70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9226d0f5f4ad8429845932eb5bc80767f2a55e9b074c6af897a15e5b3ea5d70d->leave($__internal_9226d0f5f4ad8429845932eb5bc80767f2a55e9b074c6af897a15e5b3ea5d70d_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_e0a590b0a45d76b0d7b9168209ed09311e9eb01e02df47983dcd0fe11bbd2fa5 = $this->env->getExtension("native_profiler");
        $__internal_e0a590b0a45d76b0d7b9168209ed09311e9eb01e02df47983dcd0fe11bbd2fa5->enter($__internal_e0a590b0a45d76b0d7b9168209ed09311e9eb01e02df47983dcd0fe11bbd2fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 12
        echo "    <script>
        \$(document).ready(function() {
            var li = document.getElementById('1');
            \$(li).addClass('selected');
        });
    </script>
    ";
        // line 18
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_e0a590b0a45d76b0d7b9168209ed09311e9eb01e02df47983dcd0fe11bbd2fa5->leave($__internal_e0a590b0a45d76b0d7b9168209ed09311e9eb01e02df47983dcd0fe11bbd2fa5_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_890675e2dc130ebd2cc6380f6fc4d509c8627a6c68de561dba3481623647445e = $this->env->getExtension("native_profiler");
        $__internal_890675e2dc130ebd2cc6380f6fc4d509c8627a6c68de561dba3481623647445e->enter($__internal_890675e2dc130ebd2cc6380f6fc4d509c8627a6c68de561dba3481623647445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_890675e2dc130ebd2cc6380f6fc4d509c8627a6c68de561dba3481623647445e->leave($__internal_890675e2dc130ebd2cc6380f6fc4d509c8627a6c68de561dba3481623647445e_prof);

    }

    // line 23
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_8c2dc29937b2c04b84865d319699c6bede618cfa2d174035fc13d3223ef2067a = $this->env->getExtension("native_profiler");
        $__internal_8c2dc29937b2c04b84865d319699c6bede618cfa2d174035fc13d3223ef2067a->enter($__internal_8c2dc29937b2c04b84865d319699c6bede618cfa2d174035fc13d3223ef2067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 24
        echo "    <div class=\"article\">
        <div class=\"text_home\">
            SunGard is one of the world’s leading software and technology services companies. 
            Our four businesses serve approximately 25,000 customers in more than 70 countries:
        </div>

        <p style=\"margin: 30px\"> 
            FINANCIAL SYSTEMS:<br>
            We take very seriously our mission to continually improve the software that underpins the world's financial systems. The world's leading financial institutions rely on us.
        </p>
        <p style=\"margin: 30px\"> 
            K-12 EDUCATION:<br>
            SunGard K-12 Education software solutions currently support over 8 million K-12 students in the United States.
        </p>
        <p style=\"margin: 30px\"> 
            PUBLIC SECTOR:<br>
            We help government agencies, including public safety and justice, utilities and non-profits, provide more effective services to their citizens and communities.
        </p>
        <div class=\"clr\"></div>

    </div>
    ";
        // line 45
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_8c2dc29937b2c04b84865d319699c6bede618cfa2d174035fc13d3223ef2067a->leave($__internal_8c2dc29937b2c04b84865d319699c6bede618cfa2d174035fc13d3223ef2067a_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b69020f7d5e30eac9867bcbc233f2582476e39d40cc144d3cec4268631cabf6 = $this->env->getExtension("native_profiler");
        $__internal_9b69020f7d5e30eac9867bcbc233f2582476e39d40cc144d3cec4268631cabf6->enter($__internal_9b69020f7d5e30eac9867bcbc233f2582476e39d40cc144d3cec4268631cabf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_9b69020f7d5e30eac9867bcbc233f2582476e39d40cc144d3cec4268631cabf6->leave($__internal_9b69020f7d5e30eac9867bcbc233f2582476e39d40cc144d3cec4268631cabf6_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 48,  148 => 47,  139 => 45,  116 => 24,  110 => 23,  100 => 21,  94 => 20,  85 => 18,  77 => 12,  71 => 11,  61 => 9,  55 => 8,  45 => 6,  39 => 5,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/home.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     {{ parent() }}|home*/
/* {% endblock %}*/
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             var li = document.getElementById('1');*/
/*             $(li).addClass('selected');*/
/*         });*/
/*     </script>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/*     <div class="article">*/
/*         <div class="text_home">*/
/*             SunGard is one of the world’s leading software and technology services companies. */
/*             Our four businesses serve approximately 25,000 customers in more than 70 countries:*/
/*         </div>*/
/* */
/*         <p style="margin: 30px"> */
/*             FINANCIAL SYSTEMS:<br>*/
/*             We take very seriously our mission to continually improve the software that underpins the world's financial systems. The world's leading financial institutions rely on us.*/
/*         </p>*/
/*         <p style="margin: 30px"> */
/*             K-12 EDUCATION:<br>*/
/*             SunGard K-12 Education software solutions currently support over 8 million K-12 students in the United States.*/
/*         </p>*/
/*         <p style="margin: 30px"> */
/*             PUBLIC SECTOR:<br>*/
/*             We help government agencies, including public safety and justice, utilities and non-profits, provide more effective services to their citizens and communities.*/
/*         </p>*/
/*         <div class="clr"></div>*/
/* */
/*     </div>*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
