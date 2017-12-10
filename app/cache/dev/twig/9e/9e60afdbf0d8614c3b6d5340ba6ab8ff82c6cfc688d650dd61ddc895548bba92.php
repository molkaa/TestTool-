<?php

/* TSSRecBundle:SRec:research.html.twig */
class __TwigTemplate_8a989911782ec1e1ee80d83946058e2fabcc01a951493b49f62bf76392b0748a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1629de1b91273c4d02269533fd4d5bf2ae46c274772e32a02bc2e5636b009d26 = $this->env->getExtension("native_profiler");
        $__internal_1629de1b91273c4d02269533fd4d5bf2ae46c274772e32a02bc2e5636b009d26->enter($__internal_1629de1b91273c4d02269533fd4d5bf2ae46c274772e32a02bc2e5636b009d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSSRecBundle:SRec:research.html.twig"));

        // line 2
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/evaluator/research.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/SRec/research.css"), "html", null, true);
        echo "\" />


<form id=\"formIndex\" method=\"post\">
    <section class=\"ac-container\">
    ";
        // line 9
        $this->displayBlock('field_label', $context, $blocks);
        // line 72
        echo "        <input type=\"submit\" class=\"btn btn-primary\" />
    </section>
</form>

";
        
        $__internal_1629de1b91273c4d02269533fd4d5bf2ae46c274772e32a02bc2e5636b009d26->leave($__internal_1629de1b91273c4d02269533fd4d5bf2ae46c274772e32a02bc2e5636b009d26_prof);

    }

    // line 9
    public function block_field_label($context, array $blocks = array())
    {
        $__internal_f13a1d4e3f8adef87cc29a9b75ad3803c88b7b8b5868f37f2e3d83432df54dd7 = $this->env->getExtension("native_profiler");
        $__internal_f13a1d4e3f8adef87cc29a9b75ad3803c88b7b8b5868f37f2e3d83432df54dd7->enter($__internal_f13a1d4e3f8adef87cc29a9b75ad3803c88b7b8b5868f37f2e3d83432df54dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_label"));

        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"research\">
            <div>
                <label > First name </label>
                <input type=\"text\"  name=\"fName\" style=\"display: inline-block;margin-left: 24px;\">
            </div>
            <div>
                <label > Last name </label>
                <input type=\"text\"  name=\"lName\" style=\"display: inline-block;margin-left: 13px;\">
            </div>
            <div>
                <label > Email </label>
                <input type=\"text\"  name=\"email\" style=\"display: inline-block;margin-left: 51px;\">
            </div>
            <div>
                <label > Establishment </label>
                <select  name=\"establishment\" style=\"display: inline-block;margin-left: 5px;\">
                    <option ></option>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["establishment"]) ? $context["establishment"] : $this->getContext($context, "establishment")));
        foreach ($context['_seq'] as $context["_key"] => $context["estab"]) {
            // line 29
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["estab"], "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $context["estab"], "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                </select>
            </div>
            <div>
                <label > Candidature </label>
                <select  name=\"candidature\" style=\"display: inline-block;margin-left: 3px;\">
                    <option ></option>
                    <option value='training'>Request for training</option>
                    <option value='job'>Request for job</option>
                </select>
            </div>
            <div>
                <label > Technologies </label>
                <select  name=\"technologies[]\" multiple=\"\" style=\"display: inline-block;margin-left: 6px;height: 64px;\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["technologies"]) ? $context["technologies"] : $this->getContext($context, "technologies")));
        foreach ($context['_seq'] as $context["_key"] => $context["technologie"]) {
            // line 45
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["technologie"], "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $context["technologie"], "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
            </div>
            <div>
                <label > Diploma </label>
                <select  name=\"diploma\" style=\"display: inline-block;margin-left: 36px;\">
                    <option ></option>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["diploma"]) ? $context["diploma"] : $this->getContext($context, "diploma")));
        foreach ($context['_seq'] as $context["_key"] => $context["dip"]) {
            // line 54
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["dip"], "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, $context["dip"], "html", null, true);
            echo " </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </select>
            </div>

            <div>
                <label > Experience </label>
                <select name=\"experience\" style=\"display: inline-block;margin-left: 8px;\">
                    <option ></option>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exp"]) ? $context["exp"] : $this->getContext($context, "exp")));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 64
            echo "                    <option value=";
            echo twig_escape_filter($this->env, $context["experience"], "html", null, true);
            echo "> >= ";
            echo twig_escape_filter($this->env, $context["experience"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </select>
            </div>
        </div>

     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 71
        echo "    ";
        
        $__internal_f13a1d4e3f8adef87cc29a9b75ad3803c88b7b8b5868f37f2e3d83432df54dd7->leave($__internal_f13a1d4e3f8adef87cc29a9b75ad3803c88b7b8b5868f37f2e3d83432df54dd7_prof);

    }

    public function getTemplateName()
    {
        return "TSSRecBundle:SRec:research.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 71,  171 => 66,  160 => 64,  156 => 63,  147 => 56,  136 => 54,  132 => 53,  124 => 47,  113 => 45,  109 => 44,  94 => 31,  83 => 29,  79 => 28,  60 => 11,  57 => 10,  51 => 9,  40 => 72,  38 => 9,  30 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# src/TS/SRecBundle/Resources/views/SRec/research.html.twig #}*/
/* */
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/evaluator/research.css')}}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/SRec/research.css')}}" />*/
/* */
/* */
/* <form id="formIndex" method="post">*/
/*     <section class="ac-container">*/
/*     {% block field_label %}*/
/*     {% spaceless %}*/
/*         <div class="research">*/
/*             <div>*/
/*                 <label > First name </label>*/
/*                 <input type="text"  name="fName" style="display: inline-block;margin-left: 24px;">*/
/*             </div>*/
/*             <div>*/
/*                 <label > Last name </label>*/
/*                 <input type="text"  name="lName" style="display: inline-block;margin-left: 13px;">*/
/*             </div>*/
/*             <div>*/
/*                 <label > Email </label>*/
/*                 <input type="text"  name="email" style="display: inline-block;margin-left: 51px;">*/
/*             </div>*/
/*             <div>*/
/*                 <label > Establishment </label>*/
/*                 <select  name="establishment" style="display: inline-block;margin-left: 5px;">*/
/*                     <option ></option>*/
/*                     {% for estab in establishment %}*/
/*                     <option value={{estab}}> {{estab}} </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*             <div>*/
/*                 <label > Candidature </label>*/
/*                 <select  name="candidature" style="display: inline-block;margin-left: 3px;">*/
/*                     <option ></option>*/
/*                     <option value='training'>Request for training</option>*/
/*                     <option value='job'>Request for job</option>*/
/*                 </select>*/
/*             </div>*/
/*             <div>*/
/*                 <label > Technologies </label>*/
/*                 <select  name="technologies[]" multiple="" style="display: inline-block;margin-left: 6px;height: 64px;">*/
/*                     {% for technologie in technologies %}*/
/*                     <option value={{technologie}}> {{technologie}} </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*             <div>*/
/*                 <label > Diploma </label>*/
/*                 <select  name="diploma" style="display: inline-block;margin-left: 36px;">*/
/*                     <option ></option>*/
/*                     {% for dip in diploma %}*/
/*                     <option value={{dip}}> {{dip}} </option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 <label > Experience </label>*/
/*                 <select name="experience" style="display: inline-block;margin-left: 8px;">*/
/*                     <option ></option>*/
/*                     {% for experience in exp %}*/
/*                     <option value={{experience}}> >= {{experience}}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/* */
/*      {% endspaceless %}*/
/*     {% endblock field_label %}*/
/*         <input type="submit" class="btn btn-primary" />*/
/*     </section>*/
/* </form>*/
/* */
/* */
