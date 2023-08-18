<?php require_once('php/controle.php') ?>
<?php 
	
	if($_POST["pag"] == "n"){
		
		$s = $_POST['status'];
		$id = $_POST['id'];
		$f = $_POST['id_prof'];
		$v = $_POST['valor'];
		$c = $_POST['id_c'];
		$st = "Agendado";
		if(isset($_POST["parc"])){ 
			$parc = $_POST["parc"];
			$vparc = $_POST["vparc"];
		}else{
			$parc = "";
			$vparc = "";
		} 
		$d = date("d");
		$m = date("m");
		$a = date("Y");
		
		$p = "---";
		$z = 0;
		
		$sqli = "SELECT * FROM agenda WHERE id='$id'";
		$exec = $sql->query($sqli);
		$mostra = mysqli_fetch_assoc($exec);
		$se = $mostra["servico"];
		$dia = $mostra["dia"];
		$mes = $mostra["mes"];
		$ano = $mostra["ano"];
		
		$sqlc = "UPDATE agenda SET status='$s', meio_pg='$p', parcelas='$parc', val_parcelas='$vparc', pontos='$z' WHERE id='$id' and status='$st' and dia='$d' and mes='$m' and ano='$a'";
		if($sql->query($sqlc) === true){
			
				$delete = "DELETE FROM expira_pontos WHERE id_cliente=$c and dia='$dia' and mes='$mes' and ano='$ano' and servico='$se'";
				if($exc = $sql->query($delete)){
			
					header("location:../../pag_modulo.php?v=$v&m=$p&id=$c");
			}
		}else{
			header("location:../../agenda_func_st.php?st=erro");
		}
		
	}else{

		if($_POST['id_prof']){

			$s = $_POST['status'];
			$id = $_POST['id'];
			$f = $_POST['id_prof'];
			$v = $_POST['valor'];
			$c = $_POST['id_c'];
			$st = "Agendado";
			if(isset($_POST["parc"])){ 
				$parc = $_POST["parc"];
				$vparc = $_POST["vparc"];
			}else{
				$parc = "";
				$vparc = "";
			} 
			$d = date("d");
			$m = date("m");
			$a = date("Y");

			if($_POST["pag"] == "ps"){
				$p = "PagSeguro";
			}elseif($_POST["pag"] == "mp"){
				$p = "Mercado Pago";
			}elseif($_POST["pag"] == "d"){
				$p = "Dinheiro";
			}elseif($_POST["pag"] == "c"){
				$p = "Cartão";
			}elseif($_POST["pag"] == "p"){
				$p = "Promissória";
			}elseif($_POST["pag"] == "n"){
				$p = "---";
			}

			$sqlc = "UPDATE agenda SET valor='$v', status='$s', meio_pg='$p', parcelas='$parc', val_parcelas='$vparc' WHERE id_cliente='$c' and id_prof='$f' and status='$st' and dia='$d' and mes='$m' and ano='$a'";
			if($sql->query($sqlc) === true){

				if($_POST["pag"] == "p"){
					$sqlig = "SELECT * FROM agenda WHERE id_cliente='$c' and id_prof='$f' and dia='$d' and mes='$m' and ano='$a'";
					$execg = $sql->query($sqlig);
					$ag = mysqli_fetch_assoc($execg);
					
					$serv = $ag["servico"];
					
					$sqlia = "SELECT * FROM cliente WHERE id='$c'";
					$execa = $sql->query($sqlia);
					$cliente = mysqli_fetch_assoc($execa);

					$cli = $cliente["nome"];

					$sqlpr = "SELECT * FROM promissoria ORDER BY id DESC";
					$exepr = $sql->query($sqlpr);
					$promis = mysqli_fetch_assoc($exepr);	

						$dia = date('d');
						$mes = date('m');
						$ano = date('Y');

						if($promis["id"] == 0 || $promis["id"] == null){
							$n = 1;
						}else{
							$n = $promis["id"] + 1;
						}
						$cod = strtotime(date("d/m/Y")).$n;
						$dat = $dia."-".$mes."-".$ano;
						$venc = date('d-m-Y', strtotime('+30 days', strtotime($dat)));
						$venci = date('d/m/Y', strtotime('+30 days', strtotime($dat)));
						$paga = date("d/m/Y");

					$sqlp = "INSERT INTO promissoria (codigo, cliente, id_cliente, id_prof, servico, valor, parcela, data_ini, vencimento, pagamento) VALUES ('".$cod."', '".$cli."',  '".$c."', '".$f."', '".$serv."', '".$vparc."', '".$parc."', '".$paga."', '".$venc."', '".$venci."')";
					if($sql->query($sqlp) == true){

						header("location:../../pag_modulo.php?v=$v&m=$p&id=$c");
					}
				}else{
					header("location:../../pag_modulo.php?v=$v&m=$p&id=$c");
				}
				

			}else{
				header("location:../../agenda_func_st.php?st=erro");
			}

		}elseif($_POST['id_c']){

			$s = $_POST['status'];
			$id = $_POST['id'];
			$v = $_POST['valor'];
			$c = $_POST['id_c'];
			$st = "Agendado";
			if(isset($_POST["parc"])){ 
				$parc = $_POST["parc"];
				$vparc = $_POST["vparc"];
			}else{
				$parc = "";
				$vparc = "";
			}
			$d = date("d");
			$m = date("m");
			$a = date("Y");

			if($_POST["pag"] == "ps"){
				$p = "PagSeguro";
			}elseif($_POST["pag"] == "mp"){
				$p = "Mercado Pago";
			}elseif($_POST["pag"] == "d"){
				$p = "Dinheiro";
			}elseif($_POST["pag"] == "c"){
				$p = "Cartão";
			}elseif($_POST["pag"] == "p"){
				$p = "Promissória";
			}elseif($_POST["pag"] == "n"){
				$p = "---";
			}

			$sqlc = "UPDATE agenda SET valor='$v', status='$s', meio_pg='$p', parcelas='$parc', val_parcelas='$vparc' WHERE id_cliente='$c' and status='$st' and dia='$d' and mes='$m' and ano='$a'";
			if($sql->query($sqlc) === true){
				
				if($_POST["pag"] == "p"){
					$sqlig = "SELECT * FROM agenda WHERE id_cliente='$c' and id_prof='$f' and dia='$d' and mes='$m' and ano='$a'";
					$execg = $sql->query($sqlig);
					$ag = mysqli_fetch_assoc($execg);
					
					$serv = $ag["servico"];					
					
					$sqlia = "SELECT * FROM cliente WHERE id='$c'";
					$execa = $sql->query($sqlia);
					$cliente = mysqli_fetch_assoc($execa);

					$cli = $cliente["nome"];

					$sqlpr = "SELECT * FROM promissoria ORDER BY id DESC";
					$exepr = $sql->query($sqlpr);
					$promis = mysqli_fetch_assoc($exepr);	

						$dia = date('d');
						$mes = date('m');
						$ano = date('Y');

						if($promis["id"] == 0 || $promis["id"] == null){
							$n = 1;
						}else{
							$n = $promis["id"] + 1;
						}
						$cod = strtotime(date("d/m/Y")).$n;
						$dat = $dia."-".$mes."-".$ano;
						$venc = date('d-m-Y', strtotime('+30 days', strtotime($dat)));
						$venci = date('d/m/Y', strtotime('+30 days', strtotime($dat)));
						$paga = date("d/m/Y");

					$sqlp = "INSERT INTO promissoria (codigo, cliente, id_cliente, id_prof, servico, valor, parcela, data_ini, vencimento, pagamento) VALUES ('".$cod."', '".$cli."',  '".$c."', '".$f."', '".$serv."', '".$vparc."', '".$parc."', '".$paga."', '".$venc."', '".$venci."')";
					if($sql->query($sqlp) == true){

						header("location:../../pag_modulo.php?v=$v&m=$p&id=$c");
					}
				}else{
					header("location:../../pag_modulo.php?v=$v&m=$p&id=$c");
				}
				

			}else{
				header("location:../../agenda_func_st.php?st=erro");
			}
		}
	}
?>