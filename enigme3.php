<?php
require 'header.php';


?>
<body style="  background-image: linear-gradient(to right, #211c3a,#171521,  #0c0a16); color: white;  ">
<h1 style="font-size: 3rem">Enigme 3</h1>

    <h2 style="padding: 0% 0% 3% 0%">Remplissez les trous dans le texte suivant :</h2> 
   <div class="container"> 
    <form method="post" action="" style="font-size: 1.2rem; margin: 0% 5% 0%">
        <p class="big">Le paragraphe 4 de la section 3 du chapitre II du titre II du livre II du code pénal est complété par un article 222-33 ainsi rétabli :</p>
        <p class="big">« Art. 222-33 . - I. - Le harcèlement <input type="text" name="sexuel" /> est le fait d'imposer à une personne, de façon répétée, des propos, <input type="text" name="comportements" /> ou tous autres actes à connotation sexuelle qui, soit portent atteinte à sa dignité en raison de leur caractère dégradant ou humiliant, soit créent à son égard un environnement intimidant, hostile ou offensant.</p>
        <p class="big">« II. - Est assimilé au harcèlement sexuel le fait, même non répété, d'user d'ordres, de menaces, de contraintes ou de toute autre forme de pression grave, dans le but réel ou apparent d'obtenir une relation de nature sexuelle, que celle-ci soit recherchée au profit de l'auteur des faits ou au profit d'un tiers.</p>
        <p>« III. - Les faits visés au I et au II sont punis de deux ans d'emprisonnement et de 30 000 € d'amende. <input type="image" name="submit" src="img/cl.png" alt="Submit" width="4%"></p>    
    </form>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérez les réponses de l'utilisateur
        $mot1 = $_POST["sexuel"];
        $mot2 = $_POST["comportements"];

        // Vérifiez si les réponses sont correctes
        $mot1_correct = "sexuel";
        $mot2_correct = "comportements";

        // Comparaison des réponses
        if ($mot1 == $mot1_correct and $mot2 == $mot2_correct) {
            header("Location: end.php");
        } else 
            echo '<script>alert("Mots sont correct!")</script>';
    }
    ?>
</body>


