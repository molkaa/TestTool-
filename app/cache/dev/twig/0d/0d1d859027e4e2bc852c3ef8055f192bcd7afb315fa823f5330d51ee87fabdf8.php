<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_70f45e91bdad28bda7d62295efb7ce0267ea9f8b1ca83b40c25498517bfbcad7 extends Twig_Template
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
        $__internal_d98b628be59d7974f1351425bef317529f7ae12d2289cb560a7473a2f79933ab = $this->env->getExtension("native_profiler");
        $__internal_d98b628be59d7974f1351425bef317529f7ae12d2289cb560a7473a2f79933ab->enter($__internal_d98b628be59d7974f1351425bef317529f7ae12d2289cb560a7473a2f79933ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d98b628be59d7974f1351425bef317529f7ae12d2289cb560a7473a2f79933ab->leave($__internal_d98b628be59d7974f1351425bef317529f7ae12d2289cb560a7473a2f79933ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
