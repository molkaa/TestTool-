<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_86b21bef6d341fb81bad98b7cc136ae66d7e9f0ad3ac535768d86d65b1c7036d extends Twig_Template
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
        $__internal_fa4f1c1a4167fd9f3bcbe308487e806b97b2b16e71cd937fe8e827f69089435f = $this->env->getExtension("native_profiler");
        $__internal_fa4f1c1a4167fd9f3bcbe308487e806b97b2b16e71cd937fe8e827f69089435f->enter($__internal_fa4f1c1a4167fd9f3bcbe308487e806b97b2b16e71cd937fe8e827f69089435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_fa4f1c1a4167fd9f3bcbe308487e806b97b2b16e71cd937fe8e827f69089435f->leave($__internal_fa4f1c1a4167fd9f3bcbe308487e806b97b2b16e71cd937fe8e827f69089435f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
