<?php require_once('php/controle.php') ?>
<?php 


$f = $_POST['funcao'];
$s = str_replace(",",".",$_POST['salario']);
$p = $_POST['porcentagem'];
$id = $_POST["id"];


	$sqlc = "UPDATE funcao SET funcao='$f', salario='$s', porcentagem='$p' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../admin_funcoes.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>