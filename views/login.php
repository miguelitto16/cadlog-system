<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Login</title>
</head>
<body>
    <main>
        <form action="index.php?action=login" method="post">
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </section>
            <section>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </section>
            <button type="submit">Login</button>
        </form>
        <a href="index.php?action=register">Cadastre-se</a>
    </main>

<style>

/* Estilização global */
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Courier New', Courier, monospace; /* Fonte de terminal */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;     /* Fundo preto */
            color: #00FF00;              /* Texto verde de terminal */
        }

        /* Estilo principal */
        main {
            background-color: black;     /* Fundo preto para o formulário */
            padding: 20px;
            border: 1px solid #00FF00;   /* Borda verde */
            width: 100%;
            max-width: 400px;            /* Largura máxima */
            color: #00FF00;              /* Texto verde */
            text-align: center;           /* Centraliza o texto */
        }

        h2 {
            margin-bottom: 20px;
            color: #00FF00;
            font-size: 1.5rem;
        }

        /* Estilização dos formulários */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #00FF00;
            text-align: left;
        }

        input {
            background-color: black;     /* Fundo preto */
            color: #00FF00;              /* Texto verde */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #00FF00;   /* Borda verde */
            border-radius: 0;            /* Sem arredondamento */
            font-size: 1rem;
        }

        input:focus {
            border-color: #00FF00;       /* Borda verde ao focar */
            outline: none;
        }

        button {
            padding: 10px;
            background-color: black;     /* Fundo preto */
            color: #00FF00;              /* Texto verde */
            border: 1px solid #00FF00;   /* Borda verde */
            border-radius: 0;            /* Sem arredondamento */
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #00FF00;   /* Fundo verde no hover */
            color: black;                /* Texto preto no hover */
        }

        /* Links de navegação */
        a {
            display: block;
            margin-top: 10px;
            color: #00FF00;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Seções do formulário */
        section {
            margin-bottom: 15px;
            text-align: left;
        }

</style>

</body>
</html>