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
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium |  Deposits";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Deposit');
		$this->load->view('userside/footer');
	}
	else{
	redirect(base_url().'user/index');
	}
}

	public function loans()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium |  Loans";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Loan');
		$this->load->view('userside/footer');
	}else{
	redirect(base_url().'user/index');
	}
	}


	public function login_validation(){
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('loginUsername','Username','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if($this->form_validation->run()){
			$username = $this->input->post('loginUsername');
			$password = $this->input->post('loginPassword');
			$id = $this->input->post('txtId');

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
    echo json_encode($result);
}

	function view_calendar()
	{
		$this->load->view('userside/fullcalendar');
	}


	public function appointment() {
	if($this->session->userdata('strUserName')!=''){
	 $title['title'] = "PUPHerbarium | Appointment";
	 $this->load->view('userside/navbar2', $title);
	 $this->load->view('userside/Appointment');
	 $this->load->view('userside/footer');
	 	}else{
	redirect(base_url().'user/index');
	}
	}


	public function addLoanReq(){
		$result = $this->m->addLoanReq();
		echo json_encode($result);
	}

	public function showSciName(){
	$result = $this->m->showSciName();
	echo json_encode($result);
	}

	public function addAppointment(){
		$result = $this->m->addAppointment();
		echo json_encode($result);
		$this->load->helper('url');
		redirect('/user/loans', 'refresh');
}


	public function addDeposit(){
		$result = $this->m->addDeposit();
		echo json_encode($result);

	}



}?>
