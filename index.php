<?php 
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
if (isset($_POST['crear'])) {
ob_start();
require_once 'view.php'; 
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8'); //Parámetros del pdf 
$html2pdf->writeHTML($html); // Lo que se esta imprimiendo 
$html2pdf->output('PDF_GENERATE.pdf'); //Asigna un nombre al archivo de salida
}
 ?>
	<form action="" method="POST">
		<input type="submit" value="Crear pdf" name="crear">
	</form>