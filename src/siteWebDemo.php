<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="siteWebDemo.css">
</head>
<body>

<h1>Questionnaire</h1>

<form action="" method="post">
    <!-- Partie Utilisateur -->
    <h2>Informations Utilisateur</h2>
    <!-- Conteneur principal pour aligner en colonne -->
    <div class="info-utilisateur-container">
        <!-- Sexe -->
        <label class="label-utilisateur" for="sexe">En tant que: </label>
        <ul>
            <li>
                <label for="title_1">
                <input type="radio" id="sexe" name="title" value="M." />
                Monsieur
                </label>
            </li>
            <li>
                <label for="title_2">
                <input type="radio" id="sexe" name="title" value="Mme." />
                Madame
                </label>
            </li>
        </ul>
        <br>
        <!-- Nom -->
        <label class="label-utilisateur" for="nom">Nom: </label>
        <input type="text" id="nom" name="nom" class="info-utilisateur" type="texte" required>
        <br>
        <!-- Prenom -->
        <label class="label-utilisateur" for="prenom">Prénom: </label>
        <input type="text" id="prenom" name="prenom" class="info-utilisateur" required>
        <br>
        <!-- date de naissance -->
        <label class="label-utilisateur" for="dateNaiss">Date de naissance (jj/mm/aaaa): </label>
        <input type="text" id="dateNaiss" name="dateNaiss" class="info-utilisateur" required>
        <br>
        <!-- mail -->
        <label class="label-utilisateur" for="mail">Mail: </label>
        <input type="email" id="mail" name="mail" class="info-utilisateur" required>
        <br>
        <!-- adresse -->
        <label class="label-utilisateur" for="adresse">Adresse (Ville, numeroRue nomRue): </label>
        <input type="text" id="adresse" name="adresse" class="info-utilisateur" required>
        <br>
        <!-- niveau d'etude -->
        <label class="label-utilisateur" for="etude">Niveau d'étude: </label>
        <input type="text" id="etude" name="etude" class="info-utilisateur" required>
        <br>
        <!-- moyen de transport -->
        <label for="choixMoyenTransport">Choisissez le moyen de transport: </label>
        <select id="choixMoyenTransport" name="choixMoyenTransport" class="info-utilisateur-select" required>
            <option value="0">Pied</option>
            <option value="1">Vélo</option>
            <option value="2">Moto</option>
            <option value="3">Voiture</option>
        </select>
    </div>
    <!-- Partie Préférences -->
    <h2>Préférences</h2>
        <!-- Question 1 -->
        <div class="info-preference-container">
            <label for="reponseMusique">Question 1: Glisser les styles de musique que vous voulez voir. Sélectionnez les par ordre de préférence (ex: 1432)</label><br>
            <div id="container1" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="musique1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="musique2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="musique3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
<<<<<<< HEAD
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
                Déposez vos réponses ici
            </div>
=======
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

        <!-- Question 2 -->
        <div class="info-preference-container">
            <label for="reponseSport">Question 2: Cochez les sports que vous voulez voir. Sélectionnez les par ordre de préférence</label><br>
<<<<<<< HEAD
            <input type="text" id="reponseSport" name="reponseSport" placeholder="Votre réponse" class="info-preference" draggable="true" ondragstart="drag(event)">
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
                Déposez vos réponses ici
            </div>
=======
            <div id="container2" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="sport1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="sport2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="sport3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

        <!-- Question 3 -->
        <div class="info-preference-container">
            <label for="reponseActivitesCulturelles">Question 3: Cochez les activités culturelles que vous voulez voir. Sélectionnez les par ordre de préférence</label><br>
<<<<<<< HEAD
            <input type="text" id="reponseActivitesCulturelles" name="reponseActivitesCulturelles" placeholder="Votre réponse" class="info-preference" draggable="true" ondragstart="drag(event)">
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
                Déposez vos réponses ici
            </div>
=======
            <div id="container3" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="culture1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="culture2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="culture3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

        <!-- Question 4 -->
        <div class="info-preference-container">
            <label for="reponseActivitesOrganisees">Question 4: Cochez les activités organisées que vous voulez voir. Sélectionnez les par ordre de préférence</label><br>
<<<<<<< HEAD
            <input type="text" id="reponseActivitesOrganisees" name="reponseActivitesOrganisees" placeholder="Votre réponse" class="info-preference" draggable="true" ondragstart="drag(event)">
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
                Déposez vos réponses ici
            </div>
=======
            <div id="container4" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="orga1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="orga2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="orga3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

        <!-- Question 5 -->
        <div class="info-preference-container">
            <label for="reponseRestaurants">Question 5: Cochez les types de restaurants que vous voulez voir. Sélectionnez les par ordre de préférence</label><br>
<<<<<<< HEAD
            <input type="text" id="reponseRestaurants" name="reponseRestaurants" placeholder="Votre réponse" class="info-preference" draggable="true" ondragstart="drag(event)">
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
                Déposez vos réponses ici
            </div>
=======
            <div id="container5" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="resto1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="resto2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="resto3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

        <!-- Question 6 -->
        <div class="info-preference-container">
            <label for="reponseSorties">Question 6: Cochez les activités culturelles que vous voulez voir. Sélectionnez les par ordre de préférence</label><br>
<<<<<<< HEAD
            <input type="text" id="reponseSorties" name="reponseSorties" placeholder="Votre réponse" class="info-preference" draggable="true" ondragstart="drag(event)">
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">
            Déposez vos réponses ici
        </div>            
