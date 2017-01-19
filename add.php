<?php require("funcoes.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Cadastro de Produtos</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.9.1.min.js"></script>   
    <script type="text/javascript">          
        $(document).ready(function () 
        {      
        
         $("#combo_marca").change(function () 
            {        
                if($("#combo_marca").val()!="" && $("#combo_tipo").val()!="" )
                {
                    BuscaCodigoOculos();
                }
            });
            
            $("#combo_tipo").change(function () 
            {        
                if($("#combo_marca").val()!="" && $("#combo_tipo").val()!="" )
                {
                    BuscaCodigoOculos();
                }
            });

            $("#CodigoBarras").change(function () 
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
               data: 'op=3&CodigoBarras='+jQuery('#CodigoBarras').val(),
               success: function(data){ 
                 var res = data.split(";");                  
                 $("#descricao").val(res[0]); 
                 $("#fornecedor").val(res[1]); 
                 $("#cd_fornecedor").val(res[1]);
                 $("#valor_custo").val(res[3]); 
                 $("#valor_venda").val(res[4]);
                 $("#ali_icms").val(res[5]);
                 $("#ali_ipi").val(res[6]);
                 $("#fator").val(res[7]);
                 $("#load").empty();
               }
            }); 		  
          }
          
          function BuscaCodigoOculos()
          {             
            $("#load").html();          
            $.ajax({
               url:'busca.php', 
               type:'POST', 
               data: 'op=6&codigoMarca='+jQuery('#combo_marca').val()+'&codigoTipo='+jQuery('#combo_tipo').val(),
               success: function(data){ 
                 $("#codigo").val(data);                
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
    <div id="main" class="container">
        <h3 class="page-header"></h3> 
          <h1>Cadastro de Produtos Óticos</h1>
        <form action="cadastro_Oculos.php" method="post">
            <fieldset class="col-md-6">                    
                <legend>Código & Descrição</legend>
                    <div class="form-group">                                   
                        <label for="campoMarca">Marca</label>
                        <select class="form-control" name="combo_marca" id="combo_marca">
                            <option value="">Selecione a Marca</option>
                            <?php listaMarcas(); ?> 
                        </select>

                        <label for="campoTipo">Tipo</label>
                        <select class="form-control" name="combo_tipo" id="combo_tipo">
                            <option value="">Selecione o Tipo</option>
                            <?php tipoOculos(); ?>                                  
                        </select>                               
                    </div>                                    
                      
                    <div class="form-group">
                        
                        <label for="codigoBarras">Código de Barras:</label>
                        <input type="text" class="form-control" name="CodigoBarras" value="" id="CodigoBarras">                        
                    </div>

                    <div class="form-group">
                       <label for="codigo">Código Laysom:</label>                      
                       <input type="text" class="form-control" name="codigo" value="" id="codigo">                     
                    </div>

                    <div class="form-group">
                       <label for="descricao">Descrição:</label>
                       <input type="text" class="form-control" name="descricao" id="descricao">
                    </div>
                
                    <div class="form-group">
                       <label for="cd_fornecedor">Código do Fornecedor:</label>
                       <input type="text" class="form-control" name="cd_fornecedor" id="cd_fornecedor">
                    </div>

                    <div class="form-group">
                       <label for="fornecedor">Fornecedor:</label>
                       <input type="text" class="form-control" name="fornecedor" id="fornecedor">
                    </div>

                    <div class="form-group">
                        <label for="nf_compra">NF-e Compra:</label>
                        <input type="text" class="form-control" name="nf_compra" id="nf_compra">
                    </div>
                
                    <div class="form-group">
                        <label for="data_compra">Data Compra:</label>                        
                        <input class="form-control" type="date" value="" name="data_compra" id="data_compra">                        
                    </div>
            </fieldset>
            
            <fieldset class="col-md-6">
                <legend>Valores & Preços:</legend>
                <div class="form-group">
                    <div class="form-group">
                        <label for="valor_custo">Preço de Custo:</label>
                        <input type="text" class="form-control" name="valor_custo" id="valor_custo">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="fator">Fator:</label>
                        <input type="text" class="form-control" name="fator" value="" id="fator">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="ali_ipi">Aliquota IPI:</label>
                        <input type="text" class="form-control" name="ali_ipi" id="ali_ipi">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="ali_icms">Aliquota ICMS:</label>
                        <input type="text" class="form-control" name="ali_icms" id="ali_icms">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="valor_venda">Valor Venda:</label>
                        <input type="text" class="form-control" name="valor_venda" id="valor_venda">
                    </div>
                </div>
                
                <legend>Local da Venda</legend>
                <div class="form-group"> 
                    <div class="form-group">
                        <label for="comboUnidade">Unidade</label>
                        <select class="form-control" name="combo_unidade" id="combo_unidade">
                            <option value="">Selecione a Unidade</option>
                            <?php listaUnidades(); ?>                       
                        </select>                                  
                    </div>
                </div>
            </fieldset>         
            <div class="form-group col-md-3 col-md-offset-9">   
                <div class="form-group">
                    <button type="submit" name="salvar" value="salvar" class="btn btn-success btn-lg btn-block">Salvar</button> 
                    <button type="button" class="btn btn-danger btn-lg btn-block">Cancelar</button>
                </div>    
            </div>           
        </form>       
    </div>    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>