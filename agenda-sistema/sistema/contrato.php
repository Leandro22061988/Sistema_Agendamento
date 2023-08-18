<?php include './include/php/controle.php'; ?>
<?php 
$id = $_GET["id"];
$sqli = "SELECT * FROM contrato WHERE id='$id'";
$exec = $sql->query($sqli);
$cont = mysqli_num_rows($exec);
$exibir = mysqli_fetch_assoc($exec);

use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';

	$dompdf = new DOMPDF();

	$dompdf->load_html('
		'.$exibir["contrato"].'
	');
	$dompdf->render();
	$dompdf->stream(
		"contrato.pdf",
		array(
			"Attachment" => false
		)
	);

?>