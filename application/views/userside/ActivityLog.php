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
    display: none;
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
    height: 300px;
    margin: 0
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
    display: none;
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 88.8%;
    border-left: none;
    height: 300px;
}
</style>
  <div class="card mx-auto" style="width: 80%; margin-top: 7%; margin-bottom: 5%">
    <div class="tab">
      <button class="tablinks" disabled>Activity Log</button>
      <button class="tablinks" onclick="openTab(event, 'Current')">Current</button>
      <button class="tablinks" onclick="openTab(event, 'Past')">Past</button>
    </div>

    <div id="Current" class="tabcontent">
      <div class="tab2">
        <button class="tablinks2" onclick="openTab2(event, 'VisitsCurrent')">Visit</button>
        <button class="tablinks2" onclick="openTab2(event, 'DepositsCurrent')">Deposit</button>
      </div>
      <div id="VisitsCurrent" class="tabcontent2">
        CURRENT VISITS TO
      </div>
      <div id="DepositsCurrent" class="tabcontent2">
        CURRENT DEPOSITS TO
      </div>
    </div>

    <div id="Past" class="tabcontent">
      <div class="tab2">
        <button class="tablinks2" onclick="openTab2(event, 'VisitsPast')">Visit</button>
        <button class="tablinks2" onclick="openTab2(event, 'DepositsPast')">Deposit</button>
      </div>
      <div id="VisitsPast" class="tabcontent2">
        PAST VISITS TO
      </div>
      <div id="DepositsPast" class="tabcontent2">
        PAST DEPOSITS TO
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
