<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
	<div class="panel-heading"><h2>Horários de almoço</h2></div>
<div class="panel-body">
  
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
        <th>Horário</th>
        <th>Período <a href="#" data-toggle="popover" title="Tempo de duração do almoço" data-placement="top" data-content="30min, 1h ou mais"><i class="fa fa-question-circle" aria-hidden="true"></i></a></th>
      </tr>
    </thead>
    <tbody>
     
     <?php 
		$id = $_GET["id"];
		$sqli = "SELECT * FROM almoco WHERE id_pro='$id'";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='#' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='#' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
        <td>".$exibir["nome"]."</td>
        <td>".$exibir["horario"]."</td>
		<td>".$exibir["tempo"]."h</td>
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