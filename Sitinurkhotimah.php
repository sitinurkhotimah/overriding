<?php

	class karyawan{
		

			public $nama, $pendidikanterakhir, $alamat, $jenispekerjaan;
			public function __construct($nama = "Arif Santoso", $pendidikanterakhir = "sma", $alamat = "Jln Mawar 01", $jenis pekerjaan = "Marketing"){
				$this->nama = $nama;
				$this->pendidikanterakhir = $pendidikanterakhir;
				$this->alamat = $alamat;
				$this->jenispekerjaan = $jenispekerjaan;
			
			}
			public function getinfokaryawan(){

				$kry = "<br>Arif Santoso : {$this->nama}, <br>sma : {$this->pendidikanterakhir}, <br>Jln Mawar 01 : {$this->alamat}, <br>Marketing : {$this->jenispekerjaan}";

				return $kry;		
			}
	}

	Class karyawansementara extends karyawan {

		public function getinfokaryawan(){
			$kry = "karyawan lama : ".parent::getinfokaryawan();
			return $kry;
		
		}
	}
	class karyawantetap extends karyawan{

		public $idkaryawan;
		public function __construct($nama, $pendidikanterakhir, $alamat, $jenispekerjaan, $idkaryawan){
			parent::__construct($nama, $pendidikanterakhir, $alamat,$jenispekerjaan, $idkaryawan);
			$this->idkaryawan = $idkaryawan;
		}
		public function getinfokaryawan(){

			$kry = "karyawan tetap : ".parent::getinfokry()."<br>id karyawan : {$this->idkaryawan}";
			return $kry;
		}
	}	

	$kry1 = new karyawansementara("Arif Santoso", "sma", "Jln Mawarn 01", "Marketing");
	$kry2 = new karyawanlama("Budiman", "s1", "Jln wayong", "Manager", "23d45e");

	echo $kry1->getinfokaryawan();
	echo "<br>";
	echo "<br>";
	echo $kry2->getinfokaryawan();


?>