<?php

include '../include/config.php';

session_start();
$nik = $_SESSION['username'];
$passlm = md5($_POST['passwordlm']);
$passbr = md5($_POST['passwordbr']);

$r = $con->query("SELECT * FROM user_tb WHERE username = '$nik' AND password = '$passlm'");
if ($r -> num_rows > 0){
	$db = $con->query("UPDATE user_tb SET password='$passbr' WHERE username='$nik'");
	if ($con->affected_rows > 0){
		//$_SESSION['error'] = "Password Berhasil Diganti";
		echo "<script>alert('Password Berhasil Diganti');window.location='../index.php?page=formchangepswrd'</script>";
		//header("location:../index.php?page=formchangepswrd");
	}
}else{
	//$_SESSION['error'] = "Password Lama Salah";
	echo "<script>alert('Password Lama Salah');window.location='../index.php?page=formchangepswrd'</script>";
	//header("location:../index.php?page=formchangepswrd");
}					