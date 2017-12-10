<?php

/* @TSAdmin/Tests/removeTest.html.twig */
class __TwigTemplate_276d25b2e7ce267f3191ff05c4a4548cc6a2127daaffb52c94be209353c2763d extends Twig_Template
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
        $__internal_bc0161f73e2e2da55940fdb958d13306f0c9fc71f3ab22107846a4bbbce3f1d5 = $this->env->getExtension("native_profiler");
        $__internal_bc0161f73e2e2da55940fdb958d13306f0c9fc71f3ab22107846a4bbbce3f1d5->enter($__internal_bc0161f73e2e2da55940fdb958d13306f0c9fc71f3ab22107846a4bbbce3f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/removeTest.html.twig"));

        // line 2
        echo "<form class=\"left-side\" action=\"";
        echo $this->env->getExtension('routing')->getPath("ts_admin_removeTest");
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
      

           
                
                

               
        <h4 style=\"color: red\">Are you sure you want to remove this Test ?</h4>
                

          
                  
                  
               
           
        
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
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   
    
 </form>






















";
        
        $__internal_bc0161f73e2e2da55940fdb958d13306f0c9fc71f3ab22107846a4bbbce3f1d5->leave($__internal_bc0161f73e2e2da55940fdb958d13306f0c9fc71f3ab22107846a4bbbce3f1d5_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/removeTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 60,  22 => 2,);
    }
}
/* {# src/TS/AdminBundle/Resources/views/Tests/removeTest.html.twig #}*/
/* <form class="left-side" action="{{path('ts_admin_removeTest')}}?id={{id}}"  method="post"{{ form_enctype(form) }}>                */
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
/*         <h4 style="color: red">Are you sure you want to remove this Test ?</h4>*/
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
/* */
