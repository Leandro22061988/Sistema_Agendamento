<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h4>Fornecedor - Pesquisa</h4></div>
      <div class="panel-body">
  
	<form name="forn" method="post">
    <div class="form-group row">
     
      <div class="col-xs-4">
       
        <div class="input-group">
		<input type="text" class="form-control" placeholder="Digite o nome" name="forn">
		<div class="input-group-btn">
		<button class="btn btn-default" type="submit">
		<i class="fa fa-search" aria-hidden="true"></i>
		</button>
		</div>
	  </div>
     
      </div>
     
    </div>
  </form>
</div>

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
		if(isset($_POST["forn"])){
		$nome = $_POST["forn"];
		$sqli = "SELECT * FROM fornecedor WHERE nome LIKE '$nome%' ";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='fornecedores_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/fornecedor.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		<a href='fornecedor_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados de cadastro'>".$exibir["nome"]."</a>
		</td>
        <td>".$exibir["telefone"]."</td>
        <td>".$exibir["celular"]."</td>
		<td>".$exibir["email"]."</td>
		</tr>";
		}
		}
		?> 
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
    
</div>