<?php
 
  require('fpdf/fpdf.php');

  $pdf = new FPDF('l','mm','A5');
 
  $pdf->AddPage();

  $pdf->SetFont('Arial','B',16);

  $pdf->Cell(190,7,'DREJUVA AESTHETIC CLINIC',0,1,'C');
  $pdf->SetFont('Arial','B',12);
  $pdf->Cell(190,7,'DAFTAR PRODUK',0,1,'C');

 
  $pdf->Cell(10,7,'',0,1);

  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(30,6,'no',1,0);
  $pdf->Cell(50,6,'id',1,0);
  $pdf->Cell(30,6,'nama',1,0);
  $pdf->Cell(50,6,'harga',1,1);



  $pdf->SetFont('Arial','',10);

  include 'koneksi.php';
  $produk = mysqli_query($con, "select * from produk");
  while ($row = mysqli_fetch_array($produk)){
    $pdf->Cell(30,6,$row['no'],1,0);
    $pdf->Cell(50,6,$row['id_produk'],1,0);
    $pdf->Cell(30,6,$row['nama_produk'],1,0);
    $pdf->Cell(50,6,$row['harga_produk'],1,1);
    
  }
  
  $pdf->Output();
  ?>