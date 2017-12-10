<?php

/* TSAdminBundle:Notification:ModalInviteCandidate.html.twig */
class __TwigTemplate_170b905f165a4128fef8ebb9ba64c202eb83d920b8641f931f6e3ddcbbbdb19d extends Twig_Template
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
        $__internal_2a02319c190abd90002c1e4da3472453c427cc24e1e282643ff40f9049a5d21f = $this->env->getExtension("native_profiler");
        $__internal_2a02319c190abd90002c1e4da3472453c427cc24e1e282643ff40f9049a5d21f->enter($__internal_2a02319c190abd90002c1e4da3472453c427cc24e1e282643ff40f9049a5d21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Notification:ModalInviteCandidate.html.twig"));

        // line 1
        echo "<div  id=\"ModalInviteCandidate";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
       ";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Notification:persistOtherInvitation", array("id" => $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()))));
        echo "
    </div>




";
        
        $__internal_2a02319c190abd90002c1e4da3472453c427cc24e1e282643ff40f9049a5d21f->leave($__internal_2a02319c190abd90002c1e4da3472453c427cc24e1e282643ff40f9049a5d21f_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Notification:ModalInviteCandidate.html.twig";
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
/* <div  id="ModalInviteCandidate{{candidat.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*        {{ render(controller('TSAdminBundle:Notification:persistOtherInvitation', {'id':candidat.id} )) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
