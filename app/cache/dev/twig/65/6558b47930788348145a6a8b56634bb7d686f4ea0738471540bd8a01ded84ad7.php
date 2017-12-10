<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3dc6a4bf88765427900017c81fb6443b78d43a85443a652cc2f9e9eae88979db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b947b93f6259ddd327241ba921950552fba75a3139eff62afe2ad1b55ab9f46 = $this->env->getExtension("native_profiler");
        $__internal_3b947b93f6259ddd327241ba921950552fba75a3139eff62afe2ad1b55ab9f46->enter($__internal_3b947b93f6259ddd327241ba921950552fba75a3139eff62afe2ad1b55ab9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b947b93f6259ddd327241ba921950552fba75a3139eff62afe2ad1b55ab9f46->leave($__internal_3b947b93f6259ddd327241ba921950552fba75a3139eff62afe2ad1b55ab9f46_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ffc3bbdebd85cbfcc94dd1ecfeaefe9d46f80cb0ab8a1ddf1424f06001a2a7a = $this->env->getExtension("native_profiler");
        $__internal_6ffc3bbdebd85cbfcc94dd1ecfeaefe9d46f80cb0ab8a1ddf1424f06001a2a7a->enter($__internal_6ffc3bbdebd85cbfcc94dd1ecfeaefe9d46f80cb0ab8a1ddf1424f06001a2a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6ffc3bbdebd85cbfcc94dd1ecfeaefe9d46f80cb0ab8a1ddf1424f06001a2a7a->leave($__internal_6ffc3bbdebd85cbfcc94dd1ecfeaefe9d46f80cb0ab8a1ddf1424f06001a2a7a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c4209a7bc66b7ed25c18af02cb8705644e8bc80280d37dbd6d266a3589728b5 = $this->env->getExtension("native_profiler");
        $__internal_3c4209a7bc66b7ed25c18af02cb8705644e8bc80280d37dbd6d266a3589728b5->enter($__internal_3c4209a7bc66b7ed25c18af02cb8705644e8bc80280d37dbd6d266a3589728b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3c4209a7bc66b7ed25c18af02cb8705644e8bc80280d37dbd6d266a3589728b5->leave($__internal_3c4209a7bc66b7ed25c18af02cb8705644e8bc80280d37dbd6d266a3589728b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
