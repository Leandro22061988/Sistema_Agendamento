 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de almoço</h4></div>
      <div class="panel-body">
<?php 
		$id = $_GET["id"];
		$sqli = "SELECT * FROM funcionario WHERE id='$id' ";
		$exec = $sql->query($sqli);
		$exibir = mysqli_fetch_assoc($exec);
?>

  <form name="almoco" class="form-horizontal" action="include/insert/almoco.php" method="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="nome" value="<?php echo $exibir["nome"] ?>" required readonly>
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Escolha o horário:</label>
		<div class="col-xs-4">
		<select name="hora" class="form-control" >
		  <option>11:00</option>
		  <option>11:30</option>	
		  <option>12:00</option>	
		  <option>12:30</option>	
		  <option>13:00</option>	
		  <option>13:30</option>	
		  <option>14:00</option>					
		</select> 
		</div>
	  </div>
	  <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Tempo: <a href="#" data-toggle="popover" title="Tempo de duração do almoço" data-placement="top" data-content="30min, 1h ou mais"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
		<div class="col-xs-4">
		<select name="tempo" class="form-control" >
		  <option>30</option>
		  <option>1</option>
		  <option>2</option>						
		</select> 
		</div>
	  </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      
       <input type="hidden" name="id_func" value="<?php echo $exibir["id"] ?>">
       
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>