<?php

/* TSAdminBundle:Users:showUserSA.html.twig */
class __TwigTemplate_0d0ca3a1ecf09ca0c8dca8c7f8a926dbb2e60ea01801f45b23236d78007e451f extends Twig_Template
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
        $__internal_16dc247453f18301b6b3d3405f97e85c8dafc8ddd6c6b416bea9b2bfb263e2c1 = $this->env->getExtension("native_profiler");
        $__internal_16dc247453f18301b6b3d3405f97e85c8dafc8ddd6c6b416bea9b2bfb263e2c1->enter($__internal_16dc247453f18301b6b3d3405f97e85c8dafc8ddd6c6b416bea9b2bfb263e2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:showUserSA.html.twig"));

        // line 2
        echo "<tr>
    <td class=\"font-bold \">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
    </td>
    <td class=\"text-center float-right\">
        <a id=\"edit-user";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeEditUser(this);\" class=\"btn small hover-blue tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
            <i class=\"glyph-icon icon-edit\"></i>
        </a>
        <a id=\"remove-user";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeRemoveUser(this);\" class=\"btn small hover-red tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
            <i class=\"glyph-icon icon-trash-o\"></i>
        </a>
    </td>
</tr>

";
        // line 17
        echo "<tr class=\"row col-md-12 text-center\" id=\"edit-user";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Users:selectEditSAUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "role" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()))));
        echo "
    </td>
</tr>
";
        // line 23
        echo "<tr class=\"row col-md-12 text-center\" id=\"remove-user";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Users:selectRemoveUser", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "role" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()))));
        echo "
    </td>
</tr>

";
        // line 30
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
        
        $__internal_16dc247453f18301b6b3d3405f97e85c8dafc8ddd6c6b416bea9b2bfb263e2c1->leave($__internal_16dc247453f18301b6b3d3405f97e85c8dafc8ddd6c6b416bea9b2bfb263e2c1_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:showUserSA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  65 => 25,  59 => 23,  53 => 19,  47 => 17,  38 => 10,  32 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Users/showUser.html.twig #}*/
/* <tr>*/
/*     <td class="font-bold ">*/
/*         {{user.username}}*/
/*     </td>*/
/*     <td class="text-center float-right">*/
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
/*         {{ render(controller('TSAdminBundle:Users:selectEditSAUser', {'id':user.id,'role':user.role} )) }}*/
/*     </td>*/
/* </tr>*/
/* {#////*********************************** remove page ********************************#}*/
/* <tr class="row col-md-12 text-center" id="remove-user{{user.id}}#" style="display:none">*/
/*     <td style="width: 900px;" class="center-margin">*/
/*         {{ render(controller('TSAdminBundle:Users:selectRemoveUser', {'id':user.id,'role':user.role} )) }}*/
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