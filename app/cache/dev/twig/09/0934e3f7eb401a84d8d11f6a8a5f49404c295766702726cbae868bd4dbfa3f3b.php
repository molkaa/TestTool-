<?php

/* @TSCandidat/Candidat/offer.html.twig */
class __TwigTemplate_a6275e8aefaacc83df18bf996c594563591b2f8c1d43190e163401effef7dc06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c2fba520f1909c61505d2af1307cf463e3fd5d7f7bb673d84e6de4914f97f91 = $this->env->getExtension("native_profiler");
        $__internal_7c2fba520f1909c61505d2af1307cf463e3fd5d7f7bb673d84e6de4914f97f91->enter($__internal_7c2fba520f1909c61505d2af1307cf463e3fd5d7f7bb673d84e6de4914f97f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/offer.html.twig"));

        // line 2
        echo "
<div class=\"article\">
    <p class=\"infopost\">

        <a id=\"read-box";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeReadElement(this);\"  style=\"float: right\" title=\"Read More\">
            <img src=\"/TestTool/web/images/icons/more.gif\" />
        </a>
      
        <a id=\"pop\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ts_candidat_postOffer");
        echo "?ref=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "reference", array()), "html", null, true);
        echo "\"  class=\"read\"  style=\"float: right\" title=\"Apply\">
            <img src=\"/TestTool/web/images/icons/apply.png\" />
        </a>
        <span> <b style=\"font-weight: 700;font-size: 18px \"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "title", array()), "html", null, true);
        echo " </b> </span>
    </p>
";
        // line 16
        echo "    <div class=\"col12\">
        <div style=\"display: -webkit-box\">
            <div class=\"col3\">  <b>Team:&nbsp&nbsp&nbsp </b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "team", array()), "html", null, true);
        echo " </div>
            <div class=\"col3\">  <b>Reference:&nbsp </b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "reference", array()), "html", null, true);
        echo " </div>
            <div class=\"col3\"> <b>Test(s):&nbsp </b> 
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "tests", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tests"]) {
            // line 22
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tests"], "name", array()), "html", null, true);
            echo "\\
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tests'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo " 
            </div>
            <div class=\"col3\">  <b>Posted on:&nbsp </b> ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "postedDate", array()), "d M Y"), "html", null, true);
        echo " </div>
        </div>
        <div class=\"divid\"></div>
        <div>
            <div class=\"col12\"> 
                        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "shortDescription", array()), "html", null, true);
        echo "
            </div>
        </div>
        <div id=\"read-box";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
            <br/>
            <div>
                <p class=\"col12\"> 
                        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "longDescription", array()), "html", null, true);
        echo "
                </p>
            </div>
        </div>
    </div>
";
        // line 43
        echo "</div>
<script>
    function changeReadElement(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }
</script>
<style>
    .content .mainbar .article{
        padding: 20px;
    }
</style>";
        
        $__internal_7c2fba520f1909c61505d2af1307cf463e3fd5d7f7bb673d84e6de4914f97f91->leave($__internal_7c2fba520f1909c61505d2af1307cf463e3fd5d7f7bb673d84e6de4914f97f91_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  99 => 37,  92 => 33,  86 => 30,  78 => 25,  74 => 23,  65 => 22,  61 => 21,  56 => 19,  52 => 18,  48 => 16,  43 => 13,  35 => 10,  28 => 6,  22 => 2,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/offer.html.twig #}*/
/* */
/* <div class="article">*/
/*     <p class="infopost">*/
/* */
/*         <a id="read-box{{offer.id}}" onclick="changeReadElement(this);"  style="float: right" title="Read More">*/
/*             <img src="/TestTool/web/images/icons/more.gif" />*/
/*         </a>*/
/*       */
/*         <a id="pop" href="{{ path('ts_candidat_postOffer')}}?ref={{offer.reference}}"  class="read"  style="float: right" title="Apply">*/
/*             <img src="/TestTool/web/images/icons/apply.png" />*/
/*         </a>*/
/*         <span> <b style="font-weight: 700;font-size: 18px "> {{ offer.title}} </b> </span>*/
/*     </p>*/
/* {#</p>#}*/
/*     <div class="col12">*/
/*         <div style="display: -webkit-box">*/
/*             <div class="col3">  <b>Team:&nbsp&nbsp&nbsp </b> {{ offer.team}} </div>*/
/*             <div class="col3">  <b>Reference:&nbsp </b> {{ offer.reference}} </div>*/
/*             <div class="col3"> <b>Test(s):&nbsp </b> */
/*                 {% for tests in offer.tests %}*/
/*                     {{ tests.name}}\*/
/*                 {% endfor %} */
/*             </div>*/
/*             <div class="col3">  <b>Posted on:&nbsp </b> {{ offer.postedDate|date('d M Y') }} </div>*/
/*         </div>*/
/*         <div class="divid"></div>*/
/*         <div>*/
/*             <div class="col12"> */
/*                         {{ offer.shortDescription }}*/
/*             </div>*/
/*         </div>*/
/*         <div id="read-box{{offer.id}}#" style="display:none">*/
/*             <br/>*/
/*             <div>*/
/*                 <p class="col12"> */
/*                         {{ offer.longDescription }}*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {#    *******************************#}*/
/* </div>*/
/* <script>*/
/*     function changeReadElement(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/* </script>*/
/* <style>*/
/*     .content .mainbar .article{*/
/*         padding: 20px;*/
/*     }*/
/* </style>*/
