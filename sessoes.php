<?php

session_start();
$usuario="Daniel";
$senha="1234";

if($usuario=="Daniel" and $senha=="123"){
    $_SESSION['logado']=true;
    echo "logado";
}else{
    echo "Não Logado";
}
