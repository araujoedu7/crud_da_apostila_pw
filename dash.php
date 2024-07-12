<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="dash.php">Cadastro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dash.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar-usuario">Listar usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar-produto">Listar produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php

                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "listar-usuario":;
                        include("listar-usuario.php");
                        break;
                    case "listar-produto":;
                        include("listar-produto.php");
                        break;
                    case "salvar":
                        include("salvar-usuario-adm.php");
                    default:
                        print "<h1> Bem vindo!</h1>";
                        
                }
                ?>

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>