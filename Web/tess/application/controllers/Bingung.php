<?php

class Bingung extends CI_Controller
{
	public function index ()
	{
		/*$data['judul'] = 'Cak BTC Mines 20%';
		$data['footer'] = '<em>Kumenangis By AlfuAT</em>';*/

		$data = array(
			'judul' => 'Cak BTC Mines 20%'
			, 'footer' => '<em>Kumenangis By AlfuAT</em>'

		):

		$this->load->view('kepala',$data);
		$this->load->view('badan');
		$this->load->view('kaki',$data);
	}
}