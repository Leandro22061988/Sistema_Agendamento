<?php require_once('php/controle.php') ?>
<?php 

$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$sex = $_POST['sexo'];
$nome = $_POST['nome'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$ema = $_POST['email'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$id = $_POST['id'];


	$sqlc = "UPDATE aluno SET cpf='$cpf', rg='$rg', sexo='$sex', nome='$nome', telefone='$tel', celular='$cel', email='$ema', dia='$dia', mes='$mes', ano='$ano', endereco='$end', bairro='$b', municipio='$m', cep='$cep', uf='$uf' WHERE id='$id' ";
	if($sql->query($sqlc) === true){
		header("location:../../cliente_c_detalhes.php?id=$id");
	}else{
		header("location:../../cliente_c_detalhes.php?id=$id&e=erro");
	}
   
	
?>