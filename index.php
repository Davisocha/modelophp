<?php


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuleta Quente Churrascaria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="fundofixo">

<!-- Area de Menu -->
    <?php include 'menu_publico.php'; ?>
    <a name="home">&nbsp;</a>
    <main class="container">

    <!-- Area de carrosel -->
    <?php include 'carrosel.php'; ?>

    <!-- area de destaque  -->
    <a class="pt-6" name="destaques">&nbsp;</a>
    <?php include 'produtos_destaque.php';?>
    
    <!-- Area geral de produtos -->
    <a class="pt-6" name="produtos">&nbsp;</a>
    <?php include 'produtos_geral.php';?>
    
    <!-- rodape -->
     <footer class="panel-footer" style="background: none;">
        <?php include 'rodape.php';?>
        <a name="contato"></a>

     </footer>
</main>
</body>

</html>