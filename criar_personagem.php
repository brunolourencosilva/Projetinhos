<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Zona de Exclusão</title>

<link rel="stylesheet" href="public/css/estilo.css">

</head>

<body>

<div class="container-Personagem">

    <!-- Moldura decorativa -->
    <div class="moldura"></div>

    <main class="menu_personagem">

        <!-- Título -->
        <div class="titulo">
            <h1>Criação do Personagem</h1>
        </div>

        <!-- Caixa terminal -->
        <div class="caixa_menu_personagem">

            <form action="inicial.php" method="GET" id="formPersonagem">
                
                <div class="terminal-box">
                    <span class="cursor"></span>
                    <input class="terminal-input" type="text" name="personagem" placeholder="Nome do personagem" maxlength="20" required> 
                </div>
                 
                 <button id="btnComecar" type="submit">Entrar</button>
            </form>

        </div>

        <script src="public/js/main-menu/script.js"></script>

    </main>

</div>

</body>
</html>