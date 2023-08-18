<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
    <?php if($_GET["em"] == "ok"){ ?>
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>OK!</strong> Foi enviado um link para o e-mail informado.
    </div>
    <?php }else{} ?>
    
  <p><span style=" width: 98%; float: left; font-size: 25px; margin: 17px 0px 30px 0px; text-align: center;">Recuperação de senha</span></p>
    
  <form name="cadastro" method="post" action="controle/esqueci.php" class="was-validated">
    
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="digite seu e-mail" name="email" required>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <p style="text-align: center; font-size: 18px;"><a href="login.php">Login</a></p>
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>