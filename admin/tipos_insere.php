<?php include "../conn/connect.php";
include "acesso_com.php";
?>
<?php
if($_POST){
    $rotulo = $_POST['rotulo'];
    $sigla = $_POST['sigla'];
    

    $incluir = $conn->query("INSERT INTO tipos VALUES (0,'$rotulo','$sigla')");
    
}if(!isset($incluir)){
    

}else{
     echo "<script>alert('Tipo $rotulo cadastrado com sucesso')</script>";
 } ?>
<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tipos - Insere</title>
    <meta charset="UTF-8">
    <!-- Link arquivos Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Link para CSS específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>

<body>
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"><!-- dimensionamento -->
                <h2 class="breadcrumb text-info">
                    <a href="index.php">
                        <button class="btn btn-info" type="button">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </button>
                    </a>
                    Inserindo Tipos
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-info">
                        <form action="tipos_insere.php" name="form_insere_tipo" id="form_insere_tipo" method="POST" enctype="multipart/form-data">
                            <!-- input rotulo_tipo -->
                            <label for="rotulo_tipo">Rotulo:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo" id="rotulo" autofocus maxlength="30" placeholder="Digite o Rotulo." class="form-control" required autocomplete="off">
                            </div><!-- fecha input-group -->
                            <br>
                            <!-- fecha input login_usuario -->

                            <!-- input senha_usuario -->
                            <label for="senha">Sigla:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="sigla" id="sigla" maxlength="8" placeholder="Digite a sigla desejada." class="form-control" required autocomplete="off">
                            </div><!-- fecha input-group -->
                            <br>
                            <!-- fecha input senha_usuario -->

                            <!-- radio nivel_usuario -->
                            <!-- fecha input-group -->
                            <br>
                            <!-- Fecha radio nivel_usuario -->

                            <!-- btn enviar -->
                            <input type="submit" value="Cadastrar" role="button" name="enviar" id="enviar" class="btn btn-block btn-info">
                        </form>
                    </div><!-- fecha alert -->
                </div><!-- fecha thumbnail -->
            </div><!-- Fecha dimensionamento -->
        </div><!-- Fecha row -->
    </main>

    <!-- Link arquivos Bootstrap js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>