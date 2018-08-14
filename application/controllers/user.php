<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('admin_m', 'm');		
    }

   	public function index()
	{
		$title['title'] = "PUPHerbarium | Home";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/Index');
		$this->load->view('userside/footer');
	}
	public function faq()
	{
		$title['title'] = "PUPHerbarium | FAQ";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/Faq');
		$this->load->view('userside/footer');
	}
	public function contact()
	{
		$title['title'] = "PUPHerbarium | Contact";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/Contact');
		$this->load->view('userside/footer');
	}
	public function collection()
	{
		$title['title'] = "PUPHerbarium | Collection";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/Collection');
	}
}


?>