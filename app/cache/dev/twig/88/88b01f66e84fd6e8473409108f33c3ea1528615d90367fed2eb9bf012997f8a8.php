<?php

/* @TSAdmin/Tests/test.html.twig */
class __TwigTemplate_43e32630f4dd5f5300ce5d2878bd1c2e6d46c2343cef6ac09d0269f26b55ff5e extends Twig_Template
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
        $__internal_353a8d3383a10a1896bce8c5ae37814e7d5de4eb0f9efbd4efed243f0c04f149 = $this->env->getExtension("native_profiler");
        $__internal_353a8d3383a10a1896bce8c5ae37814e7d5de4eb0f9efbd4efed243f0c04f149->enter($__internal_353a8d3383a10a1896bce8c5ae37814e7d5de4eb0f9efbd4efed243f0c04f149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/test.html.twig"));

        // line 2
        echo "
<tr>

    <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo " </td>

    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "</td>

    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "eliminatoryNote", array()), "html", null, true);
        echo "</td>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "time", array()), "html", null, true);
        echo " minutes</td>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "calculationMethod", array()), "html", null, true);
        echo "</td>
    <td>
        <a href=\"#View";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"view test\">
            <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-eye\"></i>
        </a>

    </td>

    
        <td>
            <a href=\"#Customize";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"customize test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-cog\"></i>
            </a>

        </td>
        <td>

            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_settingTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))), "html", null, true);
        echo "\"
               class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"setting test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-wrench\"></i>
            </a>

        </td>
        <td>
            <a href=\"#Edit";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"edit test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-edit\"></i>
            </a>

        </td>
        <td>
            <a href=\"#Remove";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\" btn large hover-blue tooltip-button\" data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"remove test\">
                <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-remove\"></i>
            </a>

        </td>

</tr>       



";
        // line 53
        $this->loadTemplate("TSAdminBundle:Tests:ModalEditTest.html.twig", "@TSAdmin/Tests/test.html.twig", 53)->display($context);
        $this->loadTemplate("TSAdminBundle:Tests:ModalRemoveTest.html.twig", "@TSAdmin/Tests/test.html.twig", 53)->display($context);
        echo "  ";
        $this->loadTemplate("TSAdminBundle:Tests:ModalViewTest.html.twig", "@TSAdmin/Tests/test.html.twig", 53)->display($context);
        echo "    ";
        $this->loadTemplate("TSAdminBundle:Tests:ModalCustomizeTest.html.twig", "@TSAdmin/Tests/test.html.twig", 53)->display($context);
        // line 54
        echo "
";
        
        $__internal_353a8d3383a10a1896bce8c5ae37814e7d5de4eb0f9efbd4efed243f0c04f149->leave($__internal_353a8d3383a10a1896bce8c5ae37814e7d5de4eb0f9efbd4efed243f0c04f149_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 54,  111 => 53,  98 => 43,  89 => 37,  79 => 30,  69 => 23,  58 => 15,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  32 => 7,  27 => 5,  22 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Tests/test.html.twig #}*/
/* */
/* <tr>*/
/* */
/*     <td>{{test.id}} </td>*/
/* */
/*     <td>{{test.type}}</td>*/
/* */
/*     <td>{{test.name}}</td>*/
/*     <td>{{ test.note}}</td>*/
/*     <td>{{ test.eliminatoryNote}}</td>*/
/*     <td>{{ test.time}} minutes</td>*/
/*     <td>{{ test.calculationMethod }}</td>*/
/*     <td>*/
/*         <a href="#View{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="view test">*/
/*             <i style="font-size: 2,5em;" class="glyph-icon icon-eye"></i>*/
/*         </a>*/
/* */
/*     </td>*/
/* */
/*     */
/*         <td>*/
/*             <a href="#Customize{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="customize test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-cog"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*         <td>*/
/* */
/*             <a href="{{ path('ts_admin_settingTest', { 'id': test.id })}}"*/
/*                class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="setting test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-wrench"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*         <td>*/
/*             <a href="#Edit{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="edit test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-edit"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/*         <td>*/
/*             <a href="#Remove{{test.id}}" class=" btn large hover-blue tooltip-button" data-toggle="modal" data-placement="top" role="button" title="remove test">*/
/*                 <i style="font-size: 2,5em;" class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*         </td>*/
/* */
/* </tr>       */
/* */
/* */
/* */
/* {% include "TSAdminBundle:Tests:ModalEditTest.html.twig"  %}{% include "TSAdminBundle:Tests:ModalRemoveTest.html.twig"  %}  {% include "TSAdminBundle:Tests:ModalViewTest.html.twig"  %}    {% include "TSAdminBundle:Tests:ModalCustomizeTest.html.twig"  %}*/
/* */
/* */
