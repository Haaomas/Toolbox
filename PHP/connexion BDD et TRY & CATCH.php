<?php 

try {
    $pdo = new PDO('mysql:host=localhost;dbname=classicmodels;charset=utf8', 'root', 'root',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    echo "il y a un souci avec la connexion"; //$e->getMessage()
    die; // Tuer le reste du script pour prendre en compte l'erreur
}

function connexionMySQL()
{
    // Création d'une fonction de connexion à MySQL.
    $pdo = new PDO('mysql:host=localhost;dbname=mistercocktail;charset=utf8','root','root');
    return $pdo;

    // Cette fonction appelle PDO puis **renvoie** l'objet PDO représentant la connexion.
    // Cela permet alors aux autres fonctions de faires des requêtes SQL.
}