<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function helloWorld(){
		echo "Hello World!";
		$this->load->database();

		$result = $this->db->get('items')->result();
		echo "<pre>";
		print_r($result);
		echo "</pre>";
	}
}
