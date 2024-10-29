<?php
session_start();
include "../conn.php";

$loggedin = isset($_SESSION['loggedin']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sertest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="act.php">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cu.php">Pesan</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-danger" href="logout.php" onclick="return confirm('Anda Yakin Ingin Log Out?')">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <div class="mt-5">
        <?php if ($loggedin): ?>
            <div class="container text-center">
                <a href="crud/addk.php" class="btn btn-outline-primary my-5">
                    <h3><strong>Tambah Kegiatan</strong></h3>
                </a>
                <table class="table shadow-lg table-bordered table-striped">
                    <thead>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Judul</strong></td>
                            <td><strong>Deskripsi</strong></td>
                            <td><strong>Foto</strong></td>
                            <td><strong>Aksi</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "../conn.php";
                        $no = 1;

                        $query = mysqli_query($conn, "SELECT * FROM act");
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['judul']; ?></td>
                                <td class="text-start"><?= $row['deskr']; ?></td>
                                <td><img src=<?= '../assets/img/uploaded/' . urlencode($row['foto']); ?> alt="" width="140rem" height="140rem"></td>
                                <td>
                                    <a href="crud/editk.php?id=<?= $row['id_act'];?>" class="btn btn-outline-warning">Edit</a>
                                    <a href="../process/delk.php?id=<?= $row['id_act'];?>" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <h1>Only Admin Can Access This Page!</h1>
        <?php endif; ?>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</html>