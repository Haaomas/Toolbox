<!DOCTYPE html>
<html>

<body>

    <?php

    //GLOBAL VARIABLE
    $x = 30;
    $y = 40;

    function add()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z; //Avir utiliser $GLOBALS permet d'utiliser z en dehors de sa fonction

    //OTHER SUPERGLOBALS
    echo "<hr/>";

    echo $_SERVER['PHP_SELF']; //Affiche le chemin d'acces du fichier php 
    echo "<hr />";
    echo $_SERVER['SERVER_NAME']; //Affiche le nom du serveur
    echo "<hr />";

    ?>

</body>

</html>