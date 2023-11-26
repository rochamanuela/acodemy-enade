<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_login.css">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ($email === 'admin@gmail.com' && $senha === '12345') {
            session_start();
            $_SESSION['nome'] = 'admin';

            header("Location: inicial_adm.php");
            exit();
        }
    }
    ?>
    <a href="../index.html">
        <div class="logotipo">
            <p>a
            <div class="code">code</div>my</p>
        </div>
    </a>

    <main>
        <div class="container-main">
            <h1>Credenciais Inválidas</h1>
            <p>Usuário ou senha incorretas, volte e tente novamente.</p>
            <div class="btn-redirect">
                <a href="../html/login.html" class="btn-redirect">Tentar novamente</a>
            </div>
        </div>
    </main>
</body>
</html>
=======
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
>>>>>>> 52af20b5ab7bd01759cf3142700f9b64d17eb189
