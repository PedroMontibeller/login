<?php
//conexao com o DB
require_once 'configDB.php';
function verificar_entrada($entrada){
    $saida = htmlspecialchars($entrada);
    $saida = stripslashes($saida);
    $saida = trim($saida);
    return $saida // retorna a saida limpa
}

if(isset($_POST['action'])){
    if($_POST['action'] == 'cadastro'){
        echo "\n<p>cadastro</p>\n";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
        }else if($_POST['action'] == 'login'){
        echo "\n<p>login</p>\n";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
        }else if($_POST['action'] == 'senha'){
        echo "\n<p>senha</p>\n";
        echo "\n<pre>";
        print_r($_POST);
        echo "\n</pre>";
    }else{
    header("location:index.php");
    }
}else{
    header("location:index.php");
}