<?php

include '../include/config.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);
$nama = $_POST['nama'];
$level = $_POST['level'];

$db = $con->query("INSERT INTO user_tb (username,password,nama,level) VALUES ('$user','$pass','$nama','$level')");
if ($con->affected_rows > 0){
    header("location:../index.php?page=admin");
}