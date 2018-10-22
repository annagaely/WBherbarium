<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_m extends CI_Model{


	public function validate($username,$password){
				$query = $this->db
			->where('strUsername',$username)
			->where('strPassword',$password)
			->join('tblHerbariumStaff hs', 'hs.intStaffID = a.intStaffID')
			->get('tblAccounts a');

		return $query;

}



/****** PHYLUM ONLY!!!!! ******/


	public function showAllPhylum()
	{
		$result = array();
		$query = $this->db->select('intPhylumID, strDomainName, strKingdomName, strPhylumName')
                ->get('tblPhylum');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary phylum-edit" data="'.$r->intPhylumID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intPhylumID,
					$r->strDomainName,
					$r->strKingdomName,
					$r->strPhylumName,
					$btn,
					$r->intPhylumID
					);
		}


		return $result;
	}



	 public function addPhylum(){

			$domainName=$this->input->post('txtdName');
			$kingdomName=$this->input->post('txtkName');
			$phylumName=$this->input->post('txtpName');

			$querycheckphylum=$this->db->query("select * from tblPhylum where [strPhylumName] = '".$phylumName."'");
			if($querycheckphylum->num_rows() == 0){
				$query="
				insert into tblPhylum(strDomainName,strKingdomName,strPhylumName) VALUES ('".$domainName."','".$kingdomName."','".$phylumName."')

				";
			if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}else {
			return false;
		}


	}

	public function editPhylum(){
		$id = $this->input->get('id');
		$this->db->where('intPhylumID', $id);
		$query = $this->db->get('tblPhylum');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

    public function updatePhylum(){
    $id = $this->input->post('txtId');
		$phylumName = $this->input->post('txtepName');
    $field = array(
    'strDomainName'=>$this->input->post('txtedName'),
    'strKingdomName'=>$this->input->post('txtekName'),
    'strPhylumName'=>$this->input->post('txtepName')
    );
			$this->db->where('intPhylumID', $id);
			$this->db->update('tblPhylum', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}


	/****** END PHYLUM!!!!! ******/
	/****** CLASS START!!!!! ******/

public function showAllClass()

	{
		$result = array();
		$query = $this->db->select('intClassID,
			 p.strPhylumName,
			 strClassName')
			->join('tblPhylum p', 'p.intPhylumID = c.intPhylumID')
			->get('tblCLass c');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary class-edit" data="'.$r->intClassID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intClassID,
					$r->strPhylumName,
					$r->strClassName,
					$btn,
					$r->intClassID
					);
		}

		return $result;
	}



	public function showClassPhylumName(){
		$query = $this->db->get('tblPhylum');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

	public function addClass(){

			$phylumID=$this->input->post('spID');
			$className=$this->input->post('txtCName');

			$querycheckclass=$this->db->query("select * from tblClass where [strClassName] = '".$className."'");

			if($querycheckclass->num_rows() == 0) {
				$query="
			declare @phylumid int;

			set @phylumid = (select intPhylumID from tblPhylum where strPhylumName = '".$phylumID."')

	insert into tblClass(intPhylumID,strClassname) VALUES (@phylumid,'".$className."')

				";

			if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}else {
			return false;
		}

	}



	public function editClass(){

		$id = $this->input->get('id');
		$this->db->where('intClassID', $id);
		$query = $this->db->select('intClassID,
			 p.strPhylumName,
			 p.intPhylumID,
			 strClassName')
			->join('tblPhylum p', 'p.intPhylumID = c.intPhylumID')
			->get('tblCLass c');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
		$query = $this->db->get('tblClass');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	public function updateClass(){
    $id = $this->input->post('txtId');

    $phylumname=$this->input->post('speID');
    $classname=$this->input->post('txteCName');

				$query="
				declare @phylumid int;

						set @phylumid = (select intPhylumID from tblPhylum where strPhylumName = '".$phylumname."')

							update tblClass
							set intPhylumID = @phylumid,
								strClassName = '".$classname."'
								where intClassID = ".$id."

							";

				if($this->db->query($query)){
							return true;
						}else{
							return false;
						}

	}

	/****** END CLASS!!!!! ******/
	/****** ORDER START!!!!! ******/
	public function showAllOrder()
	{
		$result = array();
		$query = $this->db->select('intOrderID,
			 c.strClassName,
			 strOrderName')
			->join('tblClass c', 'c.intClassID = o.intClassID')
			->get('tblOrder o');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary order-edit" data="'.$r->intOrderID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intOrderID,
					$r->strClassName,
					$r->strOrderName,
					$btn,
					$r->intOrderID
					);
		}

		return $result;
	}


	public function showOrderClassName(){
		$query = $this->db->get('tblClass');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}

	}

		public function addOrder(){

			$intClassID=$this->input->post('txtcID');
			$strOrderName=$this->input->post('txtOName');

			$querycheckorder=$this->db->query("select * from tblOrder where [strOrderName] = '".$strOrderName."'");
			if($querycheckorder->num_rows() == 0){
				$query="
				declare @classid int;

			set @classid = (select intClassID from tblClass where strClassName = '".$intClassID."')
				insert into tblOrder(intClassID,strOrderName) VALUES (@classid,'".$strOrderName."')

				";


						if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}else {
			return false;
		}

	}
		public function editOrder(){

		$id = $this->input->get('id');
		$this->db->where('intOrderID', $id);
		$query = $this->db->select('intOrderID,
			 c.strClassName,
			 c.intClassID,
			 strOrderName')
			->join('tblClass c', 'c.intClassID = o.intClassID')
			->get('tblOrder o');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function updateOrder(){
    $id = $this->input->post('txtId');

$intClassID=$this->input->post('sceID');
    $strOrderName=$this->input->post('txteOName');
			$query="
						declare @classid int;

					set @classid = (select intClassID from tblClass where strClassName = '".$intClassID."')

						update tblOrder
						set intClassID = @classid,
							strOrderName = '".$strOrderName."'
							where intOrderID = ".$id."

						";

			if($this->db->query($query)){
						return true;
					}else{
						return false;
					}

  }
	/****** END ORDER!!!!! ******/
	/****** FAMILY START!!!!! ******/

public function showAllFamily()
{
		$result = array();
		$query = $this->db->select('intFamilyID,
			 o.strOrderName,
			 strFamilyName')
			->join('tblOrder o', 'o.intOrderID = f.intOrderID')
			->get('tblFamily f');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary family-edit" data="'.$r->intFamilyID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intFamilyID,
					$r->strOrderName,
					$r->strFamilyName,
					$btn,
					$r->intFamilyID
					);
		}

		return $result;
	}

public function showFamilyOrderName(){
		$query = $this->db->get('tblOrder');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addFamily(){

			$intOrderID=$this->input->post('txtoID');
			$strFamilyName=$this->input->post('txtfName');

			$querycheckfam=$this->db->query("select * from tblFamily where [strFamilyName] = '".$strFamilyName."'");
			if($querycheckfam->num_rows() == 0) {
				$query="
				declare @orderid int;

			set @orderid = (select intOrderID from tblOrder where strOrderName = '".$intOrderID."')
				insert into tblFamily(intOrderID,strFamilyName) VALUES (@orderid,'".$strFamilyName."')

				";


						if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}else {
			return false;
		}

	}
	public function editFamily(){

		$id = $this->input->get('id');
		$this->db->where('intFamilyID', $id);
		$query = $this->db->select('intFamilyID,
			 o.strOrderName,
			 o.intOrderID,
			 strFamilyName')
			->join('tblOrder o', 'o.intOrderID = f.intOrderID')
			->get('tblFamily f');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updateFamily(){
    $id = $this->input->post('txtId');
	$intOrderID=$this->input->post('seOID');
	$strFamilyName=$this->input->post('txteFName');


		$query="
		declare @orderid int;

	set @orderid = (select intOrderID from tblOrder where strOrderName = '".$intOrderID."')
	insert into tblFamily(intOrderID, strFamilyName) VALUES (@orderid, '".$strFamilyName."')

		";

if($this->db->query($query)){
		return true;
	}else{
		return false;
	}

  }

	/****** END FAMILY!!!!! ******/
	/****** GENUS START!!!!! ******/

public function showAllGenus(){

		$result = array();
		$query = $this->db->select('intGenusID,
			 f.strFamilyName,
			 strGenusName')
			->join('tblFamily f', 'f.intfamilyID = g.intFamilyID')
			->get('tblGenus g');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary genus-edit" data="'.$r->intGenusID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intGenusID,
					$r->strFamilyName,
					$r->strGenusName,
					$btn,
					$r->intGenusID
					);
		}

		return $result;
	}

public function showGenusFamilyName(){
		$query = $this->db->get('tblFamily');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addGenus(){

			$intFamilyID=$this->input->post('txtoID');
			$strGenusName=$this->input->post('txtgName');
			$querycheckgenus=$this->db->query("select * from tblGenus where [strGenusName] = '".$strGenusName."'");
			if($querycheckgenus->num_rows() == 0) {
				$query="
				declare @familyid int;

			set @familyid = (select intFamilyID from tblFamily where strFamilyName = '".$intFamilyID."')
				insert into tblGenus(intFamilyID,strGenusName) VALUES (@familyid,'".$strGenusName."')

				";


						if($this->db->query($query)){
				return true;
			}else{
				return false;
			}
		}else {
			return false;
		}
	}
	public function editGenus(){

		$id = $this->input->get('id');
		$this->db->where('intGenusID', $id);
		$query = $this->db->select('intGenusID,
			 f.strFamilyName,
			 f.intFamilyID,
			 strGenusName')
			->join('tblFamily f', 'f.intFamilyID = g.intFamilyID')
			->get('tblGenus g');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updateGenus(){
    $id = $this->input->post('txtId');

    $intFamilyID=$this->input->post('segFID');
    $strGenusName=$this->input->post('txteGName');
			$query="
				declare @familyid int;

			set @familyid = (select intFamilyID from tblFamily where strFamilyName = '".$intFamilyID."')

				update tblGenus
				set intFamilyID = @familyid,
					strGenusName = '".$strGenusName."'
					where intGenusID = ".$id."

				";

	if($this->db->query($query)){
				return true;
			}else{
				return false;
			}


  }

	/****** END GENUS!!!!! ******/
	/****** SPECIES START!!!!! ******/

public function showAllSpecies(){
		$result = array();
		$query = $this->db->join('tblGenus g','s.intGenusID = g.intGenusID')
			->get('tblSpecies s');
		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary species-edit" data="'.$r->intSpeciesID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intSpeciesID,
					$r->strGenusName,
					$r->strSpeciesName,
					$r->strCommonName,
					// $r->strAuthorsName,
					$btn,
					$r->intSpeciesID
					);
		}

		return $result;
	}

public function showSpeciesGenusName(){
		$query = $this->db->get('tblGenus');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addSpecies(){

			$intGenusID=$this->input->post('txtgID');
			$strSpeciesName=$this->input->post('txtsName');
			$strCommonName=$this->input->post('txtcoName');
			$strAuthorsName=$this->input->post('txtaID');
			$isverified = $this->input->post('check1');
			$query="
			declare @genusid int;
			declare @speciesID int;
			declare @authorID int;
declare @isVerified varchar(5);
set @isVerified = '$isverified'
		set @genusid = (select intGenusID from tblGenus where strGenusName = '".$intGenusID."');
			insert into tblSpecies(intGenusID,strSpeciesName,strCommonName) VALUES (@genusid,'".$strSpeciesName."','".$strCommonName."');

		IF @isVerified = 'on'
			BEGIN
				SET @speciesID = (SELECT intSpeciesID FROM tblSpecies WHERE strSpeciesName = '".$strSpeciesName."');
				SET @authorID = (SELECT intAuthorID FROM tblAuthor WHERE strAuthorsName = '".$strAuthorsName."');

				INSERT INTO tblSpeciesAuthor (intSpeciesID, intAuthorID)
				VALUES (@speciesID, @authorID)
			END
			";


					if($this->db->query($query)){
			return true;
		}else{
			return false;
		}

	}
	public function editSpecies(){

		$id = $this->input->get('id');
		$this->db->where('intSpeciesID', $id);
		$query = $this->db->select('intSpeciesID,
			 strGenusName,
			 strSpeciesName,
			 strCommonName,
			 strAuthorsName')
			->get('viewTaxonSpecies');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updateSpecies(){
    $id = $this->input->post('txtId');

    $intGenusID=$this->input->post('sesGID');
    $strSpeciesName=$this->input->post('txteSName');
	$strCommonName=$this->input->post('txtecName');
	$strAuthorsName=$this->input->post('txteaID');
 $query="
			declare @genusid int;

		DECLARE @speciesID INT
		DECLARE @authorID INT
		set @genusid = (select intGenusID from tblGenus where strGenusName = '".$intGenusID."')

			update tblSpecies
			set intGenusID = @genusid,
				strSpeciesName = '".$strSpeciesName."',
				strCommonName = '".$strCommonName."'
				where intSpeciesID = ".$id."


			SET @authorID = (SELECT intAuthorID FROM tblAuthor WHERE strAuthorsName = '".$strAuthorsName."')


			UPDATE tblSpeciesAuthor
			SET intAuthorID = @authorID
			WHERE intSpeciesID = ".$id."

			";

if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
  }

	/****** END SPECIES!!!!! ******/
	/****** FAMILY BOXES START!!!!! ******/

public function showAllFamilyBoxes(){
  $result = array();
		$query = $this->db->select('intBoxID,
			 f.strFamilyName,
			 intRackNo,
			 intRackRow,
			 intRackColumn,
			 intBoxLimit')
			->join('tblFamily f', 'f.intFamilyID = fb.intFamilyID')
			->get('tblFamilyBox fb');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary FB-edit" data="'.$r->intBoxID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intBoxID,
					$r->strFamilyName,
					$r->intRackNo,
					$r->intRackRow,
					$r->intRackColumn,
					$r->intBoxLimit,
					$btn,
					$r->intBoxID
					);
		}

		return $result;

	}

	public function showFBFamilyName(){
		$query = $this->db->get('tblFamily');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addFamilyBox(){
			$familyid=$this->input->post('sfbFID');
			$boxlimit=$this->input->post('txtBLLimit');
			$rackno=$this->input->post('txtrackno');
			$rackrow=$this->input->post('txtrackrow');
			$rackcol=$this->input->post('txtrackcol');
	$execquery  = "

		DECLARE @identifier INT
		DECLARE @rackcol INT
		declare @rackrow int
		declare @rackno int
		DECLARE @boxlimit INT
		DECLARE @boxNumber VARCHAR(10)
		set @boxLimit = '$boxlimit'
		set @rackno = '$rackno'
		set @rackcol = '$rackcol'
		set @rackrow = '$rackrow'

declare @familyid int;

		set @familyid = (select intFamilyID from tblFamily where strFamilyName = '".$familyid."')


		INSERT INTO tblFamilyBox (intFamilyID, intBoxLimit,intRackNo,intRackRow,intRackColumn)
		VALUES (@familyid, @boxLimit,@rackno,@rackrow,@rackcol);";


if($this->db->query($execquery)){
			return true;
		}else{
			return false;
		}
	}
	public function editFamilyBox(){

		$id = $this->input->get('id');
		$this->db->where('intBoxID', $id);
		$query = $this->db->select('intBoxID,
			 f.strFamilyName,
			 f.intFamilyID,
			 intBoxLimit,
			 intRackRow,
			 intRackNo,
			 intRackColumn')
			->join('tblFamily f', 'f.intFamilyID = fb.intFamilyID')
			->get('tblFamilyBox fb');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updateFamilyBox(){
    $id = $this->input->post('txtId');

    $intFamilyID=$this->input->post('sefbFID');
    $intBoxLimit=$this->input->post('txteBLLimit');
    $intRackNo=$this->input->post('txterackno');
    $intRackRow=$this->input->post('txterackrow');
    $intRackColumn=$this->input->post('txterackcol');
	$execquery  = "

declare @familyid int;

		set @familyid = (select intFamilyID from tblFamily where strFamilyName = '".$intFamilyID."')


		update tblFamilyBox
			set intFamilyID = @familyid,
				intBoxLimit = '".$intBoxLimit."',
				intRackNo = '".$intRackNo."',
				intRackRow = '".$intRackRow."',
				intRackColumn = '".$intRackColumn."'
				where intBoxID = ".$id."

		";

if($this->db->query($execquery)){
			return true;
		}else{
			return false;
		}

  }
		/****** END FAMILY BOXES!!!!! ******/
	/****** LOCALITY START!!!!! ******/
public function showAllLocality(){
		$result = array();
		$query = $this->db->get('viewLocality');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary locality-edit" data="'.$r->intLocalityID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intLocalityID,
					$r->strFullLocality,
					$r->strCountry,
					$btn,
					$r->intLocalityID
					);
		}

		return $result;
	}


public function addLocality(){
	$island = $this->input->post('sislandname');
	$region = $this->input->post('sregionname');
	$province = $this->input->post('sprovname');
	$citymuni = $this->input->post('smunicipalityname');
	$area = $this->input->post('aName');
	$specificLocation = $this->input->post('spLocName');
	$shortLocation = $this->input->post('spShorName');
	$longtitude = $this->input->post('slongtitudename');
	$latitude = $this->input->post('slatitudename');
	$country = $this->input->post('scountry');

	$query="
	DECLARE @island				VARCHAR(50);
	DECLARE @region				VARCHAR(50);
	DECLARE @province			VARCHAR(50);
	DECLARE @city				VARCHAR(50);
	DECLARE @area				VARCHAR(50);
	DECLARE @specificLocation	VARCHAR(255);
	DECLARE @shortLocation		VARCHAR(255);
	DECLARE @longtitude 		VARCHAR(20);
	DECLARE @latitude 			VARCHAR(20);
	DECLARE @country			VARCHAR(50);

	SET @island	='$island'
	SET @region	='$region'
	SET @province ='$province'
	SET @city ='$citymuni'
	SET @area ='$area'
	SET @specificLocation ='$specificLocation'
	SET @shortLocation ='$shortLocation'
	SET @longtitude ='$longtitude'
	SET @latitude ='$latitude'
	SET @country = '$country'

	SET NOCOUNT ON;


		BEGIN
			INSERT INTO tblLocality(strIsland, strRegion, strProvince, strCity, strArea, strSpecificLocation, strShortLocation, strLongtitude,strLatitude, strCountry)
			VALUES (@island, @region, @province, @city, @area, @specificLocation, @shortLocation, @longtitude,@latitude, @country)
		END
		";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}

public function updateLocality(){
	$island = $this->input->post('seislandname');
	$region = $this->input->post('seregionname');
	$province = $this->input->post('seprovname');
	$citymuni = $this->input->post('semunicipalityname');
	$area = $this->input->post('eaName');
	$specificLocation = $this->input->post('espLocName');
	$shortLocation = $this->input->post('espShorName');
	$localityid = $this->input->post('txtId');


	$query="
	DECLARE @island				VARCHAR(50);
	DECLARE @region				VARCHAR(50);
	DECLARE @province			VARCHAR(50);
	DECLARE @city				VARCHAR(50);
	DECLARE @area				VARCHAR(50);
	DECLARE @specificLocation	VARCHAR(255);
	DECLARE @shortLocation		VARCHAR(255);
	DECLARE @localityID 		INT;

	SET @island	='$island'
	SET @region	='$region'
	SET @province ='$province'
	SET @city ='$citymuni'
	SET @area ='$area'
	SET @specificLocation ='$specificLocation'
	SET @shortLocation ='$shortLocation'
	SET @localityID ='$localityid'

	BEGIN
		UPDATE tblLocality
		SET strIsland = @island,
			strRegion = @region,
			strProvince = @province,
			strCity = @city,
			strArea = @area,
			strSpecificLocation = @specificLocation,
			strShortLocation = @shortLocation
		WHERE intLocalityID = @localityID
	END";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function editLocality(){
		$id = $this->input->get('id');
		$this->db->where('intLocalityID', $id);
		$query = $this->db->get('tblLocality');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	/****** END LOCALITY BOXES!!!!! ******/
	/****** COLLECTOR START!!!!! ******/
public function showAllCollector(){
		$result = array();
		$query = $this->db->query("select Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strAffiliation, intCollectorID
		from tblCollector ");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary collector-edit" data="'.$r->intCollectorID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intCollectorID,
					$r->strFullName,
					$r->strAffiliation,
					$btn,
					$r->intCollectorID
					);
		}

		return $result;
	}

	public function addCollector(){

	$fname = $this->input->post('fName');
	$mname = $this->input->post('mName');
	$minitial = $this->input->post('mInitial');
	$lname = $this->input->post('lName');
	$nsuffix = $this->input->post('nSuffix');
	$cname = $this->input->post('cName');
	$email = $this->input->post('eMail');
	$cdname = $this->input->post('cdName');
	$secname = $this->input->post('secName');


	$query="
	insert into tblCollector(strFirstname,strMiddlename,strLastname,strMiddleInitial,strNameSuffix,strHomeAddress,strContactNumber,strEmailAddress,strAffiliation) values ('".$fname."','".$mname."','".$lname."','".$minitial."','".$nsuffix."','".$cdname."','".$cname."','".$email."','".$secname."')
		";

if($fname!=''){
  if($lname!=''){
    if($cname!=''){
      if($email!=''){
        if($cdname!=''){
          if($secname!=''){
            $this->db->query($query);
          }else{
            return false;
          }
        }else{
          return false;
        }
      }else{
        return false;
      }
    }else{
      return false;
    }
  }else{
    return false;
  }
}else{
  return false;
}

		if($this->db->affected_rows() > 0)	{
			return true;
		} else{
			   return false;
		  }
}

	public function updateCollector(){
	$fname = $this->input->post('feName');
	$mname = $this->input->post('meName');
	$minitial = $this->input->post('meInitial');
	$lname = $this->input->post('leName');
	$nsuffix = $this->input->post('neSuffix');
	$cname = $this->input->post('ceName');
	$email = $this->input->post('eeMail');
	$cdname = $this->input->post('cedName');
	$secname = $this->input->post('esecName');
	$colletorid = $this->input->post('txtId');

	$query="
	DECLARE @Fname VARCHAR(50);
	DECLARE @Mname VARCHAR(50);
	DECLARE @MInitial VARCHAR(3);
	DECLARE @Lname VARCHAR(50);
	DECLARE @Nsuffix VARCHAR(5);
	DECLARE @Cname VARCHAR(15);
	DECLARE @Email VARCHAR(50);
	DECLARE @CDname VARCHAR(MAX);
	DECLARE @Sname VARCHAR(100);
	DECLARE @colletorid VARCHAR(100);

	Set @Fname ='$fname'
	Set @Mname ='$mname'
	Set @MInitial ='$minitial'
	Set @Lname ='$lname'
	Set @Nsuffix ='$nsuffix'
	Set @Cname ='$cname'
	Set @Email ='$email'
	Set @CDname ='$cdname'
	Set @Sname = '$secname'
	Set @colletorid = '$colletorid'

	UPDATE tblCollector
	SET strFirstname = @Fname,
			strMiddlename = @Mname,
			strLastname = @Lname,
			strMiddleInitial = @MInitial,
			strNameSuffix =  @Nsuffix,
			strContactNumber = @Cname,
			strEmailAddress = @Email,
			strHomeAddress= @CDname,
			strAffiliation=@Sname
		WHERE intCollectorID = @colletorid;
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

	public function editCollector(){
		$id = $this->input->get('id');
		$this->db->where('intCollectorID', $id);
		$query = $this->db->select('intCollectorID,
      strFirstname
      ,strMiddlename
      ,strLastname
      ,strMiddleInitial
      ,strNameSuffix
      ,strContactNumber
      ,strEmailAddress
      ,strHomeAddress
      ,strAffiliation')
			->get('tblCollector');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	/****** END COLLECTOR!!!!! ******/
	/****** EXTERNAL VALIDATOR START!!!!! ******/
	public function showAllValidator(){
    $result = array();
		$query = $this->db->query("select Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strInstitution, intValidatorID
		from tblValidator
		where strValidatorType = 'External'");
		foreach ($query->result() as $r)
    {
      $btn = '<button class="btn btn-primary validator-edit" data="'.$r->intValidatorID.'"><i class="far fa-edit"></i></button>';
  $result[] = array(
        $r->strFullName,
        $r->strInstitution,
        $btn,
        $r->intValidatorID
      );
    }
    return $result;
	}

	public function addValidator(){

	$fname = $this->input->post('txtFName');
	$mname = $this->input->post('txtMName');
	$minitial = $this->input->post('txtMInitial');
	$lname = $this->input->post('txtLName');
	$nsuffix = $this->input->post('txtNSuffix');
	$cname = $this->input->post('txtCNumber');
	$email = $this->input->post('txtEMail');
	$institution = $this->input->post('txtInstitution');



	$query="
	DECLARE @firstname		VARCHAR(50);
	DECLARE @middlename		VARCHAR(50);
	DECLARE @lastname		VARCHAR(50);
	DECLARE @middleinitial	VARCHAR(3);
	DECLARE @namesuffix		VARCHAR(5);
	DECLARE @contactno		VARCHAR(15);
	DECLARE @email			VARCHAR(255);
	DECLARE @college		VARCHAR(100);
	DECLARE @institution	VARCHAR(50);

	set @firstname = '$fname'
	set @middlename = '$mname'
	set @lastname = '$lname'
	set @middleinitial = '$minitial'
	set @namesuffix = '$nsuffix'
	set @contactno = '$cname'
	set @email = '$email'
	set @institution = '$institution'

				INSERT INTO tblValidator VALUES(@firstname, @middlename, @lastname, @middleinitial, @namesuffix, @contactno, @email,@institution, 'External')
		";
		$this->db->query($query);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

public function editValidator(){
		$id = $this->input->get('id');
		$this->db->where('intValidatorID', $id);
		$query = $this->db->select('intValidatorID,
     strFirstname
      ,strMiddlename
      ,strLastname
      ,strMiddleInitial
      ,strNameSuffix
      ,strContactNumber
      ,strEmailAddress,
			 strInstitution')
			->get('tblValidator');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function updateValidator(){
	$fname = $this->input->post('txteFName');
	$mname = $this->input->post('txteMName');
	$minitial = $this->input->post('txteMInitial');
	$lname = $this->input->post('txteLName');
	$nsuffix = $this->input->post('txteNSuffix');
	$cname = $this->input->post('txteCNumber');
	$email = $this->input->post('txteEMail');
	$institution = $this->input->post('txteInstitution');
	$validatorid = $this->input->post('txtId');



	$query="
	DECLARE @firstname		VARCHAR(50);
	DECLARE @middlename		VARCHAR(50);
	DECLARE @lastname		VARCHAR(50);
	DECLARE @middleinitial	VARCHAR(3);
	DECLARE @namesuffix		VARCHAR(5);
	DECLARE @contactno		VARCHAR(15);
	DECLARE @email			VARCHAR(255);
	DECLARE @college		VARCHAR(100);
	DECLARE @institution	VARCHAR(50);
	DECLARE @validatorID	INT;

	set @firstname = '$fname'
	set @middlename = '$mname'
	set @lastname = '$lname'
	set @middleinitial = '$minitial'
	set @namesuffix = '$nsuffix'
	set @contactno = '$cname'
	set @email = '$email'
	set @institution = '$institution'
	set @validatorID = '$validatorid'


		UPDATE tblValidator
		SET strFirstname = @firstname,
			strMiddlename = @middlename,
			strLastname = @lastname,
			strMiddleInitial = @middleinitial,
			strNameSuffix = @namesuffix,
			strContactNumber = @contactno,
			strEmailAddress = @email,
		 strInstitution = @institution
		WHERE intValidatorID = @validatorID";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}
	/****** END EXTERNALVALIDATOR!!!!! ******/
	/******  STAFF MGT START!!!!! ******/
	public function showAllStaff(){
    $result = array();
		$query = $this->db->query("select intStaffID,Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strRole, strCollegeDepartment
		from tblHerbariumStaff");
		foreach ($query->result() as $r)
    {
      $btn = '<button class="btn btn-primary staff-edit" data="'.$r->intStaffID.'"><i class="far fa-edit"></i></button>';

      $result[] = array(
        // $r->intStaffID,
        $r->strFullName,
        $r->strRole,
        $r->strCollegeDepartment,
        $btn,
        $r->intStaffID
      );
    }
    return $result;
	}


	public function addStaff(){

	$fname = $this->input->post('SMgtFName');
	$mname = $this->input->post('SMgtMName');
	$minitial = $this->input->post('mInitial');
	$lname = $this->input->post('SMgtLName');
	$nsuffix = $this->input->post('txtNSuffix');
	$cname = $this->input->post('SMgtCNumber');
	$email = $this->input->post('SMgtEAdd');
	$role = $this->input->post('sRole');
	$department = $this->input->post('sCollege');
	$querycheckemail=$this->db->query("select * from tblHerbariumStaff where [strEmailAddress] = '".$email."'");
	if($querycheckemail->num_rows() == 0){

			$query="
			insert into tblHerbariumStaff([strFirstname]
		      ,[strMiddlename]
		      ,[strLastname]
		      ,[strMiddleInitial]
		      ,[strNameSuffix]
		      ,[strContactNumber]
		      ,[strEmailAddress]
		      ,[strRole]
		      ,[strCollegeDepartment]
		      ,[strHasAccount]) VALUES ('".$fname."','".$mname."','".$lname."','".$minitial."','".$nsuffix."','".$cname."','".$email."','".$role."','".$department."','No')

			";
				$this->db->query($query);

				if($this->db->affected_rows() > 0){
					return true;
				}else{
					return false;
				}
	} else{
		return false;
	}
	}

	public function editStaff(){
		$id = $this->input->get('id');
		$this->db->where('intStaffID', $id);
		$query = $this->db->select('intStaffID,
      strFirstname
      ,strMiddlename
      ,strLastname
      ,strMiddleInitial
      ,strNameSuffix
      ,strContactNumber
      ,strEmailAddress,
			 strRole,
			 strCollegeDepartment,
			 ')
			->get('tblHerbariumStaff ');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateStaff(){

	$fname = $this->input->post('eSMgtFName');
	$mname = $this->input->post('eSMgtMName');
	$minitial = $this->input->post('emInitial');
	$lname = $this->input->post('eSMgtLName');
	$nsuffix = $this->input->post('etxtNSuffix');
	$cname = $this->input->post('eSMgtCNumber');
	$email = $this->input->post('eSMgtEAdd');
	$role = $this->input->post('esRole');
	$department = $this->input->post('esCollege');

	$staffid=$this->input->post('txtId');

	$query="
	DECLARE @firstname		VARCHAR(50);
	DECLARE @middlename		VARCHAR(50);
	DECLARE @lastname		VARCHAR(50);
	DECLARE @middleinitial	VARCHAR(3);
	DECLARE @namesuffix		VARCHAR(5);
	DECLARE @contactno		VARCHAR(15);
	DECLARE @email			VARCHAR(255);
	DECLARE @role			VARCHAR(50);
	DECLARE @department		VARCHAR(100);

	DECLARE @staffID		VARCHAR(50);

	set @firstname = '$fname'
	set @middlename = '$mname'
	set @lastname = '$lname'
	set @contactno = '$cname'
	set @email = '$email'
	set @role = '$role'
	set @department = '$department'

	set @middleinitial ='$minitial'
	set @namesuffix	='$nsuffix'
	set @staffID	='$staffid'

UPDATE tblHerbariumStaff
		SET strFirstname = @firstname,
			strMiddlename = @middlename,
			strLastname = @lastname,
			strMiddleInitial = @middleinitial,
			strNameSuffix = @namesuffix,
			strContactNumber = @contactno,
			strEmailAddress = @email,
		strRole = @role,
			strCollegeDepartment = @department

		WHERE intStaffID = @staffID


	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}
	/****** END STAFF MGT!!!!! ******/
	/******  ACCOUNTS START!!!!! ******/
	public function showAllAccounts(){
		$result = array();
		$query = $this->db->query("select * from viewAccounts

		");

	foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary account-edit" data="'.$r->intStaffID.'"><i class="far fa-edit"></i></button>';

			$result[] = array(
					// $r->intStaffID,
					$r->strFullName,
					$r->strUsername,
					$btn,
					$r->intStaffID
					);
		}

		return $result;
	}

	public function addAccounts(){

	$staffname = $this->input->post('StaffName');
	$username = $this->input->post('AAUName');
	$password = $this->input->post('AAPass');
	$querycheckuname=$this->db->query("select * from tblAccounts where [strUserName] = '".$username."'");
	if($querycheckuname->num_rows() == 0) {
		$query="

		DECLARE @staffID 		INT;
		DECLARE @username		VARCHAR(50);
		DECLARE @password		VARCHAR(50);

		Set @staffID ='$staffname'
		Set @username ='$username'
		Set @password ='$password'

				INSERT INTO tblAccounts(intStaffID, strUsername, strPassword)
				VALUES (@staffID, @username, @password, getdate())

				update tblHerbariumStaff
				set strHasAccount = 'Yes'
				where intStaffID = @staffID

		";


		if($this->db->query($query)) {
			return true;
		} else {
			return false;
		}
	}else {
		return false;
	}
	}

	public function editAccounts(){
		$id = $this->input->get('id');
		$this->db->where('intStaffID', $id);
		$query = $this->db->select('*')
			->get('viewAccounts');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateAccounts(){
	$staffname = $this->input->post('eStaffName');
	$username = $this->input->post('eAAUName');
	$password = $this->input->post('eAAPass');
	$staffid = $this->input->post('txtId');


	$query="

	DECLARE @staffID 		INT;
	DECLARE @staffName		VARCHAR(MAX);
	DECLARE @username		VARCHAR(50);
	DECLARE @password		VARCHAR(50);

	Set @username ='$username'
	Set @password ='$password'
	Set @staffID = '$staffid'


		UPDATE tblAccounts
		SET intStaffID = @staffID,
			strUsername = @username,
			strPassword = @password
		WHERE intStaffID = @staffID;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function showStaffName(){
		$query = $this->db
		->query("select strFullName,HS.intStaffID from viewHerbariumStaff vHS join tblHerbariumStaff HS on vHS.intStaffID = hs.intStaffID where strHasAccount = 'No'
		");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showeditStaffName(){

		$query = $this->db
		->query("select strFullName,HS.intStaffID from viewHerbariumStaff vHS join tblHerbariumStaff HS on vHS.intStaffID = hs.intStaffID
		");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}


/** PLANT BORROWER **/

	public function showAllPlantBorrower()
	{
		$result = array();
		$query = $this->db->select('intBorrowerID, strLastname, strFirstname, strAffiliation')
                ->get('tblBorrower');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary borrower-edit" data="'.$r->intBorrowerID.'">Edit</button>';

			$result[] = array(
					// $r->intPhylumID,
					$r->strLastname,
					$r->strFirstname,
					$r->strAffiliation,
					$btn,
					$r->intBorrowerID
					);
		}


		return $result;
	}


	public function addPlantBorrower(){

			$fn=$this->input->post('PBFName');
			$mn=$this->input->post('PBMName');
			$mi=$this->input->post('PBMInitial');
			$ln=$this->input->post('PBLName');
			$ns=$this->input->post('PBNSuffix');
			$ha=$this->input->post('PBHAddress');
			$cn=$this->input->post('PBCNumber');
			$ea=$this->input->post('PBEAddress');
			$af=$this->input->post('PBAffiliation');

			$query="
			insert into tblBorrower(strFirstname,strMiddlename,strMiddleInitial,strLastname,strNameSuffix,strHomeAddress,strContactNumber,strEmailAddress,strAffiliation) VALUES ('".$fn."','".$mn."','".$mi."','".$ln."','".$ns."','".$ha."','".$cn."','".$ea."','".$af."')";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function editPlantBorrower(){
		$id = $this->input->get('id');
		$this->db->where('intBorrowerID', $id);
		$query = $this->db->get('tblBorrower');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


    public function updatePlantBorrower(){
   		 $id = $this->input->post('txtId');

	     $field = array(

    		'strFirstname'=>$this->input->post('PBFName'),
			'strMiddlename'=>$this->input->post('PBMName'),
			'strMiddleInitial'=>$this->input->post('PBMInitial'),
			'strLastname'=>$this->input->post('PBLName'),
			'strNameSuffix'=>$this->input->post('PBNSuffix'),
			'strHomeAddress'=>$this->input->post('PBHAddress'),
			'strContactNumber'=>$this->input->post('PBCNumber'),
			'strEmailAddress'=>$this->input->post('PBEAddress'),
			'strAffiliation'=>$this->input->post('PBAffiliation')
    );
   		 $this->db->where('intBorrowerID', $id);
    	 $this->db->update('tblBorrower', $field);

    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

	/****** END ACCOUNTS!!!!! ******/
	/******  CALENDAR START!!!!! ******/


	public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("tblEvents");
}

public function add_event($data)
{
      $start_date = $this->input->post("start_date", TRUE);
$querycheckdepreqtbl=$this->db->query("select * from tblDepositReq where( dtAppointmentDate = '".$start_date."' ) and ( strStatus='Pending' or strStatus='Approved')");
if($querycheckdepreqtbl->num_rows()==0){

		$querycheckvisittbl=$this->db->query("select * from tblAppointments where( dtAppointmentDate = '".$start_date."' ) and ( strStatus='Pending' or strStatus='Approved')");
						if($querycheckvisittbl->num_rows()==0){
							$this->db->insert("tblEvents", $data);


									 if($this->db->affected_rows() > 0){
										return true;
									}else{
										return false;
									}
						}else{
							return false;
								}

}else{
	return false;
}



}


public function get_event($id)
{
    return $this->db->where("ID", $id)->get("tblEvents");
}

public function update_event($id, $data)
{

     $start_date = $this->input->post("start_date", TRUE);
$querycheckdepreqtbl=$this->db->query("select * from tblDepositReq where( dtAppointmentDate = '".$start_date."' ) and ( strStatus='Pending' or strStatus='Approved')");
if($querycheckdepreqtbl->num_rows()==0){

		$querycheckvisittbl=$this->db->query("select * from tblAppointments where( dtAppointmentDate = '".$start_date."' ) and ( strStatus='Pending' or strStatus='Approved')");
						if($querycheckvisittbl->num_rows()==0){
							$this->db->where("ID", $id)->update("tblEvents", $data);


									 if($this->db->affected_rows() > 0){
										return true;
									}else{
										return false;
									}
						}else{
							return false;
								}

}else{
	return false;
}

}

public function delete_event($id)
{

    $this->db->where("ID", $id)->delete("tblEvents");

}


	/****** END CALENDAR!!!!! ******/

// LOAN REQUEST //
public function showLoanReqPending(){

$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName,strPurpose, lr.intOUserID,intLoanReqID,strStatus,dtAppointmentDate
		from tblLoanReq lr join tblOnlineUser ou
		on lr.intOUserID = ou.intOUserID
		where strStatus ='Pending'");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		}

public function showLoanReqOkay(){


$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName ,strPurpose, lr.intOUserID,intLoanReqID,strStatus,ou.strEmailAddress
		from tblLoanReq lr join tblOnlineUser ou
		on lr.intOUserID = ou.intOUserID
		where strStatus ='For Claiming'");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		}


public function showLoanReqAll(){

$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName,strPurpose, lr.intOUserID,intLoanReqID,strStatus
		from tblLoanReq lr join tblOnlineUser ou
		on lr.intOUserID = ou.intOUserID
		");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		}


public function editLoanReq(){

		$id = $this->input->get('id');
		$this->db->where('intLoanReqID', $id);
		$query = $this->db->select("Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strPurpose, lr.intOUserID,lr.intLoanReqID")
		->join('tblOnlineUser ou','ou.intOUserID = lr.intOUserID')
		->get('tblLoanReq lr');
		if($query->num_rows() > 0){
			return $query->row();


		}
		else{

			return false;
		}
	}

public function showloanlist(){

		$id = $this->input->get('id');
		$this->db->where('intLoanReqID', $id);
	$query= $this->db->select("strScientificName")
		->get('tblLoanList');
		if($query->num_rows() > 0){
			return $query->result();
		}else
		{
			return false;
		}
	}
public function updateLoanStatus(){

    $depositid = $this->input->post('txtId');
	$status=$this->input->post('txtStatus');
//DECLARE @s$tatus		VARCHAR(50);
//Set @status ='$status'
	$query="

	DECLARE @depositid 		INT;
	DECLARE @status 		varchar(255);

	Set @depositid ='$depositid'
	Set @status ='$status'

		UPDATE tblLoanReq
		SET strStatus = @status
		WHERE intLoanReqID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}

	public function LoanConfirmation(){
	$id = $this->input->get('id');
	$this->db->where('intLoanReqID', $id);
		$query = $this->db->select("intLoanReqID,
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName")

		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblLoanReq dr');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


		public function updateLoanConfirmation(){


$depositid = $this->input->post('txtId');
$status = $this->input->post('txtStatus');

	$query="

	DECLARE @depositid INT;
	DECLARE @status		VARCHAR(50);

	Set @depositid ='$depositid'
	Set @status ='$status'


		UPDATE tblLoanReq
		SET strStatus = @Status
		WHERE intLoanReqID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function LoanEmailCon(){
	$id = $this->input->get('id');
	$this->db->where('intLoanReqID', $id);
		$query = $this->db->select("intLoanReqID, strEmailAddress")
		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblLoanReq dr');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
//DEPOSIT REQUEST
public function showAllDepositReqPending()
{
	$result = array();
	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus, intDepositReqID

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		where strStatus ='Pending'");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary view-depositReq" title="View" data="'.$r->intDepositReqID.'"><i class="far fa-eye"></i></button>';

			$result[] = array(
					$r->intDepositReqID,
					$r->strFullName,
					$r->strCommonName,
					$r->dtDateCollected,
					$r->strFullLocation,
					$r->dtAppointmentDate,
					$r->strStatus,
					$btn,
					$r->intDepositReqID
					);
		}

		return $result;
}

public function showAllDepositReqOkay()
{
	$result = array();
	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, strFullLocation, dtAppointmentDate, strStatus, intDepositReqID

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		where strStatus ='For Depositing' OR strStatus = 'Email Sent'");

		foreach ($query->result() as $r)
		{
			$btn = '<button style= "margin-right:2px" class="btn btn-primary btn-sm view-emailcon" title="Send Email" data="'.$r->intDepositReqID.'"><i class="far fa-envelope"></i></button><button style= "margin-right:2px" class="btn btn-primary btn-sm view-DResched" title="Re-schedule" data="'.$r->intDepositReqID.'"><i class="fas fa-calendar-alt"></i></button><button class="btn btn-primary btn-sm view-depositcon" title="Confirm" data="'.$r->intDepositReqID.'"><i class="fas fa-check"></i></button>';
			$result[] = array(
					$r->intDepositReqID,
					$r->strFullName,
					$r->strCommonName,
					$r->strFullLocation,
					$r->dtAppointmentDate,
					$r->strStatus,
					$btn,
					$r->intDepositReqID
					);
		}

		return $result;
}

public function DResched(){
		$id = $this->input->get('id');
		$this->db->where('intDepositReqID', $id);
		$query = $this->db->select("intDepositReqID
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName,dtAppointmentDate,ou.strEmailAddress")

		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblDepositReq dr');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function showAllDepositReqAll()
{
	$result = array();
	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, strStatus, intDepositReqID

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID");

		foreach ($query->result() as $r)
		{
			$result[] = array(
					$r->intDepositReqID,
					$r->strFullName,
					$r->strCommonName,
					$r->dtDateCollected,
					$r->strFullLocation,
					$r->strStatus,
					$r->intDepositReqID
					);
		}

		return $result;
}


public function viewDepositReq(){
		$id = $this->input->get('id');
	$this->db->where('intDepositReqID', $id);
		$query = $this->db->select("intDepositReqID
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName
      ,dtDateCollected
      ,strFullLocation
      ,strPlantDesc
      ,strScientificName
      ,strCommonName
      ,strStatus")
		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblDepositReq dr');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


public function updateConfirmation(){

$depositid = $this->input->post('txtId');
$status = $this->input->post('txtStatus');



	$query="

	DECLARE @depositid INT;
	DECLARE @status		VARCHAR(50);

	Set @depositid ='$depositid'
	Set @status ='$status'


		UPDATE tblDepositReq
		SET strStatus = @Status
		WHERE intDepositReqID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function Confirmation(){
	$id = $this->input->get('id');
	$this->db->where('intDepositReqID', $id);
		$query = $this->db->select("intDepositReqID,
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName")

		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblDepositReq dr');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function EmailCon(){
	$id = $this->input->get('id');
	$this->db->where('intDepositReqID', $id);
		$query = $this->db->select("intDepositReqID, strEmailAddress, dtAppointmentDate")
		->join('tblOnlineUser ou','ou.intOUserID=dr.intOUserID')
		->get('tblDepositReq dr');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateAcceptStatus(){

    $depositid = $this->input->post('txtId');

	$query="

	DECLARE @depositid 		INT;

	Set @depositid ='$depositid'

		UPDATE tblDepositReq
		SET strStatus = 'For Depositing'
		WHERE intDepositReqID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


//APPOINTMENT
	public function showAllAppointmentPending(){


		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='Pending'");

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary view-appointment" title="View" data="'.$r->intAppointmentID.'"><i class="far fa-eye"></i></button>';

			$result[] = array(
					$r->intAppointmentID,
					$r->strFullName,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strStatus,
					$btn,
					$r->intAppointmentID
					);
		}

		return $result;
}
public function showAllAppointmentReject(){

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='Rejected'");


		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary view-emailConReject" title="Send Email" data="'.$r->intAppointmentID.'"><i class="far fa-envelope"></i></button>';

			$result[] = array(
					$r->intAppointmentID,
					$r->strFullName,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strStatus,
					$btn,
					$r->intAppointmentID
					);
		}

		return $result;
}

public function ViewVisitReq(){
		$id = $this->input->get('id');
	$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName
     ,dtAppointmentDate
     ,strVisitPurpose
     ,strVisitDescription
     ,strStatus")
		->join('tblOnlineUser ou','ou.intOUserID=ar.intOUserID')
		->get('tblAppointments ar');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


public function updateVisitStatus(){

    $depositid = $this->input->post('txtId');
$status=$this->input->post('txtStatus');
//DECLARE @status		VARCHAR(50);
//Set @status ='$status'
	$query="

	DECLARE @depositid 		INT;

DECLARE @status 		varchar(255);

	Set @depositid ='$depositid'
	Set @status ='$status'

		UPDATE tblAppointments
		SET strStatus = @status
		WHERE intAppointmentID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function showAllAppointmentExpect(){

	$result = array();
	$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='For Visiting' or strStatus='Email Sent'");
		foreach ($query->result() as $r)
		{
			$btn = '<button style= "margin-right:2px" class="btn btn-primary btn-sm view-emailcon" title="Send Email" data="'.$r->intAppointmentID.'"><i class="far fa-envelope"></i></button><button style= "margin-right:2px" class="btn btn-primary btn-sm view-VResched" title="Re-schedule" data="'.$r->intAppointmentID.'"><i class="fas fa-calendar-alt"></i></button><button class="btn btn-primary btn-sm view-appcon" title="Confirm" data="'.$r->intAppointmentID.'"><i class="fas fa-check"></i></button>';

			$result[] = array(
					$r->intAppointmentID,
					$r->strFullName,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strStatus,
					$btn,
					$r->intAppointmentID
					);
		}
		return $result;

}
public function VResched(){

		$id = $this->input->get('id');
		$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strVisitPurpose,ou.strEmailAddress,dtAppointmentDate")

		->join('tblOnlineUser ou','ou.intOUserID=ap.intOUserID')
		->get('tblAppointments ap');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
public function VisitConfirmation(){
	$id = $this->input->get('id');
	$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID,
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName")

		->join('tblOnlineUser ou','ou.intOUserID=ta.intOUserID')
		->get('tblAppointments ta');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateVisitConfirmation(){


$depositid = $this->input->post('txtId');
$status = $this->input->post('txtStatus');



	$query="

	DECLARE @depositid INT;
	DECLARE @status		VARCHAR(50);

	Set @depositid ='$depositid'
	Set @status ='$status'


		UPDATE tblAppointments
		SET strStatus = @status
		WHERE intAppointmentID = @depositid;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}

	public function VisitEmailCon(){
	$id = $this->input->get('id');
	$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID, strEmailAddress")
		->join('tblOnlineUser ou','ou.intOUserID=ta.intOUserID')
		->get('tblAppointments ta');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function VisitEmailConReject(){
	$id = $this->input->get('id');
	$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID, strEmailAddress")
		->join('tblOnlineUser ou','ou.intOUserID=ta.intOUserID')
		->get('tblAppointments ta');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function showAllAppointmentAll(){

	$result = array();
	$query = $this->db->query("select intAppointmentID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID");
		foreach ($query->result() as $r)
		{

			$result[] = array(
					$r->intAppointmentID,
					$r->strFullName,
					$r->dtAppointmentDate,
					$r->strVisitPurpose,
					$r->strStatus,
					$r->intAppointmentID
					);
		}

		return $result;
}
//EXTERNAL VALIDATION
	public function showExValPending(){
		$result = array();
		$query = $this->db->where('strStatus', "Further Verification")
							->get('viewVerifyingDeposit');

		foreach ($query->result() as $r)
		{


			$btn = '<button class="btn btn-primary view-EVPending" data="'.$r->intPlantDepositID.'"><i class="fas fa-eye"></i></button>';


			$result[] = array(
					$r->strAccessionNumber,
					$r->strScientificName,
					$r->strCollector,
					$r->dateDeposited,
					$r->strStatus,
					$btn,
					$r->intPlantDepositID

					);
		}

		return $result;
}

	public function viewEV(){
		$id = $this->input->get('id');

	$this->db->where('intPlantDepositID', $id);
		$query = $this->db->select("intPlantDepositID
			,strAccessionNumber
			,strFamilyName
			,strScientificName
			,strCommonName
			,strCollector
			,strFullLocality
			,strStaff
			,dateCollected
			,dateDeposited
			,strDescription")
		->get('viewVerifyingDeposit');

			if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateEVStatus(){

    $depositid = $_POST['txtId'];
    $result = $_POST['externalvalidator'];
    $result_explode = explode('|', $result);

	$query="

	DECLARE @depositid 		INT;

	Set @depositid ='$depositid'
insert into tblSentForVerify(intDepositID,intExValidatorID,strEmailAddress) values (@depositid,'".$result_explode[0]."','".$result_explode[1]."')

		UPDATE tblPlantDeposit
		SET strStatus = 'Sent For External Validation'
		WHERE intPlantDepositID = @depositid;

			";
		if($this->db->query($query)){
			return true;

		}else{
			return false;
		}
	}



public function showExValOkay(){
		$result = array();
		$query = $this->db->query("select Concat(cl.strLastname,', ',cl.strFirstname,' ',cl.strMiddlename,' ',cl.strNameSuffix) as strFullName, intPlantDepositID,intAccessionNumber,dateDeposited,strStatus

		from tblPlantDeposit pd join tblCollector cl
		on pd.intCollectorID = cl.intCollectorID
		where strStatus= 'Sent For External Validation'");


		foreach ($query->result() as $r)
		{

		$btn = '<button class="btn btn-primary view-EVConfirmation" data="'.$r->intPlantDepositID.'"><i class="fas fa-check"></i></button>';


			$result[] = array(
					$r->intPlantDepositID,
					$r->intAccessionNumber,
					$r->strFullName,
					$r->dateDeposited,
					$r->strStatus,
					$btn,
					$r->intPlantDepositID

					);
		}

		return $result;
}

public function EVEmailCon()
{
	$id = $this->input->get('id');
	$this->db->where('intDepositID', $id);
		$query = $this->db->select("intDepositID, strEmailAddress")
		->get('tblSentForVerify');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}



public function EVConfirmation(){
	$id = $this->input->get('id');
	$this->db->where('intDepositID', $id);
		$query = $this->db->select("intDepositID, V.strEmailAddress,intExValidatorID, Concat(V.strLastname,', ',V.strFirstname,' ',V.strMiddlename,' ',V.strNameSuffix) as strFullName,V.intValidatorID")
		->join('tblValidator V','V.intValidatorID = SFV.intExValidatorID')
		->get('tblSentForVerify SFV');

		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

public function updateEVConfirmation(){


$depositid = $this->input->post('txtId');
$status = $this->input->post('txtStatus');
$validatorid= $this->input->post('txtId2');

if($status ==='Verified'){
		$query="

	DECLARE @depositid INT;
	DECLARE @status		VARCHAR(50);
	DECLARE @speciesid int;
	Set @depositid ='$depositid'
	Set @status ='$status'
set @speciesid = (select intSpeciesID from tblVerifyingDeposit VD join tblPlantDeposit PD on PD.intPlantDepositID = VD.intPlantDepositID where PD.intPlantDepositID = @depositid);

insert into tblHerbariumSheet(intPlantDepositID,intPlantReferenceID,intSpeciesID,intValidatorID,dateVerified) VALUES (@depositid,@depositid,@speciesid,'".$validatorid."',getdate());


		UPDATE tblPlantDeposit
		SET strStatus = @status
		WHERE intPlantDepositID = @depositid;


	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}else{
		$query1="

	DECLARE @depositid INT;
	DECLARE @status		VARCHAR(50);

	Set @depositid ='$depositid'
	Set @status ='$status'



		UPDATE tblPlantDeposit
		SET strStatus = @status
		WHERE intPlantDepositID = @depositid;


	";
		if($this->db->query($query1)){
			return true;
		}else{
			return false;
		}
	}

	}






public function showExValAll(){
		$result = array();
		$query = $this->db->get('viewHerbariumSheet');


		foreach ($query->result() as $r)
		{

			$result[] = array(

					$r->strAccessionNumber,
					$r->strScientificName,
					$r->strCollector,
					$r->dateDeposited,
					$r->strStatus

					);
		}

		return $result;
}


/**** AUTHOR *****/
public function showAllAuthor()
	{
		$result = array();
		$query = $this->db
                ->get('tblAuthor');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary author-edit" data="'.$r->intAuthorID.'">Edit</button>';

			$result[] = array(
					// $r->intPhylumID,

					$r->strAuthorsName,
					$r->strSpeciesSuffix,
					$btn,
					$r->intAuthorID
					);
		}


		return $result;
	}

	public function editAuthor(){
		$id = $this->input->get('id');
		$this->db->where('intAuthorID', $id);
		$query = $this->db->get('tblAuthor');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	 public function addAuthor(){

			$authorname=$this->input->post('txtAName');
			$authorsuffix=$this->input->post('txtSASuffix');

			$query="
			insert into tblAuthor(strAuthorsName,strSpeciesSuffix) VALUES ('".$authorname."','".$authorsuffix."')

			";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}
    public function updateAuthor(){
    $id = $this->input->post('txtId');
    $field = array(
    'strAuthorsName'=>$this->input->post('txteAName'),
    'strSpeciesSuffix'=>$this->input->post('txteSASuffix')
    );
    $this->db->where('intAuthorID', $id);
    $this->db->update('tblAuthor', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



public function showAllPlantType()
	{
		$result = array();
		$query = $this->db
                ->get('tblPlantType');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary ptype-edit" data="'.$r->intPlantTypeID.'">Edit</button>';

			$result[] = array(
					// $r->intPhylumID,

					$r->strPlantTypeCode,
					$r->strPlantTypeName,
					$btn,
					$r->intPlantTypeID
					);
		}


		return $result;
	}
	public function editPlantType(){
		$id = $this->input->get('id');
		$this->db->where('intPlantTypeId', $id);
		$query = $this->db->get('tblPlantType');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	 public function addPlantType(){

			$planttypecode=$this->input->post('txtPlantCode');
			$planttypename=$this->input->post('txtPlantType');

			$query="
			insert into tblPlantType(strPlantTypeCode,strPlantTypeName) VALUES ('".$planttypecode."','".$planttypename."')

			";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}
    public function updatePlantType(){
    $id = $this->input->post('txtId');
    $field = array(
    'strPlantTypeCode'=>$this->input->post('txtePlantCode'),
    'strPlantTypeName'=>$this->input->post('txtePlantType')
    );
    $this->db->where('intPlantTypeID', $id);
    $this->db->update('tblPlantType', $field);
    if($this->db->affected_rows() > 0){
      return true;
    }else{
      return false;
    }
  }


public function showAllAltName()
	{
		$result = array();
		$query = $this->db
                ->get('viewSpeciesAlternate');

		foreach ($query->result() as $r)
		{
			$btn = '<button class="btn btn-primary altname-edit" data="'.$r->intAltNameID.'"><i class="far fa-edit"></button>';

			$result[] = array(
					// $r->intPhylumID,

					$r->strScientificName,
					$r->strLanguage,
					$r->strAlternateName,
					$btn,
					$r->intAltNameID
					);
		}


		return $result;
	}
	public function editAltName(){
		$id = $this->input->get('id');
		$this->db->where('intAltNameID', $id);
		$query = $this->db->get('viewSpeciesAlternate');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	 public function addAltName(){

			$speciesid=$this->input->post('txttaxonName');
			$language=$this->input->post('txtLanguage');
			$altname=$this->input->post('txtAName');
			$query="
						INSERT INTO tblSpeciesAlternateName (intSpeciesID, strLanguage, strAlternateName)
			VALUES ('".$speciesid."','".$language."', '".$altname."')

			";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}
    public function updateAltName(){
    $id = $this->input->post('txtId');
    $intSpeciesID=$this->input->post('txtetaxonName');
    $strLanguage=$this->input->post('txteLanguage');
    $strAlternateName=$this->input->post('txteAName');

 $query="
			declare @speciesid int;

		set @speciesid = (select intSpeciesID from viewTaxonSpecies where strScientificName = '".$intSpeciesID."')

			update tblSpeciesAlternateName
			set intSpeciesID = @speciesid,
				strLanguage = '".$strLanguage."',
				strAlternateName = '".$strAlternateName."'
				where intAltNameID = ".$id."

			";

if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
  }


	public function showAllExValidators(){
		$query = $this->db->select("intValidatorID,
     Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName,
			 strInstitution, strEmailAddress")
		->where('strValidatorType','External')
			->get('tblValidator');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showAllSpeciesName(){
		$query = $this->db->get('viewTaxonSpecies');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showSpeciesAuthorsName(){
		$query = $this->db->get('tblAuthor');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showCountries(){
		$query = $this->db
		->get('tblCountry');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function showCity(){
		$query = $this->db
		->get('tblProvince');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showProvinces(){
		$query = $this->db
		->get('tblProvince');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

public function showNotif(){
if(isset($_POST["view"]))
{
 if($_POST["view"] != ''){
$update_query= $this->db->query("update tblNotif set intNotifStatus = 1 where intNotifStatus = 0");

}
$query= $this->db->query("select top 20 strNotifContent from tblNotif order by intNotifID DESC ");

if($query->num_rows() > 0){

return $query->result();
		}else{

			return false;
		}
}

//$query1= $this->db->query("select * from tblNotif where intNotifStatus = 0");

 //$count = $query1->num_rows();
// $data = array(
//  'notification'   => $query->result(),
 // 'unseen_notification' => $count
 //);


}
public function showNotifCount(){
$query= $this->db->query("select count(intNotifID)as intcount from tblNotif where intNotifStatus = 0");
if($query->num_rows() > 0){

return $query->row();
		}else{

			return false;
		}
}

public function changedepositstatus(){

    $id=$this->input->post('txtId');


	$query="

		UPDATE tblDepositReq
		SET strStatus = 'Email Sent'
		WHERE intDepositReqID = '".$id."';

			";
		if($this->db->query($query)){
			return true;

		}else{
			return false;
		}
	}


public function changevisitstatus(){

    $id=$this->input->post('txtId');


	$query="

		UPDATE tblAppointments
		SET strStatus = 'Email Sent'
		WHERE intAppointmentID = '".$id."';

			";
		if($this->db->query($query)){
			return true;

		}else{
			return false;
		}
	}

public function depreschedadmin(){

    $id=$this->input->post('txtId');
$date=$this->input->post('txtReschedDate');
$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$date."' ");
if($querycheckeventtbl->num_rows()==0){
	$query="

		UPDATE tblDepositReq
		SET dtAppointmentDate = '".$date."'
		WHERE intDepositReqID = '".$id."';

			";
		if($this->db->query($query)){
			return true;

		}else{
			return false;
		}
	}else{
			$msg='conflict';
		echo json_encode($msg);
	}
}
public function visitreschedadmin(){

    $id=$this->input->post('txtId');
$date=$this->input->post('txtReschedDate');
$querycheckeventtbl=$this->db->query("select * from tblEvents where [start] = '".$date."' ");
if($querycheckeventtbl->num_rows()==0){
	$query="
		update tblAppointments
		SET dtAppointmentDate = '".$date."'
		WHERE intAppointmentID = '".$id."';

			";
		if($this->db->query($query)){
			return true;

		}else{
			return false;
		}
	}
		else{
			$msg='conflict';
		echo json_encode($msg);
	}
}



	public function editOUser(){
		$id = $this->input->get('id');
		$this->db->where('intOUserID', $id);
		$query = $this->db->select("intOUserID,Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName,strContactNumber,strEmailAddress,strPresentAddress,strPermanentAddress,strAffiliationName,strAffiliationAddress,strAffiliationPosition")
		->get('tblOnlineUser');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function getmonth($key){
		$query = $this->db->query("declare @currentyr int;

set @currentyr=(select YEAR(getdate()))

SELECT *
FROM viewHerbariumSheet
WHERE MONTH(dateVerified)='10' AND YEAR(dateVerified)=@currentyr");

		if($query->num_rows() > 0){


}}
	public function pdfgetfromdb($key){
		$query = $this->db->query("SELECT *
FROM viewHerbariumSheet
WHERE MONTH(dateVerified)='".$key."' AND YEAR(dateVerified)='2018'");


			$output = '<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
&nbsp; &nbsp; &nbsp;<img src="assets/bower_components/pdfheader.png" />
<center><h3>Monthly External Validation Report</h3></center><br><br>
			<table width="100%" cellspacing="5" cellpadding="5">
			<thead>
			<tr>
			<td><center><b>Accession Number</td>
			<td><center><b>Family Name</td>
			<td><center><b>Scientific Name</td>
			<td><center><b>Common Name</td>
			<td><center><b>Full Locality</td>
			<td><center><b>Date Verified</td>
			</tr>
			</thead>';
		foreach($query->result() as $row)
		{
			$output .= '

			<tr>
				<td width="20%">
					<p>'.$row->strAccessionNumber.'</p>

				</td>
								<td width="20%">

					<p>'.$row->strFamilyName.'</p>

				</td>
								<td width="20%">

					<p>'.$row->strScientificName.'</p>

				</td>
								<td width="20%"><center>

					<p>'.$row->strCommonName.'</p></center>

				</td>
								<td width="50%">

					<p>'.$row->strFullLocality.' </p>

				</td>
								<td width="30%">

					<p>'.$row->dateVerified.' </p>
				</td>
			</tr>
			';
		}
		$output .= '</table>';
		return $output;

	}

//Queries
public function showAllOUser()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');

		$result = array();
		$query = $this->db->query("Select intOUserID,Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName,strContactNumber,strEmailAddress,strPresentAddress,strPermanentAddress,strAffiliationName,strAffiliationAddress,strAffiliationPosition,dtDateAdded
			from tblOnlineUser where dtDateAdded BETWEEN '".$startdate."' AND '".$enddate."'");

return $query->result();
	}

	
public function showAllAdmin()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');

		$result = array();
		$query = $this->db->query("Select intStaffID,Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName,strContactNumber,strEmailAddress,strRole,strCollegeDepartment,dtDateAdded
			from tblHerbariumStaff where dtDateAdded BETWEEN '".$startdate."' AND '".$enddate."'");


return $query->result();
	}


public function showAllEvents()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');

		$result = array();
		$query = $this->db->query("Select ID, (title) as eventtitle, (start) as startdate, description from tblEvents where start BETWEEN '".$startdate."' AND '".$enddate."'");


return $query->result();
	}

public function showAllPendingD()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intDepositReqID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllForDepositD()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intDepositReqID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllArrivedD()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intDepositReqID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllDidNotArriveD()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intDepositReqID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllD()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intDepositReqID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, strCommonName, dtDateCollected, strFullLocation, dtAppointmentDate, strStatus

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."')");

return $query->result();
	}

//** VISITS
	
public function showAllPendingV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllForVisitingV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllRejectedV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");
return $query->result();
	}

public function showAllArrivedV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");
return $query->result();
	}

public function showAllDidNotArriveV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");
return $query->result();
	}

public function showAllV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitPurpose, strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		   where (dtAppointmentDate BETWEEN '".$startdate."' AND '".$enddate."')");
return $query->result();
	}

public function showAllPendingEV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select strAccessionNumber,strScientificName,strCollector,dateDeposited,strStatus

		from viewVerifyingDeposit
		   where (dateDeposited BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllEV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select strAccessionNumber,strScientificName,strCollector,dateDeposited,strStatus

		from viewVerifyingDeposit
		   where (dateDeposited BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllVerifiedEV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select strAccessionNumber,strScientificName,strCollector,dateDeposited,strStatus

		from viewVerifyingDeposit
		   where (dateDeposited BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}

public function showAllNotVErifiedEV()
	{

		$startdate =$this->input->post('dateStart');
		$enddate =$this->input->post('dateEnd');
		$status = $this->input->post('status');

		$result = array();
		$query = $this->db->query("select strAccessionNumber,strScientificName,strCollector,dateDeposited,strStatus

		from viewVerifyingDeposit
		   where (dateDeposited BETWEEN '".$startdate."' AND '".$enddate."') AND (strStatus = '".$status."')");

return $query->result();
	}
}?>

