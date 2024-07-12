<?php
include_once("../config.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Usuarios</title>
    <script src="https://kit.fontawesome.com/7ffdafc7d7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <br><br><br>
    <?php
    include("../controllers/excluir_usuario.php")
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id do produto</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Editar Produto</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            $sql = $conn->query("SELECT * FROM produtos");
            while ($dados = $sql->fetch_object()) { ?>
                <tr>
                    <td><?= $dados->id?></td>
                    <td><?= $dados->nome_produto?></td>
                    <td><?="R$ " . $dados->preco_produto ?></td>
                    <td>
                        <a href="editar-produto-adm.php?id=<?= $dados->id ?>" class="btn btn-small btn-warning"> <i class="fa-solid fa-pen-to-square"></i> </a>
                        <a href="../controllers/excluir-produto.php?id=<?= $dados->id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>




    </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>