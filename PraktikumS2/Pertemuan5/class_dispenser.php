<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;
   

    public function isi(){
        $this->volume = 1000;
        echo "Volume galon nya adalah {$this->volume} Ml";
    }

    function harga(){
        $this->hargaSegelas = 3000;
        echo "Harga Segelas nya adalah {$this->hargaSegelas} Rupiah";
    }

    function gelas(){
        $this->volumeGelas = 250;
        echo "Andi beli air gelas yang volume nya {$this->volumeGelas} Ml";
    }

    function hasil(){
        $this->hasil = $this->volume - $this->volumeGelas;
        echo "Hasil Volume Sekarang adalah {$this->hasil} Ml";
    }
}
$penser = new Dispenser();
echo $penser -> namaMinuman = 'Nama Minuman Aqua';
echo "<hr><br/>";
echo $penser -> isi();
echo "<br/>";
echo $penser ->harga();
echo "<br/>";
echo $penser ->gelas();
echo "<br/>";
$penser ->hasil();

?>