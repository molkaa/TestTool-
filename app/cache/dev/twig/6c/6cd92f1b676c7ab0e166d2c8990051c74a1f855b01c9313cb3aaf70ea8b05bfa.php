<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_50b38dfc023065f36d7c69667ba5a165e758935f686473702fb94e03cd90cb7a extends Twig_Template
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
        $__internal_53c4ace335aa21b19338747aaf6553267c940c71a8f8b93e6b6e4cf81507c198 = $this->env->getExtension("native_profiler");
        $__internal_53c4ace335aa21b19338747aaf6553267c940c71a8f8b93e6b6e4cf81507c198->enter($__internal_53c4ace335aa21b19338747aaf6553267c940c71a8f8b93e6b6e4cf81507c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_53c4ace335aa21b19338747aaf6553267c940c71a8f8b93e6b6e4cf81507c198->leave($__internal_53c4ace335aa21b19338747aaf6553267c940c71a8f8b93e6b6e4cf81507c198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
