<?php

/* TSAdminBundle::sidebar.html.twig */
class __TwigTemplate_db7c37f7389bb602463bdc9954d9677e0b41232bf9f9ba4d53ca97f3f634e54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fcb7a3a892a9d6895c3b588d3e73633649a3d95a70fd4ced70731a4242d7950 = $this->env->getExtension("native_profiler");
        $__internal_9fcb7a3a892a9d6895c3b588d3e73633649a3d95a70fd4ced70731a4242d7950->enter($__internal_9fcb7a3a892a9d6895c3b588d3e73633649a3d95a70fd4ced70731a4242d7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle::sidebar.html.twig"));

        // line 1
        echo "
<div id=\"page-sidebar\" class=\"scrollable-content\">
    <div id=\"sidebar-menu\">
        ";
        // line 4
        $this->displayBlock('sidebar', $context, $blocks);
        // line 153
        echo "    </div>
</div>";
        
        $__internal_9fcb7a3a892a9d6895c3b588d3e73633649a3d95a70fd4ced70731a4242d7950->leave($__internal_9fcb7a3a892a9d6895c3b588d3e73633649a3d95a70fd4ced70731a4242d7950_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_77df3fb3bd0f193ec27decde2fabfdc4bd57349e55d5a2b1dc29c3515a97b0c0 = $this->env->getExtension("native_profiler");
        $__internal_77df3fb3bd0f193ec27decde2fabfdc4bd57349e55d5a2b1dc29c3515a97b0c0->enter($__internal_77df3fb3bd0f193ec27decde2fabfdc4bd57349e55d5a2b1dc29c3515a97b0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "        <!-- #menu-list -->
        <ul>
            <!-- #General -->
            <li>
                <a href=\"javascript:;\" title=\"General\">
                    <i class=\"glyph-icon icon-home\"></i>
                    General
                    <i class=\"glyph-icon icon-angle-down\" style=\"float:right\"></i>
                </a>
                <ul>

                    <li>
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ts_admin_cvs");
        echo "\" title=\"Candidates\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Candidates
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ts_admin_allTests");
        echo "\" title=\"Tests Results\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Tests Results
                        </a>
                    </li>
                  
                </ul>

            </li>

            <!-- #Candidate Status -->
          

            <!-- #Tests -->
            <li>
                <a href=\"javascript:;\" title=\"Tests\">
                    <i class=\"glyph-icon icon-tasks\"></i>
                    Tests
                    <i class=\"glyph-icon icon-angle-down\" style=\"float:right\"></i>
                </a>
                <ul>
                     <li>
                        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ts_admin_editTests");
        echo "\" title=\"Tests Type\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Tests Type
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("ts_admin_questions");
        echo "\"  title=\"Questions library\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Questions library
                        </a>
                    </li>
                    <li>
                        <a  href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ts_admin_tests");
        echo "\"  title=\"Tests library\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Tests library
                        </a>
                    </li>
                </ul>

            </li>

            <!-- #Statestics -->
            <li>
                <a href=\"javascript:;\" title=\"Show Statistics\">
                    <i class=\"glyph-icon icon-tasks\"></i>
                    Show Statistics
                    <i class=\"glyph-icon icon-angle-down\" style=\"float:right\"></i>
                </a>
                <ul>
                    <li>
                        <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("ts_grapheChartLine");
        echo "\" title=\"Candidates' Statistics\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Candidates' Statistics
                        </a>
                    </li>
                </ul>
                             <ul>
                    <li>
                        <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("ts_grapheChartPie");
        echo "\" title=\"Questions' Statistics\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Questions' Statistics
                        </a>
                    </li>
                </ul>
            </li>

            <!-- #Edit Table -->

            <!-- #Edit Site -->
           
           
            <!-- #Add Users -->
            <li>
                <a href=\"javascript:;\" title=\"Add Users\">
                    <i class=\"glyph-icon icon-group\"></i>
                    Add Users
                    <i class=\"glyph-icon icon-angle-down\" style=\"float:right\"></i>
                </a>
                <ul>
                      ";
        // line 104
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "admin")) {
            // line 105
            echo "                    <li>
                        <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("ts_admin_addAdmin");
            echo "\" title=\"Super Admin\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Super Admin
                        </a>
                    </li>
                     ";
        }
        // line 112
        echo "                    <li>
                        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("ts_admin_addRH");
        echo "\" title=\"RH\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            RH
                        </a>
                    </li>

                    <li>
                        <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("ts_admin_addCandidate");
        echo "\" title=\"Candidate\">
                            <i class=\"glyph-icon icon-chevron-right\"></i>
                            Candidate
                        </a>
                    </li>
                </ul>

            </li>


            <!-- #Maps -->
           

        </ul>
        <div class=\"divider mrg5T mobile-hidden\"></div>
        <!-- #icons-list -->
        <div class=\"text-center mobile-hidden\">
            <div class=\"button-group display-inline\">

                <a href=\"http://www.facebook.com/SunGard\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"facebook\">
                    <i class=\"glyph-icon icon-facebook\"></i>
                </a>
                <a href=\"http://www.twitter.com/SunGard\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"twitter\">
                    <i class=\"glyph-icon icon-twitter\"></i>
                </a>
                <a href=\"http://blogs.sungard.com\" class=\"btn medium primary-bg tooltip-button\" data-placement=\"top\" title=\"blogs\">
                    <i class=\"glyph-icon icon-rss\"></i>
                </a>

            </div>

        </div>
        ";
        
        $__internal_77df3fb3bd0f193ec27decde2fabfdc4bd57349e55d5a2b1dc29c3515a97b0c0->leave($__internal_77df3fb3bd0f193ec27decde2fabfdc4bd57349e55d5a2b1dc29c3515a97b0c0_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle::sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 120,  183 => 113,  180 => 112,  171 => 106,  168 => 105,  166 => 104,  142 => 83,  131 => 75,  110 => 57,  101 => 51,  92 => 45,  67 => 23,  58 => 17,  44 => 5,  38 => 4,  30 => 153,  28 => 4,  23 => 1,);
    }
}
/* */
/* <div id="page-sidebar" class="scrollable-content">*/
/*     <div id="sidebar-menu">*/
/*         {% block sidebar %}*/
/*         <!-- #menu-list -->*/
/*         <ul>*/
/*             <!-- #General -->*/
/*             <li>*/
/*                 <a href="javascript:;" title="General">*/
/*                     <i class="glyph-icon icon-home"></i>*/
/*                     General*/
/*                     <i class="glyph-icon icon-angle-down" style="float:right"></i>*/
/*                 </a>*/
/*                 <ul>*/
/* */
/*                     <li>*/
/*                         <a href="{{ path('ts_admin_cvs') }}" title="Candidates">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Candidates*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{path('ts_admin_allTests')}}" title="Tests Results">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Tests Results*/
/*                         </a>*/
/*                     </li>*/
/*                   */
/*                 </ul>*/
/* */
/*             </li>*/
/* */
/*             <!-- #Candidate Status -->*/
/*           */
/* */
/*             <!-- #Tests -->*/
/*             <li>*/
/*                 <a href="javascript:;" title="Tests">*/
/*                     <i class="glyph-icon icon-tasks"></i>*/
/*                     Tests*/
/*                     <i class="glyph-icon icon-angle-down" style="float:right"></i>*/
/*                 </a>*/
/*                 <ul>*/
/*                      <li>*/
/*                         <a href="{{path('ts_admin_editTests')}}" title="Tests Type">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Tests Type*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a  href="{{path('ts_admin_questions')}}"  title="Questions library">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Questions library*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a  href="{{path('ts_admin_tests')}}"  title="Tests library">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Tests library*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/* */
/*             <!-- #Statestics -->*/
/*             <li>*/
/*                 <a href="javascript:;" title="Show Statistics">*/
/*                     <i class="glyph-icon icon-tasks"></i>*/
/*                     Show Statistics*/
/*                     <i class="glyph-icon icon-angle-down" style="float:right"></i>*/
/*                 </a>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{path('ts_grapheChartLine')}}" title="Candidates' Statistics">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Candidates' Statistics*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*                              <ul>*/
/*                     <li>*/
/*                         <a href="{{path('ts_grapheChartPie')}}" title="Questions' Statistics">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Questions' Statistics*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <!-- #Edit Table -->*/
/* */
/*             <!-- #Edit Site -->*/
/*            */
/*            */
/*             <!-- #Add Users -->*/
/*             <li>*/
/*                 <a href="javascript:;" title="Add Users">*/
/*                     <i class="glyph-icon icon-group"></i>*/
/*                     Add Users*/
/*                     <i class="glyph-icon icon-angle-down" style="float:right"></i>*/
/*                 </a>*/
/*                 <ul>*/
/*                       {% if  app.session.get('role') is same as ('admin') %}*/
/*                     <li>*/
/*                         <a href="{{path('ts_admin_addAdmin')}}" title="Super Admin">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Super Admin*/
/*                         </a>*/
/*                     </li>*/
/*                      {% endif %}*/
/*                     <li>*/
/*                         <a href="{{path('ts_admin_addRH')}}" title="RH">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             RH*/
/*                         </a>*/
/*                     </li>*/
/* */
/*                     <li>*/
/*                         <a href="{{path('ts_admin_addCandidate')}}" title="Candidate">*/
/*                             <i class="glyph-icon icon-chevron-right"></i>*/
/*                             Candidate*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*             </li>*/
/* */
/* */
/*             <!-- #Maps -->*/
/*            */
/* */
/*         </ul>*/
/*         <div class="divider mrg5T mobile-hidden"></div>*/
/*         <!-- #icons-list -->*/
/*         <div class="text-center mobile-hidden">*/
/*             <div class="button-group display-inline">*/
/* */
/*                 <a href="http://www.facebook.com/SunGard" class="btn medium primary-bg tooltip-button" data-placement="top" title="facebook">*/
/*                     <i class="glyph-icon icon-facebook"></i>*/
/*                 </a>*/
/*                 <a href="http://www.twitter.com/SunGard" class="btn medium primary-bg tooltip-button" data-placement="top" title="twitter">*/
/*                     <i class="glyph-icon icon-twitter"></i>*/
/*                 </a>*/
/*                 <a href="http://blogs.sungard.com" class="btn medium primary-bg tooltip-button" data-placement="top" title="blogs">*/
/*                     <i class="glyph-icon icon-rss"></i>*/
/*                 </a>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
