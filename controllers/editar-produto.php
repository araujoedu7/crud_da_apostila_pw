<?php
if (!empty($_POST['editar'])) {
    if (!empty($_POST['nome']) && !empty($_POST['preco']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

        // Preparando a consulta SQL para evitar SQL injection
        $stmt = $conn->prepare("UPDATE produtos SET nome_produto = ?, preco_produto = ? WHERE id = ?");
        $stmt->bind_param("sdi", $nome, $preco, $id);

        // Executando a consulta e verificando se foi bem-sucedida
        if ($stmt->execute()) {
            header("Location: ../adm/dash-adm.php");
            exit(); // Garantir que o script pare após o redirecionamento
        } else {
            echo '<div class="container text-center alert alert-danger">Erro ao modificar produto</div>';
        }

        // Fechando o statement
        $stmt->close();
    } else {
        echo '<div class="container text-center alert alert-warning">Preencha todos os campos</div>';
    }
}
?>
