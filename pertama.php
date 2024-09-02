<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama anda: ');
$waktu = date('H:i');

if ($waktu >= 5 && $waktu < 11) {
    echo "Selamat pagi, " . "$nama," . " sekarang pukul " . "$waktu";
} elseif ($waktu >= 11 && $waktu < 15) {
    echo "Selamat siang, " . "$nama," . " sekarang pukul " . "$waktu";
} elseif ($waktu >= 15 && $waktu < 19) {
    echo "Selamat sore, " . "$nama," . " sekarang pukul " . "$waktu";
} else {
    echo "Selamat malam, " . "$nama," . " sekarang pukul " . "$waktu";
}
