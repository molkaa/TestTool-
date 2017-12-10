<?php

/* @TSAdmin/Candidate/CandidateTest.html.twig */
class __TwigTemplate_777aa98421b7bb84f385a454223964eb359607abc58e49ab6220659fe86c6b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle:Candidate:candidatTests.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_575a36f92e698e04bff4e70513ab06be4659060a5f1fafbfc669f017a8a43b55 = $this->env->getExtension("native_profiler");
        $__internal_575a36f92e698e04bff4e70513ab06be4659060a5f1fafbfc669f017a8a43b55->enter($__internal_575a36f92e698e04bff4e70513ab06be4659060a5f1fafbfc669f017a8a43b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/CandidateTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_575a36f92e698e04bff4e70513ab06be4659060a5f1fafbfc669f017a8a43b55->leave($__internal_575a36f92e698e04bff4e70513ab06be4659060a5f1fafbfc669f017a8a43b55_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7acc186a713643a9c4f068e98bb1720d74041487cb1d331147cf5aea3641b218 = $this->env->getExtension("native_profiler");
        $__internal_7acc186a713643a9c4f068e98bb1720d74041487cb1d331147cf5aea3641b218->enter($__internal_7acc186a713643a9c4f068e98bb1720d74041487cb1d331147cf5aea3641b218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 7
        echo "<script src=\"/TestTool/web/js/jquery.hotkeys.js\"></script>   
    <script type=\"text/javascript\" src=\"/TestTool/web/js/TimeCircles.js\" ></script>
    <script>var tab=new Array();</script>
    
    
    <link  href=\"/TestTool/web/css/TimeCircles.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"/TestTool/web/css/zibra/zebra_dialog.css\" type=\"text/css\">";
        // line 17
        echo "      
      ";
        // line 18
        $context["tempCookies"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => (("tempQuiz" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "username", array())) . $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))), "method");
        // line 19
        echo "      ";
        if (((isset($context["tempCookies"]) ? $context["tempCookies"] : $this->getContext($context, "tempCookies")) == 0)) {
            // line 20
            echo "            ";
            $context["tempTest"] = ($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "time", array()) * 60);
            // line 21
            echo "      ";
        } elseif (((isset($context["tempCookies"]) ? $context["tempCookies"] : $this->getContext($context, "tempCookies")) != 0)) {
            // line 22
            echo "            ";
            $context["tempTest"] = (isset($context["tempCookies"]) ? $context["tempCookies"] : $this->getContext($context, "tempCookies"));
            // line 23
            echo "      ";
        }
        // line 26
        echo "<div id=\"CountDownTimer\" data-timer=\"";
        echo twig_escape_filter($this->env, (isset($context["tempTest"]) ? $context["tempTest"] : $this->getContext($context, "tempTest")), "html", null, true);
        echo "\" style=\"width: 250px; height: 65px;\" ></div> 
    
    
    <div class=\"infobox info-bg\" style=\"margin-top: 200px\">
        Questions : <br><br>
      ";
        // line 31
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
            echo " 
          ";
            // line 32
            if (($this->getAttribute($context["loop"], "index", array()) < 10)) {
                // line 33
                echo "              <a href=\"#questionone";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\" >   <span id=\"badge";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\"  class=\"badge bg-red tooltip-button\">Q0";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span></a>
           ";
            } else {
                // line 35
                echo "               <a href=\"#questionone";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\" >   <span id=\"badge";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\"  class=\"badge bg-red tooltip-button\">Q";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</span></a>
                ";
            }
            // line 37
            echo "          ";
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
        // line 38
        echo "
    <br><br>
    
    <span class=\"badge bg-red tooltip-button\" >Q*</span>  <label class=\"font-gray-dark\" for=\"\">Question unanswered</label>
    <span class=\"badge bg-yellow tooltip-button\" >Q*</span>  <label class=\"font-gray-dark\" for=\"\">Question to review</label>
    <span class=\"badge primary-bg tooltip-button\" >Q*</span>  <label class=\"font-gray-dark\" for=\"\">Question answered</label>
    
    </div>
