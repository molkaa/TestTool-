<?php

/* TSAdminBundle:Tests:ModalViewQuestion.html.twig */
class __TwigTemplate_9e908f8d8fc3cdb3085fe808dc0d53bdd0fa42059a62ab8e45a5201cc0c63c4e extends Twig_Template
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
        $__internal_0b486c5d8c434fc61cfa3e07492a56d777d7f630e98e095d2e3d56be227a04b4 = $this->env->getExtension("native_profiler");
        $__internal_0b486c5d8c434fc61cfa3e07492a56d777d7f630e98e095d2e3d56be227a04b4->enter($__internal_0b486c5d8c434fc61cfa3e07492a56d777d7f630e98e095d2e3d56be227a04b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:ModalViewQuestion.html.twig"));

        // line 1
        echo " 
";
        // line 2
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "one")) {
            // line 3
            echo "
    <div  id=\"View";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"  class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Question Id : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"modal-body\">
            <div id=\"questionone";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                <u><b>Question :</b></u>
                <br>
                <br>
                <div class=\"col-md-12\">  
                    
                    ";
            // line 19
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
                // line 20
                echo "                        <b id=\"introduction";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
                echo "</b> 
                        <br/>
                    ";
            }
            // line 23
            echo "                    <p id=\"text1";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
            echo " </p>
                    <br>
                    ";
            // line 25
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
                // line 26
                echo "                     <img height=\"400\" width=\"600\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
                echo "\">
                     <br>
                    ";
            }
            // line 29
            echo "                </div>
                <div class=\"form-row pad0B\">
                    <div class=\"form-checkbox-radio col-md-12\">
                        <div class=\"checkbox-radio\">
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 34
                echo "                                <input id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"radio\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                                <i> <label class=\"font-blue\" for=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label></i>
                                <br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
    </div>

";
        } elseif (($this->getAttribute(        // line 54
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "many")) {
            // line 55
            echo "    <div  id=\"View";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Question Id : ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"modal-body\">
            <div id=\"questionone";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                <u><b>Question  :</b></u>
                <br>
                <br>
                 <div class=\"col-md-12\">  
                    
                    ";
            // line 70
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
                // line 71
                echo "                        <b id=\"introduction";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
                echo "</b> 
                        <br/>
                    ";
            }
            // line 74
            echo "                    <p id=\"text1";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
            echo " </p>
                    <br>
                    ";
            // line 76
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
                // line 77
                echo "                     <img height=\"400\" width=\"600\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
                echo "\">
                     <br>
                    ";
            }
            // line 80
            echo "                </div>



                <div class=\"form-row pad0B\">

                    <div class=\"form-checkbox-radio col-md-12\">
                        <div class=\"checkbox-radio\">
                            ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 89
                echo "                                <input id=\"response";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\" type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "[]\" onclick=\"tickrep(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " );\">
                                <label  class=\"font-blue\" for=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</label>
                                <br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </div>
                    </div>



                </div>

            </div>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>
        </div> 

    </div>


";
        } elseif (($this->getAttribute(        // line 109
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "menu")) {
            // line 110
            echo "    <div  id=\"View";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Question Id : ";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"modal-body\">
            <div id=\"questionone";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                <u><b>Question  :</b></u>
                <br><br>

                <div class=\"col-md-12\">  
                    
                    ";
            // line 125
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
                // line 126
                echo "                        <b id=\"introduction";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
                echo "</b> 
                        <br/>
                    ";
            }
            // line 129
            echo "                    <p id=\"text1";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
            echo " </p>
                    <br>
                    ";
            // line 131
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
                // line 132
                echo "                     <img height=\"400\" width=\"600\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
                echo "\">
                     <br>
                    ";
            }
            // line 135
            echo "                </div>

                <br><br>

                <div class=\"form-row pad0B\">
                    <div class=\"form-input col-md-10\">
                        <select  id=\"select";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"  multiple name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "[]\" class=\"chosen-select\"   onchange=\"tickselect(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo ");\">
                            <option value=\"\"> </option>
                            ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 144
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                        </select>
                    </div>


                </div>
            </div>
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>

    </div>
