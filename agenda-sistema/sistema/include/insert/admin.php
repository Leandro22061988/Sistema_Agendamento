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
$s = md5($_POST['senha']);
$n = $_POST['nivel'];


	$sqlc = "INSERT INTO master (nome, email, telefone, celular, endereco, bairro, municipio, estado, login, senha, nivel) VALUES ('".$nome."', '".$ema."', '".$tel."', '".$cel."',  '".$end."', '".$b."', '".$m."', '".$e."', '".$l."', '".$s."', '".$n."')";
	if($sql->query($sqlc) == true){
		header("location:../../admins.php?cad=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../cliente.php?erro=cad");
	}
   
	
?>