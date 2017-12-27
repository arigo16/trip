<?php

include '../include/config.php';

$nik = $_POST['nik'];
$nam = $_POST['nama'];
$jab = $_POST['jabatan'];
$div = $_POST['divisi'];

$pass = md5("12345");

$db = $con->query("INSERT INTO karyawan_tb (nik,nama,jabatan,divisi) VALUES ('$nik','$nam','$jab','$div')");
$db2 = $con->query("INSERT INTO user_tb (username,password,nama,level) VALUES ('$nik','$pass','$nam','karyawan')");
if ($con->affected_rows > 0){
    header("location:../index.php?page=karyawan");
}