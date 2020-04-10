<?php

    trait Php{
        public function demo(){
            return 'Hello From Demo';
        }
    }
    trait Java{
        function Java(){
            return 'I Love Java';
        }
    }
    class One{
        use Php;
    }
    class Two{
        use Java;
    }
    
    $one = new One();
    $two = new Two();
    echo $one->demo();
    echo '<br>';
    echo $two->Java();

