<?php  
    function error_handler($code, $message, $file, $line){
        $handler = array(
            "code" => $code,
            "message" => $message,
            "file" => $file,
            "line" => $line
        );
        echo "<h2 style='text-align: center;'>Aconteceu um error na execução</h2>
        <p style='width: 75%; font-size: 24px; margin-left: auto; magin-right: auto;'>
        Código de erro: ".$handler["code"]."<br>Mensagem do erro: ".$handler["message"]."<br>Arquivo: ".$handler["file"]."<br>Linha: ".$handler["line"]."</p>";
    }
?>

