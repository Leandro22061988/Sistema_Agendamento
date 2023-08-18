<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-info">
	<div class="panel-heading"><h2>Financeiro Busca - 
	<?php 
		  if(isset($_GET["d"]) && isset($_GET["m"]) && isset($_GET["a"])){
		  	echo $_GET["d"]."/".$_GET["m"]."/".$_GET["a"]." até ".$_GET["dd"]."/".$_GET["mm"]."/".$_GET["aa"]; 
		  }else{
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
  
  <div class="container">  
  <!-- Formularios de Busca -->
  <form name="dma" method="get">
  <div class="baseInput-4">
  
  <div class="baseInput-3">
   
    <div class="form-group row">
     <label> <kbd>De:</kbd></label><br/>
      <div class="baseInput-1">
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
      <div class="baseInput-1">
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
      <div class="baseInput-1">
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
    </div>
</div>
 <div class="col-sm-2"></div>
  <div class="baseInput-3">
   
    <div class="form-group row">
	<label><kbd>Até:</kbd></label><br/>
      <div class="baseInput-1">
        <label for="sel1">Dia:</label>
		  <select name="dd" class="form-control" id="sel1">
			
			<?php 
			  $d = 1;
			  while($d<=31){
				  
			  echo "<option>$d</option>";
				  $d++;
			  }
			  ?>
			
		  </select>
      </div>
      <div class="baseInput-1">
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
      <div class="baseInput-1">
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
      
      <div class="baseInput-2">
		  <label for="sel1"></label>
		  <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Pesquisar</button>
  		</div>
  		
    </div>
    
  </div>
  
  
  
</div>
 </form>
	  </div>
  <!-- Fim dos Formularios de Busca -->
  <!----------------------------------------------->
  <div class="row">
  <!-- Filtro para exibir resultados da pesquisa -->
  <?php if(isset($_GET["aa"])){ ?>  
  
  	<?php include './include/conteudo/admin/include/financeiro_periodo.php' ?>
  
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
</div>