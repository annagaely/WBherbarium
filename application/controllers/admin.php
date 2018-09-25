 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('admin_m', 'm');
    }

   	public function index()
	{
		$this->load->view('login');
	}

	public function Adminhome()
	{
		if($this->session->userdata('strUserName')!=''){

			$title['title'] = "PUPHerbarium | Dashboard";
			$this->load->view('templates/header', $title);
			$this->load->view('maintenance/Dashboard');
			$this->load->view('templates/footer');
	}
		else{
			redirect(base_url().'admin');
	}
}


	public function adminlogin_validation(){
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('loginUsername','Username','required');
		$this->form_validation->set_rules('loginPassword','Password','required');
		if($this->form_validation->run()){
			$username = $this->input->post('loginUsername');
			$password = $this->input->post('loginPassword');
			$id = $this->input->post('txtId');

			$this->load->model('admin_m');
			if($this->admin_m->admincan_login($username,$password)){
				$session_data=array(
					'strUserName' => $username,

				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'admin/Dashboard');
			}else{
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect(base_url().'admin');
			}
		}
		else{
			redirect(base_url().'admin');
		}
	}
	public function adminlogout(){
		$this->session->unset_userdata('strUserName');
		redirect(base_url().'admin');
	}


	public function Dashboard()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Dashboard";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Dashboard');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}

/****** PHYLUM ONLY!!!!! ******/
public function Phylum()
{
	if($this->session->userdata('strUserName')!='')
	{
		$title['title'] = "PUPHerbarium | Phylum";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Phylum');
		$this->load->view('templates/footer');
	}
}

	//show phylum

public function showAllPhylum()
{

    $output = $this->admin_m->showAllPhylum();

    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
      );
      echo json_encode($response);
      exit();

}



//add phylum
public function addPhylum(){
$result = $this->m->addPhylum();
$msg['success'] = false;
$msg['type'] = 'add';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}
public function editPhylum(){
$result = $this->m->editPhylum();
echo json_encode($result);
}
public function updatePhylum(){
$result = $this->m->updatePhylum();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}

/****** END PHYLUM!!!!! ******/
/****** CLASS START!!!!! ******/
public function Class()
{
if($this->session->userdata('strUserName')!=''){
$title['title'] = "PUPHerbarium | Class";
$this->load->view('templates/header', $title);
$this->load->view('maintenance/Class');
$this->load->view('templates/footer');
}
else{
redirect(base_url().'admin');
}
}


public function showAllClass()
{

    $output = $this->admin_m->showAllClass();
    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
      );
      echo json_encode($response);
      exit();

}

public function showClassPhylumName()
{
	$result = $this->m->showClassPhylumName();
	echo json_encode($result);
}

//update class
public function updateClass(){
$result = $this->m->updateClass();
$msg['success'] = false;
$msg['type'] = 'update';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}
public function editClass(){
$result = $this->m->editClass();
echo json_encode($result);
}


