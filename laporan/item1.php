<?php
include ('../include/config.php');
session_start();
$printby = $_SESSION['username'];
$date = DATE('d-m-Y');
$id = $_POST['nik'];
$tg1 = $_POST['tg1'];
$th1 = $_POST['th1'];
$w = $th1."-".$tg1;
$r = $con->query("SELECT nama FROM karyawan_tb WHERE nik = '$id'");
foreach ($r as $rr){
	$nama = $rr['nama'];
}

require('fpdf.php');

$pdf = new FPDF('l','mm','A5');

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
 
$pdf->Cell(190,7,'PT. HINO',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'LAPORAN BERDASARKAN KARYAWAN DAN PERIODE',0,1,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(190,7,'PRINT BY '.$printby.'',0,1,'L');
$pdf->Cell(190,7,'PRINT DATE '.$date.'',0,2,'L');
 

$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIK',1,0);
$pdf->Cell(50,6,'Tgl Berangkat',1,0);
$pdf->Cell(50,6,'Tgl Pulang',1,0);
$pdf->Cell(40,6,'Tujuan',1,0);
$pdf->Cell(30,6,'Akomodasi',1,1);
 
$pdf->SetFont('Arial','',10);
 
$d = $con->query("SELECT nik, tg_berangkat, tg_pulang, tujuan, u_saku+u_hotel+u_trans as 'akomodasi' FROM pengajuan_tb WHERE nik = '$id' AND month(tg_berangkat) = '$tg1' AND year(tg_berangkat) = '$th1'");
    foreach ($d as $dd) {
    $pdf->Cell(20,6,$dd['nik'],1,0);
    $pdf->Cell(50,6,$dd['tg_berangkat'],1,0);
    $pdf->Cell(50,6,$dd['tg_pulang'],1,0);
    $pdf->Cell(40,6,$dd['tujuan'],1,0); 
	$pdf->Cell(30,6,$dd['akomodasi'],1,1); 
}
 
$pdf->Output();
?>