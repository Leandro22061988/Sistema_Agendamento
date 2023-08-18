<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
    <?php if($_GET["l"]){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>OK!</strong> Cadastro realizado com sucesso.
    </div>
    <?php }elseif($_GET["edit"] == "ok"){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>OK!</strong> Senha alterada com sucesso.
    </div>
    <?php }else{} ?>
    
  <p><span style=" width: 98%; float: left; font-size: 25px; margin: 17px 0px 30px 0px; text-align: center;">Formulario de Login</span></p>
    
  <form name="cadastro" method="post" action="controle/login.php" class="was-validated">
    
    <div class="form-group">
   
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" placeholder="digite seu login" name="login" required>
      <div id="txtHint"></div>
      <!--<div class="valid-feedback">Preenchido, obrigado.</div>-->
      <div class="invalid-feedback">Por favor preencher o campo.</div>
      
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="digite sua senha" name="senha" required>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <p style="text-align: center; font-size: 18px;"><a href="esqueci.php">Esqueci minha senha</a></p>
    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>