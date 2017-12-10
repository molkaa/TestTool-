<?php

/* @TSCandidat/Candidat/formulaire.html.twig */
class __TwigTemplate_c7e54cbe6fb319dc9fd98a885ccf152819d6049771e26c7f2f2a1206e39739ae extends Twig_Template
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
        $__internal_ae0b8de9200bd994b6b6388d3745fa5a366fa38cc6c86009d4eef24ab573cfe2 = $this->env->getExtension("native_profiler");
        $__internal_ae0b8de9200bd994b6b6388d3745fa5a366fa38cc6c86009d4eef24ab573cfe2->enter($__internal_ae0b8de9200bd994b6b6388d3745fa5a366fa38cc6c86009d4eef24ab573cfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TSCandidat/Candidat/formulaire.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "<script type=\"text/javascript\">
    \$(document).ready(function() {
        var divlist = document.getElementsByTagName('div');
        //On parcourt la liste pour voir lesquels ont le nom souhaité
        for (i = 0; i < divlist.length; i++) {
            if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_academicDetails')
            {
                var \$container = \$('div#ts_candidatbundle_candidatetype_academicDetails');
                // On ajoute un lien pour ajouter une nouvelle catégorie
                var \$lienAjout = \$('<a href=\"#\" id=\"ajout_academic\" class=\"btn\">add an other academic details </a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container.append(\$lienAjout);
                \$lienAjout.click(function(e) {
                    ajouterCategorie(\$container);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index = \$container.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index === 0) {
                    ajouterCategorie(\$container);
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
            //***************************************************************************************
            else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_professionalExperiences')
            {
                var \$container1 = \$('div#ts_candidatbundle_candidatetype_professionalExperiences');
                // On ajoute un lien pour ajouter une nouvelle catégorie
                var \$lienAjout1 = \$('<a href=\"#\" id=\"ajout_profession\" class=\"btn\">add an other professional experience</a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container1.append(\$lienAjout1);
                \$lienAjout1.click(function(e) {
                    ajouterProfession(\$container1);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index1 = \$container1.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index1 === 0) {
                    ajouterProfession(\$container1);
                    var \$prototype1 = \$(\$container1.attr('data-prototype').replace(/__name__label__/g, '')
                            .replace(/__name__/g, index1));
                    ajouterLienSuppression(\$prototype1);
                } else {
                    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                    \$container1.children('div').each(function() {
                        ajouterLienSuppression(\$(this));
                    });
                }
            }
            //*********************************************************************************
            else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_languages')
            {
                var \$container2 = \$('div#ts_candidatbundle_candidatetype_languages');
                // On ajoute un lien pour ajouter une nouvelle catégorie
                var \$lienAjout2 = \$('<a href=\"#\" id=\"add_language\" class=\"btn\">add an other language</a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container2.append(\$lienAjout2);
                \$lienAjout2.click(function(e) {
                    ajouterLanguage(\$container2);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index2 = \$container2.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index2 === 0) {
                    ajouterLanguage(\$container2);
                    var \$prototype2 = \$(\$container2.attr('data-prototype').replace(/__name__label__/g, '')
                            .replace(/__name__/g, index2));
                    ajouterLienSuppression(\$prototype2);
                } else {
                    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                    \$container2.children('div').each(function() {
                        ajouterLienSuppression(\$(this));
                    });
                }
            }
            //*********************************************************************************
            else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_technologies')
            {
                var \$container3 = \$('div#ts_candidatbundle_candidatetype_technologies');
                // On ajoute un lien pour ajouter une nouvelle catégorie
                var \$lienAjout3 = \$('<a href=\"#\" id=\"add_language\" class=\"btn\">add an other technologie</a>');
                // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
                \$container3.append(\$lienAjout3);
                \$lienAjout3.click(function(e) {
                    ajouterTechnologie(\$container3);
                    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                    return false;
                });
                // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
                var index3 = \$container3.find(':input').length;
                // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
                if (index3 === 0) {
                    ajouterTechnologie(\$container3);
                    var \$prototype3 = \$(\$container3.attr('data-prototype').replace(/__name__label__/g, '')
                            .replace(/__name__/g, index3));
                    ajouterLienSuppression(\$prototype3);
                } else {
                    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
                    \$container3.children('div').each(function() {
                        ajouterLienSuppression(\$(this));
                    });
                }
            }
            //**********************************************************************************


            // La fonction qui ajoute un formulaire Categorie
            function ajouterCategorie(\$container) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, '')
                        .replace(/__name__/g, index));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container.append(\$prototype);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index++;
                \$container.append(\$lienAjout);
            }

            // La fonction qui ajoute un formulaire Profesion
            function ajouterProfession(\$container1) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype1 = \$(\$container1.attr('data-prototype').replace(/__name__label__/g, '')
                        .replace(/__name__/g, index1));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype1);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container1.append(\$prototype1);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index1++;
                \$container1.append(\$lienAjout1);
            }

            // La fonction qui ajoute un formulaire Language
            function ajouterLanguage(\$container2) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype2 = \$(\$container2.attr('data-prototype').replace(/__name__label__/g, '')
                        .replace(/__name__/g, index2));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype2);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container2.append(\$prototype2);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index2++;
                \$container2.append(\$lienAjout2);
            }

            // La fonction qui ajoute un formulaire Language
            function ajouterTechnologie(\$container3) {
                // Dans le contenu de l'attribut « data-prototype », on remplace :
                // - le texte \"__name__label__\" qu'il contient par le label du champ
                // - le texte \"__name__\" qu'il contient par le numéro du champ
                var \$prototype3 = \$(\$container3.attr('data-prototype').replace(/__name__label__/g, '')
                        .replace(/__name__/g, index3));
                // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
                ajouterLienSuppression(\$prototype3);
                // On ajoute le prototype modifié à la fin de la balise <div>
                \$container3.append(\$prototype3);
                // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
                index3++;
                \$container3.append(\$lienAjout3);
            }

            // La fonction qui ajoute un lien de suppression d'une catégorie
            function ajouterLienSuppression(\$prototype) {
                // Création du lien
                \$lienSuppression = \$('<a href=\"#\" class=\"btn btn-danger\">delete</a>');
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
        
        $__internal_ae0b8de9200bd994b6b6388d3745fa5a366fa38cc6c86009d4eef24ab573cfe2->leave($__internal_ae0b8de9200bd994b6b6388d3745fa5a366fa38cc6c86009d4eef24ab573cfe2_prof);

    }

    public function getTemplateName()
    {
        return "@TSCandidat/Candidat/formulaire.html.twig";
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
/*             if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_academicDetails')*/
/*             {*/
/*                 var $container = $('div#ts_candidatbundle_candidatetype_academicDetails');*/
/*                 // On ajoute un lien pour ajouter une nouvelle catégorie*/
/*                 var $lienAjout = $('<a href="#" id="ajout_academic" class="btn">add an other academic details </a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container.append($lienAjout);*/
/*                 $lienAjout.click(function(e) {*/
/*                     ajouterCategorie($container);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index = $container.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index === 0) {*/
/*                     ajouterCategorie($container);*/
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
/*             //****************************************************************************************/
/*             else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_professionalExperiences')*/
/*             {*/
/*                 var $container1 = $('div#ts_candidatbundle_candidatetype_professionalExperiences');*/
/*                 // On ajoute un lien pour ajouter une nouvelle catégorie*/
/*                 var $lienAjout1 = $('<a href="#" id="ajout_profession" class="btn">add an other professional experience</a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container1.append($lienAjout1);*/
/*                 $lienAjout1.click(function(e) {*/
/*                     ajouterProfession($container1);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index1 = $container1.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index1 === 0) {*/
/*                     ajouterProfession($container1);*/
/*                     var $prototype1 = $($container1.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                             .replace(/__name__/g, index1));*/
/*                     ajouterLienSuppression($prototype1);*/
/*                 } else {*/
/*                     // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/*                     $container1.children('div').each(function() {*/
/*                         ajouterLienSuppression($(this));*/
/*                     });*/
/*                 }*/
/*             }*/
/*             //**********************************************************************************/
/*             else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_languages')*/
/*             {*/
/*                 var $container2 = $('div#ts_candidatbundle_candidatetype_languages');*/
/*                 // On ajoute un lien pour ajouter une nouvelle catégorie*/
/*                 var $lienAjout2 = $('<a href="#" id="add_language" class="btn">add an other language</a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container2.append($lienAjout2);*/
/*                 $lienAjout2.click(function(e) {*/
/*                     ajouterLanguage($container2);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index2 = $container2.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index2 === 0) {*/
/*                     ajouterLanguage($container2);*/
/*                     var $prototype2 = $($container2.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                             .replace(/__name__/g, index2));*/
/*                     ajouterLienSuppression($prototype2);*/
/*                 } else {*/
/*                     // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/*                     $container2.children('div').each(function() {*/
/*                         ajouterLienSuppression($(this));*/
/*                     });*/
/*                 }*/
/*             }*/
/*             //**********************************************************************************/
/*             else if (divlist[i].getAttribute('id') === 'ts_candidatbundle_candidatetype_technologies')*/
/*             {*/
/*                 var $container3 = $('div#ts_candidatbundle_candidatetype_technologies');*/
/*                 // On ajoute un lien pour ajouter une nouvelle catégorie*/
/*                 var $lienAjout3 = $('<a href="#" id="add_language" class="btn">add an other technologie</a>');*/
/*                 // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/*                 $container3.append($lienAjout3);*/
/*                 $lienAjout3.click(function(e) {*/
/*                     ajouterTechnologie($container3);*/
/*                     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*                     return false;*/
/*                 });*/
/*                 // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/*                 var index3 = $container3.find(':input').length;*/
/*                 // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).*/
/*                 if (index3 === 0) {*/
/*                     ajouterTechnologie($container3);*/
/*                     var $prototype3 = $($container3.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                             .replace(/__name__/g, index3));*/
/*                     ajouterLienSuppression($prototype3);*/
/*                 } else {*/
/*                     // Pour chaque catégorie déjà existante, on ajoute un lien de suppression*/
/*                     $container3.children('div').each(function() {*/
/*                         ajouterLienSuppression($(this));*/
/*                     });*/
/*                 }*/
/*             }*/
/*             //***********************************************************************************/
/* */
/* */
/*             // La fonction qui ajoute un formulaire Categorie*/
/*             function ajouterCategorie($container) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                         .replace(/__name__/g, index));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container.append($prototype);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index++;*/
/*                 $container.append($lienAjout);*/
/*             }*/
/* */
/*             // La fonction qui ajoute un formulaire Profesion*/
/*             function ajouterProfession($container1) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 var $prototype1 = $($container1.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                         .replace(/__name__/g, index1));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype1);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container1.append($prototype1);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index1++;*/
/*                 $container1.append($lienAjout1);*/
/*             }*/
/* */
/*             // La fonction qui ajoute un formulaire Language*/
/*             function ajouterLanguage($container2) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 var $prototype2 = $($container2.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                         .replace(/__name__/g, index2));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype2);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container2.append($prototype2);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index2++;*/
/*                 $container2.append($lienAjout2);*/
/*             }*/
/* */
/*             // La fonction qui ajoute un formulaire Language*/
/*             function ajouterTechnologie($container3) {*/
/*                 // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*                 // - le texte "__name__label__" qu'il contient par le label du champ*/
/*                 // - le texte "__name__" qu'il contient par le numéro du champ*/
/*                 var $prototype3 = $($container3.attr('data-prototype').replace(/__name__label__/g, '')*/
/*                         .replace(/__name__/g, index3));*/
/*                 // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*                 ajouterLienSuppression($prototype3);*/
/*                 // On ajoute le prototype modifié à la fin de la balise <div>*/
/*                 $container3.append($prototype3);*/
/*                 // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*                 index3++;*/
/*                 $container3.append($lienAjout3);*/
/*             }*/
/* */
/*             // La fonction qui ajoute un lien de suppression d'une catégorie*/
/*             function ajouterLienSuppression($prototype) {*/
/*                 // Création du lien*/
/*                 $lienSuppression = $('<a href="#" class="btn btn-danger">delete</a>');*/
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
