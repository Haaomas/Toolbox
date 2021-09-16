<?php 

// Mode Static
$query = $pdo->query('SELECT customerNumber, customerName, city FROM customers');
$customers = $query->fetchAll(); // Tous les résulats sous la forme de tableau de tableau
