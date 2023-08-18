<?php require_once('connect.php'); ?>
<?php error_reporting(E_ALL && ~E_NOTICE); ?>
<?php 
	session_start();
	
	$clogin = $_POST["login"];
	$csenha = md5($_POST["senha"]);

	$sqli = $conn->prepare("SELECT * FROM cliente WHERE email='$clogin' AND senha='$csenha'");
	if($sqli->execute()){
	
	$obj = $sqli->fetch(PDO::FETCH_ASSOC);
	
	$login = $obj["login"];
	$senha = $obj["senha"];

    $mnome = $obj["nome"];
    $mid = $obj["id"];
    $cTel = $obj["telefone"];
    $cCel = $obj["celular"];
    $cEma = $obj["email"];

			
		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;
        
        $_SESSION["nome"] = $mnome;
        $_SESSION["id"] = $mid;
        $_SESSION["ctel"] = $cTel;
        $_SESSION["ccel"] = $cCel;
        $_SESSION["cema"] = $cEma;
		
		header("location:../index.php");
			
	}else{
        
        header("location:../login.php");
	}
		
	

?>