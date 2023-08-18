<?php require_once('php/controle.php') ?>
<?php 

$nome = $_POST['nome'];
$ema = $_POST['email'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$e = $_POST['estado'];
$l = $_POST['login'];
$n = $_POST['nivel'];
$id = $_POST['id'];


	$sqlc = "UPDATE master SET nome='$nome', email='$ema', telefone='$tel', celular='$cel', endereco='$end', bairro='$b', municipio='$m', estado='$e', login='$l', nivel='$n' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../admin_dados.php?id=$id");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../cliente_detalhes.php");
	}
   
	
?>