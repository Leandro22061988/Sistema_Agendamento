<?php require_once('php/controle.php') ?>

<?php 


$nome = $_POST['nome'];
$id_cli = $_POST['cliente'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$ema = $_POST['email'];
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
$id = $_POST['id_prof'];
$st = $_POST['status'];
$pr = $_POST["prazo"];

	if($_POST["darp"] == "Sim"){
		
		
		$f = date('d/m/Y', strtotime('+'.$pr.' days', strtotime($dia.'-'.$mes.'-'.$ano)));
		$sep = explode("/", $f);
		$d = $sep[0];
		$m = $sep[1];
		$a = $sep[2];
		
		//$i = $dia."/".$mes."/".$ano;
		
		$sqld = "INSERT INTO expira_pontos (id_cliente, dia, mes, ano, d, m, a, pontos, servico) VALUES ('".$id_cli."', '".$dia."', '".$mes."', '".$ano."', '".$d."', '".$m."', '".$a."', '".$po."', '".$serv."')";
		if($sql->query($sqld) == true){

			$sqlc = "INSERT INTO agenda (nome, id_cliente, telefone, celular, email, servico, valor, tempo, pontos, profissional, horario, dia, mes, ano, id_prof, status) VALUES ('".$nome."', '".$id_cli."', '".$tel."', '".$cel."', '".$ema."', '".$serv."', '".$val."', '".$t."', '".$po."', '".$prof."', '".$hora."', '".$dia."', '".$mes."', '".$ano."', '".$id."', '".$st."')";
			if($sql->query($sqlc) == true){
				header("location:../../agenda.php?cad=ok");
			}else{
				header("location:../../agenda.php?erro=cad");
			}
			
		}else{
			header("location:../../agenda.php?erro=exp");
		}
	}else{
		
		$sqlc = "INSERT INTO agenda (nome, id_cliente, telefone, celular, email, servico, valor, tempo, pontos, profissional, horario, dia, mes, ano, id_prof, status) VALUES ('".$nome."', '".$id_cli."', '".$tel."', '".$cel."', '".$ema."', '".$serv."', '".$val."', '".$t."', '".$po."', '".$prof."', '".$hora."', '".$dia."', '".$mes."', '".$ano."', '".$id."', '".$st."')";
		if($sql->query($sqlc) == true){
			header("location:../../agenda.php?cad=ok");
		}else{
			header("location:../../agenda.php?erro=cad");
		}
	}
	
?>