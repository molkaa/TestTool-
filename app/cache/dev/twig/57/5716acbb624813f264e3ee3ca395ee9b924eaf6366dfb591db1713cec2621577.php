<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_dadc32655934c5bdda69b20a8c973e3e8d57361514ef0127da4405d9a0ecee25 extends Twig_Template
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
        $__internal_12af5027952bde7550af13d6d919babce109e2b5378cd07eb09562b68df1f24f = $this->env->getExtension("native_profiler");
        $__internal_12af5027952bde7550af13d6d919babce109e2b5378cd07eb09562b68df1f24f->enter($__internal_12af5027952bde7550af13d6d919babce109e2b5378cd07eb09562b68df1f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_12af5027952bde7550af13d6d919babce109e2b5378cd07eb09562b68df1f24f->leave($__internal_12af5027952bde7550af13d6d919babce109e2b5378cd07eb09562b68df1f24f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
