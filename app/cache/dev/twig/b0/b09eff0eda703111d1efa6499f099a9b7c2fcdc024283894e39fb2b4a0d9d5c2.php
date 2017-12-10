<?php

/* @TSAdmin/Tests/excelQuestions.html.twig */
class __TwigTemplate_9a2127e0df1757611d9a5855090ffce174d48c22e0a83b5f202a165ac8515ffb extends Twig_Template
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
        $__internal_059e6eb1306b9fdea5343b9e17b82101afc80880f0a062fb0d765da0244cc957 = $this->env->getExtension("native_profiler");
        $__internal_059e6eb1306b9fdea5343b9e17b82101afc80880f0a062fb0d765da0244cc957->enter($__internal_059e6eb1306b9fdea5343b9e17b82101afc80880f0a062fb0d765da0244cc957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/excelQuestions.html.twig"));

        // line 1
        echo "
<div  id=\"excelQuestions\" class=\"modalTest hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
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
                        <th class=\"text-center\">Name</th>
                        <th class=\"text-left\">Actions</th>
                        
                    </tr>
                    
                </thead>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["excelQuestion"]) ? $context["excelQuestion"] : $this->getContext($context, "excelQuestion")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 25
            echo "                <tr>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "name", array()), "html", null, true);
            echo "</td>
                                   <td class=\"text-center\">
                                    <div class=\"form-checkbox-radio \">
                                        <div class=\"checkbox-radio\">
                                            <input id=\"check\" class=\"right\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" name=\"ids[]\" >

                                        </div>
                                    </div>
                                </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "             </table>
             
         </div>
         <div class=\"modal-footer\">


            <div class=\"col-md-1 float-right\">

                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input type=\"submit\" value=\"Import Excel\" name=\"submitAction\" class=\"btn medium primary-bg\" />

            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\" class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



        </div>
             ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
</div>
<link rel=\"stylesheet\" type=\"text/css\" title=\"Mon design 1\" href=\"/TestTool/web/css/BasicModal/popModal.css\">        
<script type=\"text/javascript\" src=\"/TestTool/web/js/BasicModal/popModal.js\"></script>
";
        
        $__internal_059e6eb1306b9fdea5343b9e17b82101afc80880f0a062fb0d765da0244cc957->leave($__internal_059e6eb1306b9fdea5343b9e17b82101afc80880f0a062fb0d765da0244cc957_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/excelQuestions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 56,  81 => 38,  68 => 31,  61 => 27,  57 => 26,  54 => 25,  50 => 24,  26 => 3,  22 => 1,);
    }
}
/* */
/* <div  id="excelQuestions" class="modalTest hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/*          <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Import Question </h3>*/
/*         </div>*/
/*          */
/*          <div class="modal-body">*/
/*              */
/*              <table class="table text-center">*/
/*                  <thead>*/
/*                     <tr>*/
/*                         <th class="text-center">Id</th>*/
/*                         <th class="text-center">Name</th>*/
/*                         <th class="text-left">Actions</th>*/
/*                         */
/*                     </tr>*/
/*                     */
/*                 </thead>*/
/*                 {% for q in excelQuestion %}*/
/*                 <tr>*/
/*                     <td>{{ q.id }}</td>*/
/*                     <td>{{ q.name }}</td>*/
/*                                    <td class="text-center">*/
/*                                     <div class="form-checkbox-radio ">*/
/*                                         <div class="checkbox-radio">*/
/*                                             <input id="check" class="right" value="{{q.id}}" type="checkbox" name="ids[]" >*/
/* */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*              </table>*/
/*              */
/*          </div>*/
/*          <div class="modal-footer">*/
/* */
/* */
/*             <div class="col-md-1 float-right">*/
/* */
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input type="submit" value="Import Excel" name="submitAction" class="btn medium primary-bg" />*/
/* */
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%" class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*         </div>*/
/*              {{ form_rest(form) }}*/
/*     </form>*/
/* </div>*/
/* <link rel="stylesheet" type="text/css" title="Mon design 1" href="/TestTool/web/css/BasicModal/popModal.css">        */
/* <script type="text/javascript" src="/TestTool/web/js/BasicModal/popModal.js"></script>*/
/* */
