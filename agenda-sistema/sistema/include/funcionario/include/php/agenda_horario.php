<?php 
		$nome = $mfunc["id"];
		$hora = "08:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda["horario"]){ ?>
		
		<?php } else { ?>
 		
  		<option>8:00</option> 
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "08:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda2 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda2["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda["tempo"] == 40){ ?>
			
			<?php }elseif($agenda["tempo"] == 1){ ?>
			
			<?php }elseif($agenda["tempo"] == 2){ ?>
			
			<?php }else{ ?>
				<option>8:30</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "09:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda3 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda3["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda2["tempo"] == 40){ ?>
				<!---------------------->
			<?php }elseif($agenda2["tempo"] == 1){ ?>
					<!---------------------->			
			<?php }elseif($agenda["tempo"] == 2){ ?>
					<!---------------------->
			<?php }elseif($agenda2["tempo"] == 2){ ?>
					<!---------------------->
			<?php }else{ ?>
			<option>9:00</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "09:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda4 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda4["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda3["tempo"] == 40){ ?>
			<!---------------------->
			<?php }elseif($agenda3["tempo"] == 1){ ?>
			<!---------------------->			
			<?php }elseif($agenda["tempo"] == 2){ ?>
			<!---------------------->
			<?php }elseif($agenda2["tempo"] == 2){ ?>
			<!---------------------->
			<?php }elseif($agenda3["tempo"] == 2){ ?>
			<!---------------------->
			<?php }else{ ?>
			<option>9:30</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "10:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda5 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda5["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda4["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda4["tempo"] == 1){ ?>
						<!---------------------->			
			<?php }elseif($agenda2["tempo"] == 2){ ?>
			<!---------------------->
			<?php }elseif($agenda3["tempo"] == 2){ ?>
			<!---------------------->
			<?php }elseif($agenda4["tempo"] == 2){ ?>
			<!---------------------->
			<?php }else{ ?>
				<option>10:00</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "10:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda6 = mysqli_fetch_assoc($exec);
		?>
		
		<?php if($agenda6["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda5["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda5["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda3["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda4["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda5["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>10:30</option>
			<?php } ?>
  		
	  	<?php } ?>
		
		<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "11:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda7 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "11:00:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda7["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda6["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda6["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda4["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda5["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda6["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>11:00</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "11:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda8 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "11:30:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco2 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda8["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda7["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda7["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda5["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda6["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>11:30</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "12:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda9 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "12:00:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco3 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda9["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda8["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda8["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda6["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda8["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>12:00</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "12:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda10 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "12:30:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco4 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda10["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda9["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda9["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda8["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda9["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>12:30</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	
	  	<!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "13:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda11 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "13:00:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco5 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda11["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda10["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda10["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco2["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda8["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda9["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda10["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>13:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "13:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda12 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "13:30:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco6 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda12["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda11["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda11["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco3["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda9["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda10["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda11["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>13:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "14:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda13 = mysqli_fetch_assoc($exec);
		?>
		<?php 
		$idp = $mfunc["id"];
		$hora = "14:00:00";
		$sqli = "SELECT * FROM almoco WHERE id_pro='$idp' AND horario='$hora' ";
		$exec = $sql->query($sqli);
		$almoco7 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda13["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda12["tempo"] == 40){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 30){ ?>
						<!---------------------->
			<?php }elseif($agenda11["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco4["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda10["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda11["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda12["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>14:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "14:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda14 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda14["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda13["tempo"] == 40){ ?>
						<!---------------------->			
			<?php }elseif($agenda13["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco5["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda11["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda12["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda13["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>14:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "15:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda15 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda15["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda14["tempo"] == 40){ ?>
			<?php }elseif($agenda14["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco6["tempo"] == 2){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda12["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda13["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda14["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>15:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	   <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "15:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda16 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda16["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda15["tempo"] == 40){ ?>
			<?php }elseif($agenda15["tempo"] == 1){ ?>
						<!---------------------->
						<?php }elseif($almoco7["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda13["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda14["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda15["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>15:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "16:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda17 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda17["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda16["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda16["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda14["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda15["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda16["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>16:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "16:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda18 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda18["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda17["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda17["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda15["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda16["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda17["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>16:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "17:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda19 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda19["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda18["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda18["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda16["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda17["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda18["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>17:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "17:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda20 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda20["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda19["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda19["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda17["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda18["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda19["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>17:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "18:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda21 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda21["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda20["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda20["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda18["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda19["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda20["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>18:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "18:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda22 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda22["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda21["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda21["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda19["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda20["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda21["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>18:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "19:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda23 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda23["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda22["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda22["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda20["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda21["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda22["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>19:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "19:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda24 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda24["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda23["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda23["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda21["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda22["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda23["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>19:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "20:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda25 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda25["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda24["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda24["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda22["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda23["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda24["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>20:00</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "20:30:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda26 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda26["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda25["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda25["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda23["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda24["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda25["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>20:30</option>
			<?php } ?>
  		
	  	<?php } ?>
  	  
  	  <!------------------------------------------------------------------------->
	  	
	  	<?php 
		$nome = $mfunc["id"];
		$hora = "21:00:00";
		$dia = $_POST["dia"];
		$mes = $_POST["mes"];
		$ano = $_POST["ano"];
		$sqli = "SELECT * FROM agenda WHERE id_prof='$nome' AND horario='$hora' AND dia='$dia' AND mes='$mes' AND ano='$ano' ";
		$exec = $sql->query($sqli);
		$agenda27 = mysqli_fetch_assoc($exec);
		?>
		<?php if($agenda27["horario"]){ ?>
		
		<?php } else { ?>
		
			<?php if($agenda26["tempo"] == 40){ ?>
						<!---------------------->
			<?php }elseif($agenda26["tempo"] == 1){ ?>
						<!---------------------->
			<?php }elseif($agenda24["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda25["tempo"] == 2){ ?>
						<!---------------------->
			<?php }elseif($agenda26["tempo"] == 2){ ?>
						<!---------------------->
			<?php }else{ ?>
				<option>21:00</option>
			<?php } ?>
  		
	  	<?php } ?>
	  	  