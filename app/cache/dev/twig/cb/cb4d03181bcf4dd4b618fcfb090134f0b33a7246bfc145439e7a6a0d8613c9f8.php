<?php

/* @TSAdmin/Admin/testsDetails.html.twig */
class __TwigTemplate_5490e93cea9732b830cc1c38a6f0446ecea20bef2a450ea55f6284a6ca3df02c extends Twig_Template
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
        $__internal_7b848a647fdaa39981cce5fd7d0a5953f868ab65f49153b2710e6678e27bbece = $this->env->getExtension("native_profiler");
        $__internal_7b848a647fdaa39981cce5fd7d0a5953f868ab65f49153b2710e6678e27bbece->enter($__internal_7b848a647fdaa39981cce5fd7d0a5953f868ab65f49153b2710e6678e27bbece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Admin/testsDetails.html.twig"));

        // line 1
        echo "

<table class=\"table table-striped\" id=\"table2excel\">
    <thead class=\"text-center\">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Tests Name</th>
            <th>Tests Date</th>
            <th>Eliminatory Mark</th>
            <th>Mark</th>
            <th>Remarks</th>
            <th>View Test</th>
            <th>Edit</th>
        </tr> 
        
    </thead>
    <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeCandidats"]) ? $context["listeCandidats"] : $this->getContext($context, "listeCandidats")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 20
            echo "            ";
            $context["number"] = "1";
            // line 21
            echo "            ";
            $context["thisTest"] = "";
            echo "   
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidat"], "CandidatTests", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                echo " 
                ";
                // line 23
                if (($this->getAttribute($context["test"], "state", array()) === "yes")) {
                    // line 24
                    echo "                    ";
                    $context["number"] = ((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")) + 1);
                    // line 25
                    echo "                ";
                }
                echo " 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            <tr >
                <td id=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "id", array()), "html", null, true);
            echo "#\" rowspan=\"";
            echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "id", array()), "html", null, true);
            echo "##\" class=\"font-bold text-left\" rowspan=\"";
            echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "username", array()), "html", null, true);
            echo "</td>

                <td> </td><td> </td><td> </td><td> </td>
            </tr>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidat"], "CandidatTests", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                echo "  
                ";
                // line 34
                if (($this->getAttribute($context["test"], "state", array()) === "yes")) {
                    // line 35
                    echo "                    ";
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Admin:selectFreeTest", array("id" => $this->getAttribute($context["test"], "id", array()))));
                    echo "
                ";
                }
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>
    
  ";
        // line 61
        echo "  
  
   <a href=\"#\" class=\"btn medium primary-bg float-right\" id=\"button\" onclick=\"searchAll();\">
        <span class=\"glyph-icon icon-separator\">
            <i class=\"glyph-icon icon-download\"></i>
        </span>
        <span class=\"button-content\">
            Export
        </span>
    </a>
   <img id=\"loader\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/ajax-loader2.gif"), "html", null, true);
        echo "\" style=\"display: none;margin-left: 89%\" />
    <script>



        function searchAll() {

          

            \$.ajax({
                type: 'POST',
                
               url: '";
        // line 83
        echo $this->env->getExtension('routing')->getPath("ts_admin_allResultTests");
        echo "',
                beforeSend: function () {

                     document.getElementById(\"loader\").style.display = \"block\";
                },
                dataType: 'HTML', // it's no JSON response!

                success: function (data) {
                   
                    \$('#AllCandidateByTeam').html(data);
                     document.getElementById(\"loader\").style.display = \"none\";
                    \$(\"#table3excel\").table2excel({
                        });

                   
                },
                //Enfin nous lui disons de remplir notre formulaire avec le resultat  


                error: function ()
                {
                    alert('Error ajax');
                    
                }

            }

            )
        }
        ;

   
   </script>
   <div id=\"AllCandidateByTeam\" style=\"display: none\"></div>   ";
        
        $__internal_7b848a647fdaa39981cce5fd7d0a5953f868ab65f49153b2710e6678e27bbece->leave($__internal_7b848a647fdaa39981cce5fd7d0a5953f868ab65f49153b2710e6678e27bbece_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Admin/testsDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 83,  160 => 71,  148 => 61,  143 => 39,  129 => 38,  123 => 37,  117 => 35,  115 => 34,  109 => 33,  98 => 29,  90 => 28,  87 => 27,  78 => 25,  75 => 24,  73 => 23,  67 => 22,  62 => 21,  59 => 20,  42 => 19,  22 => 1,);
    }
}
/* */
/* */
/* <table class="table table-striped" id="table2excel">*/
/*     <thead class="text-center">*/
/*         <tr>*/
/*             <th></th>*/
/*             <th>Name</th>*/
/*             <th>Tests Name</th>*/
/*             <th>Tests Date</th>*/
/*             <th>Eliminatory Mark</th>*/
/*             <th>Mark</th>*/
/*             <th>Remarks</th>*/
/*             <th>View Test</th>*/
/*             <th>Edit</th>*/
/*         </tr> */
/*         */
/*     </thead>*/
/*     <tbody>*/
/*         {% for candidat in listeCandidats %}*/
/*             {% set number="1" %}*/
/*             {% set thisTest="" %}   */
/*             {% for test in candidat.CandidatTests %} */
/*                 {% if test.state is same as ("yes") %}*/
/*                     {% set number = number + 1 %}*/
/*                 {% endif %} */
/*             {% endfor %}*/
/*             <tr >*/
/*                 <td id="{{candidat.id}}#" rowspan="{{number}}">{{loop.index}}</td>*/
/*                 <td id="{{candidat.id}}##" class="font-bold text-left" rowspan="{{number}}">{{candidat.username}}</td>*/
/* */
/*                 <td> </td><td> </td><td> </td><td> </td>*/
/*             </tr>*/
/*             {% for test in candidat.CandidatTests %}  */
/*                 {% if test.state is same as ("yes") %}*/
/*                     {{ render(controller('TSAdminBundle:Admin:selectFreeTest', {'id':test.id} )) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*     */
/*   {#  <a href="" class="btn medium primary-bg float-right" id="button">*/
/*         <span class="glyph-icon icon-separator">*/
/*             <i class="glyph-icon icon-download"></i>*/
/*         </span>*/
/*         <span class="button-content">*/
/*             Export*/
/*         </span>*/
/*     </a>*/
/* <script>*/
/*    */
/*     $("#button").click(function () {*/
/* */
/* */
/*         $("#table3excel").table2excel({*/
/*         });*/
/* */
/*     });*/
/*    */
/* </script>#}*/
/*   */
/*   */
/*    <a href="#" class="btn medium primary-bg float-right" id="button" onclick="searchAll();">*/
/*         <span class="glyph-icon icon-separator">*/
/*             <i class="glyph-icon icon-download"></i>*/
/*         </span>*/
/*         <span class="button-content">*/
/*             Export*/
/*         </span>*/
/*     </a>*/
/*    <img id="loader" src="{{ asset('assets/images/ajax-loader2.gif')}}" style="display: none;margin-left: 89%" />*/
/*     <script>*/
/* */
/* */
/* */
/*         function searchAll() {*/
/* */
/*           */
/* */
/*             $.ajax({*/
/*                 type: 'POST',*/
/*                 */
/*                url: '{{path('ts_admin_allResultTests')}}',*/
/*                 beforeSend: function () {*/
/* */
/*                      document.getElementById("loader").style.display = "block";*/
/*                 },*/
/*                 dataType: 'HTML', // it's no JSON response!*/
/* */
/*                 success: function (data) {*/
/*                    */
/*                     $('#AllCandidateByTeam').html(data);*/
/*                      document.getElementById("loader").style.display = "none";*/
/*                     $("#table3excel").table2excel({*/
/*                         });*/
/* */
/*                    */
/*                 },*/
/*                 //Enfin nous lui disons de remplir notre formulaire avec le resultat  */
/* */
/* */
/*                 error: function ()*/
/*                 {*/
/*                     alert('Error ajax');*/
/*                     */
/*                 }*/
/* */
/*             }*/
/* */
/*             )*/
/*         }*/
/*         ;*/
/* */
/*    */
/*    </script>*/
/*    <div id="AllCandidateByTeam" style="display: none"></div>   */
