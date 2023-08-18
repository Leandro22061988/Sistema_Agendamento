<?php require_once('php/controle.php') ?>
<?php 


$nome = $_POST['nome'];
$qt = $_POST['quant'];
$cus = $_POST['custo'];
$desc = $_POST['descricao'];
$val = $_POST['valor'];
$porc = $_POST["porcent"];
$id = $_POST["id"];


	$sqlc = "UPDATE produto SET nome='$nome', quantidade='$qt', custo='$cus', descricao='$desc', valor='$val', porcentagem='$porc' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../produto.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>