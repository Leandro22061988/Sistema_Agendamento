 <div class="container">

	 <?php include 'include/buscas/almoco.php'; ?>
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Almoço - edição de dados</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" name="almoco" action="include/edit/almoco.php">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome" value="<?php echo $alm["nome"]; ?>" required readonly>
      </div>
    </div>
    
    <div class="form-group">
     
      <label class="control-label col-sm-2" for="Porcentagem">Escolha o horário:</label>
		<div class="col-xs-4">
		<select name="horario" class="form-control" >
		  <option><?php echo $alm["horario"]; ?></option>
		  <option>11:00</option>
		  <option>11:30</option>	
		  <option>12:00</option>	
		  <option>12:30</option>	
		  <option>13:00</option>	
		  <option>13:30</option>	
		  <option>14:00</option>	
		  <option>14:30</option>	
		  <option>15:00</option>				
		</select> 
		</div>
	  </div>
	  
	  <div class="form-group">
	  <label class="control-label col-sm-2" for="Porcentagem">Tempo: <a href="#" data-toggle="popover" title="Tempo de duração do almoço" data-placement="top" data-content="30min, 1h ou mais"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
		<div class="col-xs-4">
		<select name="tempo" class="form-control" >
		<option><?php echo $alm["tempo"]; ?></option>
		  <option>30</option>
		  <option>1</option>
		  <option>2</option>						
		</select> 
		</div>
	  </div>
	  
    <input type="hidden" name="id" value="<?php echo $alm["id"] ?>">
		  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">enviar</button>
      </div>
    </div>
  </form>
	 
</div>
	 </div>
	 </div>