<?php 
session_start();
include("config.php");

if(isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM tabela_usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

}


if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM tabela_usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $usuario = mysqli_fetch_assoc($result);
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        $_SESSION['usuario_niveis_acesso'] = $usuario['niveis_acesso'];

        // Redireciona com base no ID do usuário
        if ($usuario['id'] == 1) {
            header('Location: ./adm/dash-adm.php');
        } else {
            header('Location: dash.php');
        }
        exit();
    } else {
        echo "Email ou senha inválidos.";
    }
}

?>



<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça Login!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/afs-logo-aside.png" type="image/x-icon">
</head>

<body bg-body-tertiary>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container mt-5">
        <div class="row aling-items-center">
            <div class="col-md-10 mx-auto col-lg-5 ">
            <p class="h2">Faça Login!</p>
            <form action="index.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Entrar</button>
            <p>Não tem uma conta? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="novo-usuario.php">Cadastre-se.</a> </p>
        </div>
   
    </form>
               
            </div>
        </div>
    </div>

    
</body>
</html>
<!-- 
<?php
    if(isset($_POSt['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];
    }

    $sql = "SELECT * FROM tabela_usuarios WHERE email = $email and senha = $senha"
?> -->
