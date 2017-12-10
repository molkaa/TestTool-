<?php

/* @TSAdmin/header.html.twig */
class __TwigTemplate_4ad9752a9e71ed1c39a7b83e7b79128b3da78f75a85121fd0df0184001142e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06bcdb7c638883759f85622c500f28c074f54cdde940fd0a70a4bc6dddccd72f = $this->env->getExtension("native_profiler");
        $__internal_06bcdb7c638883759f85622c500f28c074f54cdde940fd0a70a4bc6dddccd72f->enter($__internal_06bcdb7c638883759f85622c500f28c074f54cdde940fd0a70a4bc6dddccd72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/header.html.twig"));

        // line 1
        echo "
<!-- #page-header -->
<div id=\"page-header\" class=\"clearfix\">
    <!-- #logo -->
    <div id=\"header-logo\">
        <a href=\"javascript:;\" class=\"tooltip-button\" data-placement=\"bottom\" title=\"Close sidebar\" id=\"close-sidebar\">
            <i class=\"glyph-icon icon-caret-left\"></i>
        </a>
        <a href=\"javascript:;\" class=\"tooltip-button hidden\" data-placement=\"bottom\" title=\"Open sidebar\" id=\"rm-close-sidebar\">
            <i class=\"glyph-icon icon-caret-right\"></i>
        </a>
        <a href=\"javascript:;\" class=\"tooltip-button hidden\" title=\"Navigation Menu\" id=\"responsive-open-menu\">
            <i class=\"glyph-icon icon-align-justify\"></i>
\t\t\t
        </a>
        <img style=\"padding:20px \"src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">
        <i class=\"opacity-80\"></i>
    </div>
    <!-- #page -->
  
    <!-- #page -->
    <div class=\"hide\" id=\"white-modal-80\" title=\"Dialog with tabs\">
        <div class=\"tabs pad15A remove-border opacity-80\">
            <ul class=\"opacity-80\">
                <li><a href=\"#example-tabs-1\">First</a></li>
                <li><a href=\"#example-tabs-2\">Second</a></li>
                <li><a href=\"#example-tabs-3\">Third</a></li>
            </ul>
            <div id=\"example-tabs-1\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                </p>
            </div>
            <div id=\"example-tabs-2\">
                <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.
                </p>
                <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                </p>
            </div>
            <div id=\"example-tabs-3\">
                <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                </p>
                <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
                </p>
            </div>
        </div>
        <div class=\"pad10A\">
            <div class=\"infobox success-bg radius-all-4\">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>
            </div>
        </div>
        <div class=\"ui-dialog-buttonpane clearfix\">

            <a href=\"dropdown_menus.html\" class=\"btn medium float-left bg-azure\">
                <span class=\"button-content text-transform-upr font-size-11\">Dropdown menus</span>
            </a>
            <div class=\"button-group float-right\">
                <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                    <i class=\"glyph-icon icon-star\"></i>
                </a>
                <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                    <i class=\"glyph-icon icon-random\"></i>
                </a>
                <a href=\"buttons.html\" class=\"btn medium bg-black\" title=\"View more buttons examples\">
                    <i class=\"glyph-icon icon-map-marker\"></i>
                </a>
            </div>
            <a href=\"javascript:;\" class=\"medium btn primary-bg-alt float-right mrg10R tooltip-button\" data-placement=\"left\" title=\"Remove comment\">
                <i class=\"glyph-icon icon-plus\"></i>
            </a>

        </div>
    </div>
    <!-- #right-icon -->
    ";
        // line 81
        echo "    <!-- #user-profile-->
    <div class=\"user-profile dropdown\">
        <a href=\"javascript:;\" title=\"\" class=\"user-ico clearfix\" data-toggle=\"dropdown\">
            ";
        // line 84
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "            <i class=\"glyph-icon icon-chevron-down\"></i>
        </a>
        <ul class=\"dropdown-menu float-right\">
          
         
            <li>
                <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("tsldap_logout");
        echo "\" title=\"\">
                    <i class=\"glyph-icon icon-signout font-size-13 mrg5R\"></i>
                    <span class=\"font-bold\">Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #dash-menu -->
   
    <!-- #icons -->
    <div class=\"top-icon-bar\">
        
    </div>

</div>
<script>

    function changeEditValue(_this)
    {
        var tr = document.getElementById(_this.id + '#');

        if (tr.style.display === \"none\") {
            tr.style.display = \"block\";
        }
        else {
            tr.style.display = \"none\";
        }
    }
  
</script>";
        
        $__internal_06bcdb7c638883759f85622c500f28c074f54cdde940fd0a70a4bc6dddccd72f->leave($__internal_06bcdb7c638883759f85622c500f28c074f54cdde940fd0a70a4bc6dddccd72f_prof);

    }

    // line 84
    public function block_header($context, array $blocks = array())
    {
        $__internal_a7b79fa15ee60800887a3620546ad35ea905901b7822fd50ce9ceb7c2fc49d43 = $this->env->getExtension("native_profiler");
        $__internal_a7b79fa15ee60800887a3620546ad35ea905901b7822fd50ce9ceb7c2fc49d43->enter($__internal_a7b79fa15ee60800887a3620546ad35ea905901b7822fd50ce9ceb7c2fc49d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 85
        echo "                <img width=\"36\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "picture"), "method"), "html", null, true);
        echo "\" alt=\"\">
                <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "username"), "method"), "html", null, true);
        echo "</span>
            ";
        
        $__internal_a7b79fa15ee60800887a3620546ad35ea905901b7822fd50ce9ceb7c2fc49d43->leave($__internal_a7b79fa15ee60800887a3620546ad35ea905901b7822fd50ce9ceb7c2fc49d43_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 86,  161 => 85,  155 => 84,  118 => 94,  110 => 88,  108 => 84,  103 => 81,  40 => 16,  23 => 1,);
    }
}
/* */
/* <!-- #page-header -->*/
/* <div id="page-header" class="clearfix">*/
/*     <!-- #logo -->*/
/*     <div id="header-logo">*/
/*         <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">*/
/*             <i class="glyph-icon icon-caret-left"></i>*/
/*         </a>*/
/*         <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">*/
/*             <i class="glyph-icon icon-caret-right"></i>*/
/*         </a>*/
/*         <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">*/
/*             <i class="glyph-icon icon-align-justify"></i>*/
/* 			*/
/*         </a>*/
/*         <img style="padding:20px "src="{{ asset('assets/images/logo.png')}}" alt="">*/
/*         <i class="opacity-80"></i>*/
/*     </div>*/
/*     <!-- #page -->*/
/*   */
/*     <!-- #page -->*/
/*     <div class="hide" id="white-modal-80" title="Dialog with tabs">*/
/*         <div class="tabs pad15A remove-border opacity-80">*/
/*             <ul class="opacity-80">*/
/*                 <li><a href="#example-tabs-1">First</a></li>*/
/*                 <li><a href="#example-tabs-2">Second</a></li>*/
/*                 <li><a href="#example-tabs-3">Third</a></li>*/
/*             </ul>*/
/*             <div id="example-tabs-1">*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.*/
/*                 </p>*/
/*                 <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                 </p>*/
/*             </div>*/
/*             <div id="example-tabs-2">*/
/*                 <p>Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.*/
/*                 </p>*/
/*                 <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                 </p>*/
/*             </div>*/
/*             <div id="example-tabs-3">*/
/*                 <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                 </p>*/
/*                 <p>Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="pad10A">*/
/*             <div class="infobox success-bg radius-all-4">*/
/*                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="ui-dialog-buttonpane clearfix">*/
/* */
/*             <a href="dropdown_menus.html" class="btn medium float-left bg-azure">*/
/*                 <span class="button-content text-transform-upr font-size-11">Dropdown menus</span>*/
/*             </a>*/
/*             <div class="button-group float-right">*/
/*                 <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                     <i class="glyph-icon icon-star"></i>*/
/*                 </a>*/
/*                 <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                     <i class="glyph-icon icon-random"></i>*/
/*                 </a>*/
/*                 <a href="buttons.html" class="btn medium bg-black" title="View more buttons examples">*/
/*                     <i class="glyph-icon icon-map-marker"></i>*/
/*                 </a>*/
/*             </div>*/
/*             <a href="javascript:;" class="medium btn primary-bg-alt float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">*/
/*                 <i class="glyph-icon icon-plus"></i>*/
/*             </a>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- #right-icon -->*/
/*     {#  <div class="user-profile hidden-mobile">*/
/*           <a href="javascript:;" title="" id="open-left-menu" class="updateEasyPieChart user-ico clearfix">*/
/*               <i class="glyph-icon icon-th-list"></i>*/
/*           </a>*/
/*       </div>#}*/
/*     <!-- #user-profile-->*/
/*     <div class="user-profile dropdown">*/
/*         <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">*/
/*             {% block header %}*/
/*                 <img width="36" src="{{ app.session.get('picture')}}" alt="">*/
/*                 <span>{{ app.session.get('username')}}</span>*/
/*             {% endblock %}*/
/*             <i class="glyph-icon icon-chevron-down"></i>*/
/*         </a>*/
/*         <ul class="dropdown-menu float-right">*/
/*           */
/*          */
/*             <li>*/
/*                 <a href="{{path('tsldap_logout')}}" title="">*/
/*                     <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>*/
/*                     <span class="font-bold">Logout</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- #dash-menu -->*/
/*    */
/*     <!-- #icons -->*/
/*     <div class="top-icon-bar">*/
/*         */
/*     </div>*/
/* */
/* </div>*/
/* <script>*/
/* */
/*     function changeEditValue(_this)*/
/*     {*/
/*         var tr = document.getElementById(_this.id + '#');*/
/* */
/*         if (tr.style.display === "none") {*/
/*             tr.style.display = "block";*/
/*         }*/
/*         else {*/
/*             tr.style.display = "none";*/
/*         }*/
/*     }*/
/*   */
/* </script>*/
