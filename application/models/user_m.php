 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model{

public function can_login($username,$password){
	$this->db->where('strUserName',$username);
	$this->db->where('strPassword',$password);
	$query=$this->db->get('tblOnlineUser');
	if($query->num_rows()>0){
		return true;
	}else{
		return false;
	}

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


      if($firstname!=''){
        if($lastname!=''){
          if($contactno!=''){
            if($email!=''){
              if($presentadd!=''){
                if($permaddress!=''){
                  if($affname!=''){
                    if($affaddress!=''){
                      if($affposition!=''){
                        if($username!=''){
                          if($password!=''){
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

                          } else{
                            return false;
                          }
                        } else{
                          return false;
                        }
                      } else{
                        return false;
                      }
                    } else{
                      return false;
                    }
                  } else{
                    return false;
                  }
                } else{
                  return false;
                }
              } else{
                return false;
              }
            } else{
              return false;
            }
          } else{
            return false;
          }
        } else{
          return false;
        }
      } else{
        return false;
      }
    }

	public function addLoanReq(){
		$getusername = $this->session->userdata['strUserName'];


		$family=$this->input->post('sFamilyName');
		$genus=$this->input->post('sGenusName');
		$species=$this->input->post('sSpeciesName');
		$numdur=$this->input->post('txtNumDuration');
		$dwm=$this->input->post('txtdayweekmonth');
		$purpose=$this->input->post('txtpurpose');
		$sessionid=$this->session->userdata('intOUserID');
		//set @sessionname= '$sessionusername'


		$query="
		declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'

		insert into tblLoanReq(intOUserID,intDuration,strDtWkMt,strPurpose,strStatus) values (@sessionid,'".$numdur."','".$dwm."','".$purpose."','Pending')


	";if($this->db->query($query)){
			$last_id = $this->db->insert_id();

			$i=0;

			foreach($family as $f){

				$data=array(

					'intFamilyID' => $family[$i],
					'intGenusID' => $genus[$i],
					'intSpeciesID' => $species[$i],
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

	public function showFamilyName(){
		$query = $this->db->get('tblFamily');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showGenusName(){
		$query = $this->db->get('tblGenus');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showSpeciesName(){
		$query = $this->db->get('tblSpecies');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


//USER DEPOSIT//
public function addDeposit(){
	$getusername = $this->session->userdata['strUserName'];

	$sName = $this->input->post('txtScientificName');
	$cName = $this->input->post('txtCommonName');
	$loc = $this->input->post('txtLocation');
	$datecoll = $this->input->post('txtDateCollected');
	//$coll = $this->input->post('txtCollector');
	$plantDesc = $this->input->post('txtplantDesc');
$getusername = $this->session->userdata['strUserName'];

	$query="

	DECLARE @scientificname	VARCHAR(255);
	DECLARE @commonname	VARCHAR(255);
	DECLARE @location VARCHAR(255);
	DECLARE @datecollected DATE;
	DECLARE @collector VARCHAR(255);
	DECLARE @plantdescription VARCHAR(255);

	set @scientificname = '$sName'
	set @commonname = '$cName'
	set @location = '$loc'
	set @datecollected = '$datecoll'
	set @plantdescription = '$plantDesc'
			declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'


SET NOCOUNT ON;

		declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'


		BEGIN
			INSERT INTO tblDepositReq(strScientificName, strCommonName, strFullLocation,dtDateCollected, intOUserID, strStatus,strPlantDesc)
			VALUES (@scientificname	, @commonname, @location, @datecollected, @sessionid,'Pending',@plantdescription)
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

$getusername = $this->session->userdata['strUserName'];
	$aType = $this->input->post('appType');
	$doA = $this->input->post('dateofappointment');
	$appdesc = $this->input->post('txtappdesc');

$getusername = $this->session->userdata['strUserName'];


	$query="

	DECLARE @appointmenttype VARCHAR(50);
	DECLARE @dateofappointment DATE;
	DECLARE @applicationdesc VARCHAR(255);


	set @appointmenttype = '$aType'
	set @dateofappointment = '$doA'
	set @applicationdesc = '$appdesc'
declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'

SET NOCOUNT ON;
	declare @sessionid int;
		select @sessionid = intOUserID from tblOnlineUser where strUserName = '".$getusername."'


			INSERT INTO tblAppointments(strAppointmentType, dtAppointmentDate, strVisitDescription,intOUserID,strStatus)VALUES(@appointmenttype, @dateofappointment,@applicationdesc,@sessionid,'Pending')
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

}?>
