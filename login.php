<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Sabium - Login</title>
</head>

<body>

    <main>

        <form class="signin" action="" method="post">

            <h1>Entrar</h1>

            <label>

                Login
                <input type="text" name="usuario_login" id="usuario_login" required autocomplete="off">

            </label>

            <label>

                Senha
                <input type="password" name="usuario_senha" id="usuario_senha" required autocomplete="off">

            </label>

            <button type="submit">Entrar</button>

            <span onclick="mudar_form()">Criar uma conta</span>

        </form>


        <form class="signup" action="" method="post">

            <h1>Criar conta</h1>

            <label>

                Login
                <input type="text" name="usuario_login" id="usuario_login" required autocomplete="off">

            </label>

            <label>

                Senha
                <input type="password" name="usuario_senha" id="usuario_senha" required autocomplete="off">

            </label>

            <label>

                Celular
                <input type="tel" name="usuario_celular" id="usuario_celular" required autocomplete="off">

            </label>

            <button type="submit">Entrar</button>

            <span onclick="mudar_form()">Entrar em uma conta existente</span>

        </form>


    </main>


</body>

</html>