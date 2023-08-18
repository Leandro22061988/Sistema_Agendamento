<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$c = $_POST['cpf_cnpj'];
$e = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$est = $_POST['estado'];
$tel = $_POST['telefone'];
$id = $_POST["id"];


	$sqlc = "UPDATE empresa SET nome='$n', cpf_cnpj='$c', endereco='$e', bairro='$b', municipio='$m', estado='$est', telefone='$tel' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../empresa.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../gastos.php?erro=edit");
	}
   
	
?>