<?php
    $restric = "c_master/login.php?login=erro";
    $restric = $dominio.$restric;
    if(! $_SESSION["masterlogin"] && ! $_SESSION["mastersenha"]){
        return header("location:$restric");
    }
?>