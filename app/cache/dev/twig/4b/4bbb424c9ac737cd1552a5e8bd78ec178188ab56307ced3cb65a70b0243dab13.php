<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f7cb5599a54041cb61e9cab98ed830132e17f85fe47d919e1fee47f1c2ff72c0 extends Twig_Template
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
        $__internal_0995f3ed8460b825d503e15716542d7667fb127f7cd2bb8098869504f8560983 = $this->env->getExtension("native_profiler");
        $__internal_0995f3ed8460b825d503e15716542d7667fb127f7cd2bb8098869504f8560983->enter($__internal_0995f3ed8460b825d503e15716542d7667fb127f7cd2bb8098869504f8560983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0995f3ed8460b825d503e15716542d7667fb127f7cd2bb8098869504f8560983->leave($__internal_0995f3ed8460b825d503e15716542d7667fb127f7cd2bb8098869504f8560983_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
