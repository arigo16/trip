<?php
include ('../include/config.php');
session_start();
$printby = $_SESSION['username'];
$date = DATE('d-m-Y');
$tg1 = $_POST['tg1'];
$th1 = $_POST['th1'];
$w = $th1."-".$tg1;

require('fpdf.php');

$pdf = new FPDF('l','mm','A5');

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
 
$pdf->Cell(190,7,'PT. HINO',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'LAPORAN BERDASARKAN PERIODE',0,1,'C');
$pdf->SetFont('Arial','B',8);
$pdf->Cell(190,7,'PRINT BY '.$printby.'',0,1,'L');
$pdf->Cell(190,7,'PRINT DATE '.$date.'',0,2,'L');
 

$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIK',1,0);
$pdf->Cell(40,6,'Nama',1,0);
$pdf->Cell(30,6,'Tgl Berangkat',1,0);
$pdf->Cell(30,6,'Tgl Pulang',1,0);
$pdf->Cell(40,6,'Tujuan',1,0);
$pdf->Cell(30,6,'Akomodasi',1,1);
 
$pdf->SetFont('Arial','',10);
 
$d = $con->query("SELECT pengajuan_tb.*,karyawan_tb.nama,u_saku+u_hotel+u_trans as 'Akomodasi' FROM pengajuan_tb INNER JOIN karyawan_tb ON pengajuan_tb.nik = karyawan_tb.nik WHERE month(pengajuan_tb.tg_berangkat) = '$tg1' AND year(pengajuan_tb.tg_berangkat) = '$th1'");
    foreach ($d as $dd) {
    $pdf->Cell(20,6,$dd['nik'],1,0);
	$pdf->Cell(40,6,$dd['nama'],1,0);
    $pdf->Cell(30,6,$dd['tg_berangkat'],1,0);
    $pdf->Cell(30,6,$dd['tg_pulang'],1,0);
    $pdf->Cell(40,6,$dd['tujuan'],1,0); 
	$pdf->Cell(30,6,$dd['akomodasi'],1,1);  
}
 
$pdf->Output();
?>