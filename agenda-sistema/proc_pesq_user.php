<?php
//Incluir a conexão com banco de dados
include_once 'connect/connect.php';

$usuarios = $_REQUEST["q"];
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = $conn->prepare("SELECT * FROM cliente WHERE email='$usuarios'");
$result_user->execute();
$user = $result_user->fetch(PDO::FETCH_ASSOC);

if(isset($user["email"])){
    echo '<span style="color: #DC143C;">Ja existe um usuario cadastrado com este e-mail</span>'; 
}else{
	echo '<span style="color: #32CD32;">E-mail valido</span>';
}

?>