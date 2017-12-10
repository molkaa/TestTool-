<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bb4d7b4cdd0965193addb4a93bfecc81c2eae7bf42a31461e5a6e1850e5ab2df extends Twig_Template
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
        $__internal_4bd506599068f3d19aa35458c810909ad873a68591ee74de057d512d1b394175 = $this->env->getExtension("native_profiler");
        $__internal_4bd506599068f3d19aa35458c810909ad873a68591ee74de057d512d1b394175->enter($__internal_4bd506599068f3d19aa35458c810909ad873a68591ee74de057d512d1b394175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4bd506599068f3d19aa35458c810909ad873a68591ee74de057d512d1b394175->leave($__internal_4bd506599068f3d19aa35458c810909ad873a68591ee74de057d512d1b394175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
