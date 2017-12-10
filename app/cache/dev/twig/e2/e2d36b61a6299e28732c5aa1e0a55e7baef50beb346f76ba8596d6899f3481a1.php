<?php

/* @TSAdmin/Notification/ModalInviteCandidate.html.twig */
class __TwigTemplate_cb6635baf620d788ee5b3284a740f194f81e21f579aaa7423d18c97391b362f7 extends Twig_Template
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
        $__internal_a4d260f0019a36b13cce3e3ba4dbf0f452855ca33309be83018846afc48bcf5e = $this->env->getExtension("native_profiler");
        $__internal_a4d260f0019a36b13cce3e3ba4dbf0f452855ca33309be83018846afc48bcf5e->enter($__internal_a4d260f0019a36b13cce3e3ba4dbf0f452855ca33309be83018846afc48bcf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Notification/ModalInviteCandidate.html.twig"));

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
        
        $__internal_a4d260f0019a36b13cce3e3ba4dbf0f452855ca33309be83018846afc48bcf5e->leave($__internal_a4d260f0019a36b13cce3e3ba4dbf0f452855ca33309be83018846afc48bcf5e_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Notification/ModalInviteCandidate.html.twig";
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
