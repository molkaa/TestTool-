<?php

/* TSCandidatBundle:Candidat:home.html.twig */
class __TwigTemplate_e33dcd418e45d547bd8f6058860c23cd57133caf77dc3cbb985ea6ad3acf9458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:home.html.twig", 3);
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
        $__internal_9e38302d260b658a79a62586e333155cc21cac09049f42a63216cf23737059eb = $this->env->getExtension("native_profiler");
        $__internal_9e38302d260b658a79a62586e333155cc21cac09049f42a63216cf23737059eb->enter($__internal_9e38302d260b658a79a62586e333155cc21cac09049f42a63216cf23737059eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e38302d260b658a79a62586e333155cc21cac09049f42a63216cf23737059eb->leave($__internal_9e38302d260b658a79a62586e333155cc21cac09049f42a63216cf23737059eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7210b3c62ee2d744dbcdf2a6fe91cb2aa96e4b3929488e88ae34e1b5cb5358d3 = $this->env->getExtension("native_profiler");
        $__internal_7210b3c62ee2d744dbcdf2a6fe91cb2aa96e4b3929488e88ae34e1b5cb5358d3->enter($__internal_7210b3c62ee2d744dbcdf2a6fe91cb2aa96e4b3929488e88ae34e1b5cb5358d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|home
";
        
        $__internal_7210b3c62ee2d744dbcdf2a6fe91cb2aa96e4b3929488e88ae34e1b5cb5358d3->leave($__internal_7210b3c62ee2d744dbcdf2a6fe91cb2aa96e4b3929488e88ae34e1b5cb5358d3_prof);

    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e767c4687398813d2febee2572b07abab451fb6d4298519a4cca6accdcc4b2d = $this->env->getExtension("native_profiler");
        $__internal_0e767c4687398813d2febee2572b07abab451fb6d4298519a4cca6accdcc4b2d->enter($__internal_0e767c4687398813d2febee2572b07abab451fb6d4298519a4cca6accdcc4b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 9
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_0e767c4687398813d2febee2572b07abab451fb6d4298519a4cca6accdcc4b2d->leave($__internal_0e767c4687398813d2febee2572b07abab451fb6d4298519a4cca6accdcc4b2d_prof);

    }

    // line 11
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_39ddca612a81528f6ffc21a1c923678ef7b5645f2d6a0d1048bdd0d24be9390a = $this->env->getExtension("native_profiler");
        $__internal_39ddca612a81528f6ffc21a1c923678ef7b5645f2d6a0d1048bdd0d24be9390a->enter($__internal_39ddca612a81528f6ffc21a1c923678ef7b5645f2d6a0d1048bdd0d24be9390a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_39ddca612a81528f6ffc21a1c923678ef7b5645f2d6a0d1048bdd0d24be9390a->leave($__internal_39ddca612a81528f6ffc21a1c923678ef7b5645f2d6a0d1048bdd0d24be9390a_prof);

    }

    // line 20
    public function block_slider($context, array $blocks = array())
    {
        $__internal_1d6cde501a8d522d55cfb4133cc76acfe609ed2a691b6b93b2250fc2782a208d = $this->env->getExtension("native_profiler");
        $__internal_1d6cde501a8d522d55cfb4133cc76acfe609ed2a691b6b93b2250fc2782a208d->enter($__internal_1d6cde501a8d522d55cfb4133cc76acfe609ed2a691b6b93b2250fc2782a208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 21
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_1d6cde501a8d522d55cfb4133cc76acfe609ed2a691b6b93b2250fc2782a208d->leave($__internal_1d6cde501a8d522d55cfb4133cc76acfe609ed2a691b6b93b2250fc2782a208d_prof);

    }

    // line 23
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_50d4516d9c0835822a7db3152790f0e0c9a78947c289026be735358e2fd50a94 = $this->env->getExtension("native_profiler");
        $__internal_50d4516d9c0835822a7db3152790f0e0c9a78947c289026be735358e2fd50a94->enter($__internal_50d4516d9c0835822a7db3152790f0e0c9a78947c289026be735358e2fd50a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
        
        $__internal_50d4516d9c0835822a7db3152790f0e0c9a78947c289026be735358e2fd50a94->leave($__internal_50d4516d9c0835822a7db3152790f0e0c9a78947c289026be735358e2fd50a94_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd8df202b033f8745d88abbf39321bfefdf06e02245c5d7ccb49e61d43860897 = $this->env->getExtension("native_profiler");
        $__internal_dd8df202b033f8745d88abbf39321bfefdf06e02245c5d7ccb49e61d43860897->enter($__internal_dd8df202b033f8745d88abbf39321bfefdf06e02245c5d7ccb49e61d43860897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_dd8df202b033f8745d88abbf39321bfefdf06e02245c5d7ccb49e61d43860897->leave($__internal_dd8df202b033f8745d88abbf39321bfefdf06e02245c5d7ccb49e61d43860897_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:home.html.twig";
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
