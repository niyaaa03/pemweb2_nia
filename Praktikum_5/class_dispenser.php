<?php
class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    public isi($vol) {
        $this->volume = $vol;
    }
}
$mango = new fruit();
$volume->set_volume('250ml'); // ok
$hargaSegelas->set_hargaSegelas('2000'); // error
$volumeGelas->set_volumeGelas('250'); // error
$namaMinuman->set_namaMinuman('jus jeruk'); // error

?>
