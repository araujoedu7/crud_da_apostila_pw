<?php

if (!empty($_POST['editar'])) {
    if (!empty($_POST['nome']) and !empty($_POST['email']) and !empty($_POST['senha']) and !empty($_GET['id'])) {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = $conn->query(" UPDATE tabela_usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id");
        if ($sql == 1) {
            header("Location:../adm/listar-usuario-adm.php");
        } else {
            echo '<div class="container text-center alert alert-danger">Erro ao modificar usuario</div>';
        }
        
    } else {
        echo '<div class="container text-center alert alert-warning">Preencha os campos</div>';
    }
}
