<?php
include "header.php";
//quelle page ?
if(isset($_GET["quelle_page"]))
{
  //echo $_GET["quelle_page"]." ";
    switch ($_GET["quelle_page"])   
    {
        case 'detailBonPlan':           //fait
            include "detailBonPlan.php";
            break;

        case 'recherche_coloc':         //pas fais
            include "recherche_coloc.php";
            break;
        
        case 'recherche_covoit':        //pas fais
            include "recherche_covoit.php";
            break;

        case 'recherche_offre_emploi':  //pas fais
            include "recherche_offre_emploi.php";
            break;

        case 'switch_publier_bon_plan': //à faire
            include "switch_publier_bon_plan.php";     //créer switch pour différent type de publication
            break;
        
        case 'historique':              //pas fais
            include "historique.php";
            break;

        case 'param':                   //pas fais
            include "param.php";
            break;

        default:
        # cmettre un message d'erreur :/
        include "index.php";   //page d'accueil
        break;
    }
}
?>