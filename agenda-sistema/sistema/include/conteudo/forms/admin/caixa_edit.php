 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Edição de Caixa</h4></div>
      <div class="panel-body">
		  
<?php if($_SESSION["nivel"] == 1){ ?>

  <form class="form-horizontal" action="include/edit/checkout.php" method="post">
   
	  <?php 
	  	$id = $_GET["id"];
	  	$sqli = "SELECT * FROM checkout WHERE id='$id'";
		$exec = $sql->query($sqli);
		$exibir = mysqli_fetch_assoc($exec);
	  
	  ?>
   
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Ganhos Atendimento:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["ganhos"] ?>" name="ganhos" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="quant">*Ganhos Cursos:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="quant" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["curso"] ?>" name="curso" required>
      </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="quant">*Promissoria Serviço:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="quant" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["prom_serv"] ?>" name="prom" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="custo">*Gastos:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="gastos" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["gastos"] ?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="salario">*Compras Estoque:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="compras" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["compras"] ?>" required>
      </div>
    </div> 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="porcent">*Ganhos Produtos:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="porcent" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["produtos"] ?>" name="produtos" required>
      </div>
    </div>
    
    
    <input type="hidden" name="id" value="<?php echo $exibir["id"] ?>">  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
    
  </form>
  
<?php }else{ ?>
		  Você não tem permissão necessária para usar esta página
<?php }?>
		  
</div>
</div>
</div>
<script type="text/javascript" src="js/mask/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/mask/qunit-1.11.0.js"></script>

  <script type="text/javascript" src="js/mask/sinon-1.10.3.js"></script>
  <script type="text/javascript" src="js/mask/sinon-qunit-1.0.0.js"></script>

  <script type="text/javascript" src="js/mask/jquery.mask.js"></script>
  <script type="text/javascript" src="js/mask/jquery.mask.test.js"></script>

