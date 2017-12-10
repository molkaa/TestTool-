<?php

/* TSCandidatBundle:Candidat:OfferNOCIN.html.twig */
class __TwigTemplate_6f135b7bc1b326648b9a4fd07e36990ce56cf6eb941f27014b94d61da1e4963a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "TSCandidatBundle:Candidat:OfferNOCIN.html.twig", 4);
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
        $__internal_013fba67ad80de91634ae9ce85491aed8c9585d3001ea33a9d0e3c11eb4ac5ec = $this->env->getExtension("native_profiler");
        $__internal_013fba67ad80de91634ae9ce85491aed8c9585d3001ea33a9d0e3c11eb4ac5ec->enter($__internal_013fba67ad80de91634ae9ce85491aed8c9585d3001ea33a9d0e3c11eb4ac5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:OfferNOCIN.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_013fba67ad80de91634ae9ce85491aed8c9585d3001ea33a9d0e3c11eb4ac5ec->leave($__internal_013fba67ad80de91634ae9ce85491aed8c9585d3001ea33a9d0e3c11eb4ac5ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81c1d86857453c33f3c160d0bdbc614bcc38a86bc9d821878ed2f680d9b9aa43 = $this->env->getExtension("native_profiler");
        $__internal_81c1d86857453c33f3c160d0bdbc614bcc38a86bc9d821878ed2f680d9b9aa43->enter($__internal_81c1d86857453c33f3c160d0bdbc614bcc38a86bc9d821878ed2f680d9b9aa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|PostOffer
";
        
        $__internal_81c1d86857453c33f3c160d0bdbc614bcc38a86bc9d821878ed2f680d9b9aa43->leave($__internal_81c1d86857453c33f3c160d0bdbc614bcc38a86bc9d821878ed2f680d9b9aa43_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5769d35b8ac8ec7e4c2aea10c2c829cf8d9ee50330e5598d18651373430d9c50 = $this->env->getExtension("native_profiler");
        $__internal_5769d35b8ac8ec7e4c2aea10c2c829cf8d9ee50330e5598d18651373430d9c50->enter($__internal_5769d35b8ac8ec7e4c2aea10c2c829cf8d9ee50330e5598d18651373430d9c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_5769d35b8ac8ec7e4c2aea10c2c829cf8d9ee50330e5598d18651373430d9c50->leave($__internal_5769d35b8ac8ec7e4c2aea10c2c829cf8d9ee50330e5598d18651373430d9c50_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_03a996d9c3cdb7ce874044c049123d0e5f100954d40dd741213482577d39324d = $this->env->getExtension("native_profiler");
        $__internal_03a996d9c3cdb7ce874044c049123d0e5f100954d40dd741213482577d39324d->enter($__internal_03a996d9c3cdb7ce874044c049123d0e5f100954d40dd741213482577d39324d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_03a996d9c3cdb7ce874044c049123d0e5f100954d40dd741213482577d39324d->leave($__internal_03a996d9c3cdb7ce874044c049123d0e5f100954d40dd741213482577d39324d_prof);

    }

    // line 15
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_81bb7569662f7bf6c67ed5273f09464b473d3b06d4ab9fe07c45fc58125dd98f = $this->env->getExtension("native_profiler");
        $__internal_81bb7569662f7bf6c67ed5273f09464b473d3b06d4ab9fe07c45fc58125dd98f->enter($__internal_81bb7569662f7bf6c67ed5273f09464b473d3b06d4ab9fe07c45fc58125dd98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 16
        echo "    <script>
        \$(document).ready(function() {
            var li = document.getElementById('3');
            \$(li).addClass('selected');
        });
    </script>
    ";
        // line 22
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_81bb7569662f7bf6c67ed5273f09464b473d3b06d4ab9fe07c45fc58125dd98f->leave($__internal_81bb7569662f7bf6c67ed5273f09464b473d3b06d4ab9fe07c45fc58125dd98f_prof);

    }

    // line 24
    public function block_slider($context, array $blocks = array())
    {
        $__internal_adbe4847deee129227bb12d3eb97f6434ca50306fe6305796b4128170669b4d9 = $this->env->getExtension("native_profiler");
        $__internal_adbe4847deee129227bb12d3eb97f6434ca50306fe6305796b4128170669b4d9->enter($__internal_adbe4847deee129227bb12d3eb97f6434ca50306fe6305796b4128170669b4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 25
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_adbe4847deee129227bb12d3eb97f6434ca50306fe6305796b4128170669b4d9->leave($__internal_adbe4847deee129227bb12d3eb97f6434ca50306fe6305796b4128170669b4d9_prof);

    }

    // line 27
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_1e5f9c4193286d5c203a00876b6335adda4c3837c0bf112210ddb1ca983677b5 = $this->env->getExtension("native_profiler");
        $__internal_1e5f9c4193286d5c203a00876b6335adda4c3837c0bf112210ddb1ca983677b5->enter($__internal_1e5f9c4193286d5c203a00876b6335adda4c3837c0bf112210ddb1ca983677b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 28
        echo "    <div class=\"article\">
        <p class=\"infopost\">
            <span> <b style=\"font-weight: 700;font-size: 18px \"> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "title", array()), "html", null, true);
        echo " </b> </span>
        </p>
        ";
        // line 33
        echo "        <div class=\"col12\">
            <div style=\"padding:10px;  display: -webkit-box\">
                <div class=\"col3\">  <b>Team:&nbsp&nbsp&nbsp </b> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "team", array()), "html", null, true);
        echo " </div>
                <div class=\"col3\">  <b>Reference:&nbsp </b> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "reference", array()), "html", null, true);
        echo " </div>
                <div class=\"col3\"> <b>Test(s):&nbsp </b> 
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "tests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tests"]) {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tests"], "name", array()), "html", null, true);
            echo "\\
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tests'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " 
                </div>
                <div class=\"col3\">  <b>Posted on:&nbsp </b> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "postedDate", array()), "d M Y"), "html", null, true);
        echo " </div>
            </div>
            <div class=\"divid\"></div>
            <div  style=\"padding:10px; \"  >
                <div class=\"col12\"> 
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "shortDescription", array()), "html", null, true);
        echo "
                </div>
            </div>
            <div >
                <br/>
                <div  style=\"padding:10px; \" >
                    <p  class=\"col12\"> 
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "longDescription", array()), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
        ";
        // line 60
        echo "    </div>
    <div class=\"article\"  style=\" padding-bottom: 40px;padding-right: 20px; padding-left: 20px;\">

        <h3 style=\"padding:10px; \"  >
            <div style=\"color:#000000; font-weight: 700;font-size: 18px ; text-align: center\" >
                You must first complete your formulair
            </div>
        </h3>
        <div style=\"padding:10px; \" >
            <div class=\"divide\"></div>

            <a class=\"btn btn-a\" style=\"float:left\" href=\"#\" onclick=\"self.parent.location.href = '";
        // line 71
        echo $this->env->getExtension('routing')->getPath("ts_candidat_htapply");
        echo "';
                    self.parent.tb_remove();\">
                << now
            </a>

            <a class=\"btn btn-a\" style=\"float:right\" href=\"#\" onclick=\"self.parent.location.href = '";
        // line 76
        echo $this->env->getExtension('routing')->getPath("ts_candidat_offers");
        echo "';
                    self.parent.tb_remove();\">
                >> later
            </a>
        </div>
    </div>
    ";
        // line 82
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "
";
        
        $__internal_1e5f9c4193286d5c203a00876b6335adda4c3837c0bf112210ddb1ca983677b5->leave($__internal_1e5f9c4193286d5c203a00876b6335adda4c3837c0bf112210ddb1ca983677b5_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f083c4bc0a089f73b30d69e6d84fe9efec16eb4336de92dd946b9b5a204c47fe = $this->env->getExtension("native_profiler");
        $__internal_f083c4bc0a089f73b30d69e6d84fe9efec16eb4336de92dd946b9b5a204c47fe->enter($__internal_f083c4bc0a089f73b30d69e6d84fe9efec16eb4336de92dd946b9b5a204c47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_f083c4bc0a089f73b30d69e6d84fe9efec16eb4336de92dd946b9b5a204c47fe->leave($__internal_f083c4bc0a089f73b30d69e6d84fe9efec16eb4336de92dd946b9b5a204c47fe_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:OfferNOCIN.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 85,  241 => 84,  232 => 82,  223 => 76,  215 => 71,  202 => 60,  194 => 54,  184 => 47,  176 => 42,  172 => 40,  163 => 39,  159 => 38,  154 => 36,  150 => 35,  146 => 33,  141 => 30,  137 => 28,  131 => 27,  121 => 25,  115 => 24,  106 => 22,  98 => 16,  92 => 15,  82 => 13,  76 => 12,  67 => 10,  62 => 9,  56 => 8,  46 => 6,  40 => 5,  11 => 4,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\notifications\offerCIN.html.twig #}*/
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
/* */
/*         <h3 style="padding:10px; "  >*/
/*             <div style="color:#000000; font-weight: 700;font-size: 18px ; text-align: center" >*/
/*                 You must first complete your formulair*/
/*             </div>*/
/*         </h3>*/
/*         <div style="padding:10px; " >*/
/*             <div class="divide"></div>*/
/* */
/*             <a class="btn btn-a" style="float:left" href="#" onclick="self.parent.location.href = '{{ path('ts_candidat_htapply')}}';*/
/*                     self.parent.tb_remove();">*/
/*                 << now*/
/*             </a>*/
/* */
/*             <a class="btn btn-a" style="float:right" href="#" onclick="self.parent.location.href = '{{ path('ts_candidat_offers')}}';*/
/*                     self.parent.tb_remove();">*/
/*                 >> later*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     {{parent()}}*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
