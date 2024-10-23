<!DOCTYPE html> 
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: black;
            color: #00FF00;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h1, p {
            color: #00FF00;
        }
        a.btn {
            color: #00FF00;
            text-decoration: none;
            border: 1px solid #00FF00;
            padding: 10px;
            display: inline-block;
            margin-top: 20px;
        }
        a.btn:hover {
            background-color: #00FF00;
            color: black;
        }
        .container {
            text-align: center;
        }
    </style>
</head>

<body class="<?=$_SESSION['perfil']?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, Usuario<body class="<?=$_SESSION['perfil']?>">!</h1>
        <p>Esta é a visão do perfil<body class="<?=$_SESSION['perfil']?>">.</p>
       
        <?php if ($_SESSION['perfil'] == 'admin'): ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif ($_SESSION['perfil'] == 'gestor'): ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
        <?php else: ?>    
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>
 
        <br><br><br><br>
        <!-- Link para logout -->
        <a href="" class="btn">Logout</a>
    </div>

</body>

</html>
