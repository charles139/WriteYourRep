<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	// public function __construct()
	// {
	// 	parent:: __construct();
	// }
	public function index()
	{
		$data['title'] = 'Write Your Congressman';
		$this->load->view('home' , $data);
	}

	public function find()
	{
		// $response = file_get_contents("https://congress.api.sunlightfoundation.com/legislators/locate?apikey=0ba7f544a5a7400ab821cfad4eb6f0d0&latitude=37.37&longitude=-121.91");
		$response = file_get_contents("https://congress.api.sunlightfoundation.com/legislators/locate?apikey=0ba7f544a5a7400ab821cfad4eb6f0d0&zip=".$this->input->post('zip_code'));
		$data['json'] = json_decode($response, true);
		$data['title'] = 'Write Your Congressman';
		$data['zip'] = $this->input->post('zip_code');
		$data['count'] = $data['json']['count'];
		// var_dump($data['json']);
		// die;
		$this->load->view('show', $data);
	}
}