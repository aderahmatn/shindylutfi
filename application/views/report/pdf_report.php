<?php
$pdf = new FPDF('l', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->SetTitle("Laporan Shindylufti", 1);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(275, 7, 'MAKEUP ARTIS SHINDY LUTFI', 0, 1, 'C');
$pdf->Image(base_url() . "assets/images/icon.png", 10, 10, 20, 0, 'PNG');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(275, 7, 'LAPORAN DATA TRANSAKSI', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);

$pdf->Cell(275, 7, 'Pesanan MUA Periode Tanggal ' . $tgl1 . ' Sampai Tanggal ' . $tgl2, 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 6, 'No', 1, 0, 'C');
$pdf->Cell(40, 6, 'Tanggal Transaksi', 1, 0, 'C');
$pdf->Cell(40, 6, 'Customer', 1, 0, 'C');
$pdf->Cell(30, 6, 'Paket', 1, 0, 'C');
$pdf->Cell(40, 6, 'Tanggal Acara', 1, 0, 'C');
$pdf->Cell(25, 6, 'Harga', 1, 0, 'C');
$pdf->Cell(40, 6, 'Petugas', 1, 0, 'C');
$pdf->Cell(50, 6, 'Status', 1, 1, 'C');
$pdf->SetFont('Arial', '', 8, 'C');
$no = 1;
foreach ($result as $key) {
    $pdf->Cell(10, 6, $no++ . '.', 1, 0, 'C');
    $pdf->Cell(40, 6, $key->tanggal_transaksi, 1, 0);
    $pdf->Cell(40, 6, $key->nama_lengkap, 1, 0);
    $pdf->Cell(30, 6, $key->nama_paket, 1, 0);
    $pdf->Cell(40, 6, $key->tanggal_acara, 1, 0);
    $pdf->Cell(25, 6, 'Rp. ' . $key->harga, 1, 0);
    $pdf->Cell(40, 6, $key->nama_petugas, 1, 0);
    $pdf->Cell(50, 6, $key->status_transaksi, 1, 1);
}
$pdf->ln();
$pdf->ln();
$pdf->Cell(217, 6, '', 0, 0);
$pdf->Cell(60, 6, 'Tangerang, ' . date('Y-m-d'), 0, 1, 'C');
$pdf->Cell(217, 6, '', 0, 0);
$pdf->Cell(60, 6, 'Mengetahui,', 0, 1, 'C');
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->ln();
$pdf->Cell(217, 6, '', 0, 0);
$pdf->Cell(60, 6, 'Pemilik', 'T', 1, 'C');
$pdf->Output();
