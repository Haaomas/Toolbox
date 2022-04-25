<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Récupère les informations du formulaire via $_GET[""]
    First Name: <?php echo $_GET["fname"]; ?><br> //
    Email: <?php echo $_GET["email"]; ?> -->
    <!-- Récupère les informations du formulaire via $_POST[""] -->
    First Name: <?php echo $_POST["fname"]; ?><br> //
    Email: <?php echo $_POST["email"]; ?>

    <!-- La mathode de récupération doit être en accord avec celle d'envoe GET avec GET, POST avec POST -->

</body>

</html>