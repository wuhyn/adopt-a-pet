<?php require('partials/head.php') ?>
  <div class="container">
    <div class="row">
      <?php foreach ($images as $image) : ?>
          <div class="col-lg-4 col-sm-6">
              <img class="img-thumbnail" src="<?= $image->image_path; ?>"  />
          </div>
      <?php endforeach; ?>

    </div>
  </div>  


<?php require('partials/footer.php');
