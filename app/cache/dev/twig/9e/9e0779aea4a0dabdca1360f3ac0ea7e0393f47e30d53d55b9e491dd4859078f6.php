<?php

/* TSAdminBundle:Admin:cvs.html.twig */
class __TwigTemplate_b04021e5b17d71f1a561e3f7e3a460c71f0470a7b84f39cb1794f60c2e973826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Admin:cvs.html.twig", 2);
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
        $__internal_9bf064a136997e2591afd56c808cb5a3908d937349003dd6c7f89661aa31aa0a = $this->env->getExtension("native_profiler");
        $__internal_9bf064a136997e2591afd56c808cb5a3908d937349003dd6c7f89661aa31aa0a->enter($__internal_9bf064a136997e2591afd56c808cb5a3908d937349003dd6c7f89661aa31aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:cvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf064a136997e2591afd56c808cb5a3908d937349003dd6c7f89661aa31aa0a->leave($__internal_9bf064a136997e2591afd56c808cb5a3908d937349003dd6c7f89661aa31aa0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fff3537b24831d6a410b0a4895618a62c85d235cff8469ac4611489f9965550b = $this->env->getExtension("native_profiler");
        $__internal_fff3537b24831d6a410b0a4895618a62c85d235cff8469ac4611489f9965550b->enter($__internal_fff3537b24831d6a410b0a4895618a62c85d235cff8469ac4611489f9965550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|InviteCandidate
";
        
        $__internal_fff3537b24831d6a410b0a4895618a62c85d235cff8469ac4611489f9965550b->leave($__internal_fff3537b24831d6a410b0a4895618a62c85d235cff8469ac4611489f9965550b_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_cb910a83e30a4cd266127e784c018edfecbeb1270d3c151ee376956fecf8701d = $this->env->getExtension("native_profiler");
        $__internal_cb910a83e30a4cd266127e784c018edfecbeb1270d3c151ee376956fecf8701d->enter($__internal_cb910a83e30a4cd266127e784c018edfecbeb1270d3c151ee376956fecf8701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_cb910a83e30a4cd266127e784c018edfecbeb1270d3c151ee376956fecf8701d->leave($__internal_cb910a83e30a4cd266127e784c018edfecbeb1270d3c151ee376956fecf8701d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73bb72d6604636354a6e88cdd22e725e5e029b1d9db7341522c36777d70cf8e9 = $this->env->getExtension("native_profiler");
        $__internal_73bb72d6604636354a6e88cdd22e725e5e029b1d9db7341522c36777d70cf8e9->enter($__internal_73bb72d6604636354a6e88cdd22e725e5e029b1d9db7341522c36777d70cf8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_73bb72d6604636354a6e88cdd22e725e5e029b1d9db7341522c36777d70cf8e9->leave($__internal_73bb72d6604636354a6e88cdd22e725e5e029b1d9db7341522c36777d70cf8e9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_751c0f1cad788f8064d3a36b119b7964cfd69a55b86503c44cae1fffb6fe193f = $this->env->getExtension("native_profiler");
        $__internal_751c0f1cad788f8064d3a36b119b7964cfd69a55b86503c44cae1fffb6fe193f->enter($__internal_751c0f1cad788f8064d3a36b119b7964cfd69a55b86503c44cae1fffb6fe193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_751c0f1cad788f8064d3a36b119b7964cfd69a55b86503c44cae1fffb6fe193f->leave($__internal_751c0f1cad788f8064d3a36b119b7964cfd69a55b86503c44cae1fffb6fe193f_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_f666590c60d28209090872c1c53751cb5260991729725c1020e00907dc2fd80a = $this->env->getExtension("native_profiler");
        $__internal_f666590c60d28209090872c1c53751cb5260991729725c1020e00907dc2fd80a->enter($__internal_f666590c60d28209090872c1c53751cb5260991729725c1020e00907dc2fd80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_f666590c60d28209090872c1c53751cb5260991729725c1020e00907dc2fd80a->leave($__internal_f666590c60d28209090872c1c53751cb5260991729725c1020e00907dc2fd80a_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e30c0d7c369fbe098d4f194df50511ff76a7c2e3c18c28bf87c79b0ed6845d2b = $this->env->getExtension("native_profiler");
        $__internal_e30c0d7c369fbe098d4f194df50511ff76a7c2e3c18c28bf87c79b0ed6845d2b->enter($__internal_e30c0d7c369fbe098d4f194df50511ff76a7c2e3c18c28bf87c79b0ed6845d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_e30c0d7c369fbe098d4f194df50511ff76a7c2e3c18c28bf87c79b0ed6845d2b->leave($__internal_e30c0d7c369fbe098d4f194df50511ff76a7c2e3c18c28bf87c79b0ed6845d2b_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_ab6ea1480b4716689afd2bda7e0ca143389ff39ab3df60effc87dc58e69e1b62 = $this->env->getExtension("native_profiler");
        $__internal_ab6ea1480b4716689afd2bda7e0ca143389ff39ab3df60effc87dc58e69e1b62->enter($__internal_ab6ea1480b4716689afd2bda7e0ca143389ff39ab3df60effc87dc58e69e1b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_ab6ea1480b4716689afd2bda7e0ca143389ff39ab3df60effc87dc58e69e1b62->leave($__internal_ab6ea1480b4716689afd2bda7e0ca143389ff39ab3df60effc87dc58e69e1b62_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e1e783756b31ccda03448e7fabde022c24f1d8347f3764477ae31b3b6843bb0 = $this->env->getExtension("native_profiler");
        $__internal_9e1e783756b31ccda03448e7fabde022c24f1d8347f3764477ae31b3b6843bb0->enter($__internal_9e1e783756b31ccda03448e7fabde022c24f1d8347f3764477ae31b3b6843bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "<div id=\"page-title\"></div>
";
        // line 34
        $this->loadTemplate("TSAdminBundle:Admin:research.html.twig", "TSAdminBundle:Admin:cvs.html.twig", 34)->display($context);
        // line 35
        echo "<div class=\"row\">
";
        // line 36
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
            // line 37
            echo "    ";
            $this->loadTemplate("TSAdminBundle:Admin:candidate.html.twig", "TSAdminBundle:Admin:cvs.html.twig", 37)->display(array_merge($context, array("accueil" => true)));
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
        // line 39
        echo "</div>
<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 42
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
           ";
        } else {
            // line 44
            echo "        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 49
                echo "            <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 51
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_cvs", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 53
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
        ";
        }
        // line 61
        echo "    </div>
</div>
<script>
                            
                            //success
                            \$(function () {
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 68
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "', {
                                    animate: {
                                        enter: 'animated bounceIn',
                                        exit: 'animated bounceOut'
                                    }
                                });
                                notify.update('type', 'success');
                                setTimeout(function () {
                                    \$.notifyClose();
                                }, 3000);
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            });
                            
                            
                            //warnning
                             \$(function () {
                            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warnning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 85
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "', {
                                    animate: {
                                        enter: 'animated bounceIn',
                                        exit: 'animated bounceOut'
                                    }
                                });
                                notify.update('type','danger');
                                setTimeout(function () {
                                    \$.notifyClose();
                                }, 3000);
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                            });


                        </script>

";
        // line 101
        $this->displayParentBlock("content", $context, $blocks);
        echo "

";
        
        $__internal_9e1e783756b31ccda03448e7fabde022c24f1d8347f3764477ae31b3b6843bb0->leave($__internal_9e1e783756b31ccda03448e7fabde022c24f1d8347f3764477ae31b3b6843bb0_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:cvs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 101,  311 => 96,  294 => 85,  288 => 84,  281 => 79,  264 => 68,  258 => 67,  250 => 61,  243 => 56,  234 => 53,  230 => 52,  227 => 51,  220 => 49,  216 => 48,  210 => 44,  205 => 42,  200 => 39,  185 => 37,  168 => 36,  165 => 35,  163 => 34,  160 => 33,  154 => 32,  145 => 28,  139 => 27,  130 => 24,  124 => 23,  114 => 21,  108 => 20,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
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
/*  {% block sidebar %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content%}*/
/* <div id="page-title"></div>*/
/* {% include "TSAdminBundle:Admin:research.html.twig" %}*/
/* <div class="row">*/
/* {% for candidat in listeCandidat %}*/
/*     {% include "TSAdminBundle:Admin:candidate.html.twig" with {'accueil': true} %}*/
/* {% endfor %}*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-4">*/
/*         {% if nombrePages == 0 %} */
/*            {% else %}*/
/*         <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-left"></i>*/
/*         </a>*/
/*         <div class="button-group float-left">*/
/*         {% for p in range(1, nombrePages) %}*/
/*             <a {% if p == pages %} */
/*                 class="btn disabled large primary-bg"*/
/*             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_cvs', {'pages': p}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*                             */
/*                             //success*/
/*                             $(function () {*/
/*                             {% for flashMessage in app.session.flashbag.get('notice') %}   */
/*                                 var notify = $.notify('{{ flashMessage }}', {*/
/*                                     animate: {*/
/*                                         enter: 'animated bounceIn',*/
/*                                         exit: 'animated bounceOut'*/
/*                                     }*/
/*                                 });*/
/*                                 notify.update('type', 'success');*/
/*                                 setTimeout(function () {*/
/*                                     $.notifyClose();*/
/*                                 }, 3000);*/
/*                             {% endfor %}*/
/*                             });*/
/*                             */
/*                             */
/*                             //warnning*/
/*                              $(function () {*/
/*                             {% for flashMessage in app.session.flashbag.get('warnning') %}   */
/*                                 var notify = $.notify('{{ flashMessage }}', {*/
/*                                     animate: {*/
/*                                         enter: 'animated bounceIn',*/
/*                                         exit: 'animated bounceOut'*/
/*                                     }*/
/*                                 });*/
/*                                 notify.update('type','danger');*/
/*                                 setTimeout(function () {*/
/*                                     $.notifyClose();*/
/*                                 }, 3000);*/
/*                             {% endfor %}*/
/*                             });*/
/* */
/* */
/*                         </script>*/
/* */
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
