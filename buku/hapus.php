<?php 
require "../config.php";
$id = $_GET['id'];

$delete = "DELETE FROM buku WHERE id = $id";
mysqli_query($conn, "$delete");
header("location:index.php");