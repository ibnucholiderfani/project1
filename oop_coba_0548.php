<?php 
	
	abstract class Perhitungan
	{
		abstract protected function hitung();
		public $nilai_pertama = 10;
		public $nilai_kedua = 4;
	}

	class Jumlah extends Perhitungan
	{

	    public function hitung()
	    {
	        return ($this->nilai_pertama + $this->nilai_kedua);
	    }
	}

	class Kurang extends Perhitungan
	{

	    public function hitung()
	    {
	        return ($this->nilai_pertama - $this->nilai_kedua);
	    }
	}

	class Bagi extends Perhitungan
	{

	    public function hitung()
	    {
	        return ($this->nilai_pertama / $this->nilai_kedua);
	    }
	}

	class Kali extends Perhitungan
	{

	    public function hitung()
	    {
	        return ($this->nilai_pertama * $this->nilai_kedua);
	    }
	}

	class Sisa_bagi extends Perhitungan
	{

	    public function hitung()
	    {
	        return ($this->nilai_pertama % $this->nilai_kedua);
	    }

	}

	$jumlah = new jumlah();
	$kurang = new kurang();
	$kali = new kali();
	$bagi = new bagi();
	$sisa_bagi = new sisa_bagi();

	echo 'Hasil Penjumlahan dari 10 + 4 = '.$jumlah->hitung(). "<br/>";
	echo 'Hasil Pengurangan dari 10 - 4 = '.$kurang->hitung(). "<br/>";
	echo 'Hasil Perkalian dari 10 x 4 = '.$kali->hitung(). "<br/>";
	echo 'Hasil Pembagian dari 10 / 4 = '.$bagi->hitung(). "<br/>";
	echo 'Hasil Sisa Pembagian dari 10 dan 4 = '.$sisa_bagi->hitung(). " Bernilai genap <br/>";
 ?>