";
        
        $__internal_7acc186a713643a9c4f068e98bb1720d74041487cb1d331147cf5aea3641b218->leave($__internal_7acc186a713643a9c4f068e98bb1720d74041487cb1d331147cf5aea3641b218_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f68582c05705b43f2b1786a617ffd128dc953abb29e87e399ec75b11ee2caf0 = $this->env->getExtension("native_profiler");
        $__internal_4f68582c05705b43f2b1786a617ffd128dc953abb29e87e399ec75b11ee2caf0->enter($__internal_4f68582c05705b43f2b1786a617ffd128dc953abb29e87e399ec75b11ee2caf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "    

 ";
        // line 54
        echo "<div id=\"blockTest\" class=\"row \">
            
        <div class=\"col-md-12\" style=\"margin-top:0px\" >
            <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
                <h3 class=\"content-header\">
                    <span> <b> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo " </b></span>
                </h3>
                <div class=\"content-box-wrapper\">
                    <form class=\"col-md-10 center-margin\" method=\"post\" id='myform' >
                       
                       <input type=\"text\" value=\"0\" id=\"tempquiz\" name=\"tempquiz\" hidden/>
                        ";
        // line 65
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
            // line 66
            echo "                            
                            ";
            // line 67
            if (($this->getAttribute($context["question"], "type", array()) == "one")) {
                // line 68
                echo "                               
                                ";
                // line 69
                $this->loadTemplate("TSAdminBundle:Candidate:oneTest.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 69)->display($context);
                // line 70
                echo "                                
                            ";
            } elseif (($this->getAttribute(            // line 71
$context["question"], "type", array()) == "many")) {
                // line 72
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:manyTest.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 72)->display($context);
                // line 73
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "menu")) {
                // line 74
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:menuTest.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 74)->display($context);
                // line 75
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "numeric")) {
                // line 76
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:numericTest.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 76)->display($context);
                // line 77
                echo "                            ";
            } elseif (($this->getAttribute($context["question"], "type", array()) == "free")) {
                // line 78
                echo "                                ";
                $this->loadTemplate("TSAdminBundle:Candidate:freeTest.html.twig", "@TSAdmin/Candidate/CandidateTest.html.twig", 78)->display($context);
                // line 79
                echo "                            ";
            }
            // line 80
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
        // line 82
        echo "                      
                         
                        
                                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                                <div class=\"col-md-4 col-md-offset-4\">
                                     <input type=\"button\" class=\"btn medium primary-bg radius-all-4\" onclick=\"javascript:void(0)\" value=\"validate\" id=\"example31\" /> 
                                </div>
                                
                                
                    </form>
                           
                </div>
            </div>
        </div>
    
         
    </div>
              ";
        // line 100
        echo " \t
       <script>
            \$(\"#CountDownTimer\").TimeCircles({ 
                time: { Days: { show: false }, Hours: { show: true, color: \"#0A4579\" } ,Minutes: {show: true, text: \"Minutes\",color: \"#0256D5\" } ,Seconds: {show: true,text: \"Seconds\",color: \"#0E0102\"}
},
                count_past_zero: false,
                text_size: 0.1,
                circle_bg_color: \"#C0C3C6\"
               
               
                
            });
            
           
            \$(\"#CountDownTimer\").TimeCircles().addListener(function(unit,value,total){
                  
                \$.cookie('tempQuiz'+nomTest, total);
              
                
              /*  if(total=== 10 ||total=== 9 ||total=== 8 ||total=== 7 ||total=== 6 ||total=== 5 ||total=== 4 ||total=== 3 || total=== 2 || total=== 1 ){
                    \$(\"#CountDownTimer\").TimeCircles({
                       
                       \"circle_bg_color\": \"#cd2323\" 
                       
                   });
                   
                 
               } */
               
               //else
              
                   if (total === 0 )
               {
                
                 document.getElementById('tempquiz').value = '1';
                
                 document.forms[\"myform\"].submit();
                 
                  
                 
               }
               
               
               
               
               
              
                   
        });
                 
            
 
    
        </script> 
       <script type=\"text/javascript\" src=\"/TestTool/web/js/zibra/zebra_dialog.js\"></script>
        <script type=\"text/javascript\" src=\"/TestTool/web/js/zibra/main.js\"></script>
         <script type=\"text/javascript\" src=\"/TestTool/web/js/disablekey.js\"></script>
      
        
       
       <script>
          var moins =0
          var plus = 0;
           function tickMoins()
             {
               moins = moins + 1;
             }
           function tickPlus()
             {
               plus = plus + 1;
             } 
           function tickResult()
           {
              var res = plus - moins;
              return res;
           }
           function affichertab(tab)
           {
               alert(''+tab);
           }
           
           
           function cleanArray(tab) {
            var tab2=tab;
            var i, j, len = tab2.length, out = [], obj = {};
            for (i = 0; i < len; i++) {
                 obj[tab2[i]] = 0;
                }
            for (j in obj) {
                     out.push(j);
                }
            return out;
        }
        
        function verifresponse()
           {
              ";
        // line 196
        if (($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "Customized", array()) === "no")) {
            echo " 
               var nbr_questions =  ";
            // line 197
            echo twig_jsonencode_filter(twig_length_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "questions", array())));
            echo " 
              ";
        } else {
            // line 198
            echo " 
                 var nbr_questions =";
            // line 199
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "TestStatestics", array()), "numberQuestions", array()));
            echo " 
              ";
        }
        // line 200
        echo " 
               var nbr_question_answered = cleanArray(tab);
              
               var nbr_answered=0;
               if(nbr_question_answered.length == nbr_questions )
               {
                   nbr_answered=0;
                   
               }
               else
               {
                    nbr_answered=1;
               }
               return nbr_answered;
                  
           }
           
        

        
             var nomTest=";
        // line 220
        echo twig_jsonencode_filter($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "username", array()));
        echo "+";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()));
        echo ";
             
             
            
       
