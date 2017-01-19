<?php require("funcoes.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>Inventário</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.9.1.min.js"></script>   
  <script type="text/javascript">
      
    $(document).ready(function () {   
      
        $("#combo_unidade").change(function () {
        
              CarregaAlgumaCoisa();
        });
      
      function CarregaAlgumaCoisa()
      {
        $("#load").html('<img src="img/loading.gif" width="16" height="16">');
          
        $.ajax({
           url:'funcoes.php', 
           type:'POST', 
           data: 'op=1&combo_unidade='+jQuery('#combo_unidade').val(),
           success: function(data){ 
             $("#tabela").empty();
             $("#tabela").append(data);      
             
             $("#load").empty();                                           
           } 
        }); 		  
      }
      
    });
  
 </script>
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
                <a class="navbar-brand" href="#">Ótica Laysom</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php"> Home</a></li>                
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ótica<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="add.php">Cadastrar de Produtos</a></li>
                            <li><a href="view.php">Consultar Produtos</a></li>      
                            <li><a href="inventario.php">Inventário Ótica</a></li>
                            <li><a href="venda.php">Pedido de Venda</a></li>
                        </ul>                    
                    </li>         
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ferramentas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/products">Cadastro de Marcas</a></li>
                            <li><a href="login-voo.html">Tipos de Óculos</a></li>      
                            <li><a href="/products">Cadastro de Unidades</a></li>
                            <li><a href="/products">Formas de Pagamento</a></li>
                        </ul>                    
                    </li>             
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cliente <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cadastro.php">Cliente</a></li>                                  
                        </ul>                    
                    </li>
                </ul>    
            </div>
        </div>
    </nav> 
    
    <div id="main" class="container">
        <h3 class="page-header"></h3>
        <h1 class="text-center">Inventário de Ótica</h1>
        <form action="funcoes.php" method="post">
        <fieldset>
            <legend><img src="_imagens/glyphicons-453-shop.png"> Unidades</legend>
                <div class="form-group col-md-6"> 
                    <div class="form-group">
                        <div id="load"></div>
                        <label for="comboUnidade">Unidade</label>
                        <select class="form-control" name="combo_unidade" id="combo_unidade" placeholder="">
                              <option value="0">Selecione a Unidade</option>
                              <?php listaUnidades(); ?>                          
                        </select>                                  
                    </div>                    
                </div>
        </fieldset>
        <div class="form-group col-md-3 col-md-offset-9">
            <button type="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Imprimir Inventário</button> 
	</div>
        <legend><span class="glyphicon glyphicon glyphicon glyphicon-sunglasses" aria-hidden="true"></span> Óculos Cadastrados na Unidade</legend>
        <div class="table-responsive col-md-12">
            <div id="tabela"></div>
                
        </div> 
        </form>
    </div> 
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>