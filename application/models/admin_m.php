 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_m extends CI_Model{


	public function admincan_login($username,$password){
	$this->db->where('strUserName',$username);
	$this->db->where('strPassword',$password);
	$query=$this->db->get('tblAccounts');
	if($query->num_rows()>0){
		return true;
	}else{
		return false;
	}

}
	/****** PHYLUM ONLY!!!!! ******/

	public function showAllPhylum()
	{
		$result = array();
		$query = $this->db->select('intPhylumID, strDomainName, strKingdomName, strPhylumName')
                ->get('tblPhylum');

		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-primary phylum-edit" data="'.$r->intPhylumID.'">Edit</button>';

			$result[] = array(
					$r->intPhylumID,
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
		
			$query="
			insert into tblPhylum(strDomainName,strKingdomName,strPhylumName) VALUES ('".$domainName."','".$kingdomName."','".$phylumName."')

			";
		if($domainName!=''){
			if($kingdomName!=''){
				if($phylumName!=''){
					$this->db->query($query);
				}else{
					return false;
				}
			}else {
				return false;
			}
		}else {
				return false;
			}
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}	public function editPhylum(){
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
			$btn = '<button class="btn btn-primary class-edit" data="'.$r->intClassID.'">Edit</button>';

			$result[] = array(
					$r->intClassID,
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

			$query="
			insert into tblClass(intPhylumID,strClassname) VALUES ('".$phylumID."','".$className."')

			";

			if($phylumID!=''){
				if($className!=''){
					$this->db->query($query);
				}else{
					return false;
				}
			}else {
				return false;
			}
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
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
	}
	public function updateClass(){
    $id = $this->input->post('txtId');
    $field = array(
    'intPhylumID'=>$this->input->post('speID'),
    'strClassName'=>$this->input->post('txteCName'),
    );
    $this->db->where('intClassID', $id);
    $this->db->update('tblClass', $field);
    if($this->db->affected_rows() > 0){
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
			$btn = '<button class="btn btn-primary order-edit" data="'.$r->intOrderID.'">Edit</button>';

			$result[] = array(
					$r->intOrderID,
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

			$query="
			insert into tblOrder(intClassID,strOrderName) VALUES ('".$intClassID."','".$strOrderName."')

			";
		if($intClassID!=''){
			if($strOrderName!=''){
			
					$this->db->query($query);
				
			}else {
				return false;
			}
		}else {
				return false;
			}
		
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
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
    $field = array(
    'intClassID'=>$this->input->post('sceID'),
    'strOrderName'=>$this->input->post('txteOName'),
    );
    $this->db->where('intOrderID', $id);
    $this->db->update('tblOrder', $field);
    if($this->db->affected_rows() > 0){
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
			$btn = '<button class="btn btn-primary family-edit" data="'.$r->intFamilyID.'">Edit</button>';

			$result[] = array(
					$r->intFamilyID,
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
		$field = array(
			'intOrderID'=>$this->input->post('txtoID'),
			'strFamilyName'=>$this->input->post('txtfName'),
			);
		$this->db->insert('tblFamily', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
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
    $field = array(
    'intOrderID'=>$this->input->post('seOID'),
    'strFamilyName'=>$this->input->post('txteFName'));
    $this->db->where('intFamilyID', $id);
    $this->db->update('tblFamily', $field);
    if($this->db->affected_rows() >0){
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
			$btn = '<button class="btn btn-primary genus-edit" data="'.$r->intGenusID.'">Edit</button>';

			$result[] = array(
					$r->intGenusID,
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
		$field = array(
			'intFamilyID'=>$this->input->post('txtoID'),
			'strGenusName'=>$this->input->post('txtgName'),
			);
		$this->db->insert('tblGenus', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
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
    $field = array(
    'intFamilyID'=>$this->input->post('segFID'),
    'strGenusName'=>$this->input->post('txteGName'));
    $this->db->where('intGenusID', $id);
    $this->db->update('tblGenus', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }

	/****** END GENUS!!!!! ******/
	/****** SPECIES START!!!!! ******/

public function showAllSpecies(){
		$result = array();
		$query = $this->db->select('intSpeciesID,
			 g.strGenusName,
			 strSpeciesName,
			 strCommonName')
			->join('tblGenus g', 'g.intGenusID = s.intGenusID')
			->get('tblSpecies s');
		foreach ($query->result() as $r) 
		{
			$btn = '<button class="btn btn-primary species-edit" data="'.$r->intSpeciesID.'">Edit</button>';

			$result[] = array(
					$r->intSpeciesID,
					$r->strGenusName,			
					$r->strSpeciesName,
					$r->strCommonName,
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
		$field = array(
			'intGenusID'=>$this->input->post('txtgID'),
			'strSpeciesName'=>$this->input->post('txtsName'),
			'strCommonName'=>$this->input->post('txtcoName'),
			);
		$this->db->insert('tblSpecies', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function editSpecies(){

		$id = $this->input->get('id');
		$this->db->where('intSpeciesID', $id);
		$query = $this->db->select('intSpeciesID,
			 g.strGenusName,
			 g.intGenusID,
			 strSpeciesName,
			 strCommonName')
			->join('tblGenus g', 'g.intGenusID = s.intGenusID')
			->get('tblSpecies s');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
    public function updateSpecies(){
    $id = $this->input->post('txtId');
    $field = array(
    'intGenusID'=>$this->input->post('sesGID'),
    'strSpeciesName'=>$this->input->post('txteSName'),
	'strCommonName'=>$this->input->post('txtecName')
	);
    $this->db->where('intSpeciesID', $id);
    $this->db->update('tblSpecies', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }

	/****** END SPECIES!!!!! ******/
	/****** FAMILY BOXES START!!!!! ******/

public function showAllFamilyBoxes(){
		$query = $this->db->select('intBoxID,
			 f.strFamilyName,
			 strBoxNumber,
			 intBoxLimit')
			->join('tblFamily f', 'f.intFamilyID = fb.intFamilyID')
			->get('tblFamilyBox fb');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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
	$execquery  = "

		DECLARE @familyID INT
		DECLARE @identifier INT
		DECLARE @boxlimit INT
		DECLARE @boxNumber VARCHAR(10)
		SET @familyid = '$familyid'
		set @boxLimit = '$boxlimit'

		SET @identifier = (SELECT TOP 1 CAST(SUBSTRING(strBoxNumber, 5, 3) AS INT) FROM tblFamilyBox ORDER BY strBoxNumber DESC)

		IF @identifier IS NULL
			SET @boxNumber = 'BOX-001'
		ELSE
			SET @boxNumber = 'BOX-' + FORMAT(@identifier + 1, '00#')

		INSERT INTO tblFamilyBox (strBoxNumber, intFamilyID, intBoxLimit)
		VALUES (@boxNumber, @familyID, @boxLimit);";

		$this->db->query($execquery);

		if($this->db->affected_rows() > 0){
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
			 strBoxNumber,
			 intBoxLimit')
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
    $field = array(
    'intFamilyID'=>$this->input->post('sefbFID'),
    'intBoxLimit'=>$this->input->post('txteBLLimit')
	);
    $this->db->where('intBoxID', $id);
    $this->db->update('tblFamilyBox', $field);
    if($this->db->affected_rows() >0){
      return true;
    }else{
      return false;
    }
  }
		/****** END FAMILY BOXES!!!!! ******/
	/****** LOCALITY START!!!!! ******/
		public function showAllLocality(){
		$query = $this->db->get('tblLocality');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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
		$query = $this->db->query("select Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strAffiliation, intCollectorID
		from tblCollector ");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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
		if($this->db->query($query))
		{
			return true;
		}
		else
		{
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
      ,strEmailAddress,
      strHomeAddress,
			 strAffiliation')
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
		$query = $this->db->query("select Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strInstitution, intValidatorID
		from tblValidator
		where strValidatorType = 'External'");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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
		$query = $this->db->query("select intStaffID,Concat(strLastname,', ',strFirstname,' ',strMiddlename,' ',strNameSuffix) as strFullName, strRole, strCollegeDepartment
		from [tblHerbariumStaff] 
		");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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


	$query="
	insert into tblHerbariumStaff([strFirstname]
      ,[strMiddlename]
      ,[strLastname]
      ,[strMiddleInitial]
      ,[strNameSuffix]
      ,[strContactNumber]
      ,[strEmailAddress]
      ,[strRole]
      ,[strCollegeDepartment]) VALUES ('".$fname."','".$mname."','".$lname."','".$minitial."','".$nsuffix."','".$cname."','".$email."','".$role."','".$department."')
	
	";
		$this->db->query($query);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
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
		$query = $this->db->query("select * from viewAccounts
		");
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function addAccounts(){

	$staffname = $this->input->post('StaffName');
	$username = $this->input->post('AAUName');
	$password = $this->input->post('AAPass');



	$query="

	DECLARE @staffID 		INT;
	DECLARE @staffName		VARCHAR(MAX);
	DECLARE @username		VARCHAR(50);
	DECLARE @password		VARCHAR(50);

	Set @staffName ='$staffname'
	Set @username ='$username'
	Set @password ='$password'

		SET @staffID = (SELECT intStaffID FROM viewHerbariumStaff WHERE strFullName = @staffName)

		IF NOT EXISTS (SELECT intAccountID
					   FROM tblAccounts
					   WHERE intStaffID = @staffID AND strUsername = @username AND strPassword = @password)
		BEGIN
			INSERT INTO tblAccounts(intStaffID, strUsername, strPassword)
			VALUES (@staffID, @username, @password)
		END
	";


	if($staffname!=''){
			if($username!=''){
				if($password!=''){
					$this->db->query($query);
				}else{
					return false;
				}
			}else {
				return false;
			}
		}else {
				return false;
			}

		$this->db->query($query);

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editAccounts(){
		$id = $this->input->get('id');
		$this->db->where('intAccountID', $id);
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
	$accountid = $this->input->post('txtId');


	$query="

	DECLARE @accountID 		INT;
	DECLARE @staffName		VARCHAR(MAX);
	DECLARE @username		VARCHAR(50);
	DECLARE @password		VARCHAR(50);

	Set @staffName ='$staffname'
	Set @username ='$username'
	Set @password ='$password'
	Set @accountID ='$accountid'

	DECLARE @staffID INT;

		SET @staffID = (SELECT intStaffID FROM viewHerbariumStaff WHERE strFullName = @staffName);

		UPDATE tblAccounts
		SET intStaffID = @staffID,
			strUsername = @username,
			strPassword = @password
		WHERE intAccountID = @accountID;
	";
		if($this->db->query($query)){
			return true;
		}else{
			return false;
		}
	}


	public function showStaffName(){
		$query = $this->db->query("select * from viewHerbariumStaff
		");
		if($query->num_rows() > 0){
			return $query->result();
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
    $this->db->insert("tblEvents", $data);
}

public function get_event($id)
{
    return $this->db->where("ID", $id)->get("tblEvents");
}

public function update_event($id, $data)
{
    $this->db->where("ID", $id)->update("tblEvents", $data);
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
	//->where('strStatus','Pending')
	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtDateCollected, strFullLocation, strCommonName,strStatus, intDepositReqID,dtAppointmentDate

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		where strStatus ='Pending'");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
}

public function showAllDepositReqOkay()
{

	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtDateCollected, strFullLocation, strCommonName,strStatus, intDepositReqID

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID
		where strStatus='For Depositing'");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		
}

public function showAllDepositReqAll()
{

	$query = $this->db->query("select Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtDateCollected, strFullLocation, strCommonName,strStatus, intDepositReqID

		from tblDepositReq td join tblOnlineUser ou
		on td.intOUserID = ou.intOUserID");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
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
		$query = $this->db->select("intDepositReqID, strEmailAddress")
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
$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitDescription,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='Pending'");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

public function showAllAppointmentReject(){
$query = $this->db->query("select intAppointmentID,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitDescription,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='Rejected'");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
public function ViewVisitReq(){
		$id = $this->input->get('id');
	$this->db->where('intAppointmentID', $id);
		$query = $this->db->select("intAppointmentID
      ,Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName
     ,dtAppointmentDate
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
$query = $this->db->query("select intAppointmentID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitDescription,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID
		where strStatus ='For Visiting'");

		if($query->num_rows() > 0){
			return $query->result();
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
		SET strStatus = @Status
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
$query = $this->db->query("select intAppointmentID, Concat(ou.strLastname,', ',ou.strFirstname,' ',ou.strMiddlename,' ',ou.strNameSuffix) as strFullName, dtAppointmentDate,  strVisitDescription,strStatus

		from tblAppointments ap join tblOnlineUser ou
		on ap.intOUserID = ou.intOUserID");

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
		}	

	public function showExValPending(){
		$query = $this->db->select('intPlantDepositID,strAccessionNumber,dateDeposited,strStatus')
		->where('strStatus','For External Validation')
		->get('tblPlantDeposit');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
	}
}

}?>
