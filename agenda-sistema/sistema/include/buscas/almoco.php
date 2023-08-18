<?php 

$id = $_GET["id"];
$sqli = "SELECT * FROM almoco WHERE id='$id' ";
$exec = $sql->query($sqli);
$alm = mysqli_fetch_assoc($exec);

?>
