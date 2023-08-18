<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>
      Cliente - Pesquisa - 
      <?php 
      if(isset($_POST["cliente"])){
		echo $_POST["cliente"];
      }
      ?>
      </h2></div>
      <div class="panel-body">
  
	<form name="cliente" method="post">
    <div class="form-group row">
     
      <div class="col-xs-4">
       
        <div class="input-group">
		<input type="text" class="form-control" placeholder="Digite o nome" name="cliente">
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
		if(isset($_POST["cliente"])){
			
		$nome = $_POST["cliente"];
		$sqli = "SELECT * FROM cliente WHERE nome LIKE '$nome%'";
		$exec = $sql->query($sqli);
    	
     	while($exibir = mysqli_fetch_assoc($exec)){
     	echo "
      <tr>
        <td>
        <a href='cliente_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/cliente.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir cliente'>
			<i class='fa fa-times' aria-hidden='true'></i></a> - 
		<a href='agendar_busc_servico.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Agendar'>
			 <i class='fa fa-book' aria-hidden='true'></i></a> - 
		<a href='cliente_historico.php?id=".$exibir["id"]."&n=".$exibir["nome"]."' data-toggle='tooltip' title='Histórico'>
			 <i class='fa fa-history' aria-hidden='true'></i></a>
       </td>
        <td><a href='cliente_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados Cadastrais'>".$exibir["nome"]."</a></td>
        <td>".$exibir["telefone"]."</td>
        <td>".$exibir["celular"]."</td>
        <td>".$exibir["email"]."</td>
      </tr>
      ";
      }
		}
		?>
    </tbody>
  </table>
 </div>
 </div>
 </div>
</div>