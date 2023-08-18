<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-warning">
     <div class="panel-heading"><h2>
      Aluno - Pesquisa - 
      <?php 
      if(isset($_POST["cliente"])){
		echo $_POST["cliente"];
      }
      ?>
      </h2></div>
      <div class="panel-body">
  
	<form name="aluno" method="post">
    <div class="form-group row">
     
      <div class="col-xs-4">
       
        <div class="input-group">
		<input type="text" class="form-control" placeholder="Digite o nome" name="aluno">
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
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="cliente_c_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Alunos</button></a>
	 <a href="cliente_c.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
		  Alunos Cadatrados</button></a>
	<a href="curso.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Voltar</button></a>

	</div> 
</div>

<?php 
		  require("include/class/retorno.php");
		  $r = new Retorno;
		  $r->cadastro();
	  	  $r->upload();

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
		if(isset($_POST["aluno"])){
			$n = $_POST["aluno"];
				
		
		$sqli = "SELECT * FROM aluno WHERE nome LIKE '$n%'";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
      <tr>
        <td>
		<a href='aluno_busc_contrato.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Contrato'>
			 <i class='fa fa-file-text-o' aria-hidden='true'></i></a> - 
		<a href='cliente_c_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> -
        <a href='include/exclui/aluno.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir aluno'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
       </td>
        <td><a href='cliente_c_detalhes.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Dados Cadastrais'>".$exibir["nome"]."</a></td>
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
    
</div>