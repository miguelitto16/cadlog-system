<?php
    session_start();
 
    if(isset($_SESSION['perfil'])):
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/list.css"> <!-- Link para o arquivo CSS -->
</head>
 
<body class="<?= $_SESSION['perfil']?>"> <!-- Define a classe com base no perfil do usuário -->
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td><?php if($_SESSION['perfil']  == 'admin' || $_SESSION['perfil']  == 'gestor' ):?>
                        <a href="">Editar</a>
                        <?php endif; ?>
                        <?php if($_SESSION['perfil']  == 'admin'): ?>
                            <a href="">Excluir</a>
                            <?php endif; ?>


                    </td>
                </tr>
 
                
            </tbody>
        </table>
 
        <a href="" class="btn">Voltar ao Dashboard</a>
    </div>

    <style>
           body {
            background-color: black;
            color: #00FF00;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
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
        /* Estilo específico para os links de editar e excluir */
        .edit, .delete {
            color: #00FF00;
            text-decoration: none;
            border: none;
            padding: 5px;
            margin-right: 10px;
        }
        .edit:hover, .delete:hover {
            text-decoration: underline;
        }
        .container {
            text-align: left;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            margin: 0;
        }
    </style>
</body>
 
</html>
 
<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página. </p>
<?php endif; ?>