//add Class
public function addClass(){
$result = $this->m->addClass();
$msg['success'] = false;
$msg['type'] = 'add';
if($result){
  $msg['success'] = true;
}
echo json_encode($msg);
}
/****** END CLASS!!!!! ******/
	/****** ORDER START!!!!! ******/
	public function Order()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Order";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Order');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	//show Order
    public function showAllOrder()
    {
        $output = $this->admin_m->showAllOrder();
        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }

	public function showOrderClassName(){
	$result = $this->m->showOrderClassName();
	echo json_encode($result);
	}

	//add Order
	public function addOrder(){
		$result = $this->m->addOrder();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	//update class
	public function updateOrder(){
		$result = $this->m->updateOrder();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
		public function editOrder(){
		$result = $this->m->editOrder();
		echo json_encode($result);
	}
	/****** END ORDER!!!!! ******/
	/****** FAMILY START!!!!! ******/
	public function Family()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Family";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Family');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
		//show Order
    public function showAllFamily()
    {

        $output = $this->admin_m->showAllFamily();

        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();

    }

	public function showFamilyOrderName()
	{
	$result = $this->m->showFamilyOrderName();
	echo json_encode($result);
	}

	//add Order
	public function addFamily(){
		$result = $this->m->addFamily();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editFamily(){
		$result = $this->m->editFamily();
		echo json_encode($result);
	}
public function updateFamily(){
		$result = $this->m->updateFamily();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	/****** END FAMILY!!!!! ******/
	/****** GENUS START!!!!! ******/
	public function Genus()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Genus";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Genus');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
		//show Order
    public function showAllGenus()
    {

        $output = $this->admin_m->showAllGenus();

        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();

    }

	public function showGenusFamilyName(){
	$result = $this->m->showGenusFamilyName();
	echo json_encode($result);
	}

	//add Order
	public function addGenus(){
		$result = $this->m->addGenus();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editGenus(){
		$result = $this->m->editGenus();
		echo json_encode($result);
	}
public function updateGenus(){
		$result = $this->m->updateGenus();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	/****** END GENUS!!!!! ******/
	/****** SPECIES START!!!!! ******/
	public function Species()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Species";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Species');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}


    public function showAllSpecies()
    {
        $output = $this->admin_m->showAllSpecies();
        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }

public function showSpeciesGenusName(){
	$result = $this->m->showSpeciesGenusName();
	echo json_encode($result);
	}

	//add Order
	public function addSpecies(){
		$result = $this->m->addSpecies();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editSpecies(){
		$result = $this->m->editSpecies();
		echo json_encode($result);
	}
public function updateSpecies(){
		$result = $this->m->updateSpecies();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	/****** END SPECIES!!!!! ******/
	/****** FAMILY BOXES START!!!!! ******/

	public function Familyboxes()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Family Boxes";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Familyboxes');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
/*
	public function showAllFamilyBoxes(){

{

    $output = $this->admin_m->showAllFamilyBoxes();
    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
      );
      echo json_encode($response);
      exit();

}
}

public function showFBFamilyName(){
	$result = $this->m->showFBFamilyName();
	echo json_encode($result);
	}
	public function editFamilyBox(){
		$result = $this->m->editFamilyBox();
		echo json_encode($result);
	}
public function updateFamilyBox(){
		$result = $this->m->updateFamilyBox();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addFamilyBox(){
		$result = $this->m->addFamilyBox();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	/****** END FAMILY BOXES!!!!! ******/
	/****** LOCALITY START!!!!! ******/
	public function Locality()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Locality";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Locality');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function showAllLocality(){
{

    $output = $this->admin_m->showAllLocality();
    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
      );
      echo json_encode($response);
      exit();

}
}
	public function addLocality(){
		$result = $this->m->addLocality();
		echo json_encode($result);

	}public function updateLocality(){
		$result = $this->m->updateLocality();
		echo json_encode($result);

	}
	public function editLocality(){
		$result = $this->m->editLocality();
		echo json_encode($result);
	}

	/****** END LOCALITY!!!!! ******/
	/****** COLLECTOR START!!!!! ******/
	public function Collector()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Collector";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Collector');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function showAllCollector(){
	{

    $output = $this->admin_m->showAllCollector();
    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
      );
      echo json_encode($response);
      exit();

}
}

	public function addCollector(){
		$result = $this->m->addCollector();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updateCollector(){
		$result = $this->m->updateCollector();
		echo json_encode($result);

	}
		public function editCollector(){
		$result = $this->m->editCollector();
		echo json_encode($result);
	}

	/****** END COLLECTOR!!!!! ******/
	/****** EXTERNAL VALIDATOR START!!!!! ******/
	public function Externalvalidator()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | External Validator";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Externalvalidator');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function showAllValidator(){
    $output = $this->admin_m->showAllValidator();
    $response = array(
      'aaData' => $output,
      'iTotalRecords' => count($output),
      'iTotalDisplayRecords' => count($output),
      'iDisplayStart' => 0
    );
  echo json_encode($response);
  exit();
	}
	public function addValidator(){
		$result = $this->m->addValidator();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editValidator(){
		$result = $this->m->editValidator();
		echo json_encode($result);
	}
	public function updateValidator(){
		$result = $this->m->updateValidator();
		echo json_encode($result);

	}

	/****** END VALIDATOR!!!!! ******/
	/****** COLLECTOR START!!!!! ******/
	public function Staffmgt()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Staff Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Staffmgt');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
		public function showAllStaff()
    {
      $output = $this->admin_m->showAllStaff();
      $response = array(
        'aaData' => $output,
        'iTotalRecords' => count($output),
        'iTotalDisplayRecords' => count($output),
        'iDisplayStart' => 0
      );
		echo json_encode($response);
    exit();
	}
	public function addStaff(){
		$result = $this->m->addStaff();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editStaff(){
		$result = $this->m->editStaff();
		echo json_encode($result);
	}
	public function updateStaff(){
		$result = $this->m->updateStaff();
		echo json_encode($result);

	}
	/****** END VALIDATOR!!!!! ******/
	/****** account START!!!!! ******/
	public function accounts()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Access Accounts";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Accessaccounts');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function showAllAccounts(){
		$output = $this->admin_m->showAllAccounts();
       	 $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }




	public function addAccounts(){
		$result = $this->m->addAccounts();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editAccounts(){
		$result = $this->m->editAccounts();
		echo json_encode($result);
	}
	public function updateAccounts(){
		$result = $this->m->updateAccounts();
		echo json_encode($result);

	}
		public function showStaffName(){
		$result = $this->m->showStaffName();
		echo json_encode($result);
	}

	/****** END account!!!!! ******/
	/****** account START!!!!! ******/

	public function Depositplant()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Deposit Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Depositplant');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function Loanplant()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Loan Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Loanplant');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
	public function Visits()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Visits";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Visits');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}

	public function Externalvalidation()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | External Validation";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Externalvalidation');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}



	function view_calendar()
	{
		$this->load->view('maintenance/fullcalendar2');
	}

	public function CalendarManagement()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Calendar Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/CalendarManagement');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}
 public function get_events()
 {
     // Our Start and End Dates
     $start = $this->input->get("start");
     $end = $this->input->get("end");

     $startdt = new DateTime('now'); // setup a local datetime
     $startdt->setTimestamp($start); // Set the date based on timestamp
     $start_format = $startdt->format('Y-m-d H:i:s');

     $enddt = new DateTime('now'); // setup a local datetime
     $enddt->setTimestamp($end); // Set the date based on timestamp
     $end_format = $enddt->format('Y-m-d H:i:s');

     $events = $this->admin_m->get_events($start_format, $end_format);

     $data_events = array();

     foreach($events->result() as $r) {

         $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start
         );
     }

     echo json_encode(array("events" => $data_events));
     exit();
 }

public function add_event()
{
    /* Our calendar data */
    $name = $this->input->post("name", TRUE);
    $desc = $this->input->post("description", TRUE);
    $start_date = $this->input->post("start_date", TRUE);
    $end_date = $this->input->post("end_date", TRUE);

    if(!empty($start_date)) {
       $start_date = DateTime::createFromFormat('Y-m-d', $start_date)->format('Y-m-d H:i:s');
       //$start_date_timestamp = $sd->getTimestamp();
       	//$start_date = DateTime::createFromFormat('Y-m-d', $start_date)->format('Y-m-d H:i:s');
    	//echo '<script>alert("'.$start_date.'")</script>';
    } else {
       $start_date = date("Y-m-d h:i:s", time());
       $start_date_timestamp = time();
    }

    if(!empty($end_date)) {
       $end_date = DateTime::createFromFormat('Y-m-d', $end_date)->format('Y-m-d H:i:s');
    } else {
       $end_date = date("Y-m-d H:i:s", time());
       $end_date_timestamp = time();
    }

    $this->admin_m->add_event(array(
       "title" => $name,
       "description" => $desc,
       "start" => $start_date,
       "end" => $start_date
       )
    );

    redirect(base_url("admin/view_calendar"));
}

public function edit_event()
     {
          $eventid = intval($this->input->post("eventid"));
          $event = $this->admin_m->get_event($eventid);
          if($event->num_rows() == 0) {
               echo"Invalid Event";
               exit();
          }

          $event->row();

          /* Our calendar data */
          $name = $this->input->post("name");
          $desc = $this->input->post("description");
          $start_date = $this->input->post("start_date");
          $end_date = $this->input->post("end_date");
          $delete = intval($this->input->post("delete"));

          if(!$delete) {

               if(!empty($start_date)) {
                    $sd = DateTime::createFromFormat("Y/m/d", $start_date);
                    $start_date = $sd->format('Y-m-d H:i:s');
                    $start_date_timestamp = $sd->getTimestamp();
               } else {
                    $start_date = date("Y-m-d H:i:s", time());
                    $start_date_timestamp = time();
               }

               if(!empty($end_date)) {
                    $ed = DateTime::createFromFormat("Y/m/d", $end_date);
                    $end_date = $ed->format('Y-m-d H:i:s');
                    $end_date_timestamp = $ed->getTimestamp();
               } else {
                    $end_date = date("Y-m-d H:i:s", time());
                    $end_date_timestamp = time();
               }

               $this->admin_m->update_event($eventid, array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $start_date,
                    "end" => $start_date,
                    )
               );

          } else {
               $this->admin_m->delete_event($eventid);
          }

        redirect(base_url("admin/view_calendar"));
     }



	public function Featuredplant()
	{
	if($this->session->userdata('strUserName')!=''){
		$title['title'] = "PUPHerbarium | Featured Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Featuredplant');
		$this->load->view('templates/footer');
	}
	else{
	redirect(base_url().'admin');
	}
}



//ADMIN DEPOSIT PLANT//
	//show depositreq
	public function showAllDepositReqPending(){
	 $output = $this->admin_m->showAllDepositReqPending();

        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();

    }
	public function showAllDepositReqOkay(){
		$output = $this->admin_m->showAllDepositReqOkay();

        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();

    }
	public function showAllDepositReqAll(){
		$output = $this->admin_m->showAllDepositReqAll();

        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();

    }

	public function viewDepositReq(){
		$result = $this->m->viewDepositReq();
		echo json_encode($result);

	}
	public function Confirmation(){
		$result = $this->m->Confirmation();
		echo json_encode($result);

	}
	public function updateAcceptStatus(){
		$result = $this->m->updateAcceptStatus();
		echo json_encode($result);

	}
		public function updateConfirmation(){
		$result = $this->m->updateConfirmation();
		echo json_encode($result);

	}
		public function EmailCon(){
		$result = $this->m->EmailCon();
		echo json_encode($result);

	}



	//SENDING EMAIL NOT YET FINAL
	public function loansendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'WBHerbariumTA@gmail.com', // change it to yours
  'smtp_pass' => 'WBHerbarium2018', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
$email=$this->input->post('txtEmail');
$id=$this->input->post('txtId');
$message = $this->input->post('txtCustomMessage');


       $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('WBHerbariumTA@gmail.com'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('PUP Herbarium Loaning of Specimen');
      $this->email->message("Your loan request is granted.You are now allowed to do the next step. Go to the PUP herbarium Center based on the date of your request, and present this request id for authorization. Loan Request ID:" . $id ."<br> <br>" . $message );

      if($this->email->send())
     {
     	return true;
     }
     else
    {
     show_error($this->email->print_debugger());

 }
}


public function depositsendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'WBHerbariumTA@gmail.com', // change it to yours
  'smtp_pass' => 'WBHerbarium2018', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
$email=$this->input->post('txtEmail');
$id=$this->input->post('txtId');
$message = $this->input->post('txtCustomMessage');

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('WBHerbariumTA@gmail.com'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('PUP Herbarium Depositing of Specimen');
      $this->email->message("Your deposit request is granted.You are now allowed to do the next step. Go to the PUP herbarium Center based on the date of your request, and present this request id for authorization. Deposit Request ID:"  . $id ."<br> <br>" . $message );

      if($this->email->send())
     {
     	return true;
     }
     else
    {
     show_error($this->email->print_debugger());

 }
}

public function visitsendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'WBHerbariumTA@gmail.com', // change it to yours
  'smtp_pass' => 'WBHerbarium2018', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
$email=$this->input->post('txtEmail');
$id=$this->input->post('txtId');
$message = $this->input->post('txtCustomMessage');

        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('WBHerbariumTA@gmail.com'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('PUP Herbarium Visiting');
      $this->email->message("Your Visit request is granted.You are now allowed to do the next step. Go to the PUP herbarium Center based on the date of your request, and present this request id for authorization. Visit Request ID:" . $id ."<br> <br>" . $message );

      if($this->email->send())
     {
     	return true;
     }
     else
    {
     show_error($this->email->print_debugger());

 }
}
public function visitsendMailReject()
{
  $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'WBHerbariumTA@gmail.com', // change it to yours
  'smtp_pass' => 'WBHerbarium2018', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);
$email=$this->input->post('txtemailReject');
$id=$this->input->post('txtIdReject');
$message = $this->input->post('txtCustomMessageReject');

      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('WBHerbariumTA@gmail.com'); // change it to yours
      $this->email->to($email);// change it to yours
      $this->email->subject('PUP Herbarium Visiting');
      $this->email->message("Your Visit request is granted.You are now allowed to do the next step. Go to the PUP herbarium Center based on the date of your request, and present this request id for authorization. Visit Request ID:" . $id ."<br> <br>" . $message );

      if($this->email->send())
     {
     	return true;
     }
     else
    {
     show_error($this->email->print_debugger());

 }
}

//LOAN

public function showLoanReqPending(){
		$result = $this->m->showLoanReqPending();
		echo json_encode($result);
}
public function showLoanReqOkay(){
		$result = $this->m->showLoanReqOkay();
		echo json_encode($result);
}
public function showLoanReqAll(){
		$result = $this->m->showLoanReqAll();
		echo json_encode($result);
}
public function editLoanReq(){
		$result = $this->m->editLoanReq();
		echo json_encode($result);

}
public function showloanlist(){
		//$result = $this->m->showloanlist();
		$result = $this->m->showloanlist();
		echo json_encode($result);

}
	public function updateLoanStatus(){
		$result = $this->m->updateLoanStatus();
		echo json_encode($result);

}

	public function LoanConfirmation(){
		$result = $this->m->LoanConfirmation();
		echo json_encode($result);

}
	public function updateLoanConfirmation(){
		$result = $this->m->updateLoanConfirmation();
		echo json_encode($result);

}
		public function LoanEmailCon(){
		$result = $this->m->LoanEmailCon();
		echo json_encode($result);

	}

//APPOINTMENT
public function showAllAppointmentPending(){
		$result = $this->m->showAllAppointmentPending();
		echo json_encode($result);
}

public function ViewVisitReq(){
		$result = $this->m->ViewVisitReq();
		echo json_encode($result);
}
public function updateVisitStatus(){
		$result = $this->m->updateVisitStatus();
		echo json_encode($result);
}
public function showAllAppointmentReject(){
		$result = $this->m->showAllAppointmentReject();
		echo json_encode($result);
}
public function showAllAppointmentExpect(){
		$result = $this->m->showAllAppointmentExpect();
		echo json_encode($result);
}
public function VisitConfirmation(){
		$result = $this->m->VisitConfirmation();
		echo json_encode($result);
}
public function updateVisitConfirmation(){
		$result = $this->m->updateVisitConfirmation();
		echo json_encode($result);
}
public function showAllAppointmentAll(){
		$result = $this->m->showAllAppointmentAll();
		echo json_encode($result);
}
public function VisitEmailCon(){
		$result = $this->m->VisitEmailCon();
		echo json_encode($result);

}
public function VisitEmailConReject(){
		$result = $this->m->VisitEmailConReject();
		echo json_encode($result);

}
public function showExValPending()
{
	 $output = $this->admin_m->showExValPending();
        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }


public function showExValOkay()
{
	 $output = $this->admin_m->showExValOkay();
        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }

public function showExValAll()
{
	 $output = $this->admin_m->showExValAll();
        $response = array(
          'aaData' => $output,
          'iTotalRecords' => count($output),
          'iTotalDisplayRecords' => count($output),
          'iDisplayStart' => 0
          );
          echo json_encode($response);
          exit();
    }
}?>
