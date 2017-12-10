<?php

/* @TSCandidat/Candidat/security.html.twig */
class __TwigTemplate_979e12b024da9cb7a9330029447fe1e6e7e311c6c647bcc3a457dc2797654fa2 extends Twig_Template
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
        $__internal_1fbb1a0bd7cc1f3812deea2e3d848fc70f693c41a81c858cdd8f849dfb1551ab = $this->env->getExtension("native_profiler");
        $__internal_1fbb1a0bd7cc1f3812deea2e3d848fc70f693c41a81c858cdd8f849dfb1551ab->enter($__internal_1fbb1a0bd7cc1f3812deea2e3d848fc70f693c41a81c858cdd8f849dfb1551ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/security.html.twig"));

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
        
        $__internal_1fbb1a0bd7cc1f3812deea2e3d848fc70f693c41a81c858cdd8f849dfb1551ab->leave($__internal_1fbb1a0bd7cc1f3812deea2e3d848fc70f693c41a81c858cdd8f849dfb1551ab_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/security.html.twig";
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
