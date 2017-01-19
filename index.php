<?php require("funcoes.php");?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Pagina Inicial</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Ótica Laysom</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php"> Home</a></li>                
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Ótica <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="add.php">Cadastrar de Produtos</a></li>
                            <li><a href="view.php">Consultar Produtos</a></li>      
                            <li><a href="inventario.php">Inventário Ótica</a></li>
                            <li><a href="venda.php">Pedido de Venda</a></li>
                        </ul>                    
                    </li>         
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Ferramentas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/products">Cadastro de Marcas</a></li>
                            <li><a href="login-voo.html">Tipos de Óculos</a></li>      
                            <li><a href="/products">Cadastro de Unidades</a></li>
                            <li><a href="/products">Formas de Pagamento</a></li>
                        </ul>                    
                    </li>             
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Cliente <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro.php">Cliente</a></li>
                        </ul>                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>




</body>
</html>
