
        <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Maintenance/Dashboard" >Home</a></li>
            <li class="breadcrumb-item">Maintenance</li>
            <li class="breadcrumb-item active">Locality </li>
          </ul>
        </div>
      </div>

<!--ADD Locality MODAL-->
      <div class="card">
        <div class="card-header d-flex align-items-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Locality</button>
        </div>         
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left hide" data-backdrop="static" data-keyboard="false">
          <div role="document" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">Add Locality</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form id= "addLocalityForm" method="POST" enctype="multipart/form-data"><!--dito ka magbabago sa loob nito-->
                  <div class="row">
                  <div class="form-group col-sm-4">             
                    <label>Island:</label><br>
                    <select id ="sisland" name ="sislandname"  class="form-control">
                      <option value="island0">--Select an Item--</option>
                      <option Value="Luzon"> Luzon</option>
                      <option Value="Visayas">Visayas</option>
                      <option Value="Mindanao">Mindanao</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Region:</label><br>
                    <select id="sregion" name ="sregionname" class="form-control">
                      
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label>Province:</label><br>
                    <select id="sprov" name ="sprovname" class="form-control">
                     
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-sm-6">
                    <label>City/Municipality:</label>
                    <select id="smunicipality" name ="sprovname" class="form-control">
                     
                    </select>
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Area:</label>
                    <input type="text" name="aName" placeholder="Area" class="form-control">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Specific Location:</label>
                    <input type="text" name="spLocName" placeholder="Specific Location" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Shortcut Location:</label>
                    <input type="text" name="spShorName" placeholder="Shortcut Location" class="form-control">
                  </div><!--HANGGANG DITO LANG BOI-->
                  <div class="modal-footer">
                    <input type="reset" value="Clear" class="btn btn-primary">       
                    <input type="submit" ID = "btnSave" value="Save" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END PHYLUM MODAL-->
      
      <div class="card">
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Locality ID</th>
                  <th>Island</th>
                  <th>Region</th>
                  <th>Province</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Specific Location</th>
                  <th>Short Location</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody tbody id="showdata">
                        
            </tbody>
            </table>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#sisland").change(function () {
          var val = $(this).val();
          if (val == "Luzon") {
            $("#sregion").html("<option value='region0'>-- select one --</option><option value='Region I'>Ilocos Region (Region 1)</option><option value='CAR'>Cordillera Administrative Region</option><option value='Region II'>Cagayan Valley (Region II)</option><option value='Region III'>Central Luzon (Region III)</option><option value='Region IV-A'>CALABARZON (Region IV-A)</option><option value='Region IV-B'>MIMAROPA (Region IV-B)</option><option value='NCR'>National Capital Region (NCR)</option><option value='Region V'>Bicol Region (Region V)</option>");
          } else if (val == "Visayas") {
            $("#sregion").html("<option value='region0'>-- select one --</option><option value='Region VI'>Western Visayas(Region VI)</option><option value='Region VII'>Central Visayas (Region VII)</option><option value='Region VIII'>Eastern Visayas (Region VIII)</option>");
          } else if (val == "Mindanao") {
            $("#sregion").html("<option value='region0'>-- select one --</option><option value='Region IX'>Zamboanga Peninsula (Region IX)</option><option value='Region X'>Northern Mindanao (Region X)</option><option value='Region XI'>Davao Region (Region XI)</option><option value='Region XII'>SOCCSKSARGEN (Region XII)</option><option value='Region XIII'>Caraga Region (Region XIII)</option><option value='ARMM'>Autonomous Region in Muslim Mindanao (ARMM)</option>");
          } else if (val == "island0") {
            $("#sregion").html("<option value='region0'>-- select one --</option>");
          }
        });
        $("#sregion").change(function () {
          var val = $(this).val();
          if (val == "Region I") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Ilocos Norte'>Ilocos Norte</option><option value='Ilocos Sur'>Ilocos Sur</option><option value='La Union'>La Union</option><option value='Pangasinan'>Pangasinan</option>");
          } else if (val == "Region II") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Batanes'>Batanes</option><option value='Cagayan'>Cagayan</option><option value='Isabela'>Isabela</option><option value='Nueva Vizcaya'>Nueva Vizcaya</option><option value='Quirino'>Quirino</option>");
          } else if (val == "CAR") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Abra'>Abra</option><option value='Apayao'>Apayao</option><option value='Benguet'>Benguet</option><option value='Ifugao'>Ifugao</option><option value='Kalinga'>Kalinga</option><option value='Mountain Province'>Mountain Province</option>")
          } else if (val == "Region III") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Aurora'>Aurora</option><option value='Bataan'>Bataan</option><option value='Bulacan'>Bulacan</option><option value='Nueva Ecija'>Nueva Ecija</option><option value='Pampanga'>Pampanga</option><option value='Tarlac'>Tarlac</option><option value='Zambales'>Zambales</option>")
          } else if (val == "Region IV-A") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Batangas'>Batangas</option><option value='Cavite'>Cavite</option><option value='Rizal'>Rizal</option><option value='Quezon'>Quezon</option>")
          } else if (val == "Region IV-B") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Marinduque'>Marinduque</option><option value='Occidental Mindoro'>Occidental Mindoro</option><option value='Oriental Mindoro'>Oriental Mindoro</option><option value='Palawan'>Palawan</option><option value='Romblon'>Romblon</option>")
          } else if (val == "Region V") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Albay'>Albay</option><option value='Camarines Norte'>Camarines Norte</option><option value='Camarines Sur'>Camarines Sur</option><option value='Catanduanes'>Catanduanes</option><option value='Masbate'>Masbate</option><option value='Sorsogon'>Sorsogon</option>")
          } else if (val == "Region VI") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Aklan'>Aklan</option><option value='Antique'>Antique</option><option value='Capiz'>Capiz</option><option value='Guimaras'>Guimaras</option><option value='Iloilo'>Iloilo</option><option value='Negros Occidental'>Negros Occidental</option>")
          } else if (val == "Region VII") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Bohol'>Bohol</option><option value='Cebu'>Cebu</option><option value='Negros Oriental'>Negros Oriental</option><option value='Siquijor'>Siquijor</option>")
          } else if (val == "Region VIII") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Biliran'>Biliran</option><option value='Eastern Samar'>Eastern Samar</option><option value='Leyte'>Leyte</option><option value='Northern Samar'>Northern Samar</option><option value='Southern Leyte'>Southern Leyte</option><option value='Western Samar'>Western Samar (Samar)</option>")
          } else if (val == "Region IX") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Zamboanga del Norte'>Zamboanga del Norte</option><option value='Zamboanga Sibugay'>Zamboanga Sibugay</option><option value='Zamboanga del Sur'>Zamboanga del Sur</option>")
          } else if (val == "Region X") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Bukidnon'>Bukidnon</option><option value='Camiguin'>Camiguin</option><option value='Lanao del Norte'>Lanao del Norte</option><option value='Misamis Occidental'>Misamis Occidental</option><option value='Misamis Oriental'>Misamis Oriental</option>")
          } else if (val == "Region XI") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Compostela Valley'>Compostela Valley</option><option value='Davao del Norte'>Davao del Norte</option><option value='Davao del Sur'>Davao del Sur</option><option value='Davao Oriental'>Davao Oriental</option>")
          } else if (val == "Region XII") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Cotabato'>North Cotabato</option><option value='Sarangani'>Sarangani</option><option value='South Cotabato'>South Cotabato</option><option value='Sultan Kudarat'>Sultan Kudarat</option>")
          } else if (val == "Region XIII") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Agusan del Norte'>Agusan del Norte</option><option value='Agusan del Sur'>Agusan del Sur</option><option value='Dinagat Islands'>Dinagat Islands</option><option value='Surigao del Norte'>Surigao del Norte</option><option value='Surigao del Sur'>Surigao del Sur</option><option value='Butuan'>Butuan</option>")
          } else if (val == "ARMM") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Basilan'>Basilan</option><option value='Lanao del Sur'>Lanao del Sur</option><option value='Maguindanao'>Maguindanao</option><option value='Sulu'>Sulu</option><option value='Tawi-Tawi'>Tawi-Tawi</option>")
          } else if (val == "NCR") {
            $("#sprov").html("<option value='prov0'>-- select one --</option>")
          }
        });
        $("#sprov").change(function () {
          var val = $(this).val();
          if (val == "Ilocos Norte") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Adams'>Adams</option><option value='Bacarra'>Bacarra</option><option value='Badoc'>Badoc</option><option value='Bangui'>Bangui</option><option value='Batac'>Batac</option><option value='Burgos'>Burgos</option><option value='Carasi'>Carasi</option><option value='Currimao'>Currimao</option><option value='Dingras'>Dingras</option><option value='Dumalneg'>Dumalneg</option><option value='Espiritu'>Espiritu</option><option value='Laoag City'>Laoag City</option><option value='Marcos'>Marcos</option><option value='Nueva Era'>Nueva Era</option><option value='Pagudpud'>Pagudpud</option><option value='Paoay'>Paoay</option><option value='Pasuquin'>Pasuquin</option><option value='Piddig'>Piddig</option><option value='Pinili'>Pinili</option><option value='San Nicolas'>San Nicolas</option><option value='Sarrat'>Sarrat</option><option value='Solsona'>Solsona</option><option value='Vintar'>Vintar</option>")
          } else if (val == "Ilocos Sur") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Alilem'>Alilem</option><option value='Banayoyo'>Banayoyo</option><option value='Bantay'>Bantay</option><option value='Burgos'>Burgos</option><option value='Cabugao'>Cabugao</option><option value='Candon'>Candon</option><option value='Caoayan'>Caoayan</option><option value='Cervantes'>Cervantes</option><option value='Galimuyod'>Galimuyod</option><option value='Gergorio del Pilar'>Gergorio del Pilar</option><option value='Lidlida'>Lidlida</option><option value='Magsingal'>Magsingal</option><option value='Nagbukel'>Nagbukel</option><option value='Narvacan'>Narvacan</option><option value='Quirino'>Quirino</option><option value='Salcedo'>Salcedo</option><option value='San Emilio'>San Emilio</option><option value='San Esteban'>San Esteban</option><option value='San Ildefonso'>San Ildefonso</option><option value='San Juan'>San Juan</option><option value='San Vicente'>San Vicente</option><option value='Santa'>Santa</option><option value='Santa Catalina'>Santa Catalina</option><option value='Santa Cruz'>Santa Cruz</option><option value='Santa Lucia'>Santa Lucia</option><option value='Santa Maria'>Santa Maria</option><option value='Santiago'>Santiago</option><option value='Santo Domingo'>Santo Domingo</option><option value='Sicay'>Sicay</option><option value='Sinait'>Sinait</option><option value='Sugpon'>Sugpon</option><option value='Suyo'>Suyo</option><option value='Tagudin'>Tagudin</option>")
          } else if (val == "La Union") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Agoo'>Agoo</option><option value='Aringay'>Aringay</option><option value='Bacnotan'>Bacnotan</option><option value='Bagulin'>Bagulin</option><option value='Balaoan'>Balaoan</option><option value='Bangar'>Bangar</option><option value='Bauang'>Bauang</option><option value='Burgos'>Burgos</option><option value='Caba'>Caba</option><option value='Damortis'>Damortis</option><option value='Luna'>Luna</option><option value='Naguilian'>Naguilian</option><option value='Pugo'>Pugo</option><option value='Rosario'>Rosario</option><option value='San Fernando'>San Fernando</option><option value='San Gabriel'>San Gabriel</option><option value='San Juan'>San Juan</option><option value='Santol'>Santol</option><option value='Sto. Tomas'>Sto. Tomas</option><option value='Sudipen'>Sudipen</option><option value='Tubao'>Tubao</option>")
          } else if (val == "Pangasinan") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Agno'>Agno</option><option value='Aguilar'>Aguilar</option><option value='Alaminos'>Alaminos</option><option value='Alcala'>Alcala</option><option value='Anda'>Anda</option><option value='Asingan'>Asingan</option><option value='Balungao'>Balungao</option><option value='Bani'>Bani</option><option value='Basista'>Basista</option><option value='Bautista'>Bautista</option><option value='Bayambang'>Bayambang</option><option value='Binalonan'>Binalonan</option><option value='Binmaley'>Binmaley</option><option value='Bolinao'>Bolinao</option><option value='Bugallon'>Bugallon</option><option value='Burgos'>Burgos</option><option value='Calasiao'>Calasiao</option><option value='Dagupan City'>Dagupan City</option><option value='Dasol'>Dasol</option><option value='Infanta'>Infanta</option><option value='Labrador'>Labrador</option><option value='Laoac'>Laoac</option><option value='Lingayen'>Lingayen</option><option value='Mabini'>Mabini</option><option value='Malasigui'>Malasigui</option><option value='Manaoag'>Manaoag</option><option value='Mangaldan'>Mangaldan</option><option value='Mangatarem'>Mangatarem</option><option value='Mapandan'>Mapandan</option><option value='Natividad'>Natividad</option><option value='Pozorrubio'>Pozorrubio</option><option value='Rosales'>Rosales</option><option value='San Carlos City'>San Carlos City</option><option value='San Fabian'>San Fabian</option><option value='San Jacinto'>San Jacinto</option><option value='San Manuel'>San Manuel</option><option value='San Nicolas'>San Nicolas</option><option value='San Quintin'>San Quintin</option><option value='Sison'>Sison</option><option value='Sta. Barbara'>Sta. Barbara</option><option value='Sta. Maria'>Sta. Maria</option><option value='Sto. Tomas'>Sto. Tomas</option><option value='Sual'>Sual</option><option value='Tayug'>Tayug</option><option value='Umingan'>Umingan</option><option value='Urbiztondo'>Urbiztondo</option><option value='Urdaneta'>Urdaneta</option><option value='Villasis'>Villasis</option>")
          } else if (val == "Abra") {
            $("#smunicipality").html("<option value=''></option><option value='Bucloc'>Bucloc</option><option value='Bucay'>Bucay</option><option value='Daguioman'>Daguioman</option><option value='Danglas'>Danglas</option><option value='Dolores'>Dolores</option><option value='La Paz'>La Paz</option><option value='Lacub'>Lacub</option><option value='Lagayan'>Lagayan</option><option value='Lagiden'>Lagiden</option><option value='Langagilang'>Langagilang</option><option value='Licuan (baay)'>Licuan (baay)</option><option value='Luba'>Luba</option><option value='Malibcong'>Malibcong</option><option value='Manabo'>Manabo</option><option value='Peñarubia'>Peñarubia</option><option value='Pidigan'>Pidigan</option><option value='Pilar'>Pilar</option><option value='Sal-Lapadan'>Sal-Lapadan</option><option value='San Isidro'>San Isidro</option><option value='San Juan'>San Juan</option><option value='San Quintin'>San Quintin</option><option value='Tayum'>Tayum</option><option value='Tineg'>Tineg</option><option value='Tubo'>Tubo</option><option value='Villaviciosa'>Villaviciosa</option>")
          } else if (val == "Apayao") {
            $("#smunicipality").html("<option value='Calanasan'>Calanasan</option><option value='Conner'>Conner</option><option value='Flora'>Flora</option><option value='Kabugao'>Kabugao</option><option value='Luna'>Luna</option><option value='Pudtol'>Pudtol</option><option value='Sta. Marcela'>Sta. Marcela</option>")
          } else if (val == "Benguet") {
            $("#smunicipality").html("<option value=''></option><option value='Atok'>Atok</option><option value='Baguio City'>Baguio City</option><option value='Bakun'>Bakun</option><option value='Bokod'>Bokod</option><option value='Buguias'>Buguias</option><option value='Itogon'>Itogon</option><option value='Kabayan'>Kabayan</option><option value='Kapangan'>Kapangan</option><option value='Kibungan'>Kibungan</option><option value='La Trinidad'>La Trinidad</option><option value='Mankayan'>Mankayan</option><option value='Sablan'>Sablan</option><option value='Tuba'>Tuba</option><option value='Tablay'>Tablay</option>")
          } else if (val == "Ifugao") {
            $("#smunicipality").html("<option value=''></option><option value='Aguinaldo'>Aguinaldo</option><option value='Asipulo'>Asipulo</option><option value='Banaue'>Banaue</option><option value='Hingyon'>Hingyon</option><option value='Hungduan'>Hungduan</option><option value='Kiangan'>Kiangan</option><option value='Lagawe'>Lagawe</option><option value='Lamut'>Lamut</option><option value='Mayaoyao'>Mayaoyao(Mayoyao)</option><option value='Potia'>Potia</option><option value='Tinoc'>Tinoc</option>")
          } else if (val == "Kalinga") {
            $("#smunicipality").html("<option value=''></option><option value='Balbalan'>Balbalan</option><option value='Lubuagan'>Lubuagan</option><option value='Pasil'>Pasil</option><option value='Pinukpuk'>Pinukpuk</option><option value='Rizal'>Rizal</option><option value='Tabuk'>Tabuk</option><option value='Tanudan'>Tanudan</option>")
          } else if (val == "Mountain Province"){
            $("#smunicipality").html("<option value=''></option><option value='Barlig'>Barlig</option><option value='Bauko'>Bauko</option><option value='Besao'>Besao</option><option value='Bontoc'>Bontoc</option><option value='Natonin'>Natonin</option><option value='Paracelis'>Paracelis</option><option value='Sabangan'>Sabangan</option><option value='Sadanga'>Sadanga</option><option value='Sagada'>Sagada</option><option value='Tadian'>Tadian</option>")
          } else if (val == "Batanes") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='basco'>Basco</option><option value='Itbayat'>Itbayat</option><option value='Ivana'>Ivana</option><option value='Mahatao'>Mahatao</option><option value='Sabtang'>Sabtang</option><option value='Uyugan'>Uyugan</option>")
          } else if(val == "Cagayan") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Abulug'>Abulug</option><option value='Alcala'>Alcala</option><option value='Allacapan'>Allacapan</option><option value='Amulung'>Amulung</option><option value='Aparri'>Aparri</option><option value='Baggao'>Baggao</option><option value='Ballesteros'>Ballesteros</option><option value='Buguey'>Buguey</option><option value='Calayan'>Calayan</option><option value='Camalaniugan'>Camalaniugan</option><option value='Claveria'>Claveria</option><option value='Enrile'>Enrile</option><option value='Gattaran'>Gattaran</option><option value='Gonzaga'>Gonzaga</option><option value='Iguig'>Iguig</option><option value='Lal-lo'>Lal-lo</option><option value='Lasam'>Lasam</option><option value='Pamplona'>Pamplona</option><option value='Peñablanca'>Peñablanca</option><option value='Piat'>Piat</option><option value='Rizal'>Rizal</option><option value='Sanchez-Mira'>Sanchez-Mira</option><option value='Santa Ana'>Santa Ana</option><option value='Santa Praxedes'>Santa Praxedes</option><option value='Santa Teresita'>Santa Teresita</option><option value='Santo Niño'>Santo Niño</option><option value='Solana'>Solana</option><option value='Turao'>Turao</option>")
          } else if(val == "Isabela") {
           $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Alicia'>Alicia</option><option value='Angadanan'>Angadanan</option><option value='Aurora'>Aurora</option><option value='Benito Soliven'>Benito Soliven</option><option value='Burgos'>Burgos</option><option value='Cabagan'>Cabagan</option><option value='Cabatuan'>Cabatuan</option><option value='Cordon'>Cordon</option><option value='Delfin Albano'>Delfin Albano</option><option value='Dinapigue'>Dinapigue</option><option value='Divilcan'>Divilacan</option><option value='Echague'>Echague</option><option value='Gamu'>Gamu</option><option value='Jones'>Jones</option><option value='Luna'>Luna</option><option value='Maconacon'>Maconacon</option><option value='Mallig'>Mallig</option><option value='Naguilian'>Naguilian</option><option value='Palanan'>Palanan</option><option value='Quezon'>Quezon</option><option value='Quirino'>Quirino</option<option>value='Ramon'>Ramon</option><option value='Reina Mercedes'>Reina Mercedes</option><option value='Roxas'>Roxas</option><option value='San Agustin'>San Agustin</option><option value='San Guillermo'>San Guillermo</option><option value='San Isidro'>San Isidro</option><option value='San Manuel'>San Manuel</option><option value='San Mariano'>San Mariano</option><option value='San Mateo'>San Mateo</option><option value='San Pablo'>San Pablo</option><option value='Santa Maria'>Santa Maria</option><option value='Santo Tomas'>Santo Tomas</option><option value='Tumauini'>Tumauini</option>")
          } else if(val == "Nueva Vizcaya") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Alfonso Castañeda'>Alfonso Castañeda</option><option value='Ambaguio'>Ambaguio</option><option value='Aritao'>Aritao</option><option value='Bagabag'>Bagabag</option><option value='Bambang'>Bambang</option><option value='Bayombong'>Bayombong</option><option value='Diadi'>Diadi</option><option value='Dupax del Norte'>Dupax del Norte</option><option value='Dupax del Sur'>Dupax del Sur</option><option value='Kasibu'>Kasibu</option><option value='Kayapa'>Kayapa</option><option value='Quezon'>Quezon</option><option value='Santa Fe'>Santa Fe</option><option value='Solano'>Solano</option><option value='Villaverde'>Villaverde</option>") 
          } else if(val == "Quirino") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Aglipay'>Aglipay</option><option value='Cabarroguis'>Cabarroguis</option><option value='Diffun'>Diffun</option><option value='Maddela'>Maddela</option><option value='Nagptipunan'>Nagtipunan</option><option value='Saguday'>Saguday</option>")
          } else if (val == "Aurora") {
            $("#smunicipality").html("<option value=''></option><option value='Baler'>Baler</option><option value='Casiguran'>Casiguran</option><option value='Dilasag'>Dilasag</option><option value='Dinalungan'>Dinalungan</option><option value='Dingalan'>Dingalan</option><option value='Dipaculao'>Dipaculao</option><option value='Maria Aurora'>Maria Aurora</option><option value='San Luis'>San Luis</option>")
          } else if (val == "Bataan") {
            $("#smunicipality").html("<option value=''></option>option value='Abucay'>Abucay</option>option value='Bagac'>Bagac</option>option value='Balanga City'>Balanga City</option>option value='Dinalupihan'>Dinalupihan</option>option value='Hermosa'>Hermosa</option>option value='Limay'>Limay</option>option value='Mariveles'>Mariveles</option>option value='Morong'>Morong</option>option value='Orani'>Orani</option>option value='Orion'>Orion</option>option value='Pilar'>Pilar</option>option value='Samal'>Samal</option>")
          } else if (val == "Bulacan") {
            $("#smunicipality").html("<option value=''></option>option value='Angat'>Angat</option><option value='Balagtas'>Balagtas</option>option value='Baliuag'>Baliuag</option><option value='Bocaue'>Bocaue</option><option value='Bulacan'>Bulacan</option><option value='Bustos'>Bustos</option><option value='Bustos'>Bustos</option><option value='Calumpit'>Calumpit</option><option value='Doña Remedios Trinidad'>Doña Remedios Trinidad</option><option value='Guiguinto'>Guiguinto</option><option value='Hagonoy'>Hagonoy</option><option value='Malolos City'>Malolos City</option><option value='Marilao'>Marilao</option><option value='Meycauayan City'>Meycauayan City</option><option value='Norzagaray'>Norzagaray</option><option value='Obando'>Obando</option><option value='Pandi'>Pandi</option><option value='Paombong'>Paombong</option><option value='Plaridel'>Plaridel</option><option value='Pulilan'>Pulilan</option><option value='San Ildefonso'>San Ildefonso</option><option value='San Jose del Monte City'>San Jose del Monte City</option><option value='San Miguel'>San Miguel</option><option value='San Rafael'>San Rafael</option><option value='Santa Maria'>Santa Maria</option>")
          } else if (val == "Nueva Ecija") {
            $("#smunicipality").html("<option value=''></option><option value='Aliaga'>Aliaga</option><option value='Bongabon'>Bongabon</option><option value='Cabanatuan'>Cabanatuan</option><option value='Cabiao'>Cabiao</option><option value='Carranglan'>Carranglan</option><option value='Cuyapo'>Cuyapo</option><option value='Gabaldon'>Gabaldon</option><option value='Gapan'>Gapan</option><option value='General Mamerto Natividad'>General Mamerto Natividad</option><option value='General Tinio'>General Tinio</option><option value='Guimba'>Guimba</option><option value='Jaen'>Jaen</option><option value='Laur'>Laur</option><option value='Licab'>Licab</option><option value='Llanera'>Llanera</option><option value='Muñoz'>Muñoz</option><option value='Nampicuan'>Nampicuan</option><option value='Palayan'>Palayan</option><option value='Pantabangan'>Pantabangan</option><option value='Peñaranda'>Peñaranda</option><option value='Quezon'>Quezon</option><option value='Rizal'>Rizal</option><option value='San Antonio'>San Antonio</option><option value='San Isidro'>San Isidro</option><option value='Cabaritan'>Cabaritan (San Jose)</option><option value='San Leonardo'>San Leonardo</option><option value='Santa Rosa'>Santa Rosa</option><option value='Santo Domingo'>Santo Domingo</option><option value='Talavera'>Talavera</option><option value='Talugtug'>Talugtug</option><option value='Zaragosa'>Zaragosa</option>")
          } else if (val == "Pampanga") {
            $("#smunicipality").html("<option value=''></option><option value='Angeles'>Angeles</option><option value='Apalit'>Apalit</option><option value='Arayat'>Arayat</option><option value='Bacolor'>Bacolor</option><option value='Candaba'>Candaba</option><option value='Floridablanca'>Floridablanca</option><option value='Guagua'>Guagua</option><option value='Lubao'>Lubao</option><option value='Mabalacat'>Mabalacat</option><option value='Macabebe'>Macabebe</option><option value='Magalang'>Magalang</option><option value='Masantol'>Masantol</option><option value='Mexico'>Mexico</option><option value='Minalin'>Minalin</option><option value='Porac'>Porac</option><option value='San Fernando'>San Fernando</option><option value='San Luis'>San Luis</option><option value='San Simon'>San Simon</option><option value='Santa Ana'>Santa Ana</option><option value='Santa Rita'>Santa Rita</option><option value='Santo Tomas'>Santo Tomas</option><option value='Sasmuan'>Sasmuan</option>")
          } else if (val == "Tarlac") {
            $("#smunicipality").html("<option value=''></option><option value='Anao'>Anao</option><option value='Bamban'>Bamban</option><option value='Camiling'>Camiling</option><option value='Capas'>Capas</option><option value='Concepcion'>Concepcion</option><option value='Gerona'>Gerona</option><option value='La Paz'>La Paz</option><option value='Mayantoc'>Mayantoc</option><option value='Moncada'>Moncada</option><option value='Paniqui'>Paniqui</option><option value='Pura'>Pura</option><option value='Ramos'>Ramos</option><option value='San Clemente'>San Clemente</option><option value='San Jose'>San Jose</option><option value='San Manuel'>San Manuel</option><option value='Santa Ignacia'>Santa Ignacia</option><option value='Tarlac City'>Tarlac City</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Zambales") {
            $("#smunicipality").html("<option value=''></option><option value='Botolan'>Botolan</option><option value='Cabangan'>Cabangan</option><option value='Candelaria'>Candelaria</option><option value='Castillejos'>Castillejos</option><option value='Iba'>Iba</option><option value='Masinloc'>Masinloc</option><option value='Olongapo'>Olongapo</option><option value='Palauig'>Palauig</option><option value='San Antonio'>San Antonio</option><option value='San Felipe'>San Felipe</option><option value='San Marcelino'>San Marcelino</option><option value='San Narciso'>San Narciso</option><option value='Santa Cruz'>Santa Cruz</option><option value='Subic'>Subic</option>")
          } else if (val == "Batangas") {
            $("#smunicipality").html("<option value=''></option><option value='Agoncillo'>Agoncillo</option><option value='Alitagtag'>Alitagtag</option><option value='Balayan'>Balayan</option><option value='Balete'>Balete</option><option value='Batangas City'>Batangas City</option><option value='Bauan'>Bauan</option><option value='Calaca'>Calaca</option><option value='Calatagan'>Calatagan</option><option value='Cuenca'>Cuenca</option><option value='Ibaan'>Ibaan</option><option value='Laurel'>Laurel</option><option value='Lemery'>Lemery</option><option value='Lian'>Lian</option><option value='Lipa'>Lipa</option><option value='Lobo'>Lobo</option><option value='Mabini'>Mabini</option><option value='Malvar'>Malvar</option><option value='Mataasnakahoy'>Mataasnakahoy</option><option value='Nasugbu'>Nasugbu</option><option value='Padre Garcia'>Padre Garcia</option><option value='Rosario'>Rosario</option><option value='San Jose'>San Jose</option><option value='San Juan'>San Juan</option><option value='San Luis'>San Luis</option><option value='San Nicolas'>San Nicolas</option><option value='San Pascual'>San Pascual</option><option value='Santa Teresita'>Santa Teresita</option><option value='Santo Tomas'>Santo Tomas</option><option value='Taal'>Taal</option><option value='Talisay'>Talisay</option><option value='Tanauan'>Tanauan</option><option value='Taysan'>Taysan</option><option value='Tingloy'>Tingloy</option><option value='Tuy'>Tuy</option>")
          } else if (val == "Cavite") {
            $("#smunicipality").html("<option value=''></option><option value='Alfonso'>Alfonso</option><option value='Amadeo'>Amadeo</option><option value='Bacoor'>Bacoor</option><option value='Carmona'>Carmona</option><option value='Cavite City'>Cavite City</option><option value='Dasmariñas'>Dasmariñas</option><option value='Gen. Emilio Aguinaldo'>Gen. Emilio Aguinaldo</option><option value='Gen. Mariano Alvarez'>Gen. Mariano Alvarez</option><option value='General Trias'>General Trias</option><option value='Imus'>Imus</option><option value='Indang'>Indang</option><option value='Kawit'>Kawit</option><option value='Magallanes'>Magallanes</option><option value='Maragondon'>Maragondon</option><option value='Mendez'>Mendez</option><option value='Naic'>Naic</option><option value='Noveleta'>Noveleta</option><option value='Rosario'>Rosario</option><option value='Silang'>Silang</option><option value='Tagaytay'>Tagaytay</option><option value='Tanza'>Tanza</option><option value='Ternate'>Ternate</option><option value='Trece Martires'>Trece Martires</option>")
          } else if (val == "Rizal") {
            $("#smunicipality").html("<option value=''></option><option value='Antipolo'>Antipolo</option><option value='Baras'>Baras</option><option value='Binangonan'>Binangonan</option><option value='Cainta'>Cainta</option><option value='Cardona'>Cardona</option><option value='Jalajala'>Jalajala</option><option value='Morong'>Morong</option><option value='Pililla'>Pililla</option><option value='Rodriguez'>Rodriguez</option><option value='San Mateo'>San Mateo</option><option value='Tanay'>Tanay</option><option value='Taytay'>Taytay</option><option value='Teresa'>Teresa</option>")
          } else if (val == "Quezon") {
            $("#smunicipality").html("<option value=''></option><option value='Agdangan'>Agdangan</option><option value='Alabat'>Alabat</option><option value='Atimonan'>Atimonan</option><option value='Buenavista'>Buenavista</option><option value='Burdeos'>Burdeos</option><option value='Calauag'>Calauag</option><option value='Candelaria'>Candelaria</option><option value='Catanauan'>Catanauan</option><option value='Dolores'>Dolores</option><option value='General Luna'>General Luna</option><option value='General Nakar'>General Nakar</option><option value='Guinayangan'>Guinayangan</option><option value='Gumaca'>Gumaca</option><option value='Infanta'>Infanta</option><option value='Jomalig'>Jomalig</option><option value='Lopez'>Lopez</option><option value='Lucban'>Lucban</option><option value='Lucena'>Lucena</option><option value='Macalelon'>Macalelon</option><option value='Mauban'>Mauban</option><option value='Mulanay'>Mulanay</option><option value='Padre Burgos'>Padre Burgos</option><option value='Pagbilao'>Pagbilao</option><option value='Panukulan'>Panukulan</option><option value='Patnanungan'>Patnanungan</option><option value='Perez'>Perez</option><option value='Pitogo'>Pitogo</option><option value='Plaridel'>Plaridel</option><option value='Polillo'>Polillo</option><option value='Quezon'>Quezon</option><option value='Real'>Real</option><option value='Sampaloc'>Sampaloc</option><option value='San Andres'>San Andres</option><option value='San Antonio'>San Antonio</option><option value='San Francisco'>San Francisco (Aurora)</option><option value='San Narciso'>San Narciso</option><option value='Sariaya'>Sariaya</option><option value='Tangkawayan'>Tangkawayan</option><option value='Tayabas'>Tayabas</option><option value='Tiaong'>Tiaong</option><option value='Unisan'>Unisan</option>")
          } else if (val == "Marinduque") {
            $("#smunicipality").html("<option value=''></option><option value='Boac'>Boac</option><option value='Buenavista'>Buenavista</option><option value='Gasan'>Gasan</option><option value='Mogpog'>Mogpog</option><option value='Santa Cruz'>Santa Cruz</option><option value='Torrijos'>Torrijos</option>")
          } else if (val == "Occidental Mindoro") {
            $("#smunicipality").html("<option value=''></option><option value='Abra de Ilog'>Abra de Ilog</option><option value='Calintaan'>Calintaan</option><option value='Looc'>Looc</option><option value='Lubang'>Lubang</option><option value='Magsaysay'>Magsaysay</option><option value='Mamburao'>Mamburao</option><option value='Paluan'>Paluan</option><option value='Rizal'>Rizal</option><option value='Sablayan'>Sablayan</option><option value='San Jose'>San Jose</option><option value='Santa Cruz'>Santa Cruz</option>")
          } else if (val == "Oriental Mindoro") {
            $("#smunicipality").html("<option value=''></option><option value='Baco'>Baco</option><option value='Bansud'>Bansud</option><option value='Bongabong'>Bongabong</option><option value='Bulalacao'>Bulalacao (San Pedro)</option><option value='Calapan'>Calapan</option><option value='Gloria'>Gloria</option><option value='Mansalay'>Mansalay</option><option value='Naujan'>Naujan</option><option value='Pinamalayan'>Pinamalayan</option><option value='Pola'>Pola</option><option value='Puerto Galera'>Puerto Galera</option><option value='Roxas'>Roxas</option><option value='San Teodoro'>San Teodoro</option><option value='Socorro'>Socorro</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Palawan") {
            $("#smunicipality").html("<option value=''></option><option value='Aborlan'>Aborlan</option><option value='Agutaya'>Agutaya</option><option value='Araceli'>Araceli</option><option value='Balabac'>Balabac</option><option value='Bataraza'>Bataraza</option><option value='Brooke's Point'>Brooke's Point</option>")
          } else if (val == "Romblon") {
            $("#smunicipality").html("<option value=''></option><option value='Alcantara'>Alcantara</option><option value='Banton'>Banton (Jones)</option><option value='Cajidiocan'>Cajidiocan</option><option value='Calatrava'>Calatrava</option><option value='Concepcion'>Concepcion</option><option value='Corcuera'>Corcuera</option><option value='Ferrol'>Ferrol</option><option value='Looc'>Looc</option><option value='Magdiwang'>Magdiwang</option><option value='Odiongan'>Odiongan</option><option value='Romblon'>Romblon</option><option value='San Agustin'>San Agustin</option><option value='San Andres'>San Andres</option><option value='San Fernando'>San Fernando</option><option value='San Jose'>San Jose</option><option value='Santa Fe'>Santa Fe</option><option value='Santa Maria'>Santa Maria (Imelda)</option>")
          } else if (val == "Albay") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Bacacay'>Bacacay</option><option value='Camalig'>Camalig</option><option value='Daraga'>Daraga</option><option value='Guinobatan'>Guinobatan</option><option value='Jovellar'>Jovellar</option><option value='Libon'>Libon</option><option value='Malilipot'>Malilipot</option><option value='Malinao'>Malinao</option><option value='Manito'>Manito</option><option value='Oas'>Oas</option><option value='Pio Duran'>Pio Duran</option><option value='Polangui'>Polangui</option><option value='Rapu-rapu'>Rapu-rapu</option><option value='Santo Domingo'>Santo Domingo</option><option value='Tiwi'>Tiwi</option>")
          } else if (val== "Camarines Norte") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Basud'>Basud</option><option value='Capalonga'>Capalonga</option><option value='Daet'>Daet</option><option value='Jose Panganiban'>Jose Panganiban</option><option value='Labo'>Labo</option><option value='Mercedes'>Mercedes</option><option value='Paracale'>Paracale</option><option value='San Lorenzo Ruiz'>San Lorenzo Ruiz</option><option value='San Vicente'>San Vicente</option><option value='Santa Elena'>Santa Elena</option><option value='Talisay'>Talisay</option><option value='Vinzons'>Vinzons</option>")
          } else if (val== "Camarines Sur") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Baao'>Baao</option><option value='Balatan'>Balatan</option><option value='Bato'>Bato</option><option value='Bombon'>Bombon</option><option value='Buhi'>Buhi</option><option value='Bula'>Bula</option><option value='Cabusao'>Cabusao</option><option value='Calabanga'>Calabanga</option><option value='Camaligan'>Camaligan</option><option value='Canaman'>Canaman</option><option value='Caramoan'>Caramoan</option><option value='Del Gallego'>Del Gallego</option><option value='Gainza'>Gainza</option><option value='Garchitorena'>Garchinotera</option><option value='Goa'>Goa</option><option value='Lagonoy'>Lagonoy</option><option value='Libmanan'>Libmanan</option><option value='Lupi'>Lupi</option><option value='Magarao'>Magarao</option><option value='Milaor'>Milaor</option><option value='Minalabac'>Minalabac</option><option value='Nabua'>Nabua</option><option value='Ocampo'>Ocampo</option><option value='Pamplona'>Pamplona</option><option value='Pasacao'>Pasacao</option><option value='Pili'>Pili</option><option value='Presentacion'>Presentacion</option><option value='Ragay'>Ragay</option><option value='Sagñay'>Sagñay</option><option value='San Fernando'>San Fernando</option><option value='Sipocot'>Sipocot</option><option value='Siruma'>Siruma</option><option value='Tigaon'>Tigaon</option><option value='Tinambac'>Tinambac</option>")
          } else if (val== "Masbate") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Aroroy'>Aroroy</option><option value='Baleno'>Baleno</option><option value='Balud'>Balud</option><option value='Batuan'>Batuan</option><option value='Cataingan'>Cataingan</option><option value='Cawayan'>Cawayan</option><option value='Claveria'>Claveria</option><option value='Dimasalang'>Dimasalang</option><option value='Esperanza'>Esperanza</option><option value='Mandaon'>Mandaon</option><option value='Milagros'>Milagros</option><option value='Mobo'>Mobo</option><option value='Monreal'>Monreal</option><option value='Palanas'>Palanas</option><option value='Pio V. Corpuz'>Pio V. Corpuz</option><option value='Placer'>Placer</option><option value='San Fernando'>San Fernando</option><option value='San Jacinto'>San Jacinto</option><option value='San Pascual'>San Pascual</option><option value='Uson'>Uson</option>")
          } else if (val== "Sorsogon") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Barcelona'>Barcelona</option><option value='Bulan'>Bulan</option><option value='Bulusan'>Bulusan</option><option value='Casiguran'>Casiguran</option><option value='Castilla'>Castilla</option><option value='Donsol'>Donsol</option><option value='Gubat'>Gubat</option><option value='Irosin'>Irosin</option><option value='Juban'>Juban</option><option value='Magallanes'>Magallanes</option><option value='Matnog'>Matnog</option><option value='Pilar'>Pilar</option><option value='Prieto Diaz'>Prieto Diaz</option><option value='Santa Magdalena'>Santa Magdalena</option>")
          } else if (val == "Aklan") {
            $("#smunicipality").html("<option value=''></option><option value='Altavas'>Altavas</option><option value='Balete'>Balete</option><option value='Banga'>Banga</option><option value='Batan'>Batan</option><option value='Buruanga'>Buruanga</option><option value='Ibajay'>Ibajay</option><option value='Kalibo'>Kalibo</option><option value='Lezo'>Lezo</option><option value='Libacao'>Libacao</option><option value='Madalag'>Madalag</option><option value='Makato'>Makato</option><option value='Malay'>Malay</option><option value='Malinao'>Malinao</option><option value='Nabas'>Nabas</option><option value='New Washington'>New Washington</option><option value='Numancia'>Numancia</option><option value='Tangalan'>Tangalan</option>")
          } else if (val == "Antique") {
            $("#smunicipality").html("<option value=''></option><option value='Anini-y'>Anini-y</option><option value='Barbaza'>Barbaza</option><option value='Belison'>Belison</option><option value='Bugasong'>Bugasong</option><option value='Caluya'>Caluya</option><option value='Culasi'>Culasi</option><option value='Hamtic'>Hamtic</option><option value='Laua-an'>Laua-an</option><option value='Libertad'>Libertad</option><option value='Pandan'>Pandan</option><option value='Patnongon'>Patnongon</option><option value='San Jose de Buenavista'>San Jose de Buenavista</option><option value='San Remigio'>San Remigio</option><option value='Sebaste'>Sebaste</option><option value='Sibalom'>Sibalom</option><option value='Tibiao'>Tibiao</option><option value='Tobias Fornier'>Tobias Fornier</option><option value='Valderrama'>Valderrama</option>")
          } else if (val == "Capiz") {
            $("#smunicipality").html("<option value=''></option><option value='Cuartero'>Cuartero</option><option value='Dao'>Dao</option><option value='Dumalag'>Dumalag</option><option value='Dumarao'>Dumarao</option><option value='Ivisan'>Ivisan</option><option value='Jamindan'>Jamindan</option><option value='Maayon'>Maayon</option><option value='Mambusao'>Mambusao</option><option value='Panay'>Panay</option><option value='Panitan'>Panitan</option><option value='Pilar'>Pilar</option><option value='Pontevedra'>Pontevedra</option><option value='President Roxas'>President Roxas</option><option value='Roxas City'>Roxas City</option><option value='Sapian'>Sapian</option><option value='Sigma'>Sigma</option><option value='Tapaz'>Tapaz</option>")
          } else if (val == "Guimaras") {
            $("#smunicipality").html("<option value=''></option><option value='Buenavista'>Buenavista</option><option value='Jordan'>Jordan</option><option value='Nueva Valencia'>Nueva Valencia</option><option value='San Lorenzo'>San Lorenzo</option><option value='Sibunag'>Sibunag</option>")
          } else if (val == "Iloilo") {
            $("#smunicipality").html("<option value=''></option><option value='Ajuy'>Ajuy</option><option value='Alimodian'>Alimodian</option><option value='Anilao'>Anilao</option><option value='Badiangan'>Badiangan</option><option value='Balasan'>Balasan</option><option value='Banate'>Banate</option><option value='Barotac Nuevo'>Barotac Nuevo</option><option value='Barotac Viejo'>Barotac Viejo</option><option value='Batad'>Batad</option><option value='Bingawan'>Bingawan</option><option value='Cabatuan'>Cabatuan</option><option value='Calinog'>Calinog</option><option value='Carles'>Carles</option><option value='Concepcion'>Concepcion</option><option value='Dingle'>Dingle</option><option value='Dueñas'>Dueñas</option><option value='Dumangas'>Dumangas</option><option value='Estancia'>Estancia</option><option value='Guimbal'>Guimbal</option><option value='Igbaras'>Igbaras</option><option value='Iloilo City'>Iloilo City</option><option value='Janiuay'>Janiuay</option><option value='Lambunao'>Lambunao</option><option value='Leganes'>Leganes</option><option value='Leon'>Leon</option><option value='Maasin'>Maasin</option><option value='Miagao'>Miagao</option><option value='Mina'>Mina</option><option value='New Lucena'>New Lucena</option><option value='Oton'>Oton</option><option value='Passi'>Passi</option><option value='Pavia'>Pavia</option><option value='Pototan'>Pototan</option><option value='San Dionisio'>San Dionisio</option><option value='San Enrique'>San Enrique</option><option value='San Joaquin'>San Joaquin</option><option value='San Miguel'>San Miguel</option><option value='San Rafael'>San Rafael</option><option value='Santa Barbara'>Santa Barbara</option><option value='Sara'>Sara</option><option value='Tigbauan'>Tigbauan</option><option value='Tubungan'>Tubungan</option><option value='Zarraga'>Zarraga</option>")
          } else if (val == "Negros Occidental") {
            $("#smunicipality").html("<option value=''></option><option value='Bacolod'>Bacolod</option><option value='Bago'>Bago</option><option value='Binalbagan'>Binalbagan</option><option value='Cadiz'>Cadiz</option><option value='Calatrava'>Calatrava</option><option value='Candoni'>Candoni</option><option value='Cauayan'>Cauayan</option><option value='Enrique B. Magalona'>Enrique B. Magalona (Saravia)</option><option value='Escalante'>Escalante</option><option value='Himamaylan'>Himamaylan</option><option value='Hinigaran'>Hinigaran</option><option value='Hinoba-an'>Hinoba-an (Asia)</option><option value='Ilog'>Ilog</option><option value='Isabela'>Isabela</option><option value='Kabankalan'>Kabankalan</option><option value='La Carlota'>La Carlota</option><option value='La Castellana'>La Castellana</option><option value='Manapla'>Manapla</option><option value='Moises Padilla'>Moises Padilla (Magallon)</option><option value='Murcia'>Murcia</option><option value='Pontevedra'>Pontevedra</option><option value='Pulupudan'>Pulupudan</option><option value='Sagay'>Sagay</option><option value='Salvador Benedicto'>Salvador Benedicto</option><option value='San Carlos'>San Carlos</option><option value='San Enrique'>San Enrique</option><option value='Silay'>Silay</option><option value='Sipalay'>Sipalay</option><option value='Talisay'>Talisay</option><option value='Toboso'>Toboso</option><option value='Valladolid'>Valladolid</option><option value='Victorias'>Victorias</option>")
          } else if (val == "Bohol") {
            $("#smunicipality").html("<option value=''></option><option value='Albuquerque'>Albuquerque</option><option value='Alicia'>Alicia</option><option value='Anda'>Anda</option><option value='Antequera'>Antequera</option><option value='Baclayon'>Baclayon</option><option value='Balilihan'>Balilihan</option><option value='Batuan'>Batuan</option><option value='Bien Unido'>Bien Unido</option><option value='Bilar'>Bilar</option><option value='Buenavista'>Buenavista</option><option value='Calape'>Calape</option><option value='Candijay'>Candijay</option><option value='Carmen'>Carmen</option><option value='Catigbian'>Catigbian</option><option value='Clarin'>Clarin</option><option value='Corella'>Corella</option><option value='Cortes'>Cortes</option><option value='Dagohoy'>Dagohoy</option><option value='Danao'>Danao</option><option value='Dauis'>Dauis</option><option value='Dimiao'>Dimiao</option><option value='Duero'>Duero</option><option value='Garcia-Hernandez'>Garcia-Hernandez</option><option value='Guindulman'>Guindulman</option><option value='Inabanga'>Inabanga</option><option value='Jagna'>Jagna</option><option value='Jetafe'>Jetafe</option><option value='Lila'>Lila</option><option value='Loay'>Loay</option><option value='Loboc'>Loboc</option><option value='Loon'>Loon</option><option value='Mabini'>Mabini</option><option value='Maribojoc'>Maribojoc</option><option value='Panglao'>Panglao</option><option value='Pilar'>Pilar</option><option value='President Garcia'>President Garcia</option><option value='Sagbayan'>Sagbayan</option><option value='San Isidro'>San Isidro</option><option value='San Miguel'>San Miguel</option><option value='Sevilla'>Sevilla</option><option value='Sierra Bullones'>Sierra Bullones</option><option value='sikatuna'>sikatuna</option><option value='Tagbilaran City'>Tagbilaran City</option><option value='Talibon'>Talibon</option><option value='Trinidad'>Trinidad</option><option value='Tubigon'>Tubigon</option><option value='Ubay'>Ubay</option><option value='Valencia'>Valencia</option>")
          } else if (val == "Cebu") {
            $("#smunicipality").html("<option value=''></option><option value='Alcantara'>Alcantara</option><option value='Alcoy'>Alcoy</option><option value='Alegria'>Alegria</option><option value='Aloguinsan'>Aloguinsan</option><option value='Argao'>Argao</option><option value='Asturias'>Asturias</option><option value='Badian'>Badian</option><option value='Balamban'>Balamban</option><option value='Bantayan'>Bantayan</option><option value='Barili'>Barili</option><option value='Bogo'>Bogo</option><option value='Boljoon'>Boljoon</option><option value='Borbon'>Borbon</option><option value='Carcar'>Carcar</option><option value='Carmen'>Carmen</option><option value='Catmon'>Catmon</option><option value='Cebu City'>Cebu City</option><option value='Compostela'>Compostela</option><option value='Consolacion'>Consolacion</option><option value='Cordova'>Cordova</option><option value='Daanbantayan'>Daanbantayan</option><option value='Dalaguete'>Dalaguete</option><option value='Danao'>Danao</option><option value='Dumanjug'>Dumanjug</option><option value='Ginatilan'>Ginatilan</option><option value='Lapu-Lapu'>Lapu-Lapu</option><option value='Liloan'>Liloan</option><option value='Madridejos'>Madridejos</option><option value='Malabuyoc'>Malabuyoc</option><option value='Mandaue'>Mandaue</option><option value='Medellin'>Medellin</option><option value='Minglanilla'>Minglanilla</option><option value='Moalboat'>Moalboat</option><option value='Naga'>Naga</option><option value='Oslob'>Oslob</option><option value='Pilar'>Pilar</option><option value='Pinamungajan'>Pinamungajan</option><option value='Poro'>Poro</option><option value='Ronda'>Ronda</option><option value='Samboan'>Samboan</option><option value='San Fernando'>San Fernando</option><option value='San Francisco'>San Francisco</option><option value='San Remigio'>San Remigio</option><option value='Santa Fe'>Santa Fe</option><option value='Santander'>Santander</option><option value='Sibonga'>Sibonga</option><option value='Sogod'>Sogod</option><option value='Tabogon'>Tabogon</option><option value='Tabuelan'>Tabuelan</option><option value='Talisay'>Talisay</option><option value='Toledo'>Toledo</option><option value='Tuburan'>Tuburan</option><option value='Tudela'>Tudela</option>")
          } else if (val == "Negros Oriental") {
            $("#smunicipality").html("<option value=''></option><option value='Amlan'>Amlan (Ayuquitan)</option><option value='Ayungon'>Ayungon</option><option value='Bacong'>Bacong</option><option value='Bais'>Bais</option><option value='Basay'>Basay</option><option value='Bayawan'>Bayawan (Tulong)</option><option value='Bindoy'>Bindoy (Payabon)</option><option value='Canlaon'>Canlaon</option><option value='Dauin'>Dauin</option><option value='Dumaguete'>Dumaguete</option><option value='Guihulngan'>Guihulngan</option><option value='Jimalalud'>Jimalalud</option><option value='La Libertad'>La Libertad</option><option value='Mabinay'>Mabinay</option><option value='Manjuyod'>Manjuyod</option><option value='Pamplona'>Pamplona</option><option value='San Jose'>San Jose</option><option value='Santa Catalina'>Santa Catalina</option><option value='Siaton'>Siaton</option><option value='Sibulan'>Sibulan</option><option value='Tanjay'>Tanjay</option><option value='Tayasan'>Tayasan</option><option value='Valencia'>Valencia (Luzurriaga)</option><option value='Vallehermoso'>Vallehermoso</option><option value='Zamboanguita'>Zamboanguita</option>")
          } else if (val == "Siquijor") {
            $("#smunicipality").html("<option value=''></option><option value='Enrique Villanueva'>Enrique Villanueva</option><option value='Larena'>Larena</option><option value='Lazi'>Lazi</option><option value='Maria'>Maria</option><option value='San Juan'>San Juan</option><option value='Siquijor'>Siquijor</option>")
          } else if (val == "Biliran") {
            $("#smunicipality").html("<option value=''></option><option value='Almeria'>Almeria</option><option value='Biliran'>Biliran</option><option value='Cabucgayan'>Cabucgayan</option><option value='Caibiran'>Caibiran</option><option value='Culaba'>Culaba</option><option value='Kawayan'>Kawayan</option><option value='Maripipi'>Maripipi</option><option value='Naval'>Naval</option>")
          } else if (val == "Eastern Samar") {
            $("#smunicipality").html("<option value=''></option><option value='Arteche'>Arteche</option><option value='Balangiga'>Balangiga</option><option value='Balangkayan'>Balangkayan</option><option value='Borongan'>Borongan</option><option value='Can-avid'>Can-avid</option><option value='Dolores'>Dolores</option><option value='General MacArthur'>General MacArthur</option><option value='Giporlos'>Giporlos</option><option value='Guiuan'>Guiuan</option><option value='Hernani'>Hernani</option><option value='Jipapad'>Jipapad</option><option value='Lawaan'>Lawaan</option><option value='Llorente'>Llorente</option><option value='Maslog'>Maslog</option><option value='Maydolong'>Maydolong</option><option value='Mercedes'>Mercedes</option><option value='Oras'>Oras</option><option value='Quinapondan'>Quinapondan</option><option value='Salcedo'>Salcedo</option><option value='San Julian'>San Julian</option><option value='San Policarpio'>San Policarpio</option><option value='Sulat'>Sulat</option><option value='Taft'>Taft</option>")
          } else if (val == "Leyte") {
            $("#smunicipality").html("<option value=''></option><option value='Abuyog'>Abuyog</option><option value='Alangalang'>Alangalang</option><option value='Albuera'>Albuera</option><option value='Babatngon'>Babatngon</option><option value='Barauen'>Barauen</option><option value='Barugo'>Barugo</option><option value='Bato'>Bato</option><option value='Baybay'>Baybay</option><option value='Calubian'>Calubian</option><option value='Capoocan'>Capoocan</option><option value='Carigara'>Carigara</option><option value='Dagami'>Dagami</option><option value='Dulag'>Dulag</option><option value='Hilongos'>Hilongos</option><option value='Hindang'>Hindang</option><option value='Inopacan'>Inopacan</option><option value='Isabel'>Isabel</option><option value='Jaro'>Jaro</option><option value='Javier'>Javier</option><option value='Julita'>Julita</option><option value='Kananga'>Kananga</option><option value='La Paz'>La Paz</option><option value='Leyte'>Leyte</option><option value='MacArthur'>MacArthur</option><option value='Mahaplag'>Mahaplag</option><option value='Matag-ob'>Matag-ob</option><option value='Matalom'>Matalom</option><option value='Mayorga'>Mayorga</option><option value='Merida'>Merida</option><option value='Ormoc City'>Ormoc City</option><option value='Palo'>Palo</option><option value='Palompom'>Palompom</option><option value='Pastrana'>Pastrana</option><option value='San Isidro'>San Isidro</option><option value='San Miguel'>San Miguel</option><option value='Santa Fe'>Santa Fe</option><option value='Tabango'>Tabango</option><option value='Tabontabon'>Tabontabon</option><option value='Tacloban City'>Tacloban City</option><option value='Tanauan City'>Tanauan City</option><option value='Tolosa'>Tolosa</option><option value='Tunga'>Tunga</option><option value='Villaba'>Villaba</option>")
          } else if (val == "Northern Samar") {
            $("#smunicipality").html("<option value=''></option><option value='Allen'>Allen</option><option value='Biri'>Biri</option><option value='Bobon'>Bobon</option><option value='Capul'>Capul</option><option value='Catarman'>Catarman</option><option value='Catubig'>Catubig</option><option value='Gamay'>Gamay</option><option value='Laoang'>Laoang</option><option value='Lapinig'>Lapinig</option><option value='Las Navas'>Las Navas</option><option value='Lavezares'>Lavezares</option><option value='Lope de Vega'>Lope de Vega</option><option value='Mapanas'>Mapanas</option><option value='Mondragon'>Mondragon</option><option value='Palapag'>Palapag</option><option value='Pambujan'>Pambujan</option><option value='Rosario'>Rosario</option><option value='San Antonio'>San Antonio</option><option value='San Isidro'>San Isidro</option><option value='San Jose'>San Jose</option><option value='San Roque'>San Roque</option><option value='San Vicente'>San Vicente</option><option value='Silvino Lobos'>Silvino Lobos</option><option value='Victoria'>Victoria</option>")
          } else if (val == "Southern Leyte") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option> <option value='Anahawan'>Anahawan</option> <option value='Bontoc'>Bontoc</option> <option value='Hinunangan'>Hinunangan</option> <option value='Hinundayan'>Hinundayan</option> <option value='Libagon'>Libagon</option> <option value='Liloan'>Liloan</option> <option value='Limasawa'>Limasawa</option> <option value='Macrohon'>Macrohon</option> <option value='Malitbog'>Malitbog</option> <option value='Padre Burgos'>Padre Burgos</option> <option value='Pintuyan'>Pintuyan</option> <option value='Saint Bernard'>Saint Bernard</option> <option value='San Francisco'>San Francisco</option> <option value='San Juan'>San Juan</option> <option value='San Ricardo'>San Ricardo</option> <option value='Silago'>Silago</option> <option value='Sogod'>Sogod</option> <option value='Tomas Oppus'>Tomas Oppus</option>")
          } else if (val== "Western Samar") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option> <option value='Almagro'>Almagro</option> <option value='Daram'>Daram</option> <option value='Gandara'>Gandara</option> <option value='Hinabangan'>Hinabangan</option> <option value='Jiabong'>Jiabong</option> <option value='Marabut'>Marabut</option> <option value='Matuguinao'>Matuguinao</option> <option value='Motiong'>Motiong</option> <option value='Pagsanghan'>Pagsanghan</option> <option value='Paranas'>Paranas</option> <option value='Pinabacdao'>Pinabacdao</option> <option value='San Jorge'>San Jorge</option> <option value='San Jose de Buan'>San Jose de Buan</option> <option value='San Sebastian'>San Sebastian</option> <option value='Santa Margarita'>Santa Margarita</option> <option value='Santa Rita'>Santa Rita</option> <option value='Santo Niño'>Santo Niño</option> <option value='Tagapul-an'>Tagapul-an</option> <option value='Talalora'>Talalora</option> <option value='Tarangnan'>Tarangnan</option> <option value='Villareal'>Villareal</option> <option value='Zumarraga'>Zumarraga</option>")
        }
          else if (val == "Zamboanga del Norte") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Baliguian'></option><option value='Godod'>Godod</option><option value='Gutalac'>Gutalac</option><option value='Jose Dalman'>Jose Dalman<option value='Kalawit'>Kalawit</option></option><option value='Katipunan'></option><option value='La Libertad'>La Libertad</option><option value='Labason'>Labason</option><option value='Leon B. Postigo'>Leon B. Postigo</option><option value='Liloy'>Liloy</option><option value='Manukan'>Manukan</option><option value='Mutia'>Mutia</option><option value='Piñan'>Piñan</option><option value='Polanco'>Polanco</option><option value='President Manuel A. Roxas'>President Manuel A. Roxas</option><option value='Rizal'>Rizal</option><option value='Salug'>Salug</option><option value='Sergio Osmeña Sr.'>Sergio Osmeña Sr.</option><option value='Siayan'>Siayan</option><option value='Sibuco'>Sibuco</option><option value='Sibutad'>Sibutad</option><option value='Sindangan'>Sindangan</option><option value='Siocon'>Siocon</option><option value='Sirawai'>Sirawai</option><option value='Tampilisan'>Tampilisan</option>")
          } else if (val== "Zamboanga Sibugay") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Alicia'>Alicia</option><option value='Buug'>Buug</option><option value='Diplahan'>Diplahan</option><option value='Imelda'>Imelda</option><option value='Ipil'>Ipil</option><option value='Kabasalan'>Kabasalan</option><option value='Mabuhay'>Mabuhay</option><option value='Malangas'>Malangas</option><option value='Naga'>Naga</option><option value='Olutanga'>Olutanga</option><option value='Payao'>Payao</option><option value='Roseller Lim'>Roseller Lim</option><option value='Siay'>Siay</option><option value='Talusan'>Talusan</option><option value='Titay'>Titay</option><option value='Tungawan'>Tungawan</option>")
          } else if (val== "Zamboanga del Sur") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Aurora'>Aurora</option><option value='Bayog'>Bayog</option><option value='Dimataling'>Dimataling</option><option value='Dinas'>Dinas</option><option value='Dumalinao'>Dumalinao</option><option value='Dumingag'>Dumingag</option><option value='Guipos'>Guipos</option><option value='Josefina'>Josefina</option><option value='Kumalarang'>Kumalarang</option><option value='Labangan'></option><option value='Lakewood'>Lakewood</option><option value='Lapuyan'>Lapuyan</option><option value='Mahayag'>Mahayag</option><option value='Margosatubig'>Margosatubig</option><option value='Midsalip'>Midsalip</option><option value='Molave'>Molave</option><option value='Pitogo'>Pitogo</option><option value='Ramon Magsaysay'>Ramon Magsaysay</option><option value='San Miguel'>San Miguel</option><option value='San Pablo'>San Pablo</option><option value='Sominot'>Sominot</option><option value='Tabina'>Tabina</option><option value='Tambulig'>Tambulig</option><option value='Tigbao'>Tigbao</option><option value='Tukuran'>Tukuran</option><option value='Vincenzo A. Sagun'>Vincenzo A. Sagun</option>")
          } else if (val == "Bukidnon") {
            $("#smunicipality").html("<option value='mun0'>-- select one --</option><option value='Baungon'>Baungon</option><option value='Cabanglasan'>Cabanglasan</option><option value='Damulog'>Damulog</option><option value='Dangcagan'>Dangcagan</option><option value='Don Carlos'>Don Carlos</option><option value='Impasugong'>Impasugong</option><option value='Kadingilan'>Kadingilan</option><option value='Kalilangan'>Kalilangan</option><option value='Kibawe'>Kibawe</option><option value='Kitaotao'>Kitaotao</option><option value='Lantapan'>Lantapan</option><option value='Libona'>Libona</option><option value='Malitbog'>Malitbog</option><option value='Manolo Fortich'>Manolo Fortich</option><option value='Maramag'>Maramag</option><option value='Pangantucan'>Pangantucan</option><option value='Quezon'>Quezon</option><option value='San Fernando'>San Fernando</option><option value='Sumilao'>Sumilao</option><option value='Talakag'>Talakag</option>")
          } else if (val== "Camiguin") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Catarman'>Catarman</option><option value='Guinsiliban'>Guinsiliban</option><option value='Mahinog'>Mahinog</option><option value='Mambajao'>Mambajao</option><option value='Sagay'>Sagay</option>")
          } else if (val== "Lanao del Norte") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Bacolod'>Bacolod</option><option value='Balo-i'>Balo-i</option><option value='Baroy'>Baroy</option><option value='Kapatagan'>Kapatagan</option><option value='Kauswagan'>Kauswagan</option><option value='Kolambugan'>Kolambugan</option><option value='Lala'>Lala</option><option value='Linamon'>Linamon</option><option value='Magsaysay'>Magsaysay</option><option value='Maigo'>Maigo</option><option value='Matungao'>Matungao</option><option value='Munai'>Munai</option><option value='Nunungan'>Nunungan</option><option value='Pantao Ragat'>Pantao Ragat</option><option value='Pantar'>Pantar</option><option value='Poona Piagapo'>Poona Piagapo</option><option value='Salvador'>Salvador</option><option value='Sapad'>Sapad</option><option value='Sultan Naga Dimaporo'>Sultan Naga Dimaporo</option><option value='Tagoloan'>Tagoloan</option><option value='Tangcal'>Tangcal</option><option value='Tubod'>Tubod</option>")
          } else if (val== "Misamis Occidental") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Aloran'>Aloran</option><option value='Baliangao'>Baliangao</option><option value='Bonifacio'>Bonifacio</option><option value='Calamba'>Calamba</option><option value='Clarin'>Clarin</option><option value='Concepcion'>Conception</option><option value='Don Victoriano Chiongbian'>Don Victoriano Chiongbian</option><option value='Jimenez'>Jimenez</option><option value='Lopez Jaena'>Lopez Jaena</option><option value='Panaon'>Panaon</option><option value='Plaridel'>Plaridel</option><option value='Sapang Dalaga'>Sapang Dalaga</option><option value='Sinacaban'>Sinacaban</option><option value='Tudela'>Tudela</option>")
          } else if (val == "Misamis Oriental") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Alubijid'>Alubijid</option><option value='Balingasag'>Balingasag</option><option value='Balingoan'>Balingoan</option><option value='Binuangan'>Binaungan</option><option value='Claveria'>Claveria</option><option value='Gitagum'>Gitagum</option><option value='Initao'>Initao</option><option value='Jasaan'>Jasaan</option><option value='Kinoguitan'>Kinoguitan</option><option value='Lagonglong'>Lagonglong</option><option value='Laguindingan'>Laguindingan</option><option value='Libertad'>Libertad</option><option value='Lugait'>Lugait</option><option value='Magsaysay'>Magsaysay</option><option value='Manticao'>Manticao</option><option value='Medina'>Medina</option><option value='Naawan'>Naawan</option><option value='Opol'>Opol</option><option value='Salay'>Salay</option><option value='Sugbongcogon'>Sugbongcogon</option><option value='Tagoloan'>Tagoloan</option><option value='Talisayan'>Talisayan</option><option value='Villanueva'>Villanueva</option>")
          } else if (val == "Compostela Valley") {
            $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Compostela'>Compostela</option><option value='Laak'>Laak</option><option value='Mabini'>Mabini</option><option value='Maco'>Maco</option><option value='Maragusan'>Maragusan</option><option value='Mawab'>Mawab</option><option value='Monkayo'>Monkayo</option><option value='Montevista'>Montevista</option><option value='Nabunturan'>Nabunturan</option><option value='New Bataan'>New Bataan</option><option value='Pantukan'>Pantukan</option>")
          } else if (val== "Davao del Norte") {
            $("#smunicipality").html("<option value='Asuncion'>Asuncion</option><option value='Braulio E. Dujali'>Braulio E. Dujali</option><option value='Carmen'>Carmen</option><option value='Kapalong'>Kapalong</option><option value='New Corella'>New Corella</option><option value='Panabo'>Panabo</option><option value='Samal'>Samal</option><option value='San Isidro'>San Isidro</option><option value='Santo Tomas'>Santo Tomas</option><option value='Tagum'>Tagum</option><option value='Talaingod'>Talaingod</option>")
        } else if (val== "Davao del Sur") {
          $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Bansalan'>Bansalan</option><option value='Hagonoy'>Hagonoy</option><option value='Kiblawan'>Kiblawan</option><option value='Magsaysay'>Magsaysay</option><option value='Malalag'>Malalag</option><option value='Matanao'>Matanao</option><option value='Padada'>Padada</option><option value='Santa Cruz'>Santa Cruz</option><option value='Sulop'>Sulop</option>")
        } else if (val== "Davao Oriental") {
          $("#smunicipality").html("<option value = 'mun0'> --select one-- </option><option value='Baganga'>Baganga</option><option value='Banaybanay'>Banaybanay</option><option value='Boston'>Boston</option><option value='Caraga'>Caraga</option><option value='Cateel'>Cateel</option><option value='Governor Generoso'>Governor Generoso</option><option value='Lupon'>Lupon</option><option value='Manay'>Manay</option><option value='San Isidro'>San Isidro</option><option value='Tarragona'>Tarragona</option>")
        } else if (val == "North Cotabato") {
            $("#smunicipality").html("<option value=''></option><option value='Alamada'>Alamada</option><option value='Aleosan'>Aleosan</option><option value='Antipas'>Antipas</option><option value='Arakan'>Arakan</option><option value='Banisilan'>Banisilan</option><option value='Carmen'>Carmen</option><option value='Cotabato'>Cotabato</option><option value='Kabacan'>Kabacan</option><option value='Kidapawan'>Kidapawan</option><option value='Libungan'>Libungan</option><option value='M'lang'>M'lang</option><option value='Magpet'>Magpet</option><option value='Makilala'>Makilala</option><option value='Matalam'>Matalam</option><option value='Midsayap'>Midsayap</option><option value='Pigcawayan'>Pigcawayan</option><option value='Pikit'>Pikit</option><option value='President Roxas'>President Roxas</option><option value='Tulunan'>Tulunan</option>")
          } else if (val == "Sarangani") {
            $("#smunicipality").html("<option value=''></option><option value='Alabel'>Alabel</option><option value='Glan'>Glan</option><option value='Kiamba'>Kiamba</option><option value='Maasim'>Maasim</option><option value='Maitum'>Maitum</option><option value='Malapatan'>Malapatan</option><option value='Malungon'>Malungon</option>")
          } else if (val == "South Cotabato") {
            $("#smunicipality").html("<option value=''></option><option value='Banga'>Banga</option><option value='General Santos'>General Santos</option><option value='Koronadal'>Koronadal</option><option value='Lake Sebu'>Lake Sebu</option><option value='Norala'>Norala</option><option value='Polomolok'>Polomolok</option><option value='Santo Niño'>Santo Niño</option><option value='Surallah'>Surallah</option><option value='T'Boli'>T'Boli</option><option value='Tampakan'>Tampakan</option><option value='Tantangan'>Tantangan</option><option value='Tupi'>Tupi</option>")
          } else if (val == "Sultan Kudarat") {
            $("#smunicipality").html("<option value=''></option><option value='Bagumbayan'>Bagumbayan</option><option value='Columbio'>Columbio</option><option value='Esperanza'>Esperanza</option><option value='Isulan'>Isulan</option><option value='Kalamansig'>Kalamansig</option><option value='Lambayong'>Lambayong (Mariano Marcos)</option><option value='Lebak'>Lebak</option><option value='Lutayan'>Lutayan</option><option value='Palimbang'>Palimbang</option><option value='President Quirino'>President Quirino</option><option value='Senator Ninoy Aquino'>Senator Ninoy Aquino</option><option value='Tacurong'>Tacurong</option>")
          } else if (val == "Agusan del Norte") {
            $("#smunicipality").html("<option value=''></option><option value='Buenavista'>Buenavista</option><option value='Butuan'>Butuan</option><option value='Cabadbaran'>Cabadbaran</option><option value='Carmen'>Carmen</option><option value='Jabonga'>Jabonga</option><option value='Kitcharao'>Kitcharao</option><option value='Las Nieves'>Las Nieves</option><option value='Magallanes'>Magallanes</option><option value='Nasipit'>Nasipit</option><option value='Remedios T. Romualdez'>Remedios T. Romualdez</option><option value='Santiago'>Santiago</option><option value='Tubay'>Tubay</option>")
          } else if (val == "Agusan del Sur") {
            $("#smunicipality").html("<option value=''></option><option value='Bayugan'>Bayugan</option><option value='Bunawan'>Bunawan</option><option value='Esperanza'>Esperanza</option><option value='La Paz'>La Paz</option><option value='Loreto'>Loreto</option><option value='Prosperidad'>Prosperidad</option><option value='Rosario'>Rosario</option><option value='San Francisco'>San Francisco</option><option value='San Luis'>San Luis</option><option value='Santa Josefa'>Santa Josefa</option><option value='Sibagat'>Sibagat</option><option value='Talacogon'>Talacogon</option><option value='Trento'>Trento</option><option value='Veruela'>Veruela</option>")
          } else if (val == "Dinagat Islands") {
            $("#smunicipality").html("<option value=''></option><option value='Basilisa'>Basilisa</option><option value='Cagdianao'>Cagdianao</option><option value='Dinagat'>Dinagat</option><option value='Libjo'>Libjo</option><option value='Loreto'>Loreto</option><option value='San Jose'>San Jose</option><option value='Tubajon'>Tubajon</option>")
          } else if (val == "Surigao del Norte") {
            $("#smunicipality").html("<option value=''></option><option value='Alegria'>Alegria</option><option value='Bacuag'>Bacuag</option><option value='Burgos'>Burgos</option><option value='Claver'>Claver</option><option value='Dapa'>Dapa</option><option value='Del Carmen'>Del Carmen</option><option value='General Luna'>General Luna</option><option value='Gigaquit'>Gigaquit</option><option value='Mainit'>Mainit</option><option value='Malimono'>Malimono</option><option value='Pilar'>Pilar</option><option value='Placer'>Placer</option><option value='San Benito'>San Benito</option><option value='San Francisco'>San Francisco (Anao-Aon)</option><option value='San Isidro'>San Isidro</option><option value='Santa Monica'>Santa Monica (Sapao)</option><option value='Sison'>Sison</option><option value='Socorro'>Socorro</option><option value='Surigao City'>Surigao City</option><option value='Tagana-an'>Tagana-an</option><option value='Tubod'>Tubod</option>")
          } else if (val == "Surigao del Sur") {
            $("#smunicipality").html("<option value=''></option><option value='Barobo'>Barobo</option><option value='Bislig'>Bislig</option><option value='Cagwait'>Cagwait</option><option value='Cantilan'>Cantilan</option><option value='Carmen'>Carmen</option><option value='Carrascal'>Carrascal</option><option value='Cortes'>Cortes</option><option value='Hinatuan'>Hinatuan</option><option value='Lanuza'>Lanuza</option><option value='Lianga'>Lianga</option><option value='Lingig'>Lingig</option><option value='Madrid'>Madrid</option><option value='Marihatag'>Marihatag</option><option value='San Agustin'>San Agustin</option><option value='San Miguel'>San Miguel</option><option value='Tagbina'>Tagbina</option><option value='Tago'>Tago</option><option value='Tandag'>Tandag</option>")
          } else if (val == "Butuan") {
            $("#smunicipality").html("<option value=''></option><option value='Butuan'>Butuan City</option>")
          } else if (val == "Basilan") {
            $("#smunicipality").html("<option value=''></option><option value='Akbar'>Akbar</option><option value='Al-Barka'>Al-Barka</option><option value='Hadji Mohammad Ajul'>Hadji Mohammad Ajul</option><option value='Hadji Muhtamad'>Hadji Muhtamad</option><option value='Isabela City'>Isabela City</option><option value='Lamitan'>Lamitan</option><option value='Lantawan'>Lantawan</option><option value='Maluso'>Maluso</option><option value='Sumisip'>Sumisip</option><option value='Tabuan-Lasa'>Tabuan-Lasa</option><option value='Tipo-Tipo'>Tipo-Tipo</option><option value='Tuburan'>Tuburan</option><option value='Ungkaya Pukan'>Ungkaya Pukan</option>")
          } else if (val == "Lanao del Sur") {
            $("#smunicipality").html("<option value=''></option><option value='Amai Manabilang'>Amai Manabilang (Bumbaran)</option><option value='Bacolod-Kalawi'>Bacolod-Kalawi (Bacolod-Grande)</option><option value='Balabagan'>Balabagan</option><option value='Balindong'>Balindong (Watu)</option><option value='Bayang'>Bayang</option><option value='Binidayan'>Binidayan</option><option value='Buadiposo-Buntong'>Buadiposo-Buntong</option><option value='Bubong'>Bubong</option><option value='Butig'>Butig</option><option value='Calanogas'>Calanogas</option><option value='Ditsaan-Ramain'>Ditsaan-Ramain</option><option value='Ganassi'>Ganassi</option><option value='Kapai'>Kapai</option><option value='Kapatagan'>Kapatagan</option><option value='Lumba-Bayabao'>Lumba-Bayabao (Maguing)</option><option value='Lumbaca-Unayan'>Lumbaca-Unayan</option><option value='Lumbatan'>Lumbatan</option><option value='Lumbayanague'>Lumbayanague</option><option value='Madalum'>Madalum</option><option value='Madamba'>Madamba</option><option value='Maguing'>Maguing</option><option value='Malabang'>Malabang</option><option value='Marantao'>Marantao</option><option value='Marawi'>Marawi</option><option value='Marogong'>Marogong</option><option value='Masiu'>Masiu</option><option value='Mulondo'>Mulondo</option><option value='Pagayawan'>Pagayawan (Tatarikan)</option><option value='Piagapo'>Piagapo</option><option value='Picong'>Picong (Sultan Gumander)</option><option value='Poona Bayabao'>Poona Bayabao (Gata)</option><option value='Pualas'>Pualas</option><option value='Saguiaran'>Saguiaran</option><option value='Sultan Dumalondong'>Sultan Dumalondong</option><option value='Tagoloan II'>Tagoloan II</option><option value='Tamparan'>Tamparan</option><option value='Taraka'>Taraka</option><option value='Tubaran'>Tubaran</option><option value='Tugaya'>Tugaya</option><option value='Wao'>Wao</option>")
          }
        });
      });

    </script>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">  
    $(function(){
    
      //show
    showAllLocality();
    

    function showAllLocality(){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>admin/showAllLocality',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<tr>'+
                  '<td>'+data[i].intLocalityID+'</td>'+
                  '<td>'+data[i].strIsland+'</td>'+
                  '<td>'+data[i].strRegion+'</td>'+
                  '<td>'+data[i].strProvince+'</td>'+
                  '<td>'+data[i].strCity+'</td>'+
                  '<td>'+data[i].strArea+'</td>'+
                  '<td>'+data[i].strSpecificLocation+'</td>'+
                  '<td>'+data[i].strShortLocation+'</td>'+

                  '<td>'+
                    '<a href="javascript:;" class="btn btn-primary locality-edit" data="'+data[i].intLocalityID+'">Edit</a>'+
                  '</td>'+
                  '</tr>';
          }
          $('#showdata').html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
//addddddd
function regionchange(selectObj){
  // var e = document.getElementById("sisland");
  //  var sisland = e.options[e.selectedIndex].value;
  var idx = selectObj.selectedIndex;
  var which = selectObj.options[idx].value;

  if (which=='Luzon') {
    html1 +='<option value="Region A">Region A</option>';
    $('#sregion').html(html1);
  }else if (which=='Visayas'){
   html2 +='<option value="Region B">Region B</option>';
    $('#sregion').html(html2);
  } else{
    //html +='<option value="Region C">Region C</option>';
    //$('#sregion').html(html);
    alert("shet");
  }
}


/////////////adding locality//////////
    $('#btnSave').click(function(){
      var data = $('#addLocalityForm').serialize();
      //validate form

        $.ajax({
          type: 'ajax',
          method: 'post',
          url: '<?php echo base_url() ?>admin/addLocality',
          data: data,
          async: false,
          dataType: 'json',
          success: function($response){
            if(response.success){
              $('#addLocalityForm').modal('hide');
              $('#addLocalityForm')[0].reset();
              showAllLocality();
              }else{
              alert('Error');
            }
          },
          error: function(){
            alert('Could not save Data');
          }
        });
      
    });



    $('#showdata').on('click', '.locality-edit', function(){
      var id = $(this).attr('data');
      $('#myEditModal').modal('show');
      $('#myEditModal').find('.modal-title').text('Edit Collector');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>admin/editCollector',
        data: {id: id},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=feName]').val(data.strFirstname);
          $('input[name=meName]').val(data.strMiddlename);
          $('input[name=meInitial]').val(data.strMiddleInitial);
          $('input[name=leName]').val(data.strLastname);
          $('input[name=neSuffix]').val(data.strNameSuffix);
          $('input[name=ceName]').val(data.strContactNumber);
          $('input[name=eeMail]').val(data.strEmailAddress);
          $('input[name=cdeName]').val(data.strCollege);
          $('input[name=seceName]').val(data.strSection);
          $('input[name=txtId]').val(data.intCollectorID);
          
        },
        error: function(){
          alert('Could not Edit Data');
        }
      
    });

  })




    });
</script>