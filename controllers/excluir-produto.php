
<?php
include("../config.php");
// Verifica se o ID foi passado como parâmetro na URL
if(isset($_GET['id'])) {
   
    
    // Remove caracteres especiais e evita injeção de SQL
    $id = $conn->real_escape_string($_GET['id']);
    
    // Query para deletar o usuário com o ID especificado
    $query = "DELETE FROM produtos WHERE id = $id";
    
    // Executa a consulta
    if($conn->query($query) === TRUE) {
        echo "Produto deletado com sucesso.";
        header("Location:../adm/dash-adm.php");
    } else {
        echo "Erro ao deletar produto: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "ID do produto não fornecido.";
}
?>
