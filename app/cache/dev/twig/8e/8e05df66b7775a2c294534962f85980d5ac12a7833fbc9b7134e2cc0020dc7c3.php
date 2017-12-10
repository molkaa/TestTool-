<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_6fbbdcb5ff21d38f7aaddef8ee297fbbd79e01e75e324dfb9de2d65dfe7f1715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e71ad7c228938972fd34eab0394d6ecdfb16d2b022db92425ee42fb492c3fbd5 = $this->env->getExtension("native_profiler");
        $__internal_e71ad7c228938972fd34eab0394d6ecdfb16d2b022db92425ee42fb492c3fbd5->enter($__internal_e71ad7c228938972fd34eab0394d6ecdfb16d2b022db92425ee42fb492c3fbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71ad7c228938972fd34eab0394d6ecdfb16d2b022db92425ee42fb492c3fbd5->leave($__internal_e71ad7c228938972fd34eab0394d6ecdfb16d2b022db92425ee42fb492c3fbd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38935194e938208418df3ef7179af171c0a9838af255943ecc65ac3d322300f8 = $this->env->getExtension("native_profiler");
        $__internal_38935194e938208418df3ef7179af171c0a9838af255943ecc65ac3d322300f8->enter($__internal_38935194e938208418df3ef7179af171c0a9838af255943ecc65ac3d322300f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_38935194e938208418df3ef7179af171c0a9838af255943ecc65ac3d322300f8->leave($__internal_38935194e938208418df3ef7179af171c0a9838af255943ecc65ac3d322300f8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
