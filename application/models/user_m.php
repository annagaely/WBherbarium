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
		}else{
			return false;
		}
	}


}?>