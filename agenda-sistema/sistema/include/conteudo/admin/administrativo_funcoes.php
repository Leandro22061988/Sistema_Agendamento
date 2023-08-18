<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Administrativo</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

  	<a href="admin_funcoes_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar funções</a>
	 
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
        <th>Função</th>
        <th>Salário</th>
        <th>Porcentagem</th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$sqli = "SELECT * FROM funcao";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='admin_funcoes_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/funcao.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["funcao"]."</td>
        <td>R$ ".number_format($exibir["salario"],2,",",".")."</td>
		<td>".$exibir["porcentagem"]."%</td>
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