<?php

/* @TSAdmin/Admin/admin.html.twig */
class __TwigTemplate_1dbf45797001eab9e2d72568a966c2c2be8e0876cbafa87ccee2bdae081456e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/admin.html.twig", 3);
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
        $__internal_60e0566104165e485c054bda9646f974551b88c56434562c0c6ddc85cba641c1 = $this->env->getExtension("native_profiler");
        $__internal_60e0566104165e485c054bda9646f974551b88c56434562c0c6ddc85cba641c1->enter($__internal_60e0566104165e485c054bda9646f974551b88c56434562c0c6ddc85cba641c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e0566104165e485c054bda9646f974551b88c56434562c0c6ddc85cba641c1->leave($__internal_60e0566104165e485c054bda9646f974551b88c56434562c0c6ddc85cba641c1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac89f3d9dcb38fb96a3d031a1061370c75692a6559158d530b853e03b8aa87a = $this->env->getExtension("native_profiler");
        $__internal_5ac89f3d9dcb38fb96a3d031a1061370c75692a6559158d530b853e03b8aa87a->enter($__internal_5ac89f3d9dcb38fb96a3d031a1061370c75692a6559158d530b853e03b8aa87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin
";
        
        $__internal_5ac89f3d9dcb38fb96a3d031a1061370c75692a6559158d530b853e03b8aa87a->leave($__internal_5ac89f3d9dcb38fb96a3d031a1061370c75692a6559158d530b853e03b8aa87a_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_8c07f292e1fd7c5b977b2d118b1922a31f4d186f726ac27debe7311a38b580ad = $this->env->getExtension("native_profiler");
        $__internal_8c07f292e1fd7c5b977b2d118b1922a31f4d186f726ac27debe7311a38b580ad->enter($__internal_8c07f292e1fd7c5b977b2d118b1922a31f4d186f726ac27debe7311a38b580ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_8c07f292e1fd7c5b977b2d118b1922a31f4d186f726ac27debe7311a38b580ad->leave($__internal_8c07f292e1fd7c5b977b2d118b1922a31f4d186f726ac27debe7311a38b580ad_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e23f2abaa7e59e62009920d0de05365861e8b9eca3868e0704ad8362ca75e2e7 = $this->env->getExtension("native_profiler");
        $__internal_e23f2abaa7e59e62009920d0de05365861e8b9eca3868e0704ad8362ca75e2e7->enter($__internal_e23f2abaa7e59e62009920d0de05365861e8b9eca3868e0704ad8362ca75e2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_e23f2abaa7e59e62009920d0de05365861e8b9eca3868e0704ad8362ca75e2e7->leave($__internal_e23f2abaa7e59e62009920d0de05365861e8b9eca3868e0704ad8362ca75e2e7_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dde7fc255c57ef62c69ecaf8303d6d0506257f14b5a13aee49f5d94b6f3eb7bd = $this->env->getExtension("native_profiler");
        $__internal_dde7fc255c57ef62c69ecaf8303d6d0506257f14b5a13aee49f5d94b6f3eb7bd->enter($__internal_dde7fc255c57ef62c69ecaf8303d6d0506257f14b5a13aee49f5d94b6f3eb7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_dde7fc255c57ef62c69ecaf8303d6d0506257f14b5a13aee49f5d94b6f3eb7bd->leave($__internal_dde7fc255c57ef62c69ecaf8303d6d0506257f14b5a13aee49f5d94b6f3eb7bd_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_8d834523fff433510a384f5c4df92b40f5e1fcaf4d8d0aa157230e3274d98a37 = $this->env->getExtension("native_profiler");
        $__internal_8d834523fff433510a384f5c4df92b40f5e1fcaf4d8d0aa157230e3274d98a37->enter($__internal_8d834523fff433510a384f5c4df92b40f5e1fcaf4d8d0aa157230e3274d98a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_8d834523fff433510a384f5c4df92b40f5e1fcaf4d8d0aa157230e3274d98a37->leave($__internal_8d834523fff433510a384f5c4df92b40f5e1fcaf4d8d0aa157230e3274d98a37_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_af26a38baef5ac41f8d48a4a14fc982f109e3a060432efa582835a7f272e8471 = $this->env->getExtension("native_profiler");
        $__internal_af26a38baef5ac41f8d48a4a14fc982f109e3a060432efa582835a7f272e8471->enter($__internal_af26a38baef5ac41f8d48a4a14fc982f109e3a060432efa582835a7f272e8471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_af26a38baef5ac41f8d48a4a14fc982f109e3a060432efa582835a7f272e8471->leave($__internal_af26a38baef5ac41f8d48a4a14fc982f109e3a060432efa582835a7f272e8471_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_45ff0b9b167a6e25a39c76f091ef110e3ce4a4b3a4553489d74fcd8a1421428c = $this->env->getExtension("native_profiler");
        $__internal_45ff0b9b167a6e25a39c76f091ef110e3ce4a4b3a4553489d74fcd8a1421428c->enter($__internal_45ff0b9b167a6e25a39c76f091ef110e3ce4a4b3a4553489d74fcd8a1421428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_45ff0b9b167a6e25a39c76f091ef110e3ce4a4b3a4553489d74fcd8a1421428c->leave($__internal_45ff0b9b167a6e25a39c76f091ef110e3ce4a4b3a4553489d74fcd8a1421428c_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_9775a9f65163916f41f59c7903b65969e6fe14893c7ddd0a709df01a7b32b690 = $this->env->getExtension("native_profiler");
        $__internal_9775a9f65163916f41f59c7903b65969e6fe14893c7ddd0a709df01a7b32b690->enter($__internal_9775a9f65163916f41f59c7903b65969e6fe14893c7ddd0a709df01a7b32b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_9775a9f65163916f41f59c7903b65969e6fe14893c7ddd0a709df01a7b32b690->leave($__internal_9775a9f65163916f41f59c7903b65969e6fe14893c7ddd0a709df01a7b32b690_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/admin.html.twig";
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