";
        } elseif (($this->getAttribute(        // line 161
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "free")) {
            // line 162
            echo "
    <div  id=\"View";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Question Id : ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"modal-body\">
            ";
            // line 173
            echo "            <div id=\"questionone";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                <u><b>Question  :</b></u>

                <br>
                <br>

                 <div class=\"col-md-12\">  
                    
                    ";
            // line 181
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
                // line 182
                echo "                        <b id=\"introduction";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
                echo "</b> 
                        <br/>
                    ";
            }
            // line 185
            echo "                    <p id=\"text1";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
            echo " </p>
                    <br>
                    ";
            // line 187
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
                // line 188
                echo "                     <img height=\"400\" width=\"600\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
                echo "\">
                     <br>
                    ";
            }
            // line 191
            echo "                </div>

                <div class=\"form-row\">
                    <div class=\"form-input col-md-10\">
                        <textarea class=\"large-textarea box-shadow-blue font-blue\"   id=\"free";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\"  onblur=\"tickfree(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo ");\" ></textarea>
                    </div>

                    
                </div>


            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>



            </div>
        </div>


    ";
        } elseif (($this->getAttribute(        // line 212
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "numeric")) {
            // line 213
            echo "
        <div  id=\"View";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-header\">
                <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                    <i class=\"glyph-icon icon-remove\"></i>
                </a>

                <h3 id=\"myModalLabel\">Question Id : ";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"modal-body\">

                <div id=\"questionone";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
                    <u><b>Question  :</b></u>
                    <br>
                    <br>
                     <div class=\"col-md-12\">  
                    
                    ";
            // line 230
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array()))) {
                // line 231
                echo "                        <b id=\"introduction";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "introduction", array());
                echo "</b> 
                        <br/>
                    ";
            }
            // line 234
            echo "                    <p id=\"text1";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "text", array());
            echo " </p>
                    <br>
                    ";
            // line 236
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()))) {
                // line 237
                echo "                     <img height=\"400\" width=\"600\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "questionPicture", array()), "name", array()), "html", null, true);
                echo "\">
                     <br>
                    ";
            }
            // line 240
            echo "                </div>
                    <br><br>





                    <div class=\"form-row\">
                        <div class=\"col-md-8\">
                           
                           

                                ";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 253
                echo "                                    <div class=\"span2\">
                                            <div class=\"form-label col-md-4\">

                                                <label class=\"font-blue\" for=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "response", array()), "html", null, true);
                echo "
                                                </label>

                                            </div>

                                            <div class=\"form-input col-md-8\">

                                                <input id=\"numeric";
                // line 264
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo "\" placeholder=\"\" class=\"col-md-12\" type=\"text\" name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo "\" onchange=\"ticknumeric(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["response"], "id", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
                echo " ,";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "responses", array())), "html", null, true);
                echo " );\">

                                            </div>
                                    </div> 
                                                <br><br>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "

                         
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"center btn medium primary-bg\" data-toggle=\"button\">Close</button>



            </div>
        </div>


    ";
        }
        // line 287
        echo "  










