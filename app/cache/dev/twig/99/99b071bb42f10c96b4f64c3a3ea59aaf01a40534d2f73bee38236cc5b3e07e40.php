<?php

/* TSAdminBundle:Users:addSARH.html.twig */
class __TwigTemplate_5bc9921bd22a8c87c0177e3c1d8b938d3d134bd582199bf8a4907b83c00571c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Users:addSARH.html.twig", 3);
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
        $__internal_9d903cec47eb5c58d1f7c6ade3b5cdc7637d064af27ef2bc34500ec7bacf597e = $this->env->getExtension("native_profiler");
        $__internal_9d903cec47eb5c58d1f7c6ade3b5cdc7637d064af27ef2bc34500ec7bacf597e->enter($__internal_9d903cec47eb5c58d1f7c6ade3b5cdc7637d064af27ef2bc34500ec7bacf597e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:addSARH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d903cec47eb5c58d1f7c6ade3b5cdc7637d064af27ef2bc34500ec7bacf597e->leave($__internal_9d903cec47eb5c58d1f7c6ade3b5cdc7637d064af27ef2bc34500ec7bacf597e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f769266b5b24f4b35f9b9daa7f2e307a6bf9a266c5d0102a8f0cb33787da7e8 = $this->env->getExtension("native_profiler");
        $__internal_2f769266b5b24f4b35f9b9daa7f2e307a6bf9a266c5d0102a8f0cb33787da7e8->enter($__internal_2f769266b5b24f4b35f9b9daa7f2e307a6bf9a266c5d0102a8f0cb33787da7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addSuperAdmin
";
        
        $__internal_2f769266b5b24f4b35f9b9daa7f2e307a6bf9a266c5d0102a8f0cb33787da7e8->leave($__internal_2f769266b5b24f4b35f9b9daa7f2e307a6bf9a266c5d0102a8f0cb33787da7e8_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_5e98b4c66422a8da809106cae753271dcce38e87da194e001e613ec3fcae0f31 = $this->env->getExtension("native_profiler");
        $__internal_5e98b4c66422a8da809106cae753271dcce38e87da194e001e613ec3fcae0f31->enter($__internal_5e98b4c66422a8da809106cae753271dcce38e87da194e001e613ec3fcae0f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_5e98b4c66422a8da809106cae753271dcce38e87da194e001e613ec3fcae0f31->leave($__internal_5e98b4c66422a8da809106cae753271dcce38e87da194e001e613ec3fcae0f31_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c10eb01cc17384f029fa68993d88cc19d8a0e9fbd5a24034c6fcf81effc28c7b = $this->env->getExtension("native_profiler");
        $__internal_c10eb01cc17384f029fa68993d88cc19d8a0e9fbd5a24034c6fcf81effc28c7b->enter($__internal_c10eb01cc17384f029fa68993d88cc19d8a0e9fbd5a24034c6fcf81effc28c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c10eb01cc17384f029fa68993d88cc19d8a0e9fbd5a24034c6fcf81effc28c7b->leave($__internal_c10eb01cc17384f029fa68993d88cc19d8a0e9fbd5a24034c6fcf81effc28c7b_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1aaf8e72f818bda32cee5820283e89ccb4e006218da5da625e5fa25ce514912 = $this->env->getExtension("native_profiler");
        $__internal_d1aaf8e72f818bda32cee5820283e89ccb4e006218da5da625e5fa25ce514912->enter($__internal_d1aaf8e72f818bda32cee5820283e89ccb4e006218da5da625e5fa25ce514912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d1aaf8e72f818bda32cee5820283e89ccb4e006218da5da625e5fa25ce514912->leave($__internal_d1aaf8e72f818bda32cee5820283e89ccb4e006218da5da625e5fa25ce514912_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_183910f7f2ff7215317048482f2c6402f50837ee71008c4a0e7e4a757ff530aa = $this->env->getExtension("native_profiler");
        $__internal_183910f7f2ff7215317048482f2c6402f50837ee71008c4a0e7e4a757ff530aa->enter($__internal_183910f7f2ff7215317048482f2c6402f50837ee71008c4a0e7e4a757ff530aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_183910f7f2ff7215317048482f2c6402f50837ee71008c4a0e7e4a757ff530aa->leave($__internal_183910f7f2ff7215317048482f2c6402f50837ee71008c4a0e7e4a757ff530aa_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_16632529d84ecf9492980acb67f38159f3941ff227ec3d710b06a27d7126c462 = $this->env->getExtension("native_profiler");
        $__internal_16632529d84ecf9492980acb67f38159f3941ff227ec3d710b06a27d7126c462->enter($__internal_16632529d84ecf9492980acb67f38159f3941ff227ec3d710b06a27d7126c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_16632529d84ecf9492980acb67f38159f3941ff227ec3d710b06a27d7126c462->leave($__internal_16632529d84ecf9492980acb67f38159f3941ff227ec3d710b06a27d7126c462_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_1a0806ac3822701eb1b2489a2292bef7d6fba0444eb83f0127a88d9f7cf1ea0a = $this->env->getExtension("native_profiler");
        $__internal_1a0806ac3822701eb1b2489a2292bef7d6fba0444eb83f0127a88d9f7cf1ea0a->enter($__internal_1a0806ac3822701eb1b2489a2292bef7d6fba0444eb83f0127a88d9f7cf1ea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_1a0806ac3822701eb1b2489a2292bef7d6fba0444eb83f0127a88d9f7cf1ea0a->leave($__internal_1a0806ac3822701eb1b2489a2292bef7d6fba0444eb83f0127a88d9f7cf1ea0a_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a2854b84b7aaa229273eac4121bf54809a3dd76cbea206dde5a2f971e072cca = $this->env->getExtension("native_profiler");
        $__internal_4a2854b84b7aaa229273eac4121bf54809a3dd76cbea206dde5a2f971e072cca->enter($__internal_4a2854b84b7aaa229273eac4121bf54809a3dd76cbea206dde5a2f971e072cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "<div id=\"page-title\"></div>
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
        // line 65
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
            // line 66
            echo "                            ";
            $this->loadTemplate("TSAdminBundle:Users:showUser.html.twig", "TSAdminBundle:Users:addSARH.html.twig", 66)->display($context);
            // line 67
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                   

            </tbody>
        </table>
    </div>
</div>
</div>
";
        // line 76
        $this->loadTemplate("TSAdminBundle:Users:ModalAddSA.html.twig", "TSAdminBundle:Users:addSARH.html.twig", 76)->display($context);
        // line 77
        echo " ";
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "TSAdminBundle:Users:addSARH.html.twig", 77)->display($context);
        // line 78
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_4a2854b84b7aaa229273eac4121bf54809a3dd76cbea206dde5a2f971e072cca->leave($__internal_4a2854b84b7aaa229273eac4121bf54809a3dd76cbea206dde5a2f971e072cca_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:addSARH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 78,  235 => 77,  233 => 76,  223 => 68,  209 => 67,  206 => 66,  189 => 65,  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\users\addRH.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin|addSuperAdmin*/
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
/* <div id="page-title"></div>*/
/* <div class="row">*/
/*  <div class="col-md-12">      */
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
/*                    */
/*                         {% for user in users %}*/
/*                             {% include "TSAdminBundle:Users:showUser.html.twig" %}*/
/*                         {% endfor %}*/
/* */
/*                    */
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* {% include "TSAdminBundle:Users:ModalAddSA.html.twig" %}*/
/*  {% include "TSAdminBundle:Notification:GrowlNotif.html.twig" %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
