<?php

/* TSAdminBundle:Tests:questionsLibrary.html.twig */
class __TwigTemplate_64ad7a7e938c28ea37db1673afb401cd8eb26040bb3ee9f545b7619ac03b523a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Tests:questionsLibrary.html.twig", 1);
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
        $__internal_15c65eedee67fa65801d8f8cbeb0d5e31446bc8a4399747275f43b4557171df6 = $this->env->getExtension("native_profiler");
        $__internal_15c65eedee67fa65801d8f8cbeb0d5e31446bc8a4399747275f43b4557171df6->enter($__internal_15c65eedee67fa65801d8f8cbeb0d5e31446bc8a4399747275f43b4557171df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:questionsLibrary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15c65eedee67fa65801d8f8cbeb0d5e31446bc8a4399747275f43b4557171df6->leave($__internal_15c65eedee67fa65801d8f8cbeb0d5e31446bc8a4399747275f43b4557171df6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e23b8067d2c8a6e4c2a439b87472ba5ba09519204201a2669709a592ccbe6a71 = $this->env->getExtension("native_profiler");
        $__internal_e23b8067d2c8a6e4c2a439b87472ba5ba09519204201a2669709a592ccbe6a71->enter($__internal_e23b8067d2c8a6e4c2a439b87472ba5ba09519204201a2669709a592ccbe6a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|questions
";
        
        $__internal_e23b8067d2c8a6e4c2a439b87472ba5ba09519204201a2669709a592ccbe6a71->leave($__internal_e23b8067d2c8a6e4c2a439b87472ba5ba09519204201a2669709a592ccbe6a71_prof);

    }

    // line 6
    public function block_icons($context, array $blocks = array())
    {
        $__internal_a373e546d4128036c1a21db1ed35c74e7c082e0c194d770054d72a1d6810b5a9 = $this->env->getExtension("native_profiler");
        $__internal_a373e546d4128036c1a21db1ed35c74e7c082e0c194d770054d72a1d6810b5a9->enter($__internal_a373e546d4128036c1a21db1ed35c74e7c082e0c194d770054d72a1d6810b5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 7
        echo "    ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_a373e546d4128036c1a21db1ed35c74e7c082e0c194d770054d72a1d6810b5a9->leave($__internal_a373e546d4128036c1a21db1ed35c74e7c082e0c194d770054d72a1d6810b5a9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84c365f30396f8bde274ef29e5699eddc65efb4743af344bbd3f17f8bc0584c3 = $this->env->getExtension("native_profiler");
        $__internal_84c365f30396f8bde274ef29e5699eddc65efb4743af344bbd3f17f8bc0584c3->enter($__internal_84c365f30396f8bde274ef29e5699eddc65efb4743af344bbd3f17f8bc0584c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" type=\"text/css\" />

";
        
        $__internal_84c365f30396f8bde274ef29e5699eddc65efb4743af344bbd3f17f8bc0584c3->leave($__internal_84c365f30396f8bde274ef29e5699eddc65efb4743af344bbd3f17f8bc0584c3_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_47cbf3a738a2948398f385bc6345c64ab07ec996df93981ff4b35f9158b94a28 = $this->env->getExtension("native_profiler");
        $__internal_47cbf3a738a2948398f385bc6345c64ab07ec996df93981ff4b35f9158b94a28->enter($__internal_47cbf3a738a2948398f385bc6345c64ab07ec996df93981ff4b35f9158b94a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox-compressed.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/thickbox.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup/popup.js"), "html", null, true);
        echo "\"></script>
    
    
    <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/config.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/contents.css"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/ckeditor/styles.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 30
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_47cbf3a738a2948398f385bc6345c64ab07ec996df93981ff4b35f9158b94a28->leave($__internal_47cbf3a738a2948398f385bc6345c64ab07ec996df93981ff4b35f9158b94a28_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_254d6bedca9e0522dd7f4980eec63833e016328706bda2b4d9e77e53bf8308aa = $this->env->getExtension("native_profiler");
        $__internal_254d6bedca9e0522dd7f4980eec63833e016328706bda2b4d9e77e53bf8308aa->enter($__internal_254d6bedca9e0522dd7f4980eec63833e016328706bda2b4d9e77e53bf8308aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 34
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_254d6bedca9e0522dd7f4980eec63833e016328706bda2b4d9e77e53bf8308aa->leave($__internal_254d6bedca9e0522dd7f4980eec63833e016328706bda2b4d9e77e53bf8308aa_prof);

    }

    // line 37
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6cc90182216bdadcff18731ba19c270498023c8c5fc1770f841e47b8a73698c9 = $this->env->getExtension("native_profiler");
        $__internal_6cc90182216bdadcff18731ba19c270498023c8c5fc1770f841e47b8a73698c9->enter($__internal_6cc90182216bdadcff18731ba19c270498023c8c5fc1770f841e47b8a73698c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 38
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_6cc90182216bdadcff18731ba19c270498023c8c5fc1770f841e47b8a73698c9->leave($__internal_6cc90182216bdadcff18731ba19c270498023c8c5fc1770f841e47b8a73698c9_prof);

    }

    // line 41
    public function block_right($context, array $blocks = array())
    {
        $__internal_7d90859c5493f00fc1459ad6a49bed32dc3c9d55a0897779a1facbf806c88add = $this->env->getExtension("native_profiler");
        $__internal_7d90859c5493f00fc1459ad6a49bed32dc3c9d55a0897779a1facbf806c88add->enter($__internal_7d90859c5493f00fc1459ad6a49bed32dc3c9d55a0897779a1facbf806c88add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 42
        echo "    ";
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_7d90859c5493f00fc1459ad6a49bed32dc3c9d55a0897779a1facbf806c88add->leave($__internal_7d90859c5493f00fc1459ad6a49bed32dc3c9d55a0897779a1facbf806c88add_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_3d29466db8cddb6f7e1d2e1a1d04265c3a3a02f0b2a5d281639c9042dfe7447f = $this->env->getExtension("native_profiler");
        $__internal_3d29466db8cddb6f7e1d2e1a1d04265c3a3a02f0b2a5d281639c9042dfe7447f->enter($__internal_3d29466db8cddb6f7e1d2e1a1d04265c3a3a02f0b2a5d281639c9042dfe7447f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "

    <div id=\"page-title\">


        <div id=\"breadcrumb-right\">

            <div class=\"float-right\">
            </div>
        </div>      

    </div>









    <div class=\"example-box\">            
        <div class=\"example-code\">      


            <span> <h3><i class=\"glyph-icon icon-folder heading-content\"> All Questions</i></h3>


                ";
        // line 79
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "RH")) {
            // line 80
            echo "                    <div class=\"dropdown float-right\" >
                        <a href=\"javascript:;\" class=\"btn medium primary-bg\" data-toggle=\"dropdown\">
                            <span class=\"glyph-icon icon-separator\">
                                <i class=\"glyph-icon icon-plus-square\"></i>
                            </span>
                            <span class=\"button-content\">
                                Add Question
                            </span>
                            <span class=\"glyph-icon icon-separator float-right\">
                                <i class=\"glyph-icon font-size-11 icon-chevron-down\"></i>
                            </span>
                        </a>

                        <ul class=\"dropdown-menu float-right\">

                            <li>
                                <a title=\"\" href=\"#ModalAdd\"  id=\"modalAddQuestion\" title=\"Add Question\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\" onclick=\"UpdateTypeQuestion('one')\">

                                    <i class=\"glyph-icon icon-dot-circle-o\"></i>
                                    Multiple Choice
                                </a>
                            </li>
                            <li>
                                <a title=\"\" href=\"#ModalAdd\" id=\"modalAddQuestion\"  title=\"Add Question\"  data-toggle=\"modal\" data-placement=\"top\" role=\"button\" onclick=\"UpdateTypeQuestion('many')\">
                                    <i class=\"glyph-icon icon-check-square-o mrg5R\"></i>
                                    Checkboxes
                                </a>
                            </li>
                            <li>
                                <a title=\"\" href=\"#ModalAdd\" id=\"modalAddQuestion\" title=\"Add Question\"  data-toggle=\"modal\" data-placement=\"top\" role=\"button\" onclick=\"UpdateTypeQuestion('free')\">
                                    <i class=\"glyph-icon icon-pencil-square-o mrg5R\"></i>
                                    Essay
                                </a>
                            </li>
                            <li>
                                <a title=\"\" href=\"#ModalAdd\" id=\"modalAddQuestion\" title=\"Add Question\"  data-toggle=\"modal\" data-placement=\"top\" role=\"button\" onclick=\"UpdateTypeQuestion('numeric')\">
                                    <i class=\"glyph-icon icon-arrows-alt mrg5R\"></i>
                                    Numeric
                                </a>
                            </li>
                            <li>
                                <a title=\"\" href=\"#ModalAdd\" id=\"modalAddQuestion\" title=\"Add Question\"  data-toggle=\"modal\" data-placement=\"top\" role=\"button\" onclick=\"UpdateTypeQuestion('menu')\">
                                    <i class=\"glyph-icon icon-caret-square-o-down mrg5R\"></i>
                                    Drop down
                                </a>
                            </li>
                        </ul>
                    </div>
                ";
        } else {
            // line 129
            echo "
                   
                ";
        }
        // line 132
        echo "

            </span>";
        // line 145
        echo "<div  id=\"ModalAdd\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <form class=\"left-side\" method=\"post\"";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


                    <div class=\"modal-header\">
                        <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                            <i class=\"glyph-icon icon-remove\"></i>
                        </a>

                        <h3 id=\"myModalLabel\">Add Question </h3>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"radio\" class=\"hidden\" id=\"typeQ\"  name=\"type\" value=\"\" checked=\"true\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div id=\"big-box#\" class=\"content-box box-toggle content-box-wrapper\">
                                    <div  class=\"content-box-wrapper\">


                                        <div class=\"form-row\">
                                            <div class=\"form-input col-md-2\">
                                                <label for=\"\">
                                                    ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'label');
        echo "
                                                </label>
                                            </div>
                                            <div class=\"form-input col-md-10 clearfix\" cols=\"80\" id=\"editor1\" name=\"editor1\" rows=\"10\">
                                                ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "introduction", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-row\">
                                            <div class=\"form-input col-md-2\">
                                                <label for=\"\">
                                                    ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'label');
        echo "
                                                    <span class=\"required\" style=\"color:red\">*</span>
                                                </label>
                                            </div>
                                            <div class=\"form-input col-md-10 clearfix\" cols=\"80\" rows=\"10\">
                                                ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget', array("attr" => array("class" => "ckeditor")));
        echo "
                                            </div>
                                        </div>
                                        <div class=\"form-row\">
                                            <div class=\"form-input col-md-2\">
                                                ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'label');
        echo "
                                                <span class=\"required\" style=\"color:red\">*</span>
                                            </div>
                                            <div class=\"form-input col-md-2\">
                                                ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget', array("attr" => array("class" => "spinner-input")));
        echo "
                                            </div>
                                            <div class=\"form-input col-md-1\">
                                                ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), 'label');
        echo "
                                            </div>
                                            <div class=\"form-input col-md-3\">
                                                ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionPicture", array()), "file", array()), 'widget', array("attr" => array("accept" => ".png,.jpeg,.jpg")));
        echo "
                                            </div>
                                            <div class=\"form-input col-md-1\">
                                                tests
                                                <span class=\"required\" style=\"color:red\">*</span>
                                            </div>
                                            <div class=\"form-input col-md-3\" >
                                                <select id=\"testsSelect\" name=\"test\" class=\"chosen-select\">
                                                
                                                    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tests"]) ? $context["tests"] : $this->getContext($context, "tests")));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 207
            echo "                                                        <option  value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "  >
                                                            ";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["test"], "name", array()), "html", null, true);
            echo "
                                                        </option>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                                                </select>
                                            </div>
                                        </div>
                                         <div class=\"form-row\">
                                      <div class=\"form-input col-md-2\">

                                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'label');
        echo "
                                            <span class=\"required\" style=\"color:red\">*</span>

                                        </div>
                                    <div class=\"form-input col-md-10\" >
                                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "questionLevel", array()), 'widget');
        echo "
                                    </div>   
                            </div>
                                        
                                        <div class=\"form-row\">
                                            <div class=\"form-input col-md-2\">
                                                <label for=\"\">
                                                    ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'label');
        echo "
                                                    <span class=\"required\" style=\"color:red\" >*</span>
                                                </label>
                                            </div>
                                            <div class=\"form-input col-md-10\">
                                                ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responses", array()), 'widget');
        echo "
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"modal-footer\">


                        <div class=\"col-md-1 float-right\" >

                            <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                            <input  type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\" btn medium primary-bg\" />
                        </div>

                        <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>



                    </div>
                    ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    ";
        // line 262
        $this->loadTemplate("TSAdminBundle:Tests:formulaireLibrary.html.twig", "TSAdminBundle:Tests:questionsLibrary.html.twig", 262)->display($context);
        // line 263
        echo "                </form>
            </div>";
        // line 272
        echo "<br><br><br>       




            <table class=\"table\">
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
                <tbody >

                    ";
        // line 290
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
            // line 291
            echo "                        ";
            $this->loadTemplate("TSAdminBundle:Tests:questionLibrary.html.twig", "TSAdminBundle:Tests:questionsLibrary.html.twig", 291)->display($context);
            // line 292
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
        // line 293
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


 <div class=\"col-md-12\">
        ";
        // line 312
        if (((isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages")) == 0)) {
            echo " 
           ";
        } else {
            // line 314
            echo "        <a href=\"javascript:;\" class=\"btn large float-left mrg5R ui-state-default\">
            <i class=\"glyph-icon icon-arrow-left\"></i>
        </a>
        <div class=\"button-group float-left\">
        ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePages"]) ? $context["nombrePages"] : $this->getContext($context, "nombrePages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 319
                echo "            <a ";
                if (($context["p"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo " 
                class=\"btn disabled large primary-bg\"
            ";
                }
                // line 321
                echo " 
                class=\"btn large primary-bg\" href=\"";
                // line 322
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ts_admin_questions", array("pages" => $context["p"])), "html", null, true);
                echo "\">
                ";
                // line 323
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
            </a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "        </div>
        <a href=\"javascript:;\" class=\"btn large float-left mrg5L ui-state-default\">
            <i class=\"glyph-icon icon-arrow-right\"></i>
        </a>
        ";
        }
        // line 331
        echo "    </div>
    <br><br><br>
        </div> 
                  
    </div>
                   
      <div class=\"divider mrg25T mrg25B\"></div>
    <span> <h3><i class=\"glyph-icon icon-upload heading-content\"> Upload Questions</i></h3> </span>              
    <form id=\"fileupload\" action=\"";
        // line 339
        echo $this->env->getExtension('routing')->getPath("ts_admin_uploadQuestion");
        echo "\" method=\"POST\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'enctype');
        echo " enctype=\"multipart/form-data\">
        <table class=\"float-right\">
            <tr>
                <td>
                    <div class=\"hidden\"> 
                ";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "file", array()), 'label');
        echo " 
                </div>
                </td>
                <td>
                    ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "file", array()), 'widget', array("attr" => array("accept" => ".csv,.xlsx")));
        echo "
                    
                </td>
                <td>
                    <button type=\"submit\" class=\"btn medium primary-bg start \">
                        <span class=\"button-content\">
                            <i class=\"glyph-icon icon-upload\"></i>
                            Start upload
                        </span>
                    </button>
                </td>
            </tr>
        </table>
     ";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "
    </form>
    ";
        // line 363
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<script>
        function UpdateTypeQuestion(value)
        {
            document.getElementById('typeQ').value = value;

        }

    </script>  


";
        
        $__internal_3d29466db8cddb6f7e1d2e1a1d04265c3a3a02f0b2a5d281639c9042dfe7447f->leave($__internal_3d29466db8cddb6f7e1d2e1a1d04265c3a3a02f0b2a5d281639c9042dfe7447f_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:questionsLibrary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  641 => 363,  636 => 361,  620 => 348,  613 => 344,  603 => 339,  593 => 331,  586 => 326,  577 => 323,  573 => 322,  570 => 321,  563 => 319,  559 => 318,  553 => 314,  548 => 312,  527 => 293,  512 => 292,  509 => 291,  492 => 290,  472 => 272,  469 => 263,  467 => 262,  463 => 261,  434 => 235,  426 => 230,  416 => 223,  408 => 218,  400 => 212,  390 => 208,  385 => 207,  381 => 206,  369 => 197,  363 => 194,  357 => 191,  350 => 187,  342 => 182,  334 => 177,  325 => 171,  318 => 167,  294 => 146,  291 => 145,  287 => 132,  282 => 129,  231 => 80,  229 => 79,  199 => 51,  193 => 50,  183 => 42,  177 => 41,  167 => 38,  161 => 37,  151 => 34,  145 => 33,  136 => 30,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  112 => 21,  108 => 20,  104 => 19,  101 => 18,  95 => 17,  85 => 13,  79 => 11,  73 => 10,  63 => 7,  57 => 6,  47 => 3,  41 => 2,  11 => 1,);
    }
}
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* {% block title %}*/
/*     {{ parent() }}|admin|questions*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <link rel="stylesheet" href="{{ asset('css/popup.css') }}" type="text/css" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox-compressed.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/thickbox.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/popup/popup.js') }}"></script>*/
/*     */
/*     */
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/config.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/contents.css') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('assets/ckeditor/styles.js') }}"></script>*/
/* */
/* */
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
/* */
/* */
/* */
/* */
/* */
/* {%block content%}*/
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
/* */
/* */
/* */
/* */
/* */
/*     <div class="example-box">            */
/*         <div class="example-code">      */
/* */
/* */
/*             <span> <h3><i class="glyph-icon icon-folder heading-content"> All Questions</i></h3>*/
/* */
/* */
/*                 {% if  app.session.get('role') is same as ('RH') %}*/
/*                     <div class="dropdown float-right" >*/
/*                         <a href="javascript:;" class="btn medium primary-bg" data-toggle="dropdown">*/
/*                             <span class="glyph-icon icon-separator">*/
/*                                 <i class="glyph-icon icon-plus-square"></i>*/
/*                             </span>*/
/*                             <span class="button-content">*/
/*                                 Add Question*/
/*                             </span>*/
/*                             <span class="glyph-icon icon-separator float-right">*/
/*                                 <i class="glyph-icon font-size-11 icon-chevron-down"></i>*/
/*                             </span>*/
/*                         </a>*/
/* */
/*                         <ul class="dropdown-menu float-right">*/
/* */
/*                             <li>*/
/*                                 <a title="" href="#ModalAdd"  id="modalAddQuestion" title="Add Question" data-id  data-toggle="modal" data-placement="top" role="button" onclick="UpdateTypeQuestion('one')">*/
/* */
/*                                     <i class="glyph-icon icon-dot-circle-o"></i>*/
/*                                     Multiple Choice*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a title="" href="#ModalAdd" id="modalAddQuestion"  title="Add Question"  data-toggle="modal" data-placement="top" role="button" onclick="UpdateTypeQuestion('many')">*/
/*                                     <i class="glyph-icon icon-check-square-o mrg5R"></i>*/
/*                                     Checkboxes*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a title="" href="#ModalAdd" id="modalAddQuestion" title="Add Question"  data-toggle="modal" data-placement="top" role="button" onclick="UpdateTypeQuestion('free')">*/
/*                                     <i class="glyph-icon icon-pencil-square-o mrg5R"></i>*/
/*                                     Essay*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a title="" href="#ModalAdd" id="modalAddQuestion" title="Add Question"  data-toggle="modal" data-placement="top" role="button" onclick="UpdateTypeQuestion('numeric')">*/
/*                                     <i class="glyph-icon icon-arrows-alt mrg5R"></i>*/
/*                                     Numeric*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a title="" href="#ModalAdd" id="modalAddQuestion" title="Add Question"  data-toggle="modal" data-placement="top" role="button" onclick="UpdateTypeQuestion('menu')">*/
/*                                     <i class="glyph-icon icon-caret-square-o-down mrg5R"></i>*/
/*                                     Drop down*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {%else%}*/
/* */
/*                    */
/*                 {% endif %}*/
/* */
/* */
/*             </span>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             {#--------------------------Modal Add Question--------------------------------------#}*/
/* */
/* */
/* */
/*             <div  id="ModalAdd" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*                 <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/* */
/* */
/*                     <div class="modal-header">*/
/*                         <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                             <i class="glyph-icon icon-remove"></i>*/
/*                         </a>*/
/* */
/*                         <h3 id="myModalLabel">Add Question </h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <input type="radio" class="hidden" id="typeQ"  name="type" value="" checked="true">*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div id="big-box#" class="content-box box-toggle content-box-wrapper">*/
/*                                     <div  class="content-box-wrapper">*/
/* */
/* */
/*                                         <div class="form-row">*/
/*                                             <div class="form-input col-md-2">*/
/*                                                 <label for="">*/
/*                                                     {{ form_label(form.introduction) }}*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-10 clearfix" cols="80" id="editor1" name="editor1" rows="10">*/
/*                                                 {{ form_widget(form.introduction, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-row">*/
/*                                             <div class="form-input col-md-2">*/
/*                                                 <label for="">*/
/*                                                     {{ form_label(form.text) }}*/
/*                                                     <span class="required" style="color:red">*</span>*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-10 clearfix" cols="80" rows="10">*/
/*                                                 {{ form_widget(form.text, { 'attr': {'class': 'ckeditor'} }) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="form-row">*/
/*                                             <div class="form-input col-md-2">*/
/*                                                 {{ form_label(form.note) }}*/
/*                                                 <span class="required" style="color:red">*</span>*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-2">*/
/*                                                 {{ form_widget(form.note,{ 'attr': {'class': 'spinner-input'} }) }}*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-1">*/
/*                                                 {{ form_label(form.questionPicture) }}*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-3">*/
/*                                                 {{ form_widget(form.questionPicture.file,{'attr':{'accept':'.png,.jpeg,.jpg'}}) }}*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-1">*/
/*                                                 tests*/
/*                                                 <span class="required" style="color:red">*</span>*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-3" >*/
/*                                                 <select id="testsSelect" name="test" class="chosen-select">*/
/*                                                 */
/*                                                     {% for test in tests%}*/
/*                                                         <option  value={{test.name}}  >*/
/*                                                             {{test.name}}*/
/*                                                         </option>*/
/* */
/*                                                     {% endfor %}*/
/*                                                 </select>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                          <div class="form-row">*/
/*                                       <div class="form-input col-md-2">*/
/* */
/*                                             {{ form_label(form.questionLevel) }}*/
/*                                             <span class="required" style="color:red">*</span>*/
/* */
/*                                         </div>*/
/*                                     <div class="form-input col-md-10" >*/
/*                                         {{ form_widget(form.questionLevel) }}*/
/*                                     </div>   */
/*                             </div>*/
/*                                         */
/*                                         <div class="form-row">*/
/*                                             <div class="form-input col-md-2">*/
/*                                                 <label for="">*/
/*                                                     {{ form_label(form.responses) }}*/
/*                                                     <span class="required" style="color:red" >*</span>*/
/*                                                 </label>*/
/*                                             </div>*/
/*                                             <div class="form-input col-md-10">*/
/*                                                 {{ form_widget(form.responses) }}*/
/*                                             </div>*/
/*                                         </div>*/
/* */
/* */
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     <div class="modal-footer">*/
/* */
/* */
/*                         <div class="col-md-1 float-right" >*/
/* */
/*                             <input type="hidden" name="superhidden" id="superhidden">*/
/*                             <input  type="submit" value="ADD" name="submitAction" class=" btn medium primary-bg" />*/
/*                         </div>*/
/* */
/*                         <button type="button" data-dismiss="modal" aria-hidden="true" class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/* */
/* */
/* */
/*                     </div>*/
/*                     {{ form_rest(form) }}*/
/*                     {% include "TSAdminBundle:Tests:formulaireLibrary.html.twig"  %}*/
/*                 </form>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             {#---------------------------------fin Modal ---------------------------------#}       */
/*             <br><br><br>       */
/* */
/* */
/* */
/* */
/*             <table class="table">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>ID </th>*/
/*                         <th>Type</th> */
/*                         <th>Question</th>*/
/*                         <th>Preview</th>*/
/*                         <th>Edit</th>*/
/*                         <th>Remove</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody >*/
/* */
/*                     {% for question in questions %}*/
/*                         {% include "TSAdminBundle:Tests:questionLibrary.html.twig"  %}*/
/* */
/*                     {% endfor %}  */
/* */
/*                 </tbody>*/
/*                 <tfoot>*/
/*                     <tr>*/
/*                         <th>ID</th>*/
/*                         <th>Type</th>*/
/*                         <th>Question</th>*/
/*                         <th>Preview</th>*/
/* */
/*                         <th>Edit</th>*/
/*                         <th>Remove</th>*/
/* */
/*                     </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/* */
/* */
/*  <div class="col-md-12">*/
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
/*                 class="btn large primary-bg" href="{{ path('ts_admin_questions', {'pages': p}) }}">*/
/*                 {{p}}*/
/*             </a>*/
/*       {% endfor %}*/
/*         </div>*/
/*         <a href="javascript:;" class="btn large float-left mrg5L ui-state-default">*/
/*             <i class="glyph-icon icon-arrow-right"></i>*/
/*         </a>*/
/*         {% endif %}*/
/*     </div>*/
/*     <br><br><br>*/
/*         </div> */
/*                   */
/*     </div>*/
/*                    */
/*       <div class="divider mrg25T mrg25B"></div>*/
/*     <span> <h3><i class="glyph-icon icon-upload heading-content"> Upload Questions</i></h3> </span>              */
/*     <form id="fileupload" action="{{ path('ts_admin_uploadQuestion')}}" method="POST"{{ form_enctype(form2) }} enctype="multipart/form-data">*/
/*         <table class="float-right">*/
/*             <tr>*/
/*                 <td>*/
/*                     <div class="hidden"> */
/*                 {{ form_label(form2.file) }} */
/*                 </div>*/
/*                 </td>*/
/*                 <td>*/
/*                     {{ form_widget(form2.file,{'attr':{'accept':'.csv,.xlsx'}}) }}*/
/*                     */
/*                 </td>*/
/*                 <td>*/
/*                     <button type="submit" class="btn medium primary-bg start ">*/
/*                         <span class="button-content">*/
/*                             <i class="glyph-icon icon-upload"></i>*/
/*                             Start upload*/
/*                         </span>*/
/*                     </button>*/
/*                 </td>*/
/*             </tr>*/
/*         </table>*/
/*      {{ form_rest(form2) }}*/
/*     </form>*/
/*     {{ parent() }}*/
/* <script>*/
/*         function UpdateTypeQuestion(value)*/
/*         {*/
/*             document.getElementById('typeQ').value = value;*/
/* */
/*         }*/
/* */
/*     </script>  */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */