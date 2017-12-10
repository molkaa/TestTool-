<?php

/* @TSAdmin/Tests/customizeTestValidation.html.twig */
class __TwigTemplate_77cc25579874aad3b812bf5ecded5ca5a649bed16a0c4c3bf799fbb4a574b6fc extends Twig_Template
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
        $__internal_51eadce1ae5525ca68f4796a0d505867145bf7ea48c9a2828c32aa991d6268f1 = $this->env->getExtension("native_profiler");
        $__internal_51eadce1ae5525ca68f4796a0d505867145bf7ea48c9a2828c32aa991d6268f1->enter($__internal_51eadce1ae5525ca68f4796a0d505867145bf7ea48c9a2828c32aa991d6268f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/customizeTestValidation.html.twig"));

        // line 1
        echo "<script>

    function VerifStateEdit(_this, nbr, easy, medium, hard) {
        var div = document.getElementById(_this.id + '#');
        var div2 = document.getElementById(_this.id);

            if (div.className === \"content-box box-toggle content-box-closed\") {
            div2.className = \"glyph-icon icon-toggle icon-chevron-up\";
            div.className = \"content-box box-toggle\";
        }
        else {
            div2.className = \"glyph-icon icon-toggle icon-chevron-down\";
            div.className = \"content-box box-toggle content-box-closed\";
        }

    }


    function  verifQuestions(nbr, nbr1, easy1, medium1, hard1,mark1,elim_mark, checkbox, msg_nbr, msg_perc,msg_perc_supp, msg_comma,msg_mark,msg_nbr_qst,msg_elim_mark, form,easy_gl,hard_gl,medium_gl)
    {

        var div = document.getElementById(checkbox);
          if (div.className ===\"glyph-icon icon-toggle icon-chevron-up\")
        {


            var error_nbr_questions = 0;
            var error_percentage = 0;
            var error_comma = 0;
            var error_mark = 0;
            var error_elim_mark = 0;
           // var percentage_supp=0;

            var nbr_questions = new Number(document.getElementById(nbr1).value);
            var easy = new Number(document.getElementById(easy1).value);
            var medium = new Number(document.getElementById(medium1).value);
            var hard = new Number(document.getElementById(hard1).value);
            var mark = new Number(document.getElementById(mark1).value);
            var eliminatory_mark = new Number(document.getElementById(elim_mark).value);
            var somme = easy + medium + hard;

            var perc_easy = (((easy / 100) * nbr_questions) % 1);
            var perc_medium = (((medium / 100) * nbr_questions) % 1);
            var perc_hard = (((hard / 100) * nbr_questions) % 1);
            
            
            
             if (eliminatory_mark <=0)
            {
               error_elim_mark = 1;
                document.getElementById(msg_elim_mark).style.display = \"block\";

            }
            else
            {
                error_elim_mark = 0;

                document.getElementById(msg_elim_mark).style.display = \"none\";
            }
            
             if (mark <=0)
            {
                error_mark = 1;
                document.getElementById(msg_mark).style.display = \"block\";

            }
            else
            {
                error_mark = 0;

                document.getElementById(msg_mark).style.display = \"none\";
            }
            
            if (document.getElementById(nbr1).value > (nbr - 1) || document.getElementById(nbr1).value <= 0)
            {
                error_nbr_questions = 1;
                document.getElementById(msg_nbr).style.display = \"block\";
            }
            else
            {
                error_nbr_questions = 0;
                document.getElementById(msg_nbr).style.display = \"none\";
            }

            
            if ((perc_easy !== 0) || (perc_medium !== 0) || (perc_hard !== 0))
            {
                error_comma = 1;
                document.getElementById(msg_comma).style.display = \"block\";

            }
            else
            {
                error_comma = 0;

                document.getElementById(msg_comma).style.display = \"none\";
            }
            
            if (somme != 100)
            {
                error_percentage = 1;
                document.getElementById(msg_perc).style.display = \"block\";

            }
            else
            {
                error_percentage = 0;
                document.getElementById(msg_perc).style.display = \"none\";

            }
           
            
            //pourcentage doit etre inferieur au pourcentage global
           /* if( (easy>(easy_gl-1)) || (medium>(medium_gl-1)) || (hard>(hard_gl-1)) )
            {
                percentage_supp = 1;
                document.getElementById(msg_perc_supp).style.display = \"block\";
               
            }
            else
            {
                 percentage_supp = 0;
                
            }

*/
            if ((error_nbr_questions == 0) && (error_percentage == 0) && (error_comma == 0) &&(error_mark == 0) &&(error_elim_mark == 0) /*&& (percentage_supp ==0)*/)
            {

                document.forms[form].submit();

            }
        }


    }
</script>


";
        
        $__internal_51eadce1ae5525ca68f4796a0d505867145bf7ea48c9a2828c32aa991d6268f1->leave($__internal_51eadce1ae5525ca68f4796a0d505867145bf7ea48c9a2828c32aa991d6268f1_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/customizeTestValidation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <script>*/
/* */
/*     function VerifStateEdit(_this, nbr, easy, medium, hard) {*/
/*         var div = document.getElementById(_this.id + '#');*/
/*         var div2 = document.getElementById(_this.id);*/
/* */
/*             if (div.className === "content-box box-toggle content-box-closed") {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-up";*/
/*             div.className = "content-box box-toggle";*/
/*         }*/
/*         else {*/
/*             div2.className = "glyph-icon icon-toggle icon-chevron-down";*/
/*             div.className = "content-box box-toggle content-box-closed";*/
/*         }*/
/* */
/*     }*/
/* */
/* */
/*     function  verifQuestions(nbr, nbr1, easy1, medium1, hard1,mark1,elim_mark, checkbox, msg_nbr, msg_perc,msg_perc_supp, msg_comma,msg_mark,msg_nbr_qst,msg_elim_mark, form,easy_gl,hard_gl,medium_gl)*/
/*     {*/
/* */
/*         var div = document.getElementById(checkbox);*/
/*           if (div.className ==="glyph-icon icon-toggle icon-chevron-up")*/
/*         {*/
/* */
/* */
/*             var error_nbr_questions = 0;*/
/*             var error_percentage = 0;*/
/*             var error_comma = 0;*/
/*             var error_mark = 0;*/
/*             var error_elim_mark = 0;*/
/*            // var percentage_supp=0;*/
/* */
/*             var nbr_questions = new Number(document.getElementById(nbr1).value);*/
/*             var easy = new Number(document.getElementById(easy1).value);*/
/*             var medium = new Number(document.getElementById(medium1).value);*/
/*             var hard = new Number(document.getElementById(hard1).value);*/
/*             var mark = new Number(document.getElementById(mark1).value);*/
/*             var eliminatory_mark = new Number(document.getElementById(elim_mark).value);*/
/*             var somme = easy + medium + hard;*/
/* */
/*             var perc_easy = (((easy / 100) * nbr_questions) % 1);*/
/*             var perc_medium = (((medium / 100) * nbr_questions) % 1);*/
/*             var perc_hard = (((hard / 100) * nbr_questions) % 1);*/
/*             */
/*             */
/*             */
/*              if (eliminatory_mark <=0)*/
/*             {*/
/*                error_elim_mark = 1;*/
/*                 document.getElementById(msg_elim_mark).style.display = "block";*/
/* */
/*             }*/
/*             else*/
/*             {*/
/*                 error_elim_mark = 0;*/
/* */
/*                 document.getElementById(msg_elim_mark).style.display = "none";*/
/*             }*/
/*             */
/*              if (mark <=0)*/
/*             {*/
/*                 error_mark = 1;*/
/*                 document.getElementById(msg_mark).style.display = "block";*/
/* */
/*             }*/
/*             else*/
/*             {*/
/*                 error_mark = 0;*/
/* */
/*                 document.getElementById(msg_mark).style.display = "none";*/
/*             }*/
/*             */
/*             if (document.getElementById(nbr1).value > (nbr - 1) || document.getElementById(nbr1).value <= 0)*/
/*             {*/
/*                 error_nbr_questions = 1;*/
/*                 document.getElementById(msg_nbr).style.display = "block";*/
/*             }*/
/*             else*/
/*             {*/
/*                 error_nbr_questions = 0;*/
/*                 document.getElementById(msg_nbr).style.display = "none";*/
/*             }*/
/* */
/*             */
/*             if ((perc_easy !== 0) || (perc_medium !== 0) || (perc_hard !== 0))*/
/*             {*/
/*                 error_comma = 1;*/
/*                 document.getElementById(msg_comma).style.display = "block";*/
/* */
/*             }*/
/*             else*/
/*             {*/
/*                 error_comma = 0;*/
/* */
/*                 document.getElementById(msg_comma).style.display = "none";*/
/*             }*/
/*             */
/*             if (somme != 100)*/
/*             {*/
/*                 error_percentage = 1;*/
/*                 document.getElementById(msg_perc).style.display = "block";*/
/* */
/*             }*/
/*             else*/
/*             {*/
/*                 error_percentage = 0;*/
/*                 document.getElementById(msg_perc).style.display = "none";*/
/* */
/*             }*/
/*            */
/*             */
/*             //pourcentage doit etre inferieur au pourcentage global*/
/*            /* if( (easy>(easy_gl-1)) || (medium>(medium_gl-1)) || (hard>(hard_gl-1)) )*/
/*             {*/
/*                 percentage_supp = 1;*/
/*                 document.getElementById(msg_perc_supp).style.display = "block";*/
/*                */
/*             }*/
/*             else*/
/*             {*/
/*                  percentage_supp = 0;*/
/*                 */
/*             }*/
/* */
/* *//* */
/*             if ((error_nbr_questions == 0) && (error_percentage == 0) && (error_comma == 0) &&(error_mark == 0) &&(error_elim_mark == 0) /*&& (percentage_supp ==0)*//* )*/
/*             {*/
/* */
/*                 document.forms[form].submit();*/
/* */
/*             }*/
/*         }*/
/* */
/* */
/*     }*/
/* </script>*/
/* */
/* */
/* */
