<?php
session_start();
include('../config.php');
// include('../controllers/excluir_usuario.php');
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Produto</title>
    <link rel="shortcut icon" href="./assets/afs-logo-aside.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
                        <a class="nav-link" href="?page=novo">Novo Usuario</a>
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
                    case "listar-usuario":
                        include("listar-usuario-adm.php");
                        break;
                    case "listar-produto":
                        include("listar-produto-adm.php");
                        break;
                    case "novo":
                        include("novo-usuario-adm.php");
                        break;
                    case "salvar":
                        include("salvar-usuario-adm.php");
                        break;
                    default:
                        echo "<p>Bem-vindo à administração.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Incluindo o arquivo que contém a função editar-produto
        include("../controllers/editar-produto.php");

        $sql = $conn->query("SELECT * FROM produtos WHERE id = $id");

        if ($sql !== false) {
            if ($dados = $sql->fetch_object()) { ?>
                <div class="container mt-5">
                    <div class="row align-items-center">
                        <div class="col-md-10 mx-auto col-lg-5">
                            <p class="h2">Editar Produto</p>
                            <form action="" method="POST">
                                <input type="hidden" name="acao" value="cadastrar">
                                <div class="mb-3">
                                    <label>Nome</label>
                                    <input type="text" name="nome" class="form-control" value="<?= htmlspecialchars($dados->nome_produto) ?>">
                                </div>
                                <div class="mb-3">
                                    <label>Preço</label>
                                    <input type="text" name="preco" class="form-control" value="<?= htmlspecialchars($dados->preco_produto) ?>">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="btn btn-success" name="editar" value="Alterar dados">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    <?php
            } else {
                echo "<p>Produto não encontrado.</p>";
            }
        } else {
            echo "<p>Erro na consulta SQL: " . $conn->error . "</p>";
        }
    } else {
        echo "<p>ID do produto não fornecido.</p>";
    }
    ?>

</body>
</html>
