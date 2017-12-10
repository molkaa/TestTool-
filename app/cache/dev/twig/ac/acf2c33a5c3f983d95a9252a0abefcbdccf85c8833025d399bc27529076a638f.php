<?php

/* @TSAdmin/Users/addCandidate.html.twig */
class __TwigTemplate_d1d5b50b64053bc6c789a4f731bcc4411b134069d13f79dabab5325ffcaf76c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Users/addCandidate.html.twig", 3);
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
        $__internal_44e09218bb3c4177785383b1d869efd33d9b39ab968d9b5d7cd407957ea7c4d2 = $this->env->getExtension("native_profiler");
        $__internal_44e09218bb3c4177785383b1d869efd33d9b39ab968d9b5d7cd407957ea7c4d2->enter($__internal_44e09218bb3c4177785383b1d869efd33d9b39ab968d9b5d7cd407957ea7c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/addCandidate.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e09218bb3c4177785383b1d869efd33d9b39ab968d9b5d7cd407957ea7c4d2->leave($__internal_44e09218bb3c4177785383b1d869efd33d9b39ab968d9b5d7cd407957ea7c4d2_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc029f51e5959bd8889c47c08bb715456fd143ed1ad5f6aaed845933b0763d1 = $this->env->getExtension("native_profiler");
        $__internal_bbc029f51e5959bd8889c47c08bb715456fd143ed1ad5f6aaed845933b0763d1->enter($__internal_bbc029f51e5959bd8889c47c08bb715456fd143ed1ad5f6aaed845933b0763d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addCandidate
";
        
        $__internal_bbc029f51e5959bd8889c47c08bb715456fd143ed1ad5f6aaed845933b0763d1->leave($__internal_bbc029f51e5959bd8889c47c08bb715456fd143ed1ad5f6aaed845933b0763d1_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_9436ac0ea6bf9055a0f9042698e4593f94293c7c39f98d142efe3a82ebfc74d3 = $this->env->getExtension("native_profiler");
        $__internal_9436ac0ea6bf9055a0f9042698e4593f94293c7c39f98d142efe3a82ebfc74d3->enter($__internal_9436ac0ea6bf9055a0f9042698e4593f94293c7c39f98d142efe3a82ebfc74d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_9436ac0ea6bf9055a0f9042698e4593f94293c7c39f98d142efe3a82ebfc74d3->leave($__internal_9436ac0ea6bf9055a0f9042698e4593f94293c7c39f98d142efe3a82ebfc74d3_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7b901058a6e42e3a6a909e99892e61e08d6f07186d38bb90f18d5b179c5ffe1 = $this->env->getExtension("native_profiler");
        $__internal_f7b901058a6e42e3a6a909e99892e61e08d6f07186d38bb90f18d5b179c5ffe1->enter($__internal_f7b901058a6e42e3a6a909e99892e61e08d6f07186d38bb90f18d5b179c5ffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "
    ";
        // line 16
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_f7b901058a6e42e3a6a909e99892e61e08d6f07186d38bb90f18d5b179c5ffe1->leave($__internal_f7b901058a6e42e3a6a909e99892e61e08d6f07186d38bb90f18d5b179c5ffe1_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebb3743d29f04ec8788c3ec52f41f473ccf5c7365068e66eb6c74f6af1145363 = $this->env->getExtension("native_profiler");
        $__internal_ebb3743d29f04ec8788c3ec52f41f473ccf5c7365068e66eb6c74f6af1145363->enter($__internal_ebb3743d29f04ec8788c3ec52f41f473ccf5c7365068e66eb6c74f6af1145363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "

    ";
        // line 22
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_ebb3743d29f04ec8788c3ec52f41f473ccf5c7365068e66eb6c74f6af1145363->leave($__internal_ebb3743d29f04ec8788c3ec52f41f473ccf5c7365068e66eb6c74f6af1145363_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_e486d07a81ee32a5f30cdfda421e8af35b425f3841a67bb82010a40b42f26382 = $this->env->getExtension("native_profiler");
        $__internal_e486d07a81ee32a5f30cdfda421e8af35b425f3841a67bb82010a40b42f26382->enter($__internal_e486d07a81ee32a5f30cdfda421e8af35b425f3841a67bb82010a40b42f26382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e486d07a81ee32a5f30cdfda421e8af35b425f3841a67bb82010a40b42f26382->leave($__internal_e486d07a81ee32a5f30cdfda421e8af35b425f3841a67bb82010a40b42f26382_prof);

    }

    // line 29
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e9c584a88a42a2279bbcf96e4eba79faab5d5b91b3f31148e258c66c04b19d78 = $this->env->getExtension("native_profiler");
        $__internal_e9c584a88a42a2279bbcf96e4eba79faab5d5b91b3f31148e258c66c04b19d78->enter($__internal_e9c584a88a42a2279bbcf96e4eba79faab5d5b91b3f31148e258c66c04b19d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 30
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_e9c584a88a42a2279bbcf96e4eba79faab5d5b91b3f31148e258c66c04b19d78->leave($__internal_e9c584a88a42a2279bbcf96e4eba79faab5d5b91b3f31148e258c66c04b19d78_prof);

    }

    // line 33
    public function block_right($context, array $blocks = array())
    {
        $__internal_84385d81f5cb8fd8971cc3ce6b179d8856452c8f803d1e11f7bdb4c0b37070e2 = $this->env->getExtension("native_profiler");
        $__internal_84385d81f5cb8fd8971cc3ce6b179d8856452c8f803d1e11f7bdb4c0b37070e2->enter($__internal_84385d81f5cb8fd8971cc3ce6b179d8856452c8f803d1e11f7bdb4c0b37070e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 34
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_84385d81f5cb8fd8971cc3ce6b179d8856452c8f803d1e11f7bdb4c0b37070e2->leave($__internal_84385d81f5cb8fd8971cc3ce6b179d8856452c8f803d1e11f7bdb4c0b37070e2_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_48070f4b3f68be1299ee0173320e6ca5981447d2ab1e8438358f5384535152cd = $this->env->getExtension("native_profiler");
        $__internal_48070f4b3f68be1299ee0173320e6ca5981447d2ab1e8438358f5384535152cd->enter($__internal_48070f4b3f68be1299ee0173320e6ca5981447d2ab1e8438358f5384535152cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "    <div id=\"page-title\"></div>
    <div class=\"row\">

        <div class=\"col-md-12\">      

            
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddCandidate\"  title=\"Add Candidate\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
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
        // line 57
        $this->loadTemplate("TSAdminBundle:Admin:researchByState.html.twig", "@TSAdmin/Users/addCandidate.html.twig", 57)->display($context);
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
        // line 74
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
            // line 75
            echo "                            ";
            $this->loadTemplate("TSAdminBundle:Users:showCandidate.html.twig", "@TSAdmin/Users/addCandidate.html.twig", 75)->display(array_merge($context, array("accueil" => true)));
            // line 76
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
        // line 77
        echo "                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    ";
        // line 83
        $this->loadTemplate("TSAdminBundle:Users:ModalAddCandidate.html.twig", "@TSAdmin/Users/addCandidate.html.twig", 83)->display($context);
        echo "    
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 86
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
                No candidates
            ";
        } else {
            // line 89
            echo "                <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
                    <i class=\"glyph-icon icon-arrow-left\"></i>
                </a>
                <div class=\"button-group float-left\">
                    ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 94
                echo "                        <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                            class=\"btn disabled large primary-bg\"
                            ";
                }
                // line 96
                echo " 
                                class=\"btn large primary-bg\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_addCandidate", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                                ";
                // line 98
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                            </a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                            </div>
                            <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
                                <i class=\"glyph-icon icon-arrow-right\"></i>
                            </a>
                            ";
        }
        // line 106
        echo "                            </div>
                        </div>
                        ";
        // line 108
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                        <script>
                            
                            //success
                            \$(function () {
                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 114
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
        // line 125
        echo "                            });
                            
                            
                            //warnning
                             \$(function () {
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warnning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 131
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
        // line 142
        echo "                            });


                        </script>

                        ";
        
        $__internal_48070f4b3f68be1299ee0173320e6ca5981447d2ab1e8438358f5384535152cd->leave($__internal_48070f4b3f68be1299ee0173320e6ca5981447d2ab1e8438358f5384535152cd_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/addCandidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 142,  347 => 131,  341 => 130,  334 => 125,  317 => 114,  311 => 113,  303 => 108,  299 => 106,  292 => 101,  283 => 98,  279 => 97,  276 => 96,  269 => 94,  265 => 93,  259 => 89,  253 => 86,  247 => 83,  239 => 77,  225 => 76,  222 => 75,  205 => 74,  185 => 57,  164 => 38,  158 => 37,  148 => 34,  142 => 33,  132 => 30,  126 => 29,  116 => 26,  110 => 25,  101 => 22,  97 => 20,  91 => 19,  82 => 16,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
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
/* */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
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
/*             */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddCandidate"  title="Add Candidate" data-id  data-toggle="modal" data-placement="top" role="button">*/
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
/* */
/* */
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
/*                         <script>*/
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
/* */
