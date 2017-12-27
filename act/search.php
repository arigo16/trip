<?php

include '../include/config.php';

//get search term
$searchTerm = $_GET['term'];

//get matched data from skills table
$query = $con->query("SELECT nik FROM karyawan_tb WHERE nik LIKE '%".$searchTerm."%'");
while ($row = $query->fetch_assoc()) {
	$data[] = $row['nik'];
}

//return json data
echo json_encode($data);