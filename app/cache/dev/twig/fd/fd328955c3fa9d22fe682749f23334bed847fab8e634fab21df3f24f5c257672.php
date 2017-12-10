<?php

/* TSAdminBundle:Tests:tests.html.twig */
class __TwigTemplate_0571a5fea7b1509cbb03dc73fcb664cd56f68ffcfc7f5827f2ffbda9def29582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:tests.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'icons' => array($this, 'block_icons'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'right' => array($this, 'block_right'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TSAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_245585e9ba04bd730df6d6c4309b80f4e80fa22f84f8bdbc047d00d45a5015d3 = $this->env->getExtension("native_profiler");
        $__internal_245585e9ba04bd730df6d6c4309b80f4e80fa22f84f8bdbc047d00d45a5015d3->enter($__internal_245585e9ba04bd730df6d6c4309b80f4e80fa22f84f8bdbc047d00d45a5015d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_245585e9ba04bd730df6d6c4309b80f4e80fa22f84f8bdbc047d00d45a5015d3->leave($__internal_245585e9ba04bd730df6d6c4309b80f4e80fa22f84f8bdbc047d00d45a5015d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8ad5815d2ebc05d6e2abde25a53014dd0de75787288b39d2ba8ac21548a0458 = $this->env->getExtension("native_profiler");
        $__internal_e8ad5815d2ebc05d6e2abde25a53014dd0de75787288b39d2ba8ac21548a0458->enter($__internal_e8ad5815d2ebc05d6e2abde25a53014dd0de75787288b39d2ba8ac21548a0458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|testLibrary
";
        
        $__internal_e8ad5815d2ebc05d6e2abde25a53014dd0de75787288b39d2ba8ac21548a0458->leave($__internal_e8ad5815d2ebc05d6e2abde25a53014dd0de75787288b39d2ba8ac21548a0458_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_54368795cf596114dc07d154889abf7cc65e5024f2f740fc39f308f323d15ae2 = $this->env->getExtension("native_profiler");
        $__internal_54368795cf596114dc07d154889abf7cc65e5024f2f740fc39f308f323d15ae2->enter($__internal_54368795cf596114dc07d154889abf7cc65e5024f2f740fc39f308f323d15ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_54368795cf596114dc07d154889abf7cc65e5024f2f740fc39f308f323d15ae2->leave($__internal_54368795cf596114dc07d154889abf7cc65e5024f2f740fc39f308f323d15ae2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a055b52abefbcd0597736ee9021ae557a034748b13dd7f02dbe7ded364ae393f = $this->env->getExtension("native_profiler");
        $__internal_a055b52abefbcd0597736ee9021ae557a034748b13dd7f02dbe7ded364ae393f->enter($__internal_a055b52abefbcd0597736ee9021ae557a034748b13dd7f02dbe7ded364ae393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_a055b52abefbcd0597736ee9021ae557a034748b13dd7f02dbe7ded364ae393f->leave($__internal_a055b52abefbcd0597736ee9021ae557a034748b13dd7f02dbe7ded364ae393f_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5c461e2677c319cabd74ea78c1ddfb57fb9be9dccb49f7bc151b5f2c31bbe59 = $this->env->getExtension("native_profiler");
        $__internal_d5c461e2677c319cabd74ea78c1ddfb57fb9be9dccb49f7bc151b5f2c31bbe59->enter($__internal_d5c461e2677c319cabd74ea78c1ddfb57fb9be9dccb49f7bc151b5f2c31bbe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "  
    ";
        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d5c461e2677c319cabd74ea78c1ddfb57fb9be9dccb49f7bc151b5f2c31bbe59->leave($__internal_d5c461e2677c319cabd74ea78c1ddfb57fb9be9dccb49f7bc151b5f2c31bbe59_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_e46c2d7c5bdb506ea084f07ee05d2a31db882741746381078356e2ba3ba61e07 = $this->env->getExtension("native_profiler");
        $__internal_e46c2d7c5bdb506ea084f07ee05d2a31db882741746381078356e2ba3ba61e07->enter($__internal_e46c2d7c5bdb506ea084f07ee05d2a31db882741746381078356e2ba3ba61e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_e46c2d7c5bdb506ea084f07ee05d2a31db882741746381078356e2ba3ba61e07->leave($__internal_e46c2d7c5bdb506ea084f07ee05d2a31db882741746381078356e2ba3ba61e07_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e681528c4b76bed3f41ae9d6514061c5d80031d0b160fca0601664213a836e17 = $this->env->getExtension("native_profiler");
        $__internal_e681528c4b76bed3f41ae9d6514061c5d80031d0b160fca0601664213a836e17->enter($__internal_e681528c4b76bed3f41ae9d6514061c5d80031d0b160fca0601664213a836e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_e681528c4b76bed3f41ae9d6514061c5d80031d0b160fca0601664213a836e17->leave($__internal_e681528c4b76bed3f41ae9d6514061c5d80031d0b160fca0601664213a836e17_prof);

    }

    // line 29
    public function block_right($context, array $blocks = array())
    {
        $__internal_9ff672c91c60f92042dc7ed94188b595dc7d93121f8207ad4ad2488e513d83bf = $this->env->getExtension("native_profiler");
        $__internal_9ff672c91c60f92042dc7ed94188b595dc7d93121f8207ad4ad2488e513d83bf->enter($__internal_9ff672c91c60f92042dc7ed94188b595dc7d93121f8207ad4ad2488e513d83bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 30
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_9ff672c91c60f92042dc7ed94188b595dc7d93121f8207ad4ad2488e513d83bf->leave($__internal_9ff672c91c60f92042dc7ed94188b595dc7d93121f8207ad4ad2488e513d83bf_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_d57b7090303df2b6746c4f95cd23ad242c20a491b1451d319bbd2c77b0de5dd2 = $this->env->getExtension("native_profiler");
        $__internal_d57b7090303df2b6746c4f95cd23ad242c20a491b1451d319bbd2c77b0de5dd2->enter($__internal_d57b7090303df2b6746c4f95cd23ad242c20a491b1451d319bbd2c77b0de5dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "

    <div id=\"page-title\">


        <div id=\"breadcrumb-right\">

            <div class=\"float-right\">
            </div>
        </div>      

    </div>




    <div class=\"example-box\">            
        <div class=\"example-code\"> 


            <span> <h3><i class=\"glyph-icon icon-folder heading-content\"> All Tests</i></h3>

              
                    <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAdd\"  id=\"modalAddQuestion\" title=\"Add Test\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                        <span class=\"glyph-icon icon-separator\">
                            <i class=\"glyph-icon icon-plus-square\"></i>
                        </span>
                        <span class=\"button-content\">
                            Add Test
                        </span>
                    </a>
               
            </span>



            ";
        // line 70
        $this->loadTemplate("TSAdminBundle:Tests:ModalAddTest.html.twig", "TSAdminBundle:Tests:tests.html.twig", 70)->display($context);
        echo " 

            <br><br><br>       




            <table class=\"table\" id=\"example1\" >
                <thead>
                    <tr>
                        <th>ID </th>
                        <th>Type</th> 
                        <th>Test</th>
                        <th>Mark</th>
                        <th>Elemenatory mark</th>
                        <th>Time</th>
                        <th>Calculation Method</th>
                        <th>Preview</th>
                        <th>Customize</th>
                        <th>Settings</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody >

                    ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) ? $context["tests"] : $this->getContext($context, "tests")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 97
            echo "                        ";
            $this->loadTemplate("TSAdminBundle:Tests:test.html.twig", "TSAdminBundle:Tests:tests.html.twig", 97)->display($context);
            // line 98
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                </tbody>
                <tfoot>
                    <tr>
                        <th>ID </th>
                        <th>Type</th> 
                        <th>Test</th>
                        <th>Mark</th>
                        <th>Elemenatory mark</th>
                        <th>Time</th>
                        <th>Calculation Method</th>
                        <th>Preview</th>
                        <th>Customize</th>
                        <th>Settings</th>
                        <th>Edit</th>
                        <th>Remove</th>

                    </tr>
                </tfoot>
            </table>




        </div>
    </div>
 ";
        // line 126
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "TSAdminBundle:Tests:tests.html.twig", 126)->display($context);
        // line 127
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo " 


";
        
        $__internal_d57b7090303df2b6746c4f95cd23ad242c20a491b1451d319bbd2c77b0de5dd2->leave($__internal_d57b7090303df2b6746c4f95cd23ad242c20a491b1451d319bbd2c77b0de5dd2_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:tests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 127,  295 => 126,  267 => 100,  252 => 98,  249 => 97,  232 => 96,  203 => 70,  165 => 34,  159 => 33,  149 => 30,  143 => 29,  133 => 26,  127 => 25,  117 => 22,  111 => 21,  102 => 18,  99 => 17,  93 => 16,  84 => 13,  79 => 12,  73 => 11,  63 => 8,  57 => 7,  47 => 4,  41 => 3,  11 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/Tests.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|admin|testLibrary*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content%}*/
/* */
/* */
/*     <div id="page-title">*/
/* */
/* */
/*         <div id="breadcrumb-right">*/
/* */
/*             <div class="float-right">*/
/*             </div>*/
/*         </div>      */
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/*     <div class="example-box">            */
/*         <div class="example-code"> */
/* */
/* */
/*             <span> <h3><i class="glyph-icon icon-folder heading-content"> All Tests</i></h3>*/
/* */
/*               */
/*                     <a class="btn medium primary-bg float-right"   href="#ModalAdd"  id="modalAddQuestion" title="Add Test" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                         <span class="glyph-icon icon-separator">*/
/*                             <i class="glyph-icon icon-plus-square"></i>*/
/*                         </span>*/
/*                         <span class="button-content">*/
/*                             Add Test*/
/*                         </span>*/
/*                     </a>*/
/*                */
/*             </span>*/
/* */
/* */
/* */
/*             {% include "TSAdminBundle:Tests:ModalAddTest.html.twig"  %} */
/* */
/*             <br><br><br>       */
/* */
/* */
/* */
/* */
/*             <table class="table" id="example1" >*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>ID </th>*/
/*                         <th>Type</th> */
/*                         <th>Test</th>*/
/*                         <th>Mark</th>*/
/*                         <th>Elemenatory mark</th>*/
/*                         <th>Time</th>*/
/*                         <th>Calculation Method</th>*/
/*                         <th>Preview</th>*/
/*                         <th>Customize</th>*/
/*                         <th>Settings</th>*/
/*                         <th>Edit</th>*/
/*                         <th>Remove</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody >*/
/* */
/*                     {% for test in tests %}*/
/*                         {% include "TSAdminBundle:Tests:test.html.twig"  %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                 </tbody>*/
/*                 <tfoot>*/
/*                     <tr>*/
/*                         <th>ID </th>*/
/*                         <th>Type</th> */
/*                         <th>Test</th>*/
/*                         <th>Mark</th>*/
/*                         <th>Elemenatory mark</th>*/
/*                         <th>Time</th>*/
/*                         <th>Calculation Method</th>*/
/*                         <th>Preview</th>*/
/*                         <th>Customize</th>*/
/*                         <th>Settings</th>*/
/*                         <th>Edit</th>*/
/*                         <th>Remove</th>*/
/* */
/*                     </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/* */
/* */
/* */
/* */
/*         </div>*/
/*     </div>*/
/*  {% include "TSAdminBundle:Notification:GrowlNotif.html.twig"  %}*/
/*     {{ parent() }} */
/* */
/* */
/* {% endblock %}      */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
