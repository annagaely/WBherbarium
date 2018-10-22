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

	public function home()
	{
	if($this->session->userdata('strUserName')!=''){

		$title['title'] = "Welcome to PUPHerbarium!";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/landingpage2');
		$this->load->view('userside/footer2');
	}else{
	redirect(base_url().'user/index');
	}

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
		$this->load->view('userside/footer2');
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
		$this->load->view('userside/footer2');
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
		$this->load->view('userside/Collection2');
		$this->load->view('userside/footer2');
	}
	public function register()
	{
		$title['title'] = "PUPHerbarium | Register";
		$this->load->view('userside/register', $title);
		$this->load->view('userside/footer');
	}

	public function deposits()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium |  Deposits";
		$this->load->view('userside/navbar2', $title);
		$this->load->view('userside/Deposit');
		$this->load->view('userside/footer2');
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
		$this->load->view('userside/footer2');
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
	            'strFirstName' => $firstname,
	            'strMiddleInitial'=>$midinit,
	            'strLastName'=>$lastname,
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
	 $this->load->view('userside/footer2');
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
		$this->load->view('userside/footer2');
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
		$this->load->view('userside/footer2');
  }

  else{
	redirect(base_url().'user/index');
	}
	}

	public function currentVisits() {
		$this->load->view('userside/iframe/datatableCurrentVisits');
	}
	public function currentDeposits() {
		$this->load->view('userside/iframe/datatableCurrentDeposits');
	}
	public function pastVisits() {
		$this->load->view('userside/iframe/datatablePastVisits');
	}
	public function pastDeposits() {
		$this->load->view('userside/iframe/datatablePastDeposits');
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

public function showCurrentVisitsLog(){
  $output = $this->m->showCurrentVisitsLog();
	$response = array(
		'aaData' => $output,
		'iTotalRecords' => count($output),
		'iTotalDisplayRecords' => count($output),
		'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}
public function editCurrentVisit(){
$result = $this->m->editCurrentVisit();
echo json_encode($result);
}

public function updateCurrentVisitResched(){
$result = $this->m->updateCurrentVisitResched();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}


public function updateCurrentVisitCancel(){
$result = $this->m->updateCurrentVisitCancel();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}
public function usersearchRank(){
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
	$this->load->view('userside/searchResults/searchRank');
	$this->load->view('userside/footer');
}
public function usersearchGenus() {
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
	$this->load->view('userside/searchResults/searchGenus');
	$this->load->view('userside/footer');
}
public function usersearchSpecie() {
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
	$this->load->view('userside/searchResults/searchSpecie');
	$this->load->view('userside/footer');
}
public function searchRank(){
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar2', $title);
	$this->load->view('userside/searchResults/searchRank');
	$this->load->view('userside/footer');
}
public function searchGenus() {
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar2', $title);
	$this->load->view('userside/searchResults/searchGenus');
	$this->load->view('userside/footer');
}
public function searchSpecie() {
	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar2', $title);
	$this->load->view('userside/searchResults/searchSpecie');
	$this->load->view('userside/footer');
}


public function showAllVisitsLog(){
  $output = $this->m->showAllVisitsLog();
	$response = array(
		'aaData' => $output,
		'iTotalRecords' => count($output),
		'iTotalDisplayRecords' => count($output),
		'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}
	public function showAllDepositLog(){
  $output = $this->m->showAllDepositLog();
	$response = array(
		'aaData' => $output,
		'iTotalRecords' => count($output),
		'iTotalDisplayRecords' => count($output),
		'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

	public function showCurrentDepositLog(){
  $output = $this->m->showCurrentDepositLog();
	$response = array(
		'aaData' => $output,
		'iTotalRecords' => count($output),
		'iTotalDisplayRecords' => count($output),
		'iDisplayStart' => 0
		);
		echo json_encode($response);
		exit();
	}

public function editCurrentDeposit(){
$result = $this->m->editCurrentDeposit();
echo json_encode($result);
}


public function updateCurrentDepositResched(){
$result = $this->m->updateCurrentDepositResched();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}

public function updateCurrentDepositCancel(){
$result = $this->m->updateCurrentDepositCancel();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}


public function searchingRank(){
			$this->load->helper('file');
        $keyword = $this->input->post('phylumkey');
        $data['results'] = $this->m->searchRank($keyword);

	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
 $this->load->view('userside/searchResults/searchRank', $data);
	$this->load->view('userside/footer');

}
public function searchingGenus(){
			$this->load->helper('file');
        $keyword = $this->input->post('genuskey');
        $data['results'] = $this->m->searchGenus($keyword);

	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
 $this->load->view('userside/searchResults/searchGenus', $data);
	$this->load->view('userside/footer');

}

public function searchingSpecies(){
			$this->load->helper('file');
        $keyword = $this->input->post('specieskey');
        $data['results'] = $this->m->searchSpecies($keyword);

	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar', $title);
 $this->load->view('userside/searchResults/searchSpecie', $data);
	$this->load->view('userside/footer');

}

public function searchingGenus1(){
			$this->load->helper('file');
        $keyword = $this->input->post('genuskey');
        $data['results'] = $this->m->searchGenus($keyword);

	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar2', $title);
 $this->load->view('userside/searchResults/searchGenus', $data);
	$this->load->view('userside/footer');

}

public function searchingSpecies1(){
			$this->load->helper('file');
        $keyword = $this->input->post('specieskey');
        $data['results'] = $this->m->searchSpecies($keyword);

	$title['title'] = "PUPHerbarium | Results";
	$this->load->view('userside/navbar2', $title);
 $this->load->view('userside/searchResults/searchSpecie', $data);
	$this->load->view('userside/footer');

}


public function form()
{
	$title['title'] = "PUPHerbarium | Form";
	$this->load->view('userside/form', $title);
}
}?>
