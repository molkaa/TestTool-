<?php

/* @TSAdmin/Tests/tests.html.twig */
class __TwigTemplate_d5650281952fea41525b8400ea2a2b21786d017bb1391ff1a1c8b3f6e80c1b9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "@TSAdmin/Tests/tests.html.twig", 2);
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
        $__internal_2cf29b169d23b545bbab2d2ce2dabc20d7d984365e3526e316fb4f62b85f5576 = $this->env->getExtension("native_profiler");
        $__internal_2cf29b169d23b545bbab2d2ce2dabc20d7d984365e3526e316fb4f62b85f5576->enter($__internal_2cf29b169d23b545bbab2d2ce2dabc20d7d984365e3526e316fb4f62b85f5576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/tests.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf29b169d23b545bbab2d2ce2dabc20d7d984365e3526e316fb4f62b85f5576->leave($__internal_2cf29b169d23b545bbab2d2ce2dabc20d7d984365e3526e316fb4f62b85f5576_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37fdadd9a729900ae3134c9d161861b03ca91628427ae51394e6ea14213e9974 = $this->env->getExtension("native_profiler");
        $__internal_37fdadd9a729900ae3134c9d161861b03ca91628427ae51394e6ea14213e9974->enter($__internal_37fdadd9a729900ae3134c9d161861b03ca91628427ae51394e6ea14213e9974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|testLibrary
";
        
        $__internal_37fdadd9a729900ae3134c9d161861b03ca91628427ae51394e6ea14213e9974->leave($__internal_37fdadd9a729900ae3134c9d161861b03ca91628427ae51394e6ea14213e9974_prof);

    }

    // line 7
    public function block_icons($context, array $blocks = array())
    {
        $__internal_2302f23b2f91e12aeb367ead7f1f133c7534506ef90b9f9ef6a252230bd61dec = $this->env->getExtension("native_profiler");
        $__internal_2302f23b2f91e12aeb367ead7f1f133c7534506ef90b9f9ef6a252230bd61dec->enter($__internal_2302f23b2f91e12aeb367ead7f1f133c7534506ef90b9f9ef6a252230bd61dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 8
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_2302f23b2f91e12aeb367ead7f1f133c7534506ef90b9f9ef6a252230bd61dec->leave($__internal_2302f23b2f91e12aeb367ead7f1f133c7534506ef90b9f9ef6a252230bd61dec_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d95fb127b661d1ad3094b75e87b4a79975746a7c035f98b7aa2d64c611a2343a = $this->env->getExtension("native_profiler");
        $__internal_d95fb127b661d1ad3094b75e87b4a79975746a7c035f98b7aa2d64c611a2343a->enter($__internal_d95fb127b661d1ad3094b75e87b4a79975746a7c035f98b7aa2d64c611a2343a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
        
        $__internal_d95fb127b661d1ad3094b75e87b4a79975746a7c035f98b7aa2d64c611a2343a->leave($__internal_d95fb127b661d1ad3094b75e87b4a79975746a7c035f98b7aa2d64c611a2343a_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3846d2d736e7d2f4b9f640323c664a9ec49fab186d6fa7923a5e1731a0d7377e = $this->env->getExtension("native_profiler");
        $__internal_3846d2d736e7d2f4b9f640323c664a9ec49fab186d6fa7923a5e1731a0d7377e->enter($__internal_3846d2d736e7d2f4b9f640323c664a9ec49fab186d6fa7923a5e1731a0d7377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "  
    ";
        // line 18
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3846d2d736e7d2f4b9f640323c664a9ec49fab186d6fa7923a5e1731a0d7377e->leave($__internal_3846d2d736e7d2f4b9f640323c664a9ec49fab186d6fa7923a5e1731a0d7377e_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_afa7395c34ba688c3edde96d86d7d49c336d1a15b46459280266fb0454a70b4b = $this->env->getExtension("native_profiler");
        $__internal_afa7395c34ba688c3edde96d86d7d49c336d1a15b46459280266fb0454a70b4b->enter($__internal_afa7395c34ba688c3edde96d86d7d49c336d1a15b46459280266fb0454a70b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_afa7395c34ba688c3edde96d86d7d49c336d1a15b46459280266fb0454a70b4b->leave($__internal_afa7395c34ba688c3edde96d86d7d49c336d1a15b46459280266fb0454a70b4b_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b70502a114bb7d63e7898d3396d1fb147cd05fe85a26ede6487a05d8cb33737c = $this->env->getExtension("native_profiler");
        $__internal_b70502a114bb7d63e7898d3396d1fb147cd05fe85a26ede6487a05d8cb33737c->enter($__internal_b70502a114bb7d63e7898d3396d1fb147cd05fe85a26ede6487a05d8cb33737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_b70502a114bb7d63e7898d3396d1fb147cd05fe85a26ede6487a05d8cb33737c->leave($__internal_b70502a114bb7d63e7898d3396d1fb147cd05fe85a26ede6487a05d8cb33737c_prof);

    }

    // line 29
    public function block_right($context, array $blocks = array())
    {
        $__internal_9d03389c17f4363a4556f2e004999199bfbcf5df519411d3118efde87be29786 = $this->env->getExtension("native_profiler");
        $__internal_9d03389c17f4363a4556f2e004999199bfbcf5df519411d3118efde87be29786->enter($__internal_9d03389c17f4363a4556f2e004999199bfbcf5df519411d3118efde87be29786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 30
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_9d03389c17f4363a4556f2e004999199bfbcf5df519411d3118efde87be29786->leave($__internal_9d03389c17f4363a4556f2e004999199bfbcf5df519411d3118efde87be29786_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_346492b3835b19f5cbe94302e2fabbd3744682194b8ffa8d36c612fff5f4f880 = $this->env->getExtension("native_profiler");
        $__internal_346492b3835b19f5cbe94302e2fabbd3744682194b8ffa8d36c612fff5f4f880->enter($__internal_346492b3835b19f5cbe94302e2fabbd3744682194b8ffa8d36c612fff5f4f880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $this->loadTemplate("TSAdminBundle:Tests:ModalAddTest.html.twig", "@TSAdmin/Tests/tests.html.twig", 70)->display($context);
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
            $this->loadTemplate("TSAdminBundle:Tests:test.html.twig", "@TSAdmin/Tests/tests.html.twig", 97)->display($context);
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
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "@TSAdmin/Tests/tests.html.twig", 126)->display($context);
        // line 127
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo " 


";
        
        $__internal_346492b3835b19f5cbe94302e2fabbd3744682194b8ffa8d36c612fff5f4f880->leave($__internal_346492b3835b19f5cbe94302e2fabbd3744682194b8ffa8d36c612fff5f4f880_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/tests.html.twig";
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
