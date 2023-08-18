<?php require_once('php/controle.php') ?>
<?php 

/*
$c = $_POST['codigo'];
$p = $_POST['parcela'];
$v = $_POST['vencimento'];
$pag = $_POST['pagamento'];


	$sqlc = "UPDATE promissioria SET parcela='$p', vencimento='$v', pagamento='$pag' WHERE codigo=$c ";
	if($sql->query($sqlc) === true){
		header("location:../../produto_vendas_promissorias.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}*/
$c = $_POST['codigo'];
$n  = $_POST["cliente"];
$se = $_POST["produto"];
$va = $_POST["valor"];
$p = $_POST['parcela'];
$v = $_POST['vencimento'];
$pag = $_POST['pagamento'];

$ad = $_POST["adianta"];

if($ad == "Sim"){
	$sqlc = "UPDATE promissioria SET parcela='$p', vencimento='$v' WHERE codigo=$c ";
	if($sql->query($sqlc) === true){
		$sqlc = "INSERT INTO promissioria_parcelas (codigo, cliente, servico, valor, parcela, vencimento, pagamento) VALUES ('".$c."', '".$n."', '".$se."', '".$va."', '".$p."', '".$v."', '".$pag."')";
		if($sql->query($sqlc) == true){
			header("location:../../produto_vendas_promissorias.php?edit=ok");
		}else{
			echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
			//header("location:../../caixa.php?erro=edit");
		}
		}else{
			echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
			//header("location:../../caixa.php?erro=edit");
		}
}else{
	$sqlc = "UPDATE promissioria SET parcela='$p', vencimento='$v', pagamento='$pag' WHERE codigo=$c ";
	if($sql->query($sqlc) === true){
		header("location:../../produto_vendas_promissorias.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
}
	
?>