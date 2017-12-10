<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5a5dfe899ea50ba745dc5ec5d8acd4348f23cc008cff7bdfe2add65500e913ad extends Twig_Template
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
        $__internal_1b1cc3e655bfdf35245ec38b0f950b39303ef56f34b17a1691fa5722a7415256 = $this->env->getExtension("native_profiler");
        $__internal_1b1cc3e655bfdf35245ec38b0f950b39303ef56f34b17a1691fa5722a7415256->enter($__internal_1b1cc3e655bfdf35245ec38b0f950b39303ef56f34b17a1691fa5722a7415256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1b1cc3e655bfdf35245ec38b0f950b39303ef56f34b17a1691fa5722a7415256->leave($__internal_1b1cc3e655bfdf35245ec38b0f950b39303ef56f34b17a1691fa5722a7415256_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
