<?php

/* TSAdminBundle:Tests:duplicateTest.html.twig */
class __TwigTemplate_5db2749a38441f7af066eec39a2bc0a93794278fe1fd71f3c4e46bcc8334d21e extends Twig_Template
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
        $__internal_dd81e2dfea7086461a9bf380fd6334d977eafdfcc407efb48055b13738b07e80 = $this->env->getExtension("native_profiler");
        $__internal_dd81e2dfea7086461a9bf380fd6334d977eafdfcc407efb48055b13738b07e80->enter($__internal_dd81e2dfea7086461a9bf380fd6334d977eafdfcc407efb48055b13738b07e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:duplicateTest.html.twig"));

        // line 2
        echo "<form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_duplicateTest");
        echo "?idtest=";
        echo twig_escape_filter($this->env, (isset($context["idtest"]) ? $context["idtest"] : $this->getContext($context, "idtest")), "html", null, true);
        echo "\"  method=\"post\">
    <div class=\"modal-header\">
        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
            <i class=\"glyph-icon icon-remove\"></i>
        </a>

        <h3 id=\"myModalLabel\">Duplicate Test  : </h3>
    </div>
    <div class=\"modal-body bg-yellow\">



        


              

                <div class=\"infobox warning-bg\">
                    <div class=\"bg-yellow large btn info-icon\">
                        <i class=\"glyph-icon icon-warning\"></i>
                    </div>
                     <h4 class=\"infobox-title\">warning!</h4>
                    <p>this test is affected to some candidates, if you want to <b>delete or modify <b>this test you can <b>duplicate</b> it. </p>
                    <br>
                </div>

           
          








    </div>
    <div class=\"modal-footer\">
        <div class=\"col-md-2 float-right\">
            <input type=\"submit\" value=\"Duplicate\" name=\"submitAction\" class=\"btn medium primary-bg\" />

        </div>
       







    </div>
  

</form>

";
        
        $__internal_dd81e2dfea7086461a9bf380fd6334d977eafdfcc407efb48055b13738b07e80->leave($__internal_dd81e2dfea7086461a9bf380fd6334d977eafdfcc407efb48055b13738b07e80_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:duplicateTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/editQuestion.html.twig #}*/
/* <form class="left-side" action="{{ path('ts_admin_duplicateTest')}}?idtest={{idtest}}"  method="post">*/
/*     <div class="modal-header">*/
/*         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*             <i class="glyph-icon icon-remove"></i>*/
/*         </a>*/
/* */
/*         <h3 id="myModalLabel">Duplicate Test  : </h3>*/
/*     </div>*/
/*     <div class="modal-body bg-yellow">*/
/* */
/* */
/* */
/*         */
/* */
/* */
/*               */
/* */
/*                 <div class="infobox warning-bg">*/
/*                     <div class="bg-yellow large btn info-icon">*/
/*                         <i class="glyph-icon icon-warning"></i>*/
/*                     </div>*/
/*                      <h4 class="infobox-title">warning!</h4>*/
/*                     <p>this test is affected to some candidates, if you want to <b>delete or modify <b>this test you can <b>duplicate</b> it. </p>*/
/*                     <br>*/
/*                 </div>*/
/* */
/*            */
/*           */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <div class="col-md-2 float-right">*/
/*             <input type="submit" value="Duplicate" name="submitAction" class="btn medium primary-bg" />*/
/* */
/*         </div>*/
/*        */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     </div>*/
/*   */
/* */
/* </form>*/
/* */
/* */
