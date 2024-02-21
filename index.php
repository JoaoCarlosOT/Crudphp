<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    

    <header class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="cadastrar.php">Cadastrar</a>
            <form class="d-flex" role="search" method="GET" action=""> 
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pesquisa">
                <button class="btn btn-outline-success" type="submit" name="busca">Search</button>
            </form>
        </div>
    </header>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>   
        </thead>

        <tbody>

        <?php
           include_once 'mensagem.php';
           include_once 'conexao.php';

            if(isset($_GET['busca'])){
            $pesquisa = mysqli_escape_string($connect, $_GET['pesquisa']);

            $sql= "SELECT * FROM usuarios WHERE `nome` LIKE '%$pesquisa%' OR `email` LIKE '%$pesquisa%' OR `telefone` LIKE '%$pesquisa%' ";
            $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0){
                    while($dados = mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $dados['id']; ?>">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }

                }else {

                    while($dados = mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $dados['id']; ?>">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                }


            }else {

            $sql= "SELECT * FROM usuarios";
            $resultado = mysqli_query($connect, $sql);

                while($dados = mysqli_fetch_array($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="editar.php?id=<?php echo $dados['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $dados['id']; ?>">Excluir</a>
                            </td>
                        </tr>
                        <?php
                }
                
            } 

         ?>

        </tbody>
    </table>

    
</body>
</html>