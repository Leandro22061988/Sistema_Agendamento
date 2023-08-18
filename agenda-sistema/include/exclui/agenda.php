<?php require_once('../../connect/connect.php'); ?>
<?php include '../../connect/function_er.php'; ?>
<?php

    $s = md5($_GET["senha"]);
    $i = $_GET["id"];
    $aluno = $_GET["a"];
    $data = $_GET["d"];
    $hora = $_GET["h"];


        $cad = "DELETE FROM agenda WHERE id='$i'";
        $stmt = $conn->prepare($cad);
        if($stmt->execute()){
            
        $to = $emailMasterServidor;
		$subject = 'Aula Cancelada';
		
		$message = '
		<!doctype html>
		<html lang="pt-br">
		<head>
			<meta charset="utf-8">
			<title>Terminal de Agendamento</title>
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
			<strong>Ola Administrador </strong> <br/><br/>            
            Um cliente desmarcou a aula, segue abaixo os detalhes<br/> 
            Nome: '.$aluno.'<br/>
            Data: '.$data.'<br/>
            Hora: '.$hora.'<br/>
			
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
		$headers .= 'To: Terminal de Agendamento <'.$e.'>' . "\r\n";
		$headers .= 'From: Terminal de Agendamento <'.$emailMasterServidor.'>' . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);
            header("location:../../agenda.php");
        }else{
            set_error_handler("error_handler");
        }
?>