<?php
session_start();
include "../conn.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    
    $query = mysqli_query($conn, "SELECT * FROM acc WHERE username='$username' AND pw='$pw'");
    
    $cek = mysqli_num_rows($query);
    
    if ($cek > 0) {
        $_SESSION['loggedin'] = true;
        header("Location: ../admin/act.php");
        exit();
    } else {
        echo "<script>alert('Username/password incorrect!'); window.location.href='../user/login.php';</script>";
    }
}
