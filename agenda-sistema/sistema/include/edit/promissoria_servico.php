<?php require_once('php/controle.php') ?>
<?php 


$c = $_POST['codigo'];
$n  = $_POST["cliente"];
$ic = $_POST["id_cliente"];
$ip = $_POST["id_prof"];
$se = $_POST["servico"];
$va = $_POST["valor"];
$p = $_POST['parcela'];
$di = $_POST["data_ini"];
$v = $_POST['vencimento'];
$pag = $_POST['pagamento'];

$ad = $_POST["adianta"];

if($ad == "Sim"){
	$sqlc = "UPDATE promissoria SET parcela='$p', vencimento='$v' WHERE codigo=$c ";
	if($sql->query($sqlc) === true){
		$sqlc = "INSERT INTO promissoria_parcelas (codigo, cliente, id_cliente, id_prof, servico, valor, parcela, data_ini, vencimento, pagamento) VALUES ('".$c."', '".$n."', '".$ic."', '".$ip."', '".$se."', '".$va."', '".$p."', '".$di."', '".$v."', '".$pag."')";
		if($sql->query($sqlc) == true){
			header("location:../../atendimento_promissorias.php?edit=ok");
		}else{
			echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
			//header("location:../../caixa.php?erro=edit");
		}
		}else{
			echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
			//header("location:../../caixa.php?erro=edit");
		}
}else{
	$sqlc = "UPDATE promissoria SET parcela='$p', vencimento='$v', pagamento='$pag' WHERE codigo=$c ";
	if($sql->query($sqlc) === true){
		header("location:../../atendimento_promissorias.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
}
	
   
	
?>