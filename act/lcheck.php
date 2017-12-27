
<?php

session_start();

include '../include/config.php';

$user = $_POST['user'];
$pass = md5($_POST['pass']);

$r = $con->query("SELECT * FROM user_tb WHERE username = '$user' AND password = '$pass'");
if ($r -> num_rows > 0){
    while ($rr = $r->fetch_array()){
        $_SESSION['username'] = $rr['username'];
        $_SESSION['nama'] = $rr['nama'];
        $_SESSION['level']    = $rr['level'];
    }
    header("location:../index.php");
}else{
    $_SESSION['error'] = "Kombinasi salah";
    header("location:../login.php");
}