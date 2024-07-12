<?php 
    require_once ('../config.php');
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça seu  Cadastro!</title>
    <link rel="shortcut icon" href="../assets/afs-logo-aside.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <div class="container mt-5">
        <div class="row aling-items-center">
            <div class="col-md-10 mx-auto col-lg-5 ">
            <p class="h2">Cadastrar novo produto.</p>
            <form action="salvar-produto-adm.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Preço</label>
            <input type="text" name="preco" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success" value="Enviar">
            
        </div>

    </form>
               
            </div>
        </div>
    </div>

</body>








