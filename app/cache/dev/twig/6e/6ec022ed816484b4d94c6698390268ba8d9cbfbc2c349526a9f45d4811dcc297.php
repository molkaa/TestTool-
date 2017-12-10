<?php

/* TSAdminBundle:Tests:ModalViewResponses.html.twig */
class __TwigTemplate_c2d0c0979878ce1c2d09261ac8c2925d11e62b049b049e160e6343721e5afb1a extends Twig_Template
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
        $__internal_5adaac95191890c6b35c63d157920f249060f17bd5683da4c2cc9ae306275a97 = $this->env->getExtension("native_profiler");
        $__internal_5adaac95191890c6b35c63d157920f249060f17bd5683da4c2cc9ae306275a97->enter($__internal_5adaac95191890c6b35c63d157920f249060f17bd5683da4c2cc9ae306275a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalViewResponses.html.twig"));

        // line 1
        echo "<div style=\"display:none\">
    <div id=\"content";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
        <table class=\"table \" id=\"read-box";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "#\" style=\"display:block\">
            <tbody>
                <tr>
                    <td class=\"font-bold\">response</td>
                    <td class=\"font-bold\">value</td>
                    <td class=\"font-bold\">note</td>
                    <td class=\"font-bold\">type</td>
                </tr>
                 
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 13
            echo "                        <tr>
                            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
            echo "</td>
                            ";
            // line 15
            if ( !(null === $this->getAttribute($context["response"], "value", array()))) {
                // line 16
                echo "                                <td class=\"font-bold\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "value", array()), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 18
                echo "                                <td class=\"font-bold\">
                                    <i class=\"glyph-icon icon-clock-os\"></i>
                                </td>
                            ";
            }
            // line 22
            echo "                            <td><div class=\"label primary-bg\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "note", array()), "html", null, true);
            echo "</div></td>

                            <td class=\"text-right\">
                                ";
            // line 25
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "one")) {
                // line 26
                echo "                                    <input disabled=\"\" type=\"radio\"
                                           ";
                // line 27
                if (($this->getAttribute($context["response"], "note", array()) >= 0)) {
                    // line 28
                    echo "                                               checked=\"\"
                                           ";
                }
                // line 30
                echo "                                           />
                                ";
            } elseif (($this->getAttribute(            // line 31
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "many")) {
                // line 32
                echo "                                    <input disabled=\"\" type=\"checkbox\"
                                           ";
                // line 33
                if (($this->getAttribute($context["response"], "note", array()) >= 0)) {
                    // line 34
                    echo "                                               checked=\"\"
                                           ";
                }
                // line 36
                echo "                                           />    
                                ";
            } elseif (($this->getAttribute(            // line 37
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "menu")) {
                // line 38
                echo "                                    <select id=\"\" multiple=\"\" name=\"\" disabled=\"\">
                                        <option>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</option>
                                    </select>
                                ";
            } elseif (($this->getAttribute(            // line 41
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "numeric")) {
                // line 42
                echo "                                    <input placeholder=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "value", array()), "html", null, true);
                echo "\" disabled=\"\">
                                ";
            } elseif (($this->getAttribute(            // line 43
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) === "free")) {
                // line 44
                echo "                                    <textarea name=\"\" id=\"\" class=\"col-md-8\" disabled=\"\"></textarea>
                                ";
            }
            // line 46
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                
            </tbody>
        </table>
        <div class=\"popModal_footer\">
            <button type=\"button\" class=\"btn medium primary-bg\" data-popmodal-but=\"ok\">ok</button>

        </div>
    </div>
</div>   ";
        
        $__internal_5adaac95191890c6b35c63d157920f249060f17bd5683da4c2cc9ae306275a97->leave($__internal_5adaac95191890c6b35c63d157920f249060f17bd5683da4c2cc9ae306275a97_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalViewResponses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  124 => 46,  120 => 44,  118 => 43,  113 => 42,  111 => 41,  106 => 39,  103 => 38,  101 => 37,  98 => 36,  94 => 34,  92 => 33,  89 => 32,  87 => 31,  84 => 30,  80 => 28,  78 => 27,  75 => 26,  73 => 25,  66 => 22,  60 => 18,  54 => 16,  52 => 15,  48 => 14,  45 => 13,  41 => 12,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div style="display:none">*/
/*     <div id="content{{question.id}}">*/
/*         <table class="table " id="read-box{{question.id}}#" style="display:block">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td class="font-bold">response</td>*/
/*                     <td class="font-bold">value</td>*/
/*                     <td class="font-bold">note</td>*/
/*                     <td class="font-bold">type</td>*/
/*                 </tr>*/
/*                  */
/*                     {% for response in question.responses %}*/
/*                         <tr>*/
/*                             <td>{{response.response}}</td>*/
/*                             {% if response.value is not null %}*/
/*                                 <td class="font-bold">{{response.value}}</td>*/
/*                             {%else%}*/
/*                                 <td class="font-bold">*/
/*                                     <i class="glyph-icon icon-clock-os"></i>*/
/*                                 </td>*/
/*                             {% endif %}*/
/*                             <td><div class="label primary-bg">{{response.note}}</div></td>*/
/* */
/*                             <td class="text-right">*/
/*                                 {% if question.type is same as ('one')%}*/
/*                                     <input disabled="" type="radio"*/
/*                                            {% if response.note >= 0 %}*/
/*                                                checked=""*/
/*                                            {% endif %}*/
/*                                            />*/
/*                                 {% elseif question.type is same as ('many') %}*/
/*                                     <input disabled="" type="checkbox"*/
/*                                            {% if response.note >= 0 %}*/
/*                                                checked=""*/
/*                                            {% endif %}*/
/*                                            />    */
/*                                 {% elseif question.type is same as ('menu') %}*/
/*                                     <select id="" multiple="" name="" disabled="">*/
/*                                         <option>{{response.response}}</option>*/
/*                                     </select>*/
/*                                 {% elseif question.type is same as ('numeric') %}*/
/*                                     <input placeholder="{{response.value}}" disabled="">*/
/*                                 {%elseif question.type is same as ('free') %}*/
/*                                     <textarea name="" id="" class="col-md-8" disabled=""></textarea>*/
/*                                 {% endif %}*/
/* */
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 */
/*             </tbody>*/
/*         </table>*/
/*         <div class="popModal_footer">*/
/*             <button type="button" class="btn medium primary-bg" data-popmodal-but="ok">ok</button>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>   */
