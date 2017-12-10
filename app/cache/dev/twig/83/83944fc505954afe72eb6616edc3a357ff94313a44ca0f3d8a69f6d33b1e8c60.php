<?php

/* @TSCandidat/Candidat/OfferCIN.html.twig */
class __TwigTemplate_001ebbf7f935d7a1e52f7077f16f534c3ad589ac42ffbf29459d05af5c3a2c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/OfferCIN.html.twig", 3);
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
        $__internal_2b184bdd6c503d10d05332baaf28c90d243c355fe11c7b24758930204d7b54d5 = $this->env->getExtension("native_profiler");
        $__internal_2b184bdd6c503d10d05332baaf28c90d243c355fe11c7b24758930204d7b54d5->enter($__internal_2b184bdd6c503d10d05332baaf28c90d243c355fe11c7b24758930204d7b54d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/OfferCIN.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b184bdd6c503d10d05332baaf28c90d243c355fe11c7b24758930204d7b54d5->leave($__internal_2b184bdd6c503d10d05332baaf28c90d243c355fe11c7b24758930204d7b54d5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_537ac0c3744a73369c29eb921c6342082535012b75fd9fe2bda6f02f0c623196 = $this->env->getExtension("native_profiler");
        $__internal_537ac0c3744a73369c29eb921c6342082535012b75fd9fe2bda6f02f0c623196->enter($__internal_537ac0c3744a73369c29eb921c6342082535012b75fd9fe2bda6f02f0c623196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|PostOffer
";
        
        $__internal_537ac0c3744a73369c29eb921c6342082535012b75fd9fe2bda6f02f0c623196->leave($__internal_537ac0c3744a73369c29eb921c6342082535012b75fd9fe2bda6f02f0c623196_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d73dcf5e26c4556eeda4a0efa3a52eae42ebb678dd0a3d8c9ce43d529df9de11 = $this->env->getExtension("native_profiler");
        $__internal_d73dcf5e26c4556eeda4a0efa3a52eae42ebb678dd0a3d8c9ce43d529df9de11->enter($__internal_d73dcf5e26c4556eeda4a0efa3a52eae42ebb678dd0a3d8c9ce43d529df9de11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_d73dcf5e26c4556eeda4a0efa3a52eae42ebb678dd0a3d8c9ce43d529df9de11->leave($__internal_d73dcf5e26c4556eeda4a0efa3a52eae42ebb678dd0a3d8c9ce43d529df9de11_prof);

    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
        $__internal_9f0b7b8bb0fbc03b6a28a06495b84fed7d1c135da77135c88dd781352e9fd081 = $this->env->getExtension("native_profiler");
        $__internal_9f0b7b8bb0fbc03b6a28a06495b84fed7d1c135da77135c88dd781352e9fd081->enter($__internal_9f0b7b8bb0fbc03b6a28a06495b84fed7d1c135da77135c88dd781352e9fd081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9f0b7b8bb0fbc03b6a28a06495b84fed7d1c135da77135c88dd781352e9fd081->leave($__internal_9f0b7b8bb0fbc03b6a28a06495b84fed7d1c135da77135c88dd781352e9fd081_prof);

    }

    // line 14
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_0987af2c80580399a6872adfe6d6d5d145b553acb1962871fcbb6b38443eedba = $this->env->getExtension("native_profiler");
        $__internal_0987af2c80580399a6872adfe6d6d5d145b553acb1962871fcbb6b38443eedba->enter($__internal_0987af2c80580399a6872adfe6d6d5d145b553acb1962871fcbb6b38443eedba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_0987af2c80580399a6872adfe6d6d5d145b553acb1962871fcbb6b38443eedba->leave($__internal_0987af2c80580399a6872adfe6d6d5d145b553acb1962871fcbb6b38443eedba_prof);

    }

    // line 23
    public function block_slider($context, array $blocks = array())
    {
        $__internal_7d0372a4c70afb400dea7c1f84a57bd400934b283eb6a495014844a94f9d9e25 = $this->env->getExtension("native_profiler");
        $__internal_7d0372a4c70afb400dea7c1f84a57bd400934b283eb6a495014844a94f9d9e25->enter($__internal_7d0372a4c70afb400dea7c1f84a57bd400934b283eb6a495014844a94f9d9e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 24
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_7d0372a4c70afb400dea7c1f84a57bd400934b283eb6a495014844a94f9d9e25->leave($__internal_7d0372a4c70afb400dea7c1f84a57bd400934b283eb6a495014844a94f9d9e25_prof);

    }

    // line 26
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_2ded6d1a0a6b6ad8a8de2a287c75d59410acfdee0de390d491f657b121ebbf12 = $this->env->getExtension("native_profiler");
        $__internal_2ded6d1a0a6b6ad8a8de2a287c75d59410acfdee0de390d491f657b121ebbf12->enter($__internal_2ded6d1a0a6b6ad8a8de2a287c75d59410acfdee0de390d491f657b121ebbf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
        
        $__internal_2ded6d1a0a6b6ad8a8de2a287c75d59410acfdee0de390d491f657b121ebbf12->leave($__internal_2ded6d1a0a6b6ad8a8de2a287c75d59410acfdee0de390d491f657b121ebbf12_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5baadb62a11f002d3f4b2e345fd70cab96ddc6878d12243c7c6a6b090fb76849 = $this->env->getExtension("native_profiler");
        $__internal_5baadb62a11f002d3f4b2e345fd70cab96ddc6878d12243c7c6a6b090fb76849->enter($__internal_5baadb62a11f002d3f4b2e345fd70cab96ddc6878d12243c7c6a6b090fb76849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_5baadb62a11f002d3f4b2e345fd70cab96ddc6878d12243c7c6a6b090fb76849->leave($__internal_5baadb62a11f002d3f4b2e345fd70cab96ddc6878d12243c7c6a6b090fb76849_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/OfferCIN.html.twig";
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
