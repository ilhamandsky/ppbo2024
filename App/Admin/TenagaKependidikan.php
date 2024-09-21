<?php
namespace App\Admin;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function cekIn() : bool {
        return true;
    }
    
    public function cekOut() : bool {
        return true;
    }

    public function getNoHp() : int {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) : void {
        $this->no_hp = $no_hp;
    }
}
