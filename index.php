<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Zona de Exclusão</title>

<link rel="stylesheet" href="public/css/tela_main_menu.css">

</head>

<body>

<div class="container">

    <!-- Moldura decorativa -->
    <div class="moldura"></div>

    <main class="menu">

        <!-- Título -->
        <div class="titulo">
            <h1>Zona de Exclusão</h1>
            <p>Um RPG minimalista</p>
        </div>

        <!-- Caixa terminal -->
        <div class="menu-box">

            <!-- BOTÃO -->
            <div id="areaBotao">
                <button id="btnComecar" type="button">Começar Aventura</button>
            </div>

            <!-- FORM ESCONDIDO -->
            <form action="inicial.php" method="GET" id="formPersonagem" style="display:none;">

                <div class="terminal-box">

                    <span class="cursor"></span>

                    <input
                    class="terminal-input"
                    type="text"
                    name="personagem"
                    placeholder="Nome do personagem"
                    maxlength="20"
                    required
                    >

                </div>

                <button type="submit">Entrar</button>

            </form>

        </div>

        <script src="public/js/main-menu/script.js"></script>

    </main>

</div>

</body>
</html>