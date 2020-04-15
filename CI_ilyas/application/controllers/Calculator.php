<?php if (! defined('BASEPATH')) exit('No direct script access allowed') 

class Calculator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array(
			'hasil'=>0
			, 'var1'=>0
			, 'var2'=>0
			, 'operasi'=>'kurang'
		);
		$this->load->view('from_calculator', $data);
	}

	public function hasil_hitung()
	{
		$this->load->library("cuma_angka");

		$val1 = $this->cuma_angka->getAngka($this->input->post('var1'));
		$val2 = $this->cuma_angka->getAngka($this->input->post('var2'));
		$operasi = $this->input->post('operasi');

		$this->load->model('calculator_model');
		$hasil = $this->calculator_model->hitung_operasi($val1, $val2, $operasi);

		$data = array(
			'hasil' => $hasil
			, 'var1' => $val1
			, 'var2' => $val2
			, 'operasi' => $operasi
		);
		$this->load->view('from_calculator', $data);
	}

}