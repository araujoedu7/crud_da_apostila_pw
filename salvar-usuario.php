<?php
// Inclui o arquivo de configuração que provavelmente contém a conexão com o banco de dados
include("config.php");

// Verifica se os campos 'nome', 'email' e 'senha' foram enviados via POST
if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
    
    // Escapa caracteres especiais em uma string para uso em uma consulta SQL, prevenindo SQL injection
    $nomeUser = mysqli_real_escape_string($conn, $_POST['nome']);
    $emailUser = mysqli_real_escape_string($conn, $_POST['email']);
    $senhaUser = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = $senhaUser; // Atribui a senha para a variável $senha
    $niveis_acesso = 2; // Define o nível de acesso como 2 (presumivelmente um nível padrão)

    // Monta a consulta SQL para inserir os dados na tabela 'tabela_usuarios'
    $sql = "INSERT INTO tabela_usuarios (nome, email, senha, niveis_acesso) VALUES ('$nomeUser', '$emailUser', '$senha', '$niveis_acesso')";
    
    // Executa a consulta SQL
    mysqli_query($conn, $sql);
    
    // Verifica se a consulta foi bem-sucedida
    if (isset($sql)) {
        // Se a consulta foi bem-sucedida, exibe uma animação de carregamento e redireciona para 'dash.php' após 2 segundos
        echo '<html>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <div class="justify-content-center spinner-border text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <script>
                setInterval(function() {
                    window.location.href = "dash.php";
                }, 2000);
                </script>
              </html>';
    } else {
        // Se a consulta falhou, exibe uma mensagem de erro e redireciona para 'index.php'
        echo "usuario nao cadastrado";
        header("location:index.php");
    }
}
?>
