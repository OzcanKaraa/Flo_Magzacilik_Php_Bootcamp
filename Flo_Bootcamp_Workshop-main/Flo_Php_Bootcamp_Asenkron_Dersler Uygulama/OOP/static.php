<?php
//Static daha hizli erisme

class Arabalar{
    public static $renk = "siyah";
    public  static $model = "2022";
    public static function Siyah(){
        echo self::$renk;
        echo self::$model;

//    echo "Siyah Renk";
    }
    public function Beyaz(){

    }
}
class Arabalar2 extends Arabalar{
    public function Kirmizi(){
        parent::$renk;
    }
//    public function Siyah(){
//        echo "Sıyah";
//    }
}
Arabalar::Siyah();