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


	public function Dashboard()
	{
		$title['title'] = "PUPHerbarium | Dashboard";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Dashboard');
		$this->load->view('templates/footer');
	}

	/****** PHYLUM ONLY!!!!! ******/
	public function Phylum()
	{
		$title['title'] = "PUPHerbarium | Phylum";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Phylum');
		$this->load->view('templates/footer');
	}
	//show phylum
	public function showAllPhylum(){
		$result = $this->m->showAllPhylum();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Class";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Class');
		$this->load->view('templates/footer');
	}
	//show Class
	public function showAllClass(){
		$result = $this->m->showAllClass();
		echo json_encode($result);
		}
	public function showClassPhylumName(){
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
		$title['title'] = "PUPHerbarium | Order";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Order');
		$this->load->view('templates/footer');
	}

	//show Order
	public function showAllOrder(){
		$result = $this->m->showAllOrder();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Family";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Family');
		$this->load->view('templates/footer');
	}
		//show Order
	public function showAllFamily(){
		$result = $this->m->showAllFamily();
		echo json_encode($result);
		}
	public function showFamilyOrderName(){
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
		$title['title'] = "PUPHerbarium | Genus";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Genus');
		$this->load->view('templates/footer');
	}
		//show Order
	public function showAllGenus(){
		$result = $this->m->showAllGenus();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Species";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Species');
		$this->load->view('templates/footer');
	}
	public function showAllSpecies(){
		$result = $this->m->showAllSpecies();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Family Boxes";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Familyboxes');
		$this->load->view('templates/footer');
	}
	public function showAllFamilyBoxes(){
		$result = $this->m->showAllFamilyBoxes();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Locality";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Locality');
		$this->load->view('templates/footer');
	}
	public function showAllLocality(){
		$result = $this->m->showAllLocality();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Collector";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Collector');
		$this->load->view('templates/footer');
	}
	public function showAllCollector(){
		$result = $this->m->showAllCollector();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | External Validator";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Externalvalidator');
		$this->load->view('templates/footer');
	}
	public function showAllValidator(){
		$result = $this->m->showAllValidator();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Staff Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Staffmgt');
		$this->load->view('templates/footer');

	}
		public function showAllStaff(){
		$result = $this->m->showAllStaff();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Access Accounts";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/accounts');
		$this->load->view('templates/footer');
	}
		public function showAllAccounts(){
		$result = $this->m->showAllAccounts();
		echo json_encode($result);
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
		$title['title'] = "PUPHerbarium | Deposit Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Depositplant');
		$this->load->view('templates/footer');
	}
	public function Loanplant()
	{
		$title['title'] = "PUPHerbarium | Loan Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Loanplant');
		$this->load->view('templates/footer');
	}
	public function Manageappointment()
	{
		$title['title'] = "PUPHerbarium | Manage Appointment";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Manageappointment');
		$this->load->view('templates/footer');
	}
		public function ManageappPending()
	{
		$title['title'] = "PUPHerbarium | Pending";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/ManageappPending');
		$this->load->view('templates/footer');
	}
		public function ManageappHistory()
	{
		$title['title'] = "PUPHerbarium | History";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/ManageappHistory');
		$this->load->view('templates/footer');
	}

	public function Externalvalidation()
	{
		$title['title'] = "PUPHerbarium | External Validation";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Externalvalidation');
		$this->load->view('templates/footer');
	}



	function view_calendar()
	{
		$this->load->view('maintenance/fullcalendar2');
	}

	public function CalendarManagement()
	{
		$title['title'] = "PUPHerbarium | Calendar Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/CalendarManagement');


		$this->load->view('templates/footer');
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
		$title['title'] = "PUPHerbarium | Featured Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Featuredplant');
		$this->load->view('templates/footer');
	}


//ADMIN DEPOSIT PLANT//
	//show depositreq
	public function showAllDepositReq(){
		$result = $this->m->showAllDepositReq();
		echo json_encode($result);
	}

	public function viewDepositReq(){
		$result = $this->m->viewDepositReq();
		echo json_encode($result);

	}
	public function updateAcceptStatus(){
		$result = $this->m->updateAcceptStatus();
		echo json_encode($result);

	}
	//SENDING EMAIL NOT YET FINAL
	public function sendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'agbtolentino@gmail.com', // change it to yours
  'smtp_pass' => 'Beeanna072299', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = 'cutting na tayo. wag na IT soc';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('agbtolentino@gmail.com'); // change it to yours
      $this->email->to('bannagabriella@gmail.com');// change it to yours
      $this->email->subject('qt ko');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'nagsend na pare';
     }
     else
    {
     show_error($this->email->print_debugger());
    }



}

public function showLoanReq(){
		$result = $this->m->showLoanReq();
		echo json_encode($result);
}
public function editLoanReq(){
		$result = $this->m->editLoanReq();
		echo json_encode($result);
	
}




}?>
