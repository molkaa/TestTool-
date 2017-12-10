<?php

/* @TSAdmin/Users/addAdmin.html.twig */
class __TwigTemplate_ea5a597d7330aa45b76848d3749e1ad02185567c2c3e6a042cfb91bdb96e2a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Users/addAdmin.html.twig", 3);
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
        $__internal_9681f71abfcd1f2f1e82fee9707c4f8ad29e2204c20f1c8cc8aedb09f8f2157b = $this->env->getExtension("native_profiler");
        $__internal_9681f71abfcd1f2f1e82fee9707c4f8ad29e2204c20f1c8cc8aedb09f8f2157b->enter($__internal_9681f71abfcd1f2f1e82fee9707c4f8ad29e2204c20f1c8cc8aedb09f8f2157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/addAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9681f71abfcd1f2f1e82fee9707c4f8ad29e2204c20f1c8cc8aedb09f8f2157b->leave($__internal_9681f71abfcd1f2f1e82fee9707c4f8ad29e2204c20f1c8cc8aedb09f8f2157b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_a62ac66574cfd1cbbaf3583a250b803b28073788bb3a59b2da9a13e605dc953f = $this->env->getExtension("native_profiler");
        $__internal_a62ac66574cfd1cbbaf3583a250b803b28073788bb3a59b2da9a13e605dc953f->enter($__internal_a62ac66574cfd1cbbaf3583a250b803b28073788bb3a59b2da9a13e605dc953f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addAdmin
";
        
        $__internal_a62ac66574cfd1cbbaf3583a250b803b28073788bb3a59b2da9a13e605dc953f->leave($__internal_a62ac66574cfd1cbbaf3583a250b803b28073788bb3a59b2da9a13e605dc953f_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_1148d05ffb429016bd1b832c5f76be982b99ac4fdc6dcdaa05b20014b82b49be = $this->env->getExtension("native_profiler");
        $__internal_1148d05ffb429016bd1b832c5f76be982b99ac4fdc6dcdaa05b20014b82b49be->enter($__internal_1148d05ffb429016bd1b832c5f76be982b99ac4fdc6dcdaa05b20014b82b49be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_1148d05ffb429016bd1b832c5f76be982b99ac4fdc6dcdaa05b20014b82b49be->leave($__internal_1148d05ffb429016bd1b832c5f76be982b99ac4fdc6dcdaa05b20014b82b49be_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef217634f9f8d6749099bce17792def002d7cd030f7a587a44cf5f5d73426c49 = $this->env->getExtension("native_profiler");
        $__internal_ef217634f9f8d6749099bce17792def002d7cd030f7a587a44cf5f5d73426c49->enter($__internal_ef217634f9f8d6749099bce17792def002d7cd030f7a587a44cf5f5d73426c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_ef217634f9f8d6749099bce17792def002d7cd030f7a587a44cf5f5d73426c49->leave($__internal_ef217634f9f8d6749099bce17792def002d7cd030f7a587a44cf5f5d73426c49_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a615c245cdf6a1938079415883f242913c0a63da77b72256a840d698c213f11a = $this->env->getExtension("native_profiler");
        $__internal_a615c245cdf6a1938079415883f242913c0a63da77b72256a840d698c213f11a->enter($__internal_a615c245cdf6a1938079415883f242913c0a63da77b72256a840d698c213f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_a615c245cdf6a1938079415883f242913c0a63da77b72256a840d698c213f11a->leave($__internal_a615c245cdf6a1938079415883f242913c0a63da77b72256a840d698c213f11a_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_16ca8f74462182eabb40d53c74f436247546462b0d1aa8c7674bfe0dc939e34a = $this->env->getExtension("native_profiler");
        $__internal_16ca8f74462182eabb40d53c74f436247546462b0d1aa8c7674bfe0dc939e34a->enter($__internal_16ca8f74462182eabb40d53c74f436247546462b0d1aa8c7674bfe0dc939e34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_16ca8f74462182eabb40d53c74f436247546462b0d1aa8c7674bfe0dc939e34a->leave($__internal_16ca8f74462182eabb40d53c74f436247546462b0d1aa8c7674bfe0dc939e34a_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_31199499c59836a9f635c0bc0a89ec98ea8b2ccc1a419ded724c7db6474c41b6 = $this->env->getExtension("native_profiler");
        $__internal_31199499c59836a9f635c0bc0a89ec98ea8b2ccc1a419ded724c7db6474c41b6->enter($__internal_31199499c59836a9f635c0bc0a89ec98ea8b2ccc1a419ded724c7db6474c41b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_31199499c59836a9f635c0bc0a89ec98ea8b2ccc1a419ded724c7db6474c41b6->leave($__internal_31199499c59836a9f635c0bc0a89ec98ea8b2ccc1a419ded724c7db6474c41b6_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_73b79f378dcab43bfb0f2bda9c12b2f13235f8ce6a6bd09e3acf8956ca449e46 = $this->env->getExtension("native_profiler");
        $__internal_73b79f378dcab43bfb0f2bda9c12b2f13235f8ce6a6bd09e3acf8956ca449e46->enter($__internal_73b79f378dcab43bfb0f2bda9c12b2f13235f8ce6a6bd09e3acf8956ca449e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_73b79f378dcab43bfb0f2bda9c12b2f13235f8ce6a6bd09e3acf8956ca449e46->leave($__internal_73b79f378dcab43bfb0f2bda9c12b2f13235f8ce6a6bd09e3acf8956ca449e46_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_28efe33dd9fae6e53df18ccdaac0060b0ab92d64e36832b6985f5d650db55179 = $this->env->getExtension("native_profiler");
        $__internal_28efe33dd9fae6e53df18ccdaac0060b0ab92d64e36832b6985f5d650db55179->enter($__internal_28efe33dd9fae6e53df18ccdaac0060b0ab92d64e36832b6985f5d650db55179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo " <div id=\"page-title\"></div>
<div class=\"row\">
     <div class=\"col-md-12\">      

           
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddSA\" title=\"Add Super Admin\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-plus-square\"></i>
                    </span>
                    <span class=\"button-content\">
                        Add Super Admin
                    </span>
                </a>
           


        </div>
    <br><br>

<div class=\"col-md-12\">
    <div class=\"profile-box profile-box-alt content-box\">
        <div class=\"content-box-header clearfix primary-bg\">
            <div class=\"user-details\">

            </div>
        </div>
        <table class=\"table\">
            <tbody>
                <tr>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 65
            echo "                    ";
            $this->loadTemplate("TSAdminBundle:Users:showUser.html.twig", "@TSAdmin/Users/addAdmin.html.twig", 65)->display($context);
            // line 66
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>
";
        // line 74
        $this->loadTemplate("TSAdminBundle:Users:ModalAddSA.html.twig", "@TSAdmin/Users/addAdmin.html.twig", 74)->display($context);
        // line 75
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_28efe33dd9fae6e53df18ccdaac0060b0ab92d64e36832b6985f5d650db55179->leave($__internal_28efe33dd9fae6e53df18ccdaac0060b0ab92d64e36832b6985f5d650db55179_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/addAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 75,  231 => 74,  222 => 67,  208 => 66,  205 => 65,  188 => 64,  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\users\addAdmin.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin|addAdmin*/
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
/*  <div id="page-title"></div>*/
/* <div class="row">*/
/*      <div class="col-md-12">      */
/* */
/*            */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddSA" title="Add Super Admin" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-plus-square"></i>*/
/*                     </span>*/
/*                     <span class="button-content">*/
/*                         Add Super Admin*/
/*                     </span>*/
/*                 </a>*/
/*            */
/* */
/* */
/*         </div>*/
/*     <br><br>*/
/* */
/* <div class="col-md-12">*/
/*     <div class="profile-box profile-box-alt content-box">*/
/*         <div class="content-box-header clearfix primary-bg">*/
/*             <div class="user-details">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <table class="table">*/
/*             <tbody>*/
/*                 <tr>*/
/*                 {% for user in users %}*/
/*                     {% include "TSAdminBundle:Users:showUser.html.twig" %}*/
/*                 {% endfor %}*/
/*                 </tr>*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% include "TSAdminBundle:Users:ModalAddSA.html.twig" %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
