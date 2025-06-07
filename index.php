<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Sabium</title>
</head>

<body>

    <main>

        <div class="hero">

            <h1 id="typing" class="cursor"> </h1>

            <p>A <strong>Sabium</strong> é uma escola online fictícia desenvolvida como parte de um projeto educacional. Nosso objetivo é simular uma plataforma moderna de ensino, unindo tecnologia, organização e acessibilidade em um único ambiente virtual.</p>

            <a href="http://localhost/Sabium/login.php" target="_blank" rel="noopener noreferrer">Faça sua inscrição</a>

        </div>

    </main>

    <script>
        const texto = "Bem Vindo(a)!";
        const h1 = document.getElementById("typing");

        let i = 0;
        let escrevendo = true;

        function digitaTexto() {
            if (escrevendo) {
                if (i <= texto.length) {
                    h1.textContent = texto.substring(0, i);
                    i++;
                } else {
                    escrevendo = false;
                    setTimeout(digitaTexto, 1500); //tempo de espera
                    return;
                }
            } else {
                if (i >= 0) {
                    h1.textContent = texto.substring(0, i);
                    i--;
                } else {
                    escrevendo = true;
                }
            }
            setTimeout(digitaTexto, 100);
        }

        digitaTexto();
    </script>

</body>

</html>