";
        
        $__internal_0b486c5d8c434fc61cfa3e07492a56d777d7f630e98e095d2e3d56be227a04b4->leave($__internal_0b486c5d8c434fc61cfa3e07492a56d777d7f630e98e095d2e3d56be227a04b4_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:ModalViewQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 287,  568 => 270,  546 => 264,  536 => 257,  532 => 256,  527 => 253,  523 => 252,  509 => 240,  500 => 237,  498 => 236,  490 => 234,  481 => 231,  479 => 230,  470 => 224,  463 => 220,  454 => 214,  451 => 213,  449 => 212,  425 => 195,  419 => 191,  410 => 188,  408 => 187,  400 => 185,  391 => 182,  389 => 181,  377 => 173,  371 => 169,  362 => 163,  359 => 162,  357 => 161,  340 => 146,  329 => 144,  325 => 143,  316 => 141,  308 => 135,  299 => 132,  297 => 131,  289 => 129,  280 => 126,  278 => 125,  269 => 119,  263 => 116,  253 => 110,  251 => 109,  233 => 93,  222 => 90,  208 => 89,  204 => 88,  194 => 80,  185 => 77,  183 => 76,  175 => 74,  166 => 71,  164 => 70,  155 => 64,  149 => 61,  139 => 55,  137 => 54,  119 => 38,  108 => 35,  94 => 34,  90 => 33,  84 => 29,  75 => 26,  73 => 25,  65 => 23,  56 => 20,  54 => 19,  45 => 13,  39 => 10,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/*  */
/* {% if question.type == ('one') %}*/
/* */
/*     <div  id="View{{question.id}}"  class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Question Id : {{question.id}}</h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             <div id="questionone{{question.id}}">*/
/*                 <u><b>Question :</b></u>*/
/*                 <br>*/
/*                 <br>*/
/*                 <div class="col-md-12">  */
/*                     */
/*                     {% if question.introduction is not null %}*/
/*                         <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*                         <br/>*/
/*                     {% endif %}*/
/*                     <p id="text1{{question.id}}">{{ question.text|raw}} </p>*/
/*                     <br>*/
/*                     {% if question.questionPicture is not null %}*/
/*                      <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                      <br>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="form-row pad0B">*/
/*                     <div class="form-checkbox-radio col-md-12">*/
/*                         <div class="checkbox-radio">*/
/*                             {% for response in question.responses %}*/
/*                                 <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="radio" name="{{question.id}}" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                                 <i> <label class="font-blue" for="{{question.id}}">{{response.response}}</label></i>*/
/*                                 <br/>*/
/*                             {%endfor %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {%elseif question.type == ('many')%}*/
/*     <div  id="View{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Question Id : {{question.id}}</h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             <div id="questionone{{question.id}}">*/
/*                 <u><b>Question  :</b></u>*/
/*                 <br>*/
/*                 <br>*/
/*                  <div class="col-md-12">  */
/*                     */
/*                     {% if question.introduction is not null %}*/
/*                         <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*                         <br/>*/
/*                     {% endif %}*/
/*                     <p id="text1{{question.id}}">{{ question.text|raw}} </p>*/
/*                     <br>*/
/*                     {% if question.questionPicture is not null %}*/
/*                      <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                      <br>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div class="form-row pad0B">*/
/* */
/*                     <div class="form-checkbox-radio col-md-12">*/
/*                         <div class="checkbox-radio">*/
/*                             {% for response in question.responses %}*/
/*                                 <input id="response{{response.id}}{{question.id}}" value="{{response.response}}" type="checkbox" name="{{question.id}}[]" onclick="tickrep({{response.id}},{{question.id}} );">*/
/*                                 <label  class="font-blue" for="{{question.id}}">{{response.response}}</label>*/
/*                                 <br/>*/
/*                             {%endfor %}*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/*         </div> */
/* */
/*     </div>*/
/* */
/* */
/* {% elseif question.type == ('menu') %}*/
/*     <div  id="View{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Question Id : {{question.id}}</h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             <div id="questionone{{question.id}}">*/
/*                 <u><b>Question  :</b></u>*/
/*                 <br><br>*/
/* */
/*                 <div class="col-md-12">  */
/*                     */
/*                     {% if question.introduction is not null %}*/
/*                         <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*                         <br/>*/
/*                     {% endif %}*/
/*                     <p id="text1{{question.id}}">{{ question.text|raw}} </p>*/
/*                     <br>*/
/*                     {% if question.questionPicture is not null %}*/
/*                      <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                      <br>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <br><br>*/
/* */
/*                 <div class="form-row pad0B">*/
/*                     <div class="form-input col-md-10">*/
/*                         <select  id="select{{question.id}}"  multiple name="{{question.id}}[]" class="chosen-select"   onchange="tickselect({{question.id}});">*/
/*                             <option value=""> </option>*/
/*                             {%for response in question.responses%}*/
/*                                 <option value="{{response.response}}">{{response.response}}</option>*/
/*                             {%endfor %}*/
/*                         </select>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% elseif question.type == ('free') %}*/
/* */
/*     <div  id="View{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Question Id : {{question.id}}</h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             {# src/TS/AdminBundle/Resources/views/Candidate/menuTest.html.twig #}*/
/*             <div id="questionone{{question.id}}">*/
/*                 <u><b>Question  :</b></u>*/
/* */
/*                 <br>*/
/*                 <br>*/
/* */
/*                  <div class="col-md-12">  */
/*                     */
/*                     {% if question.introduction is not null %}*/
/*                         <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*                         <br/>*/
/*                     {% endif %}*/
/*                     <p id="text1{{question.id}}">{{ question.text|raw}} </p>*/
/*                     <br>*/
/*                     {% if question.questionPicture is not null %}*/
/*                      <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                      <br>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="form-row">*/
/*                     <div class="form-input col-md-10">*/
/*                         <textarea class="large-textarea box-shadow-blue font-blue"   id="free{{question.id}}" name="{{question.id}}"  onblur="tickfree({{question.id}});" ></textarea>*/
/*                     </div>*/
/* */
/*                     */
/*                 </div>*/
/* */
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     {% elseif question.type == ('numeric') %}*/
/* */
/*         <div  id="View{{question.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-header">*/
/*                 <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                     <i class="glyph-icon icon-remove"></i>*/
/*                 </a>*/
/* */
/*                 <h3 id="myModalLabel">Question Id : {{question.id}}</h3>*/
/*             </div>*/
/*             <div class="modal-body">*/
/* */
/*                 <div id="questionone{{question.id}}">*/
/*                     <u><b>Question  :</b></u>*/
/*                     <br>*/
/*                     <br>*/
/*                      <div class="col-md-12">  */
/*                     */
/*                     {% if question.introduction is not null %}*/
/*                         <b id="introduction{{question.id}}">{{ question.introduction|raw}}</b> */
/*                         <br/>*/
/*                     {% endif %}*/
/*                     <p id="text1{{question.id}}">{{ question.text|raw}} </p>*/
/*                     <br>*/
/*                     {% if question.questionPicture is not null %}*/
/*                      <img height="400" width="600" src="{{ asset(question.questionPicture.webPath) }}" alt="{{ question.questionPicture.name }}">*/
/*                      <br>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                     <br><br>*/
/* */
/* */
/* */
/* */
/* */
/*                     <div class="form-row">*/
/*                         <div class="col-md-8">*/
/*                            */
/*                            */
/* */
/*                                 {% for response in question.responses %}*/
/*                                     <div class="span2">*/
/*                                             <div class="form-label col-md-4">*/
/* */
/*                                                 <label class="font-blue" for="{{question.id}}">*/
/*                                                     {{response.response}}*/
/*                                                 </label>*/
/* */
/*                                             </div>*/
/* */
/*                                             <div class="form-input col-md-8">*/
/* */
/*                                                 <input id="numeric{{response.id}}{{question.id}}" placeholder="" class="col-md-12" type="text" name="{{question.id}}{{response.id}}" onchange="ticknumeric({{response.id}},{{question.id}} ,{{question.responses|length}} );">*/
/* */
/*                                             </div>*/
/*                                     </div> */
/*                                                 <br><br>*/
/*                                 {%endfor %}*/
/* */
/* */
/*                          */
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" data-dismiss="modal" aria-hidden="true" class="center btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     {% endif %}  */
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
