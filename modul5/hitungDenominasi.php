<?php
$jumlahUang = 1575250;
$mataUang = [100000,50000,20000,5000,100,50];
$count = [0, 0, 0, 0, 0, 0];

for($i = 0; $i < count($mataUang); $i++){
    while ($jumlahUang >= $mataUang[$i]) {
        $count[$i]++;
        $jumlahUang = $jumlahUang - $mataUang[$i];
    }
}

echo "Jumlah Rp. 100.000 : ".$count[0]. "<br />";
echo "Jumlah Rp. 50.000 : ".$count[1]. "<br />";
echo "Jumlah Rp. 20.000 : ".$count[2]. "<br />";
echo "Jumlah Rp. 5.000 : ".$count[3]. "<br />";
echo "Jumlah Rp. 100 : ".$count[4]. "<br />";
echo "Jumlah Rp. 50 : ".$count[5]. "<br />";
?>
