<?php include '../../connect/connect.php'; ?>
<?php include '../../connect/function_er.php'; ?>
<?php 
	
	$email = $_POST["email"];
	
	$sqli = $conn->prepare("SELECT * FROM master WHERE email='$email'");
	$sqli->execute();
	
	$obj = $sqli->fetch(PDO::FETCH_ASSOC);
	$nome = $obj["nome"];
	$e = $obj["email"];

	
	if($e){
		
	$to = $e;
		$subject = 'Recuperação de Senha';
		
		$message = '
		<!doctype html>
		<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Agendamento Online</title>
			<style>
				.fontEmail{
					font-size: 16px;
				}
				.tudo{
					width:100%;
					float:left;
				}
				strong{
					color:#008080;
				}
			</style>
		</head>
		<body>
		
		<div style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">
		  
		  <p></p>
		  <div class="tudo fontEmail">
			<strong>Ola '.$nome.' </strong> <br/><br/>Segue abaixo o link para recuperar de sua senha<br/> <a href="'.$dominio.'c_master/nova_senha.php?e='.$e.'">Clique aqui para redefinr sua Senha</a><br/><br/>
			
			<p></p>
		  </div>
		  
		</div>
		</body>
		</html>
		';
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		// Additional headers
		$headers .= 'To: Agendamento Online <'.$e.'>' . "\r\n";
		$headers .= 'From: Agendamento Online <'.$emailMasterServidor.'>' . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);

		
		header("location:../esqueci.php?em=ok");
		
	}else{
		set_error_handler("error_handler");
	}
		
	

?>