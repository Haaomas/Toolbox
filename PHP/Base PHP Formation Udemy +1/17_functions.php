<!DOCTYPE html>
<html>

<body>

    <?php
    //BASIC FUNCTION
    function displaytxt()
    {
        echo "My First Function";
    }

    displaytxt();

    echo "<hr />";

    //FUNCTION ARGUMENTS
    function myCar($car) //$car et créer pour la fonction et prendra la valeur qu'on lui donne a moment de l'appel 
    {
        echo "$car<br>";
    }

    myCar("Volvo"); //$car prend la valeur Volvo 
    myCar("BMW");
    myCar("Honda");

    ?>



</body>

</html>