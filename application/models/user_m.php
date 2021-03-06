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
			// and [strEmailAdd	ress] = '".$email."'
			$querycheckuname=$this->db->query("select * from tblOnlineUser where [strUserName] = '".$username."' OR [strEmailAddress] = '".$email."' ");
			if($querycheckuname->num_rows() == 0){
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
							VALUES (@firstname, @middlename, @lastname, @middleinitial, @namesuffix, @contactno, @email,@presentadd,@permaddress, @affname, @affaddress, @affposition, @username,@password, getdate())


					";
					if($this->db->query($query)){
							return true;
						} else{
							return false;
						}
			}else {
				return $querycheckuname->row();
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
$start_time = $this->input->post('start_time');
$end_time = $this->input->post('end_time');

$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$desiredDateDeposit."' and (start_time ='".$start_time."' AND end_time ='".$end_time."')");
if($querycheckeventtbl->num_rows()==0){
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
			INSERT INTO tblDepositReq(strScientificName, strCommonName, strFullLocation,dtDateCollected,intOUserID, dtAppointmentDate, strStatus,strPlantDesc,start_time,end_time)

			VALUES (@scientificname	, @commonname, @location, @datecollected, @sessionid, @desiredDate, 'Pending',@plantdescription,'".$start_time."','".$end_time."')
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
}else{
	return false;
}
	}

