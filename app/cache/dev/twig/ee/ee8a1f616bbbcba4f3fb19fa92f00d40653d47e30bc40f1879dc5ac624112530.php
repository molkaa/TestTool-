<?php

/* @TSAdmin/Tests/formulaireEditLibrary.html.twig */
class __TwigTemplate_4206535afd5cb40ee34e2c4dd4e1228cf8ef770eadb249a80b120121743c8bf4 extends Twig_Template
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
        $__internal_8b5c223a03ef68c414d0fa47f6d74febf2443d08616ccfcc1a042d86a478dd70 = $this->env->getExtension("native_profiler");
        $__internal_8b5c223a03ef68c414d0fa47f6d74febf2443d08616ccfcc1a042d86a478dd70->enter($__internal_8b5c223a03ef68c414d0fa47f6d74febf2443d08616ccfcc1a042d86a478dd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSAdmin/Tests/formulaireEditLibrary.html.twig"));

        // line 2
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var divlist = document.getElementsByTagName('div');
        //On parcourt la liste pour voir lesquels ont le nom souhaité
        for (i = 0; i < divlist.length; i++) {
            if (divlist[i].getAttribute('id') === 'ts_adminbundle_questionlibraryedittype_responses')
            {
                var \$container = \$('div#ts_adminbundle_questionlibraryedittype_responses');
                // On ajoute un lien pour ajouter une nouvelle reponse
                var \$lienAjout = \$('<a href=\"#\"  style=\"margin:10px\" class=\"btn medium bg-gray font-red float-left\"> <span class=\"button-content\">add another response</span> </a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container.append(\$lienAjout);
                \$lienAjout.click(function(e) {
                    ajouterEditReponse(\$container);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index1 = \$container.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index1 === 0) {
                    ajouterEditReponse(\$container);
                    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '')
                            .replace(/__name__/g,index1));
                    ajouterLienSuppression(\$prototype);
                } else {
                    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                    \$container.children('div').each(function() {
                        ajouterLienSuppression(\$(this));
                    });
                }
            }
          

            // La fonction qui ajoute un formulaire Categorie
            function ajouterEditReponse(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '')
                        .replace(/__name__/g, index1));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index1++;
                \$container.append(\$lienAjout);
            }
            
            // La fonction qui ajoute un lien de suppression d'une catégorie
            function ajouterLienSuppression(\$prototype) {
                // Création du lien
                \$lienSuppression = \$('<a href=\"#\" style=\"margin:10px\" class=\"btn medium bg-gray font-red float-right\"> <span class=\"button-content\">delete</span> </a> <br/> <hr/>');
                // Ajout du lien
                \$prototype.append(\$lienSuppression);
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
        
        $__internal_8b5c223a03ef68c414d0fa47f6d74febf2443d08616ccfcc1a042d86a478dd70->leave($__internal_8b5c223a03ef68c414d0fa47f6d74febf2443d08616ccfcc1a042d86a478dd70_prof);

    }

    public function getTemplateName()
    {
        return "@TSAdmin/Tests/formulaireEditLibrary.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# Voici le script en question : #}*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         var divlist = document.getElementsByTagName('div');*/
/*         //On parcourt la liste pour voir lesquels ont le nom souhaité*/
/*         for (i = 0; i < divlist.length; i++) {*/
/*             if (divlist[i].getAttribute('id') === 'ts_adminbundle_questionlibraryedittype_responses')*/
/*             {*/
/*                 var $container = $('div#ts_adminbundle_questionlibraryedittype_responses');*/
/*                 // On ajoute un lien pour ajouter une nouvelle reponse*/
/*                 var $lienAjout = $('<a href="#"  style="margin:10px" class="btn medium bg-gray font-red float-left"> <span class="button-content">add another response</span> </a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container.append($lienAjout);*/
/*                 $lienAjout.click(function(e) {*/
/*                     ajouterEditReponse($container);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index1 = $container.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index1 === 0) {*/
/*                     ajouterEditReponse($container);*/
/*                     var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                             .replace(/__name__/g,index1));*/
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
/*             function ajouterEditReponse($container) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                         .replace(/__name__/g, index1));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container.append($prototype);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index1++;*/
/*                 $container.append($lienAjout);*/
/*             }*/
/*             */
/*             // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*             function ajouterLienSuppression($prototype) {*/
/*                 // Création du lien*/
/*                 $lienSuppression = $('<a href="#" style="margin:10px" class="btn medium bg-gray font-red float-right"> <span class="button-content">delete</span> </a> <br/> <hr/>');*/
/*                 // Ajout du lien*/
/*                 $prototype.append($lienSuppression);*/
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
