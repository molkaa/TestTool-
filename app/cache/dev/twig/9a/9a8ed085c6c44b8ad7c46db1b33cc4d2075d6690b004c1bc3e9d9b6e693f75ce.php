<?php

/* TSAdminBundle:Tables:showValues.html.twig */
class __TwigTemplate_15d49057f8d3581e5899b1203e5404680928f48dbac9b1ff14c89f66fc5473d4 extends Twig_Template
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
        $__internal_ff4d30c4d57f0339eae70c77d531bf7394aa7940e8a0cc2a6b0b8287221c9241 = $this->env->getExtension("native_profiler");
        $__internal_ff4d30c4d57f0339eae70c77d531bf7394aa7940e8a0cc2a6b0b8287221c9241->enter($__internal_ff4d30c4d57f0339eae70c77d531bf7394aa7940e8a0cc2a6b0b8287221c9241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tables:showValues.html.twig"));

        // line 2
        echo "<tr>
    <td class=\"font-bold \">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name", array()), "html", null, true);
        echo "
    </td>
    <td class=\"text-center float-right\">
        <a id=\"edit-value";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeEditValue(this);\" class=\"btn small hover-blue tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\">
            <i class=\"glyph-icon icon-edit\"></i>
        </a>
        <a id=\"remove-value";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeRemoveValue(this);\" class=\"btn small hover-red tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
            <i class=\"glyph-icon icon-trash-o\"></i>
        </a>
    </td>
</tr>

";
        // line 17
        echo "<tr class=\"row col-md-12 text-center\" id=\"edit-value";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tables:selectEditValue", array("id" => $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "entityType" => (isset($context["entityType"]) ? $context["entityType"] : $this->getContext($context, "entityType")))));
        echo "
    </td>
</tr>
";
        // line 23
        echo "<tr class=\"row col-md-12 text-center\" id=\"remove-value";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
    <td style=\"width: 900px;\" class=\"center-margin\">
        ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tables:selectRemoveValue", array("id" => $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))));
        echo "
    </td>
</tr>
";
        // line 29
        echo "
<script>

    function changeEditValue(_this)
    {
        var tr = document.getElementById(_this.id + '#');

        if (tr.style.display === \"none\") {
            tr.style.display = \"block\";
        }
        else {
            tr.style.display = \"none\";
        }
    }
    function changeRemoveValue(_this)
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
        
        $__internal_ff4d30c4d57f0339eae70c77d531bf7394aa7940e8a0cc2a6b0b8287221c9241->leave($__internal_ff4d30c4d57f0339eae70c77d531bf7394aa7940e8a0cc2a6b0b8287221c9241_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tables:showValues.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  65 => 25,  59 => 23,  53 => 19,  47 => 17,  38 => 10,  32 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tables/showValues.html.twig #}*/
/* <tr>*/
/*     <td class="font-bold ">*/
/*         {{value.name}}*/
/*     </td>*/
/*     <td class="text-center float-right">*/
/*         <a id="edit-value{{value.id}}" onclick="changeEditValue(this);" class="btn small hover-blue tooltip-button" data-placement="top" title="" data-original-title="Edit">*/
/*             <i class="glyph-icon icon-edit"></i>*/
/*         </a>*/
/*         <a id="remove-value{{value.id}}" onclick="changeRemoveValue(this);" class="btn small hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">*/
/*             <i class="glyph-icon icon-trash-o"></i>*/
/*         </a>*/
/*     </td>*/
/* </tr>*/
/* */
/* {#////*********************************** edit page ********************************#}*/
/* <tr class="row col-md-12 text-center" id="edit-value{{value.id}}#" style="display:none">*/
/*     <td style="width: 900px;" class="center-margin">*/
/*         {{ render(controller('TSAdminBundle:Tables:selectEditValue', {'id':value.id,'entity':entity,'entityType':entityType} )) }}*/
/*     </td>*/
/* </tr>*/
/* {#////*********************************** remove page ********************************#}*/
/* <tr class="row col-md-12 text-center" id="remove-value{{value.id}}#" style="display:none">*/
/*     <td style="width: 900px;" class="center-margin">*/
/*         {{ render(controller('TSAdminBundle:Tables:selectRemoveValue', {'id':value.id,'entity':entity} )) }}*/
/*     </td>*/
/* </tr>*/
/* {#////*********************************** Change element Script  ********************************#}*/
/* */
/* <script>*/
/* */
/*     function changeEditValue(_this)*/
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
/*     function changeRemoveValue(_this)*/
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
