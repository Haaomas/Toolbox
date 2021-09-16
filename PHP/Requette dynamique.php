<?php 
$query = $pdo->prepare(
    'SELECT productName, quantityOrdered, priceEach, (priceEach * quantityOrdered) as Total
        FROM products
        INNER JOIN orderdetails ON products.productCode = orderdetails.productCode
        WHERE orderNumber = :order_number ');

$query->execute(
    [
        ':order_number' => $_GET['nbOrder'],
    ]
);


// $customers = $query->fetchAll(); // Tous les résulats sous la forme de tableau de tableau
$produits = $query->fetch(); // Un résultat
