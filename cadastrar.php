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
    session_start();

    if(isset($_POST['btn-cadastrar'])){
        $nome = mysqli_escape_string($connect, $_POST['txtnome']);
        $email = mysqli_escape_string($connect, $_POST['txtemail']);
        $tel = mysqli_escape_string($connect, $_POST['txttel']);

            $sql= "INSERT INTO usuarios(`id`,`nome`,`email`, `telefone`) VALUES(NULL,'$nome', '$email', '$tel')";
            mysqli_query($connect, $sql);
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('location:index.php');

    }
    ?>


    <h1>Cadastrar</h1>
    <section>
    <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="txtnome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="txtemail">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Telefone:</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1" name="txttel">
                </div>
                <input type="file" name="file"><br><br>

            <button type="submit" class="btn btn-primary" name="btn-cadastrar">Cadastrar</button>
        </form>
        <a href="index.php" class="btn btn-primary">Lista de Clientes</a>
    </section>   

</body>
</html>