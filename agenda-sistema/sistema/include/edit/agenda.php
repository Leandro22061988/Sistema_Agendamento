<?php require_once('php/controle.php') ?>
<?php 

$serv = $_POST['servico'];
$val = $_POST['valor'];
$t = $_POST['tempo'];
if($_POST['ponto'] == ""){
	$po = 0;
}else{
	$po = $_POST['ponto'];
}
$prof = $_POST['profissional'];
$hora = $_POST['horario'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$id_p = $_POST['id_prof'];
$id = $_POST['id'];


	$sqlc = "UPDATE agenda SET servico='$serv', valor='$val', pontos='$po', profissional='$prof', id_prof='$id_p', horario='$hora', dia='$dia', mes=$mes, ano='$ano' WHERE id='$id'";
	if($sql->query($sqlc) === true){
		header("location:../../agenda_func.php?id=$id_p");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../agenda.php?e=erro");
	}
   
	
?>