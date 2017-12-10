<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_27f6784337a94034b9e8972ff86bb2bcb516a026335df72a9c4686ab16c33717 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_7437441992c5a58ee1e001eb029a8cfc6e2ad4d6b3577680cb58b9b00fed5513 = $this->env->getExtension("native_profiler");
        $__internal_7437441992c5a58ee1e001eb029a8cfc6e2ad4d6b3577680cb58b9b00fed5513->enter($__internal_7437441992c5a58ee1e001eb029a8cfc6e2ad4d6b3577680cb58b9b00fed5513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7437441992c5a58ee1e001eb029a8cfc6e2ad4d6b3577680cb58b9b00fed5513->leave($__internal_7437441992c5a58ee1e001eb029a8cfc6e2ad4d6b3577680cb58b9b00fed5513_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_adf51011de2c6040654fa01dff255a5b853e6df703f3f48a70062b5fe6c89846 = $this->env->getExtension("native_profiler");
        $__internal_adf51011de2c6040654fa01dff255a5b853e6df703f3f48a70062b5fe6c89846->enter($__internal_adf51011de2c6040654fa01dff255a5b853e6df703f3f48a70062b5fe6c89846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_adf51011de2c6040654fa01dff255a5b853e6df703f3f48a70062b5fe6c89846->leave($__internal_adf51011de2c6040654fa01dff255a5b853e6df703f3f48a70062b5fe6c89846_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_125a49a3092bae67e0cd465711eca7c83a100c9f1b473cdc2b00ebfa974ab5f9 = $this->env->getExtension("native_profiler");
        $__internal_125a49a3092bae67e0cd465711eca7c83a100c9f1b473cdc2b00ebfa974ab5f9->enter($__internal_125a49a3092bae67e0cd465711eca7c83a100c9f1b473cdc2b00ebfa974ab5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_125a49a3092bae67e0cd465711eca7c83a100c9f1b473cdc2b00ebfa974ab5f9->leave($__internal_125a49a3092bae67e0cd465711eca7c83a100c9f1b473cdc2b00ebfa974ab5f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
