<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Caixa</h2></div>
<div class="panel-body">
  
	<!--<div class="btn-group">

	<a href="admin/historico_caixa_pesquisa.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Pesquisar por ano</a>
	</div>--> 
	
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
			$sta = "Aberto";
			$cons = "SELECT * FROM checkout ORDER BY id DESC LIMIT 10";
			$executa = $sql->query($cons);
			$mostra = mysqli_fetch_assoc($executa);
			
	 ?>
    
     <?php do{ ?>
      <tr>
        <td>
        
		<?php if($mostra["status"] == "Aberto"){ ?>
			<a href="caixa_fechar.php?id=<?php echo $mostra["id"]; ?>" data-toggle="tooltip" title="Fechar caixa">Fechar Caixa</a> 
		<?php }elseif($mostra["status"] == "Fechado"){ ?>
			<a href="caixa_detalhes.php?id=<?php echo $mostra["id"]; ?>" data-toggle="tooltip" title="Ver detalhes do Caixa"><i class='fa fa-book' aria-hidden='true'></i> Ver detalhes</a>
		<?php }else{} ?>
      
       </td>
        <td><?php echo $mostra["responsavel"]; ?></td>
        <td>
        <?php echo $mostra["dia"]."/".$mostra["mes"]."/".$mostra["ano"]." - ".$mostra["hora"]; ?>
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
      <?php }while($mostra = mysqli_fetch_assoc($executa)); ?>
      
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>