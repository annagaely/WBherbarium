<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.18/b-1.5.4/b-flash-1.5.4/b-print-1.5.4/r-2.2.2/rg-1.1.0/sc-1.5.0/datatables.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<style>

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    padding: 0;
    border: 1px solid #ccc;
    border-top: none;
}
/* 000000000000000 */
/* Style the tab */
.tab2 {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 11.2%;
    height: 100%;
    margin: 0;
}

/* Style the buttons inside the tab */
.tab2 button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 15px 10px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab2 button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab2 button.active {
    background-color: #ccc;
}

/* Style the ab content */
.tabcontent2 {
    float: left;
    border: 1px solid #ccc;
    width: 88.8%;
    border-left: none;
    height: 100%;
}
</style>

  <div class="card mx-auto" style="width: 100%; margin-top: 4.5%;">
    <div class="tab">
      <button class="tablinks" disabled>Activity Log</button>
      <button class="tablinks active" onclick="openTab(event, 'Current')">Current</button>
      <button class="tablinks" onclick="openTab(event, 'Past')">Past</button>
    </div>

    <div id="Current" class="tabcontent">
      <div class="tab2">
        <button class="tablinks2 active" onclick="openTab2(event, 'VisitsCurrent')">Visit</button>
        <button class="tablinks2" onclick="openTab2(event, 'DepositsCurrent')">Deposit</button>
      </div>
      <div id="VisitsCurrent" class="tabcontent2">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo site_url('user/currentVisits');?>" width="100%" height="100%" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
        </div>
      </div>
      <div id="DepositsCurrent" class="tabcontent2" style="display: none;">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo site_url('user/currentDeposits/');?>" width="100%" height="100%" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
        </div>
      </div>
    </div>
    <div id="Past" class="tabcontent" style="display: none;">
      <div class="tab2">
        <button class="tablinks2" onclick="openTab2(event, 'VisitsPast')">Visit</button>
        <button class="tablinks2" onclick="openTab2(event, 'DepositsPast')">Deposit</button>
      </div>
      <div id="VisitsPast" class="tabcontent2">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo site_url('user/pastVisits');?>" width="100%" height="100%" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
        </div>
      </div>
      <div id="DepositsPast" class="tabcontent2">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="<?php echo site_url('user/pastDeposits');?>" width="100%" height="100%" style="padding-top: 10px; padding-left: 2px;border: none;"></iframe>
        </div>
      </div>
    </div>


  </div>
  
<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<script>
function openTab2(evt, tab2Name) {
    var i, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i = 0; i < tabcontent2.length; i++) {
        tabcontent2[i].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks2.length; i++) {
        tablinks2[i].className = tablinks2[i].className.replace(" active", "");
    }
    document.getElementById(tab2Name).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
