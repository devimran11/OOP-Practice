<?php

class ParentCls {
    private $name = "Imran";
    function coronaVirus(){
        echo 'This virus place of origin In China';
    }
    private function number(){
        echo 'Bank Account Number';
    }
    public function brother(){
        return $this->name;
    }
    public static function One(){
        echo 'Count Number One';
    }
}
$par = new ParentCls;
 $par->brother();
 
ParentCls::One();