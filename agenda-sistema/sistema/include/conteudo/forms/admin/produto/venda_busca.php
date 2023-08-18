 <div class="container">
 
 <div class="panel panel-success">
      <div class="panel-heading"><h4>Venda de Produto</h4></div>
      <div class="panel-body">
		

  <form class="form-horizontal" action="produto_venda.php" method="post">
   <?php 
	  	$pro = $_POST["prod"];
	  	$cod = $_POST["cod"];
		$sqli = "SELECT * FROM produto WHERE nome='$pro' OR codigo='$cod' ";
		$exec = $sql->query($sqli);
		$produto = mysqli_fetch_assoc($exec);
	  ?>
   <div class="form-group">
      <label class="control-label col-sm-2" >*Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tags" value="<?php echo $produto["nome"]; ?>" name="nome" required>
      </div>
    </div>
	  
	<div class="form-group">
      <label class="control-label col-sm-2" for="desconto">Desconto:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" data-mask="###0.00" data-mask-reverse="true" data-mask-maxlength="false" value="0.00" name="desc" required>
      </div>
    </div> 
	  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Continuar</button>
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