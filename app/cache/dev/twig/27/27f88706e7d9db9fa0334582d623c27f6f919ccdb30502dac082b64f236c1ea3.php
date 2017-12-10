<?php

/* @TSAdmin/Tests/removequestionLibrary.html.twig */
class __TwigTemplate_7ea692a3c58c16484e371348ee2f3508cc4f74ca662239afc25e82394ee366b0 extends Twig_Template
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
        $__internal_bb8cc40c46625696cbd5f543b9824791c7dbc44e7a7f1f81274999a402dfae09 = $this->env->getExtension("native_profiler");
        $__internal_bb8cc40c46625696cbd5f543b9824791c7dbc44e7a7f1f81274999a402dfae09->enter($__internal_bb8cc40c46625696cbd5f543b9824791c7dbc44e7a7f1f81274999a402dfae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/removequestionLibrary.html.twig"));

        // line 1
        echo " <form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_removeQuestionLibrary");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"  method=\"post\"";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">                
  <div class=\"modal-header\">
            <a href=\"#\" class=\"float-right\" data-placement=\"left\" title=\"close\" data-dismiss=\"modal\">
                <i class=\"glyph-icon icon-remove\"></i>
            </a>

            <h3 id=\"myModalLabel\">Remove Question : </h3>
        </div>
        <div class=\"modal-body\">
            
            
            
  <div class=\"row\">
    <div class=\"col-md-12\">
      

           
                
                

               
        <h4 style=\"color: red\">Are you sure you want to remove this question ?</h4>
                

          
                  
                  
               
           
        
    </div>
</div>
            
          
   

            
            
            

        </div>
        <div class=\"modal-footer\">
             <div class=\"col-md-1 float-right\">
                 
                 <input type=\"submit\" value=\"Yes\" class=\"btn medium primary-bg\" />
                  
                   </div>
            <button type=\"button\" data-dismiss=\"modal\" style=\"width: 7%\"aria-hidden=\"true\" class=\"btn medium primary-bg\" data-toggle=\"button\">No</button>



       
    
    
    
    
    
        </div>
     ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   
    
 </form>





















";
        
        $__internal_bb8cc40c46625696cbd5f543b9824791c7dbc44e7a7f1f81274999a402dfae09->leave($__internal_bb8cc40c46625696cbd5f543b9824791c7dbc44e7a7f1f81274999a402dfae09_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/removequestionLibrary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 59,  22 => 1,);
    }
}
/*  <form class="left-side" action="{{path('ts_admin_removeQuestionLibrary')}}?id={{id}}"  method="post"{{ form_enctype(form) }}>                */
/*   <div class="modal-header">*/
/*             <a href="#" class="float-right" data-placement="left" title="close" data-dismiss="modal">*/
/*                 <i class="glyph-icon icon-remove"></i>*/
/*             </a>*/
/* */
/*             <h3 id="myModalLabel">Remove Question : </h3>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*             */
/*             */
/*             */
/*   <div class="row">*/
/*     <div class="col-md-12">*/
/*       */
/* */
/*            */
/*                 */
/*                 */
/* */
/*                */
/*         <h4 style="color: red">Are you sure you want to remove this question ?</h4>*/
/*                 */
/* */
/*           */
/*                   */
/*                   */
/*                */
/*            */
/*         */
/*     </div>*/
/* </div>*/
/*             */
/*           */
/*    */
/* */
/*             */
/*             */
/*             */
/* */
/*         </div>*/
/*         <div class="modal-footer">*/
/*              <div class="col-md-1 float-right">*/
/*                  */
/*                  <input type="submit" value="Yes" class="btn medium primary-bg" />*/
/*                   */
/*                    </div>*/
/*             <button type="button" data-dismiss="modal" style="width: 7%"aria-hidden="true" class="btn medium primary-bg" data-toggle="button">No</button>*/
/* */
/* */
/* */
/*        */
/*     */
/*     */
/*     */
/*     */
/*     */
/*         </div>*/
/*      {{ form_rest(form) }}*/
/*    */
/*     */
/*  </form>*/
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
