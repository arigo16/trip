<?php

include '../include/config.php';
session_start();
$appfin = $_SESSION['username'];
$sts = $_POST['sts'];
$id = $_GET['id'];
$sdate = DATE('Y-m-d');

$db = $con->query("UPDATE pengajuan_tb SET app_finance='$sts', AppDateFin='$sdate', AppFin='$appfin' WHERE id='$id'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=appfin");
}