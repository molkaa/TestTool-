<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9f8ce4911732f48b60ee9bf30fd2cbfed0a54b68cf2b02115a729c2c79ed9de2 extends Twig_Template
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
        $__internal_e0e884175047fdf58d4fc6f2c4bd030891776c6aa32ca4df027bbc9c1ae93792 = $this->env->getExtension("native_profiler");
        $__internal_e0e884175047fdf58d4fc6f2c4bd030891776c6aa32ca4df027bbc9c1ae93792->enter($__internal_e0e884175047fdf58d4fc6f2c4bd030891776c6aa32ca4df027bbc9c1ae93792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e0e884175047fdf58d4fc6f2c4bd030891776c6aa32ca4df027bbc9c1ae93792->leave($__internal_e0e884175047fdf58d4fc6f2c4bd030891776c6aa32ca4df027bbc9c1ae93792_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
