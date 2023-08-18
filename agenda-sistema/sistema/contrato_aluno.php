<?php include './include/php/controle.php'; ?>
<?php 
$id = $_GET["id"];
$cu = $_GET["c"];
$emp = "SELECT * FROM empresa";
$exep = $sql->query($emp);
$contemp = mysqli_num_rows($exep);
$exibemp = mysqli_fetch_assoc($exep);

$alun = "SELECT * FROM aluno WHERE id='$id'";
$exeal = $sql->query($alun);
$contal = mysqli_num_rows($exeal);
$exibal = mysqli_fetch_assoc($exeal);

$sqli = "SELECT * FROM contrato WHERE curso='$cu'";
$exec = $sql->query($sqli);
$cont = mysqli_num_rows($exec);
$exibir = mysqli_fetch_assoc($exec);

$html .= '<table border="1"';
$html .= '<tr>';
$html .= '<td colspan="3"><strong>CONTRATADA</strong></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td width="140px">';
$html .= '<img src="img/alunos/'.$exibal["foto"].'" style="width:140px">';
$html .= '</td>';
$html .= '<td>';
$html .= '<h4>'.$exibal["nome"].'</h4>';
$html .= '<br/>';
$html .= '<p><strong>CPF: </strong>'.$exibal["cpf"].'</p>';
$html .= '<p><strong>RG: </strong>'.$exibal["rg"].'</p>';
$html .= '<p><strong>Telefone: </strong>'.$exibal["telefone"].'</p>';
$html .= '<p><strong>Celular: </strong>'.$exibal["celular"].'</p>';
$html .= '<p><strong>E-mail: </strong>'.$exibal["email"].'</p>';
$html .= '<p><strong>Data de Nescimento: </strong>'.$exibal["dia"].'/'.$exibal["mes"].'/'.$exibal["ano"].'</p>';
$html .= '</td>';
$html .= '<td>';
$html .= '<p><strong>Endereço: </strong>'.$exibal["endereco"].'</p>';
$html .= '<p><strong>Bairro: </strong>'.$exibal["bairro"].'</p>';
$html .= '<p><strong>Municipio: </strong>'.$exibal["municipio"].'</p>';
$html .= '<p><strong>CEP: </strong>'.$exibal["cep"].'</p>';
$html .= '<p><strong>Estado: </strong>'.$exibal["uf"].'</p>';
$html .= '</td>';
$html .= '</tr>';	  
$html .= '<tr >';
$html .= '<td colspan="3"><strong>CONTRATANTE</strong></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3">';
$html .= '<p><strong>Empresa: </strong>'.$exibemp["nome"].'</p>';
$html .= '<p><strong>CNPJ: </strong>'.$exibemp["cpf_cnpj"].'</p>';
$html .= '<p><strong>Telefone: </strong>'.$exibemp["telefone"].'</p>';
$html .= '<p><strong>Endereço: </strong>'.$exibemp["endereco"].'</p>';
$html .= '<p><strong>Bairro: </strong>'.$exibemp["bairro"].'</p>';
$html .= '<p><strong>Municipio: </strong>'.$exibemp["municipio"].'</p>';
$html .= '<p><strong>Estado: </strong>'.$exibemp["estado"].'</p>';
$html .= '</td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3"><strong>CONTRATO</strong></td>';
$html .= '</tr>';
$html .= '<tr>';
$html .= '<td colspan="3">'.$exibir["contrato"].'</td>';
$html .= '</tr>';
$html .= '</table';	
	
/*use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';

	$dompdf = new DOMPDF();

	$dompdf->load_html('
		'.$html.'
	');

	$dompdf->render();
	$dompdf->stream(
		"contrato.pdf",
		array(
			"Attachment" => false
		)
	);*/
use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"contrato.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);

?>