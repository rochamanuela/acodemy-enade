<?php
    session_start();

    if (!isset($_SESSION['nome'])) {
        header("Location: ../html/login.html");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_home.css">
    <title>Home</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h2>
    <p>Seu conteúdo protegido está aqui.</p>
    

    <div>
        sidebar
        <a href="logout.php">Sair</a>
    </div>

    <div>
        ranking
    </div>

    <div>
        criar perguntas
    </div>

    <div>
        cadastrar alunos
    </div>
</body>
</html>
