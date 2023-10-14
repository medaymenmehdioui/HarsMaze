<?php

require 'header.php';

       // Le mot qui symbolise l'accord
       $motAttendu = "consentement";

       // Vérifie si l'utilisateur a soumis un mot
       if (isset($_POST['mot_utilisateur'])) {
           $motUtilisateur = strtolower($_POST['mot_utilisateur']); // Convertir en minuscules pour la comparaison
           // Vérifie si le mot de l'utilisateur est correct
           if ($motUtilisateur === $motAttendu) {
            //    echo '<script>alert("Bravo ! Le mot que vous avez entré est correct Vous etes donc convié a la deuxieme Enigme Le mot de passe est : ")</script>'; 
               header('Location: felicitation1.php');
              
           } else {
                echo '<script>alert("Désolé, le mot que vous avez entré n est pas correct. Veuillez réessayer")</script>';
             
           }
       }
       ?>


<body style="  background-image: linear-gradient(to right, #211c3a,#171521,  #0c0a16);">

<h1 style="font-size: 3rem">Enigme 1</h1>
<h4> Votre quête pour la prévention du harcèlement et le respect en ligne commence par un défi poétique. </h4>
   <h4> En ce lieu mystérieux, un ancien poème renferme un mot-clé essentiel pour progresser dans votre mission.
    Le poème se dresse devant vous, un labyrinthe de vers et de rimes, ses secrets enfouis sous les couches de métaphores. 
    Il est dit que ce mot-clé détient le pouvoir de déverrouiller une nouvelle étape de votre aventure. 
    Votre mission est simple : décrypter le poème, découvrir le mot caché et avancer vers l'inconnu 
</h4>

<h4  style="font-size: 2rem">"Lorsque tous les doutes sont effacés, et que les désirs sont partagés, <br> ce mot apparaît."</h4>



        <div class="container">
        <form method="post" action="" style="margin: 0% 0% 19% 0%">
            <h4>Quel est le mot qui symbolise cet accord ?
                <input type="text" id="mot_utilisateur" name="mot_utilisateur">
                <?php
            // Titre que vous souhaitez afficher
            $titre = "Cliquer sur la clé";
            // Afficher le bouton avec le titre dynamique
            echo '<input type="image" name="submit" src="img/cl1.png" alt="Submit" width="5%" title="' . htmlspecialchars($titre) . '">';
            ?>
            </h4>
        </form>
    </div>

        </body>





























        