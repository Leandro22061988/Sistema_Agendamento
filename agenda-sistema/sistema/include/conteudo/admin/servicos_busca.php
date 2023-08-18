<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Serviços</h2></div>
<div class="panel-body">
	
  <form name="servico" method="post" action="servicos_busca.php">
    <div class="form-group row">
     
      <div class="col-xs-4">
       
        <div class="input-group">
		<input type="text" class="form-control" placeholder="Digite o nome" name="servico">
		<div class="input-group-btn">
		<button class="btn btn-default" type="submit">
		<i class="fa fa-search" aria-hidden="true"></i>
		</button>
		</div>
	  </div>
     
      </div>
     
    </div>
	</form>  
	  
   <div class="btn-group">

	<a href="servicos_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar</a>
	 
	</div> 
	<div class="btn-group">

	<a href="servicos.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Serviços Cadastrados</a>
	 
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
        <th>Valor</th>
        <th>Tempo <a href="#" data-toggle="popover" title="Tempo que leva o serviço" data-placement="top" data-content="20 e 30min 1h ou mais 1 ou 2..."><i class="fa fa-question-circle" aria-hidden="true"></i></a></th>
      </tr>
    </thead>
    <tbody>
     
      
        
       <?php 
		if(isset($_POST["servico"])){
		$nome = $_POST["servico"];		
		$sqli = "SELECT * FROM servico WHERE nome LIKE '$nome%'";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='servico_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/servico.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["nome"]."</td>
        <td>R$ ".number_format($exibir["valor"],2,",",".")."</td>
		<td>".$exibir["tempo"]."</td>
		</tr>";
		}
			
		}else{
			
			echo "
			<tr align='center'>
				<td colspan='5'>
					Pesquisa ainda não realizada
				</td>
			  </tr>
			";
		}
		?>
      
      
    </tbody>
  </table>
  
</div>
</div>
</div>
</div>
</div>