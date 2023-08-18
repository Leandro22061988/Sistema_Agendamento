<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Histórico  de Caixa</h2></div>
<div class="panel-body">
  
	<div class="col-sm-6">
  
  <form name="mes_ano" method="get">
    <div class="form-group row">
      
      <div class="col-xs-2">
        <label for="sel1">Mês:</label>
		  <select name="mes" class="form-control" id="sel1">
			<?php 
			  $m = 1;
			  while($m<=12){
				  
			  echo "<option>$m</option>";
				  $m++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-3">
        <label for="sel1">Ano:</label>
		  <select name="ano" class="form-control" id="sel1">
			<?php 
			  $a = 2018;
			  while($a<=2036){
				  
			  echo "<option>$a</option>";
				  $a++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
  </form>
</div>
	
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Responsável</th>
        <th>Data do Fechamento</th>
        <th>Lucro</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
     <?php 
			$m = $_GET["mes"];
			$an = $_GET["ano"];
			$cons = "SELECT * FROM checkout WHERE mes='$m' AND ano='$an' ";
			$executa = $sql->query($cons);
			
	 ?>
    
     <?php while($mostra = mysqli_fetch_assoc($executa)){ ?>
      <tr>
        <td>
        
		<?php if($mostra["status"] == "Aberto"){ ?>
			<a href="caixa_fechar.php?id=<?php echo $mostra["id"]; ?>" data-toggle="tooltip" title="Fechar caixa">Fechar Caixa</a> 
		<?php }elseif($mostra["status"] == "Fechado"){ ?>
			<a href="caixa_detalhes_admin.php?id=<?php echo $mostra["id"]; ?>" data-toggle="tooltip" title="Ver detalhes do caixa"><i class='fa fa-book' aria-hidden='true'></i> Ver detalhes</a>
		<?php }else{} ?>
      
       </td>
        <td><?php echo $mostra["responsavel"]; ?></td>
        <td>
        <?php echo $mostra["data"]; ?>
        </td>
        <td>R$ <?php echo number_format($mostra["lucro"],2,",","."); ?></td>
        <td>
        
        <?php if($mostra["status"] == "Aberto"){ ?>
        	<span style="color: #0A678E"><strong><?php echo $mostra["status"]; ?></strong></span>
        <?php }else{ ?>
        	<span style="color: #720B0D"><strong><?php echo $mostra["status"]; ?></strong></span>
        <?php } ?>
        
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>