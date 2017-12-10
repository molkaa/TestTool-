<?php

/* @TSAdmin/Admin/candidate.html.twig */
class __TwigTemplate_da064be795a2300d32d61176ea23cd1c1aa01c12f800f8d2a254df109799c625 extends Twig_Template
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
        $__internal_3d1a86c8e5c8f790264bbc72754473bf96a0ff176854e944330af579e665560c = $this->env->getExtension("native_profiler");
        $__internal_3d1a86c8e5c8f790264bbc72754473bf96a0ff176854e944330af579e665560c->enter($__internal_3d1a86c8e5c8f790264bbc72754473bf96a0ff176854e944330af579e665560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/candidate.html.twig"));

        // line 2
        echo "
";
        // line 4
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), false)) : (false));
        // line 5
        echo "
    <div class=\"col-md-6\">
        <div class=\"content-box border-top border-blue mrg25B\">
            <h3 class=\"content-header\">

                <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "username", array()), "html", null, true);
        echo "</span>

                <div class=\"button-group float-right bg-gray\" data-toggle=\"buttons\">
                  
                    
                         <a class=\"btn medium primary-bg float-right\"   href=\"#ModalInviteCandidate";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "\"  title=\"Invite Candidate\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-envelope\"></i>
                    </span>
                   
                </a>
                
                 
                </div>
            </h3>
            <div class=\"content-box-wrapper\">
              
                <div class=\"divider col-md-12\"></div>
                <div class=\"row\">

                   
                   
                    <p class=\"col-md-10\"> 
                       <i class=\"glyph-icon icon-envelope-o\"></i>
                       <b>&nbsp";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "username", array()), "html", null, true);
        echo "@sungard.com </b>
                    </p>
                    
                  
                </div>
            </div>
          
        </div>
    </div>    
 ";
        // line 43
        $this->loadTemplate("TSAdminBundle:Notification:ModalInviteCandidate.html.twig", "@TSAdmin/Admin/candidate.html.twig", 43)->display($context);
        echo "   
 <script>
                            
                            //success
                            \$(function () {
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 49
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
        // line 60
        echo "                            });
                            
                            
                            //warnning
                             \$(function () {
                            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warnning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 66
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
        // line 77
        echo "                            });


                        </script>
";
        
        $__internal_3d1a86c8e5c8f790264bbc72754473bf96a0ff176854e944330af579e665560c->leave($__internal_3d1a86c8e5c8f790264bbc72754473bf96a0ff176854e944330af579e665560c_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/candidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  120 => 66,  114 => 65,  107 => 60,  90 => 49,  84 => 48,  76 => 43,  64 => 34,  42 => 15,  34 => 10,  27 => 5,  25 => 4,  22 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/candidate.html.twig #}*/
/* */
/* {# On utilise une variable temporaire, qu'on définit à false si elle n'est pas déjà définie #}*/
/* {% set accueil = accueil|default(false) %}*/
/* */
/*     <div class="col-md-6">*/
/*         <div class="content-box border-top border-blue mrg25B">*/
/*             <h3 class="content-header">*/
/* */
/*                 <span> {{ candidat.username}}</span>*/
/* */
/*                 <div class="button-group float-right bg-gray" data-toggle="buttons">*/
/*                   */
/*                     */
/*                          <a class="btn medium primary-bg float-right"   href="#ModalInviteCandidate{{candidat.id}}"  title="Invite Candidate" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-envelope"></i>*/
/*                     </span>*/
/*                    */
/*                 </a>*/
/*                 */
/*                  */
/*                 </div>*/
/*             </h3>*/
/*             <div class="content-box-wrapper">*/
/*               */
/*                 <div class="divider col-md-12"></div>*/
/*                 <div class="row">*/
/* */
/*                    */
/*                    */
/*                     <p class="col-md-10"> */
/*                        <i class="glyph-icon icon-envelope-o"></i>*/
/*                        <b>&nbsp{{candidat.username}}@sungard.com </b>*/
/*                     </p>*/
/*                     */
/*                   */
/*                 </div>*/
/*             </div>*/
/*           */
/*         </div>*/
/*     </div>    */
/*  {% include "TSAdminBundle:Notification:ModalInviteCandidate.html.twig"  %}   */
/*  <script>*/
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
