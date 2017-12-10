<?php

/* @TSAdmin/Admin/cvs.html.twig */
class __TwigTemplate_0348817be8a39431aeff8eaf99d1d25fa6ef279d2f209a681d6621a787650443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Admin/cvs.html.twig", 2);
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
        $__internal_38416649805359f10d18bd7b1b8971347ae36d613e3f5279426ad34d6159ac10 = $this->env->getExtension("native_profiler");
        $__internal_38416649805359f10d18bd7b1b8971347ae36d613e3f5279426ad34d6159ac10->enter($__internal_38416649805359f10d18bd7b1b8971347ae36d613e3f5279426ad34d6159ac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/cvs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38416649805359f10d18bd7b1b8971347ae36d613e3f5279426ad34d6159ac10->leave($__internal_38416649805359f10d18bd7b1b8971347ae36d613e3f5279426ad34d6159ac10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fece144921c2825e3615136abc896d4e881f0089657a19fb055a4081c5c41a5a = $this->env->getExtension("native_profiler");
        $__internal_fece144921c2825e3615136abc896d4e881f0089657a19fb055a4081c5c41a5a->enter($__internal_fece144921c2825e3615136abc896d4e881f0089657a19fb055a4081c5c41a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|InviteCandidate
";
        
        $__internal_fece144921c2825e3615136abc896d4e881f0089657a19fb055a4081c5c41a5a->leave($__internal_fece144921c2825e3615136abc896d4e881f0089657a19fb055a4081c5c41a5a_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_947fc20cee8dd7fc15eb5bea6ff4473a453c25ce8e4e98f31ad93ce7392985aa = $this->env->getExtension("native_profiler");
        $__internal_947fc20cee8dd7fc15eb5bea6ff4473a453c25ce8e4e98f31ad93ce7392985aa->enter($__internal_947fc20cee8dd7fc15eb5bea6ff4473a453c25ce8e4e98f31ad93ce7392985aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_947fc20cee8dd7fc15eb5bea6ff4473a453c25ce8e4e98f31ad93ce7392985aa->leave($__internal_947fc20cee8dd7fc15eb5bea6ff4473a453c25ce8e4e98f31ad93ce7392985aa_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7db7662581b2f7f8e3f7528b1135805756f5b4ae26d85bfb703e1ef4c663db9b = $this->env->getExtension("native_profiler");
        $__internal_7db7662581b2f7f8e3f7528b1135805756f5b4ae26d85bfb703e1ef4c663db9b->enter($__internal_7db7662581b2f7f8e3f7528b1135805756f5b4ae26d85bfb703e1ef4c663db9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_7db7662581b2f7f8e3f7528b1135805756f5b4ae26d85bfb703e1ef4c663db9b->leave($__internal_7db7662581b2f7f8e3f7528b1135805756f5b4ae26d85bfb703e1ef4c663db9b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37f79960b20163932072bd8dffd8e5fd1ed991ea941c41ae6df7425389f77ea3 = $this->env->getExtension("native_profiler");
        $__internal_37f79960b20163932072bd8dffd8e5fd1ed991ea941c41ae6df7425389f77ea3->enter($__internal_37f79960b20163932072bd8dffd8e5fd1ed991ea941c41ae6df7425389f77ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_37f79960b20163932072bd8dffd8e5fd1ed991ea941c41ae6df7425389f77ea3->leave($__internal_37f79960b20163932072bd8dffd8e5fd1ed991ea941c41ae6df7425389f77ea3_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_077f2106dc3d380bf1c96b18f9d6c875f4a92a9cb58988be4fc69bcccc08a765 = $this->env->getExtension("native_profiler");
        $__internal_077f2106dc3d380bf1c96b18f9d6c875f4a92a9cb58988be4fc69bcccc08a765->enter($__internal_077f2106dc3d380bf1c96b18f9d6c875f4a92a9cb58988be4fc69bcccc08a765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_077f2106dc3d380bf1c96b18f9d6c875f4a92a9cb58988be4fc69bcccc08a765->leave($__internal_077f2106dc3d380bf1c96b18f9d6c875f4a92a9cb58988be4fc69bcccc08a765_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_65eda6a1cbd8f37a7dc786a0968f16f1a99a99048f4db0e6cdb658b345215e77 = $this->env->getExtension("native_profiler");
        $__internal_65eda6a1cbd8f37a7dc786a0968f16f1a99a99048f4db0e6cdb658b345215e77->enter($__internal_65eda6a1cbd8f37a7dc786a0968f16f1a99a99048f4db0e6cdb658b345215e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_65eda6a1cbd8f37a7dc786a0968f16f1a99a99048f4db0e6cdb658b345215e77->leave($__internal_65eda6a1cbd8f37a7dc786a0968f16f1a99a99048f4db0e6cdb658b345215e77_prof);

    }

    // line 27
    public function block_right($context, array $blocks = array())
    {
        $__internal_545fae81eb3112a09815527224d26eff4450848a3148a0051999b7ff08b92bd7 = $this->env->getExtension("native_profiler");
        $__internal_545fae81eb3112a09815527224d26eff4450848a3148a0051999b7ff08b92bd7->enter($__internal_545fae81eb3112a09815527224d26eff4450848a3148a0051999b7ff08b92bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 28
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_545fae81eb3112a09815527224d26eff4450848a3148a0051999b7ff08b92bd7->leave($__internal_545fae81eb3112a09815527224d26eff4450848a3148a0051999b7ff08b92bd7_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_e24af1998a1d0fc9202b1627eb430dbdb3587d10c256906ebda5f3d672e714e0 = $this->env->getExtension("native_profiler");
        $__internal_e24af1998a1d0fc9202b1627eb430dbdb3587d10c256906ebda5f3d672e714e0->enter($__internal_e24af1998a1d0fc9202b1627eb430dbdb3587d10c256906ebda5f3d672e714e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "<div id=\"page-title\"></div>
";
        // line 34
        $this->loadTemplate("TSAdminBundle:Admin:research.html.twig", "@TSAdmin/Admin/cvs.html.twig", 34)->display($context);
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
            $this->loadTemplate("TSAdminBundle:Admin:candidate.html.twig", "@TSAdmin/Admin/cvs.html.twig", 37)->display(array_merge($context, array("accueil" => true)));
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
        
        $__internal_e24af1998a1d0fc9202b1627eb430dbdb3587d10c256906ebda5f3d672e714e0->leave($__internal_e24af1998a1d0fc9202b1627eb430dbdb3587d10c256906ebda5f3d672e714e0_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/cvs.html.twig";
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
