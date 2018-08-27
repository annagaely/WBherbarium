<style>
.autocomplete-items {
  position: relative;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff;
  border-bottom: 1px solid #d4d4d4;
}

.autocomplete-items div:hover {
  /*when hovering an item:*/
  background-color: #e9e9e9;
}

.autocomplete-active {
  /*when navigating through the items using the arrow keys:*/
  background-color: DodgerBlue !important;
  color: #ffffff;
}
</style>
<img src="<?php echo base_url()?>assets/bower_components/mdbootstrap/img/loan.jpg" style="height: 50vh; width: 100%;"  class="banner">
<div class="py-5">
  <div class="card mx-auto px-4" style="width: 80%;">
    <div class="card-body">
        <p class="card-header white-text text-center py-4 h4" style="background-color: #800000;">Loan</p>
        <form id= "tableForm" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="md-form">
          <table class="table table-bordered" id="crud_table">
            <tr>
              <th width="20%">Family Name<span style="color: red"> *</span></th>
              <th width="20%">Genus Name<span style="color: red"> *</span></th>
              <th width="20%">Specie Name<span style="color: red"> *</span></th>
              <th width="20%">Common Name</th>
              <th width="10%"></th>
            </tr>
            <tr>
              <td class="FamName">
                <input type="text" id="famName" style="width: 100%;">
              </td>
              <td class="GenusName">
                <input type="text" id="genusName" style="width: 100%;" disabled>
              </td>
              <td class="SpecieName">
                <input type="text" id="speciesName" style="width: 100%;" disabled>
              </td>
              <td class="CommonName">
                <input type="text" id="commonName" style="width: 100%;">
              </td>
              <td></td>
            </tr>
          </table>
          <div align="right">
            <button type="button" name="add" id="add" class="btn btn-primary btn-sm">+</button>
          </div>
          <div id="inserted_item_data"></div>
        </div>
        <div class="md-form">
          <div class="row">
            <div class="col-md-3">
              <p class="font-weight-light">Date of Loaning:<span style="color: red"> *</span></p>
                <input type="date" name="dateAppointment" id= "dtAppointmentDate" class="form-control grey-text font-weight-light" style="font-size: 15px">
              </div>
              <div class="col-md-3">
                <p class="font-weight-light mb-0">Purpose of Loan:<span style="color: red"> *</span> </p>
                <div class="custom-checkbox custom-control mt-0" style="margin-left: 38px;">
                  <input type="checkbox" class="custom-control-input" id="chkAppointment" name="checkbox2" required>
                  <label class="custom-control-label font-weight-light" for="chkAppointment">Academic</label>
                </div>
                <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                  <input type="checkbox" class="custom-control-input" id="chkResearch" name="checkResearch">
                  <label class="custom-control-label font-weight-light" for="chkResearch">Research</label>
                </div>
                <div class="custom-control custom-checkbox" style="margin-left: 38px;">
                  <input type="checkbox" class="custom-control-input" id="chkOthers" name="checkOthers" onchange="others()">
                  <label class="custom-control-label font-weight-light" for="chkOthers">Others</label>
                </div>
              </div>
              <div class="col-md-6">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <textarea type="text" id="txtOthers" name="txtpurpose"  class="md-textarea form-control" rows="3" disabled></textarea>
                <label for="txtOthers" class="font-weight-light pl-2">Others</label>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-4 mt-3">
          <button class="btn" style="background-color: #800000;" type="submit"  id="save">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/bower_components/distribution/vendor/jquery/jquery.min.js"></script>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){

  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td class='FamName'>"+
                "<select name='sFamilyName[]'  id='family"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+

                "</select>"+"</td>";
   html_code += "<td class='GenusName'>"+
                "<select name='sGenusName[]'  id='genus1"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+

                "</select>"+"</td>";
   html_code += "<td class='SpecieName'>"+
                "<select name='sSpeciesName[]'  id='species"+count+"' class='form-control grey-text font-weight-light' style='font-weight: 500px; border:none; border-bottom: 1px rgba(158,158,158,0.4) solid; width: 100%;'>"+

                "</select>"+"</td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-sm remove'>-</button></td>";
   html_code += "</tr>";
   $('#crud_table').append(html_code);
    showFamilyName(count);
    showGenusName(count);
    showSpeciesName(count);

 });

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#save').click(function(event){

var data=$('#tableForm').serialize()+ "&"+ $('#textForms').serialize();

event.preventDefault();

  $.ajax({
   url:'<?php echo base_url() ?>user/addLoanReq', //lol dikolam tooo :<
   method:"POST",
 data:data,
  success:function(data){
  if(data=true){
     //$('#numDuration').val('');
     //$('#purpose').val('');
     alert('Request Sent');
     location.reload();

   }

   }
 });
 });


    showFamilyName();
    showGenusName();
    showSpeciesName();
      function showFamilyName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showFamilyName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intFamilyID+'">'+data[i].strFamilyName+'</option>';
          }
          $('#family').html(html);
          $('#family'+count).html(html);
        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }

      function showGenusName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showGenusName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intGenusID+'">'+data[i].strGenusName+'</option>';
          }
          $('#genus').html(html);
           $('#genus1'+count).html(html);

        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
      function showSpeciesName(count){
      $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>user/showSpeciesName',
        async: false,
        dataType: 'json',
        success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html +='<option value="'+data[i].intSpeciesID+'">'+data[i].strSpeciesName+'</option>';
          }
          $('#species').html(html);
          $('#species'+count).html(html);

        },
        error: function(){
          alert('Could not get Data from Database');
        }
      });
    }
});
</script>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/
var fname = ["heh"];
var gname = ["whatHAHAHAHAH"];
var sname = ["whyHAHAHAHAH"];
var cname = ["HAHAHAHAH"];


/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("famName"), fname);
autocomplete(document.getElementById("genusName"), gname);
autocomplete(document.getElementById("speciesName"), sname);
autocomplete(document.getElementById("commonName"), cname);

</script>
<script>

  // var n1 = document.getElementById('genusName');
  // var n2 = document.getElementById('speciesName');
  var ch = document.getElementById('famName');
  famName.onchange = function ()
  {
    if (this.value.length > 0){

    document.getElementById('genusName').disabled = false;
    document.getElementById('speciesName').disabled = false;
    }
    else {
      document.getElementById('genusName').disabled = true;
      document.getElementById('speciesName').disabled = true;
    }



}

</script>
<script>
function others() {
  var check = document.getElementById('chkOthers');
  var area = document.getElementById('txtOthers');

  if (check.checked) {
    area.disabled = false;
  } else {
    area.disabled = true;
  }
}
</script>
