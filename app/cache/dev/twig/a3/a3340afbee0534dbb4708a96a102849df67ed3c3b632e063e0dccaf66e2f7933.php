<?php

/* TSAdminBundle:Tests:addTest.html.twig */
class __TwigTemplate_bbc26ee10536717d133db6dcd7e113c49d51c6c47c39d3254fabeda26cc841eb extends Twig_Template
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
        $__internal_b2f824c7374d9a4a35545974f4e59034bf1f1982844205155e4f848a36bdcaba = $this->env->getExtension("native_profiler");
        $__internal_b2f824c7374d9a4a35545974f4e59034bf1f1982844205155e4f848a36bdcaba->enter($__internal_b2f824c7374d9a4a35545974f4e59034bf1f1982844205155e4f848a36bdcaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:addTest.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div style=\"margin: 20px\" id=\"big-box#\" class=\"content-box box-toggle content-box-closed\">
            <h3 class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Add a new test</span>
                <a class=\"float-right icon-separator btn toggle-button\">
                    <i id=\"big-box\" onclick=\"changeElement(this);\" class=\"glyph-icon icon-toggle icon-chevron-down\"></i>
                </a>
            </h3>
            <div  class=\"content-box-wrapper\">
                <form class=\"col-md-10 center-margin\" method=\"post\"";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                                <span class=\"required\" style=\"color:red\">*</span>
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\" >
                            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-row\" >
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                type
                                <span class=\"required\" style=\"color:red\">*</span>
                            </label>
                        </div>
                        <div  class=\"form-input col-md-10\">
                            <select required=\"required\" id=\"choice\" name=\"type\" class=\"chosen-select\" onchange=\"checkTest(this.value);\">
                                <option > </option>
                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTests"]) ? $context["allTests"] : $this->getContext($context, "allTests")));
        foreach ($context['_seq'] as $context["_key"] => $context["thisTest"]) {
            // line 35
            echo "                                    <option  value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thisTest"], "name", array()), "html", null, true);
            echo " >
                                        ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["thisTest"], "name", array()), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thisTest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                            <span class=\"required\" style=\"color:red\">*</span>
                        </div>
                        <div class=\"form-input col-md-4\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "
                        </div>
                        <div class=\"form-input col-md-2\">
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'label');
        echo "
                            <span class=\"required\" style=\"color:red\">*</span>
                        </div>
                        <div class=\"form-input col-md-4\">
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eliminatoryNote", array()), 'widget');
        echo "
                        </div>
                    </div>
                      <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label');
        echo " (in minutes)
                                <span class=\"required\" style=\"color:red\">*</span>
                            </label>
                        </div>
                        <div class=\"form-input col-md-10\" >
                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                        </div>
                    </div>    
                    <div class=\"form-row\">
                        <div class=\"form-input col-md-2\">
                            <label for=\"\">
                                questions
                                <span class=\"required\"  style=\"color:red\" >*</span>
                            </label>
                        </div>
                        <div id=\"questions\" class=\"form-input col-md-10\">
                            <table class=\"table text-center\">
                                <thead>
                                    <tr>
                                        <th class=\"text-center\"></th>
                                        <th>Question </th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 88
            echo "                                        <tr  id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"  style=\"display: none\">
                                            <td>
                                                <a href=\"javascript:;\" title=\"\" class=\"btn medium primary-bg\" data-toggle=\"dropdown\">
                                                    <i class=\"glyph-icon icon-chevron-down\"></i>
                                                </a>
                                            </td>
                                            <td>
                                                ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "tests", array()), "html", null, true);
            echo "
                                                <label for=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"> 
                                                    <b class=\"font-bold text-left\" id=\"text";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\"></b>
                                                    <script type = \"text/javascript\">
                                                        \$('b#text";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "').append(";
            echo twig_jsonencode_filter($this->getAttribute($context["question"], "text", array()));
            echo ");</script>
                                                </label>
                                                <br/>
                                            </td>
                                            <td>
                                                <div class=\"label bg-red\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo "</div>
                                            </td>
                                            <td>
                                                <div class=\"form-checkbox-radio col-md-12\">
                                                    <div class=\"checkbox-radio\">
                                                        <input id=\"check\" class=\"right\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"ids[]\" onClick=\"incrementMark(this);\">
                                                        <script>
                                                            function incrementMark(_this) {
                                                                var input";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo " = document.getElementById(_this.id);
                                                                var mark = document.getElementById(\"ts_adminbundle_tests_note\");
                                                                 alert(";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo ");
                                                            ";
            // line 116
            echo "                                                                    if (input";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".checked === true) {
                                                                        alert('bon');
                                                            ";
            // line 120
            echo "                                                                         alert(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo ");
                                                                         alert(Number(mark";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".value));
                                                                         var markNote1";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo " = Number(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo ") + Number(mark.value);
                                                                         alert(markNote1);
                                                            ";
            // line 126
            echo "                                                                     }
                                                                     else if (input";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".checked === false) {
                                                                         alert('jour2');
                                                            ";
            // line 131
            echo "                                                                         alert(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo ");
                                                                         alert(Number(mark";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".value));
                                                                         var markNote = Number(";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
            echo ") - Number(mark.value);
                                                                         alert(markNote);
                                                            ";
            // line 137
            echo "                                                                    }
                                                                    ;
                                                                }
                                                        </script>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"divider\" ></div>
                        <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                        <div class=\"col-md-4 col-md-offset-4\">
                            <input type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />
                        </div>
                    </div>
                    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    ";
        // line 158
        $this->loadTemplate("TSAdminBundle:Tests:formulaire.html.twig", "TSAdminBundle:Tests:addTest.html.twig", 158)->display($context);
        // line 159
        echo "                </form>
            </div>
        </div>
    </div>
</div>
<script>

    function changeElement(_this)
    {
        var div = document.getElementById(_this.id + '#');
        var div2 = document.getElementById(_this.id);
        if (div.className === \"content-box box-toggle content-box-closed\") {
            div2.className = \"glyph-icon icon-toggle icon-chevron-up\";
            div.className = \"content-box box-toggle\";
        }
        else {
            div2.className = \"glyph-icon icon-toggle icon-chevron-down\";
            div.className = \"content-box box-toggle content-box-closed\";
        }
    }
    function checkTest(_this) {
    ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 181
            echo "            var tr";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo " = document.getElementById(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\");
            if ((_this) === \"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "tests", array()), "html", null, true);
            echo "\") {
                tr";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".style.display = \"\";
            }
            else {
                tr";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo ".style.display = \"none\";
            }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "        }
</script>";
        
        $__internal_b2f824c7374d9a4a35545974f4e59034bf1f1982844205155e4f848a36bdcaba->leave($__internal_b2f824c7374d9a4a35545974f4e59034bf1f1982844205155e4f848a36bdcaba_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:addTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 189,  333 => 186,  327 => 183,  323 => 182,  316 => 181,  312 => 180,  289 => 159,  287 => 158,  283 => 157,  270 => 146,  256 => 137,  251 => 133,  247 => 132,  242 => 131,  237 => 127,  234 => 126,  227 => 122,  223 => 121,  218 => 120,  212 => 116,  208 => 114,  203 => 112,  197 => 109,  189 => 104,  179 => 99,  174 => 97,  170 => 96,  166 => 95,  155 => 88,  151 => 87,  127 => 66,  119 => 61,  110 => 55,  103 => 51,  97 => 48,  90 => 44,  83 => 39,  74 => 36,  69 => 35,  65 => 34,  49 => 21,  41 => 16,  34 => 12,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/addTest.html.twig #}*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div style="margin: 20px" id="big-box#" class="content-box box-toggle content-box-closed">*/
/*             <h3 class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Add a new test</span>*/
/*                 <a class="float-right icon-separator btn toggle-button">*/
/*                     <i id="big-box" onclick="changeElement(this);" class="glyph-icon icon-toggle icon-chevron-down"></i>*/
/*                 </a>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/*                 <form class="col-md-10 center-margin" method="post"{{ form_enctype(form) }}>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                 {{ form_label(form.name) }}*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10" >*/
/*                             {{ form_widget(form.name) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row" >*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                 type*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div  class="form-input col-md-10">*/
/*                             <select required="required" id="choice" name="type" class="chosen-select" onchange="checkTest(this.value);">*/
/*                                 <option > </option>*/
/*                                 {% for thisTest in allTests %}*/
/*                                     <option  value={{thisTest.name}} >*/
/*                                         {{thisTest.name}}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             {{ form_label(form.note) }}*/
/*                             <span class="required" style="color:red">*</span>*/
/*                         </div>*/
/*                         <div class="form-input col-md-4">*/
/*                             {{ form_widget(form.note) }}*/
/*                         </div>*/
/*                         <div class="form-input col-md-2">*/
/*                             {{ form_label(form.eliminatoryNote) }}*/
/*                             <span class="required" style="color:red">*</span>*/
/*                         </div>*/
/*                         <div class="form-input col-md-4">*/
/*                             {{ form_widget(form.eliminatoryNote) }}*/
/*                         </div>*/
/*                     </div>*/
/*                       <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                 {{ form_label(form.time) }} (in minutes)*/
/*                                 <span class="required" style="color:red">*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div class="form-input col-md-10" >*/
/*                             {{ form_widget(form.time) }}*/
/*                         </div>*/
/*                     </div>    */
/*                     <div class="form-row">*/
/*                         <div class="form-input col-md-2">*/
/*                             <label for="">*/
/*                                 questions*/
/*                                 <span class="required"  style="color:red" >*</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <div id="questions" class="form-input col-md-10">*/
/*                             <table class="table text-center">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th class="text-center"></th>*/
/*                                         <th>Question </th>*/
/*                                         <th></th>*/
/*                                         <th></th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% for question in questions %}*/
/*                                         <tr  id="{{question.id}}"  style="display: none">*/
/*                                             <td>*/
/*                                                 <a href="javascript:;" title="" class="btn medium primary-bg" data-toggle="dropdown">*/
/*                                                     <i class="glyph-icon icon-chevron-down"></i>*/
/*                                                 </a>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {{question.tests}}*/
/*                                                 <label for="{{question.id}}"> */
/*                                                     <b class="font-bold text-left" id="text{{question.id}}"></b>*/
/*                                                     <script type = "text/javascript">*/
/*                                                         $('b#text{{question.id}}').append({{ question.text|json_encode|raw}});</script>*/
/*                                                 </label>*/
/*                                                 <br/>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="label bg-red">{{question.note}}</div>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="form-checkbox-radio col-md-12">*/
/*                                                     <div class="checkbox-radio">*/
/*                                                         <input id="check" class="right" value="{{question.id}}" type="checkbox" name="ids[]" onClick="incrementMark(this);">*/
/*                                                         <script>*/
/*                                                             function incrementMark(_this) {*/
/*                                                                 var input{{question.id}} = document.getElementById(_this.id);*/
/*                                                                 var mark = document.getElementById("ts_adminbundle_tests_note");*/
/*                                                                  alert({{question.note}});*/
/*                                                             {#                                                                var note = Number({{question.note}});#}*/
/*                                                                     if (input{{question.id}}.checked === true) {*/
/*                                                                         alert('bon');*/
/*                                                             {# var markNote1 = Number(mark.value);*/
/*                                                              alert(markNote1);#}*/
/*                                                                          alert({{question.note}});*/
/*                                                                          alert(Number(mark{{question.id}}.value));*/
/*                                                                          var markNote1{{question.id}} = Number({{question.note}}) + Number(mark.value);*/
/*                                                                          alert(markNote1);*/
/*                                                             {# mark.value = markNote1;*/
/*                                                              alert(mark.value);#}*/
/*                                                                      }*/
/*                                                                      else if (input{{question.id}}.checked === false) {*/
/*                                                                          alert('jour2');*/
/*                                                             {# var markNote = Number(mark.value);*/
/*                                                              alert(markNote);#}*/
/*                                                                          alert({{question.note}});*/
/*                                                                          alert(Number(mark{{question.id}}.value));*/
/*                                                                          var markNote = Number({{question.note}}) - Number(mark.value);*/
/*                                                                          alert(markNote);*/
/*                                                             {#mark.value = markNote;*/
/*                                                             alert(mark.value);#}*/
/*                                                                     }*/
/*                                                                     ;*/
/*                                                                 }*/
/*                                                         </script>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <input type="hidden" name="superhidden" id="superhidden">*/
/*                         <div class="col-md-4 col-md-offset-4">*/
/*                             <input type="submit" value="ADD" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_rest(form) }}*/
/*                     {% include "TSAdminBundle:Tests:formulaire.html.twig"  %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/* */
/*     function changeElement(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/*         var div2 = document.getElementById(_this.id);*/
/*         if (div.className === "content-box box-toggle content-box-closed") {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-up";*/
/*             div.className = "content-box box-toggle";*/
/*         }*/
/*         else {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-down";*/
/*             div.className = "content-box box-toggle content-box-closed";*/
/*         }*/
/*     }*/
/*     function checkTest(_this) {*/
/*     {% for question in questions %}*/
/*             var tr{{question.id}} = document.getElementById("{{question.id}}");*/
/*             if ((_this) === "{{question.tests}}") {*/
/*                 tr{{question.id}}.style.display = "";*/
/*             }*/
/*             else {*/
/*                 tr{{question.id}}.style.display = "none";*/
/*             }*/
/*     {% endfor %}*/
/*         }*/
/* </script>*/
