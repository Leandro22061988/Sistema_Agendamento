 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h2>Agendamento - Edição Status</h2></div>
      <div class="panel-body">


  <form class="form-horizontal" action="/action_page.php">
   
    
	  <div class="form-group">
	  <label class="control-label col-sm-2" for="status">Status:</label>
		<div class="col-xs-2">
		<select name="status" class="form-control" >
	  	  <option><?php ?></option>
		  <option>Agendado</option>
		  <option>Atendido</option>	
		</select> 
		</div>
	  </div>
	  
	  <input type="hidden" name="id" value="<?php ?>">
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </form>
</div>
	 </div>
	 </div>