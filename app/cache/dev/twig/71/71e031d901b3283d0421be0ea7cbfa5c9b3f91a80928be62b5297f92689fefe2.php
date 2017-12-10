<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b74f80c11403bb3cd5dccd4d548d2b5d239a147590ca9b6de9f9a0b441a0d64b extends Twig_Template
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
        $__internal_6b69a4d84906bc0a366632a3a702b9519cb4fb443f001065a41aa5f50a4fa278 = $this->env->getExtension("native_profiler");
        $__internal_6b69a4d84906bc0a366632a3a702b9519cb4fb443f001065a41aa5f50a4fa278->enter($__internal_6b69a4d84906bc0a366632a3a702b9519cb4fb443f001065a41aa5f50a4fa278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6b69a4d84906bc0a366632a3a702b9519cb4fb443f001065a41aa5f50a4fa278->leave($__internal_6b69a4d84906bc0a366632a3a702b9519cb4fb443f001065a41aa5f50a4fa278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
