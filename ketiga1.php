<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

$lingkaran = new Lingkaran(4);
$lingkaran->jari_jari = 4;
echo "Keliling lingkaran adalah " . $lingkaran->keliling() . " cm\n";
echo "Luas lingkaran adalah " . $lingkaran->luas() . " cm^2\n";

$bola = new Bola(4);
$bola->jari_jari = 4;
echo "Volume bola adalah " . $bola->volume() . " cm^3\n";

$tabung = new Tabung(4, 10);
$tabung->jari_jari = 4;
$tabung->tinggi = 10;
echo "volume tabung adalah " . $tabung->volume() . " cm^3\n";

$kerucut = new Kerucut(4, 10);
$kerucut->jari_jari = 4;
$kerucut->tinggi = 10;
echo "Volume kerucut adalah " . $kerucut->volume() . " cm^3\n";

$nasi_tumpeng = $kerucut-> volume(4, 10);
echo "Volume nasi tumpeng adalah {$nasi_tumpeng}.";
