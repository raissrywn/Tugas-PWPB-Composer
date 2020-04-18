<?php 
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->load_html('Menggunakan Library DOMpdf untuk Membuat Report PDF dengan DOMpdf');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');
?>