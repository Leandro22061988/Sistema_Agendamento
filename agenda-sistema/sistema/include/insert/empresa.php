<?php require_once('php/controle.php') ?>

<?php 


$n = $_POST['nome'];
$c = $_POST['cpf_cnpj'];
$e = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$est = $_POST['estado'];
$tel = $_POST['telefone'];



	$sqlc = "INSERT INTO empresa (nome, cpf_cnpj, endereco, bairro, municipio, estado, telefone) VALUES ('".$n."', '".$c."', '".$e."', '".$b."', '".$m."', '".$est."', '".$tel."')";
	if($sql->query($sqlc) == true){
		header("location:../../empresa.php?cad=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../gastos.php?erro=cad");
	}
   
	
?>