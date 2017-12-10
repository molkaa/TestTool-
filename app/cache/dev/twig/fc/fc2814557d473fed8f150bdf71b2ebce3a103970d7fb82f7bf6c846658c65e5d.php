<?php

/* TSCandidatBundle::layout.html.twig */
class __TwigTemplate_cafd551ef6cbe1b0df873d5bbf14d74f9c8acba85114cec83118d19350dbdbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "TSCandidatBundle::layout.html.twig", 3);
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
        $__internal_aa247440b6262b87750ef30e75c0507684bc9ca5f687d1a04163a17dc452465a = $this->env->getExtension("native_profiler");
        $__internal_aa247440b6262b87750ef30e75c0507684bc9ca5f687d1a04163a17dc452465a->enter($__internal_aa247440b6262b87750ef30e75c0507684bc9ca5f687d1a04163a17dc452465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa247440b6262b87750ef30e75c0507684bc9ca5f687d1a04163a17dc452465a->leave($__internal_aa247440b6262b87750ef30e75c0507684bc9ca5f687d1a04163a17dc452465a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7cfa70b2695f6786900f805f8026d14167460c7923e0dd9a8ff45899d01e1d0b = $this->env->getExtension("native_profiler");
        $__internal_7cfa70b2695f6786900f805f8026d14167460c7923e0dd9a8ff45899d01e1d0b->enter($__internal_7cfa70b2695f6786900f805f8026d14167460c7923e0dd9a8ff45899d01e1d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7cfa70b2695f6786900f805f8026d14167460c7923e0dd9a8ff45899d01e1d0b->leave($__internal_7cfa70b2695f6786900f805f8026d14167460c7923e0dd9a8ff45899d01e1d0b_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b4a2f1e483c618c7c20fbaea2e2111d6e83acabc43b40124de38890867e9bab = $this->env->getExtension("native_profiler");
        $__internal_0b4a2f1e483c618c7c20fbaea2e2111d6e83acabc43b40124de38890867e9bab->enter($__internal_0b4a2f1e483c618c7c20fbaea2e2111d6e83acabc43b40124de38890867e9bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0b4a2f1e483c618c7c20fbaea2e2111d6e83acabc43b40124de38890867e9bab->leave($__internal_0b4a2f1e483c618c7c20fbaea2e2111d6e83acabc43b40124de38890867e9bab_prof);

    }

    // line 34
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc3a6789bab5cb298eeae7e7ebf8f40d3f0fcc8980a025361cadb5a38f2637d7 = $this->env->getExtension("native_profiler");
        $__internal_dc3a6789bab5cb298eeae7e7ebf8f40d3f0fcc8980a025361cadb5a38f2637d7->enter($__internal_dc3a6789bab5cb298eeae7e7ebf8f40d3f0fcc8980a025361cadb5a38f2637d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 35
        echo "  ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|Candidat
";
        
        $__internal_dc3a6789bab5cb298eeae7e7ebf8f40d3f0fcc8980a025361cadb5a38f2637d7->leave($__internal_dc3a6789bab5cb298eeae7e7ebf8f40d3f0fcc8980a025361cadb5a38f2637d7_prof);

    }

    // line 37
    public function block_header($context, array $blocks = array())
    {
        $__internal_2e488bca6218a78d6ed5272dcbe63852757a0a35aee2363243bfd3ddcf4e316e = $this->env->getExtension("native_profiler");
        $__internal_2e488bca6218a78d6ed5272dcbe63852757a0a35aee2363243bfd3ddcf4e316e->enter($__internal_2e488bca6218a78d6ed5272dcbe63852757a0a35aee2363243bfd3ddcf4e316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 38
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_2e488bca6218a78d6ed5272dcbe63852757a0a35aee2363243bfd3ddcf4e316e->leave($__internal_2e488bca6218a78d6ed5272dcbe63852757a0a35aee2363243bfd3ddcf4e316e_prof);

    }

    // line 40
    public function block_slider($context, array $blocks = array())
    {
        $__internal_db3adaf97172f8bb637317eea2f6b66a2caf876d27e742838f5973379a8a49d1 = $this->env->getExtension("native_profiler");
        $__internal_db3adaf97172f8bb637317eea2f6b66a2caf876d27e742838f5973379a8a49d1->enter($__internal_db3adaf97172f8bb637317eea2f6b66a2caf876d27e742838f5973379a8a49d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 41
        echo "  ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_db3adaf97172f8bb637317eea2f6b66a2caf876d27e742838f5973379a8a49d1->leave($__internal_db3adaf97172f8bb637317eea2f6b66a2caf876d27e742838f5973379a8a49d1_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1839ba6bac47f7da2ca42c3aa28b97b6e99ad96c2cf89e90d902515fc60ca163 = $this->env->getExtension("native_profiler");
        $__internal_1839ba6bac47f7da2ca42c3aa28b97b6e99ad96c2cf89e90d902515fc60ca163->enter($__internal_1839ba6bac47f7da2ca42c3aa28b97b6e99ad96c2cf89e90d902515fc60ca163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_1839ba6bac47f7da2ca42c3aa28b97b6e99ad96c2cf89e90d902515fc60ca163->leave($__internal_1839ba6bac47f7da2ca42c3aa28b97b6e99ad96c2cf89e90d902515fc60ca163_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle::layout.html.twig";
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
