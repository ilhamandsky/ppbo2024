<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah Budi adalah {$luas_tanah} \n";

function kelilingLingkaran($jari) : float {
    $keliling = 2*3.14*$jari;
    return $keliling;
}

$keliling_lingkaran = kelilingLingkaran(45);
echo "keliling lingkaran adalah {$keliling_lingkaran}\n";
function volumeBola($jari) : float {
    $volume = 4/3*3.14*$jari*$jari*$jari;
    return $volume;
}
$volume_bola = volumeBola(45);
echo "volume bola adalah {$volume_bola}\n";
function volumeTabung($jari,$tinggi) : float {
    $volume2 = 3.14*$jari*$jari*$tinggi;
    return $volume2;
}
$volume_tabung = volumeTabung(45,14);
echo "volume tabung adalah {$volume_tabung}\n";
function volumeKerucut($jari,$tinggi) : float {
    $volume3 = 1/3*3.14*$jari*$jari*$tinggi;
    return $volume3;
}
$volume_kerucut = volumeKerucut(45,14);
echo "volume kerucut adalah {$volume_kerucut}\n";
?>