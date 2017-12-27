<?php 

include '../include/config.php';

$nik = $_POST['nik'];
$nam = $_POST['nama'];
$jab = $_POST['jabatan'];
$div = $_POST['divisi'];

$db = $con->query("UPDATE karyawan_tb SET nama='$nam', jabatan='$jab', divisi='$div' WHERE nik='$nik'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=karyawan");
}