<?php

include '../include/config.php';

$sts = $_POST['sts'];
$id = $_GET['id'];

$db = $con->query("UPDATE pengajuan_tb SET app_finance='$sts' WHERE id='$id'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=appfin");
}