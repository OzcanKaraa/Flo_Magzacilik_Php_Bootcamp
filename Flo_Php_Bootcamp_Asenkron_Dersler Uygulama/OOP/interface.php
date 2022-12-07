<?php
interface zorunlu{
    public function __construct();
    public function error($message);
}
interface zorunlu2 extends zorunlu{
    public function __destruct();
}
class merhaba implements zorunlu{
    public function __construct()
    {
            echo "Merhaba .<br>";
    }
    public function error($msg)
    {

    }
    public function deneme(){

    }
    public function deneme2(){

    }
    public function __destruct(){
        echo  "bıttı";
    }
}

new merhaba();