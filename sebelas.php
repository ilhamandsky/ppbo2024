<?php
require_once 'vendor/autoload.php';

use App\Admin\Dosen;

$dian = new Dosen(6211111);
$dian->nip = 198411132015041001;
$dian->nama = 'Dian Prawira';
$dian->alamat = 'Jln Purnama';
$dian->setNoHp(62111111);
$noHp = $dian->getNoHp();
$dian->nidn = '0013118405';
$dian->mengajar();