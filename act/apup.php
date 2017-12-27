<?php

include '../include/config.php';
session_start();
$appdiv = $_SESSION['username'];
$sts = $_POST['sts'];
$id = $_GET['id'];
$sdate = DATE('Y-m-d');

$db = $con->query("UPDATE pengajuan_tb SET app_divhead='$sts', AppDateDiv='$sdate', AppDiv='$appdiv' WHERE id='$id'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=appadm");
}else{
	print_r($con->affected_rows);
}