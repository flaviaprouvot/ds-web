<?php
// Inicializa variáveis
$username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

// Verifica as credenciais
if ($username === "aluno" && $password === "sesi") {
    header("Location: acesso_liberado.php");
    exit();
} else {
    header("Location: acesso_negado.php");
    exit();
}
?>
