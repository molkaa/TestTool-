<?php

/* TSAdminBundle:Users:addCandidat.html.twig */
class __TwigTemplate_a89a049f265271f292557f8b3ca121625680c13b8bfbf61b8d2ee56696559a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Users:addCandidat.html.twig", 3);
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
        $__internal_24c218877c58862a25867ecfa33b6e9377e807b3bb2bea5090c32c1b569e32a2 = $this->env->getExtension("native_profiler");
        $__internal_24c218877c58862a25867ecfa33b6e9377e807b3bb2bea5090c32c1b569e32a2->enter($__internal_24c218877c58862a25867ecfa33b6e9377e807b3bb2bea5090c32c1b569e32a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:addCandidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c218877c58862a25867ecfa33b6e9377e807b3bb2bea5090c32c1b569e32a2->leave($__internal_24c218877c58862a25867ecfa33b6e9377e807b3bb2bea5090c32c1b569e32a2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_52028dcb854baa84d884bc984ef604bceec3d295ec3342e07ff817212d6b12e9 = $this->env->getExtension("native_profiler");
        $__internal_52028dcb854baa84d884bc984ef604bceec3d295ec3342e07ff817212d6b12e9->enter($__internal_52028dcb854baa84d884bc984ef604bceec3d295ec3342e07ff817212d6b12e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addCandidate
";
        
        $__internal_52028dcb854baa84d884bc984ef604bceec3d295ec3342e07ff817212d6b12e9->leave($__internal_52028dcb854baa84d884bc984ef604bceec3d295ec3342e07ff817212d6b12e9_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_c3db32715a844ac9de5f724478d9c0e1f324885e182cdf4613622fd8207f1a12 = $this->env->getExtension("native_profiler");
        $__internal_c3db32715a844ac9de5f724478d9c0e1f324885e182cdf4613622fd8207f1a12->enter($__internal_c3db32715a844ac9de5f724478d9c0e1f324885e182cdf4613622fd8207f1a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_c3db32715a844ac9de5f724478d9c0e1f324885e182cdf4613622fd8207f1a12->leave($__internal_c3db32715a844ac9de5f724478d9c0e1f324885e182cdf4613622fd8207f1a12_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d74319012058295baf882338da3c0933ceaa1ca64dc46f8af64744b318d2bf2 = $this->env->getExtension("native_profiler");
        $__internal_4d74319012058295baf882338da3c0933ceaa1ca64dc46f8af64744b318d2bf2->enter($__internal_4d74319012058295baf882338da3c0933ceaa1ca64dc46f8af64744b318d2bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4d74319012058295baf882338da3c0933ceaa1ca64dc46f8af64744b318d2bf2->leave($__internal_4d74319012058295baf882338da3c0933ceaa1ca64dc46f8af64744b318d2bf2_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7d80f51f048a8229e19634bdb052a256d09a25bce251dce18296eb223040875 = $this->env->getExtension("native_profiler");
        $__internal_c7d80f51f048a8229e19634bdb052a256d09a25bce251dce18296eb223040875->enter($__internal_c7d80f51f048a8229e19634bdb052a256d09a25bce251dce18296eb223040875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c7d80f51f048a8229e19634bdb052a256d09a25bce251dce18296eb223040875->leave($__internal_c7d80f51f048a8229e19634bdb052a256d09a25bce251dce18296eb223040875_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_608e9aca63f4f5109f5056a17d2f8119bfd1535b4088750c913ad96ea74f9b7e = $this->env->getExtension("native_profiler");
        $__internal_608e9aca63f4f5109f5056a17d2f8119bfd1535b4088750c913ad96ea74f9b7e->enter($__internal_608e9aca63f4f5109f5056a17d2f8119bfd1535b4088750c913ad96ea74f9b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_608e9aca63f4f5109f5056a17d2f8119bfd1535b4088750c913ad96ea74f9b7e->leave($__internal_608e9aca63f4f5109f5056a17d2f8119bfd1535b4088750c913ad96ea74f9b7e_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1e3bea71d14771778c69b17b42590ef68e82427567daad7a2affbf5c7a32d61c = $this->env->getExtension("native_profiler");
        $__internal_1e3bea71d14771778c69b17b42590ef68e82427567daad7a2affbf5c7a32d61c->enter($__internal_1e3bea71d14771778c69b17b42590ef68e82427567daad7a2affbf5c7a32d61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_1e3bea71d14771778c69b17b42590ef68e82427567daad7a2affbf5c7a32d61c->leave($__internal_1e3bea71d14771778c69b17b42590ef68e82427567daad7a2affbf5c7a32d61c_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_2e22c7f5f02d75a973295b1b042a15dcc887d7b9baca6c54af22c3af178f6ae4 = $this->env->getExtension("native_profiler");
        $__internal_2e22c7f5f02d75a973295b1b042a15dcc887d7b9baca6c54af22c3af178f6ae4->enter($__internal_2e22c7f5f02d75a973295b1b042a15dcc887d7b9baca6c54af22c3af178f6ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_2e22c7f5f02d75a973295b1b042a15dcc887d7b9baca6c54af22c3af178f6ae4->leave($__internal_2e22c7f5f02d75a973295b1b042a15dcc887d7b9baca6c54af22c3af178f6ae4_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_79b2feb7f7b027b595c4b54c0c907074f0cbcca3d3334beabd64665106bde572 = $this->env->getExtension("native_profiler");
        $__internal_79b2feb7f7b027b595c4b54c0c907074f0cbcca3d3334beabd64665106bde572->enter($__internal_79b2feb7f7b027b595c4b54c0c907074f0cbcca3d3334beabd64665106bde572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "    <div id=\"page-title\"></div>
    <div class=\"row\">

        <div class=\"col-md-12\">      

           
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddCandidate\"  id=\"modalAddQuestion\" title=\"Add Candidate\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-plus-square\"></i>
                    </span>
                    <span class=\"button-content\">
                        Add Candidate
                    </span>
                </a>
           


        </div>
        <br><br>
        ";
        // line 54
        $this->loadTemplate("TSAdminBundle:Admin:researchByState.html.twig", "TSAdminBundle:Users:addCandidat.html.twig", 54)->display($context);
        echo "   



    </div>
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
        // line 69
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
            // line 70
            echo "                            ";
            $this->loadTemplate("TSAdminBundle:Users:showCandidate.html.twig", "TSAdminBundle:Users:addCandidat.html.twig", 70)->display(array_merge($context, array("accueil" => true)));
            // line 71
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
        // line 72
        echo "                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    ";
        // line 78
        $this->loadTemplate("TSAdminBundle:Users:ModalAddCandidate.html.twig", "TSAdminBundle:Users:addCandidat.html.twig", 78)->display($context);
        echo "    
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 81
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
                No candidates
            ";
        } else {
            // line 84
            echo "                <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
                    <i class=\"glyph-icon icon-arrow-left\"></i>
                </a>
                <div class=\"button-group float-left\">
                    ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 89
                echo "                        <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                            class=\"btn disabled large primary-bg\"
                            ";
                }
                // line 91
                echo " 
                                class=\"btn large primary-bg\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_addCandidate", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                                ";
                // line 93
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                            </div>
                            <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                            ";
        }
        // line 101
        echo "                            </div>
                        </div>
                        ";
        // line 103
        $this->displayParentBlock("content", $context, $blocks);
        echo "

                        ";
        
        $__internal_79b2feb7f7b027b595c4b54c0c907074f0cbcca3d3334beabd64665106bde572->leave($__internal_79b2feb7f7b027b595c4b54c0c907074f0cbcca3d3334beabd64665106bde572_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:addCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 103,  292 => 101,  285 => 96,  276 => 93,  272 => 92,  269 => 91,  262 => 89,  258 => 88,  252 => 84,  246 => 81,  240 => 78,  232 => 72,  218 => 71,  215 => 70,  198 => 69,  180 => 54,  159 => 35,  153 => 34,  143 => 31,  137 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\users\addEvaluator.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*     {{ parent() }}|admin|addCandidate*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content%}*/
/*     <div id="page-title"></div>*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-12">      */
/* */
/*            */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddCandidate"  id="modalAddQuestion" title="Add Candidate" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-plus-square"></i>*/
/*                     </span>*/
/*                     <span class="button-content">*/
/*                         Add Candidate*/
/*                     </span>*/
/*                 </a>*/
/*            */
/* */
/* */
/*         </div>*/
/*         <br><br>*/
/*         {% include "TSAdminBundle:Admin:researchByState.html.twig" %}   */
/* */
/* */
/* */
/*     </div>*/
/*     <div class="col-md-12">*/
/*         <div class="profile-box profile-box-alt content-box">*/
/*             <div class="content-box-header clearfix primary-bg">*/
/*                 <div class="user-details">*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <table class="table">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         {% for user in users %}*/
/*                             {% include "TSAdminBundle:Users:showCandidate.html.twig"with {'accueil': true} %}*/
/*                         {% endfor %}*/
/*                     </tr>*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/*     {% include "TSAdminBundle:Users:ModalAddCandidate.html.twig"  %}    */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             {% if nombrePages == 0 %} */
/*                 No candidates*/
/*             {% else %}*/
/*                 <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*                     <i class="glyph-icon icon-arrow-left"></i>*/
/*                 </a>*/
/*                 <div class="button-group float-left">*/
/*                     {% for p in range(1, nombrePages) %}*/
/*                         <a {% if p == pages %} */
/*                             class="btn disabled large primary-bg"*/
/*                             {% endif %} */
/*                                 class="btn large primary-bg" href="{{ path('ts_admin_addCandidate', {'pages': p}) }}">*/
/*                                 {{p}}*/
/*                             </a>*/
/*                             {% endfor %}*/
/*                             </div>*/
/*                             <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*                                 <i class="glyph-icon icon-arrow-right"></i>*/
/*                             </a>*/
/*                             {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         {{ parent() }}*/
/* */
/*                         {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                             */
