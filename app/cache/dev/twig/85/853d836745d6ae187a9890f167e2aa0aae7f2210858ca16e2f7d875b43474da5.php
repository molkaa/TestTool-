<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e45e55ed8762e6ed85cb6330b1a3254d7cd62101e5d5e138ea131298a97b5f0b extends Twig_Template
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
        $__internal_57e9ba1a4ed4452824a3aed2b7ffd241464936ceec6a6f6e68dc02fb24fd1222 = $this->env->getExtension("native_profiler");
        $__internal_57e9ba1a4ed4452824a3aed2b7ffd241464936ceec6a6f6e68dc02fb24fd1222->enter($__internal_57e9ba1a4ed4452824a3aed2b7ffd241464936ceec6a6f6e68dc02fb24fd1222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_57e9ba1a4ed4452824a3aed2b7ffd241464936ceec6a6f6e68dc02fb24fd1222->leave($__internal_57e9ba1a4ed4452824a3aed2b7ffd241464936ceec6a6f6e68dc02fb24fd1222_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
