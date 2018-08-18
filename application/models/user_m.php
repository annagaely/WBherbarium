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


}?>