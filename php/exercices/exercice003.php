<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 007</h2>
    <?php

    echo '<table border>
    <tr>
        <th>Nombre</th>
        <th>Carré</th>
        <th>Racine</th>
    </tr>';

    // LES LIGNES DES NOMBRES DYNAMIQUES
    for ($i = 1; $i <= 20; $i++) {

        echo'<tr>
            <td>'.$i.'</td>
            <td>'.$i*$i.'</td>
            <td>'.sqrt($i).'</td>
        </tr>';

    }

    echo '</table>';
    
    ?>
    <h2>Exercice 008</h2>
    <?php
        $n = rand(5, 15);
        $boucle = 1;
        $resultat = 0;
        echo "<h3>Voici le cumul des $n premiers nombres (sens inverse): </h3>";
        for($i = $n; $i >=1; $i--):
            $resultat += $i;
            echo "<p>Etape: $boucle - résultat = $resultat</p>";
            $boucle++;
        endfor;
    ?>

    <h2>Exercice 009</h2>
    <?php
    $random = 0;
    $essai = 0;
        while($random < 15):
            $random = rand(1, 20);
            $essai++;
            if($random <= 15):
                echo "<p>Essais $essai: $random est trop petit(<16)</p>";
            endif;
        endwhile;
        echo "<p>Le nombre choisi est: $random</p>"
    ?>

    <h2>Exercice 010</h2>

    <?php
    
        // créer le tableau de note de Guy
        $noteDeGuy = [];
        // Variable pour acceuillir la moyenne
        $moyenne = 0;

        // Injecter 20 notes aléatoires
        for($i=0; $i < 20; $i++):
            $aleatoire = rand(1, 20);
            $noteDeGuy[$i] = $aleatoire;
        endfor;

        //Afficher les notes et préparer le calcul de la moyenne
        foreach ($noteDeGuy as $key => $value) {
            echo 'Note N°' . ($key+1) . ': <span style=\'font-weight: bold\'>' . $noteDeGuy[$key] . '</span> | ';
            $moyenne += $noteDeGuy[$key];
        }

        // Calculer la moyenne
        $resultat = ($moyenne / count($noteDeGuy)) * 5;
        echo "<h3>La moyenne de l'année est de $resultat : ";

        if($resultat <= 30) : 
            echo "ça ira mieux l’année prochaine!!!";
        endif;
        if($resultat > 30 && $resultat <= 50): 
            echo "Voilà pourquoi il ne faut pas regarder des stream jv durant les cours!";
        endif;
        if($resultat > 50 && $resultat <= 60):
            echo "pas de bol, t’y était presque !!!";
        endif;
        if($resultat > 60 && $resultat <= 70):
            echo "ça passe… sans classe, mais ça passe !!!";
        endif;
        if($resultat > 70 && $resultat <= 80): 
            echo "Bien joué, objectif atteint!!!";
        endif;
        if($resultat > 80): 
            echo "Master Class, 5étoiles pour toi";
        endif;
        echo '</h3';
    ?>

<h2>Exercice 011</h2>

<?php
    function equation($a,$b,$c){
        
        $delta = ($b*$b) - (4*$a*$c);

        if($delta < 0){
            echo "<p>Le delta obtenu est : ($b*$b) - (4*$a*$c) = $delta. Il n'y a pas de solution.</p>";
        }
        else if ($delta == 0){
            echo "<p>Le delta obtenu est : ($b*$b) - (4*$a*$c) = $delta. Il y a un seule solution qui est x=-b/(2a).</p>";
            $resultat = -$b / (2*$a);
            echo"$resultat";
        }
        else if ($delta > 0){
            echo "<p>Le delta obtenu est : ($b*$b) - (4*$a*$c) = $delta. il y a deux solutions qui sont x1 = (-b-√Δ)/(2a) et x2 = (-b+√Δ)/(2a).</p>";
            $resultat1 = (-$b-sqrt($delta))/(2*$a);
            $resultat2 = (-$b+sqrt($delta))/(2*$a);
            echo "<p> x1 = (-b-√Δ)/(2a) => $resultat1</p>
            <p> x2 = (-b+√Δ)/(2a) => $resultat1</p>";           
        }

    }
    equation(rand(1,10),rand(1,10),rand(1,10));
?>

<h2>Exercice 012</h2>

<?php
        $guy = [
            "Nom" => "Guy",
            "Age" => "42",
            "sexe" => "Homme"
        ];
    $delphine = [
            "Nom" => "Delphine",
            "Age" => "39",
            "sexe" => "Femme"
        ];

function afficher($x){
    echo '<p> Nom : '.$x["Nom"].'</p>
    <p> Age : '.$x["Age"].'</p>
    <p> Sexe : '.$x["sexe"].'</p>';
}
afficher($guy);
echo "<p> *******************</p>";
afficher($delphine);
?>

<h2>Exercice 013</h2>

<?php
    $brigitte = [
        "Nom" => "Brigitte",
        "Age" => "85",
        "sexe" => "Femme"
    ];

    $emmanuel = [
        "Nom" => "Emmanuel",
        "Age" => "40",
        "sexe" => "Homme"
    ];

    $tableau = [
        $guy,
        $delphine,
        $brigitte,
        $emmanuel
    ];


        foreach($tableau as $value){
            afficher($value);
            echo "<p> *******************</p>";
        }

?>

<h2>Exercice 014</h2>
<section class="tableaux">
<?php
 function moyenne($random){
    // Calcul moyenne 
    $m=0;
    $nbr=0;
    foreach($random as $value){
         $m+=$value;
         $nbr++;
        }
        $m=$m/$nbr;
        return $m;
    }
    foreach($tableau as $value){
        afficher($value);
        $moyenne =0;
        $nb = 0;
        $notes = [
            '1' => rand(1,20),
            '2' => rand(1,20),
            '3' => rand(1,20),
            '4' => rand(1,20)
        ];
        foreach ($notes as $key => $value){
            echo "<p>Note: $key : $value </p>";
            
        } 
        $moyenne = moyenne($notes);
        echo "<p>La moyenne est de : $moyenne / 20</p>";
        echo '<p> *******************</p>
        </div>';
    }
    ?>
</section>
    
</body>
</html>

</body>
</html>