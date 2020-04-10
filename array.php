<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrayCount = count($cars);
    for($i = 0; $i<=$arrayCount; $i++){
        echo $cars[$i];
    }
    $ages = array("Imran"=>"35", "Alamgir"=>"28","Mostafiz"=>"25");
    echo 'My name is Imran my age ' . $ages["Imran"];
    
    echo '<br>';
    foreach ($ages as $x => $ages_value){
        echo $x." = ".$ages_value.'<br>';
    }
    echo '<br>';
    //multidimensional Array
    $cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
    for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
echo '<br>';
    $numbers = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
    rsort($numbers);
    $length = count($numbers);
    for($i = 0; $i<=$length; $i++){
        echo $numbers[$i];
        echo '<br>';
    }
