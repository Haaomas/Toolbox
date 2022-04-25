<?php

function getOneCocktail($id)
{
    $pdo = connexionMySQL(); //je me connecte à la base de donnée

//                prepare ce que je veux *tout depuis cocktail ou l'id est = à un parametre que je nomme :id_number 
    $query = $pdo->prepare(
        "SELECT *, YEAR( annéeDeConception ) as year 
        FROM COCKTAIL 
        INNER JOIN FAMILLE 
        ON COCKTAIL.famille = FAMILLE.id 
        WHERE COCKTAIL.id = :id_number"); 

    $query->execute( // j'execute la demande 
        [
                ':id_number' => $id //je créer ce paramettre :id_number et je lui assigne $id (fonctionne comme une variable)
                //pareil que WHERE = $id mais par évite les fails de sécurité
        ]  
    );
        
        $leCocktail = $query -> fetch(); //renvoie l'informations d'un article *         
        return $leCocktail; //retourne la fonction sous forme d'une variable 
}