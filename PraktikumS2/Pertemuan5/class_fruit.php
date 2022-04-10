<?php
class fruit{
    public $name;
    public $warna;
    
    public function __construct($name, $warna){
        $this->name = $name;
        $this->warna = $warna;
    }

    public function intro(){
        echo "<br/>Kamu Adalah {$this->name} dan warna kamu adalah {$this->warna}";
    }
}
class Strawberry extends fruit{
    public function message(){
        echo "Aku adalah sebuah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry", "Merah");
$buah->message();
$buah->intro();

?>