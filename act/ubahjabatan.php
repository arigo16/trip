<?php

include ('../include/config.php');

$idjabatan = $_POST['idjabatan'];
$namajabatan = $_POST['namajabatan'];

$con->query("update jabatan_tb set nama_jabatan='$namajabatan' where id='$idjabatan'");
if ($con->affected_rows > 0){
	echo "<script>alert('Jabatan telah berhasil diubah');window.location='../index.php?page=inptjabatan'</script>";
}
