<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function index()
	{

		$this->load->view('kota/balikpapan/balikpapan_exportdata');
	}
}
