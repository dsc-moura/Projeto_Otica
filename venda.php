<?php require("funcoes.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Pedidos de Venda</title>
  
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.9.1.min.js"></script>   
    <script type="text/javascript">      
        $(document).ready(function () {      
            $("#id_cliente").change(function () {        
                CarregaAlgumaCoisa();
            });

          function CarregaAlgumaCoisa()
          {
            $("#load").html();          
            $.ajax({
               url:'busca.php', 
               type:'POST', 
               data: 'op=1&id_cliente='+jQuery('#id_cliente').val(),
               success: function(data){ 
                 $("#cliente").empty();             
                 $("#cliente").append(data);           
                 $("#load").empty();                                           
               } 
            }); 		  
          }      
        });  
    </script>   
    
    <script type="text/javascript">        
    function CarregaAlgumaCoisa()
    {
      $("#load").html();          
      $.ajax({
         url:'busca.php', 
         type:'POST', 
         data: 'op=7'+jQuery().val(),
         success: function(data){
           var res = data.split(";");
           $("#table").empty();             
           $("#table").append(data);           
           $("#load").empty();                                           
         } 
      }); 		  
    }     
    </script>    
    
    <script type="text/javascript">      
    $(document).ready(function () {      
        $("#id_cliente").change(function () {        
            CarregaAlgumaCoisa();
        });

      function CarregaAlgumaCoisa()
      {
        $("#load").html();          
        $.ajax({
           url:'busca.php', 
           type:'POST', 
           data: 'op=5&id_cliente='+jQuery('#id_cliente').val(),
           success: function(data){
             var res = data.split(";");
             $("#tabela").empty();             
             $("#tabela").append(data);           
             $("#load").empty();                                           
           } 
        }); 		  
      }      
    });  
    </script>
    
    <script type="text/javascript">      
    $(document).ready(function () {      
        $("#id_cliente").change(function () {        
            CarregaAlgumaCoisa();
        });

      function CarregaAlgumaCoisa()
      {
        $("#load").html();          
        $.ajax({
           url:'busca.php', 
           type:'POST', 
           data: 'op=5&id_cliente='+jQuery('#id_cliente').val(),
           success: function(data){
             var res = data.split(";");
             $("#tabela").empty();             
             $("#tabela").append(data);           
             $("#load").empty();                                           
           } 
        }); 		  
      }      
    });  
    </script>
    
    <script type="text/javascript">   
    $(document).ready(function () 
    {       
        $("#codigo_Oculos").change(function () 
        {        
            if($("#CodigoBarras").val()!="")
            {
               CarregaAlgumaCoisa();
            }
        });

        function CarregaAlgumaCoisa()
        {
            $("#load").html();          
            $.ajax({
                url:'busca.php', 
                type:'POST', 
                data: 'op=2&codigo_Oculos='+jQuery('#codigo_Oculos').val(),
                success: function(data){ 
                    var res = data.split(";");                  
                    $("#descricao_Oculos").val(res[0]); 
                    $("#val_unitario").val(res[1]);               
                    $("#load").empty();
                }
            }); 		  
        }
    });
    </script>
    <script type="text/javascript">
      // Delayed Modal Display + Cookie On Click
    $(document).ready(function() {

      // If no cookie with our chosen class...
      if ($.cookie("dismiss") == null) {

        // Show the modal, with the delay function
        $('#myModal').appendTo("body");
        function show_modal(){
          $('#myModal').modal();
        }

        // Set the delay function time in milliseconds
        window.setTimeout(show_modal, 3000);
        }

      // On click of the chosen class, trigger the cookie
      $(".dismiss").click(function() {
        document.cookie = "dismiss=true";
      });
    });
    </script> 
    
    <script type="text/javascript">
      // Delayed Modal Display + Cookie On Click
    $(document).ready(function() {

      // If no cookie with our chosen class...
      if ($.cookie("dismiss") == null) {

        // Show the modal, with the delay function
        $('#MyListaProdutos').appendTo("body");
        function show_modal(){
          $('#MyListaProdutos').modal();
        }

        // Set the delay function time in milliseconds
        window.setTimeout(show_modal, 3000);
        }

      // On click of the chosen class, trigger the cookie
      $(".dismiss").click(function() {
        document.cookie = "dismiss=true";
      });
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
                    Deseja realmente excluir este item do Carrinho?                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="text-center">SEU CARRINHO</h4>
                </div>
                <div class="modal-body">
                    <div id="list" class="row"> 
                        <div class="table-responsive col-md-12">                       
                            <div id="tabela"></div>
                        </div>
                    </div> <!-- /#list -->
                </div>
                <div class="modal-footer">
                <!-- Make sure to include the 'dismiss' class on the buttons -->
                    <button class="btn btn-default dismiss" data-dismiss="modal" aria-hidden="true">CONTINUAR COMPRANDO</button>
                    <button class="btn btn-primary dismiss" data-dismiss="modal" aria-hidden="true">COMPRAR</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
    
    <div id="MyListaProdutos" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="text-center">LISTA DE PRODUTOS</h4>
                </div>
                <div class="modal-body">
                    <div id="list" class="row"> 
                        <div class="table-responsive col-md-12">                       
                            <div id="table"></div>
                        </div>
                    </div> <!-- /#list -->
                </div>
                <div class="modal-footer">
                <!-- Make sure to include the 'dismiss' class on the buttons -->
                    <button class="btn btn-default dismiss" data-dismiss="modal" aria-hidden="true">FECHAR</button>
                    <a class="btn btn-primary" onclick="return CarregaAlgumaCoisa();">LISTAR ARMAÇÕES</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
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
                    <li><a href="index.php"> Inicio</a></li>                
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Ótica <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="add.php">Cadastrar Produtos</a></li>
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
                        <li><a href="" data-toggle="modal" data-target="#myModal">SEU CARRINHO (0) <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li> 
                </ul>
            </div>            
        </div>
    </nav>
    
    <div id="main" class="container">
        <h3 class="page-header"></h3> 
        <h1 class="text-center">Pedidos de Venda</h1>
        <form action="cookie.php" method="post">
            <fieldset>                    
                <legend>Funcionários</legend>
                <div class="form-group col-md-12">                                   
                    <label for="combo_Funcionario">Selecione o Funcionário</label>                   
                    <select class="form-control" name="combo_funcionario" id="combo_funcionario">
                        <option value="0">Selecione o Funcionário</option>
                        <?php listaFuncionarios(); ?>
                    </select>                                                    
                </div>  
                
                <legend>Cliente</legend> 
                
                <div class="form-group col-md-2">
                    <div id="load"></div>
                    <label for="id_cliente">Código Cliente:</label>
                    <input type="text" class="form-control" name="id_cliente" id="id_cliente">                      
                </div>

                <div class="form-group col-md-10">                    
                    <label for="nome_cliente">Nome:</label>
                    <div id="cliente">
                        <input type="text" class="form-control" name="nome_cliente" value="" id="cliente">    
                    </div>
                </div>

                <legend>Armações, Lentes & Outros</legend> 

                <div class="form-group col-md-2">
                    <div class="input-group">                         
                        <div id="load"></div>
                        <label for="codigo_Oculos">Código:</label>
                        <input type="text" class="form-control" name="codigo_Oculos" value="" id="codigo_Oculos">                    
                        <span class="input-group-btn" style="top:13px;">					  
                            <a class="btn btn-primary" data-toggle="modal" data-target="#MyListaProdutos"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div>

                <div class="form-group col-md-10 ">
                    <div class="form-group">
                        <label for="descricao_Oculos">Descrição:</label>
                        <div id="oculos">
                            <input type="text" class="form-control" name="descricao_Oculos" value="" id="descricao_Oculos">
                        </div>
                    </div>                    
                </div> 

                <div class="form-group col-md-2">
                    <label for="val_unitario">Valor Unitário:</label>                   
                    <input type="text" class="form-control" id="val_unitario" value="" name="val_unitario">                   
                </div>

                <div class="form-group col-md-2">
                    <label for="campo_Desc_Uni">Desc. Unitário:</label>
                    <input type="text" class="form-control" value="" name="campo_Desc_Uni" id="campo_Desc_Uni">
                </div>

                <div class="form-group col-md-1">
                    <label for="campo_Quantidade">Qtd.</label>                        
                    <input type="text" class="form-control" value="" name="campo_Quantidade" id="campo_Quantidade">                      
                </div>

                <div class="form-group col-md-2">
                    <label for="campo_Desc_Total">Desconto Total:</label>                        
                    <input type="text" class="form-control" value="" name="campo_Desc_Total" id="campo_Desc_Total">                      
                </div>
                
                <div class="form-group col-md-2">
                    <label for="campo_Valor_Total">Valor Total:</label>                        
                    <input type="text" class="form-control" value="" name="campo_Valor_Total" id="campo_Valor_Total">                      
                </div>

                <div class="form-group col-md-3"> 
                    <div class="form-group">
                        <label for="combo_FormaPagamentos">Forma de Pagamento:</label>
                        <select class="form-control" name="combo_pagamento" id="combo_pagamento">
                            <option value="0">Forma de Pagamento</option>
                            <?php listaOpcoesPagamentos(); ?>                               
                        </select>                                  
                    </div>
                </div>  
                
                <div class="form-group col-md-3 col-md-offset-9">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Adicionar ao Carrinho</button>               
                </div>         
            </fieldset>
            
            <fieldset>
                <!-- 
                <legend>Carrinho de Produtos</legend> 
                <div id="list" class="row"> 
                    <div class="table-responsive col-md-12">                       
                        <div id="tabela">
                            
                        </div>
                     </div>
                </div>
                /#list -->
                
                <div class="form-group col-md-3">
                    <label for="campo_Valor_Total">Total da Compra:</label>                        
                    <input type="text" class="form-control" id="campo3">                      
                </div>                        
                <div class="form-group col-md-3 col-md-offset-9">
                    <div class="form-group">                       
                        <button type="button" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  Finalizar Compra</button>
                        <button type="button" class="btn btn-danger btn-lg btn-block"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Cancelar Compra</button>
                    </div>
                </div>                  
            </fieldset>            
        </form>       
    </div>  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>