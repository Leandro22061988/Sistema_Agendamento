<p style="margin: 30px 0px 30px 0px;"></p>  
<div class="container">
    <?php if($_GET["em"] == "err"){ ?>
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Opa!</strong> Esse e-mail(<?php echo $_GET["m"]; ?>) já esta cadastrado.
    </div>
    <?php }else{} ?>
  <p><a href="login.php">
      <i class="fa fa-caret-left" aria-hidden="true" style=" width: 10%; float: left; font-size: 50px; margin: 10px 0px 0px 0px;"></i></a> 
      <span style=" width: 80%; float: left; font-size: 25px; margin: 25px 0px 30px 10px;">Formulario de cadastro</span></p>
  
  <form name="cadastro" method="get" action="include/insert/registro.php" class="was-validated">
    <div class="form-group">
      <label for="nome" style="width: 100%;">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="digite seu nome" name="nome" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <div class="form-group">
    <script>
        function showHint(str) {
          if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
          } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "proc_pesq_user.php?q=" + str, true);
            xmlhttp.send();
          }
        }
     </script>
      <label for="email">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" name="email" onkeyup="showHint(this.value)" required>
      <div id="txtHint"></div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <div class="form-group">
      <label for="cel" style="width: 100%;">Celular:</label>
      <input type="text" class="form-control" id="cel" placeholder="digite seu Whatsapp" name="cel">
    </div>
    <div class="form-group">
      <label for="end" style="width: 100%;">Endereço:</label>
      <input type="text" class="form-control" id="end" placeholder="digite seu endereço" name="end">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="digite sua senha" name="senha" required>
      <div class="valid-feedback">Preenchido, obrigado.</div>
      <div class="invalid-feedback">Por favor preencher o campo.</div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<p style="margin: 30px 0px 30px 0px;"></p>