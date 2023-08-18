<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-warning">
      <div class="panel-heading"><h2>Cursos </h2> </div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="curso_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Curso</button></a>
	<a href="curso.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Voltar</button></a>

	</div> 
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
        <th>Período</th>
        <th>Valor</th>
		<th>Porcentagem</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM curso ORDER BY nome";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM curso ORDER BY nome LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
      <tr>
        <td>
        <a href='curso_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/curso.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Excluir'>
			<i class='fa fa-times' aria-hidden='true'></i></a> 
       </td>
        <td>".$exibir["nome"]."</td>
        <td>".$exibir["periodo"]."</td>
        <td>".number_format($exibir["valor"],2,",",".")."</td>
		<td>-".$exibir["porcentagem"]."%</td>
      </tr>
      ";
		}
	   ?> 
      <tr align="center">
      	<td colspan="5">
      		<ul class="pagination">
      		<?php // for ($i = 1; $i < $num_pagina + 1; $i++){ ?>
				<li><a href="cursos.php?pagina=<?php // echo $i; ?>"><?php //echo  $i; ?></a></li>
			<?php // }?>
			</ul>
      	</td>
      </tr>
    </tbody>
  </table>
 </div>
    </div>
	  
  </div>
  
  
</div>
    
</div>