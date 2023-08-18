<div class="container">
  
  <div class="row">
  
  
  
  <div class="col-sm-11">
  
 
  
  	<div class="panel panel-primary">
      <div class="panel-heading"><h2>Caixa Detalhes</h2></div>
      <div class="panel-body">
      	
		<div class="btn-group">

		<a href="gastos.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		Gastos</button></a>
		<a href="historico.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		Caixas</button></a>
		<a href="index.php">
		<button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		Voltar para home</button></a>
		
		<!-- Ação apenas para o administrador Master -->

		</div> 
		</div>
     	
      	<div class="panel-body">
      	<?php
			$id = $_GET["id"];
			$cons = "SELECT * FROM checkout WHERE id='$id'";
			$executa = $sql->query($cons);
			$mostra = mysqli_fetch_assoc($executa);
		 ?>
      	<div class="panel panel-default">
		  <div class="panel-body" style="font-size:18px;">
		  <strong>Caixa do dia:</strong> <?php echo $mostra["data"]; ?></div>
		  <div class="panel-body" style="font-size: 16px;"> 
		  	Responsável: <strong><?php echo $mostra["responsavel"]; ?></strong> <br/>
		  	Data da abertura: <strong><?php echo $mostra["dia"]."/".$mostra["mes"]."/".$mostra["ano"]; ?></strong> <br/>
		  	Hora da abertura: <strong><?php echo $mostra["hora"]; ?></strong> <br/>
		  	Valor inicial: R$ 
		  	<span style="color: #0F729B"> <strong><?php echo number_format($mostra["valor"],2,",","."); ?></strong> </span><br/>
		  	Clientes atendidos: <strong><?php echo $mostra["clientes"]; ?></strong> <br/>
		  	Ganhos: R$ 
		  	<span style="color: #"><strong><?php echo number_format($mostra["ganhos"],2,",","."); ?></strong> </span><br/>
			Acrescimo: R$ 
		  	<span style="color: #"><strong><?php echo number_format($mostra["acrescimo"],2,",","."); ?></strong> </span><br/>
			Desconto: R$ 
		  	<span style="color: #8B0507"><strong>-<?php echo number_format($mostra["desconto"],2,",","."); ?></strong> </span><br/>
		  	Gastos: R$ 
		  	<span style="color: #8B0507"><strong>-<?php echo number_format($mostra["gastos"],2,",","."); ?></strong> </span><br/>
			Estoque Compras: R$ 
		  	<span style="color: #8B0507"><strong>-<?php echo number_format($mostra["compras"],2,",","."); ?></strong> </span><br/>
			Cursos: R$ 
		  	<span style="color: #075519"><strong><?php echo number_format($mostra["curso"],2,",","."); ?></strong> </span><br/>
			Promissorias de serviços: R$ 
		  	<span style="color: #075519"><strong><?php echo number_format($mostra["prom_serv"],2,",","."); ?></strong> </span><br/>
			Produtos: R$ 
		  	<span style="color: #075519"><strong><?php echo number_format($mostra["produtos"],2,",","."); ?></strong> </span><br/>
		  	Lucro: R$ 
		  	<span style="color: #075519"><strong><?php echo number_format($mostra["lucro"],2,",","."); ?></strong> </span><br/>
		  	Status: <strong><?php echo $mostra["status"]; ?></strong> <br/>
		   
		  </div>
		</div>
     	
     	
      	
      </div>
    </div>
  
  </div>
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>