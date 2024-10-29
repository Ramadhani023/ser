<?php
session_start();
include "../conn.php";


if (isset($_POST['submit'])){ 
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskr = $_POST['deskr'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $folder = "../assets/img/uploaded/" . $foto;

    if (!empty($foto)) {
        move_uploaded_file($tmp, $folder);
        $query = mysqli_query($conn, "UPDATE act SET judul = '$judul', deskr = '$deskr', foto = '$foto' WHERE id_act = '$id'");
        if ($query) {
            echo "<script>alert('Data Edit Success!'); window.location.href='../admin/act.php';</script>";
        } else {
            echo "<script>alert('Data Edit Failed!'); window.location.href='../admin/act.php';</script>";
        }
    } else {
        $query = mysqli_query($conn, "UPDATE act SET judul = '$judul', deskr = '$deskr' WHERE id_act = '$id'");
        if ($query) {
            echo "<script>alert('Data Edit Success! (no pic)'); window.location.href='../admin/act.php';</script>";
        } else {
            echo "<script>alert('Data Edit Failed! (no pic)'); window.location.href='../admin/act.php';</script>";
        }
    }
}
