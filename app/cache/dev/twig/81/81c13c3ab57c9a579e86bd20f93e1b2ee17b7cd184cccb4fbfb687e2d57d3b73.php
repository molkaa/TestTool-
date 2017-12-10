<?php

/* @TSAdmin/Tests/formulaireLibrary.html.twig */
class __TwigTemplate_dcb9bee6a7ebb97de854aeef95ae3415f205c2182a1a4d9b246ad1f0194727cb extends Twig_Template
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
        $__internal_f2fef7a8df463b5013b59a80fc777680eb2d18002707854cfab7bc565926adb2 = $this->env->getExtension("native_profiler");
        $__internal_f2fef7a8df463b5013b59a80fc777680eb2d18002707854cfab7bc565926adb2->enter($__internal_f2fef7a8df463b5013b59a80fc777680eb2d18002707854cfab7bc565926adb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/formulaireLibrary.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var divlist = document.getElementsByTagName('div');
        //On parcourt la liste pour voir lesquels ont le nom souhaité
        for (i = 0; i < divlist.length; i++) {
            if (divlist[i].getAttribute('id') === 'ts_adminbundle_questionslibrarytype_responses')
            {
                var \$container = \$('div#ts_adminbundle_questionslibrarytype_responses');
                // On ajoute un lien pour ajouter une nouvelle reponse
                var \$lienAjout = \$('<a href=\"#\" style=\"margin:10px\" class=\"btn medium bg-gray font-blue float-left\"> <span class=\"button-content\">add another response</span> </a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container.append(\$lienAjout);
                \$lienAjout.click(function(e) {
                    ajouterReponse(\$container);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index = \$container.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index === 0) {
                    ajouterReponse(\$container);
                    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '')
                            .replace(/__name__/g, index));
                    ajouterLienSuppression(\$prototype);
                } else {
                    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                    \$container.children('div').each(function() {
                        ajouterLienSuppression(\$(this));
                    });
                }
            }
          

            // La fonction qui ajoute un formulaire Categorie
            function ajouterReponse(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                
                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '<h5>Answer n° : ' + (index+1)+'</h5>')
                        .replace(/__name__/g, index));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
               
                 \$container.append(\$lienAjout);
                 
                \$separation = \$('<br><br><br>');
                \$container.append(\$separation);
                
               
            }
            
            // La fonction qui ajoute un lien de suppression d'une catégorie
            function ajouterLienSuppression(\$prototype) {
                // Création du lien
                \$lienSuppression = \$('<a href=\"#\"  style=\"margin:10px\" class=\"btn medium bg-gray font-blue float-right\"> <span class=\"button-content\">delete</span> </a> <br><br>');
                //ligne de séparation
                \$divider = \$('<div class=\"divider\"></div>');
                
                // Ajout du lien
                \$prototype.append(\$lienSuppression);
                //ajout de ligne
                \$prototype.append(\$divider);
                // Ajout du listener sur le clic du lien
                \$lienSuppression.click(function(e) {
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    \$prototype.remove();

                    return false;
                });
            }
        }
    });
</script>

";
        
        $__internal_f2fef7a8df463b5013b59a80fc777680eb2d18002707854cfab7bc565926adb2->leave($__internal_f2fef7a8df463b5013b59a80fc777680eb2d18002707854cfab7bc565926adb2_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/formulaireLibrary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  22 => 2,);
    }
}
/* {#// *********** ACADEMIC DETAILS************#}*/
/* */
/* {# Voici le script en question : #}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         var divlist = document.getElementsByTagName('div');*/
/*         //On parcourt la liste pour voir lesquels ont le nom souhaité*/
/*         for (i = 0; i < divlist.length; i++) {*/
/*             if (divlist[i].getAttribute('id') === 'ts_adminbundle_questionslibrarytype_responses')*/
/*             {*/
/*                 var $container = $('div#ts_adminbundle_questionslibrarytype_responses');*/
/*                 // On ajoute un lien pour ajouter une nouvelle reponse*/
/*                 var $lienAjout = $('<a href="#" style="margin:10px" class="btn medium bg-gray font-blue float-left"> <span class="button-content">add another response</span> </a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container.append($lienAjout);*/
/*                 $lienAjout.click(function(e) {*/
/*                     ajouterReponse($container);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index = $container.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index === 0) {*/
/*                     ajouterReponse($container);*/
/*                     var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                             .replace(/__name__/g, index));*/
/*                     ajouterLienSuppression($prototype);*/
/*                 } else {*/
/*                     // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/*                     $container.children('div').each(function() {*/
/*                         ajouterLienSuppression($(this));*/
/*                     });*/
/*                 }*/
/*             }*/
/*           */
/* */
/*             // La fonction qui ajoute un formulaire Categorie*/
/*             function ajouterReponse($container) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 */
/*                 var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '<h5>Answer n° : ' + (index+1)+'</h5>')*/
/*                         .replace(/__name__/g, index));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container.append($prototype);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index++;*/
/*                */
/*                  $container.append($lienAjout);*/
/*                  */
/*                 $separation = $('<br><br><br>');*/
/*                 $container.append($separation);*/
/*                 */
/*                */
/*             }*/
/*             */
/*             // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*             function ajouterLienSuppression($prototype) {*/
/*                 // Création du lien*/
/*                 $lienSuppression = $('<a href="#"  style="margin:10px" class="btn medium bg-gray font-blue float-right"> <span class="button-content">delete</span> </a> <br><br>');*/
/*                 //ligne de séparation*/
/*                 $divider = $('<div class="divider"></div>');*/
/*                 */
/*                 // Ajout du lien*/
/*                 $prototype.append($lienSuppression);*/
/*                 //ajout de ligne*/
/*                 $prototype.append($divider);*/
/*                 // Ajout du listener sur le clic du lien*/
/*                 $lienSuppression.click(function(e) {*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     $prototype.remove();*/
/* */
/*                     return false;*/
/*                 });*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* */
/* */
