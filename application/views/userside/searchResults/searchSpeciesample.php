<div class="card mb-5 py-5 mx-auto px-5" style="width:90%;margin-top: 100px;">
<h4 class="card-title">Search Results</h4>
<hr />
  <table class="table table-bordered" id="data">
    <thead class="grey lighten-2">
      <tr>
        <th></th>
        <th>Specie Name</th>
        <th>Genus Name</th>
        <th>Family Name</th>
        <th>Common Name</th>
        <th>Collector Name</th>
      </tr>
    </thead>
    <tbody>
<tr>
  <td width="10%">
    <section class="gallery-block grid-gallery py-0 my-0">
      <div class="item">
        <a class="lightbox" href="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm.jpg">
          <img style="max-width: 100px; width: auto; height: 100px;" class="img-thumbnail" src="<?php echo base_url()?>assets/bower_components/planttypes/angiosperm.jpg" />
          <!--yang style sa img tag, yan yung para fixed yung size ng image. oks na yang laki na 100px height. so yaan mo na yan. pero try mo rin laruin size-->
        </a>
      </div>
    </section>
  </td>
  <td>hahaha</td>
  <td>hahaha</td>
  <td>hahaha</td>
  <td>hahaha</td>
  <td>hahaha</td>
</tr>

    </tbody>

  </table>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/gallery/grid-gallery/grid-gallery.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
</script>
