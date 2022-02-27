<?php
$ar_buah = ["Pepaya","Mangga","Pisang","Jambu"];
// cetak buah index ke 2
echo " Ini adalah hasil data dalam array";
echo "<br/>$ar_buah[2]";
// cetak jumlah buah
echo '<br/>Jumlah buah ' .count($ar_buah);
// cetak seluruh buah
echo "<ol>";
foreach ($ar_buah as $buah) {
    echo "<li>$buah</li>";
}
echo "</ol>";
// Tambahkan data array
$ar_buah[] = "Durian";
// Hapus salah satu data berdasarkan indexnya
unset($ar_buah[1]);
// Ubah buah index ke dua menjadi manggis
$ar_buah[2] = "Manggis";
echo "<ul>";
foreach ($ar_buah as $b => $v) {
    echo "<li>Buah index ke - $b adalah $v </li>";
}
echo "</ul>";
?>