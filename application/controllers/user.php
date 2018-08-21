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
	if($this->session->userdata('strUserName')!=''){

		$title['title'] = "PUPHerbarium | Home";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/index');
		$this->load->view('userside/footer');
	}else{
	redirect(base_url().'user/index');
	}

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


	public function login_validation(){
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('loginUsername','Username','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if($this->form_validation->run()){
			$username = $this->input->post('loginUsername');
			$password = $this->input->post('loginPassword');

			$this->load->model('user_m');
			if($this->user_m->can_login($username,$password)){
				$session_data=array(
					'strUserName' => $username,

				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'user/home');
			}else{
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url().'user/index');
			}
		}
		else{
			redirect(base_url().'user/index');
		}
	}
	public function logout(){
		$this->session->unset_userdata('strUserName');
		redirect(base_url().'user/index');
	}

public function userRegister(){
		$result = $this->m->userRegister();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	function view_calendar()
	{
		$this->load->view('userside/fullcalendar');
	}
	public function appointment() {
	 $title['title'] = "PUPHerbarium | Appointment";
	 $this->load->view('userside/navbar2', $title);
	 $this->load->view('userside/Appointment');
	 $this->load->view('userside/footer');
	}

}?>
