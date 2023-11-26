<?php
// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar se o usuário e senha estão corretos (exemplo simples)
    // Aqui, você normalmente faria uma verificação com um banco de dados
    // Para este exemplo, usuário: 'admin' e senha: 'password' são válidos
    if ($username === 'admin' && $password === 'password') {
        // Iniciar a sessão (se ainda não estiver iniciada)
        session_start();
        
        // Armazenar dados do usuário na sessão (pode ser mais elaborado)
        $_SESSION['username'] = $username;

        // Redirecionar para a página de boas-vindas após login bem-sucedido
        header("Location: pagina_bem_vindo.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.";
    }
}
?>
