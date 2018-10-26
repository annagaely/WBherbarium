<div class="card mb-5 pt-5 mx-auto px-5" style="width:70%;margin-top: 100px;">
<h4 class="card-title">Search Results</h4>
<hr />
<table class="table" id="data">
    <thead class="grey lighten-2">
      <tr>
        <th>Genus</th>
        <Th>Family</Th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach ($results as $row) {
?>
<tr>
    <td><?php echo $row->strGenusName?></td>
    <td><?php echo $row->strFamilyName?></td>
</tr>
<?php
}
?>
    </tbody>
  </table>
</div>



<script>
$(document).ready(function(){
  $('#data').after('<center><nav aria-label="pagination example"><ul id="nav" class="pagination pg-blue"><label class="mt-1">Page: &nbsp; &nbsp;</label></ul></nav></center>');
  var rowsShown = 10;
  var rowsTotal = $('#data tbody tr').length;
  var numPages = rowsTotal/rowsShown;
  for(i = 0;i < numPages;i++) {
      var pageNum = i + 1;
      $('#nav').append('<a class="page-item" href="#" rel="'+i+'"><li class="page-link">'+pageNum+'</li></a> ');

  }

  $('#data tbody tr').hide();
  $('#data tbody tr').slice(0, rowsShown).show();
  $('#nav a:first').addClass('active');
  $('#nav a').click(function(){

      $('#nav a').removeClass('active');
      $(this).addClass('active');

      var currPage = $(this).attr('rel');
      var startItem = currPage * rowsShown;
      var endItem = startItem + rowsShown;
      $('#data tbody tr').css('opacity','0.0').hide().slice(startItem, endItem).
      css('display','table-row').animate({opacity:1}, 300);
  });
});
</script>
