<?php

#nama kelas
class perkenalan
{
	private $nama;
	private $status;

	public function __construct($nama, $status)
	{
		$this->nama = $nama;
		$this->status = $status;
	}

	public function tampilkan()
	{
		$text = 'perkenalkan saya ' .$this->nama. ' seorang '.$this->status. '<br/><br/>';
		return $text;
	}
}

$perkenalkan = new perkenalan ('Ibnu Kholid', 'mahasiswa');
echo $perkenalkan->tampilkan();

?>