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
		$title['title'] = "Welcome to PUP Herbarium";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/landingpage');
		$this->load->view('userside/footer');
	}
	public function FAQsUser()
	{
		$title['title'] = "PUPHerbarium | FAQ";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/Faq');
		$this->load->view('userside/footer');
	}
  public function FAQs()
	{
		$title['title'] = "PUPHerbarium | FAQ";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Faq');
		$this->load->view('userside/footer');
	}

	public function contactUser()
	{
		$title['title'] = "PUPHerbarium | Contact";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/contactuser');
		$this->load->view('userside/footer');
	}
  public function contact()
	{
		$title['title'] = "PUPHerbarium | Contact";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/contactuser');
		$this->load->view('userside/footer');
	}

  public function CollectionUser()
  {
    $title['title'] = "PUPHerbarium |  Collection";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/collection');
		$this->load->view('userside/footer');
  }
  public function collection()
	{
		$title['title'] = "PUPHerbarium |  Collection";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/collection');
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

		$title['title'] = "Welcome to PUPHerbarium!";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/landingpage');
		$this->load->view('userside/footer');
	}else{
	redirect(base_url().'user/index');
	}

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
	public function howtodeposit()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium |  Steps How to Deposit";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/howtodeposit');
		$this->load->view('userside/footer');
	}
	else{
	$title['title'] = "PUPHerbarium |  Steps How to Deposit";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/howtodeposit');
		$this->load->view('userside/footer');
	}
}

public function howtovisit()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium |  Steps How to Visit";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/howtovisit');
		$this->load->view('userside/footer');
	}
	else{
	$title['title'] = "PUPHerbarium |  Steps How to Visit";
		$this->load->view('userside/navbar', $title);
		$this->load->view('userside/howtovisit');
		$this->load->view('userside/footer');
	}
}

	public function login_validation(){
	    $username  = $this->input->post('loginUsername',TRUE);
	    $password = $this->input->post('loginPassword',TRUE);
	    $validate = $this->m->validate($username,$password);
	    if($validate->num_rows() > 0){
	        $data  = $validate->row_array();
	        $username  = $data['strUserName'];
	        $firstname = $data['strFirstname'];
	        $midinit = $data['strMiddleInitial'];
	        $lastname = $data['strLastname'];
	        $sesdata = array(
	            'strUserName'  => $username,
	            'strFirstname' => $firstname,
	            'strMiddleInitial'=>$midinit,
	            'strLastname'=>$lastname,
	            'logged_in' => TRUE
	        );
	        $this->session->set_userdata($sesdata);
	        // access login for admin

	$msg['success'] = false;
	$msg['type'] = 'add';
	if($data){
	  $msg['success'] = true;

	    }else{
	    	return false;

	    }
	    echo json_encode($msg);
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

  public function Settings() {
  	if($this->session->userdata('strUserName')!=''){

    $title['title'] = "PUPHerbarium | Profile";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/MyProfile');
		$this->load->view('userside/footer');
  }

  else{
	redirect(base_url().'user/index');
	}
}


	public function showAccount(){
		$result = $this->m->showAccount();
		echo json_encode($result);

	}

	public function updateAccount(){
		$result = $this->m->updateAccount();
		$msg['success'] = false;
		$msg['type'] = 'update';
			if($result){
  				$msg['success'] = true;
		}

		echo json_encode($msg);
}

	public function showProfile(){
		$result = $this->m->showProfile();
		echo json_encode($result);

	}

	public function updateProfile(){
		$result = $this->m->updateProfile();
		$msg['success'] = false;
		$msg['type'] = 'update';
			if($result){
  				$msg['success'] = true;
		}

		echo json_encode($msg);
}

	public function showPassword(){
		$result = $this->m->showPassword();
		echo json_encode($result);

	}

	public function updatePassword(){
		$result = $this->m->updatePassword();
		$msg['success'] = false;
		$msg['type'] = 'update';
			if($result){
  				$msg['success'] = true;
		}

		echo json_encode($msg);
}
	public function ActivityLog() {
		if($this->session->userdata('strUserName')!=''){

    $title['title'] = "PUPHerbarium | Activity Log";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/ActivityLog');
		$this->load->view('userside/footer');
  }

  else{
	redirect(base_url().'user/index');
	}
	}


// public function ContactUsEmail()
// {

// 	$email=$this->input->post('txtContactEmailAddress');
// $message = $this->input->post('txtContactUsMessage');



// 	$query = $this->db
// 			->where('strPassword',$password)
// 			->join('tblHerbariumStaff hs', 'hs.intStaffID = a.intStaffID')
// 			->get('tblAccounts a');



//     $config = Array(
//   'protocol' => 'smtp',
//   'smtp_host' => 'ssl://smtp.googlemail.com',
//   'smtp_port' => 465,
//   'smtp_user' => $email, // change it to yours
//   'smtp_pass' => $password// change it to yours
//   'mailtype' => 'html',
//   'charset' => 'iso-8859-1',
//   'wordwrap' => TRUE
// );

//         $this->load->library('email', $config);
//       $this->email->set_newline("\r\n");
//       $this->email->from($email); // change it to yours
//       $this->email->to('WBHerbariumTA@gmail.com');// change it to yours
//       $this->email->subject('PUP Herbarium Center');
//       $this->email->message("<br> <br>" . $message );

//       if($this->email->send())
//      {
//      	return true;
//      }
//      else
//     {
//      show_error($this->email->print_debugger());

//  }
// }

public function showAllVisitsLog(){
	$result = $this->m->showAllVisitsLog();
	echo json_encode($result);
	}

	
}?>
