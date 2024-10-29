<?php include "../assets/component/header.php" ?>
<main>
  <div class="container marketing mt-5 pt-5">


    <!-- START THE FEATURETTES -->

    <?php
    include "../conn.php";

    $query = mysqli_query($conn, "SELECT * FROM news");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1"><?= $row['judul'] ?></h2>
          <p class="lead"><?= $row['deskr'] ?></p>
        </div>
        <div class="col-md-5">
          <img src="<?= '../assets/img/uploaded/'.$row['foto'] ?>" alt="News Image" class="featurette-image img-fluid mx-auto" width="300rem" height="3 00rem">
        </div>
      </div>
      <hr class="featurette-divider">

    <?php } ?>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <?php include "../assets/component/footer.php" ?>