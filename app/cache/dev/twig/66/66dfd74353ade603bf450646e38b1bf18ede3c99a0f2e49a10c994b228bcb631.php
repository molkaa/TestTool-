<?php

/* TSAdminBundle:Tests:ModalEditQuestion.html.twig */
class __TwigTemplate_b540d29b3e5fe8e47b6b3920a829a77540b0b068c28500e1563a55dfc21f4da6 extends Twig_Template
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
        $__internal_c56f4df99587920ec374a3eae090aac6d4f581171903a00b3db0473f2b81eace = $this->env->getExtension("native_profiler");
        $__internal_c56f4df99587920ec374a3eae090aac6d4f581171903a00b3db0473f2b81eace->enter($__internal_c56f4df99587920ec374a3eae090aac6d4f581171903a00b3db0473f2b81eace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalEditQuestion.html.twig"));

        // line 1
        echo "<div  id=\"Edit";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditQuestion", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "idtest" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
        echo "
    </div>


";
        
        $__internal_c56f4df99587920ec374a3eae090aac6d4f581171903a00b3db0473f2b81eace->leave($__internal_c56f4df99587920ec374a3eae090aac6d4f581171903a00b3db0473f2b81eace_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalEditQuestion.html.twig";
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
/* <div  id="Edit{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*        {{ render(controller('TSAdminBundle:Tests:selectEditQuestion', {'id':question.id,'idtest':test.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
