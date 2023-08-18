<?php require_once('../../connect/connect.php'); ?>
<?php error_reporting(E_ALL && ~E_NOTICE); ?>

<?php 

	session_start();
	
	$clogin = $_POST["login"];
	$csenha = md5($_POST["senha"]);

	$sqli = $conn->prepare("SELECT * FROM master WHERE login='$clogin' AND senha='$csenha'");
	$sqli->execute();
	
	$obj = $sqli->fetch(PDO::FETCH_ASSOC);
	
	$login = $obj["login"];
	$senha = $obj["senha"];

    $mnome = $obj["nome"];
    $mid = $obj["id"];

	
	if($login && $senha){
			
		$_SESSION["masterlogin"] = $login;
		$_SESSION["mastersenha"] = $senha;
        
        $_SESSION["masternome"] = $mnome;
        $_SESSION["masterid"] = $mid;
		
		header("location:../index.php");
			
	}else{
        header("location:../login.php");
	}
		
	

?>