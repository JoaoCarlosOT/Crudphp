<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <?php
    include_once 'conexao.php';
    

    if(isset($_GET['id'])){
        $id = mysqli_escape_string($connect, $_GET['id']);
        $sql = "SELECT * FROM `usuarios` WHERE `id` = '$id'";
    
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado); 
    
        
    }


    ?>


    <h1>Editar</h1>
    <section>
        <form action="editado.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id']?>">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" name="txtnome" value="<?php echo $dados['nome']?>">
            </div><br>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Email" name="txtemail" value="<?php echo $dados['email']?>">
            </div><br>
            <div class="mb-3">
                <label for="tele" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="tele" placeholder="Telefone" name="txttel" value="<?php echo $dados['telefone']?>">
            </div><br>
            <button type="submit" name="btn-editar" class="btn btn-primary">Editar</button>
        </form>
        <a href="index.php" class="btn btn-primary">Lista de Clientes</a>
    </section>   
</body>
</html>