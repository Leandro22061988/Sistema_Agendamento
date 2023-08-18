<?php
//Incluir a conexão com banco de dados
include_once 'connect/connect.php';

$usuarios = $_REQUEST["q"];
//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = $conn->prepare("SELECT * FROM alunos WHERE login='$usuarios'");
$result_user->execute();
$user = $result_user->fetch(PDO::FETCH_ASSOC);

if(isset($user["login"])){
    echo '<span style="color: #DC143C;">Ja existe um usuario cadastrado com este login</span>'; 
}else{
	echo '<span style="color: #32CD32;">Login valido</span>';
}

?>