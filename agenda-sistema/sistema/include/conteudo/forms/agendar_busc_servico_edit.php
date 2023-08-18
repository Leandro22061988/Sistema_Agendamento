<?php include './include/conteudo/forms/include/verifica.php' ?>
<?php if($dd == $d && $mm == $m && $aa == $a){ ?>

	<div class="container">

	 <div class="panel panel-success">
		  <div class="panel-heading"><h2>Agendamento - Buscar Serviço</h2></div>
		  <div class="panel-body">

			   <!-- Lista na Tabela serviços -->


			<!-- Fim da Lista na Tabela serviços -->
			<script>
			  $( function() {
				var availableTags = [
				  <?php  
						$sqli = "SELECT * FROM servico ORDER BY nome";
						$exec = $sql->query($sqli);

						while($servi = mysqli_fetch_assoc($exec)){
							$bus = $servi["nome"];
							echo "'".$bus."',";
						}
					?>
				];
				$( "#tags" ).autocomplete({
				  source: availableTags
				});
			  } );
			  </script>

			  <form class="form-horizontal" action="agendar_busc_func_edit.php" method="post">
				<?php 
					$id = $_GET["id"];
					$age = "SELECT * FROM agenda WHERE id='$id'";
					$exag = $sql->query($age);
					$mostra = mysqli_fetch_assoc($exag);
					?>
				  
				<div class="form-group">

				  <label class="control-label col-sm-2" for="Porcentagem">Serviços:</label>
					<div class="col-xs-6">
					<input type="text" class="form-control" id="tags" name="serv" value="<?php echo $mostra["servico"] ?>" >
					</div>
					<input type="hidden" name="agid" value="<?php echo $_GET["id"]; ?>">
				  </div>

				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				  </div>
				</div>
			  </form>
			</div>
		 </div>
	  </div>
	  
<?php }else{ ?>


	<div class="container">

	 <div class="panel panel-success">
		<div class="panel-heading">
			<h4 style="text-align: center;">Só será possível agendar se o <strong>caixa</strong> com a <strong>data de hoje</strong> estiver <strong>aberto</strong>. </h4>
		</div>
	  </div>
	</div>
	
<?php } ?>