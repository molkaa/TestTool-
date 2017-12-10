<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_502a29856528712d95006513d67c8d4592f9c6894467d4757a25e2f52ff72921 extends Twig_Template
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
        $__internal_d44b8ffaba7f2b95f0752402b4c0a79a8c60168409c79bd239aff0a813c2bfb1 = $this->env->getExtension("native_profiler");
        $__internal_d44b8ffaba7f2b95f0752402b4c0a79a8c60168409c79bd239aff0a813c2bfb1->enter($__internal_d44b8ffaba7f2b95f0752402b4c0a79a8c60168409c79bd239aff0a813c2bfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d44b8ffaba7f2b95f0752402b4c0a79a8c60168409c79bd239aff0a813c2bfb1->leave($__internal_d44b8ffaba7f2b95f0752402b4c0a79a8c60168409c79bd239aff0a813c2bfb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
