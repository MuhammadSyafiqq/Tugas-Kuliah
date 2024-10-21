\<?php
session_start();
include_once("koneksi.php");

if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM registrasi WHERE id=$id");
header("Location: admin_dashboard.php");
exit();
?>