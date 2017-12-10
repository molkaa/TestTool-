<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_e6d091bf32a4d2a40989e7e9519f7b3046a250dd5e4f90a805e7934eab6c6a6d extends Twig_Template
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
        $__internal_3a33632b00b3f9418ebda3b01b88367bafefe07a06271aa1494363c33417024c = $this->env->getExtension("native_profiler");
        $__internal_3a33632b00b3f9418ebda3b01b88367bafefe07a06271aa1494363c33417024c->enter($__internal_3a33632b00b3f9418ebda3b01b88367bafefe07a06271aa1494363c33417024c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_3a33632b00b3f9418ebda3b01b88367bafefe07a06271aa1494363c33417024c->leave($__internal_3a33632b00b3f9418ebda3b01b88367bafefe07a06271aa1494363c33417024c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
