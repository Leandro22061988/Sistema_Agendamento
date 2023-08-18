 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Cadastro de Produto</h4></div>
      <div class="panel-body">


  <form class="form-horizontal" action="include/insert/produto.php" method="post">
   
	  <?php 
	  	$sqli = "SELECT * FROM produto ORDER BY id DESC";
		$exec = $sql->query($sqli);
		$exibir = mysqli_fetch_assoc($exec);
	  	
	  	if($exibir["id"] < 1){
			$cod = "001";
		}elseif($exibir["id"] == 9){
			$c = $exibir["id"] + 1;
			$ini = "0";
			$cod = $ini.$c;
		}elseif($exibir["id"] == 99){
			$c = $exibir["id"] + 1;
			$cod = $c;
		}else{
			$c = $exibir["id"] + 1;
			$ini = "00";
			$cod = $ini.$c;
		}
	  
	  ?>
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="codigo">*Código:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="codigo" value="" name="codigo" required >
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nome" placeholder="digite o nome do produto" name="nome" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="quant">*Quantidade:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="quant" placeholder="digite a quantidade" name="quant" required>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="custo">*Custo Unidade:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="custo" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="digite o valor" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="salario">*Valor de Venda:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="valor" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="digite o valor" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="porcent">*Porcentagem:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="porcent" placeholder="digite a porcentagem a ser descontada" name="porcent" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Descrição(opcional):</label>
      <div class="col-sm-10">
        <textarea name="descricao" class="form-control" rows="5" id="comment"></textarea>
      </div>
    </div>
    
    
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Cadastrar</button>
		  <input type="button" class="btn" value="Voltar" onClick="history.go(-1)">
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

