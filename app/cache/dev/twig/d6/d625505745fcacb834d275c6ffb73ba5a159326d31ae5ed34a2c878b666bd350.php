<?php

/* @TSAdmin/Users/ModalAddSA.html.twig */
class __TwigTemplate_bc36dc25ebe6ac18ba38ac77ca039df3c3c7c4e5ce9c60301ad4ae50896cd324 extends Twig_Template
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
        $__internal_67856b740e7142ae138a28510fb24ff93ab70942a19c8775eda680e4a03b75b1 = $this->env->getExtension("native_profiler");
        $__internal_67856b740e7142ae138a28510fb24ff93ab70942a19c8775eda680e4a03b75b1->enter($__internal_67856b740e7142ae138a28510fb24ff93ab70942a19c8775eda680e4a03b75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Users/ModalAddSA.html.twig"));

        // line 2
        echo "<div  id=\"ModalAddSA\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <form class=\"left-side\" method=\"post\"";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">


        <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Add Super Admin </h3>
        </div>
        <div class=\"modal-body\">
            ";
        // line 15
        echo "
            <div class=\"form-row\">
                <div class=\"form-input col-md-2\">
                    <label for=\"\">
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    </label>
                </div>
                <div class=\"form-input col-md-8\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                </div>
            </div>

        </div>
        <div class=\"modal-footer\">
            <div class=\"col-md-1 float-right\">
                <input type=\"hidden\" name=\"superhidden\" id=\"superhidden\">
                <input  type=\"submit\" value=\"ADD\" name=\"submitAction\" class=\" btn medium primary-bg\" />
            </div>

            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width: 7%\"class=\" btn medium primary-bg\" data-toggle=\"button\">Close</button>
        </div>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
</div>





";
        
        $__internal_67856b740e7142ae138a28510fb24ff93ab70942a19c8775eda680e4a03b75b1->leave($__internal_67856b740e7142ae138a28510fb24ff93ab70942a19c8775eda680e4a03b75b1_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Users/ModalAddSA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 36,  52 => 23,  45 => 19,  39 => 15,  25 => 3,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Users/addUsers.html.twig #}*/
/* <div  id="ModalAddSA" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*     <form class="left-side" method="post"{{ form_enctype(form) }}>*/
/* */
/* */
/*         <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Add Super Admin </h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             {# src/TS/AdminBundle/Resources/views/Users/addUsers.html.twig #}*/
/* */
/*             <div class="form-row">*/
/*                 <div class="form-input col-md-2">*/
/*                     <label for="">*/
/*                         {{ form_label(form.username) }}*/
/*                     </label>*/
/*                 </div>*/
/*                 <div class="form-input col-md-8">*/
/*                     {{ form_widget(form.username) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/*             <div class="col-md-1 float-right">*/
/*                 <input type="hidden" name="superhidden" id="superhidden">*/
/*                 <input  type="submit" value="ADD" name="submitAction" class=" btn medium primary-bg" />*/
/*             </div>*/
/* */
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width: 7%"class=" btn medium primary-bg" data-toggle="button">Close</button>*/
/*         </div>*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
