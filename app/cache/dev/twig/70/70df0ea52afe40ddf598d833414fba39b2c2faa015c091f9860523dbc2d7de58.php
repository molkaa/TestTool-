<?php

/* TSUserBundle::layout.html.twig */
class __TwigTemplate_6b43c7d394587a752426a3b2616eeb342723ca4bf67439bc26c2a48e138b87c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_781f71f66370b2c21352029e060c1a0932c3105cbb98365cb3dfe2b389fd11f3 = $this->env->getExtension("native_profiler");
        $__internal_781f71f66370b2c21352029e060c1a0932c3105cbb98365cb3dfe2b389fd11f3->enter($__internal_781f71f66370b2c21352029e060c1a0932c3105cbb98365cb3dfe2b389fd11f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSUserBundle::layout.html.twig"));

        // line 2
        echo "
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 7
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_781f71f66370b2c21352029e060c1a0932c3105cbb98365cb3dfe2b389fd11f3->leave($__internal_781f71f66370b2c21352029e060c1a0932c3105cbb98365cb3dfe2b389fd11f3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d75dc238295b4dd32b7b9d79de756b6f84df4381569dc3474ae4eacaf9f937c0 = $this->env->getExtension("native_profiler");
        $__internal_d75dc238295b4dd32b7b9d79de756b6f84df4381569dc3474ae4eacaf9f937c0->enter($__internal_d75dc238295b4dd32b7b9d79de756b6f84df4381569dc3474ae4eacaf9f937c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_d75dc238295b4dd32b7b9d79de756b6f84df4381569dc3474ae4eacaf9f937c0->leave($__internal_d75dc238295b4dd32b7b9d79de756b6f84df4381569dc3474ae4eacaf9f937c0_prof);

    }

    public function getTemplateName()
    {
        return "TSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  35 => 8,  30 => 7,  26 => 6,  23 => 2,);
    }
}
/* {# src/TS/UserBundle/Resources/views/layout.html.twig #}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {# On affiche les messages flash que définissent les contrôleurs*/
/* du bundle #}*/
/* {% for key, message in app.session.flashbag.all() %}*/
/*     <div class="alert alert-{{ key }}">*/
/*         {{ message|trans({}, 'FOSUserBundle') }}*/
/*     </div>*/
/* {% endfor %}*/
/* {# On définit ce block, dans lequel vont venir s'insérer les*/
/* autres vues du bundle #}*/
/* {% block fos_user_content %}*/
/* {% endblock fos_user_content %}*/
/* */
