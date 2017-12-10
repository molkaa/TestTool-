<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d9b0a04aa31e549130af19c2daffcbfa34002f14ad59ac0dd9dac0dcc8b1642b extends Twig_Template
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
        $__internal_14275ec51a3ab4f3e71f9989856be2c7aef902e28efb698e0a23f387eb64e5a6 = $this->env->getExtension("native_profiler");
        $__internal_14275ec51a3ab4f3e71f9989856be2c7aef902e28efb698e0a23f387eb64e5a6->enter($__internal_14275ec51a3ab4f3e71f9989856be2c7aef902e28efb698e0a23f387eb64e5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_14275ec51a3ab4f3e71f9989856be2c7aef902e28efb698e0a23f387eb64e5a6->leave($__internal_14275ec51a3ab4f3e71f9989856be2c7aef902e28efb698e0a23f387eb64e5a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
