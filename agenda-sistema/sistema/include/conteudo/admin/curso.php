<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-warning">
	<div class="panel-heading"><h2>Administrativo de Cursos</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	<a href="cursos.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Cursos</a>
	<a href="cliente_c.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Alunos</a>
  	<a href="contratos.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Contratos</a>
	 
	</div> 
<div class="well">
  <div class="row">
  
  <div class="col-sm-12">
  
  	<div class="panel panel-success">
      <div class="panel-heading"><h2><i class="fa fa-info-circle" aria-hidden="true"></i> Detalhes</h2></div>
      <div class="panel-body">
      	
      	<div class="panel panel-default">
		  <div class="panel-body">
		  <p class="text-muted">
  			Total de Alunos <strong>Cadastrados</strong> <span class="badge">
  			<?php 
				
				$com = "SELECT * FROM aluno";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  			</span>
  			</p>
  		  <p class="text-muted">
  			Total de Cursos <strong>Cadastrados</strong> <span class="badge">
  			<?php 
				
				$com = "SELECT * FROM curso";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  				
  			</span>
  			</p>
  			</div>
		  
		</div>
     	
     	
     	<div class="panel panel-default">
		  <div class="panel-body">
		  <p class="text-muted">
  			Total de Contratos <strong>cadastrados</strong> <span class="badge">
  			<?php 
				
				$com = "SELECT * FROM contrato";
				$exe = $sql->query($com);
				$conta = mysqli_num_rows($exe);
				$n = mysqli_fetch_assoc($exe);


					echo $conta ;
			?>
  			</span>
  			</p>
  			</div>
		  
		</div>
     	
     	
      	
      </div>
    </div>
  
  </div>
</div>
	</div>
  
</div>
</div>
</div>
</div>
</div>