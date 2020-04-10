<?php


class Statics {
    public static $number = 0;
    public static function add(){
        echo self::$number++;
    }
}
Statics::add();
Statics::add();
Statics::add();
