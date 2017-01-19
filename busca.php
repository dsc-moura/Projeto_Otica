<?php
require("conecta.php"); 


$Op=$_POST['op'];

switch ($Op)
{
    case 1: ExibeCliente($_POST['id_cliente']);
    break;
    case 2: ExibeOculos($_POST['codigo_Oculos']);
    break;
    case 3: BuscarCodigoBarras($_POST['CodigoBarras']);
    break;
    case 4: ExibeOculosCadastrado($_POST['codigo_oculos']);
    break;
    case 5: CarrinhoCompra($_POST['id_cliente']);
    break; 
    case 6: BuscarCodigoOculos($_POST['codigoMarca'],$_POST['codigoTipo']);
    break;
    case 7: ListaDeProdutos();
    break;

  
}

function ExibeCliente($Codigo)
{   
   $strSQL = "CALL proc_buscar_cliente('".$Codigo."')";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    while($row = mysql_fetch_array($QResultado)) 
    {        
       $conteudo=$conteudo.$row['nome_cliente'];     
    }    
    $estrutura="<input class='form-control'cellspacing='0' cellpadding='0' value='$conteudo'>";  
    echo $estrutura;     
}

function ExibeOculos($Codigo)
{   
    $strSQL = "CALL proc_busca_oculos('".$Codigo."')";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    
    while($row = mysql_fetch_array($QResultado)) 
    { 
        $conteudo.=$row['descricao_modelo'].";";
        $conteudo.=$row['valor_venda'].";";
    }
    echo $conteudo;
}


function BuscarCodigoBarras($Codigo)
{   
    $strSQL = "CALL proc_busca_cdBarras('".$Codigo."')";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    
    while($row = mysql_fetch_array($QResultado)) 
    {        

        $conteudo.=$row['descricao_modelo'].";";
        $conteudo.=$row['fornecedor'].";";
        $conteudo.=$row['codigo_fornecedor'].";";
        $conteudo.=$row['valor_compra'].";";
        $conteudo.=$row['valor_venda'].";";
        $conteudo.=$row['valor_icms'].";";
        $conteudo.=$row['valor_ipi'].";";
        $conteudo.=$row['fator'].";";
    }
    echo $conteudo;
}


function BuscarCodigoOculos($codigoMarca,$codigoTipo)
{  
    $strSQL = "SELECT MAX(CODIGO_LS) AS codigo FROM OCULOS WHERE CODIGO_MARCA = '".$codigoMarca."' AND CODIGO_TIPO = '".$codigoTipo."'";
    $QResultado = mysql_query($strSQL);						
   
    $conteudo="";
    
    while($row = mysql_fetch_array($QResultado)) 
    {      
       $conteudo.=$row['codigo'];
    }   
    echo $conteudo;
}

function ExibeOculosCadastrado($Codigo)
{   
   $strSQL = "CALL proc_busca_oculos('".$Codigo."')";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    while($row = mysql_fetch_array($QResultado)) 
    {   
               
       $conteudo=$conteudo . "<tr>";
       $conteudo=$conteudo . "<td>" .$row['codigo_ls'] . "</td>";
       $conteudo=$conteudo . "<td>" .$row['descricao_modelo'] . "</td>";
       $conteudo=$conteudo . "<td>" .$row['valor_venda'] . "</td>";
       $conteudo=$conteudo . "<td>" .$row['valor_venda'] . "</td>";   
       $conteudo=$conteudo . "<td>" .$row['valor_venda'] . "</td>";
       
       $conteudo=$conteudo."<td class='actions'>";
       $conteudo=$conteudo."<a class='btn btn-success btn-xs' href='view.php'>Visualizar</a>";
       $conteudo=$conteudo."<a class='btn btn-warning btn-xs' href='edit.php'>Editar</a>";
       $conteudo=$conteudo."<a class='btn btn-danger btn-xs'  href='' data-toggle='modal' data-target='#delete-modal'>Excluir</a>";
     
       $conteudo=$conteudo . "</tr>";       
     
    }

    $estrutura="<table class='table table-striped' cellspacing='0' cellpadding='0'>";
    $estrutura=$estrutura."<thead>";
    $estrutura=$estrutura."<tr>";
    
    $estrutura=$estrutura."<th>Código:</th>";
    $estrutura=$estrutura."<th>Código Fornecedor:</th>";
    $estrutura=$estrutura."<th>Marca:</th>";
    $estrutura=$estrutura."<th>Tipo: (R$):</th>";
    $estrutura=$estrutura."<th>Valor:</th>";
    $estrutura=$estrutura."<th class='actions'>Ações:</th>";   
    $estrutura=$estrutura."</tr>";
    $estrutura=$estrutura."</thead>";
    
    $estrutura=$estrutura."<tbody>";
    $estrutura=$estrutura."<tr>";  
    $estrutura=$estrutura.$conteudo;
    $estrutura=$estrutura."</tr> ";
    $estrutura=$estrutura."</tbody>";      
    $estrutura=$estrutura."</table>";

    echo $estrutura;    
}

