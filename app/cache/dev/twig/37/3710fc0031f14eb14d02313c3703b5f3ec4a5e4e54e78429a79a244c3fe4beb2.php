<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_02263600d9bebf3e45889be31df4250e41aaebbf6fe35de4f826bad55da323ed extends Twig_Template
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
        $__internal_502e7314178ef667f3c3aaee23ef9814b84156741e46795f38d76cd077b2325a = $this->env->getExtension("native_profiler");
        $__internal_502e7314178ef667f3c3aaee23ef9814b84156741e46795f38d76cd077b2325a->enter($__internal_502e7314178ef667f3c3aaee23ef9814b84156741e46795f38d76cd077b2325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_502e7314178ef667f3c3aaee23ef9814b84156741e46795f38d76cd077b2325a->leave($__internal_502e7314178ef667f3c3aaee23ef9814b84156741e46795f38d76cd077b2325a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