=======
            <div id="container6" class="container" ondrop="drop(event)" ondragover="allowDrop(event)">
                <div id="sortie1" class="draggable" draggable="true" ondragstart="drag(event)">rep1</div>
                <div id="sortie2" class="draggable" draggable="true" ondragstart="drag(event)">rep2</div>
                <div id="sortie3" class="draggable" draggable="true" ondragstart="drag(event)">rep3</div>
            </div>
            <!-- Zone de dépôt des réponses glissantes -->
            <div id="zoneDepot" class="zone-depot" ondrop="drop(event)" ondragover="allowDrop(event)">Déposez vos réponses ici</div>
>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
        </div>

    <input type="submit" value="Soumettre">
</form>

<?php

        // Fonction pour récupérer et incrémenter l'ID à partir d'un fichier
        function getNextId() {
            $idFile = 'lastId.txt'; // Nom du fichier pour stocker l'ID
            $currentId = file_get_contents($idFile); // Lire l'ID actuel depuis le fichier

            // Incrémenter l'ID
            $nextId = $currentId + 1;

            // Écrire le nouvel ID dans le fichier
            file_put_contents($idFile, $nextId);

            return $nextId;
        }
        $newId = getNextId();

        $cheminFichier = "reponseQuestionnaire.txt";
        $fichier = fopen($cheminFichier, 'r+');
        if ($_POST) {
            $id = $newId;
            $sexe = $_POST["sexe"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $dateNaiss = $_POST["dateNaiss"];
            $mail = $_POST["mail"];
            $adresse = $_POST["adresse"];
            $etude = $_POST["etude"];
            $choixMoyenTransport = $_POST["choixMoyenTransport"];
            $reponseMusique = $_POST["reponseMusique"];
            $reponseSport = $_POST["reponseSport"];
            $reponseActivitesCulturelles = $_POST["reponseActivitesCulturelles"];
            $reponseActivitesOrganisees = $_POST["reponseActivitesOrganisees"];
            $reponseRestaurants = $_POST["reponseRestaurants"];
            $reponseSorties = $_POST["reponseSorties"];

            /* liste des info utilisateurs renseignées par l'utilisateur */
            /* $formDonneUtilisateur = array(
                "nom" => $nom,
                "prenom" => $prenom,
                "dateNaiss" => $dateNaiss,
                "mail" => $mail,
                "adresse" => $adresse,
                "etude" => $etude
            ); */
            /* liste des listes de préférences de l'utilisateur */
            /* $formDonnePreference = array(
                "reponseMusique" => $reponseMusique,
                "reponseSport" => $reponseSport,
                "reponseActivitesCulturelles" => $reponseActivitesCulturelles,
                "reponseActivitesOrganisees" => $reponseActivitesOrganisees,
                "reponseRestaurants" => $reponseRestaurants,
                "reponseSorties" => $reponseSorties
            ); */


            $concat ="$id|$sexe|$nom|$prenom|$dateNaiss|$mail|$adresse|$etude|$choixMoyenTransport|$reponseMusique|$reponseSport|$reponseActivitesCulturelles|$reponseActivitesOrganisees|$reponseRestaurants|$reponseSorties". PHP_EOL;

            file_put_contents($cheminFichier, $concat, FILE_APPEND);

            $affichage =  fread($fichier,filesize($cheminFichier));
            $bang = explode(" ", $affichage);
            foreach($bang as $el){
                echo "<br>";
                echo $el;
            }

        }
        
        
    ?>


<script>
    function allowDrop(event) {
        event.preventDefault();
    }

    function drag(event) {
        event.dataTransfer.setData("text", event.target.id);
    }

    function drop(event) {
        event.preventDefault();
        var data = event.dataTransfer.getData("text");
        var draggedElement = document.getElementById(data);
        var dropTarget = event.target;

        // Assurez-vous que l'élément est déposé dans un conteneur
        if (dropTarget.classList.contains('zone-depot')) {
            dropTarget.appendChild(draggedElement); // Déplacer l'élément vers la zone de réponse
        }
        // Assurez-vous que l'élément est déposé dans un conteneur
        if (dropTarget.classList.contains('info-preference-container')) {
            dropTarget.appendChild(draggedElement); // Déplacer l'élément vers la zone de réponse
        }
    }

    var zoneDepot = document.getElementById("zoneDepot");

    // Fonction appelée lorsque l'élément draggable entre dans la zone de dépôt
    zoneDepot.addEventListener("dragenter", function(event) {
        event.preventDefault();
        zoneDepot.style.backgroundColor = "lightblue";
    });
<<<<<<< HEAD
    var zoneDepot = document.getElementById('zoneDepot');

    zoneDepot.addEventListener('dragover', allowDrop);
    zoneDepot.addEventListener('drop', drop);
=======

    // Fonction appelée lorsque l'élément draggable quitte la zone de dépôt
    zoneDepot.addEventListener("dragleave", function(event) {
        event.preventDefault();
        zoneDepot.style.backgroundColor = ""; // Réinitialise la couleur par défaut
    });

    // Annulation de l'événement dragover pour permettre l'événement drop
    zoneDepot.addEventListener("dragover", function(event) {
        event.preventDefault();
});

/* // Fonction pour traiter les réponses utilisateur
function traiterFormulaireUtilisateur($formData) {
    $command = './traitementUtilisateur ' . escapeshellarg(json_encode($formData));
    exec($command);
}

// Fonction pour traiter les préférences
function traiterFormulairePreference($formData) {
    $command = './traitementPreference ' . escapeshellarg(json_encode($formData));
    exec($command);
} */

>>>>>>> 2ee3ed5e5b2bb4622dfddd9fd46f8f2fb3e93c13
</script>
</body>
</html>


