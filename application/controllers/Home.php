<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('kota/balikpapan/home');
	}

	public function chart()
	{
		$data['balikpapanbbdata'] 		= $this->getdataaqms_m->getbalikpapanbbdata();
		$data['balikpapanbbispu'] 		= $this->getdataaqms_m->getbalikpapanbbispu();
		$data['balikpapanpbdata'] 		= $this->getdataaqms_m->getbalikpapanpbdata();
		$data['balikpapanpbispu'] 		= $this->getdataaqms_m->getbalikpapanpbispu();

		$this->load->view('kota/balikpapan/balikpapan', $data);
	}
}
