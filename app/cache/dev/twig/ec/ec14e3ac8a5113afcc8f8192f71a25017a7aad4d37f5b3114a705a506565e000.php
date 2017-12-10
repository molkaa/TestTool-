<?php

/* @TSCandidat/Candidat/formDetails.html.twig */
class __TwigTemplate_f3f3604c4182754663a15954fd2dcfda2b6a1dd0e1169faf2c23f264638e1de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSCandidatBundle::layout.html.twig", "@TSCandidat/Candidat/formDetails.html.twig", 3);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu_nav' => array($this, 'block_menu_nav'),
            'slider' => array($this, 'block_slider'),
            'mainbar' => array($this, 'block_mainbar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSCandidatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5957465c99eb2f93ee1cf61ebbbb62970e2d4857b44612848f4e314f04554d0e = $this->env->getExtension("native_profiler");
        $__internal_5957465c99eb2f93ee1cf61ebbbb62970e2d4857b44612848f4e314f04554d0e->enter($__internal_5957465c99eb2f93ee1cf61ebbbb62970e2d4857b44612848f4e314f04554d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/formDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5957465c99eb2f93ee1cf61ebbbb62970e2d4857b44612848f4e314f04554d0e->leave($__internal_5957465c99eb2f93ee1cf61ebbbb62970e2d4857b44612848f4e314f04554d0e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c52896d1f77f4a299ab70356217959175226987477c1f2c3f415839b2d797501 = $this->env->getExtension("native_profiler");
        $__internal_c52896d1f77f4a299ab70356217959175226987477c1f2c3f415839b2d797501->enter($__internal_c52896d1f77f4a299ab70356217959175226987477c1f2c3f415839b2d797501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/accordion.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\" />
<style>
    table {
        width:100%;
    }
    tr{
        width:50%;
    }
    td { 
        padding-left: 40px;
    }
</style>
";
        
        $__internal_c52896d1f77f4a299ab70356217959175226987477c1f2c3f415839b2d797501->leave($__internal_c52896d1f77f4a299ab70356217959175226987477c1f2c3f415839b2d797501_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96c6effd41bcd8f5d88a7b8b4ea6cd0b5cd89f0de0adf6b46e9ab9982c383207 = $this->env->getExtension("native_profiler");
        $__internal_96c6effd41bcd8f5d88a7b8b4ea6cd0b5cd89f0de0adf6b46e9ab9982c383207->enter($__internal_96c6effd41bcd8f5d88a7b8b4ea6cd0b5cd89f0de0adf6b46e9ab9982c383207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/accordion/accordion.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_96c6effd41bcd8f5d88a7b8b4ea6cd0b5cd89f0de0adf6b46e9ab9982c383207->leave($__internal_96c6effd41bcd8f5d88a7b8b4ea6cd0b5cd89f0de0adf6b46e9ab9982c383207_prof);

    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a6d92e1228d7c488efb82d8e6eba0d9809f978dae78c36fda252e7ec0df1e3a = $this->env->getExtension("native_profiler");
        $__internal_0a6d92e1228d7c488efb82d8e6eba0d9809f978dae78c36fda252e7ec0df1e3a->enter($__internal_0a6d92e1228d7c488efb82d8e6eba0d9809f978dae78c36fda252e7ec0df1e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 25
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|How to apply
";
        
        $__internal_0a6d92e1228d7c488efb82d8e6eba0d9809f978dae78c36fda252e7ec0df1e3a->leave($__internal_0a6d92e1228d7c488efb82d8e6eba0d9809f978dae78c36fda252e7ec0df1e3a_prof);

    }

    // line 27
    public function block_header($context, array $blocks = array())
    {
        $__internal_b693f1e3ca60b1bd4f75b2c58ba6c9f333e86c0836e25ca21a210ac589682cd1 = $this->env->getExtension("native_profiler");
        $__internal_b693f1e3ca60b1bd4f75b2c58ba6c9f333e86c0836e25ca21a210ac589682cd1->enter($__internal_b693f1e3ca60b1bd4f75b2c58ba6c9f333e86c0836e25ca21a210ac589682cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 28
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_b693f1e3ca60b1bd4f75b2c58ba6c9f333e86c0836e25ca21a210ac589682cd1->leave($__internal_b693f1e3ca60b1bd4f75b2c58ba6c9f333e86c0836e25ca21a210ac589682cd1_prof);

    }

    // line 30
    public function block_menu_nav($context, array $blocks = array())
    {
        $__internal_1813d1ea24118aa557c4044fe3f6a0ebc4504727156ca5bbb001ba19162154a2 = $this->env->getExtension("native_profiler");
        $__internal_1813d1ea24118aa557c4044fe3f6a0ebc4504727156ca5bbb001ba19162154a2->enter($__internal_1813d1ea24118aa557c4044fe3f6a0ebc4504727156ca5bbb001ba19162154a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_nav"));

        // line 31
        echo "<script>
    \$(document).ready(function() {
        var li = document.getElementById('4');
        \$(li).addClass('selected');

        var li1 = document.getElementById('a');
        \$(li1).addClass('selected');
    });
</script>
";
        // line 40
        $this->displayParentBlock("menu_nav", $context, $blocks);
        echo "
";
        
        $__internal_1813d1ea24118aa557c4044fe3f6a0ebc4504727156ca5bbb001ba19162154a2->leave($__internal_1813d1ea24118aa557c4044fe3f6a0ebc4504727156ca5bbb001ba19162154a2_prof);

    }

    // line 42
    public function block_slider($context, array $blocks = array())
    {
        $__internal_34797d9a39b14e82820e36d0a1d5954628e899c1c1bd2048ec199c92e4058fb7 = $this->env->getExtension("native_profiler");
        $__internal_34797d9a39b14e82820e36d0a1d5954628e899c1c1bd2048ec199c92e4058fb7->enter($__internal_34797d9a39b14e82820e36d0a1d5954628e899c1c1bd2048ec199c92e4058fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        // line 43
        $this->displayParentBlock("slider", $context, $blocks);
        echo "
";
        
        $__internal_34797d9a39b14e82820e36d0a1d5954628e899c1c1bd2048ec199c92e4058fb7->leave($__internal_34797d9a39b14e82820e36d0a1d5954628e899c1c1bd2048ec199c92e4058fb7_prof);

    }

    // line 45
    public function block_mainbar($context, array $blocks = array())
    {
        $__internal_ae31dd12bc8b06e9dba8ef7a6b4fcb9f0f129504948aea788edd3da82037489a = $this->env->getExtension("native_profiler");
        $__internal_ae31dd12bc8b06e9dba8ef7a6b4fcb9f0f129504948aea788edd3da82037489a->enter($__internal_ae31dd12bc8b06e9dba8ef7a6b4fcb9f0f129504948aea788edd3da82037489a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainbar"));

        // line 46
        echo "<div  class=\"ac-container\">
    <div class=\"mainbar\">
        <div class=\"article\">
";
        // line 50
        echo "            <div class=\"col6 titleDetails\" style=\"text-align: left\" >
                <img src=\"/TestTool/web/images/blueLine.png\" />
                Personal Details : 
            </div>
            <div>
                <table>
                    <tr>
                        <td class=\"col6\">
                            Adress : ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "adress", array()), "html", null, true);
        echo "
                        </td>

                        <td class=\"col6\">
                            Phone : ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "phone", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            Email : ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "
                        </td>

                        <td class=\"col6\">
                            Birth : ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "dateOfBirth", array()), "d M Y"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "placeOfBirth", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            Experience : ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "experience", array()), "html", null, true);
        echo " years
                        </td>

                        <td class=\"col6\">
                            Request for : &nbsp ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "Candidature", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            Family Situation : &nbsp ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "familySituation", array()), "html", null, true);
        echo "
                        </td>

                        <td class=\"col6\">
                            Sex: &nbsp ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "sex", array()), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <div class=\"links\">
                  ";
        // line 93
        if ( !(null === $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "motivation", array()))) {
            // line 94
            echo "                        <tr>
                            <td class=\"col6\">
                                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "motivation", array()), "webPath", array())), "html", null, true);
            echo "?KeepThis=true&TB_iframe=true&height=880\" class=\"thickbox read\" >
                                    &raquo; Motivation
                                </a>
                            </td>

                  ";
        }
        // line 102
        echo "
                            <td class=\"col6\">
                                <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cv", array()), "webPath", array())), "html", null, true);
        echo "?KeepThis=true&TB_iframe=true&height=880\" class=\"thickbox read\" >
                                    &nbsp &raquo;  CV
                                </a>
                            </td>
                        </tr>  
                    </div>

                </table>
            </div>
