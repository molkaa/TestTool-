<?php

/* TSAdminBundle:Users:addAdmin.html.twig */
class __TwigTemplate_82625ce40093096c92209ef1b784a2eb4d482f39566690edcc7b1165f70420d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Users:addAdmin.html.twig", 3);
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
        $__internal_2759ca5575ecc6576fac85c9da058bf7e2d55f885807c89b69f0f7e9932486cb = $this->env->getExtension("native_profiler");
        $__internal_2759ca5575ecc6576fac85c9da058bf7e2d55f885807c89b69f0f7e9932486cb->enter($__internal_2759ca5575ecc6576fac85c9da058bf7e2d55f885807c89b69f0f7e9932486cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:addAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2759ca5575ecc6576fac85c9da058bf7e2d55f885807c89b69f0f7e9932486cb->leave($__internal_2759ca5575ecc6576fac85c9da058bf7e2d55f885807c89b69f0f7e9932486cb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_74671dcd1e67cfce95c1a3ed2d87cf8eed791601186a9cef369d61c3b3eb63e3 = $this->env->getExtension("native_profiler");
        $__internal_74671dcd1e67cfce95c1a3ed2d87cf8eed791601186a9cef369d61c3b3eb63e3->enter($__internal_74671dcd1e67cfce95c1a3ed2d87cf8eed791601186a9cef369d61c3b3eb63e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addAdmin
";
        
        $__internal_74671dcd1e67cfce95c1a3ed2d87cf8eed791601186a9cef369d61c3b3eb63e3->leave($__internal_74671dcd1e67cfce95c1a3ed2d87cf8eed791601186a9cef369d61c3b3eb63e3_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_556543b94b84b71ae45e5ffdbb05f8391f164e654a296a5ffaf5663e59ea9ab2 = $this->env->getExtension("native_profiler");
        $__internal_556543b94b84b71ae45e5ffdbb05f8391f164e654a296a5ffaf5663e59ea9ab2->enter($__internal_556543b94b84b71ae45e5ffdbb05f8391f164e654a296a5ffaf5663e59ea9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_556543b94b84b71ae45e5ffdbb05f8391f164e654a296a5ffaf5663e59ea9ab2->leave($__internal_556543b94b84b71ae45e5ffdbb05f8391f164e654a296a5ffaf5663e59ea9ab2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_33d6e8f5cdc3d7edc9c9f8bcc800bad65675dd3c2601be3d503a2d41d00643ba = $this->env->getExtension("native_profiler");
        $__internal_33d6e8f5cdc3d7edc9c9f8bcc800bad65675dd3c2601be3d503a2d41d00643ba->enter($__internal_33d6e8f5cdc3d7edc9c9f8bcc800bad65675dd3c2601be3d503a2d41d00643ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_33d6e8f5cdc3d7edc9c9f8bcc800bad65675dd3c2601be3d503a2d41d00643ba->leave($__internal_33d6e8f5cdc3d7edc9c9f8bcc800bad65675dd3c2601be3d503a2d41d00643ba_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1381b31d5515e922acaf83b03e9bd6b05ffa613e75208974a28a1ebb7c7f8ac7 = $this->env->getExtension("native_profiler");
        $__internal_1381b31d5515e922acaf83b03e9bd6b05ffa613e75208974a28a1ebb7c7f8ac7->enter($__internal_1381b31d5515e922acaf83b03e9bd6b05ffa613e75208974a28a1ebb7c7f8ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1381b31d5515e922acaf83b03e9bd6b05ffa613e75208974a28a1ebb7c7f8ac7->leave($__internal_1381b31d5515e922acaf83b03e9bd6b05ffa613e75208974a28a1ebb7c7f8ac7_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_957bfe773d06e7fef3c04f9d18eada7dfb1e9e76b9f4e77b14928e45b1b9a842 = $this->env->getExtension("native_profiler");
        $__internal_957bfe773d06e7fef3c04f9d18eada7dfb1e9e76b9f4e77b14928e45b1b9a842->enter($__internal_957bfe773d06e7fef3c04f9d18eada7dfb1e9e76b9f4e77b14928e45b1b9a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_957bfe773d06e7fef3c04f9d18eada7dfb1e9e76b9f4e77b14928e45b1b9a842->leave($__internal_957bfe773d06e7fef3c04f9d18eada7dfb1e9e76b9f4e77b14928e45b1b9a842_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9ef57c85f8d5966107ff2b08530d9831b74f25d3b60ddc2deb0b1d409096423c = $this->env->getExtension("native_profiler");
        $__internal_9ef57c85f8d5966107ff2b08530d9831b74f25d3b60ddc2deb0b1d409096423c->enter($__internal_9ef57c85f8d5966107ff2b08530d9831b74f25d3b60ddc2deb0b1d409096423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_9ef57c85f8d5966107ff2b08530d9831b74f25d3b60ddc2deb0b1d409096423c->leave($__internal_9ef57c85f8d5966107ff2b08530d9831b74f25d3b60ddc2deb0b1d409096423c_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_74f16c7a7905dc981ee7d4c9f472cdb29244a2922b9692fa3a52883516a4df5f = $this->env->getExtension("native_profiler");
        $__internal_74f16c7a7905dc981ee7d4c9f472cdb29244a2922b9692fa3a52883516a4df5f->enter($__internal_74f16c7a7905dc981ee7d4c9f472cdb29244a2922b9692fa3a52883516a4df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_74f16c7a7905dc981ee7d4c9f472cdb29244a2922b9692fa3a52883516a4df5f->leave($__internal_74f16c7a7905dc981ee7d4c9f472cdb29244a2922b9692fa3a52883516a4df5f_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_2fa37de51f8b31855b09d52c57579aee9fb643c8fd53b12376f2ddf0ff9f776e = $this->env->getExtension("native_profiler");
        $__internal_2fa37de51f8b31855b09d52c57579aee9fb643c8fd53b12376f2ddf0ff9f776e->enter($__internal_2fa37de51f8b31855b09d52c57579aee9fb643c8fd53b12376f2ddf0ff9f776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $this->loadTemplate("TSAdminBundle:Users:showUser.html.twig", "TSAdminBundle:Users:addAdmin.html.twig", 65)->display($context);
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
        $this->loadTemplate("TSAdminBundle:Users:ModalAddSA.html.twig", "TSAdminBundle:Users:addAdmin.html.twig", 74)->display($context);
        // line 75
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_2fa37de51f8b31855b09d52c57579aee9fb643c8fd53b12376f2ddf0ff9f776e->leave($__internal_2fa37de51f8b31855b09d52c57579aee9fb643c8fd53b12376f2ddf0ff9f776e_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:addAdmin.html.twig";
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
