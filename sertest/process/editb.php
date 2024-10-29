<?php
session_start();
include "../conn.php";


if (isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskr = $_POST['deskr'];
    $tanggal = $_POST['tanggal'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = "../assets/img/uploaded/" . $foto;

    if (!empty($foto)) {
        move_uploaded_file($tmp, $folder);
        $query = mysqli_query($conn, "UPDATE news SET judul = '$judul', deskr = '$deskr', foto = '$foto', tanggal = '$tanggal' WHERE id_news = '$id'");
        if ($query) {
            echo "<script>alert('Data Edit Success!'); window.location.href='../admin/news.php';</script>";
        } else {
            echo "<script>alert('Data Edit Failed!'); window.location.href='../admin/news.php';</script>";
        }
    } else {
        $query = mysqli_query($conn, "UPDATE news SET judul = '$judul', deskr = '$deskr', tanggal = '$tanggal' WHERE id_news = '$id'");
        if ($query) {
            echo "<script>alert('Data Edit Success! (no pic)'); window.location.href='../admin/news.php';</script>";
        } else {
            echo "<script>alert('Data Edit Failed! (no pic)'); window.location.href='../admin/news.php';</script>";
        }
    }
}
