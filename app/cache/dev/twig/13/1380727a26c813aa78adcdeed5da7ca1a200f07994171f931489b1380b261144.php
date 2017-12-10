<?php

/* TSAdminBundle:Tests:ModalEditTest.html.twig */
class __TwigTemplate_c83a17fff9e99ebf27ef53414242b6674f0aa1ecf3b471b3e50016a68555410f extends Twig_Template
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
        $__internal_ec5ece59822571d0aa110873af11714d500a66ae47a16bc69648ebc798b1b805 = $this->env->getExtension("native_profiler");
        $__internal_ec5ece59822571d0aa110873af11714d500a66ae47a16bc69648ebc798b1b805->enter($__internal_ec5ece59822571d0aa110873af11714d500a66ae47a16bc69648ebc798b1b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalEditTest.html.twig"));

        // line 1
        echo "<div  id=\"Edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_ec5ece59822571d0aa110873af11714d500a66ae47a16bc69648ebc798b1b805->leave($__internal_ec5ece59822571d0aa110873af11714d500a66ae47a16bc69648ebc798b1b805_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalEditTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }
}
/* <div  id="Edit{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             {{ render(controller('TSAdminBundle:Tests:selectEditTest',  {'id':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
