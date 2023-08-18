<p style="margin: 30px 0px 30px 0px;"></p>  
 <div class="contener">
  <div class="row" style="padding: 10px 0px 10px 0px;">
    <div class="col-sm-4" style="margin-left: auto; margin-right: auto;">
        <a href="horarios.php"><button type="button" class="btn btn-warning btn-lg btn-block">Horários</button></a>
        <p style="margin: 20px 0px 20px 0px;"></p>  
        <a href="perfil.php"><button type="button" class="btn btn-warning  btn-lg btn-block">Meu Perfil</button></a>
        <p style="margin: 20px 0px 20px 0px;"></p>
        <?php echo "<a href='controle/logout.php?token=".md5(session_id())."'><button type='button' class='btn btn-danger  btn-lg btn-block'>
			 Encerrar</button></a>"; ?>
        
    </div>
  </div>