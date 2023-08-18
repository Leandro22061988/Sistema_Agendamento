<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$e = $_POST['email'];
$t = $_POST['telefone'];
$c = $_POST['celular'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$f = $_POST['funcao'];
$s = $_POST['salario'];
$p = $_POST['porcentagem'];
$id = $_POST['id'];


	$sqlc = "UPDATE funcionario SET nome='$n', email='$e', telefone='$t', celular='$c', endereco='$end', bairro='$b', municipio='$m', dia='$dia', mes='$mes', ano='$ano', funcao='$f', salario='$s', porcentagem='$p' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../funcionario_detalhes.php?id=$id");
	}else{
		header("location:../../funcionario_detalhes.php");
	}
   
	
?>