<?php

/* TSAdminBundle:Admin:cv.html.twig */
class __TwigTemplate_b46ef85c71e0a07067d6c061e9c1208a687abc88d136d6333fc1a6df174ca6cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:cv.html.twig", 2);
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
        $__internal_19283f02d5804f86add8f4fcb2ab719306ce66f4b0e9f5f2d409a11be2de38f5 = $this->env->getExtension("native_profiler");
        $__internal_19283f02d5804f86add8f4fcb2ab719306ce66f4b0e9f5f2d409a11be2de38f5->enter($__internal_19283f02d5804f86add8f4fcb2ab719306ce66f4b0e9f5f2d409a11be2de38f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19283f02d5804f86add8f4fcb2ab719306ce66f4b0e9f5f2d409a11be2de38f5->leave($__internal_19283f02d5804f86add8f4fcb2ab719306ce66f4b0e9f5f2d409a11be2de38f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e21f5b035d209f6149eaf7e40d7cdb5a10002920ec63f7f5c47c568383f0ad9 = $this->env->getExtension("native_profiler");
        $__internal_2e21f5b035d209f6149eaf7e40d7cdb5a10002920ec63f7f5c47c568383f0ad9->enter($__internal_2e21f5b035d209f6149eaf7e40d7cdb5a10002920ec63f7f5c47c568383f0ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|InviteCandidate
";
        
        $__internal_2e21f5b035d209f6149eaf7e40d7cdb5a10002920ec63f7f5c47c568383f0ad9->leave($__internal_2e21f5b035d209f6149eaf7e40d7cdb5a10002920ec63f7f5c47c568383f0ad9_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_76ea81ef3bc7fda17bd1a5c8a34f9810c5dca89043f1f7926b32a290f6d9fda5 = $this->env->getExtension("native_profiler");
        $__internal_76ea81ef3bc7fda17bd1a5c8a34f9810c5dca89043f1f7926b32a290f6d9fda5->enter($__internal_76ea81ef3bc7fda17bd1a5c8a34f9810c5dca89043f1f7926b32a290f6d9fda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_76ea81ef3bc7fda17bd1a5c8a34f9810c5dca89043f1f7926b32a290f6d9fda5->leave($__internal_76ea81ef3bc7fda17bd1a5c8a34f9810c5dca89043f1f7926b32a290f6d9fda5_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_335dbefacb5d6d63bf805ec5596641b664c5754a9b3d9d34e38cc3bb84db32d5 = $this->env->getExtension("native_profiler");
        $__internal_335dbefacb5d6d63bf805ec5596641b664c5754a9b3d9d34e38cc3bb84db32d5->enter($__internal_335dbefacb5d6d63bf805ec5596641b664c5754a9b3d9d34e38cc3bb84db32d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_335dbefacb5d6d63bf805ec5596641b664c5754a9b3d9d34e38cc3bb84db32d5->leave($__internal_335dbefacb5d6d63bf805ec5596641b664c5754a9b3d9d34e38cc3bb84db32d5_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a09f0d5c9deacd0b1e14117e3dc7015a384de0fc6409ec38c607b996a1c4661 = $this->env->getExtension("native_profiler");
        $__internal_1a09f0d5c9deacd0b1e14117e3dc7015a384de0fc6409ec38c607b996a1c4661->enter($__internal_1a09f0d5c9deacd0b1e14117e3dc7015a384de0fc6409ec38c607b996a1c4661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1a09f0d5c9deacd0b1e14117e3dc7015a384de0fc6409ec38c607b996a1c4661->leave($__internal_1a09f0d5c9deacd0b1e14117e3dc7015a384de0fc6409ec38c607b996a1c4661_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_1642d4ff2c2ba2565e057ca6ec7e42c4efe29e56cf7acbda129e228db04ed815 = $this->env->getExtension("native_profiler");
        $__internal_1642d4ff2c2ba2565e057ca6ec7e42c4efe29e56cf7acbda129e228db04ed815->enter($__internal_1642d4ff2c2ba2565e057ca6ec7e42c4efe29e56cf7acbda129e228db04ed815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_1642d4ff2c2ba2565e057ca6ec7e42c4efe29e56cf7acbda129e228db04ed815->leave($__internal_1642d4ff2c2ba2565e057ca6ec7e42c4efe29e56cf7acbda129e228db04ed815_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_54aa84065a88a336b09d5ad22ec0e96a196d415ab3ae369a40ec6f215eafc8f3 = $this->env->getExtension("native_profiler");
        $__internal_54aa84065a88a336b09d5ad22ec0e96a196d415ab3ae369a40ec6f215eafc8f3->enter($__internal_54aa84065a88a336b09d5ad22ec0e96a196d415ab3ae369a40ec6f215eafc8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 25
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_54aa84065a88a336b09d5ad22ec0e96a196d415ab3ae369a40ec6f215eafc8f3->leave($__internal_54aa84065a88a336b09d5ad22ec0e96a196d415ab3ae369a40ec6f215eafc8f3_prof);

    }

    // line 28
    public function block_right($context, array $blocks = array())
    {
        $__internal_dcec7000a7bb897525608f9aa6b3ce1f545d5598545c45456d232f30f9057ae1 = $this->env->getExtension("native_profiler");
        $__internal_dcec7000a7bb897525608f9aa6b3ce1f545d5598545c45456d232f30f9057ae1->enter($__internal_dcec7000a7bb897525608f9aa6b3ce1f545d5598545c45456d232f30f9057ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 29
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_dcec7000a7bb897525608f9aa6b3ce1f545d5598545c45456d232f30f9057ae1->leave($__internal_dcec7000a7bb897525608f9aa6b3ce1f545d5598545c45456d232f30f9057ae1_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_a95f52dfa4ac5bcbf6e16325f0615539c3da1b648ebbb877d234c97c90f2b024 = $this->env->getExtension("native_profiler");
        $__internal_a95f52dfa4ac5bcbf6e16325f0615539c3da1b648ebbb877d234c97c90f2b024->enter($__internal_a95f52dfa4ac5bcbf6e16325f0615539c3da1b648ebbb877d234c97c90f2b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "<div id=\"page-title\"></div>
";
        // line 34
        $this->loadTemplate("TSAdminBundle:Admin:research.html.twig", "TSAdminBundle:Admin:cv.html.twig", 34)->display($context);
        // line 35
        echo "<div class=\"row\">
    ";
        // line 36
        if (twig_test_empty((isset($context["listeCandidat"]) ? $context["listeCandidat"] : $this->getContext($context, "listeCandidat")))) {
            // line 37
            echo "        <div class=\"col-md-6\"> No Candidates</div>
     ";
        } else {
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCandidat"]) ? $context["listeCandidat"] : $this->getContext($context, "listeCandidat")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                // line 40
                echo "    ";
                $this->loadTemplate("TSAdminBundle:Admin:candidate.html.twig", "TSAdminBundle:Admin:cv.html.twig", 40)->display(array_merge($context, array("accueil" => true)));
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 43
        echo "
</div>
  <h5  class=\"text-right\"> <a  style=\"text-decoration: underline\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ts_admin_cvs");
        echo "\">View all Candidates </a></h5> 
<div class=\"row\">
    <div class=\"col-md-4\">
         ";
        // line 48
        if (((isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")) == 0)) {
            echo " 
       
           ";
        } else {
            // line 50
            echo " 
      
        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 57
                echo "            <a ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 59
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_cv", array("page" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 61
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
                ";
        }
        // line 69
        echo "    </div>
</div>
";
        // line 71
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_a95f52dfa4ac5bcbf6e16325f0615539c3da1b648ebbb877d234c97c90f2b024->leave($__internal_a95f52dfa4ac5bcbf6e16325f0615539c3da1b648ebbb877d234c97c90f2b024_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:cv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 71,  265 => 69,  258 => 64,  249 => 61,  245 => 60,  242 => 59,  235 => 57,  231 => 56,  223 => 50,  217 => 48,  211 => 45,  207 => 43,  191 => 40,  174 => 39,  170 => 37,  168 => 36,  165 => 35,  163 => 34,  160 => 33,  154 => 32,  145 => 29,  139 => 28,  130 => 25,  124 => 24,  114 => 21,  108 => 20,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\admin\cvs.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*  {{ parent() }}|admin|InviteCandidate*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
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
/* {% include "TSAdminBundle:Admin:research.html.twig" %}*/
/* <div class="row">*/
/*     {% if listeCandidat is empty%}*/
/*         <div class="col-md-6"> No Candidates</div>*/
/*      {%else%}*/
/* {% for candidat in listeCandidat %}*/
/*     {% include "TSAdminBundle:Admin:candidate.html.twig" with {'accueil': true} %}*/
/* {% endfor %}*/
/* {%endif%}*/
/* */
/* </div>*/
/*   <h5  class="text-right"> <a  style="text-decoration: underline" href="{{ path('ts_admin_cvs') }}">View all Candidates </a></h5> */
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*          {% if nombrePage == 0 %} */
/*        */
/*            {% else %} */
/*       */
/*         <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-left"></i>*/
/*         </a>*/
/*         <div class="button-group float-left">*/
/*         {% for p in range(1, nombrePage) %}*/
/*             <a {% if p == page %} */
/*                 class="btn disabled large primary-bg"*/
/*             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_cv', {'page': p}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*                 {% endif %}*/
/*     </div>*/
/* </div>*/
/* {{ parent() }}*/
/* {% endblock %}*/
