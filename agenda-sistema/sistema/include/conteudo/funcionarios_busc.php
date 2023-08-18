<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-danger">
      <div class="panel-heading"><h2>Funcionários - Pesquisa</h2></div>
      <div class="panel-body">
  
	<form name="func" method="post">
    <div class="form-group row">
     
      <div class="col-xs-4">
       
        <div class="input-group">
		<input type="text" class="form-control" placeholder="Digite o nome" name="func">
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
        <th>Função</th>
      </tr>
    </thead>
    <tbody>
     <?php 
		if(isset($_POST["func"])){
		$nome = $_POST["func"];
		$sqli = "SELECT * FROM funcionario WHERE nome LIKE '$nome%' ";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='funcionarios_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
		<a href='funcionarios_edit_login.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar login e Senha'>
			<i class='fa fa-key' aria-hidden='true'></i></a> - 
        <a href='include/exclui/funcionario.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		<a href='agenda_func.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Ver agenda'>
			<i class='fa fa-eye' aria-hidden='true'></i></a>&nbsp;&nbsp; - &nbsp;&nbsp;
        <a href='almoco_cad.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Cadastrar horário de almoço'>
			<i class='fa fa-clock-o' aria-hidden='true'></i></a>
		</td>
        <td><a href='funcionario_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados de cadastro'>".$exibir["nome"]."</a></td>
        <td>".$exibir["celular"]."</td>
		<td>".$exibir["funcao"]."</td>
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