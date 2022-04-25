<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>
    /*Formulaire*/
    <form action="register.php" method="post">

        <table width="300" border="0" cellspacing="1" cellpadding="1">
            <tr>
                <td>First Name:</td>
                <td> <input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit"></td>
            </tr>
        </table>

    </form>

</body>

</html>

//SQL PHP

<?php

$fname = val($_POST["fname"]); //Liaison entre chaque input
$lname = val($_POST["lname"]);
$email = val($_POST["email"]);

function val($data) //Validation des champ du formulaire 
{
    $data = trim($data); //Supprime les caractère invisible (espace, tabulation etc... utilise pour économiser de la pmace dans une BDD)
    $data = stripslashes($data); //Remplace les \ par des '
    $data = htmlspecialchars($data); // Convertie les éléments HTML en caractère pour éviter les problème d'injecction de code
    return $data;
}

$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Insertion des données 
$sql = "INSERT INTO users (firstname, lastname, email) 
VALUES ('$fname', '$lname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully. Record ID is: ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>