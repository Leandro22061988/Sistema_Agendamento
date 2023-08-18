<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
  <p><a href="index.php">
      <i class="fa fa-caret-left" aria-hidden="true" style=" width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a> 
      <span style=" width: 80%; float: left; font-size: 25px; margin: 25px 0px 30px 10px;">Formulario de edição</span></p>
  
  <form name="cadastro" method="get" action="include/edit/senha.php" class="was-validated">
      <?php 
        $bAl = $conn->prepare("SELECT * FROM cliente WHERE id='$idl'");
        $bAl->execute();
        $cliente = $bAl->fetch(PDO::FETCH_ASSOC);
      ?>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="digite sua nova senha" name="senha" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <input type="hidden" name="id" value="<?php echo $cliente["id"]; ?>">
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>