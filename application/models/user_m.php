<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model{

	public function validate($username,$password){
				$query = $this->db
			->where('strUserName',$username)
			->where('strPassword',$password)
			->get('tblOnlineUser');

		return $query;

}
public function userRegister(){
			$firstname=$this->input->post('txtfirstname');
			$middlename=$this->input->post('txtmidname');
			$lastname=$this->input->post('txtlastname');
			//$middleinitial=$this->input->post('txtpName');
			$namesuffix=$this->input->post('txtnamesuffix');
			$contactno=$this->input->post('txtphonenum');
			$email=$this->input->post('txtemail');
			$presentadd=$this->input->post('txtpresentadd');
			$permaddress=$this->input->post('txtpermaadd');
			$affname=$this->input->post('txtaffname');
			$affaddress=$this->input->post('txtaffaddress');
			$affposition=$this->input->post('txtaffpos');
			$username=$this->input->post('txtusername');
			$password=$this->input->post('txtpassword');
		$query="

			DECLARE @firstname		VARCHAR(50);
			DECLARE @middlename		VARCHAR(50);
			DECLARE @lastname		VARCHAR(50);
			DECLARE @middleinitial	VARCHAR(3);
			DECLARE @namesuffix		VARCHAR(5);
			DECLARE @contactno		VARCHAR(15);
			DECLARE @email			VARCHAR(255);
			DECLARE @presentadd		VARCHAR(100);
			DECLARE @permaddress	VARCHAR(50);

			DECLARE @affname		VARCHAR(255);
			DECLARE @affaddress		VARCHAR(255);
			DECLARE @affposition	VARCHAR(255);
			DECLARE @username		VARCHAR(100);
			DECLARE @password		VARCHAR(50);

			SET @firstname	= '$firstname'
			SET @middlename	= '$middlename'
			SET @lastname	= '$lastname'
			SET @middleinitial	= SUBSTRING(@middlename, 1, 1)
			SET @namesuffix		= '$namesuffix'
			SET @contactno		= '$contactno'
			SET @email			= '$email'
			SET @presentadd		= '$presentadd'
			SET @permaddress	= '$permaddress'

			SET @affname		= '$affname'
			SET @affaddress		= '$affaddress'
			SET @affposition	= '$affposition'
			SET @username		= '$username'
			SET @password		= '$password'

			SET NOCOUNT ON;

					INSERT INTO tblOnlineUser
					VALUES (@firstname, @middlename, @lastname, @middleinitial, @namesuffix, @contactno, @email,@presentadd,@permaddress, @affname, @affaddress, @affposition, @username,@password)


			";
			if($this->db->query($query)){
					return true;
				} else{
					return false;
				}


    }

	public function addLoanReq(){
		$getusername = $this->session->userdata['strUserName'];

		$date=$this->input->post('dateAppointment');
		$sciname=$this->input->post('sSciName');
		$purpose=$this->input->post('radios');
		$sessionid=$this->session->userdata('intOUserID');
		//set @sessionname= '$sessionusername'


		$query="
		DECLARE @prps	VARCHAR(255);
		set @prps = '$purpose'

		declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'

		insert into tblLoanReq(intOUserID,dtAppointmentDate,strPurpose,strStatus) values (@sessionid,'".$date."',@prps,'Pending')


	";if($this->db->query($query)){
			$last_id = $this->db->insert_id();

			$i=0;

			foreach($sciname as $s){

				$data=array(

					'strScientificName' => $sciname[$i],
					'intLoanReqID' => $last_id
				);

				$this->db->insert('tblLoanList',$data);
				$i++;

			}
			return true;
		}else{
			return false;
		}
	}

	public function showSciName(){


		$query = $this->db->select("concat(g.strGenusName,' ',s.strSpeciesName) as strSciName")
		->join('tblHerbariumSheet hs','sh.intHerbariumSheetID = hs.intHerbariumSheetID')
		->join('tblSpecies s','s.intSpeciesID = hs.intSpeciesID')
		->join('tblGenus g','g.intGenusID = s.intGenusID')
		->where('boolLoanAvailable', 'True')
		->get('tblStoredHerbarium sh');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

//USER DEPOSIT//
public function addDeposit(){

	$sName = $this->input->post('txtScientificName');
	$cName = $this->input->post('txtCommonName');
	$loc = $this->input->post('txtLocation');
	$datecoll = $this->input->post('txtDateCollected');
	$plantDesc = $this->input->post('txtplantDesc');
	$desiredDateDeposit = $this->input->post('txtDateDesired');
	$getusername = $this->session->userdata['strUserName'];

	$query="

	DECLARE @scientificname	VARCHAR(255);
	DECLARE @commonname	VARCHAR(255);
	DECLARE @location VARCHAR(255);
	DECLARE @datecollected DATE;
	DECLARE @desiredDate DATE;
	DECLARE @plantdescription VARCHAR(255);

	set @desiredDate = '$desiredDateDeposit'
	set @scientificname = '$sName'
	set @commonname = '$cName'
	set @location = '$loc'
	set @datecollected = '$datecoll'
	set @plantdescription = '$plantDesc'
			declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'


SET NOCOUNT ON;


		BEGIN
			INSERT INTO tblDepositReq(strScientificName, strCommonName, strFullLocation,dtDateCollected,intOUserID, dtAppointmentDate, strStatus,strPlantDesc)

			VALUES (@scientificname	, @commonname, @location, @datecollected, @sessionid, @desiredDate, 'Pending',@plantdescription)
		END
		";
		if($this->db->query($query))
		{
			return true;
		}
		else
		{
			return false;
		}




	}

public function addAppointment(){
$doA = $this->input->post('dateAppointment');

	$appPurpose = $this->input->post('radios');
	$appdesc = $this->input->post('txtappdesc');
$getusername = $this->session->userdata['strUserName'];
$query="

DECLARE @appointmenttype VARCHAR(50);
DECLARE @dateofappointment DATE;
DECLARE @applicationdesc VARCHAR(255);



set @appointmenttype = '$appPurpose'
set @dateofappointment = '$doA'
set @applicationdesc = '$appdesc'

SET NOCOUNT ON;
declare @sessionid int;
	select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'


	BEGIN
		INSERT INTO tblAppointments(dtAppointmentDate,strVisitPurpose, intOUserID, strVisitDescription,strStatus)

		VALUES (@dateofappointment,@appointmenttype, @sessionid, @applicationdesc, 'Pending')
	END
	";
	if($this->db->query($query))
	{
		return true;
	}
	else
	{
		return false;
	}



	}

public function getgenusname(){


}

public function showAccount(){
		$id = $this->session->userdata['strUserName'];
		$this->db->where('strUserName', $id);
		$query = $this->db->get('tblOnlineUser');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateAccount(){
   $id = $this->session->userdata['strUserName'];
    $field = array(
    'strEmailAddress'=>$this->input->post('txtemail'),
    );
    $this->db->where('strUserName', $id);
    $this->db->update('tblOnlineUser', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

public function showProfile(){
		$id = $this->session->userdata['strUserName'];
		$this->db->where('strUserName', $id);
		$query = $this->db->get('tblOnlineUser');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateProfile()
	{
   		$id = $this->session->userdata['strUserName'];
   		$field = array(
   			 'strFirstName'=>$this->input->post('txtfirstname'),
   			 'strMiddleName'=>$this->input->post('txtmidname'),
   			 'strLastName'=>$this->input->post('txtlastname'),
   			 'strNameSuffix'=>$this->input->post('txtnamesuffix'),
   			 'strContactNumber'=>$this->input->post('txtphonenum'),
   			 'strPresentAddress'=>$this->input->post('txtpresentadd'),
  			 'strPermanentAddress'=>$this->input->post('txtpermaadd'),
   			 'strAffiliationName'=>$this->input->post('txtaffname'),
   			 'strAffiliationPosition'=>$this->input->post('txtaffpos'),
   			 'strAffiliationAddress'=>$this->input->post('txtaffaddress')

    );

    $this->db->where('strUserName', $id);
    $this->db->update('tblOnlineUser', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



public function showPassword(){
		$id = $this->session->userdata['strUserName'];
		$this->db->where('strUserName', $id);
		$query = $this->db->get('tblOnlineUser');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updatePassword(){
   $id = $this->session->userdata['strUserName'];
   $current = $this->input->post('txtCurPw');
    $field = array(
    'strPassword'=>$this->input->post('txtNewPw'),
    );
    $this->db->where('strUserName', $id);
    $this->db->where('strPassword', $current);
    $this->db->update('tblOnlineUser', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

	public function showAllVisitsLog()
	{
		$result = array();
		$query = $this->db->query(" declare @id int; set @id = (select intOUserID from tblOnlineUser where strUserName ='".$this->session->userdata('strUserName')."')

			select * from tblAppointments where intOUserID = @id AND strStatus='Pending'

			");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary visitcurent-edit" data-toggle="modal" data-target="#basicExampleModal" data="'.$r->intAppointmentID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intPhylumID,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strVisitDescription,
					$btn,
					$r->intAppointmentID
					);
		}


		return $result;
	}

	public function editCurrentVisit(){
		$id = $this->input->get('id');
		$this->db->where('intAppointmentID', $id);
		$query = $this->db->get('tblAppointments');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


public function updateCurrentVisitResched(){
    $id = $this->input->post('txtId');
    $firstname = $this->session->userdata['strFirstname'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastname'];
$date = $this->input->post('dtnewDate');

 $querycheckdate=$this->db->query("select * from tblEvents where [start] = '".$date."'");

if($querycheckdate->num_rows() == 0){
 $queryupdate="

			update tblAppointments
			set dtAppointmentDate = '".$date."' 
				where intAppointmentID = ".$id."

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has rescheduled his/her appointment to: ''".$date.", Visit ID: ','".$id."'),0)

			";

if($this->db->query($queryupdate)){
			return true;
		}else{
			return false;
		}
  
}else{
	return false;
}

}

public function updateCurrentVisitCancel(){
    $id = $this->input->post('txtId');
    $firstname = $this->session->userdata['strFirstname'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastname'];
 $queryupdate="

			update tblAppointments
			set strStatus = 'Cancelled' 
				where intAppointmentID = ".$id."

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has cancelld his/her appointment. Visit ID: ','".$id."'),0)

			";

if($this->db->query($queryupdate)){
			return true;
		}else{
			return false;
		}
  
}

}?>
