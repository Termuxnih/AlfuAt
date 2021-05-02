<?php

class Ea extends CI_Controller
{
	private function cetak($kuy)
	{
		echo $kuy;
	}

	public function cek()
	{
		$ko = "Nama Saya Cak";
		$this->cetak($ko);
	}
}