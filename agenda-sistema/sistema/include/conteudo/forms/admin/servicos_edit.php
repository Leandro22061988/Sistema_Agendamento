 <div class="container">
 
	 <?php include 'include/buscas/servicos.php'; ?>
	 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Serviços - Edição de dados</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" name="servico" action="include/edit/servico.php">
   
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" value="<?php echo $servi["nome"]; ?>" required>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="salario">Valor:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="valor" value="<?php echo $servi["valor"]; ?>" required>
      </div>
    </div>
     
     <div class="form-group">
      <label class="control-label col-sm-2" for="tempo">Tempo 
      <a href="#" data-toggle="popover" title="Tempo que leva o serviço" data-placement="top" data-content="para 20 e 30min escolha 20 ou 30 para 1h ou mais 1 ou 2..."><i class="fa fa-question-circle" aria-hidden="true"></i></a> :</label>
      
      <div class="col-xs-4">
		<select name="tempo" class="form-control" >
			<option><?php echo $servi["tempo"]; ?></option>
			<option>00:05:00</option>
			<option>00:10:00</option>
			<option>00:20:00</option>	
			<option>00:30:00</option>
			<option>00:40:00</option>
			<option>00:50:00</option>	
			<option>1:00:00</option>
			<option>1:30:00</option>
			<option>2:00:00</option>
			<option>2:30:00</option>
			<option>3:00:00</option>
		</select> 
		</div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-2" for="tempo">Função 
      <a href="#" data-toggle="popover" title="Quem executa" data-placement="top" data-content="Escolha a função responsável para executar o serviço"><i class="fa fa-question-circle" aria-hidden="true"></i></a> :</label>
      
      <div class="col-xs-4">
		<select name="funcao" class="form-control" >
		 <option><?php echo $servi["funcao"]; ?></option>
		<?php 
		$sqli = "SELECT * FROM funcao";
		$exe = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exe)){
			
			echo "<option>".$exibir["funcao"]."</option>";
		}
		?>
		</select> 
		</div>
    </div>
      
     <input type="hidden" name="id" value="<?php echo $servi["id"] ?>"> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
    
  </form>
  
</div>
	 </div>
	 </div>