</script>
         
";
        
        $__internal_4f68582c05705b43f2b1786a617ffd128dc953abb29e87e399ec75b11ee2caf0->leave($__internal_4f68582c05705b43f2b1786a617ffd128dc953abb29e87e399ec75b11ee2caf0_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/CandidateTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 220,  380 => 200,  375 => 199,  372 => 198,  367 => 197,  363 => 196,  265 => 100,  246 => 82,  231 => 80,  228 => 79,  225 => 78,  222 => 77,  219 => 76,  216 => 75,  213 => 74,  210 => 73,  207 => 72,  205 => 71,  202 => 70,  200 => 69,  197 => 68,  195 => 67,  192 => 66,  175 => 65,  166 => 59,  159 => 54,  155 => 51,  149 => 50,  134 => 38,  120 => 37,  110 => 35,  100 => 33,  98 => 32,  79 => 31,  70 => 26,  67 => 23,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 17,  41 => 7,  35 => 4,  11 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/CandidateTest.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/* */
/* {% block sidebar %}*/
/*     {#--300,95---#}*/
/*    */
/*     <script src="/TestTool/web/js/jquery.hotkeys.js"></script>   */
/*     <script type="text/javascript" src="/TestTool/web/js/TimeCircles.js" ></script>*/
/*     <script>var tab=new Array();</script>*/
/*     */
/*     */
/*     <link  href="/TestTool/web/css/TimeCircles.css" rel="stylesheet" type="text/css" />*/
/*     <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">*/
/*     <link rel="stylesheet" href="/TestTool/web/css/zibra/zebra_dialog.css" type="text/css">*/
/*     */
/*       {#----save the time of the countdown in the Cookies---------- #}*/
/*       */
/*       {%set  tempCookies = app.request.cookies.get('tempQuiz'~candidat.username~test.id) %}*/
/*       {% if tempCookies == 0 %}*/
/*             {%set  tempTest = test.time * 60 %}*/
/*       {% elseif tempCookies != 0 %}*/
/*             {%set  tempTest = tempCookies %}*/
/*       {% endif %}*/
/*       {#--------------------------------------------------------------#}*/
/*       */
/*     <div id="CountDownTimer" data-timer="{{tempTest}}" style="width: 250px; height: 65px;" ></div> */
/*     */
/*     */
/*     <div class="infobox info-bg" style="margin-top: 200px">*/
/*         Questions : <br><br>*/
/*       {% for question in questions  %} */
/*           {% if loop.index <10 %}*/
/*               <a href="#questionone{{question.id}}" >   <span id="badge{{question.id}}"  class="badge bg-red tooltip-button">Q0{{loop.index}}</span></a>*/
/*            {% else %}*/
/*                <a href="#questionone{{question.id}}" >   <span id="badge{{question.id}}"  class="badge bg-red tooltip-button">Q{{loop.index}}</span></a>*/
/*                 {%endif%}*/
/*           {% endfor %}*/
/* */
/*     <br><br>*/
/*     */
/*     <span class="badge bg-red tooltip-button" >Q*</span>  <label class="font-gray-dark" for="">Question unanswered</label>*/
/*     <span class="badge bg-yellow tooltip-button" >Q*</span>  <label class="font-gray-dark" for="">Question to review</label>*/
/*     <span class="badge primary-bg tooltip-button" >Q*</span>  <label class="font-gray-dark" for="">Question answered</label>*/
/*     */
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block content %}*/
/*     */
/* */
/*   {#---------------------------------------------------------#}*/
/* <div id="blockTest" class="row ">*/
/*             */
/*         <div class="col-md-12" style="margin-top:0px" >*/
/*             <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*                 <h3 class="content-header">*/
/*                     <span> <b> {{test.name}} </b></span>*/
/*                 </h3>*/
/*                 <div class="content-box-wrapper">*/
/*                     <form class="col-md-10 center-margin" method="post" id='myform' >*/
/*                        */
/*                        <input type="text" value="0" id="tempquiz" name="tempquiz" hidden/>*/
/*                         {% for question in questions %}*/
/*                             */
/*                             {% if question.type == ('one') %}*/
/*                                */
/*                                 {% include "TSAdminBundle:Candidate:oneTest.html.twig" %}*/
/*                                 */
/*                             {% elseif question.type == ('many') %}*/
/*                                 {% include "TSAdminBundle:Candidate:manyTest.html.twig" %}*/
/*                             {% elseif question.type == ('menu') %}*/
/*                                 {% include "TSAdminBundle:Candidate:menuTest.html.twig" %}*/
/*                             {% elseif question.type == ('numeric') %}*/
/*                                 {% include "TSAdminBundle:Candidate:numericTest.html.twig" %}*/
/*                             {% elseif question.type == ('free') %}*/
/*                                 {% include "TSAdminBundle:Candidate:freeTest.html.twig" %}*/
/*                             {% endif %}*/
/*                         */
/*                             {% endfor %}*/
/*                       */
/*                          */
/*                         */
/*                                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                                 <div class="col-md-4 col-md-offset-4">*/
/*                                      <input type="button" class="btn medium primary-bg radius-all-4" onclick="javascript:void(0)" value="validate" id="example31" /> */
/*                                 </div>*/
/*                                 */
/*                                 */
/*                     </form>*/
/*                            */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/*          */
/*     </div>*/
/*               {# script Count Down Timer #}*/
/*  	*/
/*        <script>*/
/*             $("#CountDownTimer").TimeCircles({ */
/*                 time: { Days: { show: false }, Hours: { show: true, color: "#0A4579" } ,Minutes: {show: true, text: "Minutes",color: "#0256D5" } ,Seconds: {show: true,text: "Seconds",color: "#0E0102"}*/
/* },*/
/*                 count_past_zero: false,*/
/*                 text_size: 0.1,*/
/*                 circle_bg_color: "#C0C3C6"*/
/*                */
/*                */
/*                 */
/*             });*/
/*             */
/*            */
/*             $("#CountDownTimer").TimeCircles().addListener(function(unit,value,total){*/
/*                   */
/*                 $.cookie('tempQuiz'+nomTest, total);*/
/*               */
/*                 */
/*               /*  if(total=== 10 ||total=== 9 ||total=== 8 ||total=== 7 ||total=== 6 ||total=== 5 ||total=== 4 ||total=== 3 || total=== 2 || total=== 1 ){*/
/*                     $("#CountDownTimer").TimeCircles({*/
/*                        */
/*                        "circle_bg_color": "#cd2323" */
/*                        */
/*                    });*/
/*                    */
/*                  */
/*                } *//* */
/*                */
/*                //else*/
/*               */
/*                    if (total === 0 )*/
/*                {*/
/*                 */
/*                  document.getElementById('tempquiz').value = '1';*/
/*                 */
/*                  document.forms["myform"].submit();*/
/*                  */
/*                   */
/*                  */
/*                }*/
/*                */
/*                */
/*                */
/*                */
/*                */
/*               */
/*                    */
/*         });*/
/*                  */
/*             */
/*  */
/*     */
/*         </script> */
/*        <script type="text/javascript" src="/TestTool/web/js/zibra/zebra_dialog.js"></script>*/
/*         <script type="text/javascript" src="/TestTool/web/js/zibra/main.js"></script>*/
/*          <script type="text/javascript" src="/TestTool/web/js/disablekey.js"></script>*/
/*       */
/*         */
/*        */
/*        <script>*/
/*           var moins =0*/
/*           var plus = 0;*/
/*            function tickMoins()*/
/*              {*/
/*                moins = moins + 1;*/
/*              }*/
/*            function tickPlus()*/
/*              {*/
/*                plus = plus + 1;*/
/*              } */
/*            function tickResult()*/
/*            {*/
/*               var res = plus - moins;*/
/*               return res;*/
/*            }*/
/*            function affichertab(tab)*/
/*            {*/
/*                alert(''+tab);*/
/*            }*/
/*            */
/*            */
/*            function cleanArray(tab) {*/
/*             var tab2=tab;*/
/*             var i, j, len = tab2.length, out = [], obj = {};*/
/*             for (i = 0; i < len; i++) {*/
/*                  obj[tab2[i]] = 0;*/
/*                 }*/
/*             for (j in obj) {*/
/*                      out.push(j);*/
/*                 }*/
/*             return out;*/
/*         }*/
/*         */
/*         function verifresponse()*/
/*            {*/
/*               {%if(test.Customized) is sameas("no")%} */
/*                var nbr_questions =  {{test.questions|length|json_encode()|raw }} */
/*               {%else%} */
/*                  var nbr_questions ={{test.TestStatestics.numberQuestions|json_encode()|raw}} */
/*               {%endif%} */
/*                var nbr_question_answered = cleanArray(tab);*/
/*               */
/*                var nbr_answered=0;*/
/*                if(nbr_question_answered.length == nbr_questions )*/
/*                {*/
/*                    nbr_answered=0;*/
/*                    */
/*                }*/
/*                else*/
/*                {*/
/*                     nbr_answered=1;*/
/*                }*/
/*                return nbr_answered;*/
/*                   */
/*            }*/
/*            */
/*         */
/* */
/*         */
/*              var nomTest={{ candidat.username|json_encode()|raw  }}+{{ test.id|json_encode()|raw }};*/
/*              */
/*              */
/*             */
/*        */
/* </script>*/
/*          */
/* {% endblock %}*/
/* */
