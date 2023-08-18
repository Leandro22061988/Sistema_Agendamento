<div class="container" style="background-color: #fff;">
	<div class="row" style="padding: 20px 0px 0px 10px;">
  <?php 
	$id = $_GET["id"];
	$sqli = "SELECT * FROM aluno WHERE id='$id'";
	$exec = $sql->query($sqli);
	$cont = mysqli_num_rows($exec);
	$exibir = mysqli_fetch_assoc($exec);
	?>
  
  <!-- Left-aligned media object -->
  <div class="media">
    <div class="media-left">
	<?php if($exibir["foto"] == "rlDefaultImg.jpg" || $exibir["foto"] == ""){ ?>
      <img src="img/alunos/<?php echo $exibir["foto"]; ?>" class="media-object" style="width:140px">
	  <br/>
	  <a href="cliente_c_cad_img.php?id=<?php echo $id; ?>" title="Adicionar Foto">
			<button type="button" class="btn">Adicionar Foto</button>
		</a>
	<?php }else{ ?>
	  <img src="img/alunos/<?php echo $exibir["foto"]; ?>" class="media-object" style="width:140px">
	  <br/>
	  <a href="include/edit/aluno_img.php?id=<?php echo $id; ?>" title="Voltar">
			<button type="button" class="btn">Excluir Foto</button>
		</a>
	<?php } ?>
		
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $exibir["nome"]; ?></h4>
		<br/>
		<div class="col-sm-6">
		<p><strong>CPF: </strong><?php echo $exibir["cpf"]; ?></p>
		<p><strong>RG: </strong><?php echo $exibir["rg"]; ?></p>
		<p><strong>Telefone: </strong><?php echo $exibir["telefone"]; ?></p>
		<p><strong>Celular: </strong><?php echo $exibir["celular"]; ?></p>
		<p><strong>E-mail: </strong><?php echo $exibir["email"]; ?></p>
		<p><strong>Data de Nescimento: </strong><?php echo $exibir["dia"]."/".$exibir["mes"]."/".$exibir["ano"]; ?></p>
		</div>
		<div class="col-sm-6">
		<p><strong>Endereço: </strong><?php echo $exibir["endereco"]; ?></p>
		<p><strong>Bairro: </strong><?php echo $exibir["bairro"]; ?></p>
		<p><strong>Municipio: </strong><?php echo $exibir["municipio"]; ?></p>
		<p><strong>CEP: </strong><?php echo $exibir["cep"]; ?></p>
		<p><strong>Estado: </strong><?php echo $exibir["uf"]; ?></p>
		</div>
			
    </div>
  </div>
  <hr>
		<a href="cliente_c.php" title="Voltar">
			<button type="button" class="btn btn-default">Voltar para lista de alunos</button>
		</a>
  <hr>
</div>
</div>
