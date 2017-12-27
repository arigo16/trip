<?php

include '../include/config.php';

$id = $_GET['id'];

$db = $con->query("DELETE FROM tunjangan_tb WHERE id='$id'");
if ($con->affected_rows > 0){
    header("location:../index.php?page=tunjangan");
}