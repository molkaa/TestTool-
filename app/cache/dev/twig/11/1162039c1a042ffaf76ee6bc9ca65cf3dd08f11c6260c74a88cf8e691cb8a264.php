<?php

/* TSAdminBundle:Admin:testDetails.html.twig */
class __TwigTemplate_8c5b0ad461d7298e8244e932e31ccd7446c4c5c2b836c99fee56a74238c86cc6 extends Twig_Template
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
        $__internal_d5f7083721092fd902f54bb9c27d2b1e62c9f4ac6ab1358009b01e20a37fa364 = $this->env->getExtension("native_profiler");
        $__internal_d5f7083721092fd902f54bb9c27d2b1e62c9f4ac6ab1358009b01e20a37fa364->enter($__internal_d5f7083721092fd902f54bb9c27d2b1e62c9f4ac6ab1358009b01e20a37fa364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:testDetails.html.twig"));

        // line 1
        echo "

<table class=\"table table-striped\" id=\"table2excel\">
    <thead class=\"text-center\">
        <tr class=\"noExl\">
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
         <tr class=\"hidden\">
            <th></th>
            <th>Name</th>

            <th>Tests Name</th>
            <th>Tests Date</th>
            <th>Eliminatory Mark</th>
            <th>Mark</th>
            <th>Remarks</th>
           
        </tr>   
    </thead>
    <tbody>
        ";
        // line 30
        if (twig_test_empty((isset($context["listeCandidats"]) ? $context["listeCandidats"] : $this->getContext($context, "listeCandidats")))) {
            // line 31
            echo "            <tr><td>No Candidates</td></tr>
        ";
        } else {
            // line 33
            echo "            
        ";
            // line 34
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
                // line 35
                echo "            ";
                $context["number"] = "1";
                // line 36
                echo "            ";
                $context["thisTest"] = "";
                echo "   
            ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidat"], "CandidatTests", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                    echo " 
                ";
                    // line 38
                    if (($this->getAttribute($context["test"], "state", array()) === "yes")) {
                        // line 39
                        echo "                    ";
                        $context["number"] = ((isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")) + 1);
                        // line 40
                        echo "                ";
                    }
                    echo " 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "            <tr >
                <td id=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "id", array()), "html", null, true);
                echo "#\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                <td id=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "id", array()), "html", null, true);
                echo "##\" class=\"font-bold text-left\" rowspan=\"";
                echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "username", array()), "html", null, true);
                echo "</td>

                <td> </td><td> </td><td> </td><td> </td>
            </tr>
            ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["candidat"], "CandidatTests", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
                    echo "  
                ";
                    // line 49
                    if (($this->getAttribute($context["test"], "state", array()) === "yes")) {
                        // line 50
                        echo "                    ";
                        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Admin:selectFreeTest", array("id" => $this->getAttribute($context["test"], "id", array()))));
                        echo "
                ";
                    }
                    // line 52
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
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
            // line 54
            echo "        ";
        }
        // line 55
        echo "    </tbody>
</table>
     <h5  class=\"text-right\"> <a  style=\"text-decoration: underline\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ts_admin_allTests");
        echo "\">View all Tests Results </a></h5> 
   ";
        // line 111
        echo "
                   
                    ";
        
        $__internal_d5f7083721092fd902f54bb9c27d2b1e62c9f4ac6ab1358009b01e20a37fa364->leave($__internal_d5f7083721092fd902f54bb9c27d2b1e62c9f4ac6ab1358009b01e20a37fa364_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:testDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 111,  170 => 57,  166 => 55,  163 => 54,  149 => 53,  143 => 52,  137 => 50,  135 => 49,  129 => 48,  118 => 44,  110 => 43,  107 => 42,  98 => 40,  95 => 39,  93 => 38,  87 => 37,  82 => 36,  79 => 35,  62 => 34,  59 => 33,  55 => 31,  53 => 30,  22 => 1,);
    }
}
/* */
/* */
/* <table class="table table-striped" id="table2excel">*/
/*     <thead class="text-center">*/
/*         <tr class="noExl">*/
/*             <th></th>*/
/*             <th>Name</th>*/
/* */
/*             <th>Tests Name</th>*/
/*             <th>Tests Date</th>*/
/*             <th>Eliminatory Mark</th>*/
/*             <th>Mark</th>*/
/*             <th>Remarks</th>*/
/*             <th>View Test</th>*/
/*             <th>Edit</th>*/
/*         </tr> */
/*          <tr class="hidden">*/
/*             <th></th>*/
/*             <th>Name</th>*/
/* */
/*             <th>Tests Name</th>*/
/*             <th>Tests Date</th>*/
/*             <th>Eliminatory Mark</th>*/
/*             <th>Mark</th>*/
/*             <th>Remarks</th>*/
/*            */
/*         </tr>   */
/*     </thead>*/
/*     <tbody>*/
/*         {% if listeCandidats is empty %}*/
/*             <tr><td>No Candidates</td></tr>*/
/*         {%else%}*/
/*             */
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
/*         {% endif %}*/
/*     </tbody>*/
/* </table>*/
/*      <h5  class="text-right"> <a  style="text-decoration: underline" href="{{ path('ts_admin_allTests') }}">View all Tests Results </a></h5> */
/*    {# <a href="#" class="btn medium primary-bg float-right" id="button" onclick="searchAll();">*/
/*         <span class="glyph-icon icon-separator">*/
/*             <i class="glyph-icon icon-download"></i>*/
/*         </span>*/
/*         <span class="button-content">*/
/*             Export */
/*         </span>*/
/*     </a>*/
/* */
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
/*                     */
/*                 },*/
/*                 dataType: 'HTML', // it's no JSON response!*/
/* */
/*                 success: function (data) {*/
/*                    */
/*                     $('#AllCandidateByTeam').html(data);*/
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
/*    <div id="AllCandidateByTeam" style="display: none"></div>   #}*/
/* */
/*                    */
/*                     */
