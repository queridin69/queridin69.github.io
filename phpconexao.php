php
<?php
$host = 'localhost';
$dbname = 'loja_roupas';
$username = 'root';
$password = '$Da21.07.2009';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>