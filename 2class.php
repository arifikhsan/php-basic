<?php

class Manusia {
	public $WarnaKulit;
	public $WarnaRambut;
	public $tinggi;
	public $nama = 'default';

	public function setNama($nama) {
		$this->nama = $nama;
	}

	public function setTinggi($tinggi) {
		$this->tinggi = $tinggi / 100;
	}

	public function getNama() {
		return $this->nama;
	}

	public function getTinggi() {
		return $this->tinggi;
	}
}

$raisa = new Manusia;
$isyana = new Manusia;

$raisa->setNama('Raisa');
$raisa->setTinggi(160);

var_dump($raisa->getTinggi());
echo '<br>';
var_dump($raisa->getNama());

// var_dump($isyana);