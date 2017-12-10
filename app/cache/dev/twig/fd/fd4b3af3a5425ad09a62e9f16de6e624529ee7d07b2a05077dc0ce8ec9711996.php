<?php

/* TSAdminBundle:Admin:ModalCorrectingFreeQuestions.html.twig */
class __TwigTemplate_79d3e1ffa03c544a64e8f609362a199298a38ce58dae75d1175ecb372b326b22 extends Twig_Template
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
        $__internal_78545cecb6e7e88a722ff7c4c4cd3487d7501696ac9d5c13e57c1e6ea052e03c = $this->env->getExtension("native_profiler");
        $__internal_78545cecb6e7e88a722ff7c4c4cd3487d7501696ac9d5c13e57c1e6ea052e03c->enter($__internal_78545cecb6e7e88a722ff7c4c4cd3487d7501696ac9d5c13e57c1e6ea052e03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:ModalCorrectingFreeQuestions.html.twig"));

        // line 1
        echo "
<div  id=\"CheckAnswer";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ts_admin_editAllTests");
        echo "?id=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo "\" method=\"post\">

    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo " </h3>
    
    
    <div class=\"modal-body\">


      
            
                         
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "responses", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidateResponse"]) {
            // line 21
            echo "                            ";
            if (($this->getAttribute($context["candidateResponse"], "note", array()) === "need correction")) {
                // line 22
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
                foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                    // line 23
                    echo "                                    ";
                    if (($this->getAttribute($context["candidateResponse"], "questionId", array()) === $this->getAttribute($context["question"], "id", array()))) {
                        // line 24
                        echo "                                        <div class=\"content-box border-top border-blue mrg25B\">
                                            <h3 id=\"text";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                        echo "\" class=\"content-header\">
                                                <script type = \"text/javascript\">
                                                    \$('h3#text";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                        echo "').append(";
                        echo twig_jsonencode_filter($this->getAttribute($context["question"], "text", array()));
                        echo ");
                                                </script>
                                            </h3>
                                            <div class=\"content-box-wrapper\">
                                                <h4>Correct Answer :</h4>
                                                <br>
                                                ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["question"], "responses", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["resp"]) {
                            // line 34
                            echo "                                                <p>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["resp"], "CorrectAnswer", array()), "html", null, true);
                            echo "</p>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resp'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "                                                <div class=\"divider\"></div>
                                                <h4>Candidate Answer :</h4>
                                                <br>
                                                <p>";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "response", array()), "html", null, true);
                        echo "</p>
                                                <input type=\"text\" style=\"width: 15%; margin-left: 85%;\" class=\"right border-top border-blue small\" name=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["candidateResponse"], "id", array()), "html", null, true);
                        echo "\" placeholder=\"  ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "note", array()), "html", null, true);
                        echo "\">
                                               
                                            </div>
                                        </div>
                                    ";
                    }
                    // line 45
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                            ";
            }
            // line 47
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidateResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                       
                    

        

    
    <div class=\"modal-footer\">



  <div class=\"col-md-1 float-right\">
            <input type=\"submit\" value=\"Submit\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />

        </div>
        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"btn medium primary-bg radius-all-4\" data-toggle=\"button\">Close</button>
</div>
</div>
</div>

 </form>
</div>

";
        
        $__internal_78545cecb6e7e88a722ff7c4c4cd3487d7501696ac9d5c13e57c1e6ea052e03c->leave($__internal_78545cecb6e7e88a722ff7c4c4cd3487d7501696ac9d5c13e57c1e6ea052e03c_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:ModalCorrectingFreeQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 48,  129 => 47,  126 => 46,  120 => 45,  110 => 40,  106 => 39,  101 => 36,  92 => 34,  88 => 33,  77 => 27,  72 => 25,  69 => 24,  66 => 23,  61 => 22,  58 => 21,  54 => 20,  42 => 11,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* */
/* <div  id="CheckAnswer{{test.id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* */
/* <form action="{{ path('ts_admin_editAllTests')}}?id={{test.id}}" method="post">*/
/* */
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">{{test.name}} </h3>*/
/*     */
/*     */
/*     <div class="modal-body">*/
/* */
/* */
/*       */
/*             */
/*                          */
/*                         {% for candidateResponse in test.responses %}*/
/*                             {% if candidateResponse.note is same as ('need correction') %}*/
/*                                 {% for question in questions %}*/
/*                                     {% if candidateResponse.questionId is same as (question.id) %}*/
/*                                         <div class="content-box border-top border-blue mrg25B">*/
/*                                             <h3 id="text{{question.id}}" class="content-header">*/
/*                                                 <script type = "text/javascript">*/
/*                                                     $('h3#text{{question.id}}').append({{ question.text|json_encode|raw}});*/
/*                                                 </script>*/
/*                                             </h3>*/
/*                                             <div class="content-box-wrapper">*/
/*                                                 <h4>Correct Answer :</h4>*/
/*                                                 <br>*/
/*                                                 {% for resp in question.responses %}*/
/*                                                 <p>{{resp.CorrectAnswer}}</p>*/
/*                                                 {% endfor %}*/
/*                                                 <div class="divider"></div>*/
/*                                                 <h4>Candidate Answer :</h4>*/
/*                                                 <br>*/
/*                                                 <p>{{candidateResponse.response}}</p>*/
/*                                                 <input type="text" style="width: 15%; margin-left: 85%;" class="right border-top border-blue small" name="{{candidateResponse.id}}" placeholder="  {{question.note}}">*/
/*                                                */
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                        */
/*                     */
/* */
/*         */
/* */
/*     */
/*     <div class="modal-footer">*/
/* */
/* */
/* */
/*   <div class="col-md-1 float-right">*/
/*             <input type="submit" value="Submit" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/* */
/*         </div>*/
/*         <button type="button" data-dismiss="modal" aria-hidden="true" class="btn medium primary-bg radius-all-4" data-toggle="button">Close</button>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/*  </form>*/
/* </div>*/
/* */
/* */
