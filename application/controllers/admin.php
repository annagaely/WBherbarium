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

	public function signup()
	{
		$this->load->view('signup');
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
		//$msg['success'] = false;
		//$msg['type'] = 'update';
		//if($result){
		//	$msg['success'] = true;
		//}
		//eto yung nabago
		echo json_encode($result);
	}
		public function editCollector(){
		$result = $this->m->editCollector();
		echo json_encode($result);
	}


	public function Externalvalidator()
	{
		$title['title'] = "PUPHerbarium | External Validator";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Externalvalidator');
		$this->load->view('templates/footer');
	}
	public function Staffmgt()
	{
		$title['title'] = "PUPHerbarium | Staff Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Staffmgt');
		$this->load->view('templates/footer');
	}
	public function Accessaccounts()
	{
		$title['title'] = "PUPHerbarium | Access Acounts";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/Accessaccounts');
		$this->load->view('templates/footer');
	}
	public function Depositplant()
	{
		$title['title'] = "PUPHerbarium | Deposit Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Depositplant');
		$this->load->view('templates/footer');
	}
	public function Rsplantdeposit()
	{
		$title['title'] = "PUPHerbarium | Re-Submit Plant Deposit";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Rsplantdeposit');
		$this->load->view('templates/footer');
	}
	public function Plantreceiving()
	{
		$title['title'] = "PUPHerbarium | Plant Receiving";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Plantreceiving');
		$this->load->view('templates/footer');
	}
	public function Plantverification()
	{
		$title['title'] = "PUPHerbarium | Plant Verification";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Plantverification');
		$this->load->view('templates/footer');
	}
	public function Plantclassification()
	{
		$title['title'] = "PUPHerbarium | Plant Classification";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Plantclassification');
		$this->load->view('templates/footer');
	}
	public function Loanplant()
	{
		$title['title'] = "PUPHerbarium | Loan Plant";
		$this->load->view('templates/header', $title);
		$this->load->view('transaction/Loanplant');
		$this->load->view('templates/footer');
	}

	function view_calendar()
	{
		$this->load->view('maintenance/fullcalendar');
	}

	public function CalendarManagement()
	{
		$title['title'] = "PUPHerbarium | Calendar Management";
		$this->load->view('templates/header', $title);
		$this->load->view('maintenance/fullcalendar');
		$this->load->view('maintenance/CalendarManagement');
		$this->load->view('templates/footer');
	}
}

?>
