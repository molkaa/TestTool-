<?php

/* @TSAdmin/Tables/editTests.html.twig */
class __TwigTemplate_2149d2e0c411e57aff0844b5fc9b6d991ebaacaacee34c34e687d776f3db546a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Tables/editTests.html.twig", 3);
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
        $__internal_06b5b016471e338b5a6697f580ab7c218b3f8585d7d54d209a8864a873ff8069 = $this->env->getExtension("native_profiler");
        $__internal_06b5b016471e338b5a6697f580ab7c218b3f8585d7d54d209a8864a873ff8069->enter($__internal_06b5b016471e338b5a6697f580ab7c218b3f8585d7d54d209a8864a873ff8069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tables/editTests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b5b016471e338b5a6697f580ab7c218b3f8585d7d54d209a8864a873ff8069->leave($__internal_06b5b016471e338b5a6697f580ab7c218b3f8585d7d54d209a8864a873ff8069_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f140eb479fa350aac1f81621238bf06fb74e3afdcd70f5eaeabd4c3b3adcca9 = $this->env->getExtension("native_profiler");
        $__internal_2f140eb479fa350aac1f81621238bf06fb74e3afdcd70f5eaeabd4c3b3adcca9->enter($__internal_2f140eb479fa350aac1f81621238bf06fb74e3afdcd70f5eaeabd4c3b3adcca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|testsType
";
        
        $__internal_2f140eb479fa350aac1f81621238bf06fb74e3afdcd70f5eaeabd4c3b3adcca9->leave($__internal_2f140eb479fa350aac1f81621238bf06fb74e3afdcd70f5eaeabd4c3b3adcca9_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_5de6d35540807013878a618d1148bccb1d6fbed44731c92ef80e7b5d5e5a1ec6 = $this->env->getExtension("native_profiler");
        $__internal_5de6d35540807013878a618d1148bccb1d6fbed44731c92ef80e7b5d5e5a1ec6->enter($__internal_5de6d35540807013878a618d1148bccb1d6fbed44731c92ef80e7b5d5e5a1ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_5de6d35540807013878a618d1148bccb1d6fbed44731c92ef80e7b5d5e5a1ec6->leave($__internal_5de6d35540807013878a618d1148bccb1d6fbed44731c92ef80e7b5d5e5a1ec6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4081eb82b017a74b88157bc8aa0ed8340b574a187e8d2e36103f444f946e7fd = $this->env->getExtension("native_profiler");
        $__internal_f4081eb82b017a74b88157bc8aa0ed8340b574a187e8d2e36103f444f946e7fd->enter($__internal_f4081eb82b017a74b88157bc8aa0ed8340b574a187e8d2e36103f444f946e7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f4081eb82b017a74b88157bc8aa0ed8340b574a187e8d2e36103f444f946e7fd->leave($__internal_f4081eb82b017a74b88157bc8aa0ed8340b574a187e8d2e36103f444f946e7fd_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5c20f88857a909c066b0a0cd8cf59ec6d62b3f2b9fa55306040c5fadc2e86ed = $this->env->getExtension("native_profiler");
        $__internal_d5c20f88857a909c066b0a0cd8cf59ec6d62b3f2b9fa55306040c5fadc2e86ed->enter($__internal_d5c20f88857a909c066b0a0cd8cf59ec6d62b3f2b9fa55306040c5fadc2e86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d5c20f88857a909c066b0a0cd8cf59ec6d62b3f2b9fa55306040c5fadc2e86ed->leave($__internal_d5c20f88857a909c066b0a0cd8cf59ec6d62b3f2b9fa55306040c5fadc2e86ed_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_27396b6d9d1c91ecb24b404f87ffaa76b6f3575bd12b0168f1d9f89a24df1e9a = $this->env->getExtension("native_profiler");
        $__internal_27396b6d9d1c91ecb24b404f87ffaa76b6f3575bd12b0168f1d9f89a24df1e9a->enter($__internal_27396b6d9d1c91ecb24b404f87ffaa76b6f3575bd12b0168f1d9f89a24df1e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_27396b6d9d1c91ecb24b404f87ffaa76b6f3575bd12b0168f1d9f89a24df1e9a->leave($__internal_27396b6d9d1c91ecb24b404f87ffaa76b6f3575bd12b0168f1d9f89a24df1e9a_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_195e89544d17a3899deb75032f14259327cac9f53c47ca59c1d84cd0f1d001a9 = $this->env->getExtension("native_profiler");
        $__internal_195e89544d17a3899deb75032f14259327cac9f53c47ca59c1d84cd0f1d001a9->enter($__internal_195e89544d17a3899deb75032f14259327cac9f53c47ca59c1d84cd0f1d001a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_195e89544d17a3899deb75032f14259327cac9f53c47ca59c1d84cd0f1d001a9->leave($__internal_195e89544d17a3899deb75032f14259327cac9f53c47ca59c1d84cd0f1d001a9_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_6586016b12b19086caf3c55bbdd3d7191a1c56cf820850e21c0636ed3845acf8 = $this->env->getExtension("native_profiler");
        $__internal_6586016b12b19086caf3c55bbdd3d7191a1c56cf820850e21c0636ed3845acf8->enter($__internal_6586016b12b19086caf3c55bbdd3d7191a1c56cf820850e21c0636ed3845acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_6586016b12b19086caf3c55bbdd3d7191a1c56cf820850e21c0636ed3845acf8->leave($__internal_6586016b12b19086caf3c55bbdd3d7191a1c56cf820850e21c0636ed3845acf8_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_e67e7fa941c6cc946c90f185f0e29520a4d0260ee2f2b10df89a29d06bf9d4a9 = $this->env->getExtension("native_profiler");
        $__internal_e67e7fa941c6cc946c90f185f0e29520a4d0260ee2f2b10df89a29d06bf9d4a9->enter($__internal_e67e7fa941c6cc946c90f185f0e29520a4d0260ee2f2b10df89a29d06bf9d4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo " <div id=\"page-title\"></div>
<div class=\"row\">
    <div class=\"col-md-12\">      

           
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddTestType\"  title=\"Add Test Type\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-plus-square\"></i>
                    </span>
                    <span class=\"button-content\">
                        Add Test Type
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
";
        // line 65
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 66
            echo "                    ";
            $this->loadTemplate("TSAdminBundle:Tables:showValues.html.twig", "@TSAdmin/Tables/editTests.html.twig", 66)->display($context);
            // line 67
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
            </tbody>
        </table>
    </div>
</div>
</div>
";
        // line 75
        $this->loadTemplate("TSAdminBundle:Tables:ModalAddTestType.html.twig", "@TSAdmin/Tables/editTests.html.twig", 75)->display($context);
        // line 76
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "@TSAdmin/Tables/editTests.html.twig", 76)->display($context);
        // line 77
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_e67e7fa941c6cc946c90f185f0e29520a4d0260ee2f2b10df89a29d06bf9d4a9->leave($__internal_e67e7fa941c6cc946c90f185f0e29520a4d0260ee2f2b10df89a29d06bf9d4a9_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tables/editTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 77,  233 => 76,  231 => 75,  223 => 69,  209 => 67,  206 => 66,  188 => 65,  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\tables\editTests.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin|testsType*/
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
/*     <div class="col-md-12">      */
/* */
/*            */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddTestType"  title="Add Test Type" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-plus-square"></i>*/
/*                     </span>*/
/*                     <span class="button-content">*/
/*                         Add Test Type*/
/*                     </span>*/
/*                 </a>*/
/*            */
/* */
/* */
/*         </div>*/
/*         <br><br>*/
/* */
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
/* {#                <tr>#}*/
/*                 {% for value in values %}*/
/*                     {% include "TSAdminBundle:Tables:showValues.html.twig" %}*/
/*                 {% endfor %}*/
/* {#                </tr>#}*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% include "TSAdminBundle:Tables:ModalAddTestType.html.twig" %}*/
/* {% include "TSAdminBundle:Notification:GrowlNotif.html.twig" %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
