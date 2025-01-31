php
<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    echo "Login realizado com sucesso!";
    // Iniciar sessão e redirecionar para a área do cliente
} else {
    echo "Email ou senha incorretos.";
}
?>


