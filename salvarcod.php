
﻿<?php
   require("conecta.php"); 
  $CodigoItem=$_POST['codigo'];

  $strSQL="insert into tb_teste(Nome) values ('".$CodigoItem."')";
  mysql_query($strSQL);


?>

echo  "<meta http-equiv='refresh' content=0;url='index.php'>";


