<?php
$servername = "localhost";
$username = "root";
$password = "test2";
$dbname = "mywebsite";

// Create Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Prepare Statement
$stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)"); //On ne peux pas laisser les VALUES vide il faut les remplacer par des ?, on prépare l'insertion pour plus tard 

//Bind Prepare Statement
$stmt->bind_param("sss", $firstname, $lastname, $email); //sss pour dire que les trois paramètre seront des string 

// Set Parameters and Execute
$firstname = "Lewis";
$lastname = "Hall";
$email = "lewis@me.com";
$stmt->execute(); //On execute une insertion

$firstname = "Allen";
$lastname = "Moore";
$email = "allen@me.com";
$stmt->execute();

$firstname = "Dave";
$lastname = "Jones";
$email = "dave@me.com";
$stmt->execute();

echo "New Records Created";

// Close Statement and Database Connection
$stmt->close();
$conn->close();
