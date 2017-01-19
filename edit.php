<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Editar Cadastro</title>
  
  <!-- Bootstrap CSS -->
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
                <a class="navbar-brand" href="#">Ótica Laysom</a>
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
        <form>
            <fieldset class="col-md-6">                    
                <legend>Código & Descrição</legend>

                    <div class="form-group">                                   
                        <label for="campoMarca">Marca</label>
                        <select class="form-control" name="size">
                            <option value="">Selecione a Marca</option>
                            <option value="s">Rayban</option>
                            <option value="m">Oakley</option>
                            <option value="l">Lacoste</option>
                            <option value="xl">Vogue</option>
                         </select>

                        <label for="campoTipo">Tipo</label>
                        <select class="form-control" name="size">
                            <option value="">Selecione o Tipo</option>
                            <option value="s">Receituário</option>
                            <option value="m">Solar</option>
                            <option value="l">Maquiagem</option>                                        
                         </select>                               
                    </div>                                    
                      
                    <div class="form-group">
                        <label for="campo1">Código de Barras:</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>

                    <div class="form-group">
                       <label for="campo2">Código Laysom:</label>
                       <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group">
                       <label for="campo3">Descrição:</label>
                       <input type="text" class="form-control" id="campo3">
                    </div>
                
                    <div class="form-group">
                       <label for="campo1">Código do Fornecedor:</label>
                       <input type="text" class="form-control" id="campo1">
                    </div>

                    <div class="form-group">
                       <label for="campo2">Fornecedor:</label>
                       <input type="text" class="form-control" id="campo3">
                    </div>

                    <div class="form-group">
                       <label for="campo3">NF-e Compra:</label>
                       <input type="text" class="form-control" id="campo3">
                    </div>
                
                    <div class="form-group">
                        <label for="example-date-input">Data Compra:</label>                        
                        <input class="form-control" type="date" value="" id="example-date-input">                        
                    </div>
            </fieldset>
            
            <fieldset class="col-md-6">
                <legend>Valores & Preços:</legend>
                <div class="form-group">
                    <div class="form-group">
                        <label for="campo1">Preço de Custo:</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="campo1">Fator:</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="campo1">Aliquota IPI:</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="campo1">Aliquota ICMS:</label>
                       <input type="text" class="form-control" id="campo1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="campo1">Valor Venda:</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>
                </div>
                
                <legend>Local da Venda</legend>
                <div class="form-group"> 
                    <div class="form-group">
                        <label for="comboUnidade">Unidade</label>

                        <select class="form-control" name="size">
                            <option value="">Selecione a Unidade</option>
                            <option value="s">Paraíso</option>
                            <option value="m">Pinheiros</option>
                            <option value="l">ABC</option>                                        
                        </select>                                  
                    </div>
                </div>
            </fieldset>
            <div class="form-group col-md-3 col-md-offset-9">   
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-lg btn-block">Salvar</button>
                    <button type="button" class="btn btn-danger btn-lg btn-block">Cancelar</button>
                </div>    
            </div>          
        </form>       
    </div>    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>    
</body>
</html>