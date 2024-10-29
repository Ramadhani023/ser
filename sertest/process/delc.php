<?php
session_start();
include "../conn.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM contact WHERE id_contact = '$id'");
if ($query){
    echo "<script>alert('Data Deletion Success!'); window.location.href='../admin/cu.php';</script>";
}else{
    echo "<script>alert('Data Deletion Failed!'); window.location.href='../admin/cu.php';</script>";
}
