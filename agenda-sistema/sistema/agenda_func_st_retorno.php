<?php include './include/php/controle.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
<?php include './include/head/js_css.php'; ?>

<script language="JavaScript" type="text/JavaScript">
function atualiza()
{
window.opener.location.reload();
}
</script>

</head>

<body onunload="atualiza()">


<?php include './include/conteudo/forms/agenda_func_st_retorno.php'; ?>


</body>
</html>