<?php    
$usuario="root";
$senha='lspwd%c$chr';
$banco="sistema_oculos";
$servidor="localhost";
 $conexao = mysql_connect($servidor,$usuario,$senha); 
	if($conexao) { $baseSelecionada = mysql_select_db($banco); 
		if (!$baseSelecionada) { die ('Não foi possível conectar a base de dados: ' . mysql_error()); } } 
		else { die('Não conectado : ' . mysql_error()); } 
?>


