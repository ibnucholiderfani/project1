<?php

#nama kelas
class Perkenalan
{
	public $nama;
	public $status;

	public function setVar($new_nama, $new_status)
	{
		$this->nama = $new_nama;
		$this->status = $new_status;
	}

	public function tampilkan()
	{
		$text = 'perkenalkan saya ' .$this->nama. ' seorang '.$this->status. '<br/><br/>';
		return $text;
	}
}

class Kenalan_1 extends Perkenalan
{

    public function tampilkan()
    {
        $text = 'Perkenalkan Class Extends 1 = <br/> Halo, Perkenalkan Nama Saya :' .$this->nama. '<br/> Saya adalah seorang '.$this->status.'<br/><br/>';
        return $text;
    }
}

class Kenalan_2 extends Perkenalan
{

    public function tampilkan()
    {
        $text = 'Perkenalkan Class Extends 2 = <br/> Halo, Im using whatshapp my name :' .$this->nama. '<br/> Saya masih '.$this->status.'<br/><br/>';
        return $text;
    }
}

$perkenalan2 = new Kenalan_1();
$perkenalan2->setVar("Ibnu Kholid","Mahasiswa");
echo $perkenalan2->tampilkan();

$perkenalan3 = new Kenalan_2 ();
$perkenalan3->setVar("Ibnu Kholid","Mahasiswa");
echo $perkenalan3->tampilkan();


?>