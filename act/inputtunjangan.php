<?php

include ('../include/config.php');

$idtunjangan = $_POST['idtunj'];
$namajabatan = $_POST['jabatan'];
$uangsaku = $_POST['uangsaku'];
$biayahotel = $_POST['biayahotel'];
$biayatransport = $_POST['biayatransport'];

$con->query("insert into tunjangan_tb values ('$idtunjangan','$namajabatan','$uangsaku','$biayahotel','$biayatransport')");
if ($con->affected_rows > 0){
	echo "<script>alert('Tunjangan telah berhasil ditambah');window.location='../index.php?page=tunjangan'</script>";
}
