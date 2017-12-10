<?php

/* @TSUser/layout.html.twig */
class __TwigTemplate_483e7b1051654b78ee72d2ca57f2682434c69b931c5cbb66f3d12047505f1dad extends Twig_Template
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
        $__internal_6169a035e9352c0fd8ba9d3e56f06e3442f26b86bdf7dd532e816089d7e81442 = $this->env->getExtension("native_profiler");
        $__internal_6169a035e9352c0fd8ba9d3e56f06e3442f26b86bdf7dd532e816089d7e81442->enter($__internal_6169a035e9352c0fd8ba9d3e56f06e3442f26b86bdf7dd532e816089d7e81442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSUser/layout.html.twig"));

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
        
        $__internal_6169a035e9352c0fd8ba9d3e56f06e3442f26b86bdf7dd532e816089d7e81442->leave($__internal_6169a035e9352c0fd8ba9d3e56f06e3442f26b86bdf7dd532e816089d7e81442_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5740e49d0f1c0f75fd64cc534d75b347dfbcdd683ee40f22ea52d240f6a16a76 = $this->env->getExtension("native_profiler");
        $__internal_5740e49d0f1c0f75fd64cc534d75b347dfbcdd683ee40f22ea52d240f6a16a76->enter($__internal_5740e49d0f1c0f75fd64cc534d75b347dfbcdd683ee40f22ea52d240f6a16a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_5740e49d0f1c0f75fd64cc534d75b347dfbcdd683ee40f22ea52d240f6a16a76->leave($__internal_5740e49d0f1c0f75fd64cc534d75b347dfbcdd683ee40f22ea52d240f6a16a76_prof);

    }

    public function getTemplateName()
    {
        return "@TSUser/layout.html.twig";
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
