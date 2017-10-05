<?php

// kelas yang punya atribut bebas

// mobil taksi, van, pickup, kopata, sport, sedan
class Mobil {						// class
	public $roda = 4;				// atribut
	public $kemudi = 'setir';		// atribut
	public $bbm = 'bensin';			// atribut
	public $pengguna;				// atribut
	public $warna;					// atribut
	public $kapasitas;				// atribut
	public $merk;					// atribut


	public function setPengguna($pengguna) {
		$this->pengguna = $pengguna;
	}

	public function setWarna($warna) {
		$this->warna = $warna;
	}

	public function setKapasitas($orang) {
		$this->kapasitas = $orang;
	}

	public function setMerk($merk) {
		$this->merk = $merk;
	}


	public function getPengguna() {
		return $this->pengguna;
	}

	public function getWarna() {
		return $this->warna;
	}

	public function getKapasitas() {
		return $this->kapasitas;
	}

	public function getMerk() {
		return $this->merk;
	}
}

$sedan = new Mobil;				// objek
$sport = new Mobil;				// objek
$taksi = new Mobil;				// objek

$sedan->setPengguna('pribadi');
$sedan->setWarna('merah');
$sedan->setKapasitas(4);
$sedan->setMerk('daihatsu');

$sport->setPengguna('pribadi');
$sport->setWarna('biru');
$sport->setKapasitas(2);
$sport->setMerk('lamborgini');

$taksi->setPengguna('umum');
$taksi->setWarna('kuning');
$taksi->setKapasitas(4);
$taksi->setMerk('toyota');

echo '<pre>';
var_dump($sedan);
echo '</pre>';

echo '<pre>';
var_dump($sport);
echo '</pre>';

echo '<pre>';
var_dump($taksi);
echo '</pre>';