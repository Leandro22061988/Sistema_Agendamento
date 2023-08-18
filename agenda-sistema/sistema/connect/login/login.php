<?php require_once('../salao.php'); ?>

<?php 

	session_start();
	
	$clogin = $_POST["login"];
	$csenha = md5($_POST["senha"]);

	$sqli = "SELECT * FROM master WHERE login='$clogin' AND senha='$csenha'";
	$exec = $sql->query($sqli);
	
	$obj = mysqli_fetch_assoc($exec);
	
	$login = $obj["login"];
	$senha = $obj["senha"];

	$nome = $obj["nome"];
	$id_adm = $obj["id"];
	$nivel = $obj["nivel"];

	
	if($login && $senha){
			
		$_SESSION["entrarlogin"] = $login;
		$_SESSION["entrarsenha"] = $senha;
		
		$_SESSION["nomeadm"] = $nome;
		$_SESSION["idadmin"] = $id_adm;
		$_SESSION["nivel"] = $nivel;
		
		header("location:../../index.php");
			
	}else{
		//echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		header("location:../../login.php?login=erro");
	}
		
	

?>