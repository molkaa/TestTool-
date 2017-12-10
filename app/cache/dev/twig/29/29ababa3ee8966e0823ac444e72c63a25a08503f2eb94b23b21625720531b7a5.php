<?php

/* TSCandidatBundle:Candidat:OfferCIN.html.twig */
class __TwigTemplate_90b52a09fac425b2597622a504241f447b6c7e23c279ad26f03a306dc341f55f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:OfferCIN.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a65587cb0b32b3489d0f8bd6bce855d27ba9765fef361f68c5403d07169660 = $this->env->getExtension("native_profiler");
        $__internal_e5a65587cb0b32b3489d0f8bd6bce855d27ba9765fef361f68c5403d07169660->enter($__internal_e5a65587cb0b32b3489d0f8bd6bce855d27ba9765fef361f68c5403d07169660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:OfferCIN.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a65587cb0b32b3489d0f8bd6bce855d27ba9765fef361f68c5403d07169660->leave($__internal_e5a65587cb0b32b3489d0f8bd6bce855d27ba9765fef361f68c5403d07169660_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe616adf574c53f36ace816f161da0b4ccea2fd4a9c4a3b362c33d36f431612 = $this->env->getExtension("native_profiler");
        $__internal_7fe616adf574c53f36ace816f161da0b4ccea2fd4a9c4a3b362c33d36f431612->enter($__internal_7fe616adf574c53f36ace816f161da0b4ccea2fd4a9c4a3b362c33d36f431612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|PostOffer
";
        
        $__internal_7fe616adf574c53f36ace816f161da0b4ccea2fd4a9c4a3b362c33d36f431612->leave($__internal_7fe616adf574c53f36ace816f161da0b4ccea2fd4a9c4a3b362c33d36f431612_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e1fbe5281bcb7fe75648eecf11b75f70e471a3786885b49f71821579af29729 = $this->env->getExtension("native_profiler");
        $__internal_7e1fbe5281bcb7fe75648eecf11b75f70e471a3786885b49f71821579af29729->enter($__internal_7e1fbe5281bcb7fe75648eecf11b75f70e471a3786885b49f71821579af29729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7e1fbe5281bcb7fe75648eecf11b75f70e471a3786885b49f71821579af29729->leave($__internal_7e1fbe5281bcb7fe75648eecf11b75f70e471a3786885b49f71821579af29729_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_1deea758d83f1baa21bf21e575ff6b0e3910a42212ce07abfe3eae78862b8ccd = $this->env->getExtension("native_profiler");
        $__internal_1deea758d83f1baa21bf21e575ff6b0e3910a42212ce07abfe3eae78862b8ccd->enter($__internal_1deea758d83f1baa21bf21e575ff6b0e3910a42212ce07abfe3eae78862b8ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_1deea758d83f1baa21bf21e575ff6b0e3910a42212ce07abfe3eae78862b8ccd->leave($__internal_1deea758d83f1baa21bf21e575ff6b0e3910a42212ce07abfe3eae78862b8ccd_prof);

    }

    // line 14
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_a783ef16fe81c747c97007081a8eb1b1ba751cb20e35e3810c186f9ae4b2481c = $this->env->getExtension("native_profiler");
        $__internal_a783ef16fe81c747c97007081a8eb1b1ba751cb20e35e3810c186f9ae4b2481c->enter($__internal_a783ef16fe81c747c97007081a8eb1b1ba751cb20e35e3810c186f9ae4b2481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 15
        echo "    <script>
        \$(document).ready(function() {
            var li = document.getElementById('3');
            \$(li).addClass('selected');
        });
    </script>
    ";
        // line 21
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_a783ef16fe81c747c97007081a8eb1b1ba751cb20e35e3810c186f9ae4b2481c->leave($__internal_a783ef16fe81c747c97007081a8eb1b1ba751cb20e35e3810c186f9ae4b2481c_prof);

    }

    // line 23
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7e98afb926ceb8ce9e82a19adf52510738d3758f67af178b33a0a78699a22199 = $this->env->getExtension("native_profiler");
        $__internal_7e98afb926ceb8ce9e82a19adf52510738d3758f67af178b33a0a78699a22199->enter($__internal_7e98afb926ceb8ce9e82a19adf52510738d3758f67af178b33a0a78699a22199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 24
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_7e98afb926ceb8ce9e82a19adf52510738d3758f67af178b33a0a78699a22199->leave($__internal_7e98afb926ceb8ce9e82a19adf52510738d3758f67af178b33a0a78699a22199_prof);

    }

    // line 26
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_43ef4b4a483ec6b2b777a00b9a538896e5db0ea5e845d04c37cede72d3ae3695 = $this->env->getExtension("native_profiler");
        $__internal_43ef4b4a483ec6b2b777a00b9a538896e5db0ea5e845d04c37cede72d3ae3695->enter($__internal_43ef4b4a483ec6b2b777a00b9a538896e5db0ea5e845d04c37cede72d3ae3695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 27
        echo "    <div class=\"article\">
        <p class=\"infopost\">
            <span> <b style=\"font-weight: 700;font-size: 18px \"> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "title", array()), "html", null, true);
        echo " </b> </span>
        </p>
        ";
        // line 32
        echo "        <div class=\"col12\">
            <div style=\"padding:10px;  display: -webkit-box\">
                <div class=\"col3\">  <b>Team:&nbsp&nbsp&nbsp </b> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "team", array()), "html", null, true);
        echo " </div>
                <div class=\"col3\">  <b>Reference:&nbsp </b> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "reference", array()), "html", null, true);
        echo " </div>
                <div class=\"col3\"> <b>Test(s):&nbsp </b> 
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "tests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tests"]) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tests"], "name", array()), "html", null, true);
            echo "\\
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tests'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " 
                </div>
                <div class=\"col3\">  <b>Posted on:&nbsp </b> ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "postedDate", array()), "d M Y"), "html", null, true);
        echo " </div>
            </div>
            <div class=\"divid\"></div>
            <div  style=\"padding:10px; \"  >
                <div class=\"col12\"> 
                    ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "shortDescription", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div >
                <br/>
                <div  style=\"padding:10px; \" >
                    <p  class=\"col12\"> 
                        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "longDescription", array()), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
        ";
        // line 59
        echo "    </div>
    <div class=\"article\"  style=\" padding-bottom: 40px;padding-right: 20px; padding-left: 20px;\">
        
        <h3 style=\"padding:10px; \"  >
            <div style=\"color:#000000; font-weight: 700;font-size: 18px ; text-align: center\" >
                Do you want to apply for this offer ?
            </div>
        </h3>
        <div style=\"padding:10px; \" >
            <div class=\"divide\"></div>

            <a class=\"btn btn-a\" style=\"float:left\" href=\"#\" onclick=\"self.parent.location.href = '";
        // line 70
        echo $this->env->getExtension('routing')->getPath("ts_candidat_confirmPostOffer");
        echo "?ref=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "reference", array()), "html", null, true);
        echo "';
                    self.parent.tb_remove();\">
                << yes
            </a>

            <a class=\"btn btn-a\" style=\"float:right\" href=\"#\" onclick=\"self.parent.location.href = '";
        // line 75
        echo $this->env->getExtension('routing')->getPath("ts_candidat_offers");
        echo "';
                    self.parent.tb_remove();\">
                >> no
            </a>
        </div>
    </div>
    ";
        // line 81
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_43ef4b4a483ec6b2b777a00b9a538896e5db0ea5e845d04c37cede72d3ae3695->leave($__internal_43ef4b4a483ec6b2b777a00b9a538896e5db0ea5e845d04c37cede72d3ae3695_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0de5c32aad6de00d89db1eafa27c8dc6d4ff848c26b6c4c6bb7af52d6acb6856 = $this->env->getExtension("native_profiler");
        $__internal_0de5c32aad6de00d89db1eafa27c8dc6d4ff848c26b6c4c6bb7af52d6acb6856->enter($__internal_0de5c32aad6de00d89db1eafa27c8dc6d4ff848c26b6c4c6bb7af52d6acb6856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_0de5c32aad6de00d89db1eafa27c8dc6d4ff848c26b6c4c6bb7af52d6acb6856->leave($__internal_0de5c32aad6de00d89db1eafa27c8dc6d4ff848c26b6c4c6bb7af52d6acb6856_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:OfferCIN.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 84,  243 => 83,  234 => 81,  225 => 75,  215 => 70,  202 => 59,  194 => 53,  184 => 46,  176 => 41,  172 => 39,  163 => 38,  159 => 37,  154 => 35,  150 => 34,  146 => 32,  141 => 29,  137 => 27,  131 => 26,  121 => 24,  115 => 23,  106 => 21,  98 => 15,  92 => 14,  82 => 12,  76 => 11,  67 => 9,  62 => 8,  56 => 7,  46 => 5,  40 => 4,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\notifications\offerCIN.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|PostOffer*/
/* {% endblock %}*/
/* {% block stylesheets%}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/boutons.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             var li = document.getElementById('3');*/
/*             $(li).addClass('selected');*/
/*         });*/
/*     </script>*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block slider %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/*     <div class="article">*/
/*         <p class="infopost">*/
/*             <span> <b style="font-weight: 700;font-size: 18px "> {{ offer.title}} </b> </span>*/
/*         </p>*/
/*         {#</p>#}*/
/*         <div class="col12">*/
/*             <div style="padding:10px;  display: -webkit-box">*/
/*                 <div class="col3">  <b>Team:&nbsp&nbsp&nbsp </b> {{ offer.team}} </div>*/
/*                 <div class="col3">  <b>Reference:&nbsp </b> {{ offer.reference}} </div>*/
/*                 <div class="col3"> <b>Test(s):&nbsp </b> */
/*                     {% for tests in offer.tests %}*/
/*                         {{ tests.name}}\*/
/*                     {% endfor %} */
/*                 </div>*/
/*                 <div class="col3">  <b>Posted on:&nbsp </b> {{ offer.postedDate|date('d M Y') }} </div>*/
/*             </div>*/
/*             <div class="divid"></div>*/
/*             <div  style="padding:10px; "  >*/
/*                 <div class="col12"> */
/*                     {{ offer.shortDescription }}*/
/*                 </div>*/
/*             </div>*/
/*             <div >*/
/*                 <br/>*/
/*                 <div  style="padding:10px; " >*/
/*                     <p  class="col12"> */
/*                         {{ offer.longDescription }}*/
/*                     </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#    *******************************#}*/
/*     </div>*/
/*     <div class="article"  style=" padding-bottom: 40px;padding-right: 20px; padding-left: 20px;">*/
/*         */
/*         <h3 style="padding:10px; "  >*/
/*             <div style="color:#000000; font-weight: 700;font-size: 18px ; text-align: center" >*/
/*                 Do you want to apply for this offer ?*/
/*             </div>*/
/*         </h3>*/
/*         <div style="padding:10px; " >*/
/*             <div class="divide"></div>*/
/* */
/*             <a class="btn btn-a" style="float:left" href="#" onclick="self.parent.location.href = '{{ path('ts_candidat_confirmPostOffer')}}?ref={{offer.reference}}';*/
/*                     self.parent.tb_remove();">*/
/*                 << yes*/
/*             </a>*/
/* */
/*             <a class="btn btn-a" style="float:right" href="#" onclick="self.parent.location.href = '{{ path('ts_candidat_offers')}}';*/
/*                     self.parent.tb_remove();">*/
/*                 >> no*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
