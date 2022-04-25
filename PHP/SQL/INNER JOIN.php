<?php

$query = $pdo -> prepare ("SELECT *
FROM table1
INNER JOIN table2 ON table1.id = table2.fk_id")

?>