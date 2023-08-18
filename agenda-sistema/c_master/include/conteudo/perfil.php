<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
  <p><a href="index.php">
      <i class="fa fa-caret-left" aria-hidden="true" style=" width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a> 
      <span style=" width: 80%; float: left; font-size: 25px; margin: 25px 0px 30px 10px;">Formulario de edição</span></p>
  
  <form name="cadastro" method="get" action="include/edit/perfil.php" class="was-validated">
      <?php 
        $bAl = $conn->prepare("SELECT * FROM master WHERE id='$idl'");
        $bAl->execute();
        $master = $bAl->fetch(PDO::FETCH_ASSOC);
      ?>
    <div class="form-group">
      <label for="nome" style="width: 100%;">Nome:</label>
      <input type="text" class="form-control" id="nome" value="<?php echo $master["nome"] ?>" name="nome" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $master["email"] ?>" name="email" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <div class="form-group">
      <label for="tel" style="width: 100%;">Celular:</label>
      <input type="text" class="form-control" id="tel" value="<?php echo $master["celular"] ?>" name="tel" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" value="<?php echo $master["login"] ?>" name="login" readonly>
      <!--<div class="valid-feedback">Preenchido, obrigado.</div>-->
      <div class="invalid-feedback">Por favor preencher o campo.</div>
      
    </div>
    <input type="hidden" name="id" value="<?php echo $master["id"] ?>">
      
    <p style="text-align: center; font-size: 18px;"><a href="senha_edit.php">Editar Senha</a></p>  
    <button type="submit" class="btn btn-primary">Confirmar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>