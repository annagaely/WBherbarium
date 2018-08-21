<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('user_m', 'm');
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

		$this->load->view('userside/footer');
	}
	public function register()
	{
		$title['title'] = "PUPHerbarium | Register";
		$this->load->view('userside/register', $title);
		$this->load->view('userside/footer');
	}
	public function home()
	{
		$title['title'] = "PUPHerbarium | Home";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/index');
		$this->load->view('userside/footer');
	}
	public function collection()
	{
		$title['title'] = "PUPHerbarium |  Collection";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/collection');
		$this->load->view('userside/footer');
	}
	public function deposits()
	{
		$title['title'] = "PUPHerbarium |  Deposits";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Deposit');
		$this->load->view('userside/footer');
	}
	public function loans()
	{
		$title['title'] = "PUPHerbarium |  Loans";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Loan');
		$this->load->view('userside/footer');
	}

	public function addDeposit(){
		$result = $this->m->addDeposit();
		echo json_encode($result);

	}

	public function uploadPic()
	{
		$config = [
			'upload_path' => ' ./uploads',
			'allowed_types' => 'jpg'
		];

		$this->load->library('upload', $config);
		$this->form_validation->set_error_delimiters();

			if($this->upload->do_upload()) 
			  {
				$data = $this->input -> post(); 
				$info = $this->upload -> data();
				$image_path = base_ur;("uploads/".$info['raw_name'].$info['file_ext']);
				$data['avatar'] = $image_path;

				$this->load->model('addDeposit');

				if($this->queries->insertImage($data)) 
				{
					echo 'Image uploaded sucessfully';
				}
				else {
					echo 'Failed to add Image';
				}

		      }
		    else
		      {
		 		$this->deposits();
		}
	}
}

?>
