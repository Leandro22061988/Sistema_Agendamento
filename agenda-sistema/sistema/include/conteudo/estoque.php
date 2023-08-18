<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Estoque</h2></div>
<div class="panel-body">
  
   <div class="btn-group">

	<a href="estoque_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar novo produto</a>
	</div> 
		
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Valor da Compra</th>
        <th>Registro</th>
      </tr>
    </thead>
    <tbody>
     	<?php 

			$sqli = "SELECT * FROM estoque ";
			$exec = $sql->query($sqli);
			$estoque = mysqli_fetch_assoc($exec);

		?>
     <?php do{ ?>	
      <tr>
        <td>
        <a href="estoque_edit.php?id=<?php echo $estoque["id"]; ?>" data-toggle="tooltip" title="Editar dados">
			<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> - 
        <a href="include/exclui/estoque.php?id=<?php echo $estoque["id"]; ?>" data-toggle="tooltip" title="Excluir produto">
			<i class="fa fa-times" aria-hidden="true"></i></a>
       </td>
        <td><?php echo $estoque["produto"]; ?> 
		 <a href="#" data-toggle="popover" title="Fornecedor" data-content="<?php echo $estoque["fornecedor"]; ?>">
		  <i class="fa fa-info-circle" aria-hidden="true"></i></a>
		  </td>
        <td><?php echo $estoque["quantidade"]; ?></td>
        <td>R$ <?php echo number_format($estoque["valor_compra"],2,",","."); ?> 
		  <a href="#" data-toggle="popover" title="Valor da Unidade" data-content="R$ <?php echo number_format($estoque["valor_uni"],2,",","."); ?>">
		  <i class="fa fa-info-circle" aria-hidden="true"></i></a>
		</td>
        <td><?php echo $estoque["dia"]."/".$estoque["mes"]."/".$estoque["ano"]; ?></td>
      </tr>
      <?php }while($estoque = mysqli_fetch_assoc($exec)); ?>
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>