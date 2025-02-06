<?php 
//parametro para conexão
/*1*/ $host = "localhost";
/*2*/ $root ="root";
/*3*/ $pass = "";
/*4*/ $database = "tinsphpdb01";
/*5*/ $port = "3306";

//o banco vai entender em asc2 para poder ler os caracteres
 $charset = "utf8";

//
try{
    //lembre dessa variavel quando usar um comando SQL no PHP ;)
    $conn = new mysqli($host,$root,$pass,$database,$port);

    //diz como o banco vai entender o caracteres, e precisamos da conn e a variavel charset
    mysqli_set_charset($conn, $charset);

}
catch (Throwable $err){/*A classe Throwable permite que você pegue tanto exceções quanto erros com o try-catch, criando um bloco de captura para ambos.*/
die('Atenção rolou um ERRO, cara!'.$err);
}

?>