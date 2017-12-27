<?php 

include '../include/config.php';

$id = $_POST['nik'];

$rr = $con->query("SELECT jabatan FROM karyawan_tb WHERE nik = '$id'");
foreach($rr as $r){
	$jabatan = $r['jabatan'];

	$dd = $con->query("SELECT * FROM tunjangan_tb WHERE jabatan_id = '$jabatan'");
	foreach ($dd as $d) {
		$saku = $d['uang_saku'];
		$hotel = $d['bea_hotel'];
		$trans = $d['transport'];
	}
}

$array = array($saku,$hotel,$trans);
echo json_encode($array);