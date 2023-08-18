 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Abrir Caixa</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" method="post" name="abrir_caixa" action="include/insert/abrir_caixa.php">
	 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Data/hora:</label>
      
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d/m/Y - H:i' ); ?>" readonly>
      </div>
      
      <input type="hidden" name="dia" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('d' ); ?>">
      <input type="hidden" name="mes" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('m' ); ?>">
      <input type="hidden" name="ano" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('Y' ); ?>">
      <input type="hidden" name="hora_a" value="<?php date_default_timezone_set('America/Sao_Paulo'); echo date('H:i' ); ?>">
    </div>
	 
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Valor Inicial:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" name="valor" value="0,00" required>
      </div>
    </div>
    
    <!-- Campos responsáveis pelo fechamento -->
      	  <input type="hidden" name="data" value="" >
      	  <input type="hidden" name="clientes" value="" >
      	  <input type="hidden" name="ganhos" value="" >
      	  <input type="hidden" name="gastos" value="" >
      	  <input type="hidden" name="lucros" value="" >
     <!-- Fim Campos responsáveis pelo fechamento -->
     
    <input type="hidden" name="status" value="Aberto">
    <?php
	  	$log = $_SESSION["entrarlogin"];
		$busc = "SELECT * FROM master WHERE login='$log'";
	  	$action = $sql->query($busc);
	  	$exibir = mysqli_fetch_assoc($action);
	?>
    <input type="hidden" name="responsavel" value="<?php echo $exibir["nome"] ?>">
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Abrir Caixa</button>
      </div>
    </div>
  </form>
  
</div>
</div>
</div>