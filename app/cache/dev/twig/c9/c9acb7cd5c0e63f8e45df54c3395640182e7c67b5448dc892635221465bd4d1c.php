<?php

/* TSAdminBundle:Tests:removeQuestion.html.twig */
class __TwigTemplate_a676b4dc15673cae805527c850672fef5a9eebde00b7f9884a87490bf96a9897 extends Twig_Template
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
        $__internal_b17e891c578cb82b13463ca736a1f5b70ee0433530c725e06883f98848bd929d = $this->env->getExtension("native_profiler");
        $__internal_b17e891c578cb82b13463ca736a1f5b70ee0433530c725e06883f98848bd929d->enter($__internal_b17e891c578cb82b13463ca736a1f5b70ee0433530c725e06883f98848bd929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TSAdminBundle:Tests:removeQuestion.html.twig"));

        // line 1
        echo " <form id=\"form2\" class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_removeQuestion");
        echo "?id=";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "&idtest=";
        echo twig_escape_filter($this->env, (isset($context["idtest"]) ? $context["idtest"] : $this->getContext($context, "idtest")), "html", null, true);
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
            <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" style=\"width:6%\" class=\" btn medium primary-bg\" data-toggle=\"button\">No</button>



       
    
    
    
    
    
        </div>
     ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   
    
 </form>





















";
        
        $__internal_b17e891c578cb82b13463ca736a1f5b70ee0433530c725e06883f98848bd929d->leave($__internal_b17e891c578cb82b13463ca736a1f5b70ee0433530c725e06883f98848bd929d_prof);

    }

    public function getTemplateName()
    {
        return "TSAdminBundle:Tests:removeQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 59,  22 => 1,);
    }
}
/*  <form id="form2" class="left-side" action="{{path('ts_admin_removeQuestion')}}?id={{id}}&idtest={{idtest}}"  method="post"{{ form_enctype(form) }}>                */
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
/*                     */
/*                  <input type="submit" value="Yes" class="btn medium primary-bg" />*/
/*                   */
/*                    </div>*/
/*             <button type="button" data-dismiss="modal" aria-hidden="true" style="width:6%" class=" btn medium primary-bg" data-toggle="button">No</button>*/
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
