<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_46430483e102cf45416aeb65ea5c5b21310adca56a0746e26b7e6f95d2b2013f extends Twig_Template
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
        $__internal_210470df301dc153c3971340cdb2bc7150e9c814b156d41ba12717bf86dca84f = $this->env->getExtension("native_profiler");
        $__internal_210470df301dc153c3971340cdb2bc7150e9c814b156d41ba12717bf86dca84f->enter($__internal_210470df301dc153c3971340cdb2bc7150e9c814b156d41ba12717bf86dca84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_210470df301dc153c3971340cdb2bc7150e9c814b156d41ba12717bf86dca84f->leave($__internal_210470df301dc153c3971340cdb2bc7150e9c814b156d41ba12717bf86dca84f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
