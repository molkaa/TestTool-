<?php

/* TSAdminBundle:Tests:ModalViewTest.html.twig */
class __TwigTemplate_63348722b96c1cb81cd3292d7668352e08444d82814665a2527c91d4096f5149 extends Twig_Template
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
        $__internal_73c067208be06dcf7ce9f0dae63c88b9f5f0b973c94c76d27b7dfdf959cfec1c = $this->env->getExtension("native_profiler");
        $__internal_73c067208be06dcf7ce9f0dae63c88b9f5f0b973c94c76d27b7dfdf959cfec1c->enter($__internal_73c067208be06dcf7ce9f0dae63c88b9f5f0b973c94c76d27b7dfdf959cfec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalViewTest.html.twig"));

        // line 1
        echo "<div  id=\"View";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modalTest hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">Test Id :";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "</p></h3>
    </div>
    <div class=\"modal-body\">
        <div class=\"content-box\">
            <div class=\"containerModal\">
                <div class=\"headingModal\" >
                    <div class=\"headingcolModal\" >Question Id </div>                    
                    <div class=\"headingcolModal\" >Question </div>
                    <div class=\"headingcolModal\"  >Response </div>
                    <div class=\"headingcolModal\"> Mark</div>
                </div>      
                ";
        // line 18
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "questions", array())) == 0)) {
            // line 19
            echo "                    <div class=\"table-rowModal\">
                        <div class=\"font-bold text-left\" >No Questions found</div>

                    ";
        }
        // line 23
        echo "                    ";
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
            // line 24
            echo "                        <div class=\"table-rowModal\">
                            <div class=\"colModal font-bold text-center\" style=\"width: 80px\" >";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "</div>
                            <div class=\"colModal\" style=\"width: 200px\"> 
                                <label for=\"edit";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"> 
                                    <b class=\"font-bold text-left\" id=\"editTestText";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"></b>
                                    <script type = \"text/javascript\">
                                        \$('b#editTestText";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "').append(";
            echo twig_jsonencode_filter($this->getAttribute($context["question"], "text", array()));
            echo ");
                                    </script>

                                </label></div>
                            <div class=\"colModal\" style=\"width: 600px\"><div id=\"moreTestQuestion";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "#\" style=\"display: block;\">
                                    ";
            // line 35
            if (($this->getAttribute($context["question"], "type", array()) == "one")) {
                // line 36
                echo "                                        ";
                $this->loadTemplate("TSAdminBundle:Tests:oneTest.html.twig", "TSAdminBundle:Tests:ModalViewTest.html.twig", 36)->display($context);
                // line 37
                echo "                                    ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "many")) {
                // line 38
                echo "                                        ";
                $this->loadTemplate("TSAdminBundle:Tests:manyTest.html.twig", "TSAdminBundle:Tests:ModalViewTest.html.twig", 38)->display($context);
                // line 39
                echo "                                    ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "menu")) {
                // line 40
                echo "                                        ";
                $this->loadTemplate("TSAdminBundle:Tests:menuTest.html.twig", "TSAdminBundle:Tests:ModalViewTest.html.twig", 40)->display($context);
                // line 41
                echo "                                    ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "numeric")) {
                // line 42
                echo "                                        ";
                $this->loadTemplate("TSAdminBundle:Tests:numericTest.html.twig", "TSAdminBundle:Tests:ModalViewTest.html.twig", 42)->display($context);
                // line 43
                echo "                                    ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "free")) {
                // line 44
                echo "                                        ";
                $this->loadTemplate("TSAdminBundle:Tests:freeTest.html.twig", "TSAdminBundle:Tests:ModalViewTest.html.twig", 44)->display($context);
                // line 45
                echo "                                    ";
            }
            // line 46
            echo "                                </div>
                            </div>
                            <div class=\"colModal\" style=\"width: 50px\">  <div class=\"label primary-bg\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo "</div></div>

                        </div>
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
        // line 51
        echo "                                 












                </div>

            </div> 
        </div>








        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
    </div>







";
        
        $__internal_73c067208be06dcf7ce9f0dae63c88b9f5f0b973c94c76d27b7dfdf959cfec1c->leave($__internal_73c067208be06dcf7ce9f0dae63c88b9f5f0b973c94c76d27b7dfdf959cfec1c_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalViewTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  140 => 48,  136 => 46,  133 => 45,  130 => 44,  127 => 43,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  104 => 35,  100 => 34,  91 => 30,  86 => 28,  82 => 27,  77 => 25,  74 => 24,  56 => 23,  50 => 19,  48 => 18,  32 => 7,  22 => 1,);
    }
}
/* <div  id="View{{test.id}}" class="modalTest hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">Test Id :{{test.id}}-{{test.type}}</p></h3>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*         <div class="content-box">*/
/*             <div class="containerModal">*/
/*                 <div class="headingModal" >*/
/*                     <div class="headingcolModal" >Question Id </div>                    */
/*                     <div class="headingcolModal" >Question </div>*/
/*                     <div class="headingcolModal"  >Response </div>*/
/*                     <div class="headingcolModal"> Mark</div>*/
/*                 </div>      */
/*                 {%if test.questions|length==0%}*/
/*                     <div class="table-rowModal">*/
/*                         <div class="font-bold text-left" >No Questions found</div>*/
/* */
/*                     {%endif%}*/
/*                     {% for question  in test.questions%}*/
/*                         <div class="table-rowModal">*/
/*                             <div class="colModal font-bold text-center" style="width: 80px" >{{question.id}}</div>*/
/*                             <div class="colModal" style="width: 200px"> */
/*                                 <label for="edit{{question.id}}"> */
/*                                     <b class="font-bold text-left" id="editTestText{{question.id}}"></b>*/
/*                                     <script type = "text/javascript">*/
/*                                         $('b#editTestText{{question.id}}').append({{question.text|json_encode|raw}});*/
/*                                     </script>*/
/* */
/*                                 </label></div>*/
/*                             <div class="colModal" style="width: 600px"><div id="moreTestQuestion{{question.id}}#" style="display: block;">*/
/*                                     {% if question.type == ('one') %}*/
/*                                         {% include "TSAdminBundle:Tests:oneTest.html.twig" %}*/
/*                                     {% elseif question.type == ('many') %}*/
/*                                         {% include "TSAdminBundle:Tests:manyTest.html.twig" %}*/
/*                                     {% elseif question.type == ('menu') %}*/
/*                                         {% include "TSAdminBundle:Tests:menuTest.html.twig" %}*/
/*                                     {% elseif question.type == ('numeric') %}*/
/*                                         {% include "TSAdminBundle:Tests:numericTest.html.twig" %}*/
/*                                     {% elseif question.type == ('free') %}*/
/*                                         {% include "TSAdminBundle:Tests:freeTest.html.twig" %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="colModal" style="width: 50px">  <div class="label primary-bg">{{question.note}}</div></div>*/
/* */
/*                         </div>*/
/*                     {% endfor %}                                 */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                 </div>*/
/* */
/*             </div> */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         <div class="modal-footer">*/
/*             <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
