<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('station_model','station');
	}

	public function index()
	{
		$this->load->view('index');
	}
	public function add_data()
	{
		$data = array(
		'procession' => $this->input->post('procession'),
		'note' => $this->input->post('note')
		);
		$data1 = array(
		'd_station' => $this->input->post('d_station'),
		'd_time' => $this->input->post('d_time')
		);
		$data2 = array(
		'b_to' => $this->input->post('b_to'),
		'b_out' => $this->input->post('b_out')
		);
		$data3 = array(
		'a_station' => $this->input->post('a_station'),
		'a_time' => $this->input->post('a_time')
		);
		$this->station->insert_station($data);
		$this->station->insert_departure($data1);
		$this->station->insert_break($data2);
		$this->station->insert_destination($data3);
		redirect('welcome/show');
	}
		public function show()
	{
		$data['query'] = $this->station->show();	
		$this->load->view('list',$data);
	}

}
