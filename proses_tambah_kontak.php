<?php 

//1. Koneksi 
include("koneksi.php");

//2. Query 
//Data Dari Form
$ket = mysqli_real_escape_string($db, $_POST['ket']);
$query = "INSERT INTO index (index) VALUES ('$ket')";

mysqli_query($db, $query);

header("Location: index.php");