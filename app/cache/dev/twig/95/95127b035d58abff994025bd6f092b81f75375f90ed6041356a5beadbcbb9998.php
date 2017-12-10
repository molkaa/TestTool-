<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8139bc0f0a29d3808ec506a9e5fee92b5f31358cd30d6b12a932d8720a226d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81bfcd4b4eb5790e207906342fac87111b7d05f703e9ca79fad2fe9e5ebc87fb = $this->env->getExtension("native_profiler");
        $__internal_81bfcd4b4eb5790e207906342fac87111b7d05f703e9ca79fad2fe9e5ebc87fb->enter($__internal_81bfcd4b4eb5790e207906342fac87111b7d05f703e9ca79fad2fe9e5ebc87fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_81bfcd4b4eb5790e207906342fac87111b7d05f703e9ca79fad2fe9e5ebc87fb->leave($__internal_81bfcd4b4eb5790e207906342fac87111b7d05f703e9ca79fad2fe9e5ebc87fb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_805c4f57415f52a29fbfc3388ef00d578430b244f6b9424e67d82c83d0fc7142 = $this->env->getExtension("native_profiler");
        $__internal_805c4f57415f52a29fbfc3388ef00d578430b244f6b9424e67d82c83d0fc7142->enter($__internal_805c4f57415f52a29fbfc3388ef00d578430b244f6b9424e67d82c83d0fc7142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_805c4f57415f52a29fbfc3388ef00d578430b244f6b9424e67d82c83d0fc7142->leave($__internal_805c4f57415f52a29fbfc3388ef00d578430b244f6b9424e67d82c83d0fc7142_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
