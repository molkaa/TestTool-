<?php

/* TSCandidatBundle:Candidat:security.html.twig */
class __TwigTemplate_1234d4ca99db23911a7f01c9ccbd1bb9de2d2ee80bdc29536cde61f4d0bfd143 extends Twig_Template
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
        $__internal_e3ca2b5236a16e0703b59d56e652496cab317a62857d9e281a76fcd2c8ab555e = $this->env->getExtension("native_profiler");
        $__internal_e3ca2b5236a16e0703b59d56e652496cab317a62857d9e281a76fcd2c8ab555e->enter($__internal_e3ca2b5236a16e0703b59d56e652496cab317a62857d9e281a76fcd2c8ab555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSCandidatBundle:Candidat:security.html.twig"));

        // line 1
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " -
<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                            ";
        } else {
            // line 5
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                            ";
        }
        
        $__internal_e3ca2b5236a16e0703b59d56e652496cab317a62857d9e281a76fcd2c8ab555e->leave($__internal_e3ca2b5236a16e0703b59d56e652496cab317a62857d9e281a76fcd2c8ab555e_prof);

    }

    public function getTemplateName()
    {
        return "TSCandidatBundle:Candidat:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* Connecté en tant que {{ app.user.username }} -*/
/* <a href="{{path('fos_user_security_logout') }}">Déconnexion</a>*/
/*                             {% else %}*/
/* <a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/*                             {% endif %}*/
