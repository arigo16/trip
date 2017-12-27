<?php

include '../include/config.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);
$nama = $_POST['nama'];
$level = $_POST['level'];
$id = $_GET['id'];

$db = $con->query("UPDATE user_tb SET username='$user',nama='$nama',level='$level' WHERE id='$id'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=admin");
}