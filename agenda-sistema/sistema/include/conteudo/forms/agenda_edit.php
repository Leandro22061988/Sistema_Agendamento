<?php include './include/conteudo/forms/include/verifica.php' ?>
<?php if($dd == $d && $mm == $m && $aa == $a){ ?>
 
 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Editar Agendamento</h2></div>
      <div class="panel-body">


  <form name="agendar" class="form-horizontal" action="include/edit/agenda.php" method="post">
  
   <?php include './include/buscas/agenda_edit.php';?>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $mostra["nome"];?>" readonly>
      </div>
    </div>    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefone" value="<?php echo $mostra["telefone"];?>" name="telefone"  readonly>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="celular">celular:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="celular" value="<?php echo $mostra["celular"];?>" name="celular" readonly>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $mostra["email"];?>" readonly >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="servico">Serviço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="servico" name="servico" value="<?php echo $mserv["nome"];?>" readonly >
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="valor">Valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $mserv["valor"];?>" readonly >
      </div>
    </div>
    
    
    		<!-- Busca na Tabela funcionários -->
		
		
		<!-- Fim da Busca na Tabela funcionários -->
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="profissional">Profissional:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="profissional" name="profissional" value="<?php echo $mfunc["nome"];?>" readonly >
      </div>
      
	  </div>
	  
	   <div class="form-group">
     
      <label class="control-label col-sm-2" for="horarios">Horários:</label>
     <div class="col-xs-8">
		<span class="text-danger"><strong>
		Cuidado horário de almoço as <?php echo $alpega["horario"]  ?> com período de <?php echo $alpega["tempo"]."h"  ?> - 
		</strong></span>
		
		<span class="text-info"><strong>
		Tempo do Serviço selecionado: 
		<?php 
		if($mserv["tempo"] == 1 || $mserv["tempo"] == 2){
			echo $mserv["tempo"]."h";
		}else{
			echo $mserv["tempo"]."min";
		}
		?>
		</strong></span>
	  
		<div class="col-xs-3">
		<select name="horario" class="form-control" >
		
			<?php include './include/php/agenda_horario.php'; ?>
		
		  		
		</select> 
		 </div>
		</div>
	  </div>
	   <div class="form-group">
     
      <label class="control-label col-sm-2" for="data">Data:</label>
		<div class="col-xs-1">
		
		<input type="number" name="dia" class="form-control" value="<?php echo $_POST["dia"] ?>" readonly>
		
		</div>
		<div class="col-xs-1">
		
		  <input type="number" name="mes" class="form-control" value="<?php echo $_POST["mes"] ?>" readonly>	
		
		</div>
		<div class="col-xs-2">
		
		<input type="number" name="ano" class="form-control" value="<?php echo $_POST["ano"] ?>" readonly>
		
		</div>
		
	  </div>
	  <input type="hidden" name="ponto" value="<?php echo $fid["pontos"];?>">
	  <input type="hidden" name="cliente" value="<?php echo $mostra["id"]; ?>">
	  <input type="hidden" name="id_prof" value="<?php echo $mfunc["id"];?>">
	  <input type="hidden" name="tempo" value="<?php echo $mserv["tempo"];?>">
	  <input type="hidden" name="status" value="Agendado">
	  <input type="hidden" name="id" value="<?php echo $_POST["agid"];?>">
	  <?php if($_POST["prazo"] == "Sim"){ 
	  
			$sqli = "SELECT * FROM prazo_pontos";
			$exec = $sql->query($sqli);
			$exibir = mysqli_fetch_assoc($exec);
	  
	  ?>
	  <input type="hidden" name="prazo" value="<?php echo $exibir["prazo"];?>">
	  
	  <?php }elseif($_POST["prazo"] == "Não"){ ?>
	  
	  <?php }else{} ?>
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Enviar</button>
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