 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Edição de Produto</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" action="include/edit/produto.php" method="post">
   
	  <?php 
	  	$id = $_GET["id"];
	  	$sqli = "SELECT * FROM produto WHERE id='$id'";
		$exec = $sql->query($sqli);
		$exibir = mysqli_fetch_assoc($exec);
	  
	  ?>
   
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" value="<?php echo $exibir["nome"] ?>" name="nome" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="quant">*Quantidade:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="quant" value="<?php echo $exibir["quantidade"] ?>" name="quant" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="custo">*Custo Unidade:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="custo" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["custo"] ?>" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="salario">*Valor de Venda:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="valor" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $exibir["valor"] ?>" required>
      </div>
    </div> 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="porcent">*Porcentagem:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="porcent" value="<?php echo $exibir["porcentagem"] ?>" name="porcent" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Descrição(opcional):</label>
      <div class="col-sm-10">
        <textarea name="descricao" class="form-control" rows="5" id="comment"><?php echo $exibir["descricao"] ?></textarea>
      </div>
    </div>
    
    
    <input type="hidden" name="id" value="<?php echo $exibir["id"] ?>">  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
    
  </form>
  
</div>
</div>
</div>
<script type="text/javascript" src="js/mask/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/mask/qunit-1.11.0.js"></script>

  <script type="text/javascript" src="js/mask/sinon-1.10.3.js"></script>
  <script type="text/javascript" src="js/mask/sinon-qunit-1.0.0.js"></script>

  <script type="text/javascript" src="js/mask/jquery.mask.js"></script>
  <script type="text/javascript" src="js/mask/jquery.mask.test.js"></script>

