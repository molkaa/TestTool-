<?php

/* @TSCandidat/layout.html.twig */
class __TwigTemplate_fec026e60ebadc4a2ef339a854f6aacfe2e9d91d531378cc5c08a7ca1d84f81f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@TSCandidat/layout.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'slider' => array($this, 'block_slider'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31b1ec9fc2aa53a990a869bb9d15a0762f5adc1c171e7436b8a5ae2ffea94e47 = $this->env->getExtension("native_profiler");
        $__internal_31b1ec9fc2aa53a990a869bb9d15a0762f5adc1c171e7436b8a5ae2ffea94e47->enter($__internal_31b1ec9fc2aa53a990a869bb9d15a0762f5adc1c171e7436b8a5ae2ffea94e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b1ec9fc2aa53a990a869bb9d15a0762f5adc1c171e7436b8a5ae2ffea94e47->leave($__internal_31b1ec9fc2aa53a990a869bb9d15a0762f5adc1c171e7436b8a5ae2ffea94e47_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b010e6fcc12ec86d4b8c802555ba7d0899d3ea0df1cece4ae0a66357ea775619 = $this->env->getExtension("native_profiler");
        $__internal_b010e6fcc12ec86d4b8c802555ba7d0899d3ea0df1cece4ae0a66357ea775619->enter($__internal_b010e6fcc12ec86d4b8c802555ba7d0899d3ea0df1cece4ae0a66357ea775619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_b010e6fcc12ec86d4b8c802555ba7d0899d3ea0df1cece4ae0a66357ea775619->leave($__internal_b010e6fcc12ec86d4b8c802555ba7d0899d3ea0df1cece4ae0a66357ea775619_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e37e9ad0dab982ec46b1293c8d6a6d748acfe265c8bb32218f0896cab18b1c6 = $this->env->getExtension("native_profiler");
        $__internal_8e37e9ad0dab982ec46b1293c8d6a6d748acfe265c8bb32218f0896cab18b1c6->enter($__internal_8e37e9ad0dab982ec46b1293c8d6a6d748acfe265c8bb32218f0896cab18b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.8.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery.ba-resize.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
";
        // line 31
        echo "
";
        // line 32
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_8e37e9ad0dab982ec46b1293c8d6a6d748acfe265c8bb32218f0896cab18b1c6->leave($__internal_8e37e9ad0dab982ec46b1293c8d6a6d748acfe265c8bb32218f0896cab18b1c6_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_291a8e44b7c9b4e86cb14027f5bed8d7ffad3c0c76cdbca86c281efe46ff7409 = $this->env->getExtension("native_profiler");
        $__internal_291a8e44b7c9b4e86cb14027f5bed8d7ffad3c0c76cdbca86c281efe46ff7409->enter($__internal_291a8e44b7c9b4e86cb14027f5bed8d7ffad3c0c76cdbca86c281efe46ff7409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|Candidat
";
        
        $__internal_291a8e44b7c9b4e86cb14027f5bed8d7ffad3c0c76cdbca86c281efe46ff7409->leave($__internal_291a8e44b7c9b4e86cb14027f5bed8d7ffad3c0c76cdbca86c281efe46ff7409_prof);

    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        $__internal_34cffcc2da4ddc9accf3d5314bfaa6e5e00f4181c4b570461dcb47bd71b5f707 = $this->env->getExtension("native_profiler");
        $__internal_34cffcc2da4ddc9accf3d5314bfaa6e5e00f4181c4b570461dcb47bd71b5f707->enter($__internal_34cffcc2da4ddc9accf3d5314bfaa6e5e00f4181c4b570461dcb47bd71b5f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_34cffcc2da4ddc9accf3d5314bfaa6e5e00f4181c4b570461dcb47bd71b5f707->leave($__internal_34cffcc2da4ddc9accf3d5314bfaa6e5e00f4181c4b570461dcb47bd71b5f707_prof);

    }

    // line 40
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7affe3767571eba05fb09e7eab77b86be95d598db1fb428ec8aaeed77ab5d9fe = $this->env->getExtension("native_profiler");
        $__internal_7affe3767571eba05fb09e7eab77b86be95d598db1fb428ec8aaeed77ab5d9fe->enter($__internal_7affe3767571eba05fb09e7eab77b86be95d598db1fb428ec8aaeed77ab5d9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 41
        echo "  ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_7affe3767571eba05fb09e7eab77b86be95d598db1fb428ec8aaeed77ab5d9fe->leave($__internal_7affe3767571eba05fb09e7eab77b86be95d598db1fb428ec8aaeed77ab5d9fe_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e4dacd6f300baccb87a3530697f2629e96d05a0df42a4f3f4c42ab63e1c6d885 = $this->env->getExtension("native_profiler");
        $__internal_e4dacd6f300baccb87a3530697f2629e96d05a0df42a4f3f4c42ab63e1c6d885->enter($__internal_e4dacd6f300baccb87a3530697f2629e96d05a0df42a4f3f4c42ab63e1c6d885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_e4dacd6f300baccb87a3530697f2629e96d05a0df42a4f3f4c42ab63e1c6d885->leave($__internal_e4dacd6f300baccb87a3530697f2629e96d05a0df42a4f3f4c42ab63e1c6d885_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 78,  157 => 77,  147 => 41,  141 => 40,  131 => 38,  125 => 37,  115 => 35,  109 => 34,  100 => 32,  97 => 31,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  64 => 9,  58 => 8,  49 => 6,  45 => 5,  39 => 4,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-ui-1.10.3.custom.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.8.2.min.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery.ba-resize.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/jquery-1.9.1.js') }}"></script>*/
/* <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/* {#<script type="text/javascript"> */
/*     function noBack() {*/
/*         window.history.forward()*/
/*     } */
/*     noBack(); */
/*     window.onload = noBack; */
/*     window.onpageshow = function(evt) {*/
/*         if (evt.persisted)*/
/*             noBack();*/
/*     } ;*/
/*     window.onunload = function() {*/
/*         void(O);*/
/*     } ;*/
/* </script> #}*/
/* */
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block title %}*/
/*   {{ parent() }}|Candidat*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {#{% block sidebar %}*/
/* <div class="gadget">*/
/*     <h2 class="star" >*/
/*         <img src="../../images/social-media.gif" />*/
/*         <span>Social</span> Media*/
/*     </h2>*/
/*     <div class="clr"></div>*/
/*     <ul class="sb_menu">*/
/*         <li>*/
/*             <img src="../../images/f_icon.gif" />*/
/*             <a href="http://www.facebook.com/SunGard">Find us on Facebook</a>*/
/*         </li>*/
/*         <li>*/
/*             <img src="../../images/t_icon.gif" />*/
/*             <a href="http://www.twitter.com/SunGard">Follow us on Twitter</a>*/
/*         </li>*/
/*         <li>*/
/*             <img src="../../images/b_icon.jpg" />*/
/*             <a href="http://blogs.sungard.com">Visit our Blog Center</a>*/
/*         </li>*/
/*     */
/*     </ul>*/
/* </div>*/
/* <div class="gadget">*/
/*     <h2 class="star">*/
/*         <img src="../../images/sp_icon.png" style="size: 18px" />*/
/*         <span>Sponsors</span>*/
/*     </h2>*/
/*     <div class="clr"></div>*/
/*     <ul class="ex_menu">*/
/*       <img src="../../images/sp1.jpg"  />*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}#}*/
/* {% block footer %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
