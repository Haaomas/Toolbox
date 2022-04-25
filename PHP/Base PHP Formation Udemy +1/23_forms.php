<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
</head>

<body>

	<!--<form action="send.php" method="GET"> Passe par l'URL, pas vraiment sécurisé -->

	<form action="send.php" method="post">
		First Name: <input type="text" name="fname"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>

</body>

</html>