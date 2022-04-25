<!DOCTYPE html>
<html>

<body>

   <?php
   $grades = array( //Tableau imbriqué 
      array("John", 50, 60),
      array("Bob", 40, 25),
      array("Sam", 35, 48),
      array("Ted", 55, 26)
   );

   echo $grades[0][0] . ": Test 1: " . $grades[0][1] . ", Test 2: " . $grades[0][2] . ".<br>";
   echo $grades[1][0] . ": Test 1: " . $grades[1][1] . ", Test 2: " . $grades[1][2] . ".<br>";
   echo $grades[2][0] . ": Test 1: " . $grades[2][1] . ", Test 2: " . $grades[2][2] . ".<br>"; //Tableau numéro 2 (donc 3 vue qu'on commence à 0) avec sa valeur 0 = SAM concaténation Test1 puis [2][1]35 puis [2][2]48 
   echo $grades[3][0] . ": Test 1: " . $grades[3][1] . ", Test 2: " . $grades[3][2] . ".<br>";
   ?>

</body>

</html>