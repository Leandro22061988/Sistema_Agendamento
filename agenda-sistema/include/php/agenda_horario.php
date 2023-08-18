<?php 
    $stBt = "success";
    $stBts = "secondary";
    $stBti = "info";
?>
<?php 
	$horaDt = "12:00:00";
    $Bdiat = $conn->prepare("SELECT * FROM agenda WHERE id_prof='$idProf' AND tempo='$horaDt' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
	$Bdiat->execute();
	$diAconta = $Bdiat->rowCount();
	$diaTodo = $Bdiat->fetch(PDO::FETCH_ASSOC);	
	
	if($diaTodo["tempo"]){
		echo "<h3 style='text-align: center;'>Sem horários disponíveis</h3>";
	}else{
?>
<?php 
		$hora = "08:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta = $sqli->rowCount();
        $oitoH = strtotime($hora);
		?>
		<?php if($agenda["horario"]){ ?>
		<?php }elseif($oitoH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
 		<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "08:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
  		<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "08:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda2 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta2 = $sqli->rowCount();
        $oitoTrH = strtotime($hora);
		?>
		<?php if($agenda2["horario"]){ ?>
		<?php }elseif($oitoTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
			<?php if($agenda["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "03:00:00"){ ?>
			
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "09:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "09:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda3 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta3 = $sqli->rowCount();
        $noveH = strtotime($hora);
		?>
		<?php if($agenda3["horario"]){ ?>
		<?php }elseif($noveH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!-----------8:30----------->
			<?php if($agenda2["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "03:00:00"){ ?>
					<!----------8:00------------>			
			<?php }elseif($agenda["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "03:00:00"){ ?>
					<!---------------------->
			<?php }else{ ?>
			<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "09:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "09:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda4 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta4 = $sqli->rowCount();
        $noveTrH = strtotime($hora);
		?>
		<?php if($agenda4["horario"]){ ?>
		<?php }elseif($noveTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
					<!----------9:00------------>
			<?php if($agenda3["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "03:00:00"){ ?>
					<!----------8:30------------>			
			<?php }elseif($agenda2["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "03:00:00"){ ?>
					<!----------8:00------------>
			<?php }elseif($agenda["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "03:00:00"){ ?>
					<!---------------------->
			<?php }else{ ?>
			<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "10:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
	  	<?php } ?>
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "10:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda5 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta5 = $sqli->rowCount();
        $dezH = strtotime($hora);
		?>
		<?php if($agenda5["horario"]){ ?>
		<?php }elseif($dezH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
					<!----------9:30h------------>
			<?php if($agenda4["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "03:00:00"){ ?>
					<!----------9:00h------------>			
			<?php }elseif($agenda3["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "03:00:00"){ ?>
					<!----------8:30h------------>
			<?php }elseif($agenda2["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "03:00:00"){ ?>
					<!----------8:00h------------>
			<?php }elseif($agenda["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda["tempo"] == "03:00:00"){ ?>
					<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "10:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "10:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda6 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta6 = $sqli->rowCount();
		$dezTrH = strtotime($hora);
		?>
		<?php if($agenda6["horario"]){ ?>
		<?php }elseif($dezTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------10:00h------------>
			<?php if($agenda5["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "03:00:00"){ ?>
					<!----------9:30h------------>
			<?php }elseif($agenda4["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "03:00:00"){ ?>
					<!----------9:00h------------>
			<?php }elseif($agenda3["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "03:00:00"){ ?>
					<!----------8:30h------------>
			<?php }elseif($agenda2["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda2["tempo"] == "03:00:00"){ ?>
					<!----------8:00h------------>
			<?php }elseif($agenda["tempo"] == "03:00:00"){ ?>
					<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "11:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
		
		<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "11:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda7 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta7 = $sqli->rowCount();
		$onzeH = strtotime($hora);
		?>
		<?php 
		$hora = "11:00:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda7["horario"]){ ?>
		<?php }elseif($onzeH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>				
			
					<!----------10:30h------------>
			<?php if($agenda6["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "01:00:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "03:00:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco["tempo"] == 30){ ?>
				<?php }elseif($almoco["tempo"] == 1){ ?>
				<?php }elseif($almoco["tempo"] == 2){ ?>
					<!----------10:00h------------>
			<?php }elseif($agenda5["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "03:00:00"){ ?>
					<!----------9:30h------------>
			<?php }elseif($agenda4["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "03:00:00"){ ?>
					<!----------9:00h------------>
			<?php }elseif($agenda3["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda3["tempo"] == "03:00:00"){ ?>
					<!----------8:30h------------>
			<?php }elseif($agenda2["tempo"] == "03:00:00"){ ?>

			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "11:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
		
		
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "11:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda8 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta8 = $sqli->rowCount();
		$onzeTrH = strtotime($hora);
		?>
		
		<?php 
		$hora = "11:30:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco2 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda8["horario"]){ ?>
		<?php }elseif($onzeTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
					<!----------11:00h------------>
			<?php if($agenda7["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco2["tempo"] == 30){ ?>
			<?php }elseif($agenda7["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco["tempo"] == 1){ ?>
				<?php }elseif($almoco["tempo"] == 2){ ?>
				<?php }elseif($almoco2["tempo"] == 1){ ?>
				<?php }elseif($almoco2["tempo"] == 2){ ?>
			<?php }elseif($agenda7["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda7["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "03:00:00"){ ?>
					<!----------10:30h------------>
			<?php }elseif($agenda6["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "03:00:00"){ ?>
					<!----------10:00h------------>
			<?php }elseif($agenda5["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "03:00:00"){ ?>
					<!----------9:30h------------>
			<?php }elseif($agenda4["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda4["tempo"] == "03:00:00"){ ?>
					<!----------9:00h------------>
			<?php }elseif($agenda3["tempo"] == "03:00:00"){ ?>

			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "12:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "12:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda9 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta9 = $sqli->rowCount();
		$dozeH = strtotime($hora);
		?>
		<?php
		$hora = "12:00:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco3 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda9["horario"]){ ?>
		<?php }elseif($dozeH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------11:30h------------>
			<?php if($agenda8["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco3["tempo"] == 30){ ?>
			<?php }elseif($agenda8["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco["tempo"] == 2){ ?>
				<?php }elseif($almoco2["tempo"] == 1){ ?>
				<?php }elseif($almoco2["tempo"] == 2){ ?>
				<?php }elseif($almoco3["tempo"] == 1){ ?>
				<?php }elseif($almoco3["tempo"] == 2){ ?>
			<?php }elseif($agenda8["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda8["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "03:00:00"){ ?>
					<!----------11:00h------------>
			<?php }elseif($agenda7["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "03:00:00"){ ?>
					<!----------10:30h------------>
			<?php }elseif($agenda6["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "03:00:00"){ ?>
					<!----------10:00h------------>
			<?php }elseif($agenda5["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda5["tempo"] == "03:00:00"){ ?>
					<!----------9:30h------------>
			<?php }elseif($agenda4["tempo"] == "03:00:00"){ ?>

			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "12:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "12:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda10 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta10 = $sqli->rowCount();
		$dozeTrH = strtotime($hora);
		?>
		<?php
		$hora = "12:30:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco4 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda10["horario"]){ ?>
		<?php }elseif($dozeTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------12:00h------------>
			<?php if($agenda9["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco4["tempo"] == 30){ ?>
			<?php }elseif($agenda9["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco["tempo"] == 2){ ?>
				<?php }elseif($almoco2["tempo"] == 2){ ?>
				<?php }elseif($almoco3["tempo"] == 1){ ?>
				<?php }elseif($almoco3["tempo"] == 2){ ?>
				<?php }elseif($almoco4["tempo"] == 1){ ?>
				<?php }elseif($almoco4["tempo"] == 2){ ?>
			<?php }elseif($agenda9["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda9["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "03:00:00"){ ?>
					<!----------11:30h------------>
			<?php }elseif($agenda8["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "03:00:00"){ ?>
					<!----------11:00h------------>
			<?php }elseif($agenda7["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "03:00:00"){ ?>
					<!----------10:30h------------>
			<?php }elseif($agenda6["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda6["tempo"] == "03:00:00"){ ?>
					<!----------10:00h------------>
			<?php }elseif($agenda5["tempo"] == "03:00:00"){ ?>

			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "13:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "13:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda11 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta11 = $sqli->rowCount();
		$trezeH = strtotime($hora);
		?>
		<?php 
		$hora = "13:00:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco5 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda11["horario"]){ ?>
		<?php }elseif($trezeH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------12:30h------------>
			<?php if($agenda10["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco5["tempo"] == 30){ ?>
			<?php }elseif($agenda10["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco2["tempo"] == 2){ ?>
				<?php }elseif($almoco3["tempo"] == 2){ ?>
				<?php }elseif($almoco4["tempo"] == 1){ ?>
				<?php }elseif($almoco4["tempo"] == 2){ ?>
				<?php }elseif($almoco5["tempo"] == 1){ ?>
				<?php }elseif($almoco5["tempo"] == 2){ ?>
			<?php }elseif($agenda10["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda10["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "03:00:00"){ ?>
					<!----------12:00h------------>
			<?php }elseif($agenda9["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "03:00:00"){ ?>
					<!----------11:30h------------>
			<?php }elseif($agenda8["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "03:00:00"){ ?>
					<!----------11:00h------------>
			<?php }elseif($agenda7["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda7["tempo"] == "03:00:00"){ ?>
					<!----------10:30h------------>
			<?php }elseif($agenda6["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "13:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "13:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda12 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta13 = $sqli->rowCount();
		$trezeTrH = strtotime($hora);
		?>
		<?php
		$hora = "13:30:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco6 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda12["horario"]){ ?>
		<?php }elseif($trezeTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
				<!----------13:00h------------>
			<?php if($agenda11["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco6["tempo"] == 30){ ?>
			<?php }elseif($agenda11["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco3["tempo"] == 2){ ?>
				<?php }elseif($almoco4["tempo"] == 2){ ?>
				<?php }elseif($almoco5["tempo"] == 1){ ?>
				<?php }elseif($almoco5["tempo"] == 2){ ?>
				<?php }elseif($almoco6["tempo"] == 1){ ?>
				<?php }elseif($almoco6["tempo"] == 2){ ?>
			<?php }elseif($agenda11["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda11["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "03:00:00"){ ?>
					<!----------12:30h------------>
			<?php }elseif($agenda10["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "03:00:00"){ ?>
					<!----------12:00h------------>
			<?php }elseif($agenda9["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "03:00:00"){ ?>
					<!----------11:30h------------>
			<?php }elseif($agenda8["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda8["tempo"] == "03:00:00"){ ?>
					<!----------11:00h------------>
			<?php }elseif($agenda7["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "14:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "14:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda13 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta13 = $sqli->rowCount();
		$quatorzeH = strtotime($hora);
		?>
		<?php
		$hora = "14:00:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco7 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda13["horario"]){ ?>
		<?php }elseif($quatorzeH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------13:30h------------>
			<?php if($agenda12["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco7["tempo"] == 30){ ?>
			<?php }elseif($agenda12["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco4["tempo"] == 2){ ?>
				<?php }elseif($almoco5["tempo"] == 2){ ?>
				<?php }elseif($almoco6["tempo"] == 1){ ?>
				<?php }elseif($almoco6["tempo"] == 2){ ?>
				<?php }elseif($almoco7["tempo"] == 1){ ?>
				<?php }elseif($almoco7["tempo"] == 2){ ?>
			<?php }elseif($agenda12["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda12["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "03:00:00"){ ?>
					<!----------13:00h------------>
			<?php }elseif($agenda11["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "03:00:00"){ ?>
					<!----------12:30h------------>
			<?php }elseif($agenda10["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "03:00:00"){ ?>
					<!----------12:00h------------>
			<?php }elseif($agenda9["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda9["tempo"] == "03:00:00"){ ?>
					<!----------11:30h------------>
			<?php }elseif($agenda8["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "14:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "14:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda14 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta14 = $sqli->rowCount();
		$quatorzeTrH = strtotime($hora);
		?>
		<?php 
		$hora = "14:30:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco8 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		
		<?php if($agenda14["horario"]){ ?>
		<?php }elseif($quatorzeTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------14:00h------------>
			<?php if($agenda13["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco8["tempo"] == 30){ ?>
			<?php }elseif($agenda13["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco5["tempo"] == 2){ ?>
				<?php }elseif($almoco6["tempo"] == 2){ ?>
				<?php }elseif($almoco7["tempo"] == 1){ ?>
				<?php }elseif($almoco7["tempo"] == 2){ ?>
				<?php }elseif($almoco8["tempo"] == 1){ ?>
				<?php }elseif($almoco8["tempo"] == 2){ ?>
			<?php }elseif($agenda13["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda13["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "03:00:00"){ ?>
					<!----------13:30h------------>
			<?php }elseif($agenda12["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "03:00:00"){ ?>
					<!----------13:00h------------>
			<?php }elseif($agenda11["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "03:00:00"){ ?>
					<!----------12:30h------------>
			<?php }elseif($agenda10["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda10["tempo"] == "03:00:00"){ ?>
					<!----------12:00h------------>
			<?php }elseif($agenda9["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "15:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "15:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda15 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta15 = $sqli->rowCount();
		$quinzeH = strtotime($hora);
		?>
		<?php 
		$hora = "15:00:00";
		$sqli = $conn->prepare("SELECT * FROM almoco WHERE id_pro='$idProf' AND horario='$hora' ");
		$sqli->execute();
		$almoco9 = $sqli->fetch(PDO::FETCH_ASSOC);
		?>
		<?php if($agenda15["horario"]){ ?>
		<?php }elseif($quinzeH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------14:30h------------>
			<?php if($agenda14["tempo"] == "00:40:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco9["tempo"] == 30){ ?>
			<?php }elseif($agenda14["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco6["tempo"] == 2){ ?>
				<?php }elseif($almoco7["tempo"] == 2){ ?>
				<?php }elseif($almoco8["tempo"] == 1){ ?>
				<?php }elseif($almoco8["tempo"] == 2){ ?>
				<?php }elseif($almoco9["tempo"] == 1){ ?>
				<?php }elseif($almoco9["tempo"] == 2){ ?>
			<?php }elseif($agenda14["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda14["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "03:00:00"){ ?>
					<!----------14:00h------------>
			<?php }elseif($agenda13["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "03:00:00"){ ?>
					<!----------13:30h------------>
			<?php }elseif($agenda12["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "03:00:00"){ ?>
					<!----------13:00h------------>
			<?php }elseif($agenda11["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda11["tempo"] == "03:00:00"){ ?>
					<!----------12:30h------------>
			<?php }elseif($agenda10["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "15:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	   <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "15:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda16 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta16 = $sqli->rowCount();
		$quinzeTrH = strtotime($hora);
		?>
		<?php if($agenda16["horario"]){ ?>
		<?php }elseif($quinzeTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		
		<?php } else { ?>
		
					<!----------15:00h------------>
			<?php if($agenda15["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco7["tempo"] == 2){ ?>
				<?php }elseif($almoco8["tempo"] == 2){ ?>
				<?php }elseif($almoco9["tempo"] == 1){ ?>
				<?php }elseif($almoco9["tempo"] == 2){ ?>
			<?php }elseif($agenda15["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda15["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "03:00:00"){ ?>
					<!----------14:30h------------>
			<?php }elseif($agenda14["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "03:00:00"){ ?>
					<!----------14:00h------------>
			<?php }elseif($agenda13["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "03:00:00"){ ?>
					<!----------13:30h------------>
			<?php }elseif($agenda12["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda12["tempo"] == "03:00:00"){ ?>
					<!----------13:00h------------>
			<?php }elseif($agenda11["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "16:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "16:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda17 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta17 = $sqli->rowCount();
		$dezesseisH = strtotime($hora);
		?>
		<?php if($agenda17["horario"]){ ?>
		
		<?php }elseif($dezesseisH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------15:30h------------>
			<?php if($agenda16["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco8["tempo"] == 2){ ?>
				<?php }elseif($almoco9["tempo"] == 2){ ?>
			<?php }elseif($agenda16["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda16["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "03:00:00"){ ?>
					<!----------15:00h------------>
			<?php }elseif($agenda15["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "03:00:00"){ ?>
					<!----------14:30h------------>
			<?php }elseif($agenda14["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "03:00:00"){ ?>
					<!----------14:00h------------>
			<?php }elseif($agenda13["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda13["tempo"] == "03:00:00"){ ?>
					<!----------13:30h------------>
			<?php }elseif($agenda12["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "16:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "16:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda18 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta18 = $sqli->rowCount();
		$dezesseisTrH = strtotime($hora);
		?>
		<?php if($agenda18["horario"]){ ?>		
		<?php }elseif($dezesseisTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------16:00h------------>
			<?php if($agenda17["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "00:50:00"){ ?>
					<!----------Almoço------------>
				<?php }elseif($almoco9["tempo"] == 2){ ?>
			<?php }elseif($agenda17["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda17["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "03:00:00"){ ?>
					<!----------15:30h------------>
			<?php }elseif($agenda16["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "03:00:00"){ ?>
					<!----------15:00h------------>
			<?php }elseif($agenda15["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "03:00:00"){ ?>
					<!----------14:30h------------>
			<?php }elseif($agenda14["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda14["tempo"] == "03:00:00"){ ?>
					<!----------14:00h------------>
			<?php }elseif($agenda13["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "17:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "17:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda19 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta19 = $sqli->rowCount();
		$dezeseteH = strtotime($hora);
		?>
		<?php if($agenda19["horario"]){ ?>
		<?php }elseif($dezeseteH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------16:30h------------>
			<?php if($agenda18["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda18["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "03:00:00"){ ?>
					<!----------16:00h------------>
			<?php }elseif($agenda17["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "03:00:00"){ ?>
					<!----------15:30h------------>
			<?php }elseif($agenda16["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "03:00:00"){ ?>
					<!----------15:00h------------>
			<?php }elseif($agenda15["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda15["tempo"] == "03:00:00"){ ?>
					<!----------14:30h------------>
			<?php }elseif($agenda14["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "17:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
		
	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "17:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda20 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta20 = $sqli->rowCount();
		$dezeseteH = strtotime($hora);
		?>
		<?php if($agenda20["horario"]){ ?>		
		<?php }elseif($dezeseteH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------17:00h------------>
			<?php if($agenda19["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda19["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "03:00:00"){ ?>
					<!----------16:30h------------>
			<?php }elseif($agenda18["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "03:00:00"){ ?>
					<!----------16:00h------------>
			<?php }elseif($agenda17["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "03:00:00"){ ?>
					<!----------15:30h------------>
			<?php }elseif($agenda16["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda16["tempo"] == "03:00:00"){ ?>
					<!----------15:00h------------>
			<?php }elseif($agenda15["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "18:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "18:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda21 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta21 = $sqli->rowCount();
		$dezoitoH = strtotime($hora);
		?>
		<?php if($agenda21["horario"]){ ?>
		<?php }elseif($dezoitoH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------17:30h------------>
			<?php if($agenda20["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda20["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "03:00:00"){ ?>
					<!----------17:00h------------>
			<?php }elseif($agenda19["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "03:00:00"){ ?>
					<!----------16:30h------------>
			<?php }elseif($agenda18["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "03:00:00"){ ?>
					<!----------16:00h------------>
			<?php }elseif($agenda17["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda17["tempo"] == "03:00:00"){ ?>
					<!----------15:30h------------>
			<?php }elseif($agenda16["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "18:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php
		$hora = "18:30:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda22 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta22 = $sqli->rowCount();
		$dezoitoTrH = strtotime($hora);
		?>
		<?php if($agenda22["horario"]){ ?>
		<?php }elseif($dezoitoTrH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------18:00h------------>
			<?php if($agenda21["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda21["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "03:00:00"){ ?>
					<!----------17:30h------------>
			<?php }elseif($agenda20["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "03:00:00"){ ?>
					<!----------17:00h------------>
			<?php }elseif($agenda19["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "03:00:00"){ ?>
					<!----------16:30h------------>
			<?php }elseif($agenda18["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda18["tempo"] == "03:00:00"){ ?>
					<!----------16:00h------------>
			<?php }elseif($agenda17["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "19:00:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>
		
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$hora = "19:00:00";
		$sqli = $conn->prepare("SELECT * FROM agenda  WHERE id_prof='$idProf' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ");
		$sqli->execute();
		$agenda23 = $sqli->fetch(PDO::FETCH_ASSOC);
		$conta23 = $sqli->rowCount();
		$dezenoveH = strtotime($hora);
		?>
		<?php if($agenda23["horario"]){ ?>
		<?php }elseif($dezenoveH <= $horahoje && $dia == $datahoje[0] && $mes == $datahoje[1] && $ano == $datahoje[2]){ ?>
		<?php } else { ?>
		
					<!----------18:30h------------>
			<?php if($agenda22["tempo"] == "00:40:00"){ ?>
			<?php }elseif($agenda22["tempo"] == "00:50:00"){ ?>
			<?php }elseif($agenda22["tempo"] == "01:00:00"){ ?>				
			<?php }elseif($agenda22["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda22["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda22["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda22["tempo"] == "03:00:00"){ ?>
					<!----------18:00h------------>
			<?php }elseif($agenda21["tempo"] == "01:30:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda21["tempo"] == "03:00:00"){ ?>
					<!----------17:30h------------>
			<?php }elseif($agenda20["tempo"] == "02:00:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda20["tempo"] == "03:00:00"){ ?>
					<!----------17:00h------------>
			<?php }elseif($agenda19["tempo"] == "02:30:00"){ ?>
			<?php }elseif($agenda19["tempo"] == "03:00:00"){ ?>
					<!----------16:30h------------>
			<?php }elseif($agenda18["tempo"] == "03:00:00"){ ?>
						<!---------------------->
			<?php }else{ ?>
				<a href="agendamento.php?p=<?php echo $nFunc ?>&i=<?php echo $idProf; ?>&f=<?php echo $fU; ?>&d=<?php echo $dia; ?>&m=<?php echo $mes; ?>&a=<?php echo $ano; ?>&h=<?php echo $hora; ?>&ph=<?php echo "19:30:00"; ?>"><button type="button" class="btn btn-outline-<?php echo $stBt; ?> btn-lg btn-block botaoAg"><?php echo $hora; ?></button></a>
			<?php } ?>
  		
	  	<?php } ?>	
	  	
	  <?php } ?>	