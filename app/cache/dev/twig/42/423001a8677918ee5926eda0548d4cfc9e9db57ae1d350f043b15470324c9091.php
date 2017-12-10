<?php

/* TSAdminBundle:Admin:ResultTests.html.twig */
class __TwigTemplate_7e146242e9113c8331b1e7079d844887d6f0b2997a3fff23c5bbddba04348481 extends Twig_Template
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
        $__internal_54bd360a53ba360021b357df4d48004480de46e327d25a308373880f7d85f0b8 = $this->env->getExtension("native_profiler");
        $__internal_54bd360a53ba360021b357df4d48004480de46e327d25a308373880f7d85f0b8->enter($__internal_54bd360a53ba360021b357df4d48004480de46e327d25a308373880f7d85f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Admin:ResultTests.html.twig"));

        // line 1
        echo "

<table class=\"table table-striped\" id=\"table3excel\">
    <thead class=\"text-center\">
        <tr>
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
                    echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TSAdminBundle:Admin:selectResultFreeTest", array("id" => $this->getAttribute($context["test"], "id", array()))));
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
        
        $__internal_54bd360a53ba360021b357df4d48004480de46e327d25a308373880f7d85f0b8->leave($__internal_54bd360a53ba360021b357df4d48004480de46e327d25a308373880f7d85f0b8_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Admin:ResultTests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 39,  129 => 38,  123 => 37,  117 => 35,  115 => 34,  109 => 33,  98 => 29,  90 => 28,  87 => 27,  78 => 25,  75 => 24,  73 => 23,  67 => 22,  62 => 21,  59 => 20,  42 => 19,  22 => 1,);
    }
}
/* */
/* */
/* <table class="table table-striped" id="table3excel">*/
/*     <thead class="text-center">*/
/*         <tr>*/
/*             <th></th>*/
/*             <th>Name</th>*/
/* */
/*             <th>Tests Name</th>*/
/*             <th>Tests Date</th>*/
/*             <th>Eliminatory Mark</th>*/
/*             <th>Mark</th>*/
/*             <th>Remarks</th>*/
/*             */
/*         </tr> */
/*        */
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
/*                     {{ render(controller('TSAdminBundle:Admin:selectResultFreeTest', {'id':test.id} )) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/*    */
