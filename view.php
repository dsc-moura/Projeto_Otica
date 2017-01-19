<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Consultar Produtos</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.9.1.min.js"></script>   
    <script type="text/javascript">      
        $(document).ready(function () {      
            $("#codigo_oculos").change(function () {        
                CarregaAlgumaCoisa();
            });

          function CarregaAlgumaCoisa()
          {
            $("#load").html();          
            $.ajax({
               url:'busca.php', 
               type:'POST', 
               data: 'op=4&codigo_oculos='+jQuery('#codigo_oculos').val(),
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
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                    </div>
                    <div class="modal-body">
                    Deseja realmente excluir este item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                    </div>
                </div>
            </div>
        </div>
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
                                <li><a href="cadastro.html">Cliente</a></li>
                            </ul>                    
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="main" class="container ">             
            <h3 class="page-header"></h3>
            <h1>Consultar Produtos</h1>

            <div id="top" class="row">
                <div class="col-md-3">
                    <h2>Produto</h2>
                </div>

                <div class="col-md-9">
                    <div class="input-group h2">
                        <input name="data[search]" class="form-control" name="codigo_oculos" id="codigo_oculos" value="" type="text" placeholder="Código do Produto">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div> <!-- /#top -->
            <div id="list" class="row"> 
                <div class="table-responsive col-md-12">
              
                    <div id="tabela">
                   
                    </div>
                </div>
            </div> <!-- /#list -->
        </div>       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>