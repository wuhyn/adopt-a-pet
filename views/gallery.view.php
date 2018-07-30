<?php require('partials/head.php') ?>

  <h1 class="text-center gallery-title">Explore Images</h1>
  <div class="container">
    <div class="row">
      <?php foreach ($images as $image) : ?>
          <div class="col-lg-4 col-sm-6">
              <div class="single-image">
              <img class="img-thumbnail" src="<?= $image->image_path; ?>"  />
              <p class="text-center">By: <?= $image->artist_name; ?></p>
              </div>
          </div>

      <?php endforeach; ?>

    </div>
  </div>


<?php require('partials/footer.php');
