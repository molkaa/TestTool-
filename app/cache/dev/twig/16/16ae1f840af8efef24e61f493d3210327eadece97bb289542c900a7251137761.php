<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_89e427f0528eb518c21b2abee05e96da4285dd9a43209549dbef88c3f1e79aa4 extends Twig_Template
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
        $__internal_952743029286f3f8b7140afbed50e041808724588b869213fcfcc20c0f65e188 = $this->env->getExtension("native_profiler");
        $__internal_952743029286f3f8b7140afbed50e041808724588b869213fcfcc20c0f65e188->enter($__internal_952743029286f3f8b7140afbed50e041808724588b869213fcfcc20c0f65e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_952743029286f3f8b7140afbed50e041808724588b869213fcfcc20c0f65e188->leave($__internal_952743029286f3f8b7140afbed50e041808724588b869213fcfcc20c0f65e188_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
