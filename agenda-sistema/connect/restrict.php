<?php
    $restric = "login.php?login=erro";
    $restric = $dominio.$restric;
    if(! $_SESSION["login"] && ! $_SESSION["senha"]){
        header("location:$restric");
    }
?>