<?php


class Coba extends CI_Controller
{
	public function index()
	{
		$arrayName = array(
			'caption'=>'Tabel Teman'
		);
		$this->load->view('v_coba');
	}
}