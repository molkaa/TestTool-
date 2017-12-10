<?php

/* @TSAdmin/Candidate/JavaNiv1.html.twig */
class __TwigTemplate_d17770ed1f7095877ce88ff729bba3ce4dc9e047ee6b0af585b3a1ec178a94f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle:Candidate:candidatTests.html.twig", "@TSAdmin/Candidate/JavaNiv1.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle:Candidate:candidatTests.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72c37820903c267dcf87cc0236bd2964241c81aa5ae00f250bb200eaa36e405e = $this->env->getExtension("native_profiler");
        $__internal_72c37820903c267dcf87cc0236bd2964241c81aa5ae00f250bb200eaa36e405e->enter($__internal_72c37820903c267dcf87cc0236bd2964241c81aa5ae00f250bb200eaa36e405e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Candidate/JavaNiv1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72c37820903c267dcf87cc0236bd2964241c81aa5ae00f250bb200eaa36e405e->leave($__internal_72c37820903c267dcf87cc0236bd2964241c81aa5ae00f250bb200eaa36e405e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3c3554eedaca238fda2f43da2fb7d8b8a0b2f465138953a599a2bbaa32443ab = $this->env->getExtension("native_profiler");
        $__internal_e3c3554eedaca238fda2f43da2fb7d8b8a0b2f465138953a599a2bbaa32443ab->enter($__internal_e3c3554eedaca238fda2f43da2fb7d8b8a0b2f465138953a599a2bbaa32443ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"row \">
        <div class=\"col-md-12\" style=\"margin-top:20px\">
            <div class=\"content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin\">
                <h3 class=\"content-header\">
                    <span> <b> Java Niveau1 </b></span>
                </h3>
                <div class=\"content-box-wrapper\">
                    <p class=\"col-md-12\">  <b> Q1 : Comment indiquer qu'une classe A hérite d'une classe B ?</b></p>

                    <div class=\"row\">
                        <p class=\"col-md-12\"> 
                        <div class=\"form-checkbox-radio col-md-9\">
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">class A::B</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">class A extends B</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">class A implements B</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">class A inherit B</label>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class=\"divider\" ></div>
                    ";
        // line 38
        echo "                    <p class=\"col-md-12\">  <b> Q2 : Que signifie le mot clef \"static\" associé à un attribut ?</b></p>

                    <div class=\"row\">
                        <p class=\"col-md-12\"> 
                        <div class=\"form-checkbox-radio col-md-9\">
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Que la valeur de cet attribut est constante</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Que cet attribut n'est visible que dans la classe où il est défini</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Que cet attribut sera toujours passé par valeur</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Que cet attribut a une valeur unique pour toutes les instances de la classe</label>
                            </div>
                        </div>
                        </p>
                    </div>
                    ";
        // line 63
        echo "                    <div class=\"divider\" ></div>
                    <p class=\"col-md-12\">  <b> Q3 : Au sujet du mot clef \"abstract\", quelle assertion est fausse ?</b></p>

                    <div class=\"row\">
                        <p class=\"col-md-12\"> 
                        <div class=\"form-checkbox-radio col-md-9\">
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Une classe abstraite ne peut être instanciée</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Une méthode abstraite n'a pas d'implémentation</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Une classe abstraite n'a pas forcément de classe fille</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Une classe abstraite doit contenir au moins une méthode abstraite</label>
                            </div>
                        </div>
                        </p>
                    </div>
                    ";
        // line 89
        echo "                    <div class=\"divider\" ></div>
                    <p class=\"col-md-12\">  <b> Q4 : Child est une classe héritant de la classe Parent. myChild et myParent sont des instances respectivement de Child et Parent. 
                            Quel code ne compile pas ?</b></p>

                    <div class=\"row\">
                        <p class=\"col-md-12\"> 
                        <div class=\"form-checkbox-radio col-md-9\">
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">'Parent p = new Child();'</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">'myParent = myChild;'</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">'myParent = myChild;'</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">'myChild = (MyChild)myParent;'</label>
                            </div>
                        </div>
                        </p>
                    </div>
                    ";
        // line 116
        echo "                    <div class=\"divider\" ></div>
                    <p class=\"col-md-12\">  <b> Q5 : Que sont les classes du package javax ?</b></p>

                    <div class=\"row\">
                        <p class=\"col-md-12\"> 
                        <div class=\"form-checkbox-radio col-md-9\">
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Des ponts Java-ActiveX</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Des extensions du langage Java standard</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Des classes Java pour X-Windows</label>
                            </div>
                            <div class=\"checkbox-radio\">
                                <input type=\"checkbox\" name=\"\" id=\"\">
                                <label for=\"\">Des classes Java multi-plateformes</label>
                            </div>
                        </div>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"divider\" ></div>
            <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
            <div class=\"col-md-4 col-md-offset-4\">
                <input type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\"btn medium primary-bg radius-all-4\" />
            </div>
        </div>
    </div>
";
        
        $__internal_e3c3554eedaca238fda2f43da2fb7d8b8a0b2f465138953a599a2bbaa32443ab->leave($__internal_e3c3554eedaca238fda2f43da2fb7d8b8a0b2f465138953a599a2bbaa32443ab_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Candidate/JavaNiv1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 116,  128 => 89,  101 => 63,  75 => 38,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/TS/EvaluatorBundle/Resources/views/Candidat/JavaNiv1.html.twig #}*/
/* {% extends "TSAdminBundle:Candidate:candidatTests.html.twig" %}*/
/* {% block content %}*/
/* */
/*     <div class="row ">*/
/*         <div class="col-md-12" style="margin-top:20px">*/
/*             <div class="content-box border-top border-bottom border-blue mrg25B col-md-11 center-margin">*/
/*                 <h3 class="content-header">*/
/*                     <span> <b> Java Niveau1 </b></span>*/
/*                 </h3>*/
/*                 <div class="content-box-wrapper">*/
/*                     <p class="col-md-12">  <b> Q1 : Comment indiquer qu'une classe A hérite d'une classe B ?</b></p>*/
/* */
/*                     <div class="row">*/
/*                         <p class="col-md-12"> */
/*                         <div class="form-checkbox-radio col-md-9">*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">class A::B</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">class A extends B</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">class A implements B</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">class A inherit B</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="divider" ></div>*/
/*                     {#                //************************************************#}*/
/*                     <p class="col-md-12">  <b> Q2 : Que signifie le mot clef "static" associé à un attribut ?</b></p>*/
/* */
/*                     <div class="row">*/
/*                         <p class="col-md-12"> */
/*                         <div class="form-checkbox-radio col-md-9">*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Que la valeur de cet attribut est constante</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Que cet attribut n'est visible que dans la classe où il est défini</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Que cet attribut sera toujours passé par valeur</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Que cet attribut a une valeur unique pour toutes les instances de la classe</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         </p>*/
/*                     </div>*/
/*                     {#                //************************************************#}*/
/*                     <div class="divider" ></div>*/
/*                     <p class="col-md-12">  <b> Q3 : Au sujet du mot clef "abstract", quelle assertion est fausse ?</b></p>*/
/* */
/*                     <div class="row">*/
/*                         <p class="col-md-12"> */
/*                         <div class="form-checkbox-radio col-md-9">*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Une classe abstraite ne peut être instanciée</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Une méthode abstraite n'a pas d'implémentation</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Une classe abstraite n'a pas forcément de classe fille</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Une classe abstraite doit contenir au moins une méthode abstraite</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         </p>*/
/*                     </div>*/
/*                     {#                //************************************************#}*/
/*                     <div class="divider" ></div>*/
/*                     <p class="col-md-12">  <b> Q4 : Child est une classe héritant de la classe Parent. myChild et myParent sont des instances respectivement de Child et Parent. */
/*                             Quel code ne compile pas ?</b></p>*/
/* */
/*                     <div class="row">*/
/*                         <p class="col-md-12"> */
/*                         <div class="form-checkbox-radio col-md-9">*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">'Parent p = new Child();'</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">'myParent = myChild;'</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">'myParent = myChild;'</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">'myChild = (MyChild)myParent;'</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         </p>*/
/*                     </div>*/
/*                     {#                //************************************************#}*/
/*                     <div class="divider" ></div>*/
/*                     <p class="col-md-12">  <b> Q5 : Que sont les classes du package javax ?</b></p>*/
/* */
/*                     <div class="row">*/
/*                         <p class="col-md-12"> */
/*                         <div class="form-checkbox-radio col-md-9">*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Des ponts Java-ActiveX</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Des extensions du langage Java standard</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Des classes Java pour X-Windows</label>*/
/*                             </div>*/
/*                             <div class="checkbox-radio">*/
/*                                 <input type="checkbox" name="" id="">*/
/*                                 <label for="">Des classes Java multi-plateformes</label>*/
/*                             </div>*/
/*                         </div>*/
/*                         </p>*/
/*                     </div> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <div class="divider" ></div>*/
/*             <input type="hidden" name="superhidden" id="superhidden">*/
/*             <div class="col-md-4 col-md-offset-4">*/
/*                 <input type="submit" value="ADD" name="submitAction" class="btn medium primary-bg radius-all-4" />*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
