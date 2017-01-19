<?php

require("conecta.php"); 


$CodigoTipo=$_POST['combo_tipo'];
$CodigoMarca=$_POST['combo_marca'];

    $strSQL = "SELECT MAX(CODIGO_LS) AS codigo FROM OCULOS WHERE CODIGO_MARCA ='.$CodigoMarca.' && CODIGO_TIPO = '.$CodigoTipo.'";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    while($row = mysql_fetch_array($QResultado)) 
    {        
      $conteudo=$conteudo.$row['codigo']; 
       
    }
    $estrutura="<input class='form-control'cellspacing='0' cellpadding='0' value='$conteudo'>";  
    echo $estrutura;  
    