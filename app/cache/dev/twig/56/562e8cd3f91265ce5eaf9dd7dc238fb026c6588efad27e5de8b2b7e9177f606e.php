<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d3c3c081e4bfca8335e0d7f7b7cc48156b6d9a13cd40e8e918da542d372d8d7d extends Twig_Template
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
        $__internal_4ac4dc3317d1ae0b92538d68468b636ee2431d2ec3325b6c5fc6708cfbbc3268 = $this->env->getExtension("native_profiler");
        $__internal_4ac4dc3317d1ae0b92538d68468b636ee2431d2ec3325b6c5fc6708cfbbc3268->enter($__internal_4ac4dc3317d1ae0b92538d68468b636ee2431d2ec3325b6c5fc6708cfbbc3268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4ac4dc3317d1ae0b92538d68468b636ee2431d2ec3325b6c5fc6708cfbbc3268->leave($__internal_4ac4dc3317d1ae0b92538d68468b636ee2431d2ec3325b6c5fc6708cfbbc3268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
