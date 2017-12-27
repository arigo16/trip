<?php

include ('../include/config.php');

$idtunjangan = $_POST['idtunj'];
$namajabatan = $_POST['jabatan'];
$uangsaku = $_POST['uangsaku'];
$biayahotel = $_POST['biayahotel'];
$biayatransport = $_POST['biayatransport'];

$con->query("update tunjangan_tb set jabatan_id='$namajabatan', uang_saku='$uangsaku', bea_hotel='$biayahotel', transport='$biayatransport' where id='$idtunjangan'");
if ($con->affected_rows > 0){
	echo "<script>alert('Tunjangan telah berhasil diubah');window.location='../index.php?page=tunjangan'</script>";
}
