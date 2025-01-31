php
<?php
session_start();

include 'conexao.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cartao = $_POST['cartao'];
$validade = $_POST['validade'];
$cvv = $_POST['cvv'];

// Aqui você pode adicionar a lógica para processar o pagamento e registrar a compra no banco de dados

echo "Compra finalizada com sucesso!";
?>


