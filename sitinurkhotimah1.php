<?php

	class Mahasiswa{
		//baris yang digunakan untuk membuat sebuah class//

			public $nim, $nama, $prodi, $asalSma;
			//digunakan untuk menentukan variael apa yang akan dibuat//

			public function __construct($nim = "NIM", $nama = "NAMA", $prodi = "PRODI", $asalSma = "Asal SMA"){
				//untuk membuat isi dari variabel yang kita tentukan//

				$this->nim = $nim;
				$this->nama = $nama;
				$this->prodi = $prodi;
				$this->asalSma = $asalSma;
				//merupakan tujuan dari variabel//

			}
			public function getinfoMahasiswa(){

				$mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, PRODI : {$this->prodi}, Asal SMA : {$this->asalSma}";

				return $mhs;
				//digunakan untuk menampilkan susunan kata yang akan ditampilkan//
			}
	}

	Class MahasiswaStrataSatu extends Mahasiswa {
		//digunakan untuk membuat kelas baru//

		public function getInfoMahasiswa(){
			$mhs = "Mahasiswa S1 : ".parent::getInfoMahasiswa();
			return $mhs;
			//baris yang digunakan untuk mencocokan seuah variabel atau public function yang ada di get infomahasiswa//
		}
	}
	class MahasiswaStrataDua extends Mahasiswa{
		//Membuat kelas baru lainnya//

		public $asalS1;
		public function __construct($nim, $nama, $prodi, $asalSma, $asalS1){
			parent::__construct($nim, $nama, $prodi, $asalSma);
			$this->asalS1 = $asalS1;
			//baris ini berisi perintah baru yang akan diambahkan seperti asal s1//
		}
		public function getInfoMahasiswa(){

			$mhs = "Mahasiswa S2 : ".parent::getInfoMahasiswa().", Asal S1 : {$this->asalS1}";
			return $mhs;
			//digunakan untuk menampilkan perintah baru seperti s2 dan sesuai dengan urutan serta menampilkan kembali pula perintah yang sebelumnya yaitu asal s1//
		}
	}	

	$mahasiswa1 = new MahasiswaStrataSatu("F1G118050", "Siti Nur Khotimah", "Ilmu Komputer", "SMAN 5 KENDARI");
	$mahasiswa2 = new MahasiswaStratadua("F1G118013", "NUR Anita", "Ilmu Komputer", "SMA 1 LAMBANDIA", "UHO");
	//baris yang menampilkan hasil dari program dan di tampilka sesuai dengan susunannya//

	echo $mahasiswa1->getInfoMahasiswa();
	//untuk menampilkan data pada mahasiswa1 yang tidak mempunyai asal s1//
	echo "<br>";
	//untuk membuat baris baru//
	echo $mahasiswa2->getInfoMahasiswa();
	//Untuk menampilkan data yang ada pada mahasiswa 2, yang memiliki asal S1//

?>