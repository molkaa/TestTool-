<?php

/* TSAdminBundle:Users:removeUser.html.twig */
class __TwigTemplate_22403f4eee18a0c71059e60035ec342a62b306e720192d89f0ef4240440884a2 extends Twig_Template
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
        $__internal_ec74a57c24f437c2cc4b2e7ef2d833e0b8b0582163f6a000642fd6de2ef54dc0 = $this->env->getExtension("native_profiler");
        $__internal_ec74a57c24f437c2cc4b2e7ef2d833e0b8b0582163f6a000642fd6de2ef54dc0->enter($__internal_ec74a57c24f437c2cc4b2e7ef2d833e0b8b0582163f6a000642fd6de2ef54dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:removeUser.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"col-md-11 center-margin\" style=\"margin-right: 0;\">
        <div class=\"content-box box-toggle\">
            <h3 style=\"height: 20px;\" class=\"content-box-header ui-state-default\">
                <span class=\"float-left\">Remove this user</span>
                <i id=\"remove-user";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" onclick=\"changeRemoveUser(this);\" class=\"glyph-icon icon-clock-os float-right\" style=\"margin-right: 10px;color:#d60000;\"></i>
            </h3>
            <div  class=\"content-box-wrapper\">

                <form class=\"col-md-10 center-margin\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ts_admin_removeUser");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&role=";
        echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">                
";
        // line 14
        echo "                    <p>
                        Are you sure you want to remove this user ?
                    </p>
";
        // line 18
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <div class=\"form-row\">
                        <div class=\"divider\" ></div>
                        <div class=\"col-md-2 col-md-offset-5\">
                            <input type=\"submit\" value=\"Remove\" style=\"background: #d60000\"class=\"btn medium primary-bg radius-all-4\" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function changeRemoveUser(_this)
    {
        var div = document.getElementById(_this.id + '#');

        if (div.style.display === \"none\") {
            div.style.display = \"block\";
        }
        else {
            div.style.display = \"none\";
        }
    }
</script>
";
        
        $__internal_ec74a57c24f437c2cc4b2e7ef2d833e0b8b0582163f6a000642fd6de2ef54dc0->leave($__internal_ec74a57c24f437c2cc4b2e7ef2d833e0b8b0582163f6a000642fd6de2ef54dc0_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:removeUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  47 => 14,  37 => 12,  30 => 8,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Users/removeUser.html.twig #}*/
/* */
/* <div class="row">*/
/*     <div class="col-md-11 center-margin" style="margin-right: 0;">*/
/*         <div class="content-box box-toggle">*/
/*             <h3 style="height: 20px;" class="content-box-header ui-state-default">*/
/*                 <span class="float-left">Remove this user</span>*/
/*                 <i id="remove-user{{id}}" onclick="changeRemoveUser(this);" class="glyph-icon icon-clock-os float-right" style="margin-right: 10px;color:#d60000;"></i>*/
/*             </h3>*/
/*             <div  class="content-box-wrapper">*/
/* */
/*                 <form class="col-md-10 center-margin" action="{{path('ts_admin_removeUser')}}?id={{id}}&role={{role}}"  method="post"{{ form_enctype(form) }}>                */
/* {#                    //*********************************************#}*/
/*                     <p>*/
/*                         Are you sure you want to remove this user ?*/
/*                     </p>*/
/* {#                    //*********************************************#}*/
/*                     {{ form_rest(form) }}*/
/*                     <div class="form-row">*/
/*                         <div class="divider" ></div>*/
/*                         <div class="col-md-2 col-md-offset-5">*/
/*                             <input type="submit" value="Remove" style="background: #d60000"class="btn medium primary-bg radius-all-4" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     function changeRemoveUser(_this)*/
/*     {*/
/*         var div = document.getElementById(_this.id + '#');*/
/* */
/*         if (div.style.display === "none") {*/
/*             div.style.display = "block";*/
/*         }*/
/*         else {*/
/*             div.style.display = "none";*/
/*         }*/
/*     }*/
/* </script>*/
/* */
