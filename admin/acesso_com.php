<?php
session_name('chulettaaa');
if(!isset($_SESSION)){
    session_start();
}
//segurança digital
//verificar se um usuario está logado na sessão
if(!isset($_SESSION['login_usuario'])){
    //se não existir, redirecionamos a sessão por segurança
    header('location: login.php');//esse é um redirecionamento
    exit;
    
}
$nome_da_sessao = session_name();//ele passa o nome da sessão
if(!isset($_SESSION['nome_da_sessao']) or ($_SESSION['nome_da_sessao'] != $nome_da_sessao)){// ele confere se o nome da sessão dele é igual ao nome da sessão que eu coloquei
    session_destroy();
    header('location: login.php');
}
?>