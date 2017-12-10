<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e1107d0b1cb5f106926b1443e64fbc7838b6b5d842042851529c013c38f20f6d extends Twig_Template
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
        $__internal_c264752d92ce83860da557aeff8e780709e7102e71e9244401b53bc6c7473fbc = $this->env->getExtension("native_profiler");
        $__internal_c264752d92ce83860da557aeff8e780709e7102e71e9244401b53bc6c7473fbc->enter($__internal_c264752d92ce83860da557aeff8e780709e7102e71e9244401b53bc6c7473fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c264752d92ce83860da557aeff8e780709e7102e71e9244401b53bc6c7473fbc->leave($__internal_c264752d92ce83860da557aeff8e780709e7102e71e9244401b53bc6c7473fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
