<h2>
<?php
$bil1 = $_GET['bil1'];
$bil2 = $_GET['bil2'];
$operator = $_GET['operator'];
echo "Bil 1 adalah $bil1 <br>";
echo "Bil 2 adalah $bil2 <br>";
if($operator == 1){
    $jumlah = $bil1 + $bil2;
    echo "Hasil Pertambahan Adalah $jumlah";
}
elseif($operator == 2){
    $jumlah = $bil1 - $bil2;
    echo "Hasil Pengurangan Adalah $jumlah";
}
elseif($operator == 3){
    $jumlah = $bil1 * $bil2;
    echo "Hasil Perkalian Adalah $jumlah";
}
elseif($operator == 4){
    $jumlah = $bil1 / $bil2;
    echo "Hasil Pembagian Adalah $jumlah";
}
?>
</h2>
