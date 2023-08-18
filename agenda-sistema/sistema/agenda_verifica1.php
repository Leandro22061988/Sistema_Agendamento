<?php include './connect/salao.php'; ?>


<?php 
	date_default_timezone_set('America/Sao_Paulo');
	$d = date("d");
	$m = date("m");
	$a = date("Y");
	$st = "Agendado";
	$busca = "SELECT * FROM agenda WHERE dia='$d' and mes='$m' and ano='$a' and status='$st' ";
	$exeb = $sql->query($busca);
	while($hora = mysqli_fetch_assoc($exeb)){
		$pegT = "SELECT * FROM agenda_verifica";
		$exgt = $sql->query($pegT);
		$tmp = mysqli_fetch_assoc($exgt);
		$t = $tmp["tempo"];
		$idC = $hora["id_cliente"];
		$horario = $hora["horario"];
		$hatual = date("H:i");
		$al = date('H:i', strtotime('-'.$t.' minute', strtotime($horario)));
		
		if($hatual == $al){
			//echo $horario."<br/>";
			$buse = "SELECT * FROM agenda_verifica";
			$exbe = $sql->query($buse);
			$emv = mysqli_fetch_assoc($exbe);
			
			$mailserv = $emv["email_serv"];
			$mailrec = $emv["email_rec"];
			$ass = "Lembrete Agendamento";
			$c = "Sistema de Salão";

			$to = $mailrec;
			$subject = $ass;
			
			$message = '
			<!doctype html>
			<html lang="pt-br">
			<head>
				<meta charset="utf-8">
				<title>'.$ass.'</title>
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
				<strong>Ola</strong> Administrador  <br/><br/>
				Seu próximo atendimento é as '.$horario.'.<br/>
				Cliente: '.$hora["nome"].'<br/>
				Serviços: '.$hora["servico"].'<br/>
				Profissional: '.$hora["profissional"].'<br/>
				Valor: R$ '.number_format($hora["valor"],2,",",".").'<br/>
				
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
			$headers .= 'To: '.$c.' <'.$to.'>' . "\r\n";
			$headers .= 'From: '.$c.' <'.$mailserv.'>' . "\r\n";

			// Mail it
			mail($to, $subject, $message, $headers);

			if(mail && $hatual == $al){
			//echo $horario."<br/>";
			$buse = "SELECT * FROM agenda_verifica";
			$exbe = $sql->query($buse);
			$emv = mysqli_fetch_assoc($exbe);
			
			$bucl = "SELECT * FROM cliente WHERE id='$idC'";
			$excl = $sql->query($bucl);
			$rcli = mysqli_fetch_assoc($excl);
			
			$mailserv = $emv["email_serv"];
			$mailrec = $rcli["email"];
			$ass = "Lembrete Agendamento";
			$c = "Salão de Beleza";

			$to = $mailrec;
			$subject = $ass;
			
			$message = '
			<!doctype html>
			<html lang="pt-br">
			<head>
				<meta charset="utf-8">
				<title>'.$ass.'</title>
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
				<strong>Ola</strong> '.$rcli["nome"].'  <br/><br/>
				Você esta agendada(o) para as '.$horario.'.<br/>
				Serviços: '.$hora["servico"].'<br/>
				Profissional: '.$hora["profissional"].'<br/>
				Valor: R$ '.number_format($hora["valor"],2,",",".").'<br/>
				
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
			$headers .= 'To: '.$c.' <'.$to.'>' . "\r\n";
			$headers .= 'From: '.$c.' <'.$mailserv.'>' . "\r\n";

			// Mail it
			mail($to, $subject, $message, $headers);			

			}

			}
	}
	

 ?>

