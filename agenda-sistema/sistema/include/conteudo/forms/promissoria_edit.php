<div class="container">
 <div class="panel panel-success">
<div class="panel-heading"><h2>Promissória - Edição</h2></div>
<div class="panel-body">
  <form name="cliente_cad" class="form-horizontal" action="include/edit/promissoria_edit.php" method="post">
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="nome">*Vencimento:<br/><span style="font-size: 12px">Atualmente: <?php echo $_GET["v"]; ?></span></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="data" value="" name="data" required>
      </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Enviar</button>
        <button type="button" class="btn" onClick="history.go(-1)">Voltar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>