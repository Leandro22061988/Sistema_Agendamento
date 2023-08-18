<?php include '../salao.php'; ?>
<?php 
	$email = $_POST["email"];
	$sqli = "SELECT * FROM master WHERE email='$email'";
	$exec = $sql->query($sqli);
	$obj = mysqli_fetch_assoc($exec);
	$e = $obj["email"];
	$nome = $obj["nome"];

	if($e){
		
	$to = $e;
		$subject = 'Recuperação de Senha';
		
		$message = '
		<!doctype html>
		<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Jacy Cabeleireiro</title>
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
			<strong>Ola '.$nome.' </strong> <br/><br/>Segue abaixo o link para recuperar de sua senha<br/> <a href="https://agenda.jc.inf.br/nova_senha.php?e='.$e.'">Clique aqui para redefinr sua Senha</a><br/><br/><img src="https://agenda.jacycabeleireiro.com/img/logo.png" title="J. C. Sistemas de Gestão"><br/><br/>
			
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
		$headers .= 'To: '.$nome.' <'.$e.'>' . "\r\n";
		$headers .= 'From: Jacy Cabeleireiro <admin@jacycabeleireiro.com>' . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);

		
		header("location:../../esqueci.php?em=ok");
		
	}else{
		//echo "<strong>DETALHES DO ERRO</strong>: ".mysqli_error()."<br/><strong>Comunique ao Administrado!</strong>";
		header("location:../../esqueci.php?r=erro");
	}
		
	

?>