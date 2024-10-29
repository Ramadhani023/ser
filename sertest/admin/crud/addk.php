<?php
session_start();
include "../../conn.php";

$loggedin = isset($_SESSION['loggedin']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kegiatan</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="mt-5">
        <?php if ($loggedin): ?>
            <div class="container shadow-lg rounded-4">
                <form action="../../process/addk.php" method="post" enctype="multipart/form-data" class="form my-5 py-5 px-5">
                    <div>
                        <label for="judul" class="form-label">Judul Kegiatan</label><br>
                        <input type="text" id="judul" name="judul" class="form-control" required>
                    </div>
                    <br>
                    <div>
                        <label for="deksripsi" class="form-label">Deskripsi Kegiatan</label><br>
                        <textarea name="deskr" id="deskripsi" class="form-control" required></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="foto" class="form-label">Foto Kegiatan</label><br>
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-outline-success mt-4"><h3>Submit</h3></button>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <h1>Only Admin Can Access This Page!</h1>
        <?php endif; ?>
    </div>
</body>

</html>