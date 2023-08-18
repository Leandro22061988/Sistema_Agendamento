<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Funcionários</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	<a href="funcionarios_funcoes.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar funcionário</button></a>
	 <a href="funcionarios_busc.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		  Pesquisar funcionário</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Voltar para home</button></a>

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
        <th>Agenda/Almoço</th>
        <th>Nome</th>
        <th>Celular</th>
        <th>Função</th>
      </tr>
    </thead>
    <tbody>
     <?php 
		$sqli = "SELECT * FROM funcionario";
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
		?>      
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>