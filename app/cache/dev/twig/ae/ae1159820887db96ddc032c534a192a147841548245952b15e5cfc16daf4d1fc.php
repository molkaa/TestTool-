<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_63999dab03550dbdd22997b56010cd1be3e8426952eed398587613313b960857 extends Twig_Template
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
        $__internal_b72c569ec00041bb8f2448a9ce9fcafa3f2bdd2e653e64e1b2ecadb452594f65 = $this->env->getExtension("native_profiler");
        $__internal_b72c569ec00041bb8f2448a9ce9fcafa3f2bdd2e653e64e1b2ecadb452594f65->enter($__internal_b72c569ec00041bb8f2448a9ce9fcafa3f2bdd2e653e64e1b2ecadb452594f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b72c569ec00041bb8f2448a9ce9fcafa3f2bdd2e653e64e1b2ecadb452594f65->leave($__internal_b72c569ec00041bb8f2448a9ce9fcafa3f2bdd2e653e64e1b2ecadb452594f65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
