<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_68d706b38ba57c0c62b0a3b618e0883266021e75c7cffe1f135bf72f9fcdc2df extends Twig_Template
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
        $__internal_da0380c661edf638a1f05a41a02537745cef0fdc45e94f7c8f17e40e0a6e8c08 = $this->env->getExtension("native_profiler");
        $__internal_da0380c661edf638a1f05a41a02537745cef0fdc45e94f7c8f17e40e0a6e8c08->enter($__internal_da0380c661edf638a1f05a41a02537745cef0fdc45e94f7c8f17e40e0a6e8c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_da0380c661edf638a1f05a41a02537745cef0fdc45e94f7c8f17e40e0a6e8c08->leave($__internal_da0380c661edf638a1f05a41a02537745cef0fdc45e94f7c8f17e40e0a6e8c08_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
