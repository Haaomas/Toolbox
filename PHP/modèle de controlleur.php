<?php

// Chargement des autres programmes PHP dont on dépend.
include "models/cocktail.php";

// Récupération du cocktail stocké en base de données
$id = $_GET['id'];  //réccupéré duepuis l'url pour le mettre dans $id

$theCocktail = getOneCocktail($id); //ensuite lance la fonction 


// Chargement du template
include 'templates/details_cocktail.phtml';

