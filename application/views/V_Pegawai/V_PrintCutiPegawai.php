
<?php

require('assets/pdf/fpdf.php');
class PDF extends FPDF
{
// Page header
	function Header()
	{
	    // Arial bold 15
	    $this->SetFont('TImes','',12);
	    // Move to the right
	    $this->Cell(120);
	    // Title
	    $this->Cell(30,0,'Bandar Lampung, 21 Januari 2018');
	    // Line break
	    $this->Ln(20);

	    // $this->cell(10);
	    $this->cell(30,0,'Kepada Yth.');

	    $this->Ln(8);
	    //This Bold name 
	    $this->SetFont('TImes','B',12);
	    $this->cell(30,0,'Kepla Kantor PTIPD');
	    $this->Ln(8);
	    $this->cell(30,0,'IAIN Raden Intan Lampung');
	    $this->Ln(8);
	    //NOrmal Font
	    $this->SetFont('TImes','',12);
	    $this->cell(30,0,'di-');
	    $this->Ln(8);
	    $this->cell(10);
	    $this->cell(30,0,'Bandar Lampung');
	    $this->cell(20);
	}
	// Page footer
	function Footer()
	{
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

	// Instanciation of inherited class
	$pdf = new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','',12);
	$pdf->Ln(20);
	$pdf->Image('./upload/qrCodeSC/'.$surat->qrcode,150,20,25);
//Page 1
	$pdf->cell(10,0,'1. ');
	$pdf->cell(10,0,'Yang bertanda tangan dibawah ini :');
		
	//Name
	$pdf->Ln(10);
	$pdf->cell(10);
	$pdf->cell(50,0,'Nama');
	$pdf->cell(0,0,': '.$surat->Nama);

	//Nip
	$pdf->Ln(10);
	$pdf->cell(10);
	$pdf->cell(50,0,'Nip');
	$pdf->cell(0,0,': '.$surat->NIP);
	
	//Pangkat GOlongan
	$pdf->Ln(10);
	$pdf->cell(10);
	$pdf->cell(50,0,'Pangkat/golongan ruang');
	$pdf->cell(0,0,': '.$surat->Golongan);
	
	//Jabatan
	$pdf->Ln(10);
	$pdf->cell(10);
	$pdf->cell(50,0,'Jabatan');
	$pdf->cell(0,0,': '.$surat->Jabatan);
	
	//Satuan Organisasi
	$pdf->Ln(10);
	$pdf->cell(10);
	$pdf->cell(50,0,'Satuan Organisasi');
	$pdf->cell(0,0,': IAIN Raden Intan Lampung');
	
	//Alasan 
	$pdf->Ln(15);
	$pdf->cell(10);
	$pdf->MultiCell(0,5,'Dengan ini mengajukan permintaan cuti karena '.$surat->jenis_cuti.' selama '.$surat->Lama.' hari terhitung mulai tanggal '.$surat->tgl_mulai.' ' .$surat->bulan_mulai.' '.$surat->tahun_mulai.'  s.d  '.$surat->tgl_akhir.' '.$surat->bulan_akhir.' '.$surat->tahun_akhir.', '.$surat->alasan);
//Page 2
	$pdf->Ln(5);
	$pdf->cell(10,5,'2. ');
	$pdf->MultiCell(0,5,'Alasan saya selama menjalankan cuti karena '.$surat->jenis_cuti);
	

//Page 3
	$pdf->Ln(5);
	$pdf->cell(10,5,'3. ');
	$pdf->MultiCell(0,5,'Demikianlah permintaan ini saya buat untuk dapat dipertimbangkan sebagaimana mestinya');
	

//ttd
	$pdf->Ln(15);
	$pdf->cell(130);
	$pdf->cell(0,0,'Hormat Saya,');
	$pdf->Ln(20);
	$pdf->cell(130);
	$pdf->SetFont('TImes','B',12);
	$pdf->cell(0,0,'Muhammad Bani Sadr');
//NIP
	$pdf->Ln(5);
	$pdf->SetFont('TImes','',11);
	$pdf->cell(130);
	$pdf->cell(8,0,'NIP. ');
	$pdf->cell(0,0,'198101292011011005');
	$pdf->Output();



?>