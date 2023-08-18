<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
    
  <p><span style=" width: 98%; float: left; font-size: 25px; margin: 17px 0px 30px 0px; text-align: center;">Recuperação de senha</span></p>
    
  <form name="cadastro" method="post" action="controle/nova_senha.php" class="was-validated">
    
    <div class="form-group">
      <label for="senha">Nova Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="digite sua nova senha" name="senha" required>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <input type="hidden" name="email" value="<?php echo $_GET["e"]; ?>">
    <p style="text-align: center; font-size: 18px;"><a href="login.php">Login</a></p>
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>