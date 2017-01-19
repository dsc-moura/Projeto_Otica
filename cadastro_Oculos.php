<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
﻿<?php
 require("conecta.php");

    //tabela Oculos
  $CodigoItem=$_POST['codigo'];
  $CodigoTipo=$_POST['combo_tipo'];
  $CodigoMarca=$_POST['combo_marca'];
  $CodigoUnidade=$_POST['combo_unidade'];
  $CodigoBarras=$_POST['CodigoBarras'];
  $DescricaoModelo=$_POST['descricao'];
  
  //tabela fornecedor
  $Fornecedor=$_POST['fornecedor'];
  $Cd_Fornecedor=$_POST['cd_fornecedor'];
  $Nf_Compra=$_POST['nf_compra'];  
  $Data=$_POST['data_compra'];
  $Data=date("y-m-d", strtotime(str_replace('/','-',$Data)));
  
  //tabela valores
  $ValorCompra=$_POST['valor_custo'];
  $ValorVenda=$_POST['valor_venda'];
  $valorIcms=$_POST['ali_icms'];
  $ValorIpi=$_POST['ali_ipi'];
  $Fator=$_POST['fator'];


  $strSQL="INSERT INTO OCULOS (codigo_ls,codigo_tipo,codigo_marca,codigo_unidade,codigo_barras,descricao_modelo) VALUES ('".$CodigoItem."','".$CodigoTipo."','".$CodigoMarca."','".$CodigoUnidade."','".$CodigoBarras."','".$DescricaoModelo."')";
 $strFncSQL="INSERT INTO FORNECEDOR (codigo_ls,fornecedor,codigo_fornecedor,nfe_compra,data_nfe)VALUES ('".$CodigoItem."','".$Fornecedor."','".$Cd_Fornecedor."','".$Nf_Compra."','".$Data."')";
 $strValSQL="INSERT INTO VALORES (codigo_ls,valor_compra,valor_venda,valor_icms,valor_ipi,fator)VALUES ('".$CodigoItem."','".$ValorCompra."','".$ValorVenda."','".$valorIcms."','".$ValorIpi."','".$Fator."')";
  mysql_query($strSQL);
  mysql_query($strFncSQL);
  mysql_query($strValSQL);

?>
"<meta http-equiv='refresh' content=0;url='add.php'>";

                