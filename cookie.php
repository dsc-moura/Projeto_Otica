<?php

$Codigo=$_POST['codigo_Oculos'];
$CodigoFuncionario=$_POST['combo_funcionario'];
$DescricaoModelo=$_POST['descricao_Oculos'];
$CodigoCliente=$_POST['id_cliente'];
$CodigoTipoVenda=$_POST['combo_pagamento'];
$ValorTotal=$_POST['campo_Valor_Total'];
$ValorDesconto=$_POST['campo_Desc_Total'];
$Quantidade=$_POST['campo_Quantidade'];

if (isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
} else {
    $count = 1;
}

setcookie('count', $count, time()+600);
setcookie("codigo_oculos[$count]", $Codigo, time()+600);
setcookie("codigo_funcionario[$count]", $CodigoFuncionario, time()+600);
setcookie("descricao_Oculos[$count]", $DescricaoModelo, time()+600);
setcookie("id_cliente[$count]", $CodigoCliente, time()+600);
setcookie("codigo_pagamento[$count]", $CodigoTipoVenda, time()+600);
setcookie("valor_total[$count]", $ValorTotal, time()+600);
setcookie("valor_desconto[$count]", $ValorDesconto, time()+600);
setcookie("quantidade[$count]", $Quantidade, time()+600);

?>
"<meta http-equiv='refresh' content=0;url='venda.php'>";