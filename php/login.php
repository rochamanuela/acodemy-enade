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
