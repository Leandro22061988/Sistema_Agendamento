<script type="text/javascript">
	
function poup(pagina){
	window.open(pagina, "", "width=830,height=200,left=" + (document.documentElement.clientWidth - 830) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
function poupe(pagina){
	window.open(pagina, "", "width=830,height=600,left=" + (document.documentElement.clientWidth - 830) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
function pou(pagina){
	window.open(pagina, "", "width=400,height=600,left=" + (document.documentElement.clientWidth - 830) / 2 + ",top=" + (document.documentElement.clientHeight - 200) / 2);
}
	
</script>

<div class="container">  
<div class="row">
<div class="col-sm-12">
<div class="panel panel-warning">
     
      <div class="panel-heading"><h4>Agenda do(a) Funcionario(a) - Pesquisa
      <?php if(isset($_GET["dia"])){ ?>
      <strong> - Agenda de: <?php echo $_GET["dia"]."/".$_GET["mes"]."/".$_GET["ano"]; ?></strong>
      <?php }else{} ?>
      </h4>
      </div>
      
    <div class="panel-body">

	<div class="btn-group">
	<a href="agenda_func.php?id=<?php echo $_GET["id"]; ?>">
	<button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
	Agenda do dia</button></a>
	</div> 
	</div>
  
   <div class="panel-body">
  
	<form>
    <div class="form-group row">
      <div class="col-xs-1">
        <label for="sel1">Dia:</label>
		  <select class="form-control" id="sel1" name="dia">
			<?php $m = 1;
			while($m<=31){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>		
		  </select>
      </div>
      <div class="col-xs-1">
        <label for="sel1">Mês:</label>
		  <select class="form-control" id="sel1" name="mes">
			<?php $m = 1;
			while($m<=12){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>	
		  </select>
      </div>
      <div class="col-xs-2">
        <label for="sel1">Ano:</label>
		  <select class="form-control" id="sel1" name="ano">
			<?php $m = 2018;
			while($m<=2036){

				echo "<option>$m</option>";
				$m++;
			}
			 ?>		
		  </select>
     <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
  </form>
</div>

<div class="panel-body">

<?php 
	if(isset($_GET["dia"])){
	$id = $_GET["id"];
	$d = $_GET["dia"];
	$m = $_GET["mes"];
	$a = $_GET["ano"];
	$sqli = "SELECT * FROM agenda WHERE id_prof='$id' AND dia='$d' AND mes='$m' AND ano='$a' ORDER BY horario ASC " ;
	$exec = $sql->query($sqli);
	
	while($exibir = mysqli_fetch_array($exec)){
		
		if($exibir["status"] == "Agendado"){
			$dimdim = "<span class='text-danger'><strong>".$exibir["status"]."</strong></span>";
		}else{
			$dimdim = "<span class='text-success'><strong>".$exibir["status"]."</strong></span>";
		}
		
?>

  <div class='panel panel-default'>
  	<div class='panel-heading'>
		<div class='row'>
		
			<div class='col-sm-2'>
			<?php echo $exibir["horario"]; ?> 
				-  
        	<a href='agendar_busc_servico_edit.php?id=<?php echo $exibir["id"]; ?>' data-toggle='tooltip' title='Editar'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a>
			<?php if($_SESSION["nivel"] == 1){ ?> - 
			<a href='include/exclui/agenda_func.php?rg=<?php echo $exibir["id"]?>&id=<?php echo $_GET["id"] ?>' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
			<?php }else{} ?>
			</div>
			
			<div class='col-sm-4'>
			<!-- Verificação(if) para saber se existe agendamento para o horário informado -->
			
				<?php echo $exibir["nome"]; ?> - 
			<a href='#' onclick='poupe("cliente_historico_p.php?id=<?php echo $exibir['id_cliente']; ?>&n=<?php echo $exibir["nome"]; ?>")' data-toggle='tooltip' title='Histórico de Serviços'>
				<i class='fa fa-history' aria-hidden='true'></i>
			</a> - 
			<?php if($exibir["descricao"] == null){ ?>

				<a href="#" data-toggle="collapse" data-target="<?php echo "#".$exibir['id']; ?>">
					Adicionar Descrição</a>
				
			<?php }else{ ?>
				
				<a href="#" data-toggle="collapse" data-target="<?php echo "#".$exibir['id']; ?>">
					Editar Descrição</a>
			<?php }?>
				
			</div>
			<div class='col-sm-3'><kbd>Serviço:</kbd>
			
				<?php echo $exibir["servico"]; ?>
				
				<a href='#' onclick='pou("recibo.php?id=<?php echo $exibir['id_cliente']?>&d=<?php echo $exibir["dia"] ?>&m=<?php echo $exibir["mes"] ?>&a=<?php echo $exibir["ano"] ?>")' data-toggle='tooltip' title='Recibo'>
				<i class='fa fa-file-text' aria-hidden='true'></i>
				</a> - 
				<a href='#' onclick='pou("print_fid_cliente.php?id=<?php echo $exibir['id_cliente']?>")' data-toggle='tooltip' title='Imprimir pontos de Fidelidade'>
					<i class='fa fa-handshake-o' aria-hidden='true'></i></a>
			</div>
			
			<div class='col-sm-3'><kbd>Status:</kbd> 
			
				<!-- Verificar status e exibir dentro de cores personalizadas-->
				
			<?php echo $dimdim; ?>
				
			<!--<a href='@' data-toggle='tooltip' title='Editar'>
			</a>-->
			
			
			</div>
			
		</div><!--row-->
		
	</div><!--panel-heading-->
  </div><!--panel panel-default-->
	
	<?php 
		if($exibir["descricao"] == null){
				echo "
				
						<div id='".$exibir["id"]."' class='collapse'>
						
							<form name='formulario' method='post' action='include/edit/descricao.php'>
								 <div class='form-group'>
								  <label for='comment'>Descrição:</label>
								  <textarea name='desc' class='form-control' rows='5' id='comment'></textarea>
								</div> 
								<input type='hidden' name='id' value='".$exibir["id"]."'>
								<input type='hidden' name='id_p' value='".$exibir["id_prof"]."'>
								<input type='submit' class='btn btn-default' value='Cadastrar'>
							 </form>
							 
						</div>
				";
			}else{
				echo "
						<div id='".$exibir["id"]."' class='collapse'>
						
							<form name='formulario' method='post' action='include/edit/descricao.php'>
								 <div class='form-group'>
								  <label for='comment'>Descrição:</label>
								  <textarea name='desc' class='form-control' rows='5' id='comment'>".$exibir["descricao"]."</textarea>
								</div> 
								<input type='hidden' name='id' value='".$exibir["id"]."'>
								<input type='hidden' name='id_p' value='".$exibir["id_prof"]."'>
								<input type='submit' class='btn btn-default' value='Editar'>
							 </form>
							 
						</div>
				";
			}
	?>
	
  <?php	} } ?>
</div>
</div>
</div>
</div>