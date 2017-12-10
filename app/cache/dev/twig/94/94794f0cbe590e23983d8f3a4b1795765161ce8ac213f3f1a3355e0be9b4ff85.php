<?php

/* TSAdminBundle:Tests:testSeconde.html.twig */
class __TwigTemplate_da38c73f6b7df508079517735d20f566848698320394b9b5020d773765d688be extends Twig_Template
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
        $__internal_c7310e44ce885e7354fe988259950e238bb74cae56bfbdc239b8ec1c64d22d6d = $this->env->getExtension("native_profiler");
        $__internal_c7310e44ce885e7354fe988259950e238bb74cae56bfbdc239b8ec1c64d22d6d->enter($__internal_c7310e44ce885e7354fe988259950e238bb74cae56bfbdc239b8ec1c64d22d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:testSeconde.html.twig"));

        // line 2
        echo "
<div class=\"row \">
    <div class=\"col-md-12\">
        <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
            <h3 class=\"content-header\">
                <div class=\"button-group float-right bg-gray\" data-toggle=\"buttons\">
                    ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 9
            echo "                        <a  id=\"edit-box";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" class=\"btn medium bg-gray\"  onclick=\"changeEditElement(this);\" title=\"Edit\">
                            <input type=\"radio\" >
                            <i class=\"glyph-icon icon-edit\"></i>
                        </a>
                    ";
        }
        // line 14
        echo "                    <a id=\"read-box";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeReadElement(this);\" class=\"btn medium bg-gray\" title=\"Questions\">
                        <input type=\"radio\" >
                        <i class=\"glyph-icon icon-angle-double-right\"></i>
                    </a>
                    ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 19
            echo "                        <a id=\"remove";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "\" onclick=\"changeRemoveTest(this);\" class=\"btn small hover-red tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
                            <i class=\"glyph-icon icon-trash-o\"></i>
                        </a>
                    ";
        }
        // line 23
        echo "                </div>
                <b> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo " </b>
            </h3>
            <div class=\"content-box-wrapper\">
                <table class=\"table table-condensed\">
            <thead>
                <tr>
                    
                    <th>Type</th>
                    <th>Mark</th>
                    <th>Elemenatory mark</th>
                    <th>Time</th>
                    <th>No automatic questions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td class=\"font-bold text-left\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "</td>
                    <td class=\"font-bold text-left\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()), "html", null, true);
        echo "</td>
                    <td class=\"font-bold text-left\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "eliminatoryNote", array()), "html", null, true);
        echo "</td>
                    <td class=\"font-bold text-left\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "time", array()), "html", null, true);
        echo " minutes</td>
                    <td class=\"font-bold text-left\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "automatic", array()), "html", null, true);
        echo "</td>
                </tr>  
            </tbody>
        </table>
                
                <div class=\"divider col-md-12\"></div>

                <div  class=\"col-md-10 float-none center-margin\" id=\"read-box";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
                    <div class=\"content-box\">
                        <table class=\"table text-center\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\"></th>
                                    <th>Question </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "questions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 64
            echo "                                    <tr  id=\"edit";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"   >
                                        <td>
                                            <a id=\"moreTestQuestion";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" onclick=\"changeEditElement(this);\"  title=\"\" class=\"btn medium primary-bg\" data-toggle=\"dropdown\">
                                                <i  class=\"glyph-icon icon-ellipsis-v\"></i>
                                            </a>
                                        </td>
                                        <td>
                                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "tests", array()), "html", null, true);
            echo "
                                            <label for=\"edit";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"> 
                                                <b class=\"font-bold text-left\" id=\"editTestText";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"></b>
                                                <script type = \"text/javascript\">
                                                    \$('b#editTestText";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "').append(";
            echo twig_jsonencode_filter($this->getAttribute($context["question"], "text", array()));
            echo ");
                                                </script>

                                            </label>
                                            <br/>
                                            <div id=\"moreTestQuestion";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "#\" style=\"display: none;\">
                                                ";
            // line 81
            if (($this->getAttribute($context["question"], "type", array()) == "one")) {
                // line 82
                echo "                                                    ";
                $this->loadTemplate("TSAdminBundle:Tests:oneTest.html.twig", "TSAdminBundle:Tests:testSeconde.html.twig", 82)->display($context);
                // line 83
                echo "                                                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "many")) {
                // line 84
                echo "                                                    ";
                $this->loadTemplate("TSAdminBundle:Tests:manyTest.html.twig", "TSAdminBundle:Tests:testSeconde.html.twig", 84)->display($context);
                // line 85
                echo "                                                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "menu")) {
                // line 86
                echo "                                                    ";
                $this->loadTemplate("TSAdminBundle:Tests:menuTest.html.twig", "TSAdminBundle:Tests:testSeconde.html.twig", 86)->display($context);
                // line 87
                echo "                                                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "numeric")) {
                // line 88
                echo "                                                    ";
                $this->loadTemplate("TSAdminBundle:Tests:numericTest.html.twig", "TSAdminBundle:Tests:testSeconde.html.twig", 88)->display($context);
                // line 89
                echo "                                                ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "free")) {
                // line 90
                echo "                                                    ";
                $this->loadTemplate("TSAdminBundle:Tests:freeTest.html.twig", "TSAdminBundle:Tests:testSeconde.html.twig", 90)->display($context);
                // line 91
                echo "                                                ";
            }
            // line 92
            echo "                                            </div>
                                        </td>
                                        <td>
                                            <div class=\"label bg-red\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo "</div>
                                        </td>
                                    </tr>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 107
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 108
            echo "    ";
            // line 109
            echo "    <div class=\"row\" id=\"edit-box";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "#\" style=\"display:none\">
        ";
            // line 110
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
            echo "
    </div>
    ";
            // line 113
            echo "    <div class=\"row col-md-12 text-center\" id=\"remove";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
            echo "#\" style=\"display:none\">
        ";
            // line 114
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectRemoveTest", array("id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))));
            echo "
    </div>
