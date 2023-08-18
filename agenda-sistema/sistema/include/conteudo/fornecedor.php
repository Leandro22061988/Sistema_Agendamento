<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h4>Fornecedores</h4></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fornecedores_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar fornecedor</button></a>
	 <a href="fornecedores_busc.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		  Pesquisar fornecedor</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Voltar para home</button></a>

	</div> 
</div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();

?>   

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>E-mail</th>
      </tr>
    </thead>
    <tbody>
     <?php 
		$sqli = "SELECT * FROM fornecedor";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='fornecedores_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/fornecedor.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'> <i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		<a href='fornecedor_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados de cadastro'>".$exibir["nome"]."</a>
		</td>
        <td>".$exibir["telefone"]."</td>
        <td>".$exibir["celular"]."</td>
		<td>".$exibir["email"]."</td>
		</tr>";
		}
		?> 
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
    
</div>