<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_28838b65ccbf5ce11d4fd023cfe0cf48afe9f59c082c32e37ef0c860284bbfd1 extends Twig_Template
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
        $__internal_77cc89abcd264bd8e3241e6d27aa1bae5ed84a556c05dc8cfa9c7423b210855f = $this->env->getExtension("native_profiler");
        $__internal_77cc89abcd264bd8e3241e6d27aa1bae5ed84a556c05dc8cfa9c7423b210855f->enter($__internal_77cc89abcd264bd8e3241e6d27aa1bae5ed84a556c05dc8cfa9c7423b210855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77cc89abcd264bd8e3241e6d27aa1bae5ed84a556c05dc8cfa9c7423b210855f->leave($__internal_77cc89abcd264bd8e3241e6d27aa1bae5ed84a556c05dc8cfa9c7423b210855f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
