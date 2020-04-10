<?php
    
    //String, Integer, Floating
    echo $x = "Hello World.<br>";
    echo $y = 500,'<br>';
    echo $z = 15.015,'<br>';
    var_dump($x);
    //Boolean
    $a = 15;
    if($a == 105){
        echo 'True';
    } else {
        echo 'False';
}
    //Array
    echo '<br>';
    $cars = array('Volbo', 'BMW', 'Toyota');
    var_dump($cars);
    
    //Constant
    
    const x = 10;
    echo x;
    define("y", 500);
    echo y;