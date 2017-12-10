<?php

/* @TSAdmin/Users/showCandidate.html.twig */
class __TwigTemplate_9b312449c0f2ae23dd4be4154c8d12e6aec5aa0a21f152c3bda8e0c868d49d9c extends Twig_Template
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
        $__internal_d41147c8a484b370180714e0f4d93d6629428f4cab93f00c3d57424a3b7d7317 = $this->env->getExtension("native_profiler");
        $__internal_d41147c8a484b370180714e0f4d93d6629428f4cab93f00c3d57424a3b7d7317->enter($__internal_d41147c8a484b370180714e0f4d93d6629428f4cab93f00c3d57424a3b7d7317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/showCandidate.html.twig"));

        // line 2
        $context["accueil"] = ((array_key_exists("accueil", $context)) ? (_twig_default_filter((isset($context["accueil"]) ? $context["accueil"] : $this->getContext($context, "accueil")), false)) : (false));
        // line 3
        echo "<tr>
    <td class=\"font-bold \">
         ";
        // line 5
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "state", array()) === "enable")) {
            // line 6
            echo "          <img title=\"enable\" src=\"/TestTool/web/images/icons/yes.png\" />
                ";
        } else {
            // line 8
            echo "                    <img title=\"disable\" src=\"/TestTool/web/images/icons/no.png\" />
                ";
        }
        // line 10
        echo "                &nbsp;&nbsp;&nbsp;
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
    </td>
  
    
    <td class=\"text-center float-right\">
        
        <a id=\"edit-user";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeEditUser(this);\" class=\"btn small hover-blue tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
            <i class=\"glyph-icon icon-edit\"></i>
        </a>
        <a id=\"remove-user";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeRemoveUser(this);\" class=\"btn small hover-red tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
            <i class=\"glyph-icon icon-trash-o\"></i>
        </a>
    </td>
</tr>

";
        // line 27
        echo "<tr class=\"row col-md-12 text-center\" id=\"edit-user";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 29
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Users:selectEditCandidate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "role" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()))));
        echo "
    </td>
</tr>
";
        // line 33
        echo "<tr class=\"row col-md-12 text-center\" id=\"remove-user";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Users:selectRemoveCandidate", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "role" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()))));
        echo "
    </td>
</tr>

";
        // line 40
        echo "
<script>

    function changeEditUser(_this)
    {
        var tr = document.getElementById(_this.id + '#');

        if (tr.style.display === \"none\") {
            tr.style.display = \"block\";
        }
        else {
            tr.style.display = \"none\";
        }
    }
    function changeRemoveUser(_this)
    {
        var tr = document.getElementById(_this.id + '#');

        if (tr.style.display === \"none\") {
            tr.style.display = \"block\";
        }
        else {
            tr.style.display = \"none\";
        }
    }
</script>

";
        
        $__internal_d41147c8a484b370180714e0f4d93d6629428f4cab93f00c3d57424a3b7d7317->leave($__internal_d41147c8a484b370180714e0f4d93d6629428f4cab93f00c3d57424a3b7d7317_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/showCandidate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  83 => 35,  77 => 33,  71 => 29,  65 => 27,  56 => 20,  50 => 17,  41 => 11,  38 => 10,  34 => 8,  30 => 6,  28 => 5,  24 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Users/showUser.html.twig #}*/
/* {% set accueil = accueil|default(false) %}*/
/* <tr>*/
/*     <td class="font-bold ">*/
/*          {% if user.state is same as("enable") %}*/
/*           <img title="enable" src="/TestTool/web/images/icons/yes.png" />*/
/*                 {% else %}*/
/*                     <img title="disable" src="/TestTool/web/images/icons/no.png" />*/
/*                 {% endif %}*/
/*                 &nbsp;&nbsp;&nbsp;*/
/*         {{user.username}}*/
/*     </td>*/
/*   */
/*     */
/*     <td class="text-center float-right">*/
/*         */
/*         <a id="edit-user{{user.id}}" onclick="changeEditUser(this);" class="btn small hover-blue tooltip-button" data-placement="top" title="" data-original-title="Edit">*/
/*             <i class="glyph-icon icon-edit"></i>*/
/*         </a>*/
/*         <a id="remove-user{{user.id}}" onclick="changeRemoveUser(this);" class="btn small hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">*/
/*             <i class="glyph-icon icon-trash-o"></i>*/
/*         </a>*/
/*     </td>*/
/* </tr>*/
/* */
/* {#////*********************************** edit page ********************************#}*/
/* <tr class="row col-md-12 text-center" id="edit-user{{user.id}}#" style="display:none">*/
/*     <td style="width: 900px;" class="center-margin">*/
/*         {{ render(controller('TSAdminBundle:Users:selectEditCandidate', {'id':user.id,'role':user.role} )) }}*/
/*     </td>*/
/* </tr>*/
/* {#////*********************************** remove page ********************************#}*/
/* <tr class="row col-md-12 text-center" id="remove-user{{user.id}}#" style="display:none">*/
/*     <td style="width: 900px;" class="center-margin">*/
/*         {{ render(controller('TSAdminBundle:Users:selectRemoveCandidate', {'id':user.id,'role':user.role} )) }}*/
/*     </td>*/
/* </tr>*/
/* */
/* {#////*********************************** Change element Script  ********************************#}*/
/* */
/* <script>*/
/* */
/*     function changeEditUser(_this)*/
/*     {*/
/*         var tr = document.getElementById(_this.id + '#');*/
/* */
/*         if (tr.style.display === "none") {*/
/*             tr.style.display = "block";*/
/*         }*/
/*         else {*/
/*             tr.style.display = "none";*/
/*         }*/
/*     }*/
/*     function changeRemoveUser(_this)*/
/*     {*/
/*         var tr = document.getElementById(_this.id + '#');*/
/* */
/*         if (tr.style.display === "none") {*/
/*             tr.style.display = "block";*/
/*         }*/
/*         else {*/
/*             tr.style.display = "none";*/
/*         }*/
/*     }*/
/* </script>*/
/* */
/* */
