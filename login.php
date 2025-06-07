<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sabium - Login</title>
</head>
<body>

    <div class="signin">

        <form action="" method="post">

            <h1>SignIn</h1>

            <label>

                Login
                <input type="text" name="usuario_login" id="usuario_login" required autocomplete="off">

            </label>

            <label>

                Senha
                <input type="password" name="usuario_senha" id="usuario_senha" required autocomplete="off">

            </label>

            <button type="submit">Entrar</button>

        </form>

        <span onclick="mudar_form()">Criar conta</span>

    </div>

    <div class="signup">

        <form action="" method="post">

            <h1>SignUp</h1>

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

        </form>

        <span onclick="mudar_form()">Logar</span>

    </div>
    
</body>
</html>