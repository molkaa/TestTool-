<?php

/* TSAdminBundle:Users:addRH.html.twig */
class __TwigTemplate_be9e5ebed76810773e659ede8898347eba6bcc27e3fceb155311abdd1dc4844e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TSAdminBundle::layout.html.twig", "TSAdminBundle:Users:addRH.html.twig", 3);
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
        $__internal_795bdd98f2825a7e30ccb01e3ed2f8abf8fe6a73ed80508a6214c711d16870ad = $this->env->getExtension("native_profiler");
        $__internal_795bdd98f2825a7e30ccb01e3ed2f8abf8fe6a73ed80508a6214c711d16870ad->enter($__internal_795bdd98f2825a7e30ccb01e3ed2f8abf8fe6a73ed80508a6214c711d16870ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Users:addRH.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_795bdd98f2825a7e30ccb01e3ed2f8abf8fe6a73ed80508a6214c711d16870ad->leave($__internal_795bdd98f2825a7e30ccb01e3ed2f8abf8fe6a73ed80508a6214c711d16870ad_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_aab9d05e8b75b7ec844c64b0cdd8b537be0b7af7ef0693d37067a0912a00cb98 = $this->env->getExtension("native_profiler");
        $__internal_aab9d05e8b75b7ec844c64b0cdd8b537be0b7af7ef0693d37067a0912a00cb98->enter($__internal_aab9d05e8b75b7ec844c64b0cdd8b537be0b7af7ef0693d37067a0912a00cb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "|admin|addUser
";
        
        $__internal_aab9d05e8b75b7ec844c64b0cdd8b537be0b7af7ef0693d37067a0912a00cb98->leave($__internal_aab9d05e8b75b7ec844c64b0cdd8b537be0b7af7ef0693d37067a0912a00cb98_prof);

    }

    // line 10
    public function block_icons($context, array $blocks = array())
    {
        $__internal_afc87fd1f91972ff27af36bd64f4fcee509cb794efd9e0e54e71577f1b936af5 = $this->env->getExtension("native_profiler");
        $__internal_afc87fd1f91972ff27af36bd64f4fcee509cb794efd9e0e54e71577f1b936af5->enter($__internal_afc87fd1f91972ff27af36bd64f4fcee509cb794efd9e0e54e71577f1b936af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icons"));

        // line 11
        echo "  ";
        $this->displayParentBlock("icons", $context, $blocks);
        echo "
";
        
        $__internal_afc87fd1f91972ff27af36bd64f4fcee509cb794efd9e0e54e71577f1b936af5->leave($__internal_afc87fd1f91972ff27af36bd64f4fcee509cb794efd9e0e54e71577f1b936af5_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4852a0e4badd7cd832f1bd183e5269db42cde30f926ca1346a3d9240b07c3437 = $this->env->getExtension("native_profiler");
        $__internal_4852a0e4badd7cd832f1bd183e5269db42cde30f926ca1346a3d9240b07c3437->enter($__internal_4852a0e4badd7cd832f1bd183e5269db42cde30f926ca1346a3d9240b07c3437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_4852a0e4badd7cd832f1bd183e5269db42cde30f926ca1346a3d9240b07c3437->leave($__internal_4852a0e4badd7cd832f1bd183e5269db42cde30f926ca1346a3d9240b07c3437_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d63a1dc826360ff63c56e0b88078bc2ca14ee2a0e7ae016d86cee636efc764fc = $this->env->getExtension("native_profiler");
        $__internal_d63a1dc826360ff63c56e0b88078bc2ca14ee2a0e7ae016d86cee636efc764fc->enter($__internal_d63a1dc826360ff63c56e0b88078bc2ca14ee2a0e7ae016d86cee636efc764fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d63a1dc826360ff63c56e0b88078bc2ca14ee2a0e7ae016d86cee636efc764fc->leave($__internal_d63a1dc826360ff63c56e0b88078bc2ca14ee2a0e7ae016d86cee636efc764fc_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_bba324ab2028593a993066ad3057454123a54ec6315ab4c2e6c6045bcb07f452 = $this->env->getExtension("native_profiler");
        $__internal_bba324ab2028593a993066ad3057454123a54ec6315ab4c2e6c6045bcb07f452->enter($__internal_bba324ab2028593a993066ad3057454123a54ec6315ab4c2e6c6045bcb07f452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "  ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_bba324ab2028593a993066ad3057454123a54ec6315ab4c2e6c6045bcb07f452->leave($__internal_bba324ab2028593a993066ad3057454123a54ec6315ab4c2e6c6045bcb07f452_prof);

    }

    // line 26
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9f64e31bcd1a2fc440d13dc4f0260e5e645cb69833268ca3e399a60ece437eb3 = $this->env->getExtension("native_profiler");
        $__internal_9f64e31bcd1a2fc440d13dc4f0260e5e645cb69833268ca3e399a60ece437eb3->enter($__internal_9f64e31bcd1a2fc440d13dc4f0260e5e645cb69833268ca3e399a60ece437eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
";
        
        $__internal_9f64e31bcd1a2fc440d13dc4f0260e5e645cb69833268ca3e399a60ece437eb3->leave($__internal_9f64e31bcd1a2fc440d13dc4f0260e5e645cb69833268ca3e399a60ece437eb3_prof);

    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        $__internal_1256e226aa3a395fbaf752b5c085fd61991da7a1eba94d2aeda607e0f5a38b11 = $this->env->getExtension("native_profiler");
        $__internal_1256e226aa3a395fbaf752b5c085fd61991da7a1eba94d2aeda607e0f5a38b11->enter($__internal_1256e226aa3a395fbaf752b5c085fd61991da7a1eba94d2aeda607e0f5a38b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        // line 31
        $this->displayParentBlock("right", $context, $blocks);
        echo "
";
        
        $__internal_1256e226aa3a395fbaf752b5c085fd61991da7a1eba94d2aeda607e0f5a38b11->leave($__internal_1256e226aa3a395fbaf752b5c085fd61991da7a1eba94d2aeda607e0f5a38b11_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_58bcf97fcb6a4ce0bc7ba3f9e54b84a7bbf62ff7e632eee3d1042512a268e2b7 = $this->env->getExtension("native_profiler");
        $__internal_58bcf97fcb6a4ce0bc7ba3f9e54b84a7bbf62ff7e632eee3d1042512a268e2b7->enter($__internal_58bcf97fcb6a4ce0bc7ba3f9e54b84a7bbf62ff7e632eee3d1042512a268e2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo " <div id=\"page-title\"></div>
<div class=\"row\">
<div class=\"col-md-12\">      

           
                <a class=\"btn medium primary-bg float-right\"   href=\"#ModalAddRH\"   title=\"Add RH\" data-id  data-toggle=\"modal\" data-placement=\"top\" role=\"button\">
                    <span class=\"glyph-icon icon-separator\">
                        <i class=\"glyph-icon icon-plus-square\"></i>
                    </span>
                    <span class=\"button-content\">
                        Add RH
                    </span>
                </a>
           


        </div>
    <br><br>

<div class=\"col-md-12\">
    <div class=\"profile-box profile-box-alt content-box\">
        <div class=\"content-box-header clearfix primary-bg\">
            <div class=\"user-details\">

            </div>
        </div>
        <table class=\"table\">
            <tbody>
                <tr>
                    ";
        // line 64
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "role"), "method") === "admin")) {
            echo "    

                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 67
                echo "                            ";
                $this->loadTemplate("TSAdminBundle:Users:showUserSA.html.twig", "TSAdminBundle:Users:addRH.html.twig", 67)->display($context);
                // line 68
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
                    ";
        } else {
            // line 71
            echo "
                        ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 73
                echo "                            ";
                $this->loadTemplate("TSAdminBundle:Users:showUser.html.twig", "TSAdminBundle:Users:addRH.html.twig", 73)->display($context);
                // line 74
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
                    ";
        }
        // line 77
        echo "                </tr>

            </tbody>
        </table>
    </div>
</div>
</div>
 ";
        // line 84
        $this->loadTemplate("TSAdminBundle:Users:ModalAddRH.html.twig", "TSAdminBundle:Users:addRH.html.twig", 84)->display($context);
        echo " 
 ";
        // line 85
        $this->loadTemplate("TSAdminBundle:Notification:GrowlNotif.html.twig", "TSAdminBundle:Users:addRH.html.twig", 85)->display($context);
        // line 86
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_58bcf97fcb6a4ce0bc7ba3f9e54b84a7bbf62ff7e632eee3d1042512a268e2b7->leave($__internal_58bcf97fcb6a4ce0bc7ba3f9e54b84a7bbf62ff7e632eee3d1042512a268e2b7_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Users:addRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 86,  285 => 85,  281 => 84,  272 => 77,  268 => 75,  254 => 74,  251 => 73,  234 => 72,  231 => 71,  227 => 69,  213 => 68,  210 => 67,  193 => 66,  188 => 64,  157 => 35,  151 => 34,  142 => 31,  136 => 30,  127 => 27,  121 => 26,  111 => 23,  105 => 22,  95 => 19,  89 => 18,  79 => 15,  73 => 14,  63 => 11,  57 => 10,  47 => 7,  41 => 6,  11 => 3,);
    }
}
/* {# src\TS\AdminBundle\Resources\views\users\addRH.html.twig #}*/
/* */
/* {% extends "TSAdminBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}*/
/*  {{ parent() }}|admin|addUser*/
/* {% endblock %}*/
/* */
/* {% block icons %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block header %}*/
/*   {{ parent() }}*/
/* {% endblock %}*/
/* */
/*  {% block sidebar%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block right%}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*  <div id="page-title"></div>*/
/* <div class="row">*/
/* <div class="col-md-12">      */
/* */
/*            */
/*                 <a class="btn medium primary-bg float-right"   href="#ModalAddRH"   title="Add RH" data-id  data-toggle="modal" data-placement="top" role="button">*/
/*                     <span class="glyph-icon icon-separator">*/
/*                         <i class="glyph-icon icon-plus-square"></i>*/
/*                     </span>*/
/*                     <span class="button-content">*/
/*                         Add RH*/
/*                     </span>*/
/*                 </a>*/
/*            */
/* */
/* */
/*         </div>*/
/*     <br><br>*/
/* */
/* <div class="col-md-12">*/
/*     <div class="profile-box profile-box-alt content-box">*/
/*         <div class="content-box-header clearfix primary-bg">*/
/*             <div class="user-details">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <table class="table">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     {% if  app.session.get('role') is same as ('admin') %}    */
/* */
/*                         {% for user in users %}*/
/*                             {% include "TSAdminBundle:Users:showUserSA.html.twig" %}*/
/*                         {% endfor %}*/
/* */
/*                     {% else %}*/
/* */
/*                         {% for user in users %}*/
/*                             {% include "TSAdminBundle:Users:showUser.html.twig" %}*/
/*                         {% endfor %}*/
/* */
/*                     {% endif %}*/
/*                 </tr>*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/*  {% include "TSAdminBundle:Users:ModalAddRH.html.twig"  %} */
/*  {% include "TSAdminBundle:Notification:GrowlNotif.html.twig" %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