";
        // line 114
        echo "            <div class=\" col6 titleDetails\" style=\"text-align: left\" >
                <img src=\"/TestTool/web/images/blueLine.png\" />
                Academic Details : 
            </div>
";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "academicDetails", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["academicDetails"]) {
            // line 119
            echo "            <div >
                <table>
                    <tr>
                        <td class=\"col6\">
                            Establishment : ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "establishment", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            Speciality : ";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "Speciality", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            Degree : ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "degree", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            diploma : ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "diploma", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            StartYear : ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "startYear", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            EndYear : ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["academicDetails"], "endYear", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                </table>
            </div>
            <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['academicDetails'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            <div class=\"col6 titleDetails\" style=\"text-align: left\" >
                <img src=\"/TestTool/web/images/blueLine.png\" />
                Professional Experience : 
            </div>

";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "professionalExperiences", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["professionalExperiences"]) {
            // line 159
            echo "            <div>
                <table>

                    <tr>
                        <td class=\"col6\">
                            Company : ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["professionalExperiences"], "company", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            Function : ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["professionalExperiences"], "function", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            StartDate : ";
            // line 173
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["professionalExperiences"], "startDate", array()), "d-m-Y"), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            EndDate : ";
            // line 177
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["professionalExperiences"], "endDate", array()), "d-m-Y"), "html", null, true);
            echo "
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col6\">
                            Description : ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["professionalExperiences"], "description", array()), "html", null, true);
            echo "
                        </td>
                    </tr>

                </table>
            </div>
            <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['professionalExperiences'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "            <div class=\"col6 titleDetails\" style=\"text-align: left\" >
                <img src=\"/TestTool/web/images/blueLine.png\" />
                Technologies : 
            </div>

";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "technologies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["technologies"]) {
            // line 197
            echo "            <div>
                <table>
                    <tr>
                        <td class=\"col6\">
                            Name : ";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($context["technologies"], "name", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            Level : ";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["technologies"], "level", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                </table>
                <br/>
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
";
        // line 214
        echo "            <div class=\"col6 titleDetails\" style=\"text-align: left\" >
                <img src=\"/TestTool/web/images/blueLine.png\" />
                Languages : 
            </div>

";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["languages"]) {
            // line 220
            echo "            <div>
                <table>
                    <tr>
                        <td class=\"col6\">
                            language : ";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["languages"], "language", array()), "html", null, true);
            echo "
                        </td>

                        <td class=\"col6\">
                            Level : ";
            // line 228
            echo twig_escape_filter($this->env, $this->getAttribute($context["languages"], "level", array()), "html", null, true);
            echo "
                        </td>
                    </tr>
                </table>
                <br/>
            </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "
        </div>
";
        // line 238
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("ts_candidat_edit");
        echo "\"  title=\"edit\" class=\"btn btn-a\" > << edit </a>
    </div>
</div>
";
        // line 241
        $this->displayParentBlock("mainbar", $context, $blocks);
        echo "

";
        
        $__internal_ae31dd12bc8b06e9dba8ef7a6b4fcb9f0f129504948aea788edd3da82037489a->leave($__internal_ae31dd12bc8b06e9dba8ef7a6b4fcb9f0f129504948aea788edd3da82037489a_prof);

    }

    // line 244
    public function block_footer($context, array $blocks = array())
    {
        $__internal_82d1b6a8b18b19b156c7603839ad999369ddadfe58bfa8d8fa683bf387705d6c = $this->env->getExtension("native_profiler");
        $__internal_82d1b6a8b18b19b156c7603839ad999369ddadfe58bfa8d8fa683bf387705d6c->enter($__internal_82d1b6a8b18b19b156c7603839ad999369ddadfe58bfa8d8fa683bf387705d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 245
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_82d1b6a8b18b19b156c7603839ad999369ddadfe58bfa8d8fa683bf387705d6c->leave($__internal_82d1b6a8b18b19b156c7603839ad999369ddadfe58bfa8d8fa683bf387705d6c_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/formDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 245,  506 => 244,  496 => 241,  489 => 238,  485 => 235,  472 => 228,  465 => 224,  459 => 220,  455 => 219,  448 => 214,  445 => 212,  432 => 205,  425 => 201,  419 => 197,  415 => 196,  408 => 191,  394 => 182,  386 => 177,  379 => 173,  371 => 168,  364 => 164,  357 => 159,  353 => 158,  346 => 153,  333 => 145,  326 => 141,  318 => 136,  311 => 132,  303 => 127,  296 => 123,  290 => 119,  286 => 118,  280 => 114,  268 => 104,  264 => 102,  255 => 96,  251 => 94,  249 => 93,  242 => 89,  235 => 85,  227 => 80,  220 => 76,  210 => 71,  203 => 67,  195 => 62,  188 => 58,  178 => 50,  173 => 46,  167 => 45,  158 => 43,  152 => 42,  143 => 40,  132 => 31,  126 => 30,  116 => 28,  110 => 27,  100 => 25,  94 => 24,  85 => 22,  81 => 21,  75 => 20,  55 => 7,  51 => 6,  47 => 5,  41 => 4,  11 => 3,);
    }
}
/* {# src/TS/CandidatBundle/Resources/views/Candidat/htapply.html.twig #}*/
/* */
/* {% extends "TSCandidatBundle::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/accordion.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/boutons.css')}}" />*/
/* <style>*/
/*     table {*/
/*         width:100%;*/
/*     }*/
/*     tr{*/
/*         width:50%;*/
/*     }*/
/*     td { */
/*         padding-left: 40px;*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* <script type="text/javascript" src="{{ asset('js/accordion/accordion.js')}}"></script>*/
/* {% endblock %}*/
/* {% block title %}*/
/*  {{ parent() }}|How to apply*/
/* {% endblock %}*/
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* {% block menu_nav %}*/
/* <script>*/
/*     $(document).ready(function() {*/
/*         var li = document.getElementById('4');*/
/*         $(li).addClass('selected');*/
/* */
/*         var li1 = document.getElementById('a');*/
/*         $(li1).addClass('selected');*/
/*     });*/
/* </script>*/
/* {{ parent()}}*/
/* {% endblock %}*/
/* {% block slider %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* {% block mainbar%}*/
/* <div  class="ac-container">*/
/*     <div class="mainbar">*/
/*         <div class="article">*/
/* {# ************************* PERSONAL DETAILS ************************************** #}*/
/*             <div class="col6 titleDetails" style="text-align: left" >*/
/*                 <img src="/TestTool/web/images/blueLine.png" />*/
/*                 Personal Details : */
/*             </div>*/
/*             <div>*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Adress : {{ candidat.adress }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Phone : {{ candidat.phone }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Email : {{ candidat.email }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Birth : {{ candidat.dateOfBirth|date('d M Y') }}: {{ candidat.placeOfBirth }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Experience : {{ candidat.experience }} years*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Request for : &nbsp {{ candidat.Candidature }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Family Situation : &nbsp {{ candidat.familySituation }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Sex: &nbsp {{ candidat.sex }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <div class="links">*/
/*                   {% if candidat.motivation is not null %}*/
/*                         <tr>*/
/*                             <td class="col6">*/
/*                                 <a href="{{ asset(candidat.motivation.webPath) }}?KeepThis=true&TB_iframe=true&height=880" class="thickbox read" >*/
/*                                     &raquo; Motivation*/
/*                                 </a>*/
/*                             </td>*/
/* */
/*                   {% endif %}*/
/* */
/*                             <td class="col6">*/
/*                                 <a href="{{ asset(candidat.cv.webPath) }}?KeepThis=true&TB_iframe=true&height=880" class="thickbox read" >*/
/*                                     &nbsp &raquo;  CV*/
/*                                 </a>*/
/*                             </td>*/
/*                         </tr>  */
/*                     </div>*/
/* */
/*                 </table>*/
/*             </div>*/
/* {# ************************* ACADEMIC DETAILS ************************************** #}*/
/*             <div class=" col6 titleDetails" style="text-align: left" >*/
/*                 <img src="/TestTool/web/images/blueLine.png" />*/
/*                 Academic Details : */
/*             </div>*/
/* {% for academicDetails in candidat.academicDetails %}*/
/*             <div >*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Establishment : {{ academicDetails.establishment }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Speciality : {{ academicDetails.Speciality }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Degree : {{ academicDetails.degree	 }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             diploma : {{ academicDetails.diploma }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             StartYear : {{ academicDetails.startYear }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             EndYear : {{ academicDetails.endYear }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </div>*/
/*             <br/>*/
/* {% endfor %}*/
/* {# ************************* Professional Experience ************************************** #}*/
/*             <div class="col6 titleDetails" style="text-align: left" >*/
/*                 <img src="/TestTool/web/images/blueLine.png" />*/
/*                 Professional Experience : */
/*             </div>*/
/* */
/* {% for professionalExperiences in candidat.professionalExperiences %}*/
/*             <div>*/
/*                 <table>*/
/* */
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Company : {{ professionalExperiences.company }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Function : {{ professionalExperiences.function }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             StartDate : {{ professionalExperiences.startDate|date('d-m-Y')  }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             EndDate : {{ professionalExperiences.endDate|date('d-m-Y')  }}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Description : {{ professionalExperiences.description}}*/
/*                         </td>*/
/*                     </tr>*/
/* */
/*                 </table>*/
/*             </div>*/
/*             <br/>*/
/* {% endfor %}*/
/* {# ************************* Technologies  ************************************** #}*/
/*             <div class="col6 titleDetails" style="text-align: left" >*/
/*                 <img src="/TestTool/web/images/blueLine.png" />*/
/*                 Technologies : */
/*             </div>*/
/* */
/* {% for technologies in candidat.technologies %}*/
/*             <div>*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             Name : {{ technologies.name }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Level : {{ technologies.level }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <br/>*/
/*             </div>*/
/* {% endfor %}*/
/* */
/* {# ************************* Languages  ************************************** #}*/
/*             <div class="col6 titleDetails" style="text-align: left" >*/
/*                 <img src="/TestTool/web/images/blueLine.png" />*/
/*                 Languages : */
/*             </div>*/
/* */
/* {% for languages in candidat.languages %}*/
/*             <div>*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td class="col6">*/
/*                             language : {{ languages.language }}*/
/*                         </td>*/
/* */
/*                         <td class="col6">*/
/*                             Level : {{ languages.level }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <br/>*/
/*             </div>*/
/* {% endfor %}*/
/* */
/*         </div>*/
/* {#        <a href="{{ path('ts_candidat_canoffers')}}"  title="offers" style="float:right" class="btn btn-a" >offers >></a>#}*/
/*         <a href="{{ path('ts_candidat_edit')}}"  title="edit" class="btn btn-a" > << edit </a>*/
/*     </div>*/
/* </div>*/
/* {{ parent() }}*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* */
