<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_m extends CI_Model{
	

//USER DEPOSIT//
public function addDeposit(){
	

	$sName = $this->input->post('txtScientificName');
	$cName = $this->input->post('txtCommonName');
	$loc = $this->input->post('txtLocation');
	$datecoll = $this->input->post('txtDateCollected');
	$coll = $this->input->post('txtCollector');
	$plantDesc = $this->input->post('txtplantDesc');


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
	set @collector = '$coll'
	set @plantdescription = '$plantDesc'


SET NOCOUNT ON;
	

		BEGIN
			INSERT INTO tblDepositReq(strScientificName, strCommonName, strFullLocation,dtDateCollected, intOUserID, strStatus,strPlantDesc)
			VALUES (@scientificname	, @commonname, @location, @datecollected, @collector,'Pending',@plantdescription)
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
}
	?>