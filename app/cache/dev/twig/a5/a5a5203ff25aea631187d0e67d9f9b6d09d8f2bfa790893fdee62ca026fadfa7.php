<?php

/* @TSAdmin/Tests/questionSeconde.html.twig */
class __TwigTemplate_ae883b4d8344a2339c25f93c3598b453889aed922473e322008502f911e58209 extends Twig_Template
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
        $__internal_60ac76cb5aeca7a7ba5a5cd5d456d51569856f37b78444b83e066f69c46acb79 = $this->env->getExtension("native_profiler");
        $__internal_60ac76cb5aeca7a7ba5a5cd5d456d51569856f37b78444b83e066f69c46acb79->enter($__internal_60ac76cb5aeca7a7ba5a5cd5d456d51569856f37b78444b83e066f69c46acb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/questionSeconde.html.twig"));

        // line 2
        echo "

<div class=\"row \">
    <div class=\"col-md-12\">
        <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
            <h3 class=\"content-header\">
                <div class=\"button-group float-right bg-gray\" data-toggle=\"buttons\">
                    ";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 10
            echo "                    <a  id=\"edit-box";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" class=\"btn medium bg-gray\"  onclick=\"changeEditElement(this);\" title=\"Edit\">
                        <input type=\"radio\" >
                        <i class=\"glyph-icon icon-edit\"></i>
                    </a>
                    ";
        }
        // line 15
        echo "                    <a id=\"read-box";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\" onclick=\"changeReadElement(this);\" class=\"btn medium bg-gray\" title=\"Responses\">
                        <input type=\"radio\" >
                        <i class=\"glyph-icon icon-angle-double-right\"></i>
                    </a>
                    ";
        // line 19
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 20
            echo "                    <a id=\"remove";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" onclick=\"changeRemoveQuestion(this);\" class=\"btn small hover-red tooltip-button\" data-placement=\"top\" title=\"\" data-original-title=\"Remove\">
                        <i class=\"glyph-icon icon-trash-o\"></i>
                    </a>
                    ";
        }
        // line 24
        echo "                </div>
                ";
        // line 25
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
            // line 26
            echo "                    <b id=\"introduction";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"> </b> 
                ";
        }
        // line 28
        echo "                <div id=\"text";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\"> </div>
            </h3>
            <div class=\"content-box-wrapper\">
                ";
        // line 31
        if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
            // line 32
            echo "                    <img width=\"250\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
            echo "\">
                ";
        }
        // line 34
        echo "                <div class=\"col-md-6 float-none center-margin\" id=\"read-box";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "#\" style=\"display:none\">
                    <div class=\"content-box\">
                        <table class=\"table text-center\">
                            <tbody>
                                <tr>
                                    <td class=\"font-bold\">response</td>
                                    <td class=\"font-bold\">value</td>
                                    <td class=\"font-bold\">note</td>
                                    <td class=\"font-bold\">type</td>
                                </tr>
                                ";
        // line 44
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "free")) {
            // line 45
            echo "                                    <tr>
                                        <td ><textarea name=\"\" id=\"\" class=\"col-md-8\" disabled=\"\"></textarea></td>
                                    </tr>
                                ";
        } else {
            // line 48
            echo "    
                                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 50
                echo "                                        <tr>
                                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</td>
                                            ";
                // line 52
                if ( !(null === $this->getAttribute($context["response"], "value", array()))) {
                    // line 53
                    echo "                                                <td class=\"font-bold\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "value", array()), "html", null, true);
                    echo "</td>
                                            ";
                } else {
                    // line 55
                    echo "                                                <td class=\"font-bold\">
                                                    <i class=\"glyph-icon icon-clock-os\"></i>
                                                </td>
                                            ";
                }
                // line 59
                echo "                                            <td><div class=\"label bg-red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "note", array()), "html", null, true);
                echo "</div></td>

                                            <td class=\"text-right\">
                                                ";
                // line 62
                if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "one")) {
                    // line 63
                    echo "                                                    <input disabled=\"\" type=\"radio\"
                                                           ";
                    // line 64
                    if (($this->getAttribute($context["response"], "note", array()) >= 0)) {
                        // line 65
                        echo "                                                               checked=\"\"
                                                           ";
                    }
                    // line 67
                    echo "                                                           />
                                                ";
                } elseif (($this->getAttribute(                // line 68
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "many")) {
                    // line 69
                    echo "                                                    <input disabled=\"\" type=\"radio\"
                                                           ";
                    // line 70
                    if (($this->getAttribute($context["response"], "note", array()) >= 0)) {
                        // line 71
                        echo "                                                               checked=\"\"
                                                           ";
                    }
                    // line 73
                    echo "                                                           />    
                                                ";
                } elseif (($this->getAttribute(                // line 74
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "menu")) {
                    // line 75
                    echo "                                                    <select id=\"\" multiple=\"\" name=\"\" disabled=\"\">
                                                        <option>";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                    echo "</option>
                                                    </select>
                                                ";
                } elseif (($this->getAttribute(                // line 78
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "numeric")) {
                    // line 79
                    echo "                                                    <input placeholder=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "value", array()), "html", null, true);
                    echo "\" disabled=\"\">
                                                ";
                }
                // line 81
                echo "
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                ";
        }
        // line 86
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 94
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 96
            echo "<div class=\"row\" id=\"edit-box";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "#\" style=\"display:none\">
    ";
            // line 97
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectEditQuestion", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))));
            echo "
</div>
";
            // line 100
            echo "<div class=\"row col-md-12 text-center\" id=\"remove";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "#\" style=\"display:none\">
    ";
            // line 101
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Tests:selectRemoveQuestion", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))));
            echo "
</div>
";
        }
        // line 105
        echo "
<script type = \"text/javascript\">
    \$('b#introduction";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()));
        echo ");
    \$('div#text";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "').append(";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array()));
        echo ");
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
    function changeRemoveQuestion(_this)
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
        
        $__internal_60ac76cb5aeca7a7ba5a5cd5d456d51569856f37b78444b83e066f69c46acb79->leave($__internal_60ac76cb5aeca7a7ba5a5cd5d456d51569856f37b78444b83e066f69c46acb79_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/questionSeconde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 108,  240 => 107,  236 => 105,  230 => 101,  225 => 100,  220 => 97,  215 => 96,  213 => 94,  203 => 86,  200 => 85,  191 => 81,  185 => 79,  183 => 78,  178 => 76,  175 => 75,  173 => 74,  170 => 73,  166 => 71,  164 => 70,  161 => 69,  159 => 68,  156 => 67,  152 => 65,  150 => 64,  147 => 63,  145 => 62,  138 => 59,  132 => 55,  126 => 53,  124 => 52,  120 => 51,  117 => 50,  113 => 49,  110 => 48,  104 => 45,  102 => 44,  88 => 34,  80 => 32,  78 => 31,  71 => 28,  65 => 26,  63 => 25,  60 => 24,  52 => 20,  50 => 19,  42 => 15,  33 => 10,  31 => 9,  22 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Tests/question.html.twig #}*/
/* */
/* */
/* <div class="row ">*/
/*     <div class="col-md-12">*/
/*         <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*             <h3 class="content-header">*/
/*                 <div class="button-group float-right bg-gray" data-toggle="buttons">*/
/*                     {% if  app.session.get('role') is same as ('RH') %}*/
/*                     <a  id="edit-box{{question.id}}" class="btn medium bg-gray"  onclick="changeEditElement(this);" title="Edit">*/
/*                         <input type="radio" >*/
/*                         <i class="glyph-icon icon-edit"></i>*/
/*                     </a>*/
/*                     {% endif %}*/
/*                     <a id="read-box{{question.id}}" onclick="changeReadElement(this);" class="btn medium bg-gray" title="Responses">*/
/*                         <input type="radio" >*/
/*                         <i class="glyph-icon icon-angle-double-right"></i>*/
/*                     </a>*/
/*                     {% if  app.session.get('role') is same as ('RH') %}*/
/*                     <a id="remove{{question.id}}" onclick="changeRemoveQuestion(this);" class="btn small hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">*/
/*                         <i class="glyph-icon icon-trash-o"></i>*/
/*                     </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% if question.introduction is not null %}*/
/*                     <b id="introduction{{question.id}}"> </b> */
/*                 {% endif %}*/
/*                 <div id="text{{question.id}}"> </div>*/
/*             </h3>*/
/*             <div class="content-box-wrapper">*/
/*                 {% if question.questionPicture is not null %}*/
/*                     <img width="250" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                 {% endif %}*/
/*                 <div class="col-md-6 float-none center-margin" id="read-box{{question.id}}#" style="display:none">*/
/*                     <div class="content-box">*/
/*                         <table class="table text-center">*/
/*                             <tbody>*/
/*                                 <tr>*/
/*                                     <td class="font-bold">response</td>*/
/*                                     <td class="font-bold">value</td>*/
/*                                     <td class="font-bold">note</td>*/
/*                                     <td class="font-bold">type</td>*/
/*                                 </tr>*/
/*                                 {% if question.type is same as ('free')  %}*/
/*                                     <tr>*/
/*                                         <td ><textarea name="" id="" class="col-md-8" disabled=""></textarea></td>*/
/*                                     </tr>*/
/*                                 {%else%}    */
/*                                     {% for response in question.responses %}*/
/*                                         <tr>*/
/*                                             <td>{{response.response}}</td>*/
/*                                             {% if response.value is not null %}*/
/*                                                 <td class="font-bold">{{response.value}}</td>*/
/*                                             {%else%}*/
/*                                                 <td class="font-bold">*/
/*                                                     <i class="glyph-icon icon-clock-os"></i>*/
/*                                                 </td>*/
/*                                             {% endif %}*/
/*                                             <td><div class="label bg-red">{{response.note}}</div></td>*/
/* */
/*                                             <td class="text-right">*/
/*                                                 {% if question.type is same as ('one')%}*/
/*                                                     <input disabled="" type="radio"*/
/*                                                            {% if response.note >= 0 %}*/
/*                                                                checked=""*/
/*                                                            {% endif %}*/
/*                                                            />*/
/*                                                 {% elseif question.type is same as ('many') %}*/
/*                                                     <input disabled="" type="radio"*/
/*                                                            {% if response.note >= 0 %}*/
/*                                                                checked=""*/
/*                                                            {% endif %}*/
/*                                                            />    */
/*                                                 {% elseif question.type is same as ('menu') %}*/
/*                                                     <select id="" multiple="" name="" disabled="">*/
/*                                                         <option>{{response.response}}</option>*/
/*                                                     </select>*/
/*                                                 {% elseif question.type is same as ('numeric') %}*/
/*                                                     <input placeholder="{{response.value}}" disabled="">*/
/*                                                 {% endif %}*/
/* */
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 {% endif %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% if  app.session.get('role') is same as ('RH') %}*/
/* {#////*********************************** edit page ********************************#}*/
/* <div class="row" id="edit-box{{question.id}}#" style="display:none">*/
/*     {{ render(controller('TSAdminBundle:Tests:selectEditQuestion', {'id':question.id} )) }}*/
/* </div>*/
/* {#////*********************************** remove page ********************************#}*/
/* <div class="row col-md-12 text-center" id="remove{{question.id}}#" style="display:none">*/
/*     {{ render(controller('TSAdminBundle:Tests:selectRemoveQuestion',  {'id':question.id} )) }}*/
/* </div>*/
/* {% endif %}*/
/* {#////*********************************** Change element Script  ********************************#}*/
/* */
/* <script type = "text/javascript">*/
/*     $('b#introduction{{question.id}}').append({{ question.introduction|json_encode|raw}});*/
/*     $('div#text{{question.id}}').append({{ question.text|json_encode|raw}});*/
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
/*     function changeRemoveQuestion(_this)*/
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
