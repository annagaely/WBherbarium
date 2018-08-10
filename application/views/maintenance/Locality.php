
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
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Compostella Valley'>Compostella Valley</option><option value='Davao del Norte'>Davao del Norte</option><option value='Davao del Sur'>Davao del Sur</option><option value='Davao Oriental'>Davao Oriental</option>")
          } else if (val == "Region XII") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Cotabato'>North Cotabato</option><option value='Sarangani'>Sarangani</option><option value='South Cotabato'>South Cotabato</option><option value='Sultan Kudarat'>Sultan Kudarat</option>")
          } else if (val == "Region XIIIII") {
            $("#sprov").html("<optioa value='prov0'>-- select one --</option><option value='Agusan del Norte'>Agusan del Norte</option><option value='Agusan del Sur';>hi</option><option value='Dinagat Islands'>Surigao del Norte/option><option value='Siguridao del Sur'>Surigao del Sur</option>")
          } else if (val == "ARMM") {
            $("#sprov").html("<option value='prov0'>-- select one --</option><option value='Basilan'>Basilan</option><option value='Lanao del Sur'>Lanao del Sur</option><option value='Maguindanao'>Maguindanao</option><option value='Shariff Kabunsuan'>Shariff Kabunsuan</option><option value='Sulu'>Sulu</option><option value='Tawi-Tawi'>Tawi-Tawi</option>")
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
            $("#smunicipality").html("")
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