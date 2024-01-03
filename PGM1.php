<?php

$students = array("Kuriakose", "Nithya", "Zia", "Adam", "Erald");


echo "Original array:\n";
print_r($students);


echo "<br><br>";


asort($students);
echo "Sorted array (ascending order):\n";
print_r($students);


echo "<br><br>";


arsort($students);
echo "Sorted array (descending order):\n";
print_r($students);

?>

