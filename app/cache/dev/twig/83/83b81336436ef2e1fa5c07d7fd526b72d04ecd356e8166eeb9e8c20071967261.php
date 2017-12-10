<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_24f6ed6b6f91203a2f0e1c495b315adac1c6dcbd01dc23c6fe3f45fe58013eb9 extends Twig_Template
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
        $__internal_f7711919fb21843b3470880b320f84fdda953a3a83e0fb3e53a86182ff14d010 = $this->env->getExtension("native_profiler");
        $__internal_f7711919fb21843b3470880b320f84fdda953a3a83e0fb3e53a86182ff14d010->enter($__internal_f7711919fb21843b3470880b320f84fdda953a3a83e0fb3e53a86182ff14d010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f7711919fb21843b3470880b320f84fdda953a3a83e0fb3e53a86182ff14d010->leave($__internal_f7711919fb21843b3470880b320f84fdda953a3a83e0fb3e53a86182ff14d010_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
