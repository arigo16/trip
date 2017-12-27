<?php

session_start();
include ('../include/config.php');


$nik = $_SESSION['username'];
$tgb = $_POST['tber'];
$tgk = $_POST['tkem'];
$tuj = $_POST['tuj'];
$usak = $_POST['usak'];
$uhot = $_POST['uhot'];
$utra = $_POST['utra'];

$con->query("INSERT INTO pengajuan_tb (nik,tg_berangkat,tg_pulang,tujuan,u_saku,u_hotel,u_trans,app_admin,app_finance) VALUES ('$nik','$tgb','$tgk','$tuj','$usak','$uhot','$utra','proses','proses')");
if ($con->affected_rows > 0){
    header("location:../index.php?page=formkar");
}
