<?php 
	$log = $_SESSION["entrarlogin"];
	$busc = "SELECT * FROM master WHERE login='$log'";
	$action = $sql->query($busc);
	$exibe = mysqli_fetch_assoc($action);
	
	$n = $exibe["nivel"];
	
	if($n == 1){
	
?>


<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Administradores</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	<a href="admin_cad.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar</a>
	</div> 
	
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Login</th>
        <th>Nivel</th>
      </tr>
    </thead>
    <tbody>
     
      <?php 
		$sqli = "SELECT * FROM master";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
		 
			echo "
			<tr>
			<td>
			<a href='admin_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
				<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
			<a href='include/exclui/admin.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
				<i class='fa fa-times' aria-hidden='true'></i></a>
			</td>
			<td><a href='admin_dados.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Ver dados'>
			".$exibir["nome"]."</a></td>
			<td>".$exibir["email"]."</td>
			<td>".$exibir["login"]."</td>
			<td>".$exibir["nivel"]."</td>
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
<?php }else{ ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h4>
							Você não tem permissão para ver as informações desta página veja seus dado
							no botão abaixo.<br/><br/>
							
							<a href="admin_dados.php?id=<?php echo $exibe["id"] ?>" class="btn btn-primary">
			  <i class="fa fa-user-plus" aria-hidden="true"></i>
				  Ver dados</a> 
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php }?>