<?php include "../conn/connect.php";
include "acesso_com.php";

?>
<?php

if($_POST){
    $ID = $_GET['id'];
    $rotulo = $_POST['rotulo'];
    $sigla = $_POST['sigla'];
    

    $update = $conn->query("UPDATE tipos SET rotulo = '$rotulo', sigla = '$sigla' where id = $ID");
    
    

    if($update){
        HEADER ('location: tipos_lista.php');
    }
}
        if(isset($_GET['id']))
    {
        
        $user = $conn->query("SELECT * from tipos where id =".$_GET['id']);
        $userRow =$user->fetch_assoc();
    }
  ?>
<!-- html:5 -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Tipos - Atualiza</title>
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
                    Atualizando Tipos
                </h2>
                <div class="thumbnail">
                    <div class="alert alert-info">
                        <form action="tipos_atualiza.php?id=<?php echo $_GET['id'];?>" name="form_atualiza_tipo" id="form_atualiza_tipo" method="POST" enctype="multipart/form-data">
                            <!-- input rotulo_tipo -->
                            <label for="rotulo_tipo">Rotulo:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="rotulo" id="rotulo" value="<?php echo $userRow['rotulo'];?>" maxlength="30" placeholder="Digite o novo Rotulo." class="form-control" required autocomplete="off" >
                                </div><!-- fecha input-group -->
                            <br>
                            <!-- fecha input login_usuario -->

                            <!-- input senha_usuario -->
                            <label for="senha">Sigla:</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="sigla" id="sigla" value="<?php echo $userRow['sigla'];?>" maxlength="8" placeholder="Digite a nova sigla desejada." class="form-control" required autocomplete="off">
                            </div><!-- fecha input-group -->
                            <br>
                            <!-- fecha input senha_usuario -->

                            <!-- radio nivel_usuario -->
                            <!-- fecha input-group -->
                            <br>
                            <!-- Fecha radio nivel_usuario -->

                            <!-- btn enviar -->
                            <input type="submit" value="Atualizar" role="button" name="enviar" id="enviar" class="btn btn-block btn-info" href="../admin/tipos_lista.php">
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