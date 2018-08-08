<?php
class savedata_model extends CI_Model{

	// public function __construct()
	// {
	// 	parent::__construct();	
	// }
#############################################################
#															#
#		TAXONOMIC HIERARCHY - PHYLUM 						#
#															#
#############################################################

	public function sample()
	{
		$q1 = $this->db->query("SELECT * FROM tblAccounts WHERE intAccountID = 1001");
		foreach ($q1->result() as $value) {
			$username = $value->strUsername;
		}
		return $username;
	}

	public function add_phylum()
	{

		$output = '';

		$dName = $_POST['dName']; 
		$kName = $_POST['kName']; 
		$pName = $_POST['pName'];

		$data = array(
			'strDomainName' => $dName,
			'strKingdomName' => $kName,
			'strPhylumName' => 	$pName
			);

		if($this->db->insert('dbo.tblPhylum', $data))
		{
			$output = "Success";
		}

		else
		{
			$output = "Error";
		}

		return $output;

	}

	public function edit_phylum($input){

		$data = array(
			'strDomainName' => htmlentities($input['dName']),
			'strKingdomName' => htmlentities($input['kName']),
			'strPhylumName' => htmlentities($input['pName'])
			);

		$this->db->where('intPhylumID', htmlentities($input['phylum_id']));
		$this->db->update('dbo.tblPhylum', $data);
		
			return "Success";
	}
}
?>