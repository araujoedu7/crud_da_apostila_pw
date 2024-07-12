<?php
include("../config.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo - painel admistrativo!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/afs-logo-aside.png" type="image/x-icon">
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
                        <a class="nav-link active" aria-current="page" href="dash-adm.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo-usuario">Novo Usuario </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo-produto">Novo produto </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar-usuario">Listar usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar-produto">Listar produto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php

                switch (@$_REQUEST["page"]) {
                    case "listar-usuario":;
                        include("listar-usuario-adm.php");
                        break;

                    case "listar-produto":;
                        include("listar-produto-adm.php");
                        break;

                    case "novo-usuario":;
                        include("novo-usuario-adm.php");
                        break;

                     case "novo-produto":;
                        include("novo-produto-adm.php");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>