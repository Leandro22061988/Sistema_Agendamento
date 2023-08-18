<?php require_once('php/controle.php') ?>
<?php 


$d = explode("-", $_POST['data']);
$v = $d[2]."-".$d[1]."-".$d[0];
$p = $d[2]."/".$d[1]."/".$d[0];
$id = $_POST["id"];


	$sqlc = "UPDATE promissioria SET vencimento='$v', pagamento='$p' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../produto_vendas_promissorias.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>