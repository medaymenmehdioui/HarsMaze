    <?php
    require 'header.php';

    session_start();
    $correctAnswers = [
        ["1","c","o","n","s","e","n","t","e","m","e","n","t"],
        ["2","c","o","n","d","a","n","a","t","i","o","n"],
        ["3","p","r","é", "v", "e", "n", "t", "i", "o", "n"],
        ["4","l","o","i"],
        ["5","h","a","r","c","è","l","e","m","e","n","t"],
        ["6","p","r","é","j","u","d","i","c","e"],
    ];

    if (!isset($_SESSION['grid'])) {
        $_SESSION['grid'] = [
            ["1","c","o","n","s","e","n","t","e","m","e","n","t"],
            ["2","c","o"," "," ", "a"," ","a"," ","i","o"," "],
            ["3","p "," ","é"," ","e"," "," ","i","o"," "],
            ["4"," ","o"," "],
            ["5"," ","a"," "," ","è"," ","e"," ","e"," "," "],
            ["6"," "," ","é"," ","u"," ","i"," ","e"],
        ];
    }
    $grid = $_SESSION['grid'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rowIndex = $_POST['row'];
        $colIndex = $_POST['col'];
        $lettreDevinee = $_POST['lettre'];

        // Vérifier la réponse
        if ($lettreDevinee == $correctAnswers[$rowIndex][$colIndex]) {
            $grid[$rowIndex][$colIndex] = $lettreDevinee;
            $_SESSION['grid'] = $grid; // Mettre à jour la session
        } else {
            echo "<script>alert('Erreur : Ce n'est pas le bon mot.')</script>";
        }
    }

    // Vérifier si tous les mots sont correctement remplis
    $allWordsFilled = true;
    foreach ($grid as $row) {
        foreach ($row as $letter) {
            if ($letter == " ") {
                $allWordsFilled = false;
                break 2; // Quitter les deux boucles dès qu'une lettre est manquante
            }
        }
    }

    ?>

    <body style="  background-image: linear-gradient(to right, #211c3a,#171521,  #0c0a16);color:white;">


    <?php if ($allWordsFilled): ?>
            <h1>Félicitations ! Tous les mots ont été correctement remplis.</h1>
            <h2>Passons à la Troisième Enigme ! <a href="enigme3.php">>>></a></h2>
            
            
        <?php else: ?>

            <h1>Enigme 2</h1>
            <div class="container">
    <div class="row" >
        <div class="col-sm">


            <table class="et">
                <?php for ($i = 0; $i < count($grid); $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < count($grid[$i]); $j++): ?>
                            <td>
                                <?php if ($grid[$i][$j] == " "): ?>
                                    <form method="post" action="" class="fr">
                                        <input type="hidden" name="row" class="e"  value="<?php echo $i; ?>">
                                        <input type="hidden" name="col"  class="e" value="<?php echo $j;  ?>">
                                        <input type="text" name="lettre"  class="e" maxlength="1" required>
                                      
                                    </form>
                                <?php else: ?>
                                    <?php echo $grid[$i][$j]; ?>
                                <?php endif; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
            </table>

            </div>
            <div class="col-sm">

    <table >
    <tr><td class="et">1- J'exprime l'accord volontaire.</td></tr>
    <tr><td class="et">2- Décision de justice déclarant une personne coupable </td></tr>
    <tr><td class="et">3- Mesure pour éviter un problème..</td></tr>
    <tr><td class="et">4- Règle établie par l'etat</td></tr>
    <tr><td class="et">5- violence répétée qui peut être verbale, physique ou psychologique.</td></tr>
    <tr><td class="et">6- Atteinte à un droit.</td></tr>
    </table>

    </div>
    </div>
    
    </div>

        <?php endif; ?>

        
    </body>

