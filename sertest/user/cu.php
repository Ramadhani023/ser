<?php include "../assets/component/header.php" ?>
<main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing mt-5 pt-5">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <table id="dataTable" class="table table-bordered">
        <tr>
          <th colspan="2" class="text-center">HUBUNGI KAMI DENGAN MENGIRIM PESAN!</th>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" id="nama" name="name" class="form-control"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="email" id="email" name="email" class="form-control"></td>
        </tr>
        <tr>
          <td>Pesan</td>
          <td><textarea id="pesan" name="pesan" class="form-control"></textarea></td>
        </tr>
        <tr>
          <td colspan="2">
            <button id="submitbtn" class="btn btn-primary" type="submit" onclick="validasiForm()">Submit</button>
          </td>
        </tr>
      </table>

    </div>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
     

  </div><!-- /.container -->
  <?php include "../assets/component/footer.php" ?>