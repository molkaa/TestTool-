<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5db738e6423a2aa707c2bc9522e9e064456ec044b55cc3643dd283bad04dddc0 extends Twig_Template
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
        $__internal_496f2b100b38ba7a436dadd0b2653f2d5618c5a69784812e3e75cdba862484d9 = $this->env->getExtension("native_profiler");
        $__internal_496f2b100b38ba7a436dadd0b2653f2d5618c5a69784812e3e75cdba862484d9->enter($__internal_496f2b100b38ba7a436dadd0b2653f2d5618c5a69784812e3e75cdba862484d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_496f2b100b38ba7a436dadd0b2653f2d5618c5a69784812e3e75cdba862484d9->leave($__internal_496f2b100b38ba7a436dadd0b2653f2d5618c5a69784812e3e75cdba862484d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
