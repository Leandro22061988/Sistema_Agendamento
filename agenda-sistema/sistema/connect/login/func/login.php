<?php require_once('../../salao.php'); ?>

<?php 

	session_start();
	
	$clogin = $_POST["login"];
	$csenha = $_POST["senha"];

	$sqli = "SELECT * FROM funcionario WHERE login='$clogin' AND senha='$csenha'";
	$exec = $sql->query($sqli);
	
	$obj = mysqli_fetch_assoc($exec);
	
	$login = $obj["login"];
	$senha = $obj["senha"];

	
	if($login && $senha){
			
		$_SESSION["entrarlogin"] = $login;
		$_SESSION["entrarsenha"] = $senha;
		
		header("location:../../../include/funcionario/index.php");
			
	}else{
		//echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		header("location:../../../include/funcionario/login.php?login=erro");
	}
		
	

?>