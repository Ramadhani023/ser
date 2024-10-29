<?php
session_start();
include "../conn.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM act WHERE id_act = '$id'");
if ($query){
    echo "<script>alert('Data Deletion Success!'); window.location.href='../admin/act.php';</script>";
}else{
    echo "<script>alert('Data Deletion Failed!'); window.location.href='../admin/act.php';</script>";
}
