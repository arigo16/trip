<?php

include ('../include/config.php');

$idjabatan = $_POST['idjabatan'];
$namajabatan = $_POST['namajabatan'];

$con->query("insert into jabatan_tb values ('$idjabatan','$namajabatan')");
if ($con->affected_rows > 0){
	echo "<script>alert('Jabatan telah berhasil ditambah');window.location='../index.php?page=inptjabatan'</script>";
}
