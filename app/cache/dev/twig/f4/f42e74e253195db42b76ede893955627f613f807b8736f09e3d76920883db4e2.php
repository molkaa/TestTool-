<?php

/* @TSAdmin/Users/addSARH.html.twig */
class __TwigTemplate_b5e57735ee250b42fbbe46c3f2e1bad83ede41386bd2da3e5da64eeb8b18763f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Users/addSARH.html.twig", 3);
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
        $__internal_fb0d884cde60aa5c6be2261cbe728a5ff7afec1ae7d2ab2dadff7b01a384e302 = $this->env->getExtension("native_profiler");
        $__internal_fb0d884cde60aa5c6be2261cbe728a5ff7afec1ae7d2ab2dadff7b01a384e302->enter($__internal_fb0d884cde60aa5c6be2261cbe728a5ff7afec1ae7d2ab2dadff7b01a384e302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/addSARH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0d884cde60aa5c6be2261cbe728a5ff7afec1ae7d2ab2dadff7b01a384e302->leave($__internal_fb0d884cde60aa5c6be2261cbe728a5ff7afec1ae7d2ab2dadff7b01a384e302_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_675faa0cd60dcbcb8817b1f04fcefaa937d5448a6abccdf2c2a45c699f54a195 = $this->env->getExtension("native_profiler");
        $__internal_675faa0cd60dcbcb8817b1f04fcefaa937d5448a6abccdf2c2a45c699f54a195->enter($__internal_675faa0cd60dcbcb8817b1f04fcefaa937d5448a6abccdf2c2a45c699f54a195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addSuperAdmin
";
        
        $__internal_675faa0cd60dcbcb8817b1f04fcefaa937d5448a6abccdf2c2a45c699f54a195->leave($__internal_675faa0cd60dcbcb8817b1f04fcefaa937d5448a6abccdf2c2a45c699f54a195_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_454830e714b3d31580edd58cfab06def1842d4ab456a6200399e2f5017d855c6 = $this->env->getExtension("native_profiler");
        $__internal_454830e714b3d31580edd58cfab06def1842d4ab456a6200399e2f5017d855c6->enter($__internal_454830e714b3d31580edd58cfab06def1842d4ab456a6200399e2f5017d855c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_454830e714b3d31580edd58cfab06def1842d4ab456a6200399e2f5017d855c6->leave($__internal_454830e714b3d31580edd58cfab06def1842d4ab456a6200399e2f5017d855c6_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9de259f2a917bc1ef2fe6db1f18f5c3cc5f2cbd6b62f21a9270d88c199f9e01a = $this->env->getExtension("native_profiler");
        $__internal_9de259f2a917bc1ef2fe6db1f18f5c3cc5f2cbd6b62f21a9270d88c199f9e01a->enter($__internal_9de259f2a917bc1ef2fe6db1f18f5c3cc5f2cbd6b62f21a9270d88c199f9e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_9de259f2a917bc1ef2fe6db1f18f5c3cc5f2cbd6b62f21a9270d88c199f9e01a->leave($__internal_9de259f2a917bc1ef2fe6db1f18f5c3cc5f2cbd6b62f21a9270d88c199f9e01a_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9199fabd7151d57e06bb94a7b3c94f541e9a0c28b82d694a35432a80f9383f3 = $this->env->getExtension("native_profiler");
        $__internal_b9199fabd7151d57e06bb94a7b3c94f541e9a0c28b82d694a35432a80f9383f3->enter($__internal_b9199fabd7151d57e06bb94a7b3c94f541e9a0c28b82d694a35432a80f9383f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_b9199fabd7151d57e06bb94a7b3c94f541e9a0c28b82d694a35432a80f9383f3->leave($__internal_b9199fabd7151d57e06bb94a7b3c94f541e9a0c28b82d694a35432a80f9383f3_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_fc490e54db227a3e9e96515f3ea6b61f4a78a2e659fd40a6142e49483bf2cb78 = $this->env->getExtension("native_profiler");
        $__internal_fc490e54db227a3e9e96515f3ea6b61f4a78a2e659fd40a6142e49483bf2cb78->enter($__internal_fc490e54db227a3e9e96515f3ea6b61f4a78a2e659fd40a6142e49483bf2cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_fc490e54db227a3e9e96515f3ea6b61f4a78a2e659fd40a6142e49483bf2cb78->leave($__internal_fc490e54db227a3e9e96515f3ea6b61f4a78a2e659fd40a6142e49483bf2cb78_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d5002d7517984140919509eb6420463ccdb948f1f421ea66c590a1e32dd038c7 = $this->env->getExtension("native_profiler");
        $__internal_d5002d7517984140919509eb6420463ccdb948f1f421ea66c590a1e32dd038c7->enter($__internal_d5002d7517984140919509eb6420463ccdb948f1f421ea66c590a1e32dd038c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_d5002d7517984140919509eb6420463ccdb948f1f421ea66c590a1e32dd038c7->leave($__internal_d5002d7517984140919509eb6420463ccdb948f1f421ea66c590a1e32dd038c7_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_d70ac630b2ff1e8c579ea237a06199eb521d4cba829a051b2478f655903bbbef = $this->env->getExtension("native_profiler");
        $__internal_d70ac630b2ff1e8c579ea237a06199eb521d4cba829a051b2478f655903bbbef->enter($__internal_d70ac630b2ff1e8c579ea237a06199eb521d4cba829a051b2478f655903bbbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_d70ac630b2ff1e8c579ea237a06199eb521d4cba829a051b2478f655903bbbef->leave($__internal_d70ac630b2ff1e8c579ea237a06199eb521d4cba829a051b2478f655903bbbef_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_79d67e1ecf34f538a3959394e928f92095b2ccf41f0fd3bc7a02b34d7c2b7da4 = $this->env->getExtension("native_profiler");
        $__internal_79d67e1ecf34f538a3959394e928f92095b2ccf41f0fd3bc7a02b34d7c2b7da4->enter($__internal_79d67e1ecf34f538a3959394e928f92095b2ccf41f0fd3bc7a02b34d7c2b7da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            $this->loadTemplate("TSAdminBundle:Users:showUser.html.twig", "@TSAdmin/Users/addSARH.html.twig", 66)->display($context);
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
        $this->loadTemplate("TSAdminBundle:Users:ModalAddSA.html.twig", "@TSAdmin/Users/addSARH.html.twig", 76)->display($context);
        // line 77
        echo " ";
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "@TSAdmin/Users/addSARH.html.twig", 77)->display($context);
        // line 78
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_79d67e1ecf34f538a3959394e928f92095b2ccf41f0fd3bc7a02b34d7c2b7da4->leave($__internal_79d67e1ecf34f538a3959394e928f92095b2ccf41f0fd3bc7a02b34d7c2b7da4_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/addSARH.html.twig";
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
