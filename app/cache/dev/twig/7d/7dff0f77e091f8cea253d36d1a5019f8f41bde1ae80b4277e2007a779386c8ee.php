<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a4f43b35a77cd116a251b394e3292a17812c4772816b02ae84284e829a020185 extends Twig_Template
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
        $__internal_17017a3052c5cdd7965cd4190ec9398fc2aaf9d9bdb95c1cb81db3cda81e6798 = $this->env->getExtension("native_profiler");
        $__internal_17017a3052c5cdd7965cd4190ec9398fc2aaf9d9bdb95c1cb81db3cda81e6798->enter($__internal_17017a3052c5cdd7965cd4190ec9398fc2aaf9d9bdb95c1cb81db3cda81e6798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_17017a3052c5cdd7965cd4190ec9398fc2aaf9d9bdb95c1cb81db3cda81e6798->leave($__internal_17017a3052c5cdd7965cd4190ec9398fc2aaf9d9bdb95c1cb81db3cda81e6798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