function CarrinhoCompra($Codigo)
{
    $conteudo="";
    
    if(isset($_COOKIE['id_cliente'])!=""){
        $vetorCodigoO = $_COOKIE['codigo_oculos'];
        $vetorCodigoF = $_COOKIE['codigo_funcionario'];
        $vetorCodigoD = $_COOKIE['descricao_Oculos'];
        $vetorCodigoV = $_COOKIE['valor_total'];
        $vetorCodigoQ = $_COOKIE['quantidade'];   
        $IDCLiente = $_COOKIE['id_cliente'];      

        for($x = 1; $x <= Count($_COOKIE['quantidade']);$x++){
            $IDCli= $IDCLiente[$x];

            if($IDCli == $Codigo ){          
               $produto = $vetorCodigoO[$x];
               $quant = $vetorCodigoQ[$x]; 
               $descricao = $vetorCodigoD[$x];
               $valor = $vetorCodigoV[$x];
               $funcionario = $vetorCodigoF[$x];

               $conteudo=$conteudo . "<tr>";
               $conteudo=$conteudo . "<td>" .$produto. "</td>";
//               $conteudo=$conteudo . "<td>" .$descricao. "</td>";
               $conteudo=$conteudo . "<td>" .$quant. "</td>";
               $conteudo=$conteudo . "<td>" .$valor. "</td>";
               $conteudo=$conteudo . "<td>" .$funcionario. "</td>";

               $conteudo=$conteudo."<td class='actions'>";
               $conteudo=$conteudo."<a class='btn btn-success btn-xs' href='view.php'>Visualizar</a>";                               
               $conteudo=$conteudo."<a class='btn btn-danger btn-xs'  href='' data-toggle='modal' data-target='#delete-modal'>Excluir</a>";

               $conteudo=$conteudo . "</tr>";  
            }
        }
    }
    $estrutura="<table class='table table-striped' cellspacing='0' cellpadding='0'>";
    $estrutura=$estrutura."<thead>";
    $estrutura=$estrutura."<tr>";

    $estrutura=$estrutura."<th>Código:</th>";
//    $estrutura=$estrutura."<th>Descrição:</th>";
    $estrutura=$estrutura."<th>Quantidade:</th>";
    $estrutura=$estrutura."<th>Valor Total:</th>";                                
    $estrutura=$estrutura."<th>Atendente:</th>";
    $estrutura=$estrutura."<th class='actions'>Ações:</th>";   
    $estrutura=$estrutura."</tr>";
    $estrutura=$estrutura."</thead>";

    $estrutura=$estrutura."<tbody>";
    $estrutura=$estrutura."<tr>";  
    $estrutura=$estrutura.$conteudo;
    $estrutura=$estrutura."</tr> ";
    $estrutura=$estrutura."</tbody>";      
    $estrutura=$estrutura."</table>";

    echo $estrutura;
}


function ListaDeProdutos()
{
    $strSQL = "select * from vw_listar_todos_produtos";
    $QResultado = mysql_query($strSQL);						

    $conteudo="";
    
    while($row = mysql_fetch_array($QResultado)) 
    {        
       $conteudo=$conteudo . "<tr>";
       $conteudo=$conteudo . "<td>" .$row['codigo_ls']. "</td>";
       $conteudo=$conteudo . "<td>" .$row['descricao_modelo']."</td>";
       $conteudo=$conteudo . "<td>" .$row['valor_venda']. "</td>";     

       $conteudo=$conteudo . "</tr>";  
    }
        
    
    $estrutura="<table class='table table-striped' cellspacing='0' cellpadding='0'>";
    $estrutura=$estrutura."<thead>";
    $estrutura=$estrutura."<tr>";

    $estrutura=$estrutura."<th>Código:</th>";
    $estrutura=$estrutura."<th>Descrição:</th>";  
    $estrutura=$estrutura."<th>Valor Total:</th>";     
 
  
    $estrutura=$estrutura."</tr>";
    $estrutura=$estrutura."</thead>";

    $estrutura=$estrutura."<tbody>";
    $estrutura=$estrutura."<tr>";  
    $estrutura=$estrutura.$conteudo;
    $estrutura=$estrutura."</tr> ";
    $estrutura=$estrutura."</tbody>";      
    $estrutura=$estrutura."</table>";

    echo $estrutura;
}

