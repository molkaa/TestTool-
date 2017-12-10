<?php

/* @TSAdmin/Tests/ModalImportQuestions.html.twig */
class __TwigTemplate_cc25ed227874f619f06108c74414c4cb53d10765d2cdbc4ed4ec48bb3275484e extends Twig_Template
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
        $__internal_d509dcab05a87666ef952233380c3a68200420e71ccfe056fe7fabbd16ac26e7 = $this->env->getExtension("native_profiler");
        $__internal_d509dcab05a87666ef952233380c3a68200420e71ccfe056fe7fabbd16ac26e7->enter($__internal_d509dcab05a87666ef952233380c3a68200420e71ccfe056fe7fabbd16ac26e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/ModalImportQuestions.html.twig"));

        // line 1
        echo "
<div  id=\"ModalImportQuestions\" class=\"modalTest hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <input type=\"radio\" class=\"hidden\" id=\"IdTest\"  name=\"IdTest\" value=\"\" checked=\"true\">

        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Import Question </h3>
        </div>
        <div class=\"modal-body\">


            <table class=\"table text-center\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Id</th>
                        <th class=\"text-center\">Question</th>
                        <th class=\"text-center\">Note</th>
                        <th class=\"text-center\">View Responses</th>
                        <th class=\"text-left\">Actions</th>
                    </tr>
                </thead>
                <tbody>





                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
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
            // line 33
            echo "
                        ";
            // line 34
            if (($this->getAttribute($context["question"], "tests", array()) === $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()))) {
                echo "\t
                            <tr>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "</td>
                                <td class=\"text-left\"> <label for=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\"> 

                                        <b class=\"text-left\" id=\"Alltext";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\"></b>     ";
                // line 40
                echo "                                    </label></td>
                                <td class=\"text-center\"><div class=\"label primary-bg\">+";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
                echo "</div></td>
                                <td class=\"text-center\">


                                    <a href=\"#\" class=\" btn large hover-blue tooltip-button\" role=\"button\" title=\"\" id=\"popModal_ex";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\">
                                        <i style=\"font-size: 2,5em;\" class=\"glyph-icon icon-eye\"></i>     

                                        ";
                // line 48
                $this->loadTemplate("TSAdminBundle:Tests:ModalViewResponses.html.twig", "@TSAdmin/Tests/ModalImportQuestions.html.twig", 48)->display($context);
                echo "              




                                        <script>


                                            var textq
                                            = ";
                // line 57
                echo twig_jsonencode_filter($this->getAttribute($context["question"], "text", array()));
                echo ";
                                                    var textsansespace = textq.replace(/<br\\s*[\\/]?>/gi, \" \")
                                            var textlimit = textsansespace.substring(0, 100);
                                            var points = '...'

                                         

                                            \$('b#Alltext";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "').append(textq);


                                            \$(function () {



                                                \$('#popModal_ex";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "').click(function () {
                                                    \$('#popModal_ex";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "').popModal({
                                                        html: \$('#content";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "'),
                                                        placement: 'bottomLeft',
                                                        showCloseBut: true,
                                                        onDocumentClickClose: true,
                                                        onDocumentClickClosePrevent: '',
                                                        overflowContent: false,
                                                        inline: true,
                                                        beforeLoadingContent: 'Please, wait...',
                                                        onOkBut: function () {
                                                        },
                                                        onCancelBut: function () {
                                                        },
                                                        onLoad: function () {
                                                        },
                                                        onClose: function () {
                                                        }
                                                    });
                                                });



                                            });
                                        </script>
                                </td>

                                <td class=\"text-center\">
                                    <div class=\"form-checkbox-radio \">
                                        <div class=\"checkbox-radio\">
                                            <input id=\"check\" class=\"right\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\" name=\"ids[]\" >

                                        </div>
                                    </div>
                                </td>

                            </tr>

                        ";
            }
            // line 110
            echo "
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
        // line 112
        echo "
                </tbody>


            </table>                   



        </div>
        <div class=\"modal-footer\">


            <div class=\"col-md-1 float-right\">

                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input type=\"submit\" value=\"Import\" name=\"submitAction\" class=\"btn medium primary-bg\" />

            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\" class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
        ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        


    </form>
</div>
<link rel=\"stylesheet\" type=\"text/css\" title=\"Mon design 1\" href=\"/TestTool/web/css/BasicModal/popModal.css\">        
<script type=\"text/javascript\" src=\"/TestTool/web/js/BasicModal/popModal.js\"></script>
";
        
        $__internal_d509dcab05a87666ef952233380c3a68200420e71ccfe056fe7fabbd16ac26e7->leave($__internal_d509dcab05a87666ef952233380c3a68200420e71ccfe056fe7fabbd16ac26e7_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/ModalImportQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 136,  209 => 112,  194 => 110,  182 => 101,  151 => 73,  147 => 72,  143 => 71,  133 => 64,  123 => 57,  111 => 48,  105 => 45,  98 => 41,  95 => 40,  92 => 39,  87 => 37,  83 => 36,  78 => 34,  75 => 33,  58 => 32,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div  id="ModalImportQuestions" class="modalTest hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/*         <input type="radio" class="hidden" id="IdTest"  name="IdTest" value="" checked="true">*/
/* */
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Import Question </h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/* */
/* */
/*             <table class="table text-center">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th class="text-center">Id</th>*/
/*                         <th class="text-center">Question</th>*/
/*                         <th class="text-center">Note</th>*/
/*                         <th class="text-center">View Responses</th>*/
/*                         <th class="text-left">Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/* */
/* */
/* */
/* */
/*                     {% for question in questions %}*/
/* */
/*                         {% if question.tests is sameas(test.type) %}	*/
/*                             <tr>*/
/*                                 <td>{{question.id}}</td>*/
/*                                 <td class="text-left"> <label for="{{question.id}}"> */
/* */
/*                                         <b class="text-left" id="Alltext{{question.id}}"></b>     {#	<div class="titleModal" style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width:200px;height: 50px"></div> #}*/
/*                                     </label></td>*/
/*                                 <td class="text-center"><div class="label primary-bg">+{{question.note}}</div></td>*/
/*                                 <td class="text-center">*/
/* */
/* */
/*                                     <a href="#" class=" btn large hover-blue tooltip-button" role="button" title="" id="popModal_ex{{question.id}}">*/
/*                                         <i style="font-size: 2,5em;" class="glyph-icon icon-eye"></i>     */
/* */
/*                                         {% include "TSAdminBundle:Tests:ModalViewResponses.html.twig"  %}              */
/* */
/* */
/* */
/* */
/*                                         <script>*/
/* */
/* */
/*                                             var textq*/
/*                                             = {{ question.text|json_encode|raw}};*/
/*                                                     var textsansespace = textq.replace(/<br\s*[\/]?>/gi, " ")*/
/*                                             var textlimit = textsansespace.substring(0, 100);*/
/*                                             var points = '...'*/
/* */
/*                                          */
/* */
/*                                             $('b#Alltext{{question.id}}').append(textq);*/
/* */
/* */
/*                                             $(function () {*/
/* */
/* */
/* */
/*                                                 $('#popModal_ex{{question.id}}').click(function () {*/
/*                                                     $('#popModal_ex{{question.id}}').popModal({*/
/*                                                         html: $('#content{{question.id}}'),*/
/*                                                         placement: 'bottomLeft',*/
/*                                                         showCloseBut: true,*/
/*                                                         onDocumentClickClose: true,*/
/*                                                         onDocumentClickClosePrevent: '',*/
/*                                                         overflowContent: false,*/
/*                                                         inline: true,*/
/*                                                         beforeLoadingContent: 'Please, wait...',*/
/*                                                         onOkBut: function () {*/
/*                                                         },*/
/*                                                         onCancelBut: function () {*/
/*                                                         },*/
/*                                                         onLoad: function () {*/
/*                                                         },*/
/*                                                         onClose: function () {*/
/*                                                         }*/
/*                                                     });*/
/*                                                 });*/
/* */
/* */
/* */
/*                                             });*/
/*                                         </script>*/
/*                                 </td>*/
/* */
/*                                 <td class="text-center">*/
/*                                     <div class="form-checkbox-radio ">*/
/*                                         <div class="checkbox-radio">*/
/*                                             <input id="check" class="right" value="{{question.id}}" type="checkbox" name="ids[]" >*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </td>*/
/* */
/*                             </tr>*/
/* */
/*                         {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                 </tbody>*/
/* */
/* */
/*             </table>                   */
/* */
/* */
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/* */
/* */
/*             <div class="col-md-1 float-right">*/
/* */
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input type="submit" value="Import" name="submitAction" class="btn medium primary-bg" />*/
/* */
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%" class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*         {{ form_rest(form) }}*/
/*         */
/* */
/* */
/*     </form>*/
/* </div>*/
/* <link rel="stylesheet" type="text/css" title="Mon design 1" href="/TestTool/web/css/BasicModal/popModal.css">        */
/* <script type="text/javascript" src="/TestTool/web/js/BasicModal/popModal.js"></script>*/
/* */
