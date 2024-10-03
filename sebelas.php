<?php

require_once 'vendor/autoload.php';

use App\Model\Akademik\Dosen;

$dian = new Dosen(nip: 198411132015041001, nama : "Dian Prawira", no_hp:  62111111, alamat:  "Jln Purnama", nidn: "0013118405");
$dian->mengajar();
$dian->nidn = "1000121184001";
echo $dian->getNoHp();
