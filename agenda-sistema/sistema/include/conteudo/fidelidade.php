<div class="container">
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-success">
      <div class="panel-heading"><h2>Fidelidade - Serviços Cadastrados</h2></div>
      <div class="panel-body">
  
	<div class="btn-group">

	<a href="fid_cad.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cadastrar Serviço</button></a>
	<a href="fidelidade.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Ranking</button></a>
	<a href="fid_premio.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
		  Premiação</button></a>
	<a href="index.php">
	  <button type="button" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>
		  Ir para home</button></a>

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
        <th>Serviços</th>
        <th>Pontos</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
		
		$result_curso = "SELECT * FROM fidelidade ORDER BY pontos DESC";
		$execu = $sql->query($result_curso);
		$resultado_curso = mysqli_fetch_assoc($execu);
		$total_curso = mysqli_num_rows($execu);
		
		$quantidade_pg = 10;
		$num_pagina = ceil($total_curso/$quantidade_pg);
		$inicio = ($quantidade_pg * $pagina) - $quantidade_pg;
		
		$sqli = "SELECT * FROM fidelidade ORDER BY pontos DESC LIMIT $inicio, $quantidade_pg";
		$exec = $sql->query($sqli);
		$cont = mysqli_num_rows($exec);
		
		while($exibir = mysqli_fetch_assoc($exec)){
			
			echo "
      <tr>
        <td>
        <a href='fid_edit.php?id=".$exibir["id"]."' data-toggle='tooltip' title='Editar dados'>
			<i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> - 
        <a href='include/exclui/fidelidade.php?id=".$exibir["id"]."&n=".$exibir["servico"]."' data-toggle='tooltip' title='Excluir'>
		<i class='fa fa-times' aria-hidden='true'></i></a>
       </td>
        <td>".$exibir["servico"]."</td>
        <td>".$exibir["pontos"]."</td>
      </tr>
      ";
		}
	   ?> 
      <tr align="center">
      	<td colspan="5">
			<ul class="pagination">
            <?php $max_pg = 3; ?>
                <li><a href="fidelidade.php?pagina=1">Primeira Página</a></li>
            <?php for ($i = $pagina - $max_pg; $i <= $pagina - 1; $i++){ ?>
                <?php if($i >= 1){ ?>
				<li><a href="fidelidade.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
			<?php }?>			
				<li><a href="fidelidade.php?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?></a></li>
			<?php for ($p = $pagina + 1; $p <= $pagina + $max_pg; $p++){ ?>
                <?php if($p <= $num_pagina){ ?>
				<li><a href="fidelidade.php?pagina=<?php echo $p; ?>"><?php echo $p; ?></a></li>
                <?php } ?>
			<?php }?>
                <li><a href="fidelidade.php?pagina=<?php echo $num_pagina; ?>">Ultima Página</a></li>
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