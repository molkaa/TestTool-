<?php

/* TSAdminBundle:Admin:admin.html.twig */
class __TwigTemplate_6e1fe0c6c95b4a6967a68e1a430b05b82662b985474fc6dcff44c106e2c28ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:admin.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icons' => array($this, 'block_icons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'right' => array($this, 'block_right'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9da81c58f0d5a0894271d2dbe0ed94c8a2fb2e1e0f93d86381a59714301a26 = $this->env->getExtension("native_profiler");
        $__internal_fa9da81c58f0d5a0894271d2dbe0ed94c8a2fb2e1e0f93d86381a59714301a26->enter($__internal_fa9da81c58f0d5a0894271d2dbe0ed94c8a2fb2e1e0f93d86381a59714301a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9da81c58f0d5a0894271d2dbe0ed94c8a2fb2e1e0f93d86381a59714301a26->leave($__internal_fa9da81c58f0d5a0894271d2dbe0ed94c8a2fb2e1e0f93d86381a59714301a26_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9163ed8da6a40cdac29cf656485b209731b85227dfa4b0fcd7af41952ff5c907 = $this->env->getExtension("native_profiler");
        $__internal_9163ed8da6a40cdac29cf656485b209731b85227dfa4b0fcd7af41952ff5c907->enter($__internal_9163ed8da6a40cdac29cf656485b209731b85227dfa4b0fcd7af41952ff5c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin
";
        
        $__internal_9163ed8da6a40cdac29cf656485b209731b85227dfa4b0fcd7af41952ff5c907->leave($__internal_9163ed8da6a40cdac29cf656485b209731b85227dfa4b0fcd7af41952ff5c907_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_25cecaba0ca4dfe29eba56c96bd739f2738a1550f4556017df08ffe1a115fe7f = $this->env->getExtension("native_profiler");
        $__internal_25cecaba0ca4dfe29eba56c96bd739f2738a1550f4556017df08ffe1a115fe7f->enter($__internal_25cecaba0ca4dfe29eba56c96bd739f2738a1550f4556017df08ffe1a115fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_25cecaba0ca4dfe29eba56c96bd739f2738a1550f4556017df08ffe1a115fe7f->leave($__internal_25cecaba0ca4dfe29eba56c96bd739f2738a1550f4556017df08ffe1a115fe7f_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6db20557c2e5404037f5b3bfb4e4fdf9c7adc84616a6b26fe6692c6f877816eb = $this->env->getExtension("native_profiler");
        $__internal_6db20557c2e5404037f5b3bfb4e4fdf9c7adc84616a6b26fe6692c6f877816eb->enter($__internal_6db20557c2e5404037f5b3bfb4e4fdf9c7adc84616a6b26fe6692c6f877816eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6db20557c2e5404037f5b3bfb4e4fdf9c7adc84616a6b26fe6692c6f877816eb->leave($__internal_6db20557c2e5404037f5b3bfb4e4fdf9c7adc84616a6b26fe6692c6f877816eb_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de9069bff8ee9f8323fc3db6b2c3ab0a2c635e4a771fa57046d8acdbcfd6ec8c = $this->env->getExtension("native_profiler");
        $__internal_de9069bff8ee9f8323fc3db6b2c3ab0a2c635e4a771fa57046d8acdbcfd6ec8c->enter($__internal_de9069bff8ee9f8323fc3db6b2c3ab0a2c635e4a771fa57046d8acdbcfd6ec8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_de9069bff8ee9f8323fc3db6b2c3ab0a2c635e4a771fa57046d8acdbcfd6ec8c->leave($__internal_de9069bff8ee9f8323fc3db6b2c3ab0a2c635e4a771fa57046d8acdbcfd6ec8c_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_fe636be52c9e573fce0c9336c38bdc1dffd05ebcb98e8de8aeba1b898f7b23d5 = $this->env->getExtension("native_profiler");
        $__internal_fe636be52c9e573fce0c9336c38bdc1dffd05ebcb98e8de8aeba1b898f7b23d5->enter($__internal_fe636be52c9e573fce0c9336c38bdc1dffd05ebcb98e8de8aeba1b898f7b23d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_fe636be52c9e573fce0c9336c38bdc1dffd05ebcb98e8de8aeba1b898f7b23d5->leave($__internal_fe636be52c9e573fce0c9336c38bdc1dffd05ebcb98e8de8aeba1b898f7b23d5_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a1154adbfae5f4746ff4badfb6a0bd6fe36d01f4d244153704fa9c8020cec9f4 = $this->env->getExtension("native_profiler");
        $__internal_a1154adbfae5f4746ff4badfb6a0bd6fe36d01f4d244153704fa9c8020cec9f4->enter($__internal_a1154adbfae5f4746ff4badfb6a0bd6fe36d01f4d244153704fa9c8020cec9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_a1154adbfae5f4746ff4badfb6a0bd6fe36d01f4d244153704fa9c8020cec9f4->leave($__internal_a1154adbfae5f4746ff4badfb6a0bd6fe36d01f4d244153704fa9c8020cec9f4_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_2b803ccf20eeed6f83a5942eaaeaa7ff89f30f27e98946b553dec8e5f73174d7 = $this->env->getExtension("native_profiler");
        $__internal_2b803ccf20eeed6f83a5942eaaeaa7ff89f30f27e98946b553dec8e5f73174d7->enter($__internal_2b803ccf20eeed6f83a5942eaaeaa7ff89f30f27e98946b553dec8e5f73174d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_2b803ccf20eeed6f83a5942eaaeaa7ff89f30f27e98946b553dec8e5f73174d7->leave($__internal_2b803ccf20eeed6f83a5942eaaeaa7ff89f30f27e98946b553dec8e5f73174d7_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_21f0da4e6d8f915a0b605f873cba4693a545fbcccb55bbaad39a7fe48e6c6fa9 = $this->env->getExtension("native_profiler");
        $__internal_21f0da4e6d8f915a0b605f873cba4693a545fbcccb55bbaad39a7fe48e6c6fa9->enter($__internal_21f0da4e6d8f915a0b605f873cba4693a545fbcccb55bbaad39a7fe48e6c6fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_21f0da4e6d8f915a0b605f873cba4693a545fbcccb55bbaad39a7fe48e6c6fa9->leave($__internal_21f0da4e6d8f915a0b605f873cba4693a545fbcccb55bbaad39a7fe48e6c6fa9_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\admin.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/*  {% block sidebar%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
