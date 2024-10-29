<?php
session_start();
include "../../conn.php";

$loggedin = isset($_SESSION['loggedin']);

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM news WHERE id_news='$id'");
$row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="mt-5">
        <?php if ($loggedin): ?>
            <div class="container shadow-lg rounded-4">
                <form action="../../process/editb.php" method="post" enctype="multipart/form-data" class="form my-5 py-5 px-5">
                        <input type="hidden" name="id" id="" value="<?= $row['id_news'];?>">
                    <div>
                        <label for="judul" class="form-label">Judul Berita</label><br>
                        <input type="text" id="judul" name="judul" class="form-control" value="<?= $row['judul']; ?>" required>
                    </div>
                    <br>
                    <div>
                        <label for="deksripsi" class="form-label">Deskripsi Berita</label><br>
                        <textarea name="deskr" id="deskripsi" class="form-control" required><?= $row['deskr']; ?></textarea>
                    </div>
                    <br>
                    <div>
                        <label for="foto" class="form-label">Foto Berita</label><br>
                        <img src=<?= '../../assets/img/uploaded/' . urlencode($row['foto']); ?> alt="Current Pic" width="140rem" height="140rem">
                        <input type="file" id="foto" name="foto" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label for="tanggal" class="form-label">Tanggal Berita</label><br>
                        <input type="date" name="tanggal" class="form-contorl container" value="<?= $row['tanggal']; ?>">
                    </div>
                    <div>
                        <button type="submit" name="submit" class="btn btn-outline-success mt-4">
                            <h3>Submit</h3>
                        </button>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <h1>Only Admin Can Access This Page!</h1>
        <?php endif; ?>
    </div>
</body>

</html>