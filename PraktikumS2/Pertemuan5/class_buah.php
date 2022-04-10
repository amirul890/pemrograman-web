<?php
// buka class buah
    class buah{
        // buat property
        public $name;
        protected $color;
        private $berat;

        // buat method utk akses variable color dan berat
        function set_color ($c){
            return $this->color = $c;
        }

        function set_berat ($b){
            return $this->berat = $b;
        }
    }
// buat object
$mangga = new buah();
echo $mangga -> name = 'mangga';
echo "<br/>" ;
echo $mangga -> set_color('hijau');  
echo "<br/>" ;
echo $mangga -> set_berat('20 kg');  
?>