public function addAppointment(){
$doA = $this->input->post('dateAppointment');

	$appPurpose = $this->input->post('radios');
	$appdesc = $this->input->post('txtappdesc');
$getusername = $this->session->userdata['strUserName'];
$start_time = $this->input->post('start_time');
$end_time = $this->input->post('end_time');

$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$doA."'and (start_time ='".$start_time."' AND end_time ='".$end_time."') ");
if($querycheckeventtbl->num_rows()==0){
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
		INSERT INTO tblAppointments(dtAppointmentDate,strVisitPurpose, intOUserID, strVisitDescription,strStatus,start_time,end_time)

		VALUES (@dateofappointment,@appointmenttype, @sessionid, @applicationdesc, 'Pending','".$start_time."','".$end_time."')
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
}else{
	return false;
}


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
   		$initial=$this->input->post('txtmidname');
   		$field = array(
   			 'strFirstName'=>$this->input->post('txtfirstname'),
   			 'strMiddleName'=>$this->input->post('txtmidname'),
   			 'strMiddleInitial'=> substr($initial,0,1),
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

	public function showCurrentVisitsLog()
	{
		$result = array();
		$query = $this->db->query(" declare @id int; set @id = (select intOUserID from tblOnlineUser where strUserName ='".$this->session->userdata('strUserName')."')

			select * from tblAppointments where intOUserID = @id AND (strStatus='Pending' or strStatus='For Visiting')

			");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary visitcurent-edit"  data="'.$r->intAppointmentID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intPhylumID,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strVisitDescription,
					$r->strStatus,
					$btn,
					$r->intAppointmentID
					);
		}


		return $result;
	}
		public function showAllVisitsLog()
	{
		$result = array();
		$query = $this->db->query(" declare @id int; set @id = (select intOUserID from tblOnlineUser where strUserName ='".$this->session->userdata('strUserName')."')

			select * from tblAppointments where intOUserID = @id

			");

		foreach ($query->result() as $r)
		{

			$result[] = array(
					// $r->intPhylumID,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strVisitDescription,
					$r->strStatus,
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
    $firstname = $this->session->userdata['strFirstName'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastName'];
$date = $this->input->post('dtnewDate');

$start_time = $this->input->post('start_time');
$end_time = $this->input->post('end_time');
$querychecksamedt=$this->db->query("select * from tblAppointments where dtAppointmentDate = '".$date."' and (start_time ='".$start_time."' AND end_time ='".$end_time."')");
if($querychecksamedt->num_rows()==0){
$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$date."' and (start_time ='".$start_time."' AND end_time ='".$end_time."')");
if($querycheckeventtbl->num_rows()==0){
	$queryupdate="
		update tblAppointments
		SET dtAppointmentDate = '".$date."'
		WHERE intAppointmentID = '".$id."';

		UPDATE tblAppointments
		SET start_time = '".$start_time."'
		WHERE intAppointmentID = '".$id."';

		UPDATE tblAppointments
		SET end_time = '".$end_time."'
		WHERE intAppointmentID = '".$id."';

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has rescheduled his/her Visit appointment to: ''".$date.", Visit ID: ','".$id."'),0)

			";

if($this->db->query($queryupdate)){
				$msg='true';
		echo json_encode($msg);
		}else{
			return false;
		}

}else{
	$msg='conflict';
		echo json_encode($msg);
}
}
else{
		$msg='samedate';
		echo json_encode($msg);
}


}

public function updateCurrentVisitCancel(){
    $id = $this->input->post('txtId');
    $firstname = $this->session->userdata['strFirstName'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastName'];
 $queryupdate="

			update tblAppointments
			set strStatus = 'Cancelled'
				where intAppointmentID = ".$id."

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has cancelld his/her Visit appointment. Visit ID: ','".$id."'),0)

			";

if($this->db->query($queryupdate)){
			return true;
		}else{
			return false;
		}

}


		public function showAllDepositLog()
	{
		$result = array();
		$query = $this->db->query(" declare @id int; set @id = (select intOUserID from tblOnlineUser where strUserName ='".$this->session->userdata('strUserName')."')

			select * from tblDepositReq where intOUserID = @id

			");

		foreach ($query->result() as $r)
		{
			// $btn = '<button class="btn btn-primary visitcurent-edit"  data="'.$r->intDepositReqID.'"><i class="far fa-edit"></i></button>';
			$result[] = array(
					// $r->intPhylumID,
					$r->dtAppointmentDate,
					$r->strScientificName,
					$r->strCommonName,
					$r->strStatus,
					// $btn,
					$r->intDepositReqID
					);
		}


		return $result;
	}
	public function showCurrentDepositLog()
	{
		$result = array();
		$query = $this->db->query(" declare @id int; set @id = (select intOUserID from tblOnlineUser where strUserName ='".$this->session->userdata('strUserName')."')

			select * from tblDepositReq where intOUserID = @id AND (strStatus ='Pending' or strStatus = 'For Depositing')

			");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary depositcurrent-edit"  data="'.$r->intDepositReqID.'"><i class="far fa-edit"></i></button>';
			$result[] = array(
					 //$r->intPhylumID,
					$r->dtAppointmentDate,
					$r->strScientificName,
					$r->strCommonName,
					$r->strStatus,
					 $btn,
					$r->intDepositReqID
					);
		}


		return $result;
	}

	public function editCurrentDeposit(){
		$id = $this->input->get('id');
		$this->db->where('intDepositReqID', $id);
		$query = $this->db->get('tblDepositReq');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


public function updateCurrentDepositResched(){
    $id = $this->input->post('txtId');
    $firstname = $this->session->userdata['strFirstName'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastName'];
$date = $this->input->post('dtnewDate');
$start_time = $this->input->post('start_time');
$end_time = $this->input->post('end_time');
$querychecksamedt=$this->db->query("select * from tblDepositReq where dtAppointmentDate = '".$date."' and (start_time ='".$start_time."' AND end_time ='".$end_time."')");
if($querychecksamedt->num_rows()==0){
$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$date."' and (start_time ='".$start_time."' AND end_time ='".$end_time."')");

if($querycheckeventtbl->num_rows() == 0){
 $queryupdate="

			update tblDepositReq
			set dtAppointmentDate = '".$date."'
				where intDepositReqID = ".$id."

		UPDATE tblDepositReq
		SET start_time = '".$start_time."'
		WHERE intDepositReqID = '".$id."';

		UPDATE tblDepositReq
		SET end_time = '".$end_time."'
		WHERE intDepositReqID = '".$id."';

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has rescheduled his/her Deposit Request appointment to: ''".$date.", Deposit Request ID: ','".$id."'),0)

			";

if($this->db->query($queryupdate)){
						$msg='true';
		echo json_encode($msg);
		}else{
			return false;
		}

}else{
	$msg='conflict';
		echo json_encode($msg);
}
}else{
		$msg='samedate';
		echo json_encode($msg);
}

}

public function updateCurrentDepositCancel(){
    $id = $this->input->post('txtId');
    $firstname = $this->session->userdata['strFirstName'];
    $midinit = $this->session->userdata['strMiddleInitial'];
    $lastname = $this->session->userdata['strLastName'];
 $queryupdate="
			update tblDepositReq
			set strStatus = 'Cancelled'
				where intDepositReqID = ".$id."

			insert into tblNotif(strNotifContent,intNotifStatus) VALUES (CONCAT('".$firstname." ', '".$midinit.". ', '".$lastname." ','has cancelld his/her Deposit Request appointment.  Deposit Request ID: ','".$id."'),0)


			";

if($this->db->query($queryupdate)){
			return true;
		}else{
			return false;
		}

}

public function searchRank($keyword){
$this->db->like('strPhylumName',$keyword);
        $query = $this->db->get('tblPhylum');
        return $query->result();
}

public function searchGenus($keyword){
$this->db->like('strGenusName',$keyword);
        $query = $this->db
        ->join('tblFamily f','f.intFamilyID=g.intFamilyID')
        ->get('tblGenus g');
        return $query->result();
}

public function searchSpecies($keyword){
$this->db->like('strScientificName ',$keyword);

        $query = $this->db
        ->get('viewHerbariumSheet');
        return $query->result();
}

public function searchGenus1($keyword){
$this->db->like('strGenusName',$keyword);
        $query = $this->db
        ->join('tblFamily f','f.intFamilyID=g.intFamilyID')
        ->get('tblGenus g');
        return $query->result();
}

public function searchSpecies1($keyword){
$this->db->like('strScientificName ',$keyword);

        $query = $this->db
        ->get('viewHerbariumSheet');
        return $query->result();
}


	public function checkCode(){
$password= $this->input->post('code');
$code=substr($password,0,6);
$id=substr($password,13);

		$query = $this->db->query("select intDepositID from tblSentForVerify where intDepositID = '".$id."' and strCode like'%".$code."%'");
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function addAnswer(){
$id=$this->input->post('txtid');
$q1=$this->input->post('q1');
$q2=$this->input->post('q2');
$q3=$this->input->post('q3');
$q4=$this->input->post('q4');
$q5=$this->input->post('q5');
$q6=$this->input->post('q6');
$q7=$this->input->post('q7');
$q8=$this->input->post('q8');
$q9=$this->input->post('q9');
$comment =$this->input->post('comments');
// $remarks=$this->input->post('remarks');

$count= 0;
if($q1== 'Yes'){
$count+=1;
};
if($q2== 'Yes'){
	$count+=1;
};
if($q3== 'Yes'){
	$count+=1;
};
if($q4== 'Yes'){
	$count+=1;
};
if($q5== 'Yes'){
	$count+=1;
};
if($q6== 'Yes'){
	$count+=1;
};
if($q7== 'Yes'){
	$count+=1;
};
if($q8== 'Yes'){
	$count+=1;
};
if($q9== 'Yes'){
	$count+=1;
};

if($count == 9){
	$remarks = 'Approved';
}else if($count == 0){
	$remarks = 'Disaapproved';
}else{
$remarks = 'Needs Correction';
}


	$query="insert into tblAnswers(intDepositID,strQ1,strQ2,strQ3,strQ4,strQ5,strQ6,strQ7,strQ8,strQ9,strComments,strRemarks,strScore) values (".$id.",'".$q1."','".$q2."','".$q3."','".$q4."','".$q5."','".$q6."','".$q7."','".$q8."','".$q9."','".$comment."','".$remarks."',".$count.")

		insert into tblNotif(strNotifContent,intNotifStatus) VALUES ('External Validator has evaluated the Plant Deposit: ".$id."',0)

		UPDATE tblPlantDeposit
		SET strStatus = 'With Results'
		WHERE intPlantDepositID = ".$id.";

		";
		if($this->db->query($query))
		{
			return true;
		}else{

		}
		}



	public function viewSpecie(){
		$id = $this->input->get('id');
		$this->db->where('vhs.intHerbariumSheetID', $id);
		$query = $this->db->select('CAST(picHerbariumSheet as varchar(max)) AS picText')
		->get('viewHerbariumSheet vhs');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


}?>
