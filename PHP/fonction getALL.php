<?php

function getAllCocktails()
{
    //connecter à la bdd
    $pdo = connexionMySQL();

    //chercher tous les cocktail en bdd

    //une requête de type select nécessite 3 étapes:

    //préparation de la requête
    $query = $pdo->prepare("SELECT * FROM COCKTAIL");

    //execution de la requête
    $query->execute();

    //récupération des données dans une variable
    $cocktails = $query->fetchAll(PDO::FETCH_ASSOC); //renvoie uniquement un tableau associatif avec fetch_assoc

    return $cocktails;
}
