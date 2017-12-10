<?php

/* @TSAdmin/Notification/GrowlNotif.html.twig */
class __TwigTemplate_f88fa16e02706a2812f680384fdf49818f482b15718ed1eb4cf8e405dc4d6f78 extends Twig_Template
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
        $__internal_a0084208da274a57bfc4229dd5c77d7bb84733d35be3140f437922b3ae2ebef4 = $this->env->getExtension("native_profiler");
        $__internal_a0084208da274a57bfc4229dd5c77d7bb84733d35be3140f437922b3ae2ebef4->enter($__internal_a0084208da274a57bfc4229dd5c77d7bb84733d35be3140f437922b3ae2ebef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Notification/GrowlNotif.html.twig"));

        // line 1
        echo "<script>
                            
                            //success
                            \$(function () {
                            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 6
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
        // line 17
        echo "                            });
                            
                            
                            //warnning
                             \$(function () {
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "warnning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "   
                                var notify = \$.notify('";
            // line 23
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
        // line 34
        echo "                            });


                        </script>";
        
        $__internal_a0084208da274a57bfc4229dd5c77d7bb84733d35be3140f437922b3ae2ebef4->leave($__internal_a0084208da274a57bfc4229dd5c77d7bb84733d35be3140f437922b3ae2ebef4_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Notification/GrowlNotif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 34,  64 => 23,  58 => 22,  51 => 17,  34 => 6,  28 => 5,  22 => 1,);
    }
}
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
