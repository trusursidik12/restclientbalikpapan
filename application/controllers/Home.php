<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function index()
	{
		$data['pelindodata01'] 		= $this->getdata_m->get_data1();
		$data['pelindoispu01'] 		= $this->getdata_m->get_ispu1();
		$data['pelindodata02'] 		= $this->getdata_m->get_data2();
		$data['pelindoispu02'] 		= $this->getdata_m->get_ispu2(1);

		$this->load->view('kota/indoor/temp', $data);
	}

	function chart()
	{
		$data['pelindodata01'] 		= $this->getdata_m->get_data1();
		$data['pelindoispu01'] 		= $this->getdata_m->get_ispu1();
		$data['pelindodata02'] 		= $this->getdata_m->get_data2();
		$data['pelindoispu02'] 		= $this->getdata_m->get_ispu2(1);;

		$this->load->view('kota/indoor/chart', $data);
	}
}
