<?php 
    session_start(); // Inicia uma nova sessão ou retoma uma sessão existente
    include('config.php'); // Inclui o arquivo de configuração que provavelmente contém a conexão com o banco de dados
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8"> <!-- Define o conjunto de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ajusta o viewport para responsividade -->
    <title>Faça seu Cadastro!</title> <!-- Título da página -->
    <link rel="shortcut icon" href="./assets/afs-logo-aside.png" type="image/x-icon"> <!-- Ícone da página -->
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body bg-body-tertiary>
    <!-- Link para o JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container mt-5"> <!-- Cria um container Bootstrap com margem superior -->
        <div class="row aling-items-center"> <!-- Cria uma linha Bootstrap para alinhamento dos itens -->
            <div class="col-md-10 mx-auto col-lg-5 "> <!-- Cria uma coluna Bootstrap centralizada com largura ajustada -->
                <p class="h2">Cadastre-se</p> <!-- Título da seção -->
                <form action="salvar-usuario.php" method="POST"> <!-- Formulário que envia dados para salvar-usuario.php via método POST -->
                    <input type="hidden" name="acao" value="cadastrar"> <!-- Campo oculto para indicar a ação de cadastro -->
                    <div class="mb-3"> <!-- Cria um grupo de formulário com margem inferior -->
                        <label>Nome</label> <!-- Rótulo para o campo de nome -->
                        <input type="text" name="nome" class="form-control"> <!-- Campo de texto para o nome -->
                    </div>
                    <div class="mb-3"> <!-- Cria um grupo de formulário com margem inferior -->
                        <label>E-mail</label> <!-- Rótulo para o campo de e-mail -->
                        <input type="email" name="email" class="form-control"> <!-- Campo de e-mail -->
                    </div>
                    <div class="mb-3"> <!-- Cria um grupo de formulário com margem inferior -->
                        <label>Senha</label> <!-- Rótulo para o campo de senha -->
                        <input type="password" name="senha" class="form-control"> <!-- Campo de senha -->
                    </div>
                    <div class="mb-3"> <!-- Cria um grupo de formulário com margem inferior -->
                        <input type="submit" class="btn btn-success" value="Enviar"> <!-- Botão de envio -->
                        <p>Já tem uma conta? <a class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="index.php">Entrar</a> </p> <!-- Link para a página de login -->
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

<?php
// Aqui poderia haver mais código PHP, se necessário
?>
