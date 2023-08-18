<div class="container">
  
  <div class="row">
  
  <div class="col-sm-12">
  
  <div class="panel panel-primary">
      <div class="panel-heading"><h2>Gastos</h2></div>
      <div class="panel-body">
  
<div class="btn-group">
<a href="gastos_cad.php">
  <button type="button" class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
	  Registrar Gastos</button></a>
<a href="gastos_data.php">
  <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i>
	  Pesquisar por data</button></a>
<a href="index.php">
  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
	  Ir para home</button></a>
</div> 
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Ações</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <?php 
		$sqli = "SELECT * FROM gastos";
		$exec = $sql->query($sqli);
		  
		while($exibir = mysqli_fetch_assoc($exec)){
			echo "
		<tr>
		<td>
        <a href='gastos_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/gastos.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'> <i class='fa fa-times' aria-hidden='true'></i></a>
		</td>
		<td>
		".$exibir["descricao"]."
		</td>
        <td>".number_format($exibir["valor"],2,",",".")."</td>
        <td>".$exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]."</td>
		</tr>";
		}
		?> 
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
  
  <!--<div class="well">Normal Well</div>
  <div class="well">Normal Well</div>
  <div class="well">Normal Well</div>-->
  
</div>