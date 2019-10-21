<?php 
session_start();
require_once "configDB.php";

if(isset($_SESSION['nomeUsuario'])){//logado
}else{//se não estiver logado redirecionar para index
    header("location: index.php");
}