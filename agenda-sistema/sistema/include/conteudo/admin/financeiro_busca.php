<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
	<div class="panel-heading"><h2>Financeiro Busca - 
	<?php 
		  if(isset($_POST["d"]) && isset($_POST["m"]) && isset($_POST["a"])){
		  	echo $_POST["d"]."/".$_POST["m"]."/".$_POST["a"]; 
		  }elseif(isset($_POST["mm"]) && isset($_POST["aa"])){
			  echo $_POST["mm"]."/".$_POST["aa"];
		  }
		  
	   ?>
	</h2></div>
<div class="panel-body">
  
	<div class="btn-group">

	<a href="financeiro.php" class="btn btn-primary">
	  <i class="fa fa-user-plus" aria-hidden="true"></i>
		  Financeiro</a>
	<a href="financeiro_busca.php" class="btn btn-primary">
	  <i class="fa fa-search" aria-hidden="true"></i>
		  Busca</a>
	<a href="financeiro_periodo.php" class="btn btn-primary">
	  <i class="fa fa-search-plus" aria-hidden="true"></i>
		  Busca por Período</a>	
  	
	 
	</div> 
<div class="well">
  <div class="row">
  
  
  <!-- Formularios de Busca -->
  
  <div class="col-sm-6">
  
	<form name="dma" method="post">
    <div class="form-group row">
      <div class="col-xs-2">
        <label for="sel1">Dia:</label>
		  <select name="d" class="form-control" id="sel1">
			
			<?php 
			  $d = 1;
			  while($d<=31){
				  
			  echo "<option>$d</option>";
				  $d++;
			  }
			  ?>
			
		  </select>
      </div>
      <div class="col-xs-2">
        <label for="sel1">Mês:</label>
		  <select name="m" class="form-control" id="sel1">
			<?php 
			  $m = 1;
			  while($m<=12){
				  
			  echo "<option>$m</option>";
				  $m++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-3">
        <label for="sel1">Ano:</label>
		  <select name="a" class="form-control" id="sel1">
			<?php 
			  $a = 2018;
			  while($a<=2036){
				  
			  echo "<option>$a</option>";
				  $a++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
  </form>
</div>
 
  <div class="col-sm-6">
  
  <form name="mes_ano" method="post">
    <div class="form-group row">
      
      <div class="col-xs-2">
        <label for="sel1">Mês:</label>
		  <select name="mm" class="form-control" id="sel1">
			<?php 
			  $m = 1;
			  while($m<=12){
				  
			  echo "<option>$m</option>";
				  $m++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-3">
        <label for="sel1">Ano:</label>
		  <select name="aa" class="form-control" id="sel1">
			<?php 
			  $a = 2018;
			  while($a<=2036){
				  
			  echo "<option>$a</option>";
				  $a++;
			  }
			  ?>
		  </select>
      </div>
      <div class="col-xs-1">
      <label for="sel1"></label>
      <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
	</div>
    </div>
  </form>
 </div>
  
  
  <!-- Fim dos Formularios de Busca -->
  <!----------------------------------------------->
  
  <!-- Pesquisa por dia, mês e ano -->
  <?php if(isset($_POST["a"])){ ?>  
  	<?php include './include/conteudo/admin/include/financeiro_dma.php' ?>
  <!-- Fim Pesquisa por dia, mês e ano -->
  
  <!----------------------------------------------->
  
  <!--  Pesquisa por mês e ano -->
  <?php }elseif(isset($_POST["aa"])){ ?>
  	<?php include './include/conteudo/admin/include/financeiro_ma.php' ?>
  <?php }else{  ?>
  <!--  Fim Pesquisa por mês e ano -->
  	<h3>Nada foi pesquisado ou não ha resultados para data pesquisada.</h3>
  <?php } ?>
</div>
</div>
  
</div>
</div>
</div>
</div>
</div>