<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7242eec708a986bd0782a828441d03f88c2ae22b3f133de6dd9819b258dbaf7d extends Twig_Template
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
        $__internal_f7292a0c509655e999d4843b119292286f31dc534a580bb10cce86fcbce4b610 = $this->env->getExtension("native_profiler");
        $__internal_f7292a0c509655e999d4843b119292286f31dc534a580bb10cce86fcbce4b610->enter($__internal_f7292a0c509655e999d4843b119292286f31dc534a580bb10cce86fcbce4b610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_f7292a0c509655e999d4843b119292286f31dc534a580bb10cce86fcbce4b610->leave($__internal_f7292a0c509655e999d4843b119292286f31dc534a580bb10cce86fcbce4b610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