";
        }
        // line 118
        echo "
<script type = \"text/javascript\">

    function changeEditElement(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }
    function changeRemoveTest(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }

    function changeReadElement(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }

</script>";
        
        $__internal_c7310e44ce885e7354fe988259950e238bb74cae56bfbdc239b8ec1c64d22d6d->leave($__internal_c7310e44ce885e7354fe988259950e238bb74cae56bfbdc239b8ec1c64d22d6d_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:testSeconde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 118,  264 => 114,  259 => 113,  254 => 110,  249 => 109,  247 => 108,  245 => 107,  235 => 99,  217 => 95,  212 => 92,  209 => 91,  206 => 90,  203 => 89,  200 => 88,  197 => 87,  194 => 86,  191 => 85,  188 => 84,  185 => 83,  182 => 82,  180 => 81,  176 => 80,  166 => 75,  161 => 73,  157 => 72,  153 => 71,  145 => 66,  139 => 64,  122 => 63,  108 => 52,  98 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  62 => 24,  59 => 23,  51 => 19,  49 => 18,  41 => 14,  32 => 9,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Tests/test.html.twig #}*/
/* */
/* <div class="row ">*/
/*     <div class="col-md-12">*/
/*         <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*             <h3 class="content-header">*/
/*                 <div class="button-group float-right bg-gray" data-toggle="buttons">*/
/*                     {% if  app.session.get('role') is same as ('RH') %}*/
/*                         <a  id="edit-box{{test.id}}" class="btn medium bg-gray"  onclick="changeEditElement(this);" title="Edit">*/
/*                             <input type="radio" >*/
/*                             <i class="glyph-icon icon-edit"></i>*/
/*                         </a>*/
/*                     {% endif%}*/
/*                     <a id="read-box{{test.id}}" onclick="changeReadElement(this);" class="btn medium bg-gray" title="Questions">*/
/*                         <input type="radio" >*/
/*                         <i class="glyph-icon icon-angle-double-right"></i>*/
/*                     </a>*/
/*                     {% if  app.session.get('role') is same as ('RH') %}*/
/*                         <a id="remove{{test.id}}" onclick="changeRemoveTest(this);" class="btn small hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">*/
/*                             <i class="glyph-icon icon-trash-o"></i>*/
/*                         </a>*/
/*                     {% endif%}*/
/*                 </div>*/
/*                 <b> {{test.name }} </b>*/
/*             </h3>*/
/*             <div class="content-box-wrapper">*/
/*                 <table class="table table-condensed">*/
/*             <thead>*/
/*                 <tr>*/
/*                     */
/*                     <th>Type</th>*/
/*                     <th>Mark</th>*/
/*                     <th>Elemenatory mark</th>*/
/*                     <th>Time</th>*/
/*                     <th>No automatic questions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     */
/*                     <td class="font-bold text-left">{{ test.type}}</td>*/
/*                     <td class="font-bold text-left">{{ test.note}}</td>*/
/*                     <td class="font-bold text-left">{{ test.eliminatoryNote}}</td>*/
/*                     <td class="font-bold text-left">{{ test.time}} minutes</td>*/
/*                     <td class="font-bold text-left">{{ test.automatic }}</td>*/
/*                 </tr>  */
/*             </tbody>*/
/*         </table>*/
/*                 */
/*                 <div class="divider col-md-12"></div>*/
/* */
/*                 <div  class="col-md-10 float-none center-margin" id="read-box{{test.id}}#" style="display:none">*/
/*                     <div class="content-box">*/
/*                         <table class="table text-center">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th class="text-center"></th>*/
/*                                     <th>Question </th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for question  in test.questions%}*/
/*                                     <tr  id="edit{{question.id}}"   >*/
/*                                         <td>*/
/*                                             <a id="moreTestQuestion{{question.id}}" onclick="changeEditElement(this);"  title="" class="btn medium primary-bg" data-toggle="dropdown">*/
/*                                                 <i  class="glyph-icon icon-ellipsis-v"></i>*/
/*                                             </a>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             {{question.tests}}*/
/*                                             <label for="edit{{question.id}}"> */
/*                                                 <b class="font-bold text-left" id="editTestText{{question.id}}"></b>*/
/*                                                 <script type = "text/javascript">*/
/*                                                     $('b#editTestText{{question.id}}').append({{question.text|json_encode|raw}});*/
/*                                                 </script>*/
/* */
/*                                             </label>*/
/*                                             <br/>*/
/*                                             <div id="moreTestQuestion{{question.id}}#" style="display: none;">*/
/*                                                 {% if question.type == ('one') %}*/
/*                                                     {% include "TSAdminBundle:Tests:oneTest.html.twig" %}*/
/*                                                 {% elseif question.type == ('many') %}*/
/*                                                     {% include "TSAdminBundle:Tests:manyTest.html.twig" %}*/
/*                                                 {% elseif question.type == ('menu') %}*/
/*                                                     {% include "TSAdminBundle:Tests:menuTest.html.twig" %}*/
/*                                                 {% elseif question.type == ('numeric') %}*/
/*                                                     {% include "TSAdminBundle:Tests:numericTest.html.twig" %}*/
/*                                                 {% elseif question.type == ('free') %}*/
/*                                                     {% include "TSAdminBundle:Tests:freeTest.html.twig" %}*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </td>*/
/*                                         <td>*/
/*                                             <div class="label bg-red">{{question.note}}</div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% if  app.session.get('role') is same as ('RH') %}*/
/*     {#////*********************************** edit page ********************************#}*/
/*     <div class="row" id="edit-box{{test.id}}#" style="display:none">*/
/*         {{ render(controller('TSAdminBundle:Tests:selectEditTest', {'id':test.id} )) }}*/
/*     </div>*/
/*     {#////*********************************** remove page ********************************#}*/
/*     <div class="row col-md-12 text-center" id="remove{{test.id}}#" style="display:none">*/
/*         {{ render(controller('TSAdminBundle:Tests:selectRemoveTest',  {'id':test.id} )) }}*/
/*     </div>*/
/* {% endif%}*/
/* {#////*********************************** Change element Script  ********************************#}*/
/* */
/* <script type = "text/javascript">*/
/* */
/*     function changeEditElement(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/*     function changeRemoveTest(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/* */
/*     function changeReadElement(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/* */
/* </script>*/
