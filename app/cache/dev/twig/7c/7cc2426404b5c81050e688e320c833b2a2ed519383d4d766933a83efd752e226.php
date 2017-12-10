<?php

/* @TSCandidat/Candidat/OfferNOCIN.html.twig */
class __TwigTemplate_2f9a4eb3452193c094b0eece430922265da34b263847d265cd517fba8a1691c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/OfferNOCIN.html.twig", 4);
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
        $__internal_e1cda73aaabf5f203f5b0be9c6db6c8b54f424533f1fa1de6ba6a4f779e611d7 = $this->env->getExtension("native_profiler");
        $__internal_e1cda73aaabf5f203f5b0be9c6db6c8b54f424533f1fa1de6ba6a4f779e611d7->enter($__internal_e1cda73aaabf5f203f5b0be9c6db6c8b54f424533f1fa1de6ba6a4f779e611d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/OfferNOCIN.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1cda73aaabf5f203f5b0be9c6db6c8b54f424533f1fa1de6ba6a4f779e611d7->leave($__internal_e1cda73aaabf5f203f5b0be9c6db6c8b54f424533f1fa1de6ba6a4f779e611d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bb3edb1b54f6403e9ec6e0b193ca04173af897341bd75b2689c1bcb906edd18 = $this->env->getExtension("native_profiler");
        $__internal_9bb3edb1b54f6403e9ec6e0b193ca04173af897341bd75b2689c1bcb906edd18->enter($__internal_9bb3edb1b54f6403e9ec6e0b193ca04173af897341bd75b2689c1bcb906edd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|PostOffer
";
        
        $__internal_9bb3edb1b54f6403e9ec6e0b193ca04173af897341bd75b2689c1bcb906edd18->leave($__internal_9bb3edb1b54f6403e9ec6e0b193ca04173af897341bd75b2689c1bcb906edd18_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_669ba61bd8d8aecd01e780d808cc3a3a5715cfff8f06ce81c05e6fe7e56c213a = $this->env->getExtension("native_profiler");
        $__internal_669ba61bd8d8aecd01e780d808cc3a3a5715cfff8f06ce81c05e6fe7e56c213a->enter($__internal_669ba61bd8d8aecd01e780d808cc3a3a5715cfff8f06ce81c05e6fe7e56c213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_669ba61bd8d8aecd01e780d808cc3a3a5715cfff8f06ce81c05e6fe7e56c213a->leave($__internal_669ba61bd8d8aecd01e780d808cc3a3a5715cfff8f06ce81c05e6fe7e56c213a_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_9498d7a9a16721ba3919ce545bd6bb70bc080859a8b77abb14b78159553a615c = $this->env->getExtension("native_profiler");
        $__internal_9498d7a9a16721ba3919ce545bd6bb70bc080859a8b77abb14b78159553a615c->enter($__internal_9498d7a9a16721ba3919ce545bd6bb70bc080859a8b77abb14b78159553a615c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_9498d7a9a16721ba3919ce545bd6bb70bc080859a8b77abb14b78159553a615c->leave($__internal_9498d7a9a16721ba3919ce545bd6bb70bc080859a8b77abb14b78159553a615c_prof);

    }

    // line 15
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_d817dc1798cda235e86384cf623bb47697d804a96d6c86710b5a6764c2f6e955 = $this->env->getExtension("native_profiler");
        $__internal_d817dc1798cda235e86384cf623bb47697d804a96d6c86710b5a6764c2f6e955->enter($__internal_d817dc1798cda235e86384cf623bb47697d804a96d6c86710b5a6764c2f6e955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

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
        
        $__internal_d817dc1798cda235e86384cf623bb47697d804a96d6c86710b5a6764c2f6e955->leave($__internal_d817dc1798cda235e86384cf623bb47697d804a96d6c86710b5a6764c2f6e955_prof);

    }

    // line 24
    public function block_slider($context, array $blocks = array())
    {
        $__internal_ac878c5c067a97dac5587a00c5a9e475007f78f685a43d8d2cbeeabf8cb2dfc3 = $this->env->getExtension("native_profiler");
        $__internal_ac878c5c067a97dac5587a00c5a9e475007f78f685a43d8d2cbeeabf8cb2dfc3->enter($__internal_ac878c5c067a97dac5587a00c5a9e475007f78f685a43d8d2cbeeabf8cb2dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 25
        echo "    ";
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_ac878c5c067a97dac5587a00c5a9e475007f78f685a43d8d2cbeeabf8cb2dfc3->leave($__internal_ac878c5c067a97dac5587a00c5a9e475007f78f685a43d8d2cbeeabf8cb2dfc3_prof);

    }

    // line 27
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_0409f189da32089ac2e09bceb8a79934370eb850feace80ac120ac329ad0e350 = $this->env->getExtension("native_profiler");
        $__internal_0409f189da32089ac2e09bceb8a79934370eb850feace80ac120ac329ad0e350->enter($__internal_0409f189da32089ac2e09bceb8a79934370eb850feace80ac120ac329ad0e350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

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
        
        $__internal_0409f189da32089ac2e09bceb8a79934370eb850feace80ac120ac329ad0e350->leave($__internal_0409f189da32089ac2e09bceb8a79934370eb850feace80ac120ac329ad0e350_prof);

    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        $__internal_eb5ad29e090eb92c4575d37ffabe86ddf4cfa738192920d4cf3d00822c4a72c1 = $this->env->getExtension("native_profiler");
        $__internal_eb5ad29e090eb92c4575d37ffabe86ddf4cfa738192920d4cf3d00822c4a72c1->enter($__internal_eb5ad29e090eb92c4575d37ffabe86ddf4cfa738192920d4cf3d00822c4a72c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 85
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_eb5ad29e090eb92c4575d37ffabe86ddf4cfa738192920d4cf3d00822c4a72c1->leave($__internal_eb5ad29e090eb92c4575d37ffabe86ddf4cfa738192920d4cf3d00822c4a72c1_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/OfferNOCIN.html.twig";
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
