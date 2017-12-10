<?php

/* TSAdminBundle:Tests:SettingTest.html.twig */
class __TwigTemplate_68cdd5e22db3de39bf1855c88a73e54bc79efc13759d6c3d0a85db4e276895e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:SettingTest.html.twig", 3);
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
        $__internal_667d06589010fc66a89a21015e6f7cc5d8e060fd53eedb561132b079cd5cdf64 = $this->env->getExtension("native_profiler");
        $__internal_667d06589010fc66a89a21015e6f7cc5d8e060fd53eedb561132b079cd5cdf64->enter($__internal_667d06589010fc66a89a21015e6f7cc5d8e060fd53eedb561132b079cd5cdf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:SettingTest.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_667d06589010fc66a89a21015e6f7cc5d8e060fd53eedb561132b079cd5cdf64->leave($__internal_667d06589010fc66a89a21015e6f7cc5d8e060fd53eedb561132b079cd5cdf64_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad31a88877a3ec63df73c886838f56fd295342fbbb6de494bc19189c3d97d1ed = $this->env->getExtension("native_profiler");
        $__internal_ad31a88877a3ec63df73c886838f56fd295342fbbb6de494bc19189c3d97d1ed->enter($__internal_ad31a88877a3ec63df73c886838f56fd295342fbbb6de494bc19189c3d97d1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|Setting Tests
";
        
        $__internal_ad31a88877a3ec63df73c886838f56fd295342fbbb6de494bc19189c3d97d1ed->leave($__internal_ad31a88877a3ec63df73c886838f56fd295342fbbb6de494bc19189c3d97d1ed_prof);

    }

    // line 8
    public function block_icons($context, array $blocks = array())
    {
        $__internal_1479ba9921546f92e77848e91fc9935ab2a1430387b37c06a787915bd5991970 = $this->env->getExtension("native_profiler");
        $__internal_1479ba9921546f92e77848e91fc9935ab2a1430387b37c06a787915bd5991970->enter($__internal_1479ba9921546f92e77848e91fc9935ab2a1430387b37c06a787915bd5991970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 9
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_1479ba9921546f92e77848e91fc9935ab2a1430387b37c06a787915bd5991970->leave($__internal_1479ba9921546f92e77848e91fc9935ab2a1430387b37c06a787915bd5991970_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dedbbff5b8873f9d7af6a74b0c08209bf94171fd7b3ec732ff8f6915f7d2fbcb = $this->env->getExtension("native_profiler");
        $__internal_dedbbff5b8873f9d7af6a74b0c08209bf94171fd7b3ec732ff8f6915f7d2fbcb->enter($__internal_dedbbff5b8873f9d7af6a74b0c08209bf94171fd7b3ec732ff8f6915f7d2fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />

";
        
        $__internal_dedbbff5b8873f9d7af6a74b0c08209bf94171fd7b3ec732ff8f6915f7d2fbcb->leave($__internal_dedbbff5b8873f9d7af6a74b0c08209bf94171fd7b3ec732ff8f6915f7d2fbcb_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c11674feabae775ad6ca3a1821fe87ff11ac26f1ac01bac04d4411c7747f273b = $this->env->getExtension("native_profiler");
        $__internal_c11674feabae775ad6ca3a1821fe87ff11ac26f1ac01bac04d4411c7747f273b->enter($__internal_c11674feabae775ad6ca3a1821fe87ff11ac26f1ac01bac04d4411c7747f273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
   
  

    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/config.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/contents.css"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/styles.js"), "html", null, true);
        echo "\"></script>
   

    ";
        // line 31
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c11674feabae775ad6ca3a1821fe87ff11ac26f1ac01bac04d4411c7747f273b->leave($__internal_c11674feabae775ad6ca3a1821fe87ff11ac26f1ac01bac04d4411c7747f273b_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_6dfcad53de7aa8d97de5b0b07204fbc7de2d7267dc7a7f9bef0c42c9b386cbff = $this->env->getExtension("native_profiler");
        $__internal_6dfcad53de7aa8d97de5b0b07204fbc7de2d7267dc7a7f9bef0c42c9b386cbff->enter($__internal_6dfcad53de7aa8d97de5b0b07204fbc7de2d7267dc7a7f9bef0c42c9b386cbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_6dfcad53de7aa8d97de5b0b07204fbc7de2d7267dc7a7f9bef0c42c9b386cbff->leave($__internal_6dfcad53de7aa8d97de5b0b07204fbc7de2d7267dc7a7f9bef0c42c9b386cbff_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1b4b2bc5b904cc224bcb4ba7af85cc59d5049aa5b1f6c090d5ed61b96289b5b0 = $this->env->getExtension("native_profiler");
        $__internal_1b4b2bc5b904cc224bcb4ba7af85cc59d5049aa5b1f6c090d5ed61b96289b5b0->enter($__internal_1b4b2bc5b904cc224bcb4ba7af85cc59d5049aa5b1f6c090d5ed61b96289b5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "    ";
        
        $__internal_1b4b2bc5b904cc224bcb4ba7af85cc59d5049aa5b1f6c090d5ed61b96289b5b0->leave($__internal_1b4b2bc5b904cc224bcb4ba7af85cc59d5049aa5b1f6c090d5ed61b96289b5b0_prof);

    }

    // line 41
    public function block_right($context, array $blocks = array())
    {
        $__internal_c99673472e2e0d16e844d38d72d2f203d8d69918154e487b5b5bed0a55654f67 = $this->env->getExtension("native_profiler");
        $__internal_c99673472e2e0d16e844d38d72d2f203d8d69918154e487b5b5bed0a55654f67->enter($__internal_c99673472e2e0d16e844d38d72d2f203d8d69918154e487b5b5bed0a55654f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 42
        echo "    ";
        
        $__internal_c99673472e2e0d16e844d38d72d2f203d8d69918154e487b5b5bed0a55654f67->leave($__internal_c99673472e2e0d16e844d38d72d2f203d8d69918154e487b5b5bed0a55654f67_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_45502308c9df229639944218219b122d5c10601be53ae1433a5a02f6891caa6a = $this->env->getExtension("native_profiler");
        $__internal_45502308c9df229639944218219b122d5c10601be53ae1433a5a02f6891caa6a->enter($__internal_45502308c9df229639944218219b122d5c10601be53ae1433a5a02f6891caa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 47
        echo "   
   
    <div id=\"page-title\"></div>
  


    <div class=\"example-box\">
       
        
        <div class=\"example-code\">

            <div class=\"row\">
             
                <h3><i class=\"glyph-icon icon-wrench heading-content\"> Setting Test</i></h3>     
                <br><br>
                <div class=\"col-md-12 center-margin\">
                    <div class=\"row\">

                        <div class=\"col-md-9\">
                            
                            <table class=\"table\" >
                                <thead>
                                    <tr>
                                        <th>ID </th>
                                        <th>Type</th> 
                                        <th>Question</th>
                                        <th>Preview</th>
                                        <th>Edit</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 79
        if (twig_test_empty((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")))) {
            // line 80
            echo "                                        <tr>
                                            <td>

                                                No questions was found !

                                            <td>
                                        </tr>
                                    ";
        } else {
            // line 88
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 89
                echo "                                            ";
                $this->loadTemplate("TSAdminBundle:Tests:question.html.twig", "TSAdminBundle:Tests:SettingTest.html.twig", 89)->display($context);
                // line 90
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                                    ";
        }
        // line 93
        echo "
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Question</th>
                                        <th>Preview</th>

                                        <th>Edit</th>
                                        <th>Remove</th>

                                    </tr>
                                </tfoot>
                            </table>
      <div class=\"col-md-8\">
        ";
        // line 109
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
           ";
        } else {
            // line 111
            echo "        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 116
                echo "            <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 118
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_settingTest", array("pages" => $context["p"], "id" => $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()))), "html", null, true);
                echo "\">
                ";
                // line 120
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
        ";
        }
        // line 128
        echo "    </div>
                        </div>
                          <div class=\"col-md-3\">

                            <div id=\"external-events\" class=\"content-box bg-white drop-shadow-alt\">
                                <h3 class=\"content-box-header\">
                                    <div class=\"glyph-icon icon-separator transparent\">
                                        <i class=\"glyph-icon icon-archive opacity-60 font-red font-size-18\"></i>
                                    </div>
                                    <span class=\"float-left pad0L\">Import Questions</span>
                                    <div class=\"glyph-icon icon-separator transparent float-right\">
                                        <i class=\"glyph-icon icon-caret-right font-size-18\"></i>
                                    </div>
                                </h3>
                                <div class=\"content-box-wrapper\">
                                    <div class=\"btn display-block mrg5B  primary-bg external-event ui-draggable\" >

                                        <a href=\"#ModalImportQuestions\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\"  onclick=\"GetIdTest(";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo ")\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-level-down mrg5R\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Import Questions
                                            </span>
                                        </a>
                                    </div>
                                            

                                </div>
                                                      <div class=\"content-box-wrapper\">
                                                          
                                                          
                                    <div class=\"btn display-block mrg5B  primary-bg external-event ui-draggable\" >

                                        <a href=\"#excelQuestions\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\"  onclick=\"GetIdTest(";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "id", array()), "html", null, true);
        echo ")\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-level-down mrg5R\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Import Excel Questions
                                            </span>
                                        </a>
                                    </div>
                                            

                                </div>
                                            
                                            
                                            
                                            
                            </div>

                        </div>
                        <div class=\"col-md-3 float-right\">

                            <div id=\"external-events\" class=\"content-box bg-white drop-shadow-alt\">
                                <h3 class=\"content-box-header\">
                                    <div class=\"glyph-icon icon-separator transparent\">
                                        <i class=\"glyph-icon icon-plus opacity-60 font-red font-size-18\"></i>
                                    </div>
                                    <span class=\"float-left pad0L\">Create Question </span>
                                    <div class=\"glyph-icon icon-separator transparent float-right\">
                                        <i class=\"glyph-icon icon-caret-right font-size-18\"></i>
                                    </div>
                                </h3>
                                <div class=\"content-box-wrapper\">
                                    <div class=\"btn display-block mrg5B bg-orange external-event ui-draggable\">
                                        <a href=\"#ModalAddQuestion\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\" onclick=\"UpdateTypeQuestion('one')\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-dot-circle-o\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Multiple Choice
                                            </span>
                                        </a>
                                    </div>                    
                                    <div>
                                        <div class=\"btn display-block mrg5B primary-bg external-event ui-draggable\" >
                                            <a href=\"#ModalAddQuestion\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\" onclick=\"UpdateTypeQuestion('many')\">
                                                <span class=\"glyph-icon icon-separator\">
                                                    <i class=\" glyph-icon icon-check-square-o mrg5R\"></i>
                                                </span>
                                                <span class=\"button-content\">
                                                    Checkboxes
                                                </span>
                                            </a>
                                        </div>
                                    </div>


                                    <div class=\"btn display-block mrg5B primary-bg external-event ui-draggable\" >
                                        <a href=\"#ModalAddQuestion\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\" onclick=\"UpdateTypeQuestion('free')\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-pencil-square-o mrg5R\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Essay
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"btn display-block mrg5B primary-bg external-event ui-draggable\" >
                                        <a href=\"#ModalAddQuestion\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\" onclick=\"UpdateTypeQuestion('numeric')\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-arrows-alt mrg5R\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Numeric
                                            </span>
                                        </a>
                                    </div>
                                    <div class=\"btn display-block mrg5B bg-orange external-event ui-draggable\" >
                                        <a href=\"#ModalAddQuestion\" class=\"btn medium primary-bg button-content\" tooltip-button data-toggle=\"modal\" data-placement=\"top\" role=\"button\" title=\"\" onclick=\"UpdateTypeQuestion('menu')\">
                                            <span class=\"glyph-icon icon-separator\">
                                                <i class=\" glyph-icon icon-caret-square-o-down mrg5R\"></i>
                                            </span>
                                            <span class=\"button-content\">
                                                Drop Down
                                            </span>
                                        </a>
                                    </div>




                                </div>
                                
                                <h3 class=\"content-box-header\">
                                    <div class=\"glyph-icon icon-separator transparent\">
                                        <i class=\"glyph-icon icon-info   opacity-60 font-red font-size-18\"></i>
                                    </div>
                                    <span class=\"float-left pad0L\">Test information </span>
                                    <div class=\"glyph-icon icon-separator transparent float-right\">
                                        <i class=\"glyph-icon icon-caret-right font-size-18\"></i>
                                    </div>
                                </h3>
                                 <div class=\"content-box-wrapper\">
                                 <div class=\"infobox info-bg\">
                                    Test Name :  ";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name", array()), "html", null, true);
        echo " 
                                      
                                </div>
                               <div class=\"infobox info-bg \">
                                   Test Type : ";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "type", array()), "html", null, true);
        echo "
                                      
                                </div>
                                    <div class=\"infobox info-bg \">
                                   Test  Mark : ";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "note", array()), "html", null, true);
        echo "
                                      
                                </div>
                                    <div class=\"infobox info-bg \">
                                   N° Automatic Questions : ";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "automatic", array()), "html", null, true);
        echo "
                                      
                                </div>
                                    <div class=\"infobox info-bg \">
                                   Eliminatory Note : ";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "eliminatoryNote", array()), "html", null, true);
        echo "
                                      
                                </div>
                                    <div class=\"infobox info-bg \">
                                   Test Time : ";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "time", array()), "html", null, true);
        echo " minutes 
                                      
                                </div>
                                <div class=\"infobox info-bg \">
                                   Calculation Method : ";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "calculationMethod", array()), "html", null, true);
        echo " 
                                      
                                </div>
                                 
                            </div>
                            </div>
                        </div>
                                             
                      
                    </div>
                </div>

            </div>

        </div>

    </div>




    ";
        // line 310
        $this->loadTemplate("TSAdminBundle:Tests:ModalAddQuestion.html.twig", "TSAdminBundle:Tests:SettingTest.html.twig", 310)->display($context);
        echo "  ";
        $this->loadTemplate("TSAdminBundle:Tests:ModalImportQuestions.html.twig", "TSAdminBundle:Tests:SettingTest.html.twig", 310)->display($context);
        echo "  
    ";
        // line 311
        $this->loadTemplate("TSAdminBundle:Tests:excelQuestions.html.twig", "TSAdminBundle:Tests:SettingTest.html.twig", 311)->display($context);
        // line 312
        echo "



    <script>
        function UpdateTypeQuestion(value)
        {
            document.getElementById('typeQ').value = value;

        }

        function GetIdTest(value)
        {
            document.getElementById('IdTest').value = value;
        }

    </script>    




    ";
        // line 333
        $this->displayParentBlock("content", $context, $blocks);
        echo "

";
        
        $__internal_45502308c9df229639944218219b122d5c10601be53ae1433a5a02f6891caa6a->leave($__internal_45502308c9df229639944218219b122d5c10601be53ae1433a5a02f6891caa6a_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:SettingTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 333,  558 => 312,  556 => 311,  550 => 310,  526 => 289,  519 => 285,  512 => 281,  505 => 277,  498 => 273,  491 => 269,  484 => 265,  378 => 162,  358 => 145,  339 => 128,  332 => 123,  323 => 120,  319 => 119,  316 => 118,  309 => 116,  305 => 115,  299 => 111,  294 => 109,  276 => 93,  273 => 92,  258 => 90,  255 => 89,  237 => 88,  227 => 80,  225 => 79,  191 => 47,  185 => 46,  178 => 42,  172 => 41,  165 => 38,  159 => 37,  149 => 35,  143 => 34,  134 => 31,  128 => 28,  124 => 27,  120 => 26,  116 => 25,  112 => 24,  105 => 20,  100 => 19,  94 => 18,  84 => 14,  79 => 13,  73 => 12,  63 => 9,  57 => 8,  47 => 5,  41 => 4,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\admin\timeLine.html.twig #}*/
/* {# src\TS\AdminBundle\Resources\views\admin\cvs.html.twig #}*/
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|admin|Setting Tests*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/*    */
/*   */
/* */
/*     <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/config.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/contents.css') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/styles.js') }}"></script>*/
/*    */
/* */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* {% block sidebar%}*/
/*     {#    {{ parent() }}#}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/*     {#    {{ parent() }}#}*/
/* {% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*    */
/*    */
/*     <div id="page-title"></div>*/
/*   */
/* */
/* */
/*     <div class="example-box">*/
/*        */
/*         */
/*         <div class="example-code">*/
/* */
/*             <div class="row">*/
/*              */
/*                 <h3><i class="glyph-icon icon-wrench heading-content"> Setting Test</i></h3>     */
/*                 <br><br>*/
/*                 <div class="col-md-12 center-margin">*/
/*                     <div class="row">*/
/* */
/*                         <div class="col-md-9">*/
/*                             */
/*                             <table class="table" >*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>ID </th>*/
/*                                         <th>Type</th> */
/*                                         <th>Question</th>*/
/*                                         <th>Preview</th>*/
/*                                         <th>Edit</th>*/
/*                                         <th>Remove</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                     {% if questions is empty%}*/
/*                                         <tr>*/
/*                                             <td>*/
/* */
/*                                                 No questions was found !*/
/* */
/*                                             <td>*/
/*                                         </tr>*/
/*                                     {% else %}*/
/*                                         {% for question in questions %}*/
/*                                             {% include "TSAdminBundle:Tests:question.html.twig"  %}*/
/* */
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/* */
/*                                 </tbody>*/
/*                                 <tfoot>*/
/*                                     <tr>*/
/*                                         <th>ID</th>*/
/*                                         <th>Type</th>*/
/*                                         <th>Question</th>*/
/*                                         <th>Preview</th>*/
/* */
/*                                         <th>Edit</th>*/
/*                                         <th>Remove</th>*/
/* */
/*                                     </tr>*/
/*                                 </tfoot>*/
/*                             </table>*/
/*       <div class="col-md-8">*/
/*         {% if nombrePages == 0 %} */
/*            {% else %}*/
/*         <a href="javascript:;" class="btn large float-left mrg5R ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-left"></i>*/
/*         </a>*/
/*         <div class="button-group float-left">*/
/*         {% for p in range(1, nombrePages) %}*/
/*             <a {% if p == pages %} */
/*                 class="btn disabled large primary-bg"*/
/*             {% endif %} */
/*                 class="btn large primary-bg" href="{{ path('ts_admin_settingTest', {'pages': p,'id':test.id}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*         {% endif %}*/
/*     </div>*/
/*                         </div>*/
/*                           <div class="col-md-3">*/
/* */
/*                             <div id="external-events" class="content-box bg-white drop-shadow-alt">*/
/*                                 <h3 class="content-box-header">*/
/*                                     <div class="glyph-icon icon-separator transparent">*/
/*                                         <i class="glyph-icon icon-archive opacity-60 font-red font-size-18"></i>*/
/*                                     </div>*/
/*                                     <span class="float-left pad0L">Import Questions</span>*/
/*                                     <div class="glyph-icon icon-separator transparent float-right">*/
/*                                         <i class="glyph-icon icon-caret-right font-size-18"></i>*/
/*                                     </div>*/
/*                                 </h3>*/
/*                                 <div class="content-box-wrapper">*/
/*                                     <div class="btn display-block mrg5B  primary-bg external-event ui-draggable" >*/
/* */
/*                                         <a href="#ModalImportQuestions" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title=""  onclick="GetIdTest({{test.id}})">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-level-down mrg5R"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Import Questions*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                             */
/* */
/*                                 </div>*/
/*                                                       <div class="content-box-wrapper">*/
/*                                                           */
/*                                                           */
/*                                     <div class="btn display-block mrg5B  primary-bg external-event ui-draggable" >*/
/* */
/*                                         <a href="#excelQuestions" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title=""  onclick="GetIdTest({{test.id}})">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-level-down mrg5R"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Import Excel Questions*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                             */
/* */
/*                                 </div>*/
/*                                             */
/*                                             */
/*                                             */
/*                                             */
/*                             </div>*/
/* */
/*                         </div>*/
/*                         <div class="col-md-3 float-right">*/
/* */
/*                             <div id="external-events" class="content-box bg-white drop-shadow-alt">*/
/*                                 <h3 class="content-box-header">*/
/*                                     <div class="glyph-icon icon-separator transparent">*/
/*                                         <i class="glyph-icon icon-plus opacity-60 font-red font-size-18"></i>*/
/*                                     </div>*/
/*                                     <span class="float-left pad0L">Create Question </span>*/
/*                                     <div class="glyph-icon icon-separator transparent float-right">*/
/*                                         <i class="glyph-icon icon-caret-right font-size-18"></i>*/
/*                                     </div>*/
/*                                 </h3>*/
/*                                 <div class="content-box-wrapper">*/
/*                                     <div class="btn display-block mrg5B bg-orange external-event ui-draggable">*/
/*                                         <a href="#ModalAddQuestion" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title="" onclick="UpdateTypeQuestion('one')">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-dot-circle-o"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Multiple Choice*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>                    */
/*                                     <div>*/
/*                                         <div class="btn display-block mrg5B primary-bg external-event ui-draggable" >*/
/*                                             <a href="#ModalAddQuestion" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title="" onclick="UpdateTypeQuestion('many')">*/
/*                                                 <span class="glyph-icon icon-separator">*/
/*                                                     <i class=" glyph-icon icon-check-square-o mrg5R"></i>*/
/*                                                 </span>*/
/*                                                 <span class="button-content">*/
/*                                                     Checkboxes*/
/*                                                 </span>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/* */
/*                                     <div class="btn display-block mrg5B primary-bg external-event ui-draggable" >*/
/*                                         <a href="#ModalAddQuestion" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title="" onclick="UpdateTypeQuestion('free')">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-pencil-square-o mrg5R"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Essay*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="btn display-block mrg5B primary-bg external-event ui-draggable" >*/
/*                                         <a href="#ModalAddQuestion" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title="" onclick="UpdateTypeQuestion('numeric')">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-arrows-alt mrg5R"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Numeric*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>*/
/*                                     <div class="btn display-block mrg5B bg-orange external-event ui-draggable" >*/
/*                                         <a href="#ModalAddQuestion" class="btn medium primary-bg button-content" tooltip-button data-toggle="modal" data-placement="top" role="button" title="" onclick="UpdateTypeQuestion('menu')">*/
/*                                             <span class="glyph-icon icon-separator">*/
/*                                                 <i class=" glyph-icon icon-caret-square-o-down mrg5R"></i>*/
/*                                             </span>*/
/*                                             <span class="button-content">*/
/*                                                 Drop Down*/
/*                                             </span>*/
/*                                         </a>*/
/*                                     </div>*/
/* */
/* */
/* */
/* */
/*                                 </div>*/
/*                                 */
/*                                 <h3 class="content-box-header">*/
/*                                     <div class="glyph-icon icon-separator transparent">*/
/*                                         <i class="glyph-icon icon-info   opacity-60 font-red font-size-18"></i>*/
/*                                     </div>*/
/*                                     <span class="float-left pad0L">Test information </span>*/
/*                                     <div class="glyph-icon icon-separator transparent float-right">*/
/*                                         <i class="glyph-icon icon-caret-right font-size-18"></i>*/
/*                                     </div>*/
/*                                 </h3>*/
/*                                  <div class="content-box-wrapper">*/
/*                                  <div class="infobox info-bg">*/
/*                                     Test Name :  {{test.name}} */
/*                                       */
/*                                 </div>*/
/*                                <div class="infobox info-bg ">*/
/*                                    Test Type : {{test.type}}*/
/*                                       */
/*                                 </div>*/
/*                                     <div class="infobox info-bg ">*/
/*                                    Test  Mark : {{test.note}}*/
/*                                       */
/*                                 </div>*/
/*                                     <div class="infobox info-bg ">*/
/*                                    N° Automatic Questions : {{test.automatic}}*/
/*                                       */
/*                                 </div>*/
/*                                     <div class="infobox info-bg ">*/
/*                                    Eliminatory Note : {{test.eliminatoryNote}}*/
/*                                       */
/*                                 </div>*/
/*                                     <div class="infobox info-bg ">*/
/*                                    Test Time : {{test.time}} minutes */
/*                                       */
/*                                 </div>*/
/*                                 <div class="infobox info-bg ">*/
/*                                    Calculation Method : {{test.calculationMethod}} */
/*                                       */
/*                                 </div>*/
/*                                  */
/*                             </div>*/
/*                             </div>*/
/*                         </div>*/
/*                                              */
/*                       */
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/*     {% include "TSAdminBundle:Tests:ModalAddQuestion.html.twig"  %}  {% include "TSAdminBundle:Tests:ModalImportQuestions.html.twig"  %}  */
/*     {% include "TSAdminBundle:Tests:excelQuestions.html.twig"  %}*/
/* */
/* */
/* */
/* */
/*     <script>*/
/*         function UpdateTypeQuestion(value)*/
/*         {*/
/*             document.getElementById('typeQ').value = value;*/
/* */
/*         }*/
/* */
/*         function GetIdTest(value)*/
/*         {*/
/*             document.getElementById('IdTest').value = value;*/
/*         }*/
/* */
/*     </script>    */
/* */
/* */
/* */
/* */
/*     {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
