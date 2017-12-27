<?php

session_start();
include ('../include/config.php');

$nik = $_POST['nik'];
$tgb = $_POST['tber'];
$tgk = $_POST['tkem'];
$tuj = $_POST['tuj'];
$usak = $_POST['usak'];
$uhot = $_POST['uhot'];
$utra = $_POST['utra'];
$createddate = DATE('Y-m-d');

$con->query("INSERT INTO pengajuan_tb VALUES (NULL, '$nik','$tgb','$tgk','$tuj','$usak','$uhot','$utra','proses','proses','$createddate',NULL,NULL,NULL,NULL)");
if ($con->affected_rows > 0){
    header("location:../index.php?page=form");
}else{
	print_r($con->affected_rows);
}
