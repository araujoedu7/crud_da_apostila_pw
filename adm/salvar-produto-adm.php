<?php
 include("novo-usuario-adm.php");
 require_once ("../config.php");

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$preco =mysqli_real_escape_string($conn, $_POST['preco']);



$sql = "INSERT INTO produtos (nome_produto, preco_produto)
VALUES ('$nome', '$preco')";

if ($conn->query($sql) === TRUE) {

    echo "produto cadastrado";
    header("location:dash-adm.php");
} else {

    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
