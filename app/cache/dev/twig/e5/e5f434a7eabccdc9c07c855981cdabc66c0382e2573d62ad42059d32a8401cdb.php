<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ba180775b52be574bae489f00aa1c6bd8fe5d1a45b69c7aad94ac01d10b0cfba extends Twig_Template
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
        $__internal_3d4ad11c4e47585b74b1d8bfaaf8acb7d5a970cac0530e268fdc41787ad20377 = $this->env->getExtension("native_profiler");
        $__internal_3d4ad11c4e47585b74b1d8bfaaf8acb7d5a970cac0530e268fdc41787ad20377->enter($__internal_3d4ad11c4e47585b74b1d8bfaaf8acb7d5a970cac0530e268fdc41787ad20377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3d4ad11c4e47585b74b1d8bfaaf8acb7d5a970cac0530e268fdc41787ad20377->leave($__internal_3d4ad11c4e47585b74b1d8bfaaf8acb7d5a970cac0530e268fdc41787ad20377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
