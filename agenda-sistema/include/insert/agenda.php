<?php require_once('../../connect/connect.php'); ?>
<?php include '../../connect/function_er.php'; ?>
<?php 

    $cl = $_GET["c"];
    $ci = $_GET["ci"];
    $ct = $_GET["ct"];
    $cc = $_GET["cc"];
    $ce = $_GET["ce"];

    $se = $_GET["s"];    
    $vl = $_GET["v"];
    $te = $_GET["t"];
    $si = $_GET["si"];
	
    $pr = $_GET["p"];
    $ip = $_GET["i"];

    $hr = $_GET["h"];
    
    $di = $_GET["d"];
    $me = $_GET["m"];
    $an = $_GET["a"];    
    
    $st = "Agendado";
  
	//////////////////////////////////////////////////////////////////////
	$bsob = $conn->prepare("SELECT * FROM sobra WHERE id_cliente='$ci'");
    $bsob->execute();
    $fsob = $bsob->fetch(PDO::FETCH_ASSOC);
    $psob = $fsob["pontos"];

    $sqlib = $conn->prepare("SELECT SUM(pontos) as SOMA FROM agenda WHERE id_cliente='$ci'");
    $sqlib->execute();
    $contb = $sqlib->rowCount();
    $exibi = $sqlib->fetch(PDO::FETCH_ASSOC);

    if($exibi["SOMA"] < 1 && $psob < 1){
        $exibi["SOMA"] = 0;
        $s = $exibi["SOMA"];
    }else{
        $s = $exibi["SOMA"] + $psob;
    }

    $sqlid = $conn->prepare("SELECT * FROM cliente WHERE id='$ci'");
    $sqlid->execute();
    $olha = $sqlid->fetch(PDO::FETCH_ASSOC);
	
	///////////////////////////////////////////////////////////////////

    $sqli = $conn->prepare("SELECT * FROM servico WHERE id='$si'");
    $sqli->execute();
    $mserv = $sqli->fetch(PDO::FETCH_ASSOC);
	
    $sqlia = $conn->prepare("SELECT * FROM fidelidade WHERE servico='$se'");
    $sqlia->execute();
    $fi = $sqlia->fetch(PDO::FETCH_ASSOC);

    $sqlid = $conn->prepare("SELECT SUM(pontos) as SOMA, id_cliente FROM expira_pontos WHERE id_cliente='$ci'");
    $sqlid->execute();
    $contd = $sqlid->rowCount();
    $exib = $sqlid->fetch(PDO::FETCH_ASSOC);

    if($exib["SOMA"] < 1){
        $exib["SOMA"] = 0;
        $va = $exibi["SOMA"];
    }else{
        $va = $exib["SOMA"];
    }

    //Verificando se o serviço esta cadastrado
    if($fi["servico"]){
        $bPra = $conn->prepare("SELECT * FROM prazo_pontos");
        $bPra->execute();
        $prazo = $bPra->fetch(PDO::FETCH_ASSOC);
        $vpr = $prazo["prazo"];
        $pt = $fi["pontos"];
        
        $f = date('d/m/Y', strtotime('+'.$vpr.' days', strtotime($di.'-'.$me.'-'.$an)));
		$sep = explode("/", $f);
		$d = $sep[0];
		$m = $sep[1];
		$a = $sep[2];
        
        
        $sqld = "INSERT INTO expira_pontos (id_cliente, dia, mes, ano, d, m, a, pontos, servico) VALUES ('".$ci."', '".$di."', '".$me."', '".$an."', '".$d."', '".$m."', '".$a."', '".$pt."', '".$se."')";
		$stmt = $conn->prepare($sqld);
        if($stmt->execute()){
   
            $cad = "INSERT INTO agenda (nome, id_cliente, telefone, celular, email, servico, valor, tempo, pontos, profissional, id_prof, horario, dia, mes, ano, status) VALUES ('".$cl."', '".$ci."', '".$ct."', '".$cc."', '".$ce."', '".$se."', '".$vl."', '".$te."','".$pt."', '".$pr."', '".$ip."', '".$hr."', '".$di."', '".$me."', '".$an."', '".$st."')";
            $stmt = $conn->prepare($cad);
                if($stmt->execute()){
					$sqli = $conn->prepare("SELECT * FROM funcionario WHERE id='$ip'");
					$sqli->execute();		  
					$exibir = $sqli->fetch(PDO::FETCH_ASSOC);
					$e = $exibir["email"];
					$m = $emailMasterServidor;
					if($e){

						$to = $e;
							$subject = 'Cliente Agendado';

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
								<strong>Ola '.$pr.' </strong> <br/><br/>
								Você tem um novo cliente agendado.<br/><br/>
								<p><strong>Cliente:	</strong> '.$cl.'</p>
								<p><strong>Serviço:	</strong> '.$se.'</p>
								<p><strong>Data:	</strong> '.$di.'/'.$me.'/'.$an.'</p>
								<p><strong>Horário:	</strong> '.$hr.'h</p>

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
							$headers .= 'From: Agendamento Online <'.$m.'>' . "\r\n";

							// Mail it
							mail($to, $subject, $message, $headers);
                    header("location:../../agenda.php");
                }else{
                    set_error_handler("error_handler");
                }
        }else{
            set_error_handler("error_handler");
        }
	 }else{
         set_error_handler("error_handler");
      }
}else{
		$pt = 0;
		$cad = "INSERT INTO agenda (nome, id_cliente, telefone, celular, email, servico, valor, tempo, pontos, profissional, id_prof, horario, dia, mes, ano, status) VALUES ('".$cl."', '".$ci."', '".$ct."', '".$cc."', '".$ce."', '".$se."', '".$vl."', '".$te."','".$pt."', '".$pr."', '".$ip."', '".$hr."', '".$di."', '".$me."', '".$an."', '".$st."')";
            $stmt = $conn->prepare($cad);
                if($stmt->execute()){
					$sqli = $conn->prepare("SELECT * FROM funcionario WHERE id='$ip'");
					$sqli->execute();		  
					$exibir = $sqli->fetch(PDO::FETCH_ASSOC);
					$e = $exibir["email"];
					$m = $emailMasterServidor;
					if($e){

						$to = $e;
							$subject = 'Cliente Agendado';

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
								<strong>Ola '.$pr.' </strong> <br/><br/>
								Você tem um novo cliente agendado.<br/><br/>
								<p><strong>Cliente:	</strong> '.$cl.'</p>
								<p><strong>Serviço:	</strong> '.$se.'</p>
								<p><strong>Data:	</strong> '.$di.'/'.$me.'/'.$an.'</p>
								<p><strong>Horário:	</strong> '.$hr.'h</p>

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
							$headers .= 'From: Agendamento Online <'.$m.'>' . "\r\n";

							// Mail it
							mail($to, $subject, $message, $headers);
                    header("location:../../agenda.php");
                }else{
                    set_error_handler("error_handler");
                }
			}else{
                  set_error_handler("error_handler");
            }
	}
    
?>