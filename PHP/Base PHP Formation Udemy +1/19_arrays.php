<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array PHP</title>
</head>
<body>
    
</body>
</html>

<body>

    <?php
    define("LIGN", "<hr/>"); //Constante qui sauvegarde une ligne <hr/> 

    //INDEXED ARRAY 
    $colors = array ("Blue", "Green", "Red");
    echo "My Favorite Colors are: " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . LIGN; //Tableau commence par 0

    //ARRAY LENGTH
    echo count($colors) . LIGN; //count permet de donner le nombre de ligne dans le tableau

    //LOOP THROUGH AN INDEXED ARRAY
    $arrlength = count($colors); //Pour chaque couleurs fait un echo

    for ($x = 0; $x < $arrlength; $x++) {
        echo $colors[$x] . "<br />";
    }

    echo LIGN;

    //ASSOCIATIVE ARRAYS
    $tscore = array("John" => "60", "Bill" => "80", "Dan" => "75");
    echo "Bill scored " . $tscore['Bill'] . " /100."; //$tscore["Bill"] demande la valeur scocké dans Bill donc 80

    echo LIGN;

    //LOOP THROUGH AN ASSOCIATIVE ARRAY
    foreach ($tscore as $x => $score) { //Même chose que plus haut mais dans le cas d'une boucle foreach
        echo "Key=" . $x . ", Score=" . $score;
        echo "<br>";
    }

    ?>

</body>

</html>