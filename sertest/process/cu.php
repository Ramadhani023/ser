<?php
session_start();
include "../conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $tanggal = date('Y-m-d');

    $query = mysqli_query($conn, "INSERT INTO contact(nama, email, pesan, tanggal) VALUES('$nama','$email','$pesan', '$tanggal')");

    if ($query) {
        echo "<script>alert('Data Input Success!'); window.location.href='../user/cu.php';</script>";
    } else {
        echo "<script>alert('Data Input Failed!'); window.location.href='../user/cu.php';</script>";
    }
}
