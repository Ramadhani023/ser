<?php
session_start();
include "../conn.php";

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $deskr = $_POST['deskr'];
    $tanggal = date('Y-m-d');

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = "../assets/img/uploaded/" . $foto;

    if (!empty($foto)) {
        move_uploaded_file($tmp, $folder);
        $query = mysqli_query($conn, "INSERT INTO news(judul, deskr, foto, tanggal) VALUES('$judul','$deskr','$foto','$tanggal')");
        if ($query) {
            echo "<script>alert('Data Input Success!'); window.location.href='../admin/news.php';</script>";
        } else {
            echo "<script>alert('Data Input Failed!'); window.location.href='../admin/news.php';</script>";
        }
    } else {
        $query = mysqli_query($conn, "INSERT INTO news(judul, deskr, tanggal) VALUES('$judul','$deskr','$tanggal')");
        if ($query) {
            echo "<script>alert('Data Input Success! (no pic)'); window.location.href='../admin/news.php';</script>";
        } else {
            echo "<script>alert('Data Input Failed! (no pic)'); window.location.href='../admin/news.php';</script>";
        }
    